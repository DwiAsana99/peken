/*
SQLyog Ultimate v9.30 
MySQL - 5.5.5-10.1.10-MariaDB : Database - c1db_newee
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`c1db_newee` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `c1db_newee`;

/*Table structure for table `rbac_menu` */

DROP TABLE IF EXISTS `rbac_menu`;

CREATE TABLE `rbac_menu` (
  `id_menu` int(10) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `text` text,
  `icon` text,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `rbac_menu` */

insert  into `rbac_menu`(`id_menu`,`nama`,`text`,`icon`) values (1,'Kerja Praktek','Mengelola Transaksi KP','fa fa-book'),(2,'Master Data','Mengelola Data Master\r\n','fa fa-th'),(3,'Kerja Praktek','Punya Mahasiswa','fa fa-book'),(4,'Daftar Pengajuan','Daftar Pengajuan Berkas kp/ta','fa fa-book'),(5,'Kerja Praktek','Konfirmasi pengajuan Perpanjangan','fa fa-list'),(6,'Kerja Praktek','Kordinator','fa fa-list');

/*Table structure for table `rbac_menu_role` */

DROP TABLE IF EXISTS `rbac_menu_role`;

CREATE TABLE `rbac_menu_role` (
  `id_role` int(10) DEFAULT NULL,
  `id_menu` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rbac_menu_role` */

insert  into `rbac_menu_role`(`id_role`,`id_menu`) values (1,2),(3,1),(2,3),(4,4),(5,5),(6,6);

/*Table structure for table `rbac_role` */

DROP TABLE IF EXISTS `rbac_role`;

CREATE TABLE `rbac_role` (
  `id_role` int(10) NOT NULL AUTO_INCREMENT,
  `nama_role` text,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `rbac_role` */

insert  into `rbac_role`(`id_role`,`nama_role`) values (1,'Admin'),(2,'Mahasiswa'),(3,'Staff'),(4,'TU'),(5,'Pembimbing KP'),(6,'Kordinator KP');

/*Table structure for table `rbac_submenu` */

DROP TABLE IF EXISTS `rbac_submenu`;

CREATE TABLE `rbac_submenu` (
  `id_submenu` int(10) NOT NULL AUTO_INCREMENT,
  `nama_submenu` text,
  `link` text,
  `parent_menu` int(11) DEFAULT NULL,
  `icon` text,
  PRIMARY KEY (`id_submenu`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `rbac_submenu` */

insert  into `rbac_submenu`(`id_submenu`,`nama_submenu`,`link`,`parent_menu`,`icon`) values (1,'Bidang Studi','index.php/Bidang_studi/Bidang_studi_view',2,'fa fa-book'),(2,'Golongan','index.php/Golongan/Golongan_view',2,'fa fa-pencil-square-o'),(3,'Mahasiswa','index.php/Mahasiswa/Mahasiswa_view',2,'fa  fa-users'),(4,'Jabatan Akademik','index.php/Jabatan_akademik/Jabatan_akademik_view',2,'fa  fa-list'),(5,'Jabatan Fungsional','index.php/Jabatan_fungsional/Jabatan_fungsional_view',2,'fa  fa-list'),(6,'Timeline Kerja Praktek','index.php/Transaksi_kp/Daftar_view_mahasiswa',3,'fa  fa-flag'),(7,'Pengajuan KP Baru','index.php/Transaksi_kp/Daftar_view_pengajuan',4,'fa  fa-flag'),(8,'Pengajuan Perpanjangan','index.php/Transaksi_kp/Daftar_view_pengajuan_perpanjangan',4,'fa  fa-flag'),(9,'Pengajuan Ujian KP','index.php/Transaksi_kp/Daftar_view_ujian',4,'fa  fa-flag'),(10,'Staff','index.php/Staff/staff_view',2,'fa fa-user'),(11,'Pengajuan perpanjangan KP','index.php/Transaksi_kp/view_pengajuan_perpanjangan_pem',5,'fa fa-user'),(12,'Unblok Perpanjangan KP','index.php/Transaksi_kp/view_unblock_perpanjangan',6,'fa fa-key');

/*Table structure for table `rbac_user_role` */

DROP TABLE IF EXISTS `rbac_user_role`;

CREATE TABLE `rbac_user_role` (
  `id_user` int(10) DEFAULT NULL,
  `id_role` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rbac_user_role` */

insert  into `rbac_user_role`(`id_user`,`id_role`) values (1,1),(1,4),(2,2),(3,4),(4,5),(5,6),(7,2);

/*Table structure for table `tb_alumni` */

DROP TABLE IF EXISTS `tb_alumni`;

CREATE TABLE `tb_alumni` (
  `id_alumni` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIM` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `thn_masuk` year(4) NOT NULL,
  `bulan_lulus` varchar(45) NOT NULL,
  `thn_lulus` year(4) NOT NULL,
  `kesan` varchar(1000) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `judul_skripsi` varchar(1000) NOT NULL,
  `jenis_kel` tinyint(1) NOT NULL COMMENT '0: perempuan; 1:laki-laki',
  `status` tinyint(1) NOT NULL COMMENT '0:belum direview; 1:disetujui/publish; 2:ditolak',
  PRIMARY KEY (`id_alumni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_alumni` */

/*Table structure for table `tb_bidangstudi` */

DROP TABLE IF EXISTS `tb_bidangstudi`;

CREATE TABLE `tb_bidangstudi` (
  `id_bidstudi` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_bidstudi` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0: tidak aktif; 1:aktif',
  PRIMARY KEY (`id_bidstudi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tb_bidangstudi` */

insert  into `tb_bidangstudi`(`id_bidstudi`,`nama_bidstudi`,`status`) values (1,'Bidang Studi A',1),(2,'Bidang Studi B',1);

/*Table structure for table `tb_kp` */

DROP TABLE IF EXISTS `tb_kp`;

CREATE TABLE `tb_kp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(45) DEFAULT NULL,
  `perusahaan_nama` varchar(100) DEFAULT NULL,
  `perusahaan_alamat` varchar(200) DEFAULT NULL,
  `dokumen_balasan` varchar(100) DEFAULT NULL,
  `pembimbing_1` varchar(50) DEFAULT NULL,
  `pembimbing_2` varchar(50) DEFAULT NULL,
  `dokumen_sk` varchar(100) DEFAULT NULL,
  `tgl_awal` datetime DEFAULT NULL,
  `tgl_akhir` datetime DEFAULT NULL,
  `no_sk` varchar(200) DEFAULT NULL,
  `is_pengajuan_perpanjangan` int(11) DEFAULT '0',
  `is_acc_perpanjangan` int(11) DEFAULT '0',
  `no_sk_perpanjangan` varchar(100) DEFAULT NULL,
  `tgl_awal_perpanjangan` datetime DEFAULT NULL,
  `tgl_akhir_perpanjangan` datetime DEFAULT NULL,
  `dokumen_sk_perpanjangan` varchar(100) DEFAULT NULL,
  `pembimbing_1_perpanjangan` varchar(50) DEFAULT '0',
  `pembimbing_2_perpanjangan` varchar(50) DEFAULT NULL,
  `dokumen_kartu_bimbingan` varchar(50) DEFAULT NULL,
  `is_acc_ujian` int(11) DEFAULT '0',
  `tgl_ujian` datetime DEFAULT NULL,
  `jam_ujian` time(6) DEFAULT NULL,
  `tempat_ujian` varchar(45) DEFAULT NULL,
  `dokumen_sinta_seksi` varchar(100) DEFAULT NULL,
  `is_lulus` int(11) DEFAULT '0',
  `judul_kp` varchar(200) DEFAULT NULL,
  `is_approve` int(1) DEFAULT '0',
  `is_approve_perpanjangan_pem2` int(1) DEFAULT '0',
  `is_approve_perpanjangan_pem1` int(1) DEFAULT '0',
  `tgl_pengajuan` datetime DEFAULT NULL,
  `tgl_pengajuan_perpanjangan` datetime DEFAULT NULL,
  `tgl_konfirmasi_tu` datetime DEFAULT NULL,
  `tgl_konfirmasi_perpanjangan` datetime DEFAULT NULL,
  `tgl_pengajuan_ujian` datetime DEFAULT NULL,
  `tgl_konfirmasi_ujian` datetime DEFAULT NULL,
  `tgl_konfirmasi_lulus` datetime DEFAULT NULL,
  `is_unblok_perpanjangan` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;

/*Data for the table `tb_kp` */

insert  into `tb_kp`(`id`,`nim`,`perusahaan_nama`,`perusahaan_alamat`,`dokumen_balasan`,`pembimbing_1`,`pembimbing_2`,`dokumen_sk`,`tgl_awal`,`tgl_akhir`,`no_sk`,`is_pengajuan_perpanjangan`,`is_acc_perpanjangan`,`no_sk_perpanjangan`,`tgl_awal_perpanjangan`,`tgl_akhir_perpanjangan`,`dokumen_sk_perpanjangan`,`pembimbing_1_perpanjangan`,`pembimbing_2_perpanjangan`,`dokumen_kartu_bimbingan`,`is_acc_ujian`,`tgl_ujian`,`jam_ujian`,`tempat_ujian`,`dokumen_sinta_seksi`,`is_lulus`,`judul_kp`,`is_approve`,`is_approve_perpanjangan_pem2`,`is_approve_perpanjangan_pem1`,`tgl_pengajuan`,`tgl_pengajuan_perpanjangan`,`tgl_konfirmasi_tu`,`tgl_konfirmasi_perpanjangan`,`tgl_pengajuan_ujian`,`tgl_konfirmasi_ujian`,`tgl_konfirmasi_lulus`,`is_unblok_perpanjangan`) values (147,'1','maxinous','jalan','a6.pdf','9','3','SK-KP32017-06-011.pdf','2017-06-01 00:00:00','2017-06-22 00:00:00',NULL,0,0,NULL,NULL,NULL,NULL,'0',NULL,NULL,0,NULL,NULL,NULL,NULL,0,NULL,1,0,0,'2017-06-01 23:22:22',NULL,'2017-06-01 23:24:26',NULL,NULL,NULL,NULL,0),(148,'3','maxinous','jalan','a7.pdf','9','10',NULL,'2017-06-02 00:00:00','2017-06-02 00:00:00',NULL,0,0,NULL,NULL,NULL,NULL,'0',NULL,NULL,0,NULL,NULL,NULL,NULL,0,NULL,1,0,0,'2017-06-02 14:07:07',NULL,'2017-06-02 14:30:19',NULL,NULL,NULL,NULL,0);

/*Table structure for table `tb_m_golongan` */

DROP TABLE IF EXISTS `tb_m_golongan`;

CREATE TABLE `tb_m_golongan` (
  `id_golongan` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama_golongan` varchar(150) NOT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tb_m_golongan` */

insert  into `tb_m_golongan`(`id_golongan`,`nama_golongan`) values (1,'Golongan B'),(2,'gologan A');

/*Table structure for table `tb_m_jabatan_adm_akademik` */

DROP TABLE IF EXISTS `tb_m_jabatan_adm_akademik`;

CREATE TABLE `tb_m_jabatan_adm_akademik` (
  `id_jabatanadm` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jabatanadm` varchar(150) NOT NULL,
  PRIMARY KEY (`id_jabatanadm`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tb_m_jabatan_adm_akademik` */

insert  into `tb_m_jabatan_adm_akademik`(`id_jabatanadm`,`nama_jabatanadm`) values (1,'Jabatan Akademik A');

/*Table structure for table `tb_m_jabfungsional` */

DROP TABLE IF EXISTS `tb_m_jabfungsional`;

CREATE TABLE `tb_m_jabfungsional` (
  `id_jabfungsional` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jabfungsional` varchar(150) NOT NULL,
  PRIMARY KEY (`id_jabfungsional`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tb_m_jabfungsional` */

insert  into `tb_m_jabfungsional`(`id_jabfungsional`,`nama_jabfungsional`) values (1,'Jabatan A'),(2,'Jabatan B');

/*Table structure for table `tb_mahasiswa` */

DROP TABLE IF EXISTS `tb_mahasiswa`;

CREATE TABLE `tb_mahasiswa` (
  `NIM` int(10) NOT NULL AUTO_INCREMENT,
  `id_bidstudi` int(11) NOT NULL,
  `namaLengkap` varchar(120) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` tinyint(1) NOT NULL COMMENT '0: perempuan; 1: laki-laki',
  `noHP` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `program` enum('Reguler','Paralel') NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status_mhs` tinyint(1) NOT NULL COMMENT '0: belum lulus; 1: lulus',
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tb_mahasiswa` */

insert  into `tb_mahasiswa`(`NIM`,`id_bidstudi`,`namaLengkap`,`alamat`,`tgl_lahir`,`jenis_kel`,`noHP`,`email`,`program`,`foto`,`status_mhs`) values (1,1,'mahasiswa tes','jalan nyx no 4','2017-01-17',1,'0989898','ch2k2jr@gmail.com','Reguler','mhs.png',1),(3,1,'Mahasiswa Tes','Alamat Tes','2017-06-01',1,'12345678','ch2k2jr@gmail.com','Paralel','mhs.png',1);

/*Table structure for table `tb_operator` */

DROP TABLE IF EXISTS `tb_operator`;

CREATE TABLE `tb_operator` (
  `id_operator` int(10) NOT NULL,
  `nama_operator` varchar(10) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_operator` */

insert  into `tb_operator`(`id_operator`,`nama_operator`,`pass`) values (1,'Admin','123');

/*Table structure for table `tb_pekerjaan_alumni` */

DROP TABLE IF EXISTS `tb_pekerjaan_alumni`;

CREATE TABLE `tb_pekerjaan_alumni` (
  `id_pekerjaan_alumni` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_alumni` int(10) unsigned NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `alamat_perusahaan` varchar(45) NOT NULL,
  `bln_masuk_kerja` tinyint(2) NOT NULL,
  `thn_masuk_kerja` year(4) NOT NULL,
  `bln_selesai_kerja` tinyint(2) NOT NULL,
  `thn_selesai_kerja` year(4) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  PRIMARY KEY (`id_pekerjaan_alumni`),
  KEY `fk_tb_pekerjaan_alumni_tb_alumni1_idx` (`id_alumni`),
  CONSTRAINT `fk_tb_pekerjaan_alumni_tb_alumni1` FOREIGN KEY (`id_alumni`) REFERENCES `tb_alumni` (`id_alumni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_pekerjaan_alumni` */

/*Table structure for table `tb_riwayat_pendidikan_formal` */

DROP TABLE IF EXISTS `tb_riwayat_pendidikan_formal`;

CREATE TABLE `tb_riwayat_pendidikan_formal` (
  `id_riwayat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_staf` int(11) NOT NULL,
  `tingkat` enum('SD','SMP','SMA','S1','S2','S3','Postdoctoral') NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `thn_awal` year(4) NOT NULL,
  `thn_akhir` year(4) NOT NULL,
  `gelar` varchar(20) NOT NULL,
  `file_pendukung` varchar(50) NOT NULL,
  PRIMARY KEY (`id_riwayat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_riwayat_pendidikan_formal` */

/*Table structure for table `tb_staf` */

DROP TABLE IF EXISTS `tb_staf`;

CREATE TABLE `tb_staf` (
  `id_staf` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_jabfungsional` tinyint(3) NOT NULL,
  `id_golongan` tinyint(3) NOT NULL,
  `id_jabatanadm` tinyint(3) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `namaLengkap` varchar(150) NOT NULL,
  `jenkel` tinyint(1) NOT NULL COMMENT '0: perempuan; 1: laki-laki',
  `alamat` varchar(200) NOT NULL,
  `noTelp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `kelompok` enum('dosen','pranatalab','administrasi') NOT NULL,
  `foto` varchar(50) NOT NULL,
  `file_cv` varchar(50) DEFAULT NULL,
  `kuota` int(2) DEFAULT '0',
  PRIMARY KEY (`id_staf`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `tb_staf` */

insert  into `tb_staf`(`id_staf`,`id_jabfungsional`,`id_golongan`,`id_jabatanadm`,`NIP`,`namaLengkap`,`jenkel`,`alamat`,`noTelp`,`email`,`website`,`kelompok`,`foto`,`file_cv`,`kuota`) values (8,1,1,1,'001001001','Petugas TU',1,'jalan XYZ no 1','08088123','ch2k2jr@gmail.com','www.tes.com','administrasi','user-icon-61.png','a1.pdf',0),(9,1,1,1,'13100111','Made',1,'jalan XYZ no 2','08999','ch2k2jr@gmail.com','www.tes.com','dosen','user-icon-62.png','a2.pdf',10),(10,1,1,1,'1231123','Wayan',1,'Jalan XYZ no 3','09899','ch2k2jr@gmail.com','www.tes.com','dosen','user-female-alt-icon.png','a3.pdf',10);

/*Table structure for table `tb_staf_bidstudi` */

DROP TABLE IF EXISTS `tb_staf_bidstudi`;

CREATE TABLE `tb_staf_bidstudi` (
  `id_bidstudi` int(10) unsigned NOT NULL,
  `id_staf` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_bidstudi`,`id_staf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_staf_bidstudi` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama_user` tinytext,
  `username` text,
  `password` text,
  `isAktif` int(1) DEFAULT '1',
  `Parent` varchar(30) DEFAULT NULL,
  `Id_Parent` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`username`,`password`,`isAktif`,`Parent`,`Id_Parent`) values (1,'Admin Test','Admin','123',1,'Staff',1),(2,'MHS Test','mhs','123',1,'Mahasiswa',1),(3,'Tata Usaha Test','TU','123',1,'Staff',1),(4,'Made','pem1','123',1,'Staff',9),(5,'Wayan','korkp','123',1,'Staff',10),(7,'Mahasiswa Tes','3','3',1,'Mahasiswa',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
