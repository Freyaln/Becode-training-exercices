-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 déc. 2021 à 20:47
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
-- Base de données : `cogip2`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `VAT_number` varchar(255) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `country`, `VAT_number`, `type_id`) VALUES
(1, 'Coucou', 'United States', 'US456 654 342', 1),
(2, 'Dunder Mifflin ', 'United States', 'US678 765 765', 1),
(3, 'Raviga', 'France', 'FR 677 544 000', 1),
(4, 'Bob Vance Refrig', 'United States', 'US456 654 687', 1),
(5, 'Belgalol', 'Belgique', 'BE0876 654 665', 2),
(6, 'Pierre Cailloux', 'France', 'FR 678 908 654', 2),
(7, 'Proximdr', 'Belgique', 'BE0876 985 665', 2),
(8, 'Electric Power', 'Italie', 'IT 256 852 542', 2),
(9, 'Mutiny', 'Spain', 'ES664 321 765', 2),
(10, 'Hooli', 'France', 'FR 679 541 321', 1),
(11, 'Phoque Off', 'France', 'FR 677 545 789', 1),
(12, 'Pied Piper', 'Belgique', 'BE0876 598 732', 2);

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `people_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  KEY `people_id` (`people_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `number`, `date`, `company_id`, `people_id`) VALUES
(2, 'F20190404-003', '2019-04-04', 2, 2),
(3, 'F20190404-002', '2019-04-04', 6, 4),
(4, 'F20190404-001', '2019-04-04', 12, 6),
(5, 'F20190403-654', '2019-04-03', 1, 1),
(6, 'F20180414-008', '2018-04-14', 2, 2),
(7, 'F20180408-002', '2018-04-08', 6, 4),
(8, 'F20180407-001', '2018-04-07', 12, 6),
(9, 'F20180403-654', '2018-04-03', 1, 1),
(10, 'F20180404-004', '2018-04-04', 3, 3),
(11, 'F20170404-003', '2017-04-04', 2, 2),
(12, 'F20170524-002', '2017-02-04', 6, 4),
(13, 'F20170404-001', '2017-04-04', 12, 6),
(14, 'P00000', '2000-01-01', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `peoples`
--

DROP TABLE IF EXISTS `peoples`;
CREATE TABLE IF NOT EXISTS `peoples` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `peoples`
--

INSERT INTO `peoples` (`id`, `firstname`, `lastname`, `email`, `phone_number`, `company_id`) VALUES
(1, 'Peter', 'Gregory', 'peter.gregory@raviga.com', '555-4567', 1),
(2, 'Dwight', 'Schrute', 'dwight.schruteaddmfl.com', '555-9859', 2),
(3, 'Cameron', 'Howe', 'cam.howe@mutiny.net', '555-7896', 3),
(4, 'Gavin', 'Belson', 'gavin@hooli.com', '555-4213', 6),
(5, 'Jian', 'Yang', 'jian.yangaphoque.off', '555-4567', 11),
(6, 'Bertram', 'Gilfoyle', 'gilfoyle@piedpiper.com', '555-0987', 12);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'Provider'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `pass_word`) VALUES
(1, 'Jean-Christian', '9770d1c99cd356280d7bb78b97bdbe4bf25ff1da'),
(2, 'Muriel', 'f2ff241eac83db641cadb1c8af3b0d8ca9fa7160');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`people_id`) REFERENCES `peoples` (`id`);

--
-- Contraintes pour la table `peoples`
--
ALTER TABLE `peoples`
  ADD CONSTRAINT `peoples_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
