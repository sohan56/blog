<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller
{
     public function add_skill()
    {
    	return view('admin.skill.add_skill');
    }
    public function save_skill(Request $request)
    {
    	
    	$data = array();
    	$data['skill_title'] = $request->skill_title;
    	$data['skill_description'] = $request->skill_description;
    	$data['publication_status'] = $request->publication_status;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_skill')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-skill');
    	 
    }
     public function manage_skill()
    {
        $all_skill = DB::table('tbl_skill')
                         ->get();
        return view('admin.skill.manage_skill')
                         ->with('all_skill',$all_skill);

    }
     public function unpublish_skill($skill_id)
    {
        DB::table('tbl_skill')
             ->where('skill_id',$skill_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-skill');
       

    }
    public function publish_skill($skill_id)
    {
        DB::table('tbl_skill')
             ->where('skill_id',$skill_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-skill');
       

    }
    public function delete_skill($skill_id)
    {
        DB::table('tbl_skill')
             ->where('skill_id',$skill_id)
             ->delete();
              return Redirect::to('/manage-skill');
    }
     public function edit_skill($skill_id)
    {
       $skill_info = DB::table('tbl_skill')
             ->where('skill_id',$skill_id)
             ->first();
              return view('admin.skill.edit_skill')
                         ->with('skill_info', $skill_info);
    }
     public function update_skill(Request $request)
    {
        $data = array();
        $skill_id=$request->skill_id;
        $data['skill_title'] = $request->skill_title;
        $data['skill_description'] = $request->skill_description;
         $data['publication_status'] = $request->publication_status;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_skill')
                  ->where('skill_id',$skill_id)
                  ->update($data);

        return Redirect::to('/manage-skill');

    }
}
