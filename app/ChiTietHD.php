<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHD extends Model
{
    protected $table="ChiTietHD";
    protected $primaryKey=null;
    public $incrementing=false;
    public $timestamps = true;
    public function vatlieu()
    {
    	return $this->belongsTo('App\VatLieu','MaVL','MaVL');
    }
    public function hoadon()
    {
        return $this->belongsTo('App\HoaDon', 'MaHD','MaHD');
    }
    public static function getChiTiet($maHD)
    {
       return ChiTietHD::where('MaHD','=',$maHD)->get();
        
    }
}
