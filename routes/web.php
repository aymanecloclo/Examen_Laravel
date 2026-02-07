<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'home']);
Route::get('/contact', [PageController::class, 'contact']);
Route::delete('/produits/{product}', [ProductController::class, 'destroy'])->name('produits.destroy');

Route::resource('produits', ProductController::class);

