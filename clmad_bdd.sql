-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 juin 2022 à 11:02
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clmad_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categ` int(11) NOT NULL,
  `nom_categ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categ`, `nom_categ`) VALUES
(4, 'Communication'),
(5, 'Cultures'),
(6, 'Développement personnel'),
(7, 'Intelligence émtionnelle'),
(8, 'Loisirs'),
(9, 'Monde professionnel'),
(11, 'Parentalité'),
(14, 'Qualité de vie'),
(16, 'Recherche de sens'),
(18, 'Santé physique'),
(20, 'Santé psychique'),
(22, 'Spiritualité'),
(24, 'Vie affective');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_comm` int(11) NOT NULL,
  `contenu_comm` varchar(750) NOT NULL,
  `date_comm` datetime NOT NULL,
  `id_publi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_comm`, `contenu_comm`, `date_comm`, `id_publi`) VALUES
(1, 'Test premier commentaire', '2022-04-23 21:21:47', 3),
(2, 'test', '2022-04-24 17:26:45', 3),
(3, 'test 17h27', '2022-04-24 17:27:55', 3),
(4, 'test 20h51', '2022-04-24 20:51:43', 3),
(5, 'test 20h51', '2022-04-24 20:53:45', 3),
(6, 'test 20h53', '2022-04-24 20:53:58', 3),
(7, 'test 20h54', '2022-04-24 20:54:06', 3),
(8, 'test 20h54', '2022-04-24 20:55:32', 3),
(9, 'test ajout commentaire', '2022-04-24 20:55:43', 3),
(10, 'test commentaire 21h36', '2022-04-24 21:36:58', 3),
(11, 'test', '2022-04-25 17:51:14', 4);

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

