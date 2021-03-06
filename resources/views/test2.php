@extends('layouts.app2')

@section('content')

  

<div id="myCarousel" class="carousel slide" style="height:600px;overflow:hidden;" data-ride="carousel" data-interval="20000">

                
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="first-slide" src="img/slides/Solange_2016.jpg" alt="First slide" style="width:100%">
                  
                  </div>
                  
                   <div class="carousel-item">
                    <img class="first-slide" src="img/slides/group.jpg" alt="First slide" style="width:100%">
                  
                  </div>
                  
                   <div class="carousel-item">
                    <img class="first-slide" src="img/slides/Tiffany_2015.jpg" alt="First slide" style="width:100%">
                  
                  </div>
                  
                   <div class="carousel-item">
                    <img class="first-slide" src="img/slides/guy_girls.jpg" alt="First slide" style="width:100%">
                  
                  </div>
                  
                   <div class="carousel-item">
                    <img class="first-slide" src="img/slides/Alana_2017.jpg" alt="First slide" style="width:100%">
                  
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


  <br><br><br><br><br>

 
<div class="container" style="position:relative">
              <h1 align="center" > We are here to enhance your overall carnival experience </h1>
         
        <h3 style="color:#666; text-align:center">Carnival Guide Intl is the ultimate resource for visitors and residents, as it covers everything they need to know about what to do, what to see, how to travel, and where to eat during the weeks of Carnival.</h3> <br><br><br><br><br><br><br>
         
         </div>
        
        <div class="row">
          <div class="col-md-3 col-xs-12 col-sm-6"><a href="/Caribana/bandslist"><img src="img/band.jpg" width="100%"></a>
          
            <div class="sectionwrap">
          <h2>Bands</h2>
          <p dir="ltr">Meet the creators of the stunning costumes and floats, get to know what drives their passion, and what to expect in the coming years.</p>
          <br><br>
        <a class="btn btn-default btn-lg" href="/Caribana/bandslist" role="button">Go To Bands Section</a>
        
        
            </div>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-6"> <a href="Caribana/eventslist"><img src="img/Events.jpg" width="100%"></a>  
          <div class="sectionwrap">
          <h2>Events</h2>
          <p>A comprehensive list of various carnival events happening across the country, organized by date and event type.</p>
            <br><br>
        <a class="btn btn-default btn-lg" href="/#" role="button">Go To Events Section</a>
          </div>
          </div>
           <div class="clearfix visible-sm-block"></div>
          
          <div class="col-md-3 col-xs-12 col-sm-6" width="100%"><a href="#"><img src="img/food.jpg" width="100%"></a>
            <div class="sectionwrap">
              <h2>Food</h2>
          <p>This section features an assortment of carefully selected dining options, from fast food to fine dining.</p><br>
            <br>
            <a class="btn btn-default btn-lg" href="#" role="button">Go To Restaurants Section</a> </p>
        </div>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-6"
          ><a href="Caribana/hotellist"><img src="img/Accommodations.jpg" width="100%"></a>
         <div class="sectionwrap">
          <h2>Accommodations</h2>
          <p>Let us help you find a great place to stay during your visit to Toronto, we have many options from Hotels to Condos. </p><br/>
            <br>
        <a class="btn btn-default btn-lg" href="Caribana/hotellist" role="button">Go To Hotels Section</a>
          </div>
          </div>
        </div>
        
         
          
          <br><br><br><br><br><br><br>
          <div class="contestlarge">
          <div class="row" style=" background-color:#000; display: flex;">
          <div class="col-md-6" style="background-color:#ff4256">
          <div class="formwrap">
          <br /><br /><br /><br /><br />
          @if (session('status'))
            <div class="alert alert-success">
                
            <h3> {{ session('status') }}   </h3>
           
            </div>
        @endif
        
        {{--

        <h1 align="center" style="color:#FFF">Time to Vote </h1>
  
  <hr/>
  <p> This is your opportunity to vote for Toronto's Cover girl. Vote every day for 2 weeks to keep your favourites in the lead.</p> <br /><br />
 
 <a class="btn btn-success btn-lg btn-block" href="/votes">Vote Now</a>
 
  --}}
  
  
  
   <div class="row">
                    <form role="form" method="post" action="/save" id="" enctype="multipart/form-data" >
                    @csrf
                       <div class="row">
  <div class="col-md-6">
  <input type="text" class="form-control input-lg" placeholder="First Name" class="form-control" id="name" name="name" required maxlength="50">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control input-lg" placeholder="Last Name"   class="form-control" id="lastname" name="lastname" required maxlength="50">
  </div>
