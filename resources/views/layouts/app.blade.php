<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Roche sur Yon @yield('title')</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('favicon-32x32.png')}}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{asset('favicon-16x16.png')}}" sizes="16x16" />
    </head>

    <body class="bg-gray-50" id="dashboard">
        <!-- Header -->
        @include('components.dashboard.header')

        <!-- Page content -->
        <main>
                <div class="container mx-auto px-4">
                    <div class="page-title-container mb-6">
                        <h1>@yield('page')</h1>
                    </div>

                    <div class="page-content-container">
                        @yield('content')
                    </div>
                </div>
        </main>
        

        <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        @yield('script')
    </body>
</html>