
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">

        <div class="col-md-4"
        <div class="container-fluid">
                <div class="row">
                    <div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                        <nav class="nav navbar-light navbar-toggleable-sm">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarWEX" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="navbar-collapse collapse flex-column mt-md-0 mt-4 pt-md-0 pt-4" id="navbarWEX">
                                <a class="nav-link navbar-brand active" href="~/Views/Forms/ControlPanel.cshtml"><span class="fa fa-home"></span></a>
                                <a href="" class="nav-link">Linnk</a>
                                <a href="" class="nav-link">Linnk</a>
                                <a href="" class="nav-link">Linnk</a>
                            </div>
                        </nav>
                    </div>
                    <div class="col-9 col-sm-10 col-md-10 col-lg-11 col-xl-11">
                        <h2>Hello There</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3> User Details </h3> </div>

                <div class="card-body">
                <form method="POST" action="/profile/{{$pro->id}}">
                        @csrf 

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{$pro->name}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $pro->email }}" required>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" required>

                                
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{}}" name="phone" value="{{ $pro->phone }}" required autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="home" class="col-md-4 col-form-label text-md-right">{{ __('Home Address') }}</label>
                        
                            <div class="col-md-6">
                                <input id="home" type="text" class="form-control" name="home" value="{{  $pro->home }}" required autofocus>
                        
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="work" class="col-md-4 col-form-label text-md-right">{{ __('Work Address') }}</label>
                        
                            <div class="col-md-6">
                                <input id="work" type="text" class="form-control" name="work" value="{{ $pro->work }}" required autofocus>
                        
                               
                            </div>
                        </div>                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Details
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
