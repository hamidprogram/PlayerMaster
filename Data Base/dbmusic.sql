-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2022 at 10:48 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`ID`, `ArtistID`, `Name`, `Discription`, `AlbumCover`) VALUES
(1, 1, 'PARADOX', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'MajidDarkBoyParadox.jpg'),
(2, 2, 'ONE AND ELEVEN MINUTES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'SeinIXI.jpg'),
(3, 3, 'NOTE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'TehranNote.jpg'),
(4, 4, 'ZARABAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ArshinZaraban.jpg'),
(5, 5, 'HADAF', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'YaserfarnadHadaf.jpg'),
(6, 6, 'TARKIBI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'AVIITarkibiAlbum.jpg'),
(7, 7, 'JENGIR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'MoslemJengiralbum.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ID`, `Name`, `Discription`, `Photo`) VALUES
(1, 'YAS', 'The Best Rap Music and He is best in rap', '1847485924-parsnaz-com.jpg'),
(2, 'PISHRO', 'The best raper and king', '1896208562-parsnaz-com.jpg'),
(3, 'HOSINE', 'The Best Rap Music and He is best in rap', '1021603911-parsnaz-com.jpg'),
(4, 'ERFAN', 'The Best Rap Music and He is best in rap', '713866980-parsnaz-com.jpg'),
(5, 'BAHRAM', 'The Best Rap Music and He is best in rap', '472461294-parsnaz-com.jpg'),
(6, 'SHAIE', 'The Best Rap Music and He is best in rap', '1312809574-parsnaz-com.jpg'),
(7, 'HICHKAS', 'The Best Rap Music and He is best in rap', '553577944-parsnaz-com.jpg');

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
  `Cover` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `Name`, `ShortDIscription`, `DIscription`, `Date`, `Views`, `Cover`) VALUES
(1, 'how to get?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '1401/1/1', '2', 'AspNetCoreToday-1.png'),
(2, 'how to hello?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan in nisl nisi. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. In egestas erat imperdiet sed euismod nisi porta lorem mollis. Morbi tristique senectus et netus. Mattis pellentesque id nibh tortor id aliquet lectus proin. Sapien faucibus et molestie ac feugiat sed lectus vestibulum. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Dictum varius duis at consectetur lorem. Nisi vitae suscipit tellus mauris a diam maecenas sed enim. Velit ut tortor pretium viverra suspendisse potenti nullam. Et molestie ac feugiat sed lectus. Non nisi est sit amet facilisis magna. Dignissim diam quis enim lobortis scelerisque fermentum. Odio ut enim blandit volutpat maecenas volutpat. Ornare lectus sit amet est placerat in egestas erat. Nisi vitae suscipit tellus mauris a diam maecenas sed. Placerat duis ultricies lacus sed turpis tincidunt id aliquet.', '1401/1/1', '4', 'BackGround.jpg'),
(3, 'what is google', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan in nisl nisi. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. In egestas erat imperdiet sed euismod nisi porta lorem mollis. Morbi tristique senectus et netus. Mattis pellentesque id nibh tortor id aliquet lectus proin. Sapien faucibus et molestie ac feugiat sed lectus vestibulum. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Dictum varius duis at consectetur lorem. Nisi vitae suscipit tellus mauris a diam maecenas sed enim. Velit ut tortor pretium viverra suspendisse potenti nullam. Et molestie ac feugiat sed lectus. Non nisi est sit amet facilisis magna. Dignissim diam quis enim lobortis scelerisque fermentum. Odio ut enim blandit volutpat maecenas volutpat. Ornare lectus sit amet est placerat in egestas erat. Nisi vitae suscipit tellus mauris a diam maecenas sed. Placerat duis ultricies lacus sed turpis tincidunt id aliquet.', '1401/1/3', '', 'h8YkVu9_d.jpg'),
(4, 'what is rap?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan in nisl nisi. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. In egestas erat imperdiet sed euismod nisi porta lorem mollis. Morbi tristique senectus et netus. Mattis pellentesque id nibh tortor id aliquet lectus proin. Sapien faucibus et molestie ac feugiat sed lectus vestibulum. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Dictum varius duis at consectetur lorem. Nisi vitae suscipit tellus mauris a diam maecenas sed enim. Velit ut tortor pretium viverra suspendisse potenti nullam. Et molestie ac feugiat sed lectus. Non nisi est sit amet facilisis magna. Dignissim diam quis enim lobortis scelerisque fermentum. Odio ut enim blandit volutpat maecenas volutpat. Ornare lectus sit amet est placerat in egestas erat. Nisi vitae suscipit tellus mauris a diam maecenas sed. Placerat duis ultricies lacus sed turpis tincidunt id aliquet.', '1401/1/4', '', 'AspNetCoreToday-1.png'),
(5, 'What is pop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan in nisl nisi. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. In egestas erat imperdiet sed euismod nisi porta lorem mollis. Morbi tristique senectus et netus. Mattis pellentesque id nibh tortor id aliquet lectus proin. Sapien faucibus et molestie ac feugiat sed lectus vestibulum. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Dictum varius duis at consectetur lorem. Nisi vitae suscipit tellus mauris a diam maecenas sed enim. Velit ut tortor pretium viverra suspendisse potenti nullam. Et molestie ac feugiat sed lectus. Non nisi est sit amet facilisis magna. Dignissim diam quis enim lobortis scelerisque fermentum. Odio ut enim blandit volutpat maecenas volutpat. Ornare lectus sit amet est placerat in egestas erat. Nisi vitae suscipit tellus mauris a diam maecenas sed. Placerat duis ultricies lacus sed turpis tincidunt id aliquet.', '1401/1/10', '', 'BackGround.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `BlogID`, `Name`, `Phone`, `Discriptin`) VALUES
(1, 1, 'hamid reza shojai', '09138742015', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan in nisl nisi. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. In egestas erat ');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`ID`, `Name`, `GenresCover`) VALUES
(1, 'RAP', 'images.jpg'),
(2, 'POP', 'images (1).jpg'),
(3, '60s songs', 'download.jpg'),
(4, 'ROMANTIC', 'download (1).jpg'),
(5, 'TRADTTIONAL', 'download (2).jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`ID`, `AlbumID`, `ArtistID`, `GenresID`, `Name`, `Discriptin`, `Music`, `MusicCover`) VALUES
(1, 1, 1, 1, 'SEFARSHI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ahmad-nikzad-eshkano-beshkan[128].mp3', 'IMG_20220212_105312.jpg'),
(2, 2, 2, 2, 'JONIJONM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ahmad-nikzad-eshkano-beshkan[128].mp3', 'IMG_20220212_105312.jpg'),
(3, 3, 3, 3, 'HAIHAT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ahmad-nikzad-eshkano-beshkan[128].mp3', 'IMG_20220212_105312.jpg'),
(4, 4, 4, 4, 'ALO KHODA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ahmad-nikzad-eshkano-beshkan[128].mp3', 'IMG_20220212_105312.jpg'),
(5, 5, 5, 5, 'NAFAS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ahmad-nikzad-eshkano-beshkan[128].mp3', 'IMG_20220212_105312.jpg'),
(6, 6, 6, 1, 'SUCH A WOW', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ahmad-nikzad-eshkano-beshkan[128].mp3', 'IMG_20220212_105312.jpg'),
(7, 7, 7, 2, 'BAZAM KALAM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'ahmad-nikzad-eshkano-beshkan[128].mp3', 'IMG_20220212_105312.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `UserName`, `Password`) VALUES
(3, 'admin', '123');

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
