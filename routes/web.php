<?php

use Illuminate\Support\Facades\Route;
 
Route::group(['as' => 'trangchu.'], function() {
    Route::get('/', [App\Http\Controllers\TrangChuController::class, 'index'])->name('index');
    Route::get('/xemgiohang', [App\Http\Controllers\TrangChuController::class, 'xemgiohang'])->name('xemgiohang');
    Route::get('/{id}', [App\Http\Controllers\TrangChuController::class, 'show'])->name('show');
    Route::post('{id}/themvaogiohang', [App\Http\Controllers\TrangChuController::class, 'themvaogiohang'])->name('themvaogiohang');
    Route::group(['prefix' => 'giohang'], function() {
        Route::post('{id}/capnhat', [App\Http\Controllers\TrangChuController::class, 'capnhatGiohang'])->name('capnhatsoluong');
        Route::post('{id}/xoa', [App\Http\Controllers\TrangChuController::class, 'xoaHangTrongGio'])->name('xoahangtronggio');
        Route::post('them', [App\Http\Controllers\TrangChuController::class, 'them'])->name('them');
    });
});
