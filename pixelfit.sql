-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2014 at 11:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pixelfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `character_name` varchar(255) NOT NULL,
  `character_id` int(10) NOT NULL AUTO_INCREMENT,
  `character_class` varchar(255) NOT NULL,
  `intelligence` tinyint(5) NOT NULL,
  `dexterity` tinyint(5) NOT NULL,
  `willpower` int(5) NOT NULL,
  `strength` int(5) NOT NULL,
  `agility` int(5) NOT NULL,
  PRIMARY KEY (`character_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`character_name`, `character_id`, `character_class`, `intelligence`, `dexterity`, `willpower`, `strength`, `agility`) VALUES
('Jabberwocky', 1, 'ranger', 99, 99, 99, 99, 99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(128) DEFAULT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `enabled` int(11) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `salt` varchar(225) DEFAULT NULL,
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstname`, `lastname`, `email`, `date_created`, `date_updated`, `enabled`, `password`, `salt`, `user_id`) VALUES
('clundell', 'Cole', 'Lundell', 'cole.lundell@gmail.com', NULL, NULL, 1, 'eff6f2ac56efab50b9cf89b68184c0d915c8e0c1', 'glWKPpOdIWCskmeXVwM4391ut', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_characters`
--

CREATE TABLE IF NOT EXISTS `users_characters` (
  `user_id` int(11) NOT NULL,
  `uc_id` int(10) NOT NULL AUTO_INCREMENT,
  `character_id` int(10) NOT NULL,
  PRIMARY KEY (`uc_id`),
  UNIQUE KEY `character_id` (`character_id`),
  UNIQUE KEY `user_id_2` (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users_characters`
--

INSERT INTO `users_characters` (`user_id`, `uc_id`, `character_id`) VALUES
(1, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_characters`
--
ALTER TABLE `users_characters`
  ADD CONSTRAINT `users_characters_ibfk_2` FOREIGN KEY (`character_id`) REFERENCES `characters` (`character_id`),
  ADD CONSTRAINT `users_characters_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
