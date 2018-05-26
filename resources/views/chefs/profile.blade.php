@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-9"> 
      
        <h2 class="featurette-heading" style="align-content: center ; padding-left: 5%;padding-top: 5%">Home cooked food without the stress</h2>
        <p class="lead" style="align-content: center">Vestibulum volutpat non nulla at efficitur. Cras pretium, lacus in volutpat tempus, purus massa venenatis diam, eu</p>                
  </div>
 
  <div class="col-md-3">
    
      <img src="../../images/plate-stir-fry.png" width="50%"  alt="i love takeout app IOS"><br><br><br>
    </div>
</div>

<hr class="featurette-divider"> 


<div class="container marketing">

    <div class="row featurette">
      <div class="col-md-8 col-md-push-4" style="text-align:center">
      <br><br>
<table class="table table-striped" width="100%" border="0">
  <tr>
    <td width="27%">Home Address :</td>
    <td width="73%"> {{$chefprof->home_address}}</td>
  </tr>
  <tr>
      <td width="27%">City :</td>
      <td width="73%"> {{$chefprof->city}}</td>
    </tr>

    <tr>
        <td width="27%">Phone :</td>
        <td width="73%"> {{$chefprof->phone_number}}</td>
      </tr>

      <tr>
          <td width="27%">Email :</td>
          <td width="73%"> {{$chefprof->email}}</td>
        </tr>

  <tr>
    <td>Certificates: </td>
    <td>George Brown </td>
  </tr>
</table>
<br><br>
<a href="/chefs/" class="btn btn-warning btn-lg active" role="button">Back to Menu</a>

      </div>
      <div class="col-md-4 col-md-pull-8">
  
        <img src="../../images/chef_1.jpeg" class="rounded-circle" />
        <h2>{{$chefprof->name}}</h2>
        {{-- <p class="lead">Orders: {{$chefprof->ordernum}} &nbsp;&nbsp; <img src="../../images/stars.png" width="50%" height="50%" /></p>        --}}
    </div>
    </div>
 <hr/>      
  </div>


@endsection