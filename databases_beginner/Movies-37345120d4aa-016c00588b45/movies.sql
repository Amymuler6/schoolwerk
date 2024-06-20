-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 10:30 AM
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
-- Database: `netland`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `duur` float NOT NULL,
  `datum` text DEFAULT NULL,
  `land_van_afkomst` varchar(255) DEFAULT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `id_van_trailer_op_youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `titel`, `duur`, `datum`, `land_van_afkomst`, `omschrijving`, `id_van_trailer_op_youtube`) VALUES
(1, 'Who killed captain alex', 1.04, '1 march 2010', 'Uganda', 'Who Killed Captain Alex? is a 2010 Ugandan action comedy film written, produced, and directed by Nabwana Isaac Geoffrey Godfrey (IGG), by Wakaliwood, an ultra low-budget studio in Kampala, Uganda. Compared to the other movies in this list, actually fun an', 'BymeLkZ7GqM'),
(2, 'Birdemic: Shock and Terror', 1.45, '27 februari 2010', 'USA', 'Birdemic: Shock and Terror (often shortened to Birdemic) is a 2010 American independent romantic thriller-horror film written, directed, and executive produced by James Nguyen, and starring Alan Bagh and Whitney Moore.', 'jE5dJDgZ644'),
(3, 'The amazing Bulk', 1.06, '17 april 2012', 'No idea', 'Henry \"Hank\" Howard works as a scientist in a military lab, trying to create a superhuman formula but with little success.', '8zLvIHvJ4hw'),
(4, 'The Room', 0.99, '17 april 2012', 'USA', 'The Room is a 2003 American independent romantic drama film written, directed, and produced by Tommy Wiseau, who also stars in the film alongside Juliette Danielle and Greg Sestero. Set in San Francisco, the film is centred around a melodramatic love tria', 'OApQGRkJzkE'),
(5, 'scary movie ', 1.28, '7 july 2000', 'USA', 'A year after disposing of the body of a man they accidentally killed, a group of dumb teenagers are stalked by a bumbling serial killer.', 'iQTSHKKpv_E');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
