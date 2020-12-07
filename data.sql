-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: laravel_clinica
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (1,'Ortodoncia','Ortodoncia',NULL,'2020-12-09 00:00:00',0,5,NULL,'2020-12-06 23:49:34','2020-12-07 01:51:36'),(6,'Visita trimestral','Visita trimestral',NULL,'2020-12-09 00:00:00',1,5,NULL,'2020-12-06 23:59:57','2020-12-06 23:59:57'),(7,'Visita trimestral','Visita trimestral',NULL,'2020-12-09 00:00:00',1,1,NULL,'2020-12-06 23:59:57','2020-12-06 23:59:57'),(8,'Endodoncia','Endodoncia',NULL,'2020-12-16 03:26:00',2,5,3,'2020-12-07 02:27:14','2020-12-07 02:54:22'),(9,'Extracción de muelas del jucio','asd',NULL,'2020-12-11 03:29:00',3,5,3,'2020-12-07 02:29:23','2020-12-07 02:29:23'),(14,'Limpieza bucal','asd',NULL,'2020-12-18 04:25:00',1,5,NULL,'2020-12-07 03:25:59','2020-12-07 03:25:59'),(15,'Chequeo','asd',NULL,'2020-12-17 04:30:00',1,5,NULL,'2020-12-07 03:30:33','2020-12-07 03:30:33'),(16,'Empaste','asd',NULL,'2020-12-31 04:33:00',1,5,NULL,'2020-12-07 03:33:38','2020-12-07 03:33:38'),(17,'Chequeo','asd',NULL,'2020-12-25 04:36:00',1,6,NULL,'2020-12-07 03:36:36','2020-12-07 03:36:36');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (18,'2014_10_12_000000_create_users_table',1),(19,'2014_10_12_100000_create_password_resets_table',1),(20,'2016_06_01_000001_create_oauth_auth_codes_table',1),(21,'2016_06_01_000002_create_oauth_access_tokens_table',1),(22,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(23,'2016_06_01_000004_create_oauth_clients_table',1),(24,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(25,'2019_08_19_000000_create_failed_jobs_table',1),(26,'2020_12_06_225822_create_appointments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('2205361f54e4b7a31bf0660c45cdcdd2c5e38aa80502e8526579d614788f9eca191b91ec4ae84f2c',5,1,'Th1s_1s_4_S3CR3t','[]',0,'2020-12-06 23:49:17','2020-12-06 23:49:17','2021-12-07 00:49:17'),('34b59b23278bc36ae3c0baf1e4770545d29f45a16b947bff91e7df53012f951a1ad95c783b75e58a',6,1,'Th1s_1s_4_S3CR3t','[]',1,'2020-12-07 03:36:15','2020-12-07 03:36:15','2021-12-07 04:36:15'),('3659e7a14425f6d751c07121d11b076072a7a3f9a15343da8bcc325370f8a35eb3e92d393f4575eb',5,1,'Th1s_1s_4_S3CR3t','[]',0,'2020-12-07 02:16:04','2020-12-07 02:16:04','2021-12-07 03:16:04'),('36a9dbcbddead3656b12611955d8896c9d4e0a83ff118e452feb832d472f23683a3e20acdfa9f79b',5,1,'Th1s_1s_4_S3CR3t','[]',1,'2020-12-07 02:22:12','2020-12-07 02:22:12','2021-12-07 03:22:12'),('5a9b62719cbded8643d22976772e0e40a63b4194de885934106ce4328dbdadb1d89aa9b9ed3e3e83',5,1,'Th1s_1s_4_S3CR3t','[]',1,'2020-12-07 03:25:42','2020-12-07 03:25:42','2021-12-07 04:25:42'),('6184094eb5cc01844085be2f9a6fab1a19a18b1fd635045ab1ca7fb26eb4deb8e3c8738fbb8716ff',5,1,'Th1s_1s_4_S3CR3t','[]',1,'2020-12-07 03:13:23','2020-12-07 03:13:23','2021-12-07 04:13:23'),('91da4e3644e9bdac44cdde127c83688aaf1e5f953bdcf875dd6f1b9e6c4d6e09103ceded937eae9d',3,1,'Th1s_1s_4_S3CR3t','[]',1,'2020-12-07 02:44:50','2020-12-07 02:44:50','2021-12-07 03:44:50'),('a0aa4cc47ada64ca0fb42828b3345395092a9773d62810888bbcd623115cfbfd482e66281275ad58',5,1,'Th1s_1s_4_S3CR3t','[]',1,'2020-12-07 02:17:49','2020-12-07 02:17:49','2021-12-07 03:17:49'),('a18f358b9da63347fd9f76d77cea7a4798d4a20b5fbc2b7d4f489df24a1e75f5320d9bb1dbf0f9b4',3,1,'Th1s_1s_4_S3CR3t','[]',1,'2020-12-07 03:18:32','2020-12-07 03:18:32','2021-12-07 04:18:32'),('da71edbdcda4e3b00b1b9419a08b641167f4293bc49439b915893ff8d8fc431ea73ef2be19d9629a',1,1,'Th1s_1s_4_S3CR3t','[]',0,'2020-12-07 01:53:09','2020-12-07 01:53:09','2021-12-07 02:53:09'),('dae7866893a919e3799f3de50e7e2ba76476d1866942b114cbf4fff2f9dd5b94a22e66909aa163b7',5,1,'Th1s_1s_4_S3CR3t','[]',0,'2020-12-07 02:46:00','2020-12-07 02:46:00','2021-12-07 03:46:00');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','ahmYtR8170E9FZUESEfbolRzhdsIe2yWKrgTps0q',NULL,'http://localhost',1,0,0,'2020-12-06 23:49:12','2020-12-06 23:49:12'),(2,NULL,'Laravel Password Grant Client','3RAHr6FoQp2uV6VUy6R2bFR0dwqQWdlcIY24Ibhp','users','http://localhost',0,1,0,'2020-12-06 23:49:12','2020-12-06 23:49:12');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2020-12-06 23:49:12','2020-12-06 23:49:12');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rafa',1,'Linares Molina','rafa@user.com',0,'Avda. Falsa 1, 2','2020-12-07 00:42:30','$2y$10$sojXthRNfVyPlRNcQS9TjuXjthhcbi4SQsetonLTncZHH0vIDLj9a',1),(3,'Adeptus',0,'Mechanicus','admin@user.com',0,'ForgePlanet #323','2020-12-07 00:42:30','$2y$10$sojXthRNfVyPlRNcQS9TjuXjthhcbi4SQsetonLTncZHH0vIDLj9a',1),(5,'User',1,'Mc User','user@user.com',0,'C. 12','2020-12-07 00:42:30','$2y$10$sojXthRNfVyPlRNcQS9TjuXjthhcbi4SQsetonLTncZHH0vIDLj9a',1),(6,'Test',1,'Test','test@test.com',0,'Calle .Net','2020-12-07 04:35:40','$2y$10$uBIil5zIQWnSVL37K27VaOydKFOqpzqS7hEmw6nnpJa3AbWH4EuJa',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-07 16:46:01
