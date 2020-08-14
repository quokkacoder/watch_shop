-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 02, 2018 lúc 02:43 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sql_dongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietdonhang`
--

CREATE TABLE `tbl_chitietdonhang` (
  `id_ddh` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `thanhtien` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitietdonhang`
--

INSERT INTO `tbl_chitietdonhang` (`id_ddh`, `id_sanpham`, `soluong`, `thanhtien`) VALUES
(4, 1, 8, '40000'),
(4, 9, 6, '60000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dondathang`
--

CREATE TABLE `tbl_dondathang` (
  `id_ddh` int(11) NOT NULL,
  `id_nhanvien` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_trangthai` int(11) DEFAULT '1',
  `diachigiao` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `ngaygiao` date DEFAULT NULL,
  `tongtien` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dondathang`
--

INSERT INTO `tbl_dondathang` (`id_ddh`, `id_nhanvien`, `id_user`, `id_trangthai`, `diachigiao`, `ngaygiao`, `tongtien`) VALUES
(4, 109, 1707, 1, 'hn', '2017-12-20', '600000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gopy`
--

CREATE TABLE `tbl_gopy` (
  `id_gopy` int(11) NOT NULL,
  `hoten` varchar(30) COLLATE utf32_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_gopy`
--

INSERT INTO `tbl_gopy` (`id_gopy`, `hoten`, `noidung`) VALUES
(1, 'Xuan Thuy', 'Đồng hồ đẹp, cửa hàng nên nhập nhiều thêm sản phẩm'),
(2, 'huy sơn', 'thêm nhiều kiểu dáng hơn nữa'),
(3, 'huyngoc', 'đẹp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `id_nhanvien` int(11) NOT NULL,
  `hotennv` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(15) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`id_nhanvien`, `hotennv`, `ngaysinh`, `diachi`, `dienthoai`) VALUES
(100, 'van son', '1994-09-26', 'HN', '0988736472'),
(109, 'hyt', '1984-09-26', 'đa', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhasanxuat`
--

CREATE TABLE `tbl_nhasanxuat` (
  `id_NSX` int(11) NOT NULL,
  `ten_NSX` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `quocgia` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `thongtin` varchar(500) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhasanxuat`
--

INSERT INTO `tbl_nhasanxuat` (`id_NSX`, `ten_NSX`, `quocgia`, `thongtin`) VALUES
(1200, 'Orient', 'Nhật Bản', 'Orient là thương hiệu đồng hồ hàng đầu tại xứ sở \"Mặt Trời mọc\", nhắc đến Orient, dân chơi đồng hồ sẽ nghĩ ngay đến những sản phẩm sang trọng, đẳng cấp và được thiết kế từ những chất liệu vô cùng hoàn hảo, tinh tế. '),
(1201, 'Casio', 'Nhật Bản', 'là một công ty chế tạo thiết bị điện tử Nhật Bản được thành lập năm 1946, có trụ sở ở Tokyo, Nhật Bản.'),
(1202, 'Komono', 'Bỉ', 'Komono tập trung sản xuất những chiếc đồng hồ mang phong cách cổ điển bằng nguyên vật liệu và linh kiện chất lượng cao nhất.'),
(1203, 'Georg Jensen ', 'Thụy Sĩ', 'Georg Jensen đem đến cho bạn những chiếc đồng hồ tự động của Thụy Sỹ với từng chi tiết của chiếc đồng hồ đều rất tinh tế'),
(1204, 'Skagen', 'Mỹ', 'Skagen là một trong số ít công ty sở hữu thương hiệu đồng hồ thời trang do chính mình sản xuất mà không dựa vào bất kỳ nhà sản xuất nào khác.'),
(1205, 'Bulova', 'Mỹ', 'Thương hiệu được thành lập vào năm 1875 bởi Joseph Bulova, thương hiệu được người Mỹ ưa chuộng và biết đến nhiều hơn hẳn. Bulova có trụ sở đặt ở New York'),
(1206, 'Rolex', 'Anh', 'Hãng đã phát triển nhiều tính năng hiệu quả như khả năng chống bụi, chống thấm nước, thay đổi tự ngày tự động và còn rất nhiều tính năng khác nữa'),
(1207, 'Seiko', 'Nhật Bản', 'Thành lập năm 1881, với hơn 1 thế kỷ nỗ lực và phát triển, Seiko đã thể thể hiện mình là một thương hiệu đáng nể, tạo ra những bước đột phá trong ngành đồng hồ thế giới'),
(1208, 'Omega', 'Thụy Sĩ', 'Ông lớn Omega xuất thân từ Thụy Sĩ và trở thành một trong những nhãn hiệu đồng hồ \"quyền lực\" nhất từ trước đến giờ. Thậm chí, hiệp hội hàng không hoàng gia Anh đã chọn Omega làm hãng đồng hồ độc quyền cho họ từ năm 1917');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phanquyen`
--

CREATE TABLE `tbl_phanquyen` (
  `id_quyen` int(3) NOT NULL,
  `tenquyen` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phanquyen`
--

INSERT INTO `tbl_phanquyen` (`id_quyen`, `tenquyen`) VALUES
(1, 'Admin'),
(2, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `id_NSX` int(11) NOT NULL,
  `tensanpham` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `hinhanh` varchar(225) COLLATE utf32_unicode_ci DEFAULT NULL,
  `soluong` int(4) NOT NULL,
  `dongia` float(11,0) NOT NULL,
  `khuyenmai` int(11) DEFAULT NULL,
  `thongtinsp` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `baohanh` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `doituong` varchar(10) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `id_NSX`, `tensanpham`, `hinhanh`, `soluong`, `dongia`, `khuyenmai`, `thongtinsp`, `baohanh`, `doituong`) VALUES
(1, 1200, 'orCBO0106', 'orCBO0106.jpg', 10, 1200000, 70, 'sgdbfb', '12 tháng', 'nu'),
(9, 1200, 'orCBL001', 'orCBL001.jpg', 2, 0, 0, '', '12 tháng', 'doi'),
(14, 1200, 'orCBO0100', 'orCBO0100.jpg', 60, 300000, 0, '', '12 tháng', 'nam'),
(15, 1200, 'orSQC002B', 'orSQC002B.jpg', 50, 600000, 0, '', '6 tháng', 'doi'),
(17, 1200, 'orCZY001', 'orCZY001.jpg', 100, 200000, 0, '', '6 tháng', 'nu'),
(18, 1200, 'orFUN003', 'orFUN003.jpg', 60, 500000, 0, '', '6 tháng', 'nam'),
(19, 1200, 'orFQC1600', '0rFQC1600.jpg', 70, 600000, 20, '', '12 tháng', 'nu'),
(20, 1201, 'casio 3DF', 'ca3DF.jpg', 50, 300000, 20, '', '6 tháng', 'nam'),
(21, 1201, 'casio D1095', 'caD1095.jpg', 50, 500000, 0, '', '12 tháng', 'doi'),
(22, 1201, 'casio D100s', 'caD100s.jpg', 60, 350000, 0, '', '6 tháng', 'doi'),
(23, 1201, 'casioA195', 'caA159.jpg', 40, 600000, 10, '', '6 tháng', 'nam'),
(24, 1201, 'casioE1AV', 'caAE1AV.jpg', 100, 200000, 0, '', '6 tháng', 'nam'),
(25, 1201, 'casio CAD200h', 'caD200h.jpg', 80, 500000, 0, '', '6 tháng', 'doi'),
(26, 1201, 'casioD1095', 'caD1095.jpg', 50, 850000, 5, '', '12 tháng', 'doi'),
(27, 1201, 'casioNAE1A3', 'caNAE1A3.jpg', 50, 700000, 0, 'qưqre', '6 tháng', 'nam'),
(29, 1201, 'casioNE401', 'caNE401.jpg', 80, 400000, 0, '', '', 'nu'),
(30, 1201, 'casioD1130N', 'caD1130N.jpg', 100, 300000, 5, '', '6 tháng', 'doi'),
(31, 1201, 'casio BEM', 'caBEM.jpg', 50, 550000, 0, '', '6 tháng', 'nam'),
(34, 1202, 'komono1', 'orFUB002.jpg', 1, 1200000, 0, '', '', 'nu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_trangthai`
--

CREATE TABLE `tbl_trangthai` (
  `id_trangthai` int(11) NOT NULL,
  `trangthai` varchar(15) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_trangthai`
--

INSERT INTO `tbl_trangthai` (`id_trangthai`, `trangthai`) VALUES
(1, 'chưa thanh toán'),
(2, 'đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `id_quyen` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `pass` varchar(10) COLLATE utf32_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(15) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_quyen`, `hoten`, `user`, `pass`, `diachi`, `dienthoai`) VALUES
(1702, 2, 'Lương Anh Trường', 'anhtruong', '123456', 'Nghệ An', '01626783982'),
(1707, 1, 'Trinh Huy Ngoc', 'huyngoc', '123456', 'Thanh hoa', '0966593475'),
(1709, 1, 'Le Cong Minh', 'Congminh', '123456', 'Nghe An', '+84966283984');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD PRIMARY KEY (`id_ddh`,`id_sanpham`),
  ADD KEY `fk_sp_chitietddh` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_dondathang`
--
ALTER TABLE `tbl_dondathang`
  ADD PRIMARY KEY (`id_ddh`),
  ADD KEY `id_user` (`id_nhanvien`),
  ADD KEY `id_trangthai` (`id_trangthai`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Chỉ mục cho bảng `tbl_gopy`
--
ALTER TABLE `tbl_gopy`
  ADD PRIMARY KEY (`id_gopy`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`);

--
-- Chỉ mục cho bảng `tbl_nhasanxuat`
--
ALTER TABLE `tbl_nhasanxuat`
  ADD PRIMARY KEY (`id_NSX`);

--
-- Chỉ mục cho bảng `tbl_phanquyen`
--
ALTER TABLE `tbl_phanquyen`
  ADD PRIMARY KEY (`id_quyen`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_NSX` (`id_NSX`);

--
-- Chỉ mục cho bảng `tbl_trangthai`
--
ALTER TABLE `tbl_trangthai`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_quyen` (`id_quyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_dondathang`
--
ALTER TABLE `tbl_dondathang`
  MODIFY `id_ddh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tbl_gopy`
--
ALTER TABLE `tbl_gopy`
  MODIFY `id_gopy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id_nhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT cho bảng `tbl_nhasanxuat`
--
ALTER TABLE `tbl_nhasanxuat`
  MODIFY `id_NSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1209;
--
-- AUTO_INCREMENT cho bảng `tbl_phanquyen`
--
ALTER TABLE `tbl_phanquyen`
  MODIFY `id_quyen` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT cho bảng `tbl_trangthai`
--
ALTER TABLE `tbl_trangthai`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1710;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD CONSTRAINT `fk_ddh_chitietddh` FOREIGN KEY (`id_ddh`) REFERENCES `tbl_dondathang` (`id_ddh`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sp_chitietddh` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_dondathang`
--
ALTER TABLE `tbl_dondathang`
  ADD CONSTRAINT `fk_ddh_nhanvien` FOREIGN KEY (`id_nhanvien`) REFERENCES `tbl_nhanvien` (`id_nhanvien`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ddh_trangthai` FOREIGN KEY (`id_trangthai`) REFERENCES `tbl_trangthai` (`id_trangthai`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ddh_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `FK_sanpham_nhasanxuat` FOREIGN KEY (`id_NSX`) REFERENCES `tbl_nhasanxuat` (`id_NSX`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_user_phanquyen` FOREIGN KEY (`id_quyen`) REFERENCES `tbl_phanquyen` (`id_quyen`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
