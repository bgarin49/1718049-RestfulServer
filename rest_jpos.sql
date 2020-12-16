-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 12:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_jpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tulungagung`
--

CREATE TABLE `tulungagung` (
  `id` int(11) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `desa` varchar(32) NOT NULL,
  `wilayah` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tulungagung`
--

INSERT INTO `tulungagung` (`id`, `kode_pos`, `desa`, `wilayah`) VALUES
(1, 66212, 'Kampungdalem', 'Tulungagung'),
(2, 66216, 'Tertek', 'Tulungagung'),
(3, 66224, 'Kedungwaru', 'Kedungwaru'),
(4, 66229, 'Bulusari', 'Kedungwaru'),
(5, 66234, 'Boyolangu', 'Kepuh'),
(6, 66293, 'Aryojeding', 'Rejotangan'),
(7, 66213, 'Botoran', 'Tulungagung'),
(8, 66217, 'Karangwaru', 'Tulungagung'),
(9, 66225, 'Rejoagung', 'Kedungwaru'),
(10, 66231, 'Gedangsewu', 'Boyolangu'),
(11, 66235, 'Karangrejo', 'Boyolangu'),
(12, 66281, 'Tunggangri', 'Kalidawir'),
(13, 66214, 'Panggungrejo', 'Tulungagung'),
(14, 66218, 'Jepun', 'Tulungagung'),
(15, 66232, 'Sobontoro', 'Boyolangu'),
(16, 66261, 'Batangsaren', 'Kauman'),
(17, 66219, 'Kepatihan', 'Tulungagung'),
(18, 66215, 'Kedungsoko', 'Tulungagung'),
(19, 66233, 'Beji', 'Boyolangu'),
(20, 66292, 'Pulosari', 'Ngunut'),
(21, 66227, 'Tawangsari', 'Kedungwaru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tulungagung`
--
ALTER TABLE `tulungagung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tulungagung`
--
ALTER TABLE `tulungagung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
