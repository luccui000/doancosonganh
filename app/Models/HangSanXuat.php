<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HangSanXuat extends Model
{
    use HasFactory;
    protected $table = 'HANGSANXUAT';
    public $fillable = [
        'ten_hang',
        'dia_chi',
        'email',
        'dien_thoai',
        'website', 
        'trang_thai',
    ];
    public const VALIDATION_RULES = [
        'ten_hang' => 'required', 
    ];
    public const VALIDATION_MESSAGES = [
        'ten_hang.required' => 'Vui lòng nhập tên hãng sản xuất'
    ];
}
