-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 09:32 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cjenkins_1_comicinventory.db`
--

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE IF NOT EXISTS `issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `issuetype` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `series_id` int(11) DEFAULT NULL,
  `issue_type_id` int(11) DEFAULT NULL,
  `issue` varchar(3) DEFAULT NULL,
  `release_date` datetime DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `notes` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `series_id`, `issue_type_id`, `issue`, `release_date`, `price`, `notes`) VALUES
(1, 1, NULL, '#1', '2011-09-01 00:00:00', '4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE IF NOT EXISTS `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `actively_collected` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `title`, `publisher`, `actively_collected`) VALUES
(1, 'Batman', 'DC Comics', b'1'),
(2, 'Red Hood and the Outlaws', 'DC Comics', b'1'),
(3, 'Hawkeye', 'Marvel Comics', b'1'),
(4, 'Aquaman and the Others', 'DC Comics', b'0'),
(5, 'Saga', 'Image Comics', b'1'),
(6, 'Aquaman', 'DC Comcs', b'1'),
(7, 'Sinestro', 'DC Comics', b'0'),
(8, 'Secret Avengers', 'Marvel Comics', b'1'),
(9, 'All-Star Western', 'DC Comics', b'0'),
(10, 'Batgirl', 'DC Comics', b'1'),
(11, 'Catwoman', 'DC Comics', b'0'),
(12, 'Birds of Prey', 'DC Comics', b'0'),
(13, 'Forever Evil', 'DC Comics', b'0'),
(14, 'Green Arrow', 'DC Comics', b'1'),
(15, 'Guardians of the Galaxy', 'Marvel Comics', b'1'),
(16, 'Green Lantern', 'DC Comics', b'0'),
(17, 'Black Widow', 'Marvel Comics', b'0'),
(18, 'Loki: Agent of Asgard', 'Marvel Comics', b'1'),
(19, 'Batman/Superman', 'DC Comics', b'1'),
(20, 'World''s Finest', 'DC Comics', b'0'),
(21, 'Injustice: Gods Among Us - Year One', 'DC Comics', b'0'),
(22, 'Injustice: Gods Among Us - Year Two', 'DC Comics', b'1'),
(23, 'Harley Quinn', 'DC Comics', b'0'),
(24, 'Teen Titans Go', 'DC Comics', b'1'),
(25, 'Forever Evil: Arkham War', 'DC Comics', b'0'),
(26, 'Forever Evil: Rogues Rebellion', 'DC Comics', b'0'),
(27, 'Forever Evil: A.R.G.U.S.', 'DC Comics', b'0'),
(28, 'Suicide Squad', 'DC Comics', b'0'),
(29, 'Trinity of Sin: Pandora', 'DC Comics', b'0'),
(30, 'Nightwing', 'DC Comics', b'0'),
(31, 'Batman and Robin', 'DC Comics', b'1'),
(32, 'Batwing', 'DC Comics', b'0'),
(33, 'Batman Beyond Universe', 'DC Comics', b'1'),
(34, 'Justice League', 'DC Comics', b'1'),
(35, 'Justice League International', 'DC Comics', b'0'),
(36, 'Justice League of America', 'DC Comics', b'0'),
(37, 'Justice League United', 'DC Comics', b'1'),
(38, 'Age of Ultron', 'Marvel Comics', b'0'),
(39, 'All New X-Men', 'Marvel Comics', b'0'),
(40, 'Batman Eternal', 'DC Comics', b'0'),
(41, 'Batman Incorporated', 'DC Comics', b'0'),
(42, 'DC Universe Presents', 'DC Comics', b'0'),
(43, 'Deathstroke', 'DC Comics', b'0'),
(44, 'Detective Comics', 'DC Comics', b'0'),
(45, 'Earth 2', 'DC Comics', b'1'),
(46, 'Flash', 'DC Comics', b'1'),
(47, 'Green Lantern Corp', 'DC Comics', b'0'),
(48, 'Justice League 3000', 'DC Comics', b'1'),
(49, 'Savage Hawkman', 'DC Comics', b'0'),
(50, 'Pretty Deadly', 'Image Comics', b'0'),
(51, 'Rat Queens', 'Image Comics', b'0'),
(52, 'Vibe', 'DC Comics', b'0'),
(53, 'Talon', 'DC Comics', b'0'),
(54, 'Wolverine', 'Marvel Comics', b'0'),
(55, 'Phantom Stranger', 'DC Comics', b'0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
