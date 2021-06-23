<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'SLIDER';

    public $fillable = [
        'ten_slider',
        'key_slider',
        'mo_ta', 
        'trang_thai',
    ];
    public function hinhanh()
    {
        return $this->belongsToMany(HinhAnh::class, 'HINHANH_SLIDER', 'slider_id' ,'hinhanh_id')
                        ->withPivot(['vi_tri', 'tieu_de', 'chu_chuyen_huong', 'mo_ta']);
    }
    
    public function getTrangThaiChuAttribute() 
    {
        return $this->trang_thai === 1 ? 'Đang sử dụng' : 'Đã tắt';
    }
    public function getMauSacTrangThaiAttribute()
    {
        return [
            '0' => 'red',
            '1' => 'blue',
        ][$this->trang_thai];
    }
    public const VALIDATION_RULES = [
        'ten_slider' => 'required|max:100',
        'key_slider' => 'required|max:100',
        'mo_ta' => 'max:255',
        'trang_thai' => 'in:0,1',
    ];
    public const VALIDATION_MESSAGES = [
        'ten_slider.required' => 'Vui lòng nhập tên slider',
        'ten_slider.max' => 'Vui lòng nhập tên slider nhỏ hơn 100 ký tự',
        'key_slider.required' => 'Vui lòng nhập key slider',
        'key_slider.max' => 'Vui lòng nhập key slider nhỏ hơn 100 ký tự',
        'mo_ta.max' => 'Vui lòng nhập mô tả slider nhỏ hơn 255 ký tự', 
        'trang_thai.in' => 'Vui lòng chọn đúng trạng thái', 
    ];
}
