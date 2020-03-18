@extends('admin.admin_master')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Portfolio</h1>
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
                                    
                                   
                                     {!! Form::open(['url' => '/update-portfolio','role'=>'form','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_portfolio']) !!}
                                       @csrf
                                        
                                        <div class="form-group">
                                            <label>Portfolio title</label>
                                            <input class="form-control" placeholder="Enter text" name="portfolio_title" value="{{$portfolio_info->portfolio_title}}" required="">
                                            <input class="form-control" placeholder="Enter text" name="portfolio_id" value="{{$portfolio_info->portfolio_id }}" type="hidden" required="">
                                        </div>
                                        
                                       
                                       
                                        <div class="form-group">
                                            <label>Portfolio Image</label>
                                            <input type="file" name="img"><span><img src="{{asset($portfolio_info->img)}}" width="50" height="50"></span>
                                             <input type="hidden" name="old_img" value="{{$portfolio_info->img}}">
                                        </div>
                                         <div class="form-group">
                                             <?php 
                                                $category_info = DB::table('tbl_category')
                                                                     ->where('publication_status',1)
                                                                     ->get();

                                             ?>
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
         <script type="text/javascript">

                document.forms['edit_portfolio'].elements['publication_status'].value='<?php echo $portfolio_info->publication_status ?>';
                document.forms['edit_portfolio'].elements['category_id'].value='<?php echo $portfolio_info->category_id ?>';
               
               
            </script>
@endsection

