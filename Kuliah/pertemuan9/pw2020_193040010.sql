-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 01:36 PM
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
-- Database: `pw2020_193040010`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Muhamad Farhan Assiddiq', '193040010', '193040010muhamad@mail.unpas.ac.id', 'Teknik Informatika', 'farhan.jpg'),
(2, 'Muhammad Fauzan Kamal', '193040031', '193040031.m@mail.unpas.ac.id', 'Teknik Informatika', 'fauzan.jpg'),
(3, 'Lamhot Kristopher', '193040007', '193040007.lamhot@mail.unpas.ac.id', 'Teknik Infoematika', 'lamhot.jpg'),
(4, 'Sofyan Egi Lesmana', '193040025', '193040025@mail.unpas.ac.id', 'Teknik Informatika', 'sofyan.jpg'),
(5, 'Fahri Arliansyah', '193040011', '193040011.fahri@mail.unpas.ac.id', 'Teknik Informatika', 'fahri.jpg'),
(6, 'Aji Fattah Adriansyah Darajat', '193040012', '193040012.aji@mail.unpas.ac.id', 'Teknik Informatika', 'aji.jpg'),
(7, 'Ilham Akmal Rafi Pramudya', '193040038', '193040038.ilham@mail.unpas.ac.id', 'Teknik Informatika', 'ilham.jpg'),
(8, 'Anjara Dorajatun Nisa', '193040006', '193040006.anjara@mail.unpas.ac.id', 'Teknik Informatika', 'anjara.jpg'),
(9, 'Yanida Nur Nabila Widya Sastra', '193040022', '193040022.yanida@mail.unpas.ac.id', 'Teknik Informatika', 'billa.jpg'),
(10, 'Yuni Setyawati', '193040021', '193040021.yuni@mail.unpas.ac.id', 'Teknik Informatika', 'yuni.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
