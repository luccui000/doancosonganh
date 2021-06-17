<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = 'HOADON';

    public $fillable = [
        'tong_tien',
        'gia_giam',
        'tong_thanh_toan',
        'hinh_thuc_thanh_toan',
        'ghi_chu',
        'ma_giao_dich',
        'trang_thai',

        'khachhang_id',
    ];
    public function sanpham()
    {
        return $this->belongsToMany(SanPham::class, 'CHITIETHOADON','hoadon_id', 'sanpham_id')
                ->withPivot(['so_luong', 'don_gia', 'thanh_tien']);
    }
    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class);
    } 
    public function getTongThanhToanVndAttribute()
    {
        return money_format('%.0n', $this->tong_thanh_toan);
    }
    public function getTongTienVndAttribute()
    {
        return money_format('%.0n', $this->tong_tien);
    }
}
