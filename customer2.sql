-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 23, 2022 lúc 12:42 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `customer2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `game`
--

CREATE TABLE `game` (
  `ID` int(11) NOT NULL,
  `Game_name` varchar(255) NOT NULL,
  `Image` char(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `game`
--

INSERT INTO `game` (`ID`, `Game_name`, `Image`, `price`) VALUES
(1, 'minecraft', 'minecraft.jpg', 100),
(2, 'battlefield', 'battlefield.jpg', 90);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`id`, `Name`, `Password`) VALUES
(4, 'laocao', '202cb962ac59075b964b07152d234b70');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`ID`,`Game_name`);

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `game`
--
ALTER TABLE `game`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
