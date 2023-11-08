<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class,'index']);//Padrão Laravel - Mostrar registros do banco

Route::get('/perfil/{id}', function ($id) {
    return view('perfil', ['id' => $id]);
});

Route::get('/posts/show/{id}', [PostController::class,'show']);//Padrão Laravel - Mostrar registro do banco
Route::get('/posts/create', [PostController::class,'create'])->middleware('auth');//Padrão Laravel - criar registros do banco
Route::post('/posts', [PostController::class,'store']);//Padrão Laravel - colocar registros do banco

Route::get('/cadastro', function () {
    return view('cadastro');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
