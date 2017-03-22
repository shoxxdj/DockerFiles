-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2015 at 04:04 PM
-- Server version: 10.0.22-MariaDB-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challengeSQL`
--
CREATE DATABASE IF NOT EXISTS `challengeSQL` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `challengeSQL`;

CREATE USER 'challenge'@'localhost' IDENTIFIED BY 'challenge';
GRANT ALL PRIVILEGES ON challengeSQL.articles TO 'challenge'@'localhost';
GRANT ALL PRIVILEGES ON challengeSQL.the_table_users TO 'challenge'@'localhost';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `articles` (
  `id` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`,`title`,`content`) VALUES ('1','Article 01','Ceci est le contenu de l article !'),('2','Article 02','Ceci est le second article !'),('3','Article 03','Ceci est le 3eme article !');

CREATE TABLE `the_table_users`(
	`login` varchar(50) NOT NULL,
	`password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `the_table_users` (`login`, `password`) VALUES ('admin', 'This1sY0urAws0m3Fl4g!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
