@extends('layouts.main')
@section('content')
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-2">
            @foreach($posts as $post)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Автор: {{$post->user->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$post->title}}</h6>
                            <p class="card-text">{{$post->description}}</p>
                            <a href="{{route('posts.show', $post->id)}}" class="card-link">Посмотреть</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
