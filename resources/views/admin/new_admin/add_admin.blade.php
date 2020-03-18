@extends('admin.admin_master')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Admin</h1>
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
                                     <h3 style="color: green">
                                     <?php
                                     $message=Session::get('message');
                                     if ($message)
                                      {
                                        echo $message;
                                        Session::put('message','');
                                     }



                                     ?>
                                     </h3>
                                   
                                     {!! Form::open(['url' => '/save-admin','role'=>'form','method'=>'post','enctype'=>'multipart/form-data']) !!}
                                       @csrf
                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter text" name="admin_name" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter email" type="Email" name="admin_email" required="">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="admin_img" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Enter Password" type="Password" name="Admin_password" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Acccess Label</label>
                                            <select class="form-control"  style="" name="access_label" required="">
                                            
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
@endsection

