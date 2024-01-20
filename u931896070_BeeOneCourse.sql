-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2024 at 06:50 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u931896070_BeeOneCourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `classID` int(11) NOT NULL,
  `teacherNIK` int(11) DEFAULT NULL,
  `className` varchar(255) DEFAULT NULL,
  `currentStudents` int(11) DEFAULT NULL,
  `maxCapacity` int(11) DEFAULT NULL,
  `classScheduleDate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `studentID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `StudentAttendance`
--

CREATE TABLE `StudentAttendance` (
  `studentID` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `studentStatus` varchar(50) DEFAULT NULL,
  `attendanceDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `StudentPaymentFee`
--

CREATE TABLE `StudentPaymentFee` (
  `studentID` int(11) NOT NULL,
  `paymentDate` date DEFAULT NULL,
  `paymentAmount` decimal(10,2) DEFAULT NULL,
  `eduFee` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `teacherNIK` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `educationLevel` varchar(255) DEFAULT NULL,
  `schedule` varchar(10) DEFAULT NULL,
  `mandarinName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TeacherPayment`
--

CREATE TABLE `TeacherPayment` (
  `paymentID` varchar(6) NOT NULL,
  `teacherNIK` int(11) DEFAULT NULL,
  `paymentDate` date DEFAULT NULL,
  `paymentAmount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` char(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UserID`, `Username`, `Role`, `Password`) VALUES
('A001', 'admin', 'admin', 'admin123'),
('T001', 'teacher', 'teacher', 'teacher123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`classID`),
  ADD KEY `TeacherNIK` (`teacherNIK`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `StudentAttendance`
--
ALTER TABLE `StudentAttendance`
  ADD PRIMARY KEY (`studentID`,`classID`),
  ADD KEY `ClassID` (`classID`);

--
-- Indexes for table `StudentPaymentFee`
--
ALTER TABLE `StudentPaymentFee`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`teacherNIK`);

--
-- Indexes for table `TeacherPayment`
--
ALTER TABLE `TeacherPayment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `TeacherNIK` (`teacherNIK`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Class`
--
ALTER TABLE `Class`
  ADD CONSTRAINT `Class_ibfk_2` FOREIGN KEY (`teacherNIK`) REFERENCES `Teacher` (`teacherNIK`);

--
-- Constraints for table `StudentAttendance`
--
ALTER TABLE `StudentAttendance`
  ADD CONSTRAINT `StudentAttendance_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `Student` (`studentID`),
  ADD CONSTRAINT `StudentAttendance_ibfk_2` FOREIGN KEY (`classID`) REFERENCES `Class` (`classID`);

--
-- Constraints for table `StudentPaymentFee`
--
ALTER TABLE `StudentPaymentFee`
  ADD CONSTRAINT `StudentPaymentFee_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `Student` (`studentID`);

--
-- Constraints for table `TeacherPayment`
--
ALTER TABLE `TeacherPayment`
  ADD CONSTRAINT `TeacherPayment_ibfk_2` FOREIGN KEY (`teacherNIK`) REFERENCES `Teacher` (`teacherNIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
