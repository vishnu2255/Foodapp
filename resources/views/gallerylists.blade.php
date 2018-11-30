@extends('layouts.blogapp')

@section('content')

<div class="container" style="height: 1260px;">
<hr>


<br/><br />

<form action="">
  @csrf
</form>

<div class="mt-4" style="margin-left: 3px;background-color: white;">

    {{-- @foreach($events->chunk(3) as $evnts) --}}

<div class="row" style="background-color: white">

        <div class="row" style="background-color: white">
                
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
                   
                    <div class="btnon12" id="div_1" style="border: 1px solid #ccc">
                    
                    <div style="overflow:hidden;height:260px">
                                 
                 <img src="../images/chef_1.jpeg" alt="Event" width="100%">

                    </div>                            
                
                  </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
                   
                      <div class="btnon12" id="div_2" style="border: 1px solid #ccc">
                      
                      <div style="overflow:hidden;height:260px">
                                   
                   <img src="../images/chef_1.jpeg" alt="Event" width="100%">
                        
                       
                      </div>                            
                  
                    </div>
                    </div>
        
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
                   
                        <div class="btnon12" id="div_3" style="border: 1px solid #ccc">
                        
                        <div style="overflow:hidden;height:260px">
                                     
                     <img src="../images/chef_1.jpeg" alt="Event" width="100%">
                          
                         
                        </div>                            
                    
                      </div>
                      </div>     
                      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
                   
                          <div class="btnon12" id="div_4" style="border: 1px solid #ccc">
                          
                          <div style="overflow:hidden;height:260px">
                                       
                       <img src="../images/chef_1.jpeg" alt="Event" width="100%">
                            
                           
                          </div>                            
                      
                        </div>
                        </div>
    </div>
{{-- @foreach($events as $event)


<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-1 " style="background-color:white;margin:;">
   <div style="border: 2px lightblue">
    <a  href="eventslist/{{$event->eventname}}">
      <div class="event_main_img" style="width: 100%;height: 260px; overflow:hidden">
      <img src="/../storage/event/{{$event->eventname}}/{{$event->coverimage}}" alt="Event" style="width: 100%;">     
      </div> 
    </a>     
    
    </div>

  </div> 
  </div>
@endforeach --}}
</div>
{{-- @endforeach --}}


</div>
<meta name="csrf-token" content="{{ csrf_token() }}">   


</div>

<br>
<br>
<br>
<br>

</div>

@endsection   




