@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
    <a href="{{route('home')}}" class="btn btn-sm btn-info m-2 float-right">Back to home</a>

        </div>
  

  <div class="col-12">

    <h4>{{$single_post->title}}</h4> <br> <br>

    <div class="row p-2">
        @if (isset($single_post->image))
            
      <div class="col-4">
            <img src="/ad_images/{{$single_post->image}}" class="img-fluid" />  
     </div>  
                  
        @endif

        
    </div>

    <div class="row">
      <div class="col-12">
        <p>{{$single_post->body}}</p>
      </div>

    </div>

       
        
    

    <div class="row">
        <div class="col-4">
        
        <a href="{{route('home.deleteSinglePost', ['id'=> $single_post->id]) }}" class="btn btn-sm btn-danger float-left">
            Obriši  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>
        </a>

        
    
</div> 
      

    </div>
    


  </div>
    </div>
</div>
@endsection