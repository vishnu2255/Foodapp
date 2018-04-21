
@extends('layouts.app')

@section('content')
<main role="main">
{{-- <div class="container"> --}}

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="first-slide" src="../images/Food_6.jpg" alt="First slide" style="width:100%">
                    <div class="container">
                      <div class="carousel-caption">
                            <form class="form-inline" style="padding-left:30%; padding-bottom:20%">                                  
                                    <div class="form-group">
                                      <label for="inputPassword2" class="sr-only input-lg"></label>
                                      <input type="text" style=" width:400px"  class="form-control" id="inputPassword2" placeholder="Enter you location">
                                    </div>
                                    <a href="/chefs/" class="btn btn-primary">View Dishes</a>
                            </form>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide" src="../images/Food_6.jpg" alt="Second slide" style="width:100%">
                    <div class="container">
                      <div class="carousel-caption">
                            <form class="form-inline" style="padding-left:30%;padding-bottom:20%">                                  
                                    <div class="form-group">
                                      <label for="inputPassword2" class="sr-only input-lg"></label>
                                      <input type="text" style=" width:400px"  class="form-control" id="inputPassword2" placeholder="Enter you location">
                                    </div>
                                    <a href="/chefs/" class="btn btn-primary">View Dishes</a>
                            </form>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="third-slide" src="../images/Food_6.jpg" alt="Third slide" style="width:100%">
                    <div class="container">
                      <div class="carousel-caption">
                            <form class="form-inline" style="padding-left:30%;padding-bottom:20%">                                  
                                    <div class="form-group">
                                      <label for="inputPassword2" class="sr-only input-lg"></label>
                                      <input type="text" style=" width:400px"  class="form-control" id="inputPassword2" placeholder="Enter you location">
                                    </div>
                                    <a href="/chefs/" class="btn btn-primary">View Dishes</a>
                            </form>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            {{-- </div> --}}
<div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
           <img src="../images/icons-01.jpg" width="50%" />
           
          <h2> More Choice</h2>
          <p class="lead">We have thousands of home cooks for you to discouver. different cuisinesa at you r finger tips.</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-4">
          <img src="../images/icons-02.jpg" width="50%" />
          <h2>Save Tme</h2>
         <p class="lead">Life can be complicated but ordering food doesn't have to be. Let us take care of the details while you focus on what really matters.</p>
          <p>&nbsp;</p>       
       </div>
        <div class="col-lg-4">        
          <img src="../images/icons-01.jpg" width="50%" />       
         <h2>Fresh Food</h2>
           <p class="lead">Home cooked foods made with great ingredients weingredients to speak for themselves Fresh quality food,</p>
          <p>&nbsp;</p> 
        </div>
      </div>

      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
<div class="row featurette" style="background-color:#a7ebd6">

        <div class="col-md-7">
                <h2 class="featurette-heading">Effortless Apps</h2>
             <p class="lead">Our apps give you access to a variety of local chefs. It's easy to order great food with the tap of a finger.</p>
              <p class="lead">Download the app:</p>
              <p class="lead"> <img src="../images/app_stores.png" width="60%" height="60%"></p>
        </div>
        <div class="col-md-5"><br><br><br>
            <img src="../images/phone4.png" width="100%" height="70%" alt="i love takeout app IOS"><br><br><br>
        </div>

</div>               


<hr class="featurette-divider">


      <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Now launched in Ontario <span class="text-muted"></span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="../images/map.jpg" alt="Generic placeholder image">
            </div>
      </div>
      
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
</div>
</main>
@endsection


