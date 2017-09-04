<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('login','AdminController@getLogin');
Route::post('login','AdminController@postLogin');
Route::get('logout','AdminController@getLogout');
Route::get('taikhoan','AdminController@getUser');
Route::post('taikhoan','AdminController@postUser');
Route::group(['prefix'=>'/','middleware'=>'AdminLogin'],function(){
	//Tổng quan
	Route::get('tongquan','TongQuanController@getDanhSach');
	// Route QLVL
		Route::get('vatlieu_danhsach','VatLieuController@getDanhSach');
		Route::get('tonkho','VatLieuController@getDanhSachTK');
		Route::post('vatlieu_danhsach','VatLieuController@postThem');
		Route::get('vatlieu_sua_{MaVL}','VatLieuController@getSua');
		Route::post('vatlieu_sua_{MaVL}','VatLieuController@postSua');
		Route::get('vatlieu_xoa_{MaVL}','VatLieuController@getXoa');
	
	//Route QL loại VL
		Route::get('loaivl_danhsach','LoaiVLController@getDanhSach');
		Route::post('loaivl_danhsach','LoaiVLController@postThem');
		Route::get('loaivl_sua_{MaLoai}','LoaiVLController@getSua');
		Route::post('loaivl_sua_{MaLoai}','LoaiVLController@postSua');
		Route::get('loaivl_xoa_{MaLoai}','LoaiVLController@getXoa');
	//Route QL KH
		Route::get('khachhang-danhsach','KhachHangController@getDanhSach');
		Route::get('khachhang-themdh-{MaKH}','KhachHangController@getThem');
		Route::post('khachhang-themdh-{MaKH}','KhachHangController@postThem');
		Route::get('khachhang-hoadon-{MaHD}','KhachHangController@getHoaDon');
		Route::post('khachhang-hoadon-{MaHD}','KhachHangController@postHoaDon');
		Route::get('khachhang-sua-{MaKH}','KhachHangController@getSua');
		Route::post('khachhang-sua-{MaKH}','KhachHangController@postSua');

	//Route QL HD
		Route::get('hoadon-danhsach','HoaDonController@getDanhSach');
		Route::post('hoadon-danhsach','HoaDonController@postThem');
		Route::get('hoadon-chitiet-{MaHD}','HoaDonController@getSua');
		Route::post('hoadon-chitiet-{MaHD}','HoaDonController@postSua');
		Route::get('hoadon-xoa-{MaHD}','HoaDonController@getXoa');
		Route::get('in-{MaHD}','HoaDonController@getIn');

	//Route QL NCC
		Route::get('nhacungcap-danhsach','NhaCungCapController@getDanhSach');
		Route::get('nhacungcap-themdh-{MaNCC}','NhaCungCapController@getThem');
		Route::post('nhacungcap-themdh-{MaNCC}','NhaCungCapController@postThem');
		Route::get('nhacungcap-hoadon-{MaDNH}','NhaCungCapController@getHoaDon');
		Route::post('nhacungcap-hoadon-{MaDNH}','NhaCungCapController@postHoaDon');
		Route::get('nhacungcap-sua-{MaNCC}','NhaCungCapController@getSua');
		Route::post('nhacungcap-sua-{MaNCC}','NhaCungCapController@postSua');

	//Route QL DNH
		Route::get('donnhaphang-danhsach','DonNhapHangController@getDanhSach');
		Route::post('donnhaphang-danhsach','DonNhapHangController@postThem');
		Route::get('donnhaphang-chitiet-{MaDNH}','DonNhapHangController@getSua');
		Route::post('donnhaphang-chitiet-{MaDNH}','DonNhapHangController@postSua');
		Route::get('donnhaphang-xoa-{MaDNH}','DonNhapHangController@getXoa');
		Route::get('inDNH-{MaDNH}','DonNhapHangController@getIn');

	//Công nợ
		Route::get('congnoKH','CongNoController@getDanhSachKH');
		Route::get('congnoNCC','CongNoController@getDanhSachNCC');

});