-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 05:07 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jalan`
--

CREATE TABLE `jalan` (
  `kode_ruas` int(50) NOT NULL,
  `dari` int(50) NOT NULL,
  `ke` int(50) NOT NULL,
  `no_ruas` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dokument` varchar(255) NOT NULL,
  `rusak_ringan` int(50) NOT NULL,
  `rusak_sedang` int(50) NOT NULL,
  `rusak_berat` int(50) NOT NULL,
  `baik` int(50) NOT NULL,
  `panjang_km` int(50) NOT NULL,
  `id_kecamatan` int(50) NOT NULL,
  `id_kabupaten` int(50) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `belum_tembus` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalan`
--

INSERT INTO `jalan` (`kode_ruas`, `dari`, `ke`, `no_ruas`, `status`, `dokument`, `rusak_ringan`, `rusak_sedang`, `rusak_berat`, `baik`, `panjang_km`, `id_kecamatan`, `id_kabupaten`, `nama_jalan`, `belum_tembus`) VALUES
(1, 1, 1, 1, '1', 'JALAN1500044787Presentation1.pdf', 1, 1, 1, 1, 1, 1, 31, '1', 1),
(2, 2, 22, 2, '2', 'JALAN1500044841SKPL.pdf', 2, 22, 2, 2, 2, 1, 31, '2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jalan`
--
ALTER TABLE `jalan`
  ADD PRIMARY KEY (`kode_ruas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
