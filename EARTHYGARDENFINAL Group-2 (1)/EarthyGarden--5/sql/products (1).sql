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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
