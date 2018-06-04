<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/payment','PaymentController@store');

Route::post('/pay','Stripe@stripepay');

Route::post('/payment2',function () {

  dd(Session::all());
var_dump($_POST['totsumamnt']);
//     dd($request->all());
//     // Set your secret key: remember to change this to your live secret key in production
//   // See your keys here: https://dashboard.stripe.com/account/apikeys
//   \Stripe\Stripe::setApiKey("sk_test_j2XNbl89OnvzjQNkHV7KHaeV");
  
//   // Token is created using Checkout or Elements!
//   // Get the payment token ID submitted by the form:
//       $token = $_POST['stripeToken'];
//       $charge = \Stripe\Charge::create([
//       'amount' => 10000,
//       'currency' => 'cad',
//       'description' => 'Example charge',
//       'source' => $token,
  
  
//       ]);
//       dd("successpayment");
  });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
