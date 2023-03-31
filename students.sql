-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2023 lúc 07:49 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `students`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`name`, `email`, `phone`) VALUES
('vuong', 'vuongn123456@gmail.com', 359102898),
('3131', '1231', 0),
('vuong2', '035980155', 0),
('vuong2', '035980155', 0),
('vuong3', '0359102898', 0),
('vuong3', '0359102898', 0),
('vuong4', '0444', 0),
('vuong4', '0444', 0),
('vuongn123456', '0359102898', 0),
('vuongn123456', '0359102898', 0),
('vuongn123456', '0359102898', 0),
('vuongn123456', 'vuongn6800@gmail.com', 359102898),
('vuongn123456', 'vuongn6800@gmail.com', 359102898),
('vuongn123456', 'linhchi168201@gmail.com', 989789988),
('vuongn123456', 'vuongn6800@gmail.com', 359102898),
('vuongn123456', 'vuongn6800@gmail.com', 359102898),
('vuongn123456122222222', 'vuongn6800@gmail.com', 359102898),
('vuongn123456111111111', 'vuongn6800@gmail.com', 359102898);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
