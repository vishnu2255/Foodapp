<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\cart;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmMail;


class Stripe extends Controller
{

    public function __construct()
    {
        // dd(Session::all());
        $this->middleware('auth');
    }

    
    public function stripepay(Request $request)
    {

//  dd(Session::all());
    }

    public function check(Request $request)
    {
dd($request->all());
//  dd(Session::all());
    }


    public function store(Request $request)
    {
// dd($request->all());


if(!Session::has('cart'))
{
return redirect('/dishes');
}

\Stripe\Stripe::setApiKey("sk_test_j2XNbl89OnvzjQNkHV7KHaeV");
    $token = $_POST['stripeToken'];

    try{

        $customer = \Stripe\Customer::Create(array(
            'email' =>  Session::get('emailid'),
            'source' => $token,
        ));
        $am = (float)(Session::get('totsum')+(Session::has('tip')?Session::get('tip'):0));
        // $am = (float)Session::get('totsum');
        $am = round($am,2);
        $amnt =$am*100;

        $charge = \Stripe\Charge::create([
            'amount' => $amnt,
            'currency' => 'cad',
            'description' => 'Example charge',
            // 'source' => $token,
            'customer' => $customer->id,             
            ]);

            $cart = serialize(Session::get('cart'));
            $drinks = serialize(Session::get('drinks'));

        DB::table('orders')
        ->insert(
            [  'chef_id' => Session::get('chefid'),
               'customer_id' =>  Session::get('userid'),
               'menu_item_id' => 1,
               'payment_id' => $charge->id,
               'cart'  => $cart, 
               'drnkscart' => $drinks,
               'totalamnt' => $am,
               'isActive'  => 'yes'

            ]
        );

        DB::table('cart')
        ->where('customer_id','=',Session::get('userid'))
        ->where('isActive','=','yes')
        ->update(['isActive' => 'no']);

        // DB::table('drinkscart')
        // ->where('user_id','=',Session::get('userid'))
        // ->where('isActive','=','yes')
        // ->update(['isActive' => 'no']);

        DB::table('drinkscart')->where('user_id','=',Session::get('userid'))->delete();

        Session::forget('cartamnt');
        Session::forget('totsum');
        Session::forget('cart');
        Session::forget('carttot');
        Session::forget('cartdrnkssum');
        Session::forget('drnkssum');
        Session::forget('drinks');
        Session::forget('tip');        
        
        // Mail::to(Session::get('emailid'))->send(new WelcomeAgain());
        Mail::to(Auth::user()->email)->send(new OrderConfirmMail());
        
        // Session::forget('chefid');

        // return redirect()->action('OrderController@Index',['status','success']);
            return redirect('/orders')->with('status','Success');
    }
    catch(\Exception $e)
    {
        // return redirect('/cart')->with('status','Failed');
        echo $e->getMessage();
    }

//  dd(Session::all());
    }

    public function pay(Request $request)
    {
        // dd($request->all());

        if(!Session::has('cart'))
        {
            return redirect('/dishes');

        }

        return view('stripe');
    }

    

    public function paytip(Request $request)
    {   
        return 123;

    }
}
