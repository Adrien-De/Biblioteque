-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 30, 2020 at 08:02 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bibliothèque`
--

-- --------------------------------------------------------

--
-- Table structure for table `Auteur`
--

CREATE TABLE `Auteur` (
  `idPersonne` int(11) NOT NULL,
  `idLivre` varchar(15) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Auteur`
--

INSERT INTO `Auteur` (`idPersonne`, `idLivre`, `idRole`) VALUES
(1, '9780316376730', 1),
(2, '9780316376730', 2),
(3, '9782505008262', 1),
(4, '9782505008262', 2),
(5, '9782505008262', 3),
(6, '9791032703793', 5),
(7, '9791032703793', 3),
(8, '9782723442275', 5),
(9, '9782723455848', 5),
(10, '9784088814544', 1),
(11, '9784088814544', 2),
(12, '9782752300553', 5),
(13, '9782820316585', 5),
(14, '9782375060247', 1),
(15, '9782375060247', 2),
(16, '9782375060247', 5),
(17, '9782375060247', 4),
(18, '9782505066903', 1),
(19, '9782505066903', 2),
(20, '9782505066903', 3),
(21, '9782351420553', 5),
(22, '9782351420553', 3),
(23, '9782351420553', 3),
(24, '9782818936238', 1),
(25, '9782818936238', 2),
(26, '9782818936238', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Editeur`
--

CREATE TABLE `Editeur` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Editeur`
--

INSERT INTO `Editeur` (`id`, `libelle`) VALUES
(1, 'Ototo'),
(2, 'Kana'),
(3, 'Ki-oon'),
(4, 'Glénat'),
(5, 'Kabuto'),
(6, 'Kazé'),
(7, 'Kurokawa'),
(8, 'Doki-Doki'),
(9, 'Shueisha');

-- --------------------------------------------------------

--
-- Table structure for table `Genre`
--

CREATE TABLE `Genre` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Genre`
--

INSERT INTO `Genre` (`id`, `libelle`) VALUES
(4, 'Essai'),
(6, 'Manga'),
(3, 'Nouvelle'),
(5, 'Poésie'),
(2, 'Roman'),
(1, 'Théâtre');

-- --------------------------------------------------------

--
-- Table structure for table `Langue`
--

CREATE TABLE `Langue` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Langue`
--

INSERT INTO `Langue` (`id`, `libelle`) VALUES
(1, 'Anglais'),
(2, 'Français'),
(3, 'Japonais'),
(4, 'Espagnol'),
(5, 'Italien');

-- --------------------------------------------------------

--
-- Table structure for table `Livre`
--

CREATE TABLE `Livre` (
  `isbn` varchar(15) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `editeur` int(11) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `langue` int(11) DEFAULT NULL,
  `nbpages` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Livre`
--

INSERT INTO `Livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `langue`, `nbpages`) VALUES
('9780316376730', 'Accel World', 1, 2015, 6, 2, 192),
('9782351420553', 'Soul eater', 7, 2009, 6, 2, 192),
('9782375060247', 'Overlord', 1, 2017, 6, 2, 192),
('9782505008262', 'Bakuman', 2, 2010, 6, 2, 192),
('9782505066903', 'Sky high survival', 2, 2016, 6, 2, 192),
('9782723442275', 'Bleach', 4, 2003, 6, 2, 192),
('9782723455848', 'D.Gray-Man', 4, 2006, 6, 2, 208),
('9782752300553', 'Excel Saga', 6, 2005, 6, 2, 190),
('9782818936238', 'The Rising shield hero', 8, 2016, 6, 2, 192),
('9782820316585', 'Haikyuu', 8, 2014, 6, 2, 192),
('9784088814544', 'Darling in the Franxx', 9, 2018, 6, 3, 188),
('9791032703793', 'Beastars', 3, 2019, 6, 2, 208);

-- --------------------------------------------------------

--
-- Table structure for table `Personne`
--

CREATE TABLE `Personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Personne`
--

INSERT INTO `Personne` (`id`, `nom`, `prenom`) VALUES
(1, 'Kawahara', 'Reki'),
(2, 'Aigamo ', 'Hiroyuki'),
(3, 'Ohba', 'Tsugumi'),
(4, 'Obata', 'Takeshi'),
(5, 'Desbief', 'Thibaud'),
(6, 'Itagaki', 'Paru'),
(7, 'Thévenon', 'Anne-Sophie'),
(8, 'Kubo', 'Tite'),
(9, 'Hoshino', 'Katsura'),
(10, 'Hayashi', 'Naotaka'),
(11, 'Yabuki ', 'Kentaro'),
(12, 'Rikudo ', 'Koshi'),
(13, 'Furudate ', 'Haruichi'),
(14, 'Oshio ', 'Satoshi'),
(15, 'Miyama ', 'Fugin'),
(16, 'Maruyama ', 'Kugane'),
(17, 'so-bin', NULL),
(18, 'Miura ', 'Tsuina'),
(19, 'Oba ', 'Takahiro'),
(20, 'Desbief', 'Thibaud'),
(21, 'Ohkubo ', 'Atsushi'),
(22, 'Vautrin ', 'Fabien'),
(23, 'Okazaki ', 'Maiko'),
(24, 'Aneko','Yusagi'),
(25, 'Aiya','Kyu'),
(26, 'Minami','Seira');
-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`id`, `libelle`) VALUES
(1, 'Scénariste'),
(2, 'Dessinateur'),
(3, 'Traducteur'),
(4, 'Chara-designer'),
(5, 'Auteur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Editeur`
--
ALTER TABLE `Editeur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Indexes for table `Langue`
--
ALTER TABLE `Langue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Livre`
--
ALTER TABLE `Livre`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Editeur`
--
ALTER TABLE `Editeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Langue`
--
ALTER TABLE `Langue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Personne`
--
ALTER TABLE `Personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Role`
--
ALTER TABLE `Role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;