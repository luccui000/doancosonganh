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
                        ->withPivot(['vi_tri']);
    }
}
