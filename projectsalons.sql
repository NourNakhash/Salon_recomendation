-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 26, 2022 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsalons`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoinmentID` int(11) NOT NULL,
  `SalonID` int(11) NOT NULL,
  `appointmentDate` date NOT NULL,
  `appointmentTime` time NOT NULL,
  `Service_ID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `CustomerPhone` varchar(45) NOT NULL,
  `Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoinmentID`, `SalonID`, `appointmentDate`, `appointmentTime`, `Service_ID`, `CustomerID`, `CustomerPhone`, `Status`) VALUES
(4, 1, '2022-08-09', '11:30:00', 1, 318047123, '0538719087', NULL),
(5, 1, '2022-08-17', '13:00:00', 1, 351864123, '0527814951', NULL),
(6, 1, '2022-08-08', '13:30:00', 1, 439837610, '0539876512', NULL),
(7, 1, '2022-08-08', '11:30:00', 1, 361823490, '0543987126', NULL),
(9, 1, '2022-08-08', '16:00:00', 1, 200817628, '0547779080', NULL),
(10, 1, '2022-08-10', '18:00:00', 1, 210018723, '0546677123', NULL),
(12, 24, '2022-08-09', '16:00:00', 2, 333128718, '0528989761', NULL),
(14, 23, '2022-08-16', '17:00:00', 2, 298167612, '0538712908', NULL),
(26, 37, '2022-08-17', '10:30:00', 3, 200987612, '054909812', NULL),
(28, 1, '2022-08-23', '12:35:00', 1, 123476231, '0537638761', NULL),
(32, 44, '0000-00-00', '11:00:00', 4, 271098712, '0529871209', NULL),
(33, 57, '0000-00-00', '15:10:00', 5, 200817628, '0547779080', NULL),
(34, 38, '0000-00-00', '00:30:00', 3, 200817628, '0547779080', NULL),
(37, 49, '0000-00-00', '16:00:00', 4, 298167612, '0538712908', NULL),
(43, 1, '2022-08-25', '14:30:00', 1, 123476231, '0537638761', NULL),
(44, 24, '2022-08-30', '11:30:00', 2, 123476231, '0537638761', NULL),
(45, 50, '2022-08-31', '12:30:00', 4, 345098127, '0538713635', NULL),
(47, 51, '2022-09-01', '13:30:00', 4, 123476231, '0537638761', NULL),
(48, 10, '2022-09-02', '12:30:00', 1, 345123764, '0505413872', NULL),
(49, 34, '2022-09-05', '16:10:00', 3, 345123764, '0505413872', NULL),
(50, 28, '2022-08-30', '15:31:00', 2, 333128718, '05444714857', NULL),
(51, 39, '2022-09-04', '14:30:00', 3, 351864123, '0527814951', NULL),
(52, 7, '2022-08-29', '16:00:00', 1, 348190826, '0509120841', NULL),
(53, 61, '2022-09-06', '15:30:00', 5, 348190826, '0509120841', NULL),
(54, 48, '2022-09-01', '11:30:00', 4, 348190826, '0509120841', NULL),
(55, 38, '2022-09-04', '16:30:00', 3, 348190826, '0509120841', NULL),
(56, 18, '2022-08-30', '17:30:00', 2, 345098127, '0538713635', NULL),
(57, 10, '2022-09-07', '18:30:00', 1, 345098127, '0538713635', NULL),
(58, 20, '2022-08-29', '16:30:00', 2, 318047123, '0538719087', NULL),
(59, 47, '2022-09-06', '16:30:00', 4, 318047123, '0538719087', NULL),
(60, 44, '2022-08-29', '18:00:00', 4, 439837610, '0539876512', NULL),
(61, 38, '2022-09-01', '23:40:00', 3, 439837610, '0539876512', NULL),
(62, 11, '2022-08-29', '13:30:00', 1, 325678999, '054990912', NULL),
(63, 22, '2022-08-30', '17:00:00', 2, 123476231, '0537638761', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_ID` int(11) NOT NULL,
  `CustomerName` varchar(60) NOT NULL,
  `CustomerPhone` varchar(45) NOT NULL,
  `CustomerRegion` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `role_type` varchar(10) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_ID`, `CustomerName`, `CustomerPhone`, `CustomerRegion`, `Password`, `role_type`) VALUES
(123476231, 'Dan', '0537638761', 'South', '123476231', 'customer'),
(200817628, 'Moran', '0547779080', 'Center', '555123', 'customer'),
(200987612, 'basma', '0549098120', 'Center', '808090', 'customer'),
(210018723, 'Mai', '0546677123', 'Center', '0981234', 'customer'),
(271098712, 'Ashli', '0529871209', 'Center', '66606123', 'customer'),
(298167612, 'Jake', '0538712908', 'North', '776776', 'customer'),
(318047123, 'Jan', '0538719087', 'Center', '661236', 'customer'),
(325678999, 'Sara', '054990912', 'North', '306090', 'customer'),
(333128718, 'adam ', '05444714857', 'South', '999199', 'customer'),
(345098127, 'Mark', '0538713635', 'North', '87156431', 'customer'),
(345123764, 'Adi', '0505413872', 'north', '8765123', 'customer'),
(348190826, 'Beke', '0509120841', 'Center', '127833', 'customer'),
(351864123, 'layla', '0527814951', 'Center', '76771234', 'customer'),
(356981253, 'lea', '0508080371', 'Center', '666123', 'customer'),
(361823490, 'Jenny', '0543987126', 'North', '666123', 'customer'),
(439837610, 'Sara', '0539876512', 'Center', '12340987', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `manger`
--

CREATE TABLE `manger` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Salon_Id` int(11) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'businessowner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manger`
--

