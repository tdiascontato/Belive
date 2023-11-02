@extends('layouts.main')
@section('title', 'Login')
@section('content')
    <h1>Hello World - Login</h1>
    <form class="formLogin" action="#" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" holdername="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" holdername="senha" required><br><br>

        <input class="btnLogin" type="submit" value="Entrar">
    </form>
@endsection
