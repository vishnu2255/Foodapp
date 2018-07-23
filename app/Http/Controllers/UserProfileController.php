<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class UserProfileController extends Controller
{
    protected $user;

    public function __construct()
    {
          
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();  
        $pro = DB::table('orders')
              ->where('id','=',$user->id)
              ->first();

        return view('userprofile')->with('pro',$pro);

    }

    public function update(Request $request)
    {
        dd($request->all());

        DB::table('users')
            ->where('id','=',$user->id)            
            ->update(['name' => $request['name'],'drnkscost' => $dsum]);

    }

}
