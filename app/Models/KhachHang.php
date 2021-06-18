<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class KhachHang extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'KHACHHANG';
    public $fillable = [
        'ho_ten',
        'email',
        'dien_thoai',
        'dia_chi',
        'matkhau',
        'tai_khoan_ngan_hang',
        'mangxahoi',
        'mangxahoi_id',
        'trang_thai',
    ];
    public static $timkiem = [
        'ho_ten',
        'email',
        'dien_thoai',
        'dia_chi',
        'tai_khoan_ngan_hang',
    ];
    public const VALIDATION_RULES = [
        'ho_ten' => 'required', 
        'dien_thoai' => 'required|unique:KHACHHANG' 
    ];
    public const VALIDATION_MESSAGES = [
        'ho_ten.required' => 'Vui lòng nhập họ tên',
        'dien_thoai.required' => 'Vui lòng nhập số điện thoại',
        'dien_thoai.unique' => 'Số điện thoại này đã được sử dụng', 
    ];
}
