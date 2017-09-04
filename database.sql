-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2016 lúc 07:50 SA
-- Phiên bản máy phục vụ: 5.7.11
-- Phiên bản PHP: 5.6.19

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_vlxd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdnh`
--

CREATE TABLE `chitietdnh` (
  `MaDNH` int(10) UNSIGNED NOT NULL,
  `MaVL` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `chitietdnh`
--

INSERT INTO `chitietdnh` (`MaDNH`, `MaVL`, `SoLuong`, `created_at`, `updated_at`) VALUES
(11, 6, 1, '2016-10-15 17:38:26', '2016-10-15 17:38:26'),
(11, 8, 1, '2016-10-15 17:38:26', '2016-10-15 17:38:26'),
(11, 10, 23, '2016-10-15 17:38:26', '2016-10-15 17:38:26'),
(12, 10, 40, '2016-10-15 17:39:36', '2016-10-15 17:39:36'),
(13, 5, 1, '2016-10-15 17:40:46', '2016-10-15 17:40:46'),
(13, 5, 500, '2016-10-15 17:40:46', '2016-10-15 17:40:46'),
(14, 6, 59, '2016-10-15 17:42:20', '2016-10-15 17:42:20'),
(15, 8, 10, '2016-10-15 17:45:07', '2016-10-15 17:45:07'),
(16, 8, 1, '2016-10-17 00:04:09', '2016-10-17 00:04:09'),
(16, 9, 1, '2016-10-17 00:04:09', '2016-10-17 00:04:09'),
(17, 6, 1, '2016-10-17 00:05:08', '2016-10-17 00:05:08'),
(17, 9, 1, '2016-10-17 00:05:08', '2016-10-17 00:05:08'),
(17, 9, 1, '2016-10-17 00:05:08', '2016-10-17 00:05:08'),
(18, 8, 100, '2016-10-17 20:40:49', '2016-10-17 20:40:49'),
(18, 9, 100, '2016-10-17 20:40:49', '2016-10-17 20:40:49'),
(19, 10, 13, '2016-10-18 02:48:41', '2016-10-18 02:48:41'),
(19, 10, 13, '2016-10-18 02:48:41', '2016-10-18 02:48:41'),
(19, 10, 13, '2016-10-18 02:48:41', '2016-10-18 02:48:41'),
(19, 10, 13, '2016-10-18 02:48:41', '2016-10-18 02:48:41'),
(20, 17, 5, '2016-10-18 02:50:36', '2016-10-18 02:50:36'),
(20, 17, 5, '2016-10-18 02:50:36', '2016-10-18 02:50:36'),
(20, 17, 5, '2016-10-18 02:50:36', '2016-10-18 02:50:36'),
(20, 17, 5, '2016-10-18 02:50:36', '2016-10-18 02:50:36'),
(20, 6, 5, '2016-10-18 02:50:36', '2016-10-18 02:50:36'),
(20, 6, 5, '2016-10-18 02:50:36', '2016-10-18 02:50:36'),
(20, 9, 5, '2016-10-18 02:50:36', '2016-10-18 02:50:36'),
(21, 6, 1, '2016-10-19 08:14:40', '2016-10-19 08:14:40'),
(21, 9, 1, '2016-10-19 08:14:40', '2016-10-19 08:14:40'),
(22, 6, 100, '2016-10-20 01:12:27', '2016-10-20 01:12:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `MaVL` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`MaHD`, `MaVL`, `SoLuong`, `created_at`, `updated_at`) VALUES
(36, 5, 100, '2016-10-17 20:53:46', '2016-10-17 20:53:46'),
(32, 6, 1, '2016-10-15 01:14:11', '2016-10-15 01:14:11'),
(32, 9, 1, '2016-10-15 01:14:11', '2016-10-15 01:14:11'),
(33, 8, 1, '2016-10-17 19:33:23', '2016-10-17 19:33:23'),
(33, 9, 50, '2016-10-17 19:33:23', '2016-10-17 19:33:23'),
(34, 8, 1, '2016-10-17 19:33:23', '2016-10-17 19:33:23'),
(34, 9, 50, '2016-10-17 19:33:23', '2016-10-17 19:33:23'),
(35, 8, 1, '2016-10-17 19:33:35', '2016-10-17 19:33:35'),
(35, 9, 50, '2016-10-17 19:33:35', '2016-10-17 19:33:35'),
(36, 17, 85, '2016-10-17 20:53:46', '2016-10-17 20:53:46'),
(36, 13, 85, '2016-10-17 20:53:46', '2016-10-17 20:53:46'),
(36, 12, 90, '2016-10-17 20:53:46', '2016-10-17 20:53:46'),
(37, 6, 200, '2016-10-17 20:54:32', '2016-10-17 20:54:32'),
(37, 12, 100, '2016-10-17 20:54:32', '2016-10-17 20:54:32'),
(37, 14, 50, '2016-10-17 20:54:32', '2016-10-17 20:54:32'),
(38, 5, 4, '2016-10-17 20:57:12', '2016-10-17 20:57:12'),
(38, 5, 3, '2016-10-17 20:57:12', '2016-10-17 20:57:12'),
(39, 6, 1, '2016-10-19 07:59:19', '2016-10-19 07:59:19'),
(39, 10, 1, '2016-10-19 07:59:19', '2016-10-19 07:59:19'),
(39, 17, 1, '2016-10-19 07:59:19', '2016-10-19 07:59:19'),
(39, 16, 1, '2016-10-19 07:59:19', '2016-10-19 07:59:19'),
(40, 5, 1, '2016-10-19 17:27:48', '2016-10-19 17:27:48'),
(40, 9, 1, '2016-10-19 17:27:48', '2016-10-19 17:27:48'),
(41, 6, 23, '2016-10-20 00:41:38', '2016-10-20 00:41:38'),
(42, 6, 1, '2016-10-20 00:44:36', '2016-10-20 00:44:36'),
(43, 6, 1, '2016-10-20 00:46:38', '2016-10-20 00:46:38'),
(44, 6, 1, '2016-10-20 00:47:12', '2016-10-20 00:47:12'),
(45, 6, 1, '2016-10-20 00:48:51', '2016-10-20 00:48:51'),
(46, 6, 21, '2016-10-20 00:52:35', '2016-10-20 00:52:35'),
(47, 6, 1, '2016-10-20 00:54:42', '2016-10-20 00:54:42'),
(48, 6, 10, '2016-10-20 00:56:15', '2016-10-20 00:56:15'),
(49, 6, 100, '2016-10-20 00:58:27', '2016-10-20 00:58:27'),
(50, 6, 10, '2016-10-20 01:10:55', '2016-10-20 01:10:55'),
(51, 11, 10, '2016-10-20 01:39:06', '2016-10-20 01:39:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donnhaphang`
--

