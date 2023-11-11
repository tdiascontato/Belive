@extends('layouts.main')
@section('title', 'Post')
@section('content')

@if(session('msg'))
    <div class="flashMessages">
        <p class="msg">{{session('msg')}}</p>
    </div>
@endif
<h1>Hello World - Dashboard </h1>
<main class="mainDashboard">
    @if(count($posts)>0)
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Posts</th>
                <th>Curtidas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td><p> # {{ $loop->index + 1}} </p></td>
                <td><a href="/posts/show/{{$post->id}}" class="aShowDashboard">{{$post->title}}</a></td>
                <td><p>{{count($post->users)}}</p></td>
                <td><a href="/posts/edit/{{$post->id}}" class="aEditDashboard">Editar</a></td>
                <td>
                    <form action="/posts/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="btnDelete">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <bolder style="color: white">Você não possui posts..
        <a href="/posts/create"> Criar Post! </a>
    </bolder>
    @endif
</main>
@endsection
