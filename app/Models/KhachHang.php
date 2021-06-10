<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = 'KHACHHANG';
    public $fillable = [
        'ho_ten',
        'email',
        'dien_thoai',
        'dia_chi',
        'tai_khoan_ngan_hang',
        'mangxahoi',
        'mangxahoi_id',
        'trang_thai',
    ];
    public const VALIDATION_RULES = [
        'ho_ten' => 'required', 
        'dien_thoai' => 'required|unique:KHACHHANG',
        'dia_chi' => 'required',  
    ];
    public const VALIDATION_MESSAGES = [
        'ho_ten.required' => 'Vui lòng nhập họ tên',
        'dien_thoai.required' => 'Vui lòng nhập số điện thoại',
        'dien_thoai.unique' => 'Số điện thoại này đã được sử dụng',
        'dia_chi.required' => 'Vui lòng nhập địa chỉ',
    ];
}
