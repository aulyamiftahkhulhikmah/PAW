-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 06:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aulya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_050`
--

CREATE TABLE `tbl_050` (
  `id_customer` int(10) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `alamat_customer` varchar(200) NOT NULL,
  `telepon_customer` varchar(20) NOT NULL,
  `email_customer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_050`
--

INSERT INTO `tbl_050` (`id_customer`, `nama_customer`, `alamat_customer`, `telepon_customer`, `email_customer`) VALUES
(1, 'Aulya Miftahkhul Hikmah', '', '082140331050', 'aulyamh@gmail.com'),
(2, 'Gheida Tafaen Afif', 'Maibit Rengel Tuban', '083140221112', 'gheidata@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_050`
--
ALTER TABLE `tbl_050`
  ADD PRIMARY KEY (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
