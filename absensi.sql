-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 01:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` int(6) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `waktu_pengisian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `jk`, `keterangan`, `waktu_pengisian`) VALUES
(19, 'MOHD. YUSUF', 0, '', 'Alpa', '2024-01-23 05:18:10'),
(24, 'Rahmat', 213457, 'Laki Laki', 'Hadir', '2024-01-30 05:59:49'),
(31, 'Nadia khusnul', 213456, 'Perempuan', 'Hadir', '2024-01-24 05:55:56'),
(32, 'Indah Yanti', 213456, 'Perempuan', 'Hadir', '2024-01-24 06:44:18'),
(33, 'Indah Yanti', 213456, 'Perempuan', 'Izin', '2024-01-24 06:57:15'),
(35, 'farhiah nailul authar', 213450, 'Perempuan', 'Sakit', '2024-01-30 05:57:38'),
(36, 'Nadia khusnul', 213457, 'Laki Laki', 'Izin', '2024-01-31 05:36:38'),
(37, 'Rahmat', 213456, 'Perempuan', 'Hadir', '2024-01-31 05:44:51'),
(38, 'abdul wahab', 213457, 'Laki Laki', 'Hadir', '2024-01-31 05:45:20'),
(39, 'Arham', 213458, 'Perempuan', 'Izin', '2024-01-31 05:45:45'),
(40, 'Nadia khusnul', 213458, '', 'Hadir', '2024-01-31 05:47:36'),
(41, 'farhiah nailul authar', 213459, 'Perempuan', 'Alpa', '2024-01-31 05:48:22'),
(42, 'Farhiah', 213457, 'Laki Laki', 'Izin', '2024-01-31 05:49:15'),
(43, 'abdul wahab', 213458, 'Laki Laki', 'Izin', '2024-01-31 05:49:48'),
(44, 'Nadia khusnul', 213457, 'Laki Laki', 'Sakit', '2024-01-31 07:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `nohp`, `password`) VALUES
(1, 'rahmat', 'rahmat', 'rahmat@gmail.com', '081234567890', '$2y$10$Eu3ZnGuoPdC3v8yAOVtn0.Xg7xrOtSetBKYA3I..ELGFibukKMRd2'),
(3, 'irgi', 'irgi', 'irgi@gmail.com', '08213456678', '$2y$10$gg/ukAhl47PKeMloyzhMc.5yFiJrEl.PmCnByAn4M1aQbdvGKaAN.'),
(5, 'rahmat amir', 'matt', 'blablagmail.com', '9867757658', '$2y$10$J2xVMIHTKAC6YevsKG6L8ep.4yM8zz6oVq9tD24l5h9354.2EjxO6'),
(6, 'Abdul Wahab', 'Wahab', 'rahmat@gmail.com', '08213456678', '$2y$10$H0uOKODVaECuh193td0lYObesRrWZis5j6hNZu6qkmGSmul8tX3u6'),
(7, 'indah', 'indah', 'blablagmail.com', '9867757658', '$2y$10$sQkLZa.6KsNeNMQgG55zUuujrGl5KAFitoBrjpGzvO61ZEsVHvJm2'),
(8, 'in', 'in', 'blablagmail.com', '080786546', '$2y$10$GPiLmdh.Ghw5mP0xIc6V1Ot3C6uKGKBqZGEXPYJezzRmomjjroSvK'),
(9, 'fhia', 'fhia', 'blablagmail.com', '09865434667', '$2y$10$hwv64QZ2z2bse6Kv5KTUT.E1DQVAzFCkQoLAwozMENtlqRX4b/IE.'),
(10, 'mawar', 'mawar', 'blablagmail.com', '08657236553', '$2y$10$BqYLpMC..XHq93RFE3bnPOqz3Bfv0keBKfb/Qh7LcEBZNYYXHObR2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
