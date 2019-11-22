-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 06:45 AM
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
('USI00001A', 1, '2019-11-25', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `atweekslog`
--

CREATE TABLE `atweekslog` (
  `AtWeeksLogID` int(10) NOT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `AtWeeksDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cancelspecimencodelog`
--

CREATE TABLE `cancelspecimencodelog` (
  `CancelSpecimenCodeLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `CancelSpecimenCodeReason` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cancelworkuplog`
--

CREATE TABLE `cancelworkuplog` (
  `CancelWorkupLogID` int(10) NOT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `CancelWorkupReason` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `codegenerator`
--

CREATE TABLE `codegenerator` (
  `CountryCollectionType` char(5) NOT NULL,
  `Count` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codegenerator`
--

INSERT INTO `codegenerator` (`CountryCollectionType`, `Count`) VALUES
('AUI', 1),
('AUR', 1),
('CAI', 1),
('CAR', 1),
('NZI', 1),
('NZR', 1),
('USI', 1),
('USR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `culturefinalresultlog`
--

CREATE TABLE `culturefinalresultlog` (
  `CultureFinalResultLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `CultureFinalResultID` int(1) DEFAULT NULL,
  `CultureFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cultureresultlist`
--

CREATE TABLE `cultureresultlist` (
  `CultureFinalResultID` int(1) NOT NULL,
  `CultureFinalResult` varchar(10) DEFAULT NULL,
  `CultureFinalMannerOfReporting` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cultureznsmearlog`
--

CREATE TABLE `cultureznsmearlog` (
  `CultureZNSmearLogID` int(10) NOT NULL,
  `AFB` varchar(20) DEFAULT NULL,
  `ZNDescription` varchar(80) DEFAULT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `genexpertresultlist`
--

CREATE TABLE `genexpertresultlist` (
  `GenexpertResultListID` int(1) NOT NULL,
  `GenexpertResult` varchar(20) DEFAULT NULL,
  `GenexpertMannerOfReporting` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genexpertresultlog`
--

CREATE TABLE `genexpertresultlog` (
  `GenexpertResultLogID` int(10) NOT NULL,
  `GenexpertResultListID` int(1) DEFAULT NULL,
  `GenexpertResultDate` date DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ljfinalresultlog`
--

CREATE TABLE `ljfinalresultlog` (
  `LJFinalResultLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `LJFinalResult` varchar(10) DEFAULT NULL,
  `LJFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mgitfinalresultlog`
--

CREATE TABLE `mgitfinalresultlog` (
  `MGITFinalResultLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `MGITFinalResult` varchar(10) DEFAULT NULL,
  `MGITFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 1, NULL, '800', 12),
(2, 1, NULL, '800', 13),
(3, 1, NULL, '1330', 14),
(4, 1, NULL, '800', 15),
(5, 1, '2019-11-25', '800', 16),
(6, 1, '2019-11-26', '800', 17),
(7, 1, '2019-11-26', '800', 19);

-- --------------------------------------------------------

--
-- Table structure for table `redigestlog`
--

CREATE TABLE `redigestlog` (
  `RedigestLogID` int(10) NOT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `DateRedigested` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `smearresultlist`
--

CREATE TABLE `smearresultlist` (
  `SmearResultID` int(10) NOT NULL,
  `SmearResult` varchar(2) DEFAULT NULL,
  `SmearMannerOfReporting` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `smearresultlog`
--

CREATE TABLE `smearresultlog` (
  `SmearResultLogID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `SmearResultID` int(10) DEFAULT NULL,
  `SmearResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 8, '2019-11-18', 1, 'Pending');

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

-- --------------------------------------------------------

--
-- Table structure for table `testlist`
--

CREATE TABLE `testlist` (
  `TestListID` int(2) NOT NULL,
  `TestName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testlist`
--

INSERT INTO `testlist` (`TestListID`, `TestName`) VALUES
(1, 'Genexpert'),
(2, 'Drug Susceptibility Test');

-- --------------------------------------------------------

--
-- Table structure for table `testlog`
--

CREATE TABLE `testlog` (
  `TestLogID` int(10) NOT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `TestResult` varchar(20) DEFAULT NULL,
  `TestResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `DateTimeOfTransaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionlog`
--

INSERT INTO `transactionlog` (`TransactionLogID`, `TransactionListID`, `EmployeeID`, `DateTimeOfTransaction`) VALUES
(1, 1, 168, '2019-11-19 20:38:00'),
(6, 1, 21, '2019-11-22 16:00:00'),
(8, 1, 21, '2019-11-19 16:00:00'),
(9, 1, 21, '0000-00-00 00:00:00'),
(10, 1, 21, '0000-00-00 00:00:00'),
(11, 1, 21, '0000-00-00 00:00:00'),
(12, 3, NULL, '2019-11-21 21:33:15'),
(13, 3, 21, '2019-11-21 21:34:49'),
(14, 3, 21, '2019-11-21 21:35:05'),
(15, 3, 21, '2019-11-21 21:38:36'),
(16, 3, 21, '2019-11-21 21:40:37'),
(17, 3, 21, '2019-11-21 21:43:51'),
(18, 1, 21, '2019-11-25 16:00:00'),
(19, 3, 21, '2019-11-21 21:47:42');

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

-- --------------------------------------------------------

--
-- Table structure for table `workuprequest`
--

CREATE TABLE `workuprequest` (
  `WorkupRequestID` int(10) NOT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `TestListID` int(2) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `RequestDone` varchar(10) DEFAULT NULL,
  `MediaType` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigncode`
--
ALTER TABLE `assigncode`
  ADD PRIMARY KEY (`SpecimenCode`);

--
-- Indexes for table `atweekslog`
--
ALTER TABLE `atweekslog`
  ADD PRIMARY KEY (`AtWeeksLogID`);

--
-- Indexes for table `cancelspecimencodelog`
--
ALTER TABLE `cancelspecimencodelog`
  ADD PRIMARY KEY (`CancelSpecimenCodeLogID`);

--
-- Indexes for table `cancelworkuplog`
--
ALTER TABLE `cancelworkuplog`
  ADD PRIMARY KEY (`CancelWorkupLogID`);

--
-- Indexes for table `codegenerator`
--
ALTER TABLE `codegenerator`
  ADD PRIMARY KEY (`CountryCollectionType`);

--
-- Indexes for table `culturefinalresultlog`
--
ALTER TABLE `culturefinalresultlog`
  ADD PRIMARY KEY (`CultureFinalResultLogID`);

--
-- Indexes for table `cultureresultlist`
--
ALTER TABLE `cultureresultlist`
  ADD PRIMARY KEY (`CultureFinalResultID`);

--
-- Indexes for table `cultureznsmearlog`
--
ALTER TABLE `cultureznsmearlog`
  ADD PRIMARY KEY (`CultureZNSmearLogID`);

--
-- Indexes for table `dstresultlog`
--
ALTER TABLE `dstresultlog`
  ADD PRIMARY KEY (`DSTResultLogID`);

--
-- Indexes for table `genexpertresultlist`
--
ALTER TABLE `genexpertresultlist`
  ADD PRIMARY KEY (`GenexpertResultListID`);

--
-- Indexes for table `genexpertresultlog`
--
ALTER TABLE `genexpertresultlog`
  ADD PRIMARY KEY (`GenexpertResultLogID`);

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
-- Indexes for table `redigestlog`
--
ALTER TABLE `redigestlog`
  ADD PRIMARY KEY (`RedigestLogID`);

--
-- Indexes for table `smearresultlist`
--
ALTER TABLE `smearresultlist`
  ADD PRIMARY KEY (`SmearResultID`);

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
-- Indexes for table `testlist`
--
ALTER TABLE `testlist`
  ADD PRIMARY KEY (`TestListID`);

--
-- Indexes for table `testlog`
--
ALTER TABLE `testlog`
  ADD PRIMARY KEY (`TestLogID`);

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
-- Indexes for table `workuprequest`
--
ALTER TABLE `workuprequest`
  ADD PRIMARY KEY (`WorkupRequestID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atweekslog`
--
ALTER TABLE `atweekslog`
  MODIFY `AtWeeksLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cancelspecimencodelog`
--
ALTER TABLE `cancelspecimencodelog`
  MODIFY `CancelSpecimenCodeLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cancelworkuplog`
--
ALTER TABLE `cancelworkuplog`
  MODIFY `CancelWorkupLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `culturefinalresultlog`
--
ALTER TABLE `culturefinalresultlog`
  MODIFY `CultureFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cultureresultlist`
--
ALTER TABLE `cultureresultlist`
  MODIFY `CultureFinalResultID` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cultureznsmearlog`
--
ALTER TABLE `cultureznsmearlog`
  MODIFY `CultureZNSmearLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dstresultlog`
--
ALTER TABLE `dstresultlog`
  MODIFY `DSTResultLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genexpertresultlog`
--
ALTER TABLE `genexpertresultlog`
  MODIFY `GenexpertResultLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ljfinalresultlog`
--
ALTER TABLE `ljfinalresultlog`
  MODIFY `LJFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mgitfinalresultlog`
--
ALTER TABLE `mgitfinalresultlog`
  MODIFY `MGITFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pulmonaryevaluationschedulelog`
--
ALTER TABLE `pulmonaryevaluationschedulelog`
  MODIFY `PulmonaryEvaluationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `redigestlog`
--
ALTER TABLE `redigestlog`
  MODIFY `RedigestLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `smearresultlog`
--
ALTER TABLE `smearresultlog`
  MODIFY `SmearResultLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sputumcollectionschedulelog`
--
ALTER TABLE `sputumcollectionschedulelog`
  MODIFY `SputumCollectionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sputumrequestlog`
--
ALTER TABLE `sputumrequestlog`
  MODIFY `SputumRequestID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `startincubation`
--
ALTER TABLE `startincubation`
  MODIFY `StartIncubationID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testlist`
--
ALTER TABLE `testlist`
  MODIFY `TestListID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testlog`
--
ALTER TABLE `testlog`
  MODIFY `TestLogID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactionlist`
--
ALTER TABLE `transactionlist`
  MODIFY `TransactionListID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactionlog`
--
ALTER TABLE `transactionlog`
  MODIFY `TransactionLogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `workuprequest`
--
ALTER TABLE `workuprequest`
  MODIFY `WorkupRequestID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
