-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 03:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Quote Type` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(2000) DEFAULT NULL,
  `Design Name` varchar(200) DEFAULT NULL,
  `Size` varchar(1000) DEFAULT NULL,
  `File format` varchar(1000) DEFAULT NULL,
  `Notes` varchar(2000) NOT NULL,
  `File` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Quote Type`, `Name`, `phone`, `email`, `Design Name`, `Size`, `File format`, `Notes`, `File`) VALUES
(1, 'Quote for embroidery digitizing instead', 'nj', '45', 'jk@ejd.r', '', '', 'Quote for embroidery digitizing instead', '', 'd8c6258d-f0e0-409c-8bc2-be7b8386636c.jpg'),
(2, 'Quote for embroidery digitizing instead', 'sdfds', '2343', 'sdf@ssd.sdf', '', '', 'Quote for sdfs', '', '85d8293a-0bbe-47b8-b617-71ab858fe575.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `Type of quote` enum('for embroidery','for vector art') NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SizeDesign Name` varchar(20) NOT NULL,
  `Design Name` varchar(50) NOT NULL,
  `File Format` int(50) NOT NULL,
  `Notes` text NOT NULL,
  `3d puff` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5211;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
