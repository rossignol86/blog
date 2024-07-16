-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2024 at 08:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exojuillet`
--

-- --------------------------------------------------------

--
-- Table structure for table `aquarium`
--

CREATE TABLE `aquarium` (
  `id` int NOT NULL,
  `titre` text NOT NULL,
  `texte` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aquarium`
--

INSERT INTO `aquarium` (`id`, `titre`, `texte`, `photo`) VALUES
(1, 'Installation d\'un aquarium', 'Vous débutez en aquariophilie ?\r\nVous souhaitez installer un aquarium pour vous lancer ? <br>\r\nAvant de commencer quoi que ce soit, il est important de choisir soigneusement l’endroit où vous souhaitez effectuer son installation.<br>\r\nPour profiter au maximum de votre aquarium, il est important de le placer dans une pièce spacieuse et lumineuse. Installez votre aquarium dans la pièce où vous passez le plus de temps pour en profiter ! Assurez-vous qu’une prise électrique est à proximité. Évitez de placer vos fenêtres en plein soleil, car cela peut augmenter la température de l’eau et favoriser la croissance des algues. Si votre climat est plutôt froid, évitez d’ouvrir les portes extérieures, car les courants d’air pourraient refroidir l’eau. Positionnez votre aquarium sur une surface plane, dans une zone peu fréquentée, loin des bouches de chauffage/climatisation et des appareils électroniques.<br>\r\n\r\n', 'images/aquarium.png'),
(2, 'Le scalaire', 'Le scalaire, aussi connu sous le nom scientifique de Pterophyllum scalare, est un poisson d\'aquarium qui suscite l\'intérêt et l\'admiration des passionnés depuis de nombreuses années. Avec son allure majestueuse et sa beauté époustouflante, le scalaire est un véritable joyau aquatique qui ajoute une touche d\'élégance à n\'importe quel aquarium.<br>\r\nDans ce guide complet, nous vous dévoilerons tout ce que vous devez savoir sur le scalaire, depuis son origine dans les eaux douces de l\'Amazonie, jusqu\'à ses caractéristiques physiques et comportementales uniques. Nous aborderons également les aspects essentiels de son entretien, de son alimentation et de sa reproduction, afin de vous aider à offrir le meilleur environnement possible à ces magnifiques créatures.<br>\r\n', 'images/scalaire.png'),
(3, 'Le Guppy', 'Le Guppy est un poisson originaire d’Amérique du Sud, qui a été découvert vers 1860. Il est dit « vivipare », car il donne naissance à de petits poissons vivants. Il a longtemps été utilisé contre les moustiques, car les Guppys raffolent de leurs larves. Ils ont progressivement été introduits dans les animaleries et ont été longtemps reproduits et croisés pour arriver désormais au Guppys que l’on connaît aujourd’hui, affichant presque toutes les couleurs existantes, avec différents motifs et de nombreux styles de nageoires.<br>\r\nActuellement, c’est un poisson incontournable que l’on trouve systématiquement dans le commerce aquariophile. Le prix d’un Guppy reste assez bas et donc accessible pour tous les aquariophiles même débutants. Mais certaines souches de Guppys peuvent aussi coûter très cher chez certains éleveurs renommés spécialisés sur ce poisson.<br>\r\n', 'images/guppy.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aquarium`
--
ALTER TABLE `aquarium`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aquarium`
--
ALTER TABLE `aquarium`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
