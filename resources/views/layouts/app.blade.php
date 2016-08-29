<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Bree+Serif|Droid+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

    <ul class="side-nav" id="mobile-demo">
        @if( Auth::check() )
            
            <li><a href=" {{ route('all.friends') }} ">All Friends </a></li>

            {{-- Check if user already added any information --}}
            @if( Auth::user()->contact()->count() == 0 )
                <li><a href=" {{ route('add.contact.info') }} "> Add Your Information</a></li>                        
            @else
                <li><a href=" {{ route('edit.contact.info') }} "> Edit Your Information</a></li>                        
            @endif

            <li><a href=" {{ route('profile.settings') }} ">Settings </a></li>
            <li><a href="{{ url('/logout') }}">Logout ({{ Auth::user()->name }})</a></li>

        @else 

            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>

        @endif
    </ul>

    <nav class="blue darken-1">
        <div class="container">
            <div class="row">
                <div class="nav-wrapper">
                <div class="col s8 offset-s2">
                            
                        <a href="/" class="brand-logo">Contact Info</a>
                        <a href="" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>

                        <ul class="right hide-on-med-and-down">

                            @if( Auth::check() )
                                
                                <li><a href=" {{ route('all.friends') }} ">All Friends </a></li>

                                {{-- Check if user already added any information --}}
                                @if( Auth::user()->contact()->count() == 0 )
                                    <li><a href=" {{ route('add.contact.info') }} "> Add Your Information</a></li>                        
                                @else
                                    <li><a href=" {{ route('edit.contact.info') }} "> Edit Your Information</a></li>                        
                                @endif

                                <li><a href=" {{ route('profile.settings') }} ">Settings </a></li>
                                <li><a href="{{ url('/logout') }}">Logout ({{ Auth::user()->name }})</a></li>

                            @else 

                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>

                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="app-wrapper">
        @yield('content')
    </div>





    <!-- JavaScripts -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/materialize.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    
</body>
</html>
