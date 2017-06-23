-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 01:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `charts`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
`id` int(12) NOT NULL,
  `student_id` int(12) NOT NULL,
  `subject_id` int(12) NOT NULL,
  `mark` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_id`, `subject_id`, `mark`) VALUES
(1, 1, 1, '10'),
(2, 1, 2, '25'),
(3, 1, 3, '35'),
(4, 1, 4, '42'),
(5, 1, 5, '62'),
(6, 2, 1, '80'),
(7, 2, 2, '45'),
(8, 2, 3, '45'),
(9, 2, 4, '45'),
(10, 2, 5, '25'),
(11, 3, 1, '63'),
(12, 3, 2, '25'),
(13, 3, 3, '63'),
(14, 3, 4, '36'),
(15, 3, 5, '36'),
(16, 4, 1, '82'),
(17, 4, 2, '36'),
(18, 4, 3, '75'),
(19, 4, 4, '48'),
(20, 4, 5, '42'),
(21, 5, 1, '45'),
(22, 5, 2, '45'),
(23, 5, 3, '78'),
(24, 5, 4, '25'),
(25, 5, 5, '24'),
(26, 6, 1, '36'),
(27, 6, 2, '36'),
(28, 6, 3, '15'),
(29, 6, 4, '75'),
(30, 6, 5, '36'),
(31, 7, 1, '99'),
(32, 7, 2, '45'),
(33, 7, 3, '24'),
(34, 7, 4, '24'),
(35, 7, 5, '45'),
(36, 8, 1, '45'),
(37, 8, 2, '85'),
(38, 8, 3, '85'),
(39, 8, 4, '85'),
(40, 8, 5, '96');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`student_id` int(12) NOT NULL,
  `student_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`) VALUES
(1, 'Sagar'),
(2, 'Vrinda'),
(3, 'Uday'),
(4, 'kartik'),
(5, 'yash'),
(6, 'Mudit'),
(7, 'Radhika'),
(8, 'Simmi');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`subject_id` int(12) NOT NULL,
  `subject_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`) VALUES
(1, 'Physics'),
(2, 'Maths'),
(3, 'Chemistry'),
(4, 'Bio'),
(5, 'SST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `student_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `subject_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
