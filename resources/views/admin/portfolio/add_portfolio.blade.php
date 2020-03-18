@extends('admin.admin_master')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Portfolio</h1>
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
                                   
                                     {!! Form::open(['url' => '/save-portfolio','role'=>'form','method'=>'post','enctype'=>'multipart/form-data']) !!}
                                       @csrf
                                        
                                        <div class="form-group">
                                            <label>Portfolio title</label>
                                            <input class="form-control" placeholder="Enter text" name="portfolio_title" required="">
                                        </div>
                                        
                                       
                                       
                                        <div class="form-group">
                                            <label>Portfolio Image</label>
                                            <input type="file" name="img" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Category</label>
                                         <select class="form-control"  style="" name="category_id" required="">
                                            
                                            <option value="">Select Category</option>
                                            @foreach($category_info as $v_category)
                                            <option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
                                            
                                            @endforeach
                                           
                                            
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

