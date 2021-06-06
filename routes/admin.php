<?php

use Illuminate\Support\Facades\Route;


Route::group(['as' => 'admin.sanpham.', 'prefix' => 'sanpham'], function() {
    Route::get('/', [App\Http\Controllers\SanPhamController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\SanPhamController::class, 'create'])->name('create');
    Route::post('/', [App\Http\Controllers\SanPhamController::class, 'store'])->name('store');
    Route::get('/{id}', [App\Http\Controllers\SanPhamController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [App\Http\Controllers\SanPhamController::class, 'update'])->name('update');
});