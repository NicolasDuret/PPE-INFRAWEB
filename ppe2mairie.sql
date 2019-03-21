-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 mars 2019 à 09:53
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe2mairie`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `IDADHERENT` bigint(4) NOT NULL,
  `NOMADHERENT` char(32) NOT NULL,
  `PRENOMADHERENT` char(32) NOT NULL,
  `AGEADHERENT` bigint(4) NOT NULL,
  `SEXEADHERENT` char(1) NOT NULL,
  `IDEQUIPE` bigint(4) NOT NULL,
  PRIMARY KEY (`IDADHERENT`),
  KEY `FK_ADHERENT_EQUIPE` (`IDEQUIPE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`IDADHERENT`, `NOMADHERENT`, `PRENOMADHERENT`, `AGEADHERENT`, `SEXEADHERENT`, `IDEQUIPE`) VALUES
(1, 'Therriault', 'Corine', 6, 'F', 1),
(2, 'Drouin', 'Gabrielle', 7, 'F', 1),
(3, 'Langelier', 'Alexis', 6, 'M', 2),
(4, 'Pichette', 'Girard', 8, 'M', 2),
(5, 'Tardif', 'Henriette', 10, 'F', 3),
(6, 'Gaudreau', 'Eric', 11, 'M', 3),
(7, 'Chouinard', 'Hilaire', 14, 'M', 4),
(8, 'Leclair', 'Nazaire', 14, 'M', 4),
(9, 'Leblanc', 'Claire', 22, 'F', 5),
(10, 'Vaillancour', 'Caroline', 20, 'F', 5),
(11, 'Gamelin', 'ValÃ¨re', 5, 'F', 6),
(12, 'Duhamel', 'Sophie', 7, 'F', 6),
(13, 'Binet', 'Cesaire', 8, 'M', 7),
(14, 'Mailhot', 'Albert', 5, 'M', 7),
(15, 'Asselin', 'Stéphane', 10, 'M', 8),
(16, 'Boisvert', 'Yvette', 9, 'F', 8),
(17, 'Bedard', 'Lambert', 17, 'M', 9),
(18, 'Querry', 'Antoine', 13, 'M', 9),
(19, 'Desrosiers', 'Raphaëlle', 15, 'F', 9),
(20, 'Doucet', 'Marc', 19, 'M', 10),
(21, 'Plourde', 'Chloé', 21, 'F', 10),
(22, 'Batard', 'Yseult', 7, 'M', 11),
(23, 'Lamoureux', 'Régis', 6, 'M', 11),
(24, 'Tessier', 'Gilbert', 5, 'M', 12),
(25, 'Mailloux', 'Emmanuel', 7, 'M', 12),
(26, 'Boisvert', 'René', 11, 'M', 13),
(27, 'De', 'Lucien', 12, 'M', 13),
(28, 'Dodier', 'Patrick', 9, 'M', 14),
(29, 'Doucet', 'Robert', 11, 'M', 14),
(30, 'Jette', 'Valérie', 12, 'F', 15),
(31, 'Binet', 'Barbara', 9, 'F', 15),
(32, 'Martel', 'Annette', 16, 'F', 16),
(33, 'Huppe', 'Fabienne', 16, 'F', 16),
(34, 'Asselin', 'Boniface', 15, 'M', 17),
(35, 'Laforest', 'Jacques', 14, 'M', 17),
(36, 'Parenteau', 'Quentin', 16, 'M', 18),
(37, 'Boisvert', 'Marcellin', 14, 'M', 18),
(38, 'Devost', 'Virgin', 20, 'M', 19),
(39, 'Voisine', 'Jérémie', 21, 'M', 19),
(40, 'Margand', 'Robert', 18, 'M', 20),
(41, 'Huppe', 'Bertrand', 21, 'M', 20),
(42, 'Dufour', 'Honoré', 5, 'M', 21),
(43, 'Chalut', 'Odette', 7, 'F', 21),
(44, 'Marcil', 'Eric', 5, 'M', 32),
(45, 'Beauchesne', 'Jacqueline', 8, 'F', 32),
(46, 'St-Pierre', 'Marie', 5, 'F', 33),
(47, 'Bilodeau', 'Emilien', 7, 'M', 33),
(48, 'Mouet', 'Ange', 9, 'M', 34),
(49, 'Laderoute', 'Nicolas', 12, 'M', 34),
(50, 'Babin', 'Bastienne', 10, 'F', 35),
(51, 'Parrot', 'Odile', 11, 'F', 35),
(52, 'Brisette', 'Sylvette', 12, 'F', 35),
(53, 'Charrette', 'Avril', 10, 'M', 36),
(54, 'Lafreniere', 'Laurent', 12, 'M', 36),
(55, 'De', 'Fabien', 16, 'M', 37),
(56, 'Berger', 'Ghisin', 14, 'M', 37),
(57, 'Lagueux', 'Gaspard', 15, 'M', 37),
(58, 'Desforges', 'Valentine', 13, 'F', 38),
(59, 'Piedalue', 'Christiane', 16, 'F', 38),
(60, 'Rossignol', 'Sylvain', 13, 'M', 39),
(61, 'Gaudreau', 'Didier', 17, 'M', 39),
(62, 'Bilodeau', 'Emmanuel', 19, 'M', 40),
(63, 'Doucet', 'Emilien', 20, 'M', 40),
(64, 'Grignon', 'Dylan', 12, 'M', 41),
(65, 'Levesque', 'Hercule', 10, 'M', 41),
(66, 'Lemaitre', 'Raphaël', 9, 'M', 41),
(67, 'Bourassa', 'Ange', 10, 'M', 42),
(68, 'Levesque', 'Aurel', 10, 'M', 42),
(69, 'Chicoine', 'Pierre', 10, 'M', 42),
(70, 'Theriault', 'Léonne', 11, 'F', 43),
(71, 'Chouinard', 'Tristane', 12, 'F', 43),
(72, 'Guilmette', 'Sabine', 12, 'F', 43),
(73, 'Chouinard', 'Anatole', 13, 'M', 44),
(74, 'Lagueux', 'Michel', 16, 'M', 44),
(75, 'Camus', 'Danielle', 14, 'F', 45),
(76, 'Arpin', 'Justine', 16, 'F', 45),
(77, 'Artois', 'Evariste', 13, 'F', 46),
(78, 'Trepanier', 'Juliette', 16, 'F', 46),
(79, 'Laforge', 'Madelin', 18, 'M', 47),
(80, 'Trepanier', 'André', 24, 'M', 47),
(81, 'Sacre', 'Maximilienne', 19, 'F', 48),
(82, 'Courtemanche', 'Flavienne', 23, 'F', 48),
(83, 'Bolduc', 'Vivien', 36, 'M', 49),
(84, 'Godin', 'Philibert', 47, 'M', 49),
(85, 'Charron', 'Thibault', 29, 'M', 50),
(86, 'Brian', 'Eric', 38, 'M', 50),
(87, 'Charrette', 'Clément', 10, 'M', 51),
(88, 'Asselin', 'Eugène', 11, 'M', 51),
(89, 'Leblanc', 'Donatien', 10, 'M', 52),
(90, 'Jodoin', 'Gérald', 10, 'M', 52),
(91, 'Bilodeau', 'Laurence', 10, 'F', 53),
(92, 'Duffet', 'Christianne', 11, 'F', 53),
(93, 'Bonnet', 'Nicolette', 11, 'F', 53),
(94, 'Bellemare', 'Salomé', 14, 'M', 54),
(95, 'Bilodeau', 'Hector', 14, 'M', 54),
(96, 'Batard', 'Christian', 16, 'M', 54),
(97, 'Asselin', 'Michelle', 13, 'F', 55),
(98, 'Chesnay', 'Jeannine', 14, 'F', 55),
(99, 'Bisson', 'Edwige', 16, 'F', 56),
(100, 'St-Pierre', 'Henriette', 14, 'F', 56),
(101, 'Dumont', 'Augustin', 19, 'M', 57),
(102, 'Tardif', 'Cyril', 24, 'M', 57),
(103, 'Bilodeau', 'Gaëtan', 21, 'M', 57),
(104, 'Beaulac', 'Caroline', 26, 'F', 58),
(105, 'Picard', 'Theirnne', 21, 'F', 58),
(106, 'Chaloux', 'Marcel', 32, 'M', 59),
(107, 'Ducharme', 'Nicolas', 38, 'M', 59),
(108, 'Barjavel', 'Didier', 43, 'M', 59),
(109, 'Charron', 'Christian', 38, 'M', 60),
(110, 'Dufresne', 'Fabien', 46, 'M', 60),
(111, 'Laforest', 'Esmé', 42, 'M', 60),
(112, 'Leblanc', 'Sandrine', 8, 'F', 61),
(113, 'Vaillancour', 'Nathalie', 6, 'F', 61),
(114, 'De', 'Elise', 5, 'F', 62),
(115, 'Theriault', 'Martine', 7, 'F', 62),
(116, 'Marcoux', 'Marielle', 10, 'F', 63),
(117, 'Bisson', 'Lucille', 11, 'F', 63),
(118, 'Fugere', 'Samuelle', 9, 'F', 64),
(119, 'Clavet', 'Yannic', 12, 'M', 64),
(120, 'LaCaille', 'Sidonie', 12, 'F', 65),
(121, 'Mailly', 'Edith', 10, 'F', 65),
(122, 'Chaussee', 'Julienne', 15, 'F', 66),
(123, 'Clavet', 'Adèle', 17, 'F', 66),
(124, 'Therrien', 'Adrienne', 14, 'F', 66),
(125, 'Beriault', 'Gigi', 14, 'M', 67),
(126, 'Daigle', 'Josette', 15, 'F', 67),
(127, 'Paquin', 'Clarice', 16, 'F', 67),
(128, 'Mouet', 'Avril', 17, 'F', 68),
(129, 'Huard', 'Anaé', 15, 'F', 68),
(130, 'Sacre', 'Isabelle', 14, 'F', 68),
(131, 'Barjavel', 'Léone', 19, 'F', 69),
(132, 'Savard', 'Camille', 19, 'F', 69),
(133, 'Chasse', 'Noel', 19, 'M', 69),
(134, 'Ducharme', 'Violette', 19, 'F', 70),
(135, 'Brian', 'Erica', 20, 'F', 70);

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `IDCLUB` bigint(4) NOT NULL,
  `NOMCLUB` char(32) NOT NULL,
  `ADRESSECLUB` char(80) NOT NULL,
  `EMAILCLUB` char(32) NOT NULL,
  `DATECREATION` date NOT NULL,
  `RESUMEACTIVITECLUB` varchar(255) NOT NULL,
  PRIMARY KEY (`IDCLUB`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`IDCLUB`, `NOMCLUB`, `ADRESSECLUB`, `EMAILCLUB`, `DATECREATION`, `RESUMEACTIVITECLUB`) VALUES
