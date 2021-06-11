<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaoDich extends Model
{
    use HasFactory;
    protected $table = 'GIAODICH';

    public $fillable = [
        'vnp_tong_tien',
        'vnp_ma_ngan_hang',
        'vnp_ma_giao_dich_ngan_hang',
        'vnp_loai_the',
        'vnp_thong_tin_dat_hang',
        'vnp_ma_phan_hoi',
        'vnp_ma_merchant',
        'vnp_ma_giao_dich_vnpay',
        'vnp_ma_kiem_tra',
        'noi_dung_chuyen',

        'hoadon_id',
        'khachhang_id',
    ];
    public function hoadon()
    {
        return $this->belongsTo(HoaDon::class, 'hoadon_id', 'id');
    }
    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'khachhang_id', 'id');
    }
}
