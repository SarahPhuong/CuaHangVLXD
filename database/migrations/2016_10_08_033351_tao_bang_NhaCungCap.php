<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangNhaCungCap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('NhaCungCap', function (Blueprint $table) {
            $table->increments('MaNCC');
            $table->string('TenNCC');
            $table->string('TenNCCKhongDau');
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
         Schema::drop('NhaCungCap');
    }
}
