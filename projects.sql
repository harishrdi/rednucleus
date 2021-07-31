-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 05:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `entity_id` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `employees` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`entity_id`, `project_name`, `employees`, `created_at`) VALUES
(1, 'PES', 100, '2021-07-31 01:02:45'),
(2, 'DBS', 10, '2021-07-31 01:02:45'),
(3, 'CMRIT', 30, '2021-07-31 02:10:59'),
(4, 'NHPS', 10, '2021-07-31 02:10:59'),
(5, 'SBIT', 30, '2021-07-31 02:11:17'),
(6, 'ESIT', 10, '2021-07-31 02:11:17'),
(7, 'QC', 30, '2021-07-31 02:11:51'),
(8, 'CTS', 10, '2021-07-31 02:11:51'),
(9, 'INFY', 30, '2021-07-31 02:12:05'),
(10, 'WIPRO', 10, '2021-07-31 02:12:05'),
(11, 'MINDTREE', 20, '2021-07-31 02:12:39'),
(12, 'FIS', 10, '2021-07-31 02:12:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`entity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
