<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\chef_users;
use App\menu_items;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ChefController extends Controller
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
       //$lists = chef_users::all();
       //var_dump($lists);

       $user = Auth::user();  
       
       Session::put('userid',$user->id);
       Session::put('emailid',$user->email);
    //    Session::put('userid',$user->id);
    //    Session::put('userid',$user->id);
       
       // dd(Session::get('cartamnt'));
       $carttot = DB::table('cart')      
       ->select(DB::raw('SUM(cart.qty) as totcnt'))                       
       ->where('cart.customer_id',$user->id)       
       ->where('cart.isActive','=','yes')                    
       ->get();              
       if($carttot->count()>0)
       {
        $cnt = $carttot[0]->totcnt;

        Session::put('carttot',$cnt);

       }

       $temps = array();
       $chefs = DB::table('chef_users')->get();
       $menuval = 'sweet';
    //    $chef = DB::table('chef_users')->where('id',1)->first();

    //    die(var_dump($chefs));
       foreach($chefs as $chef)
       {
          // echo $chef->id;
          // echo "<br>";
        //    var_dump($chef);

        $testitems = DB::table('menu_items')
        ->where('chef_id',$chef->id)
        ->where('itm_name','like','%'.$menuval.'%')
        ->get();
           

                // dd($menuitems);    
         
            $menuitems = DB::table('menu_items')
                        ->where('chef_id',$chef->id)                        
                        ->get();
            $temps[$chef->id.'_'.$chef->name.'_'.$chef->profile_picture_path] = $menuitems;
                   
           

       }


    return view('chefs.dishes2')->with('temps',$temps);






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

        // return $request->all();
        $searchitem = $request['searchdish'];
        $searchcity = $request['searchcity'];
        
        $user = Auth::user();  
       
        Session::put('userid',$user->id);
        Session::put('emailid',$user->email);
     //    Session::put('userid',$user->id);
     //    Session::put('userid',$user->id);
        
        // dd(Session::get('cartamnt'));
        $carttot = DB::table('cart')      
        ->select(DB::raw('SUM(cart.qty) as totcnt'))                       
        ->where('cart.customer_id',$user->id)       
        ->where('cart.isActive','=','yes')                    
        ->get();              
        if($carttot->count()>0)
        {
         $cnt = $carttot[0]->totcnt;
 
         Session::put('carttot',$cnt);
 
        }
 
        $temps = array();

        if($searchcity!=null)
        {
        $chefs = DB::table('chef_users')
                ->where('city','like','%'.$searchcity.'%')
                ->get();
        }
        else
        {
        $chefs = DB::table('chef_users')->get();
        }
        // dd($chefs->count());
        if($chefs->count()==0)
        {
            return view('nochefsfile');
        }


        $menuval = 'sweet';
     //    $chef = DB::table('chef_users')->where('id',1)->first();
 
     //    die(var_dump($chefs));
     $totitems = 0;
     if($searchitem!=null)
     {
        $totms = DB::table('menu_items')     
        ->where('itm_name','like','%'.$searchitem.'%')
        ->get();

        $totitems = $totms->count();

        if($totitems>0)
        {

        }
        else
        {
            $totitems = 0;
        }
     }   

        foreach($chefs as $chef)
        {
           // echo $chef->id;
           // echo "<br>";
         //    var_dump($chef);

         if($totitems>0)
        {
            // dd($searchitem);
            $testitems = DB::table('menu_items')
            ->where('chef_id',$chef->id)
            ->where('itm_name','like','%'.$searchitem.'%')
            ->get();

            if($testitems->count()>0)
            {
             $menuitems = DB::table('menu_items')
                         ->where('chef_id',$chef->id)                        
                         ->get();
             $temps[$chef->id.'_'.$chef->name.'_'.$chef->profile_picture_path] = $menuitems;
            }
        }
else{

        $menuitems = DB::table('menu_items')
                         ->where('chef_id',$chef->id)                        
                         ->get();
        $temps[$chef->id.'_'.$chef->name.'_'.$chef->profile_picture_path] = $menuitems;
} 

        }
 
 
     return view('chefs.dishes2')->with('temps',$temps);        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chefprof =DB::table('chef_users')->where('id',$id)->first(); //chefs::where('id',$id)->first();
      
    //   var_dump($chefprof);
        return view('chefs.profile')->with('chefprof',$chefprof);
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
