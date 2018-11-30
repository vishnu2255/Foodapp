@extends('layouts.app3')

@section('content')


<div style="background:">
<h2 id="body" style="text-align:left;margin-top:25px;margin-left:120px;"> {{$rest->name}} </h2>

<div>

<div class="row" style="float: right">
{{--
<a href='/register' style="margin-bottom: 5px;display: none;" class="registerbtn btn btn-success"> Register </a>

<button style="float: right;margin-bottom: 5px;margin-left: 15px;display: none;" class="closediv btn btn-danger">Close</button>
--}}


</div>


<div class="container" id ="tempdiv" style="background-color: white;height: 100%; margin-top: 20px;margin-bottom:125px">


    <div class="row" style="background-color: white">
           
           <?php $id=0;  ?>	
           @foreach($tempfile as $file)
           <?php $id++;  ?>
           					
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-4" style="background-color:white;">
           
            <div class="btnon12" id="div_{{$id}}" style="border: 1px solid #ccc">
            
            <div style="overflow:hidden;height:250px">
                         
         <img src="/../storage/gallery/{{$rest->name}}/{{$file}}" alt="Event">
                                    
            </div>                            
        
          </div>
          </div>
          
          @endforeach          
                              
        </div>

</div>

</div>




<div id="overlay" style="display: none;" style="background:#323232;">
        {{-- <div id="text">Overlay Text</div>
   <a style="z-index:105;float: right;margin-bottom: 5px;margin-left: 15px;display:none;" class="closediv btn btn-danger">Close</a>  --}}
      <button type="button" style="color:red;z-index:105;float: right;margin-bottom: 5px;margin-left: 15px;margin-right: 15px;display:none;font-size:30px;" class="close closediv" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button> 
       
        <div id="text" style="margin-top: 0px;background:#323232;;">
 	
        <div id="recipeCarousel" class="carousel slide w-100" style="overflow:hidden" data-ride="carousel" data-interval="100000">
        <div class="carousel-inner w-100" role="listbox">
	
	<?php $id=0; ?>	
	@foreach($tempfile as $file)
	<?php $id++; ?>
                <div id="{{$id}}" class="carousel-item row no-gutters" style="overflow:hidden;">
                        <div class="row" style="height:100%;">
                       
                       <div class="col-md-3 col-sm-12 col-xs-12 ">
                       </div>                                
                       <div class="col-md-6 col-sm-12 col-xs-12 " style="overflow:hidden;text-align:center;border: 0px solid #ccc;">
                                 
                               <img id="btnon" width="100%" src="/../storage/gallery/{{$rest->name}}/{{$file}}" alt="">  

{{--                               <div id="btnon" style="" class="">                                                                                                               
                                                          
                                        
                               </div>   --}}
                       </div>
                       <div class="col-md-3 col-sm-12 col-xs-12">
                       

                       </div>                                                            
                       </div>                                     
                     </div>
        @endforeach
                 
          </div>                                      
      
        <a class="carousel-control-prev" id="prevbtn" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#recipeCarousel" role="button" id="nextbtn" data-slide="next" attr="{{$log}}">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
</div>
</div>
</div>


@endsection


{{--
<div id="section2">
@section('content2')
@include('carnivallayouts.footer2')
@endsection
</div>--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(
    function(){

    $(".btnon12").click(function(){

$("#section2").css("display","none");  
     //alert($(this).attr("id"));
    var id = ($(this).attr("id")).split('_')[1];
    //alert(id);
    $("#"+id).addClass("active");
    // $("#"+id).attr("class","active");
    //$("#body").css("background","rgba(20,20,20, .5),");  
    
     
     $(".closediv").css("display","block");     
     $(".registerbtn").css("display","block");
     $("#overlay").css("display","block"); 
     $("#body").css("display","none");

     $("#tempdiv").css("display","none");

    }); 
        
    $(".closediv").click(function(){
    $("#overlay").css("display","none"); 
    $("#body").css("display","block");
    $("#section2").css("display","block");  
    $("#tempdiv").css("display","block");
    $(".closediv").css("display","none");
    $(".registerbtn").css("display","none");
    window.location.reload();
    });
    
    var cnt=1;
    var revcnt=1;
    $("#nextbtn").click(function(event)
    {
  //alert($(this).attr("attr"));
    var id = $(this).attr("attr");
    cnt++;
    if(id==0 && cnt==5)
    {
//return false;
    event.preventDefault();
    $(this).css("display","none");
  var input = window.alert("Please Register/Login to view more Images");
  
  if(input)
  {
  //alert(input);
  window.location.href = 'http://yourcarnivalguide.com/register';
  
  }
  else
  {
  //alert('no');
  window.location.href = 'http://yourcarnivalguide.com/register';
  }
    
    
    }
            		    
    });
    
     $("#prevbtn").click(function()
    {
    revcnt++;
    //$("#nextbtn").css("display","block");    
    
    var id = $(this).attr("attr");
    
    if(id==0 && revcnt==5)
    {
//return false;
    event.preventDefault();
    $(this).css("display","none");
  var input = window.alert("Please Register/Login to view more Images");
  
  if(input)
  {
  alert(input);
  window.location.href = 'http://yourcarnivalguide.com/register';
  
  }
  else
  {
  //alert('no');
  window.location.href = 'http://yourcarnivalguide.com/register';
  }
    
    
    }

            		    
    });
    
    

    });

</script>
