-- MySQL dump 10.13  Distrib 5.1.41, for Win32 (ia32)
--
-- Host: localhost    Database: airport
-- ------------------------------------------------------
-- Server version	5.1.41-community

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `airplane`
--

DROP TABLE IF EXISTS `airplane`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `airplane` (
  `AirplaneType` char(10) NOT NULL COMMENT 'AirplaneType',
  `Location` char(10) NOT NULL COMMENT 'Location',
  `AirplaneID` int(11) NOT NULL COMMENT 'AirplaneID',
  `CaptainID` int(11) NOT NULL COMMENT 'CaptainID',
  `SeatNum` int(11) NOT NULL COMMENT 'SeatNum',
  PRIMARY KEY (`AirplaneID`),
  KEY `airplane_FK` (`CaptainID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Airplane';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airplane`
--

LOCK TABLES `airplane` WRITE;
/*!40000 ALTER TABLE `airplane` DISABLE KEYS */;
INSERT INTO `airplane` VALUES ('B747','김포',747001,1,365),('B747','인천',747002,2,365),('B777','나리타',777001,3,400),('B777','김포',777002,4,400),('B747','인천',747003,5,365),('B777','후쿠오카',777003,6,400);
/*!40000 ALTER TABLE `airplane` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `ClientID` varchar(150) NOT NULL COMMENT 'ClientID',
  `Name` char(20) NOT NULL COMMENT 'Name',
  `DateOfBirth` date NOT NULL COMMENT 'DateOfBirth',
  `Password` varchar(150) NOT NULL COMMENT 'Password',
  PRIMARY KEY (`ClientID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Client';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES ('taehyun','123123','2018-11-05','123123'),('root','관리자','2018-11-06','1234'),('taehyun416','김태현','1994-04-16','123123'),('hyun','김태현','1994-01-01','123456'),('asd123','rrr','2018-11-27','123');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `Name` varchar(20) NOT NULL COMMENT 'Name',
  `FlightTime` int(11) NOT NULL COMMENT 'FlightTime',
  `EmpNo` int(11) NOT NULL COMMENT 'EmpNo',
  PRIMARY KEY (`EmpNo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Employee';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('김기장',1500,1),('이기장',1000,2),('정기장',700,3),('박기장',550,4),('유기장',1200,5),('권기장',1300,6);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flight`
--

DROP TABLE IF EXISTS `flight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flight` (
  `FlightNo` char(11) NOT NULL COMMENT 'FlightNo',
  `Gate` int(2) NOT NULL COMMENT 'Gate',
  `FLocation` char(10) NOT NULL COMMENT 'From',
  `DepartureT` time NOT NULL COMMENT 'DepartureT',
  `TLocation` char(10) NOT NULL COMMENT 'To',
  `AirplaneID` int(11) NOT NULL COMMENT 'AirplaneID',
  `DepartureD` date NOT NULL COMMENT 'DepartureD',
  PRIMARY KEY (`FlightNo`),
  KEY `flight_FK` (`AirplaneID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Flight';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flight`
--

LOCK TABLES `flight` WRITE;
/*!40000 ALTER TABLE `flight` DISABLE KEYS */;
INSERT INTO `flight` VALUES ('IN121101',3,'인천','16:10:00','나리타',747001,'2018-12-11'),('GS121101',2,'김포','14:00:00','상하이',777002,'2018-12-11'),('IB120401',4,'인천','03:10:00','베이징',747003,'2018-12-04'),('NI010101',1,'나리타','19:00:00','인천',777001,'2019-01-01');
/*!40000 ALTER TABLE `flight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `TicketCode` char(11) NOT NULL COMMENT 'TicketCode',
  `FlightNo` char(11) NOT NULL COMMENT 'FlightNo',
  `ClientName` varchar(150) NOT NULL COMMENT 'ClientName',
  PRIMARY KEY (`TicketCode`),
  KEY `client_res_info_FK` (`FlightNo`),
  KEY `Ticket_FK` (`ClientName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Reservation';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES ('GStaehyun','GS121101','taehyun'),('GShyun','GS121101','hyun'),('IBtaehyun','IB120401','taehyun');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-11 15:17:30
