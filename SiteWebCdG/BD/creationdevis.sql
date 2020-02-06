-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 16 juil. 2019 à 09:28
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `creationdevis`
--

-- --------------------------------------------------------

--
-- Structure de la table `doc`
--

CREATE TABLE `doc` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `mention` mediumtext NOT NULL,
  `conditionGene` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `doc`
--

INSERT INTO `doc` (`id`, `titre`, `description`, `mention`, `conditionGene`) VALUES
(4, 'test14-4', 'test14-4', 'test14-4', 'test14-4'),
(17, 'installation fibre', 'intervention d\'un technicien su le lieu de prestation et installation des fibres optique sur site', 'mention  mention  mention  mention mention mention mention mention mention', 'condition condition condition condition condition condition'),
(18, 'Maintenance appareil CISCO', 'maintenance des appareils CISCO mis en place par les Ã©quipes Orange et mise en place du SAV avec Orange Business Services', 'mention lÃ©gal de l\'application', 'condition gÃ©nÃ©ral');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `userid` mediumint(8) UNSIGNED NOT NULL,
  `first_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `password` char(60) CHARACTER SET utf8 NOT NULL,
  `registration_date` datetime NOT NULL,
  `rang` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `rang`) VALUES
(0, 'Baptiste', 'CONSTANT', 'baba.constant@sfr.fr', '3056849e9b6bef41c0eb17b01bfb25bb', '2019-06-07 10:08:06', 1),
(0, 'benjamin', 'constant', '1234.abcd@azerty.com', '5d9f71b71b207b9e665820c0dce67bdb', '2019-06-07 10:57:46', 0),
(0, 'azerty', 'uiop', '1234456@qsdfg.fr', '25f9e794323b453885f5181f1b624d0b', '2019-06-14 11:36:21', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