(1, 'C.F.A', 'Route de Montdonville', 'foot.aussonne@aussonne.fr', '2004-10-01', 'Le club propose des entrainements et des tournois en fonction des ages. Venez nombreux, il y a des équipes féminimes et masculines. Un entrainement par semaine.'),
(2, 'C.A.T.A.', 'Route de Draux', 'tiralarc.aussonne@aussonne.fr', '2001-01-01', 'En salle ou en plein air, nou proposons des entrainements en fonction du niveau. Les équipes sont mixtes.'),
(3, 'C.R.A', 'Route du chateau d eau', 'rugby.aussonne@aussonne.fr', '2001-01-01', 'Venez nous rejoindre dans des entrainements conviviaux ou chacun peut s exprimer.'),
(4, 'C.G.A', 'Chemin de lagassine', 'gymnastique.aussonne@aussonne.fr', '2010-10-01', 'Entrez dans une équipe sympa qui vous entraine pour des compétitions avec les clubs voisins.'),
(5, 'C.H.A', 'Route de Seilh', 'hand.aussonne@aussonne.fr', '2013-05-01', 'Notre club propose des entrainements en équipe, par age et par sexe une fois par semaine.'),
(6, 'C.B.A', 'Chemin de Perac', 'basket.aussonne@aussonne.fr', '2003-08-01', 'Fort de notre expérience, nous vous proposons de participer à la vie d un club plein de projet.'),
(7, 'C.J.A', 'Route de Cornebarrieu', 'judo.aussonne@aussonne.fr', '2008-04-01', 'Un esprit de cohésion, une équipe soudé autour de valeurs à partager.'),
(8, 'C.N.A', 'Chemin de Vigneau', 'natation.aussonne@aussonne.fr', '2005-11-01', 'Apprendre à nager, consolider vos acquis, participer à des activités ludiques.');

