-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 10:43 AM
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
  `Naam` varchar(255) NOT NULL,
  `Diameter` int(11) NOT NULL,
  `Afstand` int(11) NOT NULL,
  `Massa` float NOT NULL,
  `bezoek_Datum` text DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planeten`
--

INSERT INTO `planeten` (`Naam`, `Diameter`, `Afstand`, `Massa`, `bezoek_Datum`, `ID`) VALUES
('Zon', 139200, 0, 332946, NULL, 1),
('Mercurius', 4880, 57910000, 0.1, NULL, 2),
('Venus', 12104, 108208930, 0.9, NULL, 3),
('Aarde', 12756, 149597870, 1, NULL, 4),
('Mars', 6794, 227936640, 0.1, NULL, 5),
('Maan', 3476000, 384000, 1, '20 juli 1969', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `planeten`
--
ALTER TABLE `planeten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `planeten`
--
ALTER TABLE `planeten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
