-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 12:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclerental`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Address_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `Street` varchar(35) COLLATE latin1_general_cs NOT NULL,
  `City` varchar(35) COLLATE latin1_general_cs NOT NULL,
  `Region` varchar(25) COLLATE latin1_general_cs NOT NULL,
  `Country` varchar(25) COLLATE latin1_general_cs NOT NULL,
  `Zip` char(10) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Address_ID`, `Street`, `City`, `Region`, `Country`, `Zip`) VALUES
('1', '105 Bunting Ln', 'Mankato', 'MN', 'US', '56001'),
('10', '5444 Commodo Av.', 'Broken Arrow', 'OK', 'US', '16993'),
('11', '123 Fake Street', 'Fridly', 'MN', 'US', '56789'),
('12', '507 Lake Street', 'Brookings', 'ND', 'US', '76454'),
('13', '711 Henery Ave.', 'Andover', 'CT', 'US', '15684'),
('14', '25374 Dakota Rd.', 'Clayton', 'NM', 'US', '88415'),
('15', '670 Fun Circle', 'Albany', 'CA', 'US', '90010'),
('16', '345 State St.', 'Orlando', 'FL', 'US', '16993'),
('17', '145 Hill St.', 'Abbeville', 'MS', 'US', '49595'),
('18', '7899 Hidden Way', 'Dallas', 'TX', 'US', '16993'),
('19', '767 Founders Ave.', 'Afton', 'WY', 'US', '16993'),
('2', '4573 Old Carriage Road', 'Shakopee', 'MN', 'US', '55379'),
('3', '612 Elm Street', 'Belle Plaine', 'MN', 'US', '56011'),
('4', '101 Lookout Drive', 'Mankato', 'MN', 'US', '56001'),
('5', '5643 Feugiat. St.', 'Gresham', 'OR', 'US', '40046'),
('6', '4169 Mi Road', 'South Bend', 'IN', 'US', '94731'),
('7', '250-672 Mollis Road', 'New Haven', 'CT', 'US', '83771'),
('8', '4844 Ac Rd.', 'Indianapolis', 'IN', 'US', '38252'),
('9', '6921 Proin Rd.', 'Hillsboro', 'OR', 'US', '95746');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Bill_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `TotalAmount` decimal(9,2) DEFAULT NULL,
  `BillDate` datetime NOT NULL,
  `BillStatus` char(10) COLLATE latin1_general_cs NOT NULL,
  `AmountTax` decimal(9,2) DEFAULT NULL,
  `AmountBalance` decimal(9,2) DEFAULT NULL,
  `AmountAdvance` decimal(9,2) DEFAULT NULL,
  `Discount_ID` char(10) COLLATE latin1_general_cs DEFAULT NULL,
  `Cust_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `Location_ID` char(10) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`Bill_ID`, `TotalAmount`, `BillDate`, `BillStatus`, `AmountTax`, `AmountBalance`, `AmountAdvance`, `Discount_ID`, `Cust_ID`, `Location_ID`) VALUES
('1', '28.54', '2017-04-30 00:00:00', 'Paid', '3.54', '45.00', '20.00', '1', '1', '1'),
('2', '157.13', '2017-06-29 00:00:00', 'Pending', '14.03', '178.10', '35.00', '1', '2', '1'),
('3', '215.74', '2018-02-04 00:00:00', 'Refunded', '15.75', '199.99', '0.00', '1', '4', '1'),
('4', '169.18', '2018-03-14 00:00:00', 'Paid', '12.34', '156.84', '22.00', '1', '2', '2'),
('5', '220.77', '2017-12-12 00:00:00', 'Pending', '20.00', '200.77', '0.00', '2', '3', '10'),
('6', '39.11', '2018-02-17 00:00:00', 'Paid', '34.23', '50.00', '45.12', '2', '3', '11'),
('7', '57.02', '2018-01-11 00:00:00', 'Paid', '2.45', '66.57', '12.00', '1', '1', '3'),
('8', '13.46', '2017-09-11 00:00:00', 'Paid', '34.56', '23.90', '45.00', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Book_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL,
  `SecurityDeposit` decimal(9,2) DEFAULT NULL,
  `BookStatus` char(10) COLLATE latin1_general_cs NOT NULL,
  `VIN` char(17) COLLATE latin1_general_cs NOT NULL,
  `Bill_ID` char(10) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Book_ID`, `StartDate`, `EndDate`, `SecurityDeposit`, `BookStatus`, `VIN`, `Bill_ID`) VALUES