</div><br>
      <div class="row">
  <div class="col-md-6">
    <input type="text" class="form-control input-lg" placeholder="Phone" class="form-control" id="phone" name="phone" required maxlength="50">
  </div>
  <div class="col-md-6">
    <input type="email" class="form-control input-lg" placeholder="Email"  class="form-control" id="email" name="email" required maxlength="50">
  </div>
</div>     <br>
      
          <div class="row">
  <div class="col-md-6">
  <input type="text" class="form-control input-lg" placeholder="Facebook ID"  class="form-control" id="facebook" name="facebook" required maxlength="50">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control input-lg"  placeholder="Instagram ID" class="form-control" id="IG" name="IG" required maxlength="50">
  </div>
</div>            
<br>
                 
             <div class="row">
  <div class="col-md-6">
    <label for="country">I would like to be the cover model for: </p>
  </label>
  </div>
  <div class="col-md-6">
  <select name="country" class="form-control input-lg" id="country">
    <option value="blank" class="form-control input-lg" >Select</option>
      <option value="Miami" class="form-control input-lg" >Miami</option>
      <option value="Trinidad" class="form-control input-lg" >Trinidad</option>
      <option value="Toronto" class="form-control input-lg" >Toronto Caribbean Carnival</option>
  <option value="Barbados" class="form-control input-lg" >Barbados Crop Over</option>
  <option value="Guyana" class="form-control input-lg" >Guyana Carnival</option>
  <option value="lucia" class="form-control input-lg" >St Lucia Carnival</option>
    
    </select>
  </div>
</div>    

                            <label for="name"> </label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Why should you be the 2018 Cover Model?" maxlength="6000" rows="3"></textarea>
                            <br>
                       
<div class="row">

  <div class="col-md-4">
  
   <label for="name"> Head Shot:</label>
                            <input type="file" class="input-lg" name="image[]" multiple required>
                        
  </div>
  <div class="col-md-4">
  <label for="name"> Full Body 2:</label>
                            <input type="file" class="input-lg" name="image[]" multiple required>
  </div>
  <div class="col-md-4">
  <label for="name"> Full Body 1:</label>
                            <input type="file" class="input-lg" name="image[]" multiple required>
  </div>
</div>                       
<br>
                    <button type="submit" class="btn btn-success btn-lg btn-block" id="">Post It! &rarr;</button>
                    </form>                                                                                  </div>
  </div>
  </div>
  <div class="col-md-6" >
<div class="video-wrapper ">
<iframe src="http://www.youtube.com/embed/8DNmdUBbd6g?autoplay=0&amp;html5=1" frameborder="0" allowfullscreen></iframe>
</div>
    
</div>
  
  </div>
</div>


@endsection


@section('content2')
@include('carnivallayouts.footer2')
@endsection




<div class="" style="background-color:white;">
          
          <div class="row">

 <div class="col-md-6 ">
 
 <h1 style="text-align:left;margin-left:15px;color:red;">News</h1>
 
 <div class="row">
 


 @foreach($blogs->chunk(4) as $blogs)	
 @foreach($blogs as $blog)
      
 <div class="col-md-6" style="text-align:left;padding-right:15px;">
 
 <div style="overflow:hidden;margin-top:5px;width:250px;">
 
<img src="/../storage/blogs/{{$blog->name}}/{{$blog->imagepath}}" alt="" width="100%">
 
 </div>
 
 <div class="post-preview" style="margin-left:5px;">
       <a href="#"  style="color:black;">
         <h5 class="post-title">
          {{$blog->title}}
         </h5>
         
       </a>
       <p class="post-meta">
     {{date($blog->created_at)}}    
     
     </p>
 </div>
 
 </div>
 
       

 @endforeach  
 @endforeach
 </div>
 
  
 <div class="col-md-1">
 
 </div>
 
 
 <div class="col-md-5">
   <h1 style="text-align:left;color:red;"> Gallery</h1>
       
   <div class="row">
   
   <div class="col-md-4">
   
   @foreach($events->chunk(3) as $events)

   @foreach($events as $event)
     
    <div class="row" style="text-align:left;">
    
    <a  href="gallerylist/{{$event->name}}">
    <div style="overflow:hidden;margin-top:5px;height:150px;">
    <img src="/../storage/gallery/{{$event->name}}/{{$event->path}}" alt="" width="100%">
    </div>
    <p > {{$event->name}} </p>
    </a>
    
         
    </div>
   
   @endforeach
   
   @endforeach
   
   </div>
       
   <div class="col-md-8">
   
   
   </div>
   
   
   </div>
   
    
 </div>
  
 </div>
 
  </div>