CREATE TABLE `donnhaphang` (
  `MaDNH` int(10) UNSIGNED NOT NULL,
  `MaNCC` int(10) UNSIGNED NOT NULL,
  `NgayNhap` datetime NOT NULL,
  `TongTien` int(11) NOT NULL,
  `DaTra` int(11) NOT NULL,
  `ConLai` int(11) NOT NULL,
  `TrangThai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `donnhaphang`
--

INSERT INTO `donnhaphang` (`MaDNH`, `MaNCC`, `NgayNhap`, `TongTien`, `DaTra`, `ConLai`, `TrangThai`, `created_at`, `updated_at`) VALUES
(15, 8, '2016-10-16 00:45:07', 5200, 200, 5000, '1', NULL, NULL),
(14, 7, '2016-10-16 00:42:20', 11800, 1600, 10200, '1', NULL, NULL),
(11, 2, '2016-10-16 00:38:26', 14520, 14520, 0, '1', NULL, NULL),
(12, 3, '2016-10-16 00:39:36', 24000, 4000, 20000, '1', NULL, NULL),
(13, 1, '2016-10-16 00:40:46', 50100, 50100, 0, '1', NULL, NULL),
(16, 12, '2016-10-17 07:04:09', 1020, 1000, 20, '1', NULL, NULL),
(17, 14, '2016-10-17 07:05:08', 614, 600, 14, '1', NULL, NULL),
(18, 15, '2016-10-18 03:40:49', 50000, 40000, 10000, '1', NULL, NULL),
(19, 3, '2016-10-18 09:48:41', 31200, 31000, 200, '1', NULL, NULL),
(20, 1, '2016-10-18 09:50:36', 404500, 400000, 4500, '1', NULL, NULL),
(21, 1, '2016-10-19 15:14:40', 700, 700, 0, '1', NULL, NULL),
(22, 2, '2016-10-20 08:12:27', 20000, 15000, 5000, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `MaKH` int(10) UNSIGNED NOT NULL,
  `NgayMua` datetime NOT NULL,
  `TongTien` int(11) NOT NULL,
  `DaTra` int(11) NOT NULL,
  `ConLai` int(11) NOT NULL,
  `TrangThai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `NgayMua`, `TongTien`, `DaTra`, `ConLai`, `TrangThai`, `created_at`, `updated_at`) VALUES
