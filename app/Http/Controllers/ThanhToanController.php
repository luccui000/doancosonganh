<?php

namespace App\Http\Controllers;

use Cart; 

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ThanhToanController extends Controller
{  
    public function thanhtoan(Request $request)
    {
        $hinhThucThanhToan = $request->input('hinh_thuc_thanh_toan'); 
        abort_if(!in_array($hinhThucThanhToan, [0, 1]), Response::HTTP_NOT_ACCEPTABLE);

        session()->put('hinh_thuc_thanh_toan', $hinhThucThanhToan);
    
        $khachhang = auth()->guard('khachhangs')->user(); 
        
        if(!$khachhang) {
            $khachhang = $this->khachvanglai($request);
        } 

        session()->put('khachhang_id', $khachhang->id);
        
        // $phivanchuyen = $this->giaohangnhanh->phiVanChuyen(2179, 621003);  

        \DB::transaction(function () use (
            $request, 
            $hinhThucThanhToan,
            $khachhang ) {
            try {
                $phivanchuyen = 123000; 
                if($hinhThucThanhToan === "0") {
                    $hoadon = HoaDon::create([
                        'tong_tien' => str_replace('.', '', Cart::total()),
                        'gia_giam' => 0,
                        'tong_thanh_toan' => +str_replace('.', '', Cart::total()) + $phivanchuyen['total'],
                        'hinh_thuc_thanh_toan' => 1,
                        'ghi_chu' => $request->input('ghi_chu'),
                        'ma_giao_dich' => '',
                        'trang_thai' => 0,
                        'district_id' => $khachhang->district_id,
                        'ward_id' => $khachhang->ward_id,
            
                        'khachhang_id' => $khachhang->id,
                    ]);
                    foreach(Cart::content() as $sanpham) { 
                        $hoadon->sanpham()->attach($sanpham->id, [
                            'so_luong' => $sanpham->qty,
                            'don_gia' => $sanpham->price,
                            'thanh_tien' => $sanpham->total,
                        ]);
                        $sp = SanPham::where('id', $sanpham->id)->first();
                        $soLuongTonKho = $sp->so_luong_ton_kho;
                        $sp->update(['so_luong_ton_kho' => $soLuongTonKho - $sanpham->qty]);
                    } 
                    Cart::destroy();
                    return redirect()->route('trangchu.index');
                }
            } catch(\Exception $err) {
                \DB::rollback();
            }
        }); 
    } 
    public function khachvanglai(Request $request)
    {
        $request->validate(
            array_merge(KhachHang::VALIDATION_RULES,['dia_chi' => 'required']), 
            array_merge(KhachHang::VALIDATION_MESSAGES, ['dia_chi.required' => 'Vui lòng nhập địa chỉ' ])
        );
        $khachhang = KhachHang::create([
            'ho_ten' => $request->input('ho_ten'),
            'email' => $request->input('email'),
            'dien_thoai' => $request->input('dien_thoai'),
            'dia_chi' => $request->input('dia_chi'),
            'trang_thai' => 1
        ]);    
        return $khachhang;
    }
}
