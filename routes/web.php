<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandmadeController;

Route::get('/', [HandmadeController::class, 'home'])->name('home');
Route::get('/produk', [HandmadeController::class, 'index'])->name('handmades.index');
Route::get('/produk/{handmade}', [HandmadeController::class, 'show'])->name('handmades.show');
