<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HINHANH_SANPHAM', function (Blueprint $table) {
            $table->foreignId('sanpham_id')->constrained('SANPHAM', 'id');
            $table->foreignId('hinhanh_id')->constrained('HINHANH', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HINHANH_SANPHAM');
    }
}
