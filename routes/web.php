<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perfil/{id}', function ($id) {
    return view('perfil', ['id' => $id]);
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
