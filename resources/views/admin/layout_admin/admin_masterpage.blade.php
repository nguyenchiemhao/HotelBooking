<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>@yield('title')</title>
    
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="admin_page_asset/css/normalize.min.css">
    <link rel="stylesheet" href="admin_page_asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_page_asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin_page_asset/css/themify-icons.css">
    <link rel="stylesheet" href="admin_page_asset/css/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="admin_page_asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin_page_asset/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="admin_page_asset/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    {{-- <link href="admin_page_asset/css/chartist.min.css" rel="stylesheet"> --}}
    {{-- <link href="admin_page_asset/css/jqvmap.min.css" rel="stylesheet"> --}}

    <link href="admin_page_asset/css/weather-icons.css" rel="stylesheet" />
    <link href="admin_page_asset/css/fullcalendar.min.css" rel="stylesheet" />

   {{-- css --}}
    @yield('css')
</head>

<body>
    <!-- Left Panel -->
    @include('admin.layout_admin.menu')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('admin.layout_admin.header')
        <!-- /#header -->

        <!-- Content -->
        <div class="content">

            @yield('content')

        </div>
        <!-- /.content -->

        <div class="clearfix"></div>

        <!-- Footer -->
        @include('admin.layout_admin.footer')
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="admin_page_asset/js/jquery.min.js"></script>
    <script src="admin_page_asset/js/popper.min.js"></script>
    <script src="admin_page_asset/js/bootstrap.min.js"></script>
    <script src="admin_page_asset/js/jquery.matchHeight.min.js"></script>
    <script src="admin_page_asset/js/main.js"></script>

    <!--  Chart js -->
    {{-- <script src="admin_page_asset/js/Chart.bundle.min.js"></script> --}}

    <!--Chartist Chart-->
    {{-- <script src="admin_page_asset/js/chartist.min.js"></script>
    <script src="admin_page_asset/js/chartist-plugin-legend.min.js"></script> --}}

    <script src="admin_page_asset/js/jquery.flot.min.js"></script>
    <script src="admin_page_asset/js/jquery.flot.pie.min.js"></script>
    <script src="admin_page_asset/js/jquery.flot.spline.min.js"></script>

    <script src="admin_page_asset/js/jquery.simpleWeather.min.js"></script>
    <script src="admin_page_asset/js/init/weather-init.js"></script>

    <script src="admin_page_asset/js/moment.min.js"></script>
    <script src="admin_page_asset/js/fullcalendar.min.js"></script>
    <script src="admin_page_asset/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    {{-- script --}}
    @yield('script')
</body>
</html>
