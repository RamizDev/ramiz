-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 05:16 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_achievement`
--

CREATE TABLE `tbl_achievement` (
  `id` int(10) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `achievementTitle` varchar(255) NOT NULL,
  `achievementDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_achievement`
--

INSERT INTO `tbl_achievement` (`id`, `employee`, `achievementTitle`, `achievementDate`) VALUES
(1, 'fhygff', 'asdfasd', '2222-02-22'),
(2, 'Md Mahmudur', 'Bhai', '2222-02-22'),
(3, 'Select Employe', '', '0000-00-00'),
(4, 'Md Mahmudur', 'Nothing', '2017-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_member`
--

CREATE TABLE `tbl_add_member` (
  `id` int(10) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `station` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL,
  `employeeType` varchar(100) NOT NULL,
  `employeeCategory` varchar(100) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `workShift` varchar(100) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `joiningDate` date NOT NULL,
  `nationalId` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `address` text NOT NULL,
  `mobileNumber` int(100) NOT NULL,
  `addImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_add_member`
--

INSERT INTO `tbl_add_member` (`id`, `companyName`, `station`, `department`, `employeeType`, `employeeCategory`, `jobTitle`, `workShift`, `fullName`, `emailAddress`, `joiningDate`, `nationalId`, `gender`, `dateOfBirth`, `address`, `mobileNumber`, `addImage`) VALUES
(1, 'Picker', '1', '2', '1', '2', '2', 'Select Work Shift', 'fhygff', 'me.sozib@gmail.com', '2010-02-23', '546778866', '1', '2012-06-21', 'jhgchfhfhgf', 0, '../images/20891454_1813030988711503_775256439_n.jpg'),
(2, 'Picker', '1', '2', '1', '2', '2', '1', 'fhygff', 'me.sozib@gmail.com', '2010-02-23', '546778866', '1', '2012-06-21', 'jhgchfhfhgf', 0, '../images/20891454_1813030988711503_775256439_n.jpg'),
(3, 'picker', '1', '1', '1', '1', '1', '1', 'rahat', 'me.sozib@gmail.com', '2012-12-09', '23456789', '2', '2021-09-09', 'asfljlsfkjalsdj', 2147483647, 'images/20915901_1813030978711504_540730308_n.jpg'),
(4, 'WebHR', 'WebHR Head Office', 'Accounts & Finance', 'Regular Employees', 'Management', 'Finance Manager', 'Regular Work Hours', 'Md Mahmudur', 'mahmudur665@gmail.com', '2017-02-26', '123732927338', 'Male', '1992-10-19', 'Mirpur 10', 1676084665, 'images/20891454_1813030988711503_775256439_n.jpg'),
(5, 'purba Bazar', 'WebHR Regional Office', 'Graphics & Multimedia', 'Support Employees', 'Auxiliary', 'HR Manager', 'Part Time', 'Md Ramiz Uddin', 'ramiz@gmail.com', '2017-12-09', '45678975445678', 'Male', '2016-12-30', 'Taltola', 2147483647, 'images/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `id` int(10) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `promotionTitle` varchar(255) NOT NULL,
  `promotionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_promotion`
--

INSERT INTO `tbl_promotion` (`id`, `fullName`, `promotionTitle`, `promotionDate`) VALUES
(1, 'rahat', 'sdflaskjdfl', '2222-02-22'),
(2, '', 'asdf', '2017-08-02'),
(3, '', 'asdf', '2017-08-02'),
(4, '', 'asdf', '2017-08-02'),
(5, '', 'Student', '2017-08-11'),
(6, 'Md Ramiz Uddin', 'Student', '2017-08-19'),
(7, 'Md Mahmudur', 'Nothing', '2017-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfer`
--

CREATE TABLE `tbl_transfer` (
  `id` int(10) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `transferDate` date NOT NULL,
  `transferDepartment` varchar(255) NOT NULL,
  `transferStation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_transfer`
--

INSERT INTO `tbl_transfer` (`id`, `fullName`, `transferDate`, `transferDepartment`, `transferStation`) VALUES
(1, 'Md Mahmudur', '2017-12-09', 'Administration', 'WebHR Head Office'),
(2, 'Md Mahmudur', '2017-12-09', 'Administration', 'WebHR Head Office'),
(3, 'Md Mahmudur', '2020-12-09', 'Information Technology', 'WebHR Regional Office'),
(4, 'rahat', '2018-12-09', 'Accounts & Finance', 'WebHR Head Office'),
(5, 'rahat', '2018-12-09', 'Accounts & Finance', 'WebHR Head Office'),
(6, 'Md Mahmudur', '2017-09-09', 'Accounts & Finance', 'WebHR Regional Office'),
(7, 'Md Mahmudur', '2017-09-09', 'Accounts & Finance', 'WebHR Regional Office'),
(8, 'fhygff', '2019-09-08', 'Information Technology', 'WebHR Regional Office'),
(9, 'fhygff', '2019-09-08', 'Information Technology', 'WebHR Regional Office'),
(10, 'fhygff', '2222-02-22', 'Accounts & Finance', 'WebHR Head Office'),
(11, 'fhygff', '2222-02-22', 'Accounts & Finance', 'WebHR Regional Office'),
(12, 'Md Mahmudur', '2017-08-11', 'Graphics & Multimedia', 'WebHR Regional Office'),
(13, 'Md Mahmudur', '2017-08-11', 'Graphics & Multimedia', 'WebHR Regional Office'),
(14, 'Md Mahmudur', '2017-08-05', 'Human Resource', 'Others');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_achievement`
--
ALTER TABLE `tbl_achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_add_member`
--
ALTER TABLE `tbl_add_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transfer`
--
ALTER TABLE `tbl_transfer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_achievement`
--
ALTER TABLE `tbl_achievement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_add_member`
--
ALTER TABLE `tbl_add_member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_transfer`
--
ALTER TABLE `tbl_transfer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
