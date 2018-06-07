<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function __construct()
    {
        // dd(Session::all());
        $this->middleware('auth');
    }
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

        $curentorder = DB::table('orders')
                         ->join('chef_users','orders.chef_id','=','chef_users.id')
                         ->select('chef_users.name','orders.id','orders.totalamnt','orders.created_date','orders.cart')   
                         ->where('orders.customer_id',$user->id)
                         ->where('orders.isActive','yes')
                         ->get();

                         $oldorders = DB::table('orders')
                         ->join('chef_users','orders.chef_id','=','chef_users.id')
                         ->select('chef_users.name','orders.id','orders.totalamnt','orders.created_date')   
                         ->where('orders.customer_id',$user->id)
                         ->where('orders.isActive','no')
                         ->get();

                //   var_dump(unserialize($order[0]->cart));


                        //  $curentorder = $order[0];
        return view('orders')->with('curentorder',$curentorder)->with('oldorders',$oldorders);

        // var_dump($curentorder[0]->totalamnt);
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
        //

        var_dump(1);
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
