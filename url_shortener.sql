-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mars 2021 à 21:08
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `url_shortener`
--

-- --------------------------------------------------------

--
-- Structure de la table `urls`
--

DROP TABLE IF EXISTS `urls`;
CREATE TABLE IF NOT EXISTS `urls` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `original_url` text NOT NULL,
  `uniqID` varchar(13) NOT NULL,
  `clicks` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `urls`
--

INSERT INTO `urls` (`ID`, `userID`, `original_url`, `uniqID`, `clicks`, `status`) VALUES
(8, 11, 'https://www.twitch.tv/', '60646be6f3190', 4, 1),
(19, 11, 'https://twitter.com/home', '6064c09e7e9bf', 0, 0),
(20, 11, 'https://www.behance.net/', '6064cfea420f8', 0, 0),
(21, 10, 'https://www.youtube.com/', '6064e0cdba48b', 3, 0),
(22, 10, 'https://www.instagram.com/', '6064e0d764c24', 0, 1),
(23, 10, 'https://www.twitch.tv/', '6064e0dbd7891', 1, 0),
(24, 10, 'https://www.linkedin.com/feed/', '6064e0e48aa9e', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userID`, `email`, `password`, `created_at`) VALUES
(10, 'test-account', 'test-password', '2021-03-31 22:50:36'),
(11, 'salut', '123456789', '2021-03-31 23:02:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
