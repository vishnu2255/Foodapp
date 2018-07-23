@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="m-2">Post a blog</h1>

<hr>
<form action="/postblog" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="row form-group">
        <div class="col-md-4">
                <label  for="">Name*</label>
                <br>
                <input id="name" name="name" type="text" class= "form-control"> 
        </div>         
</div>
    <hr>
    <div class="row form-group">
    
            <div class="col-md-4">
                    <label  for="">Title*</label>
                    <br>
                    <input name="title" type="text" class= "form-control"> 
            </div>
        
            <div class="col-md-4">
                    <label  for="">Subtitle*</label>
                    <br>
                    <input name="subtitle" type="text" class= "form-control"> 
            </div>
            

        </div>
    
  
                 
       <hr>       

        <div class="row form-group">
        <div class="col-md-12">
                <label  for="">Content*</label>
                <br>
                <textarea class= "form-control" name="content" id="article-ckeditor" rows="10"></textarea>
        </div>
        
        </div>
    
        <hr>

<div class="form-group">
        <h2 class="mb-2">Article Image</h2>
       
        <div class="m-2">                   
            <label for="file">Choose file to upload</label>
            <br>
            <input type="file" class= "form-control" name="flyerimg" multiple="multiple" >
            {{-- <input type="file" class= "form-control" name="flyerimg[]" multiple="multiple" > --}}
        </div>
</div>

<hr>

<button class="btn btn-primary" type="submit">Submit Event</button>

</div>

@endsection