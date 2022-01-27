-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 06:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `njilayetu`
--

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(34) COLLATE utf8_bin NOT NULL,
  `pais` varchar(50) COLLATE utf8_bin NOT NULL,
  `provincia` varchar(50) COLLATE utf8_bin NOT NULL,
  `latitude` varchar(200) COLLATE utf8_bin NOT NULL,
  `longitude` varchar(200) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `pais`, `provincia`, `latitude`, `longitude`, `created_at`) VALUES
(3, 'Ermelinda Lusolo Tavares', 'Angola', 'Viana', '-8.9020314172895', '13.371734619141', '2022-01-27 16:38:09'),
(4, 'Marlene Francisco', 'Angola', 'Malanje', '-9.4707356741309', '16.380615234375', '2022-01-27 16:39:04'),
(5, 'Mateu Adão', 'Angola', 'Huambo', '-12.704650508288', '15.7763671875', '2022-01-27 16:39:39'),
(6, 'Oficina Mamadú', 'USA', 'Wis', '44.74673324024678', '-89.7802734375', '2022-01-27 16:39:56'),
(7, 'Bar customizado', 'México', 'Zaranza', '23.039297747769726', '-102.26074218749999', '2022-01-27 16:55:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
