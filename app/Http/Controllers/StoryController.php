<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class StoryController extends Controller
{
     public function add_story()
    {
    	return view('admin.story.add_story');
    }
     public function save_story(Request $request)
    {
    	
    	$data = array();
    	$data['story_title'] = $request->story_title;
    	$data['story_short_description'] = $request->story_short_description;
    	$data['story_long_description'] = $request->story_long_description;
    	$data['year'] = $request->year;
    	$data['publication_status'] = $request->publication_status;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_story')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-story');
    	 
    }
     public function manage_story()
    {
        $all_story = DB::table('tbl_story')
                         ->get();
        return view('admin.story.manage_story')
                         ->with('all_story',$all_story);

    }
     public function unpublish_story($story_id)
    {
        DB::table('tbl_story')
             ->where('story_id',$story_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-story');
       

    }
    public function publish_story($story_id)
    {
        DB::table('tbl_story')
             ->where('story_id',$story_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-story');
       

    }
    public function delete_story($story_id)
    {
        DB::table('tbl_story')
             ->where('story_id',$story_id)
             ->delete();
              return Redirect::to('/manage-story');
    }
    public function edit_story($story_id)
    {
       $story_info = DB::table('tbl_story')
             ->where('story_id',$story_id)
             ->first();
              return view('admin.story.edit_story')
                         ->with('story_info', $story_info);
    }
     public function update_story(Request $request)
    {
        $data = array();
        $story_id=$request->story_id;
        $data['story_title'] = $request->story_title;
    	$data['story_short_description'] = $request->story_short_description;
    	$data['story_long_description'] = $request->story_long_description;
    	$data['year'] = $request->year;
    	$data['publication_status'] = $request->publication_status;
    	$data['created_at'] = Carbon::now();
        DB::table('tbl_story')
                  ->where('story_id',$story_id)
                  ->update($data);

        return Redirect::to('/manage-story');

    }
}
