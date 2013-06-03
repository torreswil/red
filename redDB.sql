-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.10 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para red_consecionarios
DROP DATABASE IF EXISTS `red_consecionarios`;
CREATE DATABASE IF NOT EXISTS `red_consecionarios` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `red_consecionarios`;


-- Volcando estructura para tabla red_consecionarios.concesionarios
DROP TABLE IF EXISTS `concesionarios`;
CREATE TABLE IF NOT EXISTS `concesionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_concesionario` varchar(120) NOT NULL,
  `descripcion` mediumtext,
  `direccion` varchar(50) NOT NULL,
  `telefono1` varchar(40) NOT NULL DEFAULT 'NULL',
  `telefono2` varchar(50) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `web` varchar(120) DEFAULT NULL,
  `id_municipios` int(11) DEFAULT NULL,
  `id_departamentos` int(11) DEFAULT NULL,
  `link_cabecera` varchar(150) DEFAULT NULL,
  `link_logo` varchar(150) DEFAULT 'NULL',
  PRIMARY KEY (`id`),
  KEY `id_municipios` (`id_municipios`),
  KEY `id_departamentos` (`id_departamentos`),
  CONSTRAINT `concesionarios_ibfk_1` FOREIGN KEY (`id_municipios`) REFERENCES `municipios` (`id`),
  CONSTRAINT `concesionarios_ibfk_2` FOREIGN KEY (`id_departamentos`) REFERENCES `departamentos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla red_consecionarios.departamentos
DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(10) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla red_consecionarios.extras
DROP TABLE IF EXISTS `extras`;
CREATE TABLE IF NOT EXISTS `extras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `extra` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla red_consecionarios.fotos_vehiculos
DROP TABLE IF EXISTS `fotos_vehiculos`;
CREATE TABLE IF NOT EXISTS `fotos_vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_foto` varchar(150) DEFAULT NULL,
  `link_miniatura` varchar(150) DEFAULT NULL,
  `principal` int(1) NOT NULL DEFAULT '0',
  `id_vehiculos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_vehiculos` (`id_vehiculos`),
  CONSTRAINT `fotos_vehiculos_ibfk_1` FOREIGN KEY (`id_vehiculos`) REFERENCES `vehiculos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla red_consecionarios.marca
DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(40) NOT NULL DEFAULT 'NULL',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla red_consecionarios.modelo
DROP TABLE IF EXISTS `modelo`;
CREATE TABLE IF NOT EXISTS `modelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) NOT NULL DEFAULT 'NULL',
  `id_marca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla red_consecionarios.municipios
DROP TABLE IF EXISTS `municipios`;
CREATE TABLE IF NOT EXISTS `municipios` (
  `id` int(10) NOT NULL,
  `nombre_municipio` varchar(50) NOT NULL,
  `departamento` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento` (`departamento`),
  CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`departamento`) REFERENCES `departamentos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla red_consecionarios.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono1` varchar(30) NOT NULL,
  `telefono2` varchar(30) NOT NULL,
  `nivel_usuario` int(11) NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `link_avatar` varchar(200) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT 'NULL',
  `id_concesionarios` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `departamento` (`departamento`),
  KEY `municipio` (`municipio`),
  KEY `id_concesionarios` (`id_concesionarios`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`departamento`) REFERENCES `departamentos` (`id`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`municipio`) REFERENCES `municipios` (`id`),
  CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_concesionarios`) REFERENCES `concesionarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='todos los usuarios del sistema';

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla red_consecionarios.vehiculos
DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) DEFAULT NULL,
  `id_modelo` int(11) DEFAULT NULL,
  `año` int(10) NOT NULL,
  `kilometros` int(11) NOT NULL,
  `cilindraje` int(11) NOT NULL,
  `id_concesionarios` int(11) DEFAULT NULL,
  `id_departamentos` int(11) DEFAULT NULL,
  `id_municipios` int(11) DEFAULT NULL,
  `id_usuario_usuarios` int(11) DEFAULT NULL,
  `color` varchar(50) NOT NULL,
  `transmision` varchar(30) NOT NULL,
  `asientos` varchar(40) DEFAULT NULL,
  `sonido` varchar(50) DEFAULT NULL,
  `placa` varchar(15) DEFAULT NULL,
  `extras` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_marca` (`id_marca`),
  KEY `id_modelo` (`id_modelo`),
  KEY `id_concesionarios` (`id_concesionarios`),
  KEY `id_departamentos` (`id_departamentos`),
  KEY `id_municipios` (`id_municipios`),
  KEY `id_usuario_usuarios` (`id_usuario_usuarios`),
  CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`),
  CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id`),
  CONSTRAINT `vehiculos_ibfk_3` FOREIGN KEY (`id_concesionarios`) REFERENCES `concesionarios` (`id`),
  CONSTRAINT `vehiculos_ibfk_4` FOREIGN KEY (`id_departamentos`) REFERENCES `departamentos` (`id`),
  CONSTRAINT `vehiculos_ibfk_5` FOREIGN KEY (`id_municipios`) REFERENCES `municipios` (`id`),
  CONSTRAINT `vehiculos_ibfk_6` FOREIGN KEY (`id_usuario_usuarios`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
