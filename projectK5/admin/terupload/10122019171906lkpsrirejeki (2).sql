-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2019 pada 12.55
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

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
-- Struktur dari tabel `calon_peserta`
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
-- Dumping data untuk tabel `calon_peserta`
--

INSERT INTO `calon_peserta` (`nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `email`, `username`, `password`, `alamat`, `kode_pos`, `provinsi`, `pendidikan`, `status`) VALUES
('bis', 8123912312312, 'Jember', '2019-12-18', 'laki-laki', '089896141901', 'gatot12@gmail.com', 'queen12', 'queen12', 'mangli', '898790', 'jatim', 'SMP', 0),
('Adi Irawan', 3511012809990002, 'Bondowoso', '1999-09-28', 'Laki-laki', '083853996176', 'adi@gmail.com', 'adiirawan', 'adiirawan', 'Maesan Bondowoso', '68262', 'Jawa Timur', 'SMK', 3),
('sab', 3511012809990003, 'Jember', '2019-12-01', 'perempuan', '0899889712121', 'sab@gmail.com', 'sab', 'sab', 'jember', '89381', 'Jawa Timur', 'SMP', 0),
('gogon', 3511012809990004, 'Jember', '2019-12-01', 'laki-laki', '089988971222', 'gogon@gmail.com', 'gogon', 'gogon', 'jember', '67220', 'Jawa Timur', 'SMA', 2),
('Muhammad Marsa Kamal Setiawan', 3511012809990007, 'Jember', '1999-09-09', 'Laki-laki', '08998897121', 'marsajanscall@yahoo.', 'mks111', 'mks111', 'Probolinggo', '62771', 'Jawa Timur', 'SMP', 1),
('gatot', 3511012809990051, 'jember', '2019-11-03', 'laki-laki', '0899889712112', 'gatot@gmail.com', 'gatot', 'gatot', 'mangli', '45454', 'Jawa Timur', 'SMA', 0),
('bayu tol', 4738120398397238, 'pp', '2019-12-18', 'perempuan', '089896141901', 'gatoat@gmail.com', 'bayu', 'bayu', 'sss', '62771', 'jatim', 'SMA', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(30) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `nama_file`, `deskripsi`) VALUES
(1, 'Posty.jpg', 'GO FLEX WITH POST MALONE'),
(4, 'posty3000.jpg', 'EL DIABLO POST MALONE'),
(5, 'postmalone.jpg', 'PEACE POSTY');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kursus`
--

CREATE TABLE `jadwal_kursus` (
  `no_jadwal` int(10) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `file` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_kursus`
--

INSERT INTO `jadwal_kursus` (`no_jadwal`, `deskripsi`, `file`, `level`) VALUES
(1, 'asdf', '10122019122229Hasil ', 'Level 1'),
(6, 'KOKOKO', 'Bu Bety cans.png', 'Level 1'),
(7, 'Ar', 'Black haha.png', 'Level 2'),
(8, 'Kumaha atuh', 'Jenis tipe file.docx', 'Level 3'),
(9, 'LOSS GAK REWEL HAHA', 'Bu Bety cans.png', 'Level 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pelatihan`
--

CREATE TABLE `jadwal_pelatihan` (
  `no_jadwal` int(10) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_pelatihan`
--

INSERT INTO `jadwal_pelatihan` (`no_jadwal`, `deskripsi`, `file`) VALUES
(1, 'awa12', 'Bu Bety cans.png'),
(2, 'aswa123', ''),
(3, 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdi', '10122019122810Jenis ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursus`
--

CREATE TABLE `kursus` (
  `id_kursus` int(10) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `jenis_level` varchar(10) NOT NULL,
  `file_kursus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kursus`
--

INSERT INTO `kursus` (`id_kursus`, `nik`, `jenis_level`, `file_kursus`) VALUES
(8, 3511012809990007, 'Level 1', ''),
(10, 3511012809990051, 'level1', '04122019190813Jenis '),
(11, 8123912312312, 'level1', '10122019082442Hasil ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_kursus`
--

CREATE TABLE `materi_kursus` (
  `id_topik` int(10) NOT NULL,
  `topik` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `dokumen` varchar(20) NOT NULL,
  `jenis_level` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi_kursus`
--

INSERT INTO `materi_kursus` (`id_topik`, `topik`, `tgl_mulai`, `tgl_akhir`, `deskripsi`, `dokumen`, `jenis_level`, `status`) VALUES
(1, 'Brian', '2019-11-15', '2019-11-30', 'Nakal', '10122019104954Jenis ', 'Level 1', 'Aktif'),
(2, 'Membuat Pakaian Haloween', '2019-11-15', '2019-11-30', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '10122019112031Jenis ', 'Level 2', 'Aktif'),
(3, 'Membuat Pakaian Haloween', '2019-11-15', '2019-11-30', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '101220191120552019_0', 'Level 3', 'Aktif'),
(7, 'a', '2019-12-11', '2019-12-27', 'asdas', 'sad', 'Level 1', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_pelatihan`
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
-- Dumping data untuk tabel `materi_pelatihan`
--

INSERT INTO `materi_pelatihan` (`id_topik`, `topik`, `tgl_mulai`, `tgl_akhir`, `deskripsi`, `dokumen`, `status`) VALUES
(1, 'Membuat Pakaian Pesta', '2019-11-15', '2019-11-30', 'Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo', '10122019111215Jenis tipe file (1).docx', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(10) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `file_pelatihan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nik`, `file_pelatihan`) VALUES
(1, 3511012809990002, 'Jenis tipe file.docx'),
(2, 3511011809990009, '28112019135756[M] St'),
(4, 3511012809990051, '28112019140523PENCAK'),
(8, 4738120398397238, '04122019091915biolog');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat_kursus`
--

CREATE TABLE `sertifikat_kursus` (
  `nomor_sertifikat` int(10) NOT NULL,
  `id_ujiankursus` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikat_kursus`
--

INSERT INTO `sertifikat_kursus` (`nomor_sertifikat`, `id_ujiankursus`, `id_user`, `tempat`, `tanggal`) VALUES
(1, 3, 9, 'Probolinggo', '2019-12-04'),
(2, 4, 9, 'bali', '2019-12-05'),
(3, 6, 13, 'Probolinggo', '2019-11-12'),
(4, 6, 13, 'Probolinggo', '2019-11-12'),
(5, 6, 13, 'Probolinggo', '2019-11-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat_pelatihan`
--

CREATE TABLE `sertifikat_pelatihan` (
  `nomor_sertifikat` int(5) NOT NULL,
  `id_ujianpelatihan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikat_pelatihan`
--

INSERT INTO `sertifikat_pelatihan` (`nomor_sertifikat`, `id_ujianpelatihan`, `id_user`, `tempat`, `tanggal`) VALUES
(1, 1, 12, 'Prob', '2019-12-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampilan`
--

CREATE TABLE `tampilan` (
  `judul` varchar(255) NOT NULL,
  `judul_deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bukti`
--

CREATE TABLE `tb_bukti` (
  `id_bukti` int(3) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `bukti` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bukti`
--

INSERT INTO `tb_bukti` (`id_bukti`, `nik`, `bukti`) VALUES
(1, 3511012809990051, '04122019190841KARYA ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian_kursus`
--

CREATE TABLE `ujian_kursus` (
  `id_ujiankursus` int(10) NOT NULL,
  `id_kursus` int(10) NOT NULL,
  `nilai` int(3) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian_kursus`
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
-- Struktur dari tabel `ujian_pelatihan`
--

CREATE TABLE `ujian_pelatihan` (
  `id_ujianpelatihan` int(10) NOT NULL,
  `id_pelatihan` int(10) NOT NULL,
  `nilai` int(3) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `nohp_user`, `level`, `username`, `password`) VALUES
(9, 'Muhammad Marsa Kamal Setiawan', 'jl brantas perumahan kademangan asri blok b no 5', '08989614190', 'Owner', 'mks110', '54b7a3221f83ca9d17f3'),
(10, 'Brian Vidyanjaya', 'perum kalirejo', '0812345678910', 'owner', 'brian123', '929064f2a141f812f1c2'),
(11, 'Adi Irawan', 'Bondowoso Maesan', '08989123712', 'owner', 'adi123', '7360409d967a24b667af'),
(12, 'Trio Mahendra', 'Trenggalek', '081218712124', 'admin', 'hendra123', 'ded3d0299c47566fbf51'),
(13, 'Bayu Jaya', 'situbondo', '089896141901', 'admin', 'bayu123', '92360c2c392c85b23f38'),
(14, 'Owner Sejati', 'Everywhere', '00000000000', 'owner', 'ownermarsa', '72122ce96bfec66e2396d2e25225d70a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_peserta`
--
ALTER TABLE `calon_peserta`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  ADD PRIMARY KEY (`no_jadwal`);

--
-- Indeks untuk tabel `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
  ADD PRIMARY KEY (`no_jadwal`);

--
-- Indeks untuk tabel `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kursus`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `materi_kursus`
--
ALTER TABLE `materi_kursus`
  ADD PRIMARY KEY (`id_topik`);

--
-- Indeks untuk tabel `materi_pelatihan`
--
ALTER TABLE `materi_pelatihan`
  ADD PRIMARY KEY (`id_topik`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `sertifikat_kursus`
--
ALTER TABLE `sertifikat_kursus`
  ADD PRIMARY KEY (`nomor_sertifikat`);

--
-- Indeks untuk tabel `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  ADD PRIMARY KEY (`nomor_sertifikat`);

--
-- Indeks untuk tabel `tb_bukti`
--
ALTER TABLE `tb_bukti`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indeks untuk tabel `ujian_kursus`
--
ALTER TABLE `ujian_kursus`
  ADD PRIMARY KEY (`id_ujiankursus`);

--
-- Indeks untuk tabel `ujian_pelatihan`
--
ALTER TABLE `ujian_pelatihan`
  ADD PRIMARY KEY (`id_ujianpelatihan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  MODIFY `no_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
  MODIFY `no_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id_kursus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `materi_kursus`
--
ALTER TABLE `materi_kursus`
  MODIFY `id_topik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `materi_pelatihan`
--
ALTER TABLE `materi_pelatihan`
  MODIFY `id_topik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sertifikat_kursus`
--
ALTER TABLE `sertifikat_kursus`
  MODIFY `nomor_sertifikat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  MODIFY `nomor_sertifikat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_bukti`
--
ALTER TABLE `tb_bukti`
  MODIFY `id_bukti` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ujian_kursus`
--
ALTER TABLE `ujian_kursus`
  MODIFY `id_ujiankursus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ujian_pelatihan`
--
ALTER TABLE `ujian_pelatihan`
  MODIFY `id_ujianpelatihan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
