<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XacThucController extends Controller
{
    public function dangnhap()
    {
        return view('admin.xacthuc.dangnhap');
    }
    public function xacthuc()
    {
        return redirect()->route('admin.sanpham.index');
    }
}
