-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 11, 2023 lúc 07:04 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `book`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_items`
--

CREATE TABLE `book_items` (
  `id_books` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_price` double NOT NULL,
  `book_type` text NOT NULL,
  `book_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `book_items`
--

INSERT INTO `book_items` (`id_books`, `book_name`, `book_price`, `book_type`, `book_image`) VALUES
(1, 'A man for all markets', 175, 'economic ', 'https://nhasachminhphong.com/wp-content/uploads/2022/10/nguoi-dan-ong-danh-bai-moi-thi-truong_optimized.jpg'),
(2, 'Tôi, Tương Lai Và Thế Giới', 65, 'economic ', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_2721.jpg'),
(3, 'Payback Time', 155, 'economic', 'https://nhasachminhphong.com/wp-content/uploads/2022/10/ngay-doi-no-pay-back-time_optimized.jpg'),
(4, 'Chết Vì Chứng Khoán ', 75, 'economic ', 'https://nhasachminhphong.com/wp-content/uploads/2022/10/chet-vi-chung-khoan_optimized.jpg'),
(20, 'Cha giàu cha nghèo', 39, 'economic', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/740581c5b16270610a6420654fee77d5-300x300.jpg'),
(21, 'First Things First', 65, 'economic', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/tu-duy-toi-uu.jpg'),
(22, 'Bí Mật Người Do Thái Dạy Con Làm Giàu', 45, 'economic', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/nguoi-do-thai-day-con-lam-giau.jpg'),
(23, 'Quốc Gia Khởi Nghiệp – Câu Chuyện Về Nền Kinh Tế Thần Kỳ Của Israel', 65, 'economic', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/quoc-gia-khoi-nghiep.u5102.d20170516.t160802.730280.jpg'),
(24, 'Thần Số Học: Thấu Hiểu Nhân Tâm', 45, 'economic', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/than-so-hoc-thau-hieu-nhan-tam.jpg'),
(25, 'Rich Habits – Thói Quen Thành Công Của Những Triệu Phú Tự Thân', 75, 'economic', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/thoi-quen-thanh-cong-cua-nhung-trieu-phu-tu-than.jpg'),
(26, 'Hành Trình Về Phương Đông', 45, 'Vietnamese book', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/hanh-trinh-ve-phuong-dong.jpg'),
(27, 'D. Trump', 45, 'English book', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/dung-bao-gio-bo-cuoc.jpg'),
(28, 'Cuốn Sách Hoàn Hảo Về Ngôn Ngữ Cơ Thể – Body Language', 98, 'psychology book', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/ngon-ngu-co-the-1.jpg'),
(29, 'Combo 7 Cuốn Siêu Trí Tuệ – Luyện Não Trong 1 Phút', 398, 'sách giáo khoa', 'https://nhasachminhphong.com/wp-content/uploads/2022/12/combo-sieu-tri-tue.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 2),
(7, 'admin123', '123', 1),
(10, 'user3 ', 'user3', 2),
(11, 'user4', '123456789', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book_items`
--
ALTER TABLE `book_items`
  ADD PRIMARY KEY (`id_books`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `book_items`
--
ALTER TABLE `book_items`
  MODIFY `id_books` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
