<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers; 

Route::get('/dangnhap', [Controllers\XacThucController::class, 'dangnhap'])->name('admin.dangnhap');
Route::post('/dangnhap', [Controllers\XacThucController::class, 'xacthuc'])->name('admin.xacthuc');


Route::group(['as' => 'admin.'], function() {
    Route::group(['as' => 'sanpham.', 'prefix' => 'sanpham'], function() {
        Route::get('/', [Controllers\SanPhamController::class, 'index'])->name('index');
        Route::get('/create', [Controllers\SanPhamController::class, 'create'])->name('create');
        Route::post('/', [Controllers\SanPhamController::class, 'store'])->name('store');
        Route::get('/{id}', [Controllers\SanPhamController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [Controllers\SanPhamController::class, 'update'])->name('update');
        Route::delete('/{id}', [Controllers\SanPhamController::class, 'destroy'])->name('destroy');
    });
    Route::group(['as' => 'hangsanxuat.', 'prefix' => 'hangsanxuat'], function () {
        Route::get('/', [Controllers\HangSanXuatController::class, 'index'])->name('index');
        Route::get('/create', [Controllers\HangSanXuatController::class, 'create'])->name('create');
        Route::post('/', [Controllers\HangSanXuatController::class, 'store'])->name('store');
        Route::get('/{id}', [Controllers\HangSanXuatController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [Controllers\HangSanXuatController::class, 'update'])->name('update');
    });
    Route::group(['as' => 'hoadon.', 'prefix' => 'hoadon'], function() {
        Route::get('/', [Controllers\HoaDonController::class, 'index'])->name('index');
        Route::get('/{id}', [Controllers\HoaDonController::class, 'show'])->name('show');
        Route::put('/{id}/update', [Controllers\HoaDonController::class, 'update'])->name('update');
    });
    Route::group(['as' => 'baocao.', 'prefix' => 'baocao'], function() {
        Route::get('/', [Controllers\BieuDoController::class, 'index'])->name('index');
    }); 
    Route::group(['as' => 'giaodich.', 'prefix' => 'giaodich'], function() {
        Route::get('/', [Controllers\GiaoDichController::class, 'index'])->name('index');
    });
    Route::group(['as' => 'khachhang.', 'prefix' => 'khachhang'], function() {
        Route::get('/', [Controllers\KhachHangController::class, 'index'])->name('index');
        Route::get('/getKhachHang', [Controllers\KhachHangController::class, 'getKhachHang'])->name('getKhachHang');
    });
    Route::group(['as' => 'hinhanh.', 'prefix' => 'hinhanh'], function() {
        Route::get('/', [Controllers\HinhAnhController::class, 'index'])->name('index');
    });
    Route::group(['as' => 'slider.', 'prefix' => 'slider'], function() {
        Route::get('/', [Controllers\SliderController::class, 'index'])->name('index');
        Route::get('/create', [Controllers\SliderController::class, 'create'])->name('create');
        Route::post('/store', [Controllers\SliderController::class, 'store'])->name('store'); 
        Route::get('/{id}/edit', [Controllers\SliderController::class, 'edit'])->name('edit');
        Route::post('{id}/addItem', [Controllers\SliderController::class, 'addItemToSlider'])->name('addItem');
        Route::get('/{sliderId}/showItem/{itemId}', [Controllers\SliderController::class, 'showItemFromSlider'])->name('showItem');
        Route::delete('/deleteItem/{id}', [Controllers\SliderController::class, 'deleteItemFromSlider'])->name('deleteItem');
    });
    Route::get('{id}/pdf', [App\Http\Controllers\ExportController::class, 'pdf'])->name('export.pdf');
});