-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2021 pada 06.34
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama_role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'pengelola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenkel` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `jenkel`, `alamat`, `password`, `role`, `is_active`, `date_created`) VALUES
(8, 'Inwan Anwar Solihudin', 'inwananwar@gmail.com', 'laki-laki', 'Purwakarta', '$2y$10$rKu2UdBvTHEJh43Qob6J8.irVwoTpErE.VCET4xJ3NGzqti4dDDqe', 1, 1, 1639376954),
(9, 'febri', 'febri@gmail.com', 'laki-laki', 'subang', '$2y$10$O8TVPa8oPE1isXsn31mOWeEMURqdGMXBBZt5GVvv6jSVDukgpBmAm', 2, 1, 1640160997),
(10, 'admin', 'admin@admin.com', 'laki-laki', 'subang', '$2y$10$oHlfmnMw/TOML1AHdWOKsuzT/uBjiIRtPS2OPbZHv59K2MtU1LMfW', 1, 1, 1640185013);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL,
  `nama_wisata` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `fitur` varchar(128) NOT NULL,
  `informasi_wisata` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `link` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_pengelola`, `nama_wisata`, `lokasi`, `fitur`, `informasi_wisata`, `status`, `gambar`, `link`, `map`) VALUES
(1, 9, 'Kewirausahaan', 'Purwakarta', 'jfkfasdf', 'sdahfjkhasjflasjfs', 'Sudah disetujui', 'MH.JPG', '', ''),
(2, 9, 'subang karya', 'subang kota', 'show off karya anak subang', 'gambar', 'Sudah disetujui', 'wallhaven-3z72w9.jpg', 'google.com', ''),
(3, 9, 'Pantai Lagoi', 'Batam', 'Akomodasi Hotel dan Restoran terdekat', 'Pantai Lagoi', 'Belum disetujui', '1.jpeg', '', ''),
(4, 9, 'Batam Dreamland', 'Batam', 'Akomodasi Hotel dan Restoran terdekat', 'Indahhhh', 'Sudah disetujui', '2.jpeg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_pengelola` (`id_pengelola`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`id_pengelola`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
