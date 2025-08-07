<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\ShopController;

// use Modules\Shop\App\Http\Controllers\ShopController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/shop', ShopController::class)->names('shop');
});
