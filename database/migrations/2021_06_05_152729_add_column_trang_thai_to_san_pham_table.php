<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTrangThaiToSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('SANPHAM', function (Blueprint $table) {
            $table->tinyInteger('trang_thai')->default(0);
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
            $table->dropColumn('trang_thai');
        });
    }
}
