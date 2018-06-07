@extends('layouts.app')

@section('content')


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    <h3>Order placed</h3>
    </div>
@endif


@if($curentorder->count()>0)


<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2>My Current Order </h2>

            <div class="panel panel-default">
                <div class="panel-body">

                    <ul class="list-group">

<?php $itms = unserialize($curentorder[0]->cart) ; $itmid=0; ?>
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
            Price <span class="badge">  ${{$itm->itm_price}} </span>
    </div>
    
</div>

</li>

@endforeach
                    </ul>

                </div>
                <div class="panel-default mt-5 pull-right">
                    <strong>Total Price : {{$curentorder[0]->totalamnt}}</strong>
                </div>    
            </div>

        </div>
    </div>


</div>
@endif
@if($oldorders->count()>0)
<div class="container" style="margin-top: 50px; margin-bottom: 25px" >
<div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2 class="mb-50" style="margin-bottom: 50px">My Previous Orders </h2>

            <div class="panel panel-default">
                
                    


@foreach($oldorders as $ord)
<div class="panel-body mb-3" >
<h4>Chef {{$ord->name }}</h4>
<ul class="list-group">
         <li class="list-group-item">
         <span>OrderNum  #{{$ord->id}}</span>
         <span class="ml-5">{{date($ord->created_date)}}</span>
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
@endsection
