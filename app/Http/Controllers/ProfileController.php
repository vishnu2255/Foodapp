<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\chefs;

class ProfileController extends Controller
{

    public function show($id)
{
    // return $id;
    // return view('chefs.profile');

    $chefprof = chefs::where('id',$id)->first();
    return view('chefs.profile')->with('chefprof',$chefprof);
}


    public function test($id)
    {
        $chefprof = chefs::where('id',$id)->first();
        // return $chefprof;
        // return $chefprof->name;
        return view('chefs.profile')->with('chefprof',$chefprof);
    }  
}
