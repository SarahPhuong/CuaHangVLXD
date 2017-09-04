<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DonNhapHang;
use App\HoaDon;
use App\ChiTietDNH;
use App\ChiTietHD;
use App\VatLieu;

class CongNoController extends Controller
{
    public function getDanhSachNCC()
    {
        $donnhaphang=DonNhapHang::all()->where('ConLai',! 0);
        $vatlieu=VatLieu::all();
        $chitiet=ChiTietDNH::all();

        $tongHD=$donnhaphang->count('MaHD');
        $tongT=$donnhaphang->sum('TongTien');
        $tongTra=$donnhaphang->sum('DaTra');

        return view('congno.danhsachdnh',['donnhaphang'=>$donnhaphang,'vatlieu'=>$vatlieu,'chitiet'=>$chitiet,'tongHD'=>$tongHD,'tongT'=>$tongT,'tongTra'=>$tongTra]);
    }
    public function getDanhSachKH()
    {
        $hoadon=HoaDon::all()->where('ConLai',! 0);
        $vatlieu=VatLieu::all();
        $chitiet=ChiTietHD::all();

        $tongHD=$hoadon->count('MaHD');
        $tongT=$hoadon->sum('TongTien');
        $tongTra=$hoadon->sum('DaTra');

        return view('congno.danhsachhd',['hoadon'=>$hoadon,'vatlieu'=>$vatlieu,'chitiet'=>$chitiet,'tongHD'=>$tongHD,'tongT'=>$tongT,'tongTra'=>$tongTra]);
    }
}
