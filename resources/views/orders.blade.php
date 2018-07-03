
@extends('layouts.app')

@section('content')


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    <h3>Order placed</h3>
   
    </div>
@endif
<div class="container">

<h2>My Current Orders </h2>
{{-- <span>Status </span><span id="statusorder">Pending</span>  --}}
<div class="row">

    <div class="col-md-8">
            @if($curentorder->count()>0)

            @foreach($curentorder as $order)
            
     <span> <h3>OrderNum #{{$order->id}}</h3> 
     <span style="">Status <span id="statusorder{{$order->id}}">Pending</span> </strong>
     </span>
<div class="container">
        

    <div class="row">
        <div class="col-md-10 col-md-offset-2">

           
            <div class="panel panel-default">
                <div class="panel-body">

                    <ul class="list-group">

<?php $itms = unserialize($order->cart) ; $itmid=0; ?>
@foreach($itms as $itm)

<li class="list-group-item">
<?php $itmid++; ?>
<div class="row">
    <div class="col-sm-3">
            <span>Item No. {{$itmid}}</span>
    </div>
    <div class="col-sm-3">
            <span class="ml-10"> {{$itm->itm_name}} </span>
    </div>
    <div class="col-sm-3">
            <span class="ml-10"> Units {{$itm->qty}} </span>
    </div>
    <div class="col-sm-3">
        <strong>  Price <span class="">  ${{$itm->itm_price}} </span> </strong>
    </div>
    
</div>

</li>

@endforeach

<?php $drinks = unserialize($order->drnkscart) ; $itmid=0; ?>


@if($drinks!=null && $drinks->count()>0)
<h3 class="mb-3 mt-3">Drinks</h3>
@foreach($drinks as $drink)

<li class="list-group-item">
<?php $itmid++; ?>
<div class="row">
    <div class="col-sm-3">
            <span>Item No. {{$itmid}}</span>
    </div>
    <div class="col-sm-3">
            <span class="ml-10"> {{$drink->drnk_name}} </span>
    </div>
    <div class="col-sm-3">
            <span class="ml-10"> Units {{$drink->drnkqty}} </span>
    </div>
    <div class="col-sm-3">
          <strong> Price <span class="ml-10">  ${{$drink->drnk_price}} </span> </strong>
    </div>
    
</div>

</li>

@endforeach
@endif

                    </ul>

                </div>
                <div class="panel-default mt-5 pull-right">
                    <strong>Total Price : {{$order->totalamnt}}</strong>
                </div>    
            </div>

        </div>
    </div>


</div>

<hr>
@endforeach

@endif 

@csrf

{{-- old orders --}}

@if($oldorders->count()>0)
<div class="container" style="margin-top: 50px; margin-bottom: 25px" >
<div class="row">
        <div class="col-md-10 col-md-offset-2">

            <h2 class="mb-50" style="margin-bottom: 50px">My Previous Orders </h2>

            <div class="panel panel-default">
                
                    


@foreach($oldorders as $ord)
<div class="panel-body mb-3" >
<h4>Chef {{$ord->name }}</h4>
<ul class="list-group">
         <li class="list-group-item">
         <span>OrderNum  #{{$ord->id}}</span>
         <span class="ml-5">{{date($ord->created_at)}}</span>
         <span class="pull-right"> <strong>Total Price : {{$ord->totalamnt}}</strong> </span>
         
         </li>
</ul>

  </div>
@endforeach
                       
            </div>

        </div>
    </div>


</div>
@endif

</div>

<div class="col-md-4" style="float: right;">

        {{-- @include('map2') --}}

{{-- <a class="btn btn-primary btn-lg" href="http://127.0.0.1:8181/mapslocation" id="mapidbtn">
Click here to find the route    
</a>         --}}
<div style="width: 400px">
    <a href="http://127.0.0.1:8181/mapslocation" id="mapidbtn">
        <img src="../images/maps.jpg" alt="" width="100%"></a>
</div>
        
</div>

</div>


</div>

<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
// Initialize Firebase

</script>

<script>
// $("#statusorder").text(123);

        // $(document).ready(function(){
                    var orid;
                    var config = {
                    apiKey: "AIzaSyDlvh5ZOItKn1VTpdTWmndVObMtyi8WyS8",
                    authDomain: "ihearttakeout-578aa.firebaseapp.com",
                    databaseURL: "https://ihearttakeout-578aa.firebaseio.com",
                    projectId: "ihearttakeout-578aa",
                    storageBucket: "ihearttakeout-578aa.appspot.com",
                    messagingSenderId: "1026709201120"
                    };
                    firebase.initializeApp(config);
         
                    $.post('/firebase',{id:123,'_token': $('input[name=_token]').val()},function(data){
                    console.log(data);
                    var tm = data.split('_');
                    orid = tm[0];
                    userId = tm[1];
                    chefid = tm[2];
                    sta  = 'pending';
                    writeUserData(userId,orid,chefid,sta);
                    $("#statusorder").text(sta);  

                   });

        // });


function writeUserData(userId, orid, chid , sta) {
firebase.database().ref('orders/' + orid).set({
userid: userId,
chefid: chid,
status: sta
});
}
var sts = firebase.database().ref('/orders/'+ordid);

sts.on('value',function(snapshot){
  console.log(snapshot.val());
  status = snapshot.val()['status'];
  $("#statusorder").text(status);
});

</script>

<script>



</script>


@endsection

{{-- @include('map2') --}}