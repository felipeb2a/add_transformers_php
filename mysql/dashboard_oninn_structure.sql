CREATE DATABASE  IF NOT EXISTS `dashboard_oninn` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dashboard_oninn`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: energisa-database.cm6rdzelc7ht.us-east-1.rds.amazonaws.com    Database: dashboard_oninn
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `machineLearning`
--

DROP TABLE IF EXISTS `machineLearning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `machineLearning` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transformerId` int DEFAULT NULL,
  `healthTransformers` varchar(255) DEFAULT NULL,
  `vibrationGood` float DEFAULT NULL,
  `vibrationBad` float DEFAULT NULL,
  `voltageLow` float DEFAULT NULL,
  `voltageOrdinary` float DEFAULT NULL,
  `voltageOver` float DEFAULT NULL,
  `loadOrdinary` float DEFAULT NULL,
  `loadOver` float DEFAULT NULL,
  `anomaliesTemperature` int DEFAULT NULL,
  `anomaliesVibration` int DEFAULT NULL,
  `timeToFailure` float DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transformerId` (`transformerId`),
  CONSTRAINT `machineLearning_ibfk_1` FOREIGN KEY (`transformerId`) REFERENCES `transformers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `machineLearning1`
--

DROP TABLE IF EXISTS `machineLearning1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `machineLearning1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transformerId` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `healthTransformers` varchar(255) DEFAULT NULL,
  `vibrationGood` float DEFAULT NULL,
  `vibrationBad` float DEFAULT NULL,
  `voltageLow` float DEFAULT NULL,
  `voltageOrdinary` float DEFAULT NULL,
  `voltageOver` float DEFAULT NULL,
  `loadOrdinary` float DEFAULT NULL,
  `loadOver` float DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transformerId` (`transformerId`),
  CONSTRAINT `machineLearning1_ibfk_1` FOREIGN KEY (`transformerId`) REFERENCES `transformers` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=602 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `machineLearning2`
--

DROP TABLE IF EXISTS `machineLearning2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `machineLearning2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transformerId` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `anomaliesTemperature` int DEFAULT NULL,
  `anomaliesVibration` int DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transformerId` (`transformerId`),
  CONSTRAINT `machineLearning2_ibfk_1` FOREIGN KEY (`transformerId`) REFERENCES `transformers` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14236 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `machineLearning3`
--

DROP TABLE IF EXISTS `machineLearning3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `machineLearning3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transformerId` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `timeToFailure` float DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transformerId` (`transformerId`),
  CONSTRAINT `machineLearning3_ibfk_1` FOREIGN KEY (`transformerId`) REFERENCES `transformers` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=570 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `resetpassword`
--

DROP TABLE IF EXISTS `resetpassword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resetpassword` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userId` int DEFAULT NULL,
  `isUsed` tinyint(1) NOT NULL,
  `token` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sensorData`
--

DROP TABLE IF EXISTS `sensorData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensorData` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transformerId` int NOT NULL,
  `sensorDataRawId` int DEFAULT NULL,
  `time_utc` datetime NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `healthTransformers` varchar(255) DEFAULT NULL,
  `seqno` int NOT NULL,
  `rssi` float NOT NULL,
  `snr` float NOT NULL,
  `debug` int NOT NULL,
  `voltage_a` float NOT NULL,
  `voltage_b` float NOT NULL,
  `voltage_c` float NOT NULL,
  `current_a` float NOT NULL,
  `current_b` float NOT NULL,
  `current_c` float NOT NULL,
  `load` float NOT NULL,
  `powerFactor_a` float NOT NULL,
  `powerFactor_b` float NOT NULL,
  `powerFactor_c` float NOT NULL,
  `bodyTemperature` float NOT NULL,
  `environmentalTemperature` float NOT NULL,
  `pcbTemperature` float NOT NULL,
  `amplitude` float DEFAULT NULL,
  `vibration_harm_1` float DEFAULT NULL,
  `vibration_harm_2` float DEFAULT NULL,
  `vibration_harm_3` float DEFAULT NULL,
  `vibration_harm_4` float DEFAULT NULL,
  `vibration_harm_5` float DEFAULT NULL,
  `vibration_harm_6` float DEFAULT NULL,
  `vibration_harm_7` float DEFAULT NULL,
  `vibration_harm_8` float DEFAULT NULL,
  `vibration_harm_9` float DEFAULT NULL,
  `vibration_harm_10` float DEFAULT NULL,
  `vibration_harm_11` float DEFAULT NULL,
  `vibration_harm_12` float DEFAULT NULL,
  `vibration_harm_13` float DEFAULT NULL,
  `vibration_harm_14` float DEFAULT NULL,
  `vibration_harm_15` float DEFAULT NULL,
  `vibration_harm_16` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transformerId` (`transformerId`),
  CONSTRAINT `sensorData_ibfk_1` FOREIGN KEY (`transformerId`) REFERENCES `transformers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1888861 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sensorDataByDay`
--

DROP TABLE IF EXISTS `sensorDataByDay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensorDataByDay` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transformerId` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `healthTransformers` varchar(255) DEFAULT NULL,
  `power` float DEFAULT NULL,
  `load` float DEFAULT NULL,
  `loadToOverload` float DEFAULT NULL,
  `healthIndex` float DEFAULT NULL,
  `count` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transformerId` (`transformerId`),
  CONSTRAINT `sensorDataByDay_ibfk_1` FOREIGN KEY (`transformerId`) REFERENCES `transformers` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15161 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sensorDataByMonth`
