<?php

namespace App;

use Illuminate\Support\Facades\Session;

class Tempcart
{

    public static $chefname,$chefid,$cart,$cartamnt;
    // public $t = ;
    public static $tesm = 123;
    
        //  DB::table('cart')
        // ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
        // ->select(DB::raw('SUM(menu_items.itm_price) as totsum'))                       
        // ->where('cart.customer_id',5)
        // ->where('menu_items.chef_id',$tmpid)                      
        // ->get(); 
    // define('BASEURL',Session::get('cartamnt'));
    // const BASEURL = Session::get('cartamnt');
   // $t= Session::get('cartamnt')
    public function setSession()
    {
       $tesm = Session::get('cartamnt');
    //    $this->cartamnt = Session::get('cartamnt');

    }

    public function getDetails()
    {
        dd(Session::all());
        // return $this->cartamnt;
    }
}