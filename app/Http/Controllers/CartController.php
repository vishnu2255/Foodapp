<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $tmpval = DB::table('cart')
        //                  ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
        //                  ->select(DB::raw('SUM(menu_items.itm_price) as totsum'))                       
        //                  ->where('cart.customer_id',5)
        //                  ->where('menu_items.chef_id',2)                      
        //                  ->get(); 
         
        // die(var_dump($tmpval));


        $user = Auth::user();      
        // var_dump($user->id);

        // $menitems = DB::table('cart')
        //             ->select('menu_item_id') 
        //             ->where('customer_id',5)
        //                                      ->get();
        // var_dump($menitems);


        $cart_chefs = DB::table('cart')
                         ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
                         ->select('menu_items.chef_id')  
                         ->where('customer_id',5)
                         ->distinct()
                         ->get();

    //    die(var_dump($cart_chefs));
       $finalarray = array();
       foreach($cart_chefs as $chef)
       {
        //    var_dump($chef->chef_id);
        $tmpid = $chef->chef_id;
        $chef_det = DB::table('chef_users')->select('name')->where('id',$chef->chef_id)->first();

        // var_dump($chef_det->name);
        $tmpname = $chef_det->name;

        // $tmpsum  =  DB::table('cart')
        //                 ->join('menu_items','menu_items.id','=','cart.menu_item_id')
        //                 ->

    
        
        // echo $tmpkey ;

        $tmpval = DB::table('cart')
                         ->join('menu_items','menu_items.id','=','cart.menu_item_id') 

                         ->where('cart.customer_id',5)
                         ->where('menu_items.chef_id',$tmpid)                      
                         ->get(); 
         
        // var_dump($tmpval);

        $sum = DB::table('cart')
        ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
        ->select(DB::raw('SUM(menu_items.itm_price) as totsum'))                       
        ->where('cart.customer_id',5)
        ->where('menu_items.chef_id',$tmpid)                      
        ->get(); 

// die(var_dump($sum[0]->totsum));
$tmpsum = $sum[0]->totsum;
        
$tmpkey = $tmpid . '_' . $tmpname.'_'.$tmpsum;


        $finalarray[$tmpkey] = $tmpval;

        
       }


// echo "<pre>";
// var_dump($finalarray);
// echo"</pre>";

               return view('chefs.cart')->with('chefcarts',$finalarray);


        //                  return view('chefs.cart')->with('cartitems',$cart_users);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartitems = $request['items'];
        
        // return $request->all();
// return $cartitems;
        //    return var_dump($cartitems[0]);       
        //  return explode('_',$cartitems[])[0];
       
        // $chef_id = explode('_',$cartitems[])[1];
        $item_id = explode('_',$cartitems[0]);
        // $chef_id = explode('_',$cartitems[0]);
        // return $request['items'];
        $it =  $item_id[0];
        $cd =  $item_id[1];
        $qty = $item_id[2];

    //    return $it.$cd.$qty;

        // $getcnt = DB::table('cart')
        //          ->whereExists(function($query)
        //          {
        //              $query->select(DB::raw(1))
        //              ->from('cart')
        //              ->whereRaw('cart.customer_id ','=',5)
        //              ->whereRaw('cart.menu_item_id',',',9);

        //          })->get();

        $getcnt = DB::table('cart')
        // ->where('customer_id ','=',5)
        ->where('menu_item_id','=',$it)
        ->where('customer_id','=',5)
        ->get();
            
      
        // return $getcnt->count();

       if($getcnt->count() > 0)
{
    $getcnt = DB::table('cart')
    // ->where('customer_id ','=',5)
    ->where('menu_item_id','=',$it)
    ->where('customer_id','=',5)
    ->update(['qty' => $qty]);
}
else
{
        DB::table('cart')
            ->insert([
                ['customer_id' => 5 , 'menu_item_id'=> $it  , 'qty' => 1  ]
            ]);

}

        
        
             return 'done';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
