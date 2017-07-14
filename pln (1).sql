-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 05:20 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`, `nama_lengkap`) VALUES
('admin', 'admin', 'Ilham');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id_area` int(100) NOT NULL,
  `nama_area` varchar(100) NOT NULL,
  `id_wilayah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id_area`, `nama_area`, `id_wilayah`) VALUES
(1, 'Banda Aceh', 1),
(2, 'sigli', 2),
(7, 'ssss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gardu_hubung`
--

CREATE TABLE `gardu_hubung` (
  `id_gardu_hubung` int(100) NOT NULL,
  `no_bangunan` varchar(100) NOT NULL,
  `nama_bangunan` varchar(100) NOT NULL,
  `id_gardu_induk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gardu_hubung`
--

INSERT INTO `gardu_hubung` (`id_gardu_hubung`, `no_bangunan`, `nama_bangunan`, `id_gardu_induk`) VALUES
(1, 'aaaaaa', 'aaaaaaaaaaaa', 123456),
(2, '111111111', 'samsabg', 98765);

-- --------------------------------------------------------

--
-- Table structure for table `gardu_induk`
--

CREATE TABLE `gardu_induk` (
  `id_gardu_induk` int(100) NOT NULL,
  `id_rayon` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gardu_induk`
--

INSERT INTO `gardu_induk` (`id_gardu_induk`, `id_rayon`) VALUES
(0, 3),
(98765, 1),
(123456, 1),
(33333333, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_trafo`
--

CREATE TABLE `jenis_trafo` (
  `id_jenis_trafo` int(100) NOT NULL,
  `nama_jenis_trafo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_trafo`
--

INSERT INTO `jenis_trafo` (`id_jenis_trafo`, `nama_jenis_trafo`) VALUES
(1, 'Trafo Satu Phasa'),
(2, 'Trafo Tiga Phasa');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten_kota`
--

CREATE TABLE `kabupaten_kota` (
  `id_kabupaten_kota` int(12) NOT NULL,
  `nama_kabupaten_kota` varchar(50) NOT NULL,
  `id_provinsi` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kapasitas_trafo`
--

CREATE TABLE `kapasitas_trafo` (
  `id_kapasitas_trafo` int(100) NOT NULL,
  `nama_kapasitas_trafo` varchar(100) NOT NULL,
  `id_jenis_trafo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kapasitas_trafo`
--

INSERT INTO `kapasitas_trafo` (`id_kapasitas_trafo`, `nama_kapasitas_trafo`, `id_jenis_trafo`) VALUES
(1, '10 kVA', 1),
(2, '15 kVA', 1),
(3, '15 kVA', 2),
(4, '25 kVA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(12) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `id_kabupaten_kota` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyulang`
--

CREATE TABLE `penyulang` (
  `id_penyulang` int(100) NOT NULL,
  `nama_penyulang` varchar(100) NOT NULL,
  `nama_wilayah_penyulang` varchar(100) NOT NULL,
  `pembagian_penyulang` varchar(100) NOT NULL,
  `id_gardu_hubung` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyulang`
--

INSERT INTO `penyulang` (`id_penyulang`, `nama_penyulang`, `nama_wilayah_penyulang`, `pembagian_penyulang`, `id_gardu_hubung`) VALUES
(1, 'bababba', 'ssssssssss', 'ssssssssssssss', 1),
(2, 'ss', 'ss', 'ss', 2);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(12) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` int(100) NOT NULL,
  `nama_rayon` varchar(100) NOT NULL,
  `id_area` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rayon`
--

INSERT INTO `rayon` (`id_rayon`, `nama_rayon`, `id_area`) VALUES
(1, 'merduati', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_gardu`
--

CREATE TABLE `tipe_gardu` (
  `id_tipe_gardu` int(100) NOT NULL,
  `nama_tipe_gardu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_gardu`
--

INSERT INTO `tipe_gardu` (`id_tipe_gardu`, `nama_tipe_gardu`) VALUES
(1, 'Beton'),
(2, 'Besi');

-- --------------------------------------------------------

--
-- Table structure for table `trafo`
--

CREATE TABLE `trafo` (
  `id_trafo` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `id_jenis_trafo` int(100) NOT NULL,
  `id_tipe_gardu` int(100) NOT NULL,
  `kubikel` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_kapasitas_trafo` int(100) NOT NULL,
  `id_peyulang` int(100) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trafo`
--

INSERT INTO `trafo` (`id_trafo`, `pemilik`, `id_jenis_trafo`, `id_tipe_gardu`, `kubikel`, `jumlah`, `id_kapasitas_trafo`, `id_peyulang`, `Tanggal`) VALUES
('11111', 'PLN', 1, 1, '111', 11, 1, 2, '2016-10-30 11:24:57'),
('1234', 'PLN', 1, 1, '23456', 134, 1, 2, '2017-06-09 11:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(100) NOT NULL,
  `nama_wilayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Selatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `gardu_hubung`
--
ALTER TABLE `gardu_hubung`
  ADD PRIMARY KEY (`id_gardu_hubung`);

--
-- Indexes for table `gardu_induk`
--
ALTER TABLE `gardu_induk`
  ADD PRIMARY KEY (`id_gardu_induk`);

--
-- Indexes for table `jenis_trafo`
--
ALTER TABLE `jenis_trafo`
  ADD PRIMARY KEY (`id_jenis_trafo`);

--
-- Indexes for table `kabupaten_kota`
--
ALTER TABLE `kabupaten_kota`
  ADD PRIMARY KEY (`id_kabupaten_kota`);

--
-- Indexes for table `kapasitas_trafo`
--
ALTER TABLE `kapasitas_trafo`
  ADD PRIMARY KEY (`id_kapasitas_trafo`);

--
-- Indexes for table `penyulang`
--
ALTER TABLE `penyulang`
  ADD PRIMARY KEY (`id_penyulang`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id_rayon`);

--
-- Indexes for table `tipe_gardu`
--
ALTER TABLE `tipe_gardu`
  ADD PRIMARY KEY (`id_tipe_gardu`);

--
-- Indexes for table `trafo`
--
ALTER TABLE `trafo`
  ADD PRIMARY KEY (`id_trafo`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gardu_hubung`
--
ALTER TABLE `gardu_hubung`
  MODIFY `id_gardu_hubung` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_trafo`
--
ALTER TABLE `jenis_trafo`
  MODIFY `id_jenis_trafo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kabupaten_kota`
--
ALTER TABLE `kabupaten_kota`
  MODIFY `id_kabupaten_kota` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kapasitas_trafo`
--
ALTER TABLE `kapasitas_trafo`
  MODIFY `id_kapasitas_trafo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penyulang`
--
ALTER TABLE `penyulang`
  MODIFY `id_penyulang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rayon`
--
ALTER TABLE `rayon`
  MODIFY `id_rayon` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tipe_gardu`
--
ALTER TABLE `tipe_gardu`
  MODIFY `id_tipe_gardu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
