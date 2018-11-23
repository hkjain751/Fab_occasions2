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
-- Table structure for table `hsection_112`
--

DROP TABLE IF EXISTS `hsection_112`;
CREATE TABLE IF NOT EXISTS `hsection_112` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) DEFAULT NULL,
  `content` varchar(400) DEFAULT NULL,
  `headingmain` varchar(50) DEFAULT NULL,
  `button` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsection_112`
--

INSERT INTO `hsection_112` (`id`, `heading`, `content`, `headingmain`, `button`) VALUES
(1, 'Fab Occasions - Your Business Expander', 'Give Your Business A Genuine Exposure, Just Submit Your Hard-Work In The Form of Pictures, Videos or PDFs, And We''ll Review & Publish Here. And You''re Ready To Shine Among Selected Top Vendors.', 'Why Fab?', 'Register as a Vendors'),
(2, 'Fab Occasions - Your Business Expander', 'Give Your Business A Genuine Exposure, Just Submit Your Hard-Work In The Form of Pictures, Videos or PDFs, And We''ll Review & Publish Here. And You''re Ready To Shine Among Selected Top Vendors.', 'Why Fab?', 'Register as a Vendors'),
(3, '+(91)-755-492-7791', 'contact@faboccasions.in', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
