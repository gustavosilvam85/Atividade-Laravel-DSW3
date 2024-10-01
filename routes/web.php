<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CidadeController;

Route::get('/cidades', [CidadeController::class, 'index'])->name('index');
Route::get('/cidades/create', [CidadeController::class, 'create'])->name('cidades.create');
Route::post('/cidades', [CidadeController::class, 'store'])->name('cidades.store');
Route::get('/cidades/{id}', [CidadeController::class, 'show'])->name('cidades.show');
