<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function check()
    {
        // return 123;
        return view('chefs.checkout');
    }
    public function show1()
    {
      return view('chefs.checkout');
    }
}
