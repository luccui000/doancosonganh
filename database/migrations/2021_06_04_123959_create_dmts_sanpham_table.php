<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmtsSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DMTS_SANPHAM', function (Blueprint $table) {
            $table->foreignId('sanpham_id')->constrained('SANPHAM', 'id');
            $table->foreignId('danhmuc_thongso_id')->constrained('DANHMUC_THONGSO', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DMTS_SANPHAM');
    }
}
