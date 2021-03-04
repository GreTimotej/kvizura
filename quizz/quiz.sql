-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 03. jun 2019 ob 18.30
-- Različica strežnika: 10.1.38-MariaDB
-- Različica PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `quiz`
--
CREATE DATABASE IF NOT EXISTS `quizz` DEFAULT CHARACTER SET ucs2 COLLATE ucs2_slovenian_ci;
USE `quizz`;

-- --------------------------------------------------------

--
-- Struktura tabele `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `questions_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `true1` text NOT NULL,
  `false1` text NOT NULL,
  `false2` text NOT NULL,
  `false3` text NOT NULL,
  `img` varchar(45) NOT NULL,
  PRIMARY KEY (`questions_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `questions`
--

INSERT INTO `questions` (`questions_id`, `question`, `true1`, `false1`, `false2`, `false3`, `img`) VALUES
(1, 'What is the capital of Slovenia?', 'Ljubljana', 'Maribor', 'Kranj', 'Koper', 'img/1.jpg'),
(2, 'What is the currency in Slovenia?', 'Euro', 'Kuna', 'Tolar', 'Dollar', 'img/2.jpg'),
(3, 'What was the previous currency in Slovenia?', 'Tolar', 'Dollar', 'Lira', 'Yen', 'img/3.jpg'),
(4, 'What is the highest mountain in Slovenia?', 'Triglav', 'Planica', 'Å marna gora', 'Ojstrica', 'img/4.jpeg'),
(5, 'Which of these is a neighbour to Slovenia?', 'Croatia', 'Germany', 'Serbia', 'Poland', 'img/5.jpg'),
(6, 'What is the population Slovenia?', '2 000 000', '1 000 000', '3 000 000', '500 000', 'img/6.jpg'),
(7, 'What is the official language in Slovenia?', 'Slovenian', 'Croatian', 'Serbian', 'English', 'img/7.jpg'),
(8, 'What year did Slovenia become an independent country?', '1991', '1990', '1989', '1992', 'img/8.jpg'),
(9, 'Which is the best high school in Slovenia?', 'Gimnazija BeÅ¾igrad', 'Srednja Å¡ola ÄŒrnomelj, Gimnazija', 'Zavod Sv. Stanislava, Å kofijska klasiÄna gimnazija', 'Srednja Å¡ola tehniÅ¡kih strok Å iÅ¡ka', 'img/9.jpg'),
(10, 'Slovenija', 'a', 'b', 'c', 'd', 'img/10.png');

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` varchar(45) DEFAULT 'false',
  `maxpoints` int(11) DEFAULT '0',
  `times` int(11) DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `admin`, `maxpoints`, `times`) VALUES
(1, 'xadmin', '0192023a7bbd73250516f069df18b500', 'true', 5, 5),
(2, 'Mojster', '25d55ad283aa400af464c76d713c07ad', 'false', 4, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
