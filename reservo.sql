-- Adminer 4.8.1 MySQL 5.5.5-10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Adherent`;
CREATE TABLE `Adherent` (
  `idAdherent` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAdherent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Equipements`;
CREATE TABLE `Equipements` (
  `idEquipement` int(11) NOT NULL AUTO_INCREMENT,
  `table` int(11) DEFAULT NULL,
  `chaise` int(11) DEFAULT NULL,
  `hautParleur` int(11) DEFAULT NULL,
  `microphone` int(11) DEFAULT NULL,
  `chapiteau33` int(11) DEFAULT NULL,
  `chapiteau34` int(11) DEFAULT NULL,
  `chapiteau36` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEquipement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Reservation`;
CREATE TABLE `Reservation` (
  `idAdherent` int(11) DEFAULT NULL,
  `idSalle` int(11) DEFAULT NULL,
  `idEquipement` int(11) DEFAULT NULL,
  `idService` int(11) DEFAULT NULL,
  `heureDebut` timestamp NULL DEFAULT NULL,
  `heureFin` timestamp NULL DEFAULT NULL,
  KEY `idAdherent` (`idAdherent`),
  KEY `idSalle` (`idSalle`),
  KEY `idEquipement` (`idEquipement`),
  KEY `idService` (`idService`),
  CONSTRAINT `Reservation_ibfk_1` FOREIGN KEY (`idAdherent`) REFERENCES `Adherent` (`idAdherent`),
  CONSTRAINT `Reservation_ibfk_2` FOREIGN KEY (`idSalle`) REFERENCES `Salles` (`idSalle`),
  CONSTRAINT `Reservation_ibfk_3` FOREIGN KEY (`idEquipement`) REFERENCES `Equipements` (`idEquipement`),
  CONSTRAINT `Reservation_ibfk_4` FOREIGN KEY (`idService`) REFERENCES `Services` (`idServices`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Salles`;
CREATE TABLE `Salles` (
  `idSalle` int(255) NOT NULL AUTO_INCREMENT,
  `Preau` bit(1) NOT NULL,
  `Terrain` bit(1) NOT NULL,
  `Salle15` bit(1) NOT NULL,
  `CC1` bit(1) NOT NULL,
  `CC2` bit(1) NOT NULL,
  PRIMARY KEY (`idSalle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Services`;
CREATE TABLE `Services` (
  `idServices` int(11) NOT NULL AUTO_INCREMENT,
  `mep` bit(1) NOT NULL,
  `nettoyage` bit(1) NOT NULL,
  `sonorisation` bit(1) NOT NULL,
  PRIMARY KEY (`idServices`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-03-21 12:50:16
