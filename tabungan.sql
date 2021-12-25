-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2021 pada 07.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabungan`
--

CREATE TABLE `tabungan` (
  `id` int(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal_setor` date DEFAULT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabungan`
--

INSERT INTO `tabungan` (`id`, `jumlah`, `tanggal_setor`, `id_user`) VALUES
(1, '600741', '0000-00-00', 1),
(2, '587633', '0000-00-00', 1),
(3, '111832', '0000-00-00', 1),
(4, '136612', '0000-00-00', 1),
(5, '585925', '0000-00-00', 1),
(6, '251000', '0000-00-00', 1),
(7, '544023', '0000-00-00', 1),
(8, '656943', '0000-00-00', 1),
(9, '523679', '0000-00-00', 1),
(10, '609732', '0000-00-00', 1),
(11, '1035678', '0000-00-00', 1),
(12, '987097', '0000-00-00', 1),
(13, '558000', '2021-12-21', 1),
(14, '1900000', '2021-12-21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(20) NOT NULL,
  `id_user` int(20) DEFAULT NULL,
  `nama_user` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `hak_akses` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id`, `id_user`, `nama_user`, `password`, `hak_akses`) VALUES
(1, 1, 'aji', '8d045450ae16dc81213a75b725ee2760', 'admin'),
(2, 2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
