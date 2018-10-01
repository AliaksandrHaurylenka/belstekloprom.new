-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.19 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица yii2-bsp.bottle
CREATE TABLE IF NOT EXISTS `bottle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(5) NOT NULL,
  `venchik` varchar(10) NOT NULL,
  `venchik_en` varchar(10) NOT NULL,
  `volume` int(11) NOT NULL DEFAULT '5',
  `number` int(11) NOT NULL DEFAULT '3',
  `height` float NOT NULL,
  `dev_1` varchar(5) NOT NULL,
  `diameter` float NOT NULL,
  `dev_2` varchar(5) NOT NULL,
  `name_1` varchar(30) NOT NULL,
  `name_2` varchar(30) NOT NULL,
  `full_naliv` int(11) NOT NULL DEFAULT '5',
  `dev_naliv` varchar(5) NOT NULL,
  `massa` int(11) NOT NULL DEFAULT '4',
  `dev_massa` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы yii2-bsp.bottle: ~38 rows (приблизительно)
/*!40000 ALTER TABLE `bottle` DISABLE KEYS */;
INSERT INTO `bottle` (`id`, `type`, `venchik`, `venchik_en`, `volume`, `number`, `height`, `dev_1`, `diameter`, `dev_2`, `name_1`, `name_2`, `full_naliv`, `dev_naliv`, `massa`, `dev_massa`, `status`) VALUES
	(1, 'X', 'ВКП', 'vkp', 500, 1, 264, '±1.7', 68.3, '±1.4', 'DESANT twist', 'desant-twist', 520, '±10', 340, '±15', 'old'),
	(2, 'X', 'КПНв', 'kpnv', 500, 23, 242, '±1.3', 69, '±1.3', 'BSP', 'bbh-low', 520, '±10', 340, '±15', 'old'),
	(3, 'X', 'ВКП-1', 'vkp', 500, 4, 267.5, '±1.7', 66.6, '±1.3', 'Криница', 'krinitsa', 520, '±10', 345, '±15', 'archive'),
	(4, 'X', 'ВКП-2', 'vkp', 500, 15, 258, '±1.7', 68.1, '±1.4', 'Златы Базант', 'zlatBaz', 525, '±10', 330, '±15', 'archive'),
	(5, 'X', 'ВКП', 'vkp', 500, 2, 257, '±1.7', 68.6, '±1.4', 'ZIP', 'zip', 516, '±10', 340, '±10', 'archive'),
	(6, 'X', 'КПНн', 'kpnn', 500, 5, 257.5, '±1.7', 69, '±1.4', 'ALIVARIA 1864', 'alivaria1864', 542, '±10', 340, '±15', 'old'),
	(7, 'X', 'ВКП', 'vkp', 500, 3, 260, '±1.7', 68.1, '±1.4', 'MPK twist', 'mpk-twist', 524, '±7', 340, '±10', 'archive'),
	(8, 'X', 'КПНн', 'kpnn', 500, 6, 251, '±1.6', 68, '±1.3', 'Кальтенберг', 'kaltenberg', 520, '±10', 345, '±15', 'archive'),
	(9, 'X', 'КПНв', 'kpnv', 500, 8, 260, '±1.6', 68.5, '±1.3', 'New ALIVARIA', 'new-alivaria', 520, '±10', 340, '±10', 'old'),
	(10, 'X', 'КПНн', 'kpnn', 568, 9, 282, '±1.8', 67.6, '±1.4', 'Pinta', 'pinta', 588, '±10', 360, '±15', 'old'),
	(11, 'X', 'КПНв', 'kpnv', 500, 10, 268, '±1.3', 69, '±1.4', 'Special', 'special', 517, '±10', 345, '±15', 'old'),
	(12, 'X', 'КПНв', 'kpnv', 500, 11, 260, '±1.7', 68.1, '±1.4', 'MPK', 'mpk', 524, '±7', 340, '±10', 'archive'),
	(13, 'X', 'КПНв', 'kpnv', 500, 12, 270, '±1.7', 68.3, '±1.4', 'LONG-NECK', 'long-neck', 520, '±10', 375, '±15', 'old'),
	(14, 'X', 'КПНв', 'kpnv', 500, 13, 249, '±1.7', 68.7, '±1.3', 'BBH', 'bbh', 517, '±7', 345, '±10', 'archive'),
	(15, 'X', 'КПНв', 'kpnv', 500, 14, 260, '±1.7', 66.9, '±1.4', 'NRW', 'nrw', 520, '±10', 340, '±15', 'old'),
	(16, 'X', 'ВКП-2', 'vkp', 500, 16, 258, '±1.7', 70.9, '±1.4', 'Хмель', 'bobr', 520, '±10', 330, '±15', 'archive'),
	(17, 'X', 'ВКП', 'vkp', 500, 17, 260, '±1.7', 66.9, '±1.4', 'NRW twist', 'nrw-twist', 520, '±10', 340, '±15', 'old'),
	(18, 'X', 'КПНв', 'kpnv', 500, 18, 264, '±1.7', 68.3, '±1.4', 'DESANT', 'desant', 520, '±10', 340, '±15', 'old'),
	(19, 'X', 'ВКП', 'vkp', 500, 19, 268, '±1.7', 69, '±1.4', 'PREMIUM twist', 'premium-twist', 520, '±10', 375, '±15', 'archive'),
	(20, 'X', 'КПНв', 'kpnv', 500, 20, 228, '±1.6', 70.5, '±1.4', 'EURO', 'euro', 520, '±7', 340, '±10', 'archive'),
	(21, 'X', 'КПНн', 'kpnn', 500, 22, 246.5, '±1.6', 70.5, '±1.4', 'Amber', 'amber', 520, '±10', 340, '±15', 'old'),
	(22, 'X', 'КПНв', 'kpnv', 500, 24, 242, '±1.6', 70.3, '±1.3', 'Жигулевское пиво', 'ziguli', 520, '±10', 345, '±10', 'old'),
	(23, 'X', 'КПНв', 'kpnv', 330, 27, 174, '±1.3', 69.5, '±1.4', 'Barrel 330', 'barrel-330', 345, '±10', 275, '±10', 'archive'),
	(24, 'X', 'КПНн', 'kpnn', 330, 25, 234.2, '±1.5', 60.3, '±1.2', 'LIDA', 'lida330', 350, '±7', 260, '+15', 'old'),
	(25, 'X', 'ВКП', 'vkp', 500, 26, 269.6, '±1.6', 68.7, '±1.3', 'Classic twist', 'classic-twist', 525, '±10', 350, '±10', 'old'),
	(26, 'X', 'ВКП-1', 'vkp', 500, 30, 264, '±1.7', 68.3, '±1.4', 'LONG-NECK twist', 'long-neck-twist', 520, '±10', 375, '±10', 'old'),
	(27, 'X', 'КПНв', 'kpnv', 500, 7, 242, '±1.5', 69.5, '±1.4', 'Варшава', 'varshava', 520, '±10', 345, '±10', 'old'),
	(28, 'X', 'КПНн', 'kpnn', 500, 35, 246.5, '±1.6', 70.5, '±1.4', 'AMBER PIWO', 'amber-piwo', 520, '±10', 340, '±15', 'archive'),
	(29, 'X', 'К', 'other', 700, 33, 280, '±1.7', 74.1, '±1.4', 'GRAPE', 'grape-700', 725, '±15', 420, '±15', 'old'),
	(30, 'XVIII', 'Ш', 'other', 750, 50, 300, '±1.8', 83, '±1.5', 'Шампань', 'shampan', 785, '±15', 645, '±10', 'old'),
	(31, 'X', 'КПНн', 'kpnn', 500, 15, 258, '±1.7', 68.1, '±1.4', 'Златы Базант КПНн', 'zlat-baz', 525, '±10', 330, '±15', 'old'),
	(32, 'X', 'КПНн', 'kpnn', 500, 16, 258, '±1.7', 70.9, '±1.4', 'Хмель КПНн', 'hops', 522, '±10', 330, '±15', 'old'),
	(33, 'X', 'В-28-1', 'other', 700, 37, 281, '±2.0', 74.1, '±1.4', 'GRAPE twist', 'grape-700-twist', 725, '±15', 420, '±15', 'old'),
	(34, 'X', 'В-28-1', 'other', 500, 36, 262.5, '±2', 68.3, '±1.4', 'DESANT wine', 'desant-wine', 520, '±10', 340, '±15', 'new'),
	(35, 'X', 'КПНв', 'kpnv', 500, 29, 270, '±1.7', 68.3, '±1.4', 'LONG-NECK ALIVA', 'long-neck-aliva', 519, '±7', 355, '±10', 'new'),
	(36, 'X', 'П-29-А', 'other', 750, 40, 312, '±1.8', 74, '±1.4', 'Бордо А', 'bordo-A', 775, '±10', 460, '±15', 'new'),
	(37, 'X', 'П-29-Б', 'other', 750, 39, 310, '±1.8', 74, '±1.4', 'Бордо Б', 'bordo-B', 775, '±10', 460, '±15', 'new'),
	(38, 'X', 'КПНв', 'kpnv', 500, 31, 242, '±1.6', 70.7, '±1.4', 'KULT', 'kult', 520, '±10', 340, '±10', 'new');
/*!40000 ALTER TABLE `bottle` ENABLE KEYS */;

-- Дамп структуры для таблица yii2-bsp.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `cat_item` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы yii2-bsp.gallery: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` (`id`, `photo_name`, `title`, `alt`, `cat_item`) VALUES
	(1, 'otdel_otk.jpg', 'Отдел технического контроля БелСтеклоПром', 'ОТК', 3),
	(2, 'izuchenie_braka.jpg', 'Изучение брака стеклянной бутылки', 'ОТК', 3),
	(3, 'vzveshivanie_shihti.jpg', 'Лаборатория БелСтеклоПром', 'Лаборатория', 8),
	(4, 'otdel_sbita.jpg', 'Отдел сбыта БелСтеклоПром', 'Сбыт', 1),
	(5, 'gidro_ispitanie.jpg', 'Испытание на гидростатическое давление стеклянной бутылки', 'ОТК', 3),
	(6, 'szatie_ispitanie.jpg', 'Испытание на сопротивление сжатию бутылки', 'ОТК', 3),
	(7, 'izmerenie_tolschini.jpg', 'Измерение толщины упрочняющего покрытия на корпусе стеклянной бутылки', 'ОТК', 3);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;

