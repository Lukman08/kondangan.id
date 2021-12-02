-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2021 pada 15.20
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buwuan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beras`
--

CREATE TABLE `beras` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beras`
--

INSERT INTO `beras` (`id`, `nama`, `jumlah`, `alamat`) VALUES
(2, 'adinda putri novka rizky', '60', 'Cirebon'),
(6, 'Lukman Hakim', '50', 'Indramayu'),
(7, 'siti putri rohayati', '70', 'Indramayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hadiah`
--

CREATE TABLE `hadiah` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hadiah` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hadiah`
--

INSERT INTO `hadiah` (`id`, `nama`, `hadiah`, `alamat`) VALUES
(2, 'adinda dan lee haechan', 'mobil tesla', 'korea selatan'),
(4, 'Lukman Hakim', 'Sepeda', 'Indramayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `waktu` time NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `nama`, `waktu`, `alamat`) VALUES
(4, 'adinda dan lee haechan', '14:26:00', 'seoul, korea selatan'),
(5, 'adinda dan nct', '14:27:00', 'gangnam, seoul korea selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang`
--

CREATE TABLE `uang` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uang`
--

INSERT INTO `uang` (`id`, `nama`, `jumlah`, `alamat`) VALUES
(2, 'dinda dan suami', '1000000000', 'bayalangu kidul'),
(4, 'Lukman Hakim', '25000000', 'Indramayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `no` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`no`, `username`, `nama`, `password`) VALUES
(1, 'lukman08', 'Lukman Hakim', 'lukman08'),
(2, 'adinda', 'adinda putri novka rizky', 'adinda'),
(3, 'puput', 'siti putri rohayati', 'puput');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beras`
--
ALTER TABLE `beras`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hadiah`
--
ALTER TABLE `hadiah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uang`
--
ALTER TABLE `uang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beras`
--
ALTER TABLE `beras`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `hadiah`
--
ALTER TABLE `hadiah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `uang`
--
ALTER TABLE `uang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
