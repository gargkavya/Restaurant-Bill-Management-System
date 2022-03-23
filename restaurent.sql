-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 12:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `rb_cart`
--

CREATE TABLE IF NOT EXISTS `rb_cart` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `rb_checkout`
--

CREATE TABLE IF NOT EXISTS `rb_checkout` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `rb_food`
--

CREATE TABLE IF NOT EXISTS `rb_food` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rate` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `rb_food`
--

INSERT INTO `rb_food` (`id`, `name`, `rate`) VALUES
(1, 'Aloo Pakora', 80),
(2, 'Cheese Pakora', 90),
(3, 'Chinese Fried Rice', 120),
(4, 'Palak Pulao', 100),
(5, 'Paneer Pakora', 100),
(6, 'Roti', 10),
(7, 'Veg Crispy', 100),
(8, 'Tandoori Roti', 15),
(9, 'Veg Fried Rice', 100);

-- --------------------------------------------------------

--
-- Table structure for table `rb_users`
--

CREATE TABLE IF NOT EXISTS `rb_users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(144) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rb_users`
--

INSERT INTO `rb_users` (`id`, `name`, `password`, `email`) VALUES
(1, 'Jim halpert', '2b45651bddab2127a58a27f709db5af2030e6412', 'jimhalpert@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
