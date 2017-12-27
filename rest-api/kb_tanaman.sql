-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: nasrulha_kb_tanaman
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.17.10.1

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
-- Table structure for table `komoditas`
--

DROP TABLE IF EXISTS `komoditas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komoditas` (
  `id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `komoditas` varchar(256) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komoditas`
--

LOCK TABLES `komoditas` WRITE;
/*!40000 ALTER TABLE `komoditas` DISABLE KEYS */;
INSERT INTO `komoditas` VALUES ('0001','jagung');
/*!40000 ALTER TABLE `komoditas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skema_tanam`
--

DROP TABLE IF EXISTS `skema_tanam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skema_tanam` (
  `id_tanaman` varchar(20) CHARACTER SET latin1 NOT NULL,
  `seq` int(3) unsigned NOT NULL,
  `subjek` varchar(256) CHARACTER SET latin1 NOT NULL,
  `keterangan` text CHARACTER SET latin1,
  `durasi` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_tanaman`,`seq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skema_tanam`
--

LOCK TABLES `skema_tanam` WRITE;
/*!40000 ALTER TABLE `skema_tanam` DISABLE KEYS */;
INSERT INTO `skema_tanam` VALUES ('00010001',1,'Pengadaan bibit','',7),('00010001',2,'Persiapan media tanam','',14),('00010001',3,'Penanaman bibit','1 bibit dimasukkan ke dalam 1 lubang sedalam 15 s.d. 20cm',14),('00010001',4,'Penyulaman tanaman','Sesudah benih ditanam berumur 1 minggu, teliti perkembangan tanaman jagung manis Kamu. Ubahlah sebagian bibit yg tidak tumbuh prima dengan bibit yang baru untuk membuahkan pertumbuhantanaman yang seragam. Langkah menanam jagung manis pada step ini diberi nama sebagai tahap penyulaman tanaman.',14),('00010001',5,'Penyiangan dan pembumbunan tanaman','Sesudah tanaman berumur 2 minggu mulai sejak saat tanam, bersihkan rumput – rumput liar yang tumbuh di sekitar tanaman lewat cara dicabut memakai tangan ataupun dengan cangkul kecil.',14),('00010001',6,'Panen','Step pemanenan jagung manis beragam bergantung dari type varietas jagung manis yang Kamu tanam, suhu cuaca lingkungan tempat, dan ketinggian tanah tempat tempat juga ikut memastikan waktu pemanenan.',21),('00010002',1,'Pengadaan bibit','',7),('00010002',2,'Persiapan media tanam','',14),('00010002',3,'Penanaman bibit','1 bibit dimasukkan ke dalam 1 lubang sedalam 15 s.d. 20cm',14),('00010002',4,'Penyulaman tanaman','Sesudah benih ditanam berumur 1 minggu, teliti perkembangan tanaman jagung manis Kamu. Ubahlah sebagian bibit yg tidak tumbuh prima dengan bibit yang baru untuk membuahkan pertumbuhantanaman yang seragam. Langkah menanam jagung manis pada step ini diberi nama sebagai tahap penyulaman tanaman.',14),('00010002',5,'Penyiangan dan pembumbunan tanaman','Sesudah tanaman berumur 2 minggu mulai sejak saat tanam, bersihkan rumput – rumput liar yang tumbuh di sekitar tanaman lewat cara dicabut memakai tangan ataupun dengan cangkul kecil.',14),('00010002',6,'Panen','Step pemanenan jagung manis beragam bergantung dari type varietas jagung manis yang Kamu tanam, suhu cuaca lingkungan tempat, dan ketinggian tanah tempat tempat juga ikut memastikan waktu pemanenan.',14);
/*!40000 ALTER TABLE `skema_tanam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tanaman`
--

DROP TABLE IF EXISTS `tanaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tanaman` (
  `id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tanaman` varchar(256) CHARACTER SET latin1 NOT NULL,
  `temperatur` decimal(5,2) DEFAULT NULL,
  `kelembaban_udara` decimal(5,2) DEFAULT NULL,
  `ph_tanah` decimal(4,2) DEFAULT NULL,
  `kel_komoditas` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `est_biaya` decimal(10,2) DEFAULT NULL,
  `kebutuhan_nasional` int(3) DEFAULT NULL,
  `ketinggian_tempat` int(5) DEFAULT NULL,
  `curah_hujan` int(6) DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tanaman`
--

LOCK TABLES `tanaman` WRITE;
/*!40000 ALTER TABLE `tanaman` DISABLE KEYS */;
INSERT INTO `tanaman` VALUES ('00010001','Jagung Arjuna',25.00,-1.00,6.00,'0001',3000.00,7,1000,100,''),('00010002','Jagung Kalingga',25.00,-1.00,6.00,'0001',2500.00,7,1000,100,''),('00020003','Padi Cilosari',27.00,-1.00,5.00,'0002',2000.00,8,800,110,'');
/*!40000 ALTER TABLE `tanaman` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-27 12:41:34
