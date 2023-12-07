-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 06:11 AM
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
-- Database: `online_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `regNo` int(11) NOT NULL,
  `productNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`regNo`, `productNo`) VALUES
(3, 1),
(1, 2),
(1, 14),
(1, 16),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `Message`) VALUES
('Tom', 'Tom@gmail,com', 'Cancellation', 'I want to cancel subscription, how do i proceed?'),
('David', 'David@gmail.com', 'Refund', 'My refund has not been done yet'),
('Jett', 'Jett@123', 'Login Failure', 'I cant login');

-- --------------------------------------------------------

--
-- Table structure for table `cuspro`
--

CREATE TABLE `cuspro` (
  `regNo` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuspro`
--

INSERT INTO `cuspro` (`regNo`, `productId`) VALUES
(3, 1),
(1, 2),
(1, 1),
(1, 15),
(1, 4),
(5, 10),
(4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `regNo` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `contact` int(11) NOT NULL,
  `bill` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`regNo`, `name`, `email`, `password`, `contact`, `bill`, `address`, `age`) VALUES
(1, 'Jack', 'Jack@gmail.com', 'Jack123', 771234556, 'Credit Card', '123 Road 1', 30),
(3, 'Sam', 'Sam@123', 'Sam123', 77345678, 'Credit Card', '76, main street', 19),
(4, 'Sarah', 'sarah1234@gmail.com', 'Sarah123', 772345678, 'Credit card', '678,Second Street,Colombo,Western', 26),
(5, 'Bruce ', 'Bruce@gmail.com', 'Bruce123', 61789302, 'Credit card', '69,Central Street,Gotham,Gotham City', 42);

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`quantity`, `price`, `email`, `name`, `message`) VALUES
(1, '25', 'Tom@gmail.com', 'Tom', 'Good Luck'),
(1, '100', 'Jett@123', 'Jwtt', 'Happy birthday');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productNo` int(11) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productNo`, `pName`, `price`, `description`) VALUES
(1, 'Heavy', '1500', 'Heavy Workout plans for intermediate and experts. '),
(2, 'Meal Plan 1', '2600', 'Light Meal plan for weight loss'),
(3, 'Strength', '2000', 'Focuses on Total Body'),
(4, 'Functional Fitness Series', '2700', 'Focuses on Total Body'),
(5, 'Apple Bottom', '1000', 'Focuses on Lower Body'),
(6, 'Let it Burn', '5000', 'Focuses on Total Body for experts'),
(7, 'Bulk', '1250', 'Higher Weight,Lower Reps'),
(8, 'Xtreme Trx', '3300', 'Body weight challenge for experts'),
(9, 'Legs and Thighs', '700', 'Focus on Lower Body'),
(10, 'Hot Butt and Guts', '800', 'Focuses on  guts and core'),
(11, 'Special KBZ plan', '7000', 'Focuses on Full body for trained professionals'),
(12, 'Pilot Plan I', '700', 'Pilot Programs for total Beginners'),
(13, 'Pilot Plan II', '700', 'Pilot Programs for total beginners'),
(14, 'Pilot Plan II', '700', 'Pilot Fitness Plans for Total Beginners'),
(15, 'Pre Workout 1', '600', 'Pre workout for 1-2 hours before to help improve performance'),
(16, 'Pre Workout 2', '600', 'Pre Workout 2-4 hour before to help power through'),
(17, 'Pre workout 3', '600', 'Pre workout less than 1 hour to help with recovery and improve performance'),
(18, 'Post Workout', '650', 'Post workout meal plans to assist in muscle building and minimize muscle damage'),
(19, 'Fat Burning Meal Plan', '700', 'Helps to loose wait and belly fat'),
(20, 'Belly Fat Reducing', '690', 'Reduce belly fat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `cart_FK1` (`regNo`),
  ADD KEY `cart_FK2` (`productNo`);

--
-- Indexes for table `cuspro`
--
ALTER TABLE `cuspro`
  ADD KEY `cuspro_FK1` (`productId`),
  ADD KEY `cuspro_FK2` (`regNo`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`regNo`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `regNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_FK1` FOREIGN KEY (`regNo`) REFERENCES `customer` (`regNo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_FK2` FOREIGN KEY (`productNo`) REFERENCES `product` (`productNo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cuspro`
--
ALTER TABLE `cuspro`
  ADD CONSTRAINT `cuspro_FK1` FOREIGN KEY (`productId`) REFERENCES `product` (`productNo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cuspro_FK2` FOREIGN KEY (`regNo`) REFERENCES `customer` (`regNo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
