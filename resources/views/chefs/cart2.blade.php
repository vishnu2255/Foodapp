@extends('layouts.app')


@section('content')

<div class="container" style="font-family: Helvetica;">  

<br>
<br>

<div class="col-md-11 order-md-2 mb-4" style="margin: 20px;font-family: Helvetica;">
    <h4 class="mb-3" style="text-align: center">
      {{-- <span class="text-muted" >Your cart</span> --}}
     <h1> My Cart </h1>
     <hr>
     
    </h4>

    <a href="/dishes" class="btn btn-success btn-lg pull-right">      
    Click here to add more dishes 
    </a>

</div>

<div class="row">

<h2> Chef is Unavailable Now!! Could You Please Order From different Chef.</h2>

</div>

</div>      
  
  @endsection