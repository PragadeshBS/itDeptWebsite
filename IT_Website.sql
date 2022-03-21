-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2022 at 01:28 AM
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
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `fid` int NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`fid`, `details`) VALUES
(1981, '{\"data\":[\"nothing\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `fid` int NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`fid`, `details`) VALUES
(1981, '{\"data\":[\"Thank you\"]}');

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
(0, 'List of details of faculty', '#', '#', 'qualification#experience#fdp#journals#lectures#research#seminar#awards'),
(1981, 'Augmented reality & Virtual Reality ,Video Analysis ,Multimedia Systems,Video Processing,Mobile Communications and Computing', '#', '#', 'qualification#experience#journals#research#lectures#seminar#awards'),
(1982, '', '#', '#', NULL),
(1983, '', '#', '#', NULL),
(1984, '', '#', '#', NULL),
(1985, '', '#', '#', NULL),
(1986, '', '#', '#', NULL),
(1987, '', '#', '#', NULL),
(1988, '', '#', '#', NULL),
(1989, '', '#', '#', NULL),
(1990, '', '#', '#', NULL),
(1991, '', '#', '#', NULL),
(1992, '', '#', '#', NULL),
(1993, '', '#', '#', NULL),
(1994, '', '#', '#', NULL),
(1995, '', '#', '#', NULL),
(1996, '', '#', '#', NULL),
(1997, '', '#', '#', NULL),
(1998, '', '#', '#', NULL),
(1999, '', '#', '#', NULL),
(2000, '', '#', '#', NULL),
(2001, '', '#', '#', NULL),
(2002, '', '#', '#', NULL),
(2003, '', '#', '#', NULL),
(2004, '', '#', '#', NULL),
(2005, '', '#', '#', NULL);

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
(1981, 1, 'Mr.Dhananjay Kumar', '-Head Of Department', 'dk@gmail.com', 6021, './Images/faculty/1981.webp'),
(1982, 2, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1983, 3, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1984, 4, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1985, 5, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1986, 6, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1987, 7, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1988, 8, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1989, 9, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1990, 0, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1991, 11, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1992, 12, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1993, 13, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1994, 14, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1995, 15, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1996, 16, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1997, 17, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1998, 18, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(1999, 19, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(2000, 20, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(2001, 21, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(2003, 23, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(2004, 24, '', '', '', 6020, './Images/faculty/noImage.jpeg'),
(2005, 25, '', '', '', 6020, './Images/faculty/noImage.jpeg');

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
-- Table structure for table `ftp`
--

CREATE TABLE `ftp` (
  `fid` int NOT NULL,
  `details` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initData`
--

CREATE TABLE `initData` (
  `fid` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'admin',
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1234'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `initData`
--

INSERT INTO `initData` (`fid`, `username`, `password`) VALUES
(100, 'adminNews', '1234'),
(1981, 'adminStaff', '1234'),
(1982, 'admin', '1234'),
(1983, 'admin', '1234'),
(1984, 'admin', '1234'),
(1985, 'admin', '1234'),
(1986, 'admin', '1234'),
(1987, 'admin', '1234'),
(1988, 'admin', '1234'),
(1989, 'admin', '1234'),
(1990, 'admin', '1234'),
(1991, 'admin', '1234'),
(1992, 'admin', '1234'),
(1993, 'admin', '1234'),
(1994, 'admin', '1234'),
(1995, 'admin', '1234'),
(1996, 'admin', '1234'),
(1997, 'admin', '1234'),
(1998, 'admin', '1234'),
(1999, 'admin', '1234'),
(2000, 'admin', '1234'),
(2001, 'admin', '1234'),
(2002, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `fid` int NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`fid`, `details`) VALUES
(1981, '{\"data\":[\"how are you\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `fid` int NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`fid`, `details`) VALUES
(1981, '{\"data\":[\"Thank You\"]}');

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
(1981, '{\"data\":[\"Hello\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `fid` int NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`fid`, `details`) VALUES
(1981, '{\"data\":[\"12434\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `fid` int NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`fid`, `details`) VALUES
(1981, '{\"data\":[\"lol\"]}');

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
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`fid`);

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
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
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
