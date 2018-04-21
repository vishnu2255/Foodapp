<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chefs;
use App\chefs_menuses;
use App\chef_dishes;

class ChefsController extends Controller
{

    public function test($id)
    {
        $disharray=array();
        $menus =chefs_menuses::where('chefid',$id)->get(); 
        foreach($menus as $menu)
        {
         $did = $menu->dishid;
         $dishes = chef_dishes::where('dish_id',$did)->get();
         foreach($dishes as $dish)
         {
            // echo($dish);
            $disharray[] = $dish;
         }
        }
        
        return view('chefs.menus')->with('dishes',$disharray);

    }

    public function test1($id)
    {
        
        $disharray=array();
        $menus =chefs_menuses::where('chefid',$id)->get(); 
        foreach($menus as $menu)
        {
         $did = $menu->dishid;
         $dishes = chef_dishes::where('dish_id',$did)->get();
         foreach($dishes as $dish)
         {
            // echo($dish);
            $disharray[] = $dish;
         }
        }
        
        return view('chefs.menus')->with('dishes',$disharray);

    }    

    public function show()
    {                               
        $chefs = chefs::all();
        // return $chefs;
        // return view('chefs.chefslist')->with('chefs',$chefs);
        return view('chefs.dummy')->with('chefs',$chefs);

    }

//     public function test($id)
//     {  
//         $disharray=array();
//         $menus =chefs_menuses::where('chefid',$id)->get(); 

//        //return $menus;
//         foreach($menus as $menu)
//         {
//          $did = $menu->dishid;
//          $dishes = chef_dishes::where('dish_id',$did)->get();
//          foreach($dishes as $dish)
//          {
//             // echo($dish);
//             $disharray[] = $dish;
//          }
//         }
// // print_r($disharray);
//        // return view('chefs.menus')->with('menus',$menus);
//        return view('chefs.menus')->with('dishes',$disharray);
//        // return $chefs;

//       //echo var_dump($chefs);
//      //return chef_dishes::all();
//     }

}
