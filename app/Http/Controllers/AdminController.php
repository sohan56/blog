<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File\File;
session_start();

class AdminController extends Controller
{
     public function __construct()
   {

   }
    public function index()
    {
          $this->authCheck();
        return view('admin.admin_login');
    }

    public function adminLoginCheck(Request $request)
    {
       
        $email_address = $request->email_address;
        $password = $request->password;

       $result = DB::table('tbl_admin')
                ->select('*')
                ->where('admin_email',$email_address)
                ->where('admin_password',$password)
                ->first();

               if ($result) {

                    Session::put('admin_id',$result->admin_id);
                    Session::put('admin_name',$result->admin_name);
                    Session::put('admin_email',$result->admin_email);
                    Session::put('admin_img',$result->admin_img);
                    Session::put('access_label',$result->access_label);
                    return Redirect::to('/deshboard');
                }
                else{

                    Session::put('exception','Your User Email Or Password Invalide !');
                    return Redirect::to('/admin');
                }

             /*   echo '<pre>';
                print_r($result);*/

                //data dekhar jonno use kora hoi
                
  }

     public function authCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id !=NULL)
         {
             return Redirect::to('/deshboard')->send();
        }
    }
   

    
}
