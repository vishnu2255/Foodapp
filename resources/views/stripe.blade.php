@extends('layouts.app')

@section('content')



{{-- <script src="https://js.stripe.com/v3/"></script> --}}


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_38bijvWZk6dGkZe9s47jqepM');
</script>

<script>
    $(function() {
    var $form = $('#payment-form');
    $form.submit(function(event) {
        // Disable the submit button to prevent repeated clicks:
        $form.find('.submit').prop('disabled', true);

        // Request a token from Stripe:
        Stripe.card.createToken($form, stripeResponseHandler);

        // Prevent the form from being submitted:
        return false;
    });
});

function stripeResponseHandler(status, response) {
    // Grab the form:
    var $form = $('#payment-form');

    if (response.error) { // Problem!

        // Show the errors on the form:
        $form.find('.payment-errors').text(response.error.message);
        $form.find('.submit').prop('disabled', false); // Re-enable submission

    } else { // Token was created!

        // Get the token ID:
        var token = response.id;

        // Insert the token ID into the form so it gets submitted to the server:
        $form.append($('<input type="hidden" name="stripeToken">').val(token));

        // Submit the form:
        $form.get(0).submit();
    }
};
</script>


<div class="container">

    <div class="row">
<div class="col-md-4">  </div>

<div class="col-md-4">
        <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                <div class="row display-tr" >
                <h3 class="panel-title display-td" >Payment Details</h3>
                <div class="display-td">                            
                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                </div>
                </div>                    
                </div>
            </div>

    
    <form action="/store" method="POST" id="payment-form">
        {{csrf_field()}}
        <span class="payment-errors"></span>

        <div class="form-row">
            <label>
                <span>Card Number</span>
                <input class="form-control" type="text" size="20" data-stripe="number" required>
            </label>
        </div>

        <div class='form-row'>
                <div class='col-xs-4 form-group cvc required'>
                  <label class='control-label'>CVC</label>
                  <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' maxlength="3">
                </div>
                <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'>Expiration</label>
                  <input class='form-control card-expiry-month' placeholder='MM' data-stripe="exp_month" size='2' type='text' maxlength="2">
                </div>
                <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'> </label>
                  <input class='form-control card-expiry-year' placeholder='YYYY' data-stripe="exp_year" size='4' type='text' maxlength="4">
                </div>
        </div>

        {{-- <div class="form-row">
                <div class="col-sm-4">
                 <span>Expiration (MM/YY)</span>
               
                </div>

            <div class="col-sm-3">
               
                <input class="form-control" type="text" size="2" data-stripe="exp_month" required maxlength="2" >
            </div>
                
            <div class="col-sm-3">
                    <input class="form-control" type="text" size="2" data-stripe="exp_year" required maxlength="2">        
            </div>
               
              
        </div> --}}

        {{-- <div class="form-row">
            <label>
                <span>CVC</span>
                <input class="form-control" type="text" size="4" data-stripe="cvc" required maxlength="3">
            </label>
        </div> --}}


        <div class='form-row'>
                <div class='col-md-12'>
                  <div class='form-control total btn btn-info'>
                    Total:
                  <span class='amount'>{{Session::get('totsum')+(Session::has('tip')?Session::get('tip'):0) }}</span>
                  </div>
                </div>
        </div>
             
        <div class='form-row'>
                <div class='col-md-12 form-group'>
                        <button type="submit" class="form-control btn btn-success" value="Submit Payment">Pay »</button>
                </div>
         </div>
         
         <div style="height:250px">
               
        </div>
        
    </form>
    </div>
</div>

<div class="col-md-4">  </div>        
    </div>

@endsection

