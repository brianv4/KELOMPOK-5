-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 07:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkpsrirejeki`
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
  `alamat` varchar(20) NOT NULL,
  `kode_pos` varchar(7) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `pendidikan` varchar(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_peserta`
--

INSERT INTO `calon_peserta` (`nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `email`, `username`, `password`, `alamat`, `kode_pos`, `provinsi`, `pendidikan`, `status`) VALUES
('Devi Diah Ayu', 3511012412000001, 'Probolinggo', '2000-12-24', 'perempuan', '087864531777', 'dediaha1@gmail.com', 'devi', 'devi', 'Probolinggo', '67221', 'Jawa Timur', 'SMP', 1),
('Dini Sugiarti', 3511012908990003, 'Probolinggo', '1999-12-16', 'perempuan', '087757655765', 'dini.123@gmail.com', 'dini', 'dini12', 'Probolinggo', '62771', 'Jawa Timur', 'SMA', 2),
('Puspa Dhiningtyas', 3574010320120003, 'Probolinggo', '1991-07-30', 'perempuan', '089184893213', 'puspa.d@gmail.com', 'puspa', 'puspa', 'Probolinggo', '67221', 'Jawa Timur', 'SMA', 3),
('Windha Ika Puspita', 3574010887670002, 'Probolinggo', '1995-06-07', 'perempuan', '089786453177', 'ikawp1@gmail.com', 'ika', 'ika', 'Probolinggo', '67822', 'Jawa Timur', 'SMA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama_file`, `deskripsi`) VALUES
(1, '7.jpg', 'Ini adalah 2 Orang Peserta Pelatihan Di LKP Sri Rejeki'),
(2, '8.jpg', 'Ini Adalah Peserta Pelatihan'),
(3, '14.jpg', 'Ini adalah pengurus LKP Sri Rejeki'),
(4, '4.jpg', 'Peserta Pelatihan LKP Sri Rejeki'),
(5, '5.jpg', 'Peserta Kursus dan Pelatihan LKP Sri Rejeki'),
(6, '13.jpg', 'Pengurus Besar LKP Sri Rejeki');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kursus`
--

CREATE TABLE `jadwal_kursus` (
  `no_jadwal` int(10) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kursus`
--

INSERT INTO `jadwal_kursus` (`no_jadwal`, `deskripsi`, `file`, `level`) VALUES
(1, 'Jadwal Kursus Level 2', '30122019034650JADWAL PEMBELAJARAN.docx', 'Level 2'),
(3, 'Jadwal Kursus Level 1', '30122019041455jadwal.docx', 'Level 1');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelatihan`
--

CREATE TABLE `jadwal_pelatihan` (
  `no_jadwal` int(10) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_pelatihan`
--

INSERT INTO `jadwal_pelatihan` (`no_jadwal`, `deskripsi`, `file`) VALUES
(1, 'Jadwal Pelatihan', '30122019034745jadwal.docx');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id_kursus` int(10) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `jenis_level` varchar(10) NOT NULL,
  `file_kursus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id_kursus`, `nik`, `jenis_level`, `file_kursus`) VALUES
(6, 3574011210990003, 'level 2', '30122019033423file identitas.docx'),
(7, 3574010320120003, 'level 2', '30122019034324file identitas.docx'),
(8, 3574010887670002, 'Level 1', '30122019035630file identitas.docx'),
(9, 3511012908990003, 'Level 1', '30122019073648file identitas.docx');

-- --------------------------------------------------------

--
-- Table structure for table `materi_kursus`
--

CREATE TABLE `materi_kursus` (
  `id_topik` int(10) NOT NULL,
  `topik` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `dokumen` varchar(255) NOT NULL,
  `jenis_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_kursus`
--

INSERT INTO `materi_kursus` (`id_topik`, `topik`, `tgl_mulai`, `tgl_akhir`, `deskripsi`, `dokumen`, `jenis_level`) VALUES
(35, 'Kursus Level 1 Bagian 1', '2019-02-12', '2020-02-02', 'Kursus Level 1 Bagian 1', '30122019074328jadwal.docx', 'level 1');

-- --------------------------------------------------------

--
-- Table structure for table `materi_pelatihan`
--

CREATE TABLE `materi_pelatihan` (
  `id_topik` int(10) NOT NULL,
  `topik` varchar(50) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(10) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `file_pelatihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nik`, `file_pelatihan`) VALUES
(15, 3511012412000001, '30122019042731file identitas.docx');

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
(23, 14, 12, 'Probolinggo', '2019-11-05'),
(24, 15, 14, 'Probolinggo', '2019-11-12'),
(25, 17, 14, 'Probolinggo', '2019-11-27'),
(26, 19, 14, 'Probolinggo', '2019-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat_pelatihan`
--

