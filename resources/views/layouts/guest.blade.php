<!DOCTYPE html>
<html lang="en" class="scroll-smooth" x-data="data()">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        @yield('meta')

        <title>{{ $title }}</title>
        
        @yield('style')
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" media="print" onload="this.media='all'" href="/assets/css/swiper-bundle.min.css" />
        <link rel="stylesheet" media="print" onload="this.media='all'" href="/assets/css/animate.css" />
        <link rel="stylesheet" href="/assets/css/build.css" />
        <link rel="stylesheet" href="/assets/css/tailwind.css" />
        <link rel="stylesheet" href="/assets/css/tailwind1.css" />
        <link rel="stylesheet" href="/assets/css/tailwind2.css" />

        <script src="/assets/js/wow.min.js"></script>
        <script> new WOW().init(); </script>
        
        <script src="/assets/js/swiper-bundle.min.js"></script>
    </head> 

    <body>
        
        @yield('content')

        @yield('blog-content')


        
        @yield('script')
        
    </body>

</html>
