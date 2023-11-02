@extends('layouts.main')
@section('title', 'Welcome!')
@section('content')

<h1>Hello World - Welcome</h1>
    @foreach($posts as $post)
    <div class="postscards">
        <div class="card">
            <img class="imageCard" src="/img/image.jpg" alt="{{$post->title}}"/>
            <h2>{{$post->title}}</h2>
            <h3>{{$post->user}}</h3>
            <h4>{{$post->local}}</h4>
            <p>{{$post->text}}</p>
            <p>{{$post->category}}</p>
        </div>

        <div class="card">
            <img class="imageCard" src="/img/image2.jpg" alt="{{$post->title}}"/>
            <h2>{{$post->title}}</h2>
            <h3>{{$post->user}}</h3>
            <h4>{{$post->local}}</h4>
            <p>{{$post->text}}</p>
            <p>{{$post->category}}</p>
        </div>
    </div>
    @endforeach
@endsection
