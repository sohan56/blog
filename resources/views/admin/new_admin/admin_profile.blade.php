@extends('admin.admin_master')
@section('content')

 <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Profile</h1>
                </div>
                 <!-- end  page header -->
            </div>
            
           
            
          
               
              
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                       
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><img src="{{ asset(session('admin_img')) }}" width="100" height="100" alt=""></th>
                                            <th></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>Name:</td>
                                            <td><?php echo Session::get('admin_name');?></td>
                                            
                                        </tr>
                                        <tr class="info">
                                            <td>Email:</td>
                                            <td><?php echo Session::get('admin_email');?></td>
                                            
                                        </tr>
                                        <tr class="warning">
                                            <td>Access label</td>
                                            <td><?php echo Session::get('access_label');?></td>
                                           
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
               
          
        </div>
@endsection