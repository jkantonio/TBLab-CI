-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:44 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tblab`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigncode`
--

CREATE TABLE `assigncode` (
  `SpecimenCode` varchar(10) NOT NULL,
  `SputumCollectionID` int(10) DEFAULT NULL,
  `DateCollected` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `WithSmearResult` varchar(10) DEFAULT NULL,
  `WithMGITFinalResult` varchar(10) DEFAULT NULL,
  `withLJFinalResult` varchar(10) DEFAULT NULL,
  `withFinalCultureResult` varchar(10) DEFAULT NULL,
  `withMGITWorkup` varchar(5) DEFAULT NULL,
  `withLJWorkUp` varchar(5) DEFAULT NULL,
  `MGITRedigested` varchar(10) DEFAULT NULL,
  `LJRedigested` varchar(10) DEFAULT NULL,
  `WithDST` varchar(10) DEFAULT NULL,
  `WithGenexpert` varchar(10) DEFAULT NULL,
  `Cancelled` tinyint(1) DEFAULT NULL,
  `ShowInReport` tinyint(1) DEFAULT NULL,
  `Locked` tinyint(1) DEFAULT NULL,
  `UserNotes` text NOT NULL,
  `ReportRemarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigncode`
--

INSERT INTO `assigncode` (`SpecimenCode`, `SputumCollectionID`, `DateCollected`, `TransactionLogID`, `WithSmearResult`, `WithMGITFinalResult`, `withLJFinalResult`, `withFinalCultureResult`, `withMGITWorkup`, `withLJWorkUp`, `MGITRedigested`, `LJRedigested`, `WithDST`, `WithGenexpert`, `Cancelled`, `ShowInReport`, `Locked`, `UserNotes`, `ReportRemarks`) VALUES
('USI00001A', 28, '2019-12-08', 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
('USI00001B', 28, '2019-12-08', 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
('USI00001C', 28, '2019-12-08', 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
('USI00002A', 33, '2019-12-08', 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
('USR00005A', 34, '2019-12-08', 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `culturefinalresultlog`
--

CREATE TABLE `culturefinalresultlog` (
  `CultureFinalResultLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `MannerOfReporting` varchar(50) DEFAULT NULL,
  `CultureFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `culturefinalresultlog`
--

INSERT INTO `culturefinalresultlog` (`CultureFinalResultLogID`, `SpecimenCode`, `MannerOfReporting`, `CultureFinalResultDate`, `TransactionLogID`) VALUES
(5, 'USI00001A', 'Positive for Mycobacterium tuberculosis complex', '2019-12-09', 59),
(6, '', 'No Mycobacterium tuberculosis complex isolated', '2019-12-10', 60);

-- --------------------------------------------------------

--
-- Table structure for table `dstresultlog`
--

CREATE TABLE `dstresultlog` (
  `DSTResultLogID` int(10) NOT NULL,
  `Streptomycin` varchar(10) DEFAULT NULL,
  `Isoniazid` varchar(10) DEFAULT NULL,
  `Rifampicin` varchar(10) DEFAULT NULL,
  `Ethambutol` varchar(10) DEFAULT NULL,
  `Pyrazinamide` varchar(10) DEFAULT NULL,
  `DSTReportDate` date DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dstresultlog`
--

INSERT INTO `dstresultlog` (`DSTResultLogID`, `Streptomycin`, `Isoniazid`, `Rifampicin`, `Ethambutol`, `Pyrazinamide`, `DSTReportDate`, `EmployeeID`, `TransactionLogID`, `WorkupRequestID`) VALUES
(4, 'sensitive', 'resistant', 'sensitive', 'sensitive', 'resistant', '2019-12-12', 222, 39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ljfinalresultlog`
--

CREATE TABLE `ljfinalresultlog` (
  `LJFinalResultLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `LJFinalResult` varchar(20) DEFAULT NULL,
  `LJFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ljfinalresultlog`
--

INSERT INTO `ljfinalresultlog` (`LJFinalResultLogID`, `SpecimenCode`, `LJFinalResult`, `LJFinalResultDate`, `TransactionLogID`) VALUES
(2, 'USI00001A', 'contaminated', '2019-12-11', 37);

-- --------------------------------------------------------

--
-- Table structure for table `mgitfinalresultlog`
--

CREATE TABLE `mgitfinalresultlog` (
  `MGITFinalResultLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `MGITFinalResult` varchar(20) DEFAULT NULL,
  `MGITFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mgitfinalresultlog`
--

INSERT INTO `mgitfinalresultlog` (`MGITFinalResultLogID`, `SpecimenCode`, `MGITFinalResult`, `MGITFinalResultDate`, `TransactionLogID`) VALUES
(2, 'USI00001A', 'positive', '2019-12-11', 38);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` varchar(10) NOT NULL,
  `PatientLastName` varchar(30) DEFAULT NULL,
  `PatientFirstName` varchar(30) DEFAULT NULL,
  `PatientMiddleName` varchar(30) DEFAULT NULL,
  `PatientBirthday` date DEFAULT NULL,
  `PatientSex` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `PatientLastName`, `PatientFirstName`, `PatientMiddleName`, `PatientBirthday`, `PatientSex`) VALUES
('1451234', 'Dela Cruz ', 'Nicolas', 'Arevalo', '1990-01-21', 'M'),
('1451235', 'Espino', 'Jessica Marie', 'San Pedro', '2014-02-01', 'F'),
('1451236', 'Gomez', 'Chrisanta', 'Alfero', '1984-08-25', 'F'),
('1451237', 'Santiago', 'Federico', 'Sanchez', '1956-12-25', 'M'),
('1461238', 'Santiago', 'Esmeralda', 'Felipe', '1956-07-14', 'F'),
('1471239', 'De Guzman', 'Patrick', 'Pelayo', '1972-03-31', 'M'),
('1484444', 'Villegas', 'John', 'Tan', '1986-04-29', 'M'),
('1484445', 'Villegas', 'Edward', 'Tan', '1988-02-11', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `pulmonaryevaluationschedulelog`
--

CREATE TABLE `pulmonaryevaluationschedulelog` (
  `PulmonaryEvaluationID` int(10) NOT NULL,
  `SputumCollectionID` int(10) NOT NULL,
  `PulmonaryEvaluationDate` date DEFAULT NULL,
  `PulmonaryEvaluationTime` varchar(15) DEFAULT NULL,
  `TransactionLogID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pulmonaryevaluationschedulelog`
--

INSERT INTO `pulmonaryevaluationschedulelog` (`PulmonaryEvaluationID`, `SputumCollectionID`, `PulmonaryEvaluationDate`, `PulmonaryEvaluationTime`, `TransactionLogID`) VALUES
(8, 28, '2019-12-11', '900', 35),
(9, 28, '0000-00-00', '800', 45),
(10, 0, '0000-00-00', '800', 46),
(11, 0, '0000-00-00', '800', 47);

-- --------------------------------------------------------

--
-- Table structure for table `smearresultlog`
--

CREATE TABLE `smearresultlog` (
  `SmearResultLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `MannerOfReporting` varchar(50) DEFAULT NULL,
  `SmearResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smearresultlog`
--

INSERT INTO `smearresultlog` (`SmearResultLogID`, `SpecimenCode`, `MannerOfReporting`, `SmearResultDate`, `TransactionLogID`) VALUES
(1, NULL, '1 AFB/100 fields', '2019-12-10', 50),
(2, NULL, '5 AFB/100 fields', '2019-12-10', 51),
(3, NULL, '5 AFB/100 fields', '2019-12-10', 52),
(4, NULL, '2 AFB/100 fields', '2019-12-10', 53),
(5, 'USI00001A', '3 AFB/100 fields', '2019-12-10', 54);

-- --------------------------------------------------------

--
-- Table structure for table `sputumcollectionschedulelog`
--

CREATE TABLE `sputumcollectionschedulelog` (
  `SputumCollectionID` int(10) NOT NULL,
  `SputumRequestID` int(10) DEFAULT NULL,
  `CollectionStartDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `CollectionStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sputumcollectionschedulelog`
--

INSERT INTO `sputumcollectionschedulelog` (`SputumCollectionID`, `SputumRequestID`, `CollectionStartDate`, `TransactionLogID`, `CollectionStatus`) VALUES
(27, 1, '2019-12-08', 23, ''),
(28, 1, '2019-12-10', 24, ''),
(29, 4, '2019-12-10', 25, ''),
(30, 4, '2019-12-25', 26, ''),
(31, 8, '2019-12-10', 27, ''),
(32, 4, '2019-12-08', 28, ''),
(33, 2, '2019-12-18', 40, ''),
(34, 4, '2019-12-18', 42, ''),
(35, 1, '2019-12-11', 44, ''),
(36, 8, '2019-12-09', 48, ''),
(37, 8, '2019-12-09', 49, '');

-- --------------------------------------------------------

--
-- Table structure for table `sputumrequestlog`
--

CREATE TABLE `sputumrequestlog` (
  `SputumRequestID` int(10) NOT NULL,
  `PatientID` varchar(10) DEFAULT NULL,
  `CollectionType` varchar(10) DEFAULT NULL,
  `NumberOfDaysCollection` int(1) DEFAULT NULL,
  `RequestedBy` varchar(10) DEFAULT NULL,
  `DateOfSputumRequest` date DEFAULT NULL,
  `Embassy` varchar(2) DEFAULT NULL,
  `RequestStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sputumrequestlog`
--

INSERT INTO `sputumrequestlog` (`SputumRequestID`, `PatientID`, `CollectionType`, `NumberOfDaysCollection`, `RequestedBy`, `DateOfSputumRequest`, `Embassy`, `RequestStatus`) VALUES
(1, '1451234', 'Initial', 3, 'Dr. EMV', '2019-11-19', 'US', 'Pending'),
(2, '1451235', 'Initial', 3, 'Dr. EMV', '2019-11-19', 'US', 'Pending'),
(3, '1451236', 'Initial', 3, 'Dr. EMV', '2019-11-19', 'US', 'Pending'),
(4, '1451237', 'Initial', 3, 'Dr. EMV', '2019-10-16', 'US', 'Scheduled'),
(5, '1451237', 'Repeat', 2, 'Dr. DM', '2019-11-19', 'US', 'Pending'),
(6, '1461238', 'Initial', 3, 'Dr. ET', '2019-11-19', 'CA', 'Pending'),
(7, '1471239', 'Initial', 3, 'Dr. ET', '2019-11-19', 'AU', 'Pending'),
(8, '1484444', 'Initial', 3, 'Dr. DM', '2019-11-19', 'NZ', 'Scheduled'),
(9, '1484445', 'Initial', 3, 'Dr. DM', '2019-11-20', 'NZ', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `startincubation`
--

CREATE TABLE `startincubation` (
  `StartIncubationID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `SampleProcessedOn` date DEFAULT NULL,
  `HasLJ` tinyint(1) DEFAULT NULL,
  `HasMGIT` tinyint(1) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `startincubation`
--

INSERT INTO `startincubation` (`StartIncubationID`, `SpecimenCode`, `SampleProcessedOn`, `HasLJ`, `HasMGIT`, `TransactionLogID`) VALUES
(4, 'USI00001A', '2019-12-11', 1, 0, 36);

-- --------------------------------------------------------

--
-- Table structure for table `transactionlist`
--

CREATE TABLE `transactionlist` (
  `TransactionListID` int(5) NOT NULL,
  `TransactionName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionlist`
--

INSERT INTO `transactionlist` (`TransactionListID`, `TransactionName`) VALUES
(1, 'Set Sputum Collection Schedule'),
(2, 'Assign Specimen Code'),
(3, 'Set Pulmonary Evaluation Sched'),
(4, 'Start Incubation'),
(5, 'Encode Smear Result'),
(6, 'Encode MGIT Final Result'),
(7, 'Encode LJ Final Result'),
(8, 'Encode Final Culture Result'),
(9, 'Request for Work-up'),
(10, 'Encode Genexpert Result'),
(11, 'Encode DST Result');

-- --------------------------------------------------------

--
-- Table structure for table `transactionlog`
--

CREATE TABLE `transactionlog` (
  `TransactionLogID` int(10) NOT NULL,
  `TransactionListID` int(5) DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `DateTimeOfTransaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `RelevantInfo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionlog`
--

INSERT INTO `transactionlog` (`TransactionLogID`, `TransactionListID`, `EmployeeID`, `DateTimeOfTransaction`, `RelevantInfo`) VALUES
(3, 1, 21, '2019-12-03 16:10:10', ''),
(4, 2, 21, '2019-12-02 16:00:00', ''),
(5, 2, 21, '2019-12-03 16:16:20', ''),
(6, 2, 21, '2019-12-03 16:17:30', ''),
(7, 3, 21, '2019-12-03 09:18:28', ''),
(8, 4, 21, '2019-12-04 08:40:46', ''),
(9, 4, 21, '2019-12-04 08:42:17', ''),
(10, 4, 21, '2019-12-04 08:43:03', ''),
(12, 7, 21, '2019-12-04 17:34:32', ''),
(13, 7, 21, '2019-12-04 17:35:24', ''),
(14, 6, 21, '2019-12-04 17:47:51', ''),
(15, 11, 21, '2019-12-04 18:31:31', ''),
(16, 11, 21, '2019-12-04 18:34:11', ''),
(17, 11, 21, '2019-12-04 18:36:01', ''),
(18, 11, 21, '2019-12-04 18:38:25', ''),
(19, 11, 21, '2019-12-04 18:39:10', ''),
(20, 1, 21, '2019-12-08 04:39:29', ''),
(21, 1, 21, '2019-12-08 11:10:54', ''),
(22, 1, 21, '2019-12-08 11:11:33', ''),
(23, 1, 21, '2019-12-08 11:18:46', ''),
(24, 1, 21, '2019-12-08 11:31:29', ''),
(25, 1, 21, '2019-12-08 11:32:03', ''),
(26, 1, 21, '2019-12-08 11:33:01', ''),
(27, 1, 21, '2019-12-08 11:33:44', ''),
(28, 1, 21, '2019-12-08 11:34:13', ''),
(29, 2, 21, '2019-12-08 11:36:30', ''),
(30, 2, 21, '2019-12-08 11:37:32', ''),
(31, 2, 21, '2019-12-08 11:37:53', ''),
(32, 2, 21, '2019-12-08 11:38:18', ''),
(33, 2, 21, '2019-12-08 11:38:32', ''),
(34, 2, 21, '2019-12-08 11:38:42', ''),
(35, 3, 21, '2019-12-08 04:39:52', ''),
(36, 4, 21, '2019-12-08 11:45:44', ''),
(37, 7, 21, '2019-12-08 11:46:01', ''),
(38, 6, 21, '2019-12-08 11:46:14', ''),
(39, 11, 21, '2019-12-08 11:46:42', ''),
(40, 1, 21, '2019-12-08 11:55:24', ''),
(41, 2, 21, '2019-12-08 11:55:40', ''),
(42, 1, 21, '2019-12-08 11:58:57', ''),
(43, 2, 21, '2019-12-08 11:59:48', ''),
(44, 1, 21, '2019-12-08 12:11:42', ''),
(45, 3, 21, '2019-12-08 05:12:36', ''),
(46, 3, 21, '2019-12-08 05:13:43', ''),
(47, 3, 21, '2019-12-08 05:13:58', ''),
(48, 1, 21, '2019-12-08 14:57:08', ''),
(49, 1, 21, '2019-12-08 15:12:17', '1484444'),
(50, 6, 21, '2019-12-08 15:50:06', '12312'),
(51, 6, 21, '2019-12-08 15:50:15', '12312'),
(52, 6, 21, '2019-12-08 15:51:31', '1451234'),
(53, 6, 21, '2019-12-08 15:51:40', '1451234'),
(54, 6, 21, '2019-12-08 15:52:39', '1451234'),
(55, 11, 21, '2019-12-09 15:19:26', 'USI00001A'),
(56, 11, 21, '2019-12-09 15:19:49', 'USI00001A'),
(57, 11, 21, '2019-12-09 15:20:12', 'USI00001A'),
(58, 11, 21, '2019-12-09 15:20:28', 'USI00001A'),
(59, 11, 21, '2019-12-09 15:22:38', '1451234'),
(60, 11, 21, '2019-12-09 15:46:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `EmployeeID` int(10) NOT NULL,
  `Password` varchar(12) DEFAULT NULL,
  `UserLastName` varchar(30) DEFAULT NULL,
  `UserFirstName` varchar(30) DEFAULT NULL,
  `UserMiddleName` varchar(30) DEFAULT NULL,
  `UserPosition` varchar(30) DEFAULT NULL,
  `UserProfession` varchar(30) DEFAULT NULL,
  `UserLicenseNumber` int(10) DEFAULT NULL,
  `UserAccountType` varchar(10) DEFAULT NULL,
  `Disabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`EmployeeID`, `Password`, `UserLastName`, `UserFirstName`, `UserMiddleName`, `UserPosition`, `UserProfession`, `UserLicenseNumber`, `UserAccountType`, `Disabled`) VALUES
(21, 'delacruzr', 'Dela Cruz', 'Raymundo', NULL, 'Pathologist', 'Pathologist', 16821, 'admin', 0),
(32, 'villarealm', 'Villareal', 'Ma. Cecilia', NULL, 'Manager', 'Medical Technologist', 33342, 'admin', 0),
(45, 'santosh', 'Santos', 'Hermie', NULL, 'Staff', 'Medical Technologist', 31699, 'basic', 0),
(168, 'mantalaj', 'Mantala', 'Jian Carli', NULL, 'Assistant Manager', 'Medical Technologist', 50538, 'admin', 0),
(208, 'domingom', 'Domingo', 'Mathew', NULL, 'Staff', 'Medical Technologist', 50496, 'basic', 0),
(222, 'andradeh', 'Andrade', 'Hazel Anne', NULL, 'Staff', 'Medical Technologist', 50465, 'basic', 0),
(345, 'punzalanc', 'Punzalan', 'Charlene', NULL, 'Staff', 'Medical Technologist', 52516, 'basic', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigncode`
--
ALTER TABLE `assigncode`
  ADD PRIMARY KEY (`SpecimenCode`);

--
-- Indexes for table `culturefinalresultlog`
--
ALTER TABLE `culturefinalresultlog`
  ADD PRIMARY KEY (`CultureFinalResultLogID`);

--
-- Indexes for table `dstresultlog`
--
ALTER TABLE `dstresultlog`
  ADD PRIMARY KEY (`DSTResultLogID`);

--
-- Indexes for table `ljfinalresultlog`
--
ALTER TABLE `ljfinalresultlog`
  ADD PRIMARY KEY (`LJFinalResultLogID`);

--
-- Indexes for table `mgitfinalresultlog`
--
ALTER TABLE `mgitfinalresultlog`
  ADD PRIMARY KEY (`MGITFinalResultLogID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `pulmonaryevaluationschedulelog`
--
ALTER TABLE `pulmonaryevaluationschedulelog`
  ADD PRIMARY KEY (`PulmonaryEvaluationID`);

--
-- Indexes for table `smearresultlog`
--
ALTER TABLE `smearresultlog`
  ADD PRIMARY KEY (`SmearResultLogID`);

--
-- Indexes for table `sputumcollectionschedulelog`
--
ALTER TABLE `sputumcollectionschedulelog`
  ADD PRIMARY KEY (`SputumCollectionID`);

--
-- Indexes for table `sputumrequestlog`
--
ALTER TABLE `sputumrequestlog`
  ADD PRIMARY KEY (`SputumRequestID`);

--
-- Indexes for table `startincubation`
--
ALTER TABLE `startincubation`
  ADD PRIMARY KEY (`StartIncubationID`);

--
-- Indexes for table `transactionlist`
--
ALTER TABLE `transactionlist`
  ADD PRIMARY KEY (`TransactionListID`);

--
-- Indexes for table `transactionlog`
--
ALTER TABLE `transactionlog`
  ADD PRIMARY KEY (`TransactionLogID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `culturefinalresultlog`
--
ALTER TABLE `culturefinalresultlog`
  MODIFY `CultureFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dstresultlog`
--
ALTER TABLE `dstresultlog`
  MODIFY `DSTResultLogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ljfinalresultlog`
--
ALTER TABLE `ljfinalresultlog`
  MODIFY `LJFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mgitfinalresultlog`
--
ALTER TABLE `mgitfinalresultlog`
  MODIFY `MGITFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pulmonaryevaluationschedulelog`
--
ALTER TABLE `pulmonaryevaluationschedulelog`
  MODIFY `PulmonaryEvaluationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `smearresultlog`
--
ALTER TABLE `smearresultlog`
  MODIFY `SmearResultLogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sputumcollectionschedulelog`
--
ALTER TABLE `sputumcollectionschedulelog`
  MODIFY `SputumCollectionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sputumrequestlog`
--
ALTER TABLE `sputumrequestlog`
  MODIFY `SputumRequestID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `startincubation`
--
ALTER TABLE `startincubation`
  MODIFY `StartIncubationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactionlist`
--
ALTER TABLE `transactionlist`
  MODIFY `TransactionListID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactionlog`
--
ALTER TABLE `transactionlog`
  MODIFY `TransactionLogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