('1', '2017-04-20 00:00:00', '2017-04-26 00:00:00', '10.00', 'Active', '1HGBH41JXMN109186', '1'),
('2', '2019-01-07 00:00:00', '2019-01-08 00:00:00', '35.00', 'Reserved', '4JCBH61JXMN102545', '2'),
('3', '2020-01-01 00:00:00', '2020-02-12 00:00:00', '0.00', 'Cancelled', '2HGBH61JXMN109145', '3'),
('4', '2015-02-03 00:00:00', '2015-03-03 00:00:00', '0.00', 'Complete', '5HKYU61DXMN215967', '5'),
('5', '2017-01-28 00:00:00', '2017-02-07 00:00:00', '0.00', 'Complete', '8YTYU61DXMN879967', '4'),
('6', '2016-11-30 00:00:00', '2016-12-04 00:00:00', '0.00', 'Complete', '8YTYU61DXMN879967', '6'),
('7', '2017-06-07 00:00:00', '2017-08-12 00:00:00', '0.00', 'Complete', '10ILU61DXMN215675', '8'),
('8', '2017-07-09 00:00:00', '2017-08-15 00:00:00', '0.00', 'Complete', '12BLN54HLKI324967', '7');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `FirstName` varchar(35) COLLATE latin1_general_cs NOT NULL,
  `MiddleName` varchar(35) COLLATE latin1_general_cs DEFAULT NULL,
  `LastName` varchar(35) COLLATE latin1_general_cs NOT NULL,
  `Status` varchar(10) COLLATE latin1_general_cs DEFAULT NULL,
  `Gender` char(10) COLLATE latin1_general_cs DEFAULT NULL,
  `DOB` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `Email` varchar(35) COLLATE latin1_general_cs DEFAULT NULL,
  `PhoneNum` char(15) COLLATE latin1_general_cs DEFAULT NULL,
  `Discount_ID` char(10) COLLATE latin1_general_cs DEFAULT NULL,
  `Address_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `LicenceNum` char(25) COLLATE latin1_general_cs NOT NULL,
  `InsuranceNum` char(25) COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `FirstName`, `MiddleName`, `LastName`, `Status`, `Gender`, `DOB`, `Email`, `PhoneNum`, `Discount_ID`, `Address_ID`, `LicenceNum`, `InsuranceNum`) VALUES
('1', 'Alec', 'Daniel', 'Vosika', 'Single', 'Male', '1996-4-27', 'Alecvosika@comcaast.net', '9522884914', '1', '1', 'W192839057381', '123456789'),
('10', 'kelly', 'Emmanuel', 'kropifko', 'Single', 'Male', '1990-2-13', 'kelly@hotmail.com', '543567890', '2', '9', 'JK556HG7789LK', '445897410'),
('11', 'Lovett', 'Peace', 'Marvin', 'Married', 'Female', '1986-10-21', 'lovett@hotmail.com', '544124534', '3', '7', 'DA556HG5567IK', '223456234'),
('12', 'Abraham', 'Moses', 'Justine', 'Single', 'Male', '1994-1-12', 'abraham@gmail.com', '675439078', '4', '7', 'LJ667GT5543MN', '564216890'),
('2', 'Levi', 'Todd', 'VonBank', 'Single', 'Male', '1996-7-28', 'levi.vonbank@mnsu.edu', '9528736423', '3', '3', 'HE736B53428TB', '758627384'),
('3', 'Jill', 'Marry', 'Smith', 'Married', 'Female', '1965-8-02', 'jill@gmail.com', '7615469876', '5', '3', 'YET64562H354J', '757463657'),
('4', 'Berry', 'Jake', 'Smith', 'Married', 'Male', '1966-1-01', 'smithdoesitall@outlook.com', '7615465363', '2', '3', 'JE736B53428TB', '635485943'),
('5', 'Mathias', 'Isiquemen', 'Ukpoma', 'Single', 'Male', '1993-1-19', 'mathias.ukpoma@mnsu.edu', '5073517489', '1', '4', 'KB645C62137HC', '478965478'),
('6', 'Kelvin', 'Parsneau', 'Ahmed', 'Single', 'Male', '1988-3-14', 'kelvinparsneau@yahoo.com', '5879652150', '2', '5', 'DC524B54258LD', '589213254'),
('7', 'Ishrat', 'Muyiwa', 'Abdulsalam', 'Married', 'Female', '1985-6-24', 'ishrat@yahoo.com', '654128792', '4', '6', 'FD425BC4387CD', '236587411'),
('8', 'Tobi', 'Makande', 'Ajimobi', 'Married', 'Male', '1993-4-30', 'tobi@yahoo.com', '556987412', '5', '7', 'HG980DK8876HU', '889745123'),
('9', 'Tom', 'Daniel', 'Allen', 'Married', 'Male', '1991-4-27', 'tom@gmail.com', '567834567', '1', '6', 'KJ890FG6678KG', '776567870');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `Discount_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `Discount` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`Discount_ID`, `Discount`) VALUES
('1', '0.00'),
('10', '0.90'),
('11', '1.00'),
('2', '0.10'),
('3', '0.20'),
('4', '0.30'),
('5', '0.40'),
('6', '0.50'),
('7', '0.60'),
('8', '0.70'),
('9', '0.80');

