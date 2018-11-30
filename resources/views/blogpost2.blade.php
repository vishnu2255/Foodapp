@extends('layouts.blogapp')
{{-- <link href="{{ asset('css/blogcss.css') }}" rel="stylesheet"> --}}
@section('content')

<div class="container">

        <div class="row">
  
          <!-- Post Content Column -->
          <div class="col-lg-10">
  
            <!-- Title -->
            <h1 class="mt-4">{{$blog->title}}</h1>
  
            <!-- Author -->
            <p class="lead">
        
              <h2>{{$blog->name}}</h2>
            </p>
  
            <hr>
  
            <!-- Date/Time -->
            <p>Posted on {{$blog->created_at}}</p>
  
            <hr>
  
            <!-- Preview Image -->
            <img class="img-fluid rounded" src="../images/Food_6.jpg" alt="">
  
            <hr>
  
            <!-- Post Content -->
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
  
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
  
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
  
            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in
                <cite title="Source Title">Source Title</cite>
              </footer>
            </blockquote>
  
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
  
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
  
            <hr>
  
            <!-- Comments Form -->
           
            <!-- Single Comment -->
            
  
            <!-- Comment with nested comments -->
        
  
          </div>
  
          <!-- Sidebar Widgets Column -->
          <div class="col-md-2">
        
            <a href="\blogs" class="btn btn-primary">Back</a>
            <!-- Search Widget -->
            {{-- <div class="card my-4">
              <h5 class="card-header">Search</h5>
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
            
            --}}
  
            <!-- Categories Widget -->              
            <!-- Side Widget -->
           
          </div>
  
        </div>
        <!-- /.row -->
  
      </div>
      <!-- /.container -->
  
      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
        </div>
        <!-- /.container -->
      </footer>


      @endsection