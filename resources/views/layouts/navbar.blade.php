<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#e77748">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="color:white;font-size: 30px;" >
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
                        <li><a class="nav-link" style="color:white;font-size: 14px" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" style="color:white;font-size: 14px" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else

                    <li>                                
                            <a  class="nav-link" href="/cart" style="margin-top: 0px; background-color:  "> <i style="font-size:25px; color: white" class="fa fa-shopping-cart"></i>
                                <span> 
                                    <strong>
                                <span id="cartitems" style="color:white; font-size: 14px;">
                                <?php if(Session::has('carttot')) :?>
                                
                                            {{Session::get('carttot')}} 
                                                                           
                                <?php else : ?>                
                                 0                                 
                                <?php endif;?>

                            </span>                                
                        </strong>
                                </span>
                            </a> 
                    </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="font-size: 14px;color: white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ strtoupper(Auth::user()->name) }} <span style="font-size: 20px" class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/orders">
                                    <strong> {{ __('My Orders') }} </strong>
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                  <strong>  {{ __('Logout') }}  </strong>
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

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}




    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="background-color:#71189b">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="#"><img src="http://carnivalguideintl.com/img/Carnival_guide_intl_logo.png"></a>
           </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="/index">Home</a></li>
               <li><a href="/About">About</a></li>
      
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cover Model<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item">Previous Winners</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/votes">2018 Voting</a></li>
                  <li role="separator" class="divider"></li>
      
                </ul>
              </li>
                                          
             
               		 <li><a  href="#">Bands</a></li>                    	
                 	 <li><a  href="#">Events</a></li>
                        <li><a  href="#">Restaurants</a></li> 
                         <li><a  href="#">Accommodations</a></li> 
                         
          
     <li><a href="/carnivaldates">Carnival Dates</a></li> 
                
          
                
              </li>
            </ul>
           
             
                 
           
            <ul class="nav navbar-nav navbar-right">
            
            @guest
                        <li><a class="nav-link" style="" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" style="" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                 @else
                 	<li class="nav-item dropdown">
                            <a id="navbarDropdown" style="" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ strtoupper(Auth::user()->name) }} <span style="" class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                                                     
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                  <strong>  {{ __('Logout') }}  </strong>
                                </a>                              
                                
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>    
                            
                 @endguest
           
           
              <li><a href="/contact">Contact</a></li>
              
                </ul>
       
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

