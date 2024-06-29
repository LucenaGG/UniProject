-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 04:45 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabajo`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(8) NOT NULL,
  `C_Name` varchar(20) NOT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `P_Num` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Owner` varchar(50) DEFAULT NULL,
  `Active` varchar(3) NOT NULL,
  `Comment` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `C_Name`, `Address`, `P_Num`, `Email`, `Owner`, `Active`, `Comment`) VALUES
(1, 'Google', 'Main office', '	1-800-555-5555', 'Google@gmail.com', 'Larry Page', 'Yes', 'Example comment ');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(8) NOT NULL,
  `D_Name` varchar(60) NOT NULL,
  `D_head` varchar(40) NOT NULL,
  `P_number` varchar(20) NOT NULL,
  `Company` varchar(20) NOT NULL,
  `Comment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `D_Name`, `D_head`, `P_number`, `Company`, `Comment`) VALUES
(1, 'Systems Engineering', 'Anyone Anywhere', '1-777-777-7775	', 'Google', 'Example comment ');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `ID` int(11) NOT NULL,
  `semester` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`ID`, `semester`) VALUES
(1, 'Aug-Dec 2021'),
(2, 'Jan-May 2021');

-- --------------------------------------------------------

--
-- Table structure for table `set_up`
--

CREATE TABLE `set_up` (
  `U_Name` varchar(40) NOT NULL,
  `U_Dep` varchar(40) NOT NULL,
  `U_Add` varchar(200) NOT NULL,
  `U_Num` varchar(20) NOT NULL,
  `Prof_Name` varchar(20) NOT NULL,
  `Prof_Title` varchar(40) NOT NULL,
  `ID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_up`
--

INSERT INTO `set_up` (`U_Name`, `U_Dep`, `U_Add`, `U_Num`, `Prof_Name`, `Prof_Title`, `ID`) VALUES
('Enter University Name', 'Enter Deparment', 'Enter Address', 'Enter Phone Number', 'Enter Professor Name', 'Enter Professor Title', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(8) NOT NULL,
  `Student_ID` varchar(20) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Semester` varchar(15) NOT NULL,
  `Company` varchar(20) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Comment` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `Student_ID`, `Student_Name`, `Gender`, `Address`, `Telephone`, `Semester`, `Company`, `Department`, `Comment`) VALUES
(1, 'E00541861', 'Lucena Nazario, José Manuel', 'M', 'Po Box 1387-00653', '787-326-0919', 'Aug-Dec 2021', 'Google', 'Systems Engineering', 'basic example');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `set_up`
--
ALTER TABLE `set_up`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`),
  ADD UNIQUE KEY `stu_id` (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `set_up`
--
ALTER TABLE `set_up`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
