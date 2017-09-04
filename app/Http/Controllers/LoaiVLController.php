<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LoaiVL;

class LoaiVLController extends Controller
{
    public function getDanhSach()
    {
        $loai_vl=LoaiVL::all()->where('TrangThai',0);
        return view('loai_vl.danhsach',['loai_vl'=>$loai_vl]);
    }
    public function postThem(Request $request)
    {
        
        $loai_vl=new LoaiVL;
        $loai_vl->TenLoai=$request->input('TenLoai');
        $loai_vl->save();
        return redirect('loaivl_danhsach');
    }
    public function getSua($id)
    {
        $loai_vl=LoaiVL::find($id);
        return view('loai_vl.sua',['loai_vl'=>$loai_vl]);
    }
    public function postSua(Request $request,$id)
    {
        $loai_vl=LoaiVL::find($id);
        $loai_vl->TenLoai=$request->input('TenLoai');
        $loai_vl->save();
        return redirect('loaivl_danhsach');
    }
    public function getXoa($id)
    {
        $loai_vl= LoaiVL::find($id);
        $loai_vl->TrangThai='1';
        $loai_vl->save();
        return redirect('loaivl_danhsach');

    }
}
