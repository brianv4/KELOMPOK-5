-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 03:44 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkp_sri_rejeki`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_peserta`
--

CREATE TABLE `calon_peserta` (
  `nama` varchar(50) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` int(7) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `pendidikan` varchar(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_peserta`
--

INSERT INTO `calon_peserta` (`nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `email`, `username`, `password`, `alamat`, `kode_pos`, `provinsi`, `pendidikan`, `status`) VALUES
('adi irawan', 3511012809990002, 'bondowoso', '1999-09-28', 'Laki-laki', '098765432', 'adi@gmail.com', 'adi', 'adi', 'Tanah Wulan', 69262, 'jatim', 'smk', 0),
('adi irawan', 3511012809990003, 'bondowoso', '1999-09-28', 'laki-laki', '0987778989898', 'adi@gmail.com', 'adii', 'adii', 'bondowoso', 69262, 'Jawa Timur', 'smk', 0),
('Brian Vidyanjaya', 3511012809990009, 'Probolinggo', '1999-09-29', 'laki-laki', '089765654545', 'brian@gmail.com', 'brian', 'brian', 'Probolinggo', 67565, 'Jawa Timur', 'SMA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`, `status`) VALUES
(7, 'Contoh Surat Pernyataan', 'files/Contoh Surat Pernyataan.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id_kursus` int(10) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `jenis_level` varchar(10) NOT NULL,
  `file_kursus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id_kursus`, `nik`, `jenis_level`, `file_kursus`) VALUES
(1, 3511012809990002, 'Level 1', ''),
(2, 3511012809990003, 'Level 2', ''),
(5, 3511012809990009, 'Level 2', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(10) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `file_pelatihan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nik`, `file_pelatihan`) VALUES
(1, 3511012809990002, ''),
(2, 3511012809990009, '');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat_kursus`
--

CREATE TABLE `sertifikat_kursus` (
  `nomor_sertifikat` int(10) NOT NULL,
  `id_ujiankursus` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat_kursus`
--

INSERT INTO `sertifikat_kursus` (`nomor_sertifikat`, `id_ujiankursus`, `id_user`, `tempat`, `tanggal`) VALUES
(1, 8, 1, 'Jember', '2019-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat_pelatihan`
--

CREATE TABLE `sertifikat_pelatihan` (
  `nomor_sertifikat` int(10) NOT NULL,
  `id_ujianpelatihan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat_pelatihan`
--

INSERT INTO `sertifikat_pelatihan` (`nomor_sertifikat`, `id_ujianpelatihan`, `id_user`, `tempat`, `tanggal`) VALUES
(3, 7, 1, 'Jember', '2019-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_kursus`
--

CREATE TABLE `ujian_kursus` (
  `id_ujiankursus` int(10) NOT NULL,
  `id_kursus` int(10) NOT NULL,
  `nilai` int(3) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian_kursus`
--

INSERT INTO `ujian_kursus` (`id_ujiankursus`, `id_kursus`, `nilai`, `keterangan`) VALUES
(1, 1, 80, 'Lulus'),
(6, 2, 89, NULL),
(7, 1, 79, NULL),
(8, 2, 88, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ujian_pelatihan`
--

CREATE TABLE `ujian_pelatihan` (
  `id_ujianpelatihan` int(10) NOT NULL,
  `id_pelatihan` int(10) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian_pelatihan`
--

INSERT INTO `ujian_pelatihan` (`id_ujianpelatihan`, `id_pelatihan`, `nilai`) VALUES
(7, 2, 90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `level` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `level`, `username`, `password`) VALUES
(1, 'Adi Irawan', 'Bondowoso', '089898876543', 'admin', 'adii', 'adii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_peserta`
--
ALTER TABLE `calon_peserta`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `sertifikat_kursus`
--
ALTER TABLE `sertifikat_kursus`
  ADD PRIMARY KEY (`nomor_sertifikat`);

--
-- Indexes for table `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  ADD PRIMARY KEY (`nomor_sertifikat`);

--
-- Indexes for table `ujian_kursus`
--
ALTER TABLE `ujian_kursus`
  ADD PRIMARY KEY (`id_ujiankursus`);

--
-- Indexes for table `ujian_pelatihan`
--
ALTER TABLE `ujian_pelatihan`
  ADD PRIMARY KEY (`id_ujianpelatihan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id_kursus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sertifikat_kursus`
--
ALTER TABLE `sertifikat_kursus`
  MODIFY `nomor_sertifikat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  MODIFY `nomor_sertifikat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ujian_kursus`
--
ALTER TABLE `ujian_kursus`
  MODIFY `id_ujiankursus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ujian_pelatihan`
--
ALTER TABLE `ujian_pelatihan`
  MODIFY `id_ujianpelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
