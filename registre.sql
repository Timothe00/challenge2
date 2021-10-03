-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 03 oct. 2021 à 05:13
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fiche_etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `registre`
--

CREATE TABLE `registre` (
  `id_etudiant` int(10) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenoms` varchar(30) NOT NULL,
  `niveau_etude` varchar(10) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `mot_de_passe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `registre`
--

INSERT INTO `registre` (`id_etudiant`, `nom`, `prenoms`, `niveau_etude`, `mail`, `mot_de_passe`) VALUES
(167, 'abo', 'christiane', 'LICENCE PR', 'yaokonan@gmail.com', '4582'),
(168, 'yao', 'yao francis timothe', 'LICENCE PR', 'yaofrancistimothee@gmail.com', '1212'),
(169, 'yao', 'yao francis timothe', 'LICENCE PR', 'yaofrancistimothee@gmail.com', '1212'),
(170, 'yao', 'yao francis timothe', 'LICENCE PR', 'yaofrancistimothee@gmail.com', '1212'),
(171, 'yao', 'yao francis timothe', 'LICENCE PR', 'yaofrancistimothee@gmail.com', '1212');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `registre`
--
ALTER TABLE `registre`
  ADD PRIMARY KEY (`id_etudiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `registre`
--
ALTER TABLE `registre`
  MODIFY `id_etudiant` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
