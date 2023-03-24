-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 10:25 AM
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
(79, 'Amreen', 'Khan', 2147483647, 'TEACHER', 'amreen.khan@bitwardha.ac.in', 'COMPUTER', 'AmreenKhan123', '123'),
(80, 'akshay', 'saraf', 2147483647, 'TEACHER', 'ads@bitwardha.ac.in', 'COMPUTER', 'akshay123', '123'),
(81, 'Kinjal', 'Patel', 2147483647, 'TEACHER', 'kp@bitwardha.ac.in', 'COMPUTER', 'kp123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback_id`, `question_id`) VALUES
(68, 101, 101),
(69, 101, 102),
(70, 101, 103),
(71, 101, 104),
(72, 101, 105),
(73, 101, 106),
(74, 103, 101),
(75, 103, 102),
(76, 103, 103),
(77, 103, 104),
(78, 103, 105),
(79, 103, 106);

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

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `feedback_type`, `author`, `subject`, `status`, `dept`, `year`, `sem`, `section`) VALUES
(101, 'CES', 'ads', 'cd', 'Active', 'Computer', 'III', 'VI', 'A'),
(102, 'CES', 'amk', 'DAA', 'Active', 'Computer', 'I', 'II', 'A'),
(103, 'CES', 'XYZ', 'DBMS', 'Active', 'Computer', 'I', 'I', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `category`, `email`, `password`) VALUES
(1, 'Suyash', 'Patalbansi', 'Student', 'co.2020.sspatalbansi@bitwardha.ac.in', '123'),
(3, 'Shreya', 'Raut', 'Student', 'co.2020.smraut@bitwardha.ac.in', '123'),
(4, 'Amit', 'Jibhkate', 'Student', 'co.2020.anjibhkate@bitwardha.ac.in', '123'),
(5, 'Abhishek', 'Kinekar', 'Teacher', 'abhishek.kinhekar@bitwardha.ac.in', '123'),
(6, 'Sheetal', 'Kale', 'HOD', 'hod.comp@bitwardha.ac.in', '123'),
(7, 'Narendra', 'Kanhe', 'Principal', 'principal@bitwardha.ac.in', '123'),
(9, 'Abhishek', 'Kinhekar', 'Admin', 'admin@bitwardha.ac.in', '123'),
(69, 'amreen', 'khan', 'TEACHER', 'amreen.khan@bitwardha.ac.in', '123'),
(70, 'SHreya', 'RAut', 'TEACHER', 'co.2020.mbraut@bitwardha.ac.in', '123'),
(99, 'Nikhil', 'Dhopte', 'Student', 'nd@bitwardha.ac.in', '123'),
(100, 'Ankit', 'Gupta', 'Student', 'ag@bitwardha.ac.in', '123');

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

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`responseid`, `feedbackid`, `questionid`, `answer`) VALUES
(1, 101, 101, 'Excellent'),
(1, 101, 102, 'Agree'),
(1, 101, 103, 'Agree'),
(1, 101, 104, 'Agree'),
(1, 101, 105, 'Neutral'),
(1, 101, 106, 'Agree');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `prn` varchar(15) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `department` text NOT NULL,
  `semester` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`prn`, `fname`, `lname`, `department`, `semester`, `email`, `password`) VALUES
('2.05E+12', 'Nikhil', 'Dhopte', 'Civil', 4, 'nd@bitwardha.ac.in', '123'),
('2.06E+12', 'Ankit', 'Gupta', 'Electrical', 1, 'ag@bitwardha.ac.in', '123');

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
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD KEY `responses_ibfk_1` (`feedbackid`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
