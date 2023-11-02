@extends('layouts.main')
@section('title', 'Cadastro')
@section('content')
    <h1>Hello World - Cadastro</h1>
    <form class="formCadastro" action="#" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <label for="rSenha">Senha:</label>
        <input type="password" name="rSenha" required><br><br>

        <input class="btnCadastro" type="submit" value="Cadastrar">
    </form>
@endsection
