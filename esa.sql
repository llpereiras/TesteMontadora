/*
SQLyog Community Edition- MySQL GUI v7.14 
MySQL - 5.5.27 : Database - esa
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`esa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `esa`;

/*Table structure for table `carro` */

DROP TABLE IF EXISTS `carro`;

CREATE TABLE `carro` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `carro` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `motor` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fabricante_id` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_fabricante_id` (`fabricante_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `carro` */

insert  into `carro`(`id`,`carro`,`modelo`,`motor`,`fabricante_id`) values (1,'Golf','sportline','1.6',2),(3,'I30','centrum','1.8',3),(4,'Voyage','total flex','1.6',1),(8,'VoyageXX','total flex','1.6',1);

/*Table structure for table `fabricantes` */

DROP TABLE IF EXISTS `fabricantes`;

CREATE TABLE `fabricantes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `fabricantes` */

insert  into `fabricantes`(`id`,`nome`) values (1,'Volksvagem'),(2,'Chevrolet'),(3,'Hyundai');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
