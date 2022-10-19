<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">

    <!-- Slick Carousel Css -->
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick-theme.css') }}">

    <!-- Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins text-gray-800 overflow-x-hidden" id="top"">
    @include('layouts.partials.navbar')
    <div>
    {{ $slot }}
    </div>

    @include('layouts.partials.footer')

    <!-- Scripts -->
    <!-- Jquery -->
    <script src=" {{ asset('vendors/jquery/jquery-3.6.0.min.js') }}">
    </script>
    <!-- Slick Carousel -->
    <script src="{{ asset('vendors/slick/slick.min.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
