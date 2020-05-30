-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 08:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sid` int(5) NOT NULL,
  `maths` int(3) DEFAULT NULL,
  `physics` int(3) DEFAULT NULL,
  `chemistry` int(3) DEFAULT NULL,
  `SS` int(3) DEFAULT NULL,
  `english` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sid`, `maths`, `physics`, `chemistry`, `SS`, `english`) VALUES
(14001, 100, 88, 98, 78, 79);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(5) NOT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `std` int(2) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneNo` bigint(10) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `std`, `email`, `phoneNo`, `password`) VALUES
(14001, 'Vaidit', 12, 'vaidit@xyz.com', 9999999999, 'asdfgh'),
(14002, 'Smit', 12, 'smit@xyz.com', 1010101010, 'zxcvbn'),
(14003, 'Raj', 11, 'raj@xyz.com', 4444444444, 'rajxxxx'),
(14004, 'hema', 11, 'hema@xyz.com', 111111111, 'hemaaaa'),
(14005, 'ravi', 6, 'ravi@xyz.com', 7777777777, 'ravi');

-- --------------------------------------------------------

--
-- Table structure for table `studentleave`
--

CREATE TABLE `studentleave` (
  `sid` int(5) NOT NULL,
  `tid` int(5) DEFAULT NULL,
  `reason` varchar(150) DEFAULT NULL,
  `fdate` date DEFAULT NULL,
  `tdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentleave`
--

INSERT INTO `studentleave` (`sid`, `tid`, `reason`, `fdate`, `tdate`) VALUES
(14001, 10001, 'vjfvjnfvslvv', '2020-10-29', '2020-11-02'),
(14002, 10001, 'hhdgddgdcd vjhgjhihl vg', '2020-10-30', '2020-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `studentmsg`
--

CREATE TABLE `studentmsg` (
  `sid` int(5) NOT NULL,
  `tid` int(5) DEFAULT NULL,
  `msg` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmsg`
--

INSERT INTO `studentmsg` (`sid`, `tid`, `msg`) VALUES
(14001, 10001, 'Hello maam. I will not come tomorrow'),
(14002, 10001, 'hello maam, i am new student in your class');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(5) NOT NULL,
  `tname` varchar(45) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneNo` int(10) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tname`, `subject`, `email`, `phoneNo`, `password`) VALUES
(10001, 'rama', 'SS', 'rama@xyz.com', 2147483647, 'rama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentleave`
--
ALTER TABLE `studentleave`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentmsg`
--
ALTER TABLE `studentmsg`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `markF` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
