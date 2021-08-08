<?php

namespace App\Http\Controllers;

use App\MyApp;
use App\Models\HinhAnh;
use App\Models\SanPham;
use App\Models\HangSanXuat;
use App\Models\LoaiSanPham;
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
        $giaNiemYet = $this->setPriceWhenNull($request->input('gia_niem_yet'), $request->input('gia_nhap'));
        $giaKhuyenMai = $this->setPriceWhenNull($request->input('gia_khuyen_mai'), $giaNiemYet);

        $request->validate(SanPham::VALIDATION_RULES, SanPham::VALIDATION_MESSAGES);
    
        // Tự động thêm đường dẫn liên kết sản phẩm
        $duongDanLienKet = tieng_viet_khong_dau($request->input('ten_sanpham')). '_id' . rand(1000, 9999);
        // Tự động thêm mã cho sản phẩm  
        $prefix = MyApp::MA_LOAI_SAN_PHAM[request()->input('loaisanpham_id')  - 1];
        $latestId = SanPham::latest()->first()->id;
        $maSanPham = $prefix . str_pad($latestId, 4, '0', STR_PAD_LEFT);
        
        $sanpham = SanPham::create([ 
            'ten_sanpham' => $request->input('ten_sanpham'), 
            'ma_sanpham' => $maSanPham, 
            'duong_dan_lien_ket' => $duongDanLienKet,  
            'chi_tiet_thong_so' => $request->input('chi_tiet_thong_so'),
            'thong_tin_khuyen_mai' => $request->input('thong_tin_khuyen_mai'),
            'bao_hanh' => $request->input('bao_hanh'),
            'gia_nhap' => str_replace(',', '', $request->input('gia_nhap')) ,
            'gia_niem_yet' =>  str_replace(',', '', $giaNiemYet),
            'gia_khuyen_mai' =>  str_replace(',', '', $giaKhuyenMai),
            'trang_thai' => $request->input('trang_thai'),

            'hangsanxuat_id' => $request->input('hangsanxuat_id'),
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
        $hangsanxuats = HangSanXuat::all();

        return view('admin.sanpham.edit', [
            'loaisanphams' => $loaisanphams,
            'sanpham' => $sanpham,
            'hangsanxuats' => $hangsanxuats
        ]);
    }
    public function update(Request $request, $id)
    { 
        // dd($request->input());
        $giaNiemYet = $this->setPriceWhenNull($request->input('gia_niem_yet'), $request->input('gia_nhap'));
        $giaKhuyenMai = $this->setPriceWhenNull($request->input('gia_khuyen_mai'), $giaNiemYet);

        // $request->validate(SanPham::VALIDATION_RULES, SanPham::VALIDATION_MESSAGES);
        
        $sanpham = SanPham::findOrFail($id);
        $sanpham->update([
            'ten_sanpham' => $request->input('ten_sanpham'),  
            'duong_dan_lien_ket' => $request->input('duong_dan_lien_ket'),  
            'chi_tiet_thong_so' => $request->input('chi_tiet_thong_so'),
            'thong_tin_khuyen_mai' => $request->input('thong_tin_khuyen_mai'),
            'bao_hanh' => $request->input('bao_hanh'),
            'gia_nhap' => str_replace(',', '', $request->input('gia_nhap')) ,
            'gia_niem_yet' =>  str_replace(',', '', $giaNiemYet),
            'gia_khuyen_mai' =>  str_replace(',', '', $giaKhuyenMai),
            'trang_thai' => $request->input('trang_thai'),
    
            'hangsanxuat_id' => $request->input('hangsanxuat_id'),
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
                $hinhanh = HinhAnh::create([
                    'duong_dan_hinh_anh' => 'storage/' . $fileNameToStore,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $sanpham->hinhanh()->attach($hinhanh->id);
            } 
        }  
        // SanPham
        return redirect()->route('admin.sanpham.index');
    }
    public function getProductByCategory($category)
    {
        $product = SanPham::where('loaisanpham_id', $category)
                            ->select('id', 'ma_sanpham', 'ten_sanpham', 'duong_dan_lien_ket', 'hangsanxuat_id')
                            ->get();
        return response()->json([
            'sanpham' => $product
        ]);
    }
    public function getProductBySuplier($suplierId)
    {
        $product = SanPham::where('hangsanxuat_id', $suplierId)
                            ->select('id', 'ten_sanpham', 'duong_dan_lien_ket')
                            ->get();
        return response()->json([
            'sanpham' => $product
        ]);
    }
    public function destroy($id)
    {    
        SanPham::destroy($id);
        return redirect()->route('admin.sanpham.index');
    }
    public function setPriceWhenNull($priceNull, $priceNotNull)
    {
        return $priceNull === '0' ? $priceNotNull : $priceNull;
    }
}
