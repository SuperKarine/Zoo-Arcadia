mysqldump: [Warning] Using a password on the command line interface can be insecure.
-- MySQL dump 10.13  Distrib 8.4.3, for Linux (x86_64)
--
-- Host: localhost    Database: Arcadia
-- ------------------------------------------------------
-- Server version	8.4.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Animal`
--

DROP TABLE IF EXISTS `Animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Animal` (
  `idAnimal` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `race` varchar(255) DEFAULT NULL,
  `habitat` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `nourriture` varchar(255) DEFAULT NULL,
  `idHabitats` int DEFAULT NULL,
  `idimage` int DEFAULT NULL,
  PRIMARY KEY (`idAnimal`),
  KEY `idHabitats` (`idHabitats`),
  KEY `idimage` (`idimage`),
  CONSTRAINT `Animal_ibfk_1` FOREIGN KEY (`idHabitats`) REFERENCES `Habitats` (`idHabitats`),
  CONSTRAINT `Animal_ibfk_2` FOREIGN KEY (`idimage`) REFERENCES `Image` (`idImage`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Animal`
--

LOCK TABLES `Animal` WRITE;
/*!40000 ALTER TABLE `Animal` DISABLE KEYS */;
INSERT INTO `Animal` VALUES (1,'Bakari','zebres','Savane','2019-12-21',NULL,1,NULL),(2,'Kaya','zebres','Savane','2021-11-12',NULL,1,NULL),(3,'Zala','zebres','Savane','2011-02-15',NULL,1,NULL),(4,'Fara','zebres','Savane','2020-04-13',NULL,1,NULL),(5,'Goro','zebres','Savane','2017-05-25',NULL,1,NULL),(6,'Moba','zebres','Savane','2016-07-05',NULL,1,NULL),(7,'Nara','zebres','Savane','2015-08-09',NULL,1,NULL),(8,'Niko','zebres','Savane','2014-10-13',NULL,1,NULL),(9,'Lula','zebres','Savane','2013-11-22',NULL,1,NULL),(10,'Rano','zebres','Savane','2012-03-05',NULL,1,NULL),(11,'Bolou','lions','Savane','2010-12-04',NULL,2,NULL),(12,'Griffo','lions','Savane','2012-06-23',NULL,2,NULL),(13,'Koko','lions','Savane','2010-05-13',NULL,2,NULL),(14,'Lula','lions','Savane','2014-09-26',NULL,2,NULL),(15,'Swampi','lions','Savane','2008-03-24',NULL,2,NULL),(16,'Zara','lions','Savane','2018-07-05',NULL,2,NULL),(17,'Dito','pantheres','Savane','2012-11-15',NULL,3,NULL),(18,'Kopa','pantheres','Savane','2011-09-08',NULL,3,NULL),(19,'Fipo','girafes','Savane','2015-10-09',NULL,4,NULL),(20,'Noko','girafes','Savane','2012-06-13',NULL,4,NULL),(21,'Tali','girafes','Savane','2014-08-06',NULL,4,NULL),(22,'Goba','buffle','Savane','2006-12-05',NULL,5,NULL),(23,'Rafiki','buffle','Savane','2007-05-14',NULL,5,NULL),(24,'Rima','crocodiles','Marais','2011-10-10',NULL,7,NULL),(25,'Tambo','crocodiles','Marais','2010-08-03',NULL,7,NULL),(26,'Maki','flamants rose','Marais','2018-11-26',NULL,8,NULL),(27,'Lolo','flamants rose','Marais','2017-07-04',NULL,8,NULL),(28,'Jaro','singes','Jungle','2016-12-14',NULL,9,NULL),(29,'Kira','singes','Jungle','2024-01-17',NULL,9,NULL),(30,'Nabo','singes','Jungle','2019-06-05',NULL,9,NULL),(31,'Nabo','singes','Jungle','2018-03-11',NULL,9,NULL),(32,'Nao','singes','Jungle','2018-09-13',NULL,9,NULL),(33,'Sambo','singes','Jungle','2023-04-15',NULL,9,NULL),(34,'Zulu','singes','Jungle','2012-05-04',NULL,9,NULL),(35,'Oki','elephants','Savane','2011-02-14',NULL,6,NULL);
/*!40000 ALTER TABLE `Animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Animal_visiteurs`
--

DROP TABLE IF EXISTS `Animal_visiteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Animal_visiteurs` (
  `idAnimal` int DEFAULT NULL,
  `idVisiteur` int DEFAULT NULL,
  `dateVisite` date DEFAULT NULL,
  `commentaires` varchar(255) DEFAULT NULL,
  KEY `idAnimal` (`idAnimal`),
  KEY `idVisiteur` (`idVisiteur`),
  CONSTRAINT `Animal_visiteurs_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `Animal` (`idAnimal`),
  CONSTRAINT `Animal_visiteurs_ibfk_2` FOREIGN KEY (`idVisiteur`) REFERENCES `Visiteurs` (`idVisiteurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Animal_visiteurs`
--

LOCK TABLES `Animal_visiteurs` WRITE;
/*!40000 ALTER TABLE `Animal_visiteurs` DISABLE KEYS */;
INSERT INTO `Animal_visiteurs` VALUES (NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Animal_visiteurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Habitats`
--

DROP TABLE IF EXISTS `Habitats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Habitats` (
  `idHabitats` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `descriptionHabitat` varchar(255) DEFAULT NULL,
  `nomHabitat` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `animaux` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idHabitats`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Habitats`
--

LOCK TABLES `Habitats` WRITE;
/*!40000 ALTER TABLE `Habitats` DISABLE KEYS */;
INSERT INTO `Habitats` VALUES (1,'Savane',NULL,'La Plaine Doree',NULL,'zebres',NULL),(2,'Savane',NULL,'La Plaine Doree',NULL,'lions',NULL),(3,'Savane',NULL,'La Plaine Doree',NULL,'pantheres',NULL),(4,'Savane',NULL,'La Plaine Doree',NULL,'girafes',NULL),(5,'Savane',NULL,'La Plaine Doree',NULL,'buffle',NULL),(6,'Savane',NULL,'La Plaine Doree',NULL,'elephants',NULL),(7,'Marais',NULL,'Les Rivages Brumeux',NULL,'crocodiles',NULL),(8,'Marais',NULL,'Les Rivages Brumeux',NULL,'flamants rose',NULL),(9,'Jungle',NULL,'Le Recif emeraude',NULL,'singes',NULL);
/*!40000 ALTER TABLE `Habitats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Image`
--

DROP TABLE IF EXISTS `Image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Image` (
  `idImage` int NOT NULL AUTO_INCREMENT,
  `nomImage` varchar(255) DEFAULT NULL,
  `cheminImage` varchar(255) DEFAULT NULL,
  `tailleImage` int DEFAULT NULL,
  PRIMARY KEY (`idImage`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Image`
--

LOCK TABLES `Image` WRITE;
/*!40000 ALTER TABLE `Image` DISABLE KEYS */;
INSERT INTO `Image` VALUES (1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Sercices_visiteurs`
--

DROP TABLE IF EXISTS `Sercices_visiteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Sercices_visiteurs` (
  `idService` int DEFAULT NULL,
  `idVisiteur` int DEFAULT NULL,
  KEY `idService` (`idService`),
  KEY `idVisiteur` (`idVisiteur`),
  CONSTRAINT `Sercices_visiteurs_ibfk_1` FOREIGN KEY (`idService`) REFERENCES `Services` (`idServices`),
  CONSTRAINT `Sercices_visiteurs_ibfk_2` FOREIGN KEY (`idVisiteur`) REFERENCES `Visiteurs` (`idVisiteurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Sercices_visiteurs`
--

LOCK TABLES `Sercices_visiteurs` WRITE;
/*!40000 ALTER TABLE `Sercices_visiteurs` DISABLE KEYS */;
/*!40000 ALTER TABLE `Sercices_visiteurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Services`
--

DROP TABLE IF EXISTS `Services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Services` (
  `idServices` int NOT NULL AUTO_INCREMENT,
  `nomService` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idServices`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Services`
--

LOCK TABLES `Services` WRITE;
/*!40000 ALTER TABLE `Services` DISABLE KEYS */;
INSERT INTO `Services` VALUES (1,'restaurants'),(2,'visite guidee'),(3,'petit train');
/*!40000 ALTER TABLE `Services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Services_visiteurs`
--

DROP TABLE IF EXISTS `Services_visiteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Services_visiteurs` (
  `idService` int DEFAULT NULL,
  `idVisiteur` int DEFAULT NULL,
  KEY `idService` (`idService`),
  KEY `idVisiteur` (`idVisiteur`),
  CONSTRAINT `Services_visiteurs_ibfk_1` FOREIGN KEY (`idService`) REFERENCES `Services` (`idServices`),
  CONSTRAINT `Services_visiteurs_ibfk_2` FOREIGN KEY (`idVisiteur`) REFERENCES `Visiteurs` (`idVisiteurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Services_visiteurs`
--

LOCK TABLES `Services_visiteurs` WRITE;
/*!40000 ALTER TABLE `Services_visiteurs` DISABLE KEYS */;
INSERT INTO `Services_visiteurs` VALUES (1,1),(2,1),(3,1);
/*!40000 ALTER TABLE `Services_visiteurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Visiteurs`
--

DROP TABLE IF EXISTS `Visiteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Visiteurs` (
  `idVisiteurs` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idVisiteurs`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Visiteurs`
--

LOCK TABLES `Visiteurs` WRITE;
/*!40000 ALTER TABLE `Visiteurs` DISABLE KEYS */;
INSERT INTO `Visiteurs` VALUES (1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Visiteurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-21  1:52:20
