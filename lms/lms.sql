-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 04:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `id` int(11) NOT NULL,
  `isbn` int(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `version` int(25) NOT NULL,
  `book_type` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`id`, `isbn`, `name`, `author`, `version`, `book_type`, `date_time`) VALUES
(11, 2147483647, 'ISC COMPUTER SCIENCE', 'D.K PANDEY', 1, 'Science', '2020-12-22 17:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bkname` varchar(255) NOT NULL,
  `authname` varchar(255) NOT NULL,
  `vname` int(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`id`, `email`, `bkname`, `authname`, `vname`, `cat`, `date_time`) VALUES
(9, 'aliza@gmail.com', 'BUSINESS ETHICS', 'G.B. SHAW', 1, 'Commerce', '2020-12-25 15:16:18'),
(10, 'aliza@gmail.com', 'AS YOU LIKE IT', 'SHAKESPEARE', 1, 'English', '2020-12-25 15:16:36'),
(11, 'alexa@gmail.com', 'ISC PHYSICS', 'AFTAB KHAN', 1, 'Science', '2020-12-25 15:22:18'),
(12, 'alexa@gmail.com', 'BUSINESS ETHICS', 'R.K PANDEY', 1, 'Commerce', '2020-12-25 15:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `designation`, `date_time`) VALUES
(1, 'Alex', 'alex@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Librarian', '2020-11-20 16:17:34'),
(4, 'Aliza', 'aliza@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Student', '2020-11-20 16:09:39'),
(8, 'alexa', 'alexa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Student', '2020-11-22 15:53:34'),
(11, 'Google', 'google@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Student', '2020-11-22 15:56:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
