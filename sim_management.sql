/*
SQLyog Professional
MySQL - 10.5.26-MariaDB-ubu2004 : Database - sim_management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(45) DEFAULT NULL,
  `roles_access` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `roles` */

/*Table structure for table `sim_cards` */

DROP TABLE IF EXISTS `sim_cards`;

CREATE TABLE `sim_cards` (
  `sim_card_id` int(11) NOT NULL AUTO_INCREMENT,
  `sim_id` varchar(100) NOT NULL,
  `sim_number` varchar(45) NOT NULL,
  `sim_type` int(11) NOT NULL,
  `sim_company` int(11) NOT NULL,
  `sim_price` varchar(10) NOT NULL,
  `sim_expiry` varchar(12) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`sim_card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `sim_cards` */

/*Table structure for table `sim_companies` */

DROP TABLE IF EXISTS `sim_companies`;

CREATE TABLE `sim_companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(45) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `sim_companies` */

insert  into `sim_companies`(`id`,`company`,`created_by`,`created`,`logo`) values 
(1,'Airtel',1,'2024-05-23 13:53:00','Airtel.png'),
(2,'Reliance Jio',1,'2024-05-23 13:56:23','RelianceJio.png'),
(3,'BSNL',1,'2024-05-23 13:57:00','BSNL.png'),
(4,'Vodafone Idea',1,'2024-05-23 13:57:55','VodafoneIdea.png');

/*Table structure for table `sim_types` */

DROP TABLE IF EXISTS `sim_types`;

CREATE TABLE `sim_types` (
  `sim_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`sim_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `sim_types` */

insert  into `sim_types`(`sim_type_id`,`type`,`created_by`,`created`) values 
(5,'2G',1,'2024-05-23 15:04:20'),
(6,'3G',1,'2024-05-23 15:04:20'),
(7,'4G',1,'2024-05-23 15:04:20'),
(8,'5G',1,'2024-05-23 15:04:20');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `alt_mobile` varchar(45) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` int(11) NOT NULL,
  `approved` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
