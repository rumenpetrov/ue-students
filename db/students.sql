-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.32
-- Версия на PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `students`
--
CREATE DATABASE IF NOT EXISTS `students` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `students`;

-- --------------------------------------------------------

--
-- Структура на таблица `specialnosti`
--

CREATE TABLE IF NOT EXISTS `specialnosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specialnost_ime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Схема на данните от таблица `specialnosti`
--

INSERT INTO `specialnosti` (`id`, `specialnost_ime`) VALUES
(1, 'Информатика'),
(2, 'СК'),
(3, 'БИС'),
(4, 'Маркетинг');

-- --------------------------------------------------------

--
-- Структура на таблица `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(40) NOT NULL,
  `familiq` varchar(40) NOT NULL,
  `pol` varchar(10) NOT NULL,
  `fak_nomer` int(11) NOT NULL,
  `specialnost` varchar(50) NOT NULL,
  `grupa` int(11) NOT NULL,
  `kurs` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Схема на данните от таблица `students`
--

INSERT INTO `students` (`id`, `ime`, `familiq`, `pol`, `fak_nomer`, `specialnost`, `grupa`, `kurs`) VALUES
(1, 'Румен', 'Петров', 'мъж', 3457, 'Информатика', 48, 4),
(2, 'Диян', 'Панджуров', 'мъж', 3463, 'Информатика', 48, 4),
(3, 'Иван', 'Георгиев', 'мъж', 2243, 'СК', 23, 2),
(4, 'Гергана', 'Петкова', 'жена', 4322, 'Маркетинг', 54, 1),
(5, 'Елена', 'Димитрова', 'жена', 4022, 'БИС', 50, 3),
(6, 'Димитър', 'Иванов', 'мъж', 2321, 'СК', 24, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
