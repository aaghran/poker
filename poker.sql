-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2013 at 01:22 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `value` varchar(3) NOT NULL,
  `image` text NOT NULL,
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`value`, `image`) VALUES
('10C', '<img src="img/cards/10C.png" height="80px" />\n'),
('10D', '<img src="img/cards/10D.png" height="80px" />'),
('10H', '<img src="img/cards/10H.png" height="80px" />'),
('10S', '<img src="img/cards/10S.png" height="80px" />'),
('2C', '<img src="img/cards/2C.png" height="80px" />\n'),
('2D', '<img src="img/cards/2D.png" height="80px" />'),
('2H', '<img src="img/cards/2H.png" height="80px" />'),
('2S', '<img src="img/cards/2S.png" height="80px" />'),
('3C', '<img src="img/cards/3C.png" height="80px" />\n'),
('3D', '<img src="img/cards/3D.png" height="80px" />'),
('3H', '<img src="img/cards/3H.png" height="80px" />'),
('3S', '<img src="img/cards/3S.png" height="80px" />'),
('4C', '<img src="img/cards/4C.png" height="80px" />\n'),
('4D', '<img src="img/cards/4D.png" height="80px" />'),
('4H', '<img src="img/cards/4H.png" height="80px" />'),
('4S', '<img src="img/cards/4S.png" height="80px" />'),
('5C', '<img src="img/cards/5C.png" height="80px" />\n'),
('5D', '<img src="img/cards/5D.png" height="80px" />'),
('5H', '<img src="img/cards/5H.png" height="80px" />'),
('5S', '<img src="img/cards/5S.png" height="80px" />'),
('6C', '<img src="img/cards/6C.png" height="80px" />\n'),
('6D', '<img src="img/cards/6D.png" height="80px" />'),
('6H', '<img src="img/cards/6H.png" height="80px" />'),
('6S', '<img src="img/cards/6S.png" height="80px" />'),
('7C', '<img src="img/cards/7C.png" height="80px" />\n'),
('7D', '<img src="img/cards/7D.png" height="80px" />'),
('7H', '<img src="img/cards/7H.png" height="80px" />'),
('7S', '<img src="img/cards/7S.png" height="80px" />'),
('8C', '<img src="img/cards/8C.png" height="80px" />\n'),
('8D', '<img src="img/cards/8D.png" height="80px" />'),
('8H', '<img src="img/cards/8H.png" height="80px" />'),
('8S', '<img src="img/cards/8S.png" height="80px" />'),
('9C', '<img src="img/cards/9C.png" height="80px" />\n'),
('9D', '<img src="img/cards/9D.png" height="80px" />'),
('9H', '<img src="img/cards/9H.png" height="80px" />'),
('9S', '<img src="img/cards/9S.png" height="80px" />'),
('AC', '<img src="img/cards/AC.png" height="80px" />\r\n'),
('AD', '<img src="img/cards/AD.png" height="80px" />'),
('AH', '<img src="img/cards/AH.png" height="80px" />'),
('AS', '<img src="img/cards/2C.png" height="80px" />'),
('JC', '<img src="img/cards/JC.png" height="80px" />\n'),
('JD', '<img src="img/cards/JD.png" height="80px" />'),
('JH', '<img src="img/cards/JH.png" height="80px" />'),
('JS', '<img src="img/cards/JS.png" height="80px" />'),
('KC', '<img src="img/cards/KC.png" height="80px" />\n'),
('KD', '<img src="img/cards/KD.png" height="80px" />'),
('KH', '<img src="img/cards/KH.png" height="80px" />'),
('KS', '<img src="img/cards/KS.png" height="80px" />'),
('QC', '<img src="img/cards/QC.png" height="80px" />\n'),
('QD', '<img src="img/cards/QD.png" height="80px" />'),
('QH', '<img src="img/cards/QH.png" height="80px" />'),
('QS', '<img src="img/cards/QS.png" height="80px" />');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `score` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `lost` int(11) NOT NULL,
  `played` int(11) NOT NULL,
  `pic` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `score`) VALUES
(1, 'aaghran', 'aaghran@gmail.com', '123', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
