-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 oct. 2023 à 09:54
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
-- Base de données : `mission2`
--

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `Nom` varchar(150) NOT NULL,
  `numIcom` int DEFAULT NULL,
  PRIMARY KEY (`Nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`Nom`, `numIcom`) VALUES
('CROSL', 50321205);

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

DROP TABLE IF EXISTS `domaine`;
CREATE TABLE IF NOT EXISTS `domaine` (
  `idDomaine` varchar(50) NOT NULL,
  `NomDomaine` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idDomaine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `domaine`
--

INSERT INTO `domaine` (`idDomaine`, `NomDomaine`) VALUES
('1', 'Gestion'),
('2', 'Informatique'),
('3', 'Développement durable'),
('4', 'Secourisme'),
('5', 'Communication');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `idFormation` varchar(50) NOT NULL,
  `Libelle` varchar(50) DEFAULT NULL,
  `DateFormation` date DEFAULT NULL,
  `Horaire` time DEFAULT NULL,
  `Intervenant` varchar(50) DEFAULT NULL,
  `Public` varchar(50) DEFAULT NULL,
  `Objectifs` varchar(50) DEFAULT NULL,
  `Contenu` varchar(50) DEFAULT NULL,
  `coût` decimal(15,2) DEFAULT NULL,
  `idDomaine` varchar(50) NOT NULL,
  PRIMARY KEY (`idFormation`),
  KEY `idDomaine` (`idDomaine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `Libelle`, `DateFormation`, `Horaire`, `Intervenant`, `Public`, `Objectifs`, `Contenu`, `coût`, `idDomaine`) VALUES
('1', 'Gestion', '2023-04-24', '19:30:00', 'Jérôme Poe', 'Salarié', 'Parfaire ses connaissances en gestion', 'Présentation', '65.00', '1');

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

DROP TABLE IF EXISTS `inscrire`;
CREATE TABLE IF NOT EXISTS `inscrire` (
  `idStagiaire` varchar(50) NOT NULL,
  `idSession` varchar(50) NOT NULL,
  PRIMARY KEY (`idStagiaire`,`idSession`),
  KEY `idSession` (`idSession`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `inscrire`
--

INSERT INTO `inscrire` (`idStagiaire`, `idSession`) VALUES
('1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `interlocuteur`
--

DROP TABLE IF EXISTS `interlocuteur`;
CREATE TABLE IF NOT EXISTS `interlocuteur` (
  `idInterlocuteur` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Courriel` varchar(150) DEFAULT NULL,
  `Tel` smallint DEFAULT NULL,
  `Fax` smallint DEFAULT NULL,
  `Nom_1` varchar(150) NOT NULL,
  PRIMARY KEY (`idInterlocuteur`),
  UNIQUE KEY `Nom_1` (`Nom_1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `interlocuteur`
--

INSERT INTO `interlocuteur` (`idInterlocuteur`, `Nom`, `Prenom`, `Courriel`, `Tel`, `Fax`, `Nom_1`) VALUES
('1', 'Dupont', 'Jean', 'jean.dupont', 32767, 32767, 'CROSL');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `idSession` varchar(50) NOT NULL,
  `DateSession` date DEFAULT NULL,
  `Heure` time DEFAULT NULL,
  `DateLimiteInscription` date DEFAULT NULL,
  `idFormation` varchar(50) NOT NULL,
  PRIMARY KEY (`idSession`),
  KEY `idFormation` (`idFormation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`idSession`, `DateSession`, `Heure`, `DateLimiteInscription`, `idFormation`) VALUES
('1', '2024-04-24', '19:30:00', '2024-04-22', '1');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

DROP TABLE IF EXISTS `stagiaire`;
CREATE TABLE IF NOT EXISTS `stagiaire` (
  `idStagiaire` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Adresse` varchar(150) DEFAULT NULL,
  `codePostal` int DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `Fonction` varchar(50) DEFAULT NULL,
  `Nom_1` varchar(150) NOT NULL,
  `idStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`idStagiaire`),
  KEY `Nom_1` (`Nom_1`),
  KEY `idStatus` (`idStatus`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`idStagiaire`, `Nom`, `Prenom`, `Adresse`, `codePostal`, `Ville`, `email`, `Fonction`, `Nom_1`, `idStatus`) VALUES
('1', 'Dupont', 'Pierre', '4 avenue de la gare', 31000, 'Toulouse', 'pierre.dupont@gmail.com', 'NULL', 'CROSL', '1'),
('2', 'Durant', 'Jean', '5 Rue du pont', 75000, 'Paris', 'jean.durant@gmail.com', 'NULL', 'CROSL', '1'),
('3', 'Dupuis', 'Martin', '10 avenue', 81000, 'Albi', 'martin.dupuis@gmail.com', 'NULL', 'CROSL', '1');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `idStatus` varchar(50) NOT NULL,
  `Status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idStatus`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`idStatus`, `Status`) VALUES
('1', 'Salarié'),
('2', 'Bénévole');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
