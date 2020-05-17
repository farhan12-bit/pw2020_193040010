-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 10:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040010`
--

-- --------------------------------------------------------

--
-- Table structure for table `apparel`
--

CREATE TABLE `apparel` (
  `id` int(11) NOT NULL,
  `Nama_Apparel` char(50) DEFAULT NULL,
  `bahan` char(11) DEFAULT NULL,
  `asal_provinsi` char(50) DEFAULT NULL,
  `Gambar` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apparel`
--

INSERT INTO `apparel` (`id`, `Nama_Apparel`, `bahan`, `asal_provinsi`, `Gambar`) VALUES
(1, 'ulee balang', 'sutra', 'nanggroe aceh darussalam', 'ACEH.jpg'),
(2, 'Safari', 'sutra', 'Bali', 'BALI.jpg'),
(3, 'Paksian', 'sutra', 'Bangka Belitung', 'BANGKA BELITUNG.jpg'),
(4, 'Betawi', 'sutra', 'DKI Jakarta', 'JAKARTA.jpg'),
(5, 'Kebaya', 'Beludru', 'Jawa Barat', 'JAWA BARAT.jpg'),
(6, 'Tulang Bawang', 'Tapis', 'Lampung', 'LAMPUNG.jpg'),
(7, 'Melayu', 'Sutra', 'Riau', 'RIAU.jpg'),
(8, 'Aesan Gede', 'Sutra', 'Sumatra Selatan', 'SUMATRA SELATAN.jpg'),
(9, 'Ulos', 'Sutra', 'Sumatra Utara', 'SUMATRA.jpg'),
(10, 'Kesatrian', 'Beludru', 'D.I Yogyakarta', 'YOGYAKARTA.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
