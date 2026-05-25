-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2026 pada 04.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2526_06db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, '2526_06', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_tki`
--

CREATE TABLE `guru_tki` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru_tki`
--

INSERT INTO `guru_tki` (`id`, `nama`, `nip`, `mapel`, `alamat`, `no_hp`, `foto`) VALUES
(1, 'Tanti Eka Sulistiawati,S.Pd', '', 'DPK', '', '', 'bu tanti kimia.jpg'),
(2, 'Hj.Reny eryani,S.Pd', '', 'IPAS', '', '', 'bu hj reny kimia.jpg'),
(3, 'Pujowiatno,S.Pd', '', 'DPK', '', '', 'pak pujo kimia.jpg'),
(4, ' Egi Nila Noriska, S.Pd.', '', 'PRODUK KREATIF DAN KEWIRAUSAHAAN', '', '', 'avatar guru.jpeg'),
(5, ' Atikah, S.Pd.', '', 'KONSENTRASI KEAHLIAN KIMIA/PENGOLAHAN LIMBAH & PIK', '', '', 'avatar guru.jpeg'),
(6, ' Wiwit Dwi Purwiyani, S.Pd.', '', 'KONSENTRASI KEAHLIAN KIMIA/ATK', '', '', 'avatar guru.jpeg'),
(7, ' Putri Ratna Wati, S.Pd.', '', 'PENDIDIKANLINGKUNGAN HIDUP', '', '', 'avatar guru.jpeg'),
(8, ' Nunung Tresnawati, S.Pd.', '', 'KENSENTRASI KEAHLIAN KIMIA/OTK', '', '', 'avatar guru.jpeg'),
(9, ' Ani Sri Heryani, S.S.T., M.Pd.', '', 'KONSENTRASI KEAHLIAN KIMIA/KONTROL PROSES', '', '', 'avatar guru.jpeg'),
(10, ' Yeti Herawati, S.S.I., M.M.Pd.', '', 'PILIHAN KIMIA', '', '', 'avatar guru.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru_tki`
--
ALTER TABLE `guru_tki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guru_tki`
--
ALTER TABLE `guru_tki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
