<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangDonNhapHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DonNhapHang', function (Blueprint $table) {
            $table->increments('MaDNH');
            $table->integer('MaNCC')->unsigned();
            $table->foreign('MaNCC')->references('MaNCC')->on('NhaCungCap');
            $table->dateTime('NgayNhap');
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
         Schema::drop('DonNhapHang');
    }
}
