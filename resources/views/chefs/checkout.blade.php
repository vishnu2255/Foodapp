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


<div class="col-md-8 order-md-2 mb-4" style="margin: 20px">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-muted">Your cart</span>
       {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
    </h4>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <?php $id=0; ?>
          @foreach($cartitems as $cartitem)
          <tr>
            <?php $id++;?>
          <th scope="row">{{$id}}</th>
            <td>
                <h6 class="my-0">{{$cartitem->itm_name}}</h6>
                <small class="text-muted">{{$cartitem->itm_desc}}</small>
            </td>
            <td>
              <button>
              Qty: <input type="number" name="quantity">
              </button>
              {{-- {{$cartitem->qty}} --}}
            </td>
            <td>{{$cartitem->itm_price}}</td>
          </tr>
          
          
          @endforeach
          
         
        </tbody>
      </table>

    <button  class="btn btn-secondary">Order Now</button>     
   

  </div>

  @endsection




  {{-- <ul class="list-group m-3">
      <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            
          </div>
          <span class="text-muted">Quantity</span>
          
          <span class="text-muted">Price</span>
        </li>

    <li class="list-group-item d-flex justify-content-between lh-condensed">
      <div>
        <h6 class="my-0">Product name</h6>
        <small class="text-muted">Brief description</small>
      </div>
      <span class="text-muted">$12</span>

      <span class="text-muted">$12</span>
    </li>                               
  </ul>


  <ul class="list-group m-3">
      <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            
          </div>
          <span class="text-muted">Quantity</span>
          
          <span class="text-muted">Price</span>
        </li>

    <li class="list-group-item d-flex justify-content-between lh-condensed">
      <div>
        <h6 class="my-0">Product name</h6>
        <small class="text-muted">Brief description</small>
      </div>
      <span class="text-muted">$12</span>

      <span class="text-muted">$12</span>
    </li>                               
  </ul> --}}