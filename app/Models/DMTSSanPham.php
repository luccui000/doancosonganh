<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DMTSSanPham extends Model
{
    use HasFactory;
    protected $table = 'DMTS_SANPHAM';

    public $fillable = [
        'sanpham_id',
        'danhmuc_thongso_id',
    ];
    public function sanpham() 
    {
        return $this->belongsToMany(SanPham::class);
    }
    public function danhmucthongso() 
    {
        return $this->belongsToMany(DanhMucThongSo::class);
    }
}
