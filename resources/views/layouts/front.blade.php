
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.min.css') }}" rel="stylesheet">

    <!-- another style for frontend -->



<!-- Slick -->
<link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">


<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>
   
    
</head>
<body>
    
    @yield('content-1')
    @yield('content-2')
    @yield('content-3')


    @extends('layouts.inc.frontfooter')
 <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" 
 defer></script>


 <!-- another script for frontend -->
 
 <script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/slick.min.js')}}"></script>
		<script src="{{asset('js/nouislider.min.js')}}"></script>
		<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
