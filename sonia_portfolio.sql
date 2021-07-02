-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2021 at 10:01 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonia_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_begin` date NOT NULL,
  `project_end` date NOT NULL,
  `project_context` text NOT NULL,
  `project_specs` text NOT NULL,
  `project_githublink` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL,
  `project_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_title`, `project_begin`, `project_end`, `project_context`, `project_specs`, `project_githublink`, `project_link`, `project_picture`) VALUES
(1, 'Projet Â« Les mÃ©tiers du numÃ©rique :  Beeweb Â»', '2021-04-05', '2021-05-03', 'Site web prÃ©sentant les diffÃ©rents mÃ©tiers du numÃ©rique. Projet conÃ§u et dÃ©veloppÃ© en collaboration avec Tiavina Ralandison Ã  l\'Access Code School de Dijon.', 'Un site web prÃ©sentant diffÃ©rents mÃ©tiers du numÃ©rique, rÃ©alisÃ© en collaboration avec Tiavina Ralandison.', 'https://github.com/Rolland42/beeweb', 'https://soniar.promo-68.codeur.online/beeweb/pages/', 'beeweb.png'),
(2, 'Projet Â« AccessibilitÃ© NumÃ©rique : Blindness Â»', '2021-05-03', '2021-05-31', 'Blindness traite de la dÃ©ficience visuelle. Nous souhaitons vous sensibiliser sur ce sujet Ã  travers la perspective d\'un malvoyant ou d\'un aveugle.\r\n\r\nVous comprendrez ainsi ce que cela implique d\'Ãªtre dÃ©ficient visuel, aujourd\'hui sur Internet. Vous prendrez connaissance des obstacles rÃ©currents. Des outils indispensables a la navigation ainsi que des pratiques Ã  adopter pour faciliter l\'expÃ©rience utilisateur.', 'Le site est entiÃ¨rement parcourable a l\'audio, il a Ã©tÃ© conÃ§u pour cet usage. Nous vous recommandons vivement l\'expÃ©rience. Pour cela tÃ©lÃ©chargez JAWS, appuyez sur la touche F7 de votre clavier et naviguez avec la touche tab et les flÃ¨ches du clavier.', 'https://github.com/Fire-Owl/Blindness', 'https://soniar.promo-68.codeur.online/blindness/pages/', 'blindness.png'),
(3, 'Projet Â« Landing Page : Hero-Header Â»', '2021-03-22', '2021-04-02', 'IntÃ©gration rÃ©alisÃ©e dans le cadre de ma formation Access Code School : premier projet, dÃ©veloppÃ© en autonomie sur la base d\'une maquette libre de droit conÃ§ue par un graphiste professionnel.', 'HTML / CSS /JavaScript', 'https://github.com/Rolland42/Hero-Header', 'https://soniar.promo-68.codeur.online/hero-header/', 'hero-header.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'bdebot-dev', 'b.debot@codeur.online', '$2y$10$Fa8fYN1PYPd/oNayldKX5eRXukpb4GolATLfHRl6R9mNOSwpUS3v6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
