-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server-Version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server-Betriebssystem:        Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportiere Datenbank-Struktur für project_1211
CREATE DATABASE IF NOT EXISTS `project_1211` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `project_1211`;

-- Exportiere Struktur von Tabelle project_1211.contact_messages
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `productPackage` varchar(255) DEFAULT NULL,
  `cfxUsername` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `discordId` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportiere Daten aus Tabelle project_1211.contact_messages: ~21 rows (ungefähr)
INSERT INTO `contact_messages` (`id`, `fullName`, `productPackage`, `cfxUsername`, `email`, `productId`, `discordId`, `message`, `submitted_at`) VALUES
	(51, 'Reginald Lind DVM', 'nam', 'nolan20', 'schroeder.carmel@schuster.org', '61750', 'kenyatta25#4666', 'Rerum est accusantium ut odio ullam.', '2009-07-01 04:19:32'),
	(52, 'Luciano Nikolaus', 'incidunt', 'aliza60', 'oluettgen@dicki.com', '93170', 'kweimann#5868', 'Aperiam eum nihil dolorem voluptatem.', '1987-02-12 08:19:16'),
	(53, 'Leonardo Ward', 'est', 'ikiehn', 'percival27@volkman.biz', '55685', 'verla.larkin#1089', 'Odio illo voluptatibus aut harum.', '1989-02-09 11:23:31'),
	(54, 'Mrs. Kaylee Crist', 'incidunt', 'roob.rodrigo', 'jonathon.zulauf@hotmail.com', '32372', 'strosin.garth#6165', 'Voluptate labore praesentium autem quae.', '1983-07-18 18:30:08'),
	(55, 'Gilbert Wyman', 'reprehenderit', 'abbie.jerde', 'sdamore@conroy.com', '72053', 'laura20#1952', 'Architecto soluta enim modi magnam laudantium ut.', '1998-09-05 15:06:23'),
	(56, 'Joseph Ziemann', 'ipsa', 'kendrick74', 'raymond.damore@yahoo.com', '52662', 'aliya76#4428', 'Velit rerum iste odit fugiat id enim.', '1997-01-12 11:35:36'),
	(57, 'Dr. Minnie Kuphal DVM', 'dicta', 'lakin.ruby', 'roberta58@yahoo.com', '70959', 'schiller.gilbert#9508', 'Temporibus rerum natus unde a non et.', '1997-05-09 15:36:33'),
	(58, 'Dedrick Champlin', 'sit', 'yasmin.glover', 'guy.hegmann@stracke.com', '43210', 'eriberto.kirlin#5308', 'Dolor aut ratione voluptas quia.', '2000-12-20 21:45:55'),
	(59, 'Alejandrin Beer', 'debitis', 'tkris', 'wosinski@jacobi.com', '74107', 'oglover#5142', 'Debitis blanditiis odit vel quasi.', '1987-03-13 00:56:08'),
	(60, 'Mr. Gussie Jerde Jr.', 'natus', 'arnold46', 'windler.alverta@bruen.com', '23405', 'bkautzer#8511', 'Quo eos voluptatem odit voluptatum qui quae.', '2015-04-22 05:39:27'),
	(61, 'Gayle Strosin', 'velit', 'hudson.jamar', 'wilkinson.cheyenne@yahoo.com', '70252', 'zgreen#8292', 'Nulla ducimus laborum quidem possimus.', '2007-08-25 15:25:14'),
	(62, 'Dr. Everardo Wisoky IV', 'accusantium', 'langworth.mitchel', 'fdietrich@willms.com', '98509', 'gvonrueden#2021', 'Vel beatae vel laboriosam nobis est reprehenderit sed.', '1976-06-17 02:13:04'),
	(63, 'Dr. Garnet Waters', 'dolorum', 'agorczany', 'bertram75@hotmail.com', '92991', 'rebeca.mayert#2385', 'Consequatur aut eaque odit modi.', '1974-02-22 00:07:07'),
	(64, 'Candace Fritsch', 'voluptas', 'mitchell.lura', 'jessie.mertz@kilback.biz', '87265', 'bruce81#7285', 'Error esse facilis veritatis maiores consequatur voluptatem ducimus.', '1998-02-03 19:27:48'),
	(66, 'Dr. Robert White', 'ut', 'collins.marcos', 'golda.thompson@yahoo.com', '13331', 'rmarquardt#8716', 'Iste atque praesentium officia nostrum repellendus non fugit.', '1982-07-29 21:37:06'),
	(67, 'Millie Greenfelder', 'recusandae', 'lionel.stoltenberg', 'jkessler@hotmail.com', '86625', 'pagac.ruthie#2807', 'Sint reprehenderit corrupti eaque adipisci corrupti dolorem quo eum.', '2002-12-29 15:57:59'),
	(68, 'Helga Windler', 'minus', 'katharina.thiel', 'wolff.laurine@frami.biz', '76256', 'melvina08#7375', 'Sunt hic minus ullam totam fuga qui.', '2013-05-11 15:55:28'),
	(69, 'Leonora Murray', 'harum', 'kosinski', 'zdonnelly@schmitt.org', '56112', 'alison.hamill#2771', 'Sunt quam labore voluptatibus qui aut.', '2003-12-14 01:52:27'),
	(70, 'Karl Dooley', 'nobis', 'gtorphy', 'blick.eddie@wintheiser.com', '97148', 'jacinto.block#3333', 'Consequatur amet ut quia eaque doloribus facere ex.', '2003-04-10 04:16:46'),
	(71, 'Mrs. Erica Hackett MD', 'ipsam', 'lance.sanford', 'einar.homenick@hotmail.com', '41985', 'gkonopelski#3635', 'Adipisci perspiciatis necessitatibus et ab aut et dolorem.', '1978-07-06 18:50:41'),
	(72, 'Prof. Ulices Rosenbaum V', 'natus', 'crist.manuel', 'bradly55@hotmail.com', '26016', 'nick46#2188', 'Temporibus aut magnam eveniet eveniet et vel.', '2016-05-01 12:07:32');

-- Exportiere Struktur von Tabelle project_1211.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- password for admin account is "password"
-- Exportiere Daten aus Tabelle project_1211.users: ~1 rows (ungefähr)
INSERT INTO `users` (`id`, `username`, `password`, `email`, `avatar`, `created_at`) VALUES
	(3, 'admin', '$2y$10$2ANrctXrK4kUqAY9qH0BIuQdoTGYYOF0kgEAryQG.3aiH7cw7ypgW', 'test@test.de', 'uploads/6558088461103-4627-hisoka-uno-reverse.png', '2023-11-18 00:42:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
