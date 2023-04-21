-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 07:47 AM
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
(1, 'Kinjal', 'Patel', 987456321, 'Teacher', 'kinjal.patel@bitwardha.ac.in', 'Computer', 'kp123', '123'),
(10, 'Abhishek', 'Kinhekar', 123654789, 'Teacher', 'abhishek.kinhekar@bitwardha.ac.in', 'Computer', 'Abhishek', '123'),
(79, 'Amreen', 'Khan', 2147483647, 'TEACHER', 'amreen.khan@bitwardha.ac.in', 'COMPUTER', 'AmreenKhan123', '123'),
(88, 'Akshay', 'Saraf', 2147483647, 'TEACHER', 'asd@bitwardha.ac.in', 'COMPUTER', 'akshay123', '123'),
(91, 'Amol', 'Jumde', 2147483647, 'TEACHER', 'amol.jumde@bitwardha.ac.in', 'COMPUTER', 'amol123', '123');

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
(79, 103, 106),
(80, 104, 101),
(81, 104, 102),
(82, 104, 103),
(83, 104, 104),
(84, 104, 105),
(85, 104, 106),
(86, 105, 101),
(87, 105, 102),
(88, 105, 103),
(89, 105, 104),
(90, 105, 105),
(91, 105, 106),
(92, 105, 109),
(93, 106, 101),
(94, 106, 102),
(95, 106, 103),
(96, 106, 104),
(97, 106, 105),
(98, 106, 106),
(99, 106, 109),
(100, 106, 101),
(101, 106, 102),
(102, 106, 103),
(103, 106, 104),
(104, 106, 105),
(105, 106, 106),
(106, 106, 109),
(107, 106, 101),
(108, 106, 102),
(109, 106, 103),
(110, 106, 104),
(111, 106, 105),
(112, 106, 106),
(113, 106, 109),
(114, 107, 101),
(115, 107, 102),
(116, 107, 103),
(117, 107, 104),
(118, 107, 105),
(119, 107, 106),
(120, 107, 109),
(121, 108, 101),
(122, 108, 102),
(123, 108, 103),
(124, 108, 104),
(125, 108, 105),
(126, 108, 106),
(127, 108, 109),
(128, 108, 101),
(129, 108, 102),
(130, 108, 103),
(131, 108, 104),
(132, 108, 105),
(133, 108, 106),
(134, 108, 109),
(135, 109, 101),
(136, 109, 102),
(137, 109, 103),
(138, 109, 104),
(139, 109, 105),
(140, 109, 106),
(141, 109, 109),
(142, 110, 101),
(143, 110, 102),
(144, 110, 103),
(145, 110, 104),
(146, 110, 105),
(147, 110, 106),
(148, 110, 109),
(149, 111, 101),
(150, 111, 102),
(151, 111, 103),
(152, 111, 104),
(153, 111, 105),
(154, 111, 106),
(155, 111, 109);

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
(105, 'CES', 'Kinjal', 'DBMS', 'Unactive', 'Computer', 'III', 'V', 'A'),
(107, 'CES', 'Amol', 'ML', 'Active', 'Computer', 'III', 'V', 'A'),
(110, 'CES', 'Abhishek', 'CP', 'Unactive', 'Computer', 'III', 'VI', 'A'),
(111, 'CES', 'Abhishek', 'DS', 'Unactive', 'Computer', 'II', 'III', 'A');

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
(112, 'Kinjal', 'Patel', 'Teacher', 'kinjal.patel@bitwardha.ac.in', '123'),
(126, '﻿Sunil', ' Patalbans', 'Parent', ' suyashshivani@gmail.com', ' 123'),
(127, 'Nikhil', 'Dhopte', 'Student', 'nd@bitwardha.ac.in', '123'),
(128, 'Nikhil', 'Dhopte', 'Student', 'nd@bitwardha.ac.in', '123'),
(129, 'Saksham', 'Thakre', 'Student', 'st@bitwardha.ac.in', '123'),
(130, 'Ankita', 'Lokhande', 'Student', 'al@bitwardha.ac.in', '123'),
(131, 'Ankit', 'Gupta', 'Student', 'ag@bitwardha.ac.in', '123'),
(132, 'Karan', 'Patel', 'Student', 'kp@bitwardha.ac.in', '123'),
(133, 'Kartik', 'Rokade', 'Student', 'kr@bitwardha.ac.in', '123'),
(134, 'Aditi', 'Zade', 'Student', 'az@bitwardha.ac.in', '123'),
(135, 'Amol', 'Jumde', 'Teacher', 'amol.jumde@bitwardha.ac.in', '123');

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
(106, 'The concepts of CAPP are understood and can be utilized to solve real life problems.	', 'Radio', 'Strongly Agree', 10, 'Agree', 8, 'Neutral', 5, 'Disagree', 3, 'Strongly Disagree', 1),
(109, 'Teaching Skill', 'Text', 'Excellent', 10, 'Very Good', 8, 'Good', 5, 'Average', 3, 'Poor', 1);

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
(1, 101, 106, 'Agree'),
(2, 105, 101, 'Very Good'),
(2, 105, 102, 'Agree'),
(2, 105, 103, 'Agree'),
(2, 105, 104, 'Agree'),
(2, 105, 105, 'Agree'),
(2, 105, 106, 'Agree'),
(2, 105, 109, 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `prn` varchar(15) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `department` text NOT NULL,
  `sem` char(4) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`prn`, `fname`, `lname`, `department`, `sem`, `email`, `password`) VALUES
('2046491245047', 'Nikhil', 'Dhopte', 'Civil', 'I', 'nd@bitwardha.ac.in', '123'),
('2046491245048', 'Saksham', 'Thakre', 'Civil', 'I', 'st@bitwardha.ac.in', '123'),
('2046491245049', 'Ankita', 'Lokhande', 'Computer', 'III', 'al@bitwardha.ac.in', '123'),
('2046491245050', 'Ankit', 'Gupta', 'Electrical', 'V', 'ag@bitwardha.ac.in', '123'),
('2046491245051', 'Karan', 'Patel', 'Mechanical', 'I', 'kp@bitwardha.ac.in', '123'),
('2046491245052', 'Kartik', 'Rokade', 'Civil', 'V', 'kr@bitwardha.ac.in', '123'),
('2046491245053', 'Aditi', 'Zade', 'Computer', 'VI', 'az@bitwardha.ac.in', '123');

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
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`contact`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

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
