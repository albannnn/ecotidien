-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 06 avr. 2023 à 12:47
-- Version du serveur : 5.7.33
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecotidien`
--

-- --------------------------------------------------------

--
-- Structure de la table `astuces`
--

CREATE TABLE `astuces` (
  `conseil_id` int(150) NOT NULL,
  `conseil` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `astuces`
--

INSERT INTO `astuces` (`conseil_id`, `conseil`) VALUES
(1, 'Éteignez les lumières et les appareils électroniques lorsqu\'ils ne sont pas utilisés.'),
(2, 'Utilisez des sacs réutilisables pour les courses.'),
(3, 'Évitez l\'utilisation excessive de plastiques jetables, comme les bouteilles et les gobelets.'),
(4, 'Réduisez votre consommation de viande, qui est associée à une empreinte environnementale importante.'),
(5, 'Marchez, faites du vélo ou utilisez les transports en commun plutôt que de prendre la voiture pour de courtes distances.'),
(6, 'Achetez des produits locaux et de saison pour réduire les émissions liées au transport.'),
(7, 'Recyclez autant que possible.'),
(8, 'Économisez l\'eau en prenant des douches plus courtes et en ne laissant pas couler l\'eau inutilement.'),
(9, 'Installez des panneaux solaires pour produire votre propre énergie verte.'),
(10, 'Utilisez des produits écologiques pour le ménage et la lessive.'),
(11, 'Compostez les déchets alimentaires pour en faire un engrais naturel pour votre jardin.'),
(12, 'Achetez des produits durables qui dureront plus longtemps et nécessiteront moins de remplacement.'),
(13, 'Plantez des arbres et créez des jardins pour absorber du dioxyde de carbone.'),
(14, 'Évitez les produits emballés excessivement.'),
(15, 'Participez à des initiatives pour nettoyer votre quartier ou votre ville.'),
(16, 'Éduquez votre famille et vos amis sur l\'importance de prendre soin de la planète.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_user` int(100) NOT NULL,
  `email` char(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `prénom` char(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_user`, `email`, `password`, `username`, `nom`, `prénom`) VALUES
(1, 'admin', 'admin2005', 'admin', 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `astuces`
--
ALTER TABLE `astuces`
  ADD PRIMARY KEY (`conseil_id`);
ALTER TABLE `astuces` ADD FULLTEXT KEY `conseil` (`conseil`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `astuces`
--
ALTER TABLE `astuces`
  MODIFY `conseil_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
