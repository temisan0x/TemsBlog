@section('content')
@extends('layouts.app')

@section('content')
<div class="hero" id="page-top">
    
    <h2 class="brand">Temisan's Blog</h2>
    <a href="/posts" class="btn btn-info">Go Back</a>
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div>
                <h1 class="mb-4 text-center">{{ $post -> title  }}</h1>
                <img style="width: 50%" src="/storage/cover_images/{{ $post ->cover_image }}" alt="">
                <br><br>
              <div class="mb-4 text-center">
                  {!! $post->body !!}
              </div>
              <hr>
              
              <footer class="text-center">Written on {{ $post->created_at }} by {{ $post->user->name }}</footer>
              <hr>
              @if (!Auth::guest())  
                @if (Auth::user()->id == $post->user_id)
                {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST' , 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-dark">Edit</a>
              {!! Form::close() !!}
                @endif              
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