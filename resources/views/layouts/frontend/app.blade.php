<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="{{asset('frontend/common-css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/common-css/swiper.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/common-css/ionicons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    @stack('css')


</head>
<body >

    @include('layouts.frontend.inc.header')

    @yield('content')


    @include('layouts.frontend.inc.footer')


    <!-- SCIPTS -->

    <script src="{{asset('frontend/common-js/jquery-3.1.1.min.js')}}"></script>

    <script src="{{asset('frontend/common-js/tether.min.js')}}"></script>

    <script src="{{asset('frontend/common-js/bootstrap.js')}}"></script>

    @stack('js')

    <script src="{{asset('frontend/common-js/scripts.js')}}"></script>
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>
</html>
