<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DonNhapHang;
use App\NhaCungCap;
use App\ChiTietDNH;
use App\VatLieu;
use Carbon\Carbon;
class DonNhapHangController extends Controller
{
    
    public function getDanhSach()
    {
        $donnhaphang=DonNhapHang::all();
        $vatlieu=VatLieu::all();
        $chitiet=ChiTietDNH::all();
        $tongHD=$donnhaphang->count('MaDNH');
        $tongT=$donnhaphang->sum('TongTien');
        $tongTra=$donnhaphang->sum('DaTra');
        return view('don_nhap_hang.danhsach',['donnhaphang'=>$donnhaphang,'vatlieu'=>$vatlieu,'chitiet'=>$chitiet,'tongHD'=>$tongHD,'tongT'=>$tongT,'tongTra'=>$tongTra]);

    }
    public function postThem(Request $request)
    {
        $ncc=new NhaCungCap;
        $ncc->TenNCC=$request->input('TenNCC');
        $ncc->SoDienThoai=$request->input('SoDienThoai');
        $ncc->DiaChi=$request->input('DiaChi');
        $ncc->Email=$request->input('Email');
        $ncc->save();

        $donnhaphang=new DonNhapHang;
        $donnhaphang->MaNCC= $ncc->getLast()->MaNCC;
        $donnhaphang->TongTien=$request->input('TongTien');
        $donnhaphang->NgayNhap=Carbon::now();
        $donnhaphang->DaTra=$request->input('DaTra');
        $donnhaphang->ConLai=$donnhaphang->TongTien-$donnhaphang->DaTra;
        $donnhaphang->TrangThai='1';
        $donnhaphang->save();

        
        $arrMa=explode(",",$request->input('MaVL'));
        $arrSL=explode(",",$request->input('SoLuong'));

        for ($i=0; $i < count($arrMa)-1; $i++) { 
            $cthd= new ChiTietDNH;
            $cthd->MaDNH=$donnhaphang->getLast()->MaDNH;
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
        $donnhaphang=DonNhapHang::find($id);
        $chitiet= ChiTietDNH::getChiTiet($id);
        return view('don_nhap_hang.chitiet',['donnhaphang'=>$donnhaphang,'chitiet'=>$chitiet]);
    }
    public function postSua(Request $request,$id)
    {
        $donnhaphang=DonNhapHang::find($id);
        $donnhaphang->DaTra=$donnhaphang->DaTra+$request->input('TraThem');
        $donnhaphang->ConLai=$donnhaphang->TongTien-$donnhaphang->DaTra;
        $donnhaphang->save();
        return redirect('donnhaphang-danhsach');
    }
    public function getXoa($id)
    {
        $donnhaphang= DonNhapHang::find($id);
        $donnhaphang->delete();
        return redirect('donnhaphang-danhsach');
    }
    public function getIn($id)
    {

        $donnhaphang=DonNhapHang::find($id);
        $chitiet= ChiTietDNH::getChiTiet($id);
        return view('don_nhap_hang.in',['donnhaphang'=>$donnhaphang,'chitiet'=>$chitiet]);
    }
}
