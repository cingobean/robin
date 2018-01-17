-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for school
DROP DATABASE IF EXISTS `school`;
CREATE DATABASE IF NOT EXISTS `school` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `school`;

-- Dumping structure for table school.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table school.admin: ~2 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'malasngoding', '10406c1d7b7421b1a56f0d951e952a95'),
	(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table school.books
DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_isbn` int(11) DEFAULT NULL,
  `book_title` varchar(50) DEFAULT NULL,
  `book_author` varchar(50) DEFAULT NULL,
  `book_category` varchar(50) DEFAULT NULL,
  `book_descript` text,
  `book_date` date DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table school.books: ~0 rows (approximately)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Dumping structure for table school.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table school.ci_sessions: ~2 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
REPLACE INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('d1468632c1de6c47f1af30dab57479f0', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1408101940, ''),
	('f27636bb64b9eee2387e11878daa991b', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1408102512, 'a:6:{s:9:"user_data";s:0:"";s:8:"id_users";s:1:"1";s:10:"first_name";s:0:"";s:9:"last_name";s:0:"";s:8:"username";s:11:"fahadbillah";s:9:"logged_in";b:1;}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Dumping structure for table school.comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id_comments` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_posts` int(11) NOT NULL,
  PRIMARY KEY (`id_comments`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table school.comments: ~10 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
REPLACE INTO `comments` (`id_comments`, `id_users`, `comment`, `date_created`, `id_posts`) VALUES
	(1, 2, '', '2014-08-15 16:18:10', 0),
	(2, 2, 'wow post', '2014-08-15 16:19:15', 0),
	(3, 2, 'much post', '2014-08-15 16:20:35', 0),
	(4, 2, 'wow wow', '2014-08-15 16:28:17', 1),
	(5, 2, 'new wow', '2014-08-15 16:44:01', 1),
	(6, 2, 'new wow', '2014-08-15 16:44:26', 1),
	(7, 2, 'killa wow', '2014-08-15 16:45:12', 1),
	(8, 2, 'lets see how it works', '2014-08-15 16:51:47', 3),
	(9, 2, 'wow', '2014-08-15 16:52:49', 2),
	(10, 1, 'mammaaa', '2014-08-15 18:29:59', 3);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table school.jenis
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE IF NOT EXISTS `jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table school.jenis: ~5 rows (approximately)
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
REPLACE INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
	(1, 'Obat'),
	(2, 'Makanan'),
	(3, 'Minuman'),
	(4, 'Perlengkapan mandi'),
	(5, 'Sabun Cuci');
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;

-- Dumping structure for table school.likes_favorites
DROP TABLE IF EXISTS `likes_favorites`;
CREATE TABLE IF NOT EXISTS `likes_favorites` (
  `id_likes_favorites` int(11) NOT NULL AUTO_INCREMENT,
  `id_posts` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `type` char(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_likes_favorites`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table school.likes_favorites: ~21 rows (approximately)
/*!40000 ALTER TABLE `likes_favorites` DISABLE KEYS */;
REPLACE INTO `likes_favorites` (`id_likes_favorites`, `id_posts`, `id_users`, `type`, `date_created`) VALUES
	(1, 1, 2, 'l', '2014-08-15 17:30:58'),
	(2, 1, 2, 'l', '2014-08-15 17:32:07'),
	(3, 1, 2, 'l', '2014-08-15 17:32:31'),
	(4, 1, 2, 'f', '2014-08-15 17:49:26'),
	(5, 1, 2, 'f', '2014-08-15 17:49:53'),
	(6, 2, 2, 'f', '2014-08-15 17:56:28'),
	(7, 8, 2, 'f', '2014-08-15 17:56:44'),
	(8, 1, 2, 'f', '2014-08-15 17:57:12'),
	(9, 1, 2, 'f', '2014-08-15 17:57:51'),
	(10, 1, 2, 'l', '2014-08-15 18:01:17'),
	(11, 1, 2, 'f', '2014-08-15 18:01:24'),
	(12, 1, 2, 'l', '2014-08-15 18:01:52'),
	(13, 1, 2, 'f', '2014-08-15 18:02:01'),
	(14, 1, 2, 'l', '2014-08-15 18:03:39'),
	(15, 1, 2, 'f', '2014-08-15 18:05:18'),
	(16, 1, 2, 'l', '2014-08-15 18:05:23'),
	(17, 1, 2, 'l', '2014-08-15 18:09:15'),
	(18, 3, 2, 'l', '2014-08-15 18:23:16'),
	(19, 3, 2, 'f', '2014-08-15 18:23:45'),
	(20, 2, 2, 'l', '2014-08-15 18:24:02'),
	(21, 2, 1, 'l', '2014-08-15 18:28:44');
/*!40000 ALTER TABLE `likes_favorites` ENABLE KEYS */;

-- Dumping structure for table school.login_session
DROP TABLE IF EXISTS `login_session`;
CREATE TABLE IF NOT EXISTS `login_session` (
  `uid` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table school.login_session: ~2 rows (approximately)
/*!40000 ALTER TABLE `login_session` DISABLE KEYS */;
REPLACE INTO `login_session` (`uid`, `username`, `password`, `level`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
	(2, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member');
/*!40000 ALTER TABLE `login_session` ENABLE KEYS */;

-- Dumping structure for table school.registration
DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `City` varchar(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table school.registration: ~0 rows (approximately)
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;

-- Dumping structure for table school.siswa
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `siswa_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nis` int(11) DEFAULT NULL,
  PRIMARY KEY (`siswa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table school.siswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;

-- Dumping structure for table school.tbl_mcontent
DROP TABLE IF EXISTS `tbl_mcontent`;
CREATE TABLE IF NOT EXISTS `tbl_mcontent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mtittle` varchar(255) DEFAULT NULL,
  `mcontent` text,
  `mimage` varchar(150) DEFAULT NULL,
  `mdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mbrowser` varchar(255) DEFAULT NULL,
  `mipaddress` varchar(255) DEFAULT NULL,
  `muser` varchar(255) DEFAULT NULL,
  `mstatus` int(3) NOT NULL DEFAULT '0' COMMENT '0:Tidak Aktif , 1:Aktif',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2726 DEFAULT CHARSET=latin1;

-- Dumping data for table school.tbl_mcontent: 1 rows
/*!40000 ALTER TABLE `tbl_mcontent` DISABLE KEYS */;
REPLACE INTO `tbl_mcontent` (`id`, `mtittle`, `mcontent`, `mimage`, `mdate`, `mbrowser`, `mipaddress`, `muser`, `mstatus`) VALUES
	(2719, 'nobita', '<p>A fellow traveller posed an interesting question: Why do you wear shorts rather than<br />\r\nlongs? The person was wearing culottes as the time, so I considered the question equivocal in nature,<br />\r\nbut I attempted to provide an honest answer despite the dubiousness of the questioner&rsquo;s dress.</p>\r\n', 'nobita.jpg', '2018-01-10 09:56:51', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3316.0 Safari/537.36', '192.168.168.112', 'admin', 1);
/*!40000 ALTER TABLE `tbl_mcontent` ENABLE KEYS */;

-- Dumping structure for table school.tbl_mcontent_history
DROP TABLE IF EXISTS `tbl_mcontent_history`;
CREATE TABLE IF NOT EXISTS `tbl_mcontent_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mtittle` varchar(255) DEFAULT NULL,
  `mcontent` text,
  `mdate` datetime DEFAULT NULL,
  `mbrowser` varchar(255) DEFAULT NULL,
  `mipaddress` varchar(255) DEFAULT NULL,
  `muser` varchar(255) DEFAULT NULL,
  `mstatus` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table school.tbl_mcontent_history: 0 rows
/*!40000 ALTER TABLE `tbl_mcontent_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_mcontent_history` ENABLE KEYS */;

-- Dumping structure for table school.tbl_mfooter
DROP TABLE IF EXISTS `tbl_mfooter`;
CREATE TABLE IF NOT EXISTS `tbl_mfooter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mfcontent` text,
  `mfdate` datetime DEFAULT NULL,
  `mfbrowser` varchar(255) DEFAULT NULL,
  `mfipaddress` varchar(255) DEFAULT NULL,
  `mfuser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table school.tbl_mfooter: 0 rows
/*!40000 ALTER TABLE `tbl_mfooter` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_mfooter` ENABLE KEYS */;

-- Dumping structure for table school.tbl_musers
DROP TABLE IF EXISTS `tbl_musers`;
CREATE TABLE IF NOT EXISTS `tbl_musers` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table school.tbl_musers: 1 rows
/*!40000 ALTER TABLE `tbl_musers` DISABLE KEYS */;
REPLACE INTO `tbl_musers` (`id_user`, `username`, `email`, `password`, `nama_lengkap`, `level`) VALUES
	(1, 'admin', 'admin@yahoo.com', '12345', 'admin', 'administrator');
/*!40000 ALTER TABLE `tbl_musers` ENABLE KEYS */;

-- Dumping structure for table school.tb_barang
DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE IF NOT EXISTS `tb_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` varchar(50) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `harga_brg` int(100) NOT NULL,
  `keterangan` text NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `stok_brg` int(11) NOT NULL,
  `expired` date NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table school.tb_barang: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_barang` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
