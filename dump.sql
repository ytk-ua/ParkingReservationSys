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
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regist_date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `overview` varchar(255) DEFAULT NULL,
  `link_url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (7,'2021-06-14','駐車場料金確定のお知らせ','5月分の料金が確定しました。料金詳細はメールでご案内しました。','index.php','item07.jpg','2021-06-13 15:54:34'),(8,'2021-06-15','駐車場Park1の料金改定のお知らせ','駐車場Park１の料金が7月から変更になります。','admin_parking.php','item03.jpg','2021-06-13 15:55:36'),(9,'2021-06-13','ユーザー情報登録のお願い','マイページにてユーザー情報の登録をお願いします。','index.php','item01.jpg','2021-06-13 15:57:24'),(10,'2021-06-17','初めまして','駐車場Park１の料金が7月から変更になります。','','','2021-06-16 10:23:05');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parkings`
--

DROP TABLE IF EXISTS `parkings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parkings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parking_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `parking_name` (`parking_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parkings`
--

LOCK TABLES `parkings` WRITE;
/*!40000 ALTER TABLE `parkings` DISABLE KEYS */;
INSERT INTO `parkings` VALUES (1,'Park1',600,'toshima1-1-1','2m×4m','終日利用可能','2021-06-07 13:41:12'),(4,'Park2',500,'toshima1-1-1','2m×4m','途中で入出庫あります','2021-06-07 13:44:01'),(5,'Park3',400,'toshima1-1-1','３m×６m','なし','2021-06-07 14:01:11');
/*!40000 ALTER TABLE `parkings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `parking_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `parking_id` (`parking_id`),
  CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`parking_id`) REFERENCES `parkings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (15,19,1,'2021-06-13','10:00:00','2021-06-13','17:00:00','tokunaga@gmail.com','090-1234-5678','なし','2021-06-13 01:26:40'),(16,19,1,'2021-06-14','07:30:00','2021-06-15','08:30:00','tokunaga@gmail.com','090-1234-5678','終日利用可能','2021-06-13 01:28:59'),(17,19,4,'2021-06-13','10:00:00','2021-06-13','15:00:00','tokunaga@gmail.com','090-1234-5678','なし','2021-06-13 01:33:30'),(18,19,5,'2021-06-13','14:30:00','2021-06-13','17:30:00','tokunaga@gmail.com','090-1234-5678','なし','2021-06-13 02:19:54'),(19,21,5,'2021-06-14','12:00:00','2021-06-15','12:00:00','akashiya@gmail.com','03-3242-4342','終日利用','2021-06-13 02:33:45'),(21,20,4,'2021-06-16','04:00:00','2021-06-16','10:30:00','yamada@gmail.com','090-2222-2222','なし','2021-06-14 13:52:04'),(22,19,1,'2021-06-13','11:30:00','2021-06-13','22:00:00','tokunaga@gmail.com','090-1234-5678','終日利用可能','2021-06-14 14:46:01'),(23,24,1,'2021-06-16','21:00:00','2021-06-17','20:00:00','shima@gmail.com','090000','終日利用','2021-06-16 10:22:15');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
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
  `room_no` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (19,'tokunaga yutaka',335,'Y.tokunaga','tokunaga','tokunaga@gmail.com','090-1234-5678','2021-06-06 15:30:49'),(20,'yamada tarou',444,'T.yamada','yamada','yamada@gmail.com','090-2222-2222','2021-06-06 15:32:06'),(21,'akashiya sanma',521,'S.akashiya','akashiya','akashiya@gmail.com','03-3242-4342','2021-06-11 16:22:26'),(22,'suzuki ichiro',501,'I.suzuki','suzuki','suzuki@gmail.com','090-1232-3442','2021-06-11 16:35:04'),(23,'yoshioka mei',101,'M.yoshioka','yoshioka','yoshioka@gmail.com','090-3434-5656','2021-06-11 16:46:53'),(24,'shima',101,'Y.shima','shima','shima@gmail.com','090000','2021-06-16 10:21:30');
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

-- Dump completed on 2021-06-16 10:30:55
