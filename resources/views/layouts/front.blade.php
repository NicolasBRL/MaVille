<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Roche sur Yon @yield('title')</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss'])

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('favicon-32x32.png')}}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{asset('favicon-16x16.png')}}" sizes="16x16" />
    </head>

    <body class="bg-gray-50">
        <!-- Header -->
        @include('components.header')

        <!-- Page content -->
        @yield('content')

        <!-- Footer -->
        @include('components.footer')

        <!-- Script -->
    </body>
</html>