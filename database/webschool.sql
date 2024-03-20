-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2024 at 12:58 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `annee` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code_classe` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `serie` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom_classe` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cycle` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `numordre` int DEFAULT NULL,
  `examen` int DEFAULT NULL,
  `max_eff` int DEFAULT NULL,
  `scolarite` double DEFAULT NULL,
  PRIMARY KEY (`annee`,`code_classe`,`serie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`annee`, `code_classe`, `serie`, `nom_classe`, `cycle`, `numordre`, `examen`, `max_eff`, `scolarite`) VALUES
('2024', 'CI', '-', 'Cours d\'Initiation', 'Primaire', 4, 0, 40, 35000),
('2024', 'CP', '-', 'Cours Préparatoire', 'Primaire', 5, 0, 40, 45000),
('2024', 'CE1', '-', 'Cours Elementaire 1', 'Primaire', 6, 0, 40, 50000),
('2024', 'CE2', '-', 'Cours Elementaire 2', 'Primaire', 7, 0, 40, 55000),
('2024', 'CM1', '-', 'Cours Moyen 1', 'Primaire', 8, 0, 40, 65000),
('2024', 'CM2', '-', 'Cours Moyen 2', 'Primaire', 9, 1, 40, 70000),
('2024', '6 eme', '-', 'Sixième', 'College', 10, 0, 40, 70000),
('2024', '5 eme', '-', 'Cinquième', 'College', 11, 0, 40, 80000),
('2024', '4 eme', '-', 'Quatrième', 'College', 12, 0, 40, 85000),
('2024', '3 eme', 'ML', 'Troisième Moderne Long', 'College', 16, 1, 40, 90000),
('2024', '3 eme', '-', 'Troisième', 'College', 15, 1, 40, 90000),
('2024', '3 eme', 'MC', 'Troisième Moderne Court', 'College', 17, 1, 40, 90000),
('2024', '2 dne', 'AB', 'Seconde AB', 'College', 20, 0, 40, 95000),
('2024', '2 dne', 'CD', 'Seconde CD', 'College', 23, 0, 40, 95000),
('2024', '1 ere', 'A1', 'Première A1', 'College', 31, 0, 40, 100000),
('2024', '1 ere', 'A2', 'Première A2', 'College', 32, 0, 40, 100000),
('2024', '1 ere', 'B', 'Première B', 'College', 33, 0, 40, 100000),
('2024', '1 ere', 'C', 'Première C', 'College', 34, 0, 40, 100000),
('2024', '1 ere', 'D', 'Première D', 'College', 35, 0, 40, 100000),
('2024', 'Tle', 'A1', 'Terminale A1', 'College', 44, 1, 40, 120000),
('2024', 'Tle', 'A2', 'Terminale A2', 'College', 45, 1, 40, 120000),
('2024', 'Tle', 'B', 'Terminale B', 'College', 46, 1, 40, 120000),
('2024', 'Tle', 'C', 'Terminale C', 'College', 48, 1, 40, 120000),
('2024', 'Tle', 'D', 'Terminale D', 'College', 49, 1, 40, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `conduite`
--

DROP TABLE IF EXISTS `conduite`;
CREATE TABLE IF NOT EXISTS `conduite` (
  `annee` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_session` int NOT NULL,
  `mat_eleve` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `note` double DEFAULT NULL,
  PRIMARY KEY (`annee`,`id_session`,`mat_eleve`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conduite`
--

INSERT INTO `conduite` (`annee`, `id_session`, `mat_eleve`, `note`) VALUES
('2023-2024', 1, '000008', 15),
('2023-2024', 1, '000009', 19),
('2023-2024', 1, '000010', 15),
('2023-2024', 1, '000011', 15),
('2023-2024', 1, '000012', 15),
('2023-2024', 1, '000013', 15),
('2023-2024', 1, '000014', 15),
('2023-2024', 1, '000015', 15),
('2023-2024', 1, '000026', 18),
('2023-2024', 1, '000027', 18),
('2023-2024', 1, '000028', 18),
('2023-2024', 1, '000029', 18),
('2023-2024', 1, '000030', 18),
('2023-2024', 1, '000031', 18),
('2023-2024', 1, '000032', 18),
('2023-2024', 1, '000033', 18),
('2023-2024', 1, '000016', 17),
('2023-2024', 1, '000017', 17),
('2023-2024', 1, '000018', 17),
('2023-2024', 1, '000019', 17),
('2023-2024', 1, '000020', 17),
('2023-2024', 1, '000021', 17),
('2023-2024', 1, '000022', 17),
('2023-2024', 1, '000023', 17),
('2023-2024', 1, '000024', 17),
('2023-2024', 1, '000025', 17);

-- --------------------------------------------------------

--
-- Table structure for table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `annee` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mat_eleve` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sexe` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code_classe` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `serie` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `groupe` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `num_parent` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_parent` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nom_parent` varchar(130) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`annee`,`mat_eleve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eleve`
--

INSERT INTO `eleve` (`annee`, `mat_eleve`, `nom`, `prenom`, `sexe`, `code_classe`, `serie`, `groupe`, `num_parent`, `email_parent`, `nom_parent`, `photo`) VALUES
('2023-2024', '000001', 'AKAKPO', 'Jules', 'M', '6 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000002', 'MANOUTON', 'David', 'M', '6 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000003', 'SOUSOU', 'Brigitte', 'M', '6 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000004', 'BOTON', 'Frise', 'M', '6 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000005', 'FANOU', 'Belge Alain', 'M', '6 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000006', 'ASSOGBA', 'Olivier', 'M', '6 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000007', 'ZANNOU', 'Martine Lora Fidelia', 'M', '6 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000008', 'KLO', 'David', 'M', '6 eme', '-', 'B', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000009', 'DJIGBE', 'Flore', 'M', '6 eme', '-', 'B', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000010', 'ZOU', 'Luc Sejro', 'M', '6 eme', '-', 'B', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000011', 'AKAKPO', 'Joane', 'M', '6 eme', '-', 'B', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000012', 'WAN', 'Sabine', 'M', '6 eme', '-', 'B', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000013', 'ASSANI', 'Florentine', 'M', '6 eme', '-', 'B', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000014', 'GLELE', 'Bella', 'M', '6 eme', '-', 'B', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000015', 'EFFA', 'Jean-Marie', 'M', '6 eme', '-', 'B', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000016', 'LOU', 'Joe', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000017', 'AFAN', 'Sarrah', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000018', 'FON', 'Marc', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000019', 'ACHAFA', 'Frido', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000020', 'HAFFAM', 'Aline betisse', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000021', 'IDRISSOU', 'Fadilath', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000022', 'CAPO', 'Jean', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000023', 'ELNE', 'Marc', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000024', 'FLAKAN', 'Christelle zoe', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000025', 'RAFAN', 'Belkis', 'M', '4 eme', '-', 'A', '22940170107', 'parent@mail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000026', 'IDRISSOU', 'Obed', 'M', '2 nde', 'C', 'A', '22940170107', 'biaoumarsouk@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000027', 'ADJOVI', 'Brice', 'M', '2 nde', 'C', 'A', '22940170107', 'biaoumarsouk@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000028', 'HASSANI', 'Marcela', 'M', '2 nde', 'C', 'A', '22940170107', 'tomenouelyse274@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000029', 'LAKPA', 'Adjakpe', 'M', '2 nde', 'C', 'A', '22940170107', 'tomenouelyse274@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000030', 'BAFAROU', 'Noréane', 'M', '2 nde', 'C', 'A', '22940170107', 'tomenouelyse274@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000031', 'GLEKPE', 'Yves Styve', 'M', '2 nde', 'C', 'A', '22940170107', 'moodsenior@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000032', 'CLOKPEKPEDJI', 'Dan sodis', 'M', '2 nde', 'C', 'A', '22940170107', 'aballojoyce8@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000033', 'CHAFFA', 'Luc Aurel', 'F', '2 nde', 'C', 'A', '22940170107', 'moodsenior@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000042', 'BOTON', 'Epiphanie', 'M', 'Tle', 'B', 'A', '22940170107', 'abdulmoustapha64@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000043', 'YANDJI', 'Mirabelle', 'M', 'Tle', 'B', 'A', '22940170107', 'moodsenior@gmail.com', 'Le Parent', 'uploads/students/pics/file.png'),
('2023-2024', '000044', 'BOTON', 'Emile', 'M', 'Tle', 'B', 'A', '22940170107', 'moodsenior@gmail.com', 'Le Parent', 'uploads/students/pics/file.png');

-- --------------------------------------------------------

--
-- Table structure for table `enseignement`
--

DROP TABLE IF EXISTS `enseignement`;
CREATE TABLE IF NOT EXISTS `enseignement` (
  `annee` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code_classe` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `serie` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `groupe` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code_matiere` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_prof` int NOT NULL,
  `coefficient` int NOT NULL,
  `int_act` int DEFAULT NULL,
  `dev_act` int DEFAULT NULL,
  PRIMARY KEY (`annee`,`code_classe`,`serie`,`groupe`,`code_matiere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enseignement`
--

INSERT INTO `enseignement` (`annee`, `code_classe`, `serie`, `groupe`, `code_matiere`, `id_prof`, `coefficient`, `int_act`, `dev_act`) VALUES
('2023-2024', '2 nde', 'C', 'A', 'ANG', 7, 2, 4, 6),
('2023-2024', '2 nde', 'C', 'A', 'EPS', 7, 1, 2, 6),
('2023-2024', '2 nde', 'C', 'A', 'FRAN', 7, 2, 2, 6),
('2023-2024', '2 nde', 'C', 'A', 'HIST-GEO', 7, 2, 2, 6),
('2023-2024', '2 nde', 'C', 'A', 'MATHS', 7, 4, 4, 6),
('2023-2024', '2 nde', 'C', 'A', 'PCT', 7, 4, 3, 6),
('2023-2024', '2 nde', 'C', 'A', 'PHI', 7, 2, 4, 6),
('2023-2024', '2 nde', 'C', 'A', 'SVT', 7, 5, 3, 6),
('2023-2024', '4 eme', '-', 'A', 'ALL', 7, 3, 2, 4),
('2023-2024', '4 eme', '-', 'A', 'ANG', 7, 3, 1, 4),
('2023-2024', '4 eme', '-', 'A', 'COMECR', 7, 3, 1, 4),
('2023-2024', '4 eme', '-', 'A', 'EPS', 7, 3, 1, 4),
('2023-2024', '4 eme', '-', 'A', 'ESP', 7, 3, 1, 4),
('2023-2024', '4 eme', '-', 'A', 'HIST-GEO', 7, 3, 1, 4),
('2023-2024', '4 eme', '-', 'A', 'LECT', 7, 3, 1, 4),
('2023-2024', '4 eme', '-', 'A', 'MATHS', 7, 3, 1, 4),
('2023-2024', '4 eme', '-', 'A', 'PCT', 7, 3, 1, 4),
('2023-2024', '4 eme', '-', 'A', 'SVT', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'A', 'ANG', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'A', 'COMECR', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'A', 'EPS', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'A', 'HIST-GEO', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'A', 'LECT', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'A', 'MATHS', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'A', 'PCT', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'A', 'SVT', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'B', 'ANG', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'B', 'COMECR', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'B', 'EPS', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'B', 'HIST-GEO', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'B', 'LECT', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'B', 'MATHS', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'B', 'PCT', 7, 3, 1, 4),
('2023-2024', '6 eme', '-', 'B', 'SVT', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'ALL', 7, 3, 2, 4),
('2023-2024', 'Tle', 'B', 'A', 'ANG', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'ECO', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'EPS', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'ESP', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'FRAN', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'HIST-GEO', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'MATHS', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'PHI', 7, 3, 1, 4),
('2023-2024', 'Tle', 'B', 'A', 'SVT', 7, 3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `infoetbs`
--

DROP TABLE IF EXISTS `infoetbs`;
CREATE TABLE IF NOT EXISTS `infoetbs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `annee` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nom` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infoetbs`
--

INSERT INTO `infoetbs` (`id`, `annee`, `nom`, `contact`, `logo`) VALUES
(1, '2023-2024', 'Complexe  Privé de l\'Enseignement Général et Technique \"La Rosette\"', '+229331348007 / +22940170107', 'imgs/logo_rosette.png');

-- --------------------------------------------------------

--
-- Table structure for table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
CREATE TABLE IF NOT EXISTS `matieres` (
  `code_matiere` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom_matiere` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`code_matiere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matieres`
--

INSERT INTO `matieres` (`code_matiere`, `nom_matiere`) VALUES
('ANG', 'Anglais'),
('PCT', 'Physique Chimie Technologie'),
('HIST-GEO', 'Histoire-Géegraphie'),
('ECM', 'Education Civiique et Morale'),
('MSC', 'Musique'),
('ESP', 'Espagnol'),
('ALL', 'Allemand'),
('FRAN', 'Français'),
('MATHS', 'Mathématiques'),
('SVT', 'Sciences de la Vie et de la Terre'),
('ECO', 'Economie'),
('PHI', 'Philosophie'),
('EPS', 'Education Physique et Sportive'),
('INFO', 'Informatique'),
('LECT', 'Lecture'),
('COMECR', 'Communication Ecrite'),
('CPTA', 'Comptabilité'),
('DSS', 'Dessin'),
('PNT', 'Peinture'),
('ES', 'Education Sociale'),
('EST', 'Education Scientifique et Technologique'),
('EE', 'Expression Ecrite'),
('EA', 'Education Artistique'),
('COND', 'Conduite');

-- --------------------------------------------------------

--
-- Stand-in structure for view `moyennes01`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `moyennes01`;
CREATE TABLE IF NOT EXISTS `moyennes01` (
`annee` varchar(10)
,`code_classe` varchar(10)
,`code_matiere` varchar(10)
,`coefficient` int
,`dev1` double
,`dev2` double
,`email_parent` varchar(50)
,`groupe` varchar(10)
,`id_session` int
,`mat_eleve` varchar(15)
,`moy` double
,`moy_coef` double
,`moy_inter` double
,`nb_inter` bigint
,`nom` varchar(255)
,`nom_parent` varchar(130)
,`num_parent` varchar(20)
,`photo` text
,`prenom` varchar(255)
,`serie` varchar(10)
,`sexe` varchar(1)
,`sum_inter` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `moyennes02`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `moyennes02`;
CREATE TABLE IF NOT EXISTS `moyennes02` (
`annee` varchar(10)
,`code_classe` varchar(10)
,`code_matiere` varchar(10)
,`coefficient` int
,`dev1` double
,`dev2` double
,`email_parent` varchar(50)
,`groupe` varchar(10)
,`id_session` int
,`mat_eleve` varchar(15)
,`moy` double
,`moy_coef` double
,`moy_inter` double
,`moyg` double
,`moygac` double
,`nb_inter` bigint
,`nom` varchar(255)
,`nom_parent` varchar(130)
,`note` double
,`num_parent` varchar(20)
,`photo` text
,`prenom` varchar(255)
,`serie` varchar(10)
,`sexe` varchar(1)
,`sum_inter` double
,`tcoef` decimal(32,0)
,`tcoefac` decimal(33,0)
,`tmoycoef` double
,`tmoycoefac` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `moyennes03`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `moyennes03`;
CREATE TABLE IF NOT EXISTS `moyennes03` (
`annee` varchar(10)
,`code_classe` varchar(10)
,`groupe` varchar(10)
,`mat_eleve` varchar(15)
,`moyan` double
,`nom` varchar(255)
,`prenom` varchar(255)
,`serie` varchar(10)
,`sexe` varchar(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `annee` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mat_eleve` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code_matiere` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_type` int NOT NULL,
  `id_session` int NOT NULL,
  `note` double NOT NULL,
  PRIMARY KEY (`annee`,`mat_eleve`,`code_matiere`,`id_type`,`id_session`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`annee`, `mat_eleve`, `code_matiere`, `id_type`, `id_session`, `note`) VALUES
('2023-2024', '000016', 'ALL', 1, 1, 15),
('2023-2024', '000017', 'ALL', 1, 1, 15),
('2023-2024', '000018', 'ALL', 1, 1, 15),
('2023-2024', '000019', 'ALL', 1, 1, 12),
('2023-2024', '000020', 'ALL', 1, 1, 11),
('2023-2024', '000021', 'ALL', 1, 1, 10),
('2023-2024', '000022', 'ALL', 1, 1, 14),
('2023-2024', '000023', 'ALL', 1, 1, 4),
('2023-2024', '000024', 'ALL', 1, 1, 17),
('2023-2024', '000025', 'ALL', 1, 1, 15),
('2023-2024', '000026', 'ANG', 1, 1, 12),
('2023-2024', '000026', 'ANG', 2, 1, 15),
('2023-2024', '000026', 'ANG', 3, 1, 12),
('2023-2024', '000026', 'ANG', 4, 1, 17),
('2023-2024', '000026', 'ANG', 5, 1, 15),
('2023-2024', '000026', 'EPS', 1, 1, 14),
('2023-2024', '000026', 'EPS', 4, 1, 10),
('2023-2024', '000026', 'EPS', 5, 1, 15),
('2023-2024', '000026', 'FRAN', 1, 1, 11),
('2023-2024', '000026', 'FRAN', 4, 1, 15),
('2023-2024', '000026', 'FRAN', 5, 1, 8),
('2023-2024', '000026', 'HIST-GEO', 1, 1, 10),
('2023-2024', '000026', 'HIST-GEO', 4, 1, 12),
('2023-2024', '000026', 'HIST-GEO', 5, 1, 17),
('2023-2024', '000026', 'MATHS', 1, 1, 14),
('2023-2024', '000026', 'MATHS', 2, 1, 14),
('2023-2024', '000026', 'MATHS', 3, 1, 99),
('2023-2024', '000026', 'MATHS', 4, 1, 13),
('2023-2024', '000026', 'MATHS', 5, 1, 12),
('2023-2024', '000026', 'PCT', 1, 1, 12),
('2023-2024', '000026', 'PCT', 2, 1, 5),
('2023-2024', '000026', 'PCT', 4, 1, 12),
('2023-2024', '000026', 'PCT', 5, 1, 10),
('2023-2024', '000026', 'PHI', 1, 1, 11),
('2023-2024', '000026', 'PHI', 2, 1, 12),
('2023-2024', '000026', 'PHI', 3, 1, 12),
('2023-2024', '000026', 'PHI', 4, 1, 12),
('2023-2024', '000026', 'PHI', 5, 1, 14),
('2023-2024', '000026', 'SVT', 1, 1, 10),
('2023-2024', '000026', 'SVT', 2, 1, 11),
('2023-2024', '000026', 'SVT', 4, 1, 14),
('2023-2024', '000026', 'SVT', 5, 1, 11),
('2023-2024', '000027', 'ANG', 1, 1, 15),
('2023-2024', '000027', 'ANG', 2, 1, 14),
('2023-2024', '000027', 'ANG', 3, 1, 13),
('2023-2024', '000027', 'ANG', 4, 1, 2),
('2023-2024', '000027', 'ANG', 5, 1, 16),
('2023-2024', '000027', 'EPS', 1, 1, 12),
('2023-2024', '000027', 'EPS', 4, 1, 10),
('2023-2024', '000027', 'EPS', 5, 1, 12),
('2023-2024', '000027', 'FRAN', 1, 1, 11),
('2023-2024', '000027', 'FRAN', 4, 1, 17),
('2023-2024', '000027', 'FRAN', 5, 1, 8),
('2023-2024', '000027', 'HIST-GEO', 1, 1, 14),
('2023-2024', '000027', 'HIST-GEO', 4, 1, 10),
('2023-2024', '000027', 'HIST-GEO', 5, 1, 14),
('2023-2024', '000027', 'MATHS', 1, 1, 15),
('2023-2024', '000027', 'MATHS', 2, 1, 7.75),
('2023-2024', '000027', 'MATHS', 3, 1, 8),
('2023-2024', '000027', 'MATHS', 4, 1, 15),
('2023-2024', '000027', 'MATHS', 5, 1, 14),
('2023-2024', '000027', 'PCT', 1, 1, 11),
('2023-2024', '000027', 'PCT', 2, 1, 8),
('2023-2024', '000027', 'PCT', 4, 1, 12),
('2023-2024', '000027', 'PCT', 5, 1, 12),
('2023-2024', '000027', 'PHI', 1, 1, 15),
('2023-2024', '000027', 'PHI', 2, 1, 11),
('2023-2024', '000027', 'PHI', 3, 1, 11),
('2023-2024', '000027', 'PHI', 4, 1, 12),
('2023-2024', '000027', 'PHI', 5, 1, 14),
('2023-2024', '000027', 'SVT', 1, 1, 10),
('2023-2024', '000027', 'SVT', 2, 1, 2),
('2023-2024', '000027', 'SVT', 4, 1, 15),
('2023-2024', '000027', 'SVT', 5, 1, 11),
('2023-2024', '000028', 'ANG', 1, 1, 15),
('2023-2024', '000028', 'ANG', 2, 1, 15),
('2023-2024', '000028', 'ANG', 3, 1, 8),
('2023-2024', '000028', 'ANG', 4, 1, 15),
('2023-2024', '000028', 'ANG', 5, 1, 14),
('2023-2024', '000028', 'EPS', 1, 1, 16),
('2023-2024', '000028', 'EPS', 4, 1, 15),
('2023-2024', '000028', 'EPS', 5, 1, 13),
('2023-2024', '000028', 'FRAN', 1, 1, 11),
('2023-2024', '000028', 'FRAN', 4, 1, 18),
('2023-2024', '000028', 'FRAN', 5, 1, 8),
('2023-2024', '000028', 'HIST-GEO', 1, 1, 10),
('2023-2024', '000028', 'HIST-GEO', 4, 1, 10),
('2023-2024', '000028', 'HIST-GEO', 5, 1, 15),
('2023-2024', '000028', 'MATHS', 1, 1, 11),
('2023-2024', '000028', 'MATHS', 2, 1, 20),
('2023-2024', '000028', 'MATHS', 3, 1, 15),
('2023-2024', '000028', 'MATHS', 4, 1, 15),
('2023-2024', '000028', 'MATHS', 5, 1, 15),
('2023-2024', '000028', 'PCT', 1, 1, 17),
('2023-2024', '000028', 'PCT', 2, 1, 11),
('2023-2024', '000028', 'PCT', 4, 1, 14),
('2023-2024', '000028', 'PCT', 5, 1, 11),
('2023-2024', '000028', 'PHI', 1, 1, 15),
('2023-2024', '000028', 'PHI', 2, 1, 2),
('2023-2024', '000028', 'PHI', 3, 1, 11),
('2023-2024', '000028', 'PHI', 4, 1, 12),
('2023-2024', '000028', 'PHI', 5, 1, 11),
('2023-2024', '000028', 'SVT', 1, 1, 11),
('2023-2024', '000028', 'SVT', 2, 1, 14),
('2023-2024', '000028', 'SVT', 4, 1, 15),
('2023-2024', '000028', 'SVT', 5, 1, 9),
('2023-2024', '000029', 'ANG', 1, 1, 15),
('2023-2024', '000029', 'ANG', 2, 1, 12),
('2023-2024', '000029', 'ANG', 3, 1, 20),
('2023-2024', '000029', 'ANG', 4, 1, 14),
('2023-2024', '000029', 'ANG', 5, 1, 15),
('2023-2024', '000029', 'EPS', 1, 1, 13),
('2023-2024', '000029', 'EPS', 4, 1, 12),
('2023-2024', '000029', 'EPS', 5, 1, 16),
('2023-2024', '000029', 'FRAN', 1, 1, 11),
('2023-2024', '000029', 'FRAN', 4, 1, 18),
('2023-2024', '000029', 'FRAN', 5, 1, 8),
('2023-2024', '000029', 'HIST-GEO', 1, 1, 10),
('2023-2024', '000029', 'HIST-GEO', 4, 1, 10),
('2023-2024', '000029', 'HIST-GEO', 5, 1, 12),
('2023-2024', '000029', 'MATHS', 1, 1, 10),
('2023-2024', '000029', 'MATHS', 2, 1, 15),
('2023-2024', '000029', 'MATHS', 3, 1, 12),
('2023-2024', '000029', 'MATHS', 4, 1, 14),
('2023-2024', '000029', 'MATHS', 5, 1, 17),
('2023-2024', '000029', 'PCT', 1, 1, 15),
('2023-2024', '000029', 'PCT', 2, 1, 11),
('2023-2024', '000029', 'PCT', 4, 1, 14),
('2023-2024', '000029', 'PCT', 5, 1, 11),
('2023-2024', '000029', 'PHI', 1, 1, 11),
('2023-2024', '000029', 'PHI', 2, 1, 11),
('2023-2024', '000029', 'PHI', 3, 1, 11),
('2023-2024', '000029', 'PHI', 4, 1, 11),
('2023-2024', '000029', 'PHI', 5, 1, 11),
('2023-2024', '000029', 'SVT', 1, 1, 11),
('2023-2024', '000029', 'SVT', 2, 1, 17),
('2023-2024', '000029', 'SVT', 4, 1, 16),
('2023-2024', '000029', 'SVT', 5, 1, 11),
('2023-2024', '000030', 'ANG', 1, 1, 8),
('2023-2024', '000030', 'ANG', 2, 1, 13),
('2023-2024', '000030', 'ANG', 3, 1, 18),
('2023-2024', '000030', 'ANG', 4, 1, 8),
('2023-2024', '000030', 'ANG', 5, 1, 10),
('2023-2024', '000030', 'EPS', 1, 1, 15),
('2023-2024', '000030', 'EPS', 4, 1, 13),
('2023-2024', '000030', 'EPS', 5, 1, 15),
('2023-2024', '000030', 'FRAN', 1, 1, 0),
('2023-2024', '000030', 'FRAN', 4, 1, 18),
('2023-2024', '000030', 'FRAN', 5, 1, 9),
('2023-2024', '000030', 'HIST-GEO', 1, 1, 11),
('2023-2024', '000030', 'HIST-GEO', 4, 1, 10),
('2023-2024', '000030', 'HIST-GEO', 5, 1, 13),
('2023-2024', '000030', 'MATHS', 1, 1, 15),
('2023-2024', '000030', 'MATHS', 2, 1, 12),
('2023-2024', '000030', 'MATHS', 3, 1, 20),
('2023-2024', '000030', 'MATHS', 4, 1, 20),
('2023-2024', '000030', 'MATHS', 5, 1, 12),
('2023-2024', '000030', 'PCT', 1, 1, 14),
('2023-2024', '000030', 'PCT', 2, 1, 12),
('2023-2024', '000030', 'PCT', 4, 1, 11),
('2023-2024', '000030', 'PCT', 5, 1, 11),
('2023-2024', '000030', 'PHI', 1, 1, 11),
('2023-2024', '000030', 'PHI', 2, 1, 9),
('2023-2024', '000030', 'PHI', 3, 1, 11),
('2023-2024', '000030', 'PHI', 4, 1, 11),
('2023-2024', '000030', 'PHI', 5, 1, 11),
('2023-2024', '000030', 'SVT', 1, 1, 11),
('2023-2024', '000030', 'SVT', 2, 1, 11),
('2023-2024', '000030', 'SVT', 4, 1, 14),
('2023-2024', '000030', 'SVT', 5, 1, 11),
('2023-2024', '000031', 'ANG', 1, 1, 9),
('2023-2024', '000031', 'ANG', 2, 1, 17),
('2023-2024', '000031', 'ANG', 3, 1, 3),
('2023-2024', '000031', 'ANG', 4, 1, 12),
('2023-2024', '000031', 'ANG', 5, 1, 10),
('2023-2024', '000031', 'EPS', 1, 1, 15),
('2023-2024', '000031', 'EPS', 4, 1, 16),
('2023-2024', '000031', 'EPS', 5, 1, 14),
('2023-2024', '000031', 'FRAN', 1, 1, 8),
('2023-2024', '000031', 'FRAN', 4, 1, 19),
('2023-2024', '000031', 'FRAN', 5, 1, 1),
('2023-2024', '000031', 'HIST-GEO', 1, 1, 11),
('2023-2024', '000031', 'HIST-GEO', 4, 1, 10),
('2023-2024', '000031', 'HIST-GEO', 5, 1, 15),
('2023-2024', '000031', 'MATHS', 1, 1, 8),
('2023-2024', '000031', 'MATHS', 2, 1, 8),
('2023-2024', '000031', 'MATHS', 3, 1, 14),
('2023-2024', '000031', 'MATHS', 4, 1, 15),
('2023-2024', '000031', 'MATHS', 5, 1, 11),
('2023-2024', '000031', 'PCT', 1, 1, 11),
('2023-2024', '000031', 'PCT', 2, 1, 99),
('2023-2024', '000031', 'PCT', 4, 1, 11),
('2023-2024', '000031', 'PCT', 5, 1, 12),
('2023-2024', '000031', 'PHI', 1, 1, 11),
('2023-2024', '000031', 'PHI', 2, 1, 13),
('2023-2024', '000031', 'PHI', 3, 1, 99),
('2023-2024', '000031', 'PHI', 4, 1, 11),
('2023-2024', '000031', 'PHI', 5, 1, 11),
('2023-2024', '000031', 'SVT', 1, 1, 11),
('2023-2024', '000031', 'SVT', 2, 1, 19),
('2023-2024', '000031', 'SVT', 4, 1, 14),
('2023-2024', '000031', 'SVT', 5, 1, 11),
('2023-2024', '000032', 'ANG', 1, 1, 12),
('2023-2024', '000032', 'ANG', 2, 1, 16),
('2023-2024', '000032', 'ANG', 3, 1, 17),
('2023-2024', '000032', 'ANG', 4, 1, 12),
('2023-2024', '000032', 'ANG', 5, 1, 12),
('2023-2024', '000032', 'EPS', 1, 1, 15),
('2023-2024', '000032', 'EPS', 4, 1, 14),
('2023-2024', '000032', 'EPS', 5, 1, 14),
('2023-2024', '000032', 'FRAN', 1, 1, 15),
('2023-2024', '000032', 'FRAN', 4, 1, 17),
('2023-2024', '000032', 'FRAN', 5, 1, 2),
('2023-2024', '000032', 'HIST-GEO', 1, 1, 11),
('2023-2024', '000032', 'HIST-GEO', 4, 1, 10),
('2023-2024', '000032', 'HIST-GEO', 5, 1, 14),
('2023-2024', '000032', 'MATHS', 1, 1, 9),
('2023-2024', '000032', 'MATHS', 2, 1, 5.5),
('2023-2024', '000032', 'MATHS', 3, 1, 19),
('2023-2024', '000032', 'MATHS', 4, 1, 14),
('2023-2024', '000032', 'MATHS', 5, 1, 10),
('2023-2024', '000032', 'PCT', 1, 1, 11),
('2023-2024', '000032', 'PCT', 2, 1, 9),
('2023-2024', '000032', 'PCT', 4, 1, 15),
('2023-2024', '000032', 'PCT', 5, 1, 11),
('2023-2024', '000032', 'PHI', 1, 1, 11),
('2023-2024', '000032', 'PHI', 2, 1, 14),
('2023-2024', '000032', 'PHI', 3, 1, 15),
('2023-2024', '000032', 'PHI', 4, 1, 11),
('2023-2024', '000032', 'PHI', 5, 1, 11),
('2023-2024', '000032', 'SVT', 1, 1, 11),
('2023-2024', '000032', 'SVT', 2, 1, 11),
('2023-2024', '000032', 'SVT', 4, 1, 14),
('2023-2024', '000032', 'SVT', 5, 1, 12),
('2023-2024', '000033', 'ANG', 1, 1, 10),
('2023-2024', '000033', 'ANG', 2, 1, 16),
('2023-2024', '000033', 'ANG', 3, 1, 11),
('2023-2024', '000033', 'ANG', 4, 1, 10),
('2023-2024', '000033', 'ANG', 5, 1, 18),
('2023-2024', '000033', 'EPS', 1, 1, 15),
('2023-2024', '000033', 'EPS', 4, 1, 16),
('2023-2024', '000033', 'EPS', 5, 1, 12),
('2023-2024', '000033', 'FRAN', 1, 1, 19),
('2023-2024', '000033', 'FRAN', 4, 1, 20),
('2023-2024', '000033', 'FRAN', 5, 1, 18),
('2023-2024', '000033', 'HIST-GEO', 1, 1, 18),
('2023-2024', '000033', 'HIST-GEO', 4, 1, 18),
('2023-2024', '000033', 'HIST-GEO', 5, 1, 19),
('2023-2024', '000033', 'MATHS', 1, 1, 19),
('2023-2024', '000033', 'MATHS', 2, 1, 1.25),
('2023-2024', '000033', 'MATHS', 3, 1, 20),
('2023-2024', '000033', 'MATHS', 4, 1, 17),
('2023-2024', '000033', 'MATHS', 5, 1, 9),
('2023-2024', '000033', 'PCT', 1, 1, 16),
('2023-2024', '000033', 'PCT', 2, 1, 11),
('2023-2024', '000033', 'PCT', 4, 1, 19),
('2023-2024', '000033', 'PCT', 5, 1, 17),
('2023-2024', '000033', 'PHI', 1, 1, 18),
('2023-2024', '000033', 'PHI', 2, 1, 18),
('2023-2024', '000033', 'PHI', 3, 1, 19),
('2023-2024', '000033', 'PHI', 4, 1, 15),
('2023-2024', '000033', 'PHI', 5, 1, 16),
('2023-2024', '000033', 'SVT', 1, 1, 17),
('2023-2024', '000033', 'SVT', 2, 1, 99),
('2023-2024', '000033', 'SVT', 4, 1, 18),
('2023-2024', '000033', 'SVT', 5, 1, 14),
('2023-2024', '000042', 'ALL', 1, 1, 15),
('2023-2024', '000043', 'ALL', 1, 1, 12),
('2023-2024', '000044', 'ALL', 1, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `payements`
--

DROP TABLE IF EXISTS `payements`;
CREATE TABLE IF NOT EXISTS `payements` (
  `id_pay` int NOT NULL AUTO_INCREMENT,
  `mat_eleve` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_tranche` int DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `reste` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `statut` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `annee` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pay`,`annee`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `annee` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_prof` int NOT NULL,
  `nom_prof` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom_prof` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `num_prof` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`annee`,`id_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`annee`, `id_prof`, `nom_prof`, `prenom_prof`, `num_prof`, `mail`) VALUES
('2024', 1, 'AGOSSA', 'Léandre', '56577382', 'agoss@gmail.com'),
('2024', 2, 'HANMI', 'Robert', '54783412', 'hanber@gmail.com'),
('2024', 3, 'GOGAGA', 'Samson', '90874563', 'samgo@gmail.com'),
('2024', 4, 'TINKPON', 'Géoffroy', '90086732', 'geotin@gmail.com'),
('2024', 5, 'ZANKPO', 'Isaac', '63458765', 'zisaac@gmail.com'),
('2024', 6, 'MINHOU', 'Jérémie', '65987634', 'minje@gmail.com'),
('2024', 7, 'ASSOGBA ', 'Hubert', '67542390', 'huberass@gmail.com'),
('2024', 8, 'ASSANI', 'Gontran', '94876544', 'assagon@gmail.com'),
('2024', 9, 'DE-SOUZA', 'Bello', '40876534', 'souzabello@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id_session` int NOT NULL,
  `nom_session` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `act` int NOT NULL,
  PRIMARY KEY (`id_session`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id_session`, `nom_session`, `act`) VALUES
(1, 'Trimestre 1', 1),
(2, 'Trimestre 2', 0),
(3, 'Trimestre 3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tranche`
--

DROP TABLE IF EXISTS `tranche`;
CREATE TABLE IF NOT EXISTS `tranche` (
  `id_tranche` int NOT NULL,
  `nom_tranche` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id_tranche`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tranche`
--

INSERT INTO `tranche` (`id_tranche`, `nom_tranche`, `date`) VALUES
(1, 'Tranche 1', '2024-11-01'),
(2, 'Tranche 2', '2025-01-10'),
(3, 'Tranche 3', '2025-03-01'),
(0, 'Inscription', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tranche_clss`
--

DROP TABLE IF EXISTS `tranche_clss`;
CREATE TABLE IF NOT EXISTS `tranche_clss` (
  `code_classe` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_tranche` int NOT NULL,
  `montant` double DEFAULT NULL,
  PRIMARY KEY (`code_classe`,`id_tranche`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tranche_clss`
--

INSERT INTO `tranche_clss` (`code_classe`, `id_tranche`, `montant`) VALUES
('CI', 1, 16000),
('CI', 2, 12000),
('CI', 3, 7000),
('CP', 1, 21000),
('CP', 2, 15000),
('CP', 3, 9000),
('CE1', 1, 23000),
('CE1', 2, 17000),
('CE1', 3, 10000),
('CE2', 1, 25000),
('CE2', 2, 19000),
('CE2', 3, 11000),
('CM1', 1, 30000),
('CM1', 2, 22000),
('CM1', 3, 13000),
('CM2', 1, 32000),
('CM2', 2, 24000),
('CM2', 3, 14000),
('6 eme', 1, 32000),
('6 eme', 2, 24000),
('6 eme', 3, 14000),
('5 eme', 1, 36000),
('5 eme', 2, 28000),
('5 eme', 3, 16000),
('4 eme', 1, 39000),
('4 eme', 2, 29000),
('4 eme', 3, 17000),
('3 eme', 1, 41000),
('3 eme', 2, 31000),
('3 eme', 3, 18000),
('2 dne', 1, 43000),
('2 dne', 2, 33000),
('2 dne', 3, 19000),
('1 ere', 1, 45000),
('1 ere', 2, 35000),
('1 ere', 3, 20000),
('Tle', 1, 54000),
('Tle', 2, 42000),
('Tle', 3, 24000);

-- --------------------------------------------------------

--
-- Table structure for table `type_notes`
--

DROP TABLE IF EXISTS `type_notes`;
CREATE TABLE IF NOT EXISTS `type_notes` (
  `id_type` int NOT NULL,
  `nom_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_notes`
--

INSERT INTO `type_notes` (`id_type`, `nom_type`) VALUES
(1, 'Interrogation 1'),
(2, 'Interrogation 2'),
(3, 'Interrogation 3'),
(4, 'Devoir 1'),
(5, 'Devoir 2');

-- --------------------------------------------------------

--
-- Structure for view `moyennes01`
--
DROP TABLE IF EXISTS `moyennes01`;

DROP VIEW IF EXISTS `moyennes01`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `moyennes01`  AS SELECT `notes`.`code_matiere` AS `code_matiere`, `notes`.`id_session` AS `id_session`, count((case when ((`notes`.`id_type` < 4) and (`notes`.`note` <> 99)) then 1 end)) AS `nb_inter`, sum((case when ((`notes`.`id_type` < 4) and (`notes`.`note` <> 99)) then `notes`.`note` end)) AS `sum_inter`, (sum((case when ((`notes`.`id_type` < 4) and (`notes`.`note` <> 99)) then `notes`.`note` end)) / count((case when ((`notes`.`id_type` < 4) and (`notes`.`note` <> 99)) then 1 end))) AS `moy_inter`, sum((case when (`notes`.`id_type` = 4) then `notes`.`note` end)) AS `dev1`, sum((case when (`notes`.`id_type` = 5) then `notes`.`note` end)) AS `dev2`, ((((sum((case when ((`notes`.`id_type` < 4) and (`notes`.`note` <> 99)) then `notes`.`note` end)) / count((case when ((`notes`.`id_type` < 4) and (`notes`.`note` <> 99)) then 1 end))) + sum((case when (`notes`.`id_type` = 4) then `notes`.`note` end))) + sum((case when (`notes`.`id_type` = 5) then `notes`.`note` end))) / 3) AS `moy`, `enseignement`.`coefficient` AS `coefficient`, (((((sum((case when ((`notes`.`id_type` < 4) and (`notes`.`note` <> 99)) then `notes`.`note` end)) / count((case when ((`notes`.`id_type` < 4) and (`notes`.`note` <> 99)) then 1 end))) + sum((case when (`notes`.`id_type` = 4) then `notes`.`note` end))) + sum((case when (`notes`.`id_type` = 5) then `notes`.`note` end))) * `enseignement`.`coefficient`) / 3) AS `moy_coef`, `eleve`.`annee` AS `annee`, `eleve`.`mat_eleve` AS `mat_eleve`, `eleve`.`nom` AS `nom`, `eleve`.`prenom` AS `prenom`, `eleve`.`sexe` AS `sexe`, `eleve`.`code_classe` AS `code_classe`, `eleve`.`serie` AS `serie`, `eleve`.`groupe` AS `groupe`, `eleve`.`num_parent` AS `num_parent`, `eleve`.`email_parent` AS `email_parent`, `eleve`.`nom_parent` AS `nom_parent`, `eleve`.`photo` AS `photo` FROM ((`notes` join `eleve`) join `enseignement`) WHERE ((`notes`.`annee` = `eleve`.`annee`) AND (`notes`.`mat_eleve` = `eleve`.`mat_eleve`) AND (`notes`.`annee` = `enseignement`.`annee`) AND (`eleve`.`code_classe` = `enseignement`.`code_classe`) AND (`eleve`.`serie` = `enseignement`.`serie`) AND (`eleve`.`groupe` = `enseignement`.`groupe`) AND (`notes`.`code_matiere` = `enseignement`.`code_matiere`) AND (`notes`.`annee` = (select max(`enseignement`.`annee`) AS `annee` from `enseignement`))) GROUP BY `notes`.`annee`, `notes`.`mat_eleve`, `notes`.`code_matiere`, `notes`.`id_session` ;

-- --------------------------------------------------------

--
-- Structure for view `moyennes02`
--
DROP TABLE IF EXISTS `moyennes02`;

DROP VIEW IF EXISTS `moyennes02`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `moyennes02`  AS SELECT `conduite`.`note` AS `note`, sum(`moyennes01`.`coefficient`) AS `tcoef`, (sum(`moyennes01`.`coefficient`) + 1) AS `tcoefac`, sum(`moyennes01`.`moy_coef`) AS `tmoycoef`, (sum(`moyennes01`.`moy_coef`) + `conduite`.`note`) AS `tmoycoefac`, (sum(`moyennes01`.`moy_coef`) / sum(`moyennes01`.`coefficient`)) AS `moyg`, ((sum(`moyennes01`.`moy_coef`) + `conduite`.`note`) / (sum(`moyennes01`.`coefficient`) + 1)) AS `moygac`, `moyennes01`.`code_matiere` AS `code_matiere`, `moyennes01`.`id_session` AS `id_session`, `moyennes01`.`nb_inter` AS `nb_inter`, `moyennes01`.`sum_inter` AS `sum_inter`, `moyennes01`.`moy_inter` AS `moy_inter`, `moyennes01`.`dev1` AS `dev1`, `moyennes01`.`dev2` AS `dev2`, `moyennes01`.`moy` AS `moy`, `moyennes01`.`coefficient` AS `coefficient`, `moyennes01`.`moy_coef` AS `moy_coef`, `moyennes01`.`annee` AS `annee`, `moyennes01`.`mat_eleve` AS `mat_eleve`, `moyennes01`.`nom` AS `nom`, `moyennes01`.`prenom` AS `prenom`, `moyennes01`.`sexe` AS `sexe`, `moyennes01`.`code_classe` AS `code_classe`, `moyennes01`.`serie` AS `serie`, `moyennes01`.`groupe` AS `groupe`, `moyennes01`.`num_parent` AS `num_parent`, `moyennes01`.`email_parent` AS `email_parent`, `moyennes01`.`nom_parent` AS `nom_parent`, `moyennes01`.`photo` AS `photo` FROM (`conduite` join `moyennes01`) WHERE ((`conduite`.`annee` = `moyennes01`.`annee`) AND (`conduite`.`id_session` = `moyennes01`.`id_session`) AND (`conduite`.`mat_eleve` = `moyennes01`.`mat_eleve`)) GROUP BY `conduite`.`annee`, `conduite`.`id_session`, `conduite`.`mat_eleve` ;

-- --------------------------------------------------------

--
-- Structure for view `moyennes03`
--
DROP TABLE IF EXISTS `moyennes03`;

DROP VIEW IF EXISTS `moyennes03`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `moyennes03`  AS SELECT `moyennes02`.`annee` AS `annee`, `moyennes02`.`mat_eleve` AS `mat_eleve`, (sum(`moyennes02`.`moygac`) / `tmp`.`cnt`) AS `moyan`, `moyennes02`.`nom` AS `nom`, `moyennes02`.`prenom` AS `prenom`, `moyennes02`.`sexe` AS `sexe`, `moyennes02`.`code_classe` AS `code_classe`, `moyennes02`.`serie` AS `serie`, `moyennes02`.`groupe` AS `groupe` FROM (`moyennes02` join (select count(distinct `sessions`.`id_session`) AS `cnt` from `sessions`) `tmp`) GROUP BY `moyennes02`.`mat_eleve` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
