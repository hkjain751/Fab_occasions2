-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 01:38 PM
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
-- Table structure for table `hsection_10`
--

DROP TABLE IF EXISTS `hsection_10`;
CREATE TABLE IF NOT EXISTS `hsection_10` (
  `id` int(5) NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsection_10`
--

INSERT INTO `hsection_10` (`id`, `content`) VALUES
(10, 'We at Fab, are here to provide you with the most creative, exciting & accurate Assistance to make your memory happen which could have been ruined due to your busy schedule. Enjoy, spend time and cherish the moments with your loved ones, and the rest would be taken care by fab. So don''t think much and make your dream happen.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
