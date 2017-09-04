<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\HoaDon;
use App\DonNhapHang;
use App\KhachHang;
use App\VatLieu;
use App\ChiTietHD;
use App\NhaCungCap;

class TongQuanController extends Controller
{
    public function getDanhSach()
    {
    	$hoadon=HoaDon::all();
    	$tonghd=$hoadon->count('MaHD');
		$tongthu=$hoadon->sum('DaTra');
        $tongnoHD=$hoadon->sum('ConLai');

    	$donnhaphang=DonNhapHang::all();
    	$tongdnh=$donnhaphang->count('MaDNH');
    	$tongchi=$donnhaphang->sum('DaTra');
        $tongnoDNH=$donnhaphang->sum('ConLai');

    	$khachhang=KhachHang::all();
    	$tongkh=$khachhang->count('MaKH');
    	
        $ncc=NhaCungCap::all();
        $ncc=$ncc->count('MaNCC');


    	$vatlieu=VatLieu::all();
    	$chitiet=ChiTietHD::all();

        $tongDT=$hoadon->sum('DaTra')-$donnhaphang->sum('DaTra');

    	// $tongSLVL=$vatlieu->where('MaVL','11')->join('ChiTietHD','MaVL','=','MaVL');
    	// $tongSLCT=$chitiet->where('MaVL','11')->join('VatLieu','MaVL','=','MaVL');

    	// $tongTN=$tongSLVL->union($tongSLVL)->get();,'tongTN'=>$tongTN

        return view('tongquan.danhsach',['hoadon'=>$hoadon,'tonghd'=>$tonghd,'tongdnh'=>$tongdnh,'tongkh'=>$tongkh,'tongthu'=>$tongthu,'tongchi'=>$tongchi,'tongnoHD'=>$tongnoHD,'tongnoDNH'=>$tongnoDNH,'tongDT'=>$tongDT,'ncc'=>$ncc]);
        
    }
}
