<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">

        <title>{{ config('app.name', 'Movie') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" media="all"/>
        @yield('head')

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <dic class="top-left">
                <div class="logo">
                    <a href="index.html"><h1>Movie<span>Entertainment</span></h1></a>
                </div>
            </dic>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                @section('content')
                <div class="title m-b-md">
                    Movie
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                @show
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="col-md-5 grid_left">
                    <p>© 2018 Movie. All rights reserved</p>
                </div>
                <div class="col-md-7 grid_right">
                    <ul>
                        <li>
                            <a href="genres.html">Movies</a>
                        </li>
                        <li>
                            <a href="contact.html">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span>To Top</a>
        @yield('js-files')
    </body>
</html>
