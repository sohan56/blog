@extends('admin.admin_master')
@section('content')

        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Manage story</h1>
                </div>
                 <!-- end  page header -->
            </div>
           
            <div class="row">
                
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Story title</th>
                                            <th>Story description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 @foreach($all_story as $v_story)
                                        <tr>
                                            
                                            <td>{{$v_story->story_title}}</td>
                                            <td>{{$v_story->story_short_description}}</td>
                                            <td class=" ">
                                             @if($v_story->publication_status==1)
                                             Publish
                                             @else
                                             Unpublish
                                             @endif
                                         </td>
                                         <td >
                                            @if($v_story->publication_status==1)
                                            <a href="{{URL::to('/unpublish-story',$v_story->story_id)}}" class="btn btn-danger">Unpublish<i class=""></i></a>
                                            @else
                                            <a href="{{URL::to('/publish-story',$v_story->story_id)}}" class="btn btn-success"><i class="">Publish</i></a>
                                            @endif
                                            <a href="{{URL::to('/edit-story',$v_story->story_id)}}" class="btn btn-primary"><i class="">Edit</i></a>
                                            
                                            <a href="{{URL::to('/delete-story',$v_story->story_id)}}" class="btn btn-danger" onclick="return checkDelete()">Delate<i class=""></i></a>
                                            

                                         </td>
                                            
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
              

            </div>
           
        </div>

@endsection