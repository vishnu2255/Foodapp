@extends('layouts.app')

@section('content')

<br>
<br>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    <h3>Order placed</h3>
   
    </div>
@endif

<br>
<br>


<div class="container">

<h2>My Current Orders </h2>

<hr>
<br><br>
<br>

{{-- <span>Status </span><span id="statusorder">Pending</span>  --}}
<div class="row">

    <div class="col-md-8">
            @if($curentorder->count()>0)

            @foreach($curentorder as $order)
            
     <span> <h3>Order #{{$order->id}} </h3> 
     <span style="margin-bottom:30px">Status <span id="statusorder{{$order->id}}">Pending</span> </strong>
     </span>
<div class="container" style="margin-top:20px">
        

    <div class="row">
        <div class="col-md-10 col-md-offset-2">

           
            <div class="panel panel-default">
                <div class="panel-body">

                    <table class="table table-hover" style="font-family: Helvetica;margin: 20px">
                        <thead style="background-color: #e77748">
                          <tr>
                            <th scope="col">ItemNo</th>
                            <th scope="col">Dish Name</th>
                            <th scope="col">Units</th>
                            <th scope="col">Price per Unit</th>
                          </tr>
                        </thead>
                        <tbody>

<?php $itms = unserialize($order->cart) ; $itmid=0; ?>
@foreach($itms as $itm)
<?php $itmid++; ?>
<tr>
<th scope="row">
        {{$itmid}}
</th>

<td>
        {{$itm->itm_name}} 
</td>

<td>
        {{$itm->qty}}

</td>

<td>
        ${{$itm->itm_price}}
</td>

</tr>

{{-- <div class="row">
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
    
</div> --}}


@endforeach
</tbody>
</table>


<?php $drinks = unserialize($order->drnkscart) ; $itmid=0; ?>


@if($drinks!=null && $drinks->count()>0)
<h3 class="mb-3 mt-3">Drinks</h3>

<table class="table table-hover" style="font-family: Helvetica;margin: 20px">
        <thead>
          <tr>
            <th scope="col">Item No</th>
            <th scope="col">Drink Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price per Unit</th>
          </tr>
        </thead>
        <tbody>

@foreach($drinks as $drink)

<?php $itmid++; ?>

<tr>
<td>
        {{$itmid}}
</td>

<td>
        {{$drink->drnk_name}}
</td>

<td>
        {{$drink->drnkqty}}
</td>

<td>
        ${{$drink->drnk_price}}  
</td>

</tr>

{{-- <div class="row">
    <div class="col-sm-3">
            <span>{{$itmid}}</span>
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
    
</div> --}}

@endforeach

</tbody>
</table>
@endif
                </div>
                <div class="panel-default mt-5 pull-right">
                    <strong>Total Price : {{$order->totalamnt}}</strong>
                </div>    
            </div>

        </div>
    </div>


</div>
<br>
<hr>
@endforeach

@endif 



{{-- old orders --}}
<br>
<br>

<div class="card" id="pointsinfo">
                <div class="card-header" style="background-color:#e77748"><h3 style="color:white;"> My Points </h3> </div>
    <br>
    <br>
                <div class="card-body">

                        <h3>You have 6000 Points</h3>                       
                </div>       
        </div> 
        
        
        <div class="card" id="ordersinfo">
                        <div class="card-header" style="background-color:#e77748"><h3 style="color:white;"> My Orders </h3> </div>
            <br>
            <br>
                        <div class="card-body">
                                        <table class="table table-hover" style="font-family: Helvetica;margin: auto; ;">
                                                        <thead style="color:white;background-color: #e77748">
                                                          <tr>
                                                            <th scope="col">OrderNum</th>
                                                            <th scope="col">OrderDate</th>
                                                            <th scope="col">Total Price</th> 
                                                            <th scope="col">Chef Name</th>                                
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                            @foreach($oldorders as $ord)
                            
                            <tr>
                                <th> #{{$ord->id}}</th>
                                <th> {{date('Y-m-d',strtotime($ord->created_at))}} </th>
                                <th> $ {{$ord->totalamnt}} </th>
                                <th> {{$ord->name }} </th>
                            </tr>                                                     
                              <br>
                            @endforeach
                            </tbody>
                            </table>                                            
                        </div>       
                </div> 



@if($oldorders->count()>0)
<div class="container" style="margin-top: 50px; margin-bottom: 25px" >
<div class="row">
        <div class="col-md-10 col-md-offset-2">

            <h2 class="mb-50" style="margin-bottom: 50px">My Previous Orders </h2>
<hr>
<br>
<br>
<br>


            <div class="panel panel-default">

                    <table class="table table-hover" style="font-family: Helvetica;margin: 20px">
                            <thead style="background-color: #e77748">
                              <tr>
                                <th scope="col">OrderNum</th>
                                <th scope="col">Date</th>
                                <th scope="col">Total Price</th> 
                                <th scope="col">Chef Name</th>                                
                              </tr>
                            </thead>
                            <tbody>
@foreach($oldorders as $ord)

<tr>
    <th> #{{$ord->id}}</th>
    <th> {{date($ord->created_at)}} </th>
    <th> {{$ord->totalamnt}} </th>
    <th> {{$ord->name }} </th>
</tr>





{{-- <div class="panel-body m-3" >
<h4>Chef {{$ord->name }}</h4>
<ul class="list-group">
         <li class="list-group-item">
         <span>OrderNum  #{{$ord->id}}</span>
         <span class="ml-5">{{date($ord->created_at)}}</span>
         <span class="pull-right"> <strong>Total Price : {{$ord->totalamnt}}</strong> </span>
         
         </li>
</ul>

  </div> --}}
  <br>
@endforeach
</tbody>
</table>              
            </div>

        </div>
    </div>


</div>
@endif

</div>

<div class="col-md-4" style="float: right;">

        {{-- @include('map2') --}}
       
<div style="width: 400px">
    <a href="https://www.ihearttakeout.ca/mapslocation" id="mapidbtn">
        <img src="../images/Map.jpg" alt="" width="100%"></a>
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
var config = {
apiKey: "AIzaSyDlvh5ZOItKn1VTpdTWmndVObMtyi8WyS8",
authDomain: "ihearttakeout-578aa.firebaseapp.com",
databaseURL: "https://ihearttakeout-578aa.firebaseio.com",
projectId: "ihearttakeout-578aa",
storageBucket: "ihearttakeout-578aa.appspot.com",
messagingSenderId: "1026709201120"
};
firebase.initializeApp(config);
</script>

<script>
// $("#statusorder").text(123);
function writeUserData(userId, orid, chid , sta) {
firebase.database().ref('orders/' + orid).set({
userid: userId,
chefid: chid,
status: sta
});
}
var sts = firebase.database().ref('/orders/1');

sts.on('value',function(snapshot){
  console.log(snapshot.val());
  status = snapshot.val()['status'];
  $("#statusorder").text(status);
});

</script>



@endsection

{{-- @include('map2') --}}