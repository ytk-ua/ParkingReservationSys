-- MySQL dump 10.16  Distrib 10.2.10-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: rsv_sys
-- ------------------------------------------------------
-- Server version	10.2.10-MariaDB

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
-- Table structure for table `parking`
--

DROP TABLE IF EXISTS `parking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parking_id` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `parking_id` (`parking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parking`
--

LOCK TABLES `parking` WRITE;
/*!40000 ALTER TABLE `parking` DISABLE KEYS */;
INSERT INTO `parking` VALUES (1,'Park1','Toshima-ku 1-1-1','2m*3m','200/20min','NULL','2021-05-29 04:53:04'),(2,'Park2','Toshima-ku 1-1-2','1.5m*3m',' ',' ','2021-05-29 04:54:41'),(3,'Park3','豊島区１−１−１','3m×4m',NULL,'終日利用可能','2021-05-29 05:13:13'),(4,'Park4','豊島区１−１−１','3m×4m',NULL,'','2021-05-29 05:17:33'),(11,'Park5','Toshima-ku 1-1-3','3m×4m',NULL,'','2021-05-29 16:09:02'),(12,'Park6','Toshima-ku 1-1-3','2m×4m',NULL,'終日利用可能','2021-05-31 12:24:01'),(13,'Park7','Toshima-ku 1-1-3','2m×4m','200円','終日利用可能','2021-05-31 12:26:31');
/*!40000 ALTER TABLE `parking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserves`
--

DROP TABLE IF EXISTS `reserves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reserves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_mul` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `parking_mul` int(11) NOT NULL,
  `parking_id` varchar(255) NOT NULL,
  `room_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `user_mul` (`user_mul`),
  KEY `parking_mul` (`parking_mul`),
  CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`user_mul`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`parking_mul`) REFERENCES `parking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserves`
--

LOCK TABLES `reserves` WRITE;
/*!40000 ALTER TABLE `reserves` DISABLE KEYS */;
INSERT INTO `reserves` VALUES (1,1,'2021-05-30','00:02:31','2021-05-31','00:03:30',1,'Park1',333,'tokunaga@gmail.com',901234,' ','2021-05-29 16:22:12'),(2,15,'2021-05-26','01:27:00','2021-05-28','05:27:00',4,'4',443,'akashiya@gmail.com',90252,'終日利用','2021-05-30 15:27:40'),(5,4,'2021-06-02','22:05:00','2021-06-03','22:05:00',4,'4',344,'suzuki@gmail.com',801234,'途中で入出庫あり','2021-05-31 12:06:07'),(8,5,'2021-06-01','22:15:00','2021-06-02','23:15:00',3,'3',332,'yamada@gmail.com',7031,'終日利用','2021-05-31 12:16:14');
/*!40000 ALTER TABLE `reserves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'tokunaga yutaka','Y.tokunaga','tokunaga@gmail.com','tokunaga','2021-05-23 04:17:03'),(4,'suzuki ichiro','I.suzuki','suzuki@gmail.com','suzuki','2021-05-24 10:39:20'),(5,'yamada tarou','T.yamada','yamada@gmail.com','yamada','2021-05-24 10:58:11'),(6,'yoshioka mei','M.yoshioka','yoshioka@gmail.com','yoshioka','2021-05-24 13:21:16'),(15,'明石家 sanma','S.akashiya','akashiya@gmail.com','akashiya','2021-05-25 14:04:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-31 13:49:01
