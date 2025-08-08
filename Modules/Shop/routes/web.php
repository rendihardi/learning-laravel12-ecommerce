<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\ProductController;
use Modules\Shop\Http\Controllers\ShopController;

// use Modules\Shop\App\Http\Controllers\ShopController;

Route::get('/shop', [ProductController::class, 'index'])->name('products.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/shop', ShopController::class)->names('shop');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');