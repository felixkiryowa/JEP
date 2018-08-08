-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2018 at 02:11 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jep_jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'kiryowa22', '926913e1158ab0086e300a74f5672a64');

-- --------------------------------------------------------

--
-- Table structure for table `bags`
--

CREATE TABLE IF NOT EXISTS `bags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `bags`
--

INSERT INTO `bags` (`id`, `title`, `featured`, `price`, `image`, `description`) VALUES
(11, 'bag 1', 1, '20000', 'bag1.jpg', 'good for students and programmers');

-- --------------------------------------------------------

--
-- Table structure for table `best_sellers`
--

CREATE TABLE IF NOT EXISTS `best_sellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `best_sellers`
--

INSERT INTO `best_sellers` (`id`, `title`, `price`, `image`, `description`) VALUES
(10, 'bag 1', '30,000', 'bag1.jpg', 'Majorly for students and those people going on trips'),
(14, 'fish glaciers', '10,000', 'download_(4).jpg', 'Great Great'),
(15, 'earings 2', '12,000', 'download_(1).jpg', 'so fantastic'),
(17, 'bag 2', '27,000', 'download_(17).jpg', 'Get it for your gal friend'),
(18, 'earings3', '14,000', 'download_(10).jpg', 'just buy and dont hesistate for any more minutes'),
(19, 'bag5', '40,000', 'download_(16).jpg', 'it has really a great color');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `featured`, `price`, `image`, `description`) VALUES
(10, 'Pink Earings', 1, '7000', 'download_(3)1.jpg', 'They are so good incase your going for a party and on a pink dress'),
(11, 'green Gold', 1, '8000', 'download_(10).jpg', 'Gold is always the best of fashion and and has a great combination of dresses and shoes'),
(12, 'Silver Earings', 1, '10000', 'download_(1).jpg', 'They are the newest for the designers and recommend everyone to get them and try them out'),
(14, 'hhffkfj', 1, '7000', 'download_(6).jpg', 'So good');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
