@extends('admin.admin_master')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add People say</h1>
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
                                   
                                     {!! Form::open(['url' => '/save-peoplesay','role'=>'form','method'=>'post','enctype'=>'multipart/form-data']) !!}
                                       @csrf
                                        
                                        <div class="form-group">
                                            <label>People name</label>
                                            <input class="form-control" placeholder="Enter text" name="people_name" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>People say</label>
                                             <textarea class="form-control " id="" name="people_say" type="text"></textarea>
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="img" required="">
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

