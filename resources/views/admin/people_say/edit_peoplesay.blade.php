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
                                     
                                   
                                     {!! Form::open(['url' => '/update-peoplesay','role'=>'form','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_peoplesay']) !!}
                                       @csrf
                                        
                                        <div class="form-group">
                                            <label>People name</label>
                                            <input class="form-control" placeholder="Enter text" name="people_name" value="{{$peoplesay_info->people_name }}" required="">
                                             <input class="form-control" placeholder="Enter text" name="id" value="{{$peoplesay_info->id }}" type="hidden" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>People say</label>
                                             <textarea class="form-control " id="" name="people_say" type="text">{{$peoplesay_info->people_say }}</textarea>
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="img"><span><img src="{{asset($peoplesay_info->img)}}" width="50" height="50"></span>
                                             <input type="hidden" name="old_img" value="{{$peoplesay_info->img}}">
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

                document.forms['edit_peoplesay'].elements['publication_status'].value='<?php echo $peoplesay_info->publication_status ?>';
               
               
            </script>
@endsection

