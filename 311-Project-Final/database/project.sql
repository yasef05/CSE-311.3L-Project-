-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 06:23 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `username`, `password`) VALUES
(101, 'Ankita Siddique', 'ankita_01', 'ankita101'),
(102, 'Yasef Ahnaf', 'yasef05', 'Yasef102'),
(103, 'Mahammud Rifat', 'rifat03', 'rifat103');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`product_id`, `product_price`, `product_quantity`, `product_desc`) VALUES
(1, 700, 20, 'Blue Sundress'),
(2, 500, 50, 'Yellow Shirt'),
(3, 800, 5, 'Raincoat');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`product_id`, `product_price`, `product_quantity`, `product_desc`) VALUES
(1, 400, 20, 'Black T-Shirt'),
(2, 1000, 15, 'Black & Yellow Flannel Shirt'),
(3, 500, 20, 'White T-Shirt'),
(4, 300, 10, 'Blue T-Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `phone_no` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`product_id`, `product_price`, `product_quantity`, `product_desc`) VALUES
(1, 1000, 30, 'Blue Sweater'),
(2, 1700, 12, 'Blue Jeans'),
(3, 3000, 20, 'Saree'),
(4, 500, 10, 'Stripped T-Shirt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`phone_no`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `phone_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
