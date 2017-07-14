-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 03:58 PM
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
  `kode_ruas` int(50) NOT NULL,
  `kode_fungsi` int(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `no_kjp` varchar(50) NOT NULL,
  `nama_kjp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_kabupaten` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jalan_rusak`
--

CREATE TABLE `jalan_rusak` (
  `kode_ruas` int(50) NOT NULL,
  `id_kabupaten` int(50) NOT NULL,
  `id_kecamatan` int(50) NOT NULL,
  `kode_jalan_rusak` int(50) NOT NULL,
  `kondisi` int(3) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `luas_jalan` int(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tgl_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_kecamatan` int(50) NOT NULL,
  `id_kabupaten` int(50) NOT NULL,
  `kode_pengaduan` int(255) NOT NULL,
  `kondisi` int(3) NOT NULL,
  `lat` int(50) NOT NULL,
  `lon` int(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `luas_jalan` int(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_ktp_pelapor` int(20) NOT NULL,
  `alamat_pelapor` varchar(255) NOT NULL,
  `no_hp_pelapor` varchar(15) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`kode_fungsi`);

--
-- Indexes for table `jalan`
--
ALTER TABLE `jalan`
  ADD PRIMARY KEY (`kode_ruas`);

--
-- Indexes for table `jalan_rusak`
--
ALTER TABLE `jalan_rusak`
  ADD PRIMARY KEY (`kode_jalan_rusak`),
  ADD UNIQUE KEY `lat` (`lat`),
  ADD UNIQUE KEY `lon` (`lon`);

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
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`kode_pengaduan`),
  ADD UNIQUE KEY `lat` (`lat`),
  ADD UNIQUE KEY `lon` (`lon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jalan_rusak`
--
ALTER TABLE `jalan_rusak`
  MODIFY `kode_jalan_rusak` int(50) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `kode_pengaduan` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
