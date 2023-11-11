@extends('layouts.main')
@section('title', 'Welcome!')
@section('content')
<main>

    @if(session('msg'))
    <div class="flashMessages">
        <p class="msg">{{session('msg')}}</p>
    </div>
    @endif
    <h1>Hello World - Welcome</h1>

    <div class="postscards">
        @foreach($posts as $post)
        <div class="card">

            <img src="/img/posts/{{$post->image}}" alt="{{$post->title}}"/>
            <h2>{{$post->title}}</h2> 
            <h3>{{$post->user['name']}}</h3>
            <h4>{{$post->local}}</h4>
            <text>{{$post->text}}</text>
            <p>{{$post->category}}</p>
            <a href="/posts/show/{{$post->id}}">
                <input type="button" value="Ler Post"/>
            </a>

        </div>
        @endforeach

        @if(count($posts) == 0 && $search)
        <p class="noPost"> Não foi possível encontrar alguma história com {{$search}}..</p>
        <br/><a href="/">Voltar para Página Inicial</a>
        @elseif(count($posts)==0)
        <p class="noPost">Não há histõrias disponíveis..</p>
        @endif

    </div>
    </main>
@endsection
