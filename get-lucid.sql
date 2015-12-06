-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 08:12 AM
-- Server version: 10.0.15-MariaDB
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
  `commentID` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `postDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dreamID` varchar(40) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `url` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`commentID`),
  KEY `dreamID` (`dreamID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `content`, `postDate`, `dreamID`, `userName`, `url`) VALUES
('65ef8505be9b41d8a4b956fad34a687e0933cbe4', 'This is the first comment for the meteor post', '2015-12-06 06:40:17', 'sde1331', 'Harrmalik', 'meteor-shower');

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
('b95af6c7e684425a48db', 'Summoners Rift', 'Join the battle against the great baron on the fields of summoners rift. Play as one of the many champions as they fight for victory over their enemies.', '/get-lucid/imgs/1443944503_3891.jpg', 'General', 'summoners-rift', '2015-10-04 07:41:19', 'Harrmalik'),
('b95af6c7e684425a48dc', 'Underwater Adventure', '', '/get-lucid/imgs/1449384956_9011.jpg', 'Fantasy', 'underwater-adventure', '2015-12-06 07:11:17', 'Harrmalik'),
('b95af6c7e684425a48dd', 'Gears of Wars', '', '/get-lucid/imgs/1449385080_5028.jpg', 'Video Game', 'gears-of-war', '2015-12-06 07:11:17', 'Harrmalik'),
('b95af6c7e684425a48de', 'Alien Invasion', '', '/get-lucid/imgs/1449385095_3707.jpg', 'Fantasy', 'alien-invasion', '2015-12-06 07:11:17', 'Harrmalik'),
('b95af6c7e684425a48df', 'Joy Ride', '', '/get-lucid/imgs/1449385109_2058.jpg', 'Futuristic', 'joy-ride', '2015-12-06 07:11:17', 'Harrmalik'),
('b95af6c7e684425a48dg', 'Alternate Reality', '', '/get-lucid/imgs/1449385121_3924.jpg', 'Trippy', 'alternate-reality', '2015-12-06 07:11:17', 'Harrmalik'),
('b95af6c7e684425a48dh', 'Deserted Island', 'You dream of being on a deserted island which at first glance seems to be paradise, but as a volcano erupts and a mystical object appears in the sky could this means vacation is over?', '/get-lucid/imgs/1449385138_9345.jpg', 'Island-Gataway', 'deserted-island', '2015-12-06 07:11:17', 'Harrmalik'),
('b95af6c7e684425a48dj', 'Two Roads', '', '/get-lucid/imgs/1449385152_8858.jpg', 'Trippy', 'two-roads', '2015-12-06 07:11:17', 'Harrmalik'),
('b95af6c7e684425a48dk', 'Road Trip', '', '/get-lucid/imgs/1449385167_4426.jpg', 'Landscapes', 'road-trip', '2015-12-06 07:11:17', 'Harrmalik'),
('sde1331', 'Meteor Shower', 'Travel to space and watch as earth gets demolished by dozens of meteors', '/get-lucid/imgs/1449250561_6486.jpg', 'General', 'meteor-shower', '2015-12-05 06:41:43', 'Harrmalik');

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
(' Harrmalik', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, '2015-12-04 17:23:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
