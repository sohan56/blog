<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File\File;
session_start();

class SuperadminController extends Controller
{
    public function index()
    {
        $this->authCheck();
    	return view('admin.pages.deshboard');
    	
    	//function for Super Admin

    }

     public function logout()
    {
        Session::put('admin_name','');
        Session::put('admin_id','');
        Session::put('message','You are successfully Logout !');
        return Redirect::to('/admin');
        
        //function for  Admin logout

    }
    public function authCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id ==NULL)
         {
             return Redirect::to('/admin')->send();
        }
    }

     public function add_admin()
    {
    	return view('admin.new_admin.add_admin');
    }

     public function save_admin(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
        

        $data = array();
        $data['admin_name'] = $request->admin_name;
        $data['admin_email'] = $request->admin_email;
        $data['Admin_password'] = $request->Admin_password;
        $data['access_label'] = $request->access_label;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('admin_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/admin_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/admin_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['admin_img'] = $image_url;
            DB::table('tbl_admin')
                  ->insert($data);
        

        }
      
        Session::put('message','Save new admin information successfully !');
        return Redirect::to('/add-admin');
 
      
    }

     public function manage_admin()
    {
        $all_admin = DB::table('tbl_admin')
                         ->get();
        return view('admin.new_admin.manage_admin')
                         ->with('all_admin',$all_admin);

    }
     public function unpublish_admin($admin_id)
    {
        DB::table('tbl_admin')
             ->where('admin_id',$admin_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-admin');
       

    }
    public function publish_admin($admin_id)
    {
        DB::table('tbl_admin')
             ->where('admin_id',$admin_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-admin');
       

    }
    public function delete_admin($admin_id)
    {
        DB::table('tbl_admin')
             ->where('admin_id',$admin_id)
             ->delete();
              return Redirect::to('/manage-admin');
    }

    public function edit_admin($admin_id)
    {
       $admin_info = DB::table('tbl_admin')
             ->where('admin_id',$admin_id)
             ->first();
              return view('admin.new_admin.edit_admin')
                         ->with('admin_info', $admin_info);
    }
     public function update_admin(Request $request)
    {
        $data = array();
        $admin_id=$request->admin_id;
        $data['admin_name'] = $request->admin_name;
        $data['admin_email'] = $request->admin_email;
        $data['Admin_password'] = $request->Admin_password;
        $data['access_label'] = $request->access_label;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('admin_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['admin_img'] = $request->admin_old_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/admin_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/admin_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['admin_img'] = $image_url;
            DB::table('tbl_admin')
                  ->where('admin_id',$admin_id)
                  ->update($data);
                  unlink($request->admin_old_img);
                  return Redirect::to('/manage-admin');
        }
      }
      else{
        DB::table('tbl_admin')
                  ->where('admin_id',$admin_id)
                  ->update($data);

        
        return Redirect::to('/manage-admin');

        }
          
    }

    public function admin_profile()
    {
      return view('admin.new_admin.admin_profile');
    }
    

   
}
