<?php

use Illuminate\Support\Facades\Route;
 
Route::get('dangky', [App\Http\Controllers\XacThucController::class, 'dangkyKhach'])->name('dangkykhach');
Route::post('dangky', [App\Http\Controllers\XacThucController::class, 'formDangky'])->name('formdangky');

Route::get('dangnhap', [App\Http\Controllers\XacThucController::class, 'dangnhapKhach'])->name('dangnhapkhach');
Route::post('dangnhap', [App\Http\Controllers\XacThucController::class, 'xacthucKhach'])->name('xacthuckhach');

Route::get('/vnpay', [App\Http\Controllers\ThanhToanController::class, 'vnpay'])->name('vnpay');
Route::get('/returnVnpay', [App\Http\Controllers\TrangChuController::class, 'returnVnpay'])->name('returnVnpay');

Route::group(['as' => 'trangchu.'], function() {
    Route::get('/', [App\Http\Controllers\TrangChuController::class, 'index'])->name('index');
    Route::get('/xemgiohang', [App\Http\Controllers\TrangChuController::class, 'xemgiohang'])->name('xemgiohang');
    Route::get('/{id}', [App\Http\Controllers\TrangChuController::class, 'show'])->name('show');
    Route::post('{id}/themvaogiohang', [App\Http\Controllers\TrangChuController::class, 'themvaogiohang'])->name('themvaogiohang');
    Route::group(['prefix' => 'giohang'], function() {
        Route::post('{id}/capnhat', [App\Http\Controllers\TrangChuController::class, 'capnhatGiohang'])->name('capnhatsoluong');
        Route::post('{id}/xoa', [App\Http\Controllers\TrangChuController::class, 'xoaHangTrongGio'])->name('xoahangtronggio');
        Route::post('/thanhtoan', [App\Http\Controllers\TrangChuController::class, 'thanhtoan'])->name('thanhtoan'); 
    });
});
