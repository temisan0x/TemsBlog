@extends('layouts.app')

@section('content')

<div class="hero  proj3" id="page-top">
  
    <h2 class="brand">Temisan's Blog</h2>

    @include('layouts.messages')
    
   
    <div class="container">
      <div class="row">
        <div class="col mt-5">
           <h1 class="text-center mt-5">Believe in God</h1>
           @if (count($posts) > 0)
               
          
            <table class="table table-striped">
              <tr>
                <th>Title</th>
                <th></th>
                <th></th>
              </tr>
              @foreach ($posts as $post)
                  <tr>
                    <td>{{ $post -> title }}</td>
                    <td><a href="/posts/{{ $post -> id }}/edit" class="btn btn-dark">edit</a></td>
                    <td>
                      {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST' , 'class' => 'pull-right']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
            </table>
          @else
            <div class="bg-dark text-center mt-5">
              <p>You have no post !</p>
            </div>
            
           @endif
        </div>
      </div>
    </div>
</div>   




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
