-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 06:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`, `position`, `fname`, `lname`) VALUES
(1, 'office', '1234', 'Officer', 'Michael James', 'Catubig'),
(2, 'collect', '4321', 'Collector', 'Paulo Ethan', 'Serres'),
(3, 'adrian', '1122', 'Director', 'Adrian', 'Cimafranca'),
(4, 'german', '2233', 'President', 'German', 'Felisarta');

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
  `directorStatus` varchar(25) NOT NULL DEFAULT 'Pending',
  `presidentStatus` varchar(25) NOT NULL DEFAULT 'Pending',
  `applicationStatus` varchar(25) NOT NULL DEFAULT 'Pending',
  `remark` varchar(255) DEFAULT NULL,
  `collector` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `fname`, `lname`, `age`, `bmonth`, `bday`, `byear`, `phonenum`, `email`, `street1`, `street2`, `city`, `province`, `postal`, `country`, `loanAmount`, `term`, `fundPurpose`, `applyDate`, `directorStatus`, `presidentStatus`, `applicationStatus`, `remark`, `collector`) VALUES
(1, 'Michael', 'James', 22, 12, 13, 2001, 9267291085, 'jordan23@gmail.com', 'home blk.69', 'Grove St.', 'Los Santos', 'San Andreas', 42069, 'United States', 100000, '6 Months', 'Weed and coke', '2024-06-23 17:14:20', 'Approved', 'Approved', 'Pending', NULL, 'Pending'),
(2, 'paulo', 'seres', 37, 1, 1, 1987, 9123456878, 'hawktuah@gmail.com', 'lower nasipit', 'Talamban', 'Cebu', 'Cebu', 6000, 'Philippines', 4206969, '24 Months', 'Health expense', '2024-06-23 19:01:15', 'Approved', 'Rejected', 'Pending', NULL, 'Pending'),
(3, 'john', 'doe', 99, 1, 1, 1924, 924248343, 'johndoe1132@gmail.com', 'street 1', 'street 2', 'City', 'Province', 11111, 'Country', 100000, 'term', 'fund', '2024-07-05 21:58:34', 'Rejected', 'Approved', 'Pending', 'remark', 'Pending'),
(19, 'test ', 'approve', 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', 0, '', 'test approve', '2024-07-09 00:04:31', 'Approved', 'Rejected', 'Pending', NULL, 'Pending'),
(20, 'test', 'delete', 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', 0, '', 'test delete', '2024-07-09 12:32:21', 'Rejected', 'Rejected', 'Pending', NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `approveds`
--

CREATE TABLE `approveds` (
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
  `applicationNumber` int(11) NOT NULL,
  `statusDr` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approvedspr`
--

CREATE TABLE `approvedspr` (
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
  `applicationNumber` int(11) NOT NULL,
  `statusDr` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `collectordb`
--

CREATE TABLE `collectordb` (
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
  `applicationNumber` int(11) NOT NULL,
  `statusCr` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `directordb`
--

CREATE TABLE `directordb` (
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
  `applicationNumber` int(11) NOT NULL,
  `statusDr` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `presidentdb`
--

CREATE TABLE `presidentdb` (
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
  `applicationNumber` int(11) NOT NULL,
  `statusPr` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rejecteds`
--

CREATE TABLE `rejecteds` (
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
  `applicationNumber` int(11) NOT NULL,
  `statusDr` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rejectedspr`
--

CREATE TABLE `rejectedspr` (
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
  `applicationNumber` int(11) NOT NULL,
  `statusDr` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(24) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `dateCreated`) VALUES
(2, 'Mike', 'James', 'jordan23@gmail.com', '1234', '2024-06-21 15:19:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approveds`
--
ALTER TABLE `approveds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `approvedspr`
--
ALTER TABLE `approvedspr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `collectordb`
--
ALTER TABLE `collectordb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `directordb`
--
ALTER TABLE `directordb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `presidentdb`
--
ALTER TABLE `presidentdb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `rejecteds`
--
ALTER TABLE `rejecteds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `rejectedspr`
--
ALTER TABLE `rejectedspr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `approveds`
--
ALTER TABLE `approveds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=598;

--
-- AUTO_INCREMENT for table `approvedspr`
--
ALTER TABLE `approvedspr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `collectordb`
--
ALTER TABLE `collectordb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `directordb`
--
ALTER TABLE `directordb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=599;

--
-- AUTO_INCREMENT for table `presidentdb`
--
ALTER TABLE `presidentdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rejecteds`
--
ALTER TABLE `rejecteds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=599;

--
-- AUTO_INCREMENT for table `rejectedspr`
--
ALTER TABLE `rejectedspr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=595;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collectordb`
--
ALTER TABLE `collectordb`
  ADD CONSTRAINT `collectordb_ibfk_1` FOREIGN KEY (`applicationNumber`) REFERENCES `application` (`id`);

--
-- Constraints for table `presidentdb`
--
ALTER TABLE `presidentdb`
  ADD CONSTRAINT `presidentdb_ibfk_1` FOREIGN KEY (`applicationNumber`) REFERENCES `application` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
