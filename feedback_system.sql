-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 12:50 PM
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
(106, 'The concepts of CAPP are understood and can be utilized to solve real life problems.	', 'Radio', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(109, 'Teaching Skill', 'Text', 'Excellent', 10, 'Very Good', 8, 'Good', 5, 'Average', 3, 'Poor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `res_id` int(11) DEFAULT NULL,
  `feedbackid` int(11) DEFAULT NULL,
  `questionid` int(11) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `category` text NOT NULL,
  `semester` char(5) DEFAULT NULL,
  `year` char(5) DEFAULT NULL,
  `section` char(1) DEFAULT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `dept`, `password`, `category`, `semester`, `year`, `section`, `contact`) VALUES
('Admin01', 'Abhishek', 'Kinhekar', 'admin@bitwardha.ac.in', 'Computer', '123', 'Admin', NULL, NULL, NULL, 123456789),
('comp123', 'UrvashiI', 'Pote', 'urvashi.pote@bitwardha.ac.in', 'COMPUTER', '123', 'Teacher', NULL, NULL, NULL, 0),
('comp345', 'Sheetal', 'Kale', 'comp.hod@bitwardha.ac.in', 'COMPUTER', '123', 'HOD', NULL, NULL, NULL, 123456789),
('P2046491245003', 'Nandlal', 'Jibhkate', 'amitjibhkate03@gmail.com', '', '123', 'Parent', NULL, NULL, NULL, 2147483647),
('﻿P2046491245047', 'Maroti', 'Raut', 'marotiraut94@gmail.com', '', '123', 'Parent', NULL, NULL, NULL, 2147483647),
('﻿T2046491245047', 'Shreya', 'Raut', 'co.2020.smraut@bitwardha.ac.in', 'COMPUTER', '123', 'Student', 'VI', 'III', 'A', 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
