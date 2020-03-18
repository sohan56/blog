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
                                    
                                   
                                     {!! Form::open(['url' => '/update-category','role'=>'form','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_category']) !!}
                                       @csrf

                                       
                                        
                                        <div class="form-group">
                                            <label>Category name</label>
                                            <input class="form-control" placeholder="Enter text" name="category_name" value="{{$category_info->category_name }}" required="">
                                            <input class="form-control"  name="category_id" value="{{$category_info->category_id }}" type="hidden" >
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

                document.forms['edit_category'].elements['publication_status'].value='<?php echo $category_info->publication_status ?>';
               
               
            </script>
@endsection

