<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HoaDonController;

Route::get('/', function() { return redirect()->route('admin.dangnhap'); });
Route::get('/dangnhap', [Controllers\XacThucController::class, 'dangnhap'])->name('admin.dangnhap');
Route::post('/dangnhap', [Controllers\XacThucController::class, 'xacthuc'])->name('admin.xacthuc');

Route::group(['as' => 'admin.sanpham.', 'prefix' => 'sanpham'], function() {
    Route::get('/', [Controllers\SanPhamController::class, 'index'])->name('index');
    Route::get('/create', [Controllers\SanPhamController::class, 'create'])->name('create');
    Route::post('/', [Controllers\SanPhamController::class, 'store'])->name('store');
    Route::get('/{id}', [Controllers\SanPhamController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [Controllers\SanPhamController::class, 'update'])->name('update');
    Route::delete('/{id}', [Controllers\SanPhamController::class, 'destroy'])->name('destroy');
});
Route::group(['as' => 'admin.hangsanxuat.', 'prefix' => 'hangsanxuat'], function () {
    Route::get('/', [Controllers\HangSanXuatController::class, 'index'])->name('index');
    Route::get('/create', [Controllers\HangSanXuatController::class, 'create'])->name('create');
    Route::post('/', [Controllers\HangSanXuatController::class, 'store'])->name('store');
    Route::get('/{id}', [Controllers\HangSanXuatController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [Controllers\HangSanXuatController::class, 'update'])->name('update');
});
Route::group(['as' => 'admin.hoadon.', 'prefix' => 'hoadon'], function() {
    Route::get('/', [Controllers\HoaDonController::class, 'index'])->name('index');
    Route::get('/{id}}', [Controllers\HoaDonController::class, 'show'])->name('show');
});