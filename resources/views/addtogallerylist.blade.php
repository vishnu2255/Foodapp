@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="m-2">Add to Gallery</h1>

<hr>
<form action="/postimage" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="row form-group">
    <div class="col-md-4">
            <label  for="">Gallery Name*</label>
            <br>
            <input id="name" name="name" type="text" class= "form-control"> 
    </div>         
</div>
<hr>

<div class="form-group">
    <h4>Food Images</h4>           
    <label for="file">Choose files to upload</label>
    <br>
    <div class="row form-control" id="tempfiles">
            <div id="file-0">
                            <input type="file" class= "form-control" value="AddFile" name="uploaded_file[]" multiple>                           
            </div>  
                
     </div> 
     
     <a href="" id="addtempfile">Add Button</a>   
</div>

<hr>

<button class="btn btn-primary" type="submit">Submit Event</button>

</div>

@endsection