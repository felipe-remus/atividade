<?php

use App\Http\Controllers\AlimentoController;
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

Route::post('/editar', function () {
    return view('editar');
});

Route::get('/listagem', function () {
    return view('listagem');
});

Route::get('/listagem', [AlimentoController::class, 'index'])->name('listagem');

Route::get('/alimentos/{id}', [AlimentoController::class, 'show'])->name('show');

Route::get('/alimentos/create', [AlimentoController::class, 'create'])->name('create');

Route::get('/alimentos/{id}/edit', [AlimentoController::class, 'edit'])->name('edit');