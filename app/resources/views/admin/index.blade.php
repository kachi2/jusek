
@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="fa fa-users"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light"></h3>
                            <h5 class="text-muted m-b-0">Total Students</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
    
        <!-- Column -->
        <!-- Column -->
      
        <!-- Column -->
        <!-- Column -->
      
        <!-- Column -->
    </div>
    
    <!-- Row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block">
                        <h4 class="card-title">Class Statistics</h4>
                    </div>
                    <div class="table-responsive m-t-20">
                        <table class="table stylish-table color-table table-bordered success-table" style="min-width: 400px">
                            <thead>
                            <tr>
                                <th class="center">Class</th>
                                <th class="center">Students</th>
                                <th class="center" colspan="2">Student Bio Data completion rate</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Class Average Performance Analytics</h4>
                    <div class="form-group col-md-6">
                    
                    </div>
                    <div id="class-analytics">
                        <canvas id="chart1" height="150"></canvas>
                    </div>
                    <p class="pull-right"><a href="javascript: void()" class="btn btn-outline-success btn-sm btn-rounded waves-effect waves-light">See more...</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Portal Users</h3>
                    <h6 class="card-subtitle">Users currently registered to this portal</h6>
                    <div id="visitor" style="height:260px; width:100%;"></div>
                </div>
                <div>
                    <hr class="m-t-0 m-b-0">
                </div>
                <div class="card-body text-center ">
                    <ul class="list-inline m-b-0">
                        <li>
                            <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Students</h6>
                        </li>
                        <li>
                            <h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Staff</h6>
                        </li>
                        <li>
                            <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Parents</h6>
                        </li>
                        <li>
                            <h6 class="text-muted  text-success" style="color: #755bf2 !important;"><i class="fa fa-circle font-10 m-r-10" ></i>Administrators</h6>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body bg-info">
                    <h4 class="text-white card-title">Online Users</h4>
                    <h6 class="card-subtitle text-white m-b-0 op-5">See administrators currently online</h6>
                </div>
                <div class="card-body">
                    <div class="message-box contact-box">
                        <div class="message-widget contact-widget">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Row -->
    
    <!-- Row -->
    <div class="row">

    
    </div>
  

    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection