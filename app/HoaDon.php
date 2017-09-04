<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table="HoaDon";
    protected $primaryKey = 'MaHD';
    public $timestamps = false;
   	public function khachhang()
	{
	    return $this->belongsTo('App\KhachHang', 'MaKH','MaKH');
	}
	public function getLast()
    {
    	return $this->orderBy('MaHD','desc')->first();
    }
}
