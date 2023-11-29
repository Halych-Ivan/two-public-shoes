<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Fowler - Shoes Store HTML Template')</title>
    <meta name="description" content="">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{asset('lib/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('lib/css/preview.css')}}" type="text/css" media="screen" />
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
    @include('__shop.header')

{{--    @if($config->slider)--}}
{{--        @include('__shop.slider-area')--}}
{{--    @endif--}}

    @yield('content')

{{--    @if($config->featured)--}}
{{--        @include('__shop.banner-area')--}}
{{--    @endif--}}

{{--    @if($config->brands)--}}
{{--        @include('__shop.our-brand-area')--}}
{{--    @endif--}}




{{--    @include('__shop.footer')--}}

<!-- all js here -->
<!-- jquery latest version -->
<script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
<!-- Nivo slider js  -->
<script src="{{asset('lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/home.js')}}" type="text/javascript"></script>
<!-- count down js  -->
<script src="{{asset('js/jquery.countdown.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
