-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 déc. 2023 à 08:08
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mission2_ap`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `idFormation` int NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateFormation` date DEFAULT NULL,
  `Horaire` time DEFAULT NULL,
  `Intervenant` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Public` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Objectifs` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contenu` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `coût` decimal(15,2) DEFAULT NULL,
  `idDomaine` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nomStagiaire` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idFormation`),
  KEY `idDomaine` (`idDomaine`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `Libelle`, `DateFormation`, `Horaire`, `Intervenant`, `Public`, `Objectifs`, `Contenu`, `coût`, `idDomaine`, `nomStagiaire`) VALUES
(23, 'Outlook Niveau 2', '2023-12-19', '09:57:00', 'test', 'test', 'test', 'test', '40.00', 'informatique', ''),
(24, 'Power point Niveau 2', '2023-12-21', '08:00:00', 'Jérôme Poe, Fabienne Dufour RMI Informatique', 'Bénévoles, et salariés du mouvement sportif', 'Parfaire ses connaissances sur PowerPoint', 'test', '55.00', 'informatique', ''),
(26, 'Outlook Niveau 2', '2023-12-20', '12:30:00', 'Jérôme Poe, Fabienne Dufour RMI Informatique', 'Bénévoles, et salariés du mouvement sportif', 'Parfaire ses connaissances sur PowerPoint', 'test', '60.00', 'informatique', 'Rodic.nou@gmail.com'),
(27, 'Bonnes pratiques et premiers secours', '2023-12-23', '08:30:00', 'Jérôme Poe', 'Bénévoles, et salariés du mouvement sportif', 'test', 'test', '50.00', 'secourisme', 'Giroux.jeanne@gmail.com\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
