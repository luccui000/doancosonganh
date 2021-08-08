<?php

namespace App\Http\Controllers;

use App\Gateway\GiaoHang\GiaoHangNhanhGateway;
use App\Models\GiaoDich;
use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Models\SanPham;    
use Illuminate\Http\Request;
use Cart;
use Closure;
use Laravel\Ui\Presets\React;

class TrangChuController extends Controller
{ 
    protected $giaohangnhanh;

    public function __construct(GiaoHangNhanhGateway $giaohangnhanh)
    {
        $this->giaohangnhanh = $giaohangnhanh;
    }
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
        if(request()->query('action') == "0") {
            return redirect()->route('trangchu.xemgiohang');
        }
        return redirect()->back();
    }
    public function xoaHangTrongGio(Request $request, $rowId)
    { 
        Cart::remove($rowId);
        return redirect()->back();
    }
    public function xemgiohang()
    { 
        $khachhang = auth()->guard('khachhangs')->user(); 
        $phivanchuyen = $this->giaohangnhanh->phiVanChuyen(2179, 621003);  
        return view('trangchu.giohang', [
            'giohangs' => session()->get('giohang'),
            'phivanchuyen' => $phivanchuyen['total'] ?? 0
        ]);
    }
    public function capnhatGiohang(Request $request, $id)
    {  
        Cart::update($id, $request->input('so_luong')); 
        return redirect()->back()->with('success', 'Product added to cart successfully!')->withInput();
    } 
    public function thanhtoan(Request $request)
    {    
        $khachhang = auth()->guard('khachhangs')->user(); 
         
        if($khachhang) {
            $validateRules = [
                'ho_ten' => 'required',
                'dia_chi' => 'required',
            ];
            $validateMessage = [
                'ho_ten.required' => 'Vui lòng nhập họ tên. ',
                'dia_chi.required' => 'Vui lòng nhập địa chỉ.',
            ];
            if(!$khachhang->dien_thoai) {
                array_merge($validateRules, [
                    'dien_thoai' => 'required|unique:KHACHHANG'
                ]);
                array_merge($validateMessage, [
                    'dien_thoai.required' => 'Vui lòng nhập số điện thoại.',
                    'dien_thoai.unique' => 'Số điện thoại này đã được sử dụng.',
                ]);
            } 
            $request->validate($validateRules, $validateMessage);
            $khachhang->update([
                'ho_ten' => $request->input('ho_ten'),  
                'dia_chi' => $request->input('dia_chi'), 
                'dien_thoai' => $request->input('dien_thoai'), 
            ]);
        } else {
            $request->validate(array_merge(KhachHang::VALIDATION_RULES,['dia_chi' => 'required']), 
                               array_merge(KhachHang::VALIDATION_MESSAGES, ['dia_chi.required' => 'Vui lòng nhập địa chỉ' ]));
            $khachhang = KhachHang::create([
                'ho_ten' => $request->input('ho_ten'),
                'email' => $request->input('email'),
                'dien_thoai' => $request->input('dien_thoai'),
                'dia_chi' => $request->input('dia_chi'),
                'trang_thai' => 1
            ]);
        }  
        session()->put('khachhang_id', $khachhang->id);
        
        $phivanchuyen = $this->giaohangnhanh->phiVanChuyen(2179, 621003); 
        if($request->input('thanhtoan') == 1) { 
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
        } else {
            return redirect()->route('vnpay');
        }
    } 
    public function returnVnpay(Request $request)
    {   
        $khachhang_id = session()->get('khachhang_id');
        if($request->vnp_ResponseCode == "00") {
            \DB::beginTransaction();
            try {
                $hoadon = HoaDon::create([
                    'tong_tien' => str_replace('.', '', Cart::total()),
                    'gia_giam' => 0,
                    'tong_thanh_toan' => str_replace('.', '', Cart::total()),
                    'hinh_thuc_thanh_toan' => 2,
                    'ghi_chu' => $request->input('ghi_chu'),
                    'ma_giao_dich' => '',
                    'trang_thai' => 0,
        
                    'khachhang_id' => $khachhang_id,
                ]);
                foreach(Cart::content() as $sanpham) { 
                    $hoadon->sanpham()->attach($sanpham->id, [
                        'so_luong' => $sanpham->qty,
                        'don_gia' => $sanpham->price,
                        'thanh_tien' => $sanpham->total,
                    ]);
                } 
                GiaoDich::create([
                    'vnp_tong_tien' => $request->input('vnp_Amount'),
                    'vnp_ma_ngan_hang' => $request->input('vnp_BankCode'),
                    'vnp_ma_giao_dich_ngan_hang' => $request->input('vnp_BankTranNo'),
                    'vnp_loai_the' => $request->input('vnp_CardType'),
                    'vnp_thong_tin_dat_hang' => $request->input('vnp_OrderInfo'),
                    'vnp_ma_phan_hoi' => $request->input('vnp_ResponseCode'),
                    'vnp_ma_merchant' => $request->input('vnp_TmnCode'),
                    'vnp_ma_giao_dich_vnpay' => $request->input('vnp_TransactionNo'),
                    'vnp_ma_kiem_tra' => $request->input('vnp_SecureHash'),
                    'noi_dung_chuyen' => " ",

                    'hoadon_id' => $hoadon->id,
                    'khachhang_id' => $khachhang_id,
                ]);
                Cart::destroy();
                \DB::commit(); 
                return redirect()->route('trangchu.index')->with('success' ,'Đã thanh toán đơn hàng');
            } catch(\Exception $exception) {
                \DB::rollBack(); 
                return redirect()->route('/')->with('errors' ,'Lỗi trong quá trình thanh toán đơn hàng');
            }   
        } else {
            return redirect()->route('/')->with('errors' ,'Lỗi trong quá trình thanh toán đơn hàng');
        }
    }
}
