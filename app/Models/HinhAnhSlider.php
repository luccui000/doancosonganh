<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnhSlider extends Model
{
    use HasFactory;
    protected $table = 'HINHANH_SLIDER';

    public $fillable = [
        'hinhanh_id',
        'slider_id',
        'tieu_de',
        'chu_chuyen_huong',
        'mo_ta',
        'vi_tri',
    ];
    public function slider()
    {
        return $this->belongsToMany(Slider::class);
    }
    public function hinhanh()
    {
        return $this->belongsToMany(HinhAnh::class);
    }
    public const VALIDATION_RULES = [
        'tieu_de' => 'required|max:100',
        'chu_chuyen_huong' => 'required|max:50', 
        'mo_ta' => 'max:255',
    ];
    public const VALIDATION_MESSAGES = [
        'tieu_de.required' => 'Vui lòng nhập tên tiêu đề',
        'tieu_de.max' => 'Vui lòng nhập tên tiêu đề ít hơn 50 ký tự',
        'chu_chuyen_huong.required' => 'Vui lòng nhập chữ chuyển hướng', 
        'chu_chuyen_huong.max' => 'Vui lòng nhập chữ chuyển hướng ít hơn 100 ký tự',  
        'mo_ta.max' => 'Vui lòng nhập mô tả ít hơn 255 ký tự',
    ];
}
