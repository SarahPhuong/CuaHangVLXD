<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table="KhachHang";
    protected $primaryKey = 'MaKH';
    public $timestamps = false;
    public function hoadon()
    {
        return $this->hasMany('HoaDon', 'MaHD', 'MaHD');
    }
    public function getLast()
    {
    	return $this->orderBy('MaKH','desc')->first();
    }
}
