<body class="fix-header fix-sidebar card-no-border">
<div class="preloader" style="opacity: 0.5;">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>

<!--========= AJAX load overlay =========== -->
<div style="width: 100%; height:100%; background-color: white; position: fixed; top:0; left:0; z-index: 1000; opacity:0.3; display: none;" id="DivOverlay">
</div>
<!-----===================================----->

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <!-- Logo icon -->
                    <b>
                        <!-- Dark Logo icon -->
                        <img src="{{asset('/backend/img/logo.png')}}" alt="school-page" class="dark-logo logo" height="60" width="60" />
                        <!-- Light Logo icon -->
                        <img src="{{asset('/backend/img/logo.png')}}" alt="homepage" class="light-logo logo" height="60" width="60" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="short_name" style="color: #FFF">Jusek</span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================== ================================ -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
              
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                            <div class="notify"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox scale-up" id="n-center"></div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('/backend/img/logo.png')}}" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img">
                                            <img src="" alt="user">
                                        </div>
                                        <div class="u-text">
                                            <h4 class="user-full-name"></h4>
                                            <p class="text-muted user-email"></p><a href="" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a class="waves-effect waves-dark" href=""><i class="ti-wallet"></i> My Activity Log</a></li>
                                <li><a class="waves-effect waves-dark" href=""><i class="ti-key"></i> Change Password</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="waves-effect waves-dark" href=""><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="_scroll-sidebar" style="overflow: scroll; width: auto; height: 100%;">
            <!-- User profile -->
            <div class="user-profile" style="background: url('{{asset('/backend/images/big/img1.jpg')}}') no-repeat;">
                <!-- User profile image -->
                <div class="profile-img"> <img src="{{asset('/backend/img/logo.png')}}" alt="user" /> </div>
                <!-- User profile text-->
                <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown user-full-name" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"></a>
                    <div class="dropdown-menu animated flipInY">
                        <a href="" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <a href="" class="dropdown-item"><i class="ti-wallet"></i> My Activity Log</a>
                        <div class="dropdown-divider"></div> <a href="" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>
            </div>
            <!-- End User profile text-->
            
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li>
                        <a href="" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                            <span class="hide-menu">Dashboard</span></a>
                    </li>
                 
                    <li class="nav-devider"></li>
                    <li class="nav-small-cap">ADMINISTRATIVE TASK</li>
    
    
                    
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-soccer"></i><span class="hide-menu">Sport House</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a class="waves-effect waves-dark" href="" title="Add, Edit or Delete Sport Houses" data-toggle="tooltip">Manage Sport Houses</a></li>
                            <li><a class="waves-effect waves-dark" href="" title="Manage house masters/mistresses" data-toggle="tooltip">Sport House Heads</a></li>
                        </ul>
                    </li>
                  
                    
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Configuration</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a class="waves-effect waves-dark" href="" title="Add, Edit or Delete Grades" data-toggle="tooltip">School Grades</a></li>
                       </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <div class="page-wrapper">