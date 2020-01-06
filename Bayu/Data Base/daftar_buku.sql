-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2019 pada 16.29
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Nama_buku` varchar(100) NOT NULL,
  `Kode_buku` int(11) NOT NULL,
  `Id_peminjam` varchar(11) NOT NULL,
  `Tanggal_pinjam` varchar(11) NOT NULL,
  `Tanggal_kembali` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Nama_buku`, `Kode_buku`, `Id_peminjam`, `Tanggal_pinjam`, `Tanggal_kembali`) VALUES
('Pemrograman dengan PHP lengkap', 12345, '45366', '19/03/18', '19/03/20'),
('Android Studio Expert', 43636, '36366', '19/03/18', '19/03/20'),
('CSS + HTML Dalam 7 Hari', 54664, '59856', '12/03/18', '19/03/18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `Nama_buku` varchar(100) NOT NULL,
  `Kode_buku` int(11) NOT NULL,
  `Kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`Nama_buku`, `Kode_buku`, `Kategori`) VALUES
('Pemrograman dengan PHP lengkap', 12345, 'Pemrograman WEB'),
('Android Studio Expert', 57875, 'Pemrograman Android'),
('CSS + HTML Dalam 7 Hari', 68664, 'Dasar - Dasar Pemrograman WEB');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`Kode_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `Kode_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68665;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
