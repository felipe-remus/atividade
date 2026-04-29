<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::match(['get', 'post'], '/menu', function () {
    return view('menu');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/editar', function () {
    return view('editar');
});

Route::get('/listagem', function () {
    return view('listagem');
});