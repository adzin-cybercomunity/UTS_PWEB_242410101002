<?php

use App\Http\Controllers\CoffeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CoffeeController::class, 'index']);

Route::get('/login', [CoffeeController::class, 'login'])->name('login');
Route::post('/login', [CoffeeController::class, 'prosesLogin'])->name('login.post');
Route::post('/logout', [CoffeeController::class, 'logout'])->name('logout');

Route::get('/dashboard', [CoffeeController::class, 'dashboard']);
Route::get('/pengelolaan', [CoffeeController::class, 'pengelolaan']);
Route::get('/profil', [CoffeeController::class, 'profil']);
