<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SANPHAM', function (Blueprint $table) {
            $table->id();
            $table->string('ma_sanpham', 15);
            $table->string('ten_sanpham');
            $table->string('duong_dan_lien_ket');
            $table->string('hang_san_xuat', 100);
            $table->text('thong_tin_khuyen_mai');
            $table->string('bao_hanh');
            $table->double('gia_nhap');
            $table->double('gia_niem_yet');
            $table->double('gia_khuyen_mai'); 

            $table->foreignId('danhmuc_thongso_id')->constrained('DANHMUC_THONGSO', 'id');
            $table->foreignId('hinhanh_id')->constrained('HINHANH', 'id');
            $table->foreignId('loaisanpham_id')->constrained('LOAISANPHAM', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SANPHAM');
    }
}
