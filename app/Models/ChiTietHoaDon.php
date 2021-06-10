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
}
