@extends('layouts.app')

@section('content')
<form method="POST" action="/pay2">
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

  {{-- <form action="/payment/{{$tmparr[4]}}" method="post"> --}}
      
    <div class="row mb-3">

      <div class="col-md-4">
          <h4>{{$tmparr[0]}} </h4>
      </div>
      
      <div class="col-md-8">
          <a href="/dishes" class="btn btn-primary pull-right" style="float: right">      
            Click here to add more dishes 
          </a>
      </div>      
    </div>
<div class="row">

<div class="col-md-6" >


    <ul class="list-group">
        <li class="list-group-item" style="background-color: orange">Order Details</li>
        <li class="list-group-item">
          <span style="font-family: georgia,serif" class="">Food & Bevarage Subtotal </span>
         <strong> <span  name="sumamnt" style="float: right" style="font-family: georgia,serif" > ${{$tmparr[1]}} </span> </strong>
        </li>
        <li class="list-group-item">
            <span style="font-family: georgia,serif" class="">HST </span>
            <strong> <span name="hst" style="float: right"> ${{$tmparr[2]}} </span> </strong>
        </li>
        <li class="list-group-item"><span style="font-family: georgia,serif"> <b>Total</b> </span>
          <strong> <span name="totsum" style="float: right"> ${{$tmparr[3]}} </span></li> </strong>
      </ul>

      <hr class="featurette-divider"> 

      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="background-color: salmon">Payment Method</label>
          </div>
          <select class="custom-select" name="payment_option" id="inputGroupSelect01">
            
            <option value="1" style="font-family: georgia,serif" selected> <b>Credit Card</b></option>
            {{-- <option value="2">Cash</option>
            <option value="3">Interact</option> --}}

          </select>
      </div>
      
      <div class="input-group mb-3" style="width:150px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">$</label>
          </div>
          <input class="form-control" onkeypress="validate(event)" style="width:30px;" id="tipamnt" name="tip" type="text" placeholder="Tip?" maxlength="4" > 
      </div>
  
     
    {{-- <a href="/pay2"> --}}
    <button type="submit" style="width: 300px" class="btn btn-success btn-lg">
        Pay Now
    </button>        
    {{-- </a> --}}
      
      <div style="display: none" >
         
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
                <span class=" ">{{$item->itm_name}}</span>
             <strong><span style="float: right">${{$item->itm_price}} </span></strong>
            </li>

            @endforeach

            
          </ul>
     
    </div>
        
</div>
{{-- </form>   --}}

</div>
{{csrf_field()}}
</form>
@endsection

<script>
 function validate(evt) {
                    var theEvent = evt || window.event;
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode( key );
                    var regex = /[0-9]|\./;
                    if( !regex.test(key) ) {
                      theEvent.returnValue = false;
                      if(theEvent.preventDefault) theEvent.preventDefault();
                    }
                  }
  </script>