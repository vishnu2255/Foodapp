@include('chefs.carouselheader')

<nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 20px;background-color:#e77748;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: white">
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

                
                        
                <li>                                
                        <a  class="nav-link" href="/cart" style="margin-top: 0px; background-color:  "> <i style="font-size:36px; color: white" class="fa fa-shopping-cart"></i>
                            <span id="cartitems"> 
                            <?php if(Session::has('carttot')) :?>
                            <strong>
                            {{Session::get('carttot')}} 
                            </strong>                                
                            <?php else : ?>
                           <strong>0
                           </strong>
                            <?php endif;?>
                            </span>
                        </a> 
                </li>

               

          
                    {{-- <li>
                            <a  class="btn btn-info btn-lg" style="width: 150px; margin-top: 10px; background-color: gold">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Cart 22
                            </a>
                    </li> --}}
                
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


       {{-- <a href="/checkout">
        <button class="btn btn-primary" href="" id="check_out" style="float: right">
         Checkout
        </button>
    </a> --}}

<div class="itemslist" id="itemslist">

</div>


    </div>

<div class="container">
<?php $carid=1; ?>

@foreach($temps as $key => $value)

<div class="row">

    <?php $chefid = explode('_',$key)[0]; ?>

        <div class="col-md-2 col-sm-2" style="margin-left: 0px">
                <div class="chefimage" style="height: 170px; width: 100%; margin-top:75px">
                <a href="/chefs/{{explode('_',$key)[0]}}">                        
                    <img src="../images/chef_1.jpeg" alt="image" class="img-circle" width="100%" >
                </a>   
        </div>	
        
                <div class="chef-content">
                        <h4>{{explode('_',$key)[1]}}</h4>									
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



<div class="col-md-10 col-sm-12">

<div id="myCarousel{{$carid}}" class="carousel slide" data-ride="carousel" data-interval="0">


<div class="carousel-inner">

            <?php $ind =0;?>


    @foreach($value->chunk(3) as $items)
    
    
    @if($ind === 0)
    <div class="item carousel-item active">     
    @else
    <div class="item carousel-item">                   
    @endif

    <div class="row">

    <?php $ind ++ ;?>

    @foreach($items as $item)

    <div class="col-sm-4">
            <div class="thumb-wrapper" style="background-color:#ffa07a;">
                {{-- <span class="wish-icon"><i class="fa fa-heart-o"></i></span> --}}
                <div class="img-box">
                    <img src="../images/food_2.jpg" class="img-responsive img-fluid zoom" alt="">									
                </div>
                <div class="thumb-content">
<div class="row">
        <div class="col-sm-6">
                <p class="text-muted" style="font-family: 'Times New Roman', Times, serif; color: red; font-size:20px; " >{{ strtoupper($item->itm_name)}}</p>	 
                <p class="text-muted" style="font-family: 'Times New Roman', Times, serif;font-size:15px " >{{$item->itm_desc}}</p>	
               
            </div>
            <div class="col-sm-6">
                    <p class="item-price" style="font-family: 'Times New Roman', Times, serif; font-size:20px;color: red"  id="{{$item->id}}"><b>${{$item->itm_price}}</b></p>    
                    {{-- <p style="font-family: 'Times New Roman', Times, serif; color: red">{{$item->itm_order_prep_time}} mints</p>
                                                      --}}
                                                      <p class="text-muted" style="font-size:15px"> Points: {{$item->itm_price*20}}</p>
               </div>
</div>                 
                 
                
                   


                    <button id="{{$item->id.'_'.$chefid}}" class="btn btn-success item-btn1">Add to Cart</button>

                    <a href="/cart" id="gotocartbtn" class="btn btn-danger gotocart" style="display:none">Go to Cart </a>

                </div>						
            </div>
    </div>

    @endforeach
	

    </div>
    </div>
                                     
    @endforeach

    <a class="carousel-control left carousel-control-prev" style="background-color: red"  href="#myCarousel{{$carid}}" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right carousel-control-next" style="background-color: red" href="#myCarousel{{$carid}}" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>


</div>


</div>

</div>

</div>

<?php $carid++; ?>

@endforeach

</div>

@include('layouts.foot')