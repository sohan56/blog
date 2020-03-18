@extends('admin.admin_master')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit about</h1>
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
                                    
                                   
                                     {!! Form::open(['url' => '/update-about','role'=>'form','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_about']) !!}
                                       @csrf

                                       
                                        
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <input class="form-control" placeholder="Enter text" name="about_short_description" value="{{$about_info->about_short_description }}" required="">
                                            <input class="form-control" placeholder="Enter text" name="about_id" value="{{$about_info->about_id }}" type="hidden" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Long Description</label>
                                             <textarea class="form-control " id="" name="about_long_description" type="text">{{$about_info->about_long_description }}</textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Upload Cv</label>
                                            <input type="file" name="cv" value="$about_info->cv">
                                            <input type="hidden" name="old_cv" value="$about_info->cv">
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

                document.forms['edit_about'].elements['publication_status'].value='<?php echo $about_info->publication_status ?>';
               
               
            </script>
@endsection

