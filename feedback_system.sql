-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 05:53 AM
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

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback_id`, `question_id`) VALUES
(281, 101, 101),
(282, 101, 102),
(283, 101, 103),
(284, 101, 104),
(285, 101, 105),
(286, 101, 106),
(287, 101, 107),
(288, 102, 101),
(289, 102, 102),
(290, 102, 103),
(291, 102, 104),
(292, 102, 105),
(293, 102, 106),
(294, 102, 107),
(295, 103, 101),
(296, 103, 102),
(297, 103, 103),
(298, 103, 104),
(299, 103, 105),
(300, 103, 106),
(301, 103, 107);

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
(101, 'PTM', 'Sheetal', 'Seminar', 'Active', 'Computer', 'III', 'VI', 'A'),
(102, 'CES', 'Urvashi', 'CN', 'Active', 'Computer', 'III', 'VI', 'A'),
(103, 'CES', 'Kinjal', 'CP', 'Active', 'Computer', 'III', 'VI', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionid` int(100) NOT NULL,
  `question` text NOT NULL,
  `feedbacktype` char(25) NOT NULL,
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

INSERT INTO `questions` (`questionid`, `question`, `feedbacktype`, `option1`, `mark1`, `option2`, `mark2`, `option3`, `mark3`, `option4`, `mark4`, `option5`, `mark5`) VALUES
(101, 'Does the teacher explain the principle/theory of experiment?', 'CES', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(102, 'The lectures, tests and assignments complemented each other?	', 'CES', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(103, 'The instructional materials (i.e., e-books, handouts, videos, lab manuals, multimedia) helped me better to understand CAD modeling techniques.	', 'CES', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(104, 'The course was organized in such a manner, that helped me understand the underlying concepts in transformations, algorithms and CAD workstations.	\r\n	', 'CES', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(105, 'The course gave me the confidence to do more advanced work in Finite Element Analysis.	', 'CES', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(106, 'The course is designed in such a way that concept of Group Technology is well understood.', 'PTM', 'Strongly Agree\r\n', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree\r\n', 1),
(107, 'Robot configurations, sensors and programming techniques are well covered in the class.', 'PTM', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `res_id` int(11) DEFAULT NULL,
  `feedbackid` int(11) DEFAULT NULL,
  `questionid` int(11) DEFAULT NULL,
  `answer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`res_id`, `feedbackid`, `questionid`, `answer`) VALUES
(1, 103, 101, 'Strongly Agree'),
(1, 103, 102, 'Agree'),
(1, 103, 103, 'Neutral'),
(1, 103, 104, 'Disagree'),
(1, 103, 105, 'Strongly Disagree'),
(1, 103, 106, 'Disagree'),
(1, 103, 107, 'Neutral'),
(2, 101, 101, 'Strongly Agree'),
(2, 101, 102, 'Agree'),
(2, 101, 103, 'Neutral'),
(2, 101, 104, 'Disagree'),
(2, 101, 105, 'Strongly Disagree'),
(2, 101, 106, 'Disagree'),
(2, 101, 107, 'Neutral');

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
('3', 'Kinjal', 'Patel', 'kinjal.patel@bitwardha.ac.in', 'Computer', '123', 'Teacher', NULL, NULL, NULL, 123456789),
('Admin01', 'Abhishek', 'Kinhekar', 'admin@bitwardha.ac.in', 'Computer', '123', 'Admin', NULL, NULL, NULL, 123456789),
('comp123', 'Urvashi', 'Pote', 'urvashi.pote@bitwardha.ac.in', 'Computer', '123', 'Teacher', NULL, NULL, NULL, 0),
('comp345', 'Sheetal', 'Kale', 'comp.hod@bitwardha.ac.in', 'Computer', '123', 'HOD', NULL, NULL, NULL, 123456789),
('comp678', 'Akshay', 'Saraf', 'akshay.saraf@bitwardha.ac.in', 'Computer', '123', 'Teacher', NULL, NULL, NULL, 123456789),
('comp741', 'Harshad', 'Phadke', 'harshad.padhke@bitwardha.ac.in', 'Civil', '123', 'Teacher', NULL, NULL, NULL, 123456789),
('P2046491245003', 'Nandlal', 'Jibhkate', 'amitjibhkate03@gmail.com', '', '123', 'Parent', NULL, NULL, NULL, 2147483647),
('T2046491245003', 'Amit', 'Jibhkate', 'co.2020.smraut@bitwardha.ac.in', 'Computer', '123', 'Student', 'V', 'III', 'A', 123456789),
('﻿P2046491245047', 'Maroti', 'Raut', 'marotiraut94@gmail.com', '', '123', 'Parent', NULL, NULL, NULL, 2147483647),
('﻿T2046491245047', 'Shreya', 'Raut', 'co.2020.smraut@bitwardha.ac.in', 'Computer', '123', 'Student', 'VI', 'III', 'A', 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
