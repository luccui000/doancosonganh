<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;  
use Symfony\Component\HttpFoundation\Response;

class KhachHangController extends Controller
{
    public function taikhoan()
    {
        return view('trangchu.khachhang.taikhoan' );
    }
    public function donhang()
    {
        $khachhang = auth()->guard('khachhangs')->user();
        abort_if(!$khachhang, Response::HTTP_NOT_ACCEPTABLE);
        $hoadons = HoaDon::where('khachhang_id', $khachhang->id)->with('sanpham')->paginate(2); 
        return view('trangchu.khachhang.hoadon', [
            'hoadons' => $hoadons
        ]);
    }
}
