<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HOADON', function (Blueprint $table) {
            $table->id(); 
            $table->double('tong_tien');
            $table->double('gia_giam');
            $table->double('tong_thanh_toan');
            $table->string('hinh_thuc_thanh_toan')->default(1);
            $table->string('ghi_chu')->nullable();
            $table->string('ma_giao_dich')->nullable();
            $table->string('trang_thai')->default(1);

            $table->foreignId('khachhang_id')->constrained('KHACHHANG', 'id');
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
        Schema::dropIfExists('HOADON');
    }
}
