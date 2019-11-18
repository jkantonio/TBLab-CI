-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tblis
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `assigncode`
--

DROP TABLE IF EXISTS `assigncode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  PRIMARY KEY (`SpecimenCode`),
  KEY `SputumCollectionID` (`SputumCollectionID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assigncode`
--

LOCK TABLES `assigncode` WRITE;
/*!40000 ALTER TABLE `assigncode` DISABLE KEYS */;
/*!40000 ALTER TABLE `assigncode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `atweekslog`
--

DROP TABLE IF EXISTS `atweekslog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atweekslog` (
  `AtWeeksLogID` int(10) NOT NULL AUTO_INCREMENT,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `AtWeeksDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`AtWeeksLogID`),
  KEY `WorkupRequestID` (`WorkupRequestID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atweekslog`
--

LOCK TABLES `atweekslog` WRITE;
/*!40000 ALTER TABLE `atweekslog` DISABLE KEYS */;
/*!40000 ALTER TABLE `atweekslog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cancelspecimencodelog`
--

DROP TABLE IF EXISTS `cancelspecimencodelog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cancelspecimencodelog` (
  `CancelSpecimenCodeLog` int(10) NOT NULL AUTO_INCREMENT,
  `SputumCollectionID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `CancelSpecimenCodeReason` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`CancelSpecimenCodeLog`),
  KEY `SputumCollectionID` (`SputumCollectionID`,`TransactionLogID`,`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancelspecimencodelog`
--

LOCK TABLES `cancelspecimencodelog` WRITE;
/*!40000 ALTER TABLE `cancelspecimencodelog` DISABLE KEYS */;
/*!40000 ALTER TABLE `cancelspecimencodelog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cancelworkuplog`
--

DROP TABLE IF EXISTS `cancelworkuplog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cancelworkuplog` (
  `CancelWorkupLogID` int(10) NOT NULL AUTO_INCREMENT,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `CancelWorkupReason` varchar(80) NOT NULL,
  PRIMARY KEY (`CancelWorkupLogID`),
  KEY `WorkupRequestID` (`WorkupRequestID`,`TransactionLogID`,`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancelworkuplog`
--

LOCK TABLES `cancelworkuplog` WRITE;
/*!40000 ALTER TABLE `cancelworkuplog` DISABLE KEYS */;
/*!40000 ALTER TABLE `cancelworkuplog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codegenerator`
--

DROP TABLE IF EXISTS `codegenerator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codegenerator` (
  `CountryCollectionType` char(5) NOT NULL,
  `Count` int(5) DEFAULT NULL,
  PRIMARY KEY (`CountryCollectionType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codegenerator`
--

LOCK TABLES `codegenerator` WRITE;
/*!40000 ALTER TABLE `codegenerator` DISABLE KEYS */;
/*!40000 ALTER TABLE `codegenerator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `culturefinalresultlog`
--

DROP TABLE IF EXISTS `culturefinalresultlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `culturefinalresultlog` (
  `CultureFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `CultureFinalResultID` int(1) DEFAULT NULL,
  `CultureFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`CultureFinalResultLogID`),
  KEY `SpecimenCode` (`SpecimenCode`,`CultureFinalResultID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `culturefinalresultlog`
--

LOCK TABLES `culturefinalresultlog` WRITE;
/*!40000 ALTER TABLE `culturefinalresultlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `culturefinalresultlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cultureresultlist`
--

DROP TABLE IF EXISTS `cultureresultlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cultureresultlist` (
  `CultureFinalResultID` int(1) NOT NULL AUTO_INCREMENT,
  `CultureFinalResult` varchar(10) DEFAULT NULL,
  `CultureFinalMannerOfReporting` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`CultureFinalResultID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cultureresultlist`
--

LOCK TABLES `cultureresultlist` WRITE;
/*!40000 ALTER TABLE `cultureresultlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `cultureresultlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cultureznsmearlog`
--

DROP TABLE IF EXISTS `cultureznsmearlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cultureznsmearlog` (
  `CultureZNSmearLogID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `AFB` varchar(20) DEFAULT NULL,
  `ZNDescription` varchar(80) DEFAULT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`CultureZNSmearLogID`),
  KEY `SpecimenCode` (`SpecimenCode`,`WorkupRequestID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cultureznsmearlog`
--

LOCK TABLES `cultureznsmearlog` WRITE;
/*!40000 ALTER TABLE `cultureznsmearlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `cultureznsmearlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dstresultlog`
--

DROP TABLE IF EXISTS `dstresultlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dstresultlog` (
  `DSTResultLogID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `Streptomycin` varchar(10) DEFAULT NULL,
  `Isoniazid` varchar(10) DEFAULT NULL,
  `Rifampicin` varchar(10) DEFAULT NULL,
  `Ethambutol` varchar(10) DEFAULT NULL,
  `Pyrazinamide` varchar(10) DEFAULT NULL,
  `DSTReportDate` date DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL,
  PRIMARY KEY (`DSTResultLogID`),
  KEY `EmployeeID` (`EmployeeID`,`TransactionLogID`,`WorkupRequestID`),
  KEY `SpecimenCode` (`SpecimenCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dstresultlog`
--

LOCK TABLES `dstresultlog` WRITE;
/*!40000 ALTER TABLE `dstresultlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `dstresultlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genexpertresultlist`
--

DROP TABLE IF EXISTS `genexpertresultlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genexpertresultlist` (
  `GenexpertResultListID` int(1) NOT NULL,
  `GenexpertResult` varchar(20) DEFAULT NULL,
  `GenexpertMannerOfReporting` text DEFAULT NULL,
  PRIMARY KEY (`GenexpertResultListID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genexpertresultlist`
--

LOCK TABLES `genexpertresultlist` WRITE;
/*!40000 ALTER TABLE `genexpertresultlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `genexpertresultlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genexpertresultlog`
--

DROP TABLE IF EXISTS `genexpertresultlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genexpertresultlog` (
  `GenexpertResultLogID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `GenexpertResultListID` int(1) DEFAULT NULL,
  `GenexpertResultDate` date DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `WorkupRequestID` int(10) DEFAULT NULL,
  PRIMARY KEY (`GenexpertResultLogID`),
  KEY `SpecimenCode` (`SpecimenCode`,`GenexpertResultListID`,`EmployeeID`,`TransactionLogID`,`WorkupRequestID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genexpertresultlog`
--

LOCK TABLES `genexpertresultlog` WRITE;
/*!40000 ALTER TABLE `genexpertresultlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `genexpertresultlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ljfinalresultlog`
--

DROP TABLE IF EXISTS `ljfinalresultlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ljfinalresultlog` (
  `LJFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `LJFinalResult` varchar(10) DEFAULT NULL,
  `LJFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`LJFinalResultLogID`),
  KEY `SpecimenCode` (`SpecimenCode`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ljfinalresultlog`
--

LOCK TABLES `ljfinalresultlog` WRITE;
/*!40000 ALTER TABLE `ljfinalresultlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `ljfinalresultlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mgitfinalresultlog`
--

DROP TABLE IF EXISTS `mgitfinalresultlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mgitfinalresultlog` (
  `MGITFinalResultLogID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `MGITFinalResult` varchar(10) DEFAULT NULL,
  `MGITFinalResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`MGITFinalResultLogID`),
  KEY `SpecimenCode` (`SpecimenCode`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mgitfinalresultlog`
--

LOCK TABLES `mgitfinalresultlog` WRITE;
/*!40000 ALTER TABLE `mgitfinalresultlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `mgitfinalresultlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `PatientID` varchar(10) NOT NULL,
  `PatientLastName` varchar(30) DEFAULT NULL,
  `PatientFirstName` varchar(30) DEFAULT NULL,
  `PatientMiddleName` varchar(30) DEFAULT NULL,
  `PatientBirthday` date DEFAULT NULL,
  `PatientSex` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`PatientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pulmonaryevaluationschedulelog`
--

DROP TABLE IF EXISTS `pulmonaryevaluationschedulelog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pulmonaryevaluationschedulelog` (
  `PulmonaryEvaluationID` int(10) NOT NULL AUTO_INCREMENT,
  `PulmonaryEvaluationDate` date DEFAULT NULL,
  `PulmonaryEvaluationTime` varchar(15) DEFAULT NULL,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`PulmonaryEvaluationID`),
  KEY `SpecimenCode` (`SpecimenCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pulmonaryevaluationschedulelog`
--

LOCK TABLES `pulmonaryevaluationschedulelog` WRITE;
/*!40000 ALTER TABLE `pulmonaryevaluationschedulelog` DISABLE KEYS */;
/*!40000 ALTER TABLE `pulmonaryevaluationschedulelog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redigestlog`
--

DROP TABLE IF EXISTS `redigestlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `redigestlog` (
  `RedigestLogID` int(10) NOT NULL AUTO_INCREMENT,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `DateRedigested` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`RedigestLogID`),
  KEY `WorkupRequestID` (`WorkupRequestID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redigestlog`
--

LOCK TABLES `redigestlog` WRITE;
/*!40000 ALTER TABLE `redigestlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `redigestlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smearresultlist`
--

DROP TABLE IF EXISTS `smearresultlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smearresultlist` (
  `SmearResultID` int(10) NOT NULL,
  `SmearResult` varchar(2) DEFAULT NULL,
  `SmearMannerOfReporting` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`SmearResultID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smearresultlist`
--

LOCK TABLES `smearresultlist` WRITE;
/*!40000 ALTER TABLE `smearresultlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `smearresultlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smearresultlog`
--

DROP TABLE IF EXISTS `smearresultlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smearresultlog` (
  `SmearResultLogID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `SmearResultID` int(10) DEFAULT NULL,
  `SmearResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`SmearResultLogID`),
  KEY `SpecimenCode` (`SpecimenCode`,`SmearResultID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smearresultlog`
--

LOCK TABLES `smearresultlog` WRITE;
/*!40000 ALTER TABLE `smearresultlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `smearresultlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sputumcollectionschedulelog`
--

DROP TABLE IF EXISTS `sputumcollectionschedulelog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sputumcollectionschedulelog` (
  `SputumCollectionID` int(10) NOT NULL AUTO_INCREMENT,
  `SputumRequestID` int(10) DEFAULT NULL,
  `CollectionStartDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`SputumCollectionID`),
  KEY `SputumRequestID` (`SputumRequestID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sputumcollectionschedulelog`
--

LOCK TABLES `sputumcollectionschedulelog` WRITE;
/*!40000 ALTER TABLE `sputumcollectionschedulelog` DISABLE KEYS */;
/*!40000 ALTER TABLE `sputumcollectionschedulelog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sputumrequestlog`
--

DROP TABLE IF EXISTS `sputumrequestlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sputumrequestlog` (
  `SputumRequestID` int(10) NOT NULL AUTO_INCREMENT,
  `PatientID` varchar(10) DEFAULT NULL,
  `CollectionType` varchar(10) DEFAULT NULL,
  `NumberOfDaysCollection` int(1) DEFAULT NULL,
  `RequestedBy` varchar(10) DEFAULT NULL,
  `DateOfSputumRequest` date DEFAULT NULL,
  `Embassy` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`SputumRequestID`),
  KEY `PatientID` (`PatientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sputumrequestlog`
--

LOCK TABLES `sputumrequestlog` WRITE;
/*!40000 ALTER TABLE `sputumrequestlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `sputumrequestlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `startincubation`
--

DROP TABLE IF EXISTS `startincubation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `startincubation` (
  `StartIncubationID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `SampleProcessedOn` date DEFAULT NULL,
  `HasLJ` tinyint(1) DEFAULT NULL,
  `HasMGIT` tinyint(1) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`StartIncubationID`),
  KEY `SpecimenCode` (`SpecimenCode`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `startincubation`
--

LOCK TABLES `startincubation` WRITE;
/*!40000 ALTER TABLE `startincubation` DISABLE KEYS */;
/*!40000 ALTER TABLE `startincubation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testlist`
--

DROP TABLE IF EXISTS `testlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testlist` (
  `TestListID` int(2) NOT NULL AUTO_INCREMENT,
  `TestName` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`TestListID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testlist`
--

LOCK TABLES `testlist` WRITE;
/*!40000 ALTER TABLE `testlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `testlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testlog`
--

DROP TABLE IF EXISTS `testlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testlog` (
  `TestLogID` int(10) NOT NULL AUTO_INCREMENT,
  `WorkupRequestID` int(10) DEFAULT NULL,
  `TestResult` varchar(20) DEFAULT NULL,
  `TestResultDate` date DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  PRIMARY KEY (`TestLogID`),
  KEY `WorkupRequestID` (`WorkupRequestID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testlog`
--

LOCK TABLES `testlog` WRITE;
/*!40000 ALTER TABLE `testlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `testlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactionlist`
--

DROP TABLE IF EXISTS `transactionlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactionlist` (
  `TransactionListID` int(5) NOT NULL AUTO_INCREMENT,
  `TransactionName` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`TransactionListID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactionlist`
--

LOCK TABLES `transactionlist` WRITE;
/*!40000 ALTER TABLE `transactionlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactionlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactionlog`
--

DROP TABLE IF EXISTS `transactionlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactionlog` (
  `TransactionLogID` int(10) NOT NULL AUTO_INCREMENT,
  `TransactionListID` int(5) DEFAULT NULL,
  `EmployeeID` int(10) DEFAULT NULL,
  `DateTimeOfTransaction` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`TransactionLogID`),
  KEY `TransactionListID` (`TransactionListID`,`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactionlog`
--

LOCK TABLES `transactionlog` WRITE;
/*!40000 ALTER TABLE `transactionlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactionlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `Disabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workuprequest`
--

DROP TABLE IF EXISTS `workuprequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workuprequest` (
  `WorkupRequestID` int(10) NOT NULL AUTO_INCREMENT,
  `SpecimenCode` varchar(10) DEFAULT NULL,
  `TestListID` int(2) DEFAULT NULL,
  `TransactionLogID` int(10) DEFAULT NULL,
  `RequestDone` varchar(10) DEFAULT NULL,
  `MediaType` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`WorkupRequestID`),
  KEY `SpecimenCode` (`SpecimenCode`,`TestListID`,`TransactionLogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workuprequest`
--

LOCK TABLES `workuprequest` WRITE;
/*!40000 ALTER TABLE `workuprequest` DISABLE KEYS */;
/*!40000 ALTER TABLE `workuprequest` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-12 22:17:58
