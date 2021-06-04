<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucThongSo extends Model
{
    use HasFactory;
    protected $table = 'DANHMUC_THONGSO';

    public $fillable = [
        'ten_danh_muc_thong_so'
    ];
}
