-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2025 at 03:10 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `mdf`
--

DROP TABLE IF EXISTS `mdf`;
CREATE TABLE IF NOT EXISTS `mdf` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ghymat` int NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `email`, `password`, `admin`) VALUES
('حسام فروغی', 'test', 'vddvs24v342343@gmail.com', 'f', 0),
('hhhh', 'test', 'dsfsff@gmail.com', 'f', 1),
('dada', 'test2', 'ahajdja@gmail.com', 'f', 1),
('', '', '', '', 0),
('sdada', 'test3', 'ghgyg@gmail.com', '', 0),
('asdasdad', 'test4', 'sadadads@gmail.com', 'f', 0),
('Hesam', 'Hesam', 'mijisoj420@sigmazon.com', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

DROP TABLE IF EXISTS `view`;
CREATE TABLE IF NOT EXISTS `view` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`name`, `email`, `phone`, `message`) VALUES
('‪Hesam‬‏', 'mijisoj420@sigmazon.com', '09627625151', 'عالی'),
('‪Hesam‬‏', 'mijisoj420@sigmazon.com', '09627625151', 'عالی');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
