<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\cart;


class Stripe extends Controller
{
    public function stripepay(Request $request)
    {

//  dd(Session::all());
    }

    public function pay()
    {

        return view('stripe');
    }

 
}
