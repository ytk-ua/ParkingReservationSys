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
-- Table structure for table `accesses`
--

DROP TABLE IF EXISTS `accesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `visited_time` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesses`
--

LOCK TABLES `accesses` WRITE;
/*!40000 ALTER TABLE `accesses` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin0','admin0','admin0','admin0@gmail.com','2021-06-20 13:37:04'),(2,'admin1','admin1','admin1','admin1@gmail.com','2021-06-20 13:47:17'),(5,'admin2','admin2','admin2','admin2@gmail.com','2021-06-26 15:47:10'),(6,'admin3','admin3','admin3','admin3@gmail.com','2021-06-26 15:49:40'),(7,'admin4','admin4','admin4','admin4@gmail.com','2021-06-27 07:47:31');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (19,21,'akashiya sanma','akashiya@gmail.com','09033244224','駐車場料金について','料金の確認方法をおしえてください。','2021-06-19 08:10:11'),(21,21,'tokunaga yutaka','tokunaga@gmail.com','09012345433','ユーザー登録について','新規にユーザー登録する方法を教えてください。','2021-06-19 08:11:40'),(25,0,'tokunaga yutaka','ytk-ua@docomo.ne.jp','09000000','TEST','そうしんテスト','2021-06-20 16:22:59'),(30,0,'tanaka','tanaka@gmail.com','090000000','未登録ユーザーからのと合わせ','登録していなくても問い合わせ可能なのか？','2021-06-26 16:46:40'),(31,0,'tanaka2','tanaka2@gmail.com','09031131','未登録ユーザーからのと合わせ2','ユーザーとううろくしてない人からの質問です。','2021-06-26 16:49:48'),(32,19,'tokunaga yutaka','tokunaga@gmail.com','090-1234-5678','登録済みユーザーからの質問','登録されていると登録情報やIDはきちんと表示されるのでしょうか？','2021-06-26 16:51:45');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (7,'2021-06-14','駐車場料金確定のお知らせ','5月分の料金が確定しました。料金詳細はメールでご案内しました。','index.php','item07.jpg','2021-06-13 15:54:34'),(8,'2021-06-15','駐車場Park1の料金改定のお知らせ','駐車場Park１の料金が7月から変更になります。','admin_parking.php','item03.jpg','2021-06-13 15:55:36'),(9,'2021-06-13','ユーザー情報登録のお願い','マイページにてユーザー情報の登録をお願いします。','index.php','item01.jpg','2021-06-13 15:57:24'),(12,'2021-06-28','連絡事項','こんにちは','index.php',NULL,'2021-06-26 17:31:37'),(13,'2021-06-28','追加連絡','追加の連絡の詳細かくにん','index.php','','2021-06-27 08:58:57');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parkings`
--

LOCK TABLES `parkings` WRITE;
/*!40000 ALTER TABLE `parkings` DISABLE KEYS */;
INSERT INTO `parkings` VALUES (1,'Park1',600,'toshima1-1-1','2m×4m','終日利用可能','2021-06-07 13:41:12'),(4,'Park2',500,'toshima1-1-1','2m×4m','途中で入出庫あります','2021-06-07 13:44:01'),(5,'Park3',400,'toshima1-1-1','３m×６m','なし','2021-06-07 14:01:11'),(6,'Park4',500,'toshima1-1-1','2m×3m','障がい者対応','2021-06-27 07:31:55');
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (19,21,5,'2021-06-14','12:00:00','2021-06-15','12:00:00','akashiya@gmail.com','03-3242-4342','終日利用','2021-06-13 02:33:45'),(21,20,4,'2021-06-16','04:00:00','2021-06-16','10:30:00','yamada@gmail.com','090-2222-2222','なし','2021-06-14 13:52:04'),(23,24,1,'2021-06-16','21:00:00','2021-06-17','20:00:00','shima@gmail.com','090000','終日利用','2021-06-16 10:22:15'),(24,19,4,'2021-06-19','17:00:00','2021-06-19','22:30:00','tokunaga@gmail.com','090-1234-5678','終日利用可能','2021-06-19 07:29:07'),(25,19,1,'2021-06-21','00:00:00','2021-06-21','10:00:00','tokunaga@gmail.com','090-1234-5678','','2021-06-21 14:55:50'),(26,19,4,'2021-06-21','04:00:00','2021-06-21','10:00:00','tokunaga@gmail.com','090-1234-5678','','2021-06-21 15:00:35'),(27,19,4,'2021-06-20','01:00:00','2021-06-20','02:00:00','tokunaga@gmail.com','090-1234-5678','','2021-06-21 15:01:09'),(28,21,4,'2021-06-22','01:00:00','2021-06-22','10:00:00','akashiya@gmail.com','03-3242-4342','','2021-06-21 15:05:15');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (19,'tokunaga yutaka',335,'Y.tokunaga','tokunaga','tokunaga@gmail.com','090-1234-5678','2021-06-06 15:30:49'),(20,'yamada tarou',444,'T.yamada','yamada','yamada@gmail.com','090-2222-2222','2021-06-06 15:32:06'),(21,'akashiya sanma',521,'S.akashiya','akashiya','akashiya@gmail.com','03-3242-4342','2021-06-11 16:22:26'),(22,'suzuki ichiro',501,'I.suzuki','suzuki','suzuki@gmail.com','090-1232-3442','2021-06-11 16:35:04'),(23,'yoshioka mei',101,'M.yoshioka','yoshioka','yoshioka@gmail.com','090-3434-5656','2021-06-11 16:46:53'),(24,'shima',101,'Y.shima','shima','shima@gmail.com','090000','2021-06-16 10:21:30'),(25,'kato cha',101,'C.kato','kato','kato@gmail.com','09001111','2021-06-27 03:34:47');
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

-- Dump completed on 2021-06-28 12:59:47
