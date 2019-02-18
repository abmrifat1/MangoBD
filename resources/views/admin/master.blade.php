{{-- * Created by PhpStorm.
 * User: Mahbubul Alam
 * Date: 10/30/2017
 * Time: 7:10 AM--}}
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{asset('/admin')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/admin')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/admin')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('/admin')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('/admin')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('/admin')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/admin')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('/admin')}}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin')}}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin')}}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin')}}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin')}}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('/admin')}}/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        @include('admin.includes.sidebar')
        <div class="right_col" role="main">
            <!-- page content -->
            @yield('content')

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">{{ Auth::user()->name }}</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
         </div>
    </div>

<!-- jQuery -->
<script src="{{asset('/admin')}}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('/admin')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('/admin')}}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{asset('/admin')}}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{asset('/admin')}}/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{asset('/admin')}}/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('/admin')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{asset('/admin')}}/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{asset('/admin')}}/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.js"></script>
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.resize.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Flot plugins -->
<script src="{{asset('/admin')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{asset('/admin')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{asset('/admin')}}/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{asset('/admin')}}/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="{{asset('/admin')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="{{asset('/admin')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{asset('/admin')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('/admin')}}/vendors/moment/min/moment.min.js"></script>
<script src="{{asset('/admin')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- validator -->
<script src="{{asset('/admin')}}/vendors/validator/validator.js"></script>
    <!-- Datatables -->
    <script src="{{asset('/admin')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('/admin')}}/build/js/custom.min.js"></script>
<script>
    $(document).ready(function() {
        $('.alert').delay(2000).slideUp(1500,function () {
            $(this).alert('close');
        });
    });
</script>
</body>
</html>
