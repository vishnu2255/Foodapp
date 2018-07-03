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
    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
   
   
    {{-- <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <script src="{{ asset('js/customscript.js') }}" defer></script>   
    --}}
  
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  --}}
      

    <!-- Scripts -->

    {{-- <script src="https://js.stripe.com/v3/"></script> --}}
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <main class="py-0">
            @yield('content')
        </main>
    </div>
    {{csrf_field()}}

    @include('layouts.foot')
    
</body>
</html>
 