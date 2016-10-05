-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2016 at 01:26 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emuet`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) DEFAULT NULL,
  `contents` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search_index` (`contents`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phoneno` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `address`, `email`, `phoneno`, `username`, `password`) VALUES
(1, 'Mohammad Ridzuan', 'Port Klang', 'redblueman25@yahoo.com', 1128224070, 'redblueman', '940225'),
(2, 'azimah', 'kajang, selangor', 'marmiatia@gmail.com', 126543765, 'root', ''),
(3, 'azreeani', 'nilai, negeri sembilan', 'azzreani@gmail.com', 132776354, 'root', ''),
(4, 'nadia naim', 'batu pahat, johor', 'nadianaim@gmail.com', 135463798, 'Nadia', '12345'),
(5, 'aminah', 'sungai buloh, selangor', 'aminah@gmail.com', 11, 'aminah', '1234'),
(6, 'syafiqah aqilah', 'Kemaman, Terengganu', 'qilahayat@gmail.com', 14562763, 'admin', '1234'),
(7, '', '', '', 0, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE IF NOT EXISTS `word` (
  `idSearch` int(200) NOT NULL AUTO_INCREMENT,
  `word` varchar(1000) NOT NULL,
  `meaning` varchar(2000) NOT NULL,
  `example` varchar(3000) NOT NULL,
  PRIMARY KEY (`idSearch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`idSearch`, `word`, `meaning`, `example`) VALUES
(4, 'resurgence', 'an increase or revival after a period of little activity, popularity, or occurrence', 'The disease-thought to have been eradicated in the 1950''s-stunt growth and deforms the skeleton, characteristically causing bowed legs and worse. '),
(5, 'eradicated', 'destroy completely, put an end to', 'The disease-thought to have been eradicated in the 1950''s-stunt growth and deforms the skeleton, characteristically causing bowed legs and worse. '),
(7, 'exploited', 'to utilize, especially for profit; turn to practical account OR \r\nto use selfishly for one''s own ends', 'So while others increase their wealth, status and influence, the gap between rich and poor grows wider. Peasants and labourers may easily be exploited'),
(11, 'perpetrator', 'a person who perpetrates, or commits, an illegal, criminal, or evil act', 'The perpetrators of this heinous crime must be found and punished to the fullest extent of the law.'),
(12, 'increment', 'an increase or addition, especially one of a series on a fixed scale.', 'the numerical increment in patients admitted to hospitals was still in the thousands.'),
(13, 'minuscule', 'very small or extremely small; tiny.', 'Tests have shown that it is around 10 times faster than available tests, yet 40 to 100 times cheaper, the researchers said, because each sample droplet is so minuscule that the cost for reagents drops.'),
(14, 'increase', 'become or make greater in size, amount, intensity, or degree.', 'In 2007, Malaysia showed an increase in exports to all the four regions'),
(15, 'wisdom', 'the quality of having experience, knowledge, and good judgment; the quality of being wise.', 'The conventional wisdom was right: more choice really is better');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
