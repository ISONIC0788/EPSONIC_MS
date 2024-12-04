-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 02:35 PM
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
-- Database: `isonic`
--

-- --------------------------------------------------------

--
-- Table structure for table `userphot`
--

CREATE TABLE `userphot` (
  `p_id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `desc_photo` varchar(255) DEFAULT NULL,
  `us_id` int(11) DEFAULT NULL,
  `up_date` date DEFAULT NULL,
  `up_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userphot`
--

INSERT INTO `userphot` (`p_id`, `photo`, `desc_photo`, `us_id`, `up_date`, `up_time`) VALUES
(1, 'Screenshot (7).png', 'screemememmemefjhief', NULL, '2023-06-04', '01:01:39pm'),
(2, '0781 462 974 20230306_141226.png', 'mama', NULL, '2023-06-04', '01:13:05pm'),
(3, '336423937_894185828329742_2241675463853404933_n.jpg', 'hhhh', NULL, '2023-06-04', '01:13:18pm'),
(4, 'IMG_20230310_085818_448.jpg', 'heqhuoeqfhu', NULL, '2023-06-04', '01:13:29pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `u_pass` varchar(255) DEFAULT NULL,
  `u_email` varchar(255) DEFAULT NULL,
  `u_date` varchar(255) DEFAULT NULL,
  `u_number` varchar(255) DEFAULT NULL,
  `u_gender` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_pass`, `u_email`, `u_date`, `u_number`, `u_gender`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ebedi@gmail.com', '2023-04-20', '0788459217', 'male'),
(2, 'umuntu', 'f3af2c32c9dc4e3ad40723e121d3587316b8fe5e', 'umuntu@gmail.com', '2023-04-19', '0788466927', 'male'),
(3, 'banana', 'f3af2c32c9dc4e3ad40723e121d3587316b8fe5e', 'lanez@gmail.com', '2023-05-24', '0788456788', 'male'),
(4, 'lanes', 'f3af2c32c9dc4e3ad40723e121d3587316b8fe5e', 'lanez@gmail.com', '2023-05-30', '0788769876', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userphot`
--
ALTER TABLE `userphot`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userphot`
--
ALTER TABLE `userphot`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userphot`
--
ALTER TABLE `userphot`
  ADD CONSTRAINT `userphot_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `users` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
