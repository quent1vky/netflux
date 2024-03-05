-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 mars 2024 à 02:21
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `films`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `idActeur` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `dateN` varchar(255) DEFAULT NULL,
  `dateMort` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`idActeur`, `nom`, `prenom`, `dateN`, `dateMort`) VALUES
(1, 'Maguire', 'Tobey', '1975-06-27-', NULL),
(2, 'Willem', 'Dafoe', '1955-07-22', NULL),
(3, 'Kirsten', 'Dunst', '1982-04-30', NULL),
(4, 'James', 'Franco', '-1978-04-19', NULL),
(5, 'Jonathan Kimble', 'Simmons', '1955-01-09', NULL),
(6, 'Cliff', 'Robertson', '1923-09-09', '2011-09-10'),
(7, 'Rosemary', 'Harris', '1926-09-19', NULL),
(8, 'Theodore', 'Raimi', '1965-12-14', NULL),
(9, 'Clooney', 'Georges', '1961-05-06-', NULL),
(10, 'Laurie', 'Hugh', '1959-06-11', NULL),
(11, 'Robertson', 'Britt', '1990-04-18', NULL),
(12, 'Cassidy', 'Raffey', '2001-11-12', NULL),
(13, 'McGraw', 'Tim', '1967-05-01', NULL),
(14, 'Hahn', 'Kathryn', '1974-07-23', NULL),
(15, 'Key', 'Keegan-Michael', '1971-03-22', NULL),
(16, 'Bauer', 'Chris', '1966-09-26', NULL),
(17, 'Worthington', 'Sam', '1976-08-02', NULL),
(18, 'Saldana', 'Zoe', '1978-06-19', NULL),
(19, 'Weaver', 'Sigourney', '1949-09-08', NULL),
(20, 'Lang', 'Stephen', '1952-07-11', NULL),
(21, 'Winslet', 'Kate', '1975-09-05', NULL),
(22, 'Clifford', 'Curtis', '1968-07-17', NULL),
(23, 'Moore', 'Joel D.', '1977-09-25', NULL),
(24, 'Pounder', 'CCH', '1952-12-25', NULL),
(25, 'Reynolds', 'Ryan', '1976-09-23', NULL),
(26, 'Comer', 'Jodie', '1993-03-11', NULL),
(27, 'Howery', 'Lil Rel', '1979-12-17', NULL),
(28, 'Kerry', 'Joe', '1992-04-24', NULL),
(29, 'Ambudkar', 'Utkarsh', '1983-12-08', NULL),
(30, 'Waiti', 'Taika', '1975-08-16', NULL),
(31, 'Fletcher', 'Tait', '1971-02-07', NULL),
(32, 'Cardarople', 'Matty', '1983-02-09', NULL),
(33, 'Cluzet', 'François', '1955-09-21', NULL),
(34, 'Sy', 'Omar', '1978-01-20', NULL),
(35, 'Le Ny', 'Anne', '1969-12-31', NULL),
(36, 'Fleurot', 'Audrey', '1977-07-06', NULL),
(37, 'Johnson', 'Dwayne', '1972-05-02', NULL),
(38, 'Hodge', 'Aldis', '1986-09-20', NULL),
(39, 'Brosnan', 'Pierce', '1963-05-16', NULL),
(40, 'Shahi', 'Sarah', '1980-01-10', NULL),
(41, 'Centineo', 'Noah', '1996-05-09', NULL),
(42, 'Wood', 'Elijah', '1981-01-28', NULL),
(43, 'McKellen', 'Ian', '1939-05-25', NULL),
(44, 'Astin', 'Sean', '1971-02-25', NULL),
(45, 'Mortensen', 'Viggo ', '1958-10-20', NULL),
(46, 'Adams', 'Kev', '1991-07-01', NULL),
(47, 'Rouve', 'Jean-Paul', '1967-01-27', NULL),
(48, 'Judor', 'Eric', '1968-07-25', NULL),
(49, 'Blanc', 'Michel', '1952-04-16', NULL),
(50, 'Guide', 'Vanessa', '1983-03-21', NULL),
(51, 'Johansson', 'Scarlett', '1984-11-22', NULL),
(52, 'Kitano', 'Takeshi', '0000-00-00', NULL),
(53, 'Pitt', 'Michael', '1981-04-10', NULL),
(54, 'Asbaek', 'Pilou', '1982-03-02', NULL),
(55, 'Binoche', 'Juliette', '1964-03-09', NULL),
(56, 'Washington', 'Denzel', '1954-12-28', NULL),
(57, 'Owen', 'Clive', '1964-10-03', NULL),
(58, 'Foster', 'Jodie', '1962-11-19', NULL),
(59, 'Plummer', 'Christopher', '1929-12-13', '2021-02-05'),
(60, 'Cranston', 'Bryan', '1957-03-07', NULL),
(61, 'Paul', 'Aaron', '1979-08-27', NULL),
(62, 'Gunn', 'Anna', '1968-08-11', NULL),
(63, 'Norris', 'Dean', '1963-04-08', NULL),
(64, 'Odenkirk', 'Bob', '1962-10-22', NULL),
(65, 'Roy Franck', 'Mitte', '1992-08-21', NULL),
(66, 'Banks', 'Jonathan', '1947-01-31', NULL),
(67, 'Brandt', 'Betsy', '1973-03-14', NULL),
(68, 'Álvaro', 'Morte', '1975-02-23', NULL),
(69, 'Úrsula', 'Corberó', '1989-08-11', NULL),
(70, 'Pedro', 'Alonso', '1971-06-21', NULL),
(71, 'Itziar', 'Ituño', '1974-06-18', NULL),
(72, 'Miguel', 'Herrán', '1996-04-25', NULL),
(73, 'Jaime', 'Lorente', '1991-12-12', NULL),
(74, 'Esther', 'Acebo', '1983-01-19', NULL),
(75, 'Darko', 'Peric', '1977-03-25', NULL),
(76, 'Enrique', 'Arce', '1972-10-08', NULL),
(77, 'Midorikawa', 'Hikaru', '1968-05-02', NULL),
(78, 'Yamaji', 'Kazuhiro', '1954-06-04', NULL),
(79, 'Ishikawa', 'Kaito', '1993-10-13', NULL),
(80, 'Koyama', 'Rikiya', '1963-12-18', NULL),
(81, 'Miyamoto', 'Yoshimi', NULL, NULL),
(82, 'Mutcherson', 'Connor Jessup', '1994-06-23', NULL),
(83, 'Werdegar', 'Emilia Jones', '2002-02-23', NULL),
(84, 'Proulx', 'Jackson Robert Scott', '2008-09-18', NULL),
(85, 'Owen', 'Darby Stanchfield', '1971-04-29', NULL),
(86, 'Thomas', 'Laysla De Oliveira', '1992-07-11', NULL),
(88, 'Banks', 'Jonathan', '1947-01-31', NULL),
(89, 'Seehorn', 'Rhea', '1972-05-12', NULL),
(90, 'Esposito', 'Giancarlo', '1958-04-26', NULL),
(91, 'McKean', 'Michael', '1947-10-25', NULL),
(92, 'Fabian', 'Patrick', '1964-12-07', NULL),
(93, 'Norris', 'Dean', '1963-04-08', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `fkGenre` int(11) NOT NULL,
  `fkVideo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`fkGenre`, `fkVideo`) VALUES
(1, 1),
(1, 6),
(1, 7),
(2, 2),
(3, 3),
(3, 4),
(3, 9),
(4, 3),
(4, 7),
(4, 13),
(5, 3),
(5, 13),
(6, 4),
(6, 5),
(6, 8),
(6, 13),
(6, 15),
(7, 5),
(7, 11),
(7, 12),
(7, 13),
(7, 14),
(7, 15),
(8, 9),
(8, 11),
(8, 12),
(9, 10),
(9, 11),
(9, 14),
(9, 15),
(10, 8),
(11, 14);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `idGenre` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`idGenre`, `libelle`) VALUES
(1, 'Super-heros'),
(2, 'Science-fiction'),
(3, 'Action'),
(4, 'Fantasie'),
(5, 'Aventure'),
(6, 'Comedie'),
(7, 'Drame'),
(8, 'Policier'),
(9, 'Thriller'),
(10, 'Fantastique'),
(11, 'Horreur');

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

CREATE TABLE `jouer` (
  `fkVideo` int(11) NOT NULL,
  `fkActeur` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `jouer`
--

INSERT INTO `jouer` (`fkVideo`, `fkActeur`, `role`) VALUES
(1, 1, 'Spiderman'),
(1, 2, 'Norman Osborn'),
(1, 3, 'Mary Jane'),
(1, 4, 'Hary Osborn'),
(1, 5, 'J. Jonah Jameson'),
(1, 6, 'Ben Parker'),
(1, 7, 'May Parker'),
(1, 8, 'Hoffman'),
(2, 9, 'Franck Walker'),
(2, 10, 'David Nix'),
(2, 11, 'Cassey Newton'),
(2, 12, 'Athena'),
(2, 13, 'Eddie Newton'),
(2, 14, 'Ursula'),
(2, 15, 'Hugo'),
(2, 16, 'Père de Franck'),
(3, 17, 'Jake Sully'),
(3, 18, 'Ney\'tiri'),
(3, 19, 'Kiri'),
(3, 20, 'Colonel Miles Quaritch'),
(3, 21, 'Ronal'),
(3, 22, 'Tonowari'),
(3, 23, 'Norm Spellman'),
(3, 24, 'Mo\'at'),
(4, 25, 'Guy'),
(4, 26, 'Millie / Molotovgirl'),
(4, 27, 'Buddy'),
(4, 28, 'Keys'),
(4, 29, 'Mouser'),
(4, 30, 'Antwan'),
(4, 31, 'Guerrier viking / Sécurité'),
(4, 32, 'Joueur'),
(5, 33, 'Philippe'),
(5, 34, 'Driss'),
(5, 35, 'Yvonne'),
(5, 36, 'Magalie'),
(6, 37, 'Black Adam'),
(6, 38, 'Hawkman'),
(6, 39, 'Doctor Fate'),
(6, 40, 'Adrianna Tomaz'),
(7, 41, 'Frodon Sacquet'),
(7, 42, 'Gandalf le Gris'),
(7, 43, 'Samsagace Gamegie'),
(7, 44, 'Aragorn'),
(8, 45, 'Sam'),
(8, 46, 'Jean-Pierre'),
(8, 47, 'Frank Bonarel'),
(8, 48, 'Le père de Sofia'),
(8, 49, 'Sofia'),
(9, 50, 'Mira Killian'),
(9, 51, 'Daisuke Aramaki'),
(9, 52, 'Hideo Kuze'),
(9, 53, 'Batou'),
(9, 54, 'Dr Ouelet'),
(9, 55, 'Keith Frazier'),
(10, 56, 'Dalton Russell'),
(10, 57, 'Madeleine White'),
(10, 58, 'Arthur Case'),
(10, 59, 'John Darius'),
(11, 60, 'Walter White'),
(11, 61, 'Jesse Pinkman'),
(11, 62, 'Skyler White'),
(11, 63, 'Henry Schrader'),
(11, 64, 'Saul Goodman'),
(11, 65, 'Walter White Jr'),
(11, 66, 'Mike Ehrmantraut'),
(11, 67, 'Marie Schrader'),
(12, 68, 'Sergio \"El Profesor\" Marquina'),
(12, 69, 'Silene Oliveira \"Tokyo\"'),
(12, 70, 'Ricardo Ramos \"Denver\"'),
(12, 71, 'Raquel Murillo'),
(12, 72, 'Aníbal Cortés \"Río\"'),
(12, 73, 'Ricardo Ramos \"Denver\"'),
(12, 74, 'Mónica Gaztambide \"Stockholm\"'),
(12, 75, 'Yashin Dasáyev'),
(12, 76, 'Arturo Román'),
(13, 77, 'Garo'),
(13, 78, 'Mumen Rider'),
(13, 79, 'Genos'),
(13, 80, 'Boros'),
(13, 81, 'Saitama'),
(14, 82, 'Tyler Locke'),
(14, 83, 'Kinsey Locke'),
(14, 84, 'Bode Locke'),
(14, 85, 'Nina Locke'),
(14, 86, 'Dodge'),
(15, 64, 'Jimmy McGill / Saul Goodman'),
(15, 88, 'Mike Ehrmantraut'),
(15, 89, 'Kim Wexler'),
(15, 90, 'Gustavo Fring'),
(15, 91, 'Chuck McGill'),
(15, 92, 'Howard Hamlin'),
(15, 93, 'Hank Schrader');

-- --------------------------------------------------------

--
-- Structure de la table `netflux`
--

CREATE TABLE `netflux` (
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `dateN` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `producteur`
--

CREATE TABLE `producteur` (
  `idProd` int(11) NOT NULL,
  `raisonSociale` varchar(255) DEFAULT NULL,
  `dateCrea` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produire`
--

CREATE TABLE `produire` (
  `fkProd` int(11) NOT NULL,
  `fkVideo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `idReal` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `dateN` varchar(255) DEFAULT NULL,
  `dateMont` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`idReal`, `nom`, `prenom`, `dateN`, `dateMont`) VALUES
(1, 'Samuel Marshall', 'Raimi', '1959-10-23-', NULL),
(2, 'Bird', 'Brad', '1957-09-24', NULL),
(3, 'Cameron', 'James', '1954-08-16', NULL),
(4, 'Levy', 'Shawn', '1968-07-23', NULL),
(5, 'Toledano', 'Eric', '1971-07-03', NULL),
(6, 'Nakache', 'Olivier', '1973-04-15', NULL),
(7, 'Collet-Serra', 'Jaume', '1974-03-23', NULL),
(8, 'Jackson', 'Peter', '1961-10-31', NULL),
(9, 'Benzaquen', 'Arthur', '1974-01-01', NULL),
(10, 'Sanders', 'Rupert', '1971-03-16', NULL),
(11, 'Lee', 'Spike', '1957-03-20', NULL),
(12, 'Gilligan', 'Vince', '1967-02-10', NULL),
(13, 'Bernstein', 'Adam', '1960-05-07', NULL),
(14, 'Cranston', 'Bryan', '1956-03-07', NULL),
(15, 'Pina', 'Alex', '1987-05-10', NULL),
(16, 'Kojima', 'Shingo', '1974-11-10', NULL),
(17, 'Orci', 'Roberto', '1973-07-20', NULL),
(18, 'Gould', 'Peter', '1956-12-10', NULL),
(19, 'Gilligan', 'Vince', '1967-02-10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `realiser`
--

CREATE TABLE `realiser` (
  `fkReal` int(11) NOT NULL,
  `fkVideo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `realiser`
--

INSERT INTO `realiser` (`fkReal`, `fkVideo`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 5),
(7, 6),
(8, 7),
(9, 8),
(10, 9),
(11, 10),
(12, 11),
(13, 11),
(14, 11),
(15, 12),
(16, 13),
(17, 14),
(18, 15),
(19, 15);

-- --------------------------------------------------------

--
-- Structure de la table `recompenses`
--

CREATE TABLE `recompenses` (
  `idrecompenses` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `recompenses`
--

INSERT INTO `recompenses` (`idrecompenses`, `nom`, `categorie`) VALUES
(100, 'meilleur baiser', 'MTV Movie Award'),
(101, 'la meilleure actrice', 'MTV Movie Award'),
(102, 'meilleur baiser', 'Teen Choice Award'),
(103, 'meilleur baiser', 'Empire Awards'),
(104, 'Film préféré', 'People\'s choice award'),
(105, 'meilleure musique', 'Saturn Award'),
(106, 'Meilleur acteur dans un film dramatique ou d\'action/aventure', 'Teen Choice Award'),
(107, 'Meilleur film dramatique ou d\'action/aventure de l\'été', 'Teen Choice Award');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `denomination` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`idType`, `denomination`) VALUES
(1, 'Films'),
(2, 'Anime'),
(3, 'Serie');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `idVideo` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `fkType` int(11) DEFAULT NULL,
  `duree` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`idVideo`, `titre`, `date`, `fkType`, `duree`, `video`) VALUES
(1, 'Spider-Man', '2002-06-30', 1, '121', 'spiderman'),
(2, 'À La Poursuite De Demain', '2015-05-20', 1, '121', 'alpdd'),
(3, 'Avatar : la voie de l\'eau', '2022-12-16', 1, '185', 'avatar'),
(4, 'Freeguy', '2022-08-13', 1, '110', 'freeguy'),
(5, 'Intouchables', '2011-11-02', 1, '112', 'intouchables'),
(6, 'Black Adam', '2022-10-19', 1, '125', 'BlackAdam'),
(7, 'Le Seigneur des anneaux', '2001-12-19', 1, '178', 'SeigneurAnneaux'),
(8, 'Les nouvelles aventures d\'Aladin', '2015-10-14', 1, '104', 'Aladin'),
(9, 'Ghost in The Shell', '2017-03-29', 2, '104', 'Ghost'),
(10, 'Inside Man : L\'Homme de l\'intérieur', '2006-04-12', 1, '129', 'InsideMan'),
(11, 'Breaking Bad', '2008-01-20', 3, '45', 'BreakingBad'),
(12, 'La Casa de Papel', '2020-01-01', 3, '45', 'la_casa_de_papel'),
(13, 'One Punch Man', '2015-10-04', 2, '24', 'one_punch_man'),
(14, 'Locke & Key', '2020-02-07', 3, '50', 'Lock_And_Key'),
(15, 'Better Call Saul', '2015-02-08', 3, '47', 'Better_Call_Saul');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`idActeur`);

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`fkGenre`,`fkVideo`),
  ADD KEY `fkVideo_Appartenir` (`fkVideo`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idGenre`);

--
-- Index pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD PRIMARY KEY (`fkVideo`,`fkActeur`,`role`),
  ADD KEY `fkActeur_Jouer` (`fkActeur`);

--
-- Index pour la table `netflux`
--
ALTER TABLE `netflux`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `producteur`
--
ALTER TABLE `producteur`
  ADD PRIMARY KEY (`idProd`);

--
-- Index pour la table `produire`
--
ALTER TABLE `produire`
  ADD PRIMARY KEY (`fkProd`,`fkVideo`),
  ADD KEY `fkVideo` (`fkVideo`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`idReal`);

--
-- Index pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD PRIMARY KEY (`fkReal`,`fkVideo`),
  ADD KEY `fkVideo_Realiser` (`fkVideo`);

--
-- Index pour la table `recompenses`
--
ALTER TABLE `recompenses`
  ADD PRIMARY KEY (`idrecompenses`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idVideo`),
  ADD KEY `fkType` (`fkType`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `fkGenre_Appartenir` FOREIGN KEY (`fkGenre`) REFERENCES `genre` (`idGenre`),
  ADD CONSTRAINT `fkVideo_Appartenir` FOREIGN KEY (`fkVideo`) REFERENCES `video` (`idVideo`);

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `fkActeur_Jouer` FOREIGN KEY (`fkActeur`) REFERENCES `acteur` (`idActeur`),
  ADD CONSTRAINT `fkVideo_Jouer` FOREIGN KEY (`fkVideo`) REFERENCES `video` (`idVideo`);

--
-- Contraintes pour la table `produire`
--
ALTER TABLE `produire`
  ADD CONSTRAINT `fkProd` FOREIGN KEY (`fkProd`) REFERENCES `producteur` (`idProd`),
  ADD CONSTRAINT `fkVideo` FOREIGN KEY (`fkVideo`) REFERENCES `video` (`idVideo`);

--
-- Contraintes pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD CONSTRAINT `fkReal_Realiser` FOREIGN KEY (`fkReal`) REFERENCES `realisateur` (`idReal`),
  ADD CONSTRAINT `fkVideo_Realiser` FOREIGN KEY (`fkVideo`) REFERENCES `video` (`idVideo`);

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `fkType` FOREIGN KEY (`fkType`) REFERENCES `type` (`idType`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
