
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>
            <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.png">
        <script src="/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="/vendors/simplebar/simplebar.min.js"></script>
        <script src="/assets/js/config.js"></script>

        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        @yield('style')

        @notifyCss

        <link href="/vendors/choices/choices.min.css" rel="stylesheet">
        <link href="/vendors/dhtmlx-gantt/dhtmlxgantt.css" rel="stylesheet">
        <link href="/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <!-- <link href="/assets/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet"> -->
        <link href="/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
        <link href="/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">

        <link href="/vendors/simplebar/simplebar.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/fonts/css/line.css">
        <link href="/vendors/leaflet/leaflet.css" rel="stylesheet">
        <link href="/vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
        <link href="/vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
        

        

    </head>
    <body>
        
        @yield('content')

        <script src="/vendors/popper/popper.min.js"></script>
        <script src="/vendors/bootstrap/bootstrap.min.js"></script>
        <script src="/vendors/anchorjs/anchor.min.js"></script>
        <script src="/vendors/is/is.min.js"></script>
        <script src="/vendors/fontawesome/all.min.js"></script>
        <script src="/vendors/lodash/lodash.min.js"></script>
        <!-- <script src="../../v3/polyfill.min.js?features=window.scroll"></script> -->
        <script src="/vendors/list.js/list.min.js"></script>
        <script src="/vendors/feather-icons/feather.min.js"></script>
        <script src="/vendors/dayjs/dayjs.min.js"></script>
        <script src="/assets/js/phoenix.js"></script>
        <script src="/vendors/echarts/echarts.min.js"></script>
        <script src="/vendors/leaflet/leaflet.js"></script>
        <script src="/vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
        <script src="/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
        <!-- <script src="/assets/js/ecommerce-dashboard.js"></script> -->

        @yield('script')
        <x-notify::notify />
        @notifyJs

    </body>
</html>