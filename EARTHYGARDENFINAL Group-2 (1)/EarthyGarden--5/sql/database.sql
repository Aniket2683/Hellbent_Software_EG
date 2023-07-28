-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 02:38 PM
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
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `sr` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`sr`, `product_id`, `product_name`, `quantity`, `price`) VALUES
(32, 105, 'THE MINNIE', 2, 50),
(34, 102, 'THE YUI', 7, 280),
(35, 108, 'THE HALLIE', 3, 87),
(36, 107, 'THE SPRING MEADOW', 3, 126),
(37, 104, 'OUR FLORIST\'S PICK', 1, 33),
(38, 103, 'THE ANNA', 1, 26),
(39, 109, 'THE TAMSIN', 1, 32);

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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `quantity`, `image_data`) VALUES
(101, 'THE SEIKO', 30.00, 50, 'https://media.bloomandwild.com/v1/1080x1080/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/july-pick/a8465005-c910-47c9-8b12-f7cf1f089fed.jpg'),
(102, 'THE YUI', 40.00, 50, 'https://media.bloomandwild.com/v1/1080x1080/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/the-helga-lb/3284f940-bd1e-46f9-a8ce-4b670b3165d7.jpg'),
(103, 'THE ANNA', 26.00, 50, 'https://media.bloomandwild.com/v1/1000x1000/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/the-anna-lb/ba789ed1-a6bb-4436-af57-c28a8a04b4d7.jpeg'),
(104, 'OUR FLORIST\'S PICK', 33.00, 50, 'https://media.bloomandwild.com/v1/750x750/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/our-florists-pick-7-lb/c21f34a2-bb35-4ee0-b08f-afa99ac8fdf9.jpg'),
(105, 'THE MINNIE', 25.00, 50, 'https://media.bloomandwild.com/v1/1080x1080/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/the-july-special-ht-uic-the-love-candle-by-maegen-addon-uic/6f80e046-479e-4cf0-bfc1-3a85ec2ee35d.jpg'),
(106, 'THE ROYA', 35.00, 50, 'https://media.bloomandwild.com/v1/1080x1080/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/the-vaesna/5cd6aac0-f5f1-4b8d-94e4-6468106e3016.jpg'),
(107, 'THE SPRING MEADOW', 42.00, 50, 'https://media.bloomandwild.com/v1/1080x1080/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/the-sunniva-ht-flower-press/74aff484-08ce-4623-b5f7-5b100cd50307.jpg'),
(108, 'THE HALLIE', 29.00, 50, 'https://media.bloomandwild.com/v1/750x750/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/the-hallie/7f223b27-dbf1-4c36-afa2-30fdebe53ced.jpeg'),
(109, 'THE TAMSIN', 32.00, 50, 'https://media.bloomandwild.com/v1/1080x1080/filters:format(webp):quality(75)/https://assets-0.bloomandwild.com/letterbox-main/the-esther/2674432c-2f5e-4264-a896-3d112a5eedad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `contact`, `email`, `address`, `password`, `cpassword`, `date`) VALUES
(8, 'abcd', 123, 'abcd@gmail.com', 'pune', '123', '', '2023-07-24 10:03:03'),
(9, 'qy', 145, 'a@gmail.com', 'mumbai', '12345', '', '2023-07-24 10:06:31'),
(10, 'abcde', 123, 'abc@gmail.com', 'qwe', '123', '', '2023-07-24 10:58:57'),
(17, 'abcxyz', 123, 'a@gamil.com', 'pune', '123', '', '2023-07-24 12:02:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `sr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
