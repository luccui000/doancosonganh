<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Models\SanPham;    
use Illuminate\Http\Request;
use Cart; 

class TrangChuController extends Controller
{
    public function index()
    {
        $sanphams = SanPham::all();
        return view('trangchu.index', compact('sanphams'));
    }
    public function show($id)
    {
        $sanpham = SanPham::where('duong_dan_lien_ket', $id)->first(); 
        return view('trangchu.show', [
            'sanpham' => $sanpham
        ]);
    }
    public function themvaogiohang($id)
    {
        $sanpham = SanPham::findOrFail($id);  
        Cart::add($id, $sanpham->ten_sanpham, 1, $sanpham->gia_khuyen_mai, [
            'hinh_anh_san_pham' => $sanpham->hinh_anh_san_pham,
            'duong_dan_lien_ket' => $sanpham->duong_dan_lien_ket,
        ])->associate('App\Models\SanPham'); 
        session()->flash('thanhcong', 'Đã thêm vào giỏ hàng');
        return redirect()->back();
    }
    public function xoaHangTrongGio(Request $request, $rowId)
    { 
        Cart::remove($rowId);
        return redirect()->back();
    }
    public function xemgiohang()
    { 
        return view('trangchu.giohang', [
            'giohangs' => session()->get('giohang')
        ]);
    }
    public function capnhatGiohang(Request $request, $id)
    {  
        Cart::update($id, $request->input('so_luong')); 
        return redirect()->back()->with('success', 'Product added to cart successfully!')->withInput();
    }
    public function them(Request $request)
    {   
        $request->validate(KhachHang::VALIDATION_RULES, KhachHang::VALIDATION_MESSAGES);
        $khachhang = KhachHang::create([
            'ho_ten' => $request->input('ho_ten'),
            'email' => $request->input('email'),
            'dien_thoai' => $request->input('dien_thoai'),
            'dia_chi' => $request->input('dia_chi'),
            'trang_thai' => 1
        ]); 
        $idsSanPhamDaMua = array_column(Cart::content()->toArray(), 'id');
        $soluongSanPhamDaMua = array_column(Cart::content()->toArray(), 'qty');
                  
        $hoadon = HoaDon::create([
            'tong_tien' => str_replace('.', '', Cart::total()),
            'gia_giam' => 0,
            'tong_thanh_toan' => str_replace('.', '', Cart::total()),
            'hinh_thuc_thanh_toan' => 1,
            'ghi_chu' => $request->input('ghi_chu'),
            'ma_giao_dich' => '',
            'trang_thai' => 0,

            'khachhang_id' => $khachhang->id,
        ]);
        foreach(Cart::content() as $sanpham) { 
            $hoadon->sanpham()->attach($sanpham->id, [
                'so_luong' => $sanpham->qty,
                'don_gia' => $sanpham->price,
                'thanh_tien' => $sanpham->total,
            ]);
        } 
        Cart::destroy();
        return redirect()->route('trangchu.index');
    }
}
