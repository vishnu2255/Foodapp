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
                        <li><a class="nav-link" style="color:white;font-size: 30px" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" style="color:white;font-size: 30px" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else

                    <li>                                
                            <a  class="nav-link" href="/cart" style="margin-top: 0px; background-color:  "> <i style="font-size:36px; color: white" class="fa fa-shopping-cart"></i>
                                <span> 
                                    <strong>
                                <span id="cartitems" style="color:white; font-size: 30px;">
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
                            <a id="navbarDropdown" style="font-size: 30px;color: white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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