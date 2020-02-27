<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('js/app.js') }}" rel="preload" as="script">
    </head>
    <body class="h-screen antialiased leading-none">

        @include('partials.header')

        <div id="app" class="container mx-auto md:-mt-48 lg:-mt-56 xl:-mt-64 pb-8">
            @yield('content')
        </div>

        @include('partials.footer')

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
