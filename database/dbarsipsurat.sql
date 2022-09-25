/*
SQLyog Professional v12.4.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - db_perpustakaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_perpustakaan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_perpustakaan`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `id_anggota` int(50) NOT NULL AUTO_INCREMENT,
  `nim` varchar(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `thn_masuk` year(4) DEFAULT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

LOCK TABLES `anggota` WRITE;

insert  into `anggota`(`id_anggota`,`nim`,`nama_anggota`,`tempat_lahir`,`tgl_lahir`,`jk`,`prodi`,`thn_masuk`) values 
(13,'123123232132','Dhea','Sumedang','2000-04-14','Perempuan','Bahasa Indonesia',2018),
(14,'123123232131','Naufal Muhammad','Sumedang','2000-12-28','Laki-laki','Informatika',2018),
(15,'123123232133','Widi Priansyah','Sumedang','2001-02-04','Laki-laki','Bahasa Inggris',2018),
(16,'123123232134','Heri Perdiayasnyah','Sumedang','2000-12-05','Laki-laki','Informatika',2018),
(17,'123123232135','Angginai','Sumedang','2000-02-10','Perempuan','Informatika',2018),
(18,'123123232136','Chamila','Sumedang','2000-12-23','Perempuan','Informatika',2019),
(19,'123123232137','Marwah Maesaroh','Sumedang','1999-05-14','Perempuan','Olahraga',2018);

UNLOCK TABLES;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `kode_buku` varchar(50) NOT NULL,
  `nama_dokumen` varchar(50) DEFAULT NULL,
  `pembuat` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `lokasi` enum('rak1','rak2','rak3') DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

LOCK TABLES `buku` WRITE;

insert  into `buku`(`kode_buku`,`nama_dokumen`,`pembuat`,`tahun`,`jumlah`,`lokasi`,`tgl_input`) values 
('DA-0001','Bualemo 2011','Febri','01-januari-2011','1','rak1','2019-01-15'),
('DA-0002','Tojo Una-una 2011','Febri','01-januari-2011','1','rak1','2019-01-15'),
('DA-0003','POSO 2011','Febri','01-januari-2011','1','rak1','2019-01-15'),
('DA-0004','POSO 2012','Febri','01-januari-2012','1','rak1','2019-01-15'),
('DA-0005','Simpaten Malinau 2012','Febri','01-januari-2012','1','rak1','2019-01-15'),
('DA-0006','Muna 2012','Febri','01-januari-2012','1','rak1','2019-01-15'),
('DA-0007','Malinau 2012','Febri','01-januari-2012','1','rak1','2019-01-15'),
('DA-0008','VSAT BIMA 2013','Febri','01-januari-2013','1','rak1','2019-01-15'),
('DA-0009','POSO 2013','Febri','01-januari-2013','1','rak1','2019-01-15'),
('DA-0010','POSO 2014','Febri','01-januari-2014','1','rak1','2019-01-15'),
('DA-0011','Prov. Sulawesi Tengah 2014','Febri','01-januari-2014','1','rak1','2019-01-15'),
('DA-0012','Palu 2014','Febri','01-januari-2014','1','rak1','2019-01-15'),
('DA-0013','Malinau 2014','Febri','01-januari-2014','1','rak1','2019-01-15'),
('DA-0014','Malinau 2015','Febri','01-januari-2015','1','rak1','2019-01-15'),
('DA-0015','LPSE-2-Malinau-2015','Febri','24-november-2015','1','rak1','2019-01-15'),
('DA-0016','PDE-Malinau-2015','Febri','04-desember-2015','1','rak1','2019-01-15'),
('DA-0017','POSO 2015','Febri','01-januari-2015','1','rak1','2019-01-15'),
('DA-0018','Kabupaten POSO 2016','Febri','01-januari-2016','1','rak1','2019-01-15'),
('DA-0019','POSO 2016','Febri','01-januari-2016','1','rak1','2019-01-15'),
('DA-0020','Kabupaten Mamuju Utara 2016','Febri','01-Januari-2016','1','rak1','2019-01-15'),
('DA-0021','Mamuju Utara 2017','Febri','01-Januari-2017','1','rak1','2019-01-15'),
('DA-0022','AIRNAV 2016-2017','Febri','01-Januari-2017','1','rak1','2019-01-15'),
('DA-0023','Morowali 2017','Febri','01-Januari-2017','1','rak1','2019-01-15'),
('DA-0024','Morowali Utara 2017','Febri','01-Januari-2017','1','rak1','2019-01-15'),
('DA-0025','Lelang CCTV AIRNAV 2018','Febri','01-Januari-2018','1','rak1','2019-01-15');

UNLOCK TABLES;

/*Table structure for table `pengembalian` */

