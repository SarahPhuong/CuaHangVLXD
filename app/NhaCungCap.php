<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    protected $table="NhaCungCap";
    public $timestamps = false;
    protected $primaryKey = 'MaNCC';
    public function don_nhap_hang()
    {
        return $this->hasMany('DonNhapHang', 'MaDNH', 'MaDNH');
    }
    public function getLast()
    {
    	return $this->orderBy('MaNCC','desc')->first();
    }
}
