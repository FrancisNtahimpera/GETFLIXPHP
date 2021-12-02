-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Nov 25, 2021 at 03:30 PM
-- Server version: 10.4.2-MariaDB-1:10.4.2+maria~bionic
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getflix`
--
CREATE DATABASE IF NOT EXISTS `getflix` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `getflix`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `passwor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `userlevel` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `passwor`, `email`, `addres`, `bday`, `userlevel`) VALUES
(1, '123', '123', '123', '123@123.com', '123', '1990-12-31', 0),
(2, 'testfname', 'testlname', '$2y$10$XumgYY8pOf0vjKPNAmQ1pOkvitA.ZgjMbq1EBlTKpqFE2t6v49Rk.', 'test@testmail.test', 'rue test 1 ', '1992-07-22', 0),
(3, 'test2', 'test2', '$2y$10$7SY5gUf3G1GywMGyArDL1u3z3WHkeMCn5Z.D6qxLFPUpsYs8WhjRi', 'test2@testmail.com', 'rue test 2 ', '1992-07-22', 0),
(5, 'getflix', 'getflix', '$2y$10$p5OvX4shH2vsfcoS0DkOzOza50kAlc2.unB1Pxef2f1eQeNfYdpUu', 'admin@admin.com', 'rue 1', '1930-01-01', 1),
(6, 'testsk', 'testsk', '$2y$10$PAEephGHlKH1n/qCPrhfVeQ/Dc7MPb9HcgnPnSWXbyi7wMpYnf/6y', 'da@davay.com', 'rraass', '1992-07-22', 0),
(7, 'testsa', 'testsa', '$2y$10$sWwcRI.B24.iegHNhcy0DuSsp8xOPmtugG9sau6l2/EWN6RkusWF2', 'fff@ff.com', '123sksk', '1992-07-08', 0),
(8, 'jum', 'bot', '$2y$10$6f.Nvc9qruXWqo8axFymAuC45/hoNffysUdZzWvL0ZN5NLBGon.OC', 'jumbot@kk.com', '1234s', '1992-07-22', 0),
(9, '12333', '12333', '$2y$10$4A/JB7zi258GbHqHaVyChOrm5pIHVFno5yL4F88iKoLPBT1I8h9N.', 'abba123@gmail.com', 'sad', '1992-07-22', 0),
(10, 'bro', 'sis', '$2y$10$7Mw03NVWJuiI4vQCjH0PJO2vV6V3hggT1JVeIxjyIVedKWWauG/Ba', 'dassah@gmail.com', 'sad', '1992-07-22', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
