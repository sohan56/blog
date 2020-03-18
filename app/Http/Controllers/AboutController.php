<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
     public function add_about()
    {
    	return view('admin.about_me.add_about');
    }
     public function save_about(Request $request)
    {
    	
    	$data = array();
        $data['about_short_description'] = $request->about_short_description;
        $data['about_long_description'] = $request->about_long_description;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('cv'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/cv/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/cv'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['cv'] = $image_url;
            DB::table('tbl_about')
                  ->insert($data);
        

        }
      
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-about');
    	 
    }
    public function manage_about()
    {
        $all_about = DB::table('tbl_about')
                         ->get();
        return view('admin.about_me.manage_about')
                         ->with('all_about',$all_about);

    }
     public function unpublish_about($about_id)
    {
        DB::table('tbl_about')
             ->where('about_id',$about_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-about');
       

    }
    public function publish_about($about_id)
    {
        DB::table('tbl_about')
             ->where('about_id',$about_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-about');
       

    }
    public function delete_about($about_id)
    {
        DB::table('tbl_about')
             ->where('about_id',$about_id)
             ->delete();
              return Redirect::to('/manage-about');
    }
     public function edit_about($about_id)
    {
       $about_info = DB::table('tbl_about')
             ->where('about_id',$about_id)
             ->first();
              return view('admin.about_me.edit_about')
                         ->with('about_info', $about_info);
    }
     public function update_about(Request $request)
    {
        $data = array();
        $about_id=$request->about_id;
        $data['about_short_description'] = $request->about_short_description;
        $data['about_long_description'] = $request->about_long_description;
       
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('cv'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['cv'] = $request->old_cv;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/cv/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/cv'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['cv'] = $image_url;
            DB::table('tbl_about')
                  ->where('about_id',$about_id)
                  ->update($data);
                  unlink($request->old_cv);
                  return Redirect::to('/manage-about');
        }
      }
      else{
        DB::table('tbl_about')
                  ->where('about_id',$about_id)
                  ->update($data);

        
        return Redirect::to('/manage-about');

        }
          
    }
    public function download_cv()
    {
        
    }

}