(45, 2, '2016-10-20 07:48:51', 200, 200, 0, '1', NULL, NULL),
(46, 2, '2016-10-20 07:52:35', 4200, 4200, 0, '1', NULL, NULL),
(47, 2, '2016-10-20 07:54:42', 200, 200, 0, '1', NULL, NULL),
(40, 2, '2016-10-20 00:27:47', 1000, 0, 1000, '1', NULL, NULL),
(41, 15, '2016-10-20 07:41:38', 4600, 4600, 0, '1', NULL, NULL),
(42, 2, '2016-10-20 07:44:36', 200, 200, 0, '1', NULL, NULL),
(43, 3, '2016-10-20 07:46:38', 200, 0, 200, '1', NULL, NULL),
(44, 2, '2016-10-20 07:47:12', 200, 200, 0, '1', NULL, NULL),
(36, 7, '2016-10-18 03:53:46', 2381000, 381000, 2000000, '1', NULL, NULL),
(32, 3, '2016-10-15 08:14:11', 700, 700, 0, '1', NULL, NULL),
(33, 2, '2016-10-18 02:33:23', 25520, 25000, 520, '1', NULL, NULL),
(34, 2, '2016-10-18 02:33:23', 25520, 25520, 0, '1', NULL, NULL),
(35, 2, '2016-10-18 02:33:35', 25520, 5000, 20520, '1', NULL, NULL),
(37, 27, '2016-10-18 03:54:32', 430000, 430000, 0, '1', NULL, NULL),
(38, 8, '2016-10-18 03:57:12', 3500, 3500, 0, '1', NULL, NULL),
(39, 2, '2016-10-19 14:59:19', 29800, 28000, 1800, '1', NULL, NULL),
(48, 2, '2016-10-20 07:56:15', 2000, 2000, 0, '1', NULL, NULL),
(49, 7, '2016-10-20 07:58:27', 20000, 20000, 0, '1', NULL, NULL),
(50, 3, '2016-10-20 08:10:55', 2000, 210, 1790, '1', NULL, NULL),
(51, 28, '2016-10-20 08:39:06', 8000, 7000, 1000, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(10) UNSIGNED NOT NULL,
  `TenKH` varchar(255) NOT NULL,
  `SoDienThoai` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `SoDienThoai`, `Email`, `DiaChi`, `created_at`, `updated_at`) VALUES
