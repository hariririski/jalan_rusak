-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 03:24 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `terakhir_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama_lengkap`, `password`, `username`, `terakhir_login`) VALUES
('Hariririski', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2017-07-03 03:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `fungsi`
--

CREATE TABLE `fungsi` (
  `namajkp` varchar(250) NOT NULL,
  `nojkp` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `koderuas` int(100) NOT NULL,
  `kodefungsi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`namajkp`, `nojkp`, `keterangan`, `koderuas`, `kodefungsi`) VALUES
('hdgyhcgy', '54747648468', 'hehhegehv', 34, 37),
('1', '1', '1', 11, 38),
('1', '1', '1', 1, 39);

-- --------------------------------------------------------

--
-- Table structure for table `jalan`
--

CREATE TABLE `jalan` (
  `kode_ruas` int(100) NOT NULL,
  `no_ruas` int(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `ruas_jalan` varchar(100) DEFAULT NULL,
  `panjang_km` varchar(100) DEFAULT NULL,
  `dari` varchar(250) DEFAULT NULL,
  `ke` varchar(250) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalan`
--

INSERT INTO `jalan` (`kode_ruas`, `no_ruas`, `status`, `ruas_jalan`, `panjang_km`, `dari`, `ke`, `document`) VALUES
(1, 1, '1', '1', '1', '1', '1', 'Sekolah.png'),
(11, 1, '1', '1', '1', '1', '1', 'Sekolah.png');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `nama_kabupaten` varchar(250) NOT NULL,
  `id_kabupaten` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`nama_kabupaten`, `id_kabupaten`) VALUES
('aaa', 35),
('Banda Aceh', 31),
('Sabang', 32);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(50) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `id_kabupaten` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kabupaten`) VALUES
(1, 'Kuta ALam', 31);

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_jalan`
--

CREATE TABLE `kondisi_jalan` (
  `baik` varchar(250) NOT NULL,
  `sedang` varchar(250) NOT NULL,
  `rusakringan` varchar(250) NOT NULL,
  `rusakberat` varchar(250) NOT NULL,
  `belumtembus` varchar(250) NOT NULL,
  `koderuas` int(100) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_jalan`
--

INSERT INTO `kondisi_jalan` (`baik`, `sedang`, `rusakringan`, `rusakberat`, `belumtembus`, `koderuas`, `id`) VALUES
('', '', '', '', '', 0, 37),
('', '', '', '', '', 0, 38),
('', '', '', '', '', 0, 39),
('3637683738', '3737373', '7647648479', '3797497497', '3989479847948', 34, 40),
('1', '1', '1', '1', '1', 11, 41),
('1', '1', '1', '1', '1', 1, 42);

-- --------------------------------------------------------

--
-- Table structure for table `mempunyai`
--

CREATE TABLE `mempunyai` (
  `kode` int(10) NOT NULL,
  `koderuas` int(100) NOT NULL,
  `kodemempunyai` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mempunyai`
--

INSERT INTO `mempunyai` (`kode`, `koderuas`, `kodemempunyai`) VALUES
(0, 0, 37),
(29, 0, 38),
(0, 0, 39),
(29, 34, 40),
(29, 11, 41),
(0, 1, 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`kodefungsi`);

--
-- Indexes for table `jalan`
--
ALTER TABLE `jalan`
  ADD PRIMARY KEY (`kode_ruas`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`),
  ADD UNIQUE KEY `nama_kabupaten` (`nama_kabupaten`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kondisi_jalan`
--
ALTER TABLE `kondisi_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mempunyai`
--
ALTER TABLE `mempunyai`
  ADD PRIMARY KEY (`kodemempunyai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `kodefungsi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kondisi_jalan`
--
ALTER TABLE `kondisi_jalan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `mempunyai`
--
ALTER TABLE `mempunyai`
  MODIFY `kodemempunyai` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
