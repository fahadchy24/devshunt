<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.partials.styles')

    <!-- Scripts -->
    @include('layouts.partials.scripts')
</head>

<body class="font-poppins text-gray-800 overflow-x-hidden" id="top">
    @include('layouts.partials.navbar')
    <div>
        {{ $slot }}
    </div>

    @include('layouts.partials.footer')

    <!-- Scripts -->
    <!-- Jquery -->
    <script src=" {{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('vendors/slick/slick.min.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
