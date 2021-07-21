@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
  
  <div class="col-8">
    
    <h3>Napravi novi post</h3> <br>
    <form action="{{ route ('home.savePost')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="title" placeholder="naslov" class="form-control" /> <br>
        <textarea name="body" placeholder="text" class="form-control" cols="30" rows="10"></textarea> <br>
        <input type="file" name="image" class="fomr-control" /> <br> <br>
        <select name="category" class="form-control">
            @foreach ($all_categories as $category)
            
            <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach

        </select> <br>
        <button type="submit" class="btn btn-info">Save</button>


    </form>

  </div>
    </div>
</div>
@endsection