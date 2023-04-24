-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2023 at 10:22 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(13, 'admin', 'admin123@gmail.com', '$2y$10$.UEYEkb82HfgWpZc0lU71Ozl8IEuWATSzEgW4VCBikh/887aiU7ry'),
(12, 'tumul', 'admin@gmail.com', '$2y$10$XPL9KK/7cwuVSV8vW5GKw.My.ZiD.hZjdtFodTXRD2XQtjfYwYG.W'),
(11, 'ronaldo', 'cr7@goat.com', '$2y$10$zIzEFc0zhHAk4lGy7gUWQOLYK3XJJUzjmdFRaCeFaLvLlw9qHBWMO'),
(9, 'tumul', 'tumulgupta11@gmail.com', '$2y$10$baWuSeDQdCiMskFRfzEbo.9LU9Rbc8tT.ptEgaHM80mGK0MA4Nanq'),
(14, 'aryan', 'aryanchile.786@gmail.com', '$2y$10$izp9jpZVYvybRRnIG9FWKuYbWEH0pcexj3rJ2USvtgbd79NMq5YDu'),
(15, 'test', 'test@terms.com', '$2y$10$7B9XzVLf6O/0mzMPYGxlP.xcYxn8BsFPZo/kQwforNSA7N1ky2Sry'),
(16, 'SNP', 'snp@gmail.com', '$2y$10$FDmOEcTwqJFVeSk3Xh4GZ.lw.aGlsPLfZhyX2SumbbG46wyO8V.xq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
