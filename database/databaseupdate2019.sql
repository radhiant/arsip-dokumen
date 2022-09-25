/*
SQLyog Ultimate v12.09 (64 bit)
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `kode_buku` varchar(50) NOT NULL,
  `nama_dokumen` varchar(5000) DEFAULT NULL,
  `pembuat` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `ket` text,
  `lampiran` varchar(300) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`kode_buku`,`nama_dokumen`,`pembuat`,`tahun`,`ket`,`lampiran`,`lokasi`,`tgl_input`) values ('DA-0026','Pembangunan Infrastruktur Jaringan e-Goverment Kabupaten Morowali','Febri','12-Mei-2017','No Kontrak : 004/KONTRAK/KOMINFO/V/2017','2017_Morowali.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0027','Pengadaan Peralatan Komputer Mainframe Morowali Utara','Febri','17-Juli-2017','Nomor : 03/SP/DISKOMINFO/DAU/VII/2017','Kontrak_Komputer_Mainframe.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0028','Belanja Kawat, Faksimail, Internet, Intranet, TV Morowali Utara','Febri','17-Juli-2017','Nomor : 02/SP/DISKOMINFO/DAU/VII/2017','Kontrak_Belanja_Kawat.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0029','Pengadaan Peralatan Jaringan Morowali Utara','Febri','17-Juli-2017','Nomor : 01/SP/DISKOMINFO/DAU/VII/2017','2017_Morowali_Utara_Pengadaan_Peralatan_Jaringan.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0030','Pembangunan infrastruktur IT dan komunikasi terpadu kabupaten Boalemo','Febri','8-Juni-2011','Nomor: 01/KONTRAK/SETDA/VI/2011','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0031','Pengadaan dan pemasangan sistem komunikasi terpadu (SISKOMPAD) VSAT IP Kab.Poso','Febri','09-Juni-2011','Nomor: 01/SP/VI/DISHUBKOMINFO/2011','2011_Poso.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0032','Pengadaan Alat Sistem Komunikasi Terpadu Tojo Una-una','Febri','25-Juli-2011','Nomor: 027/25/PKK-TU/Bappeda&PM/2011','2011_Tojo_Una-Una.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0033','Pembinaan dan Pengembangan jaringan komunikasi dan informasi Kab.Poso','Febri','29-Juni-2012','Nomor: 01/SP/VI/DISHUBKOMINFO/2012','2012_Poso.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0034','Pelaksanaan tempat pusat pelayanan kecamatan (PATEN) 2012','Febri','03-Oktober-2012','Nomor: 002/Kontrak-PPASPS/TAPEM/X/2012','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0035','Pengadaan Alat-alat Komunikasi Kab. Muna 2012','Febri','02-Oktober-2012','-','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0036','Sistem Komunikasi Terpadu (VSAT IP) Kab.Malinau 2012','Febri','03-Oktober-2012','NOMOR: 002/Kontrak-PSKT/TAPEM/X/2012','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0037','Pengadaan dan Pemasangan VSAT dan TELEX bandara Bima','Febri','20-Agustus-2013','NOMOR: KU.003/454/VIII/BMU-2013','2013_Bandara_Bima.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0038','Pengadaan Barang (SISKOMPAD) Kebutuhan Tingkat Kab. dan kec. VSAT(CAPEX) & Biaya jasa untuk tingkat Kab.Poso Kec.Lore barat dan Kec.Lore Timur 2013','Febri','03-Mei-2013','NOMOR: 01/SP/V/DISHUBKOMINFO/2013','2013_Poso.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0039','Pembinaan dan Pengembangan jaringan komunikasi dan informasi Kab.Poso Kec.Pamona selatan,tenggara,timur,barat,dan puselemba','Febri','06-Agustus-2014','NOMOR: 02/SP/VIII/DISHUBKOMINFO/2014','2014_Poso.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0040','Pembangunan infrastuktur IT dan Sistem informasi Sulawesi tengah ','Febri','06-Mei-2014','NOMOR: 803/187.c/Diskominfo.V/2014','2014_Provinsi_Sulteng.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0041','Pengadaan Jaringan IT/DIGITAL Egov Daerah Palu','Febri','12-November-2014','Nomor: 02/Kontrak/PPK/Bag.Hum.I/XII/2014','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0042','Sewa Bandwith Daerah Kab.Malinau','Febri','25-November-2014','NOMOR: 02/KONTRAK.B.6/SUNGRAM-MAL/XI/2014','2014_Malinau_Sungram.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0043','Pengadaan Kamera CCTV 180 Derajat di 18  pelabuhan pangkal dari 36 pelabuhan pangkal (Paket B dan C) 2015 kementrian perhubungan','Febri','20-November-2015','-','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0044','Pengadaan dan pemasangan sistem komunikasi terpadu Berbasis VSAT IP 2015','Febri','10-Agustus-2015','NOMOR: 004/BKU-SPH09/VIII/2015','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0045','Pengadaan Kamera CCTV 180 Derajat di 18  pelabuhan pangkal dari 36 pelabuhan pangkal (Paket C) 2015 kementrian perhubungan','Febri','17-November-2015','NOMOR: 006/BKU-SPH09/XI/2015','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0046','Pengadaan Kamera CCTV 180 Derajat di 18  pelabuhan pangkal dari 36 pelabuhan pangkal (Paket B) 2015 kementrian perhubungan','Febri','17-November-2015','NOMOR: 009/BKU-SPH09/Xi/2015','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0047','Pengadaan Kamera CCTV 180 Derajat di 18  pelabuhan pangkal dari 36 pelabuhan pangkal (Paket C) kementrian perhubungan','Febri','01-Desember-2015','NOMOR: KTK.02/PPK/CCTV-18/PAKET-C/XII/2015','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0048','Belanja Jasa sewa bandwith internet Kecamatan dan Sewa Transponder daerah Kab.Malinau','Febri','30-April-2015','NOMOR: 01/KONTRAK-PDE/BJSBIK&ST/IV/2015','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0049','Pengadaan Sewa Transponder Satelit  dan Internet Backup daerah Kab.Malinau','Febri','04-Desember-2015','NOMOR: 01/KONTRAK-PDE.BJSBIK&ST.2/XII/2015','2015_Malinau_LPSE&PDE_Desember.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0050','Pengadaan sewa transponder Satelit dan internet Backup LPSE daerah Kab.Malinau','Febri','24-November-2015','NOMOR: 01/KONTRAK-PDE.BJST&IB-LPSE/XI/2015','2015_Malinau_LPSE_November.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0051','Pengadaan dan Pemasangan Sistem komunikasi Terpadu (SISKOMPAD) VSAT-IP daerah kab.Poso ','Febri','01-Juli-2015','NOMOR: 32/IP.KONTRAK/VII/DISHUBKOMINFO/2015','2015_Poso.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0052','Pengadaan Jasa Koneksi Internet Dedicated 5(lima) MBps kab.Poso','Febri','15-September-2016','NOMOR: 18/IX/KONT/DISHUBKOMINFO/2016','2016_Poso_Internet_Dedicated.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0053','Pengadaan jasa transponder satelit daerah Kab.Poso ','Febri','15-September-2016','NOMOR: 17/SP.KONTRAK/XI/DISHUBKOMINFO/2016','2016_Poso_Transponder.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0054','Pengadaan Tower Triangle Daerah Kab.Poso','Febri','15-September-2016','NOMOR: 19/IX/KONT/DISHUBKOMINFO/2016','2016_Poso_Tower.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0055','Pengadaan Jaringan/Server(Sistem informasi dan komunikasi terpadu) daerah Kab.Mamuju Utara','Febri','17-Juni-2016','NOMOR: 02.a/PKK-Kont/Brg/VI/2016/DISHUBKOMINFO','2016_Mamuju_Utara.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0056','Pengadaan Sistem Informasi dan Telekomunikasi terpadu(SISKOMPAD) daerah kab.Mamuju Utara 2017','Febri','06-Juni-2017','NOMOR: 09/SP/PKK/2017/DISKOMINFOPERS','2017_Mamuju_Utara.pdf','Sekretariat Lemari 1','2019-01-16'),('DA-0057','Pemeliharaan perangkat sistem monitoring frekuensi radio (SMFR) PAKET 1 daerah 2016','Febri','15-November-2016','NOMOR: 01/ULP/DJSDPPI.4/P.SMFR.1/11/2016','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-16'),('DA-0058','AIRNAV 2016','Febri','1-Januari-2016','-','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-17'),('DA-0059','Morowali Utara 2017','Febri','19-Juni-2017','NOMOR: 25/Dok/PokjaSP.20/ULP-MU/VI/2017','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-17'),('DA-0060','Pembangunan Infrastuktur jaringan e-goverment Daerah Morowali 2017','Febri','17-April-2017','NOMOR: 14/LP-Kab.Morowali/POKJA/IV/2017','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-17'),('DA-0061','Lelang CCTV Airnav 2018','Febri','1-Januari-2018','-','Tidak Mengupload file','Sekretariat Lemari 1','2019-01-17');

/*Table structure for table `file_lelang` */

