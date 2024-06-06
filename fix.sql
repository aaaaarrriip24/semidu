/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.20-MariaDB : Database - semidu_progres
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`semidu_progres` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `semidu`;

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `penulis_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `artikel` */

insert  into `artikel`(`id`,`penulis_id`,`judul`,`tipe`,`deskripsi`,`foto`,`tanggal`,`created_at`,`updated_at`) values 
(5,'1','Judul','Berita','Deskripsi DeskripsiDeskripsiDeskripsiDeskripsi vDeskripsi Deskripsi Deskripsi Deskripsi Deskripsi v Deskripsi Deskripsi vDeskripsi Deskripsi Deskripsi Deskripsi vDeskripsi Deskripsi Deskripsi Deskripsi Deskripsi','1628449914_1628329405_bahari.jpg','2021-08-11','2021-08-08 15:02:11','2021-08-08 19:11:54'),
(6,'1','wkwkwkwkwkkww','Artikel','wkwkwkwkwk kw wk wkwkwkwkkwwwkw kwkw kwkkwwwkwkwkwkwkkww wkwkwkwkw kkwww kwkwkwk wkkwwwkwkwkw kwkkw wwkwkwkwkw kkwww kwkwkwkwk kwwwkwkw kw kw kkwwwk wkwkwkwkkwwwkwkwk wkwkkwwwkwkwkwkw kkwwwkw kwkwkwkkwwwkw kwkwkwkkwwwkwkwkwkwkkw wwkwkwkw kwkkwwwk wk   wkwkwkkw ww kw kwkwkwkkwwwk wkwkwk wkkw ww kw kwkwkwkkw wwkw  kwkwkwkkw wwkwkwk kwkkww wkwkwkwkw kkwwwkwkwkwkwkkwwwkwk \r\n wkwkwkkww wkwkwkw kwkk wwwkwkwkwk wk kwwwkwkwkwkwkk  wwwkwkwkwkwkkwwwkwkwkwkwkkwwwkwkwkwkwkkwwwkwkwkwkw kkwww kwkwkwkwkkwwwk wkwkwkwkkww','1628449263_WhatsApp Image 2021-07-10 at 12.23.51.jpeg','2021-08-09','2021-08-08 19:01:03','2021-08-08 19:02:24');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `guru` */

insert  into `guru`(`id`,`nama`,`foto`,`jabatan`,`mapel_id`,`kelas_id`,`created_at`,`updated_at`) values 
(2,'Aditya Rizky Arifin','1628447505_user.jpg','Kepala Sekolah','4','4',NULL,'2021-08-08 18:52:46'),
(3,'Mochammad Diky Fitriansyah','1628432796_user2.jpg','Wakil Kepala Sekolah','2','6',NULL,'2021-08-08 18:53:12');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kelas` */

insert  into `kelas`(`id`,`kelas`,`created_at`,`updated_at`) values 
(2,'1',NULL,NULL),
(3,'2',NULL,NULL),
(4,'3',NULL,NULL),
(5,'4',NULL,NULL),
(6,'5',NULL,NULL);

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mata_pelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mapel` */

insert  into `mapel`(`id`,`mata_pelajaran`,`created_at`,`updated_at`) values 
(2,'IPA',NULL,NULL),
(3,'PAI',NULL,NULL),
(4,'PKN',NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2021_07_09_181408_create_artikel_table',1),
(5,'2021_08_05_153750_create_guru_table',1),
(6,'2021_08_05_155427_create_mapel_table',1),
(7,'2021_08_05_155531_create_kelas_table',1),
(8,'2021_08_05_160104_create_kegiatan_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('moch.fitriansyah19@student.uisi.ac.id','$2y$10$bDBcEny2xSrqIKkhk0Gyne5vTsaXz0cC5.Rdwmt.ZmfGImqV8NGAe','2021-08-07 15:40:39');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleuser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`roleuser`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin','admin@gmail.com',NULL,'$2y$10$u5IvUY9ARKGMZOOlQuxGyuKE7Hqs1qTc9IlYL5UNi12v2aG3VnAXa','Admin','ygse7kDn7P89EEAVdeks3p6OCojkXpHzZms6BzhOwOZjkwiKlDNNU6SuvHvN','2021-08-05 16:26:34','2021-08-05 19:22:36'),
(4,'Arif','mochammad.syahputra19@student.uisi.ac.id',NULL,'$2y$10$DoXgh96RB7FlKNzaeCmHvOe2IFgaoRkLGpAZpoKo.494iaVQQaaXO','Jurnalis',NULL,NULL,'2021-08-08 15:12:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
