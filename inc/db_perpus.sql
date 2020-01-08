-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2020 pada 04.14
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
('201328', 'Cristine', 0, 'Manado', 'P'),
('213834', 'Fariz', 0, 'Tangerang', 'P'),
('2015804065', 'Iqbal Rizqi Purnama', 0, 'Ciamis', 'L'),
('54321', 'Lala', 90908878, 'inclementes@intim-plays.ru', 'P'),
('210234', 'maratus', 0, 'pamulang', 'P'),
('21394', 'Ria Putri', 0, 'Gorontalo', 'P'),
('121212', 'surya', 989867879, 'ellston@ufoairs.info', 'L'),
('2015804045', 'Wewen', 0, 'Indramayu', 'P');

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
  `cover` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`, `bukunya`, `cover`) VALUES
(23, 'Matematika', 'Asepudin', 'Gramedial', '2015', '4871847h', 3, 'rak2', '0000-00-00 00:00:00', NULL, NULL),
(24, 'Dasar PHP', 'Solihin', 'Toko bukbek', '2010', '943823jc4', 0, 'rak2', '0000-00-00 00:00:00', NULL, NULL),
(25, 'Pintar CSS', 'Jack', 'Media Suar', '2012', '934748', 7, 'rak1', '0000-00-00 00:00:00', NULL, NULL),
(26, 'Bahasa Arab', 'Soleh', 'Muslim post', '2015', '923847', 4, 'rak1', '0000-00-00 00:00:00', NULL, NULL),
(29, 'Angular js', 'anggul', 'Raja Program', '2016', '943823jc4', 3, 'rak2', '0000-00-00 00:00:00', NULL, NULL),
(30, 'Mahir MySQL', 'April', 'Megatama', '2014', '1234', 3, 'rak1', '2016-10-31 03:03:43', NULL, NULL),
(31, 'Mahir PHP', 'Julian', 'Jorge', '2016', '4325', 2, 'rak3', '2016-10-31 09:06:05', NULL, NULL),
(33, 'test', 'lala', 'lalala', '2014', '4871847h', 5, 'rak2', '2016-10-31 22:03:44', NULL, NULL),
(34, 'HTML Untuk Pemula', 'Surya', 'Penerbit 1', '2014', '2345', 5, 'rak1', '2016-11-05 12:16:37', NULL, NULL),
(38, 'aku dan dia', 'zein', 'maskam', '2019', '213ed12312wq', 12, 'rak1', '2019-12-23 03:10:58', 'PEREDUKSIAN_ADDITIVE_WHITE_GAUSSIAN_NOIS.pdf', NULL),
(40, 'aku dan dirinya', 'zein', 'maskam', '2019', '12sadaas2e2', 111, 'rak2', '2019-12-23 04:41:23', 'wolf_minimalism_art_vector_115878_1920x1080 s.jpg', NULL),
(42, 'asasa', 'zein', 'maskam', '2019', '213ed12312wq', 12, 'rak3', '2019-12-23 04:43:14', 'A Deep Learning Approach To Universal Image.pdf', NULL),
(43, 'kklkklk', 'zein', 'maskam', '2017', '213ewqe12312ew', 12, 'rak3', '2019-12-23 04:44:19', 'A Deep Learning Approach To Universal Image.pdf', NULL),
(44, 'asasa', 'zein', 'maskam', '2019', '123dsdgr', 13, 'rak1', '2019-12-23 10:15:15', 'PEREDUKSIAN_ADDITIVE_WHITE_GAUSSIAN_NOIS.pdf', NULL),
(45, 'ouhbhb', 'uhub', 'gbh', '2018', '1343', 5, 'rak1', '2020-01-05 23:03:02', 'Earthquake Clustering with KMeans.pdf', NULL),
(62, 'ouhbhb', 'Buya', 'Susilo', '2015', '56tyhh', NULL, NULL, '2020-01-07 09:54:16', 'P_20190821_204312.jpg', 'P_20190823_134147.jpg');

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
(7, 'matematika', 2015804045, 'Wewen Nurwendi', '01-11-2015', '08-11-2015', 'Kembali', '', 'yo'),
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
(48, 'Matematika', 201238, 'Lala', '05-01-2020', '12-01-2020', 'Kembali', '', '23');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
