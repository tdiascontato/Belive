<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class,'index']);
Route::get('/perfil/{id}', function ($id) {
    return view('perfil', ['id' => $id]);
});
Route::get('/posts/create', [PostController::class,'create']);
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
