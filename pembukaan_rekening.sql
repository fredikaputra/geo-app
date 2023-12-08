-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Dec 08, 2023 at 10:17 AM
-- Server version: 8.0.32
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembukaan_rekening`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint UNSIGNED NOT NULL,
  `nim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `prodi` text COLLATE utf8mb4_unicode_ci,
  `semester` int DEFAULT NULL,
  `nomor_hp` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `password` text COLLATE utf8mb4_unicode_ci,
  `level` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nim`, `nama`, `prodi`, `semester`, `nomor_hp`, `email`, `password`, `level`) VALUES
(1, '1243', 'Gadang', 'Sistem Informasi', 3, '085243324', 'gadang@example.com', '$2y$12$1btva471m2w/Ge5yRmowFuUxCe/aF/Tp3gKnGYgOR25GTild2g9pq', 1),
(2, '12341234', 'Narji', 'Sistem Informasi', 3, '085243324', 'narji@example.com', '$2y$12$4Tyslj5B5unlazh4AhFgO.6qpj0V3Yqod2EgwUjIYy6Qs.HTIXsLi', 2);

-- --------------------------------------------------------

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
