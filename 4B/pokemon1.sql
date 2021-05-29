-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 02:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon1`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pokemon`
--

CREATE TABLE `detail_pokemon` (
  `id` int(11) NOT NULL,
  `id_pokemon` int(11) NOT NULL,
  `id_element` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pokemon`
--

INSERT INTO `detail_pokemon` (`id`, `id_pokemon`, `id_element`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `element_tb`
--

CREATE TABLE `element_tb` (
  `id_e` int(11) NOT NULL,
  `name_element` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element_tb`
--

INSERT INTO `element_tb` (`id_e`, `name_element`) VALUES
(1, 'api'),
(2, 'air');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon_tb`
--

CREATE TABLE `pokemon_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `str` varchar(191) DEFAULT NULL,
  `def` varchar(191) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokemon_tb`
--

INSERT INTO `pokemon_tb` (`id`, `name`, `str`, `def`, `photo`) VALUES
(1, 'Pikachu', 'listrik', NULL, NULL),
(2, 'bulbasaur', 'ball', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pokemon`
--
ALTER TABLE `detail_pokemon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pokemon` (`id_pokemon`),
  ADD KEY `id_element` (`id_element`);

--
-- Indexes for table `element_tb`
--
ALTER TABLE `element_tb`
  ADD PRIMARY KEY (`id_e`);

--
-- Indexes for table `pokemon_tb`
--
ALTER TABLE `pokemon_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pokemon`
--
ALTER TABLE `detail_pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `element_tb`
--
ALTER TABLE `element_tb`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pokemon_tb`
--
ALTER TABLE `pokemon_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pokemon`
--
ALTER TABLE `detail_pokemon`
  ADD CONSTRAINT `detail_pokemon_ibfk_1` FOREIGN KEY (`id_pokemon`) REFERENCES `pokemon_tb` (`id`),
  ADD CONSTRAINT `detail_pokemon_ibfk_2` FOREIGN KEY (`id_element`) REFERENCES `element_tb` (`id_e`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
