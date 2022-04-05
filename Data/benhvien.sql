-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 15, 2022 lúc 05:46 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `benhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `tendangnhap` varchar(100) NOT NULL,
  `matkhau` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`tendangnhap`, `matkhau`) VALUES
('thuymia', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bacsi`
--

CREATE TABLE `bacsi` (
  `mabs` varchar(100) NOT NULL,
  `tenbs` varchar(100) DEFAULT NULL,
  `makhoa` varchar(100) DEFAULT NULL,
  `sdt` decimal(10,0) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bacsi`
--

INSERT INTO `bacsi` (`mabs`, `tenbs`, `makhoa`, `sdt`, `matkhau`, `diachi`) VALUES
('BS1', 'THÚY MÍA', 'K01', '1234', '1234', 'Hà Nội'),
('BS2', 'MINH', 'K01', '1354345323', '12345', 'Nam Định'),
('BS3', 'Trần Thị Thúy', 'K02', '327333167', '161001', 'Hà Nam'),
('BS4', 'HUY', 'K02', '5867565', '1234', 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benhnhan`
--

CREATE TABLE `benhnhan` (
  `mabn` varchar(100) NOT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `tenbn` varchar(100) DEFAULT NULL,
  `gioitinh` bit(1) DEFAULT NULL,
  `ngaysinh` datetime DEFAULT NULL,
  `doituong` varchar(100) DEFAULT NULL,
  `sothebhyt` varchar(100) DEFAULT NULL,
  `thoihanthe` datetime DEFAULT NULL,
  `tennguoinha` varchar(100) DEFAULT NULL,
  `stdnguoinha` varchar(100) DEFAULT NULL,
  `trangthai` varchar(100) DEFAULT NULL,
  `bacsiphutrach` varchar(100) DEFAULT NULL,
  `ngaynhapvien` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `benhnhan`
--

INSERT INTO `benhnhan` (`mabn`, `matkhau`, `tenbn`, `gioitinh`, `ngaysinh`, `doituong`, `sothebhyt`, `thoihanthe`, `tennguoinha`, `stdnguoinha`, `trangthai`, `bacsiphutrach`, `ngaynhapvien`) VALUES
('BN1', '1234', 'Nam', b'1', '2022-03-02 11:08:09', 'có bảo hiểm', '57654334', '0000-00-00 00:00:00', 'Minh', '654433', 'yếu', 'BS1', '2022-03-02 11:08:09'),
('BN2', '5565', 'Định', b'0', '2022-03-02 11:10:43', 'không bảo hiểm', '74543322', '2022-03-02 11:10:43', 'Hà', '745543', 'ho', 'BS2', '2022-03-02 11:10:44'),
('BN3', '6545', 'Thu', b'0', '2022-03-02 11:11:57', 'bảo hiểm y tế', '75433', '2022-03-02 11:11:57', 'Thụ', '745434', 'đau đầu', 'BS3', '2022-03-02 11:11:57'),
('BN4', '1111', 'Trung Kiên', b'1', '1991-06-23 00:00:00', 'có BHYT', '564826683', '2024-06-23 00:00:00', 'Loan', '063276871', 'bình thuong', 'BS1', '2022-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chisoxn`
--

CREATE TABLE `chisoxn` (
  `mabn` varchar(100) NOT NULL,
  `huyetap` varchar(100) DEFAULT NULL,
  `nhiptim` varchar(100) DEFAULT NULL,
  `nhommau` varchar(100) DEFAULT NULL,
  `ngayxetnghiem` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chisoxn`
--

INSERT INTO `chisoxn` (`mabn`, `huyetap`, `nhiptim`, `nhommau`, `ngayxetnghiem`) VALUES
('BN1 ', '120', '130', 'B', '2022-03-05 09:43:34'),
('BN2 ', '90', '80', 'A', '2022-03-05 11:24:27'),
('BN2 ', '120', '90', 'A', '2022-03-05 22:56:47'),
('BN3 ', '90', '90', 'B', '2022-03-05 11:24:51'),
('BN4 ', '120', '90', 'A', '2022-03-13 18:17:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dieutri`
--

CREATE TABLE `dieutri` (
  `mabn` varchar(100) NOT NULL,
  `benhchinh` varchar(100) NOT NULL,
  `huongdieutri` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dieutri`
--

INSERT INTO `dieutri` (`mabn`, `benhchinh`, `huongdieutri`) VALUES
('BN1', 'Ung thư Phổi', 'Giai đoạn 1: Phẫu thuật cắt bỏ một phần phổi, có thể hóa trị nếu bệnh có nguy cơ tái phát cao.\r\nGiai đoạn 2: Phẫu thuật để loại bỏ một phần hoặc toàn bộ lá phổi, kèm hóa trị để hạn chế tái phát khối u'),
('BN2', 'Ung Thư Đại Tràng', 'Phẫu thuật+ Xạ Trị'),
('BN4', 'ung thư phổi', 'xạ trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donthuoc`
--

CREATE TABLE `donthuoc` (
  `madonthuoc` varchar(100) NOT NULL,
  `mabn` varchar(100) NOT NULL,
  `ngaybatdau` datetime DEFAULT NULL,
  `ngayketthuc` datetime DEFAULT NULL,
  `thongtindonthuoc` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donthuoc`
--

INSERT INTO `donthuoc` (`madonthuoc`, `mabn`, `ngaybatdau`, `ngayketthuc`, `thongtindonthuoc`) VALUES
('1', 'BN1', '2022-03-06 13:55:49', '2022-03-06 13:55:49', 'Paracetamol 500mg Ngày 2 Viên Sáng tối'),
('2', 'BN2', '2020-03-12 19:56:28', '2022-03-06 13:56:28', 'Amoxicillin 500mg Ngày 2 Viên sáng tối'),
('DT07', 'BN4', '2022-02-02 00:00:00', '2022-07-02 00:00:00', 'cisplatin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khambenh`
--

CREATE TABLE `khambenh` (
  `mabn` varchar(100) NOT NULL,
  `makhoakham` varchar(100) NOT NULL,
  `ketquakham` varchar(100) DEFAULT NULL,
  `ngaykham` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khambenh`
--

INSERT INTO `khambenh` (`mabn`, `makhoakham`, `ketquakham`, `ngaykham`) VALUES
('BN1', 'K01', 'ung thư phổi', '2022-03-01 00:00:00'),
('BN2', 'K01', 'đau đầu', '2022-02-01 00:00:00'),
('BN2', 'K01', 'dương tính covid19', '2022-02-27 00:00:00'),
('BN3', 'K01', 'Chệch khớp tay', '2022-02-01 00:00:00'),
('BN4', 'K01', 'ung thư phổi', '2022-01-28 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(100) NOT NULL,
  `tenkhoa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('K01', 'Tim mạch'),
('K02', 'Cấp cứu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `letan`
--

CREATE TABLE `letan` (
  `maletan` varchar(100) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `gioitinh` bit(1) DEFAULT NULL,
  `sdt` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `letan`
--

INSERT INTO `letan` (`maletan`, `ten`, `matkhau`, `gioitinh`, `sdt`) VALUES
('LT2', 'Hằng', '123456', b'1', '567566');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lydovaovien`
--

CREATE TABLE `lydovaovien` (
  `mabn` varchar(100) NOT NULL,
  `ngaykhaibao` datetime NOT NULL,
  `lydovaovien` varchar(100) DEFAULT NULL,
  `quatrinhbenhly` varchar(100) DEFAULT NULL,
  `tieusu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lydovaovien`
--

INSERT INTO `lydovaovien` (`mabn`, `ngaykhaibao`, `lydovaovien`, `quatrinhbenhly`, `tieusu`) VALUES
('BN1', '2022-01-01 00:00:00', 'khó thở', 'bình thường', 'bình thường'),
('BN2', '2022-03-04 17:21:57', 'HO', 'COVID', 'GAN'),
('BN3', '2022-03-04 17:22:20', 'ĐAU ĐẦU', 'khó thở', 'phổi'),
('BN4', '2020-01-28 00:00:00', 'tức ngực, khó thở', 'khó thở', 'sức khỏe bình thường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yta`
--

CREATE TABLE `yta` (
  `mayta` varchar(100) NOT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `ngaysinh` datetime DEFAULT NULL,
  `gioitinh` bit(1) DEFAULT NULL,
  `std` decimal(10,0) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `diachi` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `yta`
--

INSERT INTO `yta` (`mayta`, `ten`, `ngaysinh`, `gioitinh`, `std`, `matkhau`, `diachi`) VALUES
('YT1', 'Hoan', '2002-03-02 00:00:00', b'0', '123456', '1234', 'Hà Nội'),
('YT2', 'NAM', '2222-11-11 00:00:00', b'0', '3273331675', '1234', NULL),
('YT3', 'dfgef', '0111-11-11 00:00:00', b'1', '74545', '12345', NULL),
('YT5', 'retgere', '0045-04-22 00:00:00', b'1', '564445', '54645', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`tendangnhap`);

--
-- Chỉ mục cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`mabs`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`mabn`),
  ADD KEY `bacsiphutrach` (`bacsiphutrach`);

--
-- Chỉ mục cho bảng `chisoxn`
--
ALTER TABLE `chisoxn`
  ADD PRIMARY KEY (`mabn`,`ngayxetnghiem`);

--
-- Chỉ mục cho bảng `dieutri`
--
ALTER TABLE `dieutri`
  ADD PRIMARY KEY (`mabn`,`benhchinh`);

--
-- Chỉ mục cho bảng `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD PRIMARY KEY (`madonthuoc`,`mabn`),
  ADD KEY `mabn` (`mabn`);

--
-- Chỉ mục cho bảng `khambenh`
--
ALTER TABLE `khambenh`
  ADD PRIMARY KEY (`mabn`,`makhoakham`,`ngaykham`),
  ADD KEY `makhoakham` (`makhoakham`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `letan`
--
ALTER TABLE `letan`
  ADD PRIMARY KEY (`maletan`);

--
-- Chỉ mục cho bảng `lydovaovien`
--
ALTER TABLE `lydovaovien`
  ADD PRIMARY KEY (`mabn`,`ngaykhaibao`);

--
-- Chỉ mục cho bảng `yta`
--
ALTER TABLE `yta`
  ADD PRIMARY KEY (`mayta`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD CONSTRAINT `bacsi_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD CONSTRAINT `benhnhan_ibfk_1` FOREIGN KEY (`bacsiphutrach`) REFERENCES `bacsi` (`mabs`);

--
-- Các ràng buộc cho bảng `chisoxn`
--
ALTER TABLE `chisoxn`
  ADD CONSTRAINT `chisoxn_ibfk_1` FOREIGN KEY (`mabn`) REFERENCES `benhnhan` (`mabn`);

--
-- Các ràng buộc cho bảng `dieutri`
--
ALTER TABLE `dieutri`
  ADD CONSTRAINT `dieutri_ibfk_1` FOREIGN KEY (`mabn`) REFERENCES `benhnhan` (`mabn`);

--
-- Các ràng buộc cho bảng `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD CONSTRAINT `donthuoc_ibfk_1` FOREIGN KEY (`mabn`) REFERENCES `benhnhan` (`mabn`);

--
-- Các ràng buộc cho bảng `khambenh`
--
ALTER TABLE `khambenh`
  ADD CONSTRAINT `khambenh_ibfk_1` FOREIGN KEY (`mabn`) REFERENCES `benhnhan` (`mabn`),
  ADD CONSTRAINT `khambenh_ibfk_2` FOREIGN KEY (`makhoakham`) REFERENCES `khoa` (`makhoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
