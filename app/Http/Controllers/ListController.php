<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    //

    public function search(Request $request)
    {   
        // dd($request->all());

        // return ['test','abc','def'];


        $city   = $request->term1;
        $dish   = $request->term2; 

        // if($city!=null)
        // {

        //     $Searchresu[] = 'No Result Found';
        //     $Searchresu[] = 'No Result Found2';
        //     $Searchresu[] = $city;
        //     // $Searchresu[] = $dish;                    
        //     return $Searchresu;
        // }
        // $Searchresu[] = 'No';
        // return $Searchresu;
       
        if($city!=null)
        {
           $cnt = DB::table('chef_users')
                ->select('city')
                ->where('city','LIKE', '%'.$city . '%')
                ->get();
                if($cnt->count()>0)
                {
                    foreach ($cnt as $c)
                    {
                        $Searchresu[] = $c->city ;     
                    }                    
                }
                else
                {
                    $Searchresu[] = 'No Result Found';
                }
                
                return $Searchresu;
        }

        if($dish!=null)
        {
            $dsh = DB::table('menu_items')
            ->select('itm_name')
            ->where('itm_name','LIKE','%'.$dish . '%')
            ->get();

            if($dsh->count()>0)
            {
                foreach ($dsh as $value) {
                    $Searchresu[] = $value->itm_name ; 

                }                
            }
            else
            {
                $Searchresu[] = 'No Result Found';
            }
            return $Searchresu;
        }      
    }


    

    public function store(Request $request)
    {        
        // return '43.778017'. '_'.'-79.318818';

        //return 'Pharmacy 2020 Toronto';

        //return (Session::get('chefaddress'));
        return Session::get('orderid').'_'.Session::get('userid').'_'.Session::get('chefid');
    //    return 123;




    }


}
