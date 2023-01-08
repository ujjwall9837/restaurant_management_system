-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 01:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_no` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Order_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_no`, `Price`, `Order_details`) VALUES
(11, 3000, 'Chicken'),
(101, 280, 'Chicken Tikka Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`id`, `name`) VALUES
(301, 'Ayush Kumar'),
(302, 'Piyush Mittal');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `chef_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`chef_id`, `Name`) VALUES
(101, 'Sanjay'),
(102, 'Aditya'),
(103, 'Arvind'),
(104, 'Manav'),
(105, 'Prakhar');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Contact_no` bigint(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `name`, `email`, `Address`, `Contact_no`, `password`, `cpassword`) VALUES
(1, 'Harshit', 'harshit@gmail.com', 'Nehru Nagar', 7906891462, 'harshit', 'harshit');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_no` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_no`, `Name`, `Price`, `Description`) VALUES
(1, 'Peri Peri Sandwich', 100, 'A sandwich that includes variety of veggies and sauces along the spicy peri peri flavour'),
(2, 'Paneer Pan Pizza (M)', 220, 'Medium sized paneer pan pizza with an amazing saucy flavour,cheese loaded and smokey twist'),
(3, 'Chicken Soup', 80, 'Finely cooked smooth hot chicken soup. '),
(4, 'Veggie Burger', 120, 'Burger filled with lots of sauces and veggies.'),
(5, 'Red Sauce Pasta', 130, 'Amazing red sauce pasta with fine spicy taste.'),
(6, 'White Sauce Cheese Pasta', 140, 'Creamy and sour white sauce pasta filled with cheese'),
(7, 'Chicken Cheese Burger', 70, 'Chicken burger filled with cheese, sauces and a variety of vegetables.'),
(8, 'Veg Hakka Noodles', 80, 'Fine Chinese noodles with medium to high spice.'),
(9, 'Iced Tea', 40, 'Very refreshing and chilled lemon iced tea'),
(10, 'Cold Coffee', 50, 'Soothig cold coffee tipped with vanilla ice cream'),
(11, 'Chicken Tikka Pizza (M)', 280, 'Smokey chicken flavour with lots of cheese.'),
(12, 'Onion and Tomato Pizza (M)', 180, 'A typical vegetarian pizza with a thin crust and lots of cheese.');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Name` varchar(20) NOT NULL,
  `manager_ID` int(11) NOT NULL,
  `Contact_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Name`, `manager_ID`, `Contact_no`) VALUES
('Mukesh', 11, 9162781082),
('Udbhav', 12, 9734917221),
('Harshit', 13, 8157291122),
('Sameer', 14, 7912534093);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_no` int(11) NOT NULL,
  `Order_details` varchar(300) NOT NULL,
  `no_of_items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Order_no`, `Order_details`, `no_of_items`) VALUES
(1, 'Pasta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`name`, `Address`) VALUES
('Sagar Ratna', 'Shop No: 110, First Floor, Cyber Hub, Gurugram');

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE `waiter` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`id`, `name`) VALUES
(1, 'Mayur Jain'),
(4, 'Sarthak Tyagi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`chef_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_no`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_no`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `waiter`
--
ALTER TABLE `waiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
