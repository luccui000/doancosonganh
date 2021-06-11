<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaoDichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GIAODICH', function (Blueprint $table) {
            $table->id();
            $table->double('vnp_tong_tien');
            $table->string('vnp_ma_ngan_hang');
            $table->string('vnp_ma_giao_dich_ngan_hang');
            $table->string('vnp_loai_the');
            $table->string('vnp_thong_tin_dat_hang');
            $table->string('vnp_ma_phan_hoi');
            $table->string('vnp_ma_merchant');
            $table->string('vnp_ma_giao_dich_vnpay');
            $table->string('vnp_ma_kiem_tra'); 
            $table->string('noi_dung_chuyen')->nullable();

            $table->foreignId('hoadon_id')->constrained('HOADON', 'id');
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
        Schema::dropIfExists('GIAODICH');
    }
}
