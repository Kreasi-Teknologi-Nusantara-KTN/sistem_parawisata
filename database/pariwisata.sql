-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 02:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama_user` varchar(40) DEFAULT NULL,
  `id_lawan` int(20) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `nama_user`, `id_lawan`, `isi`, `waktu`, `status`) VALUES
(12, 12, NULL, 8, 'dddd', '2022-01-03 05:30:43', 0),
(17, 12, NULL, 8, 'ddaagg', '2022-01-03 07:05:53', 0),
(18, 12, NULL, 8, 'ikl', '2022-01-03 07:08:31', 0),
(19, 12, NULL, 8, 'ddaaf', '2022-01-03 07:20:16', 0),
(20, 12, NULL, 8, 'ii', '2022-01-03 07:23:51', 0),
(23, 12, NULL, 8, 'daf', '2022-01-03 07:33:14', 0),
(24, 12, NULL, 8, 'dda', '2022-01-03 07:38:02', 0),
(25, 12, NULL, 13, 'hai', '2022-01-03 08:30:49', 0),
(26, 13, NULL, 12, 'hai juga', '2022-01-03 08:31:07', 0),
(27, 12, NULL, 9, 'fas', '2022-01-04 03:42:06', 1),
(28, 14, NULL, 12, 'woi', '2022-01-04 04:10:09', 0),
(30, 12, NULL, 14, 'ddddddddddddddddddddd', '2022-01-08 04:31:46', 1),
(32, 14, NULL, 12, 'y', '2022-01-10 03:47:02', 0),
(33, 12, NULL, 14, 'test', '2022-01-11 03:09:27', 1),
(34, 14, NULL, 12, 'oi', '2022-01-11 03:12:32', 0),
(36, 14, NULL, 12, 'LL', '2022-01-11 03:24:29', 0),
(39, 14, NULL, 12, 'p', '2022-01-12 05:08:11', 0),
(40, 14, NULL, 12, 'l', '2022-01-12 05:13:47', 0),
(41, 13, NULL, 14, 'test', '2022-01-19 08:26:37', 1),
(42, 13, 'xennossss', 14, 'lol', '2022-01-19 08:44:17', 1),
(43, 12, 'dika', 9, 'p', '2022-01-20 04:23:08', 1),
(44, 9, NULL, 12, 'papp', '2022-01-20 04:26:43', 0),
(45, 12, 'dika', 14, 'woi', '2022-01-20 04:48:17', 1),
(46, 12, 'dika', 14, 'ppp', '2022-01-20 04:58:14', 1),
(47, 12, 'dika', 14, 'a', '2022-01-20 05:03:48', 1),
(48, 12, 'dika', 14, 'as', '2022-01-20 05:04:17', 1),
(49, 12, 'dika', 14, 'a', '2022-01-20 05:05:24', 1),
(50, 12, 'dika', 14, 'pd', '2022-01-20 05:33:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama_role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'pengelola'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenkel` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `jenkel`, `alamat`, `kontak`, `password`, `role`, `is_active`, `date_created`) VALUES
(8, 'Inwan Anwar Solihudinn', 'inwananwar@gmail.com', 'laki-laki', 'Purwakarta', '087165312738', '$2y$10$enDi9qG5n.3fqc0/pkX7ge1plnhpOYfFFNx9hxqp7zAq5/QUkJmf6', 1, 1, 1639376954),
(9, 'febri', 'febri@gmail.com', 'laki-laki', 'subang', '6285723260587', '$2y$10$O8TVPa8oPE1isXsn31mOWeEMURqdGMXBBZt5GVvv6jSVDukgpBmAm', 2, 1, 1640160997),
(10, 'admin', 'admin@admin.com', 'laki-laki', 'subang', '', '$2y$10$oHlfmnMw/TOML1AHdWOKsuzT/uBjiIRtPS2OPbZHv59K2MtU1LMfW', 1, 1, 1640185013),
(11, 'febrian', 'febrian@gmail.com', 'laki-laki', 'suban', '089123456123', '$2y$10$OvztgGmlw7xgI.Xh9FHtce2UnNuBtJg1OeBX1u2cw4eRhzatSz6Hm', 2, 1, 1640313631),
(12, 'dika', 'dikam@gmail.com', 'Laki-laki', 'subang', '0810002221', '$2y$10$N2VJCzsp0ArQQota6pCxbuA17f1OscIK1/Qa.u0.bKT1XIf3KnP32', 3, 1, 1640580931),
(13, 'xennossss', 'mdika8140@gmail.com', 'laki-laki', 'Subang', '081212638608', '$2y$10$//IlelPSxtOHPotBCblUYu8FQlmcLMgC8JXA20B.8/O3OW3xodrtC', 3, 1, 1640592449),
(14, 'dd', 'd@gmail.com', 'laki-laki', 'Subang', '', '$2y$10$/gHgPBL4K8H5gl68Rw21M.yrImFW7VVplm/Gc.3qcgzvG7f.wjuti', 2, 1, 1640595107),
(15, 'dor', 'dor@gmail.com', 'laki-laki', 'Subang', '', '$2y$10$bznkoXW8ita0496yKnEf9eSpbFdwi9V/AByAWw5jcM8xzHqtNcmHW', 2, 1, 1640595354),
(23, 'L', 'l@gmail.com', 'laki-laki', 'l', '8294171', '$2y$10$1Z85OGxndrs0Z64PfjYJGu0oymdwDoBvuTOsSZv3W433nN8WY1R/C', 3, 1, 1642491235);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
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
  `point_rekomendasi` int(50) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_pengelola`, `nama_wisata`, `lokasi`, `fitur`, `informasi_wisata`, `status`, `gambar`, `link`, `point_rekomendasi`, `map`) VALUES
(1, 9, 'Kewirausahaan', 'Purwakarta', 'jfkfasdf', 'sdahfjkhasjflasjfs', 'Belum disetujui', 'MH.JPG', '', 0, ''),
(2, 9, 'subang karya', 'subang kota', 'show off karya anak subang', 'gambar', 'Sudah disetujui', 'wallhaven-3z72w9.jpg', 'google.com', 10, 'https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(3, 9, 'Pantai Lagoi', 'Batam', 'Akomodasi Hotel dan Restoran terdekat', 'Pantai Lagoi', 'Sudah disetujui', '1.jpeg', 'http://192.168.100.39:8080/video', 120, 'https://maps.google.com/maps?q=pantai%20lagoi&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(4, 9, 'Batam Dreamland', 'Batam', 'Akomodasi Hotel dan Restoran terdekat', 'Indahhhh', 'Sudah disetujui', '2.jpeg', '', 134, ''),
(5, 14, 'Pantai Batam', 'Batam', 'Hotell', 'Pantai', 'Sudah disetujui', 'download.png', 'http://192.168.100.39:8080/video', 5, 'gmaps.com'),
(6, 14, 'Batam Park ', 'Batam', 'Tamann', 'Taman Bermain', 'Sudah disetujui', 'dd.jpg', 'http://192.168.100.39:8080/video', 22, 'gmaps/batam.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_pengelola` (`id_pengelola`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`id_pengelola`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
