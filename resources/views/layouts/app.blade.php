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
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#09364f">
        <meta name="theme-color" content="#09364f">
    </head>
    <body class="flex flex-col min-h-screen antialiased leading-none">

        @include('partials.header')

        <div id="app" class="container flex-grow mx-auto md:-mt-48 lg:-mt-56 xl:-mt-64 pb-8">
            @yield('content')
        </div>

        @include('partials.footer')

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
