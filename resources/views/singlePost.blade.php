@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
  

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
      <div class="col-6">
        <button type="submit" class="btn btn-success float-left">{{$single_post->user->name}}</button>
      </div>
      

    </div>
    


  </div>
    </div>
</div>
@endsection