-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2022 at 06:51 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j2teamnnl_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_detail_bill` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_serve` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `price_bill` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `fisrt_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` enum('Nam','Ná»¯','KhÃ¡c') NOT NULL,
  `birth` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_name`, `fisrt_name`, `last_name`, `gender`, `birth`, `phone`, `address`, `email`, `password`, `token`) VALUES
(4, 'a', 'sdqw', 'as', 'Nam', '2022-01-05', '0967622166', 'Æ°qeqwewq', 'Æ°qeqweqw', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_bill`
--

CREATE TABLE `detail_bill` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `name`, `image`, `phone`, `address`) VALUES
(1, 'Nguyá»…n Huy HoÃ ng', '1643017919.jpg', '0937213131', 'xdxhoasihdqpwhe');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `vote` float NOT NULL,
  `id_producer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `detail`, `image`, `price`, `vote`, `id_producer`) VALUES
(1, 'Nguyá»…n Ngá»c', 'hdiasjdqjwoiej', 'jkldjdqPá»°DOAS', '1643017938.jpg', 321111, 123, 1),
(2, 'Nguyá»…n VÄƒn Linh', 'sadqweasd', 'qÆ°eqweqwe', '1643017966.jpg', 4321120, 1234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `serve`
--

CREATE TABLE `serve` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` enum('Nam','Ná»¯','KhÃ¡c') NOT NULL,
  `phone` varchar(50) NOT NULL,
  `identity` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `level` int(2) NOT NULL,
  `wage` float NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serve`
--

INSERT INTO `serve` (`id`, `name`, `gender`, `phone`, `identity`, `address`, `level`, `wage`, `account`, `password`, `token`) VALUES
(9, 'Nguyá»…n Ngá»c', 'Ná»¯', '0353891312', '022201001677', 'Nguyá»…n Ngá»c', 2, 300000, 'ql1', '123', 'user_61eeee56e39af6.64401533'),
(10, 'Nguyá»…n VÄƒn Linh', 'Nam', '0963123124', '022201001677', 'Báº¯c Ninh', 1, 30000000, '', '', NULL),
(11, 'Nguyá»…n Huy HÃ¹ng', 'Nam', '0967622166', '022201001677', '23123', 3, 9995650, 'ad1', '123', 'user_61eeee4c618bf2.66047381');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_serve` (`id_serve`),
  ADD KEY `id_detail_bill` (`id_detail_bill`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producer` (`id_producer`);

--
-- Indexes for table `serve`
--
ALTER TABLE `serve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `serve`
--
ALTER TABLE `serve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`id_serve`) REFERENCES `serve` (`id`);

--
-- Constraints for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `detail_bill_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `detail_bill_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `detail_bill_ibfk_4` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
