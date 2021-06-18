-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 09:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `module_code` varchar(10) NOT NULL,
  `module_name` varchar(200) NOT NULL,
  `dept_ID` varchar(4) NOT NULL,
  `yr` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`module_code`, `module_name`, `dept_ID`, `yr`) VALUES
(' M 001', 'Islamic Studies', 'SOC', 'Grade 1'),
('BMIS102 ', 'Arabic', 'SOC', 'Grade 1'),
('BMIS110 ', 'Arabic 2', 'SOC', 'Grade 2'),
('BMIS113 ', 'English', 'SOC', 'Grade 1'),
('BMIS104 ', 'Mathematics', 'SOC', 'Grade 1'),
('CN101.3 ', 'Geography', 'SOC', 'Grade 2'),
('CS107.3 ', 'Communication Skills', 'SOC', 'Grade 2'),
('M 204', 'English 2', 'SOC', 'Grade 2'),
('M 204', 'Islamic studies 2', 'SOC', 'Grade 2'),
('M 301', 'Arabic 3', 'SOC', 'Grade 3'),
('M 302', 'Geography 3', 'SOC', 'Grade 3'),
('M 305', 'History 3', 'SOC', 'Grade 3'),
('M 303', 'MAthematics3', 'SOC', 'Grade 3'),
('M 304', 'Skills 3', 'SOC', 'Grade 3'),
('M 401', 'Arabic 4', 'SOC', 'Grade 4'),
('M 405', 'Computer 4', 'SOC', 'Grade 4'),
('M 403', 'English4', 'SOC', 'Grade 4'),
('M 402', 'Islamic Studies', 'SOC', 'Grade 4'),
('M 402', 'Islamic Studies 4', 'SOC', 'Grade 4'),
('M 501 ', 'Arabic 5', 'SOC', 'Grade 5'),
('M 505', 'English 5', 'SOC', 'Grade 5'),
('M 503', 'Geography 5', 'SOC', 'Grade 5'),
('M 504', 'History 5', 'SOC', 'Grade 5'),
('M 502', 'Islamic Studies 5', 'SOC', 'Grade 5'),
('M 602', 'Arabic 6', 'SOC', 'Grade 6'),
('M 604', 'Computer science 6', 'SOC', 'Grade 6'),
('M 603', 'English 6', 'SOC', 'Grade 6'),
('M 605', 'Geography 6', 'SOC', 'Grade 6'),
('M 601', 'Islamic studies 6', 'SOC', 'Grade 6');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_ID` varchar(4) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_ID`, `dept_name`) VALUES
('SOB', 'School of Business'),
('SOC', 'School of Computing');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `user_id` int(5) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`user_id`, `id`) VALUES
(15, 2),
(16, 1),
(16, 3),
(23, 2),
(27, 1),
(27, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inq_id` int(11) NOT NULL,
  `inq_name` varchar(255) NOT NULL,
  `inq_email` varchar(255) NOT NULL,
  `inq_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`inq_id`, `inq_name`, `inq_email`, `inq_msg`) VALUES
(6, 'hello', 'hello@gmailcom', 'wfw');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_assignment`
--

CREATE TABLE `quiz_assignment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_assignment`
--

INSERT INTO `quiz_assignment` (`id`, `name`, `image`, `content`, `venue`, `date`, `time`) VALUES
(1, 'Introduction to computer', './uploads/events/New Project (47)(122).jpg', 'check the details and attempt it', 'Dar al attaa preschool', '2021-07-07', '12:00'),
(2, 'Computer Architecture', './uploads/events/1020101035795358001.jpg', 'check the details and attempt it', 'Dar al attaa preschool', '2021-10-20', '10:00'),
(3, 'Components of computer', './uploads/events/883798_1-Computer_Basics_Quiz.jpg', 'check the details and attempt it', 'Dar al attaa', '2021-12-20', '08:00');

-- --------------------------------------------------------

--
-- Table structure for table `student-enrol`
--

CREATE TABLE `student-enrol` (
  `user_id` int(5) NOT NULL,
  `module_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `Index_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_fullname`, `user_email`, `user_image`, `role`, `randSalt`, `Index_no`) VALUES
(11, 'root', '$1$JL..e5/.$AXic3.8.7blksKRg9BqKm.', '', '', '', 'admin', '$2y$10$iusesomecrazystrings22', NULL),
(12, 'lecturer4', '$1$Mf1.ls..$kPdYP0zUpEe.chfwWagc31', 'lecturer 4', 'lec4@gmail.com', '', 'lecturer', '$2y$10$iusesomecrazystrings22', NULL),
(14, 'lecturer1', '$1$gS..pl3.$AXc6i1kw95K0xzutFJm1z.', 'lecturer 1', 'lec1@gmail.com', '', 'lecturer', '$2y$10$iusesomecrazystrings22', NULL),
(15, 'student1', '$1$hl3.W02.$C6fysWL5.PDaKDyM084jE0', 'student1', 'student1@gmail.com', '', 'student', '$2y$10$iusesomecrazystrings22', '1234'),
(16, 'XYZ', '$1$K2YG6t9u$hUwoVrdChzmMeGM.TW91d.', 'ABC', 'abc@gmail.com', '', 'student', '$2y$10$iusesomecrazystrings22', '1'),
(19, 'abcd', '$1$5tDqqb65$V4pGWI8bUx5Q8hqRLU/H7/', 'abcd', 'kad@gmail', '', 'student', '$2y$10$iusesomecrazystrings22', '90'),
(21, 'admin', '$1$p1.16vZH$8G/RI5pZwWDA51MHDpy380', 'The Admin', 'admin@123', '', 'admin', '$2y$10$iusesomecrazystrings22', '12'),
(22, 'lecturer', '$1$Txq/J3RF$9eph6dBfH.jv..S2ITh8/1', 'Senior Computer Teacher', 'teacher1@gmail.com', '', 'lecturer', '$2y$10$iusesomecrazystrings22', '34'),
(23, 'oran', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Omran Testing', 'omran@gmial.com', '', 'student', '$2y$10$iusesomecrazystrings22', ''),
(27, 'student', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Student', 'S@gmail.com', '', 'student', '$2y$10$iusesomecrazystrings22', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`module_code`(4),`module_name`) USING BTREE,
  ADD KEY `fkcourseDept` (`dept_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_ID`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`user_id`,`id`),
  ADD KEY `fkuserEventevent` (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `quiz_assignment`
--
ALTER TABLE `quiz_assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student-enrol`
--
ALTER TABLE `student-enrol`
  ADD PRIMARY KEY (`user_id`,`module_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz_assignment`
--
ALTER TABLE `quiz_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fkcourseDept` FOREIGN KEY (`dept_ID`) REFERENCES `department` (`dept_ID`);

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `fkuserEventevent` FOREIGN KEY (`id`) REFERENCES `quiz_assignment` (`id`),
  ADD CONSTRAINT `fkuserEventuser` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `student-enrol`
--
ALTER TABLE `student-enrol`
  ADD CONSTRAINT `fkUserEnroll` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
