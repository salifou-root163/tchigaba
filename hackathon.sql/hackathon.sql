-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 28 avr. 2019 à 14:47
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad`
--

CREATE TABLE `ad` (
  `ida` int(11) NOT NULL,
  `cmp` varchar(225) NOT NULL,
  `mdp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ad`
--

INSERT INTO `ad` (`ida`, `cmp`, `mdp`) VALUES
(1, 'oumalher@gmail', 1234),
(2, 'rabibi', 2023);

-- --------------------------------------------------------

--
-- Structure de la table `entrepreneur`
--

CREATE TABLE `entrepreneur` (
  `id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `domen` varchar(225) NOT NULL,
  `numt` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `pseudo` int(11) NOT NULL,
  `motpass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entrepreneur`
--

INSERT INTO `entrepreneur` (`id`, `nom`, `prenom`, `domen`, `numt`, `email`, `pseudo`, `motpass`) VALUES
(1, 'ouma', 'issa', 'codeuse', 91996624, 'princesse@gmail.com', 23, 1234),
(2, 'kjdsfhuekldshfkj', 'fskjsd', 'jhsfkjsf', 653546, 'sfjsf@gmail.com', 4353, 34343),
(3, 'nana', 'issa', 'codeuse', 91996623, 'princesse@gemail.com', 123, 741),
(4, 'nafissa', 'lal', 'jehjd', 23659, 'princesse@gemail.com', 52, 6355),
(5, 'latifa', 'yari', 'codeuse', 91996352, 'princesse@gemail.com', 65, 65523);

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE `info` (
  `ide` int(11) NOT NULL,
  `civilite` enum('H','F') DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` text,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(25) NOT NULL,
  `telephone` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `departement` varchar(50) NOT NULL,
  `oeuvre` varchar(50) NOT NULL,
  `formation` varchar(50) NOT NULL,
  `photo` text,
  `numdossier` text,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`ida`);

--
-- Index pour la table `entrepreneur`
--
ALTER TABLE `entrepreneur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ide`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ad`
--
ALTER TABLE `ad`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `entrepreneur`
--
ALTER TABLE `entrepreneur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `info`
--
ALTER TABLE `info`
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
