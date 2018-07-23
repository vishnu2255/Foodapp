@extends('layouts.app2')

@section('content')
<div style="background-color:white">
{{-- <div class="container"> --}}

        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="20000">
                {{-- <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol> --}}
                <div class="carousel-inner">
                  <div class="carousel-item active" style="height:;">
                    <img class="first-slide" src="../images/Food_6.jpg" alt="First slide" style="width:100%">
                    <div class="carousel-caption" >
                    
                    <div style="background-color:; width: ;height:"> </div>  
                    <div class="" style="background-color:; width: ;height: ">
                            <form class="form" method="POST" action="/dishes" style="">                                  
                              @csrf
                              <div class="row" style="height:200px;">
                              </div>
                                   <div class="row" style="margin-top:100px;text-align:center;height:150px;  background-color:rgba(0, 0, 0, 0.5)">
                                   <div class="col-md-2">
                                   </div>
<div class="col-md-3 col-sm-12">
  <div class="ui-widget">
      {{-- <label for="searchcity">City: </label> --}}
  <input type="text" name="searchcity" style="width:;margin-top: 45px;border:" id="searchcity" class="searchc form-control" placeholder="Search City">                                    
  </div>
</div>

<div class="col-md-3 col-sm-12">
    <div class="ui-widget">
  <input type="text" name="searchdish" style="width:;margin-top: 45px;border:" id="searchd" class="searchd form-control" placeholder="Search Dish">
  </div>
  </div>
<div class="col-md-2 col-sm-12">
  <button type="submit" class="btn btn-danger btn-lg"  style="margin-top: 45px" >Find Chefs</button>
</div>  

<div class="col-md-2 col-sm-12">
</div>

                           
                                  </div>                                                                    
                            </form>
                          </div>
                    
                    
                    
                    
                  </div>
                 </div>              
              </div>
          
          <br>
          <br>
          <br>                   
          
         
<div class="container marketing" style="background-color: white ;">
      <div class="row">
        <div class="col-lg-4" style="text-align: center;">
           <img src="../images/icons-01.jpg" width="50%" />
           
          <h2> More Choice</h2>
          <p class="lead">We have thousands of home cooks for you to discouver. different cuisinesa at your finger tips.</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-4" style="text-align: center;"> 
          <img src="../images/icons-02.jpg" width="50%" />
          <h2>Save Time</h2>
         <p class="lead">Life can be complicated but ordering food doesn't have to be. Let us take care of the details while you focus on what really matters.</p>
          <p>&nbsp;</p>       
       </div>

       <br>
        <div class="col-lg-4" style="text-align: center;">        
          <img src="../images/icons-01.jpg" width="50%" />       
         <h2>Fresh Food</h2>
           <p class="lead">Home cooked foods made with great ingredients weingredients to speak for themselves Fresh quality food,</p>
          <p>&nbsp;</p> 
        </div>
      </div>

    </div>
<br>
<br>
<br>
      <!-- START THE FEATURETTES -->
     <div style="background-color:#a7ebd6">
      <div class="container">
<div class="row featurette" >

        <div class="col-md-7">
                <h2 class="featurette-heading" style="padding-left: 50px;padding-top: 100px;" >Effortless Apps</h2>
              <p class="lead" style="padding-left: 50px;"> <strong>  Our apps give you access to a variety of local chefs. It's easy to order great food with the tap of a finger.  </strong> </p>
              <p class="lead" style="padding-left: 50px;" > <strong>  Download the app: </strong></p>
              <p class="lead" style="padding-left: 50px;" > <img src="../images/app_stores.png" width="50%"></p>
        </div>
        <div class="col-md-5"><br><br><br>
            <img src="../images/phone4.png" width="100%"  alt="ihearttakeout app IOS"><br><br><br>
        </div>

</div>               
</div>
</div>

<br>
<br>
<br>
{{-- <hr class="featurette-divider"> --}}

      <div class="container">
      <div class="row featurette">
	      <div class="col-md-6" style="padding-right: 50px;">
              <img class="featurette-image img-fluid mx-auto" src="../images/map.jpg" alt="Generic placeholder image">
              </div>
              <div class="col-md-6">
              <h2 class="featurette-heading" style="padding-left: 50px;" >Now launched in Ontario <span class="text-muted"></span></h2>
              <p class="lead" style="padding-left: 50px;" >Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            
      </div>
      </div>
       </div>
     

      <!-- /END THE FEATURETTES -->


<br>
<br>
<br>

</div>

@endsection

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#searchcity" ).autocomplete({
        source: function(request,response){
        $.getJSON(
          "https://ihearttakeout.ca/list",
          {term1:request.term},response
        );
      }
      
      // source: "http://127.0.0.1:8181/list",  

      // selector:function(event,ui)
      // {
      //   event.preventDefault();
      //   $("searchcity").val(ui.item.id);
      // }
    });
    $( "#searchd" ).autocomplete({
      source: function(request,response)
      {
        $.getJSON(
          "https://ihearttakeout.ca/list",
          {term2:request.term},response
        );
      }
    });
  } );
  </script>
