<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangVatLieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VatLieu', function (Blueprint $table) {
            $table->increments('MaVL');
            $table->integer('MaLoai')->unsigned();
            $table->foreign('MaLoai')->references('MaLoai')->on('LoaiVL');
            $table->string('TenVL');
            $table->string('TenVLKhongDau');
            $table->integer('GiaGoc');
            $table->integer('GiaBan');
            $table->integer('SoLuong');
            $table->string('DonViTinh');
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
         Schema::drop('VatLieu');
    }
}