INSERT INTO `manger` (`ID`, `Name`, `Salon_Id`, `phone`, `password`, `role`) VALUES
(123476231, 'Dan', 18, '0537638761', '0537638761', 'businessowner'),
(230719461, 'Mark', 24, '0549090321', '100100', 'businessowner'),
(317056493, 'Dany', 1, '0564328764', '23456', 'businessowner');

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

CREATE TABLE `salon` (
  `SalonID` int(11) NOT NULL,
  `SalonName` varchar(45) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `Region` varchar(45) NOT NULL,
  `City` varchar(60) NOT NULL,
  `OpeningTIme` time(2) NOT NULL,
  `ClosingTime` time(2) NOT NULL,
  `Rating` decimal(10,1) DEFAULT NULL,
  `Phonenumber` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`SalonID`, `SalonName`, `ServiceId`, `Region`, `City`, `OpeningTIme`, `ClosingTime`, `Rating`, `Phonenumber`) VALUES
(1, 'Emi lee-Beauty salon', 1, 'Center', 'Tel Aviv', '10:00:00.00', '20:00:00.00', '4.6', '0502766290'),
(2, 'IILA BERLIN ', 1, 'Center', 'Petah Tikva', '09:00:00.00', '21:00:00.00', '4.6', '07776704640'),
(3, 'Sharoomba Cosmetics', 1, 'Center', 'Tel Aviv', '09:00:00.00', '21:00:00.00', '4.8', '0547506557'),
(4, 'Orchid', 1, 'Center', 'Kfar Saba', '09:00:00.00', '20:00:00.00', '4.7', '0747691289'),
(5, 'Hani Cosmetics ', 1, 'Center', 'Kiryat Malakhi', '09:00:00.00', '19:00:00.00', '4.3', '088587891'),
(6, 'ReFace', 1, 'Center', 'Beit Jann', '10:00:00.00', '20:00:00.00', '5.0', '088587891'),
(7, 'M.K.Beauty', 1, 'Center', 'Rishon Lezion', '09:00:00.00', '20:00:00.00', '5.0', '0509887199'),
(8, 'Batya Care & Beauty ', 1, 'North', 'Nahariya', '09:00:00.00', '21:00:00.00', '4.9', '046802828'),
(9, 'Dr Beauty ', 1, 'North', 'Kiryat Bialik', '08:30:00.00', '20:00:00.00', '4.7', '0527863873'),
(10, 'Spring studio', 1, 'North', 'Haifa', '09:00:00.00', '20:00:00.00', '4.9', '05057774045'),
(11, 'Helenayz', 1, 'North', 'Haifa', '08:00:00.00', '21:30:00.00', '5.0', '0585596355'),
(13, 'Roz Clinic', 1, 'South', 'Be\'er Sheva', '10:00:00.00', '19:00:00.00', '4.8', '086513032'),
(14, 'Yullia', 1, 'South', 'Jerusalem', '09:00:00.00', '19:00:00.00', '4.3', '0547184856'),
(15, 'Flori Beauty Center', 1, 'South', 'Yeruham', '09:00:00.00', '20:00:00.00', '5.0', '0545483884'),
(16, 'Valery Secret', 1, 'South', 'Be\'er Sheva', '10:00:00.00', '17:00:00.00', '4.9', '0544703349'),
(17, 'Zohra', 1, 'South', 'Kiryat Gat', '08:30:00.00', '20:30:00.00', '5.0', '086810707'),
(18, 'Elvins', 2, 'North', 'Kiryat Motzkin', '09:00:00.00', '20:00:00.00', '4.8', '0525211970'),
(19, 'Weins', 2, 'North', 'Haifa', '12:00:00.00', '21:00:00.00', '4.9', '046016383'),
(20, 'Carmel Hair Design', 2, 'Center', 'Netanya', '10:00:00.00', '19:00:00.00', '4.9', '0543320377'),
(21, 'Aviv Gaby ', 2, 'North', 'Karmiel', '09:00:00.00', '20:00:00.00', '4.8', '0526888914'),
(22, 'Amit Marima', 2, 'North', 'Kiryat Motzkin', '10:00:00.00', '20:00:00.00', '4.9', '0526701529'),
(23, 'Ringo', 2, 'North', 'Haifa', '09:00:00.00', '00:00:00.00', '5.0', '0543015202'),
(24, 'Barberia', 2, 'Center', 'Tel Aviv', '11:00:00.00', '20:00:00.00', '4.5', '0507744287'),
(25, 'STAV', 2, 'Center', 'Rosh HaAyin', '07:30:00.00', '22:00:00.00', '5.0', '0503422667'),
(26, 'Jamili', 2, 'Center', 'Tel Aviv', '10:00:00.00', '20:00:00.00', '4.7', '036767609'),
(27, 'Baruch Elizarov', 2, 'South', 'Jerusalem', '09:30:00.00', '20:00:00.00', '4.9', '0523658488'),
(28, 'STERN', 2, 'South', 'Beersheba', '10:00:00.00', '20:00:00.00', '5.0', '0587061308'),
(29, 'ROEE BEN-AMI', 2, 'South', 'Jerusalem', '08:00:00.00', '19:00:00.00', '4.6', '025671688'),
(30, 'Villa B', 2, 'South', 'Beersheba', '09:00:00.00', '20:00:00.00', '4.9', '0523121702'),
(31, 'Mika\'s nails', 3, 'North', 'Haifa', '09:00:00.00', '19:00:00.00', '4.9', '0523220492'),
(32, 'Morelle', 3, 'North', 'Haifa', '08:00:00.00', '19:00:00.00', '5.0', '0506961303'),
(34, 'Onno Nails', 3, 'North', 'Haifa', '09:00:00.00', '19:00:00.00', '4.7', '0522829910'),
(35, 'Ehud Elbaz ', 3, 'North', 'Haifa', '08:00:00.00', '19:00:00.00', '4.9', '0522699630'),
(36, 'C.B Nails', 3, 'Center', 'Tel Aviv', '10:00:00.00', '20:00:00.00', '4.5', '0527466850'),
(37, 'Ida Nails', 3, 'Center', 'Tel Aviv', '09:30:00.00', '19:00:00.00', '4.8', '0587937197'),
(38, 'DANDA', 3, 'Center', 'Kiryat Ono', '09:00:00.00', '20:00:00.00', '4.8', '039169060'),
(39, 'E.mi', 3, 'Center', 'Netanya', '10:00:00.00', '17:00:00.00', '5.0', '0509200411'),
(40, 'Noor Nails', 3, 'South', 'Hura', '09:00:00.00', '19:00:00.00', '5.0', '0545889083'),
(41, 'Nofar Nails', 3, 'South', 'Beersheba', '08:00:00.00', '19:00:00.00', '5.0', '0504448174'),
(43, 'Orly ', 3, 'South', 'Beersheba', '08:00:00.00', '20:00:00.00', '3.3', '0506256283'),
(44, 'Horizon', 4, 'Center', 'Tel Aviv', '09:00:00.00', '21:00:00.00', '4.8', '0779969094'),
(45, 'Hamam Spa Raphael', 4, 'Center', 'Rehovot', '09:00:00.00', '20:00:00.00', '4.4', '089448010'),
(46, 'Tomoko Japanese Spa', 4, 'Center', 'Herzliya', '09:00:00.00', '22:00:00.00', '4.3', '099552365'),
(47, 'Mantra Spa', 4, 'Center', 'Ra\'anana', '09:30:00.00', '21:00:00.00', '4.5', '097406506'),
(48, 'Caesar Spa', 4, 'North', 'Ha-Migdal', '09:00:00.00', '17:00:00.00', '4.4', '046266669'),
(49, 'Flamingo Spa', 4, 'North', 'Haifa', '09:00:00.00', '18:00:00.00', '4.5', '0528830083'),
(50, 'Share Spa', 4, 'North', 'Haifa', '09:00:00.00', '21:00:00.00', '3.4', '0737947940'),
(51, 'Varga', 4, 'South', 'Beersheba', '10:00:00.00', '21:00:00.00', '4.7', '0723935368'),
(52, 'Spa Barak ', 4, 'South', 'Jerusalem', '09:00:00.00', '20:00:00.00', '4.0', '025306666'),
(53, 'Spa Guerlain ', 4, 'South', 'Jerusalem', '07:00:00.00', '19:00:00.00', '3.7', '025423377'),
(57, 'Ortal Edri', 5, 'North', 'Afula', '09:00:00.00', '19:00:00.00', '4.7', '046407757'),
(58, 'SHIMI AZUT', 5, 'Center', 'Herzliya', '08:30:00.00', '19:00:00.00', '4.9', '0548138383'),
(59, 'Ziv Hair Design ', 5, 'Center', 'Hod Hasharon', '09:30:00.00', '19:00:00.00', '4.5', '097415241'),
(60, 'Ran Stone', 5, 'Center', 'Netanya', '09:00:00.00', '19:30:00.00', '4.7', '098870806'),
(61, 'Ronit Salon', 5, 'Center', 'Ra\'anana', '10:00:00.00', '20:00:00.00', '3.7', '0522444281'),
(62, 'Silk Salon', 5, 'South', 'Efrat', '09:00:00.00', '20:00:00.00', '5.0', '0587079976'),
(63, 'VG Hair Design', 5, 'South', 'Beersheba', '09:00:00.00', '20:00:00.00', '4.8', '0774401576'),
(64, 'Edward', 5, 'South', 'Beersheba', '09:00:00.00', '19:00:00.00', '4.7', '0546937552');

