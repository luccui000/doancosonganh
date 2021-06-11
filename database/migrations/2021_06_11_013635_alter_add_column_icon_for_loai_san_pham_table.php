<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddColumnIconForLoaiSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('LOAISANPHAM', function(Blueprint $table) {
            $table->string('duong_san_lien_ket')->nullable();
            $table->string('icon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('LOAISANPHAM', function(Blueprint $table) {
            $table->dropColumn('duong_san_lien_ket');
            $table->dropColumn('icon');
        });
    }
}
