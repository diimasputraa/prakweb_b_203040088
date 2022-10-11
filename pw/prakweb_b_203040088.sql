-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 02:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_b_203040088`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL,
  `gambar_buku` varchar(100) NOT NULL,
  `tahun_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `pengarang_buku`, `penerbit_buku`, `gambar_buku`, `tahun_terbit`) VALUES
(1, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Gramedia', 'bumi_manusia.jpg', '2014-05-05'),
(2, 'Catatan Seorang Demonstran', 'Soe Hok Gie', 'Gramedia', 'catatan_seorang_demonstran.jpg', '2016-02-15'),
(3, 'Dilan', 'Pidi Baiq', 'Gramedia', 'dilan.jpg', '2018-10-10'),
(4, 'Koala Kumal', 'Raditya Dika', 'Erlangga', 'koala_kumal.jpg', '2017-08-25'),
(5, 'Laskar Pelangi', 'Andrea Hirata', 'Erlangga', 'laskar_pelangi.jpg', '2015-10-22'),
(6, 'Lelaki Harimau', 'Eka Kurniawan', 'Republika', 'lelaki_harimau.png', '2014-09-09'),
(7, 'Madilog', 'Tan Malaka', 'Republika', 'madilog.jpg', '2018-10-14'),
(8, 'Ngenest', 'Ernest Prakasa', 'Gramedia', 'ngenest.jpg', '2018-06-12'),
(9, 'Perjalanan Menuju Pulang', 'Lara Nuberg', 'Gramedia', 'perjalanan_menuju_pulang.jpeg', '2018-12-12'),
(10, 'Rindu', 'Tere Liye', 'Republika', 'rindu.jpg', '2019-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
