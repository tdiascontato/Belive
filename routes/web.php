<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class,'index']);//Padrão Laravel - Mostrar registros do banco

Route::get('/perfil/{id}', function ($id) {
    return view('perfil', ['id' => $id]);
});

Route::get('/posts/show/{id}', [PostController::class,'show']);//Padrão Laravel - Mostrar registro do banco
Route::get('/posts/create', [PostController::class,'create']);//Padrão Laravel - criar registros do banco
Route::post('/posts', [PostController::class,'store']);//Padrão Laravel - colocar registros do banco

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

