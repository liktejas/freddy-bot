-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 02:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freddy_bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `qnr`
--

CREATE TABLE `qnr` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qnr`
--

INSERT INTO `qnr` (`id`, `questions`, `reply`) VALUES
(1, 'Hi||Hello||Hola', 'Hello'),
(2, 'How are you', 'I am good, how about you'),
(3, 'what is your name||whats your name ', 'I am Freddy Bot'),
(4, 'what should I call you', 'Call me Freddy bot'),
(5, 'bye||see you later||Goodbye||have a good day', 'Bye, See you again &#128512;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qnr`
--
ALTER TABLE `qnr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qnr`
--
ALTER TABLE `qnr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
