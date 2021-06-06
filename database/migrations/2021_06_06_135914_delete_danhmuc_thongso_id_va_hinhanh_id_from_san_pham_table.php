<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteDanhmucThongsoIdVaHinhanhIdFromSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('SANPHAM', function (Blueprint $table) {
            $table->dropConstrainedForeignId('hinhanh_id');
            $table->dropConstrainedForeignId('danhmuc_thongso_id');  
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('SANPHAM', function (Blueprint $table) {
            $table->foreignId('danhmuc_thongso_id')->constrained('DANHMUC_THONGSO', 'id');
            $table->foreignId('hinhanh_id')->constrained('HINHANH', 'id');
        });
    }
}
