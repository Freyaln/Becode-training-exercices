-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 22 nov. 2021 à 16:42
-- Version du serveur : 8.0.27-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hiking`
--

-- --------------------------------------------------------

--
-- Structure de la table `hiking`
--

CREATE TABLE `hiking` (
  `id` int NOT NULL,
  `name` varchar(400) NOT NULL,
  `difficulty` char(30) NOT NULL,
  `distance` int NOT NULL,
  `duration` time NOT NULL,
  `height_difference` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `hiking`
--

INSERT INTO `hiking` (`id`, `name`, `difficulty`, `distance`, `duration`, `height_difference`) VALUES
(1, 'Le Sentier des Sources entre Cilaos et Bras Sec ', 'Facile', 5, '01:15:00', 280),
(2, 'Deux boucles de Bras Sec à Palmiste Rouge', 'Moyen', 12, '05:00:00', 850),
(3, 'Le sommet du Piton Béthoune par le tour du Bonnet de Prêtre', 'Très difficile', 6, '04:00:00', 650),
(4, 'Le Dimitile depuis Bras Sec par le Kerveguen', 'Difficile', 25, '10:00:00', 1550),
(5, 'La boucle du sentier de découverte de Cilaos à la Roche Merveilleuse', 'Très facile', 1, '01:00:00', 55);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hiking`
--
ALTER TABLE `hiking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hiking`
--
ALTER TABLE `hiking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
