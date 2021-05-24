<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.google.com/specimen/Roboto" rel="stylesheet">
        <link href="https://fonts.google.com/specimen/Roboto" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('scripts')

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >

    </head>
    <body>
    <style>
        body {
            font-size: 1.2rem;
            font-family: 'Roboto', sans-serif;
        }
        h2{
            font-size: 2.2rem;
        }
        .copyright{
            font-size: 0.8rem;
            background: yellow;
        }
        .footer{
            background: darkorange;
            color: #fff;
        }
        .footer ul{
            list-style: none;
        }
        .footer ul li a{
            color: #fff;
        }
        nav{
            position: absolute;
            width: 100%;
            align-items: center;
            min-height: 80px;
        }
        nav ul li a{
            color: ;
        }

        .logo{
            position: relative;
            z-index: 1;
            height: 100px;
        }
        .logo img{
            border-style: none;
            padding-top: 5px;
            height: 150px;
        }
        .title-menu h1{
            padding-left: 40px;
        }
        .nav-links li{
            list-style: none;
            padding-right: 20px;
        }
        .nav-links ul{
            padding: 0px !important;
            text-decoration: none;
        }
        .title-menu li ul a{
            padding: 0px;
            text-decoration: none;
            color: #8bcdbd !important;
        }
        .footer-title{
            right: 0px;
            bottom: 0px;
        }
        .footer .footer-logo{
            position: relative;
            z-index: 1;
            margin-top: -30px;
        }
        .social i {
            font-size: 2rem;
            padding: 5px;
        }
        .footer-logo img{
            border-style: none;
            padding-top: 5px;
            height: 150px;
        }
    </style>
<nav>
    <div class="container d-flex justify-content-start">
    <div class="logo">
        <img src="/img/gouweplein_logo_clear.png" alt="">
    </div>
    <div class="title-menu">
        <h1>Centrum Waddinxveen</h1>
        <ul class="nav-links d-flex justify-content-between">
            <li><a href="">winkels</a></li>
            <li><a href="">plattegrond</a></li>
            <li><a href="">nieuws & agenda</a></li>
            <li><a href="">bereikbaarheid</a></li>
            <li><a href="">over gouweplein</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
    </div>
    <div class="burger">

    </div>
</nav>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
            @yield('content')
            @yield('usp')
            @yield('intro')
            @yield('news')
                </div>
    <div class="d-flex justify-content-between footer">
        <div>
            <ul>
                <li><a href="">home</a></li>
                <li><a href="">winkels</a></li>
                <li><a href="">plattegrond</a></li>
                <li><a href="">nieuws & agenda</a></li>
                <li><a href="">bereikbaarheid</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><a href="">nieuwsbrief</a></li>
                <li><a href="">verhuur</a></li>
                <li><a href="">contact</a></li>
                <li><a href="">nieuws & agenda</a></li>
                <li><a href="">over ons</a></li>
            </ul>
        </div>
        <div class="footer-logo">
            <img src="/img/gouweplein_logo_clear.png" alt="">
        </div>
        <div class="social-title">
            <div class="social d-flex justify-content-end">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-pinterest-square"></i>
            </div>
            <div class="footer-title">
                Gouweplein Waddinxveen
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright 2021 © | ontwerp: ‘tIdee! | realisatie: Xxxxx | Disclaimer</p>
    </div>
    </body>
</html>
