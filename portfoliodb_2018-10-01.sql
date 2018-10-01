# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.41)
# Database: portfoliodb
# Generation Time: 2018-10-01 11:08:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(1000) DEFAULT '',
  `image` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_me` WRITE;
/*!40000 ALTER TABLE `about_me` DISABLE KEYS */;

INSERT INTO `about_me` (`id`, `text`, `image`)
VALUES
	(1,'I am Ariel Walker-Cochrane, I am a 31 year old human from Katikati, New Zealand.\n                I am currently training to be a software programmer at Mayden Academy in Bath, England.','Picture-of-my-face.jpg');

/*!40000 ALTER TABLE `about_me` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contact_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact_info`;

CREATE TABLE `contact_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `phone_number` varchar(30) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT '',
  `other` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `contact_info` WRITE;
/*!40000 ALTER TABLE `contact_info` DISABLE KEYS */;

INSERT INTO `contact_info` (`id`, `name`, `phone_number`, `email_address`, `other`)
VALUES
	(1,'Ariel Walker-Cochrane','+44 7 849684769','arielwalkercochrane@gmail.com','');

/*!40000 ALTER TABLE `contact_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table home
# ------------------------------------------------------------

DROP TABLE IF EXISTS `home`;

CREATE TABLE `home` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `background_image` varchar(50) DEFAULT NULL,
  `title_text` varchar(100) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `home` WRITE;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;

INSERT INTO `home` (`id`, `background_image`, `title_text`, `logo`)
VALUES
	(1,'Beach-banner.jpg','Ariel Walker-Cochrane Trainee Software Programmer','Logo.png');

/*!40000 ALTER TABLE `home` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table portfolio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `project_title` varchar(100) DEFAULT '',
  `image` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;

INSERT INTO `portfolio` (`id`, `project_title`, `image`, `url`)
VALUES
	(1,'','Placeholder-Flowers.jpg',NULL),
	(2,'','Placeholder-Flowers.jpg',NULL),
	(3,'','Placeholder-Flowers.jpg',NULL),
	(4,'','Placeholder-Flowers.jpg',NULL),
	(5,'','Placeholder-Flowers.jpg',NULL),
	(6,'','Placeholder-Flowers.jpg',NULL);

/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
