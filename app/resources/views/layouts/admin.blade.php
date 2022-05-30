<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Juseks Nursery, Primary and Secondary Schools">
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/backend/img/')}}">
    <title> - Jusek Schools</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- chartist CSS -->
    <link href="{{asset('/backend/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/plugins/css-chart/css-chart.css')}}" rel="stylesheet">
    
    <!--This page css - Morris CSS -->
    <link href="{{asset('/backend/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    
    <link href="{{asset('/backend/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">

    <link href="{{asset('/backend/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/backend/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="{{asset('/backend/css/style.css')}}" rel="stylesheet">
    
    <link href="{{asset('/backend/css/colors/blue.css')}}" rel="stylesheet">

    <script src="{{asset('/backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('/backend/plugins/popper/popper.min.js')}}"></script>
    <script src="{{asset('/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- ============= Sweet Alert =================== -->
    <script src="{{asset('/backend/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <!-- Portal js -->
    <script src="{{asset('/backend/js/portal-01.js')}}"></script>

    <!-- Bootstrap responsive table CSS -->
    <link href="{{asset('/backend/plugins/tablesaw-master/dist/tablesaw.css')}}" rel="stylesheet">

    <script>
        //Global variables
        var site_url = '<?= site_url() ?>';
        var base_url = '{{asset('')}}}';

        $(document).on('click', '.sidebartoggler', function(){
            if($('.hide-menu').is(':visible')){
                $('._scroll-sidebar').css('overflow', 'scroll');
            }else{
                $('._scroll-sidebar').css('overflow', 'visible');
            }
        })
    </script>
    <meta name="theme-color" content="#fff">
</head>



@yield('partials.admin-nav')




<footer class="footer">
    © <?=date('Y', time())?> Jusek School
</footer>
</div>
</div>
<script src="{{asset('/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('/backend/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('/backend/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('/backend/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('/backend/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>

<!--Custom JavaScript -->
<script src="{{asset('/backend/js/custom.min.js')}}"></script>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->


<script src="{{asset('/backend/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('/backend/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/backend/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript');?>"></script>
<!-- jQuery peity -->
<script src="{{asset('/backend/plugins/tablesaw-master/dist/tablesaw.js')}}"></script>
<script src="{{asset('/backend/plugins/tablesaw-master/dist/tablesaw-init.js')}}"></script>

</body>

</html>