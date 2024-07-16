-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2024 at 09:42 AM
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
-- Database: `aquarium`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `categories` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titre` text NOT NULL,
  `texte` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `categories`, `titre`, `texte`, `photo`) VALUES
(1, 'Materiels', 'Installation d\'un aquarium', 'Vous débutez en aquariophilie ?\r\nVous souhaitez installer un aquarium pour vous lancer ? <br>\r\nAvant de commencer quoi que ce soit, il est important de choisir soigneusement l’endroit où vous souhaitez effectuer son installation.<br>\r\nPour profiter au maximum de votre aquarium, il est important de le placer dans une pièce spacieuse et lumineuse. Installez votre aquarium dans la pièce où vous passez le plus de temps pour en profiter ! Assurez-vous qu’une prise électrique est à proximité. Évitez de placer vos fenêtres en plein soleil, car cela peut augmenter la température de l’eau et favoriser la croissance des algues. Si votre climat est plutôt froid, évitez d’ouvrir les portes extérieures, car les courants d’air pourraient refroidir l’eau. Positionnez votre aquarium sur une surface plane, dans une zone peu fréquentée, loin des bouches de chauffage/climatisation et des appareils électroniques.<br>\r\n\r\n', 'images/materiels/aquarium.png'),
(2, 'Poissons', 'Scalaire', 'Le scalaire, aussi connu sous le nom scientifique de Pterophyllum scalare, est un poisson d\'aquarium qui suscite l\'intérêt et l\'admiration des passionnés depuis de nombreuses années. Avec son allure majestueuse et sa beauté époustouflante, le scalaire est un véritable joyau aquatique qui ajoute une touche d\'élégance à n\'importe quel aquarium.<br>\r\nDans ce guide complet, nous vous dévoilerons tout ce que vous devez savoir sur le scalaire, depuis son origine dans les eaux douces de l\'Amazonie, jusqu\'à ses caractéristiques physiques et comportementales uniques. Nous aborderons également les aspects essentiels de son entretien, de son alimentation et de sa reproduction, afin de vous aider à offrir le meilleur environnement possible à ces magnifiques créatures.<br>\r\n', 'images/poissons/scalaire.png'),
(3, 'Poissons', 'Guppy', 'Le Guppy est un poisson originaire d’Amérique du Sud, qui a été découvert vers 1860. Il est dit « vivipare », car il donne naissance à de petits poissons vivants. Il a longtemps été utilisé contre les moustiques, car les Guppys raffolent de leurs larves. Ils ont progressivement été introduits dans les animaleries et ont été longtemps reproduits et croisés pour arriver désormais au Guppys que l’on connaît aujourd’hui, affichant presque toutes les couleurs existantes, avec différents motifs et de nombreux styles de nageoires.<br>\r\nActuellement, c’est un poisson incontournable que l’on trouve systématiquement dans le commerce aquariophile. Le prix d’un Guppy reste assez bas et donc accessible pour tous les aquariophiles même débutants. Mais certaines souches de Guppys peuvent aussi coûter très cher chez certains éleveurs renommés spécialisés sur ce poisson.\r\n', 'images/poissons/guppy.png'),
(4, 'Poissons', 'Crevettes d\'eau douce', 'Les crevettes d\'eau douce sont devenues très populaires parmi les amateurs d\'aquariophilie. Elles sont appréciées pour leur beauté et leur comportement fascinant. Au début des années 90, les premières crevettes d\'aquarium ont fait leur apparition dans les animaleries. Au départ, leur rôle était principalement d\'entretenir les aquariums et leur fonction décorative était secondaire. Au fil du temps, on a pu observer l\'émergence de nouvelles espèces et variétés plus séduisantes sur le marché des aquariums.<br>\r\nLes crevettes ne sont plus considérées comme une \"rareté\". Depuis, leur renommée auprès des amateurs d\'aquariophiles n\'a cessé de se développer. Maintenant, les crustacés ne sont plus seulement un élément supplémentaire dans l\'aquarium, où les poissons occupent une place prépondérante. L\'aquarium à crevettes est un nouveau genre d\'aquarium conçu pour accueillir différentes espèces de crevettes d\'aquarium.', 'images/poissons/crevette.png'),
(5, 'Poissons', 'Platy ou Xiphophorus', 'Les poissons d\'aquarium sont des créatures fascinantes qui apportent vie et beauté à nos habitats aquatiques domestiques. Parmi eux, le Platy, également connu sous le nom scientifique de Xiphophorus maculatus, est une espèce populaire et appréciée des amateurs d\'aquariophilie. Avec son apparence colorée et son tempérament pacifique, ce poisson est idéal pour les débutants et offre une expérience captivante pour ceux qui sont passionnés par l\'art de l\'élevage de poissons.<br>\r\n\r\nDans ce guide complet, nous explorerons tout ce que vous devez savoir sur le Platy - Xiphophorus maculatus, depuis ses origines jusqu\'à son entretien en captivité. Vous découvrirez comment choisir les bons compagnons d\'aquarium, comment créer un environnement optimal pour son bien-être, et comment prendre soin de sa nutrition et de sa reproduction. Que vous soyez un aquariophile débutant ou expérimenté, ce guide vous sera précieux pour maximiser le bonheur et la santé de votre Platy.', 'images/poissons/platty.png'),
(6, 'Poissons', 'Cardinalis', 'Ce petit poisson est originaire d\'Amérique du Sud, plus précisément de l\'Amazonie où il utilise ses couleurs vives pour ne pas perdre la trace de son banc dans des eaux où les matières organiques sont nombreuses, entraînant une couleur ambrée et sombre de l\'eau.<br>\r\nTrès proche du néon bleu, il s\'en distingue par la ligne rouge plus étendue qui arrive jusqu\'au départ de la nageoire caudale et une taille légèrement plus grande et plus effilée. Sa maintenance en aquarium est facilitée par le fait qu\'il est plus tolérant vis-à-vis des températures qui peuvent être plus élevées. À l\'âge adulte, Paracheirodon axelrodi mesure environ 5 cm, autant pour la femelle que le mâle. Le mâle est svelte par rapport à la femelle, et sa ligne bleue serait plus rectiligne que celle de la femelle', 'images/poissons/cardinalis.png'),
(7, 'Poissons', 'Tetra citron', 'Le Tétra citron est l\'un des Tétras les plus trapus, contrastant avec des Tétras au corps fusiforme tel que le Tétra néon, la forme du corps de profil est celle d\'un losange. La livrée d\'un adulte est jaune transparent, avec un lustre nacrés émanant des écailles. La nageoire dorsale et anale du poisson sont marqués en noir et jaune: précisément, la nageoire anale est hyaline, avec une marge extérieure noire, la partie antérieure de trois ou quatre rayons étant d\'un intense, jaune citron, tandis que la nageoire dorsale est principalement en noir avec un jaune. La nageoire caudale est le plus souvent hyaline, mais, des spécimens (en particulier les mâles) acquiert un lustre bleu métallique. Les nageoires pectorales sont hyalines, tandis que les nageoires pelviennes sont jaunes translucides (les mâles alpha sont particulièrement). L\'œil est également remarquable : la moitié supérieure de l\'iris étant d\'un rouge intense, chez certains spécimens il est rouge rubis. La couleur de cette partie de l\'iris est un indicateur de la santé du poisson: si cette coloration rouge disparaît ou, pire devient grise, le poisson est atteint d\'une maladie plus ou moins grave. Comme beaucoup de characins, le Tétra citron possède une nageoire adipeuse. Cette nageoire peut avoir une bordure noire, en particulier chez les mâles, mais ce n\'est pas un dimorphisme sexuel fiable.', 'images/poissons/tetracitron.png'),
(8, 'Plantes', 'Cabomba Aquatica', 'Plante d\'aquarium très populaire à cause de son aspect très feuillu.\r\n<br>\r\nC\'est la variété des Cabomba qui exige le moins de lumière, mais qui peut avoir du mal à se maintenir dans les aquariums faiblement éclairés.\r\n<br>\r\nSi le cas se présente, la remplacer par la Limnophila sessiliflora qui demande encore moins de lumière.\r\n<br>\r\nTrès décorative en petits buissons.\r\n<br>\r\nConsommée comme légume dans les régions où elle pousse à l\'état naturel. \r\n<br>\r\nNos plantes d\'aquarium sont reconnues depuis 2008 pour leur très grande qualité.\r\n<br>\r\nLa variété \"aquatica\" remplace depuis 2016 la variété \"caroliniana\" interdite de commercialisation en Europe.\r\n<br>\r\nLa cabomba aquatica est originaire d\'Amérique du Sud, première des cabomba à être décrite scientifiquement (Fusée Aublet, 1775), cette variété propose de jolies fleurs jaunes vives si on lui permet d\'accéder à la surface de l\'eau.', 'images/plantes/cabomba.png'),
(9, 'Plantes', 'Echinodorus x barthii', 'Belle plante aquatique solitaire et décorative dans les grands aquariums.\r\n<br>\r\nEn grandissant, les feuilles changent de couleur, passant du rouge foncé au vert profond.\r\n<br>\r\nBelle pigmentation si la plante bénéficie d\'un éclairement intense et de micro-organismes nutritifs en suffisance.\r\n<br>\r\nSol riche et apports de CO2 recommandés.\r\n<br>\r\nPeut priver de lumière les plantes basses. Il est donc important de la tailler de temps en temps.\r\n<br>\r\nAutrefois vendue sous le nom commercial de \"Double-rouge\'\'.\r\n<br>\r\nNos plantes d\'aquarium sont reconnues depuis 2008 pour leur très grande qualité.', 'images/plantes/echinodorus.png'),
(10, 'Plantes', 'Hygrophila SP Lancea', 'Superbe Hygrophila pouvant former de très beaux bosquets allant du vert au rouge en fonction de l\'éclairage.\r\n<br>\r\nD\'une pousse lente mais d\'un aspect robuste, l\'hygrophila sp araguaia / lancea est une plante d\'aquarium élégante qui peu convenir aux aquariophiles débutants comme aux spécialistes.\r\n<br>\r\nCommercialisée depuis 2011 sur le marché aquariophile par Tropica, l\'hygrophila sp lancea est originaire du Rio Araguaia au Brésil.', 'images/plantes/hygrophila.png'),
(11, 'Materiels', 'Kit de Surveillance de la Concentration de CO2', 'Le CO2 Drop Checker est un kit de surveillance de la concentration de CO2. Il est fabriqué en verre pour une fiabilité maximale, essentiel pour maintenir des niveaux optimaux de CO2 dans votre aquarium.\r\n<br>\r\nCaractéristiques & Avantages :\r\n<br>\r\nFiabilité maximale : Fabriqué en verre, garantissant une précision et une durabilité supérieures.\r\n<br>\r\nSolution préfabriquée : Inclus une solution de vérification de CO2 de 15ml, aucun mélange ou préparation nécessaire.\r\n<br>\r\nAccessoires inclus : Livré avec une ventouse pour une installation facile et sécurisée dans l\'aquarium.\r\n<br>\r\nChangement de couleur indicatif : Utilise un réactif de pH pour indiquer les niveaux de CO2 avec un changement de couleur, facilitant la compréhension de la concentration de CO2.\r\n<br>\r\nDimensions idéales : Diamètre extérieur de 3 cm et hauteur de 5,5 cm, parfaitement adapté à tous types d\'aquariums.', 'images/materiels/co2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
