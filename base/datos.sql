/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.29-MariaDB : Database - simpsv-minsal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`simpsv-minsal` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_520_ci */;

USE `simpsv-minsal`;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `idcliente` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `apellido` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `dui` varchar(9) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `nit` varchar(17) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `cargo` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

/*Data for the table `cliente` */

insert  into `cliente`(`idcliente`,`nombre`,`apellido`,`dui`,`nit`,`cargo`) values (1,'Bladimir Antonio','Legal Legal','123456789','123456789','Representante'),(2,'Gloria Del Carmen','Mendoza Mendoza','987654321','123456789','Representante'),(3,'Rodolfo Andres','Merino Aleman','453286948','01010101011011','Abogado');

/*Table structure for table `diploma` */

DROP TABLE IF EXISTS `diploma`;

CREATE TABLE `diploma` (
  `iddiploma` int(16) NOT NULL AUTO_INCREMENT,
  `idsolicitud` int(11) DEFAULT NULL,
  `fechainicio` date DEFAULT NULL,
  `fechaexpiracion` date DEFAULT NULL,
  PRIMARY KEY (`iddiploma`),
  KEY `fk_se_genera` (`idsolicitud`),
  CONSTRAINT `fk_se_genera` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

/*Data for the table `diploma` */

/*Table structure for table `empresa` */

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `idempresa` int(16) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) DEFAULT NULL,
  `nombreempresa` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `razonsocial` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `emplfemenino` int(11) DEFAULT NULL,
  `emplmasculino` int(11) DEFAULT NULL,
  `capital` decimal(16,0) DEFAULT NULL,
  `nitempresa` decimal(17,0) DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `municipio` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`idempresa`),
  KEY `fk_representa` (`idcliente`),
  CONSTRAINT `fk_representa` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

/*Data for the table `empresa` */

insert  into `empresa`(`idempresa`,`idcliente`,`nombreempresa`,`razonsocial`,`emplfemenino`,`emplmasculino`,`capital`,`nitempresa`,`direccion`,`municipio`) values (1,1,'Industrias S.A. de C.V.','Comercial',14,15,'20000',NULL,'El Salvador, San Salvador','San Salvador'),(2,2,'Alimentos S.A. de C.V.','Alimentos',10,10,'1000',NULL,'El Salvador, San Salvador,','San Salvador'),(3,3,'Robertony S..A. de C.V.','Alimentos',45,63,'250000',NULL,'EL SALVADOR, SAN SALVADOR','SAN SALVADOR');

/*Table structure for table `expediente` */

DROP TABLE IF EXISTS `expediente`;

CREATE TABLE `expediente` (
  `idexpediente` int(16) NOT NULL AUTO_INCREMENT,
  `idvehiculo` int(11) DEFAULT NULL,
  `fechaapertura` date DEFAULT NULL,
  PRIMARY KEY (`idexpediente`),
  KEY `fk_tiene` (`idvehiculo`),
  CONSTRAINT `fk_tiene` FOREIGN KEY (`idvehiculo`) REFERENCES `vehiculo` (`idvehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

/*Data for the table `expediente` */

insert  into `expediente`(`idexpediente`,`idvehiculo`,`fechaapertura`) values (1,1,'2018-11-27'),(2,2,'2018-11-27'),(3,3,'2018-11-28');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `solicitud` */

DROP TABLE IF EXISTS `solicitud`;

CREATE TABLE `solicitud` (
  `idsolicitud` int(16) NOT NULL AUTO_INCREMENT,
  `idexpediente` int(11) DEFAULT NULL,
  `fechaingreso` date DEFAULT NULL,
  `fecharesolucion` date DEFAULT NULL,
  `resolucion` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`idsolicitud`),
  KEY `fk_se_crea` (`idexpediente`),
  CONSTRAINT `fk_se_crea` FOREIGN KEY (`idexpediente`) REFERENCES `expediente` (`idexpediente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

/*Data for the table `solicitud` */

insert  into `solicitud`(`idsolicitud`,`idexpediente`,`fechaingreso`,`fecharesolucion`,`resolucion`,`estado`) values (1,1,'2018-11-26','2018-11-27',NULL,'Pendiente'),(2,2,'2018-11-27','2018-11-30',NULL,'Pemdiente'),(3,3,'2018-11-22','2018-11-24',NULL,'PENDIENTE');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('adminsistema','operativo','estrategico','tactico') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'adminsistema',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`type`,`remember_token`,`created_at`,`updated_at`) values (1,'Estrategico','estrategico@gmail.com','$2y$10$FeIZnMlUxZfriYIqVau1ROn5nym1zvZJ1ys.A0H9E9uTb7tzKwDX6','estrategico',NULL,NULL,NULL),(2,'Tactico','tactico@gmail.com','$2y$10$qgdFqCcFIGlzKrcTmSXEGuMZYtFJKheaAOvvts/B7nvql1nFMT.gi','tactico',NULL,NULL,NULL),(3,'Administrador del Sistema','admin@gmail.com','$2y$10$BvGZEYrHGY8qJTXEP3rC1.dJhIVx8WGe0w/vYk4l0hTWAIaiQPtk6','adminsistema','RzrzxQiNtEn7IBq16UgP0KmpJcqAW78KCgQwO7f2JSskjcDQRu1WCkRtw4f2',NULL,NULL),(4,'Operativo','operativo@gmail.com','$2y$10$Pz34CiuiPRb8kvpxiype9OJQU8rO8bPrzASDlDjw98.e3uJB11k7W','operativo','QQ7auVNhkWadHuDixhjPaMHIDYEoaeRZAqFWAWBTUekAPbl2qg27JU6o6GgJ',NULL,NULL),(5,'Prueba','prueba@gmail.com','$2y$10$8byPkz4WqHVb3R4oKs.qi.brE0yVl9wvm1xOl2Wkj6q5PW2zVKuPK','operativo','4McxZ03ubAEr13CkUsCEXxAFgl9YaM2BLVAjkMl8egDlmqt1guTJzh3Bb5iF','2018-11-28 03:29:55','2018-11-28 03:29:55');

/*Table structure for table `vehiculo` */

DROP TABLE IF EXISTS `vehiculo`;

CREATE TABLE `vehiculo` (
  `idvehiculo` int(16) NOT NULL AUTO_INCREMENT,
  `idempresa` int(11) DEFAULT NULL,
  `modelo` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `placa` varchar(8) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `capacidad` decimal(16,0) DEFAULT NULL,
  `tipo` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `refigeracion` varchar(2) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`idvehiculo`),
  KEY `fk_posee` (`idempresa`),
  CONSTRAINT `fk_posee` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`idempresa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

/*Data for the table `vehiculo` */

insert  into `vehiculo`(`idvehiculo`,`idempresa`,`modelo`,`placa`,`ano`,`capacidad`,`tipo`,`refigeracion`) values (1,1,'h100','123456',2014,'200','CAMION','1'),(2,2,'h200','123456',2015,'200','CAMION','1'),(3,3,'HILUX','C123456',2000,'2','CAMION','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
