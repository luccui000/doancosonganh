<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHangSanXuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('HANGSANXUAT', function (Blueprint $table) {
            $table->id();
            $table->string('ten_hang');
            $table->string('dia_chi', 100);
            $table->string('email', 50)->nullable();
            $table->string('dien_thoai', 10)->nullable();
            $table->string('website', 50)->nullable(); 
            $table->tinyInteger('trang_thai')->default(1);
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
        Schema::dropIfExists('HANGSANXUAT');
        Schema::table('SANPHAM', function(Blueprint $table) {
            $table->dropConstrainedForeignId('hangsanxuat_id');
        });
    }
}
