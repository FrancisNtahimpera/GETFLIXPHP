-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : database:3306
-- Généré le :  ven. 03 déc. 2021 à 15:12
-- Version du serveur :  10.4.2-MariaDB-1:10.4.2+maria~bionic
-- Version de PHP :  7.2.5
CREATE DATABASE IF NOT EXISTS getflix;
USE getflix;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `getflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `passwor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `passwor`, `email`, `addres`, `bday`) VALUES
(13, 'jaime', 'lavie', '$2y$10$eVCJlVK0MRfwL/3ONfoD6OUnITDM9xSBf8eVGKX/uxNR4DhxRXogu', 'test8@gmail.com', 'aaaaa', 'aaaaaaa'),
(14, 'egegeg', 'boriss', '$2y$10$Jg17SdBuQJ3kD5EsyKJpJOP/6ZOT1PpJdrTmrkN/RaDFMrka1D38S', 'test9@gmail.com', 'fef', 'eegegeg'),
(15, 'boris', 'saaaa', '$2y$10$.xnGWUkOIWP4DAGj7B6bIebdw2Ph0QDbUAx0NYzKMujOPy12/W.x.', 'test11@gmail.com', 'nouvelleadresse', '2021-12-28'),
(16, 'mdptest2', 'aaaaaaaa', '$2y$10$jc04OUIx5Fi9ChbPlDOpFecew4M.27Z9ao8y8nyO/AHCKVgO02Pne', 'a@gmail.com', 'fefef', '1989-07-05'),
(17, 'mdptest2', 'aaa', '$2y$10$nMgBW.wl87.PiA6AYLYqBuzwNzkRf4D8q7j6/2RF9OIQaJp.UNVdC', 'bbb@gmail.com', 'aaa', '1989-07-05'),
(18, 'mdptest2', 'boris', '$2y$10$IDyfe9rrjKZQbIVlrXfGpO6DnRoG3yFJsPhTvTO00qFVQdNz/W5kG', 'forgot.frealis@gmail.com', 'test', '1989-07-05'),
(19, 'adddd', 'ddddd', '$2y$10$F5JhKKvLtOA6MUrt9pZaIeE9k0b9p0.c1/vghMVjaANbyf1aJZ8C.', 'aaaaaaaaa@gmail.com', 'aaaa', '1989-07-05'),
(20, 'mdptest2', 'fefefe', '$2y$10$1uJkjf3e/G1p96gIV18Rx.oSSJyBmWMoKry4LCq6fjz9RDuOPa5Km', 'test78@gmail.com', 'fefe', '1989-07-05'),
(22, 'test2', 'test2', '$2y$10$ZosXkJGp1rAlhtEMTJNWE.0IfHeOe0EoXVpULz7npofuCDTKV0SVe', 'aaazzzaaa@gmail.com', 'efefe', '1989-07-05'),
(23, 'aaa', 'aaa', '$2y$10$COargSGmepqy7Spd2z9FS.VudcwAruVPqNBiQXZdU2S4ljeTgje/W', 'bis444aa444@gmail.com', 'aaa', '1989-07-05'),
(24, 'aaa', 'aaa', '$2y$10$LQoS9cZwdCd.Knzmtb0liOTWCME0ovG3wsQvV5dHw2jW3l/mJmRyS', 'baais444444@gmail.com', 'aaa', '1989-07-05'),
(25, 'aaa', 'aaa', '$2y$10$9ymE/jmVyZu4xyprRU.eRemnXIWstEzmmiNsWRRpoqdbJAbcsEQHe', 'fffszfegrhgrh@gmail.com', 'aaa', '1989-07-05'),
(26, 'admin', 'mdptest1', '$2y$10$nHmqm6lRRl/2P1P0j.9Oi.KgIyudwnbYUq50L0daPq/xB1F15SThC', 'admin@admin.com', 'admin', '1989-07-05'),
(27, 'coucou', 'boris', '$2y$10$GpOx5hhfRTCez.JRaQugWO19EXMB.KmFTXcaNDq4vAIKMbW08Liea', 'aaaa@gmail.aaaa', 'aaaaaaaaaaaaaaaaaa', '2021-12-28'),
(28, 'aaaaaaa', 'aaaa', '$2y$10$GMOp/dS26.YHKg0rC3GC/O7qR5uzeg1QNI3JUtNDrC73UE52U9oAu', 'aaa@b.com', 'aaa', '1989-07-05'),
(29, 'aaa', 'aaa', '$2y$10$mhToBdcm.4sxxOaVDZqDI.Gy.EiuCJ.HMdI7nSVo3yY2QRA.nxsfm', 'aaaaaaabaaaa@gmail.com', 'aaaa', '1989-07-05'),
(30, 'aaaaaaa', 'aaa', '$2y$10$BYmcUTHSezqQvrCUnY/U9u5zKtWXoMH5GEprAwPUhYBhXzH7nh9OO', 'bis4444a44@gmail.com', 'aaa', '1989-07-05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
