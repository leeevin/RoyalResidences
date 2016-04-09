-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 07:31 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `royaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_amenities`
--

CREATE TABLE IF NOT EXISTS `aboutus_amenities` (
  `amenitiesID` int(10) NOT NULL AUTO_INCREMENT,
  `amenities` varchar(255) NOT NULL,
  PRIMARY KEY (`amenitiesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `aboutus_amenities`
--

INSERT INTO `aboutus_amenities` (`amenitiesID`, `amenities`) VALUES
(1, '15-passenger scenic elevator'),
(2, 'Stand-by power supply'),
(3, '24-hour water supply (deepwell)'),
(4, 'Wifi access and cable ready units'),
(5, '24-hour security and CCTV'),
(6, 'Free use of gym'),
(7, 'Free use of entertainment room'),
(8, 'Free use of recreation area (table tennis, guitars, drum set, keyboard, darts)'),
(9, 'In-house Canteen/Dining Hall'),
(10, 'Laundromat'),
(11, 'Spa and Hair Salon'),
(12, 'Coffee Shop and Snack bar'),
(13, 'Transient rooms for visiting parents and friends');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_contactnumbers`
--

CREATE TABLE IF NOT EXISTS `aboutus_contactnumbers` (
  `contactNumberID` int(11) NOT NULL AUTO_INCREMENT,
  `contactNumber` varchar(15) NOT NULL,
  PRIMARY KEY (`contactNumberID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aboutus_contactnumbers`
--

INSERT INTO `aboutus_contactnumbers` (`contactNumberID`, `contactNumber`) VALUES
(1, ''),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_content`
--

CREATE TABLE IF NOT EXISTS `aboutus_content` (
  `aboutUs` text NOT NULL,
  `aboutUsID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`aboutUsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aboutus_content`
--

INSERT INTO `aboutus_content` (`aboutUs`, `aboutUsID`) VALUES
('A condominium-dormitory designed for students and young professionals offering an unmatched level of customer service, in addition to the cutting edge features of the building that provides positive atmosphere for all tenants specially students.\r\n\r\nRoyal Residences Condominium is strategically located along Rimando Road (going to Aurora Hill), Trancoville Barangay, Baguio City allowing a 5-minute ride to the central business district and major universities.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_emailaddresses`
--

CREATE TABLE IF NOT EXISTS `aboutus_emailaddresses` (
  `emailAddressID` int(10) NOT NULL AUTO_INCREMENT,
  `emailAddress` varchar(255) NOT NULL,
  PRIMARY KEY (`emailAddressID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_roomcapacities`
--

CREATE TABLE IF NOT EXISTS `aboutus_roomcapacities` (
  `roomCapacityID` int(10) NOT NULL AUTO_INCREMENT,
  `roomCapacity` varchar(255) NOT NULL,
  PRIMARY KEY (`roomCapacityID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aboutus_roomcapacities`
--

INSERT INTO `aboutus_roomcapacities` (`roomCapacityID`, `roomCapacity`) VALUES
(1, 'Solo Occupancy'),
(2, '2-Occupancy'),
(3, '3-Occupancy'),
(4, '4-Occupancy');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_roomfeatures`
--

CREATE TABLE IF NOT EXISTS `aboutus_roomfeatures` (
  `featureID` int(11) NOT NULL AUTO_INCREMENT,
  `feature` varchar(255) NOT NULL,
  PRIMARY KEY (`featureID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `aboutus_roomfeatures`
--

INSERT INTO `aboutus_roomfeatures` (`featureID`, `feature`) VALUES
(1, 'Beds and Mattresses'),
(2, 'Study Table and Chairs'),
(3, 'Study Lamp'),
(4, 'Private Toilet and Bath'),
(5, 'Heated Shower'),
(6, 'Individual Lockers');

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE IF NOT EXISTS `adminaccount` (
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `tenantID` int(15) NOT NULL,
  `billNo` int(11) NOT NULL,
  `billingDate` date NOT NULL,
  `securityDeposit` int(11) NOT NULL,
  `previousBalance` int(11) NOT NULL,
  `advanceRental` int(11) NOT NULL,
  `cityServices` int(11) NOT NULL,
  `dH20` int(11) NOT NULL,
  `mealTicket` int(11) NOT NULL,
  `misc` int(11) NOT NULL,
  `totalBilling` int(11) NOT NULL,
  `dateDue` date NOT NULL,
  `penalties` int(11) NOT NULL,
  PRIMARY KEY (`billNo`),
  KEY `TenantID` (`tenantID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contractdetails`
--

CREATE TABLE IF NOT EXISTS `contractdetails` (
  `contractNo` int(15) NOT NULL,
  `tenantId` int(15) NOT NULL,
  `moveInDate` date NOT NULL,
  `terminationDate` date NOT NULL,
  `room` varchar(6) NOT NULL,
  PRIMARY KEY (`contractNo`),
  UNIQUE KEY `tenantId_2` (`tenantId`),
  KEY `TenantID` (`tenantId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractdetails`
--

INSERT INTO `contractdetails` (`contractNo`, `tenantId`, `moveInDate`, `terminationDate`, `room`) VALUES
(98763, 8, '2015-10-01', '2016-11-30', '102D'),
(213455, 6, '2016-02-25', '2017-11-30', '102B'),
(456789, 4, '2016-02-01', '2017-05-02', '102D'),
(765890, 3, '2015-05-01', '2016-06-30', '102C');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `tenantID` int(15) NOT NULL,
  `paymentID` int(15) NOT NULL,
  `billNo` int(11) NOT NULL,
  `dateOfPayment` date NOT NULL,
  `amountPaid` int(15) NOT NULL,
  `remainingBalance` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`),
  KEY `TenantID` (`tenantID`),
  KEY `BillNo` (`billNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservationCode` varchar(500) NOT NULL,
  `dateReserved` date NOT NULL,
  `timeReserved` time NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `email_add` varchar(25) NOT NULL,
  `status` enum('pending','reserved') DEFAULT NULL,
  `depositTransactionNo` varchar(15) NOT NULL,
  `roomType` varchar(25) NOT NULL,
  `expectedMoveInDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationCode`, `dateReserved`, `timeReserved`, `lastName`, `firstName`, `middleName`, `birthday`, `email_add`, `status`, `depositTransactionNo`, `roomType`, `expectedMoveInDate`) VALUES
('', '2016-03-04', '06:47:00', 'Garcia', 'Patrick Brian', 'Soriano', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', '', '2016-03-31'),
('', '2016-02-27', '10:20:00', 'Ducay', 'Gyland', 'Hipolito', '1995-03-06', 'dgyland@yahoo.com', 'reserved', '0', 'INTERIOR', '2016-04-06'),
('', '2016-01-24', '12:12:05', 'Wee', 'Carl Rasley', 'Oviedo', '1995-12-12', 'carl18@google.com', 'pending', '0', 'INTERIOR', '2016-03-15'),
('', '2016-02-24', '02:30:00', 'Rimando', 'John Paolo', 'Marasigan', '1992-12-12', 'obitoRimando@gmail.com', 'pending', '0', 'INTERIOR', '2016-06-09'),
('', '2016-02-10', '12:23:45', 'Adlawan', 'Vincent', 'Musni', '1996-10-07', 'vinvin@google.com', 'pending', '0', 'EXTERIOR', '2016-03-16'),
('', '2016-02-24', '03:04:45', 'Castro', 'Lyndon Adrian', 'Chua', '1996-12-02', 'lyndonadrian@yahoo.com', 'reserved', '000-480261733', 'INTERIOR', '2016-03-24'),
('', '2016-03-02', '01:23:50', 'Reyes', 'Fidel ', 'Salvador', '1996-12-09', 'delsalvador03@google.com', 'pending', '0', 'EXTERIOR', '2016-03-24'),
('', '2016-02-23', '09:34:12', 'Gloria', 'Chester', 'Panganiban', '1996-04-19', 'nevermore_pogi@google.com', 'reserved', '123-480261733', 'INTERIOR', '2016-05-18'),
('', '2016-02-27', '12:12:12', 'Galapon', 'Jan Fidel Aristotle', 'Macaspac', '1996-12-05', 'galps02@google.com', 'reserved', '000-480287654', 'EXTERIOR', '2016-04-14'),
('', '2016-01-15', '12:23:06', 'Farinas', 'Dexter', 'San Pedro', '1997-04-12', 'dexter@google.com', 'reserved', '000-098764733', 'INTERIOR', '2016-02-29'),
('', '2016-01-19', '01:12:05', 'Lopez', 'John Michael', 'Modomo', '1995-09-12', 'jm_19@google.com', 'pending', '0', 'INTERIOR', '2016-03-25'),
('091b01cc', '2016-03-04', '06:51:00', 'Garcia', 'Patrick Brian', 'Soriano', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', '', '2016-03-31'),
('091b01cc', '2016-03-04', '06:51:00', 'Garcia', 'Patrick Brian', 'Soriano', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', '', '2016-03-31'),
('091b01cc', '2016-03-04', '06:51:00', 'Albiento', 'Aaron Joseph', 'Baniqued', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', '', '2016-03-31'),
('091b01cc', '2016-03-04', '06:51:00', 'Albiento', 'Aaron Joseph', 'Baniqued', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', '', '2016-03-31'),
('091b01cc', '2016-03-04', '06:54:00', 'Garcia', 'Patrick Brian', 'Soriano', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', 'windowed', '2016-03-31'),
('091b01cc', '2016-03-04', '06:54:00', 'Garcia', 'Patrick Brian', 'Soriano', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', 'windowed', '2016-03-31'),
('091b01cc', '2016-03-04', '06:54:00', 'Albiento', 'Aaron Joseph', 'Baniqued', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', 'windowed', '2016-03-31'),
('091b01cc', '2016-03-04', '06:54:00', 'Albiento', 'Aaron Joseph', 'Baniqued', '0000-00-00', 'patreeeeek5@gmail.com', 'pending', '0', 'windowed', '2016-03-31'),
('0b440210', '2016-03-04', '06:57:00', 'Garcia', 'Patrick Brian', 'Soriano', '0000-00-00', 'damielrabanes@gmail.com', 'pending', '0', 'interior', '2016-03-31'),
('0b440210', '2016-03-04', '06:57:00', 'Albiento', 'Aaron Joseph', 'Baniqued', '0000-00-00', 'damielrabanes@gmail.com', 'pending', '0', 'interior', '2016-03-31'),
('0b440210', '2016-03-04', '07:00:00', 'Garcia', 'Patrick Brian', 'Soriano', '0000-00-00', 'damielrabanes@gmail.com', 'pending', '0', 'interior', '2016-03-31'),
('0b440210', '2016-03-04', '07:00:00', 'Albiento', 'Aaron Joseph', 'Baniqued', '0000-00-00', 'damielrabanes@gmail.com', 'pending', '0', 'interior', '2016-03-31'),
('0b440210', '2016-03-04', '07:02:00', 'Rabanes', 'Levin Damiel', 'Orencia', '0000-00-00', 'damielrabanes@gmail.com', 'pending', '0', 'preference', '2016-03-31'),
('0b440210', '2016-03-04', '07:02:00', 'Rabanes', 'Levin Damiel', 'Orencia', '0000-00-00', 'damielrabanes@gmail.com', 'pending', '0', 'preference', '2016-03-31'),
('091a01ce', '0000-00-00', '07:07:00', 'Lagmay', 'Eliezer Floyd', 'Dauz', '0000-00-00', 'floydlagmay@gmail.com', 'pending', '0', 'preference', '2016-03-31'),
('091a01ce', '2016-03-04', '07:10:00', 'Lagmay', 'Eliezer Floyd', 'Dauz', '0000-00-00', 'floydlagmay@gmail.com', 'pending', '0', 'preference', '2016-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `floor` varchar(15) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `room` varchar(6) NOT NULL,
  `noOfBeds` int(25) NOT NULL,
  `spaceAvailable` int(15) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `roomType` enum('INTERIOR','WINDOWED') NOT NULL,
  PRIMARY KEY (`room`),
  KEY `Room` (`room`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`floor`, `unit`, `room`, `noOfBeds`, `spaceAvailable`, `gender`, `roomType`) VALUES
('1', '101', '101A', 2, 2, 'Male', 'WINDOWED'),
('1', '101', '101B', 2, 2, 'Male', 'WINDOWED'),
('1', '101', '101C', 2, 2, 'Male', 'WINDOWED'),
('1', '101', '101D', 2, 2, 'Male', 'WINDOWED'),
('1', '101', '101E', 2, 2, 'Male', 'WINDOWED'),
('1', '101', '101F', 4, 4, 'Male', 'WINDOWED'),
('1', '101', '101G', 4, 4, 'Male', 'INTERIOR'),
('1', '101', '101H', 2, 2, 'Male', 'INTERIOR'),
('1', '101', '101I', 2, 2, 'Male', 'INTERIOR'),
('1', '101', '101J', 2, 2, 'Male', 'INTERIOR'),
('1', '102', '102A', 2, 2, 'Male', 'WINDOWED'),
('1', '102', '102B', 2, 2, 'Male', 'WINDOWED'),
('1', '102', '102C', 2, 2, 'Male', 'WINDOWED'),
('1', '102', '102D', 2, 2, 'Male', 'WINDOWED'),
('1', '102', '102E', 2, 2, 'Male', 'WINDOWED'),
('1', '102', '102F', 4, 4, 'Male', 'WINDOWED'),
('1', '102', '102G', 4, 4, 'Male', 'INTERIOR'),
('1', '102', '102H', 2, 2, 'Male', 'INTERIOR'),
('1', '102', '102I', 2, 2, 'Male', 'INTERIOR'),
('1', '102', '102J', 2, 2, 'Male', 'INTERIOR'),
('2', '201', '201A', 4, 4, 'Male', 'WINDOWED'),
('2', '201', '201B', 2, 2, 'Male', 'WINDOWED'),
('2', '201', '201C', 2, 2, 'Male', 'WINDOWED'),
('2', '201', '201D', 2, 2, 'Male', 'WINDOWED'),
('2', '201', '201E', 2, 2, 'Male', 'WINDOWED'),
('2', '201', '201F', 2, 2, 'Male', 'WINDOWED'),
('2', '201', '201G', 2, 2, 'Male', 'WINDOWED'),
('2', '201', '201H', 4, 4, 'Male', 'WINDOWED'),
('2', '201', '201I', 4, 4, 'Male', 'INTERIOR'),
('2', '201', '201J', 2, 2, 'Male', 'INTERIOR'),
('2', '201', '201K', 2, 2, 'Male', 'INTERIOR'),
('2', '201', '201L', 2, 2, 'Male', 'INTERIOR'),
('2', '202', '202A', 4, 4, 'Male', 'WINDOWED'),
('2', '202', '202B', 2, 2, 'Male', 'WINDOWED'),
('2', '202', '202C', 2, 2, 'Male', 'WINDOWED'),
('2', '202', '202D', 2, 2, 'Male', 'WINDOWED'),
('2', '202', '202E', 2, 2, 'Male', 'WINDOWED'),
('2', '202', '202F', 2, 2, 'Male', 'WINDOWED'),
('2', '202', '202G', 2, 2, 'Male', 'WINDOWED'),
('2', '202', '202H', 4, 4, 'Male', 'WINDOWED'),
('2', '202', '202I', 4, 4, 'Male', 'INTERIOR'),
('2', '202', '202J', 2, 2, 'Male', 'INTERIOR'),
('2', '202', '202K', 2, 2, 'Male', 'INTERIOR'),
('2', '202', '202L', 2, 2, 'Male', 'INTERIOR'),
('3', '301', '301A', 4, 4, 'Male', 'WINDOWED'),
('3', '301', '301B', 2, 2, 'Male', 'WINDOWED'),
('3', '301', '301C', 2, 2, 'Male', 'WINDOWED'),
('3', '301', '301D', 2, 2, 'Male', 'WINDOWED'),
('3', '301', '301E', 2, 2, 'Male', 'WINDOWED'),
('3', '301', '301F', 2, 2, 'Male', 'WINDOWED'),
('3', '301', '301G', 2, 0, 'Male', 'WINDOWED'),
('3', '301', '301H', 4, 0, 'Male', 'WINDOWED'),
('3', '301', '301I', 4, 0, 'Male', 'INTERIOR'),
('3', '301', '301J', 2, 0, 'Male', 'INTERIOR'),
('3', '301', '301K', 2, 0, 'Male', 'INTERIOR'),
('3', '301', '301L', 2, 0, 'Male', 'INTERIOR'),
('3', '302', '302A', 4, 0, 'Male', 'WINDOWED'),
('3', '302', '302B', 2, 0, 'Male', 'WINDOWED'),
('3', '302', '302C', 2, 0, 'Male', 'WINDOWED'),
('3', '302', '302D', 2, 0, 'Male', 'WINDOWED'),
('3', '302', '302E', 2, 0, 'Male', 'WINDOWED'),
('3', '302', '302F', 2, 0, 'Male', 'WINDOWED'),
('3', '302', '302G', 2, 0, 'Male', 'WINDOWED'),
('3', '302', '302H', 4, 0, 'Male', 'WINDOWED'),
('3', '302', '302I', 4, 0, 'Male', 'INTERIOR'),
('3', '302', '302J', 2, 0, 'Male', 'INTERIOR'),
('3', '302', '302K', 2, 0, 'Male', 'INTERIOR'),
('3', '302', '302L', 2, 0, 'Male', 'INTERIOR'),
('4', '401', '401A', 4, 0, 'Female', 'WINDOWED'),
('4', '401', '401B', 2, 0, 'Female', 'WINDOWED'),
('4', '401', '401C', 2, 0, 'Female', 'WINDOWED'),
('4', '401', '401D', 2, 0, 'Female', 'WINDOWED'),
('4', '401', '401E', 2, 0, 'Female', 'WINDOWED'),
('4', '401', '401F', 2, 0, 'Female', 'WINDOWED'),
('4', '401', '401G', 2, 0, 'Female', 'WINDOWED'),
('4', '401', '401H', 4, 0, 'Female', 'WINDOWED'),
('4', '401', '401I', 4, 0, 'Female', 'INTERIOR'),
('4', '401', '401J', 2, 0, 'Female', 'INTERIOR'),
('4', '401', '401K', 2, 0, 'Female', 'INTERIOR'),
('4', '401', '401L', 2, 0, 'Female', 'INTERIOR'),
('4', '402', '402A', 4, 0, 'Female', 'WINDOWED'),
('4', '402', '402B', 2, 0, 'Female', 'WINDOWED'),
('4', '402', '402C', 2, 0, 'Female', 'WINDOWED'),
('4', '402', '402D', 2, 0, 'Female', 'WINDOWED'),
('4', '402', '402E', 2, 0, 'Female', 'WINDOWED'),
('4', '402', '402F', 2, 0, 'Female', 'WINDOWED'),
('4', '402', '402G', 2, 0, 'Female', 'WINDOWED'),
('4', '402', '402H', 4, 0, 'Female', 'WINDOWED'),
('4', '402', '402I', 4, 0, 'Female', 'INTERIOR'),
('4', '402', '402J', 2, 0, 'Female', 'INTERIOR'),
('4', '402', '402K', 2, 0, 'Female', 'INTERIOR'),
('4', '402', '402L', 2, 0, 'Female', 'INTERIOR'),
('5', '501', '501A', 4, 0, 'Female', 'WINDOWED'),
('5', '501', '501B', 2, 0, 'Female', 'WINDOWED'),
('5', '501', '501C', 2, 0, 'Female', 'WINDOWED'),
('5', '501', '501D', 2, 0, 'Female', 'WINDOWED'),
('5', '501', '501E', 2, 0, 'Female', 'WINDOWED'),
('5', '501', '501F', 2, 0, 'Female', 'WINDOWED'),
('5', '501', '501G', 2, 0, 'Female', 'WINDOWED'),
('5', '501', '501H', 4, 0, 'Female', 'WINDOWED'),
('5', '501', '501I', 4, 0, 'Female', 'INTERIOR'),
('5', '501', '501J', 2, 0, 'Female', 'INTERIOR'),
('5', '501', '501K', 2, 0, 'Female', 'INTERIOR'),
('5', '501', '501L', 2, 0, 'Female', 'INTERIOR'),
('5', '502', '502A', 4, 0, 'Female', 'WINDOWED'),
('5', '502', '502B', 2, 0, 'Female', 'WINDOWED'),
('5', '502', '502C', 2, 0, 'Female', 'WINDOWED'),
('5', '502', '502D', 2, 0, 'Female', 'WINDOWED'),
('5', '502', '502E', 2, 0, 'Female', 'WINDOWED'),
('5', '502', '502F', 2, 0, 'Female', 'WINDOWED'),
('5', '502', '502G', 2, 0, 'Female', 'WINDOWED'),
('5', '502', '502H', 4, 0, 'Female', 'WINDOWED'),
('5', '502', '502I', 4, 0, 'Female', 'INTERIOR'),
('5', '502', '502J', 2, 0, 'Female', 'INTERIOR'),
('5', '502', '502K', 2, 0, 'Female', 'INTERIOR'),
('5', '502', '502L', 2, 0, 'Female', 'INTERIOR');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE IF NOT EXISTS `tenant` (
  `tenantId` varchar(15) NOT NULL,
  `email_add` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `civilStatus` varchar(1) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `houseNo` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `intAddress` varchar(100) NOT NULL,
  `idNo` varchar(100) NOT NULL,
  `passportNo` varchar(100) NOT NULL,
  `phoneNo` varchar(100) NOT NULL,
  `referredBy` varchar(100) NOT NULL,
  `nameOfSchool` varchar(100) NOT NULL,
  `nameOfHighSchool` varchar(100) NOT NULL,
  `schoolAddress` varchar(100) NOT NULL,
  `telNo` varchar(100) NOT NULL,
  `courseAndYear` varchar(100) NOT NULL,
  `nameOfComp` varchar(100) NOT NULL,
  `compAdd` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `natureOfBusiness` varchar(100) NOT NULL,
  `compTelNo` varchar(100) NOT NULL,
  `spouse` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `spouseOcc` varchar(100) NOT NULL,
  `spousePhoneNo` varchar(100) NOT NULL,
  `fatherOcc` varchar(100) NOT NULL,
  `fatherPhoneNo` varchar(100) NOT NULL,
  `motherOcc` varchar(100) NOT NULL,
  `motherPhoneNo` varchar(100) NOT NULL,
  `guardianOcc` varchar(100) NOT NULL,
  `guardianPhoneNo` varchar(100) NOT NULL,
  `healthRemarks` varchar(150) NOT NULL,
  `reservationCode` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`tenantId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenantId`, `email_add`, `status`, `lastName`, `firstName`, `middleName`, `birthday`, `civilStatus`, `nationality`, `religion`, `houseNo`, `street`, `barangay`, `municipality`, `province`, `intAddress`, `idNo`, `passportNo`, `phoneNo`, `referredBy`, `nameOfSchool`, `nameOfHighSchool`, `schoolAddress`, `telNo`, `courseAndYear`, `nameOfComp`, `compAdd`, `occupation`, `natureOfBusiness`, `compTelNo`, `spouse`, `father`, `mother`, `guardian`, `spouseOcc`, `spousePhoneNo`, `fatherOcc`, `fatherPhoneNo`, `motherOcc`, `motherPhoneNo`, `guardianOcc`, `guardianPhoneNo`, `healthRemarks`, `reservationCode`, `password`) VALUES
('1', '', '', 'Villena', 'April Joy', '', '1997-04-15', 'S', 'Filipino', '', '77', 'National', 'Nagbunga', 'San Marcelino', 'Zambales', '', '', '0', '0', '', 'SLU', '', '', '0', 'BS Accountancy', '', '', '', '', '0', '', 'Gilbert Villena', '', '', '', '0', '', '0', '', '0', '', '0', '', '', ''),
('10', '', '', 'Cabatic', 'Jean Russel', '', '1997-10-05', 'S', 'Filipino', '', '44', 'Galvan', '', 'Dagupan', 'Pangasinan', '', '', '', '09275834330\r\n', '', 'SLU', '', '', '', 'BSCE-1', '', '', '', '', '', '', '', 'Jo Ann Cabatic', '', '', '', '', '', '', '09275834333\r\n', '', '', '', '', ''),
('11', '', '', 'Patubo', 'Jumar', '', '1996-01-11', 'S', 'Filipino', '', '163', '', 'Sto Domingo', 'Sto Tomas', 'Pangasinan', '', '', '', '09174145479', '', 'SLU', '', '', '', 'BMLS-2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2', '', '', 'Walser', 'Shana Angela', 'B', '1998-12-04', 'S', '', '', '1151', '', 'Mambangan', 'San Leonardo', 'Nueva Ecija', '', '', '0', '9400821', '', 'SLU', '', '', '0', '', '', '', '', '', '0', '', '', 'Evangeline B. Walser', '', '', '0', '', '0', '', '0', '', '0', '', '', ''),
('3', '', '', 'Paningbatan', 'Kurt Allen', '', '1997-12-29', 'S', 'Filipino', '', '0', 'RMTU', 'Nagbunga', 'San Marcelino', 'Zambales', '', '', '0', '0', '', 'SLU', '', '', '0', 'BSCE', '', '', '', '', '0', '', '', '', 'Lyn Villena', '', '0', '', '0', '', '0', '', '0', '', '', ''),
('4', '', '', 'Ong', 'Karl Adrielle Dave', 'G.', '1999-04-30', 'S', 'Filipino', '', '0', '', 'San Eugenio', 'Aringay', 'La Union', '', '', '0', '0', '', 'SLU', '', '', '0', 'BSECE', '', '', '', '', '0', '', 'Reggie A. Ong', '', '', '', '0', '', '0', '', '0', '', '0', '', '', ''),
('5', 'markneilbacani@gmail.com', '', 'Bacani', 'Mark Neil', 'S', '1995-09-19', 'S', 'Filipino', 'Catholic', '0', 'Rosal', 'Sepung Calzada', 'Tarlac', 'Tarlac', '', '2130422', '0', '0', '', 'SLU', 'Tarlac State University, Laboratory School', 'Maliwalo, Tarlac City', '4917467', 'BSIT-4', '', '', '', '', '0', '', 'Manuel C. Bacani', 'Nancy S. Bacani', '', '', '0', 'Civil Engineer', '0', 'Teacher', '0', '', '0', '', '', ''),
('6', 'lorenzonoelronquillo@gmai', '', 'Ronquillo', 'Lorenzo Noel', 'Credo', '1996-12-25', 'S', 'Filipino', 'Catholic', '17', 'De Guzman', 'Kapitan Pepe', 'Cabanatuan', 'Nueva Ecija', '', '2146982', '0', '0', '', 'SLU', 'College of the Immaculate Concepcion', 'Burgos St., Nueva Ecija', '4633404', 'BSIT-3', '', '', '', '', '0', '', 'Edward Ronquillo', 'Rowena Ronquillo', '', '', '0', 'Metrobank employee', '0', 'CCWD employee', '0', '', '0', '', '', ''),
('7', '', '', 'Liwanag', 'Romel Vincent Marvi II', '', '1998-08-07', 'S', 'Filipino', '', '0', '', 'Mapalad', 'San Agustin', 'Isabela', '', '', '0', '0', '', 'SLU', '', '', '0', 'BSIT-1', '', '', '', '', '0', '', '', 'Susan P. Liwanag', '', '', '0', '', '0', '', '0', '', '0', '', '', ''),
('8', '', '', 'Pablo', 'Angelo', '', '1998-09-09', 'S', 'Filipino', '', '0', '', 'UCS', 'Santiago City', '', '', '', '0', '0', '', 'SLU', '', '', '0', 'BSCE-2', '', '', '', '', '0', '', 'Mardy Pablo', '', '', '', '0', '', '0', '', '0', '', '0', '', '', ''),
('9', '', '', 'Centeno', 'Carlo Miguel', '', '1995-11-15', 'S', 'Filipino', '', '13', '', 'Tikay', 'Malolos', 'Bulacan', '', '', '0', '0', '', 'UP', '', '', '0', 'BASS Econ', '', '', '', '', '0', '', '', 'Cynthia Centeno', '', '', '0', '', '0', '', '0', '', '0', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
