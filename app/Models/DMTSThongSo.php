<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DMTSThongSo extends Model
{
    use HasFactory;
    protected $table = '';
    
    public $fillable = [
        'sanpham_id',
        'danhmuc_thongso_id',
    ];
    public function thongso() 
    {
        return $this->belongsToMany(ThongSo::class);
    }
    public function danhmucthongso() 
    {
        return $this->belongsToMany(DanhMucThongSo::class);
    }
}