CREATE TABLE `sertifikat_pelatihan` (
  `nomor_sertifikat` int(5) NOT NULL,
  `id_ujianpelatihan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat_pelatihan`
--

INSERT INTO `sertifikat_pelatihan` (`nomor_sertifikat`, `id_ujianpelatihan`, `id_user`, `tempat`, `tanggal`) VALUES
(30, 19, 14, 'Probolinggo', '2019-11-15'),
(31, 20, 16, 'Probolinggo', '2019-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `tampilan`
--

CREATE TABLE `tampilan` (
  `id` int(1) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `judul_deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tampilan`
--

INSERT INTO `tampilan` (`id`, `judul`, `judul_deskripsi`) VALUES
(1, 'LKP SRI REJEKI', 'Lembaga Kursus Pelatihan Menjahit Swasta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukti`
--

CREATE TABLE `tb_bukti` (
  `id_bukti` int(3) NOT NULL,
  `id_kursus` int(10) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bukti`
--

INSERT INTO `tb_bukti` (`id_bukti`, `id_kursus`, `nik`, `bukti`) VALUES
(2, 0, 8123912312312, '11122019100452biolog'),
(4, 17, 3511012809990010, '12122019091809alur b'),
(5, 23, 3511012809990011, '12122019162957Muhamm'),
(9, 24, 3511012809990007, '13122019152827biolog'),
(10, 27, 3511012809990007, '13122019153449biolog'),
(11, 1, 3511012809990010, '19122019081341dhcp.j'),
(12, 2, 3574011210990003, '29122019062216[M] St'),
(13, 3, 3574011210990003, '29122019154216DAFUL.'),
(14, 4, 3574011210990003, '29122019170250materi kursus level 1 - Bagian 1.docx'),
(15, 4, 3574011210990003, '29122019175001materi kursus level 2 - Bagian 4.docx'),
(16, 4, 3574011210990003, '29122019180238materi kursus level 3 - Bagian 2.docx'),
(17, 5, 3574011210990003, '29122019180649Materi Pelatihan.docx'),
(18, 6, 3574011210990003, '30122019033443bukti pembayaran.docx'),
(19, 7, 3574010320120003, '30122019034350bukti pembayaran.docx'),
(20, 8, 3574010887670002, '30122019035650bukti pembayaran.docx'),
(21, 9, 3511012908990003, '30122019073714bukti pembayaran.docx');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_kursus`
--

CREATE TABLE `ujian_kursus` (
  `id_ujiankursus` int(10) NOT NULL,
  `id_kursus` int(10) NOT NULL,
  `nilai` int(3) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian_kursus`
--

INSERT INTO `ujian_kursus` (`id_ujiankursus`, `id_kursus`, `nilai`, `keterangan`) VALUES
(14, 5, 99, ''),
(15, 7, 90, ''),
(17, 8, 80, ''),
(19, 9, 90, '');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_pelatihan`
--

CREATE TABLE `ujian_pelatihan` (
  `id_ujianpelatihan` int(10) NOT NULL,
  `id_pelatihan` int(10) NOT NULL,
  `nilai` int(3) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian_pelatihan`
--

INSERT INTO `ujian_pelatihan` (`id_ujianpelatihan`, `id_pelatihan`, `nilai`, `keterangan`) VALUES
(19, 14, 88, ''),
(20, 15, 79, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `nohp_user` varchar(13) NOT NULL,
  `level` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `nohp_user`, `level`, `username`, `password`) VALUES
(12, 'Brian Vidyanjaya', 'Kaliamas Dringu Probolinggo', '081218712124', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(14, 'Dwita Widyandari', 'Kaliamas Dringu Probolinggo', '081233292287', 'Owner', 'owner', '72122ce96bfec66e2396d2e25225d70a'),
(16, 'Sri Rejeki', 'Probolinggo', '087757611671', 'Admin', 'srirejeki', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_peserta`
--
ALTER TABLE `calon_peserta`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  ADD PRIMARY KEY (`no_jadwal`);

--
-- Indexes for table `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
  ADD PRIMARY KEY (`no_jadwal`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `materi_kursus`
--
ALTER TABLE `materi_kursus`
  ADD PRIMARY KEY (`id_topik`);

--
-- Indexes for table `materi_pelatihan`
--
ALTER TABLE `materi_pelatihan`
  ADD PRIMARY KEY (`id_topik`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`),
  ADD UNIQUE KEY `nik` (`nik`);

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
-- Indexes for table `tampilan`
--
ALTER TABLE `tampilan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bukti`
--
ALTER TABLE `tb_bukti`
  ADD PRIMARY KEY (`id_bukti`);

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
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  MODIFY `no_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
  MODIFY `no_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id_kursus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `materi_kursus`
--
ALTER TABLE `materi_kursus`
  MODIFY `id_topik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `materi_pelatihan`
--
ALTER TABLE `materi_pelatihan`
  MODIFY `id_topik` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sertifikat_kursus`
--
ALTER TABLE `sertifikat_kursus`
  MODIFY `nomor_sertifikat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  MODIFY `nomor_sertifikat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_bukti`
--
ALTER TABLE `tb_bukti`
  MODIFY `id_bukti` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ujian_kursus`
--
ALTER TABLE `ujian_kursus`
  MODIFY `id_ujiankursus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ujian_pelatihan`
--
ALTER TABLE `ujian_pelatihan`
  MODIFY `id_ujianpelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
