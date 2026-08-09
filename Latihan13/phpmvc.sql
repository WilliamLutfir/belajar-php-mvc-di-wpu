-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2026 at 05:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nim` text NOT NULL,
  `email` text NOT NULL,
  `jur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jur`) VALUES
(1, 'William Lutfir Rahman Harjo', '0701202183', 'williamlutfi06@gmail.com', 'Ilmu Komputer'),
(2, 'Budi Santoso', '0701202184', 'budisantoso@gmail.com', 'Sistem Informasi'),
(3, 'Siti Aminah', '0701202185', 'sitiaminah@gmail.com', 'Teknik Informatika'),
(4, 'Andi Pratama', '0701202186', 'andipratama@gmail.com', 'Sistem Informasi'),
(5, 'Dewi Lestari', '0701202187', 'dewilestari@gmail.com', 'Teknik Informatika'),
(6, 'Rizky Saputra', '0701202188', 'rizkysaputra@gmail.com', 'Sistem Informasi'),
(7, 'Putri Maharani', '0701202189', 'putrimaharani@gmail.com', 'Teknik Informatika'),
(8, 'Fajar Nugroho', '0701202190', 'fajarnugroho@gmail.com', 'Sistem Informasi'),
(9, 'Ayu Wulandari', '0701202191', 'ayuwulandari@gmail.com', 'Teknik Informatika'),
(10, 'Dimas Setiawan', '0701202192', 'dimassetiawan@gmail.com', 'Sistem Informasi'),
(11, 'Rina Anggraini', '0701202193', 'rinaanggraini@gmail.com', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
