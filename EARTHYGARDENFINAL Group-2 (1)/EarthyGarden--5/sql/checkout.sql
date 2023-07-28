-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earthygarden`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `billing_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` int(6) NOT NULL,
  `payment_mode` enum('v','m','p') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `billing_name`, `email`, `address`, `city`, `zip`, `payment_mode`) VALUES
(1, 'Aniket Jaiswal', 'aniket123@gmail.com', 'MOREWASTI CHIKHALI', 'Pimpri', 411062, 'v'),
(2, 'Ajay', 'ajay123@gmail.com', 'akurdi', 'pune', 411015, 'v'),
(3, 'Ajit', 'ajit123@gmail.com', 'Chinchwad', 'pune', 411011, 'p'),
(4, 'Vinod', 'vinod123@gmail.com', 'shiv society', 'nashik', 411054, 'm'),
(5, 'sanket', 'sanket123@gmail.com', 'katraj', 'pune,maharashtra', 411458, 'p'),
(6, 'abhay', 'abhay123@gmail.com', 'katraj', 'pune', 411459, 'p'),
(9, 'Aniket', 'ajay123@gmail.com', 'PARMA NIVAS, SHIVKRUPA HOUSING SOCIETY, ', 'Pimpri Chinchwad ', 411062, 'v'),
(10, 'QDAGFWG', 'doctor123@gmail.com', 'PARMA NIVAS, SHIVKRUPA HOUSING SOCIETY, SANE COLO GATE NO. 1323 ZENDA CHOWK, MOREWASTI CHIKHALI', 'Pimpri Chinchwad (M Corp.)', 411062, 'm'),
(11, 'wfff', 'doctor123@gmail.com', 'PARMA NIVAS, SHIVKRUPA HOUSING SOCIETY, SANE COLO GATE NO. 1323 ZENDA CHOWK, MOREWASTI CHIKHALI', 'Pimpri Chinchwad (M Corp.)', 411062, 'p'),
(12, 'abc', 'abc@gmail.com', 'pune', 'NIGDI PUNE', 123, 'm'),
(13, 'abc', 'abc@gmail.com', 'pune', 'NIGDI PUNE', 123, 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
