<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangKhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('KhachHang', function (Blueprint $table) {
            $table->increments('MaKH');
            $table->string('TenKH');
            $table->string('TenKHKhongDau');
            $table->string('SoDienThoai');
            $table->string('Email');
            $table->string('DiaChi');
            
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
         Schema::drop('KhachHang');
    }
}
