-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 fév. 2019 à 18:32
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `traiteur`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`id`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(1, 'img-27.jpg', 'team-3.jpg', 'bkg-img9.png', 'team-2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `email`, `password`) VALUES
(1, 'abdo', 'abdo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

DROP TABLE IF EXISTS `apropos`;
CREATE TABLE IF NOT EXISTS `apropos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `titrea` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `photoa` varchar(255) NOT NULL,
  `photob` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apropos`
--

INSERT INTO `apropos` (`id`, `titre`, `titrea`, `description`, `photoa`, `photob`) VALUES
(1, 'donnez plus de goût et de saveur à vos événements', 'L’expérience culinaire au service de l’évènement !', 'Traiteur SARL est votre partenaire traiteur pour tous vos évènements. Ses éminents cuisiniers vous concoctent une cuisine raffinée et créative où vous retrouverez les saveurs des produits frais utilisés dans toutes les préparations.\r\n                                                                                                                                                                                                                                                                                                                                                                                ', 'spices-left.png', 'ok.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `decoration`
--

DROP TABLE IF EXISTS `decoration`;
CREATE TABLE IF NOT EXISTS `decoration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `decoration`
--

INSERT INTO `decoration` (`id`, `titre`, `image`) VALUES
(1, 'donnez plus de goût et de saveur à vos événements', '10.jpg'),
(2, 'donnez plus de goût', 'img-06.jpg'),
(3, 'donnez plus de goût abdo', 'decoration-de-mariage-griffe-deco-nancy-rouge-bordeau2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `gastronomie`
--

DROP TABLE IF EXISTS `gastronomie`;
CREATE TABLE IF NOT EXISTS `gastronomie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `etat` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patisserie`
--

DROP TABLE IF EXISTS `patisserie`;
CREATE TABLE IF NOT EXISTS `patisserie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patisserie`
--

INSERT INTO `patisserie` (`id`, `image`, `type`) VALUES
(10, '1.jpg', 'maroc'),
(11, '2.jpg', 'maroc'),
(12, '3.jpg', 'maroc'),
(13, '5.jpg', 'autre'),
(14, '6.jpg', 'autre'),
(15, '7.jpg', 'maroc'),
(16, '10.jpg', 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `planifions`
--

DROP TABLE IF EXISTS `planifions`;
CREATE TABLE IF NOT EXISTS `planifions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `planifions`
--

INSERT INTO `planifions` (`id`, `image`, `titre`) VALUES
(13, 'menu-item-20.png', 'donnez plus de goût'),
(14, 'menu-item-02.png', 'donnez plus de goût pour abdo'),
(15, 'menu-item-18.png', 'donnez plus de goût 2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
