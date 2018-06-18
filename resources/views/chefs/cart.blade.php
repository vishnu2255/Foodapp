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

  

<div class="col-md-11 order-md-2 mb-4" style="margin: 20px">
    <h4 class="d-flex justify-content-between align-items-center mb-3" style="text-align: center">
      {{-- <span class="text-muted" >Your cart</span> --}}
      Your Cart
       {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
    </h4>

    <a href="/dishes" class="btn btn-primary pull-right">      
    Click here to add more dishes 
    </a>
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
    <div class="col-md-12 col-sm-12">
            <h4 >
                    <a href="/chefs/{{$chefid}}" style="font-family: georgia,serif"> <b> {{$chefname}} </b> </a>    
            </h4>
    </div>

        
</div>
    

    <div class="row">

        <div class="col-md-7">

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
                <h6 class="my-0" style="font-size: 25px;" > <strong> {{strtoupper($cartitem->itm_name)}} </strong> </h6>
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
               
                    <button type="button"  class="mr-2 btn btn-primary btn-circle quantity-left-minus  btn-number" style="border-radius: 50%;" data-type="minus" data-field="">
                      {{-- <span class="glyphicon glyphicon-minus"></span> --}}
                      <ion-icon name="remove"></ion-icon>
                    </button>
           
                <input type="text" style="font-size: 20px; border: 2px ; text-align: center" id="{{$cartitem->menu_item_id.'_'.$cartitem->chef_id}}" class="btnquantitycart" value="{{$cartitem->qty}}"  name="quantity" style="width: 50px; text-align:center"  size="2" maxlength="2">
            
                    <button type="button" class="ml-2 btn btn-primary btn-circle quantity-right-plus  btn-number" style="border-radius: 50%;" data-type="plus" data-field="">
                        {{-- <span class="glyphicon glyphicon-plus"></span> --}}
                        <ion-icon name="add"></ion-icon>
                    </button>
              
            </div>


              {{-- </button> --}}
              {{-- {{$cartitem->qty}} --}}
            </td>
            <td> <strong><span style="font-size: 30px;">  {{$cartitem->itm_price}} </span> </strong> </td>

            <td>
            <button type="button" style="border-radius: 50%;" id="rem_{{$cartitem->menu_item_id}}" class="btn btn-danger removebtn" aria-label="Left Align">
                <ion-icon name="close"></ion-icon>
             </button>
            </td>
          </tr>
          
          
          @endforeach
          
         
        </tbody>
      </table>

                  
    </div>


<div class="col-md-4" id="drinks_{{$chefid}}" style="">
        
        <?php 
        // $drsec = $value[0]->drinks;
        // $dr = json_decode($drsec); 
        $did=0;           
        ?>

<table class="table table-hover" style="margin: 20px">
        <thead>
          <tr class="well-flat">
            {{-- <th scope="col">SNo</th> --}}
            <th scope="col">Drink</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody class="well-flat">

        @foreach($drinks as $drink)
<tr>
        <?php  $did++; ?>
{{-- <th scope="row">
{{$did}}
</th> --}}
<td>
{{-- {{$drink->drnk_name}}  --}}
<div style="width:50px"> 
    <img src="../images/drinks/{{$drink->drnk_imagepath}}" alt="" srcset="" width="100%">
</div>
</td>
<td>


{{-- <input type="number" id="{{$chefid}}" class="form-control drinksquantitycart" name="drnkquantity" min="1" max="10" value="1" style="text-align: center;width:70px;"> --}}

<div class="input-group">
               
    <button type="button"  class="mr-2 btn btn-primary btn-circle drnksleft" style="border-radius: 50%;" data-type="minus" data-field="">
      {{-- <span class="glyphicon glyphicon-minus"></span> --}}
      <ion-icon name="remove"></ion-icon>
    </button>
@if(Session::has('drnkssum'))
  <input type="text" style="font-size: 20px; border: 2px ; text-align: center" id="{{$drink->id}}" class="drnkscart" value="{{$drink->drnkqty==NULL?0:$drink->drnkqty}}"  name="quantity" style="width: 50px; text-align:center"  size="2" maxlength="2">
@else
  <input type="text" style="font-size: 20px; border: 2px ; text-align: center" id="{{$drink->id}}" class="drnkscart" value="0"  name="quantity" style="width: 50px; text-align:center"  size="2" maxlength="2">
@endif
    <button type="button" class="ml-2 btn btn-primary btn-circle drnksryt" style="border-radius: 50%;" data-type="plus" data-field="">
        {{-- <span class="glyphicon glyphicon-plus"></span> --}}
        <ion-icon name="add"></ion-icon>
    </button>

</div>

</td>
{{-- <td>  {{$dvalue->qty}}</td> --}}

<td>  <strong><span style="font-size: 30px;"> {{$drink->drnk_price}} </span> </strong> </td>

</tr>
        @endforeach        
        </tbody>
</table>

<button id="savedrinks" class="ml-3 btn btn-danger savedrinks"> 
    Add To Cart
</button>

</div>
</div>
      <div class="row" style="margin: 20px">
          <div class="col-md-4">
                <a href="/checkout/{{$chefid}}"  class="btn btn-danger btn-lg" style="float: left;" id="checkout_{{$chefid}}" >Proceed to Checkout</a>            
          </div>
    
          
          <div class="col-md-2" style="float:right; color:red ">
              <strong>  <span style="font-size: 30px;" class="well-flat"><strong> Total:  </strong> </span> <span class="well-flat" style="font-size: 30px;"> $</span> <span style="font-size: 30px;" id="tot_val"> {{$totsum}}  </span>   
              </strong>
          </div>


         
      </div>

    
   
    @endforeach

  </div>



  @endsection