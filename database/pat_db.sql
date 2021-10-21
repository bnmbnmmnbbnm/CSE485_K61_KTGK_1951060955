-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 09:57 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pat_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `blood_type` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
(2, 'văn b', 'nguyễn', '2004-10-20', 'nam', '19001009', 'quangho@gmail.com', 177, 66, 'O', '2021-10-21 08:29:46', '0000-00-00 00:00:00'),
(3, 'văn a', 'nguyễn', '2004-10-20', 'nam', '19001009', 'quangho@gmail.com', 170, 60, 'O', '2021-10-21 09:55:28', '2021-10-21 09:55:28'),
(5, 'văn a', 'nguyễn', '2004-10-20', 'nam', '19001009', 'quangho@gmail.com', 170, 60, 'AB', '2021-10-21 09:54:43', '2021-10-21 09:54:43');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
