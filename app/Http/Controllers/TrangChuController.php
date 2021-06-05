<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $sanphams = SanPham::all();
        return view('test', compact('sanphams'));
    }
}
