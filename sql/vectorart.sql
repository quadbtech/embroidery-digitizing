-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 07:30 PM
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
-- Database: `vectorart`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacthome`
--

CREATE TABLE `contacthome` (
  `id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `phone` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `time` varchar(2000) NOT NULL,
  `from_ip` varchar(2000) NOT NULL,
  `from_browser` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacthome`
--

INSERT INTO `contacthome` (`id`, `name`, `phone`, `email`, `time`, `from_ip`, `from_browser`) VALUES
(1, 'vcdv', '4554', 'gdfvg@rr.hh', 'Wed, 29 Jan 2020 23:12:43 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(2, 'vff', '4545', 'vvf@ff.gf', 'Wed, 29 Jan 2020 23:15:06 +0530', '::1', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Mobile Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `phone` varchar(2000) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `company` varchar(2000) NOT NULL,
  `time` varchar(2000) NOT NULL,
  `from_ip` varchar(2000) NOT NULL,
  `from_browser` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `message`, `company`, `time`, `from_ip`, `from_browser`) VALUES
(26, 'xc', 'xcxc', 'xc', 'xc', 'x', '', '', ''),
(27, 'xc', 'xcxc@df.hj', 'xc', 'xc', 'x', '', '', ''),
(28, 'erfer', 'x @ef.j', 'xc', 'c', 'v', '', '', ''),
(29, 'erfer', 'sdcsd@erfe.fr', 'xc', 'c', 'v', '', '', ''),
(30, 'dsfgdg', 'xcvxc', 'xcv', 'xc', 'dcd', '', '', ''),
(31, 'zdfsd', 'xdfds@dsfd.gh', 'xcvx', 'xcv', 'c xc', '', '', ''),
(32, 'zv', 'dxv', 'cv', 'cv', 'xcf', '', '', ''),
(33, 'zv', 'dxv', 'cv', 'cv', 'xcf', '', '', ''),
(34, 'zv', 'dxv', 'cv', 'cv', 'xcf', '', '', ''),
(35, 'perry', 'jdsfvisdj@dfdfgv.jj', '87876', 'cv ', 'cxvcx', '', '', ''),
(36, 'rtyr', 'dfgf@sdf.gh', '64555', 'ghf', 'fg', '', '', ''),
(37, 'xvx', 'cv@sdrfd.ghcxv', 'dfbd', 'xcv', 'xcv', '', '', ''),
(38, 'dfg', 'xfv@ds.hf', '454554', 'df', 'df', '', '', ''),
(39, 'dfgfd', 'xcvx@fdsfd.fghfg', 'vcgv', 'gvgv', 'gvg', '', '', ''),
(40, 'inij', 'ijji@kfmsd.sdf', 'ij999', 'j', 'jj', '', '', ''),
(41, 'dfvfs', 'cv', 'xcv', 'sdf', 'sdvsd', '', '', ''),
(42, 'dfvfs', 'cv2DSESR.FGGF', 'xcv', 'sdf', 'sdvsd', '', '', ''),
(43, 'dfvfs', 'cv2DSES@R.FGGF', 'xcv', 'sdf', 'sdvsd', '', '', ''),
(44, 'CVBC', 'XCVCX@DFG.FGHF', 'CV ', 'XCV', 'XV', '', '', ''),
(45, ' XCVB', 'XCV@DSFS.FG', 'RTE', 'D', 'XC', '', '', ''),
(46, 'XCV', 'SDF@SERFSE.GHGH', 'DSF', 'SD', 'X', '', '', ''),
(47, 'bg', 'gh@hfd.df', 'uhy', 'jjn', 'uh', '', '', ''),
(48, 'perry', 'cfgc@dtdfg.gff', '8787877878', 'dfgdf', 'cgfc', '', '', ''),
(49, 'dfg', 'dfv@dsdf.dfhfdh', '45544554', 'dfgdf', 'dfds', '', '', ''),
(50, 'bbhhb', 'huhu@jjd.dd', 'hhjh88', 'gg', 'ggg', 'Wed, 29 Jan 2020 23:39:59 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `Quote Type` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(2000) DEFAULT NULL,
  `Design Name` varchar(200) DEFAULT NULL,
  `Size` varchar(1000) DEFAULT NULL,
  `File format` varchar(1000) DEFAULT NULL,
  `Notes` varchar(2000) NOT NULL,
  `File` varchar(200) NOT NULL,
  `time` varchar(2000) NOT NULL,
  `from_ip` varchar(2000) NOT NULL,
  `from_browser` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `Quote Type`, `Name`, `phone`, `email`, `Design Name`, `Size`, `File format`, `Notes`, `File`, `time`, `from_ip`, `from_browser`) VALUES
(1, 'Quote for embroidery digitizing instead', 'nj', '45', 'jk@ejd.r', '', '', 'Quote for embroidery digitizing instead', '', 'd8c6258d-f0e0-409c-8bc2-be7b8386636c.jpg', '', '', ''),
(2, 'Quote for embroidery digitizing instead', 'sdfds', '2343', 'sdf@ssd.sdf', '', '', 'Quote for sdfs', '', '85d8293a-0bbe-47b8-b617-71ab858fe575.jpg', '', '', ''),
(3, 'Quote for embroidery digitizing instead', 'parvinder', '45455', 'sdsd@gms.df', 'sdcd', '', 'Quote fo', 'sdf', 'deepak.jpg', '', '', ''),
(4, 'Quote for embroidery digitizing instead', 'trr', '5454', 'dfdf@ed.hfhf', '', '', 'Quote for embroidery digitizing instead', '', 'Finstreet Web Banner1.png', 'Wed, 29 Jan 2020 23:36:25 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(5, 'Quote for embroidery digitizing instead', 'vbb', '5454', 'dffd@rr.fh', '', '', 'Tajima .dst', '', '', 'Wed, 29 Jan 2020 23:51:06 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacthome`
--
ALTER TABLE `contacthome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
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
-- AUTO_INCREMENT for table `contacthome`
--
ALTER TABLE `contacthome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
