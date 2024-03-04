-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 05:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bit`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom_details`
--

CREATE TABLE `classroom_details` (
  `s_no` int(11) NOT NULL,
  `Block` varchar(30) DEFAULT NULL,
  `Floor` varchar(3) DEFAULT NULL,
  `Classroom_no` varchar(20) DEFAULT NULL,
  `Hall_type` text NOT NULL,
  `Computers` varchar(3) DEFAULT NULL,
  `Speakers` varchar(3) DEFAULT NULL,
  `Projectors` varchar(3) DEFAULT NULL,
  `Student Desk` int(2) DEFAULT NULL,
  `Capacity` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classroom_details`
--

INSERT INTO `classroom_details` (`s_no`, `Block`, `Floor`, `Classroom_no`, `Hall_type`, `Computers`, `Speakers`, `Projectors`, `Student Desk`, `Capacity`) VALUES
(1, 'Mechanical Block', 'I', 'ME103', 'classroom', 'Yes', 'No', 'Yes', 45, 90),
(2, 'Mechanical Block', 'I', 'ME104', 'classroom', 'Yes', 'No', 'Yes', 45, 90),
(3, 'Mechanical Block', 'I', 'ME105', 'classroom', 'Yes', 'No', 'Yes', 45, 90),
(4, 'Mechanical Block', 'I', 'ME106', 'classroom', 'Yes', 'No', 'Yes', 45, 90),
(5, 'Mechanical Block', 'II', 'ME201', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(6, 'Mechanical Block', 'II', 'ME202', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(7, 'Mechanical Block', 'II', 'ME203', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 45, 90),
(8, 'Mechanical Block', 'II', 'ME204', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(9, 'Mechanical Block', 'II', 'ME205', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(10, 'Mechanical Block', 'II', 'ME206', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(11, 'Mechanical Block', 'III', 'ME301', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(12, 'Mechanical Block', 'III', 'ME302', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(13, 'Mechanical Block', 'III', 'ME303', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(14, 'Mechanical Block', 'III', 'ME304', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(15, 'Mechanical Block', 'III', 'ME305', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(16, 'Mechanical Block', 'III', 'ME306', 'classroom', 'Yes', 'Yes', 'Yes', 45, 90),
(17, 'Sunflower Block', '0', 'IT001', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(18, 'Sunflower Block', '0', 'IT002', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(19, 'Sunflower Block', '0', 'IT003', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 40, 80),
(20, 'Sunflower Block', 'I', 'IT101', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(21, 'Sunflower Block', 'I', 'IT102', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(22, 'Sunflower Block', 'II', 'CS201', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(23, 'Sunflower Block', 'II', 'CS202', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(24, 'Sunflower Block', 'II', 'CS203', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(25, 'Sunflower Block', 'III', 'CS301', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 40, 80),
(26, 'Sunflower Block', 'III', 'CS302', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(27, 'Sunflower Block', 'III', 'CS303', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(28, 'ECE Block-AS', 'I', 'EC21', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(29, 'ECE Block-AS', 'I', 'EC22', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(30, 'ECE Block-AS', 'I', 'EC23', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(31, 'ECE Block-AS', 'I', 'EC25', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(32, 'ECE Block-AS', 'I', 'EC26', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(33, 'ECE Block-AS', 'II', 'EC31', 'Seminar Hall', 'Yes', 'No', 'Yes', 30, 60),
(34, 'ECE Block-AS', 'II', 'EC32', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(35, 'ECE Block-AS', 'II', 'EC33', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(36, 'ECE Block-AS', 'II', 'EC34', 'classroom', 'Yes', 'No', 'Yes', 20, 40),
(37, 'ECE Block-AS', 'II', 'EC35', 'classroom', 'Yes', 'No', 'Yes', 20, 40),
(38, 'ECE Block-AS', 'II', 'EC36', 'classroom', 'Yes', 'No', 'Yes', 60, 120),
(39, 'CIVIL Block-AS', 'I', 'CE21', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(40, 'CIVIL Block-AS', 'I', 'CE22', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(41, 'CIVIL Block-AS', 'I', 'CE23', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(42, 'CIVIL Block-AS', 'I', 'CE24', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 30, 60),
(43, 'CIVIL Block-AS', 'I', 'CE25', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(44, 'CIVIL Block-AS', 'I', 'CE26', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(45, 'CIVIL Block-AS', 'II', 'CE31', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(46, 'CIVIL Block-AS', 'II', 'CE32', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(47, 'CIVIL Block-AS', 'II', 'CE33', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(48, 'CIVIL Block-AS', 'II', 'CE34', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(49, 'CIVIL Block-AS', 'II', 'CE35', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(50, 'CIVIL Block-AS', 'II', 'CE36', 'classroom', 'Yes', 'Yes', 'Yes', 60, 120),
(51, 'Textile Block-AS', 'I', 'TT21', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(52, 'Textile Block-AS', 'I', 'TT22', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(53, 'Textile Block-AS', 'I', 'TT23', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(54, 'Textile Block-AS', 'I', 'TT24', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 30, 60),
(55, 'Textile Block-AS', 'I', 'TT25', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(56, 'Textile Block-AS', 'I', 'TT26', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(57, 'Textile Block-AS', 'II', 'TT31', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(58, 'Textile Block-AS', 'II', 'TT32', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(59, 'Textile Block-AS', 'II', 'TT33', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(60, 'Textile Block-AS', 'II', 'TT34', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(61, 'Textile Block-AS', 'II', 'TT35', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(62, 'Textile Block-AS', 'II', 'TT36', 'classroom', 'Yes', 'Yes', 'Yes', 60, 120),
(63, 'Old AGRI Block-AS', 'I', 'AG21', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(64, 'Old AGRI Block-AS', 'I', 'AG22', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(65, 'Old AGRI Block-AS', 'I', 'AG23', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(66, 'Old AGRI Block-AS', 'I', 'AG24', 'Seminar Hall', 'Yes', 'No', 'Yes', 30, 60),
(67, 'Old AGRI Block-AS', 'I', 'AG25', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(68, 'Old AGRI Block-AS', 'I', 'AG26', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(69, 'Old AGRI Block-AS', 'II', 'AG31', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(70, 'Old AGRI Block-AS', 'II', 'AG32', 'classroom', 'Yes', 'No', 'Yes', 60, 120),
(71, 'Old AGRI Block-AS', 'II', 'AG33', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(72, 'Old AGRI Block-AS', 'II', 'AG34', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(73, 'Old AGRI Block-AS', 'II', 'AG35', 'classroom', 'Yes', 'No', 'Yes', 30, 60),
(74, 'EEE Block-IB', 'I', 'EE21', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(75, 'EEE Block-IB', 'I', 'EE22', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(76, 'EEE Block-IB', 'I', 'EE23', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(77, 'EEE Block-IB', 'I', 'EE24', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(78, 'EEE Block-IB', 'I', 'EE25', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(79, 'EEE Block-IB', 'I', 'EE26', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 30, 60),
(80, 'EEE Block-IB', 'II', 'EE31', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(81, 'EEE Block-IB', 'II', 'EE32', 'classroom', 'Yes', 'Yes', 'Yes', 60, 120),
(82, 'EEE Block-IB', 'II', 'EE33', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(83, 'EEE Block-IB', 'II', 'EE34', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(84, 'EEE Block-IB', 'II', 'EE35', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(85, 'CT & AIDS Block-IB', 'I', 'CT21', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(86, 'CT & AIDS Block-IB', 'I', 'CT22', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(87, 'CT & AIDS Block-IB', 'I', 'CT23', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 30, 60),
(88, 'CT & AIDS Block-IB', 'I', 'CT25', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(89, 'CT & AIDS Block-IB', 'I', 'CT26', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(90, 'CT & AIDS Block-IB', 'II', 'AIDS31', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(91, 'CT & AIDS Block-IB', 'II', 'AIDS33', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(92, 'CT & AIDS Block-IB', 'II', 'AIDS34', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 30, 60),
(93, 'CT & AIDS Block-IB', 'II', 'AIDS35', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(94, 'IB Block-IB', '0', 'IB102', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(95, 'IB Block-IB', '0', 'IB103', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(96, 'IB Block-IB', '0', 'IB104', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(97, 'IB Block-IB', '0', 'IB105', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(98, 'IB Block-IB', '0', 'IB106', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(99, 'IB Block-IB', '0', 'IB107', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(100, 'IB Block-IB', '0', 'IB108', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(101, 'IB Block-IB', '0', 'IB111', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(102, 'IB Block-IB', '0', 'IB112', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(103, 'IB Block-IB', 'II', 'IB201', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(104, 'IB Block-IB', 'II', 'IB202', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(105, 'IB Block-IB', 'II', 'IB203', 'Seminar Hall', 'Yes', 'Yes', 'Yes', 30, 60),
(106, 'IB Block-IB', 'II', 'IB204', 'classroom', 'Yes', 'Yes', 'Yes', 30, 60),
(107, 'IB Block-IB', 'II', 'IB205', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(108, 'IB Block-IB', 'II', 'IB206', 'classroom', 'Yes', 'Yes', 'Yes', 20, 40),
(109, 'IB Block-IB', 'II', 'IB207', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(110, 'IB Block-IB', 'II', 'IB208', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(111, 'IB Block-IB', 'II', 'IB209', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(112, 'IB Block-IB', 'II', 'IB210', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(113, 'IB Block-IB', 'II', 'IB211', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(114, 'IB Block-IB', 'II', 'IB212', 'classroom', 'Yes', 'Yes', 'Yes', 40, 80),
(118, 'IB Block-IB', '1', 'Vedhanayagam', 'Auditorium', 'no', 'yes', 'yes', 0, 300),
(119, 'AS Block-AS', '0', 'BIT AUDITORI', 'Auditorium', 'no', 'yes', 'yes', 0, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom_details`
--
ALTER TABLE `classroom_details`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom_details`
--
ALTER TABLE `classroom_details`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
