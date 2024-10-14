-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: represa
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `idareas` int(11) NOT NULL AUTO_INCREMENT,
  `idoficina` int(11) NOT NULL,
  `idgerencia` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  `nombre` varchar(160) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idareas`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistencias`
--

DROP TABLE IF EXISTS `asistencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asistencias` (
  `idasistencia` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `horasalida` time DEFAULT NULL,
  `tiempo` double DEFAULT NULL,
  PRIMARY KEY (`idasistencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistencias`
--

LOCK TABLES `asistencias` WRITE;
/*!40000 ALTER TABLE `asistencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `asistencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `idbitacora` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `horasalida` time DEFAULT NULL,
  `tiempo` double DEFAULT NULL,
  PRIMARY KEY (`idbitacora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `idcargo` int(11) NOT NULL AUTO_INCREMENT,
  `idarea` int(11) NOT NULL,
  `idoficina` int(11) NOT NULL,
  `idgerencia` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  `nombrecargo` varchar(150) NOT NULL,
  `fecCreate` datetime DEFAULT NULL,
  PRIMARY KEY (`idcargo`),
  UNIQUE KEY `nombrecargo_UNIQUE` (`nombrecargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funciones`
--

DROP TABLE IF EXISTS `funciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funciones` (
  `idfuncion` int(11) NOT NULL AUTO_INCREMENT,
  `idareas` int(11) NOT NULL,
  `idoficina` int(11) NOT NULL,
  `idgerencia` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  `idpersonal` int(11) NOT NULL,
  `funcion` varchar(150) NOT NULL,
  `unimed` varchar(20) NOT NULL,
  `cantidad` double NOT NULL,
  `frecuencia` varchar(45) NOT NULL,
  `fecCreate` datetime DEFAULT NULL,
  `fecUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`idfuncion`),
  UNIQUE KEY `funcion_UNIQUE` (`funcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funciones`
--

LOCK TABLES `funciones` WRITE;
/*!40000 ALTER TABLE `funciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `funciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallito`
--

DROP TABLE IF EXISTS `gallito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallito` (
  `idgallito` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time NOT NULL,
  `volumenCrecidas` double NOT NULL DEFAULT 0,
  `nivelEmbalse` double NOT NULL DEFAULT 0,
  `volumenTotal` double NOT NULL DEFAULT 0,
  `volumenUtil` double NOT NULL DEFAULT 0,
  `caudalTotal` double NOT NULL DEFAULT 0,
  `ingresoMiraPaltas` double NOT NULL DEFAULT 0,
  `ingresoCaudalPaltas` double NOT NULL DEFAULT 0,
  `ingresoMiraYonan` double NOT NULL DEFAULT 0,
  `ingresoCaudalYonan` double NOT NULL DEFAULT 0,
  `salidaMiraE2` double NOT NULL DEFAULT 0,
  `salidaCaudalE2` double NOT NULL DEFAULT 0,
  `salidaMiraMinicentral` double NOT NULL DEFAULT 0,
  `salidaCaudalMinicentral` double NOT NULL DEFAULT 0,
  `salidaMiraCGC` double NOT NULL DEFAULT 0,
  `salidaCaudalCGC` double NOT NULL DEFAULT 0,
  `salidaMiraCTorta` varchar(10) NOT NULL DEFAULT '0',
  `salidaCaudalCTorta` double NOT NULL DEFAULT 0,
  `nivelEmbalseCompensacion` double NOT NULL DEFAULT 0,
  `volumenTotalEmbalse` double NOT NULL DEFAULT 0,
  `aberturaComp1` double NOT NULL DEFAULT 0,
  `caudalComp1` double NOT NULL DEFAULT 0,
  `aberturaComp2` double NOT NULL DEFAULT 0,
  `caudalComp2` double NOT NULL DEFAULT 0,
  `fecCreate` datetime NOT NULL,
  `idpersonal` int(11) NOT NULL,
  `laminacionGallito` double NOT NULL,
  PRIMARY KEY (`idgallito`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallito`
--

LOCK TABLES `gallito` WRITE;
/*!40000 ALTER TABLE `gallito` DISABLE KEYS */;
INSERT INTO `gallito` VALUES (1,'00:00:00',0,0,0,-68.012,0.102,0,0,0,0,0,0,0,0,0.08,0.042,'s/m',0.06,0,0,0,0,0,0,'2023-09-28 18:38:56',1000,0),(2,'00:00:00',0,0,0,-68.012,0.102,0,0,0,0,0,0,0,0,0.08,0.042,'s/m',0.06,0,0,0,0,0,0,'2023-09-28 18:40:19',1000,0),(3,'10:00:00',1,3,4,-64.012,20,5,6874.368,6,7012.355,7,1909.864,8,509.539,0.08,0.042,'s/m',0.06,21,22,23,24,25,26,'2023-10-14 19:19:38',1000,2),(4,'09:00:00',1,3,4,-64.012,1909.966,5,6874.368,6,7012.355,7,1909.864,8,509.539,0.08,0.042,'s/m',0.06,9,10,11,12,13,14,'2023-10-14 19:22:47',1000,2),(5,'09:00:00',1,3,4,-64.012,1909.966,5,6874.368,6,7012.355,7,1909.864,8,509.539,0.08,0.042,'s/m',0.06,9,10,11,12,13,14,'2023-10-14 19:24:46',1000,2),(6,'18:00:00',0,3,170,101.988,0.102,0,0,0,0,0,0,0,0,0.08,0.042,'s/m',0.06,0,0,0,0,0,0,'2023-10-14 19:27:15',1000,0),(7,'14:00:00',0,0,21,-47.012,24.471,225,64538944456.789,1,6.383,0.74,24.369,12,1272.789,0.08,0.042,'s/m',0.06,0,0,0,0,0,0,'2023-10-16 17:36:50',1000,0),(8,'05:00:00',2,1,2,-66.012,0.102,3,797.193,2,95.801,0,0,0,0,0.08,0.042,'s/m',0.06,0,0,0,0,0,0,'2023-12-13 15:42:08',18,1.5);
/*!40000 ALTER TABLE `gallito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gerencias`
--

DROP TABLE IF EXISTS `gerencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gerencias` (
  `idgerencia` int(11) NOT NULL AUTO_INCREMENT,
  `idinstitucion` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  PRIMARY KEY (`idgerencia`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gerencias`
--

LOCK TABLES `gerencias` WRITE;
/*!40000 ALTER TABLE `gerencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `gerencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instituciones`
--

DROP TABLE IF EXISTS `instituciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instituciones` (
  `idinstitucion` int(11) NOT NULL AUTO_INCREMENT,
  `nombreinst` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `ruc` char(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pagweb` varchar(80) NOT NULL,
  `fecCreateInst` date NOT NULL,
  `nomDocumento` varchar(150) NOT NULL,
  `fecCreate` datetime NOT NULL,
  `fecUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`idinstitucion`),
  UNIQUE KEY `nombreinst_UNIQUE` (`nombreinst`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instituciones`
--

LOCK TABLES `instituciones` WRITE;
/*!40000 ALTER TABLE `instituciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `instituciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jefesarea`
--

DROP TABLE IF EXISTS `jefesarea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jefesarea` (
  `idjefearea` int(11) NOT NULL AUTO_INCREMENT,
  `idarea` int(11) NOT NULL,
  `idoficina` int(11) NOT NULL,
  `idgerencia` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  `idpersonal` int(11) NOT NULL,
  PRIMARY KEY (`idjefearea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jefesarea`
--

LOCK TABLES `jefesarea` WRITE;
/*!40000 ALTER TABLE `jefesarea` DISABLE KEYS */;
/*!40000 ALTER TABLE `jefesarea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jequetepeque`
--

DROP TABLE IF EXISTS `jequetepeque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jequetepeque` (
  `idjequetepeque` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time DEFAULT NULL,
  `alturamira` double NOT NULL DEFAULT 0,
  `nivelembalse` double NOT NULL DEFAULT 0,
  `ah1` double NOT NULL DEFAULT 0,
  `caudal1` double NOT NULL DEFAULT 0,
  `ah2` double NOT NULL DEFAULT 0,
  `caudal2` double NOT NULL DEFAULT 0,
  `ah3` double NOT NULL DEFAULT 0,
  `caudal3` double NOT NULL DEFAULT 0,
  `ah4` double NOT NULL DEFAULT 0,
  `caudal4` double NOT NULL DEFAULT 0,
  `caudalTotalCRadial` double NOT NULL DEFAULT 0,
  `miraCanalEntrada` double NOT NULL DEFAULT 0,
  `ahCanalEntrada` double NOT NULL DEFAULT 0,
  `caudalCanalEntrada` double NOT NULL DEFAULT 0,
  `ahCanalEntrada2` double NOT NULL DEFAULT 0,
  `caudalCanalEntrada2` double NOT NULL DEFAULT 0,
  `caudalTotalCanalEntrada` double NOT NULL DEFAULT 0,
  `miraRevestido` double NOT NULL DEFAULT 0,
  `caudalRevestido` double NOT NULL DEFAULT 0,
  `canalAutorizadoRevestido` double NOT NULL DEFAULT 0,
  `fecCreate` datetime DEFAULT NULL,
  `idpersonal` int(11) NOT NULL,
  PRIMARY KEY (`idjequetepeque`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jequetepeque`
--

LOCK TABLES `jequetepeque` WRITE;
/*!40000 ALTER TABLE `jequetepeque` DISABLE KEYS */;
INSERT INTO `jequetepeque` VALUES (1,'00:00:00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2023-09-29 15:43:49',1000),(2,'07:00:00',1,2,3,4,5,6,7,8,9,10,11,12,12,14,15,16,17,18,19,20,'2023-10-14 21:06:07',1000);
/*!40000 ALTER TABLE `jequetepeque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `nivusu` tinyint(2) NOT NULL DEFAULT 3,
  `chkusu` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idlogin`),
  UNIQUE KEY `nomusu_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,1,'uno@uno.com','202cb962ac59075b964b07152d234b70',2,1),(2,2,'edgar@uno.com','202cb962ac59075b964b07152d234b70',1,1),(3,18,'tres@uno.com','202cb962ac59075b964b07152d234b70',2,1),(4,19,'test1@antares.com','81dc9bdb52d04dc20036dbd8313ed055',2,1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficinas`
--

DROP TABLE IF EXISTS `oficinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oficinas` (
  `idoficina` int(11) NOT NULL AUTO_INCREMENT,
  `idgerencia` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  `nombre` varchar(160) NOT NULL,
  `sigla` varchar(50) DEFAULT NULL,
  `fecCreate` datetime DEFAULT NULL,
  `fecUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`idoficina`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficinas`
--

LOCK TABLES `oficinas` WRITE;
/*!40000 ALTER TABLE `oficinas` DISABLE KEYS */;
/*!40000 ALTER TABLE `oficinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(80) NOT NULL,
  `direccion` varchar(145) DEFAULT NULL,
  `dni` char(8) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `fecCreate` datetime DEFAULT NULL,
  `fecUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`idpersonal`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'EDGAR','APAZA CHOQUE','MASCULINO','935017466','1986-04-15','dos@uno.com','JR.  COLOMBIA 135','40023521','public/img/person2.png','2023-10-31 14:01:30','2023-10-31 22:22:01'),(2,'Administrado','Sistema','Masculino','9','2023-09-12','admn@uno.com','1','1','public/img/person2.png',NULL,NULL),(18,'MARIA','SALAS SALAS','FEMENINO','988751256','1956-05-18','tres@uno.com','URB. LOS CLAVELES 8282','0125689','public/img/person2.png','2023-11-01 09:20:02','2023-11-01 09:20:02'),(19,'ASDFASD','DFASDFASDF','MASCULINO','4534534534','1980-03-03','test1@antares.com','','34534534','public/img/celluloid-shot0004.jpg','2023-11-29 18:47:12','2023-11-29 18:47:12');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `talambozana`
--

DROP TABLE IF EXISTS `talambozana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `talambozana` (
  `idtalambo` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time NOT NULL,
  `nivelembalse1` double NOT NULL,
  `compuerta4` double NOT NULL DEFAULT 0,
  `compuerta5` double NOT NULL DEFAULT 0,
  `compuerta6` double NOT NULL DEFAULT 0,
  `miracompuertaTalambo` double NOT NULL DEFAULT 0,
  `caudalcompuertaTalambo` double NOT NULL DEFAULT 0,
  `compuerta1` double NOT NULL DEFAULT 0,
  `compuerta2` double NOT NULL DEFAULT 0,
  `compuerta3` double NOT NULL DEFAULT 0,
  `miracompuertaGuadalupe` double NOT NULL DEFAULT 0,
  `caudalcompuertaGuadalupe` double NOT NULL DEFAULT 0,
  `compu1` double NOT NULL DEFAULT 0,
  `compu2` double NOT NULL DEFAULT 0,
  `compu3` double NOT NULL DEFAULT 0,
  `compu4` double NOT NULL DEFAULT 0,
  `compu5` double NOT NULL DEFAULT 0,
  `compu6` double NOT NULL DEFAULT 0,
  `comptas` double NOT NULL DEFAULT 0,
  `mirapez` double NOT NULL DEFAULT 0,
  `caudalpez` double NOT NULL DEFAULT 0,
  `miraEscLim` double NOT NULL DEFAULT 0,
  `caudalEscLim` double NOT NULL DEFAULT 0,
  `miraBarrajo` double NOT NULL DEFAULT 0,
  `caudalBarrajo` double NOT NULL DEFAULT 0,
  `fecCreate` datetime DEFAULT NULL,
  `miraTalamboG` double NOT NULL,
  `caudalTalambozana` double DEFAULT NULL,
  `salidaTalambo` double NOT NULL,
  `idpersonal` int(11) NOT NULL,
  PRIMARY KEY (`idtalambo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `talambozana`
--

LOCK TABLES `talambozana` WRITE;
/*!40000 ALTER TABLE `talambozana` DISABLE KEYS */;
INSERT INTO `talambozana` VALUES (1,'00:00:00',175.4,0,0,0,1.415,11.908,0,0,0,0,0,0,0,0,0,0,0,1.175,0,0,0.5,10.189,0,0,'2023-09-28 19:06:15',0,NULL,5,1000),(2,'08:00:00',175.4,0,0,0,11.75,366.868,0,0,0,5.6,148.54,0,0,0,0,0,0,1.175,0,0,0.5,10.189,0,0,'2023-10-14 21:03:37',15,NULL,531.408,1000),(3,'08:00:00',175.4,0,0,0,11.75,366.868,0,0,0,5.6,148.54,0,0,0,0,0,0,1.175,0,0,0.5,10.189,0,0,'2023-10-14 21:04:01',15,NULL,531.408,1000),(4,'08:00:00',175.4,0,0,0,11.75,366.868,0,0,0,5.6,148.54,0,0,0,0,0,0,1.175,0,0,0.5,10.189,0,0,'2023-10-14 21:04:34',15,NULL,531.408,1000),(5,'08:00:00',175.4,0,0,0,11.75,366.868,0,0,0,5.6,148.54,0,0,0,0,0,0,1.175,0,0,0.5,10.189,0,0,'2023-10-14 21:05:31',15,NULL,531.408,1000),(6,'17:00:00',175.4,40,5,6,12,379.592,10,2,3,14,852.776,1,2,3,4,5,6,1.175,7,8,0.5,10.189,9,10,'2023-10-16 09:35:04',11,12,1244.368,1000),(7,'17:00:00',175.4,4,5,6,12,379.592,1,2,3,13,740.37,11,22,33,44,55,66,1.175,7,8,0.5,10.189,9,10,'2023-10-16 10:02:31',11,12,1131.962,1000);
/*!40000 ALTER TABLE `talambozana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valvulas`
--

DROP TABLE IF EXISTS `valvulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valvulas` (
  `idvalvulas` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time DEFAULT NULL,
  `nivelEmbalse` double NOT NULL DEFAULT 0,
  `aberturaValvula` double NOT NULL DEFAULT 0,
  `caudalValvula` double NOT NULL DEFAULT 0,
  `caudalTotalValvula` double NOT NULL DEFAULT 0,
  `aberturaValvula2` double NOT NULL DEFAULT 0,
  `caudalValvula2` double NOT NULL DEFAULT 0,
  `miraAliviadero` double NOT NULL DEFAULT 0,
  `embalseAliviadero` double NOT NULL DEFAULT 0,
  `fecCreate` datetime DEFAULT NULL,
  `idpersonal` int(11) NOT NULL,
  PRIMARY KEY (`idvalvulas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valvulas`
--

LOCK TABLES `valvulas` WRITE;
/*!40000 ALTER TABLE `valvulas` DISABLE KEYS */;
INSERT INTO `valvulas` VALUES (1,'00:00:00',0,0,0,0,0,0,0,0,'2023-09-29 15:54:18',1000),(2,'08:00:00',1,2,3,4,5,6,7,8,'2023-10-14 21:06:50',1000),(3,'19:00:00',12,15,16,17,18,19,20,21,'2023-10-16 12:12:09',1000),(4,'00:00:00',0,0,0,0,0,0,0,0,'2023-10-16 17:54:02',1000);
/*!40000 ALTER TABLE `valvulas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-17 19:22:40
