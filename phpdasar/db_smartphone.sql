-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2024 pada 04.57
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smartphone`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_smarphone`
--

CREATE TABLE `tb_smarphone` (
  `id` int(11) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `versi` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_smarphone`
--

INSERT INTO `tb_smarphone` (`id`, `merek`, `type`, `versi`, `os`, `gambar`) VALUES
(1, 'apple', 'infinix h10s NFC', 'Android 15', 'Android', '67332f86afa2d.jpg'),
(2, 'Apple', 'Iphone 15', 'Os 5', 'ios 14', 'Apple.jpg'),
(3, 'Samsung', 'Galaxy S24', 'Android 13', 'Android', 'samsung.jpg'),
(4, 'Infinix', 'Infinix Note 10f', 'Android 13', 'Android', 'infinix.jpg'),
(5, 'Xiaomi', 'Xiami Note 4x', 'Android 15', 'Android', 'infinix.jpg'),
(6, 'Samsung', 'Samsung Galaxy S4', 'Android 9', 'Android', 'samsung.jpg'),
(7, 'Samsung', 'Samsung Galaxy S8', 'Android 11', 'Android', 'samsung.jpg'),
(8, 'Samsung', 'Samsung Galaxy S9', 'Android 9', 'Android', 'samsung.jpg'),
(10, 'Apple', 'Iphone XR', 'Ios', 'IOs', 'Apple.jpg'),
(11, 'Xiaomi', 'Samsung Galaxy S4', 'Android 9', 'Android', '66f84de932f16.jpg'),
(15, 'Xiaomi', 'Xiami Note 4x', 'Android 15', 'Android', 'infinix.jpg'),
(16, 'Samsung', 'Xiami Note 4x', 'Android 11', 'Android', 'infinix.jpg'),
(17, 'Samsung', 'Xiami Note 4x', 'Android 9', 'Android', 'Apple.jpg'),
(18, 'Xiaomi', 'Samsung Galaxy S8', 'Android 11', 'Android', '66f84db2e1cf6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `email`, `password`) VALUES
(7, 'bangjali', 'ronaldo@gmail.com', '$2y$10$07rf33hpIgjt1SSsevLrQuFY2VXZUxEM3SHReDyA0d/SsS4hUAvxG'),
(8, 'bangjago', 'bangjago@gmail.com', '$2y$10$Lfh1M/cf9NuXYuBUjRyPr.SgmrGz86nx.BwhC2jCkBwP/CY1mbhA6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_smarphone`
--
ALTER TABLE `tb_smarphone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_smarphone`
--
ALTER TABLE `tb_smarphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
