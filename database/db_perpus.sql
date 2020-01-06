-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 04:55 PM
-- Server version: 10.1.38-MariaDB
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
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `password` varchar(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `no_telp` int(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tgl_lahir` varchar(15) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `thn_masuk` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`password`, `username`, `no_telp`, `email`, `tgl_lahir`, `jk`, `prodi`, `thn_masuk`) VALUES
('1234', 'Lala', 2147483647, 'admin@a.w', '', '', '', ''),
('201238', 'Lala', 0, 'Pamulang', '2000-11-03', 'P', 'Managemen', '2015'),
('201328', 'Cristine', 0, 'Manado', '1994-10-01', 'P', 'Teknik Informatika', '2013'),
('2015804045', 'Wewen', 0, 'Indramayu', '2015-11-02', 'P', 'Komputer Akuntansi', '2014'),
('2015804065', 'Iqbal Rizqi Purnama', 0, 'Ciamis', '1996-05-03', 'L', 'Sistem Informasi', '2015'),
('210234', 'maratus', 0, 'pamulang', '1999-12-30', 'P', 'Sistem Informasi', '2011'),
('213834', 'Fariz', 0, 'Tangerang', '2009-02-02', 'P', 'Managemen', '2010'),
('21394', 'Ria Putri', 0, 'Gorontalo', '2005-10-04', 'P', 'Sistem Informasi', '2012');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` datetime NOT NULL,
  `bukunya` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`, `bukunya`) VALUES
(23, 'Matematika', 'Asepudin', 'Gramedial', '2015', '4871847h', 2, 'rak2', '0000-00-00 00:00:00', NULL),
(24, 'Dasar PHP', 'Solihin', 'Toko bukbek', '2010', '943823jc4', 0, 'rak2', '0000-00-00 00:00:00', NULL),
(25, 'Pintar CSS', 'Jack', 'Media Suar', '2012', '934748', 7, 'rak1', '0000-00-00 00:00:00', NULL),
(26, 'Bahasa Arab', 'Soleh', 'Muslim post', '2015', '923847', 4, 'rak1', '0000-00-00 00:00:00', NULL),
(29, 'Angular js', 'anggul', 'Raja Program', '2016', '943823jc4', 3, 'rak2', '0000-00-00 00:00:00', NULL),
(30, 'Mahir MySQL', 'April', 'Megatama', '2014', '1234', 3, 'rak1', '2016-10-31 03:03:43', NULL),
(31, 'Mahir PHP', 'Julian', 'Jorge', '2016', '4325', 2, 'rak3', '2016-10-31 09:06:05', NULL),
(33, 'test', 'lala', 'lalala', '2014', '4871847h', 5, 'rak2', '2016-10-31 22:03:44', NULL),
(34, 'HTML Untuk Pemula', 'Surya', 'Penerbit 1', '2014', '2345', 5, 'rak1', '2016-11-05 12:16:37', NULL),
(38, 'aku dan dia', 'zein', 'maskam', '2019', '213ed12312wq', 12, 'rak1', '2019-12-23 03:10:58', 'PEREDUKSIAN_ADDITIVE_WHITE_GAUSSIAN_NOIS.pdf'),
(40, 'aku dan dirinya', 'zein', 'maskam', '2019', '12sadaas2e2', 111, 'rak2', '2019-12-23 04:41:23', 'wolf_minimalism_art_vector_115878_1920x1080 s.jpg'),
(42, 'asasa', 'zein', 'maskam', '2019', '213ed12312wq', 12, 'rak3', '2019-12-23 04:43:14', 'A Deep Learning Approach To Universal Image.pdf'),
(43, 'kklkklk', 'zein', 'maskam', '2017', '213ewqe12312ew', 12, 'rak3', '2019-12-23 04:44:19', 'A Deep Learning Approach To Universal Image.pdf'),
(44, 'asasa', 'zein', 'maskam', '2019', '123dsdgr', 13, 'rak1', '2019-12-23 10:15:15', 'PEREDUKSIAN_ADDITIVE_WHITE_GAUSSIAN_NOIS.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
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
-- Dumping data for table `tbl_transaksi`
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
(48, 'Matematika', 201238, 'Lala', '05-01-2020', '12-01-2020', 'Pinjam', '', '23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
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
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `email`, `foto`, `level`) VALUES
(1, 'admin kutubuku', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'elank37@gmail.com', 'avatar5.png', 'admin'),
(2, 'Wewen Nurwendi', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'wewen@gmail.com', 'avatar5.png', 'user'),
(6, 'Elang Surya', 'erlang', '622c84b69ee448a07d80de5cbeb13e3d', 'elank76@gmail.com', 'm3.jpg', 'user'),
(7, 'Maratus Solihkah', 'ikha', '622c84b69ee448a07d80de5cbeb13e3d', 'ikhaa@gmail.com', '847531.jpg', 'user'),
(8, 'Tiara sandi', 'tiara', 'd41d8cd98f00b204e9800998ecf8427e', 'tiara14@gmail.com', '761462.jpeg', 'user'),
(9, 'Dinda', 'dinda', '594280c6ddc94399a392934cac9d80d5', 'dinda@gmail.com', '827898.jpg', 'admin'),
(10, 'Ayana', 'ayana', '9570d238a935f4bad98ed85dac7659e9', 'ayana14@gmail.com', '909429.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
