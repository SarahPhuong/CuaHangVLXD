<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VatLieu extends Model
{
    protected $table="VatLieu";
    public $timestamps = false;
    protected $primaryKey = 'MaVL';
   	public function loai_vl()
	{
	    return $this->belongsTo('App\LoaiVL','MaLoai','MaLoai');
	}
	public function chitiet()
    {
        return $this->hasMany('App\ChiTietHD', 'MaVL','MaVL');
    }
}