-- --------------------------------------------------------

--
-- Table structure for table `salonservice`
--

CREATE TABLE `salonservice` (
  `ServiceID` int(11) NOT NULL,
  `ServiceName` varchar(45) NOT NULL,
  `ServicePrice` int(11) DEFAULT NULL,
  `ServiceTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salonservice`
--

INSERT INTO `salonservice` (`ServiceID`, `ServiceName`, `ServicePrice`, `ServiceTime`) VALUES
(1, 'Beauty', NULL, '00:00:00'),
(2, 'Barber', NULL, '00:00:00'),
(3, 'Nails', NULL, '00:00:00'),
(4, 'Spa', NULL, '00:00:00'),
(5, 'Hair', NULL, '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoinmentID`),
  ADD KEY `SalonID_idx` (`SalonID`),
  ADD KEY `CustomerID_idx` (`CustomerID`),
  ADD KEY `ServiceID_idx` (`Service_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Salonid_idx` (`Salon_Id`);

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`SalonID`),
  ADD KEY `ServiceID_idx` (`ServiceId`);

--
-- Indexes for table `salonservice`
--
ALTER TABLE `salonservice`
  ADD PRIMARY KEY (`ServiceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoinmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `CustomerID` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`customer_ID`),
  ADD CONSTRAINT `SalonID` FOREIGN KEY (`SalonID`) REFERENCES `salon` (`SalonID`),
  ADD CONSTRAINT `Service_ID` FOREIGN KEY (`Service_ID`) REFERENCES `salonservice` (`ServiceID`);

--
-- Constraints for table `manger`
--
ALTER TABLE `manger`
  ADD CONSTRAINT `Salon_Id` FOREIGN KEY (`Salon_Id`) REFERENCES `salon` (`SalonID`);

--
-- Constraints for table `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `Serviceid` FOREIGN KEY (`ServiceId`) REFERENCES `salonservice` (`ServiceID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
