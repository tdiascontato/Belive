@extends('layouts.main')
@section('title', 'Perfil')
@section('content')
    @if($id !== 'Tiago')
    <h1>Vá se cadastrar!</h1>
    <a href="/cadastro">Ir para o cadastro</a>
    @else
    <h1>Hello {{$id}}</h1>
    @endif
@endsection
