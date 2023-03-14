-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 05:09 PM
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
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(100) NOT NULL,
  `FNAME` text NOT NULL,
  `LNAME` text NOT NULL,
  `CONTACT` int(11) NOT NULL,
  `CATEGORY` text NOT NULL,
  `EMAIL` varchar(35) NOT NULL,
  `DEPARTMENT` text NOT NULL,
  `USERNAME` varchar(35) NOT NULL,
  `PASSWORD` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `FNAME`, `LNAME`, `CONTACT`, `CATEGORY`, `EMAIL`, `DEPARTMENT`, `USERNAME`, `PASSWORD`) VALUES
(74, 'AMREEN123', 'khan', 2147483647, 'Not Selected', 'amreen.khan@bitwardha.ac.in', 'Not Selected', 'amreen123', '123'),
(78, 'Amit', 'Manakshe', 2147483647, 'TEACHER', 'amit.manakshe@gmail.com', 'Not Selected', 'dads', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback id` int(11) NOT NULL,
  `question id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback id` int(100) NOT NULL,
  `feedback type` text NOT NULL,
  `author` text NOT NULL,
  `subject` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Suyash', 'Patalbansi', 'Suyash007', 'Student', 'co.2020.sspatalbansi@bitwardha.ac.in', '123'),
(3, 'Shreya', 'Raut', 'Shreya123', 'Student', 'co.2020.smraut@bitwardha.ac.in', '123'),
(4, 'Amit', 'Jibhkate', 'Amit123', 'Student', 'co.2020.anjibhkate@bitwardha.ac.in', '123'),
(5, 'Abhishek', 'Kinekar', 'Abhishek@123', 'Teacher', 'abhishek.kinhekar@bitwardha.ac.in', '123'),
(6, 'Sheetal', 'Kale', 'Sheetal@123', 'HOD', 'hod.comp@bitwardha.ac.in', '123'),
(7, 'Narendra', 'Kanhe', 'Principal@123', 'Principal', 'principal@bitwardha.ac.in', '123'),
(8, 'Sunil', 'Patalbansi', 'Sunil@123', 'Parent', 'suyashshivani@gmail.com', '123'),
(9, 'Abhishek', 'Kinhekar', 'Admin@123', 'Admin', 'admin@bitwardha.ac.in', '123'),
(69, 'amreen', 'khan', 'amreen123', 'TEACHER', 'amreen.khan@bitwardha.ac.in', '123'),
(70, 'SHreya', 'RAut', 'shreya2409', 'TEACHER', 'co.2020.mbraut@bitwardha.ac.in', '123'),
(71, 'Amit', 'Manakshe', 'akshay123', 'TEACHER', 'amit.manakshe@gmail.com', '123'),
(72, 'Amit', 'Manakshe', 'dads', 'Not Select', 'manakshe.amit@bitwardha.ac.in', '123'),
(73, 'Amit', 'Manakshe', 'dads', 'TEACHER', 'amit.manakshe@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question id` int(100) NOT NULL,
  `option 1` int(100) NOT NULL,
  `mark 1` int(100) NOT NULL,
  `option 2` int(100) NOT NULL,
  `mark 2` int(100) NOT NULL,
  `option 3` int(100) NOT NULL,
  `mark 3` int(100) NOT NULL,
  `option 4` int(100) NOT NULL,
  `mark 4` int(100) NOT NULL,
  `option 5` int(100) NOT NULL,
  `mark 5` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `response id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback id` int(11) NOT NULL,
  `question 1` int(11) NOT NULL,
  `question 2` int(11) NOT NULL,
  `question 3` int(11) NOT NULL,
  `question 4` int(11) NOT NULL,
  `question 5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `prn` varchar(15) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `semester` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`response id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`prn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `response id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
