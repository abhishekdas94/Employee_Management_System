-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 09:44 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email_Id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `Full_Name`, `Username`, `Password`, `Email_Id`) VALUES
(1, 'Abhishek Das', 'abhi', '12345', 'abhi@example.com'),
(2, 'BOSS', 'admin', '12345', 'boss@infinity.com');

-- --------------------------------------------------------

--
-- Table structure for table `emploginlogoutdetails`
--

CREATE TABLE `emploginlogoutdetails` (
  `Id` int(20) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Log_in` varchar(255) NOT NULL,
  `Log_out` varchar(255) NOT NULL,
  `Work_report` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emploginlogoutdetails`
--

INSERT INTO `emploginlogoutdetails` (`Id`, `Username`, `Log_in`, `Log_out`, `Work_report`, `filepath`) VALUES
(1, 'hnsona001', '2017-10-09 09:48:05pm', '2017-10-10 01:11:25pm', '', ''),
(2, 'ydeep.0047', '2017-10-09 09:51:07pm', '2017-10-09 10:19:50pm', 'ABC.pdf', ''),
(3, 'ydeep.0047', '2017-10-09 09:54:31pm', '2017-10-09 10:19:50pm', '', ''),
(4, 'hnsona001', '2017-10-09 09:54:58pm', '2017-10-10 01:11:25pm', 'XYZ .pdf', ''),
(5, 'hnsona001', '2017-10-09 09:56:40pm', '2017-10-10 01:11:25pm', '', ''),
(6, 'hul.de0050', '2017-10-09 10:06:20pm', '2017-10-09 10:10:58pm', '', ''),
(7, 'hul.de0050', '2017-10-09 10:09:52pm', '2017-10-09 10:10:58pm', '', ''),
(8, 'ydeep.0047', '2017-10-09 10:13:03pm', '2017-10-09 10:19:50pm', '', ''),
(9, 'hnsona001', '2017-10-09 10:20:38pm', '2017-10-10 01:11:25pm', '', ''),
(10, 'hnsona001', '2017-10-10 01:06:48am', '2017-10-10 01:11:25pm', '', ''),
(11, 'hnsona001', '2017-10-10 01:10:23pm', '2017-10-10 01:11:25pm', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emptbl`
--

CREATE TABLE `emptbl` (
  `Id` int(20) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email_Id` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Date_Of_Joining` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emptbl`
--

INSERT INTO `emptbl` (`Id`, `First_Name`, `Last_Name`, `Password`, `Email_Id`, `Address`, `Mobile`, `Qualification`, `Username`, `Image`, `Date_Of_Joining`) VALUES
(46, 'Abhishek', 'Das', '827ccb0eea8a706c4c34a16891f84e7b', 'johnsonadam98@gmail.com', 'Behala Sarsuna', '7278103575', 'Graduate', 'hnsona001', 'http://localhost/EMS/uploads/maxresdefault1.jpg', '2017-10-03'),
(47, 'Joydeep', 'Das', '827ccb0eea8a706c4c34a16891f84e7b', 'joydeep.das39@gmail.com', 'Behala Taratala', '99034437951', '2nd Year', 'ydeep.0047', 'http://localhost/EMS/uploads/1607137.jpg', '2017-10-04'),
(48, 'Aditya', 'Paul', '202cb962ac59075b964b07152d234b70', 'aditya123@gmail.com', 'Howrah', '9876543214', '1st Year', 'itya120048', 'http://localhost/EMS/uploads/maxresdefault.jpg', '2017-07-29'),
(49, 'Vishal', 'Das', '8d5e957f297893487bd98fa830fa6413', 'vdas98@abc.com', 'Howrah', '1234567899', 'Graduate', 'as98@a0049', 'http://localhost/EMS/uploads/flash_logo_dc_comic_106043_1920x1080.jpg', '2017-09-08'),
(50, 'Rahul', 'Dey', '827ccb0eea8a706c4c34a16891f84e7b', 'rahul.dey@gmail.com', 'Behala Thakurpukur ', '1478523955', '1st Year', 'hul.de0050', 'http://localhost/EMS/uploads/Koala.jpg', '2017-10-04'),
(51, 'Koustav', 'Paul', '83cdcec08fbf90370fcf53bdd56604ff', 'koustav.paul@gmail.com', 'Budge Budge', '7278541236', 'Msc 1st Year', 'ustav.0051', 'http://localhost/EMS/uploads/Penguins1.jpg', '2017-10-01'),
(52, 'Joydeep', 'Das', '827ccb0eea8a706c4c34a16891f84e7b', 'joydeep.das@gmail.com', 'Behala Taratala', '9903440795', '2nd Year', 'ydeep.0052', '', '2017-10-02'),
(53, 'Joydeep', 'Das', '202cb962ac59075b964b07152d234b70', 'joydeep.das1@gmail.com', 'Behala Taratala', '9903440795', '2nd Year', 'ydeep.0053', 'http://localhost/EMS/uploads/Lighthouse.jpg', '2017-09-06'),
(54, 'Abhishek', 'Das', '202cb962ac59075b964b07152d234b70', 'abhidas@gmail.com', 'Behala Sarsuna', '7278103575', 'Graduate', 'hnsona0054', 'http://localhost/EMS/uploads/Hydrangeas2.jpg', '2017-08-24'),
(55, 'Abhishek', 'Das', '8d5e957f297893487bd98fa830fa6413', 'johnsonad98@gmail.com', 'Behala Taratala', '9903440795', '2nd Year', 'hnsona0055', 'http://localhost/EMS/uploads/Desert6.jpg', '2017-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `messagetbl`
--

CREATE TABLE `messagetbl` (
  `Msg_Id` int(20) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `reciever` varchar(255) DEFAULT NULL,
  `msgtime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagetbl`
--

INSERT INTO `messagetbl` (`Msg_Id`, `Username`, `Subject`, `Message`, `reciever`, `msgtime`) VALUES
(1, 'ydeep.0047', 'message', 'I want to change my username, i find it difficult to remember!', 'admin', '09/10/17 09:51:48pm'),
(3, 'admin', 'Declined', 'Sorry We Dont allow to change username..!!\r\nUntill and unless there is some major problem!', 'ydeep.0047', '09/10/17 09:54:19pm'),
(4, 'hnsona001', 'Resignation', 'I want to resign!', 'admin', '09/10/17 09:55:20pm'),
(5, 'admin', 'Granted', 'Send me a letter regarding this matter.', 'hnsona001', '09/10/17 09:56:34pm'),
(7, 'hul.de0050', 'Leave', 'I want a leave from 2017-10-03 till 2017-10-24 because of my brothers wedding!', 'admin', '09/10/17 10:10:09pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `emploginlogoutdetails`
--
ALTER TABLE `emploginlogoutdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `emptbl`
--
ALTER TABLE `emptbl`
  ADD PRIMARY KEY (`Id`,`Username`);

--
-- Indexes for table `messagetbl`
--
ALTER TABLE `messagetbl`
  ADD PRIMARY KEY (`Msg_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emploginlogoutdetails`
--
ALTER TABLE `emploginlogoutdetails`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `emptbl`
--
ALTER TABLE `emptbl`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `messagetbl`
--
ALTER TABLE `messagetbl`
  MODIFY `Msg_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
