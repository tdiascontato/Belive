@extends('layouts.main')
@section('title', 'Create Post')
@section('content')
<h1>Crie uma nova história</h1>
    <form class="formPost" action="#" method="post" enctype="multipart/form-data">
        <label for="titulo">Título da história:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="autor">Local da história:</label><br>
        <input type="text" id="local" name="local" required><br><br>

        <label for="conteudo">Conteúdo da história:</label><br>
        <textarea id="conteudo" name="conteudo" rows="10" required></textarea><br><br>

        <label for="imagem">Imagem da história:</label><br>
        <input type="file" id="imagem" name="imagem" accept="image/*"><br><br>

        <input class="btnFormPost" type="submit" value="Publicar história">
    </form>
@endsection
