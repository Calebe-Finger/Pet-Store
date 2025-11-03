-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: meuprojeto
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `postagens`
--

DROP TABLE IF EXISTS `postagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `postagens` (
  `idPostagem` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `texto` varchar(1200) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `publico` varchar(45) NOT NULL,
  `criado_em` datetime DEFAULT NULL,
  PRIMARY KEY (`idPostagem`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postagens`
--

LOCK TABLES `postagens` WRITE;
/*!40000 ALTER TABLE `postagens` DISABLE KEYS */;
INSERT INTO `postagens` VALUES (2,1,'Quando eu digo que deixei de te amar\r\nÉ porque eu te amo\r\nQuando eu digo que não quero mais você\r\nÉ porque eu te quero\r\nEu tenho medo de te dar meu coração\r\nE confessar que eu estou em tuas mãos\r\nMas não posso imaginar\r\nO que vai ser de mim\r\nSe eu te perder um dia\r\n\r\nEu me afasto e me defendo de você\r\nMas depois me entrego\r\nFaço tipo, falo coisas que eu não sou\r\nMas depois eu nego\r\nMas a verdade\r\nÉ que eu sou louco por você\r\nE tenho medo de pensar em te perder\r\nEu preciso aceitar que não dá mais\r\nPra separar as nossas vidas\r\n\r\nE nessa loucura de dizer que não te quero\r\nVou negando as aparências\r\nDisfarçando as evidências\r\nMas pra que viver fingindo\r\nSe eu não posso enganar meu coração?\r\nEu sei que te amo!\r\n\r\nChega de mentiras\r\nDe negar o meu desejo\r\nEu te quero mais que tudo\r\nEu preciso do seu beijo\r\nEu entrego a minha vida\r\nPra você fazer o que quiser de mim\r\nSó quero ouvir você dizer que sim!\r\n\r\nDiz que é verdade, que tem saudade\r\nQue ainda você pensa muito em mim\r\nDiz que é verdade, que tem saudade\r\nQue ainda você quer viver pra mim','img_69089872bdc443.01180898.webp','Público','2025-11-03 12:56:34');
/*!40000 ALTER TABLE `postagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seguidos`
--

DROP TABLE IF EXISTS `seguidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seguidos` (
  `idUsuario` int(11) NOT NULL,
  `idSeguido` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seguidos`
--

LOCK TABLES `seguidos` WRITE;
/*!40000 ALTER TABLE `seguidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `seguidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'teste','teste@email.com','81dc9bdb52d04dc20036dbd8313ed055',''),(2,'fabio','fabio@email.com','a53bd0415947807bcb95ceec535820ee','img_69089557e4b356.45149695.pdf');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-11-03  9:47:33
