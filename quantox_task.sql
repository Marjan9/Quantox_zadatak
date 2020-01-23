-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2020 at 01:01 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quantox_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `username`, `email`, `password`) VALUES
(1, 'Marjan', 'Patisla', 'makidespotovic95@gmail.com', '$2y$10$BUgjCKGOdPxPP2FBLaH4c.9.6RNv35FxrSgqUppVaYPTC6Hb7zAuG'),
(2, 'Marija', 'Maka', 'maka92@gmail.com', '$2y$10$dwsqQ0X7tQTvW.veQ68k8e404il.5schmYhYWoHwymbiv6vm9T5Ie'),
(3, 'Bojan', 'Petkovic', 'hajdi7707@gmail.com', '$2y$10$i9czlqJm8psvFpMxAA6L2eCBNvW3SozJlNG34pLg8Osmm9akbDLVy'),
(4, 'Aleksandar', 'Aca', 'aleksandar.sokolovic@yahoo.com', '$2y$10$qVG1i2K3XfTk1T81LCjMnOM69Q6zl./g9ujOZ9WqUF8yNOEzG8OT2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
