-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2015 at 04:25 AM
-- Server version: 5.6.17
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
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dreams`
--

INSERT INTO `dreams` (`id`, `dreamName`, `dreamContent`, `image`, `tag`, `url`, `created`) VALUES
('b95af6c7e684425a48db', 'Summoners Rift', 'Join the battle against the great baron on the fields of summoners rift. Play as one of the many champions as they fight for victory over their enemies.', '/get-lucid/imgs/1443944479_1865.jpg', 'General', 'summoners-rift', '2015-10-04 07:41:19'),
('d4d163e3ee3a363ab4b0', 'Summoners Rift', 'Join the battle against the great baron on the fields of summoners rift. Play as one of the many champions as they fight for victory over their enemies.', '/get-lucid/imgs/1443944503_3891.jpg', 'General', 'summoners-rift', '2015-10-04 07:41:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
