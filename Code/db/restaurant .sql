-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 06:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `rb_cart`
--

CREATE TABLE `rb_cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rb_cart`
--

INSERT INTO `rb_cart` (`id`, `name`, `email`, `quantity`, `total`) VALUES
(1, 'Palak Pulao', 'michaelscott@gmail.com', 2, 200),
(2, 'Cheese Pakora', 'michaelscott@gmail.com', 1, 90),
(3, 'Tandoori Roti', 'michaelscott@gmail.com', 5, 75);

-- --------------------------------------------------------

--
-- Table structure for table `rb_checkout`
--

CREATE TABLE `rb_checkout` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rb_checkout`
--

INSERT INTO `rb_checkout` (`id`, `name`, `email`, `quantity`, `total`) VALUES
(1, 'Aloo Pakora', 'jimhalpert@gmail.com', 1, 80),
(2, 'Chinese Fried Rice', 'jimhalpert@gmail.com', 3, 360),
(3, 'Veg Crispy', 'jimhalpert@gmail.com', 1, 100),
(4, 'Paneer Pakora', 'jimhalpert@gmail.com', 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `rb_food`
--

CREATE TABLE `rb_food` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `rb_users` (
  `id` int(255) NOT NULL,
  `name` varchar(144) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rb_users`
--

INSERT INTO `rb_users` (`id`, `name`, `password`, `email`) VALUES
(1, 'Jim Halpert', '1cd02e31b43620d7c664e038ca42a060d61727b9', 'jimhalpert@gmail.com'),
(2, 'Michael Scott', '17b9e1c64588c7fa6419b4d29dc1f4426279ba01', 'michaelscott@gmail.com'),
(3, 'Chandler Bing', 'e689b9bed77a631d5dead51c500329e2a23046eb', 'chandlerbing@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rb_cart`
--
ALTER TABLE `rb_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rb_checkout`
--
ALTER TABLE `rb_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rb_food`
--
ALTER TABLE `rb_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rb_users`
--
ALTER TABLE `rb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rb_cart`
--
ALTER TABLE `rb_cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `rb_checkout`
--
ALTER TABLE `rb_checkout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `rb_food`
--
ALTER TABLE `rb_food`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `rb_users`
--
ALTER TABLE `rb_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
