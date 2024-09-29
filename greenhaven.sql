-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 01:56 AM
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
-- Database: `greenhaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `Fname` varchar(75) NOT NULL,
  `Lname` varchar(75) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`Fname`, `Lname`, `email`, `password`) VALUES
('kasun', 'jay', 'kasun@gmail.com', 123456),
('Nisadi', 'Wije', 'nisadi@gmail.com', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `category1`
--

CREATE TABLE `category1` (
  `Category_ID` int(75) NOT NULL,
  `Category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category1`
--

INSERT INTO `category1` (`Category_ID`, `Category_name`) VALUES
(1, 'Indoor Plants'),
(2, 'Outdoor Plants'),
(3, 'Edible Plats'),
(4, 'Gift Ideas'),
(5, 'Special Collection'),
(6, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `item1`
--

CREATE TABLE `item1` (
  `Item_ID` int(10) NOT NULL,
  `Item_name` varchar(75) NOT NULL,
  `Quantity` int(75) NOT NULL,
  `Price` int(75) NOT NULL,
  `Product_ID` int(10) NOT NULL,
  `Img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `Order_ID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Customer_ID` int(75) NOT NULL,
  `Total` int(75) NOT NULL,
  `Payment Status` varchar(10) NOT NULL,
  `Status` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`Order_ID`, `Date`, `Customer_ID`, `Total`, `Payment Status`, `Status`) VALUES
(1, '2024-09-04', 2, 1500, 'Online', 'Shipped'),
(2, '2024-09-25', 1, 2575, 'COD', 'Delivered ');

-- --------------------------------------------------------

--
-- Table structure for table `order_item1`
--

CREATE TABLE `order_item1` (
  `Order_ID` int(10) NOT NULL,
  `Item_ID` int(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `Product_ID` int(10) NOT NULL,
  `Product_name` varchar(75) NOT NULL,
  `Category_ID` int(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`Product_ID`, `Product_name`, `Category_ID`) VALUES
(101, 'Low light ', 1),
(102, 'Air Purifying', 1),
(103, 'Succulents & Cacti', 1),
(104, 'Foliage', 1),
(105, 'Flowering Indoor', 1),
(106, 'Hanging', 1),
(201, 'Flowering', 2),
(202, 'Perennials', 2),
(203, 'Annuals', 2),
(204, 'Climbing Plants ', 2),
(205, 'Tree and Shrubs ', 2),
(206, 'Ground Cover ', 2),
(301, 'Herb', 3),
(302, 'Vegetable ', 3),
(303, 'Fruits ', 3),
(304, 'Salad ', 3),
(401, 'Plant Gift Set', 4),
(402, 'Subscription Boxes ', 4),
(403, 'Gift Cards', 4),
(501, 'Seasonal Packs', 5),
(502, 'Rare & Exotic ', 5),
(503, 'Beginner Friendly ', 5),
(504, 'Pet Friendly ', 5),
(505, 'Office', 5),
(601, 'Gardering Tools', 6),
(602, 'Decorative Plant', 6),
(603, 'Indoor Plants Lights ', 6),
(604, 'Plant Stands ', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `Customer_ID` int(75) NOT NULL,
  `fname` varchar(75) NOT NULL,
  `lname` varchar(75) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `Password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`Customer_ID`, `fname`, `lname`, `Address`, `Contact`, `email`, `Password`) VALUES
(1, 'Nisadi', 'Wijerathna', 'Kiribathgoda', '0760364639', 'nisadiwijerathna@gmail.com', 123),
(2, 'thisara', 'warshan', 'Katunayaka', '0778956231', 'thisara@gmail.com', 123),
(3, 'muvindu', 'kushan', 'mathara', '0779899665', 'muvi@gmail.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category1`
--
ALTER TABLE `category1`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `item1`
--
ALTER TABLE `item1`
  ADD PRIMARY KEY (`Item_ID`),
  ADD KEY `Fkkk` (`Product_ID`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Fkk` (`Customer_ID`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Fk` (`Category_ID`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category1`
--
ALTER TABLE `category1`
  MODIFY `Category_ID` int(75) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `Customer_ID` int(75) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item1`
--
ALTER TABLE `item1`
  ADD CONSTRAINT `Fkkk` FOREIGN KEY (`Product_ID`) REFERENCES `product1` (`Product_ID`);

--
-- Constraints for table `order1`
--
ALTER TABLE `order1`
  ADD CONSTRAINT `Fkk` FOREIGN KEY (`Customer_ID`) REFERENCES `user1` (`Customer_ID`);

--
-- Constraints for table `product1`
--
ALTER TABLE `product1`
  ADD CONSTRAINT `Fk` FOREIGN KEY (`Category_ID`) REFERENCES `category1` (`Category_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
