-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 02:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tododb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `TaskID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TaskName` varchar(255) NOT NULL,
  `Time1` date NOT NULL,
  `Time2` time NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`TaskID`, `Email`, `TaskName`, `Time1`, `Time2`, `Status`) VALUES
(908, 'mtu@gmail.com', 'jogging', '2020-09-11', '07:12:00', 'Complete'),
(911, 'mtu@gmail.com', 'Playing', '2020-09-12', '18:29:00', 'Pending'),
(912, 'mtu@gmail.com', 'Meeting', '2020-09-14', '18:31:00', 'Pending'),
(913, 'mtu@gmail.com', 'Teaching', '2020-09-14', '19:32:00', 'Pending'),
(914, 'mtu@gmail.com', 'Swimming', '2020-09-13', '15:30:00', 'Pending'),
(915, 'mtu@gmail.com', 'Learning Python', '2020-09-14', '08:00:00', 'Pending'),
(916, 'mtu@gmail.com', 'Learning Laravel Framework', '2020-09-12', '08:00:00', 'Pending'),
(917, 'mtu@gmail.com', 'Watching Movie', '2020-09-12', '21:40:00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Email` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `Name`, `Password`) VALUES
('mtu@gmail.com', 'Mtu Mtu', '11111111'),
('njozi@gmail.com', 'Abdul-Majeed Njozi', '999999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`TaskID`,`Email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `TaskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=919;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
