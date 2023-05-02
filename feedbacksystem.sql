-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 04:06 PM
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
-- Database: `feedbacksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `allfeedbackforms`
--

CREATE TABLE `allfeedbackforms` (
  `feedbackId` int(11) NOT NULL,
  `feedbackType` char(10) NOT NULL,
  `userId` varchar(15) NOT NULL,
  `subjectId` char(15) NOT NULL,
  `deptId` int(10) NOT NULL,
  `year` char(3) NOT NULL,
  `semester` char(4) NOT NULL,
  `section` char(1) DEFAULT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptId` int(10) NOT NULL,
  `deptName` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `questionId` int(11) NOT NULL,
  `option` char(10) NOT NULL,
  `markAssigned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionId` int(11) NOT NULL,
  `questionType` char(20) NOT NULL,
  `question` text NOT NULL,
  `feedbackId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `responseId` int(11) NOT NULL,
  `feedbackId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `option` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectId` char(15) NOT NULL,
  `deptId` int(10) NOT NULL,
  `subjectName` char(20) NOT NULL,
  `subjectFaculty` char(14) NOT NULL,
  `semester` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` varchar(14) NOT NULL,
  `fname` char(10) NOT NULL,
  `mname` char(10) NOT NULL,
  `lname` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `departmentId` int(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `category` char(10) NOT NULL,
  `semester` char(4) DEFAULT NULL,
  `year` char(3) DEFAULT NULL,
  `section` char(1) DEFAULT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allfeedbackforms`
--
ALTER TABLE `allfeedbackforms`
  ADD PRIMARY KEY (`feedbackId`),
  ADD KEY `fk_authorId` (`userId`),
  ADD KEY `fk_subjectid` (`subjectId`),
  ADD KEY `fk_departmentId` (`deptId`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD KEY `fk_questionIdOptions` (`questionId`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionId`),
  ADD KEY `fk_feedbackIdQuestion` (`feedbackId`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`responseId`),
  ADD KEY `fk_feedbackId` (`feedbackId`),
  ADD KEY `fk_questionId` (`questionId`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectId`),
  ADD KEY `fk_deptId` (`deptId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `foreign_key` (`departmentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allfeedbackforms`
--
ALTER TABLE `allfeedbackforms`
  MODIFY `feedbackId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `responseId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allfeedbackforms`
--
ALTER TABLE `allfeedbackforms`
  ADD CONSTRAINT `fk_authorId` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `fk_departmentId` FOREIGN KEY (`deptId`) REFERENCES `department` (`deptId`),
  ADD CONSTRAINT `fk_subjectid` FOREIGN KEY (`subjectId`) REFERENCES `subject` (`subjectId`);

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `fk_questionIdOptions` FOREIGN KEY (`questionId`) REFERENCES `question` (`questionId`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_feedbackIdQuestion` FOREIGN KEY (`feedbackId`) REFERENCES `allfeedbackforms` (`feedbackId`);

--
-- Constraints for table `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `fk_feedbackId` FOREIGN KEY (`feedbackId`) REFERENCES `allfeedbackforms` (`feedbackId`),
  ADD CONSTRAINT `fk_questionId` FOREIGN KEY (`questionId`) REFERENCES `question` (`questionId`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk_deptId` FOREIGN KEY (`deptId`) REFERENCES `department` (`deptId`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`departmentId`) REFERENCES `department` (`deptId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
