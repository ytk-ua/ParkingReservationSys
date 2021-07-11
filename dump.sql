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
INSERT INTO `admins` VALUES (1,'admin0','admin0','admin0','admin0@gmail.com','2021-06-20 13:37:04'),(2,'admin1','admin1','admin1','admin1@gmail.com','2021-06-20 13:47:17'),(5,'admin2','admin2','admin2','admin2@gmail.com','2021-06-26 15:47:10'),(6,'admin3','admin3','admin3','admin3@gmail.com','2021-06-26 15:49:40');
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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (19,21,'akashiya sanma','akashiya@gmail.com','09033244224','駐車場料金について','料金の確認方法をおしえてください。','2021-06-19 08:10:11'),(21,21,'tokunaga yutaka','tokunaga@gmail.com','09012345433','ユーザー登録について','新規にユーザー登録する方法を教えてください。','2021-06-19 08:11:40'),(30,0,'tanaka','tanaka@gmail.com','090000000','未登録ユーザーからのと合わせ','登録していなくても問い合わせ可能なのか？','2021-06-26 16:46:40'),(31,0,'tanaka2','tanaka2@gmail.com','09031131','未登録ユーザーからのと合わせ2','ユーザーとううろくしてない人からの質問です。','2021-06-26 16:49:48'),(32,19,'tokunaga yutaka','tokunaga@gmail.com','090-1234-5678','登録済みユーザーからの質問','登録されていると登録情報やIDはきちんと表示されるのでしょうか？','2021-06-26 16:51:45'),(41,19,'tokunaga yutaka','tokunaga@gmail.com','090-1234-5678','駐車場料金について','テストです','2021-07-06 11:21:46'),(42,0,'yamada','yamada@gmail.com','090---1313','入力エラーチェック','エラー表示チェック','2021-07-06 11:50:46'),(43,0,'yamada tarou','yamada@gmail.com','0901111333','変更後の送信テスト','入力チェック','2021-07-06 12:03:50'),(44,0,'kato cha','kato@gmail.com','09000000','修正確認','exit削除','2021-07-06 12:10:21'),(46,0,'kato chata','kato@gmail.com','00000','chata','chata2','2021-07-06 12:13:52'),(53,0,'kato chata','kato@gmail.com','00000','chata','管理者返信','2021-07-06 14:13:45'),(54,0,'kato chata','kato@gmail.com','00000','chata','管理者返信','2021-07-06 14:15:00'),(55,0,'kato chata','kato@gmail.com','00000','【ご回答】chata','そうしんテスト','2021-07-06 15:04:58'),(56,0,'kato cha','kato@gmail.com','09000000','【ご回答】修正確認','旅行の奇跡','2021-07-06 15:11:21'),(59,-999,'kato chata','kato@gmail.com','00000','【ご回答】chata','11','2021-07-06 15:19:46');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (8,'2021-06-15','駐車場Park1の料金改定のお知らせ','駐車場Park１の料金が7月から変更になります。','admin_parking.php','photo02.jpg','2021-06-13 15:55:36'),(9,'2021-06-13','ユーザー情報登録のお願い','マイページにてユーザー情報の登録をお願いします。','index.php','item01.jpg','2021-06-13 15:57:24'),(13,'2021-06-28','追加連絡','追加の連絡の詳細かくにん','index.php','Glassキャプチャー２.png','2021-06-27 08:58:57'),(16,'2021-07-08','追加投稿','こんにちは2','TSE','Glassキャプチャー.png','2021-07-08 13:24:14');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parkings`
--

LOCK TABLES `parkings` WRITE;
/*!40000 ALTER TABLE `parkings` DISABLE KEYS */;
INSERT INTO `parkings` VALUES (1,'Park1',600,'toshima1-1-1','2m×4m','終日利用可能','2021-06-07 13:41:12'),(4,'Park2',500,'toshima1-1-1','2m×4m','途中で入出庫あります','2021-06-07 13:44:01'),(5,'Park3',400,'toshima1-1-1','３m×６m','なし','2021-06-07 14:01:11'),(6,'Park4',500,'toshima1-1-1','2m×4m','障がい者対応','2021-06-27 07:31:55'),(8,'Park5',2000,'toshima1-1-1','2m×4m','終日利用','2021-07-10 04:19:15'),(9,'Park6',500,'toshima1-1-1','３m×６m','障がい者対応','2021-07-10 09:42:37');
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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (19,21,5,'2021-06-14','12:00:00','2021-06-15','12:00:00','akashiya@gmail.com','03-3242-4342','終日利用','2021-06-13 02:33:45'),(24,19,4,'2021-06-19','17:00:00','2021-06-19','22:30:00','tokunaga@gmail.com','090-1234-5678','終日利用可能','2021-06-19 07:29:07'),(33,19,1,'2021-07-08','00:00:00','2021-07-08','01:00:00','tokunaga@gmail.com','090-1234-5678','','2021-07-08 14:36:31'),(48,19,1,'2021-07-11','04:00:00','2021-07-11','05:00:00','tokunaga@gmail.com','090-1234-5678','','2021-07-11 00:37:41');
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
INSERT INTO `users` VALUES (19,'tokunaga yutaka',335,'Y.tokunaga','tokunaga','tokunaga@gmail.com','090-1234-5678','2021-06-06 15:30:49'),(20,'yamada tarou',444,'T.yamada','yamada','yamada@gmail.com','090-2222-2222','2021-06-06 15:32:06'),(21,'akashiya sanma',521,'S.akashiya','akashiya','akashiya@gmail.com','03-3242-4342','2021-06-11 16:22:26'),(22,'suzuki ichiro',501,'I.suzuki','suzuki','suzuki@gmail.com','090-1232-3442','2021-06-11 16:35:04'),(23,'yoshioka mei',101,'M.yoshioka','yoshioka','yoshioka@gmail.com','090-3434-5656','2021-06-11 16:46:53'),(25,'kato cha',101,'C.kato','kato','kato@gmail.com','09001111','2021-06-27 03:34:47');
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

-- Dump completed on 2021-07-11  4:22:53
