-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 12:44 PM
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
-- Table structure for table `returned_media_create`
--

CREATE TABLE `returned_media_create` (
  `id` int(11) NOT NULL,
  `borrowed_item_id` int(11) NOT NULL,
  `returned_item` varchar(255) NOT NULL,
  `return_date` date NOT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `returned_media_create`
--

INSERT INTO `returned_media_create` (`id`, `borrowed_item_id`, `returned_item`, `return_date`, `remarks`) VALUES
(5, 9, 'asdasdasda', '2024-12-31', 'fgdfgdg'),
(6, 1, 'Projector', '2024-12-16', 'asdasdasd'),
(7, 9, 'ssd', '2024-12-05', 'sdsds'),
(8, 14, 'zxcz', '2024-12-10', 'zxcz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `returned_media_create`
--
ALTER TABLE `returned_media_create`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrowed_item_id` (`borrowed_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `returned_media_create`
--
ALTER TABLE `returned_media_create`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `returned_media_create`
--
ALTER TABLE `returned_media_create`
  ADD CONSTRAINT `returned_media_create_ibfk_1` FOREIGN KEY (`borrowed_item_id`) REFERENCES `borrowed_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
