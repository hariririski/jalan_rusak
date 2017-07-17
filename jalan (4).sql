-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 09:36 AM
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
('Ibnu', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2017-07-16 14:57:44');

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

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`kode_ruas`, `kode_fungsi`, `keterangan`, `no_kjp`, `nama_kjp`) VALUES
(1, 1, '1', '1', '1'),
(2, 2, '2', '2', '2');

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
(1, 1, 1, 1, '1', 'JALAN1500201136Final_RPL_Pak_Rahmat.docx', 1, 1, 1, 1, 1, 1, 32, '1', 1),
(2, 2, 2, 2, '2', 'JALAN1500205560SKPL.pdf', 2, 2, 2, 2, 2, 1, 31, '2', 22);

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
  `status` int(2) NOT NULL,
  `perbaikan` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalan_rusak`
--

INSERT INTO `jalan_rusak` (`kode_ruas`, `id_kabupaten`, `id_kecamatan`, `kode_jalan_rusak`, `kondisi`, `lat`, `lon`, `desa`, `keterangan`, `luas_jalan`, `photo`, `tgl_create`, `status`, `perbaikan`) VALUES
(1, 31, 1, 4, 3, '5.160191033179967', '95.53208287500001', '1', '1', 1, 'JALAN_RUSAK1500201164rusak_ringan.png', '2017-07-16 10:32:44', 0, NULL);

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
(' Subulussalam', 52),
('Aceh Barat', 40),
('Aceh Barat Daya', 53),
('Aceh Besar', 44),
('Aceh Jaya', 54),
('Aceh Selatan', 39),
('Aceh Singkil', 45),
('Aceh Tamiang', 46),
('Aceh Tengah', 36),
('Aceh Tenggara', 47),
('Aceh Timur', 38),
('Aceh Utara', 58),
('Banda Aceh', 31),
('Bener Meriah', 37),
('Bireuen', 48),
('Gayo Lues', 55),
('langsa', 41),
('Lhokseumawe', 51),
('Nagan Raya', 56),
('Pidie', 42),
('Pidie Jaya', 43),
('Sabang', 32),
('Simeulue', 50);

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
(1, 'Kuta ALam', 31),
(2, 'Baiturahman', 31),
(3, 'Darussalam', 31),
(4, 'Bandar Baru', 31),
(5, 'Jaya Baru', 31);

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
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_kecamatan`, `id_kabupaten`, `kode_pengaduan`, `kondisi`, `lat`, `lon`, `desa`, `keterangan`, `luas_jalan`, `photo`, `tanggal_create`, `nama_pelapor`, `no_ktp_pelapor`, `alamat_pelapor`, `no_hp_pelapor`, `nama_jalan`) VALUES
(1, 31, 1, 3, 5, 97, '1', '1', 1, 'PENGADUAN1500059276Sekolah.png', '2017-07-14 19:07:56', '1', 11111, '1', '1', '11');

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
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD UNIQUE KEY `nama_kecamatan` (`nama_kecamatan`);

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
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `kode_fungsi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jalan_rusak`
--
ALTER TABLE `jalan_rusak`
  MODIFY `kode_jalan_rusak` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `kode_pengaduan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
