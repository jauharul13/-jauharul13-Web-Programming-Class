-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2021 at 07:02 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28439395_pendekinn`
--
CREATE DATABASE IF NOT EXISTS `epiz_28439395_pendekinn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epiz_28439395_pendekinn`;

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

DROP TABLE IF EXISTS `urls`;
CREATE TABLE IF NOT EXISTS `urls` (
  `url_id` int(6) NOT NULL AUTO_INCREMENT,
  `url` varchar(2000) NOT NULL,
  `code` varchar(6) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`url_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`url_id`, `url`, `code`, `user_id`) VALUES
(1, '1GjakLbeqnzpRSLGt49VFkgs/95o4WOP3coeeruLwFzsCOHWVyzAdTonE1fRRefI1G7LTRIeXs8PUhStCYttes1i+06HkZJk7rjflIR6TX9cD+9U', 'OzjEVX', NULL),
(2, '1GjakLbeqnz+SSna9YlIV0gv9Zdn6yDD1shS', 'yKUYNv', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `email` varchar(999) NOT NULL,
  `pass` varchar(999) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;
--
-- Database: `jauharul_db`
--
CREATE DATABASE IF NOT EXISTS `jauharul_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jauharul_db`;

-- --------------------------------------------------------

--
-- Table structure for table `jauharul_book`
--

DROP TABLE IF EXISTS `jauharul_book`;
CREATE TABLE IF NOT EXISTS `jauharul_book` (
  `book_id` int(30) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `publication_year` int(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jauharul_book`
--

INSERT INTO `jauharul_book` (`book_id`, `title`, `author`, `publication_year`) VALUES
(100, 'automata', 'steven hoo', 2020),
(2000, 'How to basic', 'lupa dosa', 2017),
(103, 'Web Programming in 5 minutes', 'Ryan Al-Helal', 2022),
(104, 'Machine Learning in a week', 'lupa dosa', 2030),
(105, 'AI', 'Richard S', 2000),
(200, 'how to write a poem', 'Arifin', 2019),
(123, 'how to basic', 'joo', 2020),
(12345678, 'How cook nasi goreng', 'jauharul arifin', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('jauharul', 'arifin', 'admin'),
('agung', 'ginanjar', 'user');
--
-- Database: `jauharul_dictionary`
--
CREATE DATABASE IF NOT EXISTS `jauharul_dictionary` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jauharul_dictionary`;

-- --------------------------------------------------------

--
-- Table structure for table `jauharul_worddata`
--

DROP TABLE IF EXISTS `jauharul_worddata`;
CREATE TABLE IF NOT EXISTS `jauharul_worddata` (
  `id` int(100) DEFAULT NULL,
  `w_malay` varchar(100) DEFAULT NULL,
  `w_english` varchar(100) DEFAULT NULL,
  `w_arabic` varchar(100) DEFAULT NULL,
  `w_spanish` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jauharul_worddata`
--

INSERT INTO `jauharul_worddata` (`id`, `w_malay`, `w_english`, `w_arabic`, `w_spanish`) VALUES
(1, 'saya', 'me', 'ana', 'me'),
(2, 'belajar', 'study', 'dirasa', 'estudio'),
(3, 'terima kasih', 'thank you', 'ashkurak', 'gracias');
--
-- Database: `survey`
--
CREATE DATABASE IF NOT EXISTS `survey` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `survey`;

-- --------------------------------------------------------

--
-- Table structure for table `jauharul_survey_data`
--

DROP TABLE IF EXISTS `jauharul_survey_data`;
CREATE TABLE IF NOT EXISTS `jauharul_survey_data` (
  `matric` int(100) DEFAULT NULL,
  `Q_ID` int(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jauharul_survey_data`
--

INSERT INTO `jauharul_survey_data` (`matric`, `Q_ID`, `answer`) VALUES
(123, 1, 'Yes'),
(123, 2, 'Yes'),
(123, 1, 'Yes'),
(123, 2, 'Yes'),
(123, 1, 'No'),
(123, 2, 'Yes'),
(1234, 1, 'No'),
(1234, 2, 'No'),
(0, 1, 'Yes'),
(0, 2, 'Yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
