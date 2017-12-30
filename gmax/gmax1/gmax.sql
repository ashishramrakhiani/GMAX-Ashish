-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 08:28 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmax`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(255) NOT NULL,
  `productid` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` int(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `pbrand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `productid`, `pname`, `pprice`, `pcategory`, `pbrand`) VALUES
(88, 12, 'Aashirwaad Superior MP Aata', 42, 'Grains', 'Aashirwaad'),
(89, 13, 'Nature Fresh Sampoorna Chakki Atta', 225, 'Grains', 'Nature Fresh'),
(90, 12, 'Aashirwaad Superior MP Aata', 42, 'Grains', 'Aashirwaad'),
(91, 12, 'Aashirwaad Superior MP Aata', 42, 'Grains', 'Aashirwaad'),
(92, 12, 'Aashirwaad Superior MP Aata', 42, 'Grains', 'Aashirwaad');

-- --------------------------------------------------------

--
-- Table structure for table `cod`
--

CREATE TABLE `cod` (
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `pn` int(10) NOT NULL,
  `pc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cod`
--

INSERT INTO `cod` (`email`, `fullname`, `state`, `district`, `town`, `pn`, `pc`) VALUES
('a.ramrakhiani@somaiya.edu', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'P', 'Ulhasnagar', 2147483647, 421004),
('a.ramrakhiani@somaiya.edu', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('a.ramrakhiani@somaiya.edu', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('a.ramrakhiani@somaiya.edu', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004),
('a.ramrakhiani@somaiya.edu', 'Ashish Tulso Ramrakhiani', 'Maharashtra', 'Thane', 'Ulhasnagar', 2147483647, 421004);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` int(255) NOT NULL,
  `pquantity` int(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `pbrand` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `pname`, `pprice`, `pquantity`, `pcategory`, `pbrand`, `pimage`) VALUES
(3, 'Dal', 80, 19, 'Groceries', 'Regal', ''),
(4, 'Rice', 100, 19, 'Grains', 'Aashirwad', ''),
(5, 'Cashews', 200, 40, 'Ocassional', 'A-1 DRY FRUITS', 'images/pic10.png'),
(11, 'cash', 250, 25, 'Grains', 'Asshirwaad', 'images/pic05.jpg'),
(12, 'Aashirwaad Superior MP Aata', 42, 300, 'Grains', 'Aashirwaad', 'images/pic08.png'),
(13, 'Nature Fresh Sampoorna Chakki Atta', 225, 200, 'Grains', 'Nature Fresh', 'images/pic09.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` int(255) NOT NULL,
  `month` int(255) NOT NULL,
  `year` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fullname`, `email`, `password`, `date`, `month`, `year`, `gender`) VALUES
(1, 'Ashish Tulso Ramrakhiani', 'a.ramrakhiani@somaiya.edu', 'dccc', 18, 10, 1997, 'male'),
(2, 'John Cena', 'johnc@gmail.com', '989975', 23, 4, 1882, 'male'),
(3, 'Sneha Tulso Ramrakhiani', 'snehar@gmail.com', '07786455', 20, 5, 2005, 'female'),
(4, 'Ashish Tulso Ramrakhiani', 'a.ramrakhiani@somaiya.edu', 'ashish', 19, 10, 1997, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
