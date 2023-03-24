<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/add-product', [ProductController::class, 'add'])->name('products.add');
Route::post('/add-product', [ProductController::class, 'create'])->name('products.create');
Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/{product}', [ProductController::class, 'delete'])->name('products.delete');