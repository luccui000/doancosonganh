<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function dangkyKhach()
    {
        return view('trangchu.dangky');
    }
    public function formDangky(Request $request)
    {
        $request->validate(array_merge(KhachHang::VALIDATION_RULES, [
            'email' => 'required|email:rfc,dns',
            'mat_khau' => 'required|min:6|max:100',
            'xac_nhan_mat_khau' => 'required|same:mat_khau',
        ]), array_merge(KhachHang::VALIDATION_MESSAGES, [
            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Email không hợp lệ',
            'mat_khau.required' => 'Vui lòng nhập mật khẩu',
            'mat_khau.min' => 'Vui lòng nhập mật khẩu lớn hơn 6 ký tự',
            'mat_khau.max' => 'Vui lòng nhập mật khẩu nhỏ hơn 100 ký tự',
            'xac_nhan_mat_khau.required' => 'Vui lòng nhập lại mật khẩu ',
            'xac_nhan_mat_khau.same' => 'Mật khẩu không trùng nhau'
        ]));
        KhachHang::create([
            'ho_ten' => $request->input('ho_ten'),
            'email' => $request->input('email'),
            'dien_thoai' => $request->input('dien_thoai'),
            'dia_chi' => $request->input('dia_chi'),
            'mat_khau' => $request->input('mat_khau'),
            'trang_thai' => 1
        ]);
        return redirect()->route('dangnhapkhach');
    }
    public function dangnhapKhach()
    {
        return view('trangchu.dangnhap');
    }
    public function xacthucKhach(Request $request)
    {
        $request->validate(['email' => 'required|email:rfc,dns', 'mat_khau' => 'required'],
                           [
                                'email.required' => 'Vui lòng nhập địa chỉ email',
                                'email.email' => 'Email không hợp lệ',
                                'mat_khau.required' => 'Vui lòng nhập mật khẩu',
                           ]);
        $khachhang = KhachHang::where('email', $request->input('email'))->first();
        if(!$khachhang) return redirect()->route('dangnhapkhach')->withErrors('email', 'Email chưa đăng ký');
        
        if (Hash::check($request->input('mat_khau'), $khachhang->matkhau)) {     
            auth()->guard('khachhangs')->login($khachhang);  
            return redirect()->route('trangchu.index');
        } else {
            return redirect()->route('dangnhapkhach')->withErrors('mat_khau', 'Mật khẩu không đúng. ');
        }
    }

}
