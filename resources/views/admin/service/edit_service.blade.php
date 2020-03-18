@extends('admin.admin_master')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit service</h1>
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
                                    
                                   
                                     {!! Form::open(['url' => '/update-service','role'=>'form','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_service']) !!}
                                       @csrf

                                       
                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter text" name="service_name" value="{{$service_info->service_name }}" required="">
                                            <input class="form-control" placeholder="Enter text" name="service_id" value="{{$service_info->service_id }}" type="hidden" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Service description</label>
                                             <textarea class="form-control " id="" name="service_description" type="text">{{$service_info->service_description }}</textarea>
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

                document.forms['edit_service'].elements['publication_status'].value='<?php echo $service_info->publication_status ?>';
               
               
            </script>
@endsection

