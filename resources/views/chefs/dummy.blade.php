@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-9"> 
      
        <h2 class="featurette-heading" style="align-content: center ; padding-left: 5%;padding-top: 5%">Home cooked food without the stress</h2>
        <p class="lead" style="align-content: center">Vestibulum volutpat non nulla at efficitur. Cras pretium, lacus in volutpat tempus, purus massa venenatis diam, eu</p>                
   
 
  </div>
 
  <div class="col-md-3">
    
    <img src="../images/plate-stir-fry.png" width="50%"  alt="i love takeout app IOS"><br><br><br>
  </div>
</div>
<hr class="featurette-divider"> 

<div class="container marketing" style="border: 1ch ">
   @if(count($chefs)>0)

   @foreach($chefs as $chef)
{{-- <a href="/chefs/{{$chef->id}}"> --}}
   <div class="row">

        <div class="col-md-8" s tyle="display:inline"> 
<a href="/chefs/profile/{{$chef->id}}">
<img src="../images/chef_1.jpeg" alt="image" class="rounded-circle" width="60px" height="60px">                  
</a>
&nbsp; &nbsp;
<span> Area Location</span>

        </div>

        <div class="col-md-4">
        <div class="well-flat">
        <img src="../images/stars.png" alt="image" style="padding-bottom: 1%" width="100px">
        &nbsp; &nbsp;
        <span>56</span>
        </div>
        <br>
        <div>
          <a href="/chefs/{{$chef->id}}">
            <button class="btn btn-danger btn-sm">Order Now</button>
          </a>          
        </div>
        </div>
  </div> 
{{-- </a> --}}
  <hr class="featurette-divider">    
   @endforeach


   @endif
</div>

@endsection