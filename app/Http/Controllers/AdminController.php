<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $da = DATE();
        // dd(getdate()['mon']);

        $strtdate = '2018-' . getdate()['mon'] . '-00 00:00:00';
        $middate = '2018-' . getdate()['mon'] . '-00 00:00:00';
        $enddate = '2018-' . getdate()['mon'] . '-00 00:00:00';


        $cheforders = DB::table('orders')
        ->join('chef_users','orders.chef_id','=','chef_users.id')
        ->select(DB::raw('SUM(orders.totalamnt) as totamnt'),'chef_users.name','chef_users.email','chef_users.bank_account_number','orders.chef_id')
        ->groupBy('chef_users.name','chef_users.email','chef_users.bank_account_number','orders.chef_id')
        ->get();


        // die(var_dump($sum1[0]->totamnt));

        $temp = array();
        $fina = array();
        foreach ($cheforders as $chef)
        {
            $temp['name'] = $chef->name;
            $temp['email'] = $chef->email;
            $temp['tot'] = $chef->totamnt;

            $temp['bank'] = $chef->bank_account_number;

            $sum1 =  DB::table('orders')
            ->join('chef_users','orders.chef_id','=','chef_users.id')
            ->select(DB::raw('SUM(orders.totalamnt) as totamnt'),'chef_users.name','chef_users.email','chef_users.bank_account_number','orders.chef_id')
            ->groupBy('chef_users.name','chef_users.email','chef_users.bank_account_number','orders.chef_id')
            ->where('orders.chef_id','=',$chef->chef_id)
            ->whereBetween('orders.created_at',['2018-'.getdate()['mon'].'-00 00:00:00','2018-'.getdate()['mon'].'-15 23:59:59'])
            ->get();


           $sum2 =  DB::table('orders')
           ->join('chef_users','orders.chef_id','=','chef_users.id')
           ->select(DB::raw('SUM(orders.totalamnt) as totamnt'),'chef_users.name','chef_users.email','chef_users.bank_account_number','orders.chef_id')
           ->groupBy('chef_users.name','chef_users.email','chef_users.bank_account_number','orders.chef_id')
           ->where('orders.chef_id','=',$chef->chef_id)
           ->whereBetween('orders.created_at',['2018-'.getdate()['mon'].'-16 00:00:00','2018-'.getdate()['mon'].'-31 23:59:59'])
           ->get();

           if($sum1->count()>0)
           {
            $temp['tot1'] = $sum1[0]->totamnt;
           }
           else
           {
            $temp['tot1'] = 0;
           }
            
           if($sum2->count()>0)
           {
            $temp['tot2'] = $sum2[0]->totamnt;
           }
           else
           {
            $temp['tot2'] = 0;
           }                 

            array_push($fina,$temp);
        }

        // var_dump($temp);
        // die(var_dump($fina));   


        $userorders = DB::table('orders')
        ->join('users','users.id','=','orders.customer_id')
        ->select(DB::raw('SUM(orders.totalamnt) as totamnt'),'users.name','users.email')
        ->groupBy('users.name','users.email')
        // ->whereBetween('orders.created_at',['2018-06-01 00:00:00','2018-06-15 23:59:59'])
        // ->havingRaw('DATEDIFF(NOW(),orders.created_at)>?',[30])
        ->get();

        return view('adminlist')->with('cheforders',$fina)->with('userorders',$userorders);        
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
        // return '43.778017'. '_'.'-79.318818';

        //return 'Pharmacy 2020 Toronto';

        //return (Session::get('chefaddress'));
        if(Session::has('chefaddress'))
        {
            $addr = Session::get('chefaddress');

            // Session::forget('chefaddress');
                
        }
        else
        {
            $addr = 'Pharmacy 2020 Toronto';
        }
        return $addr;     

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
        //
    }
}
