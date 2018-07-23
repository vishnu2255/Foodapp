@extends('layouts.app')

@section('content')
<div id="body" style="background:rgba(76, 175, 80, 0.3)">
<div>
<button style="float: right;margin-bottom: 5px;display: none;" class="closediv btn btn-danger">Close</button>
  
<div id="overlay" style="display: none; ">
        {{-- <div id="text">Overlay Text</div> --}}
   
        <div id="text" style="margin-top: 10px;">

        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel" data-interval="100000">
        <div class="carousel-inner w-100" role="listbox">

                <div id="1" class="carousel-item row no-gutters" style="overflow:hidden;border: 2px solid #ccc;">
                        <div class="row">
                       <div class="col-md-8">
           
                               <div id="btnon" style="" class="featregal row">                 
                                                                                               
                               <img id="btnon" width="100%" src="../images/Food_6.jpg" alt="Event">                             
                                        
                               </div> 
                       </div>
           
                         <div class="col-md-3" style="font-size: 20px;color: black;">
                        
                          <div class="row">
                            Test
                          </div>
          
                          <div class="row">
                            Test2
                          </div>

                         </div>

                         <div class="col-md-1">
                         
                         </div>


                       </div>
           
                          
                     </div>
          
          <div id="2" class="carousel-item row no-gutters" style="overflow:hidden;border: 2px solid #ccc;">
            <div class="row">
            <div class="col-md-8">

                    <div id="btnon" style="" class="featregal row">                 
                                                                                    
                    <img id="btnon" width="100%" src="../images/Food_6.jpg" alt="Event">                             
                             
                    </div> 
            </div>

              <div class="col-md-3" style="font-size: 20px;color: black;">
             
               <div class="row">
                 Test
               </div>

               <div class="row">
                 Test2
               </div>
           
              </div>
              
               <div class="col-md-1">
                
                </div>
              </div>
           
                  
             </div> 

          <div id="3" class="carousel-item row no-gutters" style="overflow:hidden;border: 2px solid #ccc;">
            <div class="row">
            <div class="col-md-8">

                    <div id="btnon" style="" class="featregal row">                 
                                                                                    
                    <img id="btnon" width="100%" src="../images/Food_6.jpg" alt="Event">                             
                             
                    </div> 
            </div>

              <div class="col-md-3" style="font-size: 20px;color: black;">
             
               <div class="row">
                 Test
               </div>

               <div class="row">
                 Test2
               </div>              
              </div>
              <div class="col-md-1">
                
                </div>                
            </div>

               
          </div> 
                 
          </div>                                      
      
        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
</div>
</div>
</div>
{{-- 
<div style="height: 1000px">
<div id="overlay" style="display: none; ">
  <div id="text">Overlay Text</div>
</div>

<div style="padding:20px">
  <h2>Overlay with Text</h2>
  <button id="btnon">Turn on overlay effect</button>
</div>
</div> --}}

<div class="container" id ="tempdiv" style="height: 1500px; margin-top: 20px;">


    <div class="row" style="background-color: white">
                
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
           
            <div class="btnon12" id="div_1" style="border: 1px solid #ccc">
            
            <div style="overflow:hidden;height:250px">
                         
         <img src="../images/chef_1.jpeg" alt="Event">
              
             
            </div>                            
        
          </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
           
              <div class="btnon12" id="div_2" style="border: 1px solid #ccc">
              
              <div style="overflow:hidden;height:250px">
                           
           <img src="../images/chef_1.jpeg" alt="Event">
                
               
              </div>                            
          
            </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
           
                <div class="btnon12" id="div_3" style="border: 1px solid #ccc">
                
                <div style="overflow:hidden;height:250px">
                             
             <img src="../images/chef_1.jpeg" alt="Event">
                  
                 
                </div>                            
            
              </div>
              </div>     
              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
           
                  <div class="btnon12" id="div_4" style="border: 1px solid #ccc">
                  
                  <div style="overflow:hidden;height:250px">
                               
               <img src="../images/chef_1.jpeg" alt="Event">
                    
                   
                  </div>                            
              
                </div>
                </div>
        </div>

{{-- <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
          <div class="carousel-item row no-gutters active">
              
                <div id="div_1" style="border: 2px solid #ccc;;" class="btnon12 featregal col-4 float-left">
                 
                        <div style="overflow:;height:200px;cursor: pointer;;">

                           <img class="" src="../images/chef_1.jpeg" alt="Event">
                         
                         </div>            
                  </div> 

                     <div id="div_2" style="border: 2px solid #ccc" class="btnon12 featregal col-4 float-left">
                 
                            <div style="overflow:;height:200px;cursor: pointer;">
                             
                            
                               <img class="" src="../images/chef_1.jpeg" alt="Event">
                             
                             </div>            
                         </div>           

                      <div id="div_3" style="border: 2px solid #ccc" class="btnon12 featregal col-4 float-left">
                 
                      <div style="overflow:;height:200px;cursor: pointer;">
                                                                 
                      <img class="" src="../images/chef_1.jpeg" alt="Event">
                                 
                      </div>            
                             </div> 
          </div>                                      
        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div> --}}
</div>

</div>
@endsection
{{-- <script>
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script> --}}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(
    function(){

    $(".btnon12").click(function(){

     //alert($(this).attr("id"));
    var id = ($(this).attr("id")).split('_')[1];
    alert(id);
    $("#"+id).addClass("active");
    // $("#"+id).attr("class","active");
    //$("#body").css("background","rgba(20,20,20, .5),");  
     $(".closediv").css("display","block");
     $("#overlay").css("display","block"); 
     $("#tempdiv").css("display","none");

    }); 
    
    
    $(".closediv").click(function(){
    $("#overlay").css("display","none"); 
    $("#tempdiv").css("display","block");
    $(".closediv").css("display","none");
    });

    });
</script>


{{-- 
<div class="row" style="background-color: white">


@foreach($rests as $rest)

<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
   
    <div style="border: 1px solid #ccc">
    
    <div style="overflow:hidden;height:250px">
       <a  href="restaurantslist/{{$rest->restName}}">              
 <img src="/../storage/restaurant/{{$rest->restName}}/{{$rest->restimage}}" alt="Event">
       </a>
     
    </div>
   

  <div style="font-family: Helvetica, Arial, sans-serif; overflow: hidden;text-overflow: ellipsis; white-space: nowrap; text-align:left; text-transform: uppercase" class="desc">{{$rest->restName}}
    
  <div class="row" style="font-size:10px">
      <div class="col-sm-6">{{strtoupper($rest->restName)}}</div>
      <div class="col-sm-6" style="text-align:right">{{strtoupper($rest->cuisine)}}</div>
  </div>          
    </div>

  </div>
  </div>

@endforeach
</div> --}}