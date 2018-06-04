<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\cart;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    
    //  public $sum;
     public function __construct()
    {
        // dd(Session::all());
        // $this->middleware('auth');
    } 
    public $sum ;
    
    public function index()
    {
        $user = Auth::user();  
        echo $user->id;
        // $cart = serialize(Session::get('cart'));
        // dd($cart);

        // dd(Session::all());

        // $request->session()->put('test',123);
        $sum= Session::get('cartamnt');

                if(!Session::has('cart'))
                {
                return redirect()->route('/dishes');
                }
        $totsum = Session::get('totsum');  
        // dd($totsum*100);      
        return view('payment')->with('sum',$totsum);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function pay(Request $request)
    {
        dd(Session::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        dd(Session::all());

        // $user = Auth::user();  
        // echo $user->id;
        // dd($user->id);
        // dd($this->sum);   

        // dd($request->all());
        // dd(Session::get('cartamnt'));
      
  // Set your secret key: remember to change this to your live secret key in production
  // See your keys here: https://dashboard.stripe.com/account/apikeys

try{

      \Stripe\Stripe::setApiKey("sk_test_j2XNbl89OnvzjQNkHV7KHaeV");
  
  // Token is created using Checkout or Elements!
  // Get the payment token ID submitted by the form:
      $token = $_POST['stripeToken'];

    //   $sum = DB::table('cart')
    //     ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
    //     ->select(DB::raw('SUM(menu_items.itm_price) as totsum'))                       
    //     ->where('cart.customer_id',6)
    //     ->where('menu_items.chef_id',1)                      
    //     ->get();

      $customer = \Stripe\Customer::Create(array(
          'email' => 't@gmail.com',
          'source' => $token,
      ));

    //   $tot =   Session::get('totsum')*100;    
     
    //   dd($tot);
      $charge = \Stripe\Charge::create([
      'amount' => 1000,
      'currency' => 'cad',
      'description' => 'Example charge',
    //   'source' => $token,
      'customer' => $customer->id,
       
      ]);
      Session::put('status',"Transaction Success");
    //   $test = $charge . ' , ' . 12;
    //   dd($charge->id);
    // $cart = serialize(Session::get('cart'));
    // DB::table('orders')
    //     ->insert(
    //         [  'chef_id' => Session::get('chefid'),
    //            'customer_id' => Session::get('userid'),
    //            'menu_item_id' => 1,
    //            'payment_id' => $charge->id,
    //            'cart'  => $cart 

    //         ]
    //     );
// dd($cart);
      return redirect('/dishes')->with('status','Success');
    }
    catch(\Exception $ex)
    {
        return redirect('/dishes')->with('status','Failed');
        //  return $ex->getMessage();
        //  Session::put('status',"Transaction Failed");
    }

    

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $sum = DB::table('cart')
        ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
        ->select(DB::raw('SUM(menu_items.itm_price) as totsum'))                       
        ->where('cart.customer_id',5)
        ->where('menu_items.chef_id',$id)                      
        ->get(); 

        //  die(var_dump($tmpval));
      $tmpsum = $sum[0]->totsum;
    
      $hst = round($tmpsum*0.13,2) ;
      
      $totsum =   $tmpsum + $hst ;
    //   var_dump($totsum);
      $sum = $totsum;


      return view('payment')->with('sum',$totsum);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
