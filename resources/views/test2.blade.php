@extends('layouts.app3')

@section('content')

           <div class="" style="background-color:white;">
          
           <div class="row">

  <div class="col-md-6">
  
  <h1 style="text-align:left;margin-left:25px;color:rgb(255, 66, 86);font-family:brandon-grotesque,helvetica,sans-serif;">News</h1>
  
  <div class="row" >

  @foreach($blogs->chunk(4) as $blogs)	
  @foreach($blogs as $blog)
  	   
  <div class="col-md-6 col-sm-12 float-left" style="text-align:left;" >
  
   <a href="blogs/{{$blog->id}}"  >
   
  <div style="overflow:hidden;margin-top:5px;height:200px;">
  
<img class="img-fluid" style="padding-left:2px;" src="/../storage/blogs/{{$blog->name}}/{{$blog->imagepath}}" alt="">
</div>

  <div class="post-preview" style="margin-left:10px;">
                    
        <p class="post-meta" style=
          "font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 18px;
    line-height: 1.42857143;
    color: #333;" onMouseOver="this.style.color='rgb(255, 66, 86)'"
   onMouseOut="this.style.color='#333'" >
      {{date($blog->created_at)}}    
      
      </p>                  
                <h5 class="post-title" style=
          "font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 18px;
    line-height: 1.42857143;
    color: #333;" onMouseOver="this.style.color='rgb(255, 66, 86)'"
   onMouseOut="this.style.color='#333'" >
           {{$blog->title}}
          </h5>
        </div>
                
       </a>
    </div>
  

  
        

  @endforeach  
  @endforeach
  </div>
  </div>
	  
  
  
  <div class="col-md-6">
    <h1 style="text-align:left;margin-left:20px;color:rgb(255, 66, 86);font-family:brandon-grotesque,helvetica,sans-serif;"> Gallery</h1>
    		
     <div class="row">
    
    <div class="col-md-8" style="padding-left:40px;">
    <div class="row">
    @foreach($events->chunk(6) as $events)

    @foreach($events as $event)
      
     <div class="col-md-6 col-sm-12" style="text-align:left;">
     
     <a  href="gallerylist/{{$event->name}}">
    
     <img class="img-fluid" src="/../storage/gallery/{{$event->name}}/{{$event->path}}" alt=""  >
     
     
   
     <p style=
          "text-align:left;margin-top:5px;font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 20px;
    line-height: 1.42857143;
    color: #333;" onMouseOver="this.style.color='rgb(255, 66, 86)'"
   onMouseOut="this.style.color='#333'" > {{$event->name}} </p>
     </a>
     
          
     </div>
    
    @endforeach
    
    @endforeach
    
    </div>
     </div>        
    <div class="col-md-4 col-sm-12">
    
    <div style="overflow:hidden;margin-top:5px;height:450px;">
     <img class="img-fluid" src="img/slides/Alana_2017.jpg" alt="" >
     </div>
    
    </div>
    
    </div>
            
    </div>
    
     
  </div>
   
  </div>  	
          
          <br><br><br><br><br>

          <div class="contestlarge">

          <div class="row" style=" background-color:#000; display: flex;">
          <div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#ff4256">
          <div class="formwrap">
          <br /><br /><br /><br /><br />
          @if (session('status'))
            <div class="alert alert-success">
                
            <h3> {{ session('status') }}   </h3>
           
            </div>
        @endif
          
    <div class="row">
                    <form role="form" method="post" action="/save" id="" enctype="multipart/form-data" style=
          "font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 18px;
    line-height: 1.42857143;
    color: #333;">
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
    <label for="country"> I would like to be the cover model for:
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


  <div class="col-md-6 col-sm-12" >
<div class="video-wrapper ">
<iframe src="http://www.youtube.com/embed/8DNmdUBbd6g?autoplay=0&amp;html5=1" frameborder="0" allowfullscreen></iframe>
</div>
    
</div>
  
  </div>
</div>

@endsection
