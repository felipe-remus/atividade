<?php

use App\Http\Controllers\AlimentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::match(['get', 'post'], '/menu', function () {
    return view('menu');
});

Route::get('/listagem', [AlimentoController::class, 'index'])->name('listagem');

Route::get('/alimentos/{id}', [AlimentoController::class, 'show'])->name('show');

Route::get('/cadastro', [AlimentoController::class, 'create'])->name('create');

Route::get('/alimentos/{id}/edit', [AlimentoController::class, 'edit'])->name('edit');

Route::post('/alimentos', [AlimentoController::class, 'store'])->name('store');

Route::put('/alimentos/{id}', [AlimentoController::class, 'update'])->name('update');
Route::delete('/alimentos/{id}', [AlimentoController::class, 'destroy'])->name('destroy');