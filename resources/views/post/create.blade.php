@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('posts.store') }}" method ="post">
            @csrf
            <div class="form-group">
                <label for="InputTitle1">Заголовок</label>
                <input type="text" class="form-control" name="title" id="InputTitle1" aria-describedby="emailHelp">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="InputDescription1">Описание</label>
                <textarea type="text" name="description" class="form-control" id="InputDescripton1"></textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
