-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2016 at 01:16 PM
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
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `contactNumber` int(11) NOT NULL,
  `links` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `reservationID` varchar(100) NOT NULL,
  `email_add` varchar(25) NOT NULL,
  `dateReserved` date NOT NULL,
  `timeReserved` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `civilStatus` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `houseNo` int(10) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `intAddress` varchar(100) NOT NULL,
  `idNo` varchar(100) NOT NULL,
  `passportNo` int(16) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `referredBy` varchar(100) NOT NULL,
  `nameOfSchool` varchar(100) NOT NULL,
  `nameOfHighSchool` varchar(100) NOT NULL,
  `schoolAddress` varchar(100) NOT NULL,
  `telNo` int(11) NOT NULL,
  `courseAndYear` varchar(100) NOT NULL,
  `nameOfComp` varchar(100) NOT NULL,
  `compAdd` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `natureOfBusiness` varchar(100) NOT NULL,
  `compTelNo` int(11) NOT NULL,
  `spouse` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `spouseOcc` varchar(100) NOT NULL,
  `spousePhoneNo` int(11) NOT NULL,
  `fatherOcc` varchar(100) NOT NULL,
  `fatherPhoneNo` int(11) NOT NULL,
  `motherOcc` varchar(100) NOT NULL,
  `motherPhoneNo` int(11) NOT NULL,
  `guardianOcc` varchar(100) NOT NULL,
  `guardianPhoneNo` int(11) NOT NULL,
  `healthRemarks` varchar(150) NOT NULL,
  PRIMARY KEY (`reservationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`reservationID`, `email_add`, `dateReserved`, `timeReserved`, `status`, `lastName`, `firstName`, `middleName`, `birthday`, `civilStatus`, `nationality`, `religion`, `houseNo`, `street`, `barangay`, `municipality`, `province`, `intAddress`, `idNo`, `passportNo`, `phoneNo`, `referredBy`, `nameOfSchool`, `nameOfHighSchool`, `schoolAddress`, `telNo`, `courseAndYear`, `nameOfComp`, `compAdd`, `occupation`, `natureOfBusiness`, `compTelNo`, `spouse`, `father`, `mother`, `guardian`, `spouseOcc`, `spousePhoneNo`, `fatherOcc`, `fatherPhoneNo`, `motherOcc`, `motherPhoneNo`, `guardianOcc`, `guardianPhoneNo`, `healthRemarks`) VALUES
('1', 'lebron james@yahoo.com', '2016-02-19', '10:20:00', 'pending', 'James', 'Lebron', 'Campos', '1995-03-06', 'Single', 'Filipino', 'Catholic', 23, 'Rosal', 'Malakas', 'San Carlos', 'Pangasinan', '', '2130533', 0, 927569857, '', 'SLU', 'SLU-LHS', 'Navy Base, Baguio City', 4913486, 'BSCS-4', '', '', '', '', 0, '', 'Joselito James', 'Marie James', '', '', 0, 'Doctor', 916787895, 'Teacher', 915787894, '', 0, ''),
('2', 'KrisAquino@gmail.com', '2016-02-24', '02:30:00', 'paid', 'Aquino', 'Krisanta', 'Conchita', '1992-12-12', 'Single', 'Filipino', 'Catholic', 12, 'Jasmine', 'Salapungan', 'Gerona', 'Tarlac', '', '2103476', 0, 917098759, '', 'UB', 'UB Science High School', 'Assumption Rd., Baguio City', 4914576, 'BSEE-5', '', '', '', '', 0, '', 'Manuel Aquino', 'Marissa Aquino', '', '', 0, 'Lawyer', 926345976, 'Nurse', 927985833, '', 0, ''),
('3', 'macmac@google.com', '2016-02-10', '12:23:45', 'pending', 'Yongque', 'Macray', 'Pabalan', '1996-10-07', 'Single', 'Filipino', 'INC', 14, 'Mahinahon', 'Dulong Calzada', 'San Fernando', 'La Union', '', '2139867', 0, 925689754, '', 'UP', 'TSU Laboratory High School', 'Matatalaib, Tarlac City', 4914571, 'BS Math-4', '', '', '', '', 0, '', 'Emilio Yongque', 'Rosalinda Yongque', '', '', 0, 'Seaman', 926759374, 'Teacher', 977728977, '', 0, ''),
('4', 'josephine@yahoo.com', '2016-02-24', '03:04:45', 'paid', 'Herrera', 'Josephine', 'Manalastas', '1996-12-02', 'Single', 'Filipino', 'Born Again', 10, 'Serafica', 'Malwid', 'Victoria', 'Tarlac', '', '2130744', 0, 925879654, '', 'SLU', 'TSU Laboratory High School', 'Matatalaib, Tarlac City', 4910857, 'BSCE-5', '', '', '', '', 0, '', 'Jose Herrera', 'Madilyn Herrera', '', '', 0, 'Driver', 926879453, 'Engineer', 916784825, '', 0, ''),
('5', 'jason@google.com', '2016-03-02', '01:23:50', 'pending', 'Manzano', 'Jason', 'Cabrerra', '1996-12-09', 'Single', 'Filipino', 'Catholic', 11, 'Mabango', 'Makapagtagpo', 'San Vicente', 'Isabela', '', '2130533', 0, 916535353, '', 'SLU', 'Montessori School', 'Mababanaba, Isabela', 4916868, 'BS ECE-4', '', '', '', '', 0, '', 'Lorenzo Manzano', 'Loreta Manzano', '', '', 0, 'Accountant', 926879432, 'Company Manager', 916894565, '', 0, ''),
('6', 'amielcampos@google.com', '2016-02-23', '09:34:12', 'paid', 'Campos', 'Amiel Patrick', 'Alarcio', '1996-04-19', 'Single', 'Filipino', 'INC', 90, 'Mahaba', 'Tatsulok', 'Cabanatuan', 'Nueva Ecija', '', '2126781', 0, 906123459, '', 'SLU', 'College of the Immaculate Concepcion', 'Bonifacio Street, Nueva Ecija', 4637891, 'BSIT-4', '', '', '', '', 0, '', 'Gabriel Campos', 'Berlin Campos', '', '', 0, 'Engineer', 926789432, 'Engineer', 916865748, '', 0, '');

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
  `contractId` int(15) NOT NULL,
  `tenantId` int(15) NOT NULL,
  `moveInDate` date NOT NULL,
  `terminationDate` date NOT NULL,
  `room` varchar(6) NOT NULL,
  PRIMARY KEY (`contractId`),
  KEY `TenantID` (`tenantId`),
  KEY `Room` (`room`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('2', '201', '201F', 2, 0, 'Male', 'WINDOWED'),
('2', '201', '201G', 2, 0, 'Male', 'WINDOWED'),
('2', '201', '201H', 4, 0, 'Male', 'WINDOWED'),
('2', '201', '201I', 4, 0, 'Male', 'INTERIOR'),
('2', '201', '201J', 2, 0, 'Male', 'INTERIOR'),
('2', '201', '201K', 2, 0, 'Male', 'INTERIOR'),
('2', '201', '201L', 2, 0, 'Male', 'INTERIOR'),
('2', '202', '202A', 4, 0, 'Male', 'WINDOWED'),
('2', '202', '202B', 2, 0, 'Male', 'WINDOWED'),
('2', '202', '202C', 2, 0, 'Male', 'WINDOWED'),
('2', '202', '202D', 2, 0, 'Male', 'WINDOWED'),
('2', '202', '202E', 2, 0, 'Male', 'WINDOWED'),
('2', '202', '202F', 2, 0, 'Male', 'WINDOWED'),
('2', '202', '202G', 2, 0, 'Male', 'WINDOWED'),
('2', '202', '202H', 4, 0, 'Male', 'WINDOWED'),
('2', '202', '202I', 4, 0, 'Male', 'INTERIOR'),
('2', '202', '202J', 2, 0, 'Male', 'INTERIOR'),
('2', '202', '202K', 2, 0, 'Male', 'INTERIOR'),
('2', '202', '202L', 2, 0, 'Male', 'INTERIOR'),
('3', '301', '301A', 4, 0, 'Male', 'WINDOWED'),
('3', '301', '301B', 2, 0, 'Male', 'WINDOWED'),
('3', '301', '301C', 2, 0, 'Male', 'WINDOWED'),
('3', '301', '301D', 2, 0, 'Male', 'WINDOWED'),
('3', '301', '301E', 2, 0, 'Male', 'WINDOWED'),
('3', '301', '301F', 2, 0, 'Male', 'WINDOWED'),
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
  `tenantId` int(15) NOT NULL,
  `email_add` varchar(25) NOT NULL,
  `dateReserved` date NOT NULL,
  `timeReserved` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `civilStatus` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `houseNo` int(10) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `intAddress` varchar(100) NOT NULL,
  `idNo` varchar(100) NOT NULL,
  `passportNo` int(16) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `referredBy` varchar(100) NOT NULL,
  `nameOfSchool` varchar(100) NOT NULL,
  `nameOfHighSchool` varchar(100) NOT NULL,
  `schoolAddress` varchar(100) NOT NULL,
  `telNo` int(11) NOT NULL,
  `courseAndYear` varchar(100) NOT NULL,
  `nameOfComp` varchar(100) NOT NULL,
  `compAdd` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `natureOfBusiness` varchar(100) NOT NULL,
  `compTelNo` int(11) NOT NULL,
  `spouse` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `spouseOcc` varchar(100) NOT NULL,
  `spousePhoneNo` int(11) NOT NULL,
  `fatherOcc` varchar(100) NOT NULL,
  `fatherPhoneNo` int(11) NOT NULL,
  `motherOcc` varchar(100) NOT NULL,
  `motherPhoneNo` int(11) NOT NULL,
  `guardianOcc` varchar(100) NOT NULL,
  `guardianPhoneNo` int(11) NOT NULL,
  `healthRemarks` varchar(150) NOT NULL,
  PRIMARY KEY (`tenantId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenantId`, `email_add`, `dateReserved`, `timeReserved`, `status`, `lastName`, `firstName`, `middleName`, `birthday`, `civilStatus`, `nationality`, `religion`, `houseNo`, `street`, `barangay`, `municipality`, `province`, `intAddress`, `idNo`, `passportNo`, `phoneNo`, `referredBy`, `nameOfSchool`, `nameOfHighSchool`, `schoolAddress`, `telNo`, `courseAndYear`, `nameOfComp`, `compAdd`, `occupation`, `natureOfBusiness`, `compTelNo`, `spouse`, `father`, `mother`, `guardian`, `spouseOcc`, `spousePhoneNo`, `fatherOcc`, `fatherPhoneNo`, `motherOcc`, `motherPhoneNo`, `guardianOcc`, `guardianPhoneNo`, `healthRemarks`) VALUES
(1, '', '2016-06-28', '00:00:00', '', 'Villena', 'April Joy', '', '1997-04-15', 'Single', 'Filipino', '', 77, 'National', 'Nagbunga', 'San Marcelino', 'Zambales', '', '', 0, 0, '', 'SLU', '', '', 0, 'BS Accountancy', '', '', '', '', 0, '', 'Gilbert Villena', '', '', '', 0, '', 0, '', 0, '', 0, ''),
(2, '', '2015-04-13', '00:00:00', '', 'Walser', 'Shana Angela', 'B', '1998-12-04', 'Single', '', '', 1151, '', 'Mambangan', 'San Leonardo', 'Nueva Ecija', '', '', 0, 9400821, '', 'SLU', '', '', 0, '', '', '', '', '', 0, '', '', 'Evangeline B. Walser', '', '', 0, '', 0, '', 0, '', 0, ''),
(3, '', '2014-06-20', '00:00:00', '', 'Paningbatan', 'Kurt Allen', '', '1997-12-29', 'Single', 'Filipino', '', 0, 'RMTU', 'Nagbunga', 'San Marcelino', 'Zambales', '', '', 0, 0, '', 'SLU', '', '', 0, 'BSCE', '', '', '', '', 0, '', '', '', 'Lyn Villena', '', 0, '', 0, '', 0, '', 0, ''),
(4, '', '2015-04-20', '00:00:00', '', 'Ong', 'Karl Adrielle Dave', 'G.', '1999-04-30', 'Single', 'Filipino', '', 0, '', 'San Eugenio', 'Aringay', 'La Union', '', '', 0, 0, '', 'SLU', '', '', 0, 'BSECE', '', '', '', '', 0, '', 'Reggie A. Ong', '', '', '', 0, '', 0, '', 0, '', 0, ''),
(5, 'markneilbacani@gmail.com', '2015-06-10', '00:00:00', '', 'Bacani', 'Mark Neil', 'S', '1995-09-19', 'Single', 'Filipino', 'Catholic', 0, 'Rosal', 'Sepung Calzada', 'Tarlac', 'Tarlac', '', '2130422', 0, 0, '', 'SLU', 'Tarlac State University, Laboratory School', 'Maliwalo, Tarlac City', 4917467, 'BSIT-4', '', '', '', '', 0, '', 'Manuel C. Bacani', 'Nancy S. Bacani', '', '', 0, 'Civil Engineer', 0, 'Teacher', 0, '', 0, ''),
(6, 'lorenzonoelronquillo@gmai', '2015-06-29', '00:00:00', '', 'Ronquillo', 'Lorenzo Noel', 'Credo', '1996-12-25', 'Single', 'Filipino', 'Catholic', 17, 'De Guzman', 'Kapitan Pepe', 'Cabanatuan', 'Nueva Ecija', '', '2146982', 0, 0, '', 'SLU', 'College of the Immaculate Concepcion', 'Burgos St., Nueva Ecija', 4633404, 'BSIT-3', '', '', '', '', 0, '', 'Edward Ronquillo', 'Rowena Ronquillo', '', '', 0, 'Metrobank employee', 0, 'CCWD employee', 0, '', 0, ''),
(7, '', '2015-07-19', '00:00:00', '', 'Liwanag', 'Romel Vincent Marvi II', '', '1998-08-07', 'Single', 'Filipino', '', 0, '', 'Mapalad', 'San Agustin', 'Isabela', '', '', 0, 0, '', 'SLU', '', '', 0, 'BSIT-1', '', '', '', '', 0, '', '', 'Susan P. Liwanag', '', '', 0, '', 0, '', 0, '', 0, ''),
(8, '', '2017-01-07', '00:00:00', '', 'Pablo', 'Angelo', '', '1998-09-09', 'Single', 'Filipino', '', 0, '', 'UCS', 'Santiago City', '', '', '', 0, 0, '', 'SLU', '', '', 0, 'BSCE-2', '', '', '', '', 0, '', 'Mardy Pablo', '', '', '', 0, '', 0, '', 0, '', 0, ''),
(9, '', '2014-08-05', '00:00:00', '', 'Centeno', 'Carlo Miguel', '', '1995-11-15', 'Single', 'Filipino', '', 13, '', 'Tikay', 'Malolos', 'Bulacan', '', '', 0, 0, '', 'UP', '', '', 0, 'BASS Econ', '', '', '', '', 0, '', '', 'Cynthia Centeno', '', '', 0, '', 0, '', 0, '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
