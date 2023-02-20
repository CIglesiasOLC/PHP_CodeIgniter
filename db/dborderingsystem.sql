-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 04:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dborderingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `motorcycles`
--

CREATE TABLE `motorcycles` (
  `mc_id` int(11) NOT NULL,
  `mc_brand` varchar(100) NOT NULL,
  `mc_model` varchar(100) NOT NULL,
  `mc_displacement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motorcycles`
--

INSERT INTO `motorcycles` (`mc_id`, `mc_brand`, `mc_model`, `mc_displacement`) VALUES
(1, 'suzuki', 'thunder', 125),
(2, 'kawasaki', 'rouser ns', 200),
(3, 'honda', 'crf', 250),
(4, 'yamaha', 'sniper mx fi', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motorcycles`
--
ALTER TABLE `motorcycles`
  ADD PRIMARY KEY (`mc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motorcycles`
--
ALTER TABLE `motorcycles`
  MODIFY `mc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
