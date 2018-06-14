<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\cart;


class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        //

        $user = Auth::user();      
        // var_dump($user->id);

        $cart_users = DB::table('cart')
                         ->join('menu_items','menu_items.id','=','cart.menu_item_id')   
                         ->where('customer_id',Session::get('userid'))
                         ->get();

        // var_dump($cart_users);                 
        // foreach($cart_users as $cart_user)
        // {
        //     echo "<pre>";
        //     echo $cart_user->qty;
        //     // var_dump($cart_user);
        //     echo "</pre>";

        // }       

        //  return view('chefs.checkout')->with('cartitems',$cart_users);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return 123;
          DB::table('cart')
            ->insert([
                ['customer_id' => 2 , 'menu_item_id'=>1 , 'qty' => 1  ]
            ]);
            return 123;
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

         //return $cartitems;

        foreach($cartitems as $cartitem)
        {
            $menuitemid = explode('_',$cartitem)[0];
            $chefid     = explode('_',$cartitem)[1];

            // echo $menuitemid . $chefid;
            DB::table('cart')
            ->insert([
                ['customer_id' => 2 , 'menu_item_id'=>$menuitemid , 'qty' => 1  ]
            ]);
        }

        //return "done";



        // $str= implode(',')

        // $itemslist = '';

        // var_dump($items);

        // foreach($items as $item)
        // {
        //     echo $item;

        // }
        
        //  return $request->all();

        // return view('chefs.checkout');

    //   return  redirect('chefs/checkout');
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

if(!Session::has('cart'))
{
return redirect()->route('/dishes');
}

        $tmpid = $id;
        $itemslist = Session::get('cart');
        // $chef_det = DB::table('chef_users')->select('name')->where('id',$id)->first();
        
        // $tmpname = $chef_det->name;
        
    
        // $itemslist = DB::table('cart')
        //                  ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
        //                 //  ->select(DB::raw('SUM(menu_items.itm_price) as totsum'),'cart.*','menu_items.*')
        //                  ->where('cart.customer_id',5)
        //                  ->where('menu_items.chef_id',$tmpid)                      
        //                  ->get(); 
         
        

        // $sum = DB::table('cart')
        // ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
        // ->select(DB::raw('SUM(menu_items.itm_price) as totsum'))                       
        // ->where('cart.customer_id',5)
        // ->where('menu_items.chef_id',$tmpid)                      
        // ->get(); 

        //  die(var_dump($tmpval));
    //   $tmpsum = $sum[0]->totsum;
    
    //   $tmpsum = Session::get('cartamnt');

      $tmpsum = Session::get('cartdrnkssum');
      
      $hst = round($tmpsum*0.13,2) ;
      
      $totsum =   $tmpsum + $hst ;

      Session::put('totsum',$totsum);
      $tmpname = Session::get('chefname');
      $tmparr = array();
      $tmparr[0] = $tmpname;
      $tmparr[1] = $tmpsum;
      $tmparr[2] = $hst;
      $tmparr[3] = $totsum;
      $tmparr[4] = $tmpid;
      
// var_dump($itemslist);

        return view('chefs.checkout')->with('itemslist',$itemslist)->with('tmparr',$tmparr);  
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
