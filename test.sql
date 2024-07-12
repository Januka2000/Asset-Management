-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 05:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `id` int(10) NOT NULL,
  `Asset_Name` text NOT NULL,
  `Purchase_Date` date NOT NULL,
  `Department` text NOT NULL,
  `Serial_Number` varchar(50) NOT NULL,
  `IP_Address` text NOT NULL,
  `Asset_Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`id`, `Asset_Name`, `Purchase_Date`, `Department`, `Serial_Number`, `IP_Address`, `Asset_Category`) VALUES
(1, 'sadsdssdasd', '0004-05-05', 'A', 'dasdsad', '12.12.53.25', 'gajajaa'),
(2, 'sadsds', '0022-02-05', 'A', 'dssadsads', '12.3.5.4', 'sdsdsd'),
(3, 'shdjshjd', '1212-01-01', 'A', '212124ds', '1.2.3.1', 'adlkasofj');

-- --------------------------------------------------------

--
-- Table structure for table `b`
--

CREATE TABLE `b` (
  `id` int(30) NOT NULL,
  `Asset_Name` text NOT NULL,
  `Purchase_Date` date NOT NULL,
  `Department` text NOT NULL,
  `Serial_Number` varchar(30) NOT NULL,
  `IP_Address` text NOT NULL,
  `Asset_Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `b`
--

INSERT INTO `b` (`id`, `Asset_Name`, `Purchase_Date`, `Department`, `Serial_Number`, `IP_Address`, `Asset_Category`) VALUES
(1, 'sdsdsf5', '5545-05-04', 'B', '45f4sd54f5d4', '1.1.1.1', '5454545ddds'),
(2, 'dsfdfdsf', '2111-02-01', 'B', '212d1s21sd2f1', '2.2.2.2', 'dmaslkjfkd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b`
--
ALTER TABLE `b`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a`
--
ALTER TABLE `a`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `b`
--
ALTER TABLE `b`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
