<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call("ThemUser");
        $this->call("ThemLoaiVL");
        $this->call("ThemVL");
        $this->call("ThemKH");
        $this->call("ThemNCC");
        $this->call("ThemHD");
        $this->call("ThemDNH");
        $this->call("ThemCTHD");
        $this->call("ThemCTDNH");
    }
}
//thêm dữ liệu
class ThemUser extends Seeder
{
	public function run()
	{
		DB::table('users')->insert([
			'name'=>"Thanh Phuong",
			'email'=>"nguyenphuong@gmail.com",
			'password'=>bcrypt('123456'),
			]);
	}
}
class ThemLoaiVL extends Seeder
{
	public function run()
	{
		DB::table('LoaiVL')->insert([
			'TenLoai'=>"VL4",
			'TenLoaiKhongDau'=>"VL-4",
			]);
	}
}
class ThemVL extends Seeder
{

	public function run()
	{
		DB::table('VatLieu')->insert([
			array('TenVL' => 'Xi măng','TenVLKhongDau'=>'Xi-mang','GiaGoc'=>100, 'GiaBan'=>200,'SoLuong'=>100,'DonViTinh'=>'Tấn','MaLoai'=>5),
		]);
	}
}
class ThemKH extends Seeder
{

	public function run()
	{
		DB::table('KhachHang')->insert([
			array('TenKH' => 'Nguyễn Phương','TenKHKhongDau'=>'Nguyen-Phuong','SoDienThoai'=>'0962929642', 'Email'=>'nguyenthanhphuong@gmail.com','DiaChi'=>'123 Hùng Vương'),
		]);
	}
}
class ThemNCC extends Seeder
{

	public function run()
	{
		DB::table('NhaCungCap')->insert([
			array('TenNCC' => 'Nguyễn Phương','TenNCCKhongDau'=>'Nguyen-Phuong','SoDienThoai'=>'0962929642', 'Email'=>'nguyenthanhphuong@gmail.com','DiaChi'=>'123 Hùng Vương'),
		]);
	}
}
class ThemDNH extends Seeder
{

	public function run()
	{
		DB::table('DonNhapHang')->insert([
			array('MaNCC'=>1,'TongTien' => 200,'DaTra'=>100,'ConLai'=>100, 'TrangThai'=>'Còn','NgayNhap'=>'2016-10-04 00:00:00'),
		]);
	}
}
class ThemHD extends Seeder
{

	public function run()
	{
		DB::table('HoaDon')->insert([
			array('MaKH'=>1,'TongTien' => 200,'DaTra'=>100,'ConLai'=>100, 'TrangThai'=>'Còn','NgayMua'=>'2016-10-04 00:00:00'),
		]);
	}
}
class ThemCTHD extends Seeder
{

	public function run()
	{
		DB::table('ChiTietHD')->insert([
			array('MaHD'=>1,'MaVL' => 2,'SoLuong'=>100),
		]);
	}
}
class ThemCTDNH extends Seeder
{

	public function run()
	{
		DB::table('ChiTietDNH')->insert([
			array('MaDNH'=>1,'MaVL' => 2,'SoLuong'=>100),
		]);
	}
}