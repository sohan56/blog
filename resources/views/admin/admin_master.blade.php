<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboad </title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('public/admin/')}}/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{asset('public/admin/')}}/assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />


    <script type="text/javascript">
    function checkDelete()
    {

      chk = confirm ("Are You sure to Delete This??");
      if(chk)
      {
        return true;

      }else{
        return false;
      }
    }
     
   </script>
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                   <!--  <img src="{{asset('public/admin/')}}/assets/img/logo.png" alt="" /> -->
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                     <?php 
                                    $all_publish_message = DB::table('tbl_message')
                                                          ->orderBy('id','desc')
                                                         ->limit(5)
                                                         ->get();

                      ?>

                    <ul class="dropdown-menu dropdown-messages">
                        
                                @foreach($all_publish_message as $v_message)
                        <li>
                            
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">{{$v_message->name}}</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>{{$v_message->created_at}}</em>
                                    </span>
                                </div>
                                <div>{{$v_message->message}}</div>
                            </a>
                           
                        </li>
                         @endforeach
                        <li class="divider"></li>
                        
                       
                       
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

               

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{URL::to('/admin-profile')}}"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{URL::to('/logout')}}"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="{{ asset(session('admin_img')) }}" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong><?php echo Session::get('admin_name');?></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="{{URL::to('/deshboard')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/add-admin')}}">Add admin</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/manage-admin')}}">Manage admin</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>About Me<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/add-about')}}">Add about</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/manage-about')}}">Manage about</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>My Service<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/add-service')}}">Add Service</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/manage-service')}}">Manage Service</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Skil<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/add-skill')}}">Add Skil</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/manage-skill')}}">Manage Skil</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Story<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/add-story')}}">Add Story</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/manage-story')}}">Manage Story</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/add-category')}}">Add Category</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/manage-category')}}">Manage Category</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Portfolio<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/add-portfolio')}}">Add Portfolio</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/manage-portfolio')}}">Manage Protfolio</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>people say<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/add-peoplesay')}}">Add people say</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/manage-peoplesay')}}">Manage people say</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                    
                    
                   
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
  @yield('content')
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{asset('public/admin/')}}/assets/plugins/jquery-1.10.2.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/pace/pace.js"></script>
    <script src="{{asset('public/admin/')}}/assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{asset('public/admin/')}}/assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/morris/morris.js"></script>
    <script src="{{asset('public/admin/')}}/assets/scripts/dashboard-demo.js"></script>

</body>

</html>
