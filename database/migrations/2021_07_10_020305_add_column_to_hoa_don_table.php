<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToHoaDonTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('HOADON', function (Blueprint $table) {
            $table->string('district_id');
            $table->string('ward_id'); 
            $table->string('don_vi_van_chuyen');
            $table->double('phi_van_chuyen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoa_don', function (Blueprint $table) {
            $table->dropColumn('district_id');
            $table->dropColumn('ward_id');
            $table->dropColumn('don_vi_van_chuyen');
            $table->dropColumn('phi_van_chuyen');
        });
    }
}
