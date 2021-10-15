# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: dln_db
# Generation Time: 2021-10-15 10:29:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table advertisements
# ------------------------------------------------------------

DROP TABLE IF EXISTS `advertisements`;

CREATE TABLE `advertisements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `advertisements` WRITE;
/*!40000 ALTER TABLE `advertisements` DISABLE KEYS */;

INSERT INTO `advertisements` (`id`, `title`, `image`, `url`, `location`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Da bi menso m3y3 nnipa','21100384800xheader_card.jpg.pagespeed.ic.50jhqtxwaN.jpg','https://in.pinterest.com/pin/488781365808721014/?nic=1','leaderboard','display','2021-10-03 20:10:12',NULL),
	(2,'Title of the advert','21100384800xheader_card.jpg.pagespeed.ic.50jhqtxwaN.jpg','https://www.ecocaregh.com/','leaderboard','display','2021-10-03 20:10:00',NULL),
	(4,'We are the leading source of breaking legal news in Ghana','21100385229post_3.png','https://in.pinterest.com/pin/488781365808721014/?nic=1','sidebar-top','display','2021-10-03 20:10:29','2021-10-06 19:10:17'),
	(5,'We are the leading source of breaking legal news in Ghana','21100385229post_3.png','https://in.pinterest.com/pin/488781365808721014/?nic=1','sidebar-bottom','display','2021-10-03 20:10:29','2021-10-06 19:10:17'),
	(6,'Da bi menso m3y3 nnipa','21101325549150x100.png','https://in.pinterest.com/pin/488781365808721014/?nic=1','sidebar-bottom','display','2021-10-13 14:10:49',NULL);

/*!40000 ALTER TABLE `advertisements` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table analytics
# ------------------------------------------------------------

DROP TABLE IF EXISTS `analytics`;

CREATE TABLE `analytics` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `views` int(11) DEFAULT '0',
  `visits` int(11) DEFAULT '0',
  `likes` int(11) DEFAULT '0',
  `dislikes` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

LOCK TABLES `analytics` WRITE;
/*!40000 ALTER TABLE `analytics` DISABLE KEYS */;

INSERT INTO `analytics` (`id`, `views`, `visits`, `likes`, `dislikes`)
VALUES
	(1,4,14,1,1);

/*!40000 ALTER TABLE `analytics` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table audios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `audios`;

CREATE TABLE `audios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_bin,
  `short_desc` text COLLATE utf8mb4_bin,
  `image` text COLLATE utf8mb4_bin,
  `status` varchar(30) COLLATE utf8mb4_bin NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

LOCK TABLES `audios` WRITE;
/*!40000 ALTER TABLE `audios` DISABLE KEYS */;

INSERT INTO `audios` (`id`, `title`, `short_desc`, `image`, `status`, `created_at`, `updated_at`)
VALUES
	(2,X'74657374657273',X'66696C655F75706C6F616473203D204F6E2075706C6F61645F6D61785F66696C6573697A65203D2032304D20706F73745F6D61785F73697A65203D2032304D2066696C655F75706C6F616473203D204F6E2075706C6F61645F6D61785F66696C6573697A65203D2032304D20706F73745F6D61785F73697A65203D2032304D',X'32313130313436323933306173736574735F7261775F6C6F6E675F72696E672E6D7033',X'6472616674','2021-10-14 06:10:30',NULL),
	(3,X'48656C6C6F20776F726C640A',X'66696C655F75706C6F616473203D204F6E2075706C6F61645F6D61785F66696C6573697A65203D2032304D20706F73745F6D61785F73697A65203D2032304D2066696C655F75706C6F616473203D204F6E2075706C6F61645F6D61785F66696C6573697A65203D2032304D20706F73745F6D61785F73697A65203D2032304D',X'32313130313436323933306173736574735F7261775F6C6F6E675F72696E672E6D7033',X'6472616674','2021-10-14 06:10:30',NULL),
	(4,X'5468697320697320666F6F20626172207468696E67',X'66696C655F75706C6F616473203D204F6E2075706C6F61645F6D61785F66696C6573697A65203D2032304D20706F73745F6D61785F73697A65203D2032304D2066696C655F75706C6F616473203D204F6E2075706C6F61645F6D61785F66696C6573697A65203D2032304D20706F73745F6D61785F73697A65203D2032304D',X'32313130313436323933306173736574735F7261775F6C6F6E675F72696E672E6D7033',X'6472616674','2021-10-14 06:10:30',NULL);

/*!40000 ALTER TABLE `audios` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'General New','generalnew','Active','2021-09-11 11:09:04','2021-10-05 13:10:23'),
	(2,'Supreme Court','supreme-court','Active','2021-09-11 11:09:13','2021-09-13 01:09:10'),
	(3,'International','international','Active','2021-09-11 11:09:47','2021-09-13 01:09:35'),
	(4,'Chambers','chambers','Active','2021-09-11 11:09:03',NULL),
	(5,'Opinions','opinions','Active','2021-09-11 11:09:07','2021-09-12 09:09:44'),
	(6,'Tech','tech','Active','2021-09-11 11:09:20',NULL),
	(7,'Happilex','happilex','Active','2021-09-11 11:09:25',NULL),
	(9,'Feature','feature','Inactive','2021-09-13 15:09:11','2021-09-13 15:09:35');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `news_id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`)
VALUES
	(1,26,'This is my name','admin@admin.com','This is the comment message','approved','2021-10-03 15:10:30',NULL),
	(2,26,'Samuel Annin Yeboah','admin2@example.com','This is the comment message  This is the comment message','approved','2021-10-03 15:10:48',NULL),
	(3,26,'This is my name','admin@admin.com','Trying another comment','approved','2021-10-04 05:10:22',NULL);

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `seen`, `created_at`, `updated_at`)
VALUES
	(1,'This is my name','admin@admin.com','Just a message','Contact Message is here',0,'2021-10-12 19:10:37',NULL),
	(2,'This is my name','samuel.annin@shaqexpress.com','Just a message','@if (Session::has(\'message\'))\r\n                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">\r\n                                <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">\r\n                                    <span aria-hidden=\"true\">&times;</span></button>\r\n                                {{ Session(\'message\') }}\r\n                            </div>\r\n                        @endif',0,'2021-10-12 19:10:44',NULL),
	(3,'Nana Akuamoah','admin@admin.com','contacts contacts','contacts contacts contacts',0,'2021-10-12 19:10:52',NULL),
	(4,'Nana Akuamoah','admin@admin.com','subject subject subject','subject subjectsubject subject subject subject',0,'2021-10-12 19:10:16',NULL),
	(5,'isia','admin@admin.com','Just a message','juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl juojaoijl',0,'2021-10-12 19:10:34',NULL);

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table court_dairy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `court_dairy`;

CREATE TABLE `court_dairy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dairy_date` datetime NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `court_dairy` WRITE;
/*!40000 ALTER TABLE `court_dairy` DISABLE KEYS */;

