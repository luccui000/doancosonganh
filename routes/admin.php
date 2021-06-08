<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() { return redirect()->route('admin.dangnhap'); });
Route::get('/dangnhap', [App\Http\Controllers\XacThucController::class, 'dangnhap'])->name('admin.dangnhap');
Route::post('/dangnhap', [App\Http\Controllers\XacThucController::class, 'xacthuc'])->name('admin.xacthuc');

Route::group(['as' => 'admin.sanpham.', 'prefix' => 'sanpham'], function() {
    Route::get('/', [App\Http\Controllers\SanPhamController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\SanPhamController::class, 'create'])->name('create');
    Route::post('/', [App\Http\Controllers\SanPhamController::class, 'store'])->name('store');
    Route::get('/{id}', [App\Http\Controllers\SanPhamController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [App\Http\Controllers\SanPhamController::class, 'update'])->name('update');
});