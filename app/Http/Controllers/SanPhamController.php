<?php

namespace App\Http\Controllers;

use App\Models\HangSanXuat;
use App\Models\HinhAnh;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function index() 
    {
        $sanphams = SanPham::with(['loaisanpham', 'hinhanh', 'hangsanxuat'])->get();
        return view('admin.sanpham.index', compact('sanphams'));
    }
    public function create()
    {
        $loaisanphams = LoaiSanPham::all();
        $hangsanxuats = HangSanXuat::all();
        return view('admin.sanpham.create', [
            'loaisanphams' => $loaisanphams,
            'hangsanxuats' => $hangsanxuats
        ]);
    }
    public function store(Request $request)
    {
        $sanpham = SanPham::create([ 
            'ten_sanpham' => $request->input('ten_sanpham'), 
            'ma_sanpham' => " ", 
            'duong_dan_lien_ket' => " ", 
            'hang_san_xuat' => $request->input('hang_san_xuat'),
            'chi_tiet_thong_so' => $request->input('chi_tiet_thong_so'),
            'thong_tin_khuyen_mai' => $request->input('thong_tin_khuyen_mai'),
            'bao_hanh' => $request->input('bao_hanh'),
            'gia_nhap' => str_replace(',', '', $request->input('gia_nhap')) ,
            'gia_niem_yet' =>  str_replace(',', '', $request->input('gia_niem_yet')),
            'gia_khuyen_mai' =>  str_replace(',', '', $request->input('gia_khuyen_mai')),
            'trang_thai' => $request->input('trang_thai'),

            'loaisanpham_id' => $request->input('loaisanpham_id')
        ]);
        if($request->hasFile('hinhanh')) 
        {
            foreach($request->file('hinhanh') as $file)
            {  
                $tenSanPham = tieng_viet_khong_dau($request->input('ten_sanpham'));
                $extension = $file->getClientOriginalExtension(); 
                $fileNameToStore = date('dmy_hms').'_'.$tenSanPham. '_'.rand(1000, 9999).'.'.$extension; 
                $file->storeAs('public', $fileNameToStore );
                $idHinhAnh = HinhAnh::insertGetId([
                    'duong_dan_hinh_anh' => 'storage/' . $fileNameToStore,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $sanpham->hinhanh()->attach($idHinhAnh);
            }
            
        }  
        // SanPham
        return redirect()->route('admin.sanpham.index');
    }
    public function edit($id)
    {
        $sanpham = SanPham::with('hinhanh')->findOrFail($id);
         
        $loaisanphams = LoaiSanPham::all();
        return view('admin.sanpham.edit', [
            'loaisanphams' => $loaisanphams,
            'sanpham' => $sanpham
        ]);
    }
    public function update(Request $request, SanPham $sanpham)
    {
        dd($request->input());
    }
}
