-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 05:27 AM
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
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `s_no` int(11) NOT NULL,
  `Classroom_no` varchar(20) NOT NULL,
  `Block` varchar(50) NOT NULL,
  `Floor` int(10) NOT NULL,
  `preference` varchar(20) NOT NULL,
  `need` varchar(50) NOT NULL,
  `capacity` int(20) NOT NULL,
  `projectors` enum('Yes','No') NOT NULL,
  `speakers` enum('Yes','No') NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `fromtime` time NOT NULL,
  `totime` time NOT NULL,
  `facultyid` varchar(10) NOT NULL,
  `Availability` varchar(20) NOT NULL DEFAULT 'Booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`s_no`, `Classroom_no`, `Block`, `Floor`, `preference`, `need`, `capacity`, `projectors`, `speakers`, `fromdate`, `todate`, `fromtime`, `totime`, `facultyid`, `Availability`) VALUES
(1, 'IB105', 'IB Block-IB', 0, 'classroom', 'ACADEMIC CLASSES', 60, 'Yes', 'Yes', '2023-02-01', '2023-02-01', '11:00:00', '12:00:00', 'ct007', 'Booked'),
(2, 'BIT AUDITORI', 'AS Block-AS', 0, 'Auditorium', 'CLUB ACTIVITY', 150, 'Yes', 'Yes', '2023-02-01', '2023-02-02', '10:00:00', '16:00:00', 'cs090', 'Booked'),
(3, 'CE24', 'CIVIL Block-AS', 0, 'Seminar Hall', 'SPECIAL LAB TRAINING', 50, 'Yes', 'Yes', '2023-02-07', '2023-02-07', '09:30:00', '16:00:00', 'cs150', 'Booked'),
(4, 'ME305', 'Mechanical Block', 0, 'classroom', 'ACADEMIC CLASSES', 60, 'Yes', 'Yes', '2023-02-09', '2023-02-09', '13:30:00', '14:00:00', 'cs090', 'Available'),
(5, 'ME305', 'Mechanical Block', 0, 'classroom', 'ACADEMIC CLASSES', 60, 'Yes', 'Yes', '2023-02-09', '2023-02-09', '08:45:00', '09:45:00', 'fd120', 'Booked'),
(6, 'ME305', 'Mechanical Block', 0, 'classroom', 'ACADEMIC CLASSES', 60, 'Yes', 'Yes', '2023-02-09', '2023-02-09', '13:45:00', '16:00:00', 'fa007', 'Booked'),
(7, 'ME303', 'Mechanical Block', 0, 'classroom', 'ACADEMIC CLASSES', 60, 'Yes', 'Yes', '2023-02-10', '2023-02-10', '08:45:00', '09:45:00', 'tx101', 'Booked'),
(8, 'CS202', 'Sunflower Block', 0, 'classroom', 'ACADEMIC CLASSES', 40, 'Yes', 'Yes', '2023-02-11', '2023-02-12', '15:30:00', '16:30:00', 'ct420', 'Booked'),
(9, 'ME306', 'Mechanical Block', 0, 'classroom', 'ACADEMIC CLASSES', 40, 'Yes', 'Yes', '2023-02-10', '2023-02-10', '09:30:00', '10:30:00', 'ct007', 'Booked'),
(10, 'BIT AUDITORI', 'AS Block-AS', 0, 'Auditorium', 'WORKSHOP', 500, 'Yes', 'Yes', '2023-02-17', '2023-02-18', '09:00:00', '17:30:00', 'cs090', 'Booked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
