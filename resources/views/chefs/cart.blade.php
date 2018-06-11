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

{{-- <hr class="featurette-divider">  --}}

{{-- <h3 style="text-align: center"><em><strong> Please Checkout 1 chef items at a time </strong> </em> </h3> --}}
<div class="col-md-10 order-md-2 mb-4" style="margin: 20px">
    <h4 class="d-flex justify-content-between align-items-center mb-3" style="text-align: center">
      {{-- <span class="text-muted" >Your cart</span> --}}
      Your Cart
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
<div class="row" style="margin-top: 20px">
    <div class="col-md-10 col-sm-10">
            <h4 >
                    <a href="/chefs/{{$chefid}}" style="font-family: georgia,serif"> <b> {{$chefname}} </b> </a>    
            </h4>
    </div>

    <div class="col-md-2 col-sm-2">
       
    {{-- <button id="{{$chefid}}" class="btn btn-danger btn-lg showdrinks">Would You Like to Add Drinks? </button>     --}}
        

    </div>
        
</div>
    

    <div class="row">

        <div class="col-md-8">

    <table class="table table-striped" style="margin: 20px">
        <thead>
          <tr>
            <th scope="col">SNo</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody >
          <?php $id=0; ?>
          @foreach($value as $cartitem)
          <tr>
            <?php $id++;?>
          <th scope="row">{{$id}}</th>
            <td>
                <h6 class="my-0" style="font-size: 30px;" > <strong> {{$cartitem->itm_name}} </strong> </h6>
                <small class="text-muted" style="font-size: 15px;"> {{$cartitem->itm_desc}}</small>
            </td>
            <td>
              {{-- <button> --}}
              {{-- <span>Qty: </span>   --}}
              {{-- <input type="number" id="{{$cartitem->menu_item_id.'_'.$cartitem->chef_id}}" class="form-control btnquantitycart" name="quantity" min="1" max="10" value="{{$cartitem->qty}}" style="text-align: center;width: 70px"> --}}
              {{-- <span></span>
              <input type="text" id="{{$cartitem->menu_item_id.'_'.$cartitem->chef_id}}" class="form-control btnquantitycart" name="quantity" maxlength="2" value="{{$cartitem->qty}}" style="text-align: center;width: 70px">
              <span></span> --}}

              <div class="input-group">
               
                    <button type="button"  class="btn btn-info btn-circle quantity-left-minus  btn-number"  data-type="minus" data-field="">
                      {{-- <span class="glyphicon glyphicon-minus"></span> --}}
                      <ion-icon name="remove"></ion-icon>
                    </button>
           
                <input type="text" style="font-size: 20px;" id="{{$cartitem->menu_item_id.'_'.$cartitem->chef_id}}" class="btnquantitycart" value="{{$cartitem->qty}}"  name="quantity" style="width: 50px; text-align:center"  size="2" maxlength="2">
            
                    <button type="button" class="btn btn-info btn-circle quantity-right-plus  btn-number" data-type="plus" data-field="">
                        {{-- <span class="glyphicon glyphicon-plus"></span> --}}
                        <ion-icon name="add"></ion-icon>
                    </button>
              
            </div>


              {{-- </button> --}}
              {{-- {{$cartitem->qty}} --}}
            </td>
            <td ><span style="font-size: 30px;">  {{$cartitem->itm_price}} </span>  </td>

            <td>
            <button type="button" id="rem_{{$cartitem->menu_item_id}}" class="btn btn-danger btn-sm removebtn" aria-label="Left Align">
                <ion-icon name="close"></ion-icon>
             </button>
            </td>
          </tr>
          
          
          @endforeach
          
         
        </tbody>
      </table>

                  
    </div>


<div class="col-md-4" id="drinks_{{$chefid}}" style="display:none">
        
        <?php 
        $drsec = $value[0]->drinks;
        $dr = json_decode($drsec); 
        $did=0;           
        ?>

<table class="table table-hover" style="margin: 20px">
        <thead>
          <tr class="well-flat">
            <th scope="col">SNo</th>
            <th scope="col">Drink</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody class="well-flat">

        @foreach($dr as $dname=>$dvalue)
<tr>
        <?php  $did++; ?>
<th scope="row">
{{$did}}
</th>
<td> {{$dname}} </td>
<td>


<input type="number" id="{{$chefid}}" class="form-control drinksquantitycart" name="drnkquantity" min="1" max="10" value="{{$dvalue->qty}}" style="text-align: center;width:70px;">

</td>
{{-- <td>  {{$dvalue->qty}}</td> --}}

<td> <span style="font-size: 30px;"> {{$dvalue->price}} </span> </td>

</tr>
        @endforeach

        </tbody>
</table>

    </div>
</div>
      <div class="row" style="margin: 20px">
          <div class="col-md-6">
                <a href="/checkout/{{$chefid}}"  class="btn btn-primary btn-lg" style="float: left; background-color : #479f55" id="checkout_{{$chefid}}" >Proceed to Checkout</a>            
          </div>
    
          
          <div class="col-md-4" style="float:right; color: yellow">
               <span  style="font-size: 30px;" class="well-flat"><strong> Total:  </strong> </span> <span class="" style="font-size: 30px;"> $ </span> <span style="font-size: 30px;" id="tot_{{$chefid}}"> {{$totsum}}</span>   
          </div>


         
      </div>

    
   
    @endforeach

  </div>

  @endsection