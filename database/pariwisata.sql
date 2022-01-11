-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 09:13 AM
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
  `id_lawan` int(20) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `id_lawan`, `isi`, `waktu`) VALUES
(12, 12, 8, 'dddd', '2022-01-03 05:30:43'),
(17, 12, 8, 'ddaagg', '2022-01-03 07:05:53'),
(18, 12, 8, 'ikl', '2022-01-03 07:08:31'),
(19, 12, 8, 'ddaaf', '2022-01-03 07:20:16'),
(20, 12, 8, 'ii', '2022-01-03 07:23:51'),
(23, 12, 8, 'daf', '2022-01-03 07:33:14'),
(24, 12, 8, 'dda', '2022-01-03 07:38:02'),
(25, 12, 13, 'hai', '2022-01-03 08:30:49'),
(26, 13, 12, 'hai juga', '2022-01-03 08:31:07'),
(27, 12, 9, 'fas', '2022-01-04 03:42:06'),
(28, 14, 12, 'woi', '2022-01-04 04:10:09'),
(29, 12, 14, 'uyy', '2022-01-04 04:14:04'),
(30, 12, 14, 'ddddddddddddddddddddd', '2022-01-08 04:31:46'),
(31, 12, 14, 'x', '2022-01-10 03:37:46'),
(32, 14, 12, 'y', '2022-01-10 03:47:02'),
(33, 12, 14, 'test', '2022-01-11 03:09:27'),
(34, 14, 12, 'oi', '2022-01-11 03:12:32'),
(35, 12, 14, 'io', '2022-01-11 03:15:07'),
(36, 14, 12, 'LL', '2022-01-11 03:24:29'),
(37, 12, 14, 'L', '2022-01-11 03:24:48');

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
(8, 'Inwan Anwar Solihudin', 'inwananwar@gmail.com', 'laki-laki', 'Purwakarta', '', '$2y$10$rKu2UdBvTHEJh43Qob6J8.irVwoTpErE.VCET4xJ3NGzqti4dDDqe', 1, 1, 1639376954),
(9, 'febri', 'febri@gmail.com', 'laki-laki', 'subang', '6285723260587', '$2y$10$O8TVPa8oPE1isXsn31mOWeEMURqdGMXBBZt5GVvv6jSVDukgpBmAm', 2, 1, 1640160997),
(10, 'admin', 'admin@admin.com', 'laki-laki', 'subang', '', '$2y$10$oHlfmnMw/TOML1AHdWOKsuzT/uBjiIRtPS2OPbZHv59K2MtU1LMfW', 1, 1, 1640185013),
(11, 'febrian', 'febrian@gmail.com', 'laki-laki', 'suban', '089123456123', '$2y$10$OvztgGmlw7xgI.Xh9FHtce2UnNuBtJg1OeBX1u2cw4eRhzatSz6Hm', 2, 1, 1640313631),
(12, 'dika', 'dikam@gmail.com', 'laki-laki  ?>', 'subang', '0810002221', '$2y$10$Y0ONubuhlz2LiYOMiJjS9.PPdBLg8qHgBNadHAI509tKJcaaEg/ji', 3, 1, 1640580931),
(13, 'xennossss', 'mdika8140@gmail.com', 'laki-laki', 'Subang', '081212638608', '$2y$10$//IlelPSxtOHPotBCblUYu8FQlmcLMgC8JXA20B.8/O3OW3xodrtC', 3, 1, 1640592449),
(14, 'dd', 'd@gmail.com', 'laki-laki', 'Subang', '', '$2y$10$/gHgPBL4K8H5gl68Rw21M.yrImFW7VVplm/Gc.3qcgzvG7f.wjuti', 2, 1, 1640595107),
(15, 'd', 'd@gmail.com', 'laki-laki', 'Subang', '', '$2y$10$bznkoXW8ita0496yKnEf9eSpbFdwi9V/AByAWw5jcM8xzHqtNcmHW', 2, 1, 1640595354),
(18, 'l', 'l@gmail.com', 'laki-laki', 'l', '0892764129', '$2y$10$NkZGDRugJCxAOCdSwUzZWuZ3MBy6l7cGdxvJs0RnMu4oAqQ8D38Oa', 3, 1, 1641353293);

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
(2, 9, 'subang karya', 'subang kota', 'show off karya anak subang', 'gambar', 'Sudah disetujui', 'wallhaven-3z72w9.jpg', 'google.com', 9, 'https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(3, 9, 'Pantai Lagoi', 'Batam', 'Akomodasi Hotel dan Restoran terdekat', 'Pantai Lagoi', 'Sudah disetujui', '1.jpeg', 'http://192.168.100.39:8080/video', 16, 'https://maps.google.com/maps?q=pantai%20lagoi&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(4, 9, 'Batam Dreamland', 'Batam', 'Akomodasi Hotel dan Restoran terdekat', 'Indahhhh', 'Sudah disetujui', '2.jpeg', '', 134, ''),
(5, 14, 'Pantai Batam', 'Batam', 'Hotell', 'Pantai', 'Sudah disetujui', 'download.png', 'http://192.168.100.39:8080/video', 3, 'gmaps.com'),
(6, 14, 'Batam Park ', 'Batam', 'Tamann', 'Taman Bermain', 'Sudah disetujui', 'dd.jpg', 'http://192.168.100.39:8080/video', 17, 'gmaps/batam.com');

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
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