CREATE TABLE `conversation` (
  `id_conver` int(11) NOT NULL,
  `nom_conver` varchar(50) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_user_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `likecomm`
--

CREATE TABLE `likecomm` (
  `id_user` int(11) NOT NULL,
  `id_comm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `likepubli`
--

CREATE TABLE `likepubli` (
  `id_user` int(11) NOT NULL,
  `id_publi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `likepubli`
--

INSERT INTO `likepubli` (`id_user`, `id_publi`) VALUES
(1, 4),
(1, 5),
(1, 6),
(3, 4),
(3, 5),
(3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `date_message` datetime NOT NULL,
  `contenu_message` varchar(8000) NOT NULL,
  `id_conver` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id_notif` int(11) NOT NULL,
  `nom_notif` varchar(200) NOT NULL,
  `date_notif` datetime NOT NULL,
  `id_message` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_publi` int(11) NOT NULL,
  `contenu_publi` varchar(5000) NOT NULL,
  `date_publi` datetime NOT NULL,
  `link_img_publi` varchar(500) DEFAULT NULL,
  `link_pj_publi` varchar(500) DEFAULT NULL,
  `id_categ` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `visi` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_publi`, `contenu_publi`, `date_publi`, `link_img_publi`, `link_pj_publi`, `id_categ`, `id_user`, `visi`) VALUES
(3, 'Publication de photo du concert de KIKESA à l\'autre canal', '2022-04-16 11:57:52', 'https://www.thebackpackerz.com/wp-content/uploads/2019/09/kikesa-concert-olympia-paris-800x800.jpg', NULL, 4, 1, 0),
(4, 'Football l\'ASNL va-t-elle se maintenir en ligue 2 ?', '2022-04-16 11:59:00', 'https://cdn.radiofrance.fr/s3/cruiser-production/2022/04/fd97f467-c66d-40b9-8cfd-30d2fd34a639/870x489_foot_2.jpg', NULL, 4, 1, 1),
(5, 'Quel est le meilleur kebab de Nancy selon-vous ?', '2022-04-16 12:00:12', 'https://img.mesrecettesfaciles.fr/2021-05/kebab-1.jpg', NULL, 6, 1, 1),
(6, 'Bonjour ceci est un test de publication', '2022-04-16 12:03:31', 'https://cdn-s-www.estrepublicain.fr/images/594EFC72-3175-4292-A960-AAC53092D4FB/NW_raw/giovanni-haag-pensait-bien-avoir-offert-la-victoire-a-l-asnl-mais-l-asnl-a-encore-craque-en-toute-fin-de-match-photo-er-cedric-jacquot-1608678417.jpg', '', 7, 1, 1),
(7, 'Bonjour, ceci est un test d\'ajout d\'une publication', '2022-04-16 22:56:45', '112.png', '', 6, 1, NULL),
(8, 'Test 12 Test', '2022-02-17 22:59:49', '112.png', '', 6, 1, NULL),
(9, 'Bonjour Claire !', '2022-04-16 23:34:08', 'YDXJ0228.jpg', '', 7, 1, NULL),
(10, 'Bonjour ceci est un test de publication 17/04/22', '2022-04-17 23:44:10', '112.png', '', 5, 1, NULL),
(11, 'Test publication 23h47', '2021-04-14 00:16:31', 'logo_asnl.png', '', 6, 1, NULL),
(12, 'Test', '2022-04-18 10:40:15', '112.png', '', 4, 1, NULL),
(13, 'test', '2022-04-18 14:24:58', 'https://cdn-s-www.estrepublicain.fr/images/594EFC72-3175-4292-A960-AAC53092D4FB/NW_raw/giovanni-haag-pensait-bien-avoir-offert-la-victoire-a-l-asnl-mais-l-asnl-a-encore-craque-en-toute-fin-de-match-photo-er-cedric-jacquot-1608678417.jpg', '112.png', 4, 1, NULL),
(14, 'tet', '2022-04-15 00:14:56', 'https://cdn-s-www.estrepublicain.fr/images/594EFC72-3175-4292-A960-AAC53092D4FB/NW_raw/giovanni-haag-pensait-bien-avoir-offert-la-victoire-a-l-asnl-mais-l-asnl-a-encore-craque-en-toute-fin-de-match-photo-er-cedric-jacquot-1608678417.jpg', '56.png', 6, 1, 0),
(15, 'test', '2022-04-18 12:46:18', 'https://cdn-s-www.estrepublicain.fr/images/594EFC72-3175-4292-A960-AAC53092D4FB/NW_raw/giovanni-haag-pensait-bien-avoir-offert-la-victoire-a-l-asnl-mais-l-asnl-a-encore-craque-en-toute-fin-de-match-photo-er-cedric-jacquot-1608678417.jpg', '56.png', 4, 1, 0),
(16, 'test', '2022-04-18 12:54:55', '', '56.png', 4, 1, 2),
(17, 'test', '2022-04-18 17:09:52', '', 'logo_asnl.png', 5, 1, 0),
(18, 't', '2022-04-18 17:33:10', '', '56.png', 4, 1, 0),
(19, 'test 18h12', '2022-04-18 18:12:29', '', '56.png', 4, 1, 0),
(20, 'Test publication utilisateur différent', '2022-04-20 20:26:47', 'https://le10static.com/img/cache/article/576x324/0000/0019/199195.jpeg', NULL, 8, 2, 1),
(21, 'test', '2022-04-23 23:59:19', '', '56.png', 4, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `relation`
--

CREATE TABLE `relation` (
  `id_user` int(11) NOT NULL,
  `id_user_1` int(11) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `id_ress` int(11) NOT NULL,
  `nom_ress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(100) NOT NULL,
  `prenom_user` varchar(100) NOT NULL,
  `sexe_user` varchar(1) NOT NULL,
  `num_rue_user` varchar(4) NOT NULL,
  `rue_user` varchar(200) NOT NULL,
  `cp_user` varchar(5) NOT NULL,
  `ville_user` varchar(200) DEFAULT NULL,
  `num_tel_user` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `date_naissance_user` date NOT NULL,
  `situation_familial_user` varchar(1) DEFAULT NULL,
  `cgu_consent_user` tinyint(1) DEFAULT NULL,
  `id_role_user` int(11) DEFAULT NULL,
  `avatar` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `sexe_user`, `num_rue_user`, `rue_user`, `cp_user`, `ville_user`, `num_tel_user`, `email`, `password`, `date_naissance_user`, `situation_familial_user`, `cgu_consent_user`, `id_role_user`, `avatar`) VALUES
(1, 'GERARD', 'Léo', '0', '12', 'Clos de la fontaine', '54510', 'Art-sur-Meurthe', '0695026866', 'leogerard.fr@gmail.com', '$2y$10$F7FZt3jQA/FZeufWuv1rv.dysqvCr7QGNhXeAL8eIYylWH6ommdIy', '2001-07-10', 'C', 0, NULL, NULL),
(2, 'Test', 'Test', 'M', '01', 'rue du test', '01234', 'Test', '0123456789', 'test@mail.com', '123', '2022-04-20', 'C', NULL, NULL, NULL),
(3, 'a', 'a', '0', '10', 'a', '01234', 'a', '0123456789', 'a@mail.com', '$2y$10$qKo47sZhkPAZAMtF2xdIlOcgS7.Ig49BKivVgBpKvAhTQnFNVP71u', '2022-04-25', 'C', 1, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categ`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_comm`),
  ADD KEY `id_publi` (`id_publi`);

--
-- Index pour la table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id_conver`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_1` (`id_user_1`);

--
-- Index pour la table `likecomm`
--
ALTER TABLE `likecomm`
  ADD PRIMARY KEY (`id_user`,`id_comm`),
  ADD KEY `id_comm` (`id_comm`);

--
-- Index pour la table `likepubli`
--
ALTER TABLE `likepubli`
  ADD PRIMARY KEY (`id_user`,`id_publi`),
  ADD KEY `id_publi` (`id_publi`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_conver` (`id_conver`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `id_message` (`id_message`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publi`),
  ADD KEY `id_categ` (`id_categ`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`id_user`,`id_user_1`),
  ADD KEY `id_user_1` (`id_user_1`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id_ress`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id_conver` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id_ress` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_publi`) REFERENCES `publication` (`id_publi`);

--
-- Contraintes pour la table `conversation`
--
ALTER TABLE `conversation`
  ADD CONSTRAINT `conversation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `conversation_ibfk_2` FOREIGN KEY (`id_user_1`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `likecomm`
--
ALTER TABLE `likecomm`
  ADD CONSTRAINT `likecomm_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `likecomm_ibfk_2` FOREIGN KEY (`id_comm`) REFERENCES `commentaire` (`id_comm`);

--
-- Contraintes pour la table `likepubli`
--
ALTER TABLE `likepubli`
  ADD CONSTRAINT `likepubli_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `likepubli_ibfk_2` FOREIGN KEY (`id_publi`) REFERENCES `publication` (`id_publi`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_conver`) REFERENCES `conversation` (`id_conver`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`id_message`) REFERENCES `message` (`id_message`),
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_categ`) REFERENCES `categorie` (`id_categ`),
  ADD CONSTRAINT `publication_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `relation`
--
ALTER TABLE `relation`
  ADD CONSTRAINT `relation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `relation_ibfk_2` FOREIGN KEY (`id_user_1`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
