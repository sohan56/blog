<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function add_category()
    {
    	return view('admin.category.add_category');
    	
    }
     public function save_category(Request $request)
    {

    	$data = array();
    	$data['category_name'] = $request->category_name;
    	$data['publication_status'] = $request->publication_status;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_category')
                  ->insert($data);
        Session::put('message','Save category information successfully !');
        return Redirect::to('/add-category');
    }

    public function manage_category()
    {
        $all_category = DB::table('tbl_category')
                         ->get();
        return view('admin.category.manage_category')
                         ->with('all_category',$all_category);
        

    }
     public function unpublish_category($category_id)
    {
        DB::table('tbl_category')
             ->where('category_id',$category_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-category');
       

    }
    public function publish_category($category_id)
    {
        DB::table('tbl_category')
             ->where('category_id',$category_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-category');
       

    }
    public function delete_category($category_id)
    {
        DB::table('tbl_category')
             ->where('category_id',$category_id)
             ->delete();
              return Redirect::to('/manage-category');
       

    }
    public function edit_category($category_id)
    {
       $category_info = DB::table('tbl_category')
             ->where('category_id',$category_id)
             ->first();
              return view('admin.category.edit_category')
                         ->with('category_info', $category_info);
    }
     public function update_category(Request $request)
    {
        $data = array();
        $category_id=$request->category_id;
        $data['category_name'] = $request->category_name;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_category')
                  ->where('category_id',$category_id)
                  ->update($data);

        return Redirect::to('/manage-category');

    }
}
