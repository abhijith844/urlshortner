-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 02:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url`
--

-- --------------------------------------------------------

--
-- Table structure for table `shorturl`
--

CREATE TABLE `shorturl` (
  `id` int(255) NOT NULL,
  `shorturl` varchar(255) NOT NULL,
  `longurl` varchar(255) NOT NULL,
  `usern` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shorturl`
--

INSERT INTO `shorturl` (`id`, `shorturl`, `longurl`, `usern`) VALUES
(36, '8215b', 'www.facebook.com', 'abhi'),
(37, 'd9bbf', 'www.amazon.in', 'abhi'),
(38, 'd7842', 'www.google.com', 'ajith'),
(39, 'f04e7', 'www.bing.com', 'ajith'),
(40, 'b183d', 'www.google.com', 'abhi'),
(41, '7828e', 'www.flipkart.com', 'ajith'),
(42, '43071', 'https://www.cssportal.com/form-elements/text-box.php', 'ajith'),
(43, '1bc05', 'https://www.nexusmods.com/skyrim/mods/76373/?', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pass`) VALUES
('abhi', 'pass'),
('ajith', '123'),
('user2', 'user2'),
('user1', 'user1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shorturl`
--
ALTER TABLE `shorturl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shorturl`
--
ALTER TABLE `shorturl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
