-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2018 pada 02.21
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madridnews`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemain`
--

CREATE TABLE `pemain` (
  `no` int(99) NOT NULL,
  `nama` text NOT NULL,
  `posisi` text NOT NULL,
  `kewarganegaraan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemain`
--

INSERT INTO `pemain` (`no`, `nama`, `posisi`, `kewarganegaraan`) VALUES
(1, 'KEYLOR NAVAS', 'Goalkeeper', 'Costa Rica'),
(2, 'DANIEL CARVAJAL RAMOS', 'Defender', 'Spain'),
(3, 'JESÚS VALLEJO LÁZARO', 'Defender', 'Spain'),
(4, 'SERGIO RAMOS GARCÍA', 'Defender', 'Spain'),
(5, 'RAPHAËL VARANE', 'Defender', 'France'),
(6, 'NACHO', 'Defender', 'Spain'),
(7, 'MARCELO', 'Defender', 'Brazil'),
(8, 'THEO HERNÁNDEZ', 'Defender', 'France'),
(9, 'ACHRAF HAKIMI', 'Defender', 'Spain'),
(10, 'TONI KROOS', 'Midfielder', 'Germany'),
(11, 'LUKA MODRIC', 'Midfielder', 'Croatia'),
(12, 'CASEMIRO', 'Midfielder', 'Brazil'),
(13, 'M. LLORENTE', 'Midfielder', 'Spain'),
(14, 'MARCO ASENSIO', 'Midfielder', 'Spain'),
(15, 'ISCO ALARCÓN', 'Midfielder', 'Spain'),
(16, 'MATEO KOVACIC', 'Midfielder', 'Austria'),
(17, 'D. CEBALLOS', 'Midfielder', 'Spain'),
(18, 'CRISTIANO RONALDO', 'Forward', 'Portugal'),
(19, 'KARIM BENZEMA', 'Forward', 'France'),
(20, 'GARETH BALE', 'Forward', 'Wales'),
(21, 'LUCAS VÁZQUEZ', 'Forward', 'Spain'),
(22, 'B. MAYORAL', 'Forward', 'Spain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(123, 'akmal', 'akmal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
