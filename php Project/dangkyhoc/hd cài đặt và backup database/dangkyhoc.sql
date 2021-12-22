-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2019 lúc 01:25 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dangkyhoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsdangky`
--

CREATE TABLE `dsdangky` (
  `mamonhoc` varchar(50) NOT NULL,
  `masinhvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dstenmonhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dsgiangvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dssotinchi` int(10) NOT NULL,
  `dshocphi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `dsdangky`
--

INSERT INTO `dsdangky` (`mamonhoc`, `masinhvien`, `dstenmonhoc`, `dsgiangvien`, `dssotinchi`, `dshocphi`) VALUES
('CNTT2', '68DCHT20126', 'Lập trình di động', 'Nguyễn Thái Sơn', 3, ''),
('CNTT3', '68DCHT20126', 'Lập trình trên môi trường Web', 'Trần Thị Xuân Hương', 3, ''),
('CNTT4', '68DCHT20126', 'Lập trình java', 'Nguyễn Thái Sơn', 3, ''),
('CNTT6', '68DCHT20126', 'Lập trình C++', 'Nguyễn Thái Sơn', 3, ''),
('CT1', '68DCCT21', 'Địa chất công trình', 'Lê Văn Tài', 2, ''),
('CT2', '68DCCT21', 'Thiết kế cầu thép', 'Nguyễn Tuấn Tài', 3, ''),
('CT3', '68DCCT21', 'Xây dựng nền đường', 'Hoàng Văn Vinh', 3, ''),
('CT4', '68DCCT21', 'Thiết kế cầu BTCT', 'Lê Đức Thọ', 3, ''),
('CT6', '68DCCT21', 'Môi trường trong xây dựng', 'Vũ Trọng Đại', 3, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(50) NOT NULL,
  `tenkhoa` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('CNTT', 'Công nghệ thông tin'),
('CT', 'Công Trình'),
('KT', 'Kế Toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `lop` varchar(50) NOT NULL,
  `makhoa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`lop`, `makhoa`) VALUES
('68DCHT21', 'CNTT'),
('68DCHT22', 'CNTT'),
('68DCHT23', 'CNTT'),
('68DCCT21', 'CT'),
('68DCCT22', 'CT'),
('68DCCT23', 'CT'),
('68DCKT21', 'KT'),
('68DCKT22', 'KT'),
('68DCKT23', 'KT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamonhoc` varchar(50) NOT NULL,
  `tenmonhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giangvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lichhoc` varchar(50) DEFAULT NULL,
  `sotinchi` int(10) NOT NULL,
  `hocphi` varchar(50) DEFAULT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamonhoc`, `tenmonhoc`, `giangvien`, `lichhoc`, `sotinchi`, `hocphi`, `makhoa`) VALUES
('CNTT2', 'Lập trình di động', 'Nguyễn Thái Sơn', NULL, 3, NULL, 'CNTT'),
('CNTT3', 'Lập trình trên môi trường Web', 'Trần Thị Xuân Hương', NULL, 3, NULL, 'CNTT'),
('CNTT4', 'Lập trình java', 'Nguyễn Thái Sơn', NULL, 3, NULL, 'CNTT'),
('CT1', 'Địa chất công trình', 'Lê Văn Tài', NULL, 2, NULL, 'CT'),
('CT2', 'Thiết kế cầu thép', 'Nguyễn Tuấn Tài', NULL, 3, NULL, 'CT'),
('CT3', 'Xây dựng nền đường', 'Hoàng Văn Vinh', NULL, 3, NULL, 'CT'),
('CT4', 'Thiết kế cầu BTCT', 'Lê Đức Thọ', NULL, 3, NULL, 'CT'),
('CT5', 'Kỹ thuật thi công cầu', 'Hồ Xuân Hương', NULL, 2, NULL, 'CT'),
('CNTT5', 'Thiết kế mạng máy tính', 'Nguyễn Hoàng Anh', NULL, 2, NULL, 'CNTT'),
('CNTT6', 'Lập trình C++', 'Nguyễn Thái Sơn', NULL, 3, NULL, 'CNTT'),
('KT2', 'Marketing căn bản', 'Lê Thị Tươi', NULL, 2, NULL, 'KT'),
('CNTT7', 'Kiến trúc máy tính', 'Phạm Văn Minh', NULL, 3, NULL, 'CNTT'),
('CNTT8', 'Tin học đại cương', 'Đỗ Thu Hà', NULL, 3, NULL, 'CNTT'),
('CNTT9', 'An toàn và bảo mật hệ thống thông tin', 'Trịnh Hương Ly', NULL, 2, NULL, 'CNTT'),
('CNTT10', 'Hệ quản trị Cơ sở dữ liệu', 'Đào Thị Lê Na', NULL, 3, NULL, 'CNTT'),
('CT6', 'Môi trường trong xây dựng', 'Vũ Trọng Đại', NULL, 3, NULL, 'CT'),
('CT7', 'Định mức kinh tế kỹ thuật xây dựng', 'Lê Xuân Mai', NULL, 2, NULL, 'CT'),
('CT8', 'Phân tích hoạt động kinh tế của doanh nghiệp xây d', 'Trịnh Xuân Quyết', NULL, 3, NULL, 'CT'),
('CT9', 'Máy xây dựng', 'Nguyễn Thanh Tùng', NULL, 3, NULL, 'CT'),
('KT4', 'Pháp luật kinh tế', 'Lê Thị Hoa', NULL, 3, NULL, 'KT'),
('KT6', 'Kinh tế vĩ mô', 'Nguyễn Văn Sắc', NULL, 3, NULL, 'KT'),
('KT7', 'Kế toán xây dựng cơ bản', 'Nguyễn Hồng Đăng', NULL, 3, NULL, 'KT'),
('CNTT11', 'Kỹ thuật đồ họa máy tính', 'Nguyễn Hoài Nam', NULL, 3, NULL, 'CNTT'),
('CNTT12', 'Đồ án Hệ thống thông tin', 'Nguyễn Quang Huy', NULL, 3, NULL, 'CNTT'),
('CT13', 'Trí tuệ nhân tạo', 'Nguyễn Mạnh Thưởng', NULL, 2, NULL, 'CNTT'),
('MH22', 'abc', 'abc', NULL, 3, '', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masinhvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `lop` varchar(50) NOT NULL,
  `quequan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`masinhvien`, `username`, `password`, `hoten`, `ngaysinh`, `gioitinh`, `lop`, `quequan`, `avatar`) VALUES
('68DCCT21', 'sac', '12345', 'Nguyễn Văn Sắc', '2019-11-09', 'Nam', '68DCCT21', 'Nam Định', '../model/uploads/image-icon-24.jpg'),
('68DCHT20126', 'manhthuong', '12345', 'Nguyễn Mạnh Thưởng', '1999-06-14', 'Nam', '68DCHT21', 'Thanh Hóa', '../model/uploads/46504013_2199904010230293_3752676955611201536_o.jpg'),
('68dcht21', 'sac123', '12345', 'nguyen van sac', '2019-01-12', 'Nam', '68DCHT21', 'nam dinh', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD PRIMARY KEY (`mamonhoc`),
  ADD KEY `masinhvien` (`masinhvien`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`lop`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masinhvien`),
  ADD KEY `malop` (`lop`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD CONSTRAINT `dsdangky_ibfk_1` FOREIGN KEY (`masinhvien`) REFERENCES `sinhvien` (`masinhvien`);

--
-- Các ràng buộc cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`lop`) REFERENCES `lophoc` (`lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
