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
}
