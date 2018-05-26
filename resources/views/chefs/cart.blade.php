@extends('layouts.app')

@section('content')

{{-- <div class="row">
    <div class="col-md-9"> 
      
        <h2 class="featurette-heading" style="align-content: center ; padding-left: 5%;padding-top: 5%">Home cooked food without the stress</h2>
        <p class="lead" style="align-content: center">Vestibulum volutpat non nulla at efficitur. Cras pretium, lacus in volutpat tempus, purus massa venenatis diam, eu</p>                
  </div>
 
  <div class="col-md-3">
    
    <img src="../images/plate-stir-fry.png" width="50%"  alt="i love takeout app IOS"><br><br><br>
  </div>
</div> --}}

<hr class="featurette-divider"> 


<div class="col-md-8 order-md-2 mb-4" style="margin: 20px">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-muted">Your cart</span>
       {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
    </h4>
<?php $chefcnt=0;?>
    @foreach($chefcarts as $key => $value)

<?php 
       $chefcnt++;
       $chefdet = explode('_',$key);
       $chefid = $chefdet[0];
       $chefname = $chefdet[1];
       $totsum = $chefdet[2];
?>

    <h4 style="margin: 20px">
    <a href="/chefs/{{$chefid}}">  Chef {{$chefcnt}}: {{$chefname}}  </a>    
    </h4>

    <table class="table table-striped" style="margin: 20px">
        <thead>
          <tr>
            <th scope="col">SNo</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <?php $id=0; ?>
          @foreach($value as $cartitem)
          <tr>
            <?php $id++;?>
          <th scope="row">{{$id}}</th>
            <td>
                <h6 class="my-0">{{$cartitem->itm_name}}</h6>
                <small class="text-muted">{{$cartitem->itm_desc}}</small>
            </td>
            <td>
              {{-- <button> --}}
              <span>Qty: </span>  <input type="number" id="{{$cartitem->menu_item_id.'_'.$cartitem->chef_id}}" class="btnquantitycart" name="quantity" min="1" max="10" value="{{$cartitem->qty}}" style="text-align: center">
              {{-- </button> --}}
              {{-- {{$cartitem->qty}} --}}
            </td>
            <td>{{$cartitem->itm_price}}</td>
          </tr>
          
          
          @endforeach
          
         
        </tbody>
      </table>

      <div class="container-fluid" style="margin: 20px;height: 50px; padding: 50px">
          
      <a href="/checkout/{{$chefid}}"  class="btn btn-warning btn-lg" style="float: left" id="checkout_{{$chefid}}" >Proceed to Checkout</a>     
       
      <div style="float: right">
            <span class="" style="color: red" >CDN$</span> <span id="tot_{{$chefid}}"> {{$totsum}}</span>
      </div>
         
      </div>

    
   
    @endforeach

  </div>

  @endsection