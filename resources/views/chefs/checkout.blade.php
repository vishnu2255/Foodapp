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

<div class="container">

  <form action="/order" method="post">
      <h4>{{$tmparr[0]}} </h4>
<div class="row">

<div class="col-md-6" >


    <ul class="list-group">
        <li class="list-group-item" style="background-color: orange">Order Details</li>
        <li class="list-group-item">
          <span class="text-muted">Food & Bevarage Subtotal </span>
          <span name="sumamnt" style="float: right"> ${{$tmparr[1]}} </span>
        </li>
        <li class="list-group-item">
            <span class="text-muted">HST </span>
            <span name="hst" style="float: right"> ${{$tmparr[2]}} </span>
        </li>
        <li class="list-group-item"><span> <b>Total</b> </span>
          <span name="totsum" style="float: right"> ${{$tmparr[3]}} </span></li>
      </ul>

      <hr class="featurette-divider"> 

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Payment Method</label>
          </div>
          <select class="custom-select" name="payment_option" id="inputGroupSelect01">
            
            <option value="1" selected >Credit Card</option>
            <option value="2">Cash</option>
            <option value="3">Interact</option>

          </select>
      </div>

      
      <div>
         
          <ul class="" id="payment_cc" style="list-style: none; float: left">
              <li>
                {{-- <div class="col-md-12 mb-3" style="">                --}}
                <input class="form-control mb-3" style="width: 350px" type="text" name="ccnum" placeholder="Credit Card Number">
                {{-- </div> --}}
              </li>
              <li>
                  <div class="row mb-3">
                     
                    <div class="col-md-4">
           
                      <select class="form-control" id="inputGroupSelect01" name="cc_pay_mon">
                          <option value="0" selected >Month</option>
                          <option value="1">01-Jan</option>
                          <option value="2">02-Feb</option>
                          <option value="3">03-Mar</option>
                          <option value="4">04-Apr</option>
                          <option value="5">05-May</option>
                          <option value="6">06-Jun</option>
                          <option value="7">07-Jul</option>
                          <option value="8">08-Aug</option>
                          <option value="9">09-Sep</option>
                          <option value="10">10-Oct</option>
                          <option value="11">11-Nov</option>
                          <option value="12">12-Dec</option>
                        </select>
           
                      </div>

                      <div class="col-md-4">
                     
                        <select class="form-control" id="inputGroupSelect01" name="cc_pay_year">
            
                            <option value="0" selected >Year</option>
                            <option value="1">2018</option>
                            <option value="2">2019</option>
                            <option value="3">2020</option>
                            <option value="4">2021</option>
                            <option value="5">2022</option>
                            <option value="6">2023</option>
                            <option value="7">2024</option>
                            <option value="8">2025</option>
                            <option value="9">2026</option>
                            <option value="10">2027</option>
                            <option value="11">2028</option>
                
                          </select>

                        </div>

                        <div class="col-md-4">

                          <div class="input-group mb-3">
                              <input type="text" class="form-control" name="cc_pay_cvv" placeholder="CVV">
                              <div class="input-group-append">
                                <span class="input-group-text" data-toggle="tooltip" data-placement="bottom" title="3-4 digit number typically on the back of your card" > <strong>?</strong> </span>
                              </div>
                            </div>
                          </div>
                    </div>
              </li>

              <li>
                <button  type="submit" class="btn btn-small" style="background-color: red">Confirm</button>
              </li>


          </ul>  
  
        </div>





    </div>

    <div class="col-md-6">

        <ul class="list-group">
            <li class="list-group-item" style="background-color: orange">Order Items</li>

            @foreach($itemslist as $item)

            <li class="list-group-item">
                <span class="text-muted">{{$item->itm_name}}</span>
                <span style="float: right">${{$item->itm_price}} </span>
            </li>

            @endforeach

            
          </ul>
     
    </div>
        
</div>
</form>  

</div>


@endsection