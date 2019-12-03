-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 04:32 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_payments`
--

CREATE TABLE `m_payments` (
  `payment_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date_paid` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `swipe_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_payments`
--

INSERT INTO `m_payments` (`payment_id`, `amount`, `date_paid`, `user_id`, `album_id`, `remarks`, `swipe_status`) VALUES
(1, 37, '2019-12-03 15:13:43', 21, 37, 'Album purchase', 'succeeded'),
(2, 34, '2019-12-03 15:26:13', 21, 34, 'Album purchase', 'succeeded');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_payments`
--
ALTER TABLE `m_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_payments`
--
ALTER TABLE `m_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
