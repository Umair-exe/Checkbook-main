-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2021 at 07:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dashboard_details`
--

CREATE TABLE `Dashboard_details` (
  `id` int(11) NOT NULL,
  `bankSelect` varchar(50) DEFAULT NULL,
  `accountno` bigint(20) NOT NULL,
  `ibanNo` bigint(20) NOT NULL,
  `accountTitle` varchar(50) DEFAULT NULL,
  `branchName` varchar(50) DEFAULT NULL,
  `branchCode` int(11) DEFAULT NULL,
  `bankBalance` float DEFAULT NULL,
  `checkqueBalance` float DEFAULT NULL,
  `sigimg` varchar(50) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Dashboard_details`
--

INSERT INTO `Dashboard_details` (`id`, `bankSelect`, `accountno`, `ibanNo`, `accountTitle`, `branchName`, `branchCode`, `bankBalance`, `checkqueBalance`, `sigimg`, `userid`) VALUES
(14, 'United Bank Limited', 1234567889, 1234567889, 'saving', 'meezan', 1234567889, 141414, 15151, 'uploads/logo.png', 4),
(15, 'Alfalah Bank Limited', 11414, 12345678814, 'fafaf', 'meezan', 14141, 141414, 15151, 'uploads/WhatsApp Image 2021-06-09 at 12.06.55.jpeg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `FullName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `companyName`, `username`, `email`, `password`, `FullName`) VALUES
(1, 'gopro', 'umair!12', 'umair.shabir@gmail.com', '$2y$10$JgeaxVDx5o3OZ.B3IbnGIO.cD/JMbV3PjI56njmI6Cy9wBUOX4HWW', 'Muhammad umair bhatti'),
(3, 'logitech', 'umair!123', 'tahas.tahir7@gmail.com', '123456', 'umair bhatti'),
(4, 'logitech', 'jahnzaib', 'jahnzaib@gmail.com', '$2y$10$JgeaxVDx5o3OZ.B3IbnGIO.cD/JMbV3PjI56njmI6Cy9wBUOX4HWW', 'jahnzaib'),
(12, 'logitech', 'punk123', 'punk@gmail.com', '$2y$10$JgeaxVDx5o3OZ.B3IbnGIO.cD/JMbV3PjI56njmI6Cy9wBUOX4HWW', 'umair bhatti'),
(13, 'logitech', 'umar!22', 'umar@gmail.com', '$2y$10$2jkDpMPUc.WLnUOSU.vkT.pN3lpIpIa1tCEcVh0RVPXq4ALWXh8Za', 'umar farooq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Dashboard_details`
--
ALTER TABLE `Dashboard_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accountno` (`accountno`),
  ADD UNIQUE KEY `ibanNo` (`ibanNo`),
  ADD KEY `userid` (`userid`);

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
-- AUTO_INCREMENT for table `Dashboard_details`
--
ALTER TABLE `Dashboard_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Dashboard_details`
--
ALTER TABLE `Dashboard_details`
  ADD CONSTRAINT `dashboard_details_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
