-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 06 fév. 2019 à 21:18
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `docteur1_srpr`
--

-- --------------------------------------------------------

--
-- Structure de la table `abcde`
--

CREATE TABLE `abcde` (
  `id` int(11) NOT NULL,
  `nom` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abcde`
--

INSERT INTO `abcde` (`id`, `nom`) VALUES
(1, ''),
(2, 'A'),
(3, 'B'),
(4, 'C'),
(5, 'D'),
(6, 'E');

-- --------------------------------------------------------

--
-- Structure de la table `alim`
--

CREATE TABLE `alim` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `alim`
--

INSERT INTO `alim` (`id`, `nom`) VALUES
(1, ''),
(2, 'Orale'),
(3, 'Mixte'),
(4, 'Entérale'),
(5, 'Parentérale');

-- --------------------------------------------------------

--
-- Structure de la table `ascvasc`
--

CREATE TABLE `ascvasc` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ascvasc`
--

INSERT INTO `ascvasc` (`id`, `nom`) VALUES
(1, 'Aucun'),
(2, 'VVP'),
(3, 'KT central'),
(4, 'PIC line');

-- --------------------------------------------------------

--
-- Structure de la table `bact`
--

CREATE TABLE `bact` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bact`
--

INSERT INTO `bact` (`id`, `nom`) VALUES
(1, ''),
(2, 'Bactérien'),
(3, 'Viral');

-- --------------------------------------------------------

--
-- Structure de la table `bhr`
--

CREATE TABLE `bhr` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bhr`
--

INSERT INTO `bhr` (`id`, `nom`) VALUES
(4, ''),
(5, 'Orale'),
(6, 'Mixte'),
(7, 'Entérale'),
(8, 'Parentérale');

-- --------------------------------------------------------

--
-- Structure de la table `bmrgerme`
--

CREATE TABLE `bmrgerme` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bmrgerme`
--

INSERT INTO `bmrgerme` (`id`, `nom`) VALUES
(1, ''),
(2, 'SAMR'),
(3, 'Entérobactérie'),
(4, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `bmrloc`
--

CREATE TABLE `bmrloc` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bmrloc`
--

INSERT INTO `bmrloc` (`id`, `nom`) VALUES
(1, ''),
(7, 'nasal'),
(8, 'rectal'),
(9, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `clinique1`
--

CREATE TABLE `clinique1` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `compacr`
--

CREATE TABLE `compacr` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compacr`
--

INSERT INTO `compacr` (`id`, `nom`) VALUES
(1, ''),
(2, 'Récupéré'),
(3, 'non récupéré');

-- --------------------------------------------------------

--
-- Structure de la table `compcard`
--

CREATE TABLE `compcard` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compcard`
--

INSERT INTO `compcard` (`id`, `nom`) VALUES
(1, ''),
(2, 'IC globale'),
(3, 'OAP'),
(4, 'Insuffisance coronarienne'),
(5, 'TdR ventriculaire'),
(6, 'TdR supra ventriculaire'),
(7, 'Choc cadiogénique');

-- --------------------------------------------------------

--
-- Structure de la table `comphemor`
--

CREATE TABLE `comphemor` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comphemor`
--

INSERT INTO `comphemor` (`id`, `nom`) VALUES
(1, ''),
(2, 'Digestive'),
(3, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `compinf`
--

CREATE TABLE `compinf` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compinf`
--

INSERT INTO `compinf` (`id`, `nom`) VALUES
(1, ''),
(2, 'Rénale'),
(3, 'Urinaire bas'),
(4, 'Septicémie'),
(5, 'Choc septique');

-- --------------------------------------------------------

--
-- Structure de la table `compneuro`
--

CREATE TABLE `compneuro` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compneuro`
--

INSERT INTO `compneuro` (`id`, `nom`) VALUES
(1, ''),
(2, 'EME'),
(3, 'Coma'),
(5, 'AVC hémorragique'),
(6, 'AVC ischémique'),
(7, 'Infectieux - Empyème'),
(8, 'Infectieux - DVP'),
(9, 'Infectieux - Autre');

-- --------------------------------------------------------

--
-- Structure de la table `comprein`
--

CREATE TABLE `comprein` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comprein`
--

INSERT INTO `comprein` (`id`, `nom`) VALUES
(1, ''),
(2, 'organique'),
(3, 'Fonctionnelle'),
(4, 'Rétention');

-- --------------------------------------------------------

--
-- Structure de la table `compresp`
--

CREATE TABLE `compresp` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compresp`
--

INSERT INTO `compresp` (`id`, `nom`) VALUES
(1, ''),
(2, 'Pneumopathie'),
(3, 'PAVM'),
(4, 'Atélectasie'),
(5, 'Pneumothorax'),
(6, 'Embolie pulmonaire');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`) VALUES
(1, ' '),
(2, 'Époux/épouse'),
(3, 'fils/fille'),
(4, 'Voisin'),
(5, 'Ami'),
(6, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `continu`
--

CREATE TABLE `continu` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `continu`
--

INSERT INTO `continu` (`id`, `nom`) VALUES
(1, 'continue'),
(2, 'discontinue');

-- --------------------------------------------------------

--
-- Structure de la table `escarre`
--

CREATE TABLE `escarre` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `escarre`
--

INSERT INTO `escarre` (`id`, `nom`) VALUES
(1, ''),
(2, 'Stade 1'),
(3, 'Stade 2'),
(4, 'Stade 3'),
(5, 'Stade 4');

-- --------------------------------------------------------

--
-- Structure de la table `escarrett`
--

CREATE TABLE `escarrett` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `escarrett`
--

INSERT INTO `escarrett` (`id`, `nom`) VALUES
(0, ''),
(1, 'pansements'),
(2, 'VAC');

-- --------------------------------------------------------

--
-- Structure de la table `etatcivil`
--

CREATE TABLE `etatcivil` (
  `ID` int(11) NOT NULL,
  `prenom` varchar(20) COLLATE utf8_bin NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `datenaiss` varchar(7) COLLATE utf8_bin NOT NULL,
  `tel11` varchar(15) COLLATE utf8_bin NOT NULL,
  `tel2` varchar(15) COLLATE utf8_bin NOT NULL,
  `tel3` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `etiologie`
--

CREATE TABLE `etiologie` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etiologie`
--

INSERT INTO `etiologie` (`id`, `nom`) VALUES
(1, ''),
(2, 'AVC ischémique'),
(3, 'AVC hémorragique'),
(4, 'Méningite'),
(5, 'Méningo-encéphalite'),
(6, 'Traumatisme crânien'),
(7, 'traumatisme médullaire'),
(8, 'Encéphalopathie post anoxique');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id`, `nom`) VALUES
(1, ''),
(2, 'Domicile'),
(3, 'Réa/USC'),
(4, 'Service MCO'),
(5, 'SSR'),
(6, 'Institution'),
(7, 'HAD'),
(8, 'HAD SSR');

-- --------------------------------------------------------

--
-- Structure de la table `ouinon`
--

CREATE TABLE `ouinon` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ouinon`
--

INSERT INTO `ouinon` (`id`, `nom`) VALUES
(1, ''),
(2, 'oui'),
(3, 'non');

-- --------------------------------------------------------

--
-- Structure de la table `plegie`
--

CREATE TABLE `plegie` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plegie`
--

INSERT INTO `plegie` (`id`, `nom`) VALUES
(1, 'Aucune'),
(2, 'Partielle'),
(3, 'Complête');

-- --------------------------------------------------------

--
-- Structure de la table `ttesc`
--

CREATE TABLE `ttesc` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ttesc`
--

INSERT INTO `ttesc` (`id`, `nom`) VALUES
(1, ''),
(2, 'Pansement'),
(3, 'VAC');

-- --------------------------------------------------------

--
-- Structure de la table `visuel`
--

CREATE TABLE `visuel` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visuel`
--

INSERT INTO `visuel` (`id`, `nom`) VALUES
(1, 'non'),
(2, 'Défaillance visuelle complète - Sd de Terson'),
(3, 'Défaillance visuelle complète - Autre'),
(4, 'Défaillance visuelle partielle');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abcde`
--
ALTER TABLE `abcde`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alim`
--
ALTER TABLE `alim`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ascvasc`
--
ALTER TABLE `ascvasc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bact`
--
ALTER TABLE `bact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bhr`
--
ALTER TABLE `bhr`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bmrgerme`
--
ALTER TABLE `bmrgerme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bmrloc`
--
ALTER TABLE `bmrloc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clinique1`
--
ALTER TABLE `clinique1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compacr`
--
ALTER TABLE `compacr`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compcard`
--
ALTER TABLE `compcard`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comphemor`
--
ALTER TABLE `comphemor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compinf`
--
ALTER TABLE `compinf`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compneuro`
--
ALTER TABLE `compneuro`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comprein`
--
ALTER TABLE `comprein`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compresp`
--
ALTER TABLE `compresp`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `continu`
--
ALTER TABLE `continu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `escarre`
--
ALTER TABLE `escarre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `escarrett`
--
ALTER TABLE `escarrett`
  ADD KEY `id` (`id`);

--
-- Index pour la table `etatcivil`
--
ALTER TABLE `etatcivil`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `etiologie`
--
ALTER TABLE `etiologie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ouinon`
--
ALTER TABLE `ouinon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plegie`
--
ALTER TABLE `plegie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ttesc`
--
ALTER TABLE `ttesc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visuel`
--
ALTER TABLE `visuel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abcde`
--
ALTER TABLE `abcde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `alim`
--
ALTER TABLE `alim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ascvasc`
--
ALTER TABLE `ascvasc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `bact`
--
ALTER TABLE `bact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `bhr`
--
ALTER TABLE `bhr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `bmrgerme`
--
ALTER TABLE `bmrgerme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `bmrloc`
--
ALTER TABLE `bmrloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `clinique1`
--
ALTER TABLE `clinique1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compacr`
--
ALTER TABLE `compacr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `compcard`
--
ALTER TABLE `compcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `comphemor`
--
ALTER TABLE `comphemor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `compinf`
--
ALTER TABLE `compinf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `compneuro`
--
ALTER TABLE `compneuro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `comprein`
--
ALTER TABLE `comprein`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `compresp`
--
ALTER TABLE `compresp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `continu`
--
ALTER TABLE `continu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `escarre`
--
ALTER TABLE `escarre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `etatcivil`
--
ALTER TABLE `etatcivil`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etiologie`
--
ALTER TABLE `etiologie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `ouinon`
--
ALTER TABLE `ouinon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `plegie`
--
ALTER TABLE `plegie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ttesc`
--
ALTER TABLE `ttesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `visuel`
--
ALTER TABLE `visuel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
