@extends('layouts.app')

@section('content')


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    <h3>Order placed</h3>
    </div>
@endif

@endsection
