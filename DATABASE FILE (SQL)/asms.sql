-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2023 at 05:51 PM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parth`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `NAME` text NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `SERVICES` text NOT NULL,
  `DATE` datetime(6) NOT NULL,
  `TIME` text NOT NULL,
  `PHONE` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`p_id`, `NAME`, `EMAIL`, `SERVICES`, `DATE`, `TIME`, `PHONE`, `status`) VALUES
(1, 'parth', 'parthparmar75409@gmail.com', 'spa', '2023-04-28 00:00:00.000000', '2:00PM', 565656, 1),
(2, 'parth', 'parthparmar75409@gmail.com', 'haircut', '2023-04-27 00:00:00.000000', '5:30pm', 1234567890, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `complain` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`p_id`, `name`, `email`, `complain`, `status`) VALUES
(1, 'tapan', 't@gmail.com', 'hurfhjenroigjiwrgoi9wergij', 1),
(2, 'xyz', 'p@gmail.com', 'i dont lik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

DROP TABLE IF EXISTS `pro`;
CREATE TABLE IF NOT EXISTS `pro` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `city` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`p_id`, `name`, `email`, `phone`, `uname`, `password`, `city`, `status`) VALUES
(1, 'PARTH', 'parthparmar75409@gmail.com', 2551, 'Parth@02', 'Parth@02', 's.nagar', 1),
(2, 'tapan', 'tp@gmail.com', 456, 'tapan123', 't1', 'rajkot', 1),
(3, 'royal', 'royalparth75409@gmail.com', 123456789, 'tapa', 'Parth@02', 'SURENDRANAGAR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

DROP TABLE IF EXISTS `treatment`;
CREATE TABLE IF NOT EXISTS `treatment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `T_NAME` varchar(10) NOT NULL,
  `T_PRICE` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`p_id`, `T_NAME`, `T_PRICE`, `status`) VALUES
(1, 'spa', 500, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
