-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql212.infinityfree.com
-- Generation Time: Apr 26, 2025 at 01:19 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_36487787_goalball`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `place` text NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `image_folder_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `place`, `from_date`, `to_date`, `featured_image`, `image_folder_name`, `slug`, `created_at`) VALUES
(1, '4th National Goalball Championship 2024-25', '', 'Zila Kida Sankul Bhawan, Gondia, Maharashtra', '2024-12-26', '2024-12-28', 'event-4.jpg', '', '4th-national-goalball-championship-2024-25', '2025-04-26 13:31:16'),
(2, '3rd National Goalball Championship 2023-24', '', 'Dr. Bhim Rao Ambedkar Sports Stadium, Saharanpur, Uttar Pradesh', '2024-03-26', '2024-03-28', 'event-3.jpg', '', '3rd-national-goalball-championship-2023-24', '2025-04-26 13:31:16'),
(3, '2nd National Goalball Championship 2022-23', '', 'MDU Rohtak', '2024-10-14', '2024-10-16', 'event-2.jpg', '', '2nd-national-goalball-championship-2022-23', '2025-04-26 13:31:16'),
(4, 'Goalball Federation Cup 2021', '', 'Dharamshala, Himachal Pradesh', '2021-12-27', '2021-12-28', 'federation-2021.jpg', '', 'goalball-federation-cup-2021', '2025-04-26 13:31:16'),
(5, 'PRERNA Goalball Event 2019', '', 'Maharaja Sayajirao University of Baroda, Gujarat', '2019-08-03', '2019-08-04', 'prerna-2019.jpg', '', 'prerna-goalball-event-2019', '2025-04-26 13:31:16'),
(7, '1st National Goalball Seminar with support of IBSA 2018', '', 'Thyagraj Stadium, New Delhi', '2018-12-11', '2018-12-13', 'event-seminar-1.jpg', '', '1st-national-goalball-seminar-with-support-of-ibsa-2018', '2025-04-26 13:31:16'),
(8, '1st National Goalball Championship 2017', '', 'Indoor Rohru, Himachal Pradesh', '2017-09-16', '2017-09-17', 'event-1.jpg', '', '1st-national-goalball-championship-2017', '2025-04-26 13:31:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
