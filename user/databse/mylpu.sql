-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 07:33 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mylpu`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE IF NOT EXISTS `attend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seminar` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `attend`
--

INSERT INTO `attend` (`id`, `seminar`, `username`) VALUES
(6, '11', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `eval`
--

CREATE TABLE IF NOT EXISTS `eval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seminar` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `eval`
--

INSERT INTO `eval` (`id`, `seminar`, `question`, `answer`, `username`) VALUES
(39, '11', 'How can this seminar helpful in your daily life?', 'SDF', 'sa'),
(40, '11', 'How can this seminar helpful in your daily life?', 'SD', 'sa'),
(41, '11', 'What is the seminar all about?', 'DSF', 'sa'),
(42, '11', 'What is the reason why you failed to attend the said seminar?', 'SDF', 'sa'),
(43, '11', 'Have you already have a background on the seminar being presented?', 'SDF', 'sa'),
(44, '11', 'What have you learned throughout the seminar?', 'SDF', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `username`, `name`, `department`, `email`, `contact`, `type`, `mname`, `lname`) VALUES
(5, 'sa', 'April', 'CCS', 'a.apriljamilenn@gmail.com', '123456', 'Teaching', 'Middle ', 'Middle '),
(7, '15109154', 'Krizzia O. Estaño', 'CCS', 'krizziaestano@gmail.com', '09752617005', 'Non-Teaching', '', ''),
(8, 'sdfsdf', 'dfsd', 'sdf', 'sdf', '2342', 'Teaching', '', ''),
(9, '123456', 'First', 'sdsdf', 'a@a.com', '5456464', 'Teaching', 'Middle ', 'Last'),
(10, '4567', 'last', 'dasfsd', 'a@a.com', '3423432', 'Teaching', 'mid', 'first'),
(11, 'abcd', 'adfsdf', 'sdfsdf', 'a.apriljamilenn@gmail.com', '34242343', 'Teaching', 'sdfs', 'sdfsdf'),
(12, 'asd', 'dfhg', 'dfgh', 'a@a.com', '3423432', 'Non-Teaching', 'sdhjfgsdf', 'hsdgfds'),
(13, '34234', 'first', 'dept', 'a@a.com', '11233213', 'Teaching', 'middle', 'last');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `check` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `check`) VALUES
(1, 'admin', 'admin', 'admin', ''),
(6, 'sa', 'ba', 'employee', ''),
(8, '15109154', 'choco', 'employee', ''),
(9, 'sdfsdf', 'sdfsdf', 'employee', ''),
(10, '123456', 'Abcdefg12', 'employee', ''),
(11, '4567', 'Abcdef123', 'employee', ''),
(12, 'abcd', 'Abcd123', 'employee', ''),
(13, 'asd', 'asd', 'employee', ''),
(14, '34234', 'kk', 'employee', '');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE IF NOT EXISTS `seminar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seminar` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `description` text,
  `vid` varchar(255) DEFAULT NULL,
  `type` text NOT NULL,
  `attach` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `seminar`, `date`, `description`, `vid`, `type`, `attach`) VALUES
(10, 'asdasdsad', '2018-12-19', 'asdasdsa', 'VID_20180810_161058.mp4', 'Non-Teaching', 'Porgram-1-and-2-2nd-sem-2018-2019-for-BSU.doc'),
(11, 'asdasd', '2018-12-26', 'asdasd', 'Good evening.mp4', 'Teaching', 'Porgram-1-and-2-2nd-sem-2018-2019-for-BSU.doc'),
(12, 'asasdsad', '2018-12-13', 'asdasdas', 'Good evening.mp4', 'All', 'Porgram-1-and-2-2nd-sem-2018-2019-for-BSU.doc'),
(13, 'sample seminar', '2018-12-10', 'asdsdasd', 'Good evening.mp4', 'Teaching', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
