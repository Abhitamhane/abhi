-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 02:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-05-13 11:18:49'),
(2, 'abhi', '123', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `newll`
--

CREATE TABLE `newll` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `POB` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `B_Group` varchar(10) NOT NULL,
  `M_Num` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `District` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `LLType` varchar(10) NOT NULL,
  `LL_ID` int(12) NOT NULL,
  `CreationDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `Id` int(11) NOT NULL,
  `OwnerName` varchar(100) NOT NULL,
  `CarId` varchar(100) NOT NULL,
  `OwnerEmail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `StateId` varchar(100) NOT NULL,
  `RegDate` date NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`Id`, `OwnerName`, `CarId`, `OwnerEmail`, `Gender`, `DOB`, `StateId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Abhishek Tamhane', '7441', 'atamhane74@gmail.com', 'Male', '2000-11-03', '0', '2020-08-12', NULL, 1),
(2, 'Abhishek Tamhane', '7441', 'atamhane74@gmail.com', 'Male', '2000-11-03', '0', '2020-08-12', NULL, 1),
(3, 'Abhishek Tamhane', '7441', 'atamhane74@gmail.com', 'Male', '2000-11-03', '0', '2020-08-12', NULL, 1),
(4, 'abhi', '7441', 'atamhane74@gmail.com', 'Male', '2020-08-12', '0', '2020-08-12', NULL, 1),
(5, 'abhi', '7441', 'atamhane74@gmail.com', 'Male', '2020-08-12', '0', '2020-08-12', NULL, 1),
(6, 'sdzg', '325', 'atamhane74@gmail.com', 'Male', '2020-08-12', '0', '2020-08-12', NULL, 1),
(7, 'Abhishek Tamhane', '5711', 'atamhane74@gmail.com', 'Male', '2000-11-03', '0', '2020-08-13', NULL, 1),
(8, 'sdf', '3313', 'atamhane74@gmail.com', 'Male', '1111-11-11', '0', '2020-08-13', NULL, 1),
(9, 'sdf', '6884', 'atamhane74@gmail.com', 'Male', '1111-11-11', '0', '2020-08-13', NULL, 1),
(10, 'asd', '4071', 'atamhane74@gmail.com', 'Male', '2222-02-22', '0', '2020-08-13', NULL, 1),
(11, 'asd', '4213', 'atamhane74@gmail.com', 'Male', '2222-02-22', '0', '2020-08-13', NULL, 1),
(12, 'asdfgh', '7704', 'atamhane74@gmail.com', 'Male', '3333-03-31', '', '2020-08-13', NULL, 1),
(13, 'as', '838', 'atamhane74@gmail.com', 'Male', '5555-05-05', '', '2020-08-13', NULL, 1),
(14, 'as', '1710', 'atamhane74@gmail.com', 'Male', '5555-05-05', '', '2020-08-13', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `Id` int(11) NOT NULL,
  `StateName` varchar(80) DEFAULT NULL,
  `StateCode` varchar(2) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Id`, `StateName`, `StateCode`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Maharashtra', 'MH', '2020-08-12 15:23:30', '2020-08-13 04:46:21'),
(2, 'Gujrat', 'GJ', '2020-08-13 04:44:49', '2020-08-13 04:44:49'),
(3, 'Delhi', 'DL', '2020-08-13 04:45:38', '2020-08-13 04:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `CategoryName`, `CreationDate`) VALUES
(1, 'Logistic Deliveries', '2020-04-14 07:27:32'),
(2, 'Cleaning', '2020-04-14 07:49:09'),
(3, 'Essential Services', '2020-04-14 07:49:22'),
(4, 'eccomerce delivery boys', '2020-04-14 07:49:47'),
(5, 'Medical Supply', '2020-04-14 07:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblpass`
--

CREATE TABLE `tblpass` (
  `ID` int(10) NOT NULL,
  `PassNumber` varchar(200) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `IdentityType` varchar(200) DEFAULT NULL,
  `IdentityCardno` varchar(200) DEFAULT NULL,
  `FromDate` varchar(200) DEFAULT NULL,
  `ToDate` varchar(200) DEFAULT NULL,
  `PasscreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpass`
--

INSERT INTO `tblpass` (`ID`, `PassNumber`, `FullName`, `ContactNumber`, `Email`, `IdentityType`, `IdentityCardno`, `FromDate`, `ToDate`, `PasscreationDate`) VALUES
(1, '156869512', 'Abhishek Tamhane', 9011495052, 'atamhane74@gmail.com', 'Voter Card', '1233444123', '1111-11-11', '2222-02-22', '2020-08-13 16:57:31'),
(2, '785217596', 'Abhishek Tamhane', 9011495052, 'atamhane74@gmail.com', 'PAN Card', 'ARd', '2020-08-20', '2020-08-31', '2020-08-14 06:42:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newll`
--
ALTER TABLE `newll`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpass`
--
ALTER TABLE `tblpass`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newll`
--
ALTER TABLE `newll`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpass`
--
ALTER TABLE `tblpass`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