(2, 'Trương Khánh Duy', '01656659500', 'duy@gmail.com', 'Bình Chánh', NULL, NULL),
(3, 'Nguyễn Thanh Phương', '0962929642', 'duy1@gmail.com', 'Gia Lai', NULL, NULL),
(7, 'Nguyễn B', '01656659500', 'duy@gmail.com', 'Bình Chánh', NULL, NULL),
(8, 'Trương D', '01656659500', 'duy@gmail.com', 'Bình Chánh', NULL, NULL),
(14, 'Nguyễn Phương ', '034823947', 'nguyenthanhphuong1431@gmail.com', '123 Hùng Vương, pleiku', NULL, NULL),
(15, 'Nguyễn Phương ', '034823947', 'nguyenthanhphuong1431@gmail.com', '123 Hùng Vương, pleiku', NULL, NULL),
(28, 'Trần Quang Hưng', '0962929642', 'nguyenthanhphuong1431@gmail.com', '123 Hùng Vương, pleiku', NULL, NULL),
(27, 'Tiểu Di', '01656659500', 'duy@gmail.com', 'Bình Chánh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaivl`
--

CREATE TABLE `loaivl` (
  `MaLoai` int(10) UNSIGNED NOT NULL,
  `TenLoai` varchar(255) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `loaivl`
--

INSERT INTO `loaivl` (`MaLoai`, `TenLoai`, `TrangThai`, `created_at`, `updated_at`) VALUES
(9, 'Xi măng', 0, NULL, NULL),
(1, 'Đá lát nền', 1, NULL, NULL),
(5, 'Thép', 1, NULL, NULL),
(6, 'Sắt A', 0, NULL, NULL),
(8, 'Cát', 0, NULL, NULL),
(10, 'Kính', 0, NULL, NULL),
(11, 'Gạch', 0, NULL, NULL),
(12, 'Bê tông', 0, NULL, NULL),
(13, 'Tôn', 0, NULL, NULL),
(14, 'Đất', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` int(10) UNSIGNED NOT NULL,
  `TenNCC` varchar(255) NOT NULL,
  `SoDienThoai` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `SoDienThoai`, `Email`, `DiaChi`, `created_at`, `updated_at`) VALUES
(1, 'Công ty Sắt thép Sơn Hà', '0962929642', 'nguyenthanhphuong@gmail.com', '123 Hùng Vương', NULL, NULL),
(2, 'CT TNHH Bình Minh', '01656659500', 'duy@gmail.com', 'Bình Chánh', NULL, NULL),
(3, 'CT TNHH Cát Trắng', '01656659500', 'duy@gmail.com', 'Bình Chánh', NULL, NULL),
(5, 'CT TNHH Thép Pro', '0962929642', 'truongkhanhduy9@gmail.com', 'Gia Lai', NULL, NULL),
(9, 'Công ty TNHH Thương mại và Sản xuất Thép Việt', '01656659500', 'nguyenthanhphuong1431@gmail.com', '12 Quang Trung, T.P HCM', NULL, NULL),
(7, 'CT TNHH Đá Quý', '01656659500', 'duy@gmail.com', 'Bình Chánh', NULL, NULL),
(8, 'CT TNHH ABC', '01656659500', 'nguyenthanhphuong1431@gmail.com', '123 Hùng Vương, pleiku', NULL, NULL),
(10, 'CT TNHH Cát Duy Duy', '01656659500', 'nguyenthanhphuong1431@gmail.com', '123 Hùng Vương, pleiku', NULL, NULL),
(11, 'CT TNHH Cát Duy Duy', '01656659500', 'nguyenthanhphuong1431@gmail.com', '123 Hùng Vương, pleiku', NULL, NULL),
(12, 'Trương Duy', '01656659500', 'nguyenthanhphuong1431@gmail.com', '123 Hùng Vương, pleiku', NULL, NULL),
(13, 'Công ty Sắt thép Đồng Tháp', '01656659500', 'sksdf@gmail.com', 'Bình Chánh', NULL, NULL),
(14, 'Công ty Sắt thép Đồng Tháp', '01656659500', 'sksdf@gmail.com', 'Bình Chánh', NULL, NULL),
(15, 'Công ty ABC', '01656659500', 'duy@gmail.com', 'Bình Chánh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thanh Phương', 'nguyenphuong@gmail.com', '$2y$10$FvQ7liCeDlbak7Mw7B9GOeS5xeSivfaNmfMgldxb2e3FdFtUMHt/W', 'p4yrc9Ip0k96INzsuLBy7JWr1R0aTv01uSjnzh96Zdsnse05jfaHfmwTXZeV', NULL, '2016-10-20 01:32:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vatlieu`
--

CREATE TABLE `vatlieu` (
  `MaVL` int(10) UNSIGNED NOT NULL,
  `MaLoai` int(10) UNSIGNED NOT NULL,
  `TenVL` varchar(255) NOT NULL,
  `GiaGoc` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonViTinh` varchar(255) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `vatlieu`
--

INSERT INTO `vatlieu` (`MaVL`, `MaLoai`, `TenVL`, `GiaGoc`, `GiaBan`, `SoLuong`, `DonViTinh`, `TrangThai`, `created_at`, `updated_at`) VALUES
(5, 9, 'Đất', 200, 500, 100, 'kg', 1, NULL, NULL),
(8, 9, 'Xi măng hà tiên', 200, 500, 100, 'bao', 0, NULL, NULL),
(6, 10, 'gạch men', 100, 200, 110, 'viên', 0, NULL, NULL),
(9, 9, 'Xi măng holcim', 300, 500, 400, 'bao', 0, NULL, NULL),
(10, 8, 'Cát trắng', 300, 600, 400, 'bao', 0, NULL, NULL),
(11, 6, 'Sắt 12', 400, 800, 290, 'cây', 0, NULL, NULL),
(12, 11, 'Gạch ống', 300, 400, 300, 'thiên', 0, NULL, NULL),
(13, 13, 'Tôn Alfer Tech', 3500, 7000, 400, 'tấm', 0, NULL, NULL),
(14, 13, 'Tôn thường', 4500, 7000, 700, 'tấm', 0, NULL, NULL),
(15, 10, 'Kính mặt', 1000, 7000, 800, 'tấm', 0, NULL, NULL),
(16, 9, 'Bê tông loại 1', 5000, 9000, 900, 'bao', 0, NULL, NULL),
(17, 5, 'Thép cuộn Ø 6', 11900, 20000, 400, 'kg', 0, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdnh`
--
ALTER TABLE `chitietdnh`
  ADD KEY `chitietdnh_madnh_foreign` (`MaDNH`),
  ADD KEY `chitietdnh_mavl_foreign` (`MaVL`);

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD KEY `chitiethd_mahd_foreign` (`MaHD`),
  ADD KEY `chitiethd_mavl_foreign` (`MaVL`);

--
-- Chỉ mục cho bảng `donnhaphang`
--
ALTER TABLE `donnhaphang`
  ADD PRIMARY KEY (`MaDNH`),
  ADD KEY `donnhaphang_mancc_foreign` (`MaNCC`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `hoadon_makh_foreign` (`MaKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loaivl`
--
ALTER TABLE `loaivl`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vatlieu`
--
ALTER TABLE `vatlieu`
  ADD PRIMARY KEY (`MaVL`),
  ADD KEY `vatlieu_maloai_foreign` (`MaLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donnhaphang`
--
ALTER TABLE `donnhaphang`
  MODIFY `MaDNH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `loaivl`
--
ALTER TABLE `loaivl`
  MODIFY `MaLoai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNCC` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `vatlieu`
--
ALTER TABLE `vatlieu`
  MODIFY `MaVL` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
