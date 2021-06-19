<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HINHANH_SLIDER', function (Blueprint $table) {
            $table->foreignId('hinhanh_id')->constrained('HINHANH', 'id');
            $table->foreignId('slider_id')->constrained('SLIDER', 'id');
            $table->integer('vi_tri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HINHANH_SLIDER');
    }
}
