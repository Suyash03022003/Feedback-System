-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 04:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `username`, `category`, `email`, `password`) VALUES
(2, 'Suyash', 'Patalbansi', 'Suyash007', 'Student', 'co.2020.sspatalbansi@bitwardha.ac.in', '123'),
(3, 'Shreya', 'Raut', 'Shreya123', 'Student', 'co.2020.smraut@bitwardha.ac.in', '123'),
(4, 'Amit', 'Jibhkate', 'Amit123', 'Student', 'co.2020.anjibhkate@bitwardha.ac.in', '123'),
(5, 'Abhishek', 'Kinekar', 'Abhishek@123', 'Teacher', 'abhishek.kinhekar@bitwardha.ac.in', '123'),
(6, 'Sheetal', 'Kale', 'Sheetal@123', 'HOD', 'hod.comp@bitwardha.ac.in', '123'),
(7, 'Narendra', 'Kanhe', 'Principal@123', 'Principal', 'principal@bitwardha.ac.in', '123'),
(8, 'Sunil', 'Patalbansi', 'Sunil@123', 'Parent', 'suyashshivani@gmail.com', '123'),
(9, 'Abhishek', 'Kinhekar', 'Admin@123', 'Admin', 'admin@bitwardha.ac.in', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
