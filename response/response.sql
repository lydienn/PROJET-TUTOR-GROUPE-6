-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 fév. 2023 à 13:32
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `response`
--

-- --------------------------------------------------------

--
-- Structure de la table `expedition`
--

CREATE TABLE `expedition` (
  `id` int(11) NOT NULL,
  `codeExpediteur` varchar(16) NOT NULL,
  `adresseExpediteur` varchar(255) NOT NULL,
  `regionExpediteur` varchar(255) NOT NULL,
  `villeExpediteur` varchar(255) NOT NULL,
  `nomRecepteur` varchar(255) NOT NULL,
  `emailRecepteur` varchar(255) NOT NULL,
  `numeroRecepteur` int(16) NOT NULL,
  `adresseRecepteur` varchar(255) NOT NULL,
  `regionRecepteur` varchar(255) NOT NULL,
  `villeRecepteur` varchar(255) NOT NULL,
  `pieceId` varchar(255) NOT NULL,
  `idnumRecepteur` int(12) NOT NULL,
  `date_deliv` date NOT NULL,
  `date_exp` date NOT NULL,
  `numeroTracking` varchar(32) NOT NULL,
  `expedition_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `livreurs`
--

CREATE TABLE `livreurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `numeroLivreur` int(16) NOT NULL,
  `numeroCNI` varchar(255) NOT NULL,
  `codeLivreur` varchar(32) NOT NULL,
  `sign_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numeroTelephone` int(14) NOT NULL,
  `piceId` varchar(255) NOT NULL,
  `Idnum` int(12) NOT NULL,
  `date_deliv` date NOT NULL,
  `date_exp` date NOT NULL,
  `mdp` varchar(11) NOT NULL,
  `sign_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `expedition`
--
ALTER TABLE `expedition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livreurs`
--
ALTER TABLE `livreurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `expedition`
--
ALTER TABLE `expedition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livreurs`
--
ALTER TABLE `livreurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
