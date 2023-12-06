/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.11-MariaDB : Database - agencia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`agencia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `agencia`;

/*Table structure for table `vehiculos` */

DROP TABLE IF EXISTS `vehiculos`;

CREATE TABLE `vehiculos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_vehiculo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `precio` int(10) NOT NULL,
  `placas` varchar(255) NOT NULL,
  `fecha_fabricacion` varchar(10) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `vehiculos` */

insert  into `vehiculos`(`id`,`tipo_vehiculo`,`marca`,`modelo`,`color`,`precio`,`placas`,`fecha_fabricacion`,`observaciones`) values 
(1,'Terrestre','Cupra','Nissan ','Negro ',5000,'123456789','2023-12-22','Ninguna '),
(2,'Terrestre','Versa','AUDI','Amarillo ',100000,'789456','2023-12-20','Hola '),
(3,'Esapacial','Nissan','Nissan','Azul ',5000,'gdgdgd','2023-12-06','ggsgsgs');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
