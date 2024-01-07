-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.72-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table aguns.cards
CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_name` varchar(255) NOT NULL,
  `card_logo` varchar(255) NOT NULL,
  `card_number_length` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table aguns.cards: 4 rows
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT IGNORE INTO `cards` (`id`, `card_name`, `card_logo`, `card_number_length`) VALUES
	(2, 'EBAY GIFTCARD', '../uploads/ebay-gift.jpeg', 16),
	(1, 'APPLE GIFTCARD', '../uploads/apple-ma.png', 16),
	(3, 'VISA GIFTCARD', '../uploads/visa.png', 30),
	(4, 'AMEX GIFTCARD', '../uploads/amex.png', 20);
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
