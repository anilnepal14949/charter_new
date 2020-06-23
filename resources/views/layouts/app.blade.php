<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'हरिवन नगरपालिका, सर्लाही') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/public/images/favicon.png')}}"/>
    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/sweetalert.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/public/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('/public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body onload="startSlider(1,2)">
    <input type="hidden" name="homeRoute" id="homeRoute" value="{{ route('home') }}">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header" style="height:10vh !important;">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('/public/images/nepal-logo.png') }}" style="height:8vh; margin-top:-1vh;">
                    </a>
                </div>

                <div class="col-md-10 text-center">
                    <strong style="font-size:6vh; color:#f00 !important;"> हरिवन नगरपालिका, सर्लाही </strong>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
{{--                             <li><a href="{{ url('auth/login') }}">Login</a></li>
                            <li><a href="{{ url('auth/register') }}">Register</a></li>
 --}}                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('auth/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('auth/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/public/js/app.js') }}"></script>
    <script src="{{ asset('/public/js/sweetalert.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('/public/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/public/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/public/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/public/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>

    @include('sweet::alert')
    @yield('footerContent')
    <script src="{{ asset('/public/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('/public/js/myjava.js') }}"></script>
</body>
</html>
