-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 04:01 AM
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
(2, 'pengelola');

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
(9, 'febri', 'febri@gmail.com', 'laki-laki', 'subang', '085723260587', '$2y$10$O8TVPa8oPE1isXsn31mOWeEMURqdGMXBBZt5GVvv6jSVDukgpBmAm', 2, 1, 1640160997),
(10, 'admin', 'admin@admin.com', 'laki-laki', 'subang', '', '$2y$10$oHlfmnMw/TOML1AHdWOKsuzT/uBjiIRtPS2OPbZHv59K2MtU1LMfW', 1, 1, 1640185013),
(11, 'febrian', 'febrian@gmail.com', 'laki-laki', 'suban', '089123456123', '$2y$10$OvztgGmlw7xgI.Xh9FHtce2UnNuBtJg1OeBX1u2cw4eRhzatSz6Hm', 2, 1, 1640313631);

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
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_pengelola`, `nama_wisata`, `lokasi`, `fitur`, `informasi_wisata`, `status`, `gambar`, `link`, `map`) VALUES
(1, 9, 'Kewirausahaan', 'Purwakarta', 'jfkfasdf', 'sdahfjkhasjflasjfs', 'Belum disetujui', 'MH.JPG', '', ''),
(2, 9, 'subang karya', 'subang kota', 'show off karya anak subang', 'gambar', 'Sudah disetujui', 'wallhaven-3z72w9.jpg', 'google.com', ''),
(3, 9, 'Pantai Lagoi', 'Batam', 'Akomodasi Hotel dan Restoran terdekat', 'Pantai Lagoi', 'Belum disetujui', '1.jpeg', '', ''),
(4, 9, 'Batam Dreamland', 'Batam', 'Akomodasi Hotel dan Restoran terdekat', 'Indahhhh', 'Sudah disetujui', '2.jpeg', '', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