-- --------------------------------------------------------

--
-- Table structure for table `instock`
--

CREATE TABLE `instock` (
  `VIN` char(17) COLLATE latin1_general_cs NOT NULL,
  `Location_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `Avalible` char(10) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `instock`
--

INSERT INTO `instock` (`VIN`, `Location_ID`, `Avalible`) VALUES
('10ILU61DXMN215675', '3', 'Yes'),
('11KYU61DXMN215875', '3', 'Yes'),
('12BLN54HLKI324967', '3', 'Yes'),
('1HGBH41JXMN109186', '1', 'No'),
('2HGBH61JXMN109145', '1', 'Yes'),
('3JCBH61JXMN102545', '1', 'Yes'),
('4JCBH61JXMN102545', '1', 'Yes'),
('5HKYU61DXMN215967', '1', 'Yes'),
('6LKYU61DXMN455735', '1', 'Yes'),
('7UTYU61DXMN215638', '1', 'Yes'),
('8YTYU61DXMN879967', '11', 'Yes'),
('9YTYU61GHMN267961', '12', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `PhoneNum` char(15) COLLATE latin1_general_cs DEFAULT NULL,
  `Address_ID` char(10) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_ID`, `PhoneNum`, `Address_ID`) VALUES
('1', '9524854915', '2'),
('10', '6698745213', '17'),
('11', '1147896523', '18'),
('12', '2548879652', '19'),
('2', '5589741523', '8'),
('3', '4458793254', '10'),
('4', '9875436797', '11'),
('5', '5874412569', '12'),
('6', '3698745215', '13'),
('7', '4872541236', '14'),
('8', '5879652153', '15'),
('9', '2587463251', '16');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `Password` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `FullName` varchar(75) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `FullName`) VALUES
('admin', 'password', 'Group 6'),
('rbukralia', 'it440', 'Rajeev Bukralia');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `PaymentType` char(10) COLLATE latin1_general_cs NOT NULL,
  `TransactionNum` char(10) COLLATE latin1_general_cs NOT NULL,
  `Cust_ID` char(10) COLLATE latin1_general_cs NOT NULL,
  `Bill_ID` char(10) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_ID`, `PaymentType`, `TransactionNum`, `Cust_ID`, `Bill_ID`) VALUES
('1', 'Cash', '123456', '1', '1'),
('2', 'Credit', '123457', '2', '4'),
('3', 'Cash', '123458', '1', '7'),
('4', 'Debit', '123459', '1', '8');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VIN` char(17) COLLATE latin1_general_cs NOT NULL,
  `Year` date NOT NULL,
  `Make` varchar(25) COLLATE latin1_general_cs NOT NULL,
  `Model` varchar(25) COLLATE latin1_general_cs NOT NULL,
  `Mileage` decimal(9,2) NOT NULL,
  `Type` varchar(25) COLLATE latin1_general_cs NOT NULL,
  `DriveTrain` char(10) COLLATE latin1_general_cs NOT NULL,
  `CostPerMile` decimal(9,2) NOT NULL,
  `RegistrationNum` char(25) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VIN`, `Year`, `Make`, `Model`, `Mileage`, `Type`, `DriveTrain`, `CostPerMile`, `RegistrationNum`) VALUES
('10ILU61DXMN215675', '2010-01-01', 'Jeep', 'Wrangler', '99100.00', 'Midsize', '4WD', '5.55', '657483945'),
('11KYU61DXMN215875', '2011-01-01', 'Dodge', 'RAM', '6100.00', 'Truck', '4WD', '3.99', '768475745'),
('12BLN54HLKI324967', '2012-01-01', 'Kia', 'Forte', '7000.00', 'Compact', 'FWD', '4.22', '879568654'),
('1HGBH41JXMN109186', '1996-01-01', 'Honda', 'Civic si', '56000.00', 'Compact', 'FWD', '1.00', '192848720'),
('2HGBH61JXMN109145', '2010-01-01', 'Chevrolet', 'Silverado', '148000.00', 'Truck', '4WD', '2.50', '637283740'),
('3JCBH61JXMN102545', '2000-01-01', 'Ford', 'Focus', '8000.00', 'Compact', 'FWD', '0.99', '545278495'),
('4JCBH61JXMN102545', '2013-01-01', 'Ford', 'Explorer', '88100.00', 'SUV', '4WD', '4.07', '886594030'),
('5HKYU61DXMN215967', '2009-01-01', 'Hyundai', 'Santa Fe', '100100.00', 'SUV', 'AWD', '4.55', '977463532'),
('6LKYU61DXMN455735', '2016-01-01', 'Honda', 'Pilot', '42898.00', 'SUV', 'AWD', '3.40', '657348476'),
('7UTYU61DXMN215638', '2015-01-01', 'Toyota', 'RAV4', '65990.00', 'SUV', 'AWD', '2.32', '867464956'),
('8YTYU61DXMN879967', '2014-01-01', 'Ford', 'Mustang', '178095.00', 'Compact', 'FWD', '6.10', '756483848'),
('9YTYU61GHMN267961', '2017-01-01', 'Ford', 'Taurus', '10000.00', 'Midsize', 'FWD', '2.85', '875645372');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Address_ID`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Bill_ID`),
  ADD KEY `FK_Billing_Discount` (`Discount_ID`),
  ADD KEY `FK_Billing_Customer` (`Cust_ID`),
  ADD KEY `FK_Billing_Location` (`Location_ID`),
  ADD KEY `IX_BillDate` (`BillDate`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `FK_Booking_Vehicle` (`VIN`),
  ADD KEY `FK_Booking_Billing` (`Bill_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_ID`),
  ADD KEY `FK_Customer_Discount` (`Discount_ID`),
  ADD KEY `FK_Customer_Address` (`Address_ID`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`Discount_ID`);

--
-- Indexes for table `instock`
--
ALTER TABLE `instock`
  ADD PRIMARY KEY (`VIN`,`Location_ID`),
  ADD KEY `FK_InStock_Location` (`Location_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_ID`),
  ADD KEY `FK_Location_Address` (`Address_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`TransactionNum`) USING BTREE,
  ADD UNIQUE KEY `PK_Payment` (`TransactionNum`),
  ADD KEY `FK_Payment_Customer` (`Cust_ID`),
  ADD KEY `FK_Payment_Billing` (`Bill_ID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VIN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `FK_Billing_Customer` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`),
  ADD CONSTRAINT `FK_Billing_Discount` FOREIGN KEY (`Discount_ID`) REFERENCES `discount` (`Discount_ID`),
  ADD CONSTRAINT `FK_Billing_Location` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location_ID`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `FK_Booking_Billing` FOREIGN KEY (`Bill_ID`) REFERENCES `billing` (`Bill_ID`),
  ADD CONSTRAINT `FK_Booking_Vehicle` FOREIGN KEY (`VIN`) REFERENCES `vehicle` (`VIN`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_Customer_Address` FOREIGN KEY (`Address_ID`) REFERENCES `address` (`Address_ID`),
  ADD CONSTRAINT `FK_Customer_Discount` FOREIGN KEY (`Discount_ID`) REFERENCES `discount` (`Discount_ID`);

--
-- Constraints for table `instock`
--
ALTER TABLE `instock`
  ADD CONSTRAINT `FK_InStock_Location` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location_ID`),
  ADD CONSTRAINT `FK_InStock_Vehicle` FOREIGN KEY (`VIN`) REFERENCES `vehicle` (`VIN`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `FK_Location_Address` FOREIGN KEY (`Address_ID`) REFERENCES `address` (`Address_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_Payment_Billing` FOREIGN KEY (`Bill_ID`) REFERENCES `billing` (`Bill_ID`),
  ADD CONSTRAINT `FK_Payment_Customer` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
