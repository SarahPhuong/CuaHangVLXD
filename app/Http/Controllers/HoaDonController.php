<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\HoaDon;
use App\KhachHang;
use App\VatLieu;
use App\ChiTietHD;
use Carbon\Carbon;
class HoaDonController extends Controller
{
    
    public function getDanhSach()
    {
        $hoadon=HoaDon::all();
        $vatlieu=VatLieu::all();
        $chitiet=ChiTietHD::all();

        $tongHD=$hoadon->count('MaHD');
        $tongT=$hoadon->sum('TongTien');
        $tongTra=$hoadon->sum('DaTra');

        return view('hoadon.danhsach',['hoadon'=>$hoadon,'vatlieu'=>$vatlieu,'chitiet'=>$chitiet,'tongHD'=>$tongHD,'tongT'=>$tongT,'tongTra'=>$tongTra]);

    }
    public function postThem(Request $request)
    {
        $khachhang=new KhachHang;
        $khachhang->TenKH=$request->input('TenKH');
        $khachhang->SoDienThoai=$request->input('SoDienThoai');
        $khachhang->DiaChi=$request->input('DiaChi');
        $khachhang->Email=$request->input('Email');
        $khachhang->save();

        $hoadon=new HoaDon;
        $hoadon->MaKH= $khachhang->getLast()->MaKH;
        $hoadon->TongTien=$request->input('TongTien');
        $hoadon->NgayMua=Carbon::now();
        $hoadon->DaTra=$request->input('DaTra');
        $hoadon->ConLai=$hoadon->TongTien-$hoadon->DaTra;
        $hoadon->TrangThai='1';
        $hoadon->save();

        
        $arrMa=explode(",",$request->input('MaVL'));
        $arrSL=explode(",",$request->input('SoLuong'));

        for ($i=0; $i < count($arrMa)-1; $i++) { 
            $cthd= new ChiTietHD;
            $cthd->MaHD=$hoadon->getLast()->MaHD;
            $cthd->MaVL=$arrMa[$i];
            $cthd->SoLuong=$arrSL[$i];
            $cthd->save();

            $ma=$arrMa[$i];
            $sl=$arrSL[$i];

            $vatLieu= VatLieu::find($ma);
            $vatLieu->SoLuong=$vatLieu->SoLuong-$sl;
            $vatLieu->save();
        }

        return redirect('hoadon-danhsach');
    }
     public function getSua($id)
    {
        $hoadon=HoaDon::find($id);
        $chitiet= ChiTietHD::getChiTiet($id);
        return view('hoadon.chitiet',['hoadon'=>$hoadon,'chitiet'=>$chitiet]);
    }
    public function postSua(Request $request,$id)
    {
        $hoadon=HoaDon::find($id);
        $hoadon->DaTra=$hoadon->DaTra+$request->input('TraThem');
        $hoadon->ConLai=$hoadon->TongTien-$hoadon->DaTra;
        $hoadon->save();
        return redirect('hoadon-danhsach');
    }
    public function getXoa($id)
    {
        $hoadon= HoaDon::find($id);
        $hoadon->delete();
        return redirect('hoadon-danhsach');
    }
    public function getIn($id)
    {

        $hoadon=HoaDon::find($id);
        $chitiet= ChiTietHD::getChiTiet($id);
        return view('hoadon.in',['hoadon'=>$hoadon,'chitiet'=>$chitiet]);
    }
}

