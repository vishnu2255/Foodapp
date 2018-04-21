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

<div class="row">
  <div class="col-md-1">
  <span>  </span>
  </div>
  {{-- order-md-2 --}}
    <div class="col-md-7 order-md-2">
      {{-- <h4 class="mb-2">Billing address</h4>  --}}
      @foreach($dishes as $dish)

        <div class="row">
            <div class="col-md-8 mb-3  ">
        
                        <img src="../images/food_2.jpg" alt="" height="60px" width="100px">
                        &nbsp; &nbsp;   
                        <span>
                           {{$dish->name}}      &nbsp; &nbsp;                  
                        </span> 
                   <span class="float-right">
                       {{$dish->price}}   &nbsp; &nbsp;
                   </span>
          </div>
          <div class="col-md-4 mb-3"> 
         
            <a href="#">
                <button type="button" class="btn btn-primary btn-sm">Add to cart</button>
              </a>                    
                       
          
        </div>
      </div>
       @endforeach
    </div>

    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$12</span>
          </li>                               
        </ul>

        <a href="/checkout">
        <button  class="btn btn-secondary">Checkout</button>     
        </a>

      </div>

  </div>
  {{-- <a href="/chefs/checkout">Click</a> --}}

  @endsection

