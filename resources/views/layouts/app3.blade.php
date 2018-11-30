<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon1.ico">

    <title>YourCarnivalGuide</title>

    <!-- Bootstrap core CSS -->
   

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Carnival') }}</title>

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {{-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> --}}
    {{-- <script src="docs/dist/js/bootstrap.min.js"></script> --}}
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('js/holder.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js')}}"></script>
   

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
       <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/video.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
   <link rel="stylesheet" href="form.css" >
        <script src="form.js">
      
      $(function () {
    $('.marquee').marquee({
        duration: 5000,
         duplicated: true,
         gap: 00, 
         direction: 'left',
         pauseOnHover: true
    });
});        
        </script>

		 <script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
</script>
  </head>
<!-- NAVBAR
================================================== -->
 
<!-- NAVBAR
================================================== -->  
<body> 

    @include('layouts.newheader')


@yield('content')    

@yield('content2')    
    

</body>

</html>


<div class="row" style="width:100%;overflow:hidden;">
          <div class="col-md-3 col-xs-12 col-sm-6"><a style="width:100%;padding-left:2px" href="/Caribana/bandslist"><img src="img/band.jpg" width="100%"></a>
         <br> <br>
            <div class="" style="text-align:left;margin-left:5px;">                     
          <h2 style="color:rgb(255, 66, 86);font-family:brandon-grotesque,helvetica,sans-serif;">Bands</h2>
           
          <p style=
          "font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 18px;
    line-height: 1.42857143;
    color: #333;" >  Meet the creators of the stunning costumes and floats, get to know what drives their passion, and what to expect in the coming years.</p>
   
                  <a class="btn btn-outline-primary btn-lg mb-5 mt-2" style="font-family:brandon-grotesque,helvetica,sans-serif;" href="/Caribana/bandslist" role="button">Go To Bands Section</a>
              <br>          
            </div>
          </div>