--

DROP TABLE IF EXISTS `sensorDataByMonth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensorDataByMonth` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transformerId` int DEFAULT NULL,
  `year` int DEFAULT NULL,
  `month` int DEFAULT NULL,
  `healthTransformers` varchar(255) DEFAULT NULL,
  `power` float DEFAULT NULL,
  `load` float DEFAULT NULL,
  `healthIndex` float DEFAULT NULL,
  `count` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transformerId` (`transformerId`),
  CONSTRAINT `sensorDataByMonth_ibfk_1` FOREIGN KEY (`transformerId`) REFERENCES `transformers` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=593 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sensorDataRaw`
--

DROP TABLE IF EXISTS `sensorDataRaw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensorDataRaw` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transformerId` int NOT NULL,
  `time_utc` datetime NOT NULL,
  `seqno` int NOT NULL,
  `rssi` float NOT NULL,
  `snr` float NOT NULL,
  `debug` int NOT NULL,
  `voltage_a` float NOT NULL,
  `voltage_b` float NOT NULL,
  `voltage_c` float NOT NULL,
  `current_a` float NOT NULL,
  `current_b` float NOT NULL,
  `current_c` float NOT NULL,
  `powerFactor_a` float NOT NULL,
  `powerFactor_b` float NOT NULL,
  `powerFactor_c` float NOT NULL,
  `bodyTemperature` float NOT NULL,
  `environmentalTemperature` float NOT NULL,
  `pcbTemperature` float NOT NULL,
  `amplitude` float DEFAULT NULL,
  `vibration_harm_1` float DEFAULT NULL,
  `vibration_harm_2` float DEFAULT NULL,
  `vibration_harm_3` float DEFAULT NULL,
  `vibration_harm_4` float DEFAULT NULL,
  `vibration_harm_5` float DEFAULT NULL,
  `vibration_harm_6` float DEFAULT NULL,
  `vibration_harm_7` float DEFAULT NULL,
  `vibration_harm_8` float DEFAULT NULL,
  `vibration_harm_9` float DEFAULT NULL,
  `vibration_harm_10` float DEFAULT NULL,
  `vibration_harm_11` float DEFAULT NULL,
  `vibration_harm_12` float DEFAULT NULL,
  `vibration_harm_13` float DEFAULT NULL,
  `vibration_harm_14` float DEFAULT NULL,
  `vibration_harm_15` float DEFAULT NULL,
  `vibration_harm_16` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transformerId` (`transformerId`,`time_utc`),
  CONSTRAINT `sensorDataRaw_ibfk_1` FOREIGN KEY (`transformerId`) REFERENCES `transformers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2473958 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `transformers`
--

DROP TABLE IF EXISTS `transformers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transformers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idTrafo` int DEFAULT NULL,
  `potencia` float DEFAULT NULL,
  `fabricante` varchar(255) DEFAULT NULL,
  `anoFabricacao` datetime DEFAULT NULL,
  `tensaoNominalPrimario` int DEFAULT NULL,
  `tensaoNominalSecundario` varchar(255) DEFAULT NULL,
  `base` varchar(255) DEFAULT NULL,
  `numerodeSeriePrototipo` varchar(255) DEFAULT NULL,
  `node` varchar(255) DEFAULT NULL,
  `x` float DEFAULT NULL,
  `y` float DEFAULT NULL,
  `coordenadaX` varchar(255) DEFAULT NULL,
  `coordenadaY` varchar(255) DEFAULT NULL,
  `healthTransformers` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `calibrationVa` int DEFAULT '0',
  `calibrationVb` int DEFAULT '0',
  `calibrationVc` int DEFAULT '0',
  `calibrationIa` int DEFAULT '0',
  `calibrationIb` int DEFAULT '0',
  `calibrationIc` int DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `numerodeSeriePrototipo_UNIQUE` (`numerodeSeriePrototipo`),
  UNIQUE KEY `node_UNIQUE` (`node`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `transformersBase`
--

DROP TABLE IF EXISTS `transformersBase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transformersBase` (
  `id` int NOT NULL AUTO_INCREMENT,
  `base` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `transformersStatus`
--

DROP TABLE IF EXISTS `transformersStatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transformersStatus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usersPhp`
--

DROP TABLE IF EXISTS `usersPhp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;

CREATE TABLE `usersPhp` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `isActive` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE);

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `isFirstAccess` tinyint(1) NOT NULL,
  `isTcTech` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-20  9:03:20
