-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 11:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pine_takeout`
--

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) NOT NULL,
  `drnk_name` varchar(200) NOT NULL,
  `drnk_qty` int(11) NOT NULL,
  `drnk_price` double NOT NULL,
  `drnk_imagepath` varchar(500) DEFAULT NULL,
  `chef_id` int(11) NOT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `drnk_name`, `drnk_qty`, `drnk_price`, `drnk_imagepath`, `chef_id`, `created_date`) VALUES
(1, 'sprite', 10, 1.5, 'Sprite_l.png', 1, '2018-06-13 15:20:17'),
(2, 'coke', 10, 1.75, 'coke.png', 1, '2018-06-13 15:20:17'),
(4, 'sprite', 10, 1, 'Sprite_l.png', 2, '2018-06-13 15:20:17'),
(5, 'fanta', 10, 1, 'fanta.jpg', 2, '2018-06-13 15:20:17'),
(6, 'sprite', 10, 1, 'Sprite_l.png', 3, '2018-06-13 15:20:17'),
(7, 'fanta', 10, 1, 'fanta.jpg', 3, '2018-06-13 15:20:17'),
(8, 'fanta', 10, 1.75, 'fanta.jpg', 1, '2018-06-13 15:20:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
