<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    </head>
    <body>
        <div class="float-left position-absolute ml-5">
            <img width="20%" src="{{ asset('storage/logo.png') }}">
        </div>

        <div>
            <div class="mt-5">&nbsp;</div>
            <div class="mt-3">&nbsp;</div>

            <h1 class="text-center">ICANN - Administration Console</h1>
        </div>

        <div class="clearfix mt-5">&nbsp;</div>

        <div class="container">
            <main class="py-4 text-center">
                @yield('content')
            </main>
        </div>
    </body>
</html>
