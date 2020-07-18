<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- metadata -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('metadata', '')

        <!-- stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

        <title>@yield('title')</title>
    </head>
    <body>
        <div id="app">
            @yield('components', '')
        </div>

        <!-- scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts', '')
    </body>
</html>
