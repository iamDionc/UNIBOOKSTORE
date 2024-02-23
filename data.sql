-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2024 pada 13.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `kategori_buku` varchar(255) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `harga_buku` varchar(255) NOT NULL,
  `stok_buku` int(11) NOT NULL,
  `penerbit_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `id_buku`, `kategori_buku`, `nama_buku`, `harga_buku`, `stok_buku`, `penerbit_buku`) VALUES
(1, 'K1001', 'Keilmuan', 'Analisis&Perancangan Sistem Informasi', '50.000', 60, 'Penerbit Informatika'),
(30, 'K1002', 'Pertanian', 'Ilmu Padi', '70000', 1, 'Charliem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `id_penerbit` varchar(255) NOT NULL,
  `nama_penerbit` varchar(255) NOT NULL,
  `alamat_penerbit` varchar(255) NOT NULL,
  `kota_penerbit` varchar(255) NOT NULL,
  `telepon_penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id`, `id_penerbit`, `nama_penerbit`, `alamat_penerbit`, `kota_penerbit`, `telepon_penerbit`) VALUES
(1, 'SP01', 'Penerbit Informatika', 'Jl. Buah Batu No.121', 'Bandung', '0813-2220-1946'),
(8, 'SP02', 'Simanjuntak', 'subang kidul', 'Subang', '08977654321'),
(9, 'SP03', 'Charliem', 'Bantarsema', 'Subang', '08977654321');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
