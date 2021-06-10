<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CHITIETHOADON', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sanpham_id')->constrained('SANPHAM', 'id');
            $table->foreignId('hoadon_id')->constrained('HOADON', 'id');

            $table->unsignedInteger('so_luong');
            $table->double('don_gia');
            $table->double('thanh_tien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CHITIETHOADON');
    }
}
