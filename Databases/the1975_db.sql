-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 04:16 PM
-- Server version: 8.0.35
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the1975_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings_the1975`
--

CREATE TABLE `bookings_the1975` (
  `id` int NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `country` varchar(100) NOT NULL,
  `tour` varchar(100) NOT NULL,
  `credit_card` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookings_the1975`
--

INSERT INTO `bookings_the1975` (`id`, `customer_name`, `customer_email`, `booking_date`, `country`, `tour`, `credit_card`) VALUES
(2, 'Sasan Samad', 'judgedredd2000a@gmail.com', '3344-11-22', 'United States', 'still at their very best', ''),
(3, 'Sasan Samad', 'judgedredd2000a@gmail.com', '2000-02-22', 'United States', 'still at their very best', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings_the1975`
--
ALTER TABLE `bookings_the1975`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings_the1975`
--
ALTER TABLE `bookings_the1975`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
