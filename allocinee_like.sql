-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 juin 2023 à 10:55
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
-- Base de données : `allocinee_like`
--

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`id`, `title`, `release_date`) VALUES
(1, 'L\'Âge de glace : Les Lois de l\'Univers', '2016-06-15'),
(2, 'Alien', '1992-02-24'),
(3, 'Amityville : La Maison du diable ', '1979-01-17'),
(4, 'Astérix et Obélix : Mission Cléopâtre', '2002-10-04'),
(5, ' Avengers : L\'Ère d\'Ultron', '2015-11-18'),
(6, 'Batman : Le Défi', '1992-02-07'),
(7, 'Le Vieil Homme et l’Enfant', '1967-05-29'),
(8, 'Les Bronzés font du ski', '2011-07-29'),
(9, 'Captain America: First Avenger', '1982-03-18'),
(10, 'Conan le Barbare', '1975-08-17'),
(11, 'Les Dents de la mer', '2014-12-26'),
(12, 'Divergente', '1971-11-26'),
(13, 'L’Inspecteur Harry', '2013-09-21'),
(14, 'Iron Man 3', '2012-10-21'),
(15, 'Men in Black 3', '2001-03-21'),
(16, 'Ocean\'s Eleven', '2009-12-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
