-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 12, 2022 at 02:50 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `devstips`
--

-- --------------------------------------------------------

--
-- Table structure for table `Astuces`
--

CREATE TABLE `Astuces` (
  `idAstuce` int(11) NOT NULL,
  `contentAstuce` varchar(255) NOT NULL,
  `descriptionAstuce` text NOT NULL,
  `specificationAstuce` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Astuces`
--

INSERT INTO `Astuces` (`idAstuce`, `contentAstuce`, `descriptionAstuce`, `specificationAstuce`) VALUES
(1, 'TestAstuce', 'Astuce', 'HTML');

-- --------------------------------------------------------

--
-- Table structure for table `Categorie`
--

CREATE TABLE `Categorie` (
  `idCategorie` int(11) NOT NULL,
  `nameLanguage` varchar(255) NOT NULL,
  `validCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Categorie`
--

INSERT INTO `Categorie` (`idCategorie`, `nameLanguage`, `validCategorie`) VALUES
(1, 'HTML', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Code`
--

CREATE TABLE `Code` (
  `idCode` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contentCode` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `specifications` text NOT NULL,
  `idNote` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `idAstuce` int(11) NOT NULL,
  `tableau_comptabilité` text,
  `docOfficielle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='3';

--
-- Dumping data for table `Code`
--

INSERT INTO `Code` (`idCode`, `titre`, `contentCode`, `description`, `specifications`, `idNote`, `idCategorie`, `idAstuce`, `tableau_comptabilité`, `docOfficielle`) VALUES
(1, '', 'Hello World', 'Code pour Hello World', 'Affichage Hello World\r\nHTML Standard (HTML)', 1, 1, 1, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `Commentaires`
--

CREATE TABLE `Commentaires` (
  `idCommentaire` int(11) NOT NULL,
  `contentCommentaire` varchar(255) NOT NULL,
  `idCode` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Commentaires`
--

INSERT INTO `Commentaires` (`idCommentaire`, `contentCommentaire`, `idCode`, `idUser`) VALUES
(1, 'Le code de base par excellence', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ExempleCode`
--

CREATE TABLE `ExempleCode` (
  `idExempleCode` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `idCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ExempleCode`
--

INSERT INTO `ExempleCode` (`idExempleCode`, `content`, `idCode`) VALUES
(1, 'Hello World, le code le plus commun et basique pour l\'affichage', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Note`
--

CREATE TABLE `Note` (
  `idNote` int(11) NOT NULL,
  `idCode` int(11) NOT NULL,
  `validNote` tinyint(1) NOT NULL,
  `numberNote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Note`
--

INSERT INTO `Note` (`idNote`, `idCode`, `validNote`, `numberNote`) VALUES
(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Snippet`
--

CREATE TABLE `Snippet` (
  `idSnippet` int(11) NOT NULL,
  `contentSnippet` varchar(255) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Snippet`
--

INSERT INTO `Snippet` (`idSnippet`, `contentSnippet`, `idCategorie`) VALUES
(1, 'Test Snippet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `addressmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `pseudo`, `addressmail`) VALUES
(1, 'Ulysse', 'ulysseperret@orange.fr'),
(2, 'Nikolla', 'nikola.marinkovic.ort@gmail.com '),
(3, 'Baptiste', 'baptistedantas@orange.fr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Astuces`
--
ALTER TABLE `Astuces`
  ADD PRIMARY KEY (`idAstuce`);

--
-- Indexes for table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Indexes for table `Code`
--
ALTER TABLE `Code`
  ADD PRIMARY KEY (`idCode`),
  ADD KEY `code_1` (`idCategorie`),
  ADD KEY `code_2` (`idNote`);

--
-- Indexes for table `Commentaires`
--
ALTER TABLE `Commentaires`
  ADD PRIMARY KEY (`idCommentaire`),
  ADD KEY `commentaires_1` (`idUser`),
  ADD KEY `commentaires_2` (`idCode`);

--
-- Indexes for table `ExempleCode`
--
ALTER TABLE `ExempleCode`
  ADD KEY `exemplecode_1` (`idCode`);

--
-- Indexes for table `Note`
--
ALTER TABLE `Note`
  ADD PRIMARY KEY (`idNote`);

--
-- Indexes for table `Snippet`
--
ALTER TABLE `Snippet`
  ADD PRIMARY KEY (`idSnippet`),
  ADD KEY `snippet_1` (`idCategorie`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Astuces`
--
ALTER TABLE `Astuces`
  MODIFY `idAstuce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Code`
--
ALTER TABLE `Code`
  MODIFY `idCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Commentaires`
--
ALTER TABLE `Commentaires`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Note`
--
ALTER TABLE `Note`
  MODIFY `idNote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Snippet`
--
ALTER TABLE `Snippet`
  MODIFY `idSnippet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Astuces`
--
ALTER TABLE `Astuces`
  ADD CONSTRAINT `astuces_1` FOREIGN KEY (`idAstuce`) REFERENCES `Code` (`idCode`);

--
-- Constraints for table `Code`
--
ALTER TABLE `Code`
  ADD CONSTRAINT `code_1` FOREIGN KEY (`idCategorie`) REFERENCES `Categorie` (`idCategorie`),
  ADD CONSTRAINT `code_2` FOREIGN KEY (`idNote`) REFERENCES `Note` (`idNote`);

--
-- Constraints for table `Commentaires`
--
ALTER TABLE `Commentaires`
  ADD CONSTRAINT `commentaires_1` FOREIGN KEY (`idUser`) REFERENCES `Users` (`id`),
  ADD CONSTRAINT `commentaires_2` FOREIGN KEY (`idCode`) REFERENCES `Code` (`idCode`);

--
-- Constraints for table `ExempleCode`
--
ALTER TABLE `ExempleCode`
  ADD CONSTRAINT `exemplecode_1` FOREIGN KEY (`idCode`) REFERENCES `Code` (`idCode`);

--
-- Constraints for table `Snippet`
--
ALTER TABLE `Snippet`
  ADD CONSTRAINT `snippet_1` FOREIGN KEY (`idCategorie`) REFERENCES `Categorie` (`idCategorie`);