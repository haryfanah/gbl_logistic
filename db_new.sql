/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 8.0.31 : Database - gbl_log
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gbl_log` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `gbl_log`;

/*Table structure for table `categorie` */

DROP TABLE IF EXISTS `categorie`;

CREATE TABLE `categorie` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(50) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `date_cat` varchar(50) DEFAULT NULL,
  `update_date_cat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `categorie` */

insert  into `categorie`(`id_cat`,`nom_cat`,`id_user`,`date_cat`,`update_date_cat`) values 
(1,'Machines',NULL,'2023-12-08 10:10:38',NULL),
(2,'Câble\r\n',NULL,'2023-12-08 10:10:38',NULL),
(3,'Clé à douille\r\n',NULL,'2023-12-08 10:10:38',NULL),
(4,'Clé dynamometrique\r\n',NULL,'2023-12-08 10:10:38',NULL),
(5,'Clé mixte\r\n',NULL,'2023-12-08 10:10:38',NULL),
(6,'Corde\r\n',NULL,'2023-12-08 10:10:38',NULL),
(32,'Appareil de mesure',NULL,'2023-12-13 09:49:58','2023-12-21 14:40:43'),
(8,'Douille\r\n',NULL,'2023-12-08 10:10:38',NULL),
(9,'Groupe Electrogène\r\n',NULL,'2023-12-08 10:10:38',NULL),
(10,'PDL\r\n',NULL,'2023-12-08 10:10:38',NULL),
(11,'Perceuse\r\n',NULL,'2023-12-08 10:10:38',NULL),
(12,'Pied à coulsse\r\n',NULL,'2023-12-08 10:10:38',NULL),
(13,'Pince\r\n',NULL,'2023-12-08 10:10:38',NULL),
(14,'Poste soudure\r\n',NULL,'2023-12-08 10:10:38',NULL),
(15,'Reducteur\r\n',NULL,'2023-12-08 10:10:38',NULL),
(16,'Serre câble\r\n',NULL,'2023-12-08 10:10:38',NULL),
(17,'Serre Cosse\r\n',NULL,'2023-12-08 10:10:38',NULL),
(18,'Bidon',NULL,'2023-12-08 10:10:38','2023-12-18 08:40:23'),
(19,'Citernes',NULL,'2023-12-08 10:10:38','2023-12-15 14:54:51'),
(20,'fût\r\n',NULL,'2023-12-08 10:10:38',NULL),
(21,'Etagère\r\n',NULL,'2023-12-08 10:10:38',NULL),
(22,'Bonbonne',NULL,'2023-12-08 10:10:38','2023-12-29 14:22:28'),
(23,'Table\r\n',NULL,'2023-12-08 10:10:38',NULL),
(29,'Chaises',NULL,'2023-12-08 14:24:12',NULL),
(30,'Clé à choc',NULL,'2023-12-11 15:05:38',NULL),
(33,'Gravity',NULL,'2023-12-13 14:20:27',NULL),
(37,'Autre Catégorie',NULL,'2023-12-13 07:01:11',NULL);

/*Table structure for table `etat` */

DROP TABLE IF EXISTS `etat`;

