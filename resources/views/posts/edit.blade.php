@extends('layouts.main')
@section('title', 'Editanto: ' . $post->title)
@section('content')
<!-- Edit Page -->
<h1>Edite sua história</h1>
    <form action="/posts/update/{{ $post->id }}" method="POST" enctype="multipart/form-data" class="formPost">
        @csrf
        @method('PUT')
        <img src="/img/posts/{{$post->image}}" alt="{{$post->title}}"><br><br>
        <label>Título da história:</label><br>
        <input type="text" name="title" value="{{$post->title}}" required><br>

        <label>Local da história:</label><br>
        <input type="text" id="local" value="{{$post->local}}" name="local"><br><br>

        <label>Conteúdo da história:</label><br>
        <textarea name="text" rows="10" required>{{$post->text}}</textarea><br><br>

        <label>Categoria da história:</label><br>
        <input type="text" name="category" value="{{$post->category}}" required><br><br>

        <input class="btnFormPost" type="submit" value="Atualizar história">
    </form>
@endsection
