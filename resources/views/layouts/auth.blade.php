<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->

        <!-- NORMALIZING CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}">

        <!-- ICONIC FONT - FONT AWESOME -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">

        <!-- BOOTSTRAP FRONTEND FRAMEWORD -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">

        <!-- LOAD WEB FONTS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/font-stylesheet.css') }}">

        <!-- MAIN STYLESHEET FILE -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

        <!-- RESPONSIVE STYLESHEET -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">


        <!-- MODERNIZER -->
        <script src="{{ URL::asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        


        <!--====================================
        =            WRAPPER STARTS            =
        =====================================-->

        <div class="wrapper">
            
            <div class="auth-page">
                <div class="form-outer">
                    <div class="inner">
                        <div class="auth-form-area">
                            <div class="logo">
                                <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('assets/img/logo.png') }}" alt="Support Pro"></a>
                            </div>


                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
