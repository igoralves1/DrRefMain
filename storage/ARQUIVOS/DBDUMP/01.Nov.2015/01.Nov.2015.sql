-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: dr2016
-- ------------------------------------------------------
-- Server version	5.6.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `PK_ADDRESS` int(11) NOT NULL AUTO_INCREMENT,
  `FK_CITY` int(11) NOT NULL,
  `CELL1` varchar(15) DEFAULT NULL,
  `CELL2` varchar(15) DEFAULT NULL,
  `TELL1` varchar(15) DEFAULT NULL,
  `TELL2` varchar(15) DEFAULT NULL,
  `FAX1` varchar(15) DEFAULT NULL,
  `FAX2` varchar(15) DEFAULT NULL,
  `URL` varchar(45) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL,
  `LATITUDE` decimal(10,8) DEFAULT NULL,
  `LONGITUDE` decimal(11,8) DEFAULT NULL,
  `DESCRIPTION` tinytext,
  `NAME` varchar(100) DEFAULT NULL,
  `NBCIVIC` varchar(10) DEFAULT NULL,
  `NBAPART` varchar(10) DEFAULT NULL,
  `NBOFFICE` varchar(10) DEFAULT NULL,
  `STREET` varchar(45) DEFAULT NULL,
  `ZIP` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PK_ADDRESS`),
  KEY `FKCITY_idx` (`FK_CITY`),
  CONSTRAINT `FKCITY` FOREIGN KEY (`FK_CITY`) REFERENCES `city` (`PK_CITY`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `FKPROVINCE` int(11) NOT NULL,
  `PK_CITY` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) NOT NULL,
  `GEOCODIGO` varchar(45) DEFAULT NULL,
  `LATITUDE` decimal(10,8) DEFAULT NULL,
  `LONGITUDE` decimal(11,8) DEFAULT NULL,
  PRIMARY KEY (`PK_CITY`),
  KEY `FKPROVINCE_idx` (`FKPROVINCE`),
  CONSTRAINT `FKPROVINCE` FOREIGN KEY (`FKPROVINCE`) REFERENCES `province` (`PK_PROVINCE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code` (
  `PK_CODE` bigint(20) NOT NULL AUTO_INCREMENT,
  `CODE` varchar(450) NOT NULL,
  `USED` varchar(1) NOT NULL DEFAULT '1' COMMENT '0-USED\n1-NOT USED',
  `FATHER` bigint(20) NOT NULL,
  `SON` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`PK_CODE`),
  KEY `FKFATPROFF_idx` (`FATHER`),
  CONSTRAINT `FKFATPROFF` FOREIGN KEY (`FATHER`) REFERENCES `professional` (`PK_USERT`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consulta` (
  `PK_CONSULTA` bigint(20) NOT NULL AUTO_INCREMENT,
  `FK_PROFISSAO_PROCEDIMENTOS` int(11) NOT NULL,
  `FK_CONVENIO_PROF` bigint(20) DEFAULT NULL,
  `FK_PACIENTE` bigint(20) NOT NULL,
  PRIMARY KEY (`PK_CONSULTA`),
  KEY `FFKKPROCEDIMMENTT_idx` (`FK_PROFISSAO_PROCEDIMENTOS`),
  KEY `FKPPACCIENT_idx` (`FK_PACIENTE`),
  KEY `FKPROFADCONVFK_idx` (`FK_CONVENIO_PROF`),
  CONSTRAINT `FFKKPROCEDIMMENTT` FOREIGN KEY (`FK_PROFISSAO_PROCEDIMENTOS`) REFERENCES `profissao_procedimentos` (`FK_PROFESSION`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKPPACCIENT` FOREIGN KEY (`FK_PACIENTE`) REFERENCES `paciente` (`PK_PACIENTE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKPROFADCONVFK` FOREIGN KEY (`FK_CONVENIO_PROF`) REFERENCES `prof_addr_conv` (`PK_PROFADDRESS_CONVENIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `convenio_saude`
--

DROP TABLE IF EXISTS `convenio_saude`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convenio_saude` (
  `FK_PROVINCE` int(11) NOT NULL,
  `PK_CONVENIO_SAUDE` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(200) NOT NULL,
  `STATUS_ACTIVE` varchar(1) DEFAULT '1' COMMENT '0-INACTIVE\n1-ACTIVE',
  `NOTE_SYSTEM` text,
  `CNPJ` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PK_CONVENIO_SAUDE`),
  KEY `FKKPROVCONV_idx` (`FK_PROVINCE`),
  CONSTRAINT `FKKPROVCONV` FOREIGN KEY (`FK_PROVINCE`) REFERENCES `province` (`PK_PROVINCE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `PK_COUNTRY` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) NOT NULL,
  `ISO_CODE` varchar(3) NOT NULL COMMENT 'https://countrycode.org/',
  `GEOCODE` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PK_COUNTRY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `educational_level`
--

DROP TABLE IF EXISTS `educational_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `educational_level` (
  `PK_EDUCATIONAL_LEVEL` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(80) NOT NULL,
  PRIMARY KEY (`PK_EDUCATIONAL_LEVEL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `PK_PACIENTE` bigint(20) NOT NULL,
  PRIMARY KEY (`PK_PACIENTE`),
  CONSTRAINT `FFKKUSERTPAC` FOREIGN KEY (`PK_PACIENTE`) REFERENCES `usert` (`PK_USERT`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `prof_addr_conv`
--

DROP TABLE IF EXISTS `prof_addr_conv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prof_addr_conv` (
  `FK_CONVENIOSAUDE` int(11) NOT NULL,
  `PK_PROFADDRESS_CONVENIO` bigint(20) NOT NULL AUTO_INCREMENT,
  `FK_PROF_ADDRESS` bigint(20) NOT NULL,
  `DATA` date NOT NULL,
  `STATUS_ACTIVE` varchar(1) DEFAULT '1' COMMENT '0-INACTIVE\n1-ACTIVE',
  `NOTE_PRIVATE` text,
  `NOTE_PUBLIC` text,
  PRIMARY KEY (`PK_PROFADDRESS_CONVENIO`),
  KEY `FFKFFPROFADDRS_idx` (`FK_PROF_ADDRESS`),
  KEY `FKKFCONVFK_idx` (`FK_CONVENIOSAUDE`),
  CONSTRAINT `FFKFFPROFADDRS` FOREIGN KEY (`FK_PROF_ADDRESS`) REFERENCES `professional_address` (`PK_PROFESSIONAL_ADDRESS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKKFCONVFK` FOREIGN KEY (`FK_CONVENIOSAUDE`) REFERENCES `convenio_saude` (`PK_CONVENIO_SAUDE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `profession`
--

DROP TABLE IF EXISTS `profession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profession` (
  `PK_PROFESSION` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) DEFAULT NULL,
  `CIENCIA` varchar(50) DEFAULT NULL,
  `SETOR` varchar(45) DEFAULT NULL,
  `CONSPROFISSIONAL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PK_PROFESSION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `profession_province`
--

DROP TABLE IF EXISTS `profession_province`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profession_province` (
  `FK_PROVINCE` int(11) NOT NULL,
  `FK_PROFESSION` int(11) NOT NULL,
  `PK_PROF_PROVINCE` int(11) NOT NULL AUTO_INCREMENT,
  `SIGLA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PK_PROF_PROVINCE`),
  KEY `FFKPROVINCE_idx` (`FK_PROVINCE`),
  KEY `FKKPROFESSION\ON_idx` (`FK_PROFESSION`),
  CONSTRAINT `FFKPROVINCE` FOREIGN KEY (`FK_PROVINCE`) REFERENCES `province` (`PK_PROVINCE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKKPROFESSIONON` FOREIGN KEY (`FK_PROFESSION`) REFERENCES `profession` (`PK_PROFESSION`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `professional`
--

DROP TABLE IF EXISTS `professional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional` (
  `FK_ROFESSION` int(11) NOT NULL,
  `PK_USERT` bigint(20) NOT NULL,
  `URL` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`PK_USERT`),
  KEY `FFKPROFESSION_idx` (`FK_ROFESSION`),
  CONSTRAINT `FFKPROFESSION` FOREIGN KEY (`FK_ROFESSION`) REFERENCES `profession` (`PK_PROFESSION`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FFKUSERT` FOREIGN KEY (`PK_USERT`) REFERENCES `usert` (`PK_USERT`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `professional_address`
--

DROP TABLE IF EXISTS `professional_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional_address` (
  `FK_PROFESIONAL` bigint(20) NOT NULL,
  `PK_PROFESSIONAL_ADDRESS` bigint(20) NOT NULL AUTO_INCREMENT,
  `FK_ADDRESS` int(11) NOT NULL,
  `DT_DATE` date NOT NULL,
  `NOTE_PRIVATE` text,
  `NOTE_PUBLIC` text,
  `NOME_CLINICA` varchar(450) DEFAULT NULL,
  `CNPJ` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PK_PROFESSIONAL_ADDRESS`),
  KEY `FFDDRESS_idx` (`FK_ADDRESS`),
  KEY `FFKPROFFESIONAL_idx` (`FK_PROFESIONAL`),
  CONSTRAINT `FFDDRESS` FOREIGN KEY (`FK_ADDRESS`) REFERENCES `address` (`PK_ADDRESS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FFKPROFFESIONAL` FOREIGN KEY (`FK_PROFESIONAL`) REFERENCES `professional` (`PK_USERT`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `professional_educ_level`
--

DROP TABLE IF EXISTS `professional_educ_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional_educ_level` (
  `PK_PROFESSIONAL_EDUC_LEVEL` bigint(20) NOT NULL AUTO_INCREMENT,
  `FK_EDUCLEVEL` int(11) NOT NULL,
  `FK_PROFESSIONAL` bigint(20) NOT NULL,
  `DT_START` date NOT NULL,
  `DT_END` date NOT NULL,
  PRIMARY KEY (`PK_PROFESSIONAL_EDUC_LEVEL`),
  KEY `FKKPROOEDUU_idx` (`FK_EDUCLEVEL`),
  KEY `FKKFPROFO_idx` (`FK_PROFESSIONAL`),
  CONSTRAINT `FKKFPROFO` FOREIGN KEY (`FK_PROFESSIONAL`) REFERENCES `professional` (`PK_USERT`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKKPROOEDUU` FOREIGN KEY (`FK_EDUCLEVEL`) REFERENCES `educational_level` (`PK_EDUCATIONAL_LEVEL`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `professional_specialization`
--

DROP TABLE IF EXISTS `professional_specialization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional_specialization` (
  `PK_PROFESSIONAL_SPECIALIZATION` int(11) NOT NULL AUTO_INCREMENT,
  `FK_PROFESSIONAL` bigint(20) NOT NULL,
  `FK_SPECIALIZATION` int(11) NOT NULL,
  PRIMARY KEY (`PK_PROFESSIONAL_SPECIALIZATION`),
  KEY `FFFKPROFESSIONL_idx` (`FK_PROFESSIONAL`),
  KEY `FKKKSPECIALIZATION_idx` (`FK_SPECIALIZATION`),
  CONSTRAINT `FFFKPPROFESSIONL` FOREIGN KEY (`FK_PROFESSIONAL`) REFERENCES `professional` (`PK_USERT`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKKKSPECIALIZATION` FOREIGN KEY (`FK_SPECIALIZATION`) REFERENCES `specialization` (`PK_SPECIALIZATION`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `profissao_procedimentos`
--

DROP TABLE IF EXISTS `profissao_procedimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profissao_procedimentos` (
  `FK_PROFESSION` int(11) NOT NULL,
  `PK_PROFISSAO_PROCEDIMENTOS` int(11) NOT NULL AUTO_INCREMENT,
  `PROCEDIMENTO_FATHER` int(11) DEFAULT NULL,
  `NOME` varchar(200) NOT NULL,
  PRIMARY KEY (`PK_PROFISSAO_PROCEDIMENTOS`),
  KEY `FKKKPROFESSIONN_idx` (`FK_PROFESSION`),
  CONSTRAINT `FKKKPROFESSIONN` FOREIGN KEY (`FK_PROFESSION`) REFERENCES `profession` (`PK_PROFESSION`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `profissional_permit`
--

DROP TABLE IF EXISTS `profissional_permit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profissional_permit` (
  `PK_PROFISSIONAL_PERMIT` int(11) NOT NULL AUTO_INCREMENT,
  `FK_PROFESSION_PROVINCE` int(11) NOT NULL,
  `FK_PROFESSIONAL` int(11) NOT NULL,
  `PERMIT` varchar(20) NOT NULL,
  PRIMARY KEY (`PK_PROFISSIONAL_PERMIT`),
  KEY `FKKKPROFESSIONAL_idx` (`FK_PROFESSIONAL`),
  KEY `FKKPROFPROVINCE_idx` (`FK_PROFESSION_PROVINCE`),
  CONSTRAINT `FKKKPROFESSIONALL` FOREIGN KEY (`FK_PROFESSIONAL`) REFERENCES `professional` (`FK_ROFESSION`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKKPROFPROVINCE` FOREIGN KEY (`FK_PROFESSION_PROVINCE`) REFERENCES `profession_province` (`PK_PROF_PROVINCE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `province`
--

DROP TABLE IF EXISTS `province`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `province` (
  `FK_COUNTRY` int(11) NOT NULL,
  `PK_PROVINCE` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(45) DEFAULT NULL,
  `GECODIGO` varchar(45) DEFAULT NULL,
  `LATITUDE` decimal(10,8) DEFAULT NULL,
  `LONGITUDE` decimal(11,8) DEFAULT NULL,
  PRIMARY KEY (`PK_PROVINCE`),
  KEY `FKCOUNTR_idx` (`FK_COUNTRY`),
  CONSTRAINT `FKCOUNTR` FOREIGN KEY (`FK_COUNTRY`) REFERENCES `country` (`PK_COUNTRY`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `specialization`
--

DROP TABLE IF EXISTS `specialization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialization` (
  `FK_PROFESSION` int(11) NOT NULL,
  `PK_SPECIALIZATION` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(80) DEFAULT NULL,
  `DESCIPTION` text,
  PRIMARY KEY (`PK_SPECIALIZATION`),
  KEY `FKKKPROFESSION_idx` (`FK_PROFESSION`),
  CONSTRAINT `FKKKPROFESSION` FOREIGN KEY (`FK_PROFESSION`) REFERENCES `profession` (`PK_PROFESSION`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usert`
--

DROP TABLE IF EXISTS `usert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usert` (
  `PK_USERT` bigint(20) NOT NULL AUTO_INCREMENT,
  `FATER` bigint(20) NOT NULL DEFAULT '0',
  `FK_USERTYPE` int(11) NOT NULL,
  `F_NAME` varchar(100) NOT NULL,
  `L_NAME` varchar(100) NOT NULL,
  `SEX` enum('F','M') DEFAULT NULL,
  `UNIQUE_EMAIL` varchar(80) NOT NULL,
  `UNIQUE_PASSWORD` varchar(20) NOT NULL,
  `DT_START` date NOT NULL,
  `STATUS_ACTIVE` varchar(1) NOT NULL DEFAULT '0' COMMENT '0-INACTIVE',
  PRIMARY KEY (`PK_USERT`),
  KEY `FKUSERTYPE_idx` (`FK_USERTYPE`),
  CONSTRAINT `FKUSERTYPE` FOREIGN KEY (`FK_USERTYPE`) REFERENCES `usertype` (`PK_USERTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usert_adrress`
--

DROP TABLE IF EXISTS `usert_adrress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usert_adrress` (
  `PK_USERT_ADRRESS` bigint(20) NOT NULL,
  `FK_ADDRESS` int(11) NOT NULL,
  `FKuSERT` bigint(20) NOT NULL,
  PRIMARY KEY (`PK_USERT_ADRRESS`),
  KEY `FFKKFADDRESS_idx` (`FK_ADDRESS`),
  KEY `FFKKUSERT_idx` (`FKuSERT`),
  CONSTRAINT `FFKKFADDRESS` FOREIGN KEY (`FK_ADDRESS`) REFERENCES `address` (`PK_ADDRESS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FFKKUSERT` FOREIGN KEY (`FKuSERT`) REFERENCES `usert` (`PK_USERT`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertype` (
  `PK_USERTYPE` int(11) NOT NULL AUTO_INCREMENT,
  `USERTYPE` varchar(30) NOT NULL,
  PRIMARY KEY (`PK_USERTYPE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-01 17:39:39
