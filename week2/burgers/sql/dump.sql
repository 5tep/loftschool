-- --------------------------------------------------------
-- Хост:                         213.59.169.2
-- Версия сервера:               5.7.27-0ubuntu0.16.04.1 - (Ubuntu)
-- Операционная система:         Linux
-- HeidiSQL Версия:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп структуры для таблица db.burger_orders
CREATE TABLE IF NOT EXISTS `burger_orders` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_user` int(11) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `callback` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `cash` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_burger_orders_burger_users` (`id_user`),
  CONSTRAINT `FK_burger_orders_burger_users` FOREIGN KEY (`id_user`) REFERENCES `burger_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='Orders';

-- Дамп данных таблицы db.burger_orders: ~14 rows (приблизительно)
INSERT INTO `burger_orders` (`id`, `id_user`, `address`, `callback`, `cash`, `card`, `comment`, `order_date`) VALUES
	(0000000004, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 17:23:25'),
	(0000000005, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 17:24:04'),
	(0000000006, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 22:16:37'),
	(0000000007, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 22:17:56'),
	(0000000008, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 22:18:31'),
	(0000000009, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 22:18:42'),
	(0000000010, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 22:21:52'),
	(0000000011, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 22:24:31'),
	(0000000012, 1, 'Ленина, 654/33, 33, этаж 3', 1, 0, 1, 'defghyuimo ,tyuio pty ui', '2023-10-15 22:26:31'),
	(0000000014, 2, 'Новикова, 34/3, 3, этаж 4', 0, 1, 0, 'regrdfgbv dfg cxqwedsgfbd fcxew fgfdccew fasgfdecrwcew sg', '2023-10-15 22:34:25'),
	(0000000015, 2, 'Новикова, 34/3, 3, этаж 4', 0, 1, 0, 'regrdfgbv dfg cxqwedsgfbd fcxew fgfdccew fasgfdecrwcew sg', '2023-10-15 22:34:34'),
	(0000000016, 2, 'Новикова, 34/3, 3, этаж 4', 0, 1, 0, 'regrdfgbv dfg cxqwedsgfbd fcxew fgfdccew fasgfdecrwcew sg', '2023-10-15 22:34:36'),
	(0000000017, 3, 'Новикова, 34/3, 3, этаж 4', 0, 1, 0, 'regrdfgbv dfg cxqwedsgfbd fcxew fgfdccew fasgfdecrwcew sg', '2023-10-15 22:34:50'),
	(0000000018, 4, 'Новикова, 34/3, 2, этаж 4', 0, 1, 0, 'regrdfgbv dfg cxqwedsgfbd fcxew fgfdccew fasgfdecrwcew sg', '2023-10-15 22:40:47');

-- Дамп структуры для таблица db.burger_users
CREATE TABLE IF NOT EXISTS `burger_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(255) DEFAULT NULL COMMENT 'Name client',
  `email` varchar(25) DEFAULT NULL COMMENT 'E-mail client',
  `phone` varchar(15) DEFAULT NULL COMMENT 'Mobile phone client',
  `count_orders` int(11) DEFAULT '0' COMMENT 'Count orders',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'Create Time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Clients';

-- Дамп данных таблицы db.burger_users: ~4 rows (приблизительно)
INSERT INTO `burger_users` (`id`, `name`, `email`, `phone`, `count_orders`, `create_time`) VALUES
	(1, 'Петр', 'pp@mail.ru', '79123456700', 10, '2023-10-15 17:23:25'),
	(2, 'Антон', '79782543118@79782543118', '+7978-892-07-44', 3, '2023-10-15 22:34:24'),
	(3, 'Антон', '79782540487@79782540487', '+7978-892-07-44', 1, '2023-10-15 22:34:50'),
	(4, 'Антон', 'aa@mail.ru', '+7978-892-07-44', 1, '2023-10-15 22:40:47');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
