-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 04:32 PM
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
('Adi Irawan', 3511012809990002, 'Bondowoso', '1999-09-28', 'Laki-laki', '083853996176', 'adi@gmail.com', 'adiirawan', 'adiirawan', 'Maesan Bondowoso', '68262', 'Jawa Timur', 'SMK', 3),
('gogon', 3511012809990004, 'Jember', '2019-12-01', 'laki-laki', '089988971222', 'gogon@gmail.com', 'gogon', 'gogon', 'jember', '67220', 'Jawa Timur', 'SMA', 2),
('Muhammad Marsa Kamal Setiawan', 3511012809990007, 'Jember', '1999-09-09', 'Laki-laki', '08998897121', 'marsajanscall@yahoo.', 'mks111', 'mks111', 'Probolinggo', '62771', 'Jawa Timur', 'SMP', 1),
('Brian Vidyanjaya', 3511012809990010, 'Probolinggo', '1999-12-02', 'laki-laki', '08989614190', 'admin@cerbonart.com', 'brian', 'brian', 'Probolinggo', '68263', 'Jawa Timur', 'SMP', 0),
('rahmad', 3511012809990011, 'Jember', '2000-12-29', 'laki-laki', '08998897123', 'rahmad@gmail.com', 'rahmad', 'rahmad', 'jember', '67222', 'Jawa Timur', 'dll', 0),
('gatot', 3511012809990051, 'jember', '2019-11-03', 'laki-laki', '0899889712112', 'gatot@gmail.com', 'gatot', 'gatot', 'mangli', '45454', 'Jawa Timur', 'SMA', 0),
('bayu tol', 4738120398397238, 'pp', '2019-12-18', 'perempuan', '089896141901', 'gatoat@gmail.com', 'bayu', 'bayu', 'sss', '62771', 'jatim', 'SMA', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'asdf', '10122019122229Hasil ', 'Level 1'),
(6, 'KOKOKO', 'Bu Bety cans.png', 'Level 1'),
(7, 'Ar', 'Black haha.png', 'Level 2'),
(8, 'Kumaha atuh', 'Jenis tipe file.docx', 'Level 3'),
(9, 'LOSS GAK REWEL HAHA', 'Bu Bety cans.png', 'Level 2'),
(10, 'sip', '1112201903300611122019030016Jenis tipe file.docx', 'level 1'),
(11, 'obito', '1112201909364511122019030312barang.docx', 'level 1');

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
(1, 'awa12', 'Bu Bety cans.png'),
(2, 'aswa123', ''),
(3, 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdi', '10122019122810Jenis '),
(20, 'Membuat pakaian pesta dari dasar hingga bisa', '11122019031233barang.docx'),
(21, 'gaul', '1112201903333611122019031233barang.docx');

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
(10, 3511012809990051, 'level1', '04122019190813Jenis '),
(14, 8123912312312, 'level1', '11122019100017spss 3'),
(15, 8123912312312, 'level2', '11122019100035LATIHA'),
(16, 3511012809990051, 'level2', '12122019085904alur b'),
(17, 3511012809990010, 'level1', '12122019091404alur b'),
(18, 3511012809990010, 'level2', '12122019092220biolog'),
(19, 3511012809990010, 'level2', '12122019134337SPSS 5'),
(20, 3511012809990010, 'level2', '12122019134425KARYA '),
(21, 3511012809990010, 'level3', '12122019135438biolog'),
(22, 3511012809990010, 'level2', '12122019152907Jenis '),
(23, 3511012809990011, 'level1', '12122019161752Latar '),
(28, 3511012809990007, 'level2', '13122019161306E41182145 Muhammad Marsa Kamal (DNS dan WEBserver).pdf');

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
  `jenis_level` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_kursus`
--

INSERT INTO `materi_kursus` (`id_topik`, `topik`, `tgl_mulai`, `tgl_akhir`, `deskripsi`, `dokumen`, `jenis_level`, `status`) VALUES
(2, 'Membuat Pakaian Haloween', '2019-11-15', '2019-11-30', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', 'TugasKelompok5 (1).d', 'Level 1', '1'),
(3, 'Membuat Pakaian Haloween', '2019-11-15', '2019-11-30', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '101220191120552019_0', 'Level 3', 'Aktif'),
(4, 'Membuat Pakaian gaul', '2019-12-03', '2019-12-17', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '10122019170904test1.', 'level 1', 'aktif'),
(8, 'Membuat Pakaian mantab', '2019-12-03', '2019-12-05', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '10122019171258lkp_sr', 'level 1', 'aktif'),
(9, 'Membuat Pakaian Pesta wanita', '2019-12-01', '2019-12-03', 'sipta', '10122019172130101220', 'level 1', 'aktif'),
(20, 'Membuat Pakaian Pesta', '2019-12-19', '2019-12-25', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '11122019025703ALHAMDULILLAH.docx', 'level 1', 'aktif'),
(21, 'Membuat Pakaian Haloween', '2019-12-24', '2019-12-31', 'JOS GANDOSA', '11122019030016Jenis tipe file.docx', 'level 2', 'aktif'),
(22, 'Membuat Pakaian Muslim', '2019-12-01', '2019-12-01', 'Membuat pakaian pesta dari dasar hingga bisa', '11122019030312barang.docx', 'level 3', 'aktif'),
(23, 'Membuat Pakaian gamis', '2019-12-01', '2019-12-14', 'sip tok', '1112201903390810122019162420Hasil kolmogorov data 50 excel.xlsx', 'level 1', 'aktif');

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
  `dokumen` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_pelatihan`
--

INSERT INTO `materi_pelatihan` (`id_topik`, `topik`, `tgl_mulai`, `tgl_akhir`, `deskripsi`, `dokumen`, `status`) VALUES
(1, 'topik', '2019-11-15', '2019-11-30', 'materi1', 'Algoritma dan Kompleksitas Algoritma.docx', '1'),
(2, 'Membuat Pakaian Pesta', '2019-11-15', '2019-11-30', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '10122019162420Hasil kolmogorov data 50 excel.xlsx', 'Aktif'),
(11, 'Membuat Pakaian Pesta pria', '2019-12-01', '2019-12-07', 'sip', '10122019171906lkpsrirejeki (2).sql', 'aktif'),
(12, 'Membuat Pakaian Pesta malam', '2019-12-01', '2019-12-10', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '1112201903404811122019025703ALHAMDULILLAH.docx', 'aktif'),
(13, 'Membuat Pakaian Pesta siang', '2019-12-01', '2019-12-10', 'sip gaul', '1112201909375610122019162420Hasil kolmogorov data 50 excel.xlsx', 'aktif');

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
(1, 3511012809990002, 'Jenis tipe file.docx'),
(2, 3511011809990009, '28112019135756[M] St'),
(4, 3511012809990051, '28112019140523PENCAK'),
(8, 4738120398397238, '04122019091915biolog'),
(9, 3511012809990010, '12122019140251tugas ');

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
(1, 3, 9, 'Probolinggo', '2019-12-04'),
(2, 4, 9, 'bali', '2019-12-05'),
(3, 6, 13, 'Probolinggo', '2019-11-12'),
(4, 6, 13, 'Probolinggo', '2019-11-12'),
(5, 6, 13, 'Probolinggo', '2019-11-12');

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
(1, 1, 12, 'Prob', '2019-12-09');

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
  `bukti` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bukti`
--

INSERT INTO `tb_bukti` (`id_bukti`, `id_kursus`, `nik`, `bukti`) VALUES
(2, 0, 8123912312312, '11122019100452biolog'),
(3, 2147483647, 10, '12122019085713Kelomp'),
(4, 17, 3511012809990010, '12122019091809alur b'),
(5, 23, 3511012809990011, '12122019162957Muhamm'),
(9, 24, 3511012809990007, '13122019152827biolog'),
(10, 27, 3511012809990007, '13122019153449biolog');

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
(1, 0, 90, ''),
(2, 0, 11, ''),
(3, 8, 90, ''),
(4, 10, 90, 'lulus'),
(5, 0, 100, ''),
(6, 8, 80, '');

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
(14, 'Dwita Widyandari', 'Kaliamas Dringu Probolinggo', '081233292287', 'Owner', 'owner', '72122ce96bfec66e2396d2e25225d70a');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  MODIFY `no_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
  MODIFY `no_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id_kursus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `materi_kursus`
--
ALTER TABLE `materi_kursus`
  MODIFY `id_topik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `materi_pelatihan`
--
ALTER TABLE `materi_pelatihan`
  MODIFY `id_topik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sertifikat_kursus`
--
ALTER TABLE `sertifikat_kursus`
  MODIFY `nomor_sertifikat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  MODIFY `nomor_sertifikat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bukti`
--
ALTER TABLE `tb_bukti`
  MODIFY `id_bukti` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ujian_kursus`
--
ALTER TABLE `ujian_kursus`
  MODIFY `id_ujiankursus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ujian_pelatihan`
--
ALTER TABLE `ujian_pelatihan`
  MODIFY `id_ujianpelatihan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
