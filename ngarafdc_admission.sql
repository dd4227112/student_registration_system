-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 05:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngarafdc_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_id` varchar(250) NOT NULL,
  `Course_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_id`, `Course_name`) VALUES
('CA', 'Computer Application'),
('ICT', 'Information and Communication Technology'),
('MVM', 'Motor Vehicle Mechanics');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `Emergency_id` int(100) NOT NULL,
  `Full_name` varchar(250) NOT NULL,
  `Phone` varchar(250) NOT NULL,
  `Relationships` varchar(250) NOT NULL,
  `Student_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`Emergency_id`, `Full_name`, `Phone`, `Relationships`, `Student_id`) VALUES
(20, 'Julieth Fidelis', '0766666666', 'Sister', 48),
(21, 'Julieth Fidelis', '0766666666', 'Sister', 49),
(22, 'Anthon Patric', '0766666666', 'Friend', 50),
(23, 'Chilala', '0766666666', 'Friend', 51),
(24, 'Anthon Patrick', '0766666898', 'Friend', 52);

-- --------------------------------------------------------

--
-- Table structure for table `medicalinfo`
--

CREATE TABLE `medicalinfo` (
  `Medical_id` int(100) NOT NULL,
  `Physician_name` varchar(250) DEFAULT NULL,
  `Phonenumber` varchar(250) DEFAULT NULL,
  `Allegies` varchar(250) DEFAULT NULL,
  `Medication` varchar(250) DEFAULT NULL,
  `Student_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalinfo`
--

INSERT INTO `medicalinfo` (`Medical_id`, `Physician_name`, `Phonenumber`, `Allegies`, `Medication`, `Student_id`) VALUES
(20, 'Franco', '0766666666', 'Allegies with Ugali', '', 48),
(21, 'Franco', '0766666666', 'Allegies with Ugali', 'Medical is required effectively', 49),
(22, 'Dk. David', '0766666666', 'No Allegies', 'No Medication', 50),
(23, '', '', '', '', 51),
(24, 'Dk. David', '0766666666', 'No Allegies', '', 52);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `Parent_id` int(100) NOT NULL,
  `Firstname` varchar(250) NOT NULL,
  `Middlename` varchar(250) DEFAULT NULL,
  `Lastname` varchar(250) NOT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Mobilenumber` varchar(250) NOT NULL,
  `Relationship` varchar(250) NOT NULL,
  `Student_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`Parent_id`, `Firstname`, `Middlename`, `Lastname`, `Email`, `Mobilenumber`, `Relationship`, `Student_id`) VALUES
(20, 'Daniel', 'K', 'Petro', 'dd4227112@gmail.com', '0766666666', 'Father', 48),
(21, 'Daniel', 'K', 'Petro', 'dd4227112@gmail.com', '0766666666', 'Father', 49),
(22, 'Msukumo', 'M', 'Marco', 'dd4227112@gmail.com', '0766666666', 'Grandfather', 50),
(23, 'Chilala', 'E.', 'Emmanuel', 'chilala@gmail.com', '0766666666', 'Father', 51),
(24, 'Petro', 'M', 'Peter', 'chilala@gmail.com', '0766666666', 'Father', 52);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` int(100) NOT NULL,
  `First_name` varchar(250) NOT NULL,
  `Middle_name` varchar(250) DEFAULT NULL,
  `Last_name` varchar(250) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `DoB` date NOT NULL,
  `Mobile_number` varchar(250) NOT NULL,
  `ward` varchar(250) NOT NULL,
  `District` varchar(250) NOT NULL,
  `Region` varchar(250) NOT NULL,
  `Country` varchar(250) NOT NULL,
  `Organization` varchar(250) DEFAULT NULL,
  `Room_number` int(10) DEFAULT NULL,
  `Level` varchar(250) DEFAULT NULL,
  `CourseNature` varchar(250) NOT NULL,
  `Course_duration` varchar(250) DEFAULT NULL,
  `Resident` varchar(250) NOT NULL,
  `Description` text DEFAULT NULL,
  `Course_id` varchar(250) NOT NULL,
  `Status` varchar(250) NOT NULL DEFAULT 'Active',
  `Academic_year` int(100) NOT NULL DEFAULT 2020
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `First_name`, `Middle_name`, `Last_name`, `sex`, `DoB`, `Mobile_number`, `ward`, `District`, `Region`, `Country`, `Organization`, `Room_number`, `Level`, `CourseNature`, `Course_duration`, `Resident`, `Description`, `Course_id`, `Status`, `Academic_year`) VALUES
(48, 'David', 'Daniel', 'Daniel', 'Male', '2020-09-28', '0766666666', 'Kagoma', 'Muleba', 'Kagera', 'TANZANIA', 'None', 0, 'Level_I', 'Normal', 'Short_course', 'Day', NULL, 'CA', 'Active', 2020),
(49, 'David', 'D', 'Daniel', 'Male', '2020-10-01', '0766666666', 'Dodoma', 'Muleba', 'Kagera', 'TANZANIA', 'Azam', 44, 'Level_I', 'Mama_Course', 'Long_Course', 'Boarding', 'He has no ability tom pay the fee', 'MVM', 'Active', 2020),
(50, 'Samwel', 'Msukuma', 'Mlokole', 'Male', '2020-09-27', '0766666666', 'Kikuku', 'Muleba', 'Kigoma', 'TANZANIA', 'Azam', 0, 'Level_I', 'Normal', 'Long_Course', 'Day', NULL, 'CA', 'Active', 2020),
(51, 'Emmanuel', 'Peter', 'Chilala', 'Male', '1997-10-23', '0766666666', 'Dodoma', 'Dodoma', 'Dodoma', 'TANZANIA', '', 12, 'Level_I', 'Normal', 'Long_Course', 'Boarding', NULL, 'MVM', 'Active', 2020),
(52, 'Maliselina', '', 'Petro', 'Male', '2020-10-09', '0766666666', 'Kagoma', 'Muleba', 'Kagera', 'TANZANIA', '', 6, 'Level_I', 'Mama_Course', 'Long_Course', 'Boarding', '', 'CA', 'Active', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(100) NOT NULL,
  `Current_Academic_year` int(250) NOT NULL DEFAULT 2020
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`id`, `Current_Academic_year`) VALUES
(1, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `First_name` varchar(250) NOT NULL,
  `Last_name` varchar(250) NOT NULL,
  `Role` varchar(250) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `First_name`, `Last_name`, `Role`, `Username`, `Password`) VALUES
(1, 'DAVID', 'DANIEL', 'Admin', 'admin', 'aa47f8215c6f30a0dcdb2a36a9f4168e'),
(2, 'rrrr', '555555', 'eee', 'rrrr', 'rrrrr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`Emergency_id`),
  ADD KEY `emergency_ibfk_1` (`Student_id`);

--
-- Indexes for table `medicalinfo`
--
ALTER TABLE `medicalinfo`
  ADD PRIMARY KEY (`Medical_id`),
  ADD KEY `medicalinfo_ibfk_1` (`Student_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`Parent_id`),
  ADD KEY `Student_id` (`Student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`) USING BTREE,
  ADD KEY `student_ibfk_1` (`Course_id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `Emergency_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `medicalinfo`
--
ALTER TABLE `medicalinfo`
  MODIFY `Medical_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `Parent_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `system_config`
--
ALTER TABLE `system_config`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergency`
--
ALTER TABLE `emergency`
  ADD CONSTRAINT `emergency_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicalinfo`
--
ALTER TABLE `medicalinfo`
  ADD CONSTRAINT `medicalinfo_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Course_id`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
