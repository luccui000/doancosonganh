<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\TrangChuController::class, 'index'])->name('trangchu');
