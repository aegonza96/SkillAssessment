<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Página inicial de login
Route::get('/', function () {
    return view('login');
});

// Página principal que exibe todos os usuários
Route::get('index', [UserController::class, 'index'])->name('user.index');

// Adicionar usuário
Route::get('add', [UserController::class, 'create'])->name('user.create');
Route::post('add', [UserController::class, 'store'])->name('user.store');

// Editar usuário
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/edit/{id}', [UserController::class, 'update'])->name('user.update');