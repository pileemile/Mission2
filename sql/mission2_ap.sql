-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 14 déc. 2023 à 11:51
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mission2_ap`
--

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `Nom` varchar(150) NOT NULL,
  `numIcom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`Nom`, `numIcom`) VALUES
('CROSL', 50321205),
('QUALY', 16584);

-- --------------------------------------------------------

--
-- Structure de la table `connection`
--

CREATE TABLE `connection` (
  `id` int(11) NOT NULL,
  `idInterlocuteur` int(11) DEFAULT NULL,
  `idStatus` int(11) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connection`
--

INSERT INTO `connection` (`id`, `idInterlocuteur`, `idStatus`, `login`, `mdp`) VALUES
(1, 1, NULL, 'giroux.jeanne@gmail.com', 'AZE123'),
(2, 2, NULL, 'martin.antoine@gmail.com', '123456789'),
(3, NULL, 2, 'Rodic.nou@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE `domaine` (
  `idDomaine` varchar(50) NOT NULL,
  `NomDomaine` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `formation` (
  `idFormation` varchar(50) NOT NULL,
  `LibelleDomaine` varchar(50) DEFAULT NULL,
  `libelleFormation` varchar(50) NOT NULL,
  `DateFormation` date DEFAULT NULL,
  `Horaire` time DEFAULT NULL,
  `Intervenant` varchar(50) DEFAULT NULL,
  `Public` varchar(50) DEFAULT NULL,
  `Objectifs` varchar(50) DEFAULT NULL,
  `Contenu` varchar(50) DEFAULT NULL,
  `coût` decimal(15,2) DEFAULT NULL,
  `idDomaine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `LibelleDomaine`, `libelleFormation`, `DateFormation`, `Horaire`, `Intervenant`, `Public`, `Objectifs`, `Contenu`, `coût`, `idDomaine`) VALUES
('1', 'Gestion', 'Comptabilité', '2023-04-24', '19:30:00', 'Jérôme Poe', 'Salarié', 'Parfaire ses connaissances en gestion', 'Présentation', '65.00', '1');

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

CREATE TABLE `inscrire` (
  `idStagiaire` varchar(50) NOT NULL,
  `idSession` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscrire`
--

INSERT INTO `inscrire` (`idStagiaire`, `idSession`) VALUES
('1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `interlocuteur`
--

CREATE TABLE `interlocuteur` (
  `idInterlocuteur` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Courriel` varchar(150) DEFAULT NULL,
  `Tel` smallint(6) DEFAULT NULL,
  `Fax` smallint(6) DEFAULT NULL,
  `Nom_1` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `interlocuteur`
--

INSERT INTO `interlocuteur` (`idInterlocuteur`, `Nom`, `Prenom`, `Courriel`, `Tel`, `Fax`, `Nom_1`) VALUES
('1', 'Giroux', 'Jeanne', 'giroux.jeanne@gmail.com', 32767, 32767, 'CROSL'),
('2', 'Martin', 'Antoine', 'martin.antoine@gmail.com', 154, 6868, 'QUALY');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `idSession` varchar(50) NOT NULL,
  `DateSession` date DEFAULT NULL,
  `Heure` time DEFAULT NULL,
  `DateLimiteInscription` date DEFAULT NULL,
  `idFormation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`idSession`, `DateSession`, `Heure`, `DateLimiteInscription`, `idFormation`) VALUES
('1', '2024-04-24', '19:30:00', '2024-04-22', '1');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `idStagiaire` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Adresse` varchar(150) DEFAULT NULL,
  `codePostal` int(5) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `Fonction` varchar(50) DEFAULT NULL,
  `Nom_1` varchar(150) NOT NULL,
  `idStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`idStagiaire`, `Nom`, `Prenom`, `Adresse`, `codePostal`, `Ville`, `email`, `Fonction`, `Nom_1`, `idStatus`) VALUES
('1', 'Dupont', 'Pierre', '4 avenue de la gare', 31000, 'Toulouse', 'pierre.dupont@gmail.com', 'salarié', 'CROSL', '1'),
('2', 'Durant', 'Jean', '5 Rue du pont', 75000, 'Paris', 'jean.durant@gmail.com', 'salarié', 'CROSL', '1'),
('3', 'Dupuis', 'Martin', '10 avenue', 81000, 'Albi', 'martin.dupuis@gmail.com', 'bénévole', 'CROSL', '1'),
('4', 'Nou ', 'Rodic ', '45 rue des lilas ', 31000, 'Toulouse', 'Rodic.nou@gmail.com', 'bénévole', 'QUALY', '2');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `idStatus` varchar(50) NOT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`idStatus`, `Status`) VALUES
('1', 'Salarié'),
('2', 'Bénévole');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`Nom`);

--
-- Index pour la table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInterlocuteur` (`idInterlocuteur`),
  ADD KEY `idStatus` (`idStatus`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`idDomaine`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idFormation`),
  ADD KEY `idDomaine` (`idDomaine`);

--
-- Index pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD PRIMARY KEY (`idStagiaire`,`idSession`),
  ADD KEY `idSession` (`idSession`);

--
-- Index pour la table `interlocuteur`
--
ALTER TABLE `interlocuteur`
  ADD PRIMARY KEY (`idInterlocuteur`),
  ADD UNIQUE KEY `Nom_1` (`Nom_1`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`idSession`),
  ADD KEY `idFormation` (`idFormation`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`idStagiaire`),
  ADD KEY `Nom_1` (`Nom_1`),
  ADD KEY `idStatus` (`idStatus`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
