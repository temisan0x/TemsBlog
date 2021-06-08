@section('content')
@extends('layouts.app')

@section('content')
<div class="]proj2" id="page-top">
    
    <h2 class="brand">Temisan's Blog</h2>

    <a href="/posts" class="btn btn-info mt-4">Go Back</a>
    <div class="container mt-5">
          @if (count($posts) > 0)
            @foreach ($posts as $post)
            <hr>
                <div class="well">
                  <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <img class="img-thumbnail img-fluid" style="width: 300px" src="/storage/cover_images/{{ $post ->cover_image }}" alt="">
                    </div>
                    <div class="col-md-5 col-sm-5"> 
                          <h3 style="text-decoration: none"  class="mt-5"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                          <div class="mt-5">
                            {!! $post->body !!}
                          </div>
                         <div class="mt-2">
                          <small> Written on {{ $post -> created_at }} by <span class="text-white">{{ $post->user->name }}</span></small>
                         </div>
                    </div>
                  </div>
                </div>
                <hr>
            @endforeach
            <h1>{{ $posts -> links()}}</h1>
        @endif
        </div>
      </div>
    </div>
</div>   

   <script src="typed.js/typed.min.js"></script>
  <script src="app.js"></script>

   <!-- jquery latest version -->
   <script src="js/vendor/jquery-3.2.1.min.js"></script>
   <!-- Bootstrap framework js -->
   <script src="js/bootstrap.min.js"></script>
   <!-- All js plugins included in this file. -->
   <script src="js/plugins.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <!-- Waypoints.min.js. -->
   <script src="js/waypoints.min.js"></script>
   <!-- Main js file that contents all jQuery plugins activation. -->
   <script src="js/main.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </body>

</html>
@endsection

@endsection