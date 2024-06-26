-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 02:01 PM
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
-- Database: `loandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `bmonth` tinyint(2) NOT NULL,
  `bday` tinyint(2) NOT NULL,
  `byear` int(4) NOT NULL,
  `phonenum` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street1` varchar(100) NOT NULL,
  `street2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `postal` int(8) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loanAmount` int(7) NOT NULL,
  `term` varchar(255) NOT NULL,
  `fundPurpose` varchar(100) NOT NULL,
  `applyDate` datetime NOT NULL DEFAULT current_timestamp(),
  `Document` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `fname`, `lname`, `age`, `bmonth`, `bday`, `byear`, `phonenum`, `email`, `street1`, `street2`, `city`, `province`, `postal`, `country`, `loanAmount`, `term`, `fundPurpose`, `applyDate`, `Document`, `status`) VALUES
(1, 'Michael', 'James', 22, 12, 13, 2001, 9267291085, 'jordan23@gmail.com', 'home blk.69', 'Grove St.', 'Los Santos', 'San Andreas', 42069, 'United States', 100000, '6 Months', 'Weed and coke', '2024-06-23 17:14:20', 5, 'Pending'),
(2, 'paulo', 'seres', 37, 1, 1, 1987, 9123456878, 'hawktuah@gmail.com', 'lower nasipit', 'Talamban', 'Cebu', 'Cebu', 6000, 'Philippines', 4206969, '24 Months', 'Suyop', '2024-06-23 19:01:15', 2, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
