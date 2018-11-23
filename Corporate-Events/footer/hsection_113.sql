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
-- Table structure for table `hsection_113`
--

DROP TABLE IF EXISTS `hsection_113`;
CREATE TABLE IF NOT EXISTS `hsection_113` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsection_113`
--

INSERT INTO `hsection_113` (`id`, `email`, `time`) VALUES
(1, 'hkjain751@gmail.com', '2018-04-21 07:23:00'),
(2, 'pkjain95115@gmail.com', '2018-04-21 07:23:00'),
(7, 'manan.trim@gmail.com', '2018-04-21 08:15:04'),
(8, '', '2018-04-29 19:09:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
