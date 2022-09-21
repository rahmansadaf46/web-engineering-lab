-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8080
-- Generation Time: Sep 20, 2022 at 07:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `person`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `stdroll` int(10) UNSIGNED NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `optional_1` varchar(10) DEFAULT NULL,
  `optional_2` varchar(10) DEFAULT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `session` varchar(10) DEFAULT NULL,
  `submark` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`first_name`, `last_name`, `stdroll`, `address`, `email`, `sex`, `optional_1`, `optional_2`, `dept`, `session`, `submark`) VALUES
('Sadaf', '', 17050, '', '', '', '', '', '', '', 89),
('Touhid', 'Ripon', 17077, '', '', 'male', 'laptop', 'desktop', 'CSE', '', 69);

-- --------------------------------------------------------

--
-- Table structure for table `person_data`
--

CREATE TABLE `person_data` (
  `id` int(100) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `mother_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `optional_1` varchar(45) NOT NULL,
  `optional_2` varchar(45) NOT NULL,
  `dept` varchar(45) NOT NULL,
  `session` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person_data`
--

INSERT INTO `person_data` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `address`, `email`, `password`, `sex`, `optional_1`, `optional_2`, `dept`, `session`) VALUES
(1, 'Touhid', '', '', '', '', 'Superadmin', 'Test@123', '', '', '', '', ''),
(2, 'Sadaf', '', '', '', '', '', 'Test@123', 'male', 'Laptop', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`stdroll`);

--
-- Indexes for table `person_data`
--
ALTER TABLE `person_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person_data`
--
ALTER TABLE `person_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
