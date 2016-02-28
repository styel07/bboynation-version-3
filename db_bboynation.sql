-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2014 at 02:29 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bboynation`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `account_type` char(1) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `province` tinyint(2) NOT NULL,
  `ethnicity` bit(2) NOT NULL,
  `age` tinyint(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`, `account_type`, `first_name`, `last_name`, `province`, `ethnicity`, `age`, `gender`) VALUES
(1, 'el_itechnology@yahoo.com', '1234', 'A', 'eleazar', 'corpuz', 1, b'01', 23, 'M'),
(2, 'meggy@gmail.com', '1234', 'M', 'meggy', 'kierulf', 2, b'10', 23, 'F'),
(3, 'aldrin@yahoo.com', '1234', 'E', 'aldrin', 'tigon', 12, b'11', 34, 'F'),
(4, 'daryl@yahoo.com', '1234', 'T', 'daryl', 'ignacio', 12, b'11', 20, 'M'),
(5, 'wesley@yahoo.com', '1234', 'T', 'wesley', 'bugawan', 5, b'11', 18, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(300) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `username`, `date`, `time`) VALUES
(39, 'The event was awesome!', 'el_itechnology@yahoo.com', '08-06-2014', '10:11:04'),
(40, 'I wish i joined :(', 'meggy@gmail.com', '08-06-2014', '10:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `suggest_id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `suggestion` varchar(300) NOT NULL,
  PRIMARY KEY (`suggest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`suggest_id`, `page`, `username`, `suggestion`) VALUES
(6, '/bboynation/about-us.php', 'meggy@gmail.com', 'this about-us page is boring'),
(7, '/bboynation/gallery.php', 'meggy@gmail.com', 'make this gallery more cooler!'),
(9, '/bboynation/index.php', 'el_itechnology@yahoo.com', 'Guest account suggestion here!'),
(11, '/bboynation/sign-up.php', 'Guest', 'try again'),
(12, '/bboynation/profile.php', 'aldrin@yahoo.com', 'Lib seggestyown'),
(13, '/bboynation/index.php', 'Guest', 'Kain na!'),
(14, '/bboynation/index.php', 'Guest', 'Enter your suggestion here...sfgdfgdcfgcfgdfgoooooooooooooooooooggggggggggggggggggggggggggggggggggggg'),
(21, '/bboynation/index.php', 'Guest', 'Enter your suggestion sadhere...'),
(23, '/bboynation/sample-event1.php', 'Guest', 'testing!'),
(24, '/bboynation/sample-event1.php', 'aldrin@yahoo.com', 'Change the poster for R-16 it is ugly');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `province` tinyint(4) NOT NULL,
  `ethnicity` tinyint(4) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `gender` char(6) NOT NULL,
  `account_type` varchar(7) NOT NULL,
  `agree` bit(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`user_id`, `username`, `password`, `firstname`, `lastname`, `province`, `ethnicity`, `age`, `gender`, `account_type`, `agree`) VALUES
(1, 'test@yahoo.com', '1234', 'test', 'ing', 0, 0, 0, '0', '0', b'0'),
(2, 'test@yahoo.com', '1234', 'test', 'ing', 0, 0, 0, '0', '0', b'0'),
(3, 'jay.co.nutt@yahoo.com', 'donuts', 'jay', 'nutts', 1, 10, 0, '0', '0', b'0'),
(4, 'test@yahoo.com', '1234', 'test', 'ing', 0, 0, 0, '0', '0', b'0'),
(5, 'daryl@yahoo.com', '1234', 'daryl', 'ignacio', 9, 12, 21, '0', '0', b'0'),
(6, 'el_itechnology@yahoo.com', '1234styel', 'el', 'corpuz', 9, 12, 23, '1', '0', b'0'),
(7, 'el_itechnology@yahoo.com', '1234styel', 'el', 'corpuz', 9, 12, 23, '1', '0', b'0'),
(8, 'rf_itechnology@yahoo.com', '1', 'l', 's', 12, 12, 23, '1', '1', b'0'),
(9, 'rf_itechnology@yahoo.com', '1', 'l', 's', 12, 12, 23, '1', '1', b'0'),
(10, 'el_itechnology@yahoo.com', '1234styel', 'qwe', 'qwe', 2, 3, 4, '1', '1', b'0'),
(11, 'el_itechnology@yahoo.com', '1234styel', 'er', 'er', 23, 4, 23, '1', '1', b'0'),
(12, 'el_itechnology@yahoo.com', '1234styel', 'er', 'we', 2, 1, 3, '0', '0', b'1'),
(13, 'blah@yahoo.com', '1234', 'erwer', 'wtedfg', 1, 2, 3, 'Female', '1', b'1'),
(14, 'blah@yahoo.com', '1234', 'erwer', 'wtedfg', 1, 2, 3, 'Female', '1', b'1'),
(15, 'f@yahoo.com', '1234', 'f', 's', 3, 21, 21, 'M', '2', b'1'),
(16, 'aldrin@yahoo.com', '1234', 'ersdf', 'dhfghfg', 12, 3, 34, 'F', 'Event', b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