-- --------------------------------------------------------

--
-- Structure de la table `entraineur`
--

DROP TABLE IF EXISTS `entraineur`;
CREATE TABLE IF NOT EXISTS `entraineur` (
  `IDENTRAINEUR` bigint(4) NOT NULL,
  `NOMENTRAINEUR` char(32) NOT NULL,
  `PRENOMENTRAINEUR` char(32) NOT NULL,
  PRIMARY KEY (`IDENTRAINEUR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entraineur`
--

INSERT INTO `entraineur` (`IDENTRAINEUR`, `NOMENTRAINEUR`, `PRENOMENTRAINEUR`) VALUES
(1, 'Boissière', 'Eric'),
(2, 'Martinez', 'Richard'),
(3, 'Valladont', 'Jean-charles'),
(4, 'Lucas', 'Daniel'),
(5, 'Kimpton', 'Georges'),
(6, 'Brunel', 'Jacques'),
(7, 'Thiago', 'Motta'),
(8, 'Bruno', 'Sébastien'),
(9, 'Chambily', 'Franck'),
(10, 'Larbi', 'Benboudaoud'),
(11, 'Lacombe', 'Paul'),
(12, 'Leloup', 'Jérémy'),
(13, 'Rudy', 'Godet'),
(14, 'Ntilikina', 'Franck'),
(15, 'Claire', 'Nicolas'),
(16, 'lagarde', 'Romain'),
(17, 'Accambray', 'William'),
(18, 'Dika', 'Mem'),
(19, 'Devillard', 'Coline'),
(20, 'Bossu', 'Juliette'),
(21, 'Boyer', 'Marine'),
(22, 'Bourgeois', 'Léanne');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `IDEQUIPE` bigint(4) NOT NULL,
  `NOMEQUIPE` char(32) NOT NULL,
  `NBRPLACEEQUIPE` bigint(4) NOT NULL,
  `AGEMINEQUIPE` bigint(4) NOT NULL,
  `AGEMAXEQUIPE` bigint(4) NOT NULL,
  `SEXEEQUIPE` char(2) NOT NULL,
  `IDJOURSEMAINE` bigint(4) NOT NULL,
  `IDRESSOURCE` bigint(4) NOT NULL,
  `IDCLUB` bigint(4) NOT NULL,
  `IDENTRAINEUR` bigint(4) NOT NULL,
  PRIMARY KEY (`IDEQUIPE`),
  KEY `FK_EQUIPE_JOURSEMAINE` (`IDJOURSEMAINE`),
  KEY `FK_EQUIPE_RESSOURCE` (`IDRESSOURCE`),
  KEY `FK_EQUIPE_CLUB` (`IDCLUB`),
  KEY `FK_EQUIPE_ENTRAINEUR` (`IDENTRAINEUR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`IDEQUIPE`, `NOMEQUIPE`, `NBRPLACEEQUIPE`, `AGEMINEQUIPE`, `AGEMAXEQUIPE`, `SEXEEQUIPE`, `IDJOURSEMAINE`, `IDRESSOURCE`, `IDCLUB`, `IDENTRAINEUR`) VALUES
(1, 'Les canards', 8, 5, 8, 'F', 1, 9, 8, 1),
(2, 'Les poulets', 8, 5, 8, 'M', 2, 9, 8, 1),
(3, 'Les merles', 10, 9, 12, 'Mi', 3, 9, 8, 1),
(4, 'Les pinsons', 12, 13, 17, 'M', 4, 9, 8, 2),
(5, 'Les mouettes', 15, 18, 25, 'F', 5, 9, 8, 2),
(6, 'Les lapins', 5, 5, 8, 'F', 1, 11, 2, 3),
(7, 'Les belettes', 5, 5, 8, 'M', 2, 11, 2, 3),
(8, 'Les louveteaux', 10, 9, 12, 'Mi', 3, 11, 2, 4),
(9, 'Les ecureuils', 12, 13, 17, 'Mi', 4, 11, 2, 4),
(10, 'Les renards', 15, 18, 25, 'Mi', 5, 11, 2, 4),
(11, 'Les labradors', 15, 5, 8, 'M', 1, 12, 1, 5),
(12, 'Les boxers', 15, 5, 8, 'M', 1, 13, 3, 6),
(13, 'Les bouledogues', 15, 9, 12, 'M', 2, 12, 1, 7),
(14, 'Les Basenji', 15, 9, 12, 'M', 2, 13, 3, 8),
(15, 'Les beauceron', 15, 9, 12, 'F', 3, 12, 1, 5),
(16, 'Les Berger', 15, 13, 17, 'F', 3, 13, 1, 6),
(17, 'Les dalmatiens', 15, 13, 17, 'M', 4, 12, 1, 7),
(18, 'Les dogues', 15, 13, 17, 'M', 4, 13, 3, 8),
(19, 'Les épagneul', 15, 18, 25, 'M', 5, 12, 1, 5),
(20, 'Les Griffons', 15, 18, 25, 'M', 5, 13, 3, 6),
(21, 'Les Barbus', 10, 5, 8, 'Mi', 1, 2, 7, 9),
(32, 'Les Boraras', 10, 5, 8, 'Mi', 1, 3, 7, 10),
(33, 'Les Carpes', 15, 5, 8, 'Mi', 2, 2, 7, 9),
(34, 'Les Discus', 15, 9, 12, 'M', 2, 3, 7, 10),
(35, 'Les Guppy', 15, 9, 12, 'F', 3, 2, 7, 9),
(36, 'Les Pléco', 15, 9, 12, 'M', 3, 3, 7, 10),
(37, 'Les Rasboras', 15, 13, 17, 'M', 4, 2, 7, 9),
(38, 'Les dauphins', 15, 13, 17, 'F', 4, 3, 7, 10),
(39, 'Les requins', 15, 13, 17, 'M', 5, 2, 7, 9),
(40, 'Les baleines', 15, 18, 25, 'M', 5, 3, 7, 10),
(41, 'Les Tialong', 10, 9, 12, 'M', 1, 1, 6, 11),
(42, 'Les Shenlong', 10, 9, 12, 'M', 1, 8, 6, 12),
(43, 'Les Fucanglong', 15, 9, 12, 'F', 2, 1, 6, 13),
(44, 'Les Dilong', 15, 13, 17, 'M', 2, 8, 6, 14),
(45, 'Les Yinglong', 15, 13, 17, 'F', 3, 1, 6, 11),
(46, 'Les Panlong', 15, 13, 17, 'F', 3, 8, 6, 12),
(47, 'Les Huanglong', 15, 18, 25, 'M', 4, 1, 6, 13),
(48, 'Les Longwang', 15, 18, 25, 'F', 4, 8, 6, 14),
(49, 'Les Jiaolong', 15, 26, 60, 'M', 5, 1, 6, 11),
(50, 'Les Balaurs', 15, 26, 60, 'M', 5, 8, 6, 12),
(51, 'Les Aldrovanda', 10, 9, 12, 'M', 1, 4, 5, 15),
(52, 'Les Brocchinia', 10, 9, 12, 'M', 1, 5, 5, 16),
(53, 'Les catopsis', 15, 9, 12, 'F', 2, 4, 5, 17),
(54, 'Les Cephalotus', 15, 13, 17, 'M', 2, 5, 5, 18),
(55, 'Les Genlisea', 15, 13, 17, 'F', 3, 4, 5, 15),
(56, 'Les Dionaea', 15, 13, 17, 'F', 3, 5, 5, 16),
(57, 'Les Pinguicula', 15, 18, 25, 'M', 4, 4, 5, 17),
(58, 'Les Nepenthes', 15, 18, 25, 'F', 4, 5, 5, 18),
(59, 'Les Heliamphora', 15, 26, 60, 'M', 5, 4, 5, 15),
(60, 'Les Ibicella', 15, 26, 60, 'M', 5, 5, 5, 16),
(61, 'Les Rubis', 7, 5, 8, 'F', 1, 6, 4, 19),
(62, 'Les Saphirs', 7, 5, 8, 'F', 1, 7, 4, 20),
(63, 'Les Diamants', 10, 9, 12, 'F', 2, 6, 4, 21),
(64, 'Les Emeraudes', 10, 9, 12, 'Mi', 2, 7, 4, 22),
(65, 'Les Agates', 10, 9, 12, 'F', 3, 6, 4, 19),
(66, 'Les Ambres', 10, 13, 17, 'F', 3, 7, 4, 20),
(67, 'Les Citrines', 10, 13, 17, 'Mi', 4, 6, 4, 21),
(68, 'Les Grenat', 10, 13, 17, 'F', 4, 7, 4, 22),
(69, 'Les Jades', 10, 18, 25, 'Mi', 5, 6, 4, 19),
(70, 'Les Malachites', 10, 18, 25, 'F', 5, 7, 4, 20);

-- --------------------------------------------------------

--
-- Structure de la table `joursemaine`
--

DROP TABLE IF EXISTS `joursemaine`;
CREATE TABLE IF NOT EXISTS `joursemaine` (
  `IDJOURSEMAINE` bigint(4) NOT NULL,
  `LIBELLEJOURSEMAINE` char(32) NOT NULL,
  PRIMARY KEY (`IDJOURSEMAINE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `joursemaine`
--

INSERT INTO `joursemaine` (`IDJOURSEMAINE`, `LIBELLEJOURSEMAINE`) VALUES
(1, 'Lundi'),
(2, 'Mardi'),
(3, 'Mercredi'),
(4, 'Jeudi'),
(5, 'Vendredi');

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

DROP TABLE IF EXISTS `ressource`;
CREATE TABLE IF NOT EXISTS `ressource` (
  `IDRESSOURCE` bigint(4) NOT NULL,
  `NOMRESSOURCE` char(32) NOT NULL,
  PRIMARY KEY (`IDRESSOURCE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`IDRESSOURCE`, `NOMRESSOURCE`) VALUES
(1, 'salle Basket 1'),
(2, 'salle Judo 1'),
(3, 'salle Judo 2'),
(4, 'salle Hand 1'),
(5, 'salle Hand 2'),
(6, 'Salle Gym 1'),
(7, 'Salle Gym 2'),
(8, 'Salle Basket 2'),
(9, 'Piscine 1'),
(10, 'Piscine 2'),
(11, 'Salle Tir à l arc'),
(12, 'Terrain foot 1'),
(13, 'Terrain foot 2'),
(14, 'Foret');

-- --------------------------------------------------------

--
-- Structure de la table `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_login` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `jeton` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_login` (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typeuser`
--

DROP TABLE IF EXISTS `typeuser`;
CREATE TABLE IF NOT EXISTS `typeuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typeuser`
--

INSERT INTO `typeuser` (`id`, `Libelle`) VALUES
(1, 'Secretaire'),
(2, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `pass` char(32) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `type`) VALUES
(1, 'Fantasio@spirou.fr', 'cd65686aa2fcbccf3094d70b54631536', 2),
(2, 'Prunelle@spirou.fr', '275c56ff4b96e7cdb80d2f3ce6ff619e', 1),
(3, 'Lebrac@spirou.fr', '5c92eecc03147ac4bb0af6d21ea25952', 1),
(4, 'Jeanne@spirou.fr', '262fec7c039e1d318a8c3c983d2af143', 1),
(5, 'Gaston@spirou.fr', 'f5b13112b8169fb52bdcb60a98bc2911', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `token_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
