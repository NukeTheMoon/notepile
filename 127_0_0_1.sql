-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2016 at 09:40 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foobars`
--
CREATE DATABASE IF NOT EXISTS `foobars` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `foobars`;

-- --------------------------------------------------------

--
-- Table structure for table `bars`
--

DROP TABLE IF EXISTS `bars`;
CREATE TABLE IF NOT EXISTS `bars` (
  `id` int(11) NOT NULL,
  `foo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bars`
--

INSERT INTO `bars` (`id`, `foo`) VALUES
(1, 'lulz'),
(2, 'lulz2');
--
-- Database: `notepile`
--
CREATE DATABASE IF NOT EXISTS `notepile` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `notepile`;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `content`) VALUES
(1, 'abababa'),
(2, 'fdfggdgdfg'),
(3, 'rhtyhrtrtyry');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
