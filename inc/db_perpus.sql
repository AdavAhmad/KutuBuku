-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2020 pada 04.08
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `password` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `no_telp` int(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`password`, `username`, `no_telp`, `email`, `jk`) VALUES
('201328', 'Cristine', 98287873, 'Manado', 'P'),
('213834', 'Fariz', 0, 'Tangerang', 'P'),
('1sampai8', 'galih', 0, 'inclementes@intim-dplays.ru', 'L'),
('12345', 'ilham', 90908878, 'admin@ilham.com', 'L'),
('54321', 'Lala', 90908878, 'inclementes@intim-plays.ru', 'P'),
('210234', 'maratus', 0, 'pamulang', 'P'),
('akujijik', 'marbot', 2147483647, 'ikipiye@gmail.com', 'L'),
('21394', 'Ria Putri', 0, 'Gorontalo', 'P'),
('17.11.1438', 'Samingun', 2147483647, 'suryayaya@gmail.cominfo', 'L'),
('121212', 'surya', 989867879, 'ellston@ufoairs.info', 'L'),
('2015804045', 'Wewen', 0, 'Indramayu', 'P'),
('gueganteng', 'WinardiLeksono', 989867879, 'surya@surya.comi', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) DEFAULT NULL,
  `lokasi` enum('rak1','rak2','rak3') DEFAULT NULL,
  `tgl_input` datetime NOT NULL,
  `bukunya` varchar(150) DEFAULT NULL,
  `cover` varchar(250) DEFAULT NULL,
  `id_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`, `bukunya`, `cover`, `id_kategori`) VALUES
