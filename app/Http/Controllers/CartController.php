<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmMail;

class CartController extends Controller
{
    public $user;

    public function __construct()
    {
          
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Mail::to(Auth::user()->email)->send(new OrderConfirmMail());
        $user = Auth::user();            
// dd(Session::get('cartamnt'));
$crtdel =   DB::table('cart')
->where('customer_id','=',$user->id)
->where('isActive','=','yes')
->get();

        if(!$crtdel->count()>0)
        {
            // return redirect()->back();
            return redirect('/dishes');
        }

        // dd("fail");

        $cart_chefs = DB::table('cart')
                         ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
                         ->select('menu_items.chef_id')  
                         ->where('customer_id',$user->id)
                         ->where('cart.isActive','=','yes')
                         ->distinct()
                         ->get();
                        

    //    die(var_dump($cart_chefs));
       $finalarray = array();
       foreach($cart_chefs as $chef)
       {
        //    var_dump($chef->chef_id);
        $tmpid = $chef->chef_id;
        $chef_det = DB::table('chef_users')->where('id',$chef->chef_id)->first();

        // var_dump($chef_det->name);
        $tmpname = $chef_det->name;

        $chefaddress = $chef_det->home_address.' '.$chef_det->city.' '.$chef_det->province_state;
// dd($chefaddress);
        Session::put('chefaddress',$chefaddress);

        // dd($chefaddress);
        Session::put('chefname',$tmpname);
        Session::put('chefid',$tmpid);

        $tmpval = DB::table('cart')
                         ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
                         ->where('cart.customer_id',$user->id)
                         ->where('menu_items.chef_id',$tmpid)  
                         ->where('cart.isActive','=','yes')                    
                         ->get(); 

                           

         
        Session::put('cart',$tmpval);                 
        // var_dump($tmpval);

        $sum = DB::table('cart')
        ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
        ->select(DB::raw('SUM(menu_items.itm_price*cart.qty) as totsum'))                       
        ->where('cart.customer_id',$user->id)
        ->where('menu_items.chef_id',$tmpid)   
        ->where('cart.isActive','=','yes')                    
        ->get(); 

        $carttot = DB::table('cart')
        // ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
        ->select(DB::raw('SUM(cart.qty) as totcnt'))                       
        ->where('cart.customer_id',$user->id)
        // ->where('menu_items.chef_id',$tmpid)   
        ->where('cart.isActive','=','yes')                    
        ->get(); 
        
        $cnt = $carttot[0]->totcnt;





        Session::put('carttot',$cnt);
// // die(var_dump($sum[0]->totsum));
$tmpsum = $sum[0]->totsum;

Session::put('cartamnt',$tmpsum);    

$d = DB::table('drinkscart')
    ->where('user_id',$user->id)
    ->where('isActive','=','yes')
    ->get();
//die(var_dump($d));

        if($d->count()>0)
        {
            // $tmpsum = $tmpsum + Session::get('drnkssum');
            $drinks =  DB::table('drinks')
            ->leftjoin('drinkscart','drinks.id','=','drinkscart.drinkid')
            ->where('drinks.chef_id','=',$tmpid)
            // ->where('drinkscart.isActive','=','yes') 
            // ->where('drinkscart.user_id',$user->id)         
            ->get();

            $sumd = DB::table('drinkscart')
            ->select(DB::raw('SUM(drnkscost) as totsum')) 
    ->where('user_id',$user->id)
    ->where('isActive','=','yes')
    ->get();

    Session::put('drnkssum',$sumd[0]->totsum);
    $tmpsum = $tmpsum +  Session::get('drnkssum');

    //   die(var_dump($drinks));


        }

        else
        {
            Session::forget('drnkssum');
                  $drinks = DB::table('drinks')
                                  ->where('chef_id',$tmpid)
                                    ->get();
                        //    Session::put('drinks',$drinks);
        }

// $tmpsum = Session::get('cartamnt');
Session::put('cartdrnkssum',$tmpsum);
$tmpkey = $tmpid . '_' . $tmpname.'_'.$tmpsum;


        $finalarray[$tmpkey] = $tmpval;

        
       }


// echo "<pre>";
// var_dump($drinks);
// echo"</pre>";

// die(var_dump($drinks));

        // Mail::to(Session::get('emailid'))->send(new WelcomeAgain());
        return view('chefs.cart')->with('chefcarts',$finalarray)->with('drinks',$drinks);


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
        $user = Auth::user();      
        if($request->has('ite'))
        {
            $drinks = ($request['ite']);
        //    return $drinks;
           $tmp=0;

           foreach ($drinks as $key => $value) {
             if($value!=null)
             {
                $drinkid = $key;
                $drinkqty = $value;
 
              // return $key.$value;
                $drnkssum = DB::table('drinks')
                            ->select('drnk_price')                           
                            ->where('id',$drinkid)
                            ->get();
                $tmp = $tmp + $value * ($drnkssum[0]->drnk_price);
                $dsum = $value * ($drnkssum[0]->drnk_price);
// return $dsum;
                $ct = DB::table('drinkscart')
                ->where('drinkid','=',$drinkid) 
                ->where('user_id','=',$user->id)
                ->where('isActive','=','yes')
                              
               
                ->get();
        
            //   return $ct->count();
            //   return $getcnt->count();
        
               if($ct->count() > 0)
        {
            $upda = DB::table('drinkscart')
            ->where('drinkid','=',$drinkid)
            ->where('user_id','=',$user->id)
            ->where('isActive','=','yes')
            ->update(['drnkqty' => $value,'drnkscost' => $dsum]);              
        }
        else
        {
                DB::table('drinkscart')
                    ->insert([
                        ['user_id' => $user->id , 'drinkid'=> $drinkid  , 'drnkqty' => $value , 'isActive' => 'yes' ,'chefid'=>Session::get('chefid') , 'drnkscost'=>$dsum] 

                   ]);
        
        }

        $drinkssec = DB::table('drinkscart')       
        ->join('drinks','drinkscart.drinkid','=','drinks.id')
        ->where('drinkscart.user_id','=',$user->id)
        ->where('drinkscart.isActive','=','yes')
        ->get();
        Session::put('drinks',$drinkssec);

             }
           }

           DB::table('drinkscart')->where('drnkqty','=',0)->delete();
           //return $id;

           $sumd = DB::table('drinkscart')
           ->select(DB::raw('SUM(drnkscost) as totsum')) 
   ->where('user_id',$user->id)
   ->where('isActive','=','yes')
   ->get();
           Session::put('drnkssum',$sumd[0]->totsum);
           Session::put('cartdrnkssum',Session::get('cartamnt')+ Session::get('drnkssum'));
        return Session::get('cartamnt')+ Session::get('drnkssum');

        }
        else{
            //return 123;

        }

        // return $this->user->id;
        Session::put('userid',$user->id);
        Session::put('email',$user->email);

        // return Session::get('userid');

        $cartitems = $request['items'];
       
        // $chef_id = explode('_',$cartitems[])[1];
        $item_id = explode('_',$cartitems[0]);
        // $chef_id = explode('_',$cartitems[0]);
        // return $request['items'];
        $it =  $item_id[0];
        $cd =  $item_id[1];
        $qty = $item_id[2];

  

        $getcnt = DB::table('cart')
        ->where('isActive','=','yes')
        ->where('menu_item_id','=',$it)
        ->where('customer_id','=',$user->id)
        ->get();

    //   return $getcnt;
    //   return $getcnt->count();

       if($getcnt->count() > 0)
{
    $getcnt = DB::table('cart')
    ->where('menu_item_id','=',$it)
    ->where('customer_id','=',$user->id)
    ->where('isActive','=','yes')
    ->update(['qty' => $qty]);


}
else
{
        DB::table('cart')
            ->insert([
                ['customer_id' => $user->id , 'menu_item_id'=> $it  , 'qty' => 1 , 'isActive' => 'yes' ,]
            ]);

}


$totsumamnt = DB::table('cart')
->join('menu_items','menu_items.id','=','cart.menu_item_id') 
->select(DB::raw('SUM(menu_items.itm_price*cart.qty) as totsum'))                       
->where('cart.customer_id',$user->id)
->where('cart.isActive','=','yes')
->where('menu_items.chef_id',$cd)                      
->get(); 

$am = $totsumamnt[0]->totsum;

Session::put('cartamnt',$am);

$carttot = DB::table('cart')
// ->join('menu_items','menu_items.id','=','cart.menu_item_id') 
->select(DB::raw('SUM(cart.qty) as totcnt'))                       
->where('cart.customer_id',$user->id)
// ->where('menu_items.chef_id',$tmpid)   
->where('cart.isActive','=','yes')                    
->get(); 

$cnt = $carttot[0]->totcnt;
Session::put('carttot',$cnt);

// return $cnt;

$tmpval = DB::table('cart')
->join('menu_items','menu_items.id','=','cart.menu_item_id') 
->where('cart.customer_id',$user->id)
->where('menu_items.chef_id',$cd)  
->where('cart.isActive','=','yes')                    
->get(); 

Session::put('cart',$tmpval); 

$menuanddrnks = Session::get('cartamnt') + (Session::has('drnkssum')?Session::get('drnkssum'):0) ;
// die(var_dump($tmpval[0]->totsum));
// return Session::get('cartamnt') . '_' . Session::get('carttot');
Session::put('cartdrnkssum',$menuanddrnks);

return $menuanddrnks . '_' . Session::get('carttot');
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
        // return $id;
        $user = Auth::user(); 
        DB::table('cart')->where('menu_item_id','=',$id)
                          ->where('customer_id','=',$user->id)
                          ->where('isActive','=','yes')
                          ->delete();

        $crtdel =   DB::table('cart')
        ->where('customer_id','=',$user->id)
        ->where('isActive','=','yes')
        ->get();
        // return ($crtdel->count());
        if($crtdel->count()>0)
        {

        }
        else
        {
            Session::forget('cartamnt');
        }

        return $id;
 

    }
}
