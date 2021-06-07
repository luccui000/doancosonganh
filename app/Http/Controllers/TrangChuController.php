<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $sanphams = SanPham::all();
        return view('trangchu.index', compact('sanphams'));
    }
    public function show($id)
    {
        $sanpham = SanPham::findOrFail($id);
        return view('trangchu.show', [
            'sanpham' => $sanpham
        ]);
    }
}
