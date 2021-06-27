<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    use HasFactory;
    protected $table = 'CHITIETHOADON';
    public $fillable = [
        'sanpham_id',
        'hoadon_id',

        'so_luong',
        'don_gia',
        'thanh_tien'
    ];
    
    public function sanpham()
    {
        return $this->belongsToMany(SanPham::class);
    }
    public function hoadon()
    {
        return $this->belongsToMany(HoaDon::class);
    }
    public function getDonGiaVndAttribute()
    {
        return money_format('%.0n', $this->don_gia);
    }
    public function getThanhTienVndAttribute()
    {
        return money_format('%.0n', $this->thanh_tien);
    }
    
    
}
