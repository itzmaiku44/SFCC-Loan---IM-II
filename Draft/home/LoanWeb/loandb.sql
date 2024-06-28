-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 07:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Create database if it does not exist
CREATE DATABASE IF NOT EXISTS `loandb`;
USE `loandb`;

-- Table structure for table `users_form`
DROP TABLE IF EXISTS `users_form`;
CREATE TABLE `users_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `users_form`
INSERT INTO `users_form` (`id`, `name`, `email`, `password`, `role`) VALUES
(5, 'Carl Ff', 'qwer@gmail.com', '$2y$10$6RZdCJUSiCSGonOHDpzHLOCNBQA38mvkA.2JTolRiV1LZ1dWRjQC2', 'user'),
(6, 'Carl ', 'asdfa@gmail.com', '$2y$10$JfsHzF2KBAzhY8JnmZhMVejLnMu.iS7cGZgOR1TBFFOCN5RhmJ7jG', 'admin');

-- Commit the transaction
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;