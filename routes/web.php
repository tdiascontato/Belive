<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class,'index']);//Padrão Laravel - Mostrar registros do banco

Route::get('/perfil/{id}', function ($id) {
    return view('perfil', ['id' => $id]);
});

Route::get('/posts/show/{id}', [PostController::class,'show']);//Padrão Laravel - Mostrar registro do banco
Route::get('/posts/create', [PostController::class,'create'])->middleware('auth');//Padrão Laravel - criar registros do banco
Route::get('/posts/edit/{id}', [PostController::class,'edit'])->middleware('auth');//get update
Route::put('/posts/update/{id}', [PostController::class,'update'])->middleware('auth');//update
Route::post('/posts', [PostController::class,'store']);//Padrão Laravel - colocar registros do banco
Route::post('/posts/join/{id}', [PostController::class,'joinPost'])->middleware('auth');//reaction to post
Route::delete('/posts/{id}', [PostController::class,'destroy'])->middleware('auth');//delete
Route::delete('/posts/leave/{id}', [PostController::class,'leavePost'])->middleware('auth');//descurtir

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/dashboard', [PostController::class,'dashboard'])->middleware('auth');
