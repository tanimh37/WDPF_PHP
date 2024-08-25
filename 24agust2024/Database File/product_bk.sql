-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Aug 25, 2024 at 09:27 AM
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
-- Database: `evidence_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_bk`
--

CREATE TABLE `product_bk` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bk`
--

INSERT INTO `product_bk` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Apple 16 pro max', 90000, 1),
(2, 'Apple vision pro', 99000, 1),
(3, 'Galaxy s24 ultra', 88000, 2),
(4, 'Galaxy flip', 80000, 2),
(5, 'Mi 12 pro', 65000, 3),
(6, 'Xiaomi note 14', 5000, 3),
(7, 'Sony alpha camera', 95000, 4),
(8, 'Xperia 9 pro', 3500, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
