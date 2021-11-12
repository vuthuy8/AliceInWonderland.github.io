-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2021 at 02:09 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alice`
--
CREATE DATABASE IF NOT EXISTS `alice` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `alice`;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `ma_k` int(11) NOT NULL DEFAULT '0',
  `ten_k` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dia_chi` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `thanhtien` int(110) NOT NULL,
  PRIMARY KEY (`ma_k`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `ma_nv` int(11) NOT NULL,
  `ten_nv` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `chucvu` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ma_nv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `ma_sp` int(100) NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `loai_sp` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `anh_sp` char(50) NOT NULL,
  `gia_sp` double NOT NULL,
  `giamgia_sp` double NOT NULL,
  `khuyenmai_sp` int(100) NOT NULL,
  `ngay_sp` int(11) NOT NULL,
  PRIMARY KEY (`ma_sp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ten_sp`, `loai_sp`, `anh_sp`, `gia_sp`, `giamgia_sp`, `khuyenmai_sp`, `ngay_sp`) VALUES
(1, 'Tiểu Thư Axen ', 'Vantage', '1.jpg', 600, 500, 20, 25);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
