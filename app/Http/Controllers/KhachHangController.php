<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\KhachHang;
use Illuminate\Http\Request;  
use Symfony\Component\HttpFoundation\Response;
use Datatables;

class KhachHangController extends Controller
{
    public function index()
    { 
        return view('admin.khachhang.index', [
            'khachhangs' => KhachHang::latest()->paginate(5)
        ]);
    }
    public function getKhachHang()
    {
        if (request()->ajax()) {
            $query = KhachHang::select('id', 'ho_ten', 'email', 'dien_thoai', 'created_at', 'mangxahoi');
            return querytables::of($data)->make(true); 
        }
        
    }
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
