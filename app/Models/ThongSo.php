<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongSo extends Model
{
    use HasFactory;
    protected $table = 'THONGSO';
    public $fillable = [
        'ten_thong_so',
        'gia_tri_thong_so',
    ];
}
