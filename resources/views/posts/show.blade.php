@extends('layouts.main')
@section('title', 'Post')
@section('content')
<!-- item Page -->
<h1>Hello World - Post n°{{$post->id}}</h1>
<main class="mainPost">
    <div class="card">
        <img src="/img/posts/{{$post->image}}" alt="{{$post->title}}"/>
        <h2><ion-icon name="logo-electron"></ion-icon>{{$post->title}}</h2>
        <h3><ion-icon name="walk-outline"></ion-icon>{{ $postOwner['name'] }}</h3>
        <h4><ion-icon name="earth-outline"></ion-icon>{{$post->local}}</h4>
        <p>{{substr($post->text, 0, 100). " ..."}}</p>
        <p><ion-icon name="copy-outline"></ion-icon>{{$post->category}}</p>
        <form action="/posts/join/{{$post->id}}" method="post">
            @csrf
            <button type="submit" class="btnInteration">Top</button>
        </form>
    </div>
    </main>
@endsection
<!-- {{$post->user['name']}} line 10 -->
