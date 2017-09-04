<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangChiTietDNH extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietDNH', function (Blueprint $table) {
            $table->integer('MaDNH')->unsigned();
            $table->foreign('MaDNH')->references('MaDNH')->on('DonNhapHang');
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
         Schema::drop('ChiTietDNH');
    }
}
