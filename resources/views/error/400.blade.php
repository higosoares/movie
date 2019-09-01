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
        @include('includes.head')
    </head>
    <body>

        @include('includes.header')
        <main class="py-4">
            <h1>400</h1>
        </main>
        <section>
            <a href="#" class="to-top">
                <i class="fas fa-arrow-circle-up"></i>
            </a>
        </section>
        @include('includes.footer')
    </body>
</html>
