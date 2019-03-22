CREATE DATABASE  IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `mydb`;
-- MySQL dump 10.13  Distrib 8.0.11, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `idconsole` int(11) NOT NULL,
  PRIMARY KEY (`idcategoria`),
  KEY `fk_con_cat_idx` (`idconsole`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria`
--

LOCK TABLES `tbl_categoria` WRITE;
/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
INSERT INTO `tbl_categoria` VALUES (1,'aventura',0),(2,'corrida',0),(3,'luta',0),(4,'carros',0),(5,'motos',0);
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_console`
--

DROP TABLE IF EXISTS `tbl_console`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_console` (
  `idconsole` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`idconsole`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_console`
--

LOCK TABLES `tbl_console` WRITE;
/*!40000 ALTER TABLE `tbl_console` DISABLE KEYS */;
INSERT INTO `tbl_console` VALUES (1,'xbox one'),(2,'xbox 360'),(3,'nintendo switch'),(4,'nintendo UI'),(5,'PS3'),(6,'PS4');
/*!40000 ALTER TABLE `tbl_console` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_loja`
--

DROP TABLE IF EXISTS `tbl_loja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_loja` (
  `idloja` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `endmaps` mediumtext NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idloja`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_loja`
--

LOCK TABLES `tbl_loja` WRITE;
/*!40000 ALTER TABLE `tbl_loja` DISABLE KEYS */;
INSERT INTO `tbl_loja` VALUES (1,'smart games ltda','Leopoldina de camargo','Itapevi','Itapevi','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6334171096014!2d-46.93439230000001!3d-23.545683799999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf068557ea4ae7%3A0xbe7ae7cd50813441!2sIta+Shopping+Centro!5e0!3m2!1spt-BR!2sbr!4v1552944311216','SP'),(2,'smart Games Ltda.','Joao Pires ','Centro','Itapevi','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3657.641089267789!2d-46.93370600000001!3d-23.545408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb0262830eccc80f!2sItapevi!5e0!3m2!1spt-BR!2sbr!4v1552944468656','SP'),(3,'smart Games Ltda.','Elton silva ','Centro','Jandira','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4350.242383460401!2d-46.9006260301959!3d-23.528789419622484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0154039cb55b%3A0xadf34a919f156950!2sSENAI+Jandira+-+Professor+Vicente+Amato!5e0!3m2!1spt-BR!2sbr!4v1553263258907','SP');
/*!40000 ALTER TABLE `tbl_loja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produto`
--

DROP TABLE IF EXISTS `tbl_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `desenvolvedora` varchar(45) NOT NULL,
  `descricao` longtext NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idconsole` int(11) NOT NULL,
  `idloja` int(11) NOT NULL,
  `foto` text,
  PRIMARY KEY (`idproduto`),
  KEY `fk_produto_categoria_idx` (`idcategoria`),
  KEY `fk_produto_console_idx` (`idconsole`),
  KEY `fk_produto_loja_idx` (`idloja`),
  CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `tbl_categoria` (`idcategoria`),
  CONSTRAINT `fk_produto_console` FOREIGN KEY (`idconsole`) REFERENCES `tbl_console` (`idconsole`),
  CONSTRAINT `fk_produto_loja` FOREIGN KEY (`idloja`) REFERENCES `tbl_loja` (`idloja`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto`
--

LOCK TABLES `tbl_produto` WRITE;
/*!40000 ALTER TABLE `tbl_produto` DISABLE KEYS */;
INSERT INTO `tbl_produto` VALUES (1,'Assassin´s 1','Playground Games','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',3,6,1,'ps42.jpg'),(2,'Forza Horizon 4','Playnay Games','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',1,1,2,'123048418_2SZ.jpg'),(3,'Assassin´s','Playhold','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',1,6,3,'ps4.jpg'),(4,'Farcy','Playnau','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',1,1,2,'one.jpg'),(5,'Farcy 2','Kikoa','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',1,1,3,'one.jpg'),(6,'Forza','AE GAMES','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',2,2,1,'123048418_2SZ.jpg'),(7,'witcher','HOLD','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',2,5,3,'ps3.jpg'),(8,'witcher 2','chaves','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',3,5,2,'ps3.jpg'),(9,'Assassin´s','wordl','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',4,6,2,'ps4.jpg'),(10,'crash','juju','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',1,3,3,'nitendo.jpeg'),(11,'crash 2 ','luia','As temporadas dinâmicas mudam tudo no maior festival automotivo do mundo. Vá sozinho ou junte-se a outros para explorar a bela e histórica Grã-Bretanha em um mundo aberto compartilhado. Colecione, modifique e dirija mais de 450 carros. Corra, faça acrobacias, crie e explore – escolha o seu próprio caminho para se tornar um Horizon Superstar.',2,4,2,'nitendo.jpeg');
/*!40000 ALTER TABLE `tbl_produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-22 11:19:58
