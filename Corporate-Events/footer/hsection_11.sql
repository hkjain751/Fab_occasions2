-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 11:09 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faboccasions`
--

-- --------------------------------------------------------

--
-- Table structure for table `hsection_11`
--

DROP TABLE IF EXISTS `hsection_11`;
CREATE TABLE IF NOT EXISTS `hsection_11` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `option` varchar(50) DEFAULT NULL,
  `field` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsection_11`
--

INSERT INTO `hsection_11` (`id`, `option`, `field`) VALUES
(1, 'Mumbai', 'city'),
(2, 'Bhopal', 'city'),
(3, 'Jabalpur', 'city'),
(4, 'Delhi', 'city'),
(5, 'Indore', 'city'),
(6, 'Gwalior', 'city'),
(7, 'Venues', 'vendor'),
(8, 'Banquet Halls', 'vendor'),
(9, 'Terrace Lawn', 'vendor'),
(10, 'Outdoor', 'vendor'),
(11, 'Indoor', 'vendor'),
(12, 'Jewellery', 'vendor'),
(13, 'Accessories', 'vendor'),
(14, 'Mehendi Artists', 'vendor'),
(15, 'Video Graphers', 'vendor'),
(16, 'D.J', 'vendor'),
(17, 'Home', 'more'),
(18, 'Idea', 'more'),
(19, 'Blog', 'more'),
(20, 'Inspiration', 'more'),
(21, 'Real Wedding', 'more'),
(22, 'Gifts & Activity', 'more'),
(23, 'Planning with us', 'more'),
(24, 'Careers', 'more'),
(25, 'Contact Us', 'more'),
(26, 'About Us', 'more'),
(27, 'Jaipur', 'city'),
(28, 'Pune', 'city'),
(29, 'Raipur', 'city');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
