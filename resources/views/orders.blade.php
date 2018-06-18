
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
<div class="row">

    <div class="col-md-8">
            @if($curentorder->count()>0)

            @foreach($curentorder as $order)
            
            <h3>OrderNum #{{$order->id}}</h3>
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

<a class="btn btn-primary btn-lg" href="/mapslocation">
Click here to find the route    
</a>        
<div style="width: 400px">
    <a href="/mapslocation">
        <img src="../images/maps.jpg" alt="" width="100%"></a>
</div>
        
</div>

</div>


</div>
@endsection

{{-- @include('map2') --}}