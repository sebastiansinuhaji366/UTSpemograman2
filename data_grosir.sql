-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2022 pada 07.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_grosir`
--

CREATE TABLE `data_grosir` (
  `id_barang` int(15) NOT NULL,
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `source_barang` varchar(50) NOT NULL,
  `harga_barang` varchar(30) NOT NULL,
  `jumlah_barang` varchar(20) NOT NULL,
  `harga_modal` varchar(60) NOT NULL,
  `status` enum('bagus','rusak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_grosir`
--

INSERT INTO `data_grosir` (`id_barang`, `kode_barang`, `nama_barang`, `source_barang`, `harga_barang`, `jumlah_barang`, `harga_modal`, `status`) VALUES
(7, '2134', 'fas', 'fsa', '4121', '34', '122', 'rusak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_grosir`
--
ALTER TABLE `data_grosir`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_grosir`
--
ALTER TABLE `data_grosir`
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
