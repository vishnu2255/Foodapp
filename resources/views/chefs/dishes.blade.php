@include('chefs.carouselheader')

<nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 20px">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Takeout') }}
        </a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a> --}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="margin-top: 100px">


    
       <a href="/checkout">
        <button class="btn btn-primary" href="" id="check_out" style="float: right">
         Checkout
        </button>
    </a>

<div class="itemslist" id="itemslist">

</div>


    </div>

<div class="container">
<?php $carid=1; ?>

@foreach($temps as $key => $value)

<div class="row">

    <?php $chefid = explode('_',$key)[0]; ?>

        <div class="col-md-2" style="margin-left: 0px">
                <div class="chefimage" style="height: 120px; width: 100%; margin-top: 100px">
                <a href="/chefs/{{explode('_',$key)[0]}}">                        
                    <img src="../images/chef_1.jpeg" alt="image" class="img-circle" width="100%" height="100%">
                    </a>   
                </div>	
        
                <div class="chef-content">
                        <h4 >{{explode('_',$key)[1]}}</h4>									
                        <div class="star-rating">
                            <ul class="list-inline" >
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>                                                        
                    </div>
        </div>



<div class="col-md-10">

<div id="myCarousel{{$carid}}" class="carousel slide" data-ride="carousel" data-interval="0">


<div class="carousel-inner">

            <?php $ind =0;?>


    @foreach($value as $item)
    

    
    @if($ind%3 === 0)
    
    @if($ind === 0)
    <div class="item carousel-item active">
     
    @else

    <div class="item carousel-item">    
    
    @endif
        
        <div class="row">

    @endif

    
    <div class="col-sm-4">
            <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                    <img src="../images/food_2.jpg" class="img-responsive img-fluid" alt="">									
                </div>
                <div class="thumb-content">
                    <h4>{{$item->itm_name}}</h4>									
                
                    <p class="item-price" id="{{$item->id}}"> <b>{{$item->itm_price}}</b></p>
                    
                    {{-- <div style="margin-top: 5px"> --}}
                            {{-- <button type="button" class="btn btn-default" id="btnminus" aria-label="Left Align">   
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button> --}}
                        
                            {{-- <label for="" style="font-family: sans-serif">Quantity: </label> --}}
                            {{-- <input type="number" name="quantity" class="textqty" style="width: 60px;text-align: center" max="10" min="0" Value=0 > --}}
                            
                            {{-- <button type="button" class="btn btn-default" id="btnplus" aria-label="Right Align">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button> --}}

                    {{-- </div> --}}
                    <button id="{{$item->id.'_'.$chefid}}" class="btn btn-primary item-btn1">Add to Cart</button>
                    
                    {{-- <button id="{{$item->id.'_'.$chefid}}" class="btn btn-primary item-btn">Remove from Cart</button> --}}

                    <a href="/cart" id="gotocartbtn" class="btn btn-warning gotocart" style="display:none">Go to Cart </a>

                </div>						
            </div>
    </div>	

    <?php $ind++ ; ?>   

        @if($ind%3 == 0)
    </div>
    </div>
        @endif     
              
                    
    @endforeach

{{-- </div> --}}


    <a class="carousel-control left carousel-control-prev" href="#myCarousel{{$carid}}" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right carousel-control-next" href="#myCarousel{{$carid}}" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>


</div>


</div>

</div>

</div>

<?php $carid++; ?>

@endforeach

</div>