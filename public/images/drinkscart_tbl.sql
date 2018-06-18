-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 11:21 PM
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
-- Table structure for table `drinkscart`
--

CREATE TABLE `drinkscart` (
  `dkid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `drinkid` int(11) NOT NULL,
  `drnkqty` int(11) NOT NULL,
  `chefid` int(11) NOT NULL,
  `drnkscost` double NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinkscart`
--

INSERT INTO `drinkscart` (`dkid`, `user_id`, `drinkid`, `drnkqty`, `chefid`, `drnkscost`, `created_date`, `isActive`) VALUES
(21, 6, 2, 1, 1, 1.75, '2018-06-14 15:42:30', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinkscart`
--
ALTER TABLE `drinkscart`
  ADD PRIMARY KEY (`dkid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drinkscart`
--
ALTER TABLE `drinkscart`
  MODIFY `dkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
