-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2020 at 07:48 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phppoll`
--
CREATE DATABASE IF NOT EXISTS `phppoll` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phppoll`;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `title`, `desc`) VALUES
(2, 'Guild President', 'Executive'),
(3, 'Vice President', 'Executive'),
(4, 'Secretary', 'Executive'),
(5, 'Campus Mayor', 'Executive'),
(6, 'Guild Speaker', 'Executive'),
(7, 'Deputy Speaker', 'Executive'),
(8, 'Treasurer', 'Executive'),
(9, 'Foreign Affairs Minister', 'Executive'),
(10, 'Entertainment Minister', 'Ministers'),
(11, 'Academic Minister', 'Executive'),
(12, 'Sports and Health Minister', 'Executive'),
(13, 'Guild Council Representatives', 'Representatives');

-- --------------------------------------------------------

--
-- Table structure for table `poll_answers`
--

CREATE TABLE IF NOT EXISTS `poll_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `poll_answers`
--

INSERT INTO `poll_answers` (`id`, `poll_id`, `title`, `votes`) VALUES
(5, 2, 'Stuart Muyambi', 0),
(6, 2, 'Ambani Lawrence', 0),
(7, 2, 'Lemi Simon', 0),
(8, 2, 'Lukwago Hamidu', 0),
(9, 3, 'Bayani Shadia', 0),
(10, 3, 'Namusisi Teddy', 0),
(11, 3, 'Namutebi Dianah', 0),
(12, 3, 'Tabala Bridget', 0),
(13, 4, 'Nassolo Alicia', 0),
(14, 4, 'Tabitha', 0),
(15, 4, 'Catherine', 0),
(16, 4, 'Rebecca', 0),
(17, 5, 'Lubowa Mike', 0),
(18, 5, 'Mukooza Derrick', 0),
(19, 5, 'Mubiru Ronnie', 0),
(20, 5, 'Duncan ', 0),
(21, 6, 'Allan', 0),
(22, 6, 'Johnson', 0),
(23, 6, 'Samson', 0),
(24, 6, 'Winnie', 0),
(25, 7, 'Mike', 0),
(26, 7, 'Luke', 0),
(27, 7, 'Edison', 0),
(28, 7, 'Gideon', 0),
(29, 8, 'Kaweesi', 0),
(30, 8, 'Ryaan', 0),
(31, 8, 'Sandra', 0),
(32, 8, 'Eunice', 0),
(33, 9, 'Simon', 0),
(34, 9, 'Tom', 0),
(35, 9, 'Sebunga', 0),
(36, 9, 'Tracy', 0),
(37, 10, 'Nakanjako ', 0),
(38, 10, 'Sandra', 0),
(39, 10, 'Bayern', 0),
(40, 10, 'Joseph', 0),
(41, 11, 'Rebecca', 0),
(42, 11, 'Michel', 0),
(43, 11, 'Johnson', 0),
(44, 11, 'Bruno', 0),
(45, 12, 'Gervase', 0),
(46, 12, 'Ben', 0),
(47, 12, 'Elizabeth', 0),
(48, 12, 'Ritah', 0),
(49, 13, 'Sam', 0),
(50, 13, 'Henry', 0),
(51, 13, 'Francis', 0),
(52, 13, 'Isaac', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
