-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 08:38 AM
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
(79, 'Amreen', 'Khan', 2147483647, 'TEACHER', 'amreen.khan@bitwardha.ac.in', 'COMPUTER', 'AmreenKhan123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(100) NOT NULL,
  `feedback_type` text NOT NULL,
  `author` text NOT NULL,
  `subject` text NOT NULL,
  `status` text NOT NULL,
  `dept` varchar(10) NOT NULL,
  `year` varchar(3) NOT NULL,
  `sem` varchar(4) NOT NULL,
  `section` varchar(1) NOT NULL
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
(71, 'Amit', 'Manakshe', 'akshay123', 'TEACHER', 'amit.manakshe@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`fname`, `lname`, `email`, `contact`, `password`) VALUES
('﻿Sunil', ' Patalbansi', ' suyashshivani@gmail.com', 2147483647, ' 123');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionid` int(100) NOT NULL,
  `question` text NOT NULL,
  `questiontype` text NOT NULL,
  `option1` text NOT NULL,
  `mark1` int(10) DEFAULT 10,
  `option2` text NOT NULL,
  `mark2` int(10) NOT NULL DEFAULT 8,
  `option3` text NOT NULL,
  `mark3` int(10) NOT NULL DEFAULT 5,
  `option4` text NOT NULL,
  `mark4` int(10) NOT NULL DEFAULT 3,
  `option5` text NOT NULL,
  `mark5` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionid`, `question`, `questiontype`, `option1`, `mark1`, `option2`, `mark2`, `option3`, `mark3`, `option4`, `mark4`, `option5`, `mark5`) VALUES
(101, 'Does the teacher explain the principle/theory of experiment?', 'Radio', 'Excellent', 10, 'Very Good', 8, 'Good', 5, 'Average', 3, 'Poor', 1),
(102, 'The lectures, tests and assignments complemented each other?	', 'Radio', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(103, 'The instructional materials (i.e., e-books, handouts, videos, lab manuals, multimedia) helped me better to understand CAD modeling techniques.	', 'Radio', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(104, 'The course was organized in such a manner, that helped me understand the underlying concepts in transformations, algorithms and CAD workstations.	\r\n	', 'Radio', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(105, 'The course gave me the confidence to do more advanced work in Finite Element Analysis.	', 'Radio', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(106, 'The concepts of CAPP are understood and can be utilized to solve real life problems.	', 'Radio', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `responseid` int(5) NOT NULL,
  `feedbackid` int(11) NOT NULL,
  `questionid` int(3) NOT NULL,
  `answer` varchar(20) NOT NULL
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
-- Dumping data for table `students`
--

INSERT INTO `students` (`prn`, `fname`, `lname`, `semester`, `email`, `password`) VALUES
('2046491245003', 'Amit', 'Jibhkate', 6, 'ar@bitwardha.ac.in', '123'),
('2046491245047', 'Shreya', 'Raut', 6, 'sl@bitwardha.ac.in', '123'),
('2046491245052', 'Suyash ', 'Patalbansi', 6, 'vt@bitwardha.ac.in', '123'),
('2146491245052', 'Smit', 'Katole', 6, 'sr@bitwardha.ac.in', '123'),
('﻿2046491245038', 'Rohit', 'Gajewar', 6, 'rg@bitwardha.ac.in', '123');

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
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionid`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `responses_ibfk_1` FOREIGN KEY (`feedbackid`) REFERENCES `questions` (`questionid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
