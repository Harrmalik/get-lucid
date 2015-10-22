-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 05:00 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `get-lucid`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `postDate` int(11) NOT NULL,
  `dreamID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  PRIMARY KEY (`commentID`),
  KEY `dreamID` (`dreamID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dreams`
--

CREATE TABLE IF NOT EXISTS `dreams` (
  `id` varchar(20) NOT NULL,
  `dreamName` varchar(150) DEFAULT NULL,
  `dreamContent` text,
  `image` varchar(150) DEFAULT NULL,
  `tag` varchar(40) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`),
  KEY `dreamName` (`dreamName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dreams`
--

INSERT INTO `dreams` (`id`, `dreamName`, `dreamContent`, `image`, `tag`, `url`, `created`, `username`) VALUES
('b95af6c7e684425a48db', 'Summoners Rifts', 'Join the battle against the great baron on the fields of summoners rift. Play as one of the many champions as they fight for victory over their enemies.', '/get-lucid/imgs/1443944479_1865.jpg', 'General', 'summoners-rifts', '2015-10-04 07:41:19', 'adm1n-mh'),
('d4d163e3ee3a363ab4b0', 'Summoners Rifted', 'Join the battle against the great baron on the fields of summoners rift. Play as one of the many champions as they fight for victory over their enemies.', '/get-lucid/imgs/1443944503_3891.jpg', 'General', 'summoners-rifted', '2015-10-04 07:41:43', 'adm1n-mh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(60) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `isAdmin`, `created`) VALUES
('adm1n-m', 'f8c12b556b30abe13ca6101f76c51c8688361443', 0, '2015-10-07 14:09:44'),
('adm1n-mh', 'f8c12b556b30abe13ca6101f76c51c8688361443', 0, '2015-10-07 03:45:28'),
('test', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0, '2015-10-07 03:46:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
