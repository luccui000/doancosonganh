<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KHACHHANG', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten', 100);
            $table->string('email', 50)->nullable();
            $table->string('dien_thoai', 11);
            $table->string('matkhau')->nullable();
            $table->string('dia_chi', 100);
            $table->string('tai_khoan_ngan_hang', 100)->nullable();
            $table->string('mangxahoi')->nullable();
            $table->string('mangxahoi_id')->nullable();
            $table->string('trang_thai')->default(1);
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
        Schema::dropIfExists('KHACHHANG');
    }
}
