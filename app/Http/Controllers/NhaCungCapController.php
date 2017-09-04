<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\NhaCungCap;
use App\VatLieu;
use App\ChiTietDNH;
use App\DonNhapHang;
use Carbon\Carbon;

class NhaCungCapController extends Controller
{
    public function getDanhSach()
    {
        $ncc=NhaCungCap::all();
        $tongKH=$ncc->count('MaNCC');
        return view('nha_cung_cap.danhsach',['ncc'=>$ncc,'tongKH'=>$tongKH]);
    }
    public function getThem($id)
    {
        $ncc=NhaCungCap::find($id);
        $vatlieu=VatLieu::all();
        $chitiet=ChiTietDNH::all();
        return view('nha_cung_cap.themdh',['ncc'=>$ncc,'vatlieu'=>$vatlieu,'chitiet'=>$chitiet]);

    }
    public function postThem(Request $request,$id)
    {
        $ncc=NhaCungCap::find($id);

        $hoadon= new DonNhapHang;
        $hoadon->MaNCC=$ncc->MaNCC;
        $hoadon->NgayNhap=Carbon::now();
        $hoadon->TongTien=$request->input('TongTien');
        $hoadon->DaTra=$request->input('DaTra');
        $hoadon->ConLai=$hoadon->TongTien-$hoadon->DaTra;
        $hoadon->TrangThai='1';
        $hoadon->save();

        $arrMa=explode(",",$request->input('MaVL'));
        $arrSL=explode(",",$request->input('SoLuong'));

        for ($i=0; $i < count($arrMa)-1; $i++) { 
            $cthd= new ChiTietDNH;
            $cthd->MaDNH=$hoadon->getLast()->MaDNH;
            $cthd->MaVL=$arrMa[$i];
            $cthd->SoLuong=$arrSL[$i];
            $cthd->save();

            $ma=$arrMa[$i];
            $sl=$arrSL[$i];

            $vatLieu= VatLieu::find($ma);
            $vatLieu->SoLuong=$vatLieu->SoLuong+$sl;
            $vatLieu->save();
        }
        return redirect('donnhaphang-danhsach');
    }
    public function getSua($id)
    {
        $ncc=NhaCungCap::find($id);
        return view('nha_cung_cap.sua',['ncc'=>$ncc]);
    }
    public function postSua(Request $request,$id)
    {
        $ncc=NhaCungCap::find($id);
        $ncc->TenNCC=$request->input('TenNCC');
        $ncc->SoDienThoai=$request->input('SoDienThoai');
        $ncc->Email=$request->input('Email');
        $ncc->DiaChi=$request->input('DiaChi');
        $ncc->save();
        return redirect('nhacungcap-danhsach');
    }
}