CREATE TABLE `etat` (
  `id_etat` int NOT NULL AUTO_INCREMENT,
  `etat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_etat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `etat` */

insert  into `etat`(`id_etat`,`etat`) values 
(1,'bon'),
(2,'mauvais'),
(3,'moyenne');

/*Table structure for table `superviseurs` */

DROP TABLE IF EXISTS `superviseurs`;

CREATE TABLE `superviseurs` (
  `id_sup` int NOT NULL AUTO_INCREMENT,
  `nom_sup` varchar(50) DEFAULT NULL,
  `CIN` int DEFAULT NULL,
  `num_tel` varchar(50) DEFAULT NULL,
  `pdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_sup`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `superviseurs` */

insert  into `superviseurs`(`id_sup`,`nom_sup`,`CIN`,`num_tel`,`pdp`) values 
(1,'Tojo',NULL,NULL,'10151884_716572775049704_62332352_n.jpg'),
(2,'Rinasoa',NULL,NULL,NULL),
(3,'Mamih',NULL,NULL,NULL),
(4,'Rajean',NULL,NULL,NULL),
(5,'Solomon',NULL,NULL,NULL),
(6,'Harley',NULL,NULL,NULL);

/*Table structure for table `tools` */

DROP TABLE IF EXISTS `tools`;

CREATE TABLE `tools` (
  `id_tool` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) DEFAULT NULL,
  `quantite` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `reference` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `id_comment` int DEFAULT NULL,
  `id_etat` int DEFAULT NULL,
  `id_type` int DEFAULT NULL,
  `id_cat` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `date_tool` varchar(50) DEFAULT NULL,
  `remarque` text,
  `image` varchar(255) DEFAULT NULL,
  `id_sup` int DEFAULT NULL,
  `date_modification` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tool`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tools` */

insert  into `tools`(`id_tool`,`designation`,`quantite`,`marque`,`reference`,`couleur`,`id_comment`,`id_etat`,`id_type`,`id_cat`,`id_user`,`date_tool`,`remarque`,`image`,`id_sup`,`date_modification`) values 
(1,'Chaise Royal','2','','','Rouge',NULL,1,5,29,NULL,NULL,NULL,NULL,NULL,NULL),
(2,'Chaise Royal','1','','','Bleu',NULL,1,5,29,NULL,'2023-12-05 18:42:54',NULL,NULL,NULL,NULL),
(3,'Chaise Pliable','27','','','Rouge',NULL,1,5,29,NULL,'2023-12-05 18:52:22',NULL,NULL,NULL,NULL),
(4,'Chaise Pliable','6','','','Noir',NULL,1,5,29,NULL,'2023-12-05 18:57:52',NULL,NULL,NULL,NULL),
(5,'Chaise Bureau','1','','','Noir',NULL,1,5,29,NULL,'2023-12-05 19:20:05',NULL,NULL,NULL,NULL),
(6,'Chaise Simple','20','','','Noir',NULL,1,5,29,NULL,'2023-12-05 19:22:18',NULL,NULL,NULL,NULL),
(7,'Etagère fer','8','','Rond/20 3m30 3 étages','gris',NULL,1,5,21,NULL,'2023-12-11 08:27:52',NULL,NULL,NULL,NULL),
(8,'Etagère ALU','3','','ALU','Gris',NULL,1,5,21,NULL,'2023-12-11 08:42:16',NULL,NULL,NULL,NULL),
(9,'Bobone plastique','3','','','Bleu',NULL,1,5,22,NULL,'2023-12-11 08:45:11',NULL,'bonbonne.jpg',NULL,NULL),
(10,'Fût','9','','','Rouge',NULL,1,5,20,NULL,'2023-12-11 08:46:43',NULL,NULL,NULL,NULL),
(11,'Fût','2','','','Bleu',NULL,1,5,20,NULL,'2023-12-11 08:47:05',NULL,NULL,NULL,NULL),
(12,'Citerne','4','','','Blanc',NULL,1,5,19,NULL,'2023-12-11 08:48:14',NULL,NULL,NULL,NULL),
(13,'Groupe Electrogène','1','IUNDA','','Rouge',NULL,1,1,9,NULL,'2023-12-11 08:52:39',NULL,NULL,NULL,NULL),
(14,'Groupe Electrogène','1','IUNDA','','Rouge',NULL,2,1,9,NULL,'2023-12-11 08:52:54',NULL,NULL,NULL,NULL),
(15,'Groupe Electrogène Essence','1','SDMO','','Bleu',NULL,1,1,9,NULL,'2023-12-11 08:54:26',NULL,NULL,NULL,NULL),
(16,'Groupe Electrogène Diesel','1','SDMO','','Bleu',NULL,3,1,9,NULL,'2023-12-11 09:51:02',NULL,NULL,NULL,NULL),
(17,'Groupe Electrogène Diesel','2','SPM POWER','9000Ln','Bleu',NULL,2,1,9,NULL,'2023-12-11 10:01:04',NULL,NULL,NULL,NULL),
(18,'Groupe Electrogène','1','SPM POWER','9000Ln','Bleu',NULL,1,1,9,NULL,'2023-12-11 10:02:11',NULL,NULL,NULL,NULL),
(19,'Groupe Electrogène Diesel','1','SPM POWER','10000Ln','Bleu',NULL,1,1,9,NULL,'2023-12-11 10:04:20',NULL,NULL,NULL,NULL),
(20,'Groupe Electrogène Diesel','1','Jet Heavy','','Rouge',NULL,1,1,9,NULL,'2023-12-11 10:05:14',NULL,NULL,NULL,NULL),
(21,'Serre câble','7','','','Jaune',NULL,1,2,16,NULL,'2023-12-11 10:52:47','-Boîte 1 Manque pièce (1)\r\n-Boîte 1 -> Solo Energie\r\n-Boîte 1: Ampefiloha\r\n-Boîte 4: Bypass            \r\n           ',NULL,NULL,NULL),
(22,'Perceuse (Boîte)','1','BOSCH','','',NULL,1,1,11,NULL,'2023-12-11 11:07:34','Avec: douille 4(7mm/9mm/21mm/23mm), Mêche 5(dim8/diam10/diam6,autre2)\r\n  \r\n           ',NULL,NULL,NULL),
(23,'Perceuse à colonne','4','','','',NULL,1,1,11,NULL,'2023-12-11 11:13:18','l\'un d\'eux a un problème de contacteur         \r\n           ',NULL,NULL,NULL),
(24,'Pervibarteur','6','INGCO','','',NULL,3,1,1,NULL,'2023-12-11 11:17:45','à vérifier        \r\n           ',NULL,NULL,NULL),
(25,'Pervibarteur','1','TOTAL','','',NULL,1,1,1,NULL,'2023-12-11 11:21:55','             \r\n           ',NULL,NULL,NULL),
(26,'Groupe Electrogène Essence','4','KORMAN','','Bleu',NULL,1,1,9,NULL,'2023-12-11 11:38:13','L\'un d\'eux à Farafangana',NULL,NULL,NULL),
(27,'Groupe Electrogène','1','HONEST','','Vert',NULL,2,1,9,NULL,'2023-12-11 11:39:22','             \r\n           ',NULL,NULL,NULL),
(28,'Groupe Mob','2','TOTAL','','',NULL,1,1,9,NULL,'2023-12-11 11:47:08','à Ambolimanjakarivo-Solomon      ',NULL,NULL,NULL),
(29,'Damme Sauteuse','2','HONDA','','',NULL,1,2,1,NULL,'2023-12-11 11:55:47','             \r\n           ',NULL,NULL,NULL),
(30,'Damme Sauteuse','1','TOTAL','','',NULL,1,2,1,NULL,'2023-12-11 11:58:10','             \r\n           ',NULL,NULL,NULL),
(31,'Dynamométrique Aiguille','19','SATRA','0-300N.m','',NULL,1,5,4,NULL,'2023-12-11 14:43:43','16: Ampefiloha /\r\n03: Bypass    ',NULL,NULL,NULL),
(32,'Clé à choc','2','HONEST','','',NULL,1,1,30,NULL,'2023-12-11 15:18:47','Bypass et Ampefiloha \r\n           ',NULL,NULL,NULL),
(33,'Clé à choc Chargeable','3','MAKITA','','',NULL,1,1,30,NULL,'2023-12-11 15:22:24','Boîte 02: Ampefiloha /\r\nBoîte 01: Rajean complet      \r\n           ',NULL,NULL,NULL),
(34,'Câble V/J','1','','70mm²','',NULL,1,1,2,NULL,'2023-12-11 16:09:51','à Bypass        \r\n           ',NULL,NULL,NULL),
(35,'Clé à douille 8-32','1','','','Vert',NULL,1,3,3,NULL,'2023-12-11 16:16:15','Boîte à outil: manque douille 17 / Fissure douille 21 / Clé Allen qte 9 manque 2 à Ampefiloha',NULL,NULL,NULL),
(36,'Clé à douille 8-32','1','','','Vert',NULL,1,3,3,NULL,'2023-12-11 16:20:31','Boite à outil à Ampefiloha: manque douille 8/ Manque clé / Douille 16-19-24 pour l\'acceptance site Benenitra, Manorofify, Tanandava\r\n',NULL,NULL,NULL),
(37,'Clé à douille 8-32','2','','','',NULL,1,3,3,NULL,'2023-12-11 16:23:01','Manque douille 27 (Rajean)           \r\n           ',NULL,NULL,NULL),
(38,'Bétonnières','10','','','Jaune',NULL,1,2,1,NULL,'2023-12-11 16:52:18','Bétonnière 07: Mauvais',NULL,NULL,NULL),
(41,'Carton Gravity','10','','','',NULL,1,4,33,NULL,'2023-12-13 14:21:42','             \r\n           ',NULL,NULL,NULL),
(42,'Perceuse (Boîte)','1','BINGQI','','Jaune',NULL,1,1,11,NULL,'2023-12-15 08:59:00','             \r\n           ',NULL,NULL,NULL),
(43,'Corde Semi-statique','20','BEAL','Cantract 10.5mm / L:100m','Noir et Blanc',NULL,1,4,6,NULL,'2023-12-20 09:27:33','Ampefiloha\r\n           ',NULL,NULL,NULL),
(44,'Carton Harnais Advanced','6','','813M/L','',NULL,1,4,33,NULL,'2023-12-20 10:09:35','08 PCS Chaque Carton n°1 à n°6\r\n           ',NULL,NULL,NULL),
(45,'Carton Harnais Advanced','1','','813M/L','',NULL,1,4,33,NULL,'2023-12-20 10:10:58','02 PCS carton n°7      ',NULL,NULL,NULL),
(46,'Carton Longe Absorbe corde','2','','','',NULL,1,4,33,NULL,'2023-12-20 10:13:21','Carton n°8 et 9: 25 PCS chaque carton\r\n           ',NULL,NULL,NULL),
(47,'Carton Longe de positionnement','1','','','',NULL,1,4,33,NULL,'2023-12-20 10:15:37','Carton n°10: 50PCS    \r\n           ',NULL,NULL,NULL),
(48,'Carton Longe tool et Etrier 3 Marches','1','','','',NULL,1,4,33,NULL,'2023-12-20 10:19:20','Carton n°11: 50PCS Longe tool / 10PCS Etrier 3 Marches        \r\n           ',NULL,NULL,NULL),
(49,'Carton Sangle d\'ancrage','1','','150CM','',NULL,1,4,33,NULL,'2023-12-20 11:09:10','Carton n°12: 40PCS\r\n           ',NULL,NULL,NULL),
(50,'Teste Beton','1','','','',NULL,1,5,32,NULL,'2023-12-20 13:56:43','Ampefiloha          \r\n           ',NULL,NULL,NULL),
(51,'Mesure de terre','1','','','',NULL,1,1,32,NULL,'2023-12-20 13:58:08','Dans un sac noir à Ampefiloha\r\n           ','19113997_1743297905963689_7842996753597883169_n.jpg',NULL,NULL),
(52,'Clé à choc','3','SIDAMO','','',NULL,1,1,30,NULL,'2023-12-21 17:12:46','Ampefiloha',NULL,NULL,NULL),
(60,'Test modifié','3','test','','Jaune et Noir',NULL,1,1,37,4,'2023-12-13 07:01:11','             		             		             		             		             \r\n                      		           		           		           		','logo.png',1,''),
(62,'Tes2','2','marque test','ref','color',NULL,1,1,37,NULL,'2023-12-12 16:14:12','             \r\n           ',NULL,NULL,NULL),
(63,'Test 3','1','testt','','',NULL,1,2,37,4,'2023-12-12 16:18:52','             \r\n           ',NULL,NULL,NULL);

/*Table structure for table `types` */

DROP TABLE IF EXISTS `types`;

CREATE TABLE `types` (
  `id_type` int NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `types` */

insert  into `types`(`id_type`,`type_name`) values 
(1,'Eléctrique'),
(2,'Manutention'),
(3,'Outillage'),
(4,'Travail en hauteur'),
(5,'Autres');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(50) DEFAULT NULL,
  `prenom_user` varchar(50) DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users` */

insert  into `users`(`id_user`,`nom_user`,`prenom_user`,`pseudo`,`mdp`) values 
(1,NULL,NULL,'Vonjy','vonjy01'),
(2,NULL,NULL,'Eric','eric02'),
(3,NULL,NULL,'Mickael','mickael03'),
(4,NULL,NULL,'Fanah','fanah04');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
