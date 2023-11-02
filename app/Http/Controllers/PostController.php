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
}
