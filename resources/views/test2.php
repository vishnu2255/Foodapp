@extends('layouts.app')

@section('content')
<div class="container" style="font-family: Helvetica;">  

<div class="col-md-11 order-md-2 mb-4" style="margin: 20px;font-family: Helvetica;">
    <h4 class="mb-3" style="text-align: center">
      {{-- <span class="text-muted" >Your cart</span> --}}
     <h3> My Cart </h3>
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
                    <a href="/chefs/{{$chefid}}" style="font-family: Helvetica;"> <b> {{$chefname}} </b> </a>    
            </h4>
    </div>

        
</div>
    

    <div class="row">

    <table class="table table-striped" style="font-family: Helvetica;margin: 20px">
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
                <h6 class="my-0" style="font-family: Helvetica;font-size: 25px;" > <strong> {{strtoupper($cartitem->itm_name)}} </strong> </h6>
                <small class="text-muted" style="font-family: Helvetica;font-size: 15px;"> {{$cartitem->itm_desc}}</small>
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

<div class="row" id="drinks_{{$chefid}}" style="">
        
        <?php 
        // $drsec = $value[0]->drinks;
        // $dr = json_decode($drsec); 
        $did=0;           
        ?>
        <div class="col-md-4"></div>
<div class="col-md-8">
    <h1 style="font-family: Helvetica;"> ADD A COLD DRINK </h1>
<table class="table table-hover" style="font-family: Helvetica;margin: 20px">
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
  <input type="text" style="font-family: Helvetica;font-size: 20px; border: 2px ; text-align: center" id="{{$drink->id}}" class="drnkscart" value="{{$drink->drnkqty==NULL?0:$drink->drnkqty}}"  name="quantity" style="width: 50px; text-align:center"  size="2" maxlength="2">
@else
  <input type="text" style="font-family: Helvetica;font-size: 20px; border: 2px ; text-align: center" id="{{$drink->id}}" class="drnkscart" value="0"  name="quantity" style="width: 50px; text-align:center"  size="2" maxlength="2">
@endif
    <button type="button" class="ml-2 btn btn-primary btn-circle drnksryt" style="border-radius: 50%;size:50%" data-type="plus" data-field="">
        {{-- <span class="glyphicon glyphicon-plus"></span> --}}
        <ion-icon name="add"></ion-icon>
    </button>

</div>

</td>
{{-- <td>  {{$dvalue->qty}}</td> --}}

<td>  <strong><span style="font-family: Helvetica; font-size: 30px;"> {{$drink->drnk_price}} </span> </strong> </td>

</tr>
        @endforeach        
        </tbody>
</table>
</div>

</div>

<div class="row">
    <div class="col-md-9"></div>
    <div class="col-md-3">
    <button id="savedrinks" class="ml-3 btn btn-danger savedrinks"> 
    Save Drinks
</button>
</div>
</div>

      <div class="row" style="margin: 20px">
      <div class="col-md-8">              
      </div>              
          <div class="col-md-4" style="float:right; color:red ">
              <strong>  <span style="font-family: Helvetica; font-size: 30px;" class="well-flat"><strong> Total:  </strong> </span> <span class="well-flat" style="font-family: Helvetica; font-size: 30px;"> $</span> <span style="font-family: Helvetica; font-size: 30px;" id="tot_val"> {{$totsum}}  </span>   
              </strong>
          </div>
         
      </div>

<div class="row" style="">
<div class="col-md-8"></div>

<div class="col-md-4" style="float:right;font-family: Helvetica; ">
                <a href="/checkout/{{$chefid}}"  class="btn btn-danger btn-lg" style="float: left;" id="checkout_{{$chefid}}" >Proceed to Checkout</a>            
          </div>
</div>
    
   
    @endforeach

  </div>
  </div>
  
  
  @endsection





  <div class="row" style="">
                            </div>
                            <div class="row" style="margin-top:100px;">
                            
                            <div class="col-md-1">
                            
                            </div>
                            
                            <div class="col-md-10" style="height:100px;background-color:rgba(0, 0, 0, 0.5);margin-bottom:200px;">                                                        
                            <form class="form" method="POST" action="/dishes">                                  
                              @csrf

                                   <div class="row" style="background-color:;margin-top:25px;">
                                   
<div class="col-md-1">
              </div>                                                                                   
<div class="col-md-4 col-sm-4">
  <div class="ui-widget">
      {{-- <label for="searchcity">City: </label> --}}
  <input type="text" name="searchcity" style="width:200px;margin-right: 2px;border: " id="searchcity" class="searchc form-control" placeholder="City">                                    
  </div>
</div>

<div class="col-md-4 col-sm-4">
    <div class="ui-widget">
  <input type="text" name="searchdish" style="width:200px;margin-right: 2px;border: " id="searchd" class="searchd form-control" placeholder="Dish">
  </div>
  </div>
<div class="col-md-2 col-sm-4">
  <button type="submit" class="btn btn-danger btn-lg">Find Chefs</button>
</div>                             
           
           <div class="col-md-2">
            </div>                                                                    
                                  </div>                                                                    
                            </form>
                            
                            
                            </div>
                            
                            <div class="col-md-1">
                            
                            </div>
                            
                            
                    </div>       



                    <div class="container">
                      
                      <form class="form-inline" method="POST" action="/dishes" style="padding-left:25%; padding-bottom:20%">                                  
                        @csrf
                              <div class="form-group">
                                  <input type="text" name="searchcity" style="width:200px;margin-right: 5px;border: solid" class="searchc form-control" placeholder="City">                                    
                                 
                                  <input type="text" name="searchdish" style="width:200px;margin-right: 5px;border: solid" class="searchd form-control" placeholder="Dish">
                              </div>
                              <button type="submit" class="btn btn-danger btn-lg">Find Chefs</button>
                      </form> 
                     
                    
                       
                                                   
              </div>
              <style>

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}

</style>


           <input type="number" id="{{$cartitem->menu_item_id.'_'.$cartitem->chef_id}}" class="btnquantitycart" value="0"  name="quantity" style="width: 50px; text-align:center"  min="0" max="4" step="1" >


                           {{--  <input type="text" style="font-size: 20px; border: 2px ; text-align: center"   value="{{$cartitem->qty}}"  name="quantity" style="width: 50px; text-align:center"  size="2" maxlength="2">
            
            <button type="button" class="ml-2 btn btn-primary btn-circle quantity-right-plus  btn-number" style="border-radius: 50%;" data-type="plus" data-field="">
                    <span class="glyphicon glyphicon-plus"></span> 
                    <ion-icon name="add"></ion-icon>
                </button> --}}