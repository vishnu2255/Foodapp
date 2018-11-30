@extends('layouts.blogapp')
{{-- <link href="{{ asset('css/blogcss.css') }}" rel="stylesheet"> --}}

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            
          @foreach($blogs as $blog)
            
          <div class="post-preview">
          <a href="blogs/{{$blog->id}}">
        <div style="">
           <img src="../images/Food_6.jpg" alt="" width="100%"> 
        </div>      
        <h2 style="margin-top: 20px;" class="post-title">

        {{$blog->title}}
        
                  </h2>
                  <h3 class="post-subtitle">
        {{$blog->subtitle}}
                  </h3>
                </a>
                <p class="post-meta">Posted by
                  <a href="#">{{$blog->name}}</a>
                  {{$blog->created_at}}</p>
           </div>
              <hr>
          
          @endforeach                    
          {{-- <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
              </h2>
              <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 18, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Science has not yet mastered prophecy
              </h2>
              <h3 class="post-subtitle">
                We predict too much for the next year and yet far too little for the next ten.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Failure is not an option
              </h2>
              <h3 class="post-subtitle">
                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2018</p>
          </div>
          <hr> --}}
          <!-- Pager -->
          <div class="clearfix">
           {{ $blogs->links() }}
          </div>

          {{-- <nav>
                <ul class="pagination justify-content-end">
                     {{$blogs->links('vendor.pagination.bootstrap-4')}}
                 </ul>
          </nav> --}}
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
@endsection



<div class="row">

<div class="col-md-6">

<div class="row">

  <div class="col-md-6">
  
    <div class="post-preview">
      <a href="post.html">
        <h2 class="post-title">
          Failure is not an option
        </h2>
        <h3 class="post-subtitle">
          Many say exploration is part of our destiny, but it’s actually our duty to future generations.
        </h3>
      </a>
      <p class="post-meta">Posted by
        <a href="#">Start Bootstrap</a>
        on July 8, 2018</p>
    </div>
  
  </div>  

</div>


</div>


<div class="col-md-6">
  
</div>


</div>


<div class="row container">

  <div class="col-md-6">
  
  <h1 style="text-align:left">Recent Posts  </h1>
  
  <div class="row">
  
    <div class="col-md-6">
    
  <div class="row">
  
  <div class="col-md-6" style="overflow:hidden">
  
  <img src="img/slides/Alana_2017.jpg" alt="" width="100%">
  
  </div>
  
  <div class="col-md-6" style="">
  
      <div class="post-preview">
        <a href="post.html" style="color:black">
          <h6 class="post-title">
            Failure is not an option
          </h6>
          
        </a>
        <p class="post-meta">
          
      July 8, 2018</p>
      </div>
  
  </div> 
  </div>  

    
    </div>
    
    
    <div class="col-md-6">
    
       <div class="row">
  
        <div class="col-md-6" style="overflow:hidden">
        
        <img src="img/slides/Alana_2017.jpg" alt="" width="100%">
        
        </div>
        
        <div class="col-md-6" style="">
        
            <div class="post-preview">
              <a href="post.html" style="color:black">
                <h6 class="post-title">
                  Failure is not an option
                </h6>
                
              </a>
              <p class="post-meta">
                
            July 8, 2018</p>
            </div>
        
        </div> 
        </div>   
    
    </div>  
  
  </div>
  
  
  </div>
  
  
  <div class="col-md-6">
    
  </div>
  
  
  </div>