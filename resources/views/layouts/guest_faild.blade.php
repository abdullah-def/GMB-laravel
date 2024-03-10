<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">

    {{-- <meta name="theme-color" content="#6777ef" /> --}}
    @yield('meta')
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="manifest" href="{{ asset('/manifest.json') }}"> --}}

    <script src="/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/vendors/simplebar/simplebar.min.js"></script>
    <script src="/assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="/assets/css/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">

    @yield('style')
</head>
<body>
    
    <main style="--phoenix-scroll-margin-top: 1.2rem;">

        @include('components.guest.navs')
        @include('components.guest.search')

        @yield('content')

        @include('components.guest.footer')
    </main>
    @if(!Route::is('verification.notice') )
        @If( auth()->check())
            @if(! auth()->user()->email_verified_at )
                <style>
                    .dot-flashing {
                        position: relative;
                        width: 10px;
                        height: 10px;
                        border-radius: 5px;
                        background-color: #ffffff;
                        color: #ffffff;
                        animation: dot-flashing 1s infinite linear alternate;
                        animation-delay: 0.5s;
                        }
                        .dot-flashing::before, .dot-flashing::after {
                        content: "";
                        display: inline-block;
                        position: absolute;
                        top: 0;
                        }
                        .dot-flashing::before {
                        left: -15px;
                        width: 10px;
                        height: 10px;
                        border-radius: 5px;
                        background-color: #ffffff;
                        color: #ffffff;
                        animation: dot-flashing 1s infinite alternate;
                        animation-delay: 0s;
                        }
                        .dot-flashing::after {
                        left: 15px;
                        width: 10px;
                        height: 10px;
                        border-radius: 5px;
                        background-color: #ffffff;
                        color: #ffffff;
                        animation: dot-flashing 1s infinite alternate;
                        animation-delay: 1s;
                        }

                        @keyframes dot-flashing {
                        0% {
                            background-color: #ffffff;
                        }
                        50%, 100% {
                            background-color: #6e77f3;
                        }
                        }
                </style>
                <div id="div1" class="card border border-300 h-100 w-100 overflow-hidden" style="max-width: 464px; max-height: 216px; position: fixed; bottom: 23px; left: 50%; transform: translateX(-50%); z-index: 1000;">
                    <div class="bg-holder d-block bg-card" style="background-image:url(../assets/img/spot-illustrations/32.png);background-position: top right;"></div>
                    
                    <div class="card-body px-5 position-relative">
                    <h4 class="mb-2">A fresh verification link has been sent to your email address.</h4>
                    <p class="text-700 fw-semi-bold mb-0">Before proceeding, please check your email for a verification link. If you did not receive the email</p>
                    </div>
                    
                    <div class="card-footer border-0 py-0 px-5 z-index-1 text-center">
                        <form  id="form-data" >
                            
                            <button type="button" style="max-width: 264px; min-height: 37.34px; max-height: 37.34px;" class="btn btn-primary w-100 mb-3 validate" id="create_new">click here to request another</button>
                            
                        </form>
                    </div>
                    
                </div>
                <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                <script type="text/javascript">
                    $(".validate").click(function(e){
                        e.preventDefault();
                        var data = $('#form-data').serialize();
                        $.ajax({
                            type: 'post',
                            url: "{{ route('verification.send') }}",
                            data: data,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            beforeSend: function(){
                            
                                $('#create_new').html(`<div class="snippet" data-title="dot-flashing">
                                                    <div class="stage" style=" display: flex; justify-content: center; align-items: center; position: relative; padding: 3px 0; margin: 0 -5%; overflow: hidden; ">
                                                        <div class="dot-flashing"></div>
                                                    </div>
                                                </div>`
                                            );
                            },
                            success: function(response){
                                $('#create_new').html('Complete');
                            },
                            complete: function(response){
                                $("#div1").hide('slow', function(){  $(this).remove(); });
                            }
                        });
                    });
                </script>
            @endif
        @endif
    @endif
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/vendors/popper/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/vendors/anchorjs/anchor.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script src="/vendors/fontawesome/all.min.js"></script>
    <script src="/vendors/lodash/lodash.min.js"></script>
    <script src="/vendors/polyfill.min.js?features=window.scroll"></script>
    <script src="/vendors/list.js/list.min.js"></script>
    <script src="/vendors/feather-icons/feather.min.js"></script>
    <script src="/vendors/dayjs/dayjs.min.js"></script>
    <script src="/assets/js/zikoai.js"></script>

    <script src="/vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="/vendors/bigpicture/BigPicture.js"></script>
    <script src="/vendors/countup/countUp.umd.js"></script>

    {{-- <script src="{{ asset('/sw.js') }}"></script> --}}
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&callback=initMap" async=""></script> --}}
    {{-- <script src="/vendors/smtp.js"></script> --}}

    @yield('script')
</body>

</html>
