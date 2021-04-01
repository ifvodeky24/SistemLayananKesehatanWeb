-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2021 at 06:17 PM
-- Server version: 10.3.28-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n6171848_db_layanankesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1581045225),
('m200207_031704_tb_apotek', 1581045536),
('m200207_032103_tb_puskemas', 1581046127),
('m200207_033042_tb_dokter_praktek', 1581046379),
('m200207_033405_tb_rumah_sakit', 1581046613),
('m200207_034302_tb_rumahsakit', 1581047005),
('m200207_034553_tb_apotek', 1581047273),
('m200207_034816_tb_admin', 1581047451),
('m200207_035119_tb_admin', 1581047593),
('m200207_035401_tb_puskesmas', 1581047724);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `authkey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `fullname`, `email`, `username`, `password`, `authkey`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_apotek`
--

CREATE TABLE `tb_apotek` (
  `id_apotek` int(11) NOT NULL,
  `nama_apotek` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_apotek`
--

INSERT INTO `tb_apotek` (`id_apotek`, `nama_apotek`, `kecamatan`, `kabupaten`, `alamat`, `foto`, `fasilitas`, `deskripsi`, `latitude`, `longitude`) VALUES
(1, 'Apotek Sehat', 'Tampan', 'Agam', 'Taman Karya', '1484107138460-voxpop4.jpg', 'Dll...', '', 0.506566, 101.43779);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter_praktek`
--

CREATE TABLE `tb_dokter_praktek` (
  `id_dokter_praktek` int(11) NOT NULL,
  `nama_dokter_praktek` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitute` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter_praktek`
--

INSERT INTO `tb_dokter_praktek` (`id_dokter_praktek`, `nama_dokter_praktek`, `kecamatan`, `kabupaten`, `alamat`, `foto`, `fasilitas`, `deskripsi`, `latitude`, `longitute`) VALUES
(1, 'Dr. Anisa', 'Tampan', 'Tuah Karya', 'Pekanbaru, kota', '3622856215.png', 'Kursi, dll', '', -6.121435, 106.774124);

-- --------------------------------------------------------

--
-- Table structure for table `tb_klinik`
--

CREATE TABLE `tb_klinik` (
  `id_klinik` int(11) NOT NULL,
  `nama_klinik` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` double NOT NULL,
  `longitute` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_klinik`
--

INSERT INTO `tb_klinik` (`id_klinik`, `nama_klinik`, `kecamatan`, `kabupaten`, `alamat`, `foto`, `fasilitas`, `deskripsi`, `latitude`, `longitute`) VALUES
(1, 'Klinik Sehati', 'Tampan', 'Tuah Karya', 'Pekanbaru', 'img1-1.png', 'Kursi, dll', '', 0.506566, 101.43779);

-- --------------------------------------------------------

--
-- Table structure for table `tb_puskesmas`
--

CREATE TABLE `tb_puskesmas` (
  `id_puskesmas` int(11) NOT NULL,
  `nama_puskesmas` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitute` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_puskesmas`
--

INSERT INTO `tb_puskesmas` (`id_puskesmas`, `nama_puskesmas`, `kecamatan`, `kabupaten`, `alamat`, `nomor_telp`, `foto`, `fasilitas`, `deskripsi`, `latitude`, `longitute`) VALUES
(1, 'Bidan Rosita', 'Tampan', 'Tuah Karya', 'Pekanbaru, Kota', '08232323', 'BEST_PRODUCT_Kepala_setrika_uap_nagamoto_untuk_boiler_setrik.jpg', 'Tempat tidur, dll', '', 3.597031, 98.678513);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rumahsakit`
--

CREATE TABLE `tb_rumahsakit` (
  `id_rumah_sakit` int(11) NOT NULL,
  `nama_rumah_sakit` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nomor_telp` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rumahsakit`
--

INSERT INTO `tb_rumahsakit` (`id_rumah_sakit`, `nama_rumah_sakit`, `kecamatan`, `kabupaten`, `alamat`, `nomor_telp`, `foto`, `fasilitas`, `deskripsi`, `latitude`, `longitude`) VALUES
(1, 'RS. Sansani', 'Tampan', 'Tuah Madani', 'Pekanbaru, kota', '0822', '25 literr.png', 'kamar tidur, dll', 'deskripsi', 0.506566, 101.43779);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `authkey` varchar(255) NOT NULL,
  `accesToken` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_apotek`
--
ALTER TABLE `tb_apotek`
  ADD PRIMARY KEY (`id_apotek`);

--
-- Indexes for table `tb_dokter_praktek`
--
ALTER TABLE `tb_dokter_praktek`
  ADD PRIMARY KEY (`id_dokter_praktek`);

--
-- Indexes for table `tb_klinik`
--
ALTER TABLE `tb_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `tb_puskesmas`
--
ALTER TABLE `tb_puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- Indexes for table `tb_rumahsakit`
--
ALTER TABLE `tb_rumahsakit`
  ADD PRIMARY KEY (`id_rumah_sakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_apotek`
--
ALTER TABLE `tb_apotek`
  MODIFY `id_apotek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dokter_praktek`
--
ALTER TABLE `tb_dokter_praktek`
  MODIFY `id_dokter_praktek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_klinik`
--
ALTER TABLE `tb_klinik`
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_puskesmas`
--
ALTER TABLE `tb_puskesmas`
  MODIFY `id_puskesmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_rumahsakit`
--
ALTER TABLE `tb_rumahsakit`
  MODIFY `id_rumah_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
