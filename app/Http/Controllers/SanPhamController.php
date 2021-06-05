<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function index() 
    {
        $sanphams = SanPham::with(['loaisanpham', 'danhmucthongso', 'hinhanh'])->get();
        return view('admin.index', compact('sanphams'));
    }
}
