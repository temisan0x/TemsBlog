@extends('layouts.app')

@section('content')

<div class="hero" id="page-top">
  
    <h2 class="brand">Temisan's Blog</h2>

    @include('layouts.messages')
    
    <a href="/posts" class="btn btn-light mb-4">Go Back</a>
    <div class="container">
      <div class="row">
        <div class="col">
            {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
              {{ Form::label('title', 'Title')}}
              {{ Form::text('title','', ['class'=>'form-control', 'placeholder' => 'Title']) }}
            </div>
            <div class="form-group">
                {{ Form::label('body', 'Body')}}
                {{ Form::textarea('body', '' , ['id' => 'editor', 'class'=> 'form-control text-dark', 'type' => 'text', 'placeholder' => 'Body']) }}
            </div>
            <div class="form-group">
              {{ Form::file('cover_image') }}
            </div>
              {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!} 
        </div>
      </div>
    </div>
</div>   

@section('scripts')
    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
  @endsection


<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/balloon-block/ckeditor.js"></script>
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