(23, 'Matematika', 'Asepudin', 'Gramedial', '2015', '4871847h', 3, 'rak2', '0000-00-00 00:00:00', NULL, NULL, ''),
(24, 'Dasar PHP', 'Solihin', 'Toko bukbek', '2010', '943823jc4', 0, 'rak2', '0000-00-00 00:00:00', NULL, NULL, '4'),
(25, 'Pintar CSS', 'Jack', 'Media Suar', '2012', '934748', 7, 'rak1', '0000-00-00 00:00:00', NULL, NULL, ''),
(26, 'Bahasa Arab', 'Soleh', 'Muslim post', '2015', '923847', 4, 'rak1', '0000-00-00 00:00:00', NULL, NULL, ''),
(29, 'Angular js', 'anggul', 'Raja Program', '2016', '943823jc4', 3, 'rak2', '0000-00-00 00:00:00', NULL, NULL, ''),
(30, 'Mahir MySQL', 'April', 'Megatama', '2014', '1234', 3, 'rak1', '2016-10-31 03:03:43', NULL, NULL, '3'),
(31, 'Mahir PHP', 'Julian', 'Jorge', '2016', '4325', 2, 'rak3', '2016-10-31 09:06:05', NULL, NULL, '3'),
(33, 'test', 'lala', 'lalala', '2014', '4871847h', 5, 'rak2', '2016-10-31 22:03:44', NULL, NULL, '3'),
(34, 'HTML Untuk Pemula', 'Surya', 'Penerbit 1', '2014', '2345', 5, 'rak1', '2016-11-05 12:16:37', NULL, NULL, '3'),
(38, 'aku dan dia', 'zein', 'maskam', '2019', '213ed12312wq', 12, 'rak1', '2019-12-23 03:10:58', 'PEREDUKSIAN_ADDITIVE_WHITE_GAUSSIAN_NOIS.pdf', NULL, '1'),
(40, 'aku dan dirinya', 'zein', 'maskam', '2019', '12sadaas2e2', 111, 'rak2', '2019-12-23 04:41:23', 'wolf_minimalism_art_vector_115878_1920x1080 s.jpg', NULL, '3'),
(42, 'asasa', 'zein', 'maskam', '2019', '213ed12312wq', 12, 'rak3', '2019-12-23 04:43:14', 'A Deep Learning Approach To Universal Image.pdf', NULL, '1'),
(43, 'kklkklk', 'zein', 'maskam', '2017', '213ewqe12312ew', 12, 'rak3', '2019-12-23 04:44:19', 'A Deep Learning Approach To Universal Image.pdf', NULL, '1'),
(44, 'asasa', 'zein', 'maskam', '2019', '123dsdgr', 13, 'rak1', '2019-12-23 10:15:15', 'PEREDUKSIAN_ADDITIVE_WHITE_GAUSSIAN_NOIS.pdf', NULL, '1'),
(63, 'Harry Potter', 'JK Rowlling', 'Suryaloka', '2000', '9008298493', NULL, NULL, '2020-01-10 00:45:13', 'Git.pdf', '4.png', ''),
(64, 'Kimi Hime', 'jambret', 'Surya Citra', '2000', '9008298499090', NULL, NULL, '2020-01-10 02:53:19', '16d15ffc5b0f97a542e01780f785421185b8.pdf', '2.png', ''),
(65, 'Similikiti', 'jambrurt', 'Suryakalo', '2003', '9008298493', NULL, NULL, '2020-01-10 03:33:22', '3.png', '4.png', ''),
(66, 'Enterpreneur', 'M Suyanto', 'Andi', '2005', '90082984998768', NULL, NULL, '2020-01-10 08:51:46', '1.jpg', '3.png', '4'),
(67, 'Fotografi', 'M Suyanto', 'Andi', '2003', '900829849768221', NULL, NULL, '2020-01-10 08:55:00', '1.png', '2.png', ''),
(69, 'Bismllah', 'M Suyanto', 'Andi', '2001', '11212324312', NULL, NULL, '2020-01-10 09:07:51', '4.png', '3.png', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Karya Ilmiah'),
(2, 'Komik'),
(3, 'Novel'),
(4, 'Pemprograman'),
(6, 'Religi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(250) DEFAULT NULL,
  `id_buku` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`, `id_buku`) VALUES
(7, 'matematika', 2015804045, 'Wewen Nurwendi', '01-11-2015', '08-11-2015', 'Kembali', '', NULL),
(9, 'PHP Dasar', 2015804065, 'Iqbal Rizqi Purnama', '24-10-2016', '07-11-2016', 'Kembali', '', NULL),
(11, 'matematika', 2011140204, 'Erlang', '28-10-2016', '09-11-2016', 'perpanjang', 'pinjem lagi', NULL),
(12, 'PHP Dasar', 2015804045, 'Wewen', '28-10-2016', '04-11-2016', 'Kembali', '', NULL),
(13, 'Samudra PHP', 210234, 'maratus', '28-10-2016', '04-11-2016', 'Kembali', 'lope', NULL),
(15, 'Pintar CSS', 210234, 'maratus', '04-11-2016', '11-11-2016', 'Kembali', 'pintar', NULL),
(19, 'Mahir MySQL', 213834, 'Fariz', '04-11-2016', '25-11-2016', 'Kembali', 'daspd', NULL),
(20, 'Pintar CSS', 201328, 'Cristine', '04-11-2016', '11-11-2016', 'perpanjang', '', NULL),
(21, 'Pintar CSS', 201328, 'Cristine', '04-11-2016', '11-11-2016', 'Kembali', '', NULL),
(22, 'Pintar CSS', 201328, 'Cristine', '30-11-2016', '09-11-2016', 'Kembali', '', NULL),
(23, 'Angular js', 201238, 'Lala', '04-11-2016', '11-11-2016', '', 'sdad', NULL),
(24, 'Mahir PHP', 201238, 'Lala', '05-11-2016', '12-11-2016', '', 'lal', NULL),
(25, 'Matematika', 21394, 'Ria Putri', '05-11-2016', '12-11-2016', 'Kembali', 'lalsd', NULL),
(26, 'Matematika', 201238, 'Lala', '22-12-2019', '29-12-2019', 'Kembali', '', NULL),
(27, 'Matematika', 201238, 'Lala', '22-12-2019', '29-12-2019', 'Kembali', '', NULL),
(28, 'Matematika', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(29, 'Pintar CSS', 201238, 'Lala', '22-12-2019', '29-12-2019', 'Kembali', '', NULL),
(30, 'Bahasa Arab', 201238, 'Lala', '22-12-2019', '29-12-2019', 'Kembali', '', NULL),
(31, 'test', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(32, 'Pintar CSS', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(33, 'Matematika', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(34, 'Mahir MySQL', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(35, 'Bahasa Arab', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(36, 'aku dan dia', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(37, 'HTML Untuk Pemula', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(38, 'Angular js', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(39, 'Mahir MySQL', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(40, 'Matematika', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', NULL),
(41, 'aku dan dia', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', '38'),
(42, 'aku dan dirinya', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', '40'),
(43, 'kklkklk', 201238, 'Lala', '22-12-2019', '29-12-2019', '', '', '43'),
(44, 'Matematika', 201238, 'Lala', '23-12-2019', '30-12-2019', '', '', '23'),
(45, 'asasa', 201238, 'Lala', '23-12-2019', '30-12-2019', '', '', '42'),
(46, 'Bahasa Arab', 201238, 'Lala', '23-12-2019', '30-12-2019', '', '', '26'),
(47, 'HTML Untuk Pemula', 201238, 'Lala', '30-12-2019', '30-12-2019', '', '', '34'),
(48, 'Matematika', 201238, 'Lala', '05-01-2020', '12-01-2020', 'Kembali', '', '23'),
(49, '', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembaliii', 'dipinjam 7 hari', ''),
(50, '', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembaliii', 'dipinjam 7 hari', ''),
(51, 'ouhbhb', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '45'),
(52, 'ouhbhb', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Pinjam', 'dipinjam 7 hari', '45'),
(53, 'ouhbhb', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '45'),
(54, 'ouhbhb', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '45'),
(55, 'ouhbhb', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '45'),
(56, 'ouhbhb', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '45'),
(57, 'ouhbhb', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '45'),
(58, 'asasa', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '42'),
(59, 'asasa', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '42'),
(60, 'asasa', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembaliii', 'dipinjam 7 hari', '42'),
(61, 'kklkklk', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Kembali', 'dipinjam 7 hari', '43'),
(62, 'ouhbhb', 54321, 'Lala', '08-01-2020', '15-01-2020', 'Pinjam', 'dipinjam 7 hari', '62'),
(63, 'asasa', 54321, 'Lala', '09-01-2020', '16-01-2020', 'Kembali', 'dipinjam 7 hari', '42'),
(64, 'asasa', 54321, 'Lala', '09-01-2020', '16-01-2020', 'Pinjam', 'dipinjam 7 hari', '42'),
(65, 'asasa', 54321, 'Lala', '09-01-2020', '16-01-2020', 'Kembali', 'dipinjam 7 hari', '42'),
(66, 'ouhbhb', 121212, 'surya', '09-01-2020', '23-01-2020', 'Pinjam', 'dipinjam 7 hari', '45'),
(67, 'Mahir PHP', 121212, 'surya', '09-01-2020', '16-01-2020', 'Pinjam', 'dipinjam 7 hari', '31'),
(68, 'HTML Untuk Pemula', 121212, 'surya', '09-01-2020', '16-01-2020', 'Pinjam', 'dipinjam 7 hari', '34'),
(69, 'Angular js', 121212, 'surya', '09-01-2020', '16-01-2020', 'Kembali', 'dipinjam 7 hari', '29'),
(70, 'test', 121212, 'surya', '09-01-2020', '16-01-2020', 'Kembali', 'dipinjam 7 hari', '33'),
(71, 'ouhbhb', 121212, 'surya', '09-01-2020', '16-01-2020', 'Pinjam', 'dipinjam 7 hari', '62'),
(72, 'Mahir PHP', 121212, 'surya', '09-01-2020', '16-01-2020', 'Pinjam', 'dipinjam 7 hari', '31'),
(73, 'aku dan dirinya', 121212, 'surya', '09-01-2020', '16-01-2020', 'Pinjam', 'dipinjam 7 hari', '40'),
(74, 'Kimi Hime', 121212, 'surya', '09-01-2020', '16-01-2020', 'Pinjam', 'dipinjam 7 hari', '64');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `email`, `foto`, `level`) VALUES
(1, 'admin kutubuku', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'elank37@gmail.com', 'avatar5.png', 'admin'),
(2, 'Wewen Nurwendi', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'wewen@gmail.com', 'avatar5.png', 'user'),
(6, 'Surya', 'erlang', '622c84b69ee448a07d80de5cbeb13e3d', 'elank76@gmail.com', 'm3.jpg', 'user'),
(7, 'Maratus Solihkah', 'ikha', '622c84b69ee448a07d80de5cbeb13e3d', 'ikhaa@gmail.com', '847531.jpg', 'user'),
(8, 'Tiara sandi', 'tiara', 'd41d8cd98f00b204e9800998ecf8427e', 'tiara14@gmail.com', '761462.jpeg', 'user'),
(9, 'Dinda', 'dinda', '594280c6ddc94399a392934cac9d80d5', 'dinda@gmail.com', '827898.jpg', 'admin'),
(10, 'Ayana', 'ayana', '9570d238a935f4bad98ed85dac7659e9', 'ayana14@gmail.com', '909429.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
