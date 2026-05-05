-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (x86_64)
--
-- Host: gcam1008.siteground.biz    Database: dbex0eratr3fob
-- ------------------------------------------------------
-- Server version	8.4.6-6

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users_tbl`
--

DROP TABLE IF EXISTS `users_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_tbl` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'customer',
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_tbl`
--

/*!40000 ALTER TABLE `users_tbl` DISABLE KEYS */;
INSERT INTO `users_tbl` VALUES (2,'Captain','Kirk','customer','captain@kirk.com',NULL,'2026-04-16 00:54:51','2026-04-16 00:54:51'),(3,'Mr.','Spock','customer','spock@kirk.com',NULL,'2026-04-16 01:14:59','2026-04-16 01:14:59'),(4,'Nyota','Uhura','customer','uhura@kirk.com',NULL,'2026-04-16 01:14:59','2026-04-16 01:14:59'),(5,'Nurse','Chapel','customer','chapel@kirk.com',NULL,'2026-04-16 01:14:59','2026-04-16 01:14:59'),(6,'Bones','McCoy','customer','bones@kirk.com',NULL,'2026-04-16 01:14:59','2026-04-16 01:14:59'),(7,'Montgomery','Scott','customer','scotty@kirk.com',NULL,'2026-04-16 01:14:59','2026-04-16 01:14:59'),(8,'Bruce','Wayne','customer','batman@batman.com',NULL,'2026-04-16 01:14:59','2026-04-16 01:14:59'),(9,'Dick','Grayson','customer','dick@batman.com',NULL,'2026-04-16 01:14:59','2026-04-16 01:14:59'),(10,'Barbara','Gordon','customer','barb@batman.com',NULL,'2026-04-16 01:14:59','2026-04-16 01:14:59'),(26,'Lando','Norris','customer','lando@f1.com',NULL,'2026-04-16 20:20:25','2026-04-16 20:20:25'),(27,'Max','Verstappen','customer','max@f1.com','xxx','2026-04-23 19:45:25','2026-04-23 19:45:25'),(28,'Fernando','Alfonso','customer','fernando@f1.com','xxx','2026-04-23 21:02:32','2026-04-23 21:02:32'),(29,'George','Russell','customer','george@f1.com','x','2026-04-23 21:17:16','2026-04-23 21:17:16'),(30,'Kim','Antonelli','customer','kim@f1.com','x','2026-04-23 21:17:35','2026-04-23 21:17:35'),(31,'Charles','LeClerc','customer','charles@f1.com','x','2026-04-23 21:17:53','2026-04-23 21:17:53'),(32,'Lewis','Hamilton','customer','lewis@f1.com','x','2026-04-23 21:18:10','2026-04-23 21:18:10'),(33,'Oscar','Piastri','customer','oscar@f1.com','x','2026-04-23 21:18:28','2026-04-23 21:18:28'),(34,'Estaban','Ocon','customer','estaban@f1.com','x','2026-04-23 21:18:54','2026-04-23 21:18:54'),(35,'Oliver','Bearman','customer','oliver@f1.com','x','2026-04-23 21:19:11','2026-04-23 21:19:11'),(36,'Pierre','Gasley','customer','pierre@f1.com','x','2026-04-23 21:19:28','2026-04-23 21:19:28'),(37,'Franco','Colapinto','customer','franco@f1.com','x','2026-04-23 21:19:47','2026-04-23 21:19:47'),(38,'Isack','Hakjar','customer','isack@f1.com','x','2026-04-23 21:20:07','2026-04-23 21:20:07'),(39,'Liam','Lawson','customer','liam@f1.com','x','2026-04-23 21:20:44','2026-04-23 21:20:44'),(40,'Arvid','Lindblad','customer','arvid@f1.com','x','2026-04-23 21:21:05','2026-04-23 21:21:05'),(41,'Nico','Hulkenberg','customer','nico@f1.com','x','2026-04-23 21:21:25','2026-04-23 21:21:25'),(42,'Gabriel','Bortoleto','customer','gabriel@f1.com','x','2026-04-23 21:21:45','2026-04-23 21:21:45'),(43,'carlos','sainz','customer','carlos@f1.com','x','2026-04-23 21:22:04','2026-04-23 21:22:04'),(44,'alexander','albon','customer','al@f1.com','x','2026-04-23 21:22:22','2026-04-23 21:22:22'),(45,'sergio','perez','customer','sergio@f1.com','d','2026-04-23 21:22:39','2026-04-23 21:22:39'),(46,'valtteri','bottas','customer','val@f1.com','d','2026-04-23 21:22:58','2026-04-23 21:22:58'),(47,'lance','stroll','customer','lance@f1.com','x','2026-04-23 21:23:18','2026-04-23 21:23:18');
/*!40000 ALTER TABLE `users_tbl` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-04-27 18:20:24
