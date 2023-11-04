<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('welcome', ['posts' => $posts]);
    }

    public function create() {
        return view('posts.create');
    }
    public function store(Request $request) {
        $post = new Post;
        $post->title = $request->title;
        $post->local = $request->local;
        $post->text = $request->text;
        $post->category = $request->category;
        // upload imagem
        if( $request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->getClientOriginalExtension();
            $imageName = md5($requestImage->getClientOriginalName()) . strtotime("now") .'.'. $extension;
            $request->image->move(public_path('/img/posts'), $imageName);
            $post->image = $imageName;
        }
        $post->save();
        return redirect('/')->with('msg', 'Post criado com sucesso!');
    }
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' =>$post]);
    }
}
