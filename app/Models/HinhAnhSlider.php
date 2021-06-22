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
}
