-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2019 at 07:55 AM
-- Server version: 5.7.23
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
-- Database: `bigstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `proName` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `proName`) VALUES
(1, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 1'),
(2, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 2'),
(3, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 3'),
(5, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 5'),
(6, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 6'),
(7, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 7'),
(8, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 8'),
(9, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 9'),
(10, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 10'),
(11, 'Ù…Ø­ØµÙˆÙ„ Ø´Ù…Ø§Ø±Ù‡ 11');

-- --------------------------------------------------------

--
-- Table structure for table `repository`
--

DROP TABLE IF EXISTS `repository`;
CREATE TABLE IF NOT EXISTS `repository` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `repName` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repository`
--

INSERT INTO `repository` (`id`, `repName`) VALUES
(1, 'Ø§Ù†Ø¨Ø§Ø± Ø´Ù…Ø§Ø±Ù‡ 1'),
(2, 'Ø§Ù†Ø¨Ø§Ø± Ø´Ù…Ø§Ø±Ù‡ 2'),
(3, 'Ø§Ù†Ø¨Ø§Ø± Ø´Ù…Ø§Ø±Ù‡ 3'),
(4, 'Ø§Ù†Ø¨Ø§Ø± Ø´Ù…Ø§Ø±Ù‡ 4'),
(5, 'Ø§Ù†Ø¨Ø§Ø± Ø´Ù…Ø§Ø±Ù‡ 5'),
(18, 'Ø§Ù†Ø¨Ø§Ø± Ø´Ù…Ø§Ø±Ù‡ 7'),
(19, 'Ø§Ù†Ø¨Ø§Ø± Ø´Ù…Ø§Ø±Ù‡ 8'),
(22, 'Ø§Ù†Ø¨Ø§Ø± Ø´Ù…Ø§Ø±Ù‡ 9');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE IF NOT EXISTS `search` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `idP` int(2) NOT NULL,
  `numberOfProduct` int(20) NOT NULL,
  `idR` int(2) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idP` (`idP`),
  KEY `idR` (`idR`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `idP`, `numberOfProduct`, `idR`, `date`) VALUES
(34, 8, 80000, 3, '2019-02-13 11:42:48'),
(36, 10, 5623, 4, '2019-02-13 11:56:02'),
(42, 5, 500, 18, '2019-02-14 10:22:09'),
(43, 2, 3600, 4, '2019-02-14 10:22:20'),
(45, 11, 110000, 19, '2019-02-14 11:10:50'),
(46, 6, 60000, 3, '2019-02-14 11:13:32');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `prd_cat_fk` FOREIGN KEY (`idP`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rep_cat_fk` FOREIGN KEY (`idR`) REFERENCES `repository` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
