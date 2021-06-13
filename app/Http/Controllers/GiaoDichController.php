<?php

namespace App\Http\Controllers;

use App\Models\GiaoDich;
use Illuminate\Http\Request;

class GiaoDichController extends Controller
{
    public function index()
    {
        $giaodichs = GiaoDich::with(['khachhang', 'hoadon'])->get();
        return view('admin.giaodich.index', [
            'giaodichs' => $giaodichs
        ]);
    }
}
