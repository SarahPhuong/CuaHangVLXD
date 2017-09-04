<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiVL extends Model
{
    protected $table="LoaiVL";
    protected $primaryKey = 'MaLoai';
    public $timestamps = false;
    public function vatlieu()
    {
        return $this->hasMany('VatLieu', 'MaLoai','MaLoai');
    }
}

