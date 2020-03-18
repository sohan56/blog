@extends('admin.admin_master')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit skill</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                   
                                     {!! Form::open(['url' => '/update-skill','role'=>'form','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_skill']) !!}
                                       @csrf

                                       
                                        
                                        <div class="form-group">
                                            <label>Skill title</label>
                                            <input class="form-control" placeholder="Enter text" name="skill_title" value="{{$skill_info->skill_title }}" required="">
                                            <input class="form-control" placeholder="Enter text" name="skill_id" value="{{$skill_info->skill_id }}" type="hidden" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Skill description</label>
                                             <textarea class="form-control " id="" name="skill_description" type="text">{{$skill_info->skill_description }}</textarea>
                                        </div>

                                         <div class="form-group">
                                            <label>Publication Status</label>
                                         <select class="form-control"  style="" name="publication_status" required="">
                                            
                                            <option value="">Select Status</option>
                                            <option value="1">publish</option>
                                            <option value="0">Unpublish</option>
                                            
                                        </select>
                                        </div>
                                       
                                       
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-success">Reset </button>
                                   {!! Form::close() !!}
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
         <script type="text/javascript">

                document.forms['edit_skill'].elements['publication_status'].value='<?php echo $skill_info->publication_status ?>';
               
               
            </script>
@endsection

