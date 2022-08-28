-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 août 2022 à 00:23
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `add_product_admin`
--

CREATE TABLE `add_product_admin` (
  `idproduit` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `textdes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `add_product_admin`
--

INSERT INTO `add_product_admin` (`idproduit`, `image`, `textdes`) VALUES
(222, 'USER_AVATAR.jpg', '222');

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `id` int(11) NOT NULL,
  `Article` varchar(30) NOT NULL,
  `La quantité` int(11) NOT NULL,
  `Le bénéficiaire` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `affectation`
--

INSERT INTO `affectation` (`id`, `Article`, `La quantité`, `Le bénéficiaire`, `date`) VALUES
(1, 'hamki', 0, '2', '2019-12-21'),
(2, 'hamki', 0, '3', '2019-12-21'),
(3, 'hamki', 3, 'hamido', '2019-12-21'),
(4, 'Alami', 3, 'Anas', '2019-12-21'),
(5, 'Alami', 3, 'Anas', '2019-12-21'),
(6, 'Alami', 3, 'Anas', '2019-12-21'),
(7, 'hh', 0, '', '2019-12-21'),
(8, 'hhh', 0, '', '2019-12-21'),
(9, 'jkhk', 2, 'hami', '2019-12-22'),
(10, 'hamk', 3, 'hami', '2019-12-22'),
(11, 'hamk', 6, 'hami', '2019-12-22'),
(12, 'hjk', 2, 'Anas', '2019-12-22'),
(13, 'hamk', -3, 'Anas', '2019-12-22'),
(14, '000', 0, '000', '2022-08-28');

-- --------------------------------------------------------

--
-- Structure de la table `annulation`
--

CREATE TABLE `annulation` (
  `id` int(11) NOT NULL,
  `num_de_commande` varchar(9) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annulation`
--

INSERT INTO `annulation` (`id`, `num_de_commande`, `date`) VALUES
(1, 'hfgkj', '2019-12-21'),
(2, 'jjj', '2019-12-21'),
(3, 'jjj', '2019-12-21'),
(4, '', '2019-12-21'),
(5, '5', '2019-12-21'),
(6, '55', '2019-12-22'),
(7, 'kukk', '2019-12-22'),
(8, 'kukk', '2019-12-22'),
(9, 'kukk', '2019-12-22'),
(10, 'kukk', '2019-12-22'),
(11, 'kukk', '2019-12-22'),
(12, 'kukk', '2019-12-22'),
(13, 'kukk', '2019-12-22'),
(14, 'kukk', '2019-12-22'),
(15, 'kull', '2019-12-22'),
(16, 'kukk', '2019-12-22'),
(17, 'kk', '2019-12-22'),
(18, '1234', '2019-12-24'),
(19, '1234', '2019-12-24'),
(20, '4', '2022-08-28');

-- --------------------------------------------------------

--
-- Structure de la table `demander`
--

CREATE TABLE `demander` (
  `user` varchar(255) DEFAULT NULL,
  `textdes` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demander`
--

INSERT INTO `demander` (`user`, `textdes`) VALUES
('', '<br />\r\n<b>Warning</b>:  Undefined array key \"text\" in <b>C:xampphtdocsprojetdestagedemmande_produit.php</b> on line <b>58</b><br />\r\n'),
('cddcdsc', 'dcsdcdsd\r\n'),
('admin', 'pc');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `num_de_commande` varchar(25) NOT NULL,
  `Article` varchar(25) NOT NULL,
  `Le vendeur` varchar(25) NOT NULL,
  `Le prix` float NOT NULL,
  `La quantité` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `num_de_commande`, `Article`, `Le vendeur`, `Le prix`, `La quantité`, `date`) VALUES
(3, '123', 'ghghg', 'lenovo', 200, 4, '2019-12-21'),
(4, '123', 'Laptop', 'kk', 200, 37, '2019-12-21'),
(59, '', 'fhf', '', 0, 0, '2019-12-21'),
(64, '', 'Laptop', '', 0, 0, '2019-12-22'),
(65, '', 'Laptop', '', 0, 0, '2019-12-22'),
(66, '', 'Laptop', '', 0, 0, '2019-12-22'),
(69, '', 'gg', '', 0, 0, '2019-12-22'),
(70, '', 'hhhh', '', 0, 0, '2019-12-22'),
(72, '123', 'ghghg', 'lenovo', 200, 34, '2019-12-23'),
(80, '1234', 'Laptop', 'lenovo', 200, 4, '2019-12-25'),
(81, '1234', 'Laptop', 'lenovo', 200, 5, '2019-12-25'),
(82, '', 'ghghg', '', 0, 0, '2019-12-25'),
(83, '1234', 'Laptop', 'lenovo', 200, 2, '2020-01-06'),
(84, '000', '000', '000', 0, 0, '2022-08-28');

-- --------------------------------------------------------

--
-- Structure de la table `reparation`
--

CREATE TABLE `reparation` (
  `id` int(11) NOT NULL,
  `num_de_commande` varchar(9) NOT NULL,
  `Article` varchar(30) NOT NULL,
  `Le vendeur` varchar(30) NOT NULL,
  `La quantité` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reparation`
--

INSERT INTO `reparation` (`id`, `num_de_commande`, `Article`, `Le vendeur`, `La quantité`, `date`) VALUES
(1, 'a', 'a', 'a', 3, '2019-12-21'),
(2, 'v', 'v', 'v', 2, '2019-12-21'),
(3, 'v', 'v', 'v', 2, '2019-12-21'),
(4, '', 'dd', '', 0, '2019-12-21'),
(5, '1', 'a', 'a', 2, '2019-12-22');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `statut` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_closed`, `statut`) VALUES
(1, 'ayoub', 'ayoub@gmail.com', '123456', 'no', 'Administrateur'),
(2, 'test', 'client@gmail.com', '123456', 'no', 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `add_product_admin`
--
ALTER TABLE `add_product_admin`
  ADD PRIMARY KEY (`idproduit`);

--
-- Index pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reparation`
--
ALTER TABLE `reparation`
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
-- AUTO_INCREMENT pour la table `affectation`
--
ALTER TABLE `affectation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `annulation`
--
ALTER TABLE `annulation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `reparation`
--
ALTER TABLE `reparation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
