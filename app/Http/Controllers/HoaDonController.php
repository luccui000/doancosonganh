<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function index()
    {
        $hoadons = HoaDon::with(['sanpham', 'khachhang'])->get();
        return view('admin.hoadon.index', [
            'hoadons' => $hoadons
        ]);
    }
    public function show($id)
    {
        return view('admin.hoadon.show', [
            'hoadon' => HoaDon::findOrFail($id)
        ]);
    }
}
