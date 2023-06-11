-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2023 lúc 03:41 PM
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
-- Cơ sở dữ liệu: `trms`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dulieu` varchar(255) DEFAULT NULL,
  `name_teacher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id`, `name`, `dulieu`, `name_teacher`) VALUES
(1, 'Quang Sang', 'Thầy rất có tâm trong công tác giảng dạy và tận tâm sữa lỗi cho mọi người nếu sai phạm, thầy chấm điểm hơi dễ=))', 'Trần Bá Hộ'),
(2, 'Công Danh', 'Thầy dễ thương lắm nha mn, chấm điểm cũng dễ=))', 'Trần Bá Hộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lab_asm`
--

CREATE TABLE `lab_asm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `baitap` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `tailieu` varchar(255) NOT NULL,
  `dateEdit` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lab_asm`
--

INSERT INTO `lab_asm` (`id`, `name`, `ghichu`, `baitap`, `mota`, `tailieu`, `dateEdit`) VALUES
(36, 'Kĩ năng học tập - SKI101', 'ASM', 'ASM', 'Kĩ năng học tập', 'https://drive.google.com/uc?export=download&id=19qzCiiISglRSXoG2_JMQmIR1kYBSyeeG', '2023-06-07 21:36:38'),
(37, 'Kĩ năng học tập - SKI101', 'Lab', 'Syllabus', 'Kĩ năng học tập', 'https://drive.google.com/uc?export=download&id=1nQCa3n8c1uVtsShtV5MSwcchFZTeA86s', '2023-06-07 21:36:38'),
(38, 'Nhập môn lập trình - COM108	', 'Lab', 'Lab1', 'Nhập môn lập trình', 'http://surl.li/htocj', '2023-06-07 21:36:38'),
(39, 'Nhập môn lập trình - COM108	', 'Lab', 'Lab2', 'Nhập môn lập trình', 'http://surl.li/htocu', '2023-06-07 21:36:38'),
(40, 'Nhập môn lập trình - COM108	', 'Lab', 'Lab3', 'Nhập môn lập trình', 'http://surl.li/htocw', '2023-06-07 21:36:38'),
(41, 'Nhập môn lập trình - COM108	', 'Lab', 'Lab4', 'Nhập môn lập trình', 'http://surl.li/htodb', '2023-06-07 21:36:38'),
(42, 'Nhập môn lập trình - COM108	', 'Lab', 'Lab5', 'Nhập môn lập trình', 'http://surl.li/htodc', '2023-06-07 21:36:38'),
(43, 'Nhập môn lập trình - COM108	', 'Lab', 'Lab6', 'Nhập môn lập trình', 'http://surl.li/htodd', '2023-06-07 21:36:38'),
(44, 'Nhập môn lập trình - COM108	', 'Lab', 'Lab7', 'Nhập môn lập trình', 'http://surl.li/htodf', '2023-06-07 21:36:38'),
(45, 'Nhập môn lập trình - COM108	', 'Lab', 'Lab8', 'Nhập môn lập trình', 'http://surl.li/htodi', '2023-06-07 21:36:38'),
(46, 'Nhập môn lập trình - COM108	', 'ASM', 'ASM', 'Nhập môn lập trình', 'http://surl.li/htodk', '2023-06-07 21:36:38'),
(47, 'Tin học cơ sở - COM101', 'Lab', 'Lab1', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=1DUZowTgZUo5QD4niySIP-9E0txjqGdE2', '2023-06-07 21:36:38'),
(48, 'Tin học cơ sở - COM101', 'Lab', 'Lab2', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=1f4OLHr2J_UCrn7R5VH4dWxwp4PCwmbgT', '2023-06-07 21:36:38'),
(49, 'Tin học cơ sở - COM101', 'Lab', 'Lab3', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=1UTcZyrLCdF8blxoOdWb0Kx_Nhb4S_qUR', '2023-06-07 21:36:38'),
(50, 'Tin học cơ sở - COM101', 'Lab', 'Lab4', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=1Mp25LuCwxawBvArxMIjP6db0sT2Hc72V', '2023-06-07 21:36:38'),
(51, 'Tin học cơ sở - COM101', 'Lab', 'Lab5', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=1rByeRepgtrjupCt24MhxFhhed5lH1ZCf', '2023-06-07 21:36:38'),
(52, 'Tin học cơ sở - COM101', 'Lab', 'Lab6', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=1_CKFkBtgKUNBhtmofBn4LNdsON-RNB6o', '2023-06-07 21:36:38'),
(53, 'Tin học cơ sở - COM101', 'Lab', 'Lab7', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=1zRvOFDiefGaiOIFb3t1Rbf268bqzg-E7', '2023-06-07 21:36:38'),
(54, 'Tin học cơ sở - COM101', 'Lab', 'Lab8', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=1_iyr5c-VAVhqa4WW4fo45YLFzCXFBTVo', '2023-06-07 21:36:38'),
(55, 'Tin học cơ sở - COM101', 'ASM', 'ASM', 'Tin học cơ sở', 'https://drive.google.com/uc?export=download&id=11_Py5QuHGc8WGTJ_aoubz8e0fdyEfGqV', '2023-06-07 21:36:38'),
(56, 'Tin học - COM107', 'Lab', 'Lab', 'Tin học', '', '2023-06-07 21:36:38'),
(57, 'Dự án 1 - PRO101', 'ASM', 'ASM', 'PRO1014_Du an1 (TKW)_Guide.pdf', 'https://drive.google.com/uc?export=download&id=1N29l8tK4FIbh0AbdbF6ewOZNWHHUvW4Y', '2023-06-07 21:36:38'),
(58, 'Dự án 1 - PRO101', 'ASM', 'ASM', 'PRO1014_Du an1 (TKW)_Presentation.pptx', 'https://drive.google.com/uc?export=download&id=1qCBF3JbbG55LssaHL83JA41H4r_7_5dE', '2023-06-07 21:36:38'),
(59, 'Dự án 1 - PRO101', 'ASM', 'ASM', 'PRO1014_Du an1 (TKW)_Project document.doc', 'https://drive.google.com/uc?export=download&id=1Rk6K-ehp9lLiVYF5YFKrYXIp4LyXXL3g', '2023-06-07 21:36:38'),
(60, 'Dự án 1 - PRO101', 'ASM', 'ASM', 'PRO1014 - Du an 1 (TKTW) - Syllabus - SU22.xls', 'https://drive.google.com/uc?export=download&id=13F6l4dHw0bZfvX_1XRjTDFUFndXkPiUc', '2023-06-07 21:36:38'),
(61, 'Lập trình Java 1 - MOB101', 'Lab', 'Lab1', 'Lập trình Java 1', 'https://drive.google.com/uc?export=download&id=1tqmv9ov2c3MJJoNAeaVR11sYqrRcamAW', '2023-06-07 21:36:38'),
(62, 'Lập trình Java 1 - MOB101', 'Lab', 'Lab2', 'Lập trình java 1', 'https://drive.google.com/uc?export=download&id=13fd50VHOclCKZTu0J2fGl1WQTfp849dt', '2023-06-07 21:36:38'),
(63, 'Lập trình Java 1 - MOB101', 'Lab', 'Lab 3', 'Lập trình java 1', 'https://drive.google.com/uc?export=download&id=1hna-tfmalcfs7M-pXrgant0BHBXdT-37', '2023-06-07 21:36:38'),
(64, 'Lập trình Java 1 - MOB101', 'Lab', 'Lab 4', 'Lập trình java 1', 'https://drive.google.com/uc?export=download&id=1hvpmJkbtDSjJMjcqojfEEqR7qpCNNMv7', '2023-06-07 21:36:38'),
(65, 'Lập trình Java 1 - MOB101', 'Lab', 'Lab 5', 'Lập trình java 1', 'https://drive.google.com/uc?export=download&id=1JI9u8e1prKAmPakVyTunTYiWH1FjF6JI', '2023-06-07 21:36:38'),
(66, 'Lập trình Java 1 - MOB101', 'Lab', 'Lab 6', 'Lập trình java 1', 'https://drive.google.com/uc?export=download&id=1nz66HSydEXGc0avKp3iGgxT3McxBpSI-', '2023-06-07 21:36:38'),
(67, 'Lập trình Java 1 - MOB101', 'Lab', 'Lab 7', 'Lập trình java 1', 'https://drive.google.com/uc?export=download&id=1TsiZdcP7gXv1ccvfKOnkEyna8oJBYrM5', '2023-06-07 21:36:38'),
(68, 'Lập trình Java 1 - MOB101', 'Lab', 'Lab 8', 'Lập trình java 1', 'https://drive.google.com/uc?export=download&id=1_AbdMTrDON46oQ73M73YDss9QR-Yjdqu', '2023-06-07 21:36:38'),
(69, 'Cơ sở dữ liệu - COM201', 'Lab', 'Lab1', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=13qagd0_TGoYNw9FhSbQ2A6W0A72upXcP', '2023-06-07 21:36:38'),
(70, 'Cơ sở dữ liệu - COM201', 'Lab', 'Lab2', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=1v-xqHAIqFJQomzPhWv-hbpRIRuakVSI6', '2023-06-07 21:36:38'),
(71, 'Cơ sở dữ liệu - COM201', 'Lab', 'Lab3', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=1-jObGSLNISxyE0ObU2cS73sGy4S-J6bX', '2023-06-07 21:36:38'),
(72, 'Cơ sở dữ liệu - COM201', 'Lab', 'Lab4', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=1j7AFIQ9PuUDmyHU4qgmysWnga5wGjn-D', '2023-06-07 21:36:38'),
(73, 'Cơ sở dữ liệu - COM201', 'Lab', 'Lab5', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=1KEMgCoZPNkxt7e-tCa_mYAkOLl5kMkSG', '2023-06-07 21:36:38'),
(74, 'Cơ sở dữ liệu - COM201', 'Lab', 'Lab6', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=1FjJ8Qh3z0scPvqQtveD2VFtpEJnYpIYl', '2023-06-07 21:36:38'),
(75, 'Cơ sở dữ liệu - COM201', 'Lab', 'Lab7', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=1IFpBfmEQhyXXHYi-7eKAr0xdPSR-HH5Q', '2023-06-07 21:36:38'),
(76, 'Cơ sở dữ liệu - COM201', 'Lab', 'Lab8', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=1AaETzhf59-lxeXHmW4tzbaLDA3__9Umq', '2023-06-07 21:36:38'),
(77, 'Cơ sở dữ liệu - COM201', 'ASM', 'ASM', 'Cơ sở dữ liệu', 'https://drive.google.com/uc?export=download&id=1Ige_TU0IK_XTU1Qs-rbBhkfJdCfkgjjq', '2023-06-07 21:36:38'),
(78, 'Front-End Frameworks - WEB207', 'ASM', 'ASM', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=1tbSnn7Zju7rDZWW6pNMM-1aUSZcLOZfv', '2023-06-07 21:36:38'),
(79, 'Front-End Frameworks - WEB207', 'Lab', 'Lab1', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=1SnYyBOh754CwupuBEBDmy2tzfMzY2kZX', '2023-06-07 21:36:38'),
(80, 'Front-End Frameworks - WEB207', 'Lab', 'Lab2', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=1wkx8rUA39cz3o7FYgHkB5LI2oElj59Qc', '2023-06-07 21:36:38'),
(81, 'Front-End Frameworks - WEB207', 'Lab', 'Lab3', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=14A4xon1MSGi0nQqk-AKYJwaWHP9Iq8rl', '2023-06-07 21:36:38'),
(82, 'Front-End Frameworks - WEB207', 'Lab', 'Lab4', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=1Xl9vJYv0TsT99u3tGzJMqn6OWr4utj3e', '2023-06-07 21:36:38'),
(83, 'Front-End Frameworks - WEB207', 'Lab', 'Lab5', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=15Yv6s2EN1jCmTEBxPj_XElV7JQfqcboi', '2023-06-07 21:36:38'),
(84, 'Front-End Frameworks - WEB207', 'Lab', 'Lab6', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=1jtqJaMC4C1GhR-NR0XCNmmfAuJB2lpyq', '2023-06-07 21:36:38'),
(85, 'Front-End Frameworks - WEB207', 'Lab', 'Lab7', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=1u4V2y2zOlrY1rLwqx1F5gY4tDjowRKln', '2023-06-07 21:36:38'),
(86, 'Front-End Frameworks - WEB207', 'Lab', 'Lab8', 'Front-End Frameworks', 'https://drive.google.com/uc?export=download&id=1WqjYDZRJPT8HEDoUenHM4qm45QsJiIYb', '2023-06-07 21:36:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `name` varchar(255) NOT NULL,
  `ki` varchar(11) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tailieu`
--

INSERT INTO `tailieu` (`name`, `ki`, `mota`, `CreationDate`) VALUES
('Chính trị - VIE101', 'Kì 7', 'Chính trị - VIE101', '2023-06-07 20:23:27'),
('Cơ sở dữ liệu - COM201', 'Kì 2', 'Cơ sở dữ liệu - COM201', '2023-06-02 16:05:14'),
('Dự án 1 - PRO101', 'Kì 4', 'Dự án 1 - Thiết kế trang web', '2023-06-02 15:54:39'),
('Dự án mẫu - WEB204', 'Kì 4', 'Dự án mẫu - WEB204', '2023-06-07 20:32:38'),
('Dự án tốt nghiệp - PRO224', 'Kì 7', 'Dự án tốt nghiệp (TKTW-PHP Framework)', '2023-06-07 20:34:19'),
('Front-End Frameworks - WEB207', 'Kì 5', 'Front-End Frameworks', '2023-06-02 18:00:19'),
('Kĩ năng học tập - SKI101', 'Kì 1', 'Kĩ năng học tập', '2023-06-01 17:24:03'),
('Kiểm thử cơ bản - SOF303', 'Kì 5', 'Kiểm thử cơ bản - SOF303', '2023-06-07 20:30:55'),
('Kỹ thuật trình bày nội dung Web - WEB202', 'Kì 3', 'Kỹ thuật trình bày nội dung Web - WEB202', '2023-06-07 20:28:27'),
('Lập trình cơ sở với JavaScript - WEB104', 'Kì 2', 'Lập trình cơ sở với JavaScript - WEB104', '2023-06-02 16:05:14'),
('Lập trình Java 1 - MOB101', 'Kì 2', 'Lập trình Java 1', '2023-06-02 16:03:44'),
('Lập trình JavaScript nâng cao - WEB206', 'Kì 5', 'Lập trình JavaScript nâng cao', '2023-06-02 18:12:45'),
('Lập trình PHP 2- WEB301', 'Kì 5', 'Lập trình PHP 2- WEB301', '2023-06-07 20:30:55'),
('Lập trình PHP 3 - WEB401', 'Kì 6', 'Lập trình PHP 3 - WEB401', '2023-06-07 20:24:10'),
('Marketing trên Internet - WEB205', 'Kì 3', 'Marketing trên Internet - WEB205', '2023-06-07 20:29:37'),
('Nhập môn lập trình - COM108	', 'Kì 1', 'Nhập môn lập trình', '2023-06-01 17:24:03'),
('Pháp luật - VIE102', 'Kì 7', 'Pháp luật - VIE102', '2023-06-07 20:43:36'),
('Phát triển cá nhân 2 - PDP201', 'Kì 6', 'Phát triển cá nhân 2 - PDP201', '2023-06-07 20:24:45'),
('Quản trị website - WEB102', 'Kì 4', 'Quản trị website - WEB102', '2023-06-07 20:33:16'),
('Thiết kế Web với HTML5&CSS3 - WEB302', 'Kì 3', 'Thiết kế Web với HTML5&CSS3 - WEB302', '2023-06-07 20:29:37'),
('Thực tập tốt nghiệp - PRO116', 'Kì 7', 'Thực tập tốt nghiệp - PRO116', '2023-06-07 21:17:12'),
('Tiếng Anh 1.1 - ENT111', 'Kì 1', 'Tiếng Anh 1.1 - ENT111', '2023-06-07 20:27:46'),
('Tiếng Anh 1.2 - ENT121', 'Kì 2', 'Tiếng Anh 1.2 - ENT121', '2023-06-07 20:27:46'),
('Tiếng Anh 2.1 - ENT211', 'Kì 3', 'Tiếng Anh 2.1 - ENT211', '2023-06-07 20:26:52'),
('Tiếng Anh 2.2 - ENT221', 'Kì 4', 'Tiếng Anh 2.2 - ENT221', '2023-06-07 20:26:11'),
('Tin học - COM107', 'Kì 1', 'Tin học - COM107', '2023-06-01 17:24:03'),
('Tin học cơ sở - COM101', 'Kì 1', 'Tin học cơ sở', '2023-06-01 17:24:03'),
('Xây dựng trang Web 2 - WEB203', 'Kì 6', 'Xây dựng trang Web 2 - WEB203', '2023-06-07 20:25:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Quang Sang', 'admin', 352767274, 'quang.sang1530@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2019-10-04 06:10:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `ID` int(10) NOT NULL,
  `Subject` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblsubjects`
--

INSERT INTO `tblsubjects` (`ID`, `Subject`, `period`, `CreationDate`) VALUES
(15, 'Kỹ năng học tập', 'Kì 1', '2023-05-29 16:58:28'),
(16, 'Nhập môn lập trình	', 'Kì 1', '2023-05-29 16:58:40'),
(17, 'Tin học	', 'Kì 1', '2023-05-29 17:24:12'),
(18, 'Tin học cơ sở', 'Kì 1', '2023-05-29 17:24:25'),
(19, 'Tiếng Anh 1.1	', 'Kì 1', '2023-05-29 17:24:34'),
(20, 'Xây dựng trang Web', 'Kì 2', '2023-05-29 17:24:48'),
(21, 'Lập trình Java 1', 'Kì 2', '2023-05-29 17:24:58'),
(22, 'Cơ sở dữ liệu', 'Kì 2', '2023-05-29 17:25:08'),
(23, 'Lập trình cơ sở với JavaScript	', 'Kì 2', '2023-05-29 17:25:16'),
(24, 'Tiếng Anh 1.2', 'Kì 2', '2023-05-29 17:25:26'),
(25, 'Kỹ thuật trình bày nội dung Web', 'Kì 3', '2023-05-29 17:25:57'),
(26, 'Lập trình PHP 1', 'Kì 3', '2023-05-29 17:26:06'),
(27, 'Marketing trên Internet', 'Kì 3', '2023-05-29 17:26:19'),
(28, 'Thiết kế Web với HTML5&CSS3', 'Kì 3', '2023-05-29 17:26:27'),
(29, 'Tiếng Anh 2.1', 'Kì 3', '2023-05-29 17:26:36'),
(30, 'Dự án mẫu (ngành Thiết kế Web)', 'Kì 4', '2023-05-29 17:26:43'),
(31, 'Quản trị website', 'Kì 4', '2023-05-29 17:26:52'),
(32, 'Dự án 1 (TKTW)', 'Kì 4', '2023-05-29 17:27:01'),
(33, 'Tiếng Anh 2.2', 'Kì 4', '2023-05-29 17:27:09'),
(34, 'Lập trình JavaScript nâng cao', 'Kì 5', '2023-05-29 17:27:23'),
(35, 'Lập trình PHP 2', 'Kì 5', '2023-05-29 17:27:36'),
(36, 'Front-End Frameworks', 'Kì 5', '2023-05-29 17:27:46'),
(37, 'Kiểm thử cơ bản', 'Kì 5', '2023-05-29 17:27:54'),
(38, 'Pháp luật', 'Kì 5', '2023-05-29 17:28:03'),
(39, 'Xây dựng trang Web 2', 'Kì 6', '2023-05-29 17:28:10'),
(40, 'Phát triển cá nhân 2', 'Kì 6', '2023-05-29 17:28:28'),
(41, 'Lập trình PHP 3', 'Kì 6', '2023-05-29 17:28:43'),
(42, 'Thực tập tốt nghiệp (TKTW)', 'Kì 7', '2023-05-29 17:28:52'),
(43, 'Giáo dục thể chất - Vovinam', 'Kì 4', '2023-05-29 17:29:41'),
(44, 'Giáo dục quốc phòng', 'Kì 1', '2023-05-29 17:29:58'),
(45, 'Kỹ năng học tập', '1', '2023-06-07 20:49:51'),
(46, 'c', '1', '2023-06-07 20:50:27'),
(47, 'dd', '2', '2023-06-07 20:51:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblteacher`
--

CREATE TABLE `tblteacher` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Picture` varchar(200) NOT NULL,
  `Email` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Qualifications` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `danhgia` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `mota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `Name`, `Picture`, `Email`, `Qualifications`, `danhgia`, `youtube`, `web`, `mota`, `RegDate`) VALUES
(1, 'Trần Bá Hộ', 'tbh.jpg', 'tranbaho@gmail.com', 'Giảng viên bộ môn CNTT và Đồ họa', '4.5', 'https://youtube.com/channel/UCiK5UYcfkgcnhlnYctNLKtQ?sub_confirmation=1', 'https://bahozone.com/', 'Là giảng viên bộ môn CNTT và Đồ họa tại FPT POLYTECHNIC Kênh Tổng Hợp Các Bài Học Từ Cơ Bản Đến Nâng Cao Liên Quan Đến Ngành Web (Thiết Kế Website Và Lập Trình)', '2019-10-07 07:37:08'),
(2, 'Thái Đình Lãm', 'tdl.png', 'LamTD9@fe.edu.vn', 'Giảng viên Kỹ năng FPT', '4', NULL, NULL, 'Là giảng viên bộ môn Phát triển cá nhân 2 - PDP201 tại trường cao đẳng FPT POLYTECHNIC, là một Thạc sĩ tâm lý học.', '2019-10-07 07:45:52'),
(6, 'Nguyễn Thanh Xuân', 'ntx.jpg', 'xuanntt15@fpt.edu.vn', 'Giảng viên Trường cao đẳng FPT POLYTECHNIC', '4.5', NULL, NULL, 'Xây dựng trang Web 2 - WEB203', '2023-06-08 18:40:09'),
(7, 'Nguyễn Văn Long', 'nvl.png', 'longnv36@fpt.edu.vn', 'Giảng viên BM CNTT', '4', 'https://www.youtube.com/@ThayLongWeb', 'https://longnv.name.vn/', 'Front-End Frameworks - WEB207', '2023-06-09 14:25:35'),
(8, 'Nguyễn Quang Hùng', 'nqh.jpg', 'hungnq77@fpt.edu.vn', 'Giảng viên CNTT', '3.5', NULL, NULL, 'Lập trình JavaScript nâng cao - WEB206', '2023-06-10 11:21:30'),
(9, 'Nguyễn Trí Định', 'koanh.jpg', 'DinhNT24@fe.edu.vn', 'Giảng viên CNTT', '4', NULL, NULL, NULL, '2023-06-10 11:23:56'),
(10, 'Mai Thanh Thảo', 'koanh.jpg', 'thaomt10@fpt.edu.vn', 'Giảng viên BM CNTT', '3.5', NULL, NULL, NULL, '2023-06-10 11:32:44'),
(11, 'Trần Thị Hường', 'tth.jpg', 'HuongTT43@fe.edu.vn', 'Giảng viên BM CNTT', '4', NULL, NULL, NULL, '2023-06-10 11:36:37'),
(12, 'Lâm Thành Nhân', 'koanh.jpg', 'Nhanlt28@fe.edu.vn', 'Giảng viên bộ môn cơ bản', '4', NULL, NULL, NULL, '2023-06-10 11:44:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_teacher` (`name_teacher`);

--
-- Chỉ mục cho bảng `lab_asm`
--
ALTER TABLE `lab_asm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Name` (`Name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lab_asm`
--
ALTER TABLE `lab_asm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`name_teacher`) REFERENCES `tblteacher` (`Name`);

--
-- Các ràng buộc cho bảng `lab_asm`
--
ALTER TABLE `lab_asm`
  ADD CONSTRAINT `lab_asm_ibfk_1` FOREIGN KEY (`name`) REFERENCES `tailieu` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
