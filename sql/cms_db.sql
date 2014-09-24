-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.14 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for wow_cms
CREATE DATABASE IF NOT EXISTS `wow_cms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wow_cms`;


-- Dumping structure for table wow_cms.info
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website_name` varchar(50) NOT NULL DEFAULT 'HellguardWoW',
  `core` varchar(50) NOT NULL DEFAULT 'trinity',
  `acc_db` varchar(50) NOT NULL DEFAULT 'auth',
  `char_db` varchar(50) NOT NULL DEFAULT 'characters',
  `world_db` varchar(50) DEFAULT 'world',
  `style` varchar(50) DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table wow_cms.store
CREATE TABLE IF NOT EXISTS `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `donate` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table wow_cms.voted_cooldown
CREATE TABLE IF NOT EXISTS `voted_cooldown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `voted_link` varchar(50) NOT NULL,
  `voted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table wow_cms.vote_links
CREATE TABLE IF NOT EXISTS `vote_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `vote_link` varchar(50) DEFAULT NULL,
  `vote_img` varchar(50) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
