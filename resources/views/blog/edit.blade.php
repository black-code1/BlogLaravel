@extends('base')

@section('title', 'Creer un article')

@section('content')
    <form action="" method="post">
        @csrf
        <div>
            <input type="text" name="title" value="{{ old('title', 'Mon titre') }}">
            @error("title")
                {{ $message }}
            @enderror
        </div>
        <div>
            <textarea name="content">{{ old('content', 'Contenu de demonstration') }}</textarea>
            @error("content")
            {{ $message }}
            @enderror
        </div>
        <div>
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}">
            @error("slug")
            {{ $message }}
            @enderror
        </div>
        <button>Enregistrer</button>
    </form>
@endsection
