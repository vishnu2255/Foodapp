<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    {{-- <script src="https://js.stripe.com/v3/"></script> --}}
  
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <script src="{{ asset('js/customscript.js') }}" defer></script>   
    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 

    <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blogcss.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet">    
    
<style type="text/css">
    #overlay {
        position: absolute;
        top: 10%;
        left: 5%;
        bottom: 15%;
        display: none;
        width: 1200px;
        /* height: auto; */
        /* top: 0;
        left: 0; */
        right: 0;
        bottom: 0;
        /* background-color: rgba(0,0,0,0.5); */
        /* background-color: white; */
        z-index: 5;
        cursor: pointer;
    }
    
    #text1{
        position: relative;
        top: 30%;
        left: 30%;
        font-size: 20px;
        width: 100px;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
    }
    </style>
    
</head>
<body>
    <div id="app" style="background-color: white;">
        {{-- @include('layouts.navbar') --}}
       
            @yield('content')
     
    </div>
    {{csrf_field()}}

    {{-- @include('layouts.foot') --}}
    
</body>
</html>
