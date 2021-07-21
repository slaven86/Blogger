@extends('layouts.master')

@section('main') <br>


    <div class="row">
        <div class="col-2 bg-secondary">
            <ul class="list-group list-group-flush">
                @foreach ($all_categories as $category)
                    <li class="list-group-item">
                        <a href="{{ route('welcome')}}?cat={{$category->name}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-10">
            <div class="row mb-2">
            @foreach($all_posts as $post)
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong
                            class="d-inline-block mb-2 text-primary">{{ $post->user->name }}</strong>
                        <h3 class="mb-0">
                            {{ $post->title }}</a>
                        </h3>
                        <div class="mb-1 text-muted">{{ $post->created_at }}</div>
                        <p class="card-text mb-auto">{{ Str::limit($post->body, 20, ' ...') }}</p>
                        <a href="{{ route('singlePost', ['id' => $post->id]) }}">Continue reading</a>
                    </div>
                    
                    @if (isset($post->image))
                    <div class="image-container w-50 p-3 h-25 d-inline-block">
                        
                        <img src="/ad_images/{{$post->image}}" class="img-fluid" /> 
                    </div>
                    @endif
                </div>
            </div>
            
        @endforeach
        </div>
        </div>

</div>

@endsection
