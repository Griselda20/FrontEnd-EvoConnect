/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 5.7.24 : Database - jobportalevotect
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jobportalevotect` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jobportalevotect`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `kota` */

DROP TABLE IF EXISTS `kota`;

CREATE TABLE `kota` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kota` */

/*Table structure for table `lamaran_kerja` */

DROP TABLE IF EXISTS `lamaran_kerja`;

CREATE TABLE `lamaran_kerja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_lowongan` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'Sudah melamar;Sedang ditinjau;Wawancara;Diterima;Ditolak;Mengundurkan diri',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `lamaran_kerja` */

/*Table structure for table `lowongan` */

DROP TABLE IF EXISTS `lowongan`;

CREATE TABLE `lowongan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) NOT NULL,
  `judul_lowongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_lowongan` int(11) NOT NULL,
  `detail_pekerjaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_dibuka` datetime NOT NULL,
  `tanggal_ditutup` datetime NOT NULL,
  `lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('partime','fulltime','remote','magang','hibrid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_usia` int(11) NOT NULL,
  `maks_usia` int(11) NOT NULL,
  `sistem_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_gaji` int(11) NOT NULL,
  `maks_gaji` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `lowongan` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2024_06_24_163011_create_admins_table',1),
(6,'2024_06_24_163018_create_lamaran_kerjas_table',1),
(7,'2024_06_24_163024_create_lowongans_table',1),
(8,'2024_06_24_163030_create_pendidikans_table',1),
(9,'2024_06_24_163035_create_pengalaman_kerjas_table',1),
(10,'2024_06_24_163042_create_perusahaans_table',1),
(11,'2024_06_25_050106_create_lowongan_table',2),
(12,'2024_06_25_062413_create_kota_table',3),
(13,'2024_06_25_063621_create_kota_table',4);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pendidikan` */

DROP TABLE IF EXISTS `pendidikan`;

CREATE TABLE `pendidikan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tingkat_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `tanggal_mulai` timestamp NULL DEFAULT NULL,
  `tanggal_selesai` timestamp NULL DEFAULT NULL,
  `institusi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pendidikan_user_id_foreign` (`user_id`),
  CONSTRAINT `pendidikan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pendidikan` */

/*Table structure for table `pengalaman_kerja` */

DROP TABLE IF EXISTS `pengalaman_kerja`;

CREATE TABLE `pengalaman_kerja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_bergabung` timestamp NULL DEFAULT NULL,
  `tanggal_berakhir` timestamp NULL DEFAULT NULL,
  `deskripsi_pekerjaan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pengalaman_kerja` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `perusahaan` */

DROP TABLE IF EXISTS `perusahaan`;

CREATE TABLE `perusahaan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_perusahaan` text COLLATE utf8mb4_unicode_ci,
  `bidang_industri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `perusahaan` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_tanggal_lahir` timestamp NULL DEFAULT NULL,
  `domisili` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` text COLLATE utf8mb4_unicode_ci,
  `dokumen_pendukung` text COLLATE utf8mb4_unicode_ci,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
