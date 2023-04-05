-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2023 at 08:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apjdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` int NOT NULL,
  `price` double DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `Sport` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `price`, `image`, `stock`, `Sport`) VALUES
(1, 62.77, 'test', 8, 'Swimming'),
(2, 35.7, 'test', 2, 'Swimming'),
(3, 6.29, 'test', 19, 'Basketball'),
(4, 78.19, 'test', 10, 'Swimming'),
(5, 37.29, 'test', 2, 'Basketball'),
(6, 56.3, 'test', 1, 'Boxing'),
(7, 6.34, 'test', 13, 'Soccer'),
(8, 6.11, 'test', 17, 'Boxing'),
(9, 67.11, 'test', 3, 'Basketball'),
(10, 21.22, 'test', 9, 'Soccer'),
(11, 21.79, 'test', 3, 'GAA'),
(12, 7.58, 'test', 2, 'Soccer'),
(13, 32.51, 'test', 17, 'GAA'),
(14, 50.47, 'test', 19, 'Hurling'),
(15, 40.93, 'test', 10, 'Rugby'),
(16, 7.02, 'test', 10, 'Boxing'),
(17, 55.79, 'test', 13, 'Boxing'),
(18, 21.08, 'test', 9, 'Basketball'),
(19, 25.22, 'test', 1, 'GAA'),
(20, 32.77, 'test', 18, 'Basketball'),
(21, 78.64, 'test', 13, 'Hurling'),
(22, 75.99, 'test', 19, 'Soccer'),
(23, 26.93, 'test', 14, 'Boxing'),
(24, 78.58, 'test', 5, 'Soccer'),
(25, 47.01, 'test', 12, 'Hurling'),
(26, 33.25, 'test', 20, 'Boxing'),
(27, 32.72, 'test', 2, 'Rugby'),
(28, 27.85, 'test', 3, 'Soccer'),
(29, 12.93, 'test', 17, 'Rugby'),
(30, 42.47, 'test', 15, 'Basketball'),
(31, 7.06, 'test', 9, 'Soccer'),
(32, 43.25, 'test', 3, 'Soccer'),
(33, 51.3, 'test', 11, 'Boxing'),
(34, 6.95, 'test', 4, 'Boxing'),
(35, 45.2, 'test', 2, 'Soccer');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int NOT NULL,
  `price` double DEFAULT NULL,
  `customerName` varchar(45) DEFAULT NULL,
  `orderStatus` varchar(45) DEFAULT NULL,
  `Customer_customerID` int NOT NULL,
  `Transactions_transactionID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `order_has_item`
--

CREATE TABLE `order_has_item` (
  `order_orderID` int NOT NULL,
  `Item_itemID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int NOT NULL,
  `cardNo` varchar(45) DEFAULT NULL,
  `expDate` varchar(45) DEFAULT NULL,
  `cvv` varchar(45) DEFAULT NULL,
  `cardType` varchar(45) DEFAULT NULL,
  `order_orderID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionID` int NOT NULL,
  `orderID` int DEFAULT NULL,
  `price` double DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`,`Customer_customerID`,`Transactions_transactionID`),
  ADD KEY `fk_order_Customer1_idx` (`Customer_customerID`),
  ADD KEY `fk_Order_Transactions1_idx` (`Transactions_transactionID`);

--
-- Indexes for table `order_has_item`
--
ALTER TABLE `order_has_item`
  ADD PRIMARY KEY (`order_orderID`,`Item_itemID`),
  ADD KEY `fk_order_has_Item_Item1_idx` (`Item_itemID`),
  ADD KEY `fk_order_has_Item_order1_idx` (`order_orderID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`,`order_orderID`),
  ADD KEY `fk_Payment_order_idx` (`order_orderID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_Customer1` FOREIGN KEY (`Customer_customerID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `fk_Order_Transactions1` FOREIGN KEY (`Transactions_transactionID`) REFERENCES `transactions` (`transactionID`);

--
-- Constraints for table `order_has_item`
--
ALTER TABLE `order_has_item`
  ADD CONSTRAINT `fk_order_has_Item_Item1` FOREIGN KEY (`Item_itemID`) REFERENCES `item` (`itemID`),
  ADD CONSTRAINT `fk_order_has_Item_order1` FOREIGN KEY (`order_orderID`) REFERENCES `order` (`orderID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_Payment_order` FOREIGN KEY (`order_orderID`) REFERENCES `order` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
