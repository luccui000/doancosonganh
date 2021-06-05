<?php

namespace Database\Factories;

use App\Models\LoaiSanPham;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoaiSanPhamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoaiSanPham::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ten_loai_sanpham' => 'Máy tính - Máy chủ'
        ];
    }
}
