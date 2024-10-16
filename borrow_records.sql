-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 09:21 AM
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
-- Database: `borrowed_items`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow_records`
--

CREATE TABLE `borrow_records` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `borrowed_by` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course_program` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow_records`
--

INSERT INTO `borrow_records` (`id`, `date`, `time`, `venue`, `item`, `borrowed_by`, `department`, `course_program`, `signature`) VALUES
(1, '2024-10-16', '13:53:00', 'AVR', 'Projector', 'Gatz', 'CABECS', 'IT', 'gatz_gwapo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow_records`
--
ALTER TABLE `borrow_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
