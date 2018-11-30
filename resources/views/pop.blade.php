@extends('layouts.app3')

@section('content')

<div class="container" style="text-align: center;">

    <h2>Please Login/Register to view more Images</h2>

    <a href="/login" class="btn btn-primary">Login</a>
    <a href="/register" class="btn btn-primary">Register</a>

</div>

@endsection


@section('content2')
@include('carnivallayouts.footer2')
@endsection