-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 06:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

mysql -u root -p

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beber`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `login_action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialty`, `login_action`) VALUES
(1, 'Dr. Ahmad Yani', 'Poli KIA', 'loginKIA.php'),
(2, 'drg. Devi Sintiasakti', 'Poli GIGI', 'loginGIGI.php'),
(3, 'dr. selly Marchella Prestika', 'Poli UMUM', 'loginUMUM.php'),
(4, 'Yanti Krisdayanti,A.Md RMIK', 'Poli LANSIA', 'loginLANSIA.php'),
(5, 'Pa Gumilang', 'Poli TB.PARU', 'loginPARU.php'),
(6, 'dr. selly Marchella Prestika', 'Poli ANAK', 'loginAnk.php');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `antrian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `keluhan` text NOT NULL,
  `poli` varchar(50) DEFAULT NULL,
  `dokter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`antrian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `reset_antrian` ON SCHEDULE EVERY 1 DAY STARTS '2024-04-01 01:09:14' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
    UPDATE detail_pasien SET antrian = 0;
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
