-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2022 at 07:01 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ArtistID` int(11) NOT NULL,
  `Name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `Discription` varchar(6000) COLLATE utf8_persian_ci NOT NULL,
  `AlbumCover` varchar(6000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ArtistID` (`ArtistID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `Discription` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  `Photo` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `ShortDIscription` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  `DIscription` text COLLATE utf8_persian_ci NOT NULL,
  `Date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `Views` varchar(6000) COLLATE utf8_persian_ci NOT NULL,
  `Tag` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  `Cover` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BlogID` int(11) NOT NULL,
  `Name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `Phone` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `Discriptin` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `BlogID` (`BlogID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `GenresCover` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `AlbumID` int(11) NOT NULL,
  `ArtistID` int(11) NOT NULL,
  `GenresID` int(11) NOT NULL,
  `Name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `Discriptin` varchar(800) COLLATE utf8_persian_ci NOT NULL,
  `Music` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `MusicCover` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `AlbumID` (`AlbumID`),
  KEY `ArtistID` (`ArtistID`),
  KEY `GenresID` (`GenresID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(400) COLLATE utf8_persian_ci NOT NULL,
  `Password` varchar(400) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`ArtistID`) REFERENCES `artist` (`ID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`BlogID`) REFERENCES `blog` (`ID`);

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`AlbumID`) REFERENCES `album` (`ID`),
  ADD CONSTRAINT `music_ibfk_2` FOREIGN KEY (`ArtistID`) REFERENCES `artist` (`ID`),
  ADD CONSTRAINT `music_ibfk_3` FOREIGN KEY (`GenresID`) REFERENCES `genres` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
