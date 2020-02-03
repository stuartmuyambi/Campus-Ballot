-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2020 at 08:56 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campus_ballot`
--
CREATE DATABASE IF NOT EXISTS `campus_ballot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `campus_ballot`;

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
(5, 2, 'Stuart Muyambi', 5),
(6, 2, 'Ambani Lawrence', 1),
(7, 2, 'Lemi Simon', 2),
(8, 2, 'Lukwago Hamidu', 2),
(9, 3, 'Bayani Shadia', 2),
(10, 3, 'Namusisi Teddy', 3),
(11, 3, 'Namutebi Dianah', 2),
(12, 3, 'Tabala Bridget', 1),
(13, 4, 'Nassolo Alicia', 1),
(14, 4, 'Tabitha', 5),
(15, 4, 'Catherine', 1),
(16, 4, 'Rebecca', 2),
(17, 5, 'Lubowa Mike', 4),
(18, 5, 'Mukooza Derrick', 2),
(19, 5, 'Mubiru Ronnie', 2),
(20, 5, 'Duncan ', 1),
(21, 6, 'Allan', 1),
(22, 6, 'Johnson', 2),
(23, 6, 'Samson', 3),
(24, 6, 'Winnie', 1),
(25, 7, 'Mike', 1),
(26, 7, 'Luke', 2),
(27, 7, 'Edison', 4),
(28, 7, 'Gideon', 1),
(29, 8, 'Kaweesi', 3),
(30, 8, 'Ryaan', 2),
(31, 8, 'Sandra', 2),
(32, 8, 'Eunice', 1),
(33, 9, 'Simon', 0),
(34, 9, 'Tom', 1),
(35, 9, 'Sebunga', 1),
(36, 9, 'Tracy', 0),
(37, 10, 'Nakanjako ', 2),
(38, 10, 'Sandra', 1),
(39, 10, 'Bayern', 1),
(40, 10, 'Joseph', 0),
(41, 11, 'Rebecca', 3),
(42, 11, 'Michel', 0),
(43, 11, 'Johnson', 2),
(44, 11, 'Bruno', 0),
(45, 12, 'Gervase', 1),
(46, 12, 'Ben', 2),
(47, 12, 'Elizabeth', 3),
(48, 12, 'Ritah', 0),
(49, 13, 'Sam', 1),
(50, 13, 'Henry', 5),
(51, 13, 'Francis', 2),
(52, 13, 'Isaac', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Stuart Muyambi', 'stuartmuyambi@gmail.com', 'admin', 'f01fa46fd13db60092dde5ccb386f153'),
(2, 'Brad Traversy', 'techguy@gmail.com', 'user', 'f01fa46fd13db60092dde5ccb386f153'),
(3, 'Stuart', 'stuartmuyambi@gmail.com', 'user', 'f01fa46fd13db60092dde5ccb386f153'),
(4, 'Stefan Mischook', 'stefan@gmail.com', 'user', 'f01fa46fd13db60092dde5ccb386f153'),
(5, 'John Sonmez', 'john@simpleprogrammer.com', 'user', 'f01fa46fd13db60092dde5ccb386f153'),
(6, 'Jonathan', 'jonah@gmail.com', 'user', 'f01fa46fd13db60092dde5ccb386f153');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
