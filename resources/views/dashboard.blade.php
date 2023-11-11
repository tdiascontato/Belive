@extends('layouts.main')
@section('title', 'Post')
@section('content')
<!-- Não utilizado -->
<h1>Hello World - Dashboard < /h1>
<main class="mainDashboard">
    @if(count($posts)>0)
    @else
    <bolder>Você não possui posts..
        <a href="/posts/create"> Criar Post! </a>
    </bolder>
    @endif
</main>
@endsection
