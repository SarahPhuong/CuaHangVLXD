<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDon', function (Blueprint $table) {
            $table->increments('MaHD');
            $table->integer('MaKH')->unsigned();
            $table->foreign('MaKH')->references('MaKH')->on('KhachHang');
            $table->dateTime('NgayMua');
            $table->integer('Tongtien');
            $table->integer('DaTra');
            $table->integer('ConLai');
            $table->string('TrangThai');
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
         Schema::drop('HoaDon');
    }
}
