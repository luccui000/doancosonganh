<?php

use Illuminate\Support\Facades\Route;
 
Route::group(['as' => 'trangchu.'], function() {
    Route::get('/', [App\Http\Controllers\TrangChuController::class, 'index'])->name('index');
    Route::get('/xemgiohang', [App\Http\Controllers\TrangChuController::class, 'xemgiohang'])->name('xemgiohang');
    Route::get('/{id}', [App\Http\Controllers\TrangChuController::class, 'show'])->name('show');
    Route::post('{id}/themvaogiohang', [App\Http\Controllers\TrangChuController::class, 'themvaogiohang'])->name('themvaogiohang');
});
