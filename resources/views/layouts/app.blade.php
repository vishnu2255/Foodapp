<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="https://js.stripe.com/v3/"></script>


    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $('.quantity-right-plus').click(function(e)
            {
                e.preventDefault();
                // var qty = parseInt($("#quantity").val());
                var qty = parseInt($(this).parent().find("input").val());
                var obj = $(this).parent().find("input");               

                if(qty==10)
                {

                }
                else{
                obj.val(qty+1);
                obj.trigger("change");
                }

                // alert(qty);

               

            });


            $('.quantity-left-minus').click(function(e)
            {
                e.preventDefault();

                // var qty = parseInt($("#quantity").val());
                var qty = parseInt($(this).parent().find("input").val());
                // alert(qty);
                var obj = $(this).parent().find("input");

                if(qty==1)
                {

                }
                else{
                    // $("#quantity").val(qty-1);
                    // obj.attr("value",qty-1);
                    obj.val(qty-1);
                    obj.trigger("change");
                }
                
            });


            
            $('[data-toggle="tooltip"]').tooltip();

            $(".removebtn").click(function(){

                var id = $(this).attr("id").split("_")[1];
                $.post('/cart/'+id,{'_token': $('input[name=_token]').val()},function(data)
                {		
                    console.log(data);
                });

                 location.reload(true);
                // alert(id);
            });
//cart drinks section
           $(".showdrinks").click(function(){
               var cid = $(this).attr("id");
               var did = "#drinks_"+cid;

            //    alert(did);
               $(did).show();


           });


        //cart items section
        $(".btnquantitycart").change(
                function(){

                    // alert(2);
    var itemslist = [];
	var id = $(this).attr("id");
    var qty = $(this).val();

    var arr= id.split('_');
    var chefid  =  arr[1];
    var spanele = "#tot_"+chefid;
    // var cartele = "cartitems";


    if(arr.length == 2)
    {
        id = id + '_' + qty ; 

    }
    else if(arr.length == 3)
    {
        arr[2] = qty;
        id = arr.join("_");
    }
    $(this).attr("id",id);
	itemslist.push(id);
    // console.log(itemslist);
// alert(id);	
	$.post('/cart',{'items' : itemslist,'_token': $('input[name=_token]').val()},function(data)
	{	
        var cartdata = data.split('_');
        $("#cartitems").text(cartdata[1]); 
        $(spanele).text(cartdata[0]);	
		console.log(data);
	});
                    // alert(true);
                }
            );

        });
    </script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#e77748">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white" >
                    {{ config('app.name', 'Takeout') }}
                    
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->

  
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" style="color:white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" style="color:white" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else

                        <li>                                
                                <a  class="nav-link" href="/cart" style="margin-top: 0px; background-color:  "> <i style="font-size:36px; color: white" class="fa fa-shopping-cart"></i>
                                    <span id="cartitems"> 
                                    <?php if(Session::has('carttot')) :?>
                                    <strong>
                                    {{Session::get('carttot')}} 
                                    </strong>                                            
                                    <?php else : ?>
                                    
                                    <span style="color:white">  0</span>                                   
                                    <?php endif;?>
                                    </span>
                                </a> 
                        </li>
                            <li class="nav-item dropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{csrf_field()}}

    @include('layouts.foot')
</body>
</html>
