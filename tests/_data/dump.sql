# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.25)
# Database: boilerplate
# Generation Time: 2014-01-02 15:15:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table auth_reminders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `auth_reminders`;

CREATE TABLE `auth_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `auth_reminders_email_index` (`email`),
  KEY `auth_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
  ('2013_12_25_005014_create_users_table',1),
  ('2013_12_25_005025_create_auth_reminders_table',1),
  ('2013_12_28_113604_create_uploads_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table uploads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `uploads`;

CREATE TABLE `uploads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uploadable_id` int(10) unsigned NOT NULL,
  `uploadable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bucket` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `uploads_uploadable_id_index` (`uploadable_id`),
  KEY `uploads_uploadable_type_index` (`uploadable_type`),
  KEY `uploads_tag_index` (`tag`),
  KEY `uploads_bucket_index` (`bucket`),
  KEY `uploads_key_index` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `uploads` WRITE;
/*!40000 ALTER TABLE `uploads` DISABLE KEYS */;

INSERT INTO `uploads` (`id`, `uploadable_id`, `uploadable_type`, `tag`, `bucket`, `key`, `description`, `created_at`, `updated_at`)
VALUES
  (1,1,'Models\\User','profile-photo','local','/uploads/EkW7iSy441w0DqqQ/qcpLQSsUd3XA4Mmc.jpg','Profile photo of Test User','2014-01-02 16:13:13','2014-01-02 16:13:13'),
  (2,2,'Models\\User','profile-photo','local','/uploads/VDPf10kjSXWNLXXj/3cm8hyjITRYx2kbQ.jpg','Profile photo of Andreas Heiberg','2014-01-02 16:13:14','2014-01-02 16:13:14'),
  (3,3,'Models\\User','profile-photo','local','/uploads/HEhBSq8eFvG1xSOD/xLpxeB4u4ow9gW9a.jpg','Profile photo of Brandon Reed','2014-01-02 16:13:15','2014-01-02 16:13:15'),
  (4,4,'Models\\User','profile-photo','local','/uploads/vW25UARlMXYGHYtp/TynmmiFU2sFQE3b9.jpg','Profile photo of Zoey Howard','2014-01-02 16:13:17','2014-01-02 16:13:17'),
  (5,5,'Models\\User','profile-photo','local','/uploads/fREYtVqUfEqMH0vT/a3hRu1xzkWZ1c8Ad.jpg','Profile photo of Kaylee Nelson','2014-01-02 16:13:20','2014-01-02 16:13:20'),
  (6,6,'Models\\User','profile-photo','local','/uploads/LAfIgXnrBuUbyw1Q/gtof8jNT0CJ9MNcS.jpg','Profile photo of Luke Peterson','2014-01-02 16:13:21','2014-01-02 16:13:21'),
  (7,7,'Models\\User','profile-photo','local','/uploads/KmyjfmUCyrXnc1LY/ASOpW3B9La35s7aS.jpg','Profile photo of Ronald Patterson','2014-01-02 16:13:22','2014-01-02 16:13:22'),
  (8,8,'Models\\User','profile-photo','local','/uploads/LrdOlHMCZ99NC6yL/aDQKdEcNFWA9Dsxw.jpg','Profile photo of Christian Wright','2014-01-02 16:13:24','2014-01-02 16:13:24'),
  (9,9,'Models\\User','profile-photo','local','/uploads/tReJymGXeeerZkyY/8lrWOu1PXDlnVXrW.jpg','Profile photo of Hailey Baker','2014-01-02 16:13:25','2014-01-02 16:13:25'),
  (10,10,'Models\\User','profile-photo','local','/uploads/YjewmM6uxUJNXit9/BjXVibiM6uFvR2Os.jpg','Profile photo of Peter Watson','2014-01-02 16:13:26','2014-01-02 16:13:26'),
  (11,11,'Models\\User','profile-photo','local','/uploads/H8tQYPaTlFi0FqXs/XUhRyuf0DTwCMKTG.jpg','Profile photo of Christopher Scott','2014-01-02 16:13:27','2014-01-02 16:13:27'),
  (12,12,'Models\\User','profile-photo','local','/uploads/86UGFupLhJnWEr3r/d4YDpJH7FTdvoq1J.jpg','Profile photo of Sandra Jones','2014-01-02 16:13:29','2014-01-02 16:13:29'),
  (13,13,'Models\\User','profile-photo','local','/uploads/Qih9rQKGMwxFZoAw/dhdqbTMU8nW9Rpg8.jpg','Profile photo of Sebastian Rivera','2014-01-02 16:13:30','2014-01-02 16:13:30'),
  (14,14,'Models\\User','profile-photo','local','/uploads/05xrxvlXZ7AzC0bb/exen3StE0CBBiZfC.jpg','Profile photo of Scarlett Howard','2014-01-02 16:13:32','2014-01-02 16:13:32'),
  (15,15,'Models\\User','profile-photo','local','/uploads/8OYyf5lRawHM6QsG/R6h9RgA0zf9fHG6b.jpg','Profile photo of Jessica Jenkins','2014-01-02 16:13:33','2014-01-02 16:13:33'),
  (16,16,'Models\\User','profile-photo','local','/uploads/oOv8lRF5KBKDfeTZ/Y0uq7BPsN4cShrko.jpg','Profile photo of Julian Gray','2014-01-02 16:13:35','2014-01-02 16:13:35'),
  (17,17,'Models\\User','profile-photo','local','/uploads/cEVYRIkCd37aZiaD/ry7PjIhqhUDWNluk.jpg','Profile photo of Ella Miller','2014-01-02 16:13:36','2014-01-02 16:13:36'),
  (18,18,'Models\\User','profile-photo','local','/uploads/kFDNbI9zAb4VTILo/HsCnDuM6V2TKXmoL.jpg','Profile photo of Kenzi Gonzales','2014-01-02 16:13:38','2014-01-02 16:13:38'),
  (19,19,'Models\\User','profile-photo','local','/uploads/fHaJOYOdw6jIZxLW/sTDjpdO4UNJetr1a.jpg','Profile photo of Carl Flores','2014-01-02 16:13:40','2014-01-02 16:13:40'),
  (20,20,'Models\\User','profile-photo','local','/uploads/H8utN1sjodx5rt8d/Ab36XUCaZEbc12fu.jpg','Profile photo of Wyatt Cox','2014-01-02 16:13:42','2014-01-02 16:13:42'),
  (21,21,'Models\\User','profile-photo','local','/uploads/35W1OFwMjbwelPs3/bAnRNzT9jrgYGnjV.jpg','Profile photo of Christine Ross','2014-01-02 16:13:43','2014-01-02 16:13:43'),
  (22,22,'Models\\User','profile-photo','local','/uploads/qcixTwWJS5wVkM0K/bbUMSYK4ChaWVRRk.jpg','Profile photo of Stephen Hall','2014-01-02 16:13:44','2014-01-02 16:13:44');

/*!40000 ALTER TABLE `uploads` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_email_verified` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `auth_email_verified`, `deleted_at`, `created_at`, `updated_at`)
VALUES
  (1,'test.user@gmail.com','$2y$10$fxhcJNKL51D7FkvEduBNMOX09nNtYJsu3EjmIOZ//qbw1GEbDKo76','Test','User',1,NULL,'2014-01-02 16:13:12','2014-01-02 16:13:12'),
  (2,'heibergandreas@gmail.com','$2y$10$WLg7pe1JLrL40NW77xcpfe1QzTemnJH56GVJ9jkDPzp6Z7b52tZ6u','Andreas','Heiberg',1,NULL,'2014-01-02 16:13:13','2014-01-02 16:13:13'),
  (3,'brandon.reed65@example.com','$2y$10$M0WCTS16ry00q..usehxQurd7/kEoXgIdp9NqaQShoSXdPEAoMXhi','Brandon','Reed',1,NULL,'2014-01-02 16:13:15','2014-01-02 16:13:15'),
  (4,'zoey.howard53@example.com','$2y$10$XT01PAsUcLXOMVNpHmnEVOyTpzAQEedhcz0ng0DHPKi86GtOq8mhG','Zoey','Howard',1,NULL,'2014-01-02 16:13:16','2014-01-02 16:13:16'),
  (5,'kaylee.nelson99@example.com','$2y$10$UJtcwXi1lIGuEvpNYL1EBuG.X3gUosBPOEwN1qROhLxwB0ob4z.Yu','Kaylee','Nelson',1,NULL,'2014-01-02 16:13:18','2014-01-02 16:13:18'),
  (6,'luke.peterson97@example.com','$2y$10$nvUV6LpYG195xgi0QJi96.0q.G9qLwa8ougaLrWyDf9babOQw5m7q','Luke','Peterson',1,NULL,'2014-01-02 16:13:20','2014-01-02 16:13:20'),
  (7,'ronald.patterson23@example.com','$2y$10$ZQlhjGhBY.rY1yxApiUPF.oBrkMdGVOTlamX2/YqJzipYD4V8RP8m','Ronald','Patterson',1,NULL,'2014-01-02 16:13:22','2014-01-02 16:13:22'),
  (8,'christian.wright34@example.com','$2y$10$gEJm/gfLVLibJ5iwN9/Vh.BRM.D3Jvqz1bl1YItCPslwURW8GaGp6','Christian','Wright',1,NULL,'2014-01-02 16:13:23','2014-01-02 16:13:23'),
  (9,'hailey.baker75@example.com','$2y$10$Vk51vp2MW.h0myorlc5Cfus2mc0r5cFiTxE5tox0zcAWhkx5wBGEa','Hailey','Baker',1,NULL,'2014-01-02 16:13:24','2014-01-02 16:13:24'),
  (10,'peter.watson40@example.com','$2y$10$EDWczZNHq8ZWmz8YVsMcwOIDiI.LgWPZEb1lDkXi76HareLG2FPAq','Peter','Watson',1,NULL,'2014-01-02 16:13:26','2014-01-02 16:13:26'),
  (11,'christopher.scott23@example.com','$2y$10$FTuM7nMS.LDhDlYlqMx.V.l2FQItOMzpwhK5.94uMdhrL2jZva/YO','Christopher','Scott',1,NULL,'2014-01-02 16:13:27','2014-01-02 16:13:27'),
  (12,'sandra.jones37@example.com','$2y$10$MO.DKnOWtLTGvmbEarizveFhdXA4iGwEadrVW5Fmne9n8.DtTzhxS','Sandra','Jones',1,NULL,'2014-01-02 16:13:28','2014-01-02 16:13:28'),
  (13,'sebastian.rivera34@example.com','$2y$10$.3v.EGIek7EnCdZcfZq7a.8CkYwkDe7yCXfpKQxb9j3ImRrG1lqK2','Sebastian','Rivera',1,NULL,'2014-01-02 16:13:30','2014-01-02 16:13:30'),
  (14,'scarlett.howard89@example.com','$2y$10$cTYkV9RIi4/P2Jx5c1uQYeT7xPogf2/PlzukWb/qR4i.ONHXS/Dny','Scarlett','Howard',1,NULL,'2014-01-02 16:13:31','2014-01-02 16:13:31'),
  (15,'jessica.jenkins81@example.com','$2y$10$ZbdQln3vXokpzaNlwsW26uKJlK0xivb/mDbVCaaGMIZYuxkRCCuqC','Jessica','Jenkins',1,NULL,'2014-01-02 16:13:32','2014-01-02 16:13:32'),
  (16,'julian.gray21@example.com','$2y$10$MzLTty9L2C8ignfTAAj.sOCSkkA/LnAfAjKXORPw8MlDWjXPCvLfm','Julian','Gray',1,NULL,'2014-01-02 16:13:34','2014-01-02 16:13:34'),
  (17,'ella.miller60@example.com','$2y$10$m0Dx7jUK14SO5Z7JTXX2H.CoTqQbPZIjYRcDu0eC8DOEBHnb6yxdC','Ella','Miller',1,NULL,'2014-01-02 16:13:36','2014-01-02 16:13:36'),
  (18,'kenzi.gonzales52@example.com','$2y$10$BbCxez05su7Nq05.6Yw.UuAMen1YYNtCKa2dh5w5yJD3RqDujvIOC','Kenzi','Gonzales',1,NULL,'2014-01-02 16:13:37','2014-01-02 16:13:37'),
  (19,'carl.flores57@example.com','$2y$10$aXUzYXER1KfIvE81UDQ6r.e/p3TSCBCxTogzX1mf3xNMqNHwwMea6','Carl','Flores',1,NULL,'2014-01-02 16:13:39','2014-01-02 16:13:39'),
  (20,'wyatt.cox74@example.com','$2y$10$YXWz.rG/ky2ieHAQsVrEu.DPJDKXdTypwacpw3QpLSCXrRKkLnjv2','Wyatt','Cox',1,NULL,'2014-01-02 16:13:40','2014-01-02 16:13:40'),
  (21,'christine.ross87@example.com','$2y$10$4YkxTEe0T01BLe.RkaiBnOyOPpQ97QWPwfiAIvpNNp67q64pyeVQO','Christine','Ross',1,NULL,'2014-01-02 16:13:42','2014-01-02 16:13:42'),
  (22,'stephen.hall44@example.com','$2y$10$JBQoUKSgkpfATIeIavp2qOdA4FILGUbQKL1JYjIWYgr1AuysOM602','Stephen','Hall',1,NULL,'2014-01-02 16:13:44','2014-01-02 16:13:44');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;