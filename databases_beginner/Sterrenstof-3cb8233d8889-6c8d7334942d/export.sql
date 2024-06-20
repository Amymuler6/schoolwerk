-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 03:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sterrenstelsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `planeten`
--

CREATE TABLE `planeten` (
  `Naam` varchar(255) DEFAULT NULL,
  `Diameter` int(11) DEFAULT NULL,
  `Afstand` int(11) DEFAULT NULL,
  `Massa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planeten`
--

INSERT INTO `planeten` (`Naam`, `Diameter`, `Afstand`, `Massa`) VALUES
('Zon', 139200, 0, 332946),
('Mercurius', 4880, 57910000, 0),
('Venus', 12104, 108208930, 1),
('Aarde', 12756, 149597870, 1),
('Mars', 6794, 227936640, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
