<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangChiTietHD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHD', function (Blueprint $table) {
            $table->increments('STT');
            $table->integer('MaHD')->unsigned();
            $table->foreign('MaHD')->references('MaHD')->on('HoaDon');
            $table->integer('MaVL')->unsigned();
            $table->foreign('MaVL')->references('MaVL')->on('VatLieu');
            $table->integer('SoLuong');
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
         Schema::drop('ChiTietHD');
    }
}
