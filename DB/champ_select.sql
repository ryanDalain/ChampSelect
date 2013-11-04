-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2013 at 03:23 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `champ select`
--
CREATE DATABASE IF NOT EXISTS `champ select` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `champ select`;

-- --------------------------------------------------------

--
-- Table structure for table `champion`
--

CREATE TABLE IF NOT EXISTS `champion` (
  `Name` varchar(255) NOT NULL,
  `Difficulty` int(11) NOT NULL,
  `Win_Rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `champion`
--

INSERT INTO `champion` (`Name`, `Difficulty`, `Win_Rate`) VALUES
('Aatrox', 6, 52.46),
('Ahri', 8, 50.25),
('Akali', 6, 49.42),
('Alistar', 8, 45.21),
('Amumu', 4, 54.47),
('Anivia', 8, 48.15),
('Annie', 4, 52.33),
('Ashe', 4, 50.86),
('Blitzcrank', 6, 51.86),
('Brand', 6, 53.4),
('Caitlyn', 4, 49.3),
('Cassiopeia', 10, 46.26),
('Cho''Gath', 7, 49.32),
('Corki', 7, 52.65),
('Darius', 4, 50.86),
('Diana', 4, 47.41),
('Dr. Mundo', 4, 46.29),
('Draven', 10, 50.39),
('Elise', 8, 45.57),
('Evelynn', 8, 48.98),
('Ezreal', 8, 47.69),
('Fiddlesticks', 5, 52.37),
('Fiora', 5, 54.55),
('Fizz', 8, 50.96),
('Galio', 4, 48.41),
('Gangplank', 5, 47.72),
('Garen', 2, 49.07),
('Gragas', 6, 45.88),
('Graves', 4, 51.84),
('Hecarim', 5, 52.77),
('Heimerdinger', 4, 48.95),
('Irelia', 5, 49.87),
('Janna', 9, 55.1),
('Jarvan IV', 5, 53.67),
('Jax', 6, 51.38),
('Jayce', 8, 48.6),
('Jinx', 9, 50.88),
('Karma', 8, 46.19),
('Karthus', 8, 45.79),
('Kassadin', 8, 53.02),
('Katarina', 5, 50.6),
('Kayle', 5, 48.71),
('Kennen', 5, 47.51),
('Kha''Zix', 7, 46.32),
('Kog''Maw', 8, 52.13),
('LeBlanc', 9, 45.87),
('Lee Sin', 9, 47.89),
('Leona', 4, 52.44),
('Lissandra', 8, 46.96),
('Lucian', 8, 48.62),
('Lulu', 7, 47.88),
('Lux', 6, 49.39),
('Malphite', 3, 49.5),
('Malzahar', 6, 53.05),
('Maokai', 4, 48.98),
('Master Yi', 2, 49.24),
('Miss Fortune', 3, 50),
('Mordekaiser', 3, 53.73),
('Morgana', 6, 50.64),
('Nami', 8, 50.28),
('Nasus', 2, 52.45),
('Nautilus', 6, 47.45),
('Nidalee', 7, 50.41),
('Nocturne', 6, 50.03),
('Nunu', 1, 47.21),
('Olaf', 4, 43.18),
('Orianna', 10, 48.78),
('Pantheon', 5, 47.56),
('Poppy', 7, 49.78),
('Quinn', 7, 52.31),
('Rammus', 5, 55.26),
('Renekton', 3, 50.14),
('Rengar', 5, 44.53),
('Riven', 4, 49.92),
('Rumble', 8, 49.5),
('Ryze', 3, 47),
('Sejuani', 4, 55.47),
('Shaco', 9, 47.86),
('Shen', 3, 47.76),
('Shyvana', 4, 53.3),
('Singed', 5, 50.06),
('Sion', 4, 47.92),
('Sivir', 5, 53.3),
('Skarner', 5, 48.7),
('Sona', 1, 53.83),
('Soraka', 3, 50.15),
('Swain', 5, 51.81),
('Syndra', 10, 43.56),
('Talon', 6, 54.14),
('Taric', 3, 49.73),
('Teemo', 4, 50.22),
('Thresh', 7, 49.32),
('Tristana', 3, 47.82),
('Trundle', 5, 48.96),
('Tryndamere', 6, 52.31),
('Twisted Fate', 9, 44.15),
('Twitch', 8, 50.47),
('Udyr', 5, 49.82),
('Urgot', 8, 41.82),
('Varus', 6, 50.08),
('Vayne', 7, 48.14),
('Veigar', 6, 45.89),
('Vi', 5, 52.05),
('Viktor', 9, 49.96),
('Vladimir', 2, 47.65),
('Volibear', 2, 50.65),
('Warwick', 2, 52.81),
('Wukong', 3, 53.4),
('Xerath', 6, 49.1),
('Xin Zhao', 3, 52.16),
('Yorick', 3, 49.94),
('Zac', 6, 49.9),
('Zed', 9, 47.73),
('Ziggs', 6, 50.41),
('Zilean', 4, 51.17),
('Zyra', 7, 51.28);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
