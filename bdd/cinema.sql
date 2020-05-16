-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 16 mai 2020 à 16:12
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinema`
--
CREATE DATABASE IF NOT EXISTS `cinema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cinema`;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `commentaire` text CHARACTER SET utf8 NOT NULL,
  `film` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `nom`, `commentaire`, `film`, `date_commentaire`) VALUES
(4, 'test', '', 'Shrek 3', '2020-05-16 15:14:27'),
(5, 'test', '', 'Shrek 3', '2020-05-16 15:14:36'),
(6, 'test', 'ok', 'Dark', '2020-05-16 15:14:52'),
(7, 'loic', 'oui', 'GFL', '2020-05-16 15:18:37');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(60) COLLATE utf8_bin NOT NULL,
  `role` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `email`, `mdp`, `role`) VALUES
(1, 'test', 'test', 'a@a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'user'),
(2, 'b', 'b', 'b@b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', 'user'),
(3, 'admin', 'admin', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(11, 'g', 'g', 'g@g', '54fd1711209fb1c0781092374132c66e79e2241b', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `film` (`film`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `film`, `description`, `image`, `width`, `height`) VALUES
(1, 'Shrek 3', 'Shrek retourne dans une nouvelle aventure', 'lib/images/Shrekt.jpg', 94, 154),
(2, 'Dark', 'Un film recommandé par Enzo', 'lib/images/dark.png', 94, 154),
(3, 'GFL', 'Suivez les aventures de l\'AR team dans une quête remplie de rebondissement et de larmes', 'lib/images/sad.jpg', 260, 154),
(4, 'Sonic vs les flics', 'Dans cette nouvelle aventure, Sonic notre hérisson préféré a décidé de devenir un dealer de drogue. Cependant les flics sont au courant et essayeront de l\'arrêter à tout pris ', 'lib\\images\\sonic.jpg', 144, 144);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `email` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `nb_pers` int(11) NOT NULL,
  `film` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`email`, `nom`, `nb_pers`, `film`, `date`, `heure`) VALUES
('a@a', 'test', 1, 'Shrek 3', '2020-05-16', '17:35:00'),
('g@g', 'g', 1, 'GFL', '2020-05-16', '17:35:00');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_film` FOREIGN KEY (`film`) REFERENCES `billets` (`NomF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
