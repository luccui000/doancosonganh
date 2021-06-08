<?php

namespace App\Models;

use App\MyApp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'SANPHAM';
    public $fillable = [
        'ma_sanpham',
        'ten_sanpham',
        'duong_dan_lien_ket', 
        'thong_tin_khuyen_mai',
        'chi_tiet_thong_so',
        'bao_hanh',
        'gia_nhap',
        'gia_niem_yet',
        'gia_khuyen_mai',
        'trang_thai',
        'so_luong_ton_kho',

        'hangsanxuat_id',
        'loaisanpham_id',
    ]; 
    public function hinhanh()
    {
        return $this->belongsToMany(HinhAnh::class, 'HINHANH_SANPHAM', 'sanpham_id' ,'hinhanh_id');
    }
    public function loaisanpham()
    {
        return $this->hasOne(LoaiSanPham::class, 'id', 'loaisanpham_id');
    }
    public function hangsanxuat()
    {
        return $this->hasOne(HangSanXuat::class, 'id', 'hangsanxuat_id');
    }
    public function getGiaNhapVndAttribute()
    {
        return money_format('%.0n', $this->gia_nhap);
    }
    public function getGiaNiemYetVndAttribute()
    {
        return money_format('%.0n', $this->gia_niem_yet);
    }
    public function getGiaKhuyenMaiVndAttribute()
    {
        return money_format('%.0n', $this->gia_khuyen_mai);
    }
    public function getHinhAnhSanPhamAttribute()
    {  
        return url(!isset($this->hinhanh[0]) ? MyApp::UNDEFINE_IMAGE : $this->hinhanh[0]->duong_dan_hinh_anh);
    }
    public function setMaSanphamAttribute($value)
    { 
        $MaDanhMuc = MyApp::MA_LOAI_SAN_PHAM;
        $requestLoaiSanPham = request()->input('loaisanpham_id'); 
        $prefix = $MaDanhMuc[$requestLoaiSanPham  - 1];
        $latestId = $this->latest()->first()->id;
        $this->attributes['ma_sanpham'] = $prefix . str_pad($latestId, 4, '0', STR_PAD_LEFT);
    }
    public function setDuongDanLienKetAttribute($value)
    {
        $this->attributes['duong_dan_lien_ket'] = tieng_viet_khong_dau(request()->input('ten_sanpham')). '_id' . rand(1000, 9999);
    }
    public const VALIDATION_RULES = [ 
        'ten_sanpham' => 'required|max:255',  
        'chi_tiet_thong_so' => 'required',
        'bao_hanh' => [
            'required',
            'in_array:'. '3,6,9,12,24,36,0'
        ],
        'gia_nhap' => 'required|numeric',
        'gia_niem_yet' => 'required|numeric',  
        'so_luong_ton_kho' => 'required|numeric',
    ];
    public const VALIDATION_MESSAGES = [
        'ten_sanpham.required' => 'Vui lòng nhập tên sản phẩm',
        'chi_tiet_thong_so.required' => 'Vui lòng nhập chi tiết thông số',
        'bao_hanh.required' => 'Vui lòng chọn thông tin bảo hành',
        'bao_hanh.in' => 'Vui lòng chọn các trường hiển thị',
        'gia_nhap.required' => 'Vui lòng nhập giá nhập sản phẩm',
        'gia_nhap.numeric' => 'Vui lòng nhập hợp lệ giá nhập sản phẩm',
        'gia_niem_yet.required' => 'Vui lòng nhập giá niêm yết của sản phẩm', 
        'gia_niem_yet.numeric' => 'Vui lòng nhập hợp lệ giá niêm yết sản phẩm',
        'so_luong_ton_kho.numeric' => 'Số lượng tồn phải là một số > 0',
    ];
}