DROP TABLE IF EXISTS `pengembalian`;

CREATE TABLE `pengembalian` (
  `id_kembali` int(40) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(50) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `terlambat` varchar(50) DEFAULT NULL,
  `biaya_denda` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kembali`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

/*Data for the table `pengembalian` */

LOCK TABLES `pengembalian` WRITE;

insert  into `pengembalian`(`id_kembali`,`judul_buku`,`nim`,`nama_anggota`,`tgl_pinjam`,`tgl_kembali`,`terlambat`,`biaya_denda`) values 
(45,'word13','12345678','Naufal Muhammad','2018-12-08','2018-12-22','0 Hari','Rp.0'),
(46,'word13','12345678','Dhea','2018-12-08','2018-12-15','0 Hari','Rp.0'),
(50,'dunia2100','2147483647','Dhea','2018-12-08','2018-12-15','0 Hari','Rp.0'),
(53,'Sajak-sajak dan Renungan','2147483647',' Heri Perdiayasnyah','2018-12-15','2018-12-22','0 Hari','Rp.0'),
(54,'Sajak-sajak dan Renungan','2147483647',' Angginai','2018-12-15','2018-12-22','0 Hari','Rp.0'),
(55,'Linguistik Umum','2147483647',' Dhea','2018-12-15','2018-12-22','0 Hari','Rp.0');

UNLOCK TABLES;

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(40) NOT NULL AUTO_INCREMENT,
  `id_buku` varchar(30) DEFAULT NULL,
  `judul_buku` varchar(40) DEFAULT NULL,
  `nim` int(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `ket` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

LOCK TABLES `transaksi` WRITE;

insert  into `transaksi`(`id_transaksi`,`id_buku`,`judul_buku`,`nim`,`nama_anggota`,`tgl_pinjam`,`tgl_kembali`,`ket`) values 
(28,'30','Jante Arkidam',2147483647,' Dhea','2018-12-15','2018-12-22','Untuk Belajar Sejarah Bahasa'),
(31,'17','Matematika',2147483647,' Dhea','2018-12-15','2018-12-22','Untuk Belajar'),
(32,'17','Matematika',2147483647,' Chamila','2018-12-15','2018-12-22','Untuk Belajar Sejarah Bahasa'),
(33,'31','Linguistik Umum',2147483647,' Angginai','2018-12-15','2018-12-22','Untuk Belajar'),
(34,'31','Linguistik Umum',2147483647,' Dwi Utami','2018-12-15','2018-12-22','Untuk Belajar'),
(35,'29','Sajak-sajak dan Renungan',2147483647,' Heri Perdiayasnyah','2018-12-15','2019-01-19','Untuk Belajar');

UNLOCK TABLES;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(60) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `lvl` enum('admin','user') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`id_user`,`nama_user`,`username`,`pwd`,`email`,`foto`,`lvl`) values 
(34,'Dhea Mawarni','dhea','12345','Dheamawarni@gmail.com','5c0cf040e4c80.png','user'),
(35,'Radhian Sobarna','radhian','123','radhiantsobarna@gmail.com','5c1517f1a206b.jpg','admin'),
(38,'ian kasela','admin','1124','radhiantsobarna@gmail.com','5c14648266760.jpg','user');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
