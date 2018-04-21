@extends('layouts.app')

@section('content')
@if(count($chefs)>0)           
@foreach($chef as $chefs)

<div>
 {{$chef->location}}
</div>
@endforeach
@endif 

<div class="row featurette" style="background-color:#fb7a69" style="height=30">      
      
          <div class="col-md-7"> 
            
                <h2 class="featurette-heading" style="align-content: center ; padding-left: 10%;padding-top: 10%">Home cooked food without the stress</h2>
                <p class="lead" style="align-content: center ; padding: 10%">Vestibulum volutpat non nulla at efficitur. Cras pretium, lacus in volutpat tempus, purus massa venenatis diam, eu</p>                
           
         
          </div>
         
          <div class="col-md-5">
            
            <img src="../images/plate-stir-fry.png" style="padding: 5%" width="100%"  alt="i love takeout app IOS"><br><br><br>
          </div>
</div>
       
        <hr class="featurette-divider">  

        <div class="container">   
         
      
          <div class="row">

              <div class="col-md-8" style="display:inline">                 
      <img src="../images/chef_1.jpeg" alt="image" class="rounded-circle" width="60px" height="60px">                  
      &nbsp; &nbsp;
      <span> Area Location</span>

              </div>

              <div class="col-md-4">
              <div class="well-flat">
              <img src="../images/stars.png" alt="image" width="100px">
              &nbsp; &nbsp;
              <span>56</span>
              </div>
              </div>
        </div> 
        </div>       
        @endsection


