<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnhSanPham extends Model
{
    use HasFactory;
    protected $table = 'HINHANH_SANPHAM';

    public $fillable = [
        'sanpham_id',
        'hinhanh_id'
    ];
    public function hinhanh()
    {
        return $this->belongsToMany(HinhAnh::class);
    }
    public function sanpham() 
    {
        return $this->belongsToMany(SanPham::class);
    }
}
