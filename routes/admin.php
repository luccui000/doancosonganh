<?php

use Illuminate\Support\Facades\Route;


Route::group(['as' => 'admin.sanpham.'], function() {
    Route::get('/', [App\Http\Controllers\SanPhamController::class, 'index'])->name('index');
});