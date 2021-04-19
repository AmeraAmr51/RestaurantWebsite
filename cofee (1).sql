-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 08:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cofee`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `massage`) VALUES
(1, 'amera amr', 'ameraamr@gmail.com', 'customer', 'thank you for this website'),
(2, 'rmady', 'ramady12@gmail.com', 'customer', 'hello im ramady its good website mera '),
(3, 'amera amr', 'ameraamr@gmail.com', 'hello', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `food_id`, `name`, `description`, `image`, `price`) VALUES
(1, 1, 'GRILLED Beef\r\n', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.', 'images/dish-1.jpg', 50),
(2, 2, 'GRILLED BEEF', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.', 'images/dish-2.jpg', 60),
(3, 3, 'GRILLED BEEF', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.', 'images/dish-3.jpg', 45),
(4, 4, 'GRILLED CHICKEN ', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.\r\n\r\n', 'images/dish-4.jpg', 88),
(5, 5, 'GRILLED SHRIMP ', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.\r\n\r\n', 'images/dish-5.jpg', 100),
(6, 6, 'GRILLED FISH', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.\r\n\r\n', 'images/dish-6.jpg', 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'amera', 'ameraamr@gmail.com', '123456'),
(2, 'root', 'ameraamr@gmail.com', '123456'),
(3, 'amr', 'ameraamr54@gmail.com', '123456'),
(4, 'amiraamr', 'amrnabil27@yahoo.com', '12334'),
(5, 'ammar', 'ameraamr@gmail.com', '123456'),
(6, 'engy', 'ameraamr@gmail.com', '123456'),
(7, 'rmady', 'ramady12@gmail.com', '123456'),
(8, 'root', 'ameraamr@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
