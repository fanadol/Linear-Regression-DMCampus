-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2018 pada 06.37
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `recap`
--

CREATE TABLE `recap` (
  `responden` int(11) NOT NULL,
  `kualitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `keputusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `recap`
--
ALTER TABLE `recap`
  ADD PRIMARY KEY (`responden`),
  ADD KEY `keputusan` (`keputusan`),
  ADD KEY `harga` (`harga`),
  ADD KEY `kualitas` (`kualitas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `recap`
--
ALTER TABLE `recap`
  MODIFY `responden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `recap`
--
ALTER TABLE `recap`
  ADD CONSTRAINT `recap_ibfk_1` FOREIGN KEY (`kualitas`) REFERENCES `kualitas_produk` (`responden`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recap_ibfk_2` FOREIGN KEY (`harga`) REFERENCES `harga_produk` (`responden`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recap_ibfk_3` FOREIGN KEY (`keputusan`) REFERENCES `keputusan_pembelian` (`responden`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
