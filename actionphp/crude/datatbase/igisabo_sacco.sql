-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 11:14 AM
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
-- Database: `igisabo_sacco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `username`, `password`) VALUES
(1, 'Mucyo', '@123'),
(2, 'Rugero', 'qwerty'),
(3, 'esther', '112'),
(4, 'esther', '112'),
(5, 'esther', '112'),
(6, 'esther', '112'),
(7, 'esther', '112'),
(8, 'esther', '112'),
(9, 'esther', '112'),
(10, 'esther', '112');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `cl_id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Telephome` varchar(255) NOT NULL,
  `Acc_No` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`cl_id`, `FirstName`, `LastName`, `Gender`, `Telephome`, `Acc_No`) VALUES
(2, 'ebedi ', 'mekeleki', 'male', '0788888', '242424');

-- --------------------------------------------------------

--
-- Table structure for table `debitor`
--

CREATE TABLE `debitor` (
  `Debt_id` int(11) NOT NULL,
  `cl_id` int(11) NOT NULL,
  `Amount_debited` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `debitor`
--

INSERT INTO `debitor` (`Debt_id`, `cl_id`, `Amount_debited`, `Date`, `Admin_id`) VALUES
(7, 2, 1000226554, '2023-06-05', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `debitor`
--
ALTER TABLE `debitor`
  ADD PRIMARY KEY (`Debt_id`),
  ADD KEY `cl_id` (`cl_id`,`Admin_id`),
  ADD KEY `Admin_id` (`Admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `debitor`
--
ALTER TABLE `debitor`
  MODIFY `Debt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `debitor`
--
ALTER TABLE `debitor`
  ADD CONSTRAINT `debitor_ibfk_1` FOREIGN KEY (`cl_id`) REFERENCES `clients` (`cl_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `debitor_ibfk_2` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