-- Дамп структуры для таблица yii2-bsp.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы yii2-bsp.migration: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1538205033),
	('m130524_201442_init', 1538205036),
	('m170504_093719_create_bottle_table', 1538205037),
	('m170601_083737_create_gallery_table', 1538205037),
	('m170608_094639_create_venchik_table', 1538205037),
	('m171115_110149_create_save_message_table', 1538205038);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;

-- Дамп структуры для таблица yii2-bsp.save_message
CREATE TABLE IF NOT EXISTS `save_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `subject` varchar(30) NOT NULL,
  `body` text NOT NULL,
  `email_recipient` varchar(50) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы yii2-bsp.save_message: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `save_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `save_message` ENABLE KEYS */;

-- Дамп структуры для таблица yii2-bsp.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы yii2-bsp.user: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(197, 'belstekloprom', 'bCzPegHZBTRN0QEVkaaSwNOSSaDkd_Cf', '$2y$13$Xo2zRtwOwtUaSe8KwllQFeIbAtmWf8/OdG8WSgbaEPZxVL5lduZAe', NULL, 'agavrilenko@belstekloprom.com', 10, 1501500673, 1501500673);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Дамп структуры для таблица yii2-bsp.venchik
CREATE TABLE IF NOT EXISTS `venchik` (
  `id_venchik` int(11) NOT NULL AUTO_INCREMENT,
  `venchik_ru` varchar(12) NOT NULL,
  `venchik_en` varchar(12) NOT NULL,
  `venchik_id_for_code` varchar(12) NOT NULL,
  `img` varchar(50) NOT NULL,
  `img_1` varchar(50) NOT NULL,
  PRIMARY KEY (`id_venchik`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы yii2-bsp.venchik: ~10 rows (приблизительно)
/*!40000 ALTER TABLE `venchik` DISABLE KEYS */;
INSERT INTO `venchik` (`id_venchik`, `venchik_ru`, `venchik_en`, `venchik_id_for_code`, `img`, `img_1`) VALUES
	(1, 'КПНв', 'kpnv', 'kpnv', 'kpnv.png', 'kpnv_1.png'),
	(2, 'КПНн', 'kpnn', 'kpnn', 'kpnn.png', 'kpnn_1.png'),
	(3, 'ВКП', 'vkp', 'vkp', 'vkp.png', 'vkp_1.png'),
	(4, 'ВКП-1', 'vkp', 'vkp-1', 'vkp-1.png', 'vkp-1_1.png'),
	(5, 'ВКП-2', 'vkp', 'vkp-2', 'vkp-2.png', 'vkp-2_1.png'),
	(6, 'К', 'other', 'k', 'k.png', 'k_1.png'),
	(7, 'Ш', 'other', 'sh', 'sh.png', 'sh_1.png'),
	(8, 'В-28-1', 'other', 'v-28-1', 'v-28-1.png', 'v-28-1_1.png'),
	(9, 'П-29-А', 'other', 'p-29-a', 'p-29-a.png', 'p-29-a_1.png'),
	(10, 'П-29-Б', 'other', 'p-29-b', 'p-29-b.png', 'p-29-b_1.png');
/*!40000 ALTER TABLE `venchik` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
