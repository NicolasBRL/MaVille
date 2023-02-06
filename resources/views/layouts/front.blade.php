<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Roche sur Yon</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss'])
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