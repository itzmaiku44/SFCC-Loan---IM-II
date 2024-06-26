-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 07:13 AM
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
-- Database: `loandb`
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
(1, 'Michael', 'James', 22, 12, 13, 2001, 9267291085, 'jordan23@gmail.com', 'home blk.69', 'Grove St.', 'Los Santos', 'San Andreas', 42069, 'United States', 100000, '6 Months', 'Weed and coke', '2024-06-23 17:14:20', 'Pending', 'Pending', 'Pending', NULL, 'Pending'),
(2, 'paulo', 'seres', 37, 1, 1, 1987, 9123456878, 'hawktuah@gmail.com', 'lower nasipit', 'Talamban', 'Cebu', 'Cebu', 6000, 'Philippines', 4206969, '24 Months', 'Suyop', '2024-06-23 19:01:15', 'Pending', 'Pending', 'Pending', NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `collectortb`
--

CREATE TABLE `collectortb` (
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
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `directortb`
--

CREATE TABLE `directortb` (
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
  `statusDr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `presidenttb`
--

CREATE TABLE `presidenttb` (
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
  `statusPt` varchar(50) NOT NULL
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
-- Indexes for table `collectortb`
--
ALTER TABLE `collectortb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `directortb`
--
ALTER TABLE `directortb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationNumber` (`applicationNumber`);

--
-- Indexes for table `presidenttb`
--
ALTER TABLE `presidenttb`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collectortb`
--
ALTER TABLE `collectortb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `directortb`
--
ALTER TABLE `directortb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presidenttb`
--
ALTER TABLE `presidenttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collectortb`
--
ALTER TABLE `collectortb`
  ADD CONSTRAINT `collecto                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         