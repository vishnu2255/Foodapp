<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
 
 
</body>
</html>





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
