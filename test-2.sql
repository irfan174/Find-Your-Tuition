-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 05:36 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `tutor_id` int(11) DEFAULT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) DEFAULT NULL,
  `mark` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `student_id`, `tutor_id`, `subject`, `message`, `mark`) VALUES
(1, 13, 22, 'dekhi', 'daedwawd', 'No'),
(2, 7, 22, 'dawd', 'dawdawd', 'No'),
(3, 7, 22, 'dawdadw', 'dawdawddawdawdwadawdawdaw', 'No'),
(4, 7, 22, 'new', 'dwadawdawdaw dwadawdawdaw dwadawdawdaw dwadawdawdaw dwadawdawdaw dwadawdawdaw dwadawdawdawdwadawdawdawdwadawdawdaw dwadawdawdawdwadawdawdawdwadawdawdawdwadawdawdawdwadawdawdaw dwadawdawdaw v', 'No'),
(5, 13, 22, 'checking', 'kaj kore ?', 'No'),
(6, 7, 22, 'checking', 'message', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `student_id`, `tutor_id`, `status`) VALUES
(1, 13, 22, 'pending'),
(2, 14, 22, 'pending'),
(3, 14, 22, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `class` int(255) NOT NULL,
  `student_group` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `activation_code` varchar(100) NOT NULL,
  `user_email_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `area_name`, `address`, `age`, `class`, `student_group`, `medium`, `institute`, `email`, `phone`, `lat`, `lng`, `student_password`, `activation_code`, `user_email_status`) VALUES
(3, 'Irfan Ahmed', 'Mohammadpur', '13A/6A,Block-B,Babor road,Mohammadpur,Dhaka', 15, 11, 'Science', 'Bangla', 'DRMC', 'ayanuiu174@gmail.com', 1683163926, 0, 0, '1234', '', ''),
(7, 'Tanmoy Ahmed', 'Dhanmondi', '13A/6A,Block-B,Babor road,Mohammadpur,Dhaka', 13, 8, 'None', 'Bangla', 'DRMC', 'ayanuiu174@gmail.com', 1683163926, 0, 0, '1234', '', ''),
(8, 'Abcd', 'Dhanmondi', '13A/6A,Block-B,Babor road,Mohammadpur,Dhaka', 19, 11, 'Science', 'Bangla', 'DRMC', 'ayanuiu174@gmail.com', 1683163926, 0, 0, '1234', '', ''),
(13, 'Sadik Ahammed', 'dhaka', 'Mohammadpur', 19, 12, 'Science', 'Bangla', 'United international Univarsity', 'sadik06112@gmail.com', 912121, 0, 0, '12', 'd16e2be1c33da2660fd5eef6a9a91a3b', 'verified'),
(14, 'sad', 'moha', 'ecrfref', 32, 20, 'dwed', 'bangla', 'rew', 'sadik061@gmail.com', 254547476, 23.766082763671875, 90.3558578491211, '12', '1c1253caf823f08df791aaeffe60b53b', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `student_requirements`
--

CREATE TABLE `student_requirements` (
  `requirement_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL,
  `tution_time` varchar(100) DEFAULT NULL,
  `tution_duration` varchar(100) DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL,
  `tutor_background` varchar(100) DEFAULT NULL,
  `tutor_institute` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_requirements`
--

INSERT INTO `student_requirements` (`requirement_id`, `student_id`, `subjects`, `days`, `tution_time`, `tution_duration`, `payment`, `tutor_background`, `tutor_institute`) VALUES
(6, 3, 'ez22344', ' Saturday Sunday    Thursday', 'dawn', 'da', 'daw', 'English Medium', 'dwa'),
(11, 7, 'Math,Science,English', 'Friday Saturday  Monday  Wednesday ', '5pm', '2 Hours', '5000', 'Bangla Medium', 'Any'),
(12, 8, 'Math,English,Sciene', 'Friday Saturday  Monday  Wednesday ', '7pm', '1.5 Hours', '5000', 'Bangla Medium', 'Any'),
(13, 8, 'Math,English,Sciene', 'Friday Saturday  Monday  Wednesday ', '7pm', '1.5 Hours', '5000', 'Bangla Medium', 'Any'),
(14, 8, 'Math,English,Sciene', 'Friday Saturday  Monday  Wednesday ', '7pm', '1.5 Hours', '5000', 'Bangla Medium', 'Any'),
(15, 8, 'Math,English,Sciene', 'Friday Saturday  Monday  Wednesday ', '7pm', '1.5 Hours', '5000', 'Bangla Medium', 'Any'),
(16, 13, 'Bangla English Chemistry Biology ', 'Monday Tuesday ', '1pm', '1 hour', '4000', 'Bangla', 'UIU'),
(17, 14, 'Bangla Biology ', 'Thursday ', '1pm', '1 min', '4000', 'bangla', 'uiu');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `tutor_id` int(255) NOT NULL,
  `tutor_name` varchar(255) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `tutor_password` varchar(255) NOT NULL,
  `activation_code` varchar(100) NOT NULL,
  `user_email_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`tutor_id`, `tutor_name`, `area_name`, `address`, `age`, `class`, `institute`, `email`, `phone`, `background`, `lat`, `lng`, `tutor_password`, `activation_code`, `user_email_status`) VALUES
(11, 'Asif', 'Dhanmondi', '13A/6A,Block-B,Babor road,Mohammadpur,Dhaka', 23, '10', 'UIU', 'ayanuiu174@gmail.com', 1683163926, 'Science', 24.768800735473633, 90.3593978881836, '1234', '0', 'verified'),
(22, 'irfan', 'mohammadpur', 'Mohammadpur', 25, '16', 'uiu', 'sadik061@gmail.com', 24, 'Bnagla', 23.768843999999998, 90.3526898, '12', 'e2270bd991e3289b10e0a91ee296b56f', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `tutor_id` (`tutor_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_requirements`
--
ALTER TABLE `student_requirements`
  ADD PRIMARY KEY (`requirement_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`tutor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_requirements`
--
ALTER TABLE `student_requirements`
  MODIFY `requirement_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `tutor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`tutor_id`);

--
-- Constraints for table `student_requirements`
--
ALTER TABLE `student_requirements`
  ADD CONSTRAINT `student_requirements_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
