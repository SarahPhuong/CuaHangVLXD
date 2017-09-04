<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDNH extends Model
{
    protected $table="ChiTietDNH";
    protected $primaryKey=null;
    public $incrementing=false;
    public $timestamps = true;
    public function vatlieu()
    {
        return $this->belongsTo('App\VatLieu','MaVL','MaVL');
    }
    public function donnhaphang()
    {
        return $this->belongsTo('App\DonNhapHang', 'MaDNH','MaDNH');
    }
    public static function getChiTiet($maDNH)
    {
       return ChiTietDNH::where('MaDNH','=',$maDNH)->get();
        
    }

}
