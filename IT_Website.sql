-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2022 at 02:10 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
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
-- Database: `IT_Website`
--

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `fid` int NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factulty`
--

CREATE TABLE `factulty` (
  `fID` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `designation` text NOT NULL,
  `emailID` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phoneNo` text,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `present` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `factulty`
--

INSERT INTO `factulty` (`fID`, `name`, `designation`, `emailID`, `phoneNo`, `image`, `type`, `present`) VALUES
(1, 'Dr Dananjay Kumar', 'HOD', 'dhananjay@annauniv.edu', '6020', 'Images/faculty/1_1.jpeg', 1, 1),
(1, 'Dr Vignesh', 'lab Staff-2', 'xyzxy@annauniv.edu', '6020', 'Images/faculty/0_1.jpeg', 0, 1),
(2, 'RSK', 'Professor', 'aucmitit@gmail.com', '6020', 'Images/faculty/1_2.jpeg', 1, 1),
(3, 'hey', 'wwa', 'aucmitit@gmail.com', '6020', 'Images/faculty/noImage.jpeg', -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facultyDetails`
--

CREATE TABLE `facultyDetails` (
  `fID` int NOT NULL,
  `type` tinyint(1) NOT NULL,
  `areaOfSpec` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `personalSite` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `acoeSite` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `extraCol` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facultyDetails`
--

INSERT INTO `facultyDetails` (`fID`, `type`, `areaOfSpec`, `personalSite`, `acoeSite`, `extraCol`) VALUES
(1, 1, 'Augmented reality & Virtual Reality ,Video Analysis ,Multimedia Systems,Video Processing,Mobile Communications and Computing', '#', 'https://www.aukdc.edu.in/fis/facultyprofile.php?ch=60746', '#QUALIFICATION'),
(1, 0, 'lab work', '#', '#', 'WORK'),
(2, 1, 'ml', '#', '#', 'AWARDS');

-- --------------------------------------------------------

--
-- Table structure for table `facultyDetails_`
--

CREATE TABLE `facultyDetails_` (
  `Fid` int NOT NULL,
  `areaOfSpec` text NOT NULL,
  `acoeSite` varchar(150) NOT NULL DEFAULT '#',
  `personalSite` varchar(150) NOT NULL DEFAULT '#',
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facultyDetails_`
--

INSERT INTO `facultyDetails_` (`Fid`, `areaOfSpec`, `acoeSite`, `personalSite`, `details`) VALUES
(0, 'List of details of faculty', '#', '#', 'qualification#experience'),
(1981, 'ML', '#', '#', 'qualification#experience');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_`
--

CREATE TABLE `faculty_` (
  `fid` int NOT NULL,
  `sNo` int NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `emailID` varchar(75) NOT NULL,
  `phoneNumber` int NOT NULL DEFAULT '6020',
  `image` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT './Images/faculty/noImage.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculty_`
--

INSERT INTO `faculty_` (`fid`, `sNo`, `name`, `designation`, `emailID`, `phoneNumber`, `image`) VALUES
(0, 0, 'admin', 'admin', '#', 6021, './admin.png'),
(1981, 1, 'Mr.Dhananjay Kumar', 'HOD', 'dk@gmail.com', 6021, './Images/faculty/1981.webp'),
(1982, 0, '', '', '', 6020, './Images/faculty/1982.webp');

-- --------------------------------------------------------

--
-- Table structure for table `flashNews`
--

CREATE TABLE `flashNews` (
  `newsID` int NOT NULL,
  `news` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link` text,
  `expDate` datetime NOT NULL,
  `isLink` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initData`
--

CREATE TABLE `initData` (
  `fid` int NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `initData`
--

INSERT INTO `initData` (`fid`, `username`, `password`) VALUES
(100, 'adminNews', '1234'),
(1981, 'adminStaff', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `fid` int NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`fid`, `details`) VALUES
(1981, '{\"data\":[\"Phd\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `TEST`
--

CREATE TABLE `TEST` (
  `fID` int NOT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `WORK`
--

CREATE TABLE `WORK` (
  `fID` int NOT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `WORK`
--

INSERT INTO `WORK` (`fID`, `details`) VALUES
(1, '123qweasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `facultyDetails_`
--
ALTER TABLE `facultyDetails_`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `faculty_`
--
ALTER TABLE `faculty_`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `flashNews`
--
ALTER TABLE `flashNews`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `initData`
--
ALTER TABLE `initData`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `TEST`
--
ALTER TABLE `TEST`
  ADD PRIMARY KEY (`fID`);

--
-- Indexes for table `WORK`
--
ALTER TABLE `WORK`
  ADD PRIMARY KEY (`fID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
