@extends('layouts.app') 
{{-- @section('content')

{{-- <div id="map" class="container" style="height: 500px;width:600px">
Map
</div> --}}
{{csrf_field()}}
<div id="map-canvas" style="width:600px;height: 500px;" >

</div>

<script src="{{ asset('js/mapscript.js') }}" defer></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_WSJDMq65r3I68pWo_qBhs4kOov7ab4k&libraries=places"  async defer></script>

{{-- 
<button id="get"> 
    directions
</button> --}}

{{-- @endsection --}}

{{-- <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

{!! $map['js'] !!}
<body>
    
    {!! $map['html'] !!}
</body>
</html> --}}
