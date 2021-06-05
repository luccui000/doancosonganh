<?php

namespace App\Models;

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
        'hang_san_xuat',
        'thong_tin_khuyen_mai',
        'bao_hanh',
        'gia_nhap',
        'gia_niem_yet',
        'gia_khuyen_mai',
        'trang_thai',

        'danhmuc_thongso_id',
        'hinhanh_id',
        'loaisanpham_id',
    ];
    public function danhmucthongso()
    {
        return $this->belongsToMany(DanhMucThongSo::class, 'DMTS_SANPHAM', 'sanpham_id' ,'danhmuc_thongso_id');
    }
    public function hinhanh()
    {
        return $this->belongsToMany(HinhAnh::class, 'HINHANH_SANPHAM', 'sanpham_id' ,'hinhanh_id');
    }
    public function loaisanpham()
    {
        return $this->hasOne(LoaiSanPham::class, 'id', 'loaisanpham_id');
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
        return url(!isset($this->hinhanh[0]) ? 'storage/undefine.jpeg' : $this->hinhanh[0]->duong_dan_hinh_anh);
    }
}
