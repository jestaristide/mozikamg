<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/slider-radio.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/plyr.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">

        <!-- Favicons -->
        <link rel="icon" type="image/png" href="/asset/icon/favicon-32x32.png" sizes="32x32">
        <link rel="apple-touch-icon" href="/asset/icon/favicon-32x32.png">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Jeste Aristide">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <!--<body class="font-sans antialiased">-->
    <body>
        @inertia

        <script src="{{asset('asset/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('asset/js/slider-radio.js')}}"></script>
        <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('asset/js/smooth-scrollbar.js')}}"></script>
        <script src="{{asset('asset/js/select2.min.js')}}"></script>
        <script src="{{asset('asset/js/main.js')}}"></script>
        <script src="{{asset('asset/js/plyr.min.js')}}"></script>
    </body>
</html>
