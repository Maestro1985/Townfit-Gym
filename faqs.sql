-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 11:08 AM
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `FAQ ID` int(2) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`FAQ ID`, `Question`, `Answer`, `Name`, `Date`) VALUES
(1, 'How can I contact you?', 'If you wish to contact us to cancel your membership or freeze your account the best way is to contact us via telephone and give us your membership details. If you wish to book a class or a lesson with one our fitness trainers the best way is to ring us or complete a form which is on the membership page.', 'Joe', '2019-04-11 16:19:04'),
(2, 'How do I contact customer services?', 'You can reach our Customer Services Team on 0207 717 9000. Lines are open 9am - 6pm, Monday - Friday.', 'Rebecca', '2019-04-11 16:32:53'),
(3, 'How far is the gym from Oxford Circus tube station?', 'Its a five minute walk from the station, opposite House of Fraser', 'Paul', '2019-04-11 16:34:39'),
(4, 'Does the membership include access to fitness classes?', 'Unfortunately not. If you wish to book a class either fill out the form on website or contact us via telephone. There will be an additional cost as it is not included in your price paln.', 'James', '2019-04-11 16:38:36'),
(5, 'Is there a car park at the gym?', 'Yes. Parking is charged at £1 per hour', 'Hannah', '2019-04-11 16:38:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`FAQ ID`),
  ADD KEY `FAQ ID` (`Date`),
  ADD KEY `Date` (`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `FAQ ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
