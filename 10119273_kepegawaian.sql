-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: 10119273_kepegawaian
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

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
-- Table structure for table `cabang`
--

DROP TABLE IF EXISTS `cabang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cabang` (
  `kode_cabang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nama_cabang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`kode_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cabang`
--

LOCK TABLES `cabang` WRITE;
/*!40000 ALTER TABLE `cabang` DISABLE KEYS */;
INSERT INTO `cabang` VALUES ('BDG71','Cabang Bandung Utara'),('BLI21','Cabang Bali'),('JKT21','CABANG JAKARTA'),('KL221','Kalimanatn'),('LBG21','Cabang Lembang');
/*!40000 ALTER TABLE `cabang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departemen`
--

DROP TABLE IF EXISTS `departemen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departemen` (
  `kode_departemen` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nama_departemen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`kode_departemen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departemen`
--

LOCK TABLES `departemen` WRITE;
/*!40000 ALTER TABLE `departemen` DISABLE KEYS */;
INSERT INTO `departemen` VALUES ('D001','Junior Marketing'),('D002','HRD'),('D004','Akunting'),('D005','IT'),('D033','Produksi'),('D1111','Warehouse'),('HK001','Kesehatan');
/*!40000 ALTER TABLE `departemen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan` (
  `kode_jabatan` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nama_jabatan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`kode_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` VALUES ('D001','Direktur Utama'),('J002','Manajer'),('J003','Direktur Keuangan'),('J004','Direktur Personalia'),('J005','Karyawan Kontrak'),('J006','Karyawan Tetap'),('MSTRR','MASTER');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `nomor_induk` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama_pegawai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomor_telp` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_jabatan` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_cabang` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_departemen` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gaji_pokok` double DEFAULT NULL,
  `tanggal_diangkat` date DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  PRIMARY KEY (`nomor_induk`),
  KEY `fk_jabatan` (`kode_jabatan`),
  KEY `fk_departemen` (`kode_departemen`),
  KEY `fk_cabang` (`kode_cabang`),
  CONSTRAINT `fk_cabang` FOREIGN KEY (`kode_cabang`) REFERENCES `cabang` (`kode_cabang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_departemen` FOREIGN KEY (`kode_departemen`) REFERENCES `departemen` (`kode_departemen`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_jabatan` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` VALUES ('10119111','Agness','Subang','1999-02-02','P','SUBANG UTARA','Islam','082119284836','J002 ','BDG71','D033',345000000,'1999-02-02','1999-02-06'),('10119277','John','Mojokerto','0000-00-00','L','BANDUNG UTARA','Islam','087776246633','D001 ','JKT21','D002 ',23000000,'1999-12-12','1999-02-28'),('11222455','Nagisa','Jogjakarta','2005-10-10','P','Bali','Kristen','082117805111','J003','BLI21','D004',5000000,'2011-02-05','2026-02-05'),('11223355','Tita Solihat','Bandung','2000-05-03','P','Bandung','Islam','082117805245','D001','BDG71','D002',10000000,'2011-02-05','2026-02-05');
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_akun` int(1) NOT NULL,
  `role_users` enum('ADMIN','','','') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_users`
--

LOCK TABLES `tb_users` WRITE;
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` VALUES (1,'admin@gmail.com','21232f297a57a5a743894a0e4a801fc3',1,'ADMIN');
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-14 18:25:54
