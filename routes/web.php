<?php

use Illuminate\Support\Facades\Route;
 
Route::group(['as' => 'trangchu.'], function() {
    Route::get('/', [App\Http\Controllers\TrangChuController::class, 'index'])->name('index');
    Route::get('/{id}', [App\Http\Controllers\TrangChuController::class, 'show'])->name('show');
});
