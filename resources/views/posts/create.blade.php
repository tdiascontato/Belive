@extends('layouts.main')
@section('title', 'Create Post')
@section('content')
<h1>Crie uma nova história</h1>
    <form class="formPost" action="/posts" method="post" enctype="multipart/form-data">
        @csrf
        <label>Título da história:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Local da história:</label><br>
        <input type="text" id="local" name="local"><br><br>

        <label>Conteúdo da história:</label><br>
        <textarea name="text" rows="10" required></textarea><br><br>

        <label>Imagem da história:</label><br>
        <input type="file" id="image" name="image"><br><br>

        <label>Categoria da história:</label><br>
        <input type="text" name="category" required><br><br>

        <input class="btnFormPost" type="submit" value="Publicar história">
    </form>
@endsection
