<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Movie') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @include('includes.head')
    @yield('head')
</head>
<body>
    @include('includes.header')
    @include('includes.nav')
    <main class="py-4" id="app">
        @yield('content')
    </main>
    <section>
        <a href="#" class="to-top">
            <i class="fas fa-arrow-circle-up"></i>
        </a>
    </section>
    <section>
        @include('includes.scripts')
        @yield('scripts')
    </section>
    @include('includes.footer')
</body>
</html>