INSERT INTO `court_dairy` (`id`, `dairy_date`, `title`, `description`, `created_at`, `updated_at`)
VALUES
	(4,'2021-10-19 00:00:00','Chambers','Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa  Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa  Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa','2021-10-02 21:10:55',NULL),
	(5,'2021-10-30 00:00:00','MatLab GUI Assignment','$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment  $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment$dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment $dairy->dairy_date MatLab GUI Assignment','2021-10-02 21:10:25',NULL),
	(6,'2021-11-19 00:00:00','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa','2021-10-03 21:10:13',NULL),
	(9,'2021-11-19 00:00:00','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa','2021-10-03 21:10:13',NULL);

/*!40000 ALTER TABLE `court_dairy` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table device_analytics
# ------------------------------------------------------------

DROP TABLE IF EXISTS `device_analytics`;

CREATE TABLE `device_analytics` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `platform` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `device` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `device_type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

LOCK TABLES `device_analytics` WRITE;
/*!40000 ALTER TABLE `device_analytics` DISABLE KEYS */;

INSERT INTO `device_analytics` (`id`, `platform`, `device`, `browser`, `device_type`, `ip_address`, `country_name`, `created_at`, `updated_at`)
VALUES
	(1,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61',NULL,NULL),
	(2,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61',NULL,NULL),
	(3,X'4F532058',X'4D6163696E746F7368',X'4368726F6D65',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 01:30:18',NULL),
	(4,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 01:35:10',NULL),
	(5,X'4F532058',X'4D6163696E746F7368',X'536166617269',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 05:38:15',NULL),
	(6,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 09:04:26',NULL),
	(7,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 09:21:17',NULL),
	(8,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 09:28:15',NULL),
	(9,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 09:28:32',NULL),
	(10,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 09:30:07',NULL),
	(11,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:06:00',NULL),
	(12,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:12:50',NULL),
	(13,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:13:25',NULL),
	(14,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:14:51',NULL),
	(15,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:16:02',NULL),
	(16,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:17:46',NULL),
	(17,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:19:13',NULL),
	(18,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:19:31',NULL),
	(19,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:19:47',NULL),
	(20,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:20:05',NULL),
	(21,X'4F532058',X'4D6163696E746F7368',X'46697265666F78',X'4465736B746F70',X'3132372E302E302E31',X'4768616E61','2021-10-15 10:20:50',NULL);

/*!40000 ALTER TABLE `device_analytics` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table happilex_cats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `happilex_cats`;

CREATE TABLE `happilex_cats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `happilex_cats` WRITE;
/*!40000 ALTER TABLE `happilex_cats` DISABLE KEYS */;

INSERT INTO `happilex_cats` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Infographs','infographs','active','2021-10-05 06:10:40',NULL),
	(2,'Art','art','active','2021-10-05 06:10:04',NULL),
	(3,'Memes','memes','active','2021-10-05 06:10:53',NULL);

/*!40000 ALTER TABLE `happilex_cats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table happilex_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `happilex_comments`;

CREATE TABLE `happilex_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `happilex_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `happilex_comments` WRITE;
/*!40000 ALTER TABLE `happilex_comments` DISABLE KEYS */;

INSERT INTO `happilex_comments` (`id`, `happilex_id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`)
VALUES
	(1,1,'Nmaw Samson','me@ph.mail','This is the comment message to everyone among us here.... This is the comment message to everyone among us here....','approved','2021-10-09 00:00:00',NULL),
	(2,4,'Test comment','manu@gmail.com','Test comment Test comment','approved','2021-10-09 15:10:58',NULL);

/*!40000 ALTER TABLE `happilex_comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table happilexes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `happilexes`;

CREATE TABLE `happilexes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `dislikes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `happilexes` WRITE;
/*!40000 ALTER TABLE `happilexes` DISABLE KEYS */;

INSERT INTO `happilexes` (`id`, `title`, `slug`, `cat_id`, `image`, `views`, `source`, `created_at`, `updated_at`, `likes`, `dislikes`)
VALUES
	(1,'This is the first happilex in the database','this-is-the-first-happilex-in-the-database','1','21100563254studio21.jpg',3,'DLN','2021-10-05 06:10:54',NULL,0,0),
	(3,'App User','app-user','3','21100563254studio21.jpg',1,'DLN','2021-10-05 07:10:28','2021-10-09 02:10:01',0,0),
	(4,'This is the first happilex in the database','this-is-the-first-happilex-in-the-databasem','1','21100563254studio21.jpg',12,'DLN','2021-10-05 06:10:54',NULL,1,1),
	(5,'App User','app-user-d','2','21100563254studio21.jpg',0,'DLN','2021-10-05 07:10:28','2021-10-09 02:10:01',0,0),
	(6,'App User','app-user-df','2','21100563254studio21.jpg',5,'DLN','2021-10-05 07:10:28','2021-10-09 02:10:01',0,0),
	(7,'App User','app-user-0kr','2','21100563254studio21.jpg',3,'DLN','2021-09-05 07:10:28','2021-10-09 02:10:01',0,0);

/*!40000 ALTER TABLE `happilexes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table history
# ------------------------------------------------------------

DROP TABLE IF EXISTS `history`;

CREATE TABLE `history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `history` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;

INSERT INTO `history` (`id`, `history`, `created_at`, `updated_at`)
VALUES
	(1,'<p>history</p>','2021-10-03 00:10:18',NULL),
	(2,'<p>history history</p>','2021-10-03 00:10:43',NULL),
	(3,'<p>history history $data = DB::table(\'pages\')-&gt;where(\'slug\', $slug)-&gt;first();</p>','2021-10-04 10:10:54',NULL),
	(4,'<figure class=\"table\"><table><tbody><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><p>history history $data = DB::table(\'pages\')-&gt;where(\'slug\', $slug)-&gt;first();</p>','2021-10-04 10:10:05',NULL),
	(5,'<figure class=\"table\"><table><tbody><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><p>history history $data = DB::table(\'pages\')-&gt;where(\'slug\', $slug)-&gt;first();</p>','2021-10-04 10:10:09',NULL),
	(6,'<figure class=\"table\"><table><tbody><tr><td>ddd</td><td>ddd</td><td>dddd</td><td>supreme-history</td><td>supreme-historysupreme-historysupreme-history</td><td>supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history supreme-history&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><p>history history $data = DB::table(\'pages\')-&gt;where(\'slug\', $slug)-&gt;first();</p>','2021-10-04 11:10:09',NULL),
	(7,'<h2><a href=\"https://console.cloud.google.com/google/maps-apis?authuser=2&amp;project=shaq-express-app\">Google Maps Platform</a></h2><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Overview</p><p>All Google Maps Platform APIs</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Welcome to Google Maps PlatformGetting started with Google Maps Platform is quick and easy. We\'ve added some tasks to help you get up and running.</p><p>GET STARTED</p><p>Discover and Enable APIsVisit the Marketplace to discover APIs best suited for you, plus learn more about all the ways you can use Google Maps Platform.</p><p>GET STARTED</p><p>Make an API CallExplore a robust library of guides, tutorials, videos, sample apps, and more to learn how to make your first API call</p><p>GET STARTED</p><p>Calculate PricingTo estimate costs, we recommend familiarizing yourself with our pricing calculator to help maximize usage while staying in budget</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h2>Get the most out of Maps Platform</h2><p>&nbsp;</p><p>&nbsp;</p><p>Answer a few questions so we can provide you an experience that is best suited to your Google Maps Platform needs</p><p><a href=\"https://console.cloud.google.com/google/maps-apis/overview?authuser=2&amp;project=shaq-express-app&amp;pli=1\">Complete survey</a></p><p>PERSONALIZE YOUR MAP</p><p>Style Your MapGet more out of your Google Maps account by offering a more customized map that matches your brand</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h2>Enabled APIs</h2><p>Last 30 days</p><figure class=\"table\"><table><thead><tr><th colspan=\"1\">API</th><th colspan=\"1\">Requests</th></tr></thead><tbody><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/places-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Places API</a></td><td>3,483,054</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/geocoding-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Geocoding API</a></td><td>25,798</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/maps-ios-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Maps SDK for iOS</a></td><td>11,964</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/directions-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Directions API</a></td><td>9,605</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/maps-android-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Maps SDK for Android</a></td><td>8,535</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/static-maps-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Maps Static API</a></td><td>-</td></tr></tbody></table></figure><p><a href=\"https://console.cloud.google.com/google/maps-apis/api-list?authuser=2&amp;project=shaq-express-app&amp;pli=1\">View all APIs (8)</a></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h2>Community support</h2><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Select Maps API</p><p>&nbsp;</p><p><a href=\"https://console.cloud.google.com/google/maps-apis/support?authuser=2&amp;project=shaq-express-app&amp;pli=1\">Go to Maps support</a></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h2>Requests by API</h2><p>Last 30 days</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Line chart</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Directions API: 424/day</p><p>Geocoding API: 1,645/day</p><p>Maps SDK for Android: 317/day</p><p>Maps SDK for iOS: 741/day</p><p>Places API: 171,550/day</p><p><a href=\"https://console.cloud.google.com/google/maps-apis/metrics?authuser=2&amp;project=shaq-express-app&amp;pli=1\">View metrics</a></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h2>Billing</h2><p>Last 3 months</p><p>&nbsp;</p><p>You are not authorized to view this project\'s billing information</p><p>&nbsp;</p><p>&nbsp;</p>','2021-10-09 03:10:46',NULL),
	(8,'<h2><a href=\"https://console.cloud.google.com/google/maps-apis?authuser=2&amp;project=shaq-express-app\">Google Maps Platform</a></h2><p>&nbsp;</p><p>Overview</p><p>All Google Maps Platform APIs</p><p>&nbsp;</p><p>Welcome to Google Maps PlatformGetting started with Google Maps Platform is quick and easy. We\'ve added some tasks to help you get up and running.</p><p>GET STARTED</p><p>Discover and Enable APIsVisit the Marketplace to discover APIs best suited for you, plus learn more about all the ways you can use Google Maps Platform.</p><p>GET STARTED</p><p>Make an API CallExplore a robust library of guides, tutorials, videos, sample apps, and more to learn how to make your first API call</p><p>GET STARTED</p><p>Calculate PricingTo estimate costs, we recommend familiarizing yourself with our pricing calculator to help maximize usage while staying in budget</p><p>&nbsp;</p><h2>Get the most out of Maps Platform</h2><p>Answer a few questions so we can provide you an experience that is best suited to your Google Maps Platform needs</p><p><a href=\"https://console.cloud.google.com/google/maps-apis/overview?authuser=2&amp;project=shaq-express-app&amp;pli=1\">Complete survey</a></p><p>PERSONALIZE YOUR MAP</p><p>Style Your MapGet more out of your Google Maps account by offering a more customized map that matches your brand</p><p>&nbsp;</p><h2>Enabled APIs</h2><p>Last 30 days</p><figure class=\"table\"><table><thead><tr><th colspan=\"1\">API</th><th colspan=\"1\">Requests</th></tr></thead><tbody><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/places-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Places API</a></td><td>3,483,054</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/geocoding-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Geocoding API</a></td><td>25,798</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/maps-ios-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Maps SDK for iOS</a></td><td>11,964</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/directions-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Directions API</a></td><td>9,605</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/maps-android-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Maps SDK for Android</a></td><td>8,535</td></tr><tr><td><a href=\"https://console.cloud.google.com/google/maps-apis/apis/static-maps-backend.googleapis.com/metrics?authuser=2&amp;project=shaq-express-app\">Maps Static API</a></td><td>-</td></tr></tbody></table></figure><p><a href=\"https://console.cloud.google.com/google/maps-apis/api-list?authuser=2&amp;project=shaq-express-app&amp;pli=1\">View all APIs (8)</a></p><p>&nbsp;</p><h2>Community support</h2><p>Select Maps API</p><p>&nbsp;</p><p><a href=\"https://console.cloud.google.com/google/maps-apis/support?authuser=2&amp;project=shaq-express-app&amp;pli=1\">Go to Maps support</a></p><p>&nbsp;</p><h2>Requests by API</h2><p>Last 30 days</p><p>Line chart</p><p>Directions API: 424/day</p><p>Geocoding API: 1,645/day</p><p>Maps SDK for Android: 317/day</p><p>Maps SDK for iOS: 741/day</p><p>Places API: 171,550/day</p><p><a href=\"https://console.cloud.google.com/google/maps-apis/metrics?authuser=2&amp;project=shaq-express-app&amp;pli=1\">View metrics</a></p><h2>Billing</h2><p>Last 3 months</p><p>You are not authorized to view this project\'s billing information</p>','2021-10-14 16:10:35',NULL);

/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table justices
# ------------------------------------------------------------

DROP TABLE IF EXISTS `justices`;

CREATE TABLE `justices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `justices` WRITE;
/*!40000 ALTER TABLE `justices` DISABLE KEYS */;

INSERT INTO `justices` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`)
VALUES
	(2,'Samuel Annin Yeboah','Samuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin YeboahSamuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin YeboahSamuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin YeboahSamuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin YeboahSamuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin Yeboah','211004103211studio9.jpg','2021-10-03 00:10:25',NULL),
	(3,'Samuel Annin Yeboah','Samuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin YeboahSamuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin YeboahSamuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin YeboahSamuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin YeboahSamuel Annin Yeboah\r\nSamuel Annin Yeboah\r\nSamuel Annin Yeboah','211004103211studio9.jpg','2021-10-03 00:10:25',NULL),
	(4,'Nsromapa Nancy','Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy Nsromapa Nancy','211004103211studio9.jpg','2021-10-04 22:10:11',NULL);

/*!40000 ALTER TABLE `justices` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table law_firms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `law_firms`;

CREATE TABLE `law_firms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `law_firm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawyer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_call` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `law_firms` WRITE;
/*!40000 ALTER TABLE `law_firms` DISABLE KEYS */;

INSERT INTO `law_firms` (`id`, `law_firm`, `image`, `lawyer`, `about`, `year_of_call`, `position`, `slug`, `created_at`, `updated_at`, `seo_title`, `seo_description`, `seo_keywords`)
VALUES
	(1,'Supreme Court of Law of Country Ghana','21100822935avatar2.png','Emmanuel Agyei','<p>This is the supreme court of Ghana hehehehe This is the supreme court of Ghana hehehehe This is the supreme court of Ghana hehehehe This is the supreme court of Ghana</p>','2020','The Chief Justice','supreme-court-of-law-of-country-ghanae','2021-10-08 02:10:35','2021-10-08 02:10:13','Supreme Court of','Supreme Court sof Law\"','Supreme,of Ghana,Supreme Court of Law'),
	(2,'Magistrate court','21100822935avatar2.png','Dacosta Osei','<p>This is the supreme court of Ghana hehehehe This is the supreme court of Ghana hehehehe This is the supreme court of Ghana hehehehe This is the supreme court of Ghana</p>','2020','The Chief Justice','supreme-court-of-law-of-country-ghanad','2021-10-08 02:10:35','2021-10-08 02:10:13','Supreme Court of','Supreme Court sof Law\"','Supreme,of Ghana,Supreme Court of Law'),
	(3,'Appeal Court of law','21100822935avatar2.png','Kwaku Daniel','<p>This is the supreme court of Ghana hehehehe This is the supreme court of Ghana hehehehe This is the supreme court of Ghana hehehehe This is the supreme court of Ghana</p>','2020','The Chief Justice','supreme-court-of-law-of-country-ghana','2021-10-08 02:10:35','2021-10-08 02:10:13','Supreme Court of','Supreme Court sof Law\"','Supreme,of Ghana,Supreme Court of Law');

/*!40000 ALTER TABLE `law_firms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table legal_work_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `legal_work_comments`;

CREATE TABLE `legal_work_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `legal_work_comments` WRITE;
/*!40000 ALTER TABLE `legal_work_comments` DISABLE KEYS */;

INSERT INTO `legal_work_comments` (`id`, `news_id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`)
VALUES
	(1,1,'legal_work_comments','admin@admin.com','legal_work_comments legal_work_comments legal_work_comments','approved','2021-10-10 19:10:46',NULL);

/*!40000 ALTER TABLE `legal_work_comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table legal_works
# ------------------------------------------------------------

DROP TABLE IF EXISTS `legal_works`;

CREATE TABLE `legal_works` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `news_body` longtext COLLATE utf8mb4_unicode_ci,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci,
  `categories_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `subcategories_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `tags` text COLLATE utf8mb4_unicode_ci,
  `reviewers` longtext COLLATE utf8mb4_unicode_ci,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `views` int(11) DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `likes` int(11) DEFAULT '0',
  `dislikes` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `legal_works` WRITE;
/*!40000 ALTER TABLE `legal_works` DISABLE KEYS */;

INSERT INTO `legal_works` (`id`, `title`, `slug`, `news_body`, `short_desc`, `categories_id`, `subcategories_id`, `image`, `tags`, `reviewers`, `seo_title`, `seo_description`, `seo_keywords`, `views`, `status`, `author`, `created_at`, `updated_at`, `likes`, `dislikes`)
VALUES
	(1,'legal_work','legal-work','<p>legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work</p>','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','1','2,3','211010732401.jpg','shjkls,lkslsls,s','amalie@email.com,wladimir@email.com','Supreme Court of Law','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','sms,s,ssffrews',14,'publish','Samuel ANNIN','2021-10-08 06:10:34','2021-10-10 19:10:40',1,1),
	(2,'legal_work','legal-work','<p>legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work</p>','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','1','2,3','211010732262.jpg','shjkls,lkslsls,s','amalie@email.com,wladimir@email.com','Supreme Court of Law','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','sms,s,ssffrews',2,'publish','Samuel ANNIN','2021-10-08 06:10:34','2021-10-10 19:10:26',0,1),
	(3,'legal_work','legal-work','<p>legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work</p>','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','1','2','21101073209avatar-16.png','shjkls,lkslsls,s','amalie@email.com,wladimir@email.com','Supreme Court of Law','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','sms,s,ssffrews',0,'publish','Samuel ANNIN','2021-10-08 06:10:34','2021-10-10 19:10:09',0,0),
	(4,'legal_work','legal-work','<p>legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work</p>','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','1','2','21101073157avatar-4.png','shjkls,lkslsls,s','amalie@email.com,wladimir@email.com','Supreme Court of Law','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','sms,s,ssffrews',0,'publish','Samuel ANNIN','2021-10-08 06:10:34','2021-10-10 19:10:57',0,0),
	(5,'legal_work','legal-work','<p>legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work</p>','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','1','2','21101073055avatar-2.png','shjkls,lkslsls,s','amalie@email.com,wladimir@email.com','Supreme Court of Law','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','sms,s,ssffrews',1,'publish','Samuel ANNIsN','2021-10-08 06:10:34','2021-10-10 19:10:55',0,0),
	(6,'dDa bi menso m3y3 nnipa','dda-bi-menso-m3y3-nnipa','<p>dDa bi menso m3y3 nnipa</p>','dDa bi menso m3y3 nnipa','','2,4','','dDa bi menso m3y3 nnipa',NULL,'dDa bi menso m3y3 nnipa','dDa bi menso m3y3 nnipa','dDa bi menso m3y3 nnipa',0,'draft','dDa bi menso m3y3 nnipa','2021-10-15 10:10:14',NULL,0,0);

/*!40000 ALTER TABLE `legal_works` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(5,'2021_09_11_004610_create_categories_table',1),
	(7,'2021_09_12_062721_create_settings_table',2),
	(8,'2021_09_13_022001_create_news_table',3),
	(11,'2021_10_02_211106_court_dairy',4),
	(13,'2021_10_02_231514_justices',5),
	(15,'2021_10_03_002538_history',6),
	(16,'2021_10_03_145927_create_comments_table',7),
	(17,'2021_10_03_185144_create_pages_table',8),
	(18,'2021_10_03_193531_create_advertisements_table',9),
	(19,'2021_10_03_225900_create_resources_table',10),
	(20,'2021_10_03_230400_create_resource_cats_table',10),
	(21,'2021_10_05_050121_create_happilexes_table',11),
	(22,'2021_10_05_050339_create_happilex_cats_table',11),
	(23,'2021_10_05_125311_create_opinions_table',12),
	(24,'2021_10_05_130713_create_opinion_cats_table',12),
	(25,'2021_10_06_213357_create_law_firms_table',13),
	(26,'2021_10_09_011234_create_store_categories_table',14),
	(27,'2021_10_09_014742_create_store_products_table',15),
	(28,'2021_10_12_190007_create_contacts_table',16),
	(29,'2021_10_12_192452_create_news_letters_table',17);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `news_body` longtext COLLATE utf8mb4_unicode_ci,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci,
  `categories_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `subcategories_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `tags` text COLLATE utf8mb4_unicode_ci,
  `reviewers` longtext COLLATE utf8mb4_unicode_ci,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `views` int(11) DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `likes` int(11) DEFAULT '0',
  `dislikes` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `slug`, `news_body`, `short_desc`, `categories_id`, `subcategories_id`, `image`, `tags`, `reviewers`, `seo_title`, `seo_description`, `seo_keywords`, `views`, `status`, `author`, `created_at`, `updated_at`, `likes`, `dislikes`)
VALUES
	(5,'legal_work','legal-work-p','<p>legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_worklegal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work</p>','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','1','2','21100532610landscape2.jpg','shjkls,lkslsls,s','adam@email.com,wladimir@email.com','Supreme Court of Law','legal_work legal_work legal_work legal_work legal_work legal_work legal_work legal_worklegal_work legal_work','sms,s,ssffrews',1,'publish','Samuel ANNIsN','2021-09-13 06:09:45','2021-10-10 19:10:15',0,0),
	(6,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghanwk-','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','{We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through}','2,3,4,2,3,4','2,3,4,7','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',24,'draft',NULL,'2021-09-13 15:09:23','2021-09-30 05:09:42',0,0),
	(7,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghanwleke','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through','2,3,4','2,3,4,7,8','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',0,'publish',NULL,'2021-09-13 15:09:23',NULL,0,0),
	(8,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipalelru','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2,8,6','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',2,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(9,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipa4yi3','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2,9,15','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',1,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(10,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghanu4w','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through','2,3,4','2,3,4,7','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',0,'publish',NULL,'2021-09-13 15:09:23',NULL,0,0),
	(11,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghan9rlr','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through','2,3,4','2,3,4,6,15','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',0,'publish',NULL,'2021-09-13 15:09:23',NULL,0,0),
	(12,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghani4wk','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through','2,3,4','2,3,4,5,15','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',0,'publish',NULL,'2021-09-13 15:09:23',NULL,0,0),
	(13,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipa-euihiqhan','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2,4','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(14,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipa-l32ihw','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2,5,15','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(15,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghan-3ysr','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through','2,3,4','2,3,4,6','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',15,'publish',NULL,'2021-09-13 15:09:23',NULL,0,0),
	(16,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipao0ke','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2,7','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(17,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipa-3jwy','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2,10','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(18,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipaoeij32','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2,15','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(19,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipai3uejl0','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(20,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipa0-3jwle','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{{Da bi menso m3y3 nnipa}}','1,2,9,2','2','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 06:09:19',0,0),
	(21,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghanlrki','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','{We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through}','2,3,4,9,2,3,4','2,3,4','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',3,'publish',NULL,'2021-09-13 15:09:23','2021-09-30 06:09:18',0,0),
	(22,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghanwj32','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through','2,3,4','2,3,4','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',0,'publish',NULL,'2021-09-13 15:09:23',NULL,0,0),
	(23,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipaorr','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(24,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nniptkltrjw','<p>Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipaDa bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa Da bi menso m3y3 nnipa</p>','{Da bi menso m3y3 nnipa}','1,2','2','21100532610landscape2.jpg',NULL,'adam@email.com,wladimir@email.com','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa','Da bi menso m3y3 nnipa',0,'publish',NULL,'2021-09-13 06:09:45','2021-09-30 05:09:41',0,0),
	(25,'We are the leading source of breaking legal news in Ghan','we-are-the-leading-source-of-breaking-legal-news-in-ghana5i8jeui4','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','{We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through}','2,3,4,2,3,4','2,3,4','21100532610landscape2.jpg',NULL,'adam@email.com,amalie@email.com,wladimir@email.com,samantha@email.com,estefanía@email.com,natasha@email.com','We provide updated We provide updated','We provide updated, reliable, and concise daily legal news,','We,provide,updated, reliable, and concise daily legal news, court updates, legal articles, and',9,'publish',NULL,'2021-09-13 15:09:23','2021-10-04 03:10:17',1,1),
	(26,'That is love','hellow-de','<p>&nbsp;</p><p>&nbsp;That is love That is <a href=\"google.com\">love</a> That is love That is love That is love That is love That is love That is love That is love That is love Th</p><p>at is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That i</p><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"></figure><p>s love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love</p>','That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love','1','1','21100532610landscape2.jpg','jd,lslsl, kdkjd., lldl,ldlld,kdkkd,dkd,\'d,.d, k','adam@email.com,wladimir@email.com','That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love','That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love That is love','That,is,Aquaba',34,'publish','Samuel ANNIN','2021-09-30 15:09:29','2021-10-07 10:10:30',4,3),
	(27,'Tit','tit','211 0053 26 10la ndsc ape2','{{ $data->seo_keywords }}','4,6,6','6','21100532610landscape2.jpg','dddd',NULL,'Title','{{ $data->seo_keywords }}','dd,fff,ddddddd',18,'publish',NULL,'2021-10-05 15:10:10','2021-10-05 15:10:57',0,0),
	(28,'We provide updated We provide updated','we-provide-updated-we-provide-updated','<p>We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updatedWe provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated</p><figure class=\"image\"><img src=\"/ckfinder/userfiles/images/bg-1.jpg\"><figcaption>We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated</figcaption></figure>','We provide updated We provide updated We provide updated We provide updated We provide updated We provide updated','','2,3,4,5','21101292801bg10.jpg','ge,e,rrrrw,ewwe,r,f,g,rr,wewee,wrewe','adam@email.com,amalie@email.com,wladimir@email.com','We provide updated We provide updated','We provide updated We provide updated','We provide updated We provide updated',19,'publish','Samuel ANNIN','2021-10-12 09:10:01','2021-10-12 09:10:53',2,0);

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news_letters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news_letters`;

CREATE TABLE `news_letters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `news_letters` WRITE;
/*!40000 ALTER TABLE `news_letters` DISABLE KEYS */;

INSERT INTO `news_letters` (`id`, `email`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'samuel.annin@shaqexpress.com','active','2021-10-12 19:10:31',NULL),
	(2,'samuel.annin@shaqexpress.com','active','2021-10-12 19:10:31',NULL),
	(3,'samuel.annin@sma.com','active','2021-10-13 14:10:45',NULL);

/*!40000 ALTER TABLE `news_letters` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table opinion_cats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `opinion_cats`;

CREATE TABLE `opinion_cats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `opinion_cats` WRITE;
/*!40000 ALTER TABLE `opinion_cats` DISABLE KEYS */;

INSERT INTO `opinion_cats` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`)
VALUES
	(4,'Land law','landlaw','Active','2021-10-05 13:10:11',NULL),
	(5,'Company law','companylaw','Active','2021-10-05 13:10:23',NULL),
	(6,'Commecial law','commeciallaw','Active','2021-10-10 22:10:40',NULL),
	(7,'Human Right Law','humanrightlaw','Active','2021-10-10 22:10:15',NULL),
	(8,'Contact Law','contactlaw','Active','2021-10-10 22:10:34',NULL),
	(9,'General Law','generallaw','Active','2021-10-10 22:10:42',NULL),
	(10,'Family Law','familylaw','Active','2021-10-10 22:10:55',NULL),
	(11,'Maritime Law','maritimelaw','Active','2021-10-10 22:10:11',NULL),
	(12,'Lawyers and Court','lawyersandcourt','Active','2021-10-10 22:10:23',NULL);

/*!40000 ALTER TABLE `opinion_cats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table opinions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `opinions`;

CREATE TABLE `opinions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `views` int(11) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `dislikes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `opinions` WRITE;
/*!40000 ALTER TABLE `opinions` DISABLE KEYS */;

INSERT INTO `opinions` (`id`, `title`, `short_desc`, `image`, `cat_id`, `body`, `source`, `tags`, `slug`, `status`, `created_at`, `updated_at`, `seo_title`, `seo_description`, `seo_keywords`, `views`, `likes`, `dislikes`)
VALUES
	(2,'Title of the advert','We are the leading source of breaking legal news in Ghana. We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business, technology, election petition coverage, and crime. If it is about the law, we report it with accuracy. ','21100542242landscape13.jpg',4,'<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=0rOer3k2DWg\"></oembed></figure>','Some where in Africa','ssssss,ssssssss','title-of-the-advert','publish','2021-10-05 16:10:42','2021-10-05 16:10:21','Da bi menso m3y3 nnipa','https://www.youtube.com/watch?v=0rOer3k2DWg','shha,sdsdhas',24,2,2),
	(3,'Title of the advert','We are the leading source of breaking legal news in Ghana. We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business, technology, election petition coverage, and crime. If it is about the law, we report it with accuracy. ','21100542242landscape13.jpg',4,'<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=0rOer3k2DWg\"></oembed></figure>','Some where in Africa','ssssss,ssssssss','title-of-the-advert-s','publish','2021-10-05 16:10:42','2021-10-05 16:10:21','Da bi menso m3y3 nnipa','https://www.youtube.com/watch?v=0rOer3k2DWg','shha,sdsdhas',7,0,0),
	(4,'Title of the advert','We are the leading source of breaking legal news in Ghana. We provide updated, reliable, and concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business, technology, election petition coverage, and crime. If it is about the law, we report it with accuracy. ','21100542242landscape13.jpg',5,'<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=0rOer3k2DWg\"></oembed></figure>','Some where in Africa','ssssss,ssssssss','title-of-the-advert0','publish','2021-10-05 16:10:42','2021-10-05 16:10:21','Da bi menso m3y3 nnipa','https://www.youtube.com/watch?v=0rOer3k2DWg','shha,sdsdhas',8,0,1);

/*!40000 ALTER TABLE `opinions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `title`, `slug`, `body`, `created_at`, `updated_at`)
VALUES
	(1,'Privacy Policies','privacy-policies','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','2021-10-03 00:00:00','2021-10-09 04:10:05'),
	(2,'Terms of Use','terms-of-use','<h2><strong>We provide updated, reliable, a</strong></h2><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/images/D2B02B44-C5FF-4F19-907B-3BD418D953BA.jpeg\"><figcaption>We provide updated, reliable, and concise daily legal news, court&nbsp;</figcaption></figure><h2><strong>nd </strong>concise daily legal news, court updates, legal articles, and weekly newsletters. Browse through our website for the latest legal stories in business. technology, election petition coverage, and crime. If it is about the law, we report it with accuracy.&nbsp;</h2>','2021-10-03 00:00:00','2021-10-03 00:00:00');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('saytoonz05@gmail.com','$2y$10$Gx4YHrlIk3hSVXpvJhD2LujTe6lXJss/MoynDbMj3s26RV6PmyBN6','2021-10-14 08:34:31');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_bin DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`)
VALUES
	(1,X'416464204E657773','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(2,X'56696577204E657773','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(3,X'45646974204E657773','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(4,X'44656C657465204E657773','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(5,X'41646420596F757475626520566964656F','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(6,X'44656C65746520596F757475626520566964656F','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(7,X'41646420506F6463617374','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(8,X'44656C65746520506F6463617374','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(9,X'41646420436F757274204461697279','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(10,X'4564697420436F757274204469617279','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(11,X'44656C65746520436F757274204469617279','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(12,X'5669657720596F757475626520566964656F73','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(13,X'5669657720506F646361737473','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(14,X'5669657720436F757274204469617279','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(15,X'56696577204A75737469636573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(16,X'416464204A75737469636573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(17,X'45646974204A75737469636573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(18,X'44656C657465204A75737469636573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(19,X'53757072656D6520436F75727420486973746F7279','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(20,X'56696577205265736F7572636573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(21,X'416464205265736F7572636573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(22,X'437265617465205265736F75726365732043617465676F72696573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(23,X'44656C657465205265736F7572636573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(24,X'416464204C6567616C20576F726B','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(25,X'56696577204C6567616C20576F726B','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(26,X'44656C657465204C6567616C20576F726B','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(27,X'45646974204C6567616C20576F726B','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(28,X'56696577204C6177206669726D','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(29,X'416464204C6177206669726D','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(30,X'45646974204C6177206669726D','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(31,X'44656C657465204C6177206669726D','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(32,X'4F70696E696F6E732043617465676F72696573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(33,X'56696577204F70696E696F6E73','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(34,X'416464204F70696E696F6E73','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(35,X'45646974204F70696E696F6E73','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(36,X'44656C657465204F70696E696F6E73','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(37,X'566965772048617070696C6578','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(38,X'456469742048617070696C6578','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(39,X'4164642048617070696C6578','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(40,X'44656C6574652048617070696C6578','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(41,X'4164642048617070696C65782043617465676F7279','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(42,X'44656C6574652048617070696C65782043617465676F7279','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(43,X'566965772053746F72652050726F6475637473','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(44,X'456469742053746F72652050726F6475637473','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(45,X'4164642053746F72652050726F6475637473','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(46,X'44656C6574652053746F72652050726F6475637473','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(47,X'53746F72652043617465676F72696573','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(48,X'536974652053657474696E6773','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(49,X'4164766572746973656D656E74','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(50,X'55736572204D616E6167656D656E74','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(51,X'5365652044617368626F6172642053746174697374696373','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(52,X'4E657773204C6574746572205375627363726962657273','2021-10-14 00:00:00','2021-10-14 00:00:00');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table resource_cats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resource_cats`;

CREATE TABLE `resource_cats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `resource_cats` WRITE;
/*!40000 ALTER TABLE `resource_cats` DISABLE KEYS */;

INSERT INTO `resource_cats` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'1st Resource','1st-resource','display','2021-10-04 04:10:54',NULL),
	(2,'Second Resource','second-resource','display','2021-10-04 04:10:23',NULL),
	(3,'Da bi menso m3y3 nnipa','da-bi-menso-m3y3-nnipa','display','2021-10-14 16:10:08',NULL);

/*!40000 ALTER TABLE `resource_cats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resources
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resources`;

CREATE TABLE `resources` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `resources` WRITE;
/*!40000 ALTER TABLE `resources` DISABLE KEYS */;

INSERT INTO `resources` (`id`, `title`, `category_id`, `image`, `slug`, `status`, `created_at`, `updated_at`)
VALUES
	(4,'We are the leading source of breaking legal news in Ghana',1,'21100450543DLN new timelines.pdf','we-are-the-leading-source-of-breaking-legal-news-in-ghana','display','2021-10-04 05:10:43',NULL),
	(5,'We are the leading source of breaking legal news in Ghana',2,'21100450543DLN new timelines.pdf','we-are-the-leading-source-of-breaking-legal-news-in-ghana','display','2021-09-04 05:10:43',NULL),
	(6,'Da bi menso m3y3 nnipa',1,'21101444442ECOTALKS 2.3 - Youth Sustainability Festival_concept_14-9-2021.docx','da-bi-menso-m3y3-nnipa','display','2021-10-14 16:10:42',NULL),
	(7,'We are the leading source of breaking legal news in Ghana',2,'21100450543DLN new timelines.pdf','we-are-the-leading-source-of-breaking-legal-news-in-ghana','display','2021-09-04 05:10:43',NULL),
	(8,'We are the leading source of breaking legal news in Ghana',1,'21100450543DLN new timelines.pdf','we-are-the-leading-source-of-breaking-legal-news-in-ghana','display','2021-10-04 05:10:43',NULL),
	(9,'Da bi menso m3y3 nnipa',1,'21101444442ECOTALKS 2.3 - Youth Sustainability Festival_concept_14-9-2021.docx','da-bi-menso-m3y3-nnipa','display','2021-10-14 16:10:42',NULL),
	(10,'We are the leading source of breaking legal news in Ghana',1,'21100450543DLN new timelines.pdf','we-are-the-leading-source-of-breaking-legal-news-in-ghana','display','2021-10-04 05:10:43',NULL);

/*!40000 ALTER TABLE `resources` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dennislaw News',
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `image`, `footer_image`, `social`, `about`, `title`, `description`, `keywords`, `updated_at`, `created_at`)
VALUES
	(1,'211012100933logo.jpg','211012101105logo2_footer.png','https://www.facebook.com/xrideghana,https://www.instagram.com/xrideghana,https://www.twitter.com/xrideghana,https://www.youtube.com/xrideghana,https://www.linkedin.com/xrideghana','To send messages to iOS devices, Firebase Cloud Messaging uses the Apple Push Notification Service. Using this services requires an Apple Developer Account and an Apple Push Notification Authentication Key. Both can be created in the Apple Developer Member Center. Follow the instructions of the documentation, ignoring the section called “Create the Provisioning Profile”. After successful creation download the authentication key and store in a secure place.','Dennislaw News','Dennislaw News','Dennislaw, News, Dennis, law, Dennislaw News, Ghana news, lawyers, justices, resources, general news, supreme court, court news','2021-10-12 10:10:05','2021-09-12 11:09:17');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table store_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `store_categories`;

CREATE TABLE `store_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `store_categories` WRITE;
/*!40000 ALTER TABLE `store_categories` DISABLE KEYS */;

INSERT INTO `store_categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Books','books','active','2021-10-09 01:10:23',NULL),
	(3,'T-shirts','t-shirts','active','2021-10-09 01:10:41',NULL);

/*!40000 ALTER TABLE `store_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table store_products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `store_products`;

CREATE TABLE `store_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `store_products` WRITE;
/*!40000 ALTER TABLE `store_products` DISABLE KEYS */;

INSERT INTO `store_products` (`id`, `title`, `slug`, `image`, `cat_id`, `price`, `bio`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Moon Dancing','moon-dance','211009238088.jpg','2',10.9309,'Contact DLN\n+23323456789\ninfo@email.com','active','2021-10-09 01:10:47','2021-10-09 02:10:08'),
	(2,'Moon Dances','moon-dance','211009238088.jpg','1',10.9309,'Contact DLN\n+23323456789\ninfo@email.com','active','2021-10-09 01:10:47','2021-10-09 02:10:08'),
	(3,'Moon Dancer','moon-dance','211009238088.jpg','3',10.9309,'Contact DLN\n+23323456789\ninfo@email.com','active','2021-10-09 01:10:47','2021-10-09 02:10:08'),
	(4,'Moon Danceeer is going to school','moon-dance','211009238088.jpg','3',10.9309,'Contact DLN\n+23323456789\ninfo@email.com','active','2021-10-09 01:10:47','2021-10-09 02:10:08'),
	(5,'Moon Dan','moon-dance','211009238088.jpg','1',10.9309,'Contact DLN\n+23323456789\ninfo@email.com','active','2021-10-09 01:10:47','2021-10-09 02:10:08'),
	(6,'Moon Dance','moon-dance','211009238088.jpg','1',10.9309,'Contact DLN\n+23323456789\ninfo@email.com','active','2021-10-09 01:10:47','2021-10-09 02:10:08');

/*!40000 ALTER TABLE `store_products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sub_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sub_categories`;

CREATE TABLE `sub_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;

INSERT INTO `sub_categories` (`id`, `category_id`, `title`, `slug`, `status`, `created_at`, `updated_at`)
VALUES
	(1,1,'Business','general-news/business','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(2,1,'Courts','general-news/courts','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(3,1,'Crime','general-news/crime','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(4,1,'Election Petition','general-news/election-petition','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(5,2,'Supreme Court News','general-news/supreme-court-news','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(6,3,'Africa','general-news/africa','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(7,3,'Europe','general-news/europe','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(8,3,'US','general-news/us','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(9,3,'Middle East','general-news/middle-east','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(10,3,'Others','general-news/others','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(11,2,'Court Dairy','supreme-courtdiary','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(12,2,'Justices','supreme-justices','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(13,2,'History','page/supreme-history','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(14,2,'Resources','supreme-resources','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(15,6,'Tech','general-news/tech','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(16,4,'Legal Works','legal-works','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(17,4,'Law Firms','lawfirm','active','2021-10-01 00:00:00','2021-10-01 00:00:00'),
	(19,1,'Audio/Podcasts','audio-podcast','inactive','2021-10-14 00:00:00','2021-10-14 00:00:00'),
	(20,1,'Videos','videos','inactive','2021-10-14 00:00:00','2021-10-14 00:00:00');

/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email_verified_at`, `email`, `image`, `permissions`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Developer',NULL,'saytoonz05@gmail.com','211014125004092714995843ac999956089fb4392955.jpg','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52','$2y$10$fSumWIWBfoV5X8b6ZGnKz.ExgCBaOjcxfoXkpjVfK27yCuWw.2Oya','BpCWq2HmG8pPjd2ojMZaukg6jcGlTikcsQKQuHriYMH63RaLx6khiNXfHPB8','2021-10-14 07:18:56','2021-10-14 07:18:56'),
	(3,'DLN Developer',NULL,'developer@dln.com','211014125004092714995843ac999956089fb4392955.jpg','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52','$2y$10$80Uoh8lEqJPkXPgOnB1sfOCcBUlRkQ1BcGc84fArcKdCOAE.O9NdC','2ucFx7eDCcO6Ys55MZWTXZJcPaMzJNtGdYXVRRR7pF0hZeoqVibgeA164As6','2021-10-14 09:37:13','2021-10-14 20:10:20');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_bin,
  `short_desc` text COLLATE utf8mb4_bin,
  `url` text COLLATE utf8mb4_bin,
  `slug` text COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_bin NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;

INSERT INTO `videos` (`id`, `title`, `short_desc`, `url`, `slug`, `created_at`, `updated_at`, `status`)
VALUES
	(1,X'566964656F2054657374',X'566964656F205465737420566964656F205465737420566964656F2054657374566964656F205465737420566964656F205465737420566964656F2054657374566964656F205465737420566964656F205465737420566964656F2054657374566964656F205465737420566964656F205465737420566964656F2054657374566964656F205465737420566964656F205465737420566964656F2054657374566964656F205465737420566964656F205465737420566964656F2054657374566964656F205465737420566964656F205465737420566964656F2054657374566964656F205465737420566964656F205465737420566964656F2054657374',X'68747470733A2F2F796F7574752E62652F78414C43704C5863495959',X'746573742D766964656F','2021-10-01 00:00:00','2021-10-01 00:00:00',X'7075626C697368'),
	(4,X'54546573742032',X'54657374203220766964656F54657374203220766964656F54657374203220766964656F54657374203220766964656F54657374203220766964656F2054657374203220766964656F54657374203220766964656F2054657374203220766964656F54657374203220766964656F54657374203220766964656F54657374203220766964656F54657374203220766964656F2054657374203220766964656F54657374203220766964656F',X'68747470733A2F2F7777772E796F75747562652E636F6D2F77617463683F763D3455345F74725F72327463',X'746573742D322D766964656F','2021-10-01 00:00:00','2021-10-01 00:00:00',X'7075626C697368'),
	(6,X'54546573742032',X'54657374203220766964656F54657374203220766964656F54657374203220766964656F54657374203220766964656F54657374203220766964656F2054657374203220766964656F54657374203220766964656F2054657374203220766964656F54657374203220766964656F54657374203220766964656F54657374203220766964656F54657374203220766964656F2054657374203220766964656F54657374203220766964656F',X'68747470733A2F2F7777772E796F75747562652E636F6D2F77617463683F763D3455345F74725F72327463',X'746573742D322D766964656F','2021-10-01 00:00:00','2021-10-01 00:00:00',X'7075626C697368'),
	(7,X'72727573692D746F736C6569736B',X'5468697320497320546865204F6666696369616C20566964656F204F6620446F6E20456C766920506572666F726D696E67202759616162612720466561747572696E67204B77656B7520466C69636B20416E642059617720546F672E0D0A0D0A54686520566964656F2057617320446972656374656420416E642053686F74204279204D797374612042727563652E0D0A0D0A4765742054686520417564696F2042656C6F773A0D0A0D0A417564696F6D61636B3A2068747470733A2F2F637574742E6C792F6A6D34696F6A500D0A426F6F6D706C61793A2068747470733A2F2F637574742E6C792F686D34694742310D0A536F756E64636C6F75643A2068747470733A2F2F637574742E6C792F566D3461523635',X'68747470733A2F2F796F7574752E62652F397A355F44324258736B55',X'72727573692D746F736C6569736B','2021-10-14 05:10:59',NULL,X'6472616674'),
	(8,X'4461206269206D656E736F206D337933206E6E697061',X'21696E5F61727261792835302C6578706C6F646528272C272C5C417574683A3A7573657228292D3E726F6C652929',X'68747470733A2F2F796F7574752E62652F397A355F44324258736B55',X'67656E6572616C2D6E6577','2021-10-14 16:10:59',NULL,X'6472616674');

/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
