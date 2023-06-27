-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 27 juin 2023 à 14:11
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
-- Structure de la table `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE IF NOT EXISTS `actor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actor`
--

INSERT INTO `actor` (`id`, `first_name`, `last_name`) VALUES
(1, 'Screetch', 'Noisette'),
(2, 'Sigourney ', 'Weaver'),
(3, 'Ryan', 'Reynolds'),
(4, 'Alain', 'Chabat'),
(5, 'Chris', 'Hemsworth'),
(6, 'Michael', 'Keaton'),
(7, 'Michel', 'Simon'),
(8, 'Gérard', 'Jugnot'),
(9, 'Chris', 'Evans'),
(10, 'Arnold', 'Schwarzenegger'),
(11, 'Roy', 'Scheider'),
(12, 'Shailene', 'Woodley'),
(13, 'Clint', 'Eastwood'),
(14, 'Robert', 'Downey Jr'),
(15, 'Will', 'Smith'),
(16, 'Julia', 'Roberts');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(8, 'Les Bronzés font du ski', '1979-07-29'),
(9, 'Captain America: First Avenger', '2011-03-18'),
(10, 'Conan le Barbare', '1982-08-17'),
(11, 'Les Dents de la mer', '1975-12-26'),
(12, 'Divergente', '2014-11-26'),
(13, 'L’Inspecteur Harry', '1971-09-21'),
(14, 'Iron Man 3', '2013-10-21'),
(15, 'Men in Black 3', '2012-03-24'),
(16, 'Ocean\'s Eleven', '2001-12-15');

-- --------------------------------------------------------

--
-- Structure de la table `movie_actor`
--

DROP TABLE IF EXISTS `movie_actor`;
CREATE TABLE IF NOT EXISTS `movie_actor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_actor` int NOT NULL,
  `id_movie` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_actor` (`id_actor`,`id_movie`),
  KEY `movie_actor_ibfk_2` (`id_movie`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movie_actor`
--

INSERT INTO `movie_actor` (`id`, `id_actor`, `id_movie`) VALUES
(2, 1, 4),
(1, 1, 15),
(3, 2, 10),
(4, 3, 8),
(5, 4, 8),
(40, 4, 15),
(6, 5, 4),
(7, 6, 12),
(8, 7, 2),
(39, 7, 9),
(9, 7, 13),
(10, 8, 14),
(31, 9, 16),
(32, 10, 11),
(13, 11, 1),
(14, 12, 3),
(38, 12, 7),
(15, 13, 5),
(16, 14, 6),
(17, 15, 12);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD CONSTRAINT `movie_actor_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `movie_actor_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
