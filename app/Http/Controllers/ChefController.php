<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\chef_users;
use App\menu_items;

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
    //    $lists = chef_users::all();
       //var_dump($lists);

       $temps = array();
       $chefs = DB::table('chef_users')->get();
    //    $chef = DB::table('chef_users')->where('id',1)->first();

    //    die(var_dump($chefs));
       foreach($chefs as $chef)
       {
          // echo $chef->id;
          // echo "<br>";
        //    var_dump($chef);


           $menuitems = DB::table('menu_items')->where('chef_id',$chef->id)->get();

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
