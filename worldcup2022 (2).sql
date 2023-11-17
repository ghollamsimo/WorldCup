-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 nov. 2023 à 14:01
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `worldcup2022`
--

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `GroupID` int(11) NOT NULL,
  `GroupName` char(50) NOT NULL,
  `StadiumName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `groups`
--

INSERT INTO `groups` (`GroupID`, `GroupName`, `StadiumName`) VALUES
(1, 'G', 'Marrakech'),
(2, 'G', 'Mohamed V'),
(3, 'G', 'Moulay Abdallah'),
(4, 'G', 'Adrar'),
(5, 'G', 'Ibn Batouta'),
(6, 'G', 'Complexe Sportif'),
(7, 'G', 'Complexe Sportif'),
(8, 'G', 'Complexe Sportif');

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `TeamID` int(11) NOT NULL,
  `TeamName` varchar(255) NOT NULL,
  `Continent` varchar(50) DEFAULT NULL,
  `Capital` varchar(50) DEFAULT NULL,
  `Poplation` int(11) DEFAULT NULL,
  `id_fr` int(11) NOT NULL,
  `Flag` varchar(100) DEFAULT NULL,
  `JoueurCle` varchar(100) DEFAULT NULL,
  `Victiore` int(11) DEFAULT NULL,
  `Nul` int(11) DEFAULT NULL,
  `Defaite` int(11) DEFAULT NULL,
  `Nbr_Match` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `teams`
--

INSERT INTO `teams` (`TeamID`, `TeamName`, `Continent`, `Capital`, `Poplation`, `id_fr`, `Flag`, `JoueurCle`, `Victiore`, `Nul`, `Defaite`, `Nbr_Match`) VALUES
(1, 'Brésil', 'Amérique du Sud', 'Brasília', 210000000, 1, 'layout/image/brazil.png', 'Neymar Jr', 0, 0, 0, 0),
(2, 'Espagne', 'Europe', 'Madrid', 47000000, 1, 'layout/image/spain.png', 'Sergio Ramos', 0, 0, 0, 0),
(3, 'États-Unis', 'Amérique du Nord', 'Washington, D.C.', 331000000, 1, 'layout/image/usa.png', 'Christian Pulisic', 0, 0, 0, 0),
(4, 'France', 'Europe', 'Paris', 67000000, 1, 'layout/image/france.png', 'Kylian Mbappé', 0, 0, 0, 0),
(5, 'Australie', 'Océanie', 'Canberra', 26000000, 2, 'layout/image/australia.png', 'Harry Kane', 0, 0, 0, 0),
(6, 'Italie', 'Europe', 'Rome', 60000000, 2, 'layout/image/qatar.png', 'Ciro Immobile', 0, 0, 0, 0),
(7, 'Angleterre', 'Europe', 'Londres', 56000000, 2, 'layout/image/england.png', 'Harry Kane', 0, 0, 0, 0),
(8, 'Maroc', 'Afrique', 'Rabat', 3600000, 2, 'layout/image/morocco.png', 'Achraf Hakimi', 0, 0, 0, 0),
(9, 'Argentine', 'Amérique du Sud', 'Buenos Aires', 44000000, 3, 'layout/image/argentina.png', 'Lionel Messi', 0, 0, 0, 0),
(10, 'Uruguay', 'Amérique du Sud', 'Montevideo', 3400000, 3, 'layout/image/uruguay.png', 'Luis Suárez', 0, 0, 0, 0),
(11, 'Sénégal', 'Afrique', 'Dakar', 17000000, 3, 'layout/image/senegal.png', 'Sadio Mané', 0, 0, 0, 0),
(12, 'Spain', 'Continent', 'City', 1000000, 3, 'layout/image/spain.png', 'Player', 0, 0, 0, 0),
(13, 'Brésil', 'Amérique du Sud', 'Brasília', 210000000, 4, 'layout/image/brazil.png', 'Neymar Jr', 0, 0, 0, 0),
(14, 'Espagne', 'Europe', 'Madrid', 47000000, 4, 'layout/image/spain.png', 'Sergio Ramos', 0, 0, 0, 0),
(15, 'États-Unis', 'Amérique du Nord', 'Washington, D.C.', 331000000, 4, 'layout/image/usa.png', 'Christian Pulisic', 0, 0, 0, 0),
(16, 'France', 'Europe', 'Paris', 67000000, 4, 'layout/image/france.png', 'Kylian Mbappé', 0, 0, 0, 0),
(17, 'Australie', 'Océanie', 'Canberra', 26000000, 5, 'layout/image/australia.png', 'Harry Kane', 0, 0, 0, 0),
(18, 'Italie', 'Europe', 'Rome', 60000000, 5, 'layout/image/qatar.png', 'Ciro Immobile', 0, 0, 0, 0),
(19, 'Angleterre', 'Europe', 'Londres', 56000000, 5, 'layout/image/england.png', 'Harry Kane', 0, 0, 0, 0),
(20, 'Maroc', 'Afrique', 'Rabat', 3600000, 5, 'layout/image/morocco.png', 'Achraf Hakimi', 0, 0, 0, 0),
(21, 'Argentine', 'Amérique du Sud', 'Buenos Aires', 44000000, 6, 'layout/image/argentina.png', 'Lionel Messi', 0, 0, 0, 0),
(22, 'Uruguay', 'Amérique du Sud', 'Montevideo', 3400000, 6, 'layout/image/uruguay.png', 'Luis Suárez', 0, 0, 0, 0),
(23, 'Sénégal', 'Afrique', 'Dakar', 17000000, 6, 'layout/image/senegal.png', 'Sadio Mané', 0, 0, 0, 0),
(24, 'Spain', 'Continent', 'City', 1000000, 6, 'layout/image/spain.png', 'Player', 0, 0, 0, 0),
(25, 'Brésil', 'Amérique du Sud', 'Brasília', 210000000, 7, 'layout/image/brazil.png', 'Neymar Jr', 0, 0, 0, 0),
(26, 'Espagne', 'Europe', 'Madrid', 47000000, 7, 'layout/image/spain.png', 'Sergio Ramos', 0, 0, 0, 0),
(27, 'États-Unis', 'Amérique du Nord', 'Washington, D.C.', 331000000, 7, 'layout/image/usa.png', 'Christian Pulisic', 0, 0, 0, 0),
(28, 'France', 'Europe', 'Paris', 67000000, 7, 'layout/image/france.png', 'Kylian Mbappé', 0, 0, 0, 0),
(29, 'Australie', 'Océanie', 'Canberra', 26000000, 8, 'layout/image/australia.png', 'Harry Kane', 0, 0, 0, 0),
(30, 'Italie', 'Europe', 'Rome', 60000000, 8, 'layout/image/qatar.png', 'Ciro Immobile', 0, 0, 0, 0),
(31, 'Angleterre', 'Europe', 'Londres', 56000000, 8, 'layout/image/england.png', 'Harry Kane', 0, 0, 0, 0),
(32, 'Maroc', 'Afrique', 'Rabat', 3600000, 8, 'layout/image/morocco.png', 'Achraf Hakimi', 0, 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`TeamID`),
  ADD KEY `id_fr` (`id_fr`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `TeamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
