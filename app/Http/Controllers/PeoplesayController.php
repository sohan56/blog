<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File\File;
session_start();

class PeoplesayController extends Controller
{
    public function add_peoplesay()
    {
    	return view('admin.people_say.add_peoplesay');
    }
     public function save_peoplesay(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
        

        $data = array();
        $data['people_name'] = $request->people_name;
        $data['people_say'] = $request->people_say;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/peoplesay_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/peoplesay_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['img'] = $image_url;
            DB::table('tbl_peoplesay')
                  ->insert($data);
        

        }
      
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-peoplesay');
 
      
    }
     public function manage_peoplesay()
    {
        $all_peoplesay = DB::table('tbl_peoplesay')
                         ->get();
        return view('admin.people_say.manage_peoplesay')
                         ->with('all_peoplesay',$all_peoplesay);
        

    }
    public function unpublish_peoplesay($id)
    {
        DB::table('tbl_peoplesay')
             ->where('id',$id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-peoplesay');
       

    }
    public function publish_peoplesay($id)
    {
        DB::table('tbl_peoplesay')
             ->where('id',$id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-peoplesay');
       

    }
    public function delete_peoplesay($id)
    {
        DB::table('tbl_peoplesay')
             ->where('id',$id)
             ->delete();
              return Redirect::to('/manage-peoplesay');
    }

    public function edit_peoplesay($id)
    {
       $peoplesay_info = DB::table('tbl_peoplesay')
             ->where('id',$id)
             ->first();
              return view('admin.people_say.edit_peoplesay')
                         ->with('peoplesay_info', $peoplesay_info);
    }
     public function update_peoplesay(Request $request)
    {
        $data = array();
        $id=$request->id;
        $data['people_name'] = $request->people_name;
        $data['people_say'] = $request->people_say;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['img'] = $request->old_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/peoplesay_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/peoplesay_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['img'] = $image_url;
            DB::table('tbl_peoplesay')
                  ->where('id',id)
                  ->update($data);
                  unlink($request->old_img);
                  return Redirect::to('/manage-peoplesay');
        }
      }
      else{
        DB::table('tbl_peoplesay')
                  ->where('id',$id)
                  ->update($data);

        
        return Redirect::to('/manage-peoplesay');

        }
          
    }

}
