-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 11, 2018 at 02:31 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loft_final_001`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_address`, `user_details`) VALUES
(4, 25, 'Manhattan 112 B 111 11', 'Bitcoin payment'),
(5, 25, 'Broadway 23 D 12 3', 'Cash'),
(6, 25, 'Broadway 23 D 12 3', 'Cash'),
(7, 25, 'Broadway 23 D 12 3', 'Cash'),
(8, 25, 'Google 12 D 12 1', 'Credit Card'),
(9, 25, 'Google 12 D 12 1', 'Credit Card'),
(10, 26, 'Kauno 2 1 12 3', 'Cash'),
(11, 26, 'Kauno 2 1 12 3', 'Cash'),
(12, 26, 'Kauno 2 1 12 3', 'Cash'),
(13, 26, 'Kauno 2 1 12 3', 'Cash'),
(14, 26, 'Kauno 2 1 12 3', 'Cash'),
(15, 26, 'Kauno 2 1 12 3', 'Cash'),
(16, 26, 'Kauno 2 1 12 3', 'Cash'),
(17, 26, 'Kauno 2 1 12 3', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`) VALUES
(25, 'Thomas', 'thomas@1.com', '+7 (111) 111 11 11'),
(26, 'Andrew', 'andrew@1.com', '+7 (222) 222 22 22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
