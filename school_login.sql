/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.5-10.1.25-MariaDB : Database - school_login
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`school_login` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `school_login`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password_hash`,`role`) values (1,'adviser@gmail.com','$2y$10$ks046Q3Rr3wXUqYL.W56eurAk6WJ5JJlP9dj5fh.GtRyHlOz50IH6','adviser'),(2,'teacher@gmail.com','$2y$10$ks046Q3Rr3wXUqYL.W56eurAk6WJ5JJlP9dj5fh.GtRyHlOz50IH6','teacher'),(3,'principal@gmail.com','$2y$10$ks046Q3Rr3wXUqYL.W56eurAk6WJ5JJlP9dj5fh.GtRyHlOz50IH6','principal'),(4,'admin@gmail.com','$2y$10$ks046Q3Rr3wXUqYL.W56eurAk6WJ5JJlP9dj5fh.GtRyHlOz50IH6','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
