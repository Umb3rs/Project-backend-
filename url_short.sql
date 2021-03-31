-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mars 2021 à 19:44
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
-- Base de données : `url_short`
--

-- --------------------------------------------------------

--
-- Structure de la table `urls`
--

DROP TABLE IF EXISTS `urls`;
CREATE TABLE IF NOT EXISTS `urls` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `long_url` text NOT NULL,
  `uniqID` varchar(13) NOT NULL,
  `clicks` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `urls`
--

INSERT INTO `urls` (`ID`, `userID`, `long_url`, `uniqID`, `clicks`, `status`) VALUES
(8, 2, 'https://www.twitch.tv/', '60646be6f3190', 0, 1),
(10, 1, 'https://twitter.com/home', '6064bddeb8ffb', 4, 1),
(11, 1, 'https://twitter.com/home', '6064be707cbb8', 0, 1),
(12, 1, 'https://twitter.com/home', '6064bea53da36', 0, 0),
(13, 1, 'https://twitter.com/home', '6064bfa878474', 0, 1),
(14, 1, 'https://twitter.com/home', '6064c01baccfb', 0, 1),
(15, 1, 'https://twitter.com/home', '6064c032b1c14', 0, 1),
(16, 1, 'https://twitter.com/home', '6064c04d28e81', 0, 1),
(17, 1, 'https://twitter.com/home', '6064c063c06ea', 0, 1),
(18, 1, 'https://twitter.com/home', '6064c08ca57d1', 0, 1),
(19, 1, 'https://twitter.com/home', '6064c09e7e9bf', 0, 1),
(20, 1, 'https://www.behance.net/', '6064cfea420f8', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userId`, `email`, `password`, `created_at`) VALUES
(1, 'coucou', '123456', '2021-03-31 15:41:53'),
(2, 'testID', '123456789', '2021-03-31 15:57:23'),
(3, 'testID', '123456789', '2021-03-31 16:02:55'),
(4, 'testID', '123456789', '2021-03-31 16:03:02'),
(5, 'testID', '123456789', '2021-03-31 16:04:22'),
(6, 'candyce', '123456', '2021-03-31 17:11:33'),
(7, 'coucou', '123456', '2021-03-31 17:23:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
