<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\cart;


class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $user = Auth::user();      
        // var_dump($user->id);

        $cart_users = DB::table('cart')
                         ->join('menu_items','menu_items.id','=','cart.menu_item_id')   
                         ->where('customer_id',2)
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

        return view('chefs.checkout');  
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
