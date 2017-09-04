<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\KhachHang;
use App\HoaDon;
use App\VatLieu;
use App\ChiTietHD;
use Carbon\Carbon;

class KhachHangController extends Controller
{
    public function getDanhSach()
    {
        $khachhang=KhachHang::all();
        $tongKH=$khachhang->count('MaKH');
        return view('khachhang.danhsach',['khachhang'=>$khachhang,'tongKH'=>$tongKH]);
    }
    public function getThem($id)
    {
        $khachhang=KhachHang::find($id);
        $vatlieu=VatLieu::all();
        $chitiet=ChiTietHD::all();
        return view('khachhang.themdh',['khachhang'=>$khachhang,'vatlieu'=>$vatlieu,'chitiet'=>$chitiet]);

    }
    public function postThem(Request $request,$id)
    {
        $khachhang=KhachHang::find($id);
        
        $hoadon= new HoaDon;
        $hoadon->MaKH=$khachhang->MaKH;
        $hoadon->NgayMua=Carbon::now();
        $hoadon->TongTien=$request->input('TongTien');
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
        $khachhang=KhachHang::find($id);
        return view('khachhang.sua',['khachhang'=>$khachhang]);
    }
    public function postSua(Request $request,$id)
    {
        $khachhang=KhachHang::find($id);
        $khachhang->TenKH=$request->input('TenKH');
        $khachhang->SoDienThoai=$request->input('SoDienThoai');
        $khachhang->Email=$request->input('Email');
        $khachhang->DiaChi=$request->input('DiaChi');
        $khachhang->save();
        return redirect('khachhang-danhsach');
    }
}
