-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 07:36 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brightaqua`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer_id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `isdelivered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customer_id`, `orderid`, `id`, `product_name`, `product_price`, `quantity`, `isdelivered`) VALUES
(3, 1, 'AC234', 'Accessories-Magnetic Lid', 650, 2, 0),
(3, 1, 'AC699', 'Arowana Tank', 790, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `orderid` int(20) NOT NULL,
  `Address1` varchar(100) NOT NULL,
  `Address2` varchar(30) NOT NULL,
  `Postalid` int(11) NOT NULL,
  `Totalpayment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`orderid`, `Address1`, `Address2`, `Postalid`, `Totalpayment`) VALUES
(1, 'saffds', 'fsda', 0, 5980);

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `id` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` varchar(200) DEFAULT NULL,
  `product_img` varchar(300) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `brand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`id`, `product_name`, `product_price`, `product_desc`, `product_img`, `quantity`, `status`, `brand`) VALUES
('AC456', 'Accessories-Magnetic Brush', 650, 'Brand new and high quality.', 'images/s4.jpg', 76, 1, 'Seabillion'),
('AC699', 'Arowana Tank', 790, 'Size: 4 units', 'images/s8.jpg', 98, 1, 'Deepa'),
('AL301', 'Aquarium  Light', 900, 'Typical light sources types include LED.', 'images/s12.jpg', 31, 1, ''),
('AL452', 'Aquarium Light', 780, 'highest intensity of all aquarium types. Typical light sources types include LED, fluorescent, metal halide, and sometimes plasma lamps.', 'images/s10.jpg', 225, 1, ''),
('AL875', 'Aquarium Light', 800, 'Typical light sources types include LED, fluorescent, metal halide, and sometimes plasma lamps.', 'images/s11.jpg', 143, 1, ''),
('AP204', 'Air Pump', 1800, '70L Liter per Minute 8 Outlets', 'images/s22.jpg', 198, 1, 'Venus Aqua'),
('AP302', 'Air Pump', 900, '1 Outlet, 2W, 3.2 L/min', 'images/s24.jpg', 47, 1, 'Texmo'),
('AP789', 'Air Pump', 780, '45L Liter Per Minute 6 Outlets', 'images/s23.jpg', 80, 1, 'Hydrofarm'),
('AT702', 'Arowana Tank', 1500, 'a very large tank', 'images/s7.jpg', 73, 1, 'Farm Trading'),
('F071', 'filter', 1050, 'Water Purifier, Capacity: 0-5 L ', 'images/s19.jpg', 118, 1, 'EMC '),
('F301', 'Filter', 900, '14L pure aqua filter water', 'images/s20.jpg', 155, 1, ''),
('F630', 'Filter', 760, 'Disposable Cigarette Holders', 'images/s21.jpg', 75, 1, 'OMEN'),
('GA102', 'Glass Aquarium', 1800, 'constructed of glass or high-strength acrylic', 'images/s1.jpg', 223, 0, 'acrylic'),
('GA400', 'Glass Aquarium', 1780, 'ultra white glass', 'images/s25.jpg', 125, 1, ''),
('GA405', 'Glass Aquarium', 980, 'constructed of glass', 'images/s2.jpg', 480, 1, 'glass'),
('GA512', 'Glass Aquarium', 1480, 'A large public aquarium', 'images/s3.jpg', 193, 1, ''),
('H247', 'Heater', 690, 'Eliminate wastage and save money with Fischer thermal store water heaters', 'images/s18.jpg', 200, 1, 'Texmo'),
('H254', 'Heater', 650, ' bed warmer has a hot water heating system', 'images/s17.jpg', 50, 1, ''),
('H753', 'Heater', 1230, 'Capacity: 0-10 litres', 'images/s16.jpg', 230, 1, 'OMEN'),
('WP159', 'Water Pump', 1030, 'Water Filled Motor.', 'images/s14.jpg', 450, 1, ''),
('WP268', 'Water Pump', 1200, 'Water Filled Motor.', 'images/s15.jpg', 120, 1, ''),
('WP890', 'Water Pump', 690, 'Pumps V3-Water Filled Motor.', 'images/s13.jpg', 99, 1, 'Texmo');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `customer_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`customer_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'adm@gmail.com', 'adm123'),
(2, 'shnrndk', 'shnrndk@hotmail.com', 'abc123'),
(3, 'asdf', 'shnrndk@aol.com', 'abc123'),
(4, 'minuri', 'minuri@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `reviewtable`
--

CREATE TABLE `reviewtable` (
  `reviewid` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewtable`
--

INSERT INTO `reviewtable` (`reviewid`, `id`, `customer_id`, `review`) VALUES
(1, 'AC456', 2, 'Good Product, Quick Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `usertemp`
--

CREATE TABLE `usertemp` (
  `id` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `product_img` varchar(300) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertemp`
--

INSERT INTO `usertemp` (`id`, `product_name`, `product_price`, `product_desc`, `product_img`, `quantity`, `status`, `brand`, `customer_id`) VALUES
('AC234', 'Accessories-Magnetic Lid', 650, 'Brand new and high quality.', 'images/s4.jpg', 3, 1, 'Philips', 3),
('AC456', 'Accessories-Magnetic Brush', 650, 'Brand new and high quality.', 'images/s4.jpg', 6, 1, 'Seabillion', 2),
('AC699', 'Arowana Tank', 790, 'Size: 4 units', 'images/s8.jpg', 4, 1, 'Deepa', 3),
('AL301', 'Aquarium  Light', 900, 'Typical light sources types include LED.', 'images/s12.jpg', 3, 1, '', 2),
('AL875', 'Aquarium Light', 800, 'Typical light sources types include LED, fluorescent, metal halide, and sometimes plasma lamps.', 'images/s11.jpg', 1, 1, '', 2),
('AP204', 'Air Pump', 1800, '70L Liter per Minute 8 Outlets', 'images/s22.jpg', 3, 1, 'Venus Aqua', 2),
('AP302', 'Air Pump', 900, '1 Outlet, 2W, 3.2 L/min', 'images/s24.jpg', 4, 1, 'Texmo', 2),
('AP789', 'Air Pump', 780, '45L Liter Per Minute 6 Outlets', 'images/s23.jpg', 4, 1, 'Hydrofarm', 2),
('AT702', 'Arowana Tank', 1500, 'a very large tank', 'images/s7.jpg', 2, 1, 'Farm Trading', 2),
('F071', 'filter', 1050, 'Water Purifier, Capacity: 0-5 L ', 'images/s19.jpg', 1, 1, 'EMC ', 2),
('F301', 'Filter', 900, '14L pure aqua filter water', 'images/s20.jpg', 2, 1, '', 2),
('F630', 'Filter', 760, 'Disposable Cigarette Holders', 'images/s21.jpg', 1, 1, 'OMEN', 2),
('GA102', 'Glass Aquarium', 1800, 'constructed of glass or high-strength acrylic', 'images/s1.jpg', 1, 1, 'acrylic', 2),
('GA512', 'Glass Aquarium', 1480, 'A large public aquarium', 'images/s3.jpg', 1, 1, '', 2),
('H753', 'Heater', 1230, 'Capacity: 0-10 litres', 'images/s16.jpg', 1, 1, 'OMEN', 3),
('WP268', 'Water Pump', 1200, 'Water Filled Motor.', 'images/s15.jpg', 2, 1, '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `reviewtable`
--
ALTER TABLE `reviewtable`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `usertemp`
--
ALTER TABLE `usertemp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paymenttable`
--
ALTER TABLE `paymenttable`
  MODIFY `orderid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviewtable`
--
ALTER TABLE `reviewtable`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
