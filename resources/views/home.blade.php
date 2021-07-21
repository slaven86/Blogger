@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
  

  <div class="col-8">
    <h3>Moji postovi</h3> <br>
    <ul class="list-group">
        @foreach ($all_posts as $post)
        <li class="list-group-item">
          <a href="{{route('home.singlePost', ['id' => $post->id])}}">{{$post->title}}</a>
        </li>
    @endforeach

    </ul>

  </div>

  <div class="col-4">
    <a href="{{route('home.showPostForm')}}" class="btn btn-success m-2">Novi post +</a>
  </div>
    </div>
</div>
@endsection