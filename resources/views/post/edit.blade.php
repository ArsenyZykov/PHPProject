@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('posts.update', $post->id) }}" method ="post">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="InputTitle1">Заголовок</label>
                <input type="text" value="{{$post->title}}" class="form-control" name="title" id="InputTitle1" aria-describedby="emailHelp">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="InputDescription1">Описание</label>
                <textarea type="text" name="description" class="form-control" id="InputDescripton1">{{$post->description}}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
@endsection
