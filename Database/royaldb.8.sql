-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 11:29 AM
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
-- Table structure for table `aboutus_contactdetails`
--

CREATE TABLE IF NOT EXISTS `aboutus_contactdetails` (
  `contactID` int(11) NOT NULL AUTO_INCREMENT,
  `contactDetails` varchar(50) NOT NULL,
  `Type` enum('Mobile Number','Telephone Number','Email Address','Address') NOT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aboutus_contactdetails`
--

INSERT INTO `aboutus_contactdetails` (`contactID`, `contactDetails`, `Type`) VALUES
(1, '(074) 424-1300', 'Telephone Number'),
(2, '0917-863-4007', 'Mobile Number'),
(3, 'bestway10cdc@yahoo.com', 'Email Address'),
(4, 'Rimando Road, Aurora Hill-Trancoville, Baguio City', 'Address');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_content`
--

CREATE TABLE IF NOT EXISTS `aboutus_content` (
  `aboutUs` text NOT NULL,
  `aboutUsID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`aboutUsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aboutus_content`
--

INSERT INTO `aboutus_content` (`aboutUs`, `aboutUsID`) VALUES
('A condominium-dormitory designed for students and young professionals offering an unmatched level of customer service, in addition to the cutting edge features of the building that provides positive atmosphere for all tenants specially students.\n', 1),
('\r\nRoyal Residences Condominium is strategically located along Rimando Road (going to Aurora Hill), Trancoville Barangay, Baguio City allowing a 5-minute ride to the central business district and major universities.', 2);

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
-- Table structure for table `archive_bills`
--

CREATE TABLE IF NOT EXISTS `archive_bills` (
  `archiveTenantID` varchar(15) NOT NULL,
  `archiveBillNo` varchar(11) NOT NULL,
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
  `currentBalance` int(11) NOT NULL,
  PRIMARY KEY (`archiveBillNo`),
  KEY `archiveTenantID` (`archiveTenantID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archive_payments`
--

CREATE TABLE IF NOT EXISTS `archive_payments` (
  `archiveTenantID` varchar(15) NOT NULL,
  `paymentID` varchar(15) NOT NULL,
  `archiveBillNo` varchar(15) NOT NULL,
  `dateOfPayment` date NOT NULL,
  `amountPaid` int(11) NOT NULL,
  `remainingBalance` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`),
  UNIQUE KEY `paymentID` (`paymentID`),
  KEY `archiveTenantID` (`archiveTenantID`),
  KEY `archiveBillNo` (`archiveBillNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archive_reservation`
--

CREATE TABLE IF NOT EXISTS `archive_reservation` (
  `reservationCode` varchar(100) NOT NULL,
  `dateReserved` date NOT NULL,
  `timeReserved` time NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `emailAdd` varchar(50) NOT NULL,
  `status` enum('pending','reserved') NOT NULL,
  `depositTransactionNo` varchar(15) NOT NULL,
  `roomType` enum('INTERIOR','WINDOWED') NOT NULL,
  `expectedMoveInDate` date NOT NULL,
  `amountToPay` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `civilStatus` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archive_tenant`
--

CREATE TABLE IF NOT EXISTS `archive_tenant` (
  `archiveTenantID` varchar(15) NOT NULL,
  `email_add` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `civilStatus` varchar(100) NOT NULL,
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
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`archiveTenantID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `tenantID` varchar(15) NOT NULL,
  `billNo` varchar(11) NOT NULL,
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
  `currentBalance` decimal(15,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`billNo`),
  KEY `TenantID` (`tenantID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`tenantID`, `billNo`, `billingDate`, `securityDeposit`, `previousBalance`, `advanceRental`, `cityServices`, `dH20`, `mealTicket`, `misc`, `totalBilling`, `dateDue`, `penalties`, `currentBalance`) VALUES
('rr033', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0'),
('rr032', 'br001', '2014-08-01', 7000, 0, 3500, 0, 50, 3000, 0, 13550, '2014-08-31', 0, '13550'),
('rr032', 'br002', '2014-09-01', 0, 50, 3500, 0, 50, 3000, 0, 6550, '2014-09-30', 0, '6600'),
('rr032', 'br003', '2014-08-01', 0, 6600, 0, 350, 0, 0, 100, 450, '2014-09-30', 0, '7050'),
('rr032', 'br004', '2014-10-01', 0, 1100, 3500, 0, 50, 3000, 0, 6550, '2014-10-31', 0, '7650'),
('rr032', 'br005', '2014-09-01', 0, 7650, 0, 350, 0, 0, 0, 350, '2014-10-31', 0, '8000'),
('rr032', 'br006', '2014-11-01', 0, 0, 3500, 0, 50, 3000, 0, 6550, '2014-11-30', 0, '6550'),
('rr032', 'br007', '2014-10-01', 0, 6550, 0, 350, 0, 0, 0, 350, '2014-11-30', 0, '6900'),
('rr032', 'br008', '2014-12-01', 0, 1000, 3500, 0, 50, 0, 0, 3550, '2014-12-31', 0, '4550'),
('rr032', 'br009', '2014-11-01', 0, 4550, 0, 350, 0, 0, 0, 350, '2014-12-31', 0, '4900'),
('rr032', 'br010', '2015-01-01', 0, 0, 3500, 0, 50, 0, 0, 3550, '2015-01-31', 0, '3550'),
('rr032', 'br011', '2014-12-01', 0, 3550, 0, 250, 0, 0, 0, 250, '2015-01-31', 0, '3800'),
('rr032', 'br012', '2015-02-01', 0, 0, 3500, 0, 50, 0, 0, 3550, '2015-02-28', 0, '3550'),
('rr032', 'br013', '2015-01-01', 0, 3550, 0, 150, 0, 0, 0, 150, '2015-02-28', 0, '3700'),
('rr032', 'br014', '2015-03-01', 0, 0, 3500, 0, 50, 2000, 0, 5550, '2015-03-31', 0, '5550'),
('rr032', 'br015', '2015-02-01', 0, 5550, 0, 350, 0, 0, 20, 370, '2015-03-31', 0, '5920'),
('rr032', 'br016', '2015-04-01', 0, 1000, 3500, 0, 50, 2000, 21, 5571, '2015-04-30', 0, '6571'),
('rr032', 'br017', '2015-03-01', 0, 6571, 0, 380, 0, 0, 0, 380, '2015-04-30', 0, '6951'),
('rr032', 'br018', '2015-05-01', 0, 0, 3500, 0, 50, 2000, 0, 5550, '2015-05-31', 0, '5550'),
('rr032', 'br019', '2015-04-01', 0, 5550, 0, 370, 0, 0, 0, 370, '2015-05-31', 0, '5920'),
('rr032', 'br020', '2015-06-01', 0, -42, 3500, 0, 50, 2000, 42, 5592, '2015-06-30', 0, '5550'),
('rr032', 'br021', '2015-05-01', 0, 5550, 0, 365, 0, 0, 0, 365, '2015-06-30', 0, '5915'),
('rr032', 'br022', '2015-07-01', 0, 0, 3500, 0, 50, 2250, 0, 5800, '2015-07-31', 0, '5800'),
('rr032', 'br023', '2015-06-01', 0, 5800, 0, 220, 0, 0, 0, 220, '2015-07-31', 0, '6020'),
('rr032', 'br024', '2015-08-01', 1000, 1250, 4000, 0, 50, 1000, 26, 6076, '2015-08-31', 0, '7326'),
('rr032', 'br025', '2015-07-01', 0, 7326, -200, 370, 0, 0, 0, 170, '2015-08-31', 0, '7496'),
('rr032', 'br026', '2015-09-01', 0, 250, 4000, 0, 50, 2500, 5, 6555, '2015-09-30', 0, '6805'),
('rr032', 'br027', '2015-08-01', 0, 6805, -200, 330, 0, 0, 0, 130, '2015-09-30', 0, '6935'),
('rr032', 'br028', '2015-10-01', 0, 1500, 4000, 0, 50, 1500, 31, 5581, '2015-10-31', 0, '7081'),
('rr032', 'br029', '2015-09-01', 0, 7081, -200, 340, 0, 0, 0, 140, '2015-10-31', 0, '7221'),
('rr032', 'br030', '2015-11-01', 0, 1500, 4000, 0, 50, 750, 31, 4831, '2015-11-30', 0, '6332'),
('rr032', 'br031', '2015-10-01', 0, 6332, 0, 365, 0, 0, 0, 365, '2015-11-30', 0, '6697'),
('rr032', 'br032', '2015-12-01', 0, 0, 4000, 0, 50, 500, 0, 4550, '2015-12-31', 0, '4550'),
('rr032', 'br033', '2015-11-01', 0, 4550, -200, 360, 0, 0, 0, 160, '2015-12-31', 0, '4710'),
('rr032', 'br034', '2016-01-01', 0, 0, 4000, 0, 50, 1000, 0, 5050, '2016-01-31', 0, '5050'),
('rr032', 'br035', '2015-12-01', 0, 5050, -200, 290, 0, 0, 0, 90, '2016-01-31', 0, '5140'),
('rr032', 'br036', '2016-02-01', 0, 250, 4000, 0, 50, 1000, 5, 5055, '2016-02-29', 0, '5305'),
('rr032', 'br037', '2016-01-01', 0, 5305, -200, 250, 0, 0, 60, 110, '2016-02-29', 0, '5415'),
('rr031', 'br038', '2015-08-01', 11500, 0, 5750, 0, 50, 2500, 0, 19800, '2015-08-31', 0, '19800'),
('rr031', 'br039', '2015-09-01', 0, 1050, 5750, 0, 50, 1750, 22, 7572, '2015-09-30', 0, '8622'),
('rr031', 'br040', '2015-08-01', 0, 8622, 0, 360, 0, 0, 0, 360, '2015-09-30', 0, '8982'),
('rr031', 'br041', '2015-10-01', 0, 5185, 5750, 0, 50, 1500, 0, 7300, '2015-10-31', 0, '2115'),
('rr031', 'br042', '2015-09-01', 0, 2115, 0, 385, 0, 0, 0, 385, '2015-10-31', 0, '2500'),
('rr031', 'br043', '2015-11-01', 0, 1250, 5750, 0, 50, 1750, 26, 7576, '2015-11-30', 0, '8826'),
('rr031', 'br044', '2015-10-01', 0, 8826, 0, 380, 0, 0, 0, 380, '2015-11-30', 0, '9206'),
('rr031', 'br045', '2015-12-01', 0, 1750, 5750, 0, 50, 500, 36, 6336, '2015-12-31', 0, '8086'),
('rr031', 'br046', '2015-11-01', 0, 8086, 0, 350, 0, 0, 0, 350, '2016-12-30', 0, '8436'),
('rr031', 'br047', '2016-01-01', 0, 0, 5750, 0, 0, 0, 47, 5797, '2016-01-31', 0, '8047'),
('rr031', 'br048', '2015-12-01', 0, 0, 0, 250, 0, 0, 500, 750, '2016-01-31', 0, '8797'),
('rr013', 'br049', '2014-08-01', 12600, 0, 6300, 0, 50, 1000, 0, 1950, '2014-08-30', 0, '19950'),
('rr013', 'br050', '2014-09-01', 0, 1950, 6300, 0, 50, 1000, 41, 7391, '2014-09-30', 0, '9341'),
('rr013', 'br051', '2014-08-01', 0, 9341, 0, 350, 0, 0, 100, 450, '2014-09-30', 0, '9791'),
('rr013', 'br052', '2014-10-01', 0, 3491, 6300, 0, 50, 400, 70, 6820, '2014-10-31', 0, '10310'),
('rr013', 'br053', '2014-09-01', 0, 10310, 0, 350, 0, 0, 100, 450, '2014-10-31', 0, '10760'),
('rr013', 'br054', '2014-11-01', 0, -4240, 6300, 0, 50, 200, 0, 6550, '2014-11-30', 0, '2310'),
('rr013', 'br055', '2014-10-01', 0, 2310, 0, 350, 0, 0, 0, 350, '2014-11-30', 0, '2660'),
('rr013', 'br056', '2014-12-01', 0, -3340, 6300, 0, 50, 0, 0, 6350, '2014-12-31', 0, '3010'),
('rr013', 'br057', '2014-11-01', 0, 3010, 0, 370, 0, 0, 0, 370, '2014-12-31', 0, '3380'),
('rr013', 'br058', '2015-01-01', 0, -2620, 6300, 0, 50, 0, 0, 6350, '2015-01-31', 0, '3730'),
('rr013', 'br059', '2014-12-01', 0, 3730, 0, 270, 0, 0, 0, 270, '2015-01-30', 0, '4000'),
('rr013', 'br060', '2015-02-01', 0, 0, 6300, 0, 50, 500, 0, 6850, '2015-02-28', 0, '6850'),
('rr013', 'br061', '2015-01-01', 0, 6850, 0, 150, 0, 0, 0, 150, '2015-02-28', 0, '7000'),
('rr013', 'br062', '2015-03-01', 0, 4000, 6300, 0, 50, 1000, 83, 7433, '2015-03-31', 0, '11434'),
('rr013', 'br063', '2015-02-01', 0, 11434, 0, 345, 0, 0, 40, 385, '2015-03-31', 0, '11819'),
('rr013', 'br064', '2015-04-01', 0, 5519, 6300, 0, 50, 500, 115, 6965, '2015-04-30', 0, '12484'),
('rr013', 'br065', '2015-03-01', 0, 12484, 0, 390, 0, 0, 0, 390, '2015-04-30', 0, '12874'),
('rr013', 'br066', '2015-05-01', 0, -1500, 6300, 0, 50, 250, 0, 6600, '2015-05-30', 0, '5100'),
('rr013', 'br067', '2015-04-01', 0, 5100, 0, 380, 0, 0, 0, 380, '2015-05-30', 0, '5480'),
('rr013', 'br068', '2015-06-01', 0, -6080, 6300, 0, 50, 0, 0, 6350, '2015-06-30', 0, '270'),
('rr013', 'br069', '2015-05-01', 0, 270, 0, 395, 0, 0, 0, 395, '2015-06-30', 0, '665'),
('rr013', 'br070', '2015-07-01', 0, 665, 6300, 0, 50, 1000, 14, 7364, '2015-07-30', 0, '8029'),
('rr013', 'br071', '2015-06-01', 0, 8029, 0, 240, 0, 0, 0, 240, '2015-07-30', 0, '8269'),
('rr013', 'br072', '2015-08-01', 0, 1969, 6300, 0, 50, 500, 41, 6891, '2015-08-31', 0, '8859'),
('rr013', 'br073', '2015-07-01', 0, 8859, 0, 410, 0, 0, 0, 410, '2015-08-31', 0, '9269'),
('rr013', 'br074', '2015-09-01', 0, 2969, 6300, 0, 50, 750, 61, 7161, '2015-09-30', 0, '10130'),
('rr013', 'br075', '2015-08-01', 0, 10130, 0, 360, 0, 0, 0, 360, '2015-09-30', 0, '10490'),
('rr013', 'br076', '2016-10-01', 0, 1500, 6300, 0, 50, 750, 31, 7131, '2016-10-31', 0, '8631'),
('rr013', 'br077', '2015-09-01', 0, 8631, -315, 385, 0, 0, 0, 70, '2015-10-31', 0, '8701'),
('rr013', 'br078', '2015-11-01', 0, 750, 6300, 0, 50, 750, 16, 7366, '2015-11-30', 0, '8116'),
('rr013', 'br079', '2015-10-01', 0, 8116, 0, 380, 0, 0, 0, 380, '2015-11-01', 0, '8496'),
('rr013', 'br080', '2015-12-01', 0, 750, 6300, 0, 50, 750, 16, 7116, '2015-12-30', 0, '7866'),
('rr013', 'br081', '2015-11-01', 0, 7866, 0, 350, 0, 0, 0, 350, '2015-12-30', 0, '8216'),
('rr013', 'br082', '2016-01-01', 0, 750, 6300, 0, 50, 500, 16, 6866, '2016-01-30', 0, '7615'),
('rr013', 'br083', '2015-12-01', 0, 7615, 0, 250, 0, 0, 0, 250, '2016-01-30', 0, '7865'),
('rr013', 'br084', '2016-02-01', 0, 1865, 6300, 0, 50, 500, 39, 6889, '2016-03-30', 0, '8754'),
('rr013', 'br085', '2016-01-01', 0, 8754, 0, 225, 0, 0, 100, 325, '2016-02-28', 0, '9079'),
('rr013', 'br086', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0'),
('rr022', 'br087', '2015-06-01', 7000, 0, 1750, 0, 50, 750, 0, 9550, '2015-06-30', 0, '9550'),
('rr022', 'br088', '2015-07-01', 0, 550, 3500, 0, 50, 750, 0, 4300, '2015-07-30', 0, '4850'),
('rr022', 'br089', '2015-06-01', 0, 4850, 0, 225, 0, 0, 0, 225, '2015-07-30', 0, '5075'),
('rr022', 'br090', '2015-08-01', 1000, 5075, 4000, 0, 50, 750, 64, 5864, '2015-08-31', 0, '10939'),
('rr022', 'br091', '2015-07-01', 0, 10939, 0, 410, 0, 0, 0, 410, '2015-08-31', 0, '11349'),
('rr022', 'br092', '2015-09-01', 0, 750, 4000, 0, 50, 1000, 16, 5066, '2015-09-30', 0, '5816'),
('rr022', 'br093', '2015-08-01', 0, 5816, 0, 360, 0, 0, 0, 360, '2015-09-30', 0, '6176'),
('rr022', 'br094', '2015-10-01', 0, 2176, 4000, 0, 50, 1250, 45, 5345, '2015-10-31', 0, '7521'),
('rr022', 'br095', '2015-09-01', 0, 7521, 0, 385, 0, 0, 0, 385, '2015-10-31', 0, '7906'),
('rr022', 'br096', '2015-11-01', 0, 2906, 4000, 0, 50, 500, 61, 4611, '2015-11-30', 0, '7516'),
('rr022', 'br097', '2015-10-01', 0, 7516, 0, 380, 0, 0, 0, 380, '2015-11-30', 0, '7896'),
('rr022', 'br098', '2015-12-01', 0, 2896, 4000, 0, 50, 0, 60, 4110, '2015-12-31', 0, '7007'),
('rr022', 'br099', '2015-11-01', 0, 7007, 0, 350, 0, 0, 0, 350, '2015-12-31', 0, '7357'),
('rr022', 'br100', '2016-01-01', 0, 3557, 4000, 0, 50, 750, 74, 4874, '2016-01-31', 0, '8431'),
('rr022', 'br101', '2015-12-01', 0, 8431, 0, 250, 0, 0, 0, 250, '2016-01-31', 0, '8681'),
('rr022', 'br102', '2016-02-01', 0, 3681, 4000, 0, 50, 250, 77, 4377, '2016-02-28', 0, '8057'),
('rr022', 'br103', '2016-01-01', 0, 8057, 0, 225, 0, 0, 0, 225, '2016-02-28', 0, '8352'),
('rr022', 'br104', '2016-03-01', 0, 3352, 4000, 0, 50, 0, 70, 4120, '2016-03-31', 0, '7472'),
('rr022', 'br105', '2016-02-01', 0, 7472, 0, 350, 0, 0, 0, 350, '2016-03-31', 0, '7822'),
('rr022', 'br106', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0'),
('rr033', 'br107', '2015-08-01', 11500, 0, 5750, 0, 50, 0, 0, 17300, '2015-08-31', 0, '17300'),
('rr033', 'br108', '2015-10-01', 0, 50, 5750, 0, 50, 500, 0, 6300, '2015-10-31', 0, '6350'),
('rr033', 'br109', '2015-09-01', 0, 6350, 0, 400, 0, 0, 0, 400, '2015-10-31', 0, '6750'),
('rr033', 'br110', '2015-11-01', 0, 250, 5750, 0, 50, 750, 5, 6555, '2015-11-30', 0, '6805'),
('rr033', 'br111', '2015-10-01', 0, 6805, 0, 400, 0, 0, 0, 400, '2015-11-30', 0, '7205'),
('rr033', 'br112', '2015-12-01', 0, 500, 5750, 0, 50, 250, 10, 6060, '2015-12-31', 0, '6561'),
('rr033', 'br113', '2015-11-01', 0, 6561, 0, 400, 0, 0, 0, 400, '2015-12-31', 0, '6961'),
('rr033', 'br114', '2016-01-01', 0, 0, 5750, 0, 50, 250, 0, 6050, '2016-01-31', 0, '6050'),
('rr033', 'br115', '2015-12-01', 0, 6050, 0, 300, 0, 0, 750, 1050, '2016-01-31', 0, '7100'),
('rr033', 'br116', '2016-02-01', 0, 1000, 5750, 0, 50, 750, 0, 6550, '2016-02-28', 0, '7550'),
('rr033', 'br117', '2016-01-01', 0, 7550, 0, 280, 0, 0, 100, 380, '2016-02-28', 0, '7930'),
('rr033', 'br118', '2016-03-01', 0, 750, 5750, 0, 50, 0, 16, 5816, '2016-03-31', 0, '6565'),
('rr033', 'br119', '2016-02-01', 0, 6565, 0, 400, 0, 0, 0, 400, '2016-03-31', 0, '6965');

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
  `tenantID` varchar(15) NOT NULL,
  `paymentID` varchar(15) NOT NULL,
  `billNo` varchar(15) NOT NULL,
  `dateOfPayment` date NOT NULL,
  `amountPaid` int(11) NOT NULL,
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
  `reservationCode` varchar(100) NOT NULL,
  `dateReserved` date NOT NULL,
  `timeReserved` time NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `civilStatus` varchar(1) NOT NULL,
  `email_add` varchar(25) NOT NULL,
  `status` enum('pending','reserved','archived','fully_paid') DEFAULT NULL,
  `depositTransactionNo` varchar(15) NOT NULL,
  `roomType` enum('INTERIOR','EXTERIOR') NOT NULL,
  `expectedMoveInDate` date NOT NULL,
  `amountToPay` int(11) NOT NULL,
  PRIMARY KEY (`reservationCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationCode`, `dateReserved`, `timeReserved`, `lastName`, `firstName`, `middleName`, `birthday`, `civilStatus`, `email_add`, `status`, `depositTransactionNo`, `roomType`, `expectedMoveInDate`, `amountToPay`) VALUES
('1', '2016-02-27', '10:20:00', 'Ducay', 'Gyland', 'Hipolito', '1995-03-06', 'S', 'dgyland@yahoo.com', 'reserved', '0', 'INTERIOR', '2016-04-06', 11000),
('2', '2016-02-24', '02:30:00', 'Rimando', 'John Paolo', 'Marasigan', '1992-12-12', 'S', 'obitoRimando@gmail.com', 'pending', '0', 'INTERIOR', '2016-06-09', 1000),
('3', '2016-02-10', '12:23:45', 'Adlawan', 'Vincent', 'Musni', '1996-10-07', 'S', 'vinvin@google.com', 'pending', '0', 'EXTERIOR', '2016-03-16', 1000),
('4', '2016-02-24', '03:04:45', 'Castro', 'Lyndon Adrian', 'Chua', '1996-12-02', 'S', 'lyndonadrian@yahoo.com', 'reserved', '000-480261733', 'INTERIOR', '2016-03-24', 11000),
('5', '2016-03-02', '01:23:50', 'Reyes', 'Fidel ', 'Salvador', '1996-12-09', 'S', 'delsalvador03@google.com', 'pending', '0', 'EXTERIOR', '2016-03-24', 1000),
('6', '2016-02-23', '09:34:12', 'Gloria', 'Chester', 'Panganiban', '1996-04-19', 'S', 'nevermore_pogi@google.com', 'reserved', '123-480261733', 'INTERIOR', '2016-05-18', 11000),
('7', '2016-02-27', '12:12:12', 'Galapon', 'Jan Fidel Aristotle', 'Macaspac', '1996-12-05', 'S', 'galps02@google.com', 'reserved', '000-480287654', 'EXTERIOR', '2016-04-14', 11000),
('8', '2016-01-15', '12:23:06', 'Farinas', 'Dexter', 'San Pedro', '1997-04-12', 'S', 'dexter@google.com', 'reserved', '000-098764733', 'INTERIOR', '2016-02-29', 11000);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_archive`
--

CREATE TABLE IF NOT EXISTS `reservation_archive` (
  `reservationCode` varchar(100) NOT NULL,
  `dateReserved` date NOT NULL,
  `timeReserved` time NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `civilStatus` varchar(1) NOT NULL,
  `email_add` varchar(25) NOT NULL,
  `status` enum('pending','reserved','archived','fully_paid') DEFAULT NULL,
  `depositTransactionNo` varchar(15) NOT NULL,
  `roomType` enum('INTERIOR','EXTERIOR') NOT NULL,
  `expectedMoveInDate` date NOT NULL,
  `amountToPay` int(11) NOT NULL,
  PRIMARY KEY (`reservationCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_archive`
--

INSERT INTO `reservation_archive` (`reservationCode`, `dateReserved`, `timeReserved`, `lastName`, `firstName`, `middleName`, `birthday`, `civilStatus`, `email_add`, `status`, `depositTransactionNo`, `roomType`, `expectedMoveInDate`, `amountToPay`) VALUES
('10', '2016-01-24', '12:12:05', 'Wee', 'Carl Rasley', 'Oviedo', '1995-12-12', 'S', 'carl18@google.com', 'archived', '0', 'INTERIOR', '2016-03-15', 1000),
('9', '2016-01-19', '01:12:05', 'Lopez', 'John Michael', 'Modomo', '1995-09-12', 'S', 'jm_19@google.com', 'archived', '0', 'INTERIOR', '2016-03-25', 1000);

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
('3', '301', '301G', 2, 2, 'Male', 'WINDOWED'),
('3', '301', '301H', 4, 4, 'Male', 'WINDOWED'),
('3', '301', '301I', 4, 4, 'Male', 'INTERIOR'),
('3', '301', '301J', 2, 2, 'Male', 'INTERIOR'),
('3', '301', '301K', 2, 2, 'Male', 'INTERIOR'),
('3', '301', '301L', 2, 2, 'Male', 'INTERIOR'),
('3', '302', '302A', 4, 4, 'Male', 'WINDOWED'),
('3', '302', '302B', 2, 2, 'Male', 'WINDOWED'),
('3', '302', '302C', 2, 2, 'Male', 'WINDOWED'),
('3', '302', '302D', 2, 2, 'Male', 'WINDOWED'),
('3', '302', '302E', 2, 2, 'Male', 'WINDOWED'),
('3', '302', '302F', 2, 2, 'Male', 'WINDOWED'),
('3', '302', '302G', 2, 2, 'Male', 'WINDOWED'),
('3', '302', '302H', 4, 4, 'Male', 'WINDOWED'),
('3', '302', '302I', 4, 4, 'Male', 'INTERIOR'),
('3', '302', '302J', 2, 2, 'Male', 'INTERIOR'),
('3', '302', '302K', 2, 2, 'Male', 'INTERIOR'),
('3', '302', '302L', 2, 2, 'Male', 'INTERIOR'),
('4', '401', '401A', 4, 4, 'Female', 'WINDOWED'),
('4', '401', '401B', 2, 2, 'Female', 'WINDOWED'),
('4', '401', '401C', 2, 2, 'Female', 'WINDOWED'),
('4', '401', '401D', 2, 2, 'Female', 'WINDOWED'),
('4', '401', '401E', 2, 2, 'Female', 'WINDOWED'),
('4', '401', '401F', 2, 2, 'Female', 'WINDOWED'),
('4', '401', '401G', 2, 2, 'Female', 'WINDOWED'),
('4', '401', '401H', 4, 4, 'Female', 'WINDOWED'),
('4', '401', '401I', 4, 4, 'Female', 'INTERIOR'),
('4', '401', '401J', 2, 2, 'Female', 'INTERIOR'),
('4', '401', '401K', 2, 2, 'Female', 'INTERIOR'),
('4', '401', '401L', 2, 2, 'Female', 'INTERIOR'),
('4', '402', '402A', 4, 4, 'Female', 'WINDOWED'),
('4', '402', '402B', 2, 2, 'Female', 'WINDOWED'),
('4', '402', '402C', 2, 2, 'Female', 'WINDOWED'),
('4', '402', '402D', 2, 2, 'Female', 'WINDOWED'),
('4', '402', '402E', 2, 2, 'Female', 'WINDOWED'),
('4', '402', '402F', 2, 2, 'Female', 'WINDOWED'),
('4', '402', '402G', 2, 2, 'Female', 'WINDOWED'),
('4', '402', '402H', 4, 4, 'Female', 'WINDOWED'),
('4', '402', '402I', 4, 4, 'Female', 'INTERIOR'),
('4', '402', '402J', 2, 2, 'Female', 'INTERIOR'),
('4', '402', '402K', 2, 2, 'Female', 'INTERIOR'),
('4', '402', '402L', 2, 2, 'Female', 'INTERIOR'),
('5', '501', '501A', 4, 4, 'Female', 'WINDOWED'),
('5', '501', '501B', 2, 2, 'Female', 'WINDOWED'),
('5', '501', '501C', 2, 2, 'Female', 'WINDOWED'),
('5', '501', '501D', 2, 2, 'Female', 'WINDOWED'),
('5', '501', '501E', 2, 2, 'Female', 'WINDOWED'),
('5', '501', '501F', 2, 2, 'Female', 'WINDOWED'),
('5', '501', '501G', 2, 2, 'Female', 'WINDOWED'),
('5', '501', '501H', 4, 4, 'Female', 'WINDOWED'),
('5', '501', '501I', 4, 4, 'Female', 'INTERIOR'),
('5', '501', '501J', 2, 2, 'Female', 'INTERIOR'),
('5', '501', '501K', 2, 2, 'Female', 'INTERIOR'),
('5', '501', '501L', 2, 2, 'Female', 'INTERIOR'),
('5', '502', '502A', 4, 4, 'Female', 'WINDOWED'),
('5', '502', '502B', 2, 2, 'Female', 'WINDOWED'),
('5', '502', '502C', 2, 2, 'Female', 'WINDOWED'),
('5', '502', '502D', 2, 2, 'Female', 'WINDOWED'),
('5', '502', '502E', 2, 2, 'Female', 'WINDOWED'),
('5', '502', '502F', 2, 2, 'Female', 'WINDOWED'),
('5', '502', '502G', 2, 2, 'Female', 'WINDOWED'),
('5', '502', '502H', 4, 4, 'Female', 'WINDOWED'),
('5', '502', '502I', 4, 4, 'Female', 'INTERIOR'),
('5', '502', '502J', 2, 2, 'Female', 'INTERIOR'),
('5', '502', '502K', 2, 2, 'Female', 'INTERIOR'),
('5', '502', '502L', 2, 2, 'Female', 'INTERIOR'),
('6', '601', '601A', 4, 4, 'Male', 'WINDOWED'),
('6', '601', '601B', 2, 2, 'Male', 'WINDOWED'),
('6', '601', '601C', 2, 2, 'Male', 'WINDOWED'),
('6', '601', '601D', 2, 2, 'Male', 'WINDOWED'),
('6', '601', '601E', 4, 4, 'Male', 'WINDOWED'),
('6', '601', '601F', 4, 4, 'Male', 'INTERIOR'),
('6', '601', '601G', 2, 2, 'Male', 'INTERIOR'),
('6', '601', '601H', 2, 2, 'Male', 'INTERIOR'),
('6', '601', '601I', 2, 2, 'Male', 'INTERIOR'),
('6', '602', '602A', 4, 4, 'Female', 'WINDOWED'),
('6', '602', '602B', 2, 2, 'Female', 'WINDOWED'),
('6', '602', '602C', 2, 2, 'Female', 'WINDOWED'),
('6', '602', '602D', 2, 2, 'Male', 'WINDOWED'),
('6', '602', '602E', 4, 4, 'Female', 'WINDOWED'),
('6', '602', '602F', 4, 4, 'Female', 'INTERIOR'),
('6', '602', '602G', 2, 2, 'Female', 'INTERIOR'),
('6', '602', '602H', 2, 2, 'Female', 'INTERIOR'),
('6', '602', '602I', 2, 2, 'Female', 'INTERIOR');

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

CREATE TABLE IF NOT EXISTS `temporary` (
  `femaleWindowedSolo` int(11) NOT NULL,
  `maleWindowedSolo` int(11) NOT NULL,
  `femaleInteriorSolo` int(11) NOT NULL,
  `maleInteriorSolo` int(11) NOT NULL,
  `femaleWindowedBedspace` int(11) NOT NULL,
  `maleWindowedBedspace` int(11) NOT NULL,
  `femaleInteriorBedspace` int(11) NOT NULL,
  `maleInteriorBedspace` int(11) NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `civilStatus` varchar(100) NOT NULL,
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
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`tenantId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenantId`, `email_add`, `status`, `lastName`, `firstName`, `middleName`, `birthday`, `civilStatus`, `nationality`, `religion`, `houseNo`, `street`, `barangay`, `municipality`, `province`, `intAddress`, `idNo`, `passportNo`, `phoneNo`, `referredBy`, `nameOfSchool`, `nameOfHighSchool`, `schoolAddress`, `telNo`, `courseAndYear`, `nameOfComp`, `compAdd`, `occupation`, `natureOfBusiness`, `compTelNo`, `spouse`, `father`, `mother`, `guardian`, `spouseOcc`, `spousePhoneNo`, `fatherOcc`, `fatherPhoneNo`, `motherOcc`, `motherPhoneNo`, `guardianOcc`, `guardianPhoneNo`, `healthRemarks`, `reservationCode`, `password`) VALUES
('rr001', '', '', 'Lalas', 'Karl Ren', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr002', '', '', 'Castro', 'Carey Lien', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr003', '', '', 'Rabanes', 'Levin Damiel', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr004', '', '', 'Lopez', 'Jelly', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr005', '', '', 'Soriano', 'Jan Carlo', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr006', '', '', 'Go', 'Jared Jedrek', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr007', '', '', 'Tayaban', 'Melody', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr008', '', '', 'Ramos', 'Reachelle', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr009', '', '', 'Pascual', 'Hanz', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr010', '', '', 'Ochona', 'Girlie', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr011', '', '', 'Co', 'Shaina', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr012', '', '', 'Palisoc', 'Aldreyn', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr013', '', '', 'Purugganan', 'Chester', '', '0000-00-00', '', '', '', '45', '', 'Paringao', 'Bauang', 'La Union', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'CYNTHIA PURUGGANAN \r\n', '', '', '', '', '', '', '0915-894-0242', '', '', '', '', ''),
('rr014', '', '', 'Reyes', 'Kate', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr015', '', '', 'Ligon', 'Joanna Marie', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr016', '', '', 'Asinas', 'Limuel', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr017', '', '', 'Acosta', 'Joanne Patricia', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr018', '', '', 'Paz', 'Yanna', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr019', '', '', 'Gonatice', 'Jerome', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr020', '', '', 'Agleam', 'Jaynard', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr021', '', '', 'Lopez', 'Kiena', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr022', '', '', 'Bacani', 'Mark Neil', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr023', '', '', 'Ferrer', 'Gavin Roy', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr024', '', '', 'Aquino', 'Daryl', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr025', '', '', 'Pandila', 'Mark Lester', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr026', '', '', 'Reyes', 'Christian', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr027', '', '', 'Banaobra', 'Lawrence', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr028', '', '', 'De Guzman', 'Edward Joshua', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr029', '', '', 'Ko', 'Phillip', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr030', '', '', 'Manalili', 'Jerome', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('rr031', '', '', 'Prado', 'Jeffrey', 'B', '0000-00-00', '', '', '', '', '', 'Cato', 'Infanta', 'Pangasinan', '', '', '', '09369093286', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Basilda B. Prado', '', '', '', '', '', '', ' 09215904119 	\r\n', '', '', '', '', ''),
('rr032', '', '', 'Cuna', 'Elijah', '', '0000-00-00', '', '', '', '93', '', 'Carangalan District', 'Dagupan City', 'Pangasinan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Wilson Cuna', 'Jenny Cuna', '', '', '', '', '523-0644', '', '529-1325', '', '', '', '', ''),
('rr033', '', '', 'Balcanao', 'Marc Davin', 'M', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archive_payments`
--
ALTER TABLE `archive_payments`
  ADD CONSTRAINT `archive_payments_ibfk_1` FOREIGN KEY (`archiveTenantID`) REFERENCES `archive_tenant` (`archiveTenantID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `archive_payments_ibfk_2` FOREIGN KEY (`archiveBillNo`) REFERENCES `archive_bills` (`archiveBillNo`) ON UPDATE CASCADE;

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`tenantID`) REFERENCES `tenant` (`tenantId`) ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`tenantID`) REFERENCES `tenant` (`tenantId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`billNo`) REFERENCES `bills` (`billNo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
