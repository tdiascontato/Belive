@extends('layouts.main')
@section('title', 'Post')
@section('content')
<h1>Hello World - Post n°{{$post->id}}</h1>
<main class="mainPost">
    <div class="card">
        <img src="/img/posts/{{$post->image}}" alt="{{$post->title}}"/>
        <h2><ion-icon name="logo-electron"></ion-icon>{{$post->title}}</h2>
        <h3><ion-icon name="walk-outline"></ion-icon>{{$post->user}}</h3>
        <h4><ion-icon name="earth-outline"></ion-icon>{{$post->local}}</h4>
        <p>{{$post->text}}</p>
        <p><ion-icon name="copy-outline"></ion-icon>{{$post->category}}</p>
    </div>
    </main>
@endsection