DROP TABLE IF EXISTS `file_lelang`;

CREATE TABLE `file_lelang` (
  `id_file_lelang` int(100) NOT NULL AUTO_INCREMENT,
  `id_lelang` int(50) DEFAULT NULL,
  `nama_file` varchar(200) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  PRIMARY KEY (`id_file_lelang`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `file_lelang` */

insert  into `file_lelang`(`id_file_lelang`,`id_lelang`,`nama_file`,`tgl_upload`) values (8,3,'Draft_RAB_Morowali_02.xlsx','2019-01-30'),(9,3,'M3_2__Spesifikasi_Teknis.docx','2019-01-30'),(10,3,'M3_4__Identitas_Barang.docx','2019-01-30'),(11,3,'M3_3__Metode_Pelaksanaan.docx','2019-01-30'),(12,3,'M3_1__Jadwal_Pelaksanaan.docx','2019-01-30'),(25,3,'M3_2__Brosure.rar','2019-01-31'),(26,3,'SDP_lelang.pdf','2019-01-31'),(27,3,'BOQ_RAB.pdf','2019-01-31'),(28,3,'BOQ_rekapitulasi.pdf','2019-01-31'),(30,5,'24_SDP_Peralatan_Mainframe.pdf','2019-01-31');

/*Table structure for table `legalitas` */

DROP TABLE IF EXISTS `legalitas`;

CREATE TABLE `legalitas` (
  `id_legalitas` int(30) NOT NULL AUTO_INCREMENT,
  `nama_legalitas` varchar(500) DEFAULT NULL,
  `nomor` varchar(500) DEFAULT NULL,
  `tgl_legalitas` varchar(400) DEFAULT NULL,
  `masa_berlaku` varchar(400) DEFAULT NULL,
  `waktu_proses` varchar(40) DEFAULT NULL,
  `file_upload` varchar(1000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `persyaratan` varchar(400) DEFAULT NULL,
  `lokasi_pengurusan` varchar(400) DEFAULT NULL,
  `pic` varchar(500) DEFAULT NULL,
  `cara_pengurusan` text,
  PRIMARY KEY (`id_legalitas`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `legalitas` */

insert  into `legalitas`(`id_legalitas`,`nama_legalitas`,`nomor`,`tgl_legalitas`,`masa_berlaku`,`waktu_proses`,`file_upload`,`status`,`persyaratan`,`lokasi_pengurusan`,`pic`,`cara_pengurusan`) values (10,'SIUP Besar','22/24.1PB.1/31.75/-1.824.27/e/2016','2019-02-08','2021-03-10','30','tidak ada','',NULL,NULL,NULL,NULL);

/*Table structure for table `lelang` */

DROP TABLE IF EXISTS `lelang`;

CREATE TABLE `lelang` (
  `id_lelang` int(80) NOT NULL AUTO_INCREMENT,
  `projek` varchar(500) DEFAULT NULL,
  `OPD` varchar(500) DEFAULT NULL,
  `kabkota` varchar(400) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id_lelang`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `lelang` */

insert  into `lelang`(`id_lelang`,`projek`,`OPD`,`kabkota`,`tahun`) values (3,' Pembangunan Infrastruktur Jaringan E-Goverment','KOMINFO','Kabupaten Morowali Induk',2017),(5,'Pengadaan Peralatan Komputer Mainframe','KOMINFO','Kabupaten Morowali Utara',2017),(6,'Pengadaan Jaringan IT/Digital Egov','Sekretariat Daerah Kota Palu','Kota Palu',2014),(7,'Pengadaan Sewa Bandwith dan Kelengkapan Beserta Maintenance untuk LPSE','Bagian Penyusunan Program Kabupaten Malinau','Kabupaten Malinau',2014),(8,'Pengadaan dan Pemasangan Sistem Komunikasi Terpadu (SISKOMPAD) VSAT-IP untuk Kebutuhan Tingkat Kabupaten','Dinas Perhubungan, Komunikasi, dan Informatika Kabupaten Poso','Kabupaten Poso',2015),(9,'Belanja Jasa Sewa Bandwidth Internet Kecamatan dan Sewa Transponder','Bagian Pusat Data Elektronik Kabupaten Malinau','Kabupaten Malinau',2015),(10,'Belanja Jasa Sewa Transponder Satelit dan Internet Backup LPSE','Bagian Pusat Data Elektronik Kabupaten Malinau','Kabupaten Malinau',2015),(11,'Belanja Jasa Sewa Transponder Satelit dan Internet Backup Kecamatan dan Kantor Pemda Malinau','Bagian Pusat Data Elektronik Kabupaten Malinau','Kabupaten Malinau',2015),(12,'Pengadaan Kamera CCTV 180 Derajat di 18 Pelabuhan Pangkal dari 36 Pelabuhan Pangkalan (Paket C)','Direktorat Jenderal Perhubungan Laut','Bima, Maumere, Saumlaki, Tahuna, Mamuju,  Labuhan Bajo',2015),(13,'Pengadaan Kamera CCTV 180 Derajat di 18 Pelabuhan Pangkal dari 36 Pelabuhan Pangkalan (Paket B)','Direktorat Jenderal Perhubungan Laut, Kementerian Perhubungan','Banyuwangi, Kwandang, Tilamuta, Poso, Kolonedale, Pagimana',2015),(14,'Pengadaan Tower Triangle','Dinas Perhubungan, Komunikasi, dan Informatika Kabupaten Poso','Kabupaten Poso',2016),(15,'Pengadaan Jasa Transponder Satelit','Dinas Perhubungan, Komunikasi, dan Informatika ','Kabupaten Poso',2016),(16,'Pengadaan Jasa Koneksi Internet Dedicated 5 (Lima) Mbps','Dinas Perhubungan, Komunikasi, dan Informatika Kabupaten Poso','Kabupaten Poso',2016),(17,'Pengadaan Jaringan/Server (Sistem Informasi dan Komunikasi Terpadu)','Dinas Perhubungan, Komunikasi, dan Informatika Kabupaten Mamuju Utara','Kabupaten Mamuju Utara',2016),(18,'Pembangunan Sistem Teknologi Informasi Komunikasi (TIK) SKPD dan Kecamatan Terpadu Kabupaten Banggai','Dinas Perhubungan, Komunikasi, dan Informatika Kabupaten Banggai','Kabupaten Banggai',2016),(19,'Pembangunan Infrastruktur Jaringan E-Government','Dinas Komunikasi dan Informatika Kabupaten Morowali','Kabupaten Morowali',2017),(20,'Pengadaan Sistem Informasi dan Telekomunikasi Terpadu (Siskompad)','Dinas Komunikasi, Informatika, Persandian, dan Statistik Kabupaten Mamuju Utara','Kabupaten Mamuju Utara',2017),(21,'Pengadaan Peralatan Komputer Mainframe','Dinas Komunikasi dan Informatika Daerah Kabupaten Morowali Utara','Kabupaten Morowali Utara',2017),(22,'Belanja Kawat, Faksimail, Internet, Intranet, TV','Dinas Komunikasi dan Informatika Daerah Kabupaten Morowali Utara','Kabupaten Morowali Utara',2017),(23,'Pengadaan Peralatan Jaringan ','Dinas Komunikasi dan Informatika Daerah Kabupaten Morowali Utara','Kabupaten Morowali Utara',2017),(24,'Pembangunan TIK SKPD dan Kecamatan Terpadu (Smart Regency)','Dinas Komunikasi dan Informatika Kabupaten Banggai','Kabupaten Banggai',2017),(25,'Sewa Bandwidth Transponder dan Internet Kecamatan','Dinas Komunikasi dan Informatika Kabupaten Malinau','Kabupaten Malinau',2018),(26,'Pembangunan Infrastruktur Jaringan E-Government','Dinas Komunikasi dan Informatika Kabupaten Morowali','Kabupaten Morowali',2018),(27,'Sarana dan Prasarana Implementasi E-Goverment','Dinas Komunikasi dan Informatika Kabupaten Sumatra Barat','Kabupaten Sumatra Barat',2018),(28,'Harkan KOMMOB PORLI T.A','Markas Besar Kepolisian Negara Republik Indonesia DIVISI TEKNOLOGI INFORMASI DAN KOMUNIKASI','Mabes Polri',2018),(29,'Harkan HUB VSAT T.A','Markas Besar Kepolisian Negara Republik Indonesia DIVISI TEKNOLOGI INFORMASI DAN KOMUNIKASI','Mabes Polri',2018),(30,'Belanja Jasa Pemindahan Server Beserta Kelengkapan ','Dinas komunikasi informatika Persandian dan statistik Kabupaten Pasangkayu','Kabupaten Pasangkayu',2018),(31,'Sewa Bandwith dan Pembiayaan Pemasangan Jaringan','Dinas Komunikasi,Informatika Persandian dan Statistik Kabupaten Pasangkayu','Kabupaten Pasangkayu',2018),(32,'Pengadaan Mesin Jaringan OPD','Dinas Komunikasi dan Informatika Daerah Kabupaten Morowali Utara','Kabupaten Morowali Utara',2018),(33,'Pengadaan Jasa TV Satelit Bandwith','Dinas Komunikasi dan Informatika Daerah Kabupaten Morowali Utara','Kabupaten Morowali Utara',2018),(34,'Pemeliharaan Perangkat SISKOMPAD','Dinas Komunikasi dan Informatika Pemerintahan Kabupaten Malinau','Kabupaten Malinau',2018),(35,'Pembangunan Tower Infrastruktur Jaringan Internet','Dinas Kesehatan Pemerintah Kabupaten Idragiri Hilir','Kabupaten Indragiri Hilir',2018),(36,'Belanja Pelayanan Warga Negara Asing','Dinas Transmigrasi dan Tenaga Kerja Daerah Kabupaten Morowali','Kabupaten Morowali',2018),(37,'Pengadaan Peralatan Mesin Personal Komputer Kontrak Harga Satuan','Pemerintahan Kabupaten Morowali Utara BPKD','Kabupaten Morowali Utara',2018),(38,'Pengadaan Generator set Dinas Komunikasi Dan Informatika','Dinas Komunikasi Dan Informatika KAB.BANGGAI','Kabupaten Banggai',2018),(39,'Penyediaan BaseTransceiver Station di Daerah Blankspot Layanan Telekomunikasi (Persediaan Power dan Tower)','Balai Penyediaan dan Pengelola Pembiyaan Telekomunikasi dan Informatika , Direktorat Jendral Penyelenggaraan  Pos dan  informatika ,Kementrian Komunikasi dan Informatika RI.','15.',2018),(40,'Penyediaan BaseTransceiver Station di Daerah Blankspot Layanan Telekomunikasi (Persediaan Power dan Tower)','Balai Penyediaan dan Pengelola Pembiyaan Telekomunikasi dan Informatika , Direktorat Jendral Penyelenggaraan  Pos dan informatika ,Kementrian Komunikasi dan Informatika RI.','10.',2018);

/*Table structure for table `log_legalitas` */

DROP TABLE IF EXISTS `log_legalitas`;

CREATE TABLE `log_legalitas` (
  `id_log` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) DEFAULT NULL,
  `field_legalitas` varchar(500) DEFAULT NULL,
  `id_legalitas` int(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  KEY `id_log` (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `log_legalitas` */

/*Table structure for table `pengembalian` */

DROP TABLE IF EXISTS `pengembalian`;

CREATE TABLE `pengembalian` (
  `id_kembali` int(40) NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(40) DEFAULT NULL,
  `nama_dokumen` varchar(50) DEFAULT NULL,
  `pembuat` varchar(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `lama_pinjam` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kembali`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengembalian` */

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(40) NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(30) DEFAULT NULL,
  `nama_dokumen` varchar(40) DEFAULT NULL,
  `pembuat` varchar(40) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `ket` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama_user`,`username`,`pwd`,`email`,`foto`,`lvl`) values (40,'admin','admin','admin','admin@gmail.com','default.png','admin'),(41,'user','user','user','user@gmail.com','default.png','user'),(42,'Febri ','febri','febri','febri@bintangku.com','default.png','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
