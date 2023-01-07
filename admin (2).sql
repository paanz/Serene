-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 05:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `admin_Name` varchar(128) DEFAULT NULL,
  `admin_Email` text DEFAULT NULL,
  `admin_Password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `admin_Name`, `admin_Email`, `admin_Password`) VALUES
(1001, 'Amy', 'Amy431@gmail.com', 'sospedas1234'),
(1002, 'Abg Alfian Bin Abg Taha', 'Alfian431@gmail.com', 'GBJrealty123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointID` int(11) NOT NULL,
  `cust_Name` varchar(128) DEFAULT NULL,
  `cust_phone` int(11) DEFAULT NULL,
  `cust_Email` text DEFAULT NULL,
  `property_Name` text DEFAULT NULL,
  `appoint_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointID`, `cust_Name`, `cust_phone`, `cust_Email`, `property_Name`, `appoint_Date`) VALUES
(20002, 'Lionel Bellingham	', 12343847, 'bellingham@gmail.com', 'Double Storey Detached', '2022-12-01'),
(20003, 'Barouq Al-Khabouri', 324183749, 'khabouri@gmail.com', 'Double Storey Semi-Detached', '2022-11-17'),
(20004, 'Christiano Benzema', 11384693, 'benz@gmail.com', 'Double Storey Terrace', '2022-11-13'),
(20005, 'Laporte Felix', 1184934, 'stylomilo@gmail.com', 'Double Storey Detached', '2022-11-01'),
(20006, 'Itachi Goku', 1156943, 'amaterasu@gmail.com', 'Double Storey Terrace', '2022-10-28'),
(20007, 'Kakashi Wakashita', 11864932, 'wakawakaeheh@gmail.com', 'Double Storey Detached', '2022-10-24'),
(20008, 'Saeed Benrahma', 11893659, 'saeeeeeed@gmail.com', 'Double Storey Terrace Corner', '2022-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `phone` char(11) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `PropertyName` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `name`, `phone`, `email`, `PropertyName`) VALUES
(20015, 'Arthur Timothy', '0198574171', 'atntimothy19@gmail.com', 'Semi-Detached Double Storey'),
(20016, 'Muhammad Nazim', '0143838119', 'Nazim@gmail.com', 'Semi-Detached Double Storey'),
(20017, 'Farhan', '0198356561', 'Farhan@gmail.com', 'Terrace Double Storey'),
(20021, 'Arthur Timohty', '0198574171', 'atntimothy19@gmail.com', 'Detached Double Storey'),
(20026, 'Danial Hisyam', '0197474171', 'Danial@gmail.com', 'Terrace Double Storey'),
(20028, 'Arthur Timohty', '0198574171', 'atntimothy19@gmail.com', 'Semi-Detached Double Storey'),
(20038, 'Danial Hisyam', '0197474171', 'atntimothy19@gmail.com', 'Terrace Double Storey'),
(20039, 'Arthur Timohty', '0198574171', 'atntimothy19@gmail.com', 'Semi-Detached Double Storey'),
(20040, 'Arthur Timohty', '0198574171', 'atntimothy19@gmail.com', 'Semi-Detached Double Storey');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` int(11) NOT NULL,
  `cust_Name` varchar(128) DEFAULT NULL,
  `cust_phone` int(11) DEFAULT NULL,
  `cust_Email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `cust_Name`, `cust_phone`, `cust_Email`) VALUES
(12001, 'Lionel Bellingham', 12343847, 'bellingham@gmail.com'),
(12002, 'Barouq Al-Khabouri', 324183749, 'khabouri@gmail.com'),
(12003, 'Christiano Benzema', 11384693, 'benz@gmail.com'),
(12004, 'Laporte Felix', 1184934, 'stylomilo@gmail.com'),
(12005, 'Itachi Goku', 1156943, 'amaterasu@gmail.com'),
(12006, 'Kakashi Wakashita', 11864932, 'wakawakaeheh@gmail.com'),
(12007, 'Saeed Benrahma', 11893659, 'saeeeeeed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `pictureID` int(11) NOT NULL,
  `picture` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyID` int(11) NOT NULL,
  `property_Name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyID`, `property_Name`) VALUES
(1, 'Detached Double Storey'),
(2, 'Semi-Detached Double Storey'),
(3, 'Terrace Double Storey'),
(4, 'Terrace Corner Double Storey');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportID` int(11) NOT NULL,
  `inquiry_Rep` text DEFAULT NULL,
  `payment_Rep` text DEFAULT NULL,
  `respond_Rep` text DEFAULT NULL,
  `onsite_Rep` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`pictureID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20041;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
