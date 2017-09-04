<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonNhapHang extends Model
{
    protected $table="DonNhapHang";
    public $timestamps = false;
    protected $primaryKey = 'MaDNH'; 
    public function nhaCungCap()
    {
    	return $this->belongsTo('App\NhaCungCap','MaNCC','MaNCC');
    }
    public function chitiet()
    {
        return $this->belongsTo('App\ChiTietDNH','MaDNH','MaDNH');
    }
    public function getLast()
    {
    	return $this->orderBy('MaDNH','desc')->first();
    }
    
}
