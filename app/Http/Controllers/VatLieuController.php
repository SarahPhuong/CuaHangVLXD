<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\VatLieu;
use App\LoaiVL;

class VatLieuController extends Controller
{
    public function getDanhSach()
    {
        //hiển thị view danh sách
    	$vatlieu=VatLieu::all()->where('TrangThai',0);
        $loai_vl=LoaiVL::all()->where('TrangThai',0);
        $tongVL=$vatlieu->count('MaVL');
        $tongSL=$vatlieu->sum('SoLuong');
        return view('vatlieu.danhsach',['vatlieu'=>$vatlieu,'loai_vl'=>$loai_vl,'tongVL'=>$tongVL,'tongSL'=>$tongSL]);
    }
    public function getDanhSachTK()
    {
        //hiển thị view danh sách
        $vatlieu=VatLieu::all()->where('SoLuong',! 0)->where('TrangThai',0);
        $loai_vl=LoaiVL::all();
        $tongVL=$vatlieu->count('MaVL');
        $tongSL=$vatlieu->sum('SoLuong');
        return view('vatlieu.tonkho',['vatlieu'=>$vatlieu,'loai_vl'=>$loai_vl,'tongVL'=>$tongVL,'tongSL'=>$tongSL]);
    }
    public function postThem(Request $request)
    {

    	//nhận dữ liệu từ view để thêm
    	$vatlieu=new VatLieu;
        $vatlieu->MaLoai=$request->input('MaLoai');
    	$vatlieu->TenVL=$request->input('TenVL');
        $vatlieu->GiaGoc=$request->input('GiaGoc');
        $vatlieu->GiaBan=$request->input('GiaBan');
        $vatlieu->SoLuong=$request->input('SoLuong');
        $vatlieu->DonViTinh=$request->input('DonViTinh');
        $vatlieu->save();
    	return redirect('vatlieu_danhsach');
    }
    public function getSua($id)
    {
        $loai_vl=LoaiVL::all()->where('TrangThai',0);
        $vatlieu=VatLieu::find($id);
    	return view('vatlieu.sua',['loai_vl'=>$loai_vl,'vatlieu'=>$vatlieu]);
    }
    public function postSua(Request $request,$id)
    {
    	$vatlieu=VatLieu::find($id);
        $vatlieu->MaLoai=$request->input('MaLoai');
        $vatlieu->TenVL=$request->input('TenVL');
        $vatlieu->GiaGoc=$request->input('GiaGoc');
        $vatlieu->GiaBan=$request->input('GiaBan');
        $vatlieu->SoLuong=$request->input('SoLuong');
        $vatlieu->DonViTinh=$request->input('DonViTinh');
        $vatlieu->save();
        return redirect('vatlieu_danhsach');
    }
    public function getXoa($MaVL)
    {
        $vatlieu=VatLieu::find($MaVL);
    	$vatlieu->TrangThai='1';
        $vatlieu->save();
    	return redirect('vatlieu_danhsach');
    }
}
