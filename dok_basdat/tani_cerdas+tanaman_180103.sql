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
INSERT INTO `tanaman` VALUES ('00010001','Jagung Arjuna',25.00,-1.00,6.00,'0001',3000.00,7,1000,100,''),('00010002','Jagung Kalingga',25.00,-1.00,6.00,'0001',2500.00,7,1000,100,''),('00020003','Padi Cilosari',27.00,-1.00,5.00,'0002',2000.00,8,800,105,'');
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

-- Dump completed on 2018-01-03 11:34:00
-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: nasrulha_tani_cerdas_db
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
-- Table structure for table `anggota_komunitas`
--

DROP TABLE IF EXISTS `anggota_komunitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggota_komunitas` (
  `id_komunitas` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `role` int(2) NOT NULL,
  KEY `id_komunitas` (`id_komunitas`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `anggota_komunitas_ibfk_1` FOREIGN KEY (`id_komunitas`) REFERENCES `komunitas_tani` (`id_komunitas`),
  CONSTRAINT `anggota_komunitas_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota_komunitas`
--

LOCK TABLES `anggota_komunitas` WRITE;
/*!40000 ALTER TABLE `anggota_komunitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `anggota_komunitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal_tanam`
--

DROP TABLE IF EXISTS `jadwal_tanam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal_tanam` (
  `id_tanaman` varchar(15) NOT NULL,
  `id_lahan` varchar(15) NOT NULL,
  `kegiatan` text NOT NULL,
  `durasi` int(3) NOT NULL,
  `tgl` date NOT NULL,
  `progress` varchar(50) NOT NULL,
  KEY `id_tanaman` (`id_tanaman`),
  KEY `id_lahan` (`id_lahan`),
  CONSTRAINT `jadwal_tanam_ibfk_1` FOREIGN KEY (`id_tanaman`) REFERENCES `tanaman` (`id_tanaman`),
  CONSTRAINT `jadwal_tanam_ibfk_2` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id_lahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal_tanam`
--

LOCK TABLES `jadwal_tanam` WRITE;
/*!40000 ALTER TABLE `jadwal_tanam` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal_tanam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keahlian_penyuluh`
--

DROP TABLE IF EXISTS `keahlian_penyuluh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keahlian_penyuluh` (
  `id_keahlian` varchar(15) NOT NULL,
  `keahlian` varchar(25) NOT NULL,
  PRIMARY KEY (`id_keahlian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keahlian_penyuluh`
--

LOCK TABLES `keahlian_penyuluh` WRITE;
/*!40000 ALTER TABLE `keahlian_penyuluh` DISABLE KEYS */;
/*!40000 ALTER TABLE `keahlian_penyuluh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komentar` (
  `id_komentar` varchar(15) NOT NULL,
  `id_komentar_ref` varchar(15) NOT NULL,
  `id_konsultasi` varchar(15) NOT NULL,
  `pesan` text NOT NULL,
  `id_user` varchar(15) NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `id_konsultasi` (`id_konsultasi`),
  CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komunitas_tani`
--

DROP TABLE IF EXISTS `komunitas_tani`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komunitas_tani` (
  `id_komunitas` varchar(15) NOT NULL,
  `nama_komunitas` varchar(50) NOT NULL,
  `tgl_dibentuk` date NOT NULL,
  PRIMARY KEY (`id_komunitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komunitas_tani`
--

LOCK TABLES `komunitas_tani` WRITE;
/*!40000 ALTER TABLE `komunitas_tani` DISABLE KEYS */;
/*!40000 ALTER TABLE `komunitas_tani` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `konsultasi`
--

DROP TABLE IF EXISTS `konsultasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `konsultasi` (
  `id_konsultasi` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `id_komunitas` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  PRIMARY KEY (`id_konsultasi`),
  KEY `id_komunitas` (`id_komunitas`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_komunitas`) REFERENCES `komunitas_tani` (`id_komunitas`),
  CONSTRAINT `konsultasi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konsultasi`
--

LOCK TABLES `konsultasi` WRITE;
/*!40000 ALTER TABLE `konsultasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `konsultasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lahan`
--

DROP TABLE IF EXISTS `lahan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lahan` (
  `id_lahan` varchar(15) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `longlat` varchar(30) NOT NULL,
  `luas` double NOT NULL,
  `temperatur` double NOT NULL,
  `curah_hujan` double NOT NULL,
  `tekstur` varchar(20) NOT NULL,
  `ph` double NOT NULL,
  `drainase` varchar(25) NOT NULL,
  `kedalaman_tanah` varchar(10) NOT NULL,
  `lereng` double NOT NULL,
  `ketebalan_gambut` double NOT NULL,
  `id_user` varchar(15) NOT NULL,
  PRIMARY KEY (`id_lahan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `lahan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lahan`
--

LOCK TABLES `lahan` WRITE;
/*!40000 ALTER TABLE `lahan` DISABLE KEYS */;
INSERT INTO `lahan` VALUES ('IDL-6992','Jawa Barat','Bogor','Ciawi','-6.6781537,106.8768453',500,24,90,'pasir medium',6,'6','500',15,50,'petani'),('IDL-9725','Jawa Barat','Bogor','Ciawi','-6.6781537,106.8768453',10000,26,95,'bepasir halus',5,'7','1000',10,100,'petani');
/*!40000 ALTER TABLE `lahan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penyuluh`
--

DROP TABLE IF EXISTS `penyuluh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penyuluh` (
  `id_keahlian` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  KEY `id_keahlian` (`id_keahlian`),
  KEY `penyuluh_ibfk_1` (`id_user`),
  CONSTRAINT `penyuluh_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_penyuluh` (`id_user`),
  CONSTRAINT `penyuluh_ibfk_2` FOREIGN KEY (`id_keahlian`) REFERENCES `keahlian_penyuluh` (`id_keahlian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penyuluh`
--

LOCK TABLES `penyuluh` WRITE;
/*!40000 ALTER TABLE `penyuluh` DISABLE KEYS */;
/*!40000 ALTER TABLE `penyuluh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tanaman`
--

DROP TABLE IF EXISTS `tanaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tanaman` (
  `id_tanaman` varchar(15) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `kelompok_tanaman` varchar(25) DEFAULT NULL,
  `akar` varchar(25) DEFAULT NULL,
  `biji` varchar(25) DEFAULT NULL,
  `daun` varchar(25) DEFAULT NULL,
  `batang` varchar(25) DEFAULT NULL,
  `kategori_komoditas` varchar(50) DEFAULT NULL,
  `ref_api` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tanaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tanaman`
--

LOCK TABLES `tanaman` WRITE;
/*!40000 ALTER TABLE `tanaman` DISABLE KEYS */;
/*!40000 ALTER TABLE `tanaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `no_telp` text NOT NULL,
  `no_identitas` int(16) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `alamat_jalan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('petani','nasrul','Nasrul Hamid','b666a4de4bb6931d1045067a25443fa3','08114217152',2147483647,'Sulawesi Selatan','Luwu Timur','Nuha','Jl Cempaka G1 No 18 VDM Sorowako','nasrul.hamid@gmail.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_penyuluh`
--

DROP TABLE IF EXISTS `user_penyuluh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_penyuluh` (
  `id_user` varchar(15) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`),
  CONSTRAINT `user_penyuluh_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_penyuluh`
--

LOCK TABLES `user_penyuluh` WRITE;
/*!40000 ALTER TABLE `user_penyuluh` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_penyuluh` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-03 11:34:00
