@extends('admin.admin_master')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Admin</h1>
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
                                    
                                   
                                     {!! Form::open(['url' => '/update-admin','role'=>'form','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_admin']) !!}
                                       @csrf

                                       
                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter text" name="admin_name" value="{{$admin_info->admin_name }}" required="">
                                            <input class="form-control" placeholder="Enter text" name="admin_id" value="{{$admin_info->admin_id }}" type="hidden" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter email" type="Email" name="admin_email" value="{{$admin_info->admin_email}}" required="">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="admin_img"><span><img src="{{asset($admin_info->admin_img)}}" width="50" height="50"></span>
                                            <input type="hidden" name="admin_old_img" value="{{$admin_info->admin_img}}">
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Enter Password" type="Password" name="Admin_password" value="{{$admin_info->Admin_password }}" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Access Label</label>
                                            <select class="form-control"  style="" name="access_label"  required="">
                                            
                                                <option value="">Select Label</option>
                                                <option value="1">1</option>
                                                <option value="0">0</option>
                                            
                                            </select>
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

                document.forms['edit_admin'].elements['publication_status'].value='<?php echo $admin_info->publication_status ?>';
                document.forms['edit_admin'].elements['access_label'].value='<?php echo $admin_info->access_label ?>';
               
            </script>
@endsection

