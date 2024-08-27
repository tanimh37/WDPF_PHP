-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Aug 27, 2024 at 09:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf60_transaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `trunks`
--

CREATE TABLE `trunks` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `owner` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trunks`
--

INSERT INTO `trunks` (`id`, `owner`, `name`, `price`, `description`) VALUES
(1, 1, 'Abacus', '12.99', 'Low on computing power? Use an\r\nabacus!'),
(2, 2, 'Magazines', '6.00', 'Stack of computer magazines.'),
(3, 1, 'Used Lottery ticket', '1.00', 'Great gift for the eternal\r\noptimist.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trunks`
--
ALTER TABLE `trunks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trunks`
--
ALTER TABLE `trunks`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
