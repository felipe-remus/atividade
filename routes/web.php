<?php

use App\Http\Controllers\AlimentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::match(['get', 'post'], '/menu', function () {
    return view('menu');
});

//Route::get('/cadastro', function () {return view('cadastro');});

//Route::post('/editar', function () {return view('editar');});

//Route::get('/listagem', function () {return view('listagem');});

//Rotas para Select
Route::get('/listagem', [AlimentoController::class, 'index'])->name('listagem');
Route::get('/alimentos/{id}', [AlimentoController::class, 'show'])->name('show');

//Rotas para Insert
Route::post('/alimentos', [AlimentoController::class, 'store'])->name('store');
Route::get('/cadastro', [AlimentoController::class, 'create'])->name('create');

//Rota para Update
Route::get('/alimentos/{id}/edit', [AlimentoController::class, 'edit'])->name('edit');
Route::put('/alimentos/{id}', [AlimentoController::class, 'update'])->name('update');

//Rota para Delete
Route::delete('/alimentos/{id}', [AlimentoController::class, 'destroy'])->name('destroy');