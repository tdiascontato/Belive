@extends('layouts.main')
@section('title', 'Perfil')
@section('content')
    @if($id !== 'Tiago')
    <h1>Vá se cadastrar!</h1>
    <a href="/cadastro">Ir para o cadastro</a>
    @else
    <h1>Hello {{$id}}</h1>
    <a href="/">Siga para o início</a>
    <a href="/cadastro">Ir para o cadastro</a>
    <a href="/login">Ir para o login</a>
    <a href="/dashboard">Ir para o dashboard</a>
    @endif
@endsection
