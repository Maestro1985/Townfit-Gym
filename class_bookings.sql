-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 11:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `class bookings`
--

CREATE TABLE `class bookings` (
  `Class ID` int(2) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Phone` int(60) NOT NULL,
  `Classes` varchar(200) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class bookings`
--

INSERT INTO `class bookings` (`Class ID`, `Name`, `Email`, `Phone`, `Classes`, `Date`) VALUES
(1, 'Joanna', 'joanna@hotmail.com', 2147483647, '1', '2019-04-22 10:46:39'),
(2, 'Matthew', 'matthew@gmail.com', 2147483647, '4', '2019-04-22 10:47:26'),
(3, 'Massimo', 'massimo@hotmail.com', 2147483647, '2', '2019-04-22 10:48:37'),
(5, 'Michael', 'michael@gmail.com', 2147483647, '6', '2019-04-22 10:55:04'),
(6, 'Andrew', 'andrew@gmail.com', 2147483647, '6', '2019-04-22 10:56:22'),
(11, 'Nick', 'nick@gmail.com', 2147483647, 'Pilates', '2019-04-22 10:59:17'),
(13, 'b', 'f', 4, 'Group cycle', '2019-05-01 09:56:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class bookings`
--
ALTER TABLE `class bookings`
  ADD PRIMARY KEY (`Class ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class bookings`
--
ALTER TABLE `class bookings`
  MODIFY `Class ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
