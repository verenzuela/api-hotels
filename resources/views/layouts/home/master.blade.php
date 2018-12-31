<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>@yield('title', 'api.hotles.com')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content='@yield("metaDescription", "Description api.hotels.com")'>
        <meta name="keywords" content='@yield("api, hotels, booking")'>
        <meta name="author" content='@yield("api.hotels.com")'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- BASE CSS --> 
        <!--link href="{{ asset('vendor/twbs/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet"-->
        <link href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

        <!-- FONTAWESONE >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous"-->

        @yield('styles')

    </head>

    <body>
        @yield('navbar')     
        @yield('content')
    </body>

    <!-- SCRIPTS -->
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>

    <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    @yield('scripts')

</html>
