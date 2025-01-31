-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2025 at 06:15 PM
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
-- Database: `amir`
--

-- --------------------------------------------------------

--
-- Table structure for table `carpet`
--

DROP TABLE IF EXISTS `carpet`;
CREATE TABLE IF NOT EXISTS `carpet` (
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `repassword` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carpet`
--

INSERT INTO `carpet` (`username`, `email`, `password`, `repassword`) VALUES
('Hesamf0', 'dsjadujba@jbjhj.dff', '213131313', 'dfffsfsfdf1313'),
('Hesamf0', '', '213131313', ''),
('Hesamf0', '', '213131313', ''),
('Hesamf0', '', '213131313', ''),
('Hesamf0', 'dsjadujba@jbjhj.dff', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
