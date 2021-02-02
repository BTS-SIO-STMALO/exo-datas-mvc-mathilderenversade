-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 02 fév. 2021 à 10:16
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogchien`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `content` text,
  `author` varchar(32) NOT NULL,
  `date` varchar(15) DEFAULT NULL,
  `category` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `author`, `date`, `category`) VALUES
(1, 'Comment caresser son chien dans le sens du poil', 'Il est important de caresser son chien dans le sens du poil pour notamment éviter les poils incarnés et la mauvaise humeur', 'Mathilde', '2020-07-13', 'Bien-être'),
(2, 'Pourquoi les chiens sentent-ils mauvaise de la bouche ?', 'Senteur poubelle ou senteur caniveau, l\'haleine de nos canidés est un vrai problème du quotidien. Il existe pourtant des solutions simples', 'Nicolas', '2020-03-25', 'Soins et santé'),
(3, 'Top 10 des meilleurs jouets à tester', 'Peluche, baballe, pouet pouet, jeux d\'intelligence et d\'agilité, nous avons sélectionné pour vous les meilleurs jeux 2020 pour votre animal', 'Pierre', '2020-12-31', 'Loisirs'),
(4, 'Mon chien mord, que faire ?', ' Cette sale bête s\'attaque à tout le monde, j\'ai déjà 5 procès sur le dos, je ne sais plus quoi faire, il me fait peur ', 'Colette', '2020-01-05', 'Education');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
