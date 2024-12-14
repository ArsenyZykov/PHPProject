@extends('layouts.main')
@section('content')
    <div>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Текущий пост</a>
                    </li>
                    @if($post->user_id === Auth::id())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts.edit', $post -> id)}}">Изменить</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('posts.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Удалить" class="nav-link">
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <a href="{{route('posts.index')}}" class="btn btn-primary">Назад</a>
            </div>
            <div class="card-footer text-muted">
                {{$post->user->name}}
            </div>
        </div>
    </div>
@endsection
