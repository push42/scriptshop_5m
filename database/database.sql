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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportiere Daten aus Tabelle project_1211.contact_messages: ~52 rows (ungefähr)
INSERT INTO `contact_messages` (`id`, `fullName`, `productPackage`, `cfxUsername`, `email`, `productId`, `discordId`, `message`, `submitted_at`) VALUES
	(3, 'Theo', 'okok-package', 'user003', 'test@test.de', '0002', 'discord.14', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. ', '2023-11-17 12:56:20'),
	(4, 'Sarah', 'no-package', 'user004', 'test@test.de', '0007', 'discord.16', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et ju', '2023-11-17 12:58:54'),
	(23, 'Genoveva Reynolds', 'eveniet', 'russel.freeman', 'aylin82@mckenzie.info', '61637', 'altenwerth.wilfredo#3576', 'Labore error non dolorem.', '1970-04-08 18:37:12'),
	(24, 'Aditya Moore', 'est', 'greenfelder.brant', 'leannon.milford@hotmail.com', '84032', 'plangosh#7665', 'Autem sint vel sit deleniti temporibus dolorem est.', '1994-03-29 12:47:11'),
	(25, 'Eric Hoeger', 'est', 'kaylee87', 'ojast@gmail.com', '89101', 'owiza#1422', 'Qui qui minima vel qui facere qui.', '2017-07-11 11:39:30'),
	(26, 'Miss Baby McDermott Sr.', 'nesciunt', 'iheathcote', 'hschroeder@hotmail.com', '88926', 'kyleigh.schulist#7583', 'Cum expedita at provident quo.', '1994-08-21 09:10:57'),
	(27, 'Dr. Francisco Mraz Sr.', 'vitae', 'leanne.swaniawski', 'sydney99@yahoo.com', '29968', 'kennith.mayert#5579', 'Laudantium est consectetur dolor omnis recusandae ipsa dicta.', '1986-08-19 01:49:46'),
	(28, 'Jessica Upton', 'asperiores', 'lakin.cleo', 'emmerich.glennie@gmail.com', '67424', 'dooley.taryn#8291', 'Placeat amet deleniti quo excepturi quidem illo.', '2023-10-14 19:12:53'),
	(29, 'Courtney Farrell MD', 'et', 'theodora63', 'eschuster@gmail.com', '78855', 'koby49#3393', 'Minus ut rerum maxime et quia ut voluptatem.', '1996-04-25 19:52:34'),
	(30, 'Donnell Steuber', 'quia', 'leannon.sibyl', 'xzavier94@stark.info', '27138', 'carlee80#8835', 'Quia repellendus perspiciatis tempore minima.', '1972-02-07 05:32:50'),
	(31, 'Dr. Alexys DuBuque Sr.', 'sed', 'jprice', 'grunolfsdottir@gmail.com', '35291', 'nader.teresa#7733', 'Quia repudiandae velit qui tempora velit iusto libero.', '2017-01-18 11:23:04'),
	(32, 'Pink Weimann', 'ut', 'herzog.mary', 'carmine67@weber.com', '21571', 'xveum#8280', 'Et id incidunt veniam deserunt quo qui.', '2018-01-22 14:32:31'),
	(33, 'Cynthia Kub', 'alias', 'ambrose.fritsch', 'abshire.deangelo@effertz.com', '72969', 'imuller#3735', 'Ex autem earum aliquam dolor ipsam harum qui occaecati.', '2006-09-10 16:10:55'),
	(34, 'Chadd Hoeger', 'sint', 'nitzsche.rowan', 'farrell.shanelle@franecki.com', '47154', 'brippin#2472', 'Dolores aspernatur magnam adipisci.', '1997-12-18 05:31:40'),
	(35, 'Jermey Dibbert', 'velit', 'pacocha.garth', 'becker.ben@hotmail.com', '73103', 'zoila64#6876', 'Ea dignissimos reiciendis quia assumenda aut aliquam.', '1990-03-22 11:28:21'),
	(36, 'Ms. Polly Nader MD', 'quis', 'hhackett', 'njohns@yahoo.com', '65305', 'tre.kovacek#2897', 'Dicta doloribus omnis quisquam voluptatibus.', '1987-04-20 05:45:39'),
	(37, 'Marjorie Moen', 'exercitationem', 'ericka77', 'mikel04@hotmail.com', '15354', 'jimmie.bernier#8769', 'Qui voluptas expedita dolores quis dolore suscipit.', '1972-10-05 00:05:18'),
	(38, 'Kolby Ward', 'qui', 'leanna.gislason', 'estelle54@gmail.com', '42055', 'jakob.howell#6432', 'Voluptas est et quia modi architecto molestiae.', '2020-05-05 09:36:06'),
	(39, 'Ruby Tremblay', 'architecto', 'mitchell.evan', 'genesis.ankunding@hotmail.com', '59156', 'lavinia00#7602', 'Non qui commodi esse rerum.', '1980-08-04 20:23:24'),
	(40, 'Margie McDermott', 'sed', 'hank.bednar', 'yschmeler@yahoo.com', '69760', 'cremin.justus#3352', 'Dolor sint in adipisci incidunt mollitia architecto.', '2003-03-07 15:04:17'),
	(41, 'Prof. Bernie Dickinson DVM', 'rerum', 'erdman.pinkie', 'mclaughlin.clint@hotmail.com', '58510', 'faltenwerth#6645', 'Architecto blanditiis vel quis quia perferendis reprehenderit.', '1985-06-27 12:13:52'),
	(42, 'Turner Shields', 'et', 'yswaniawski', 'hjohnston@yahoo.com', '18902', 'etromp#8470', 'Ullam sint voluptatem eum harum deleniti et quia.', '2012-01-13 09:09:50'),
	(43, 'Mr. Florian Spencer MD', 'quo', 'lueilwitz.maudie', 'carroll75@yahoo.com', '32051', 'rodolfo.johns#4629', 'Et tempore omnis necessitatibus molestiae vel maiores necessitatibus modi.', '1979-10-14 03:56:45'),
	(44, 'Casimer Ankunding', 'ipsum', 'egislason', 'evelyn.johnston@bartell.net', '41976', 'mdickens#8988', 'Ab quasi non voluptatem qui voluptas.', '2015-07-17 14:34:56'),
	(45, 'Dr. Marian Lynch IV', 'eum', 'alexis.ritchie', 'bleannon@pouros.net', '70760', 'ofelia31#4116', 'Cupiditate recusandae dignissimos a est facere magni libero.', '2000-08-25 00:32:17'),
	(46, 'Prof. Ericka Mraz', 'rem', 'ylittle', 'amie01@kling.org', '76317', 'elsie22#9644', 'Molestiae voluptatum facere dolores.', '1980-03-28 20:39:39'),
	(47, 'Dr. Moises Roob', 'porro', 'dejuan.toy', 'ruth00@yahoo.com', '90421', 'zkonopelski#6147', 'Incidunt sint eius blanditiis dolorum enim.', '1987-11-20 14:02:34'),
	(48, 'Mrs. Leanna Abshire Jr.', 'autem', 'annamae.beer', 'vgulgowski@hotmail.com', '99404', 'fritsch.cristal#2866', 'Magni nisi magni sapiente.', '2023-02-06 04:37:18'),
	(49, 'Prof. Rosalee Nienow IV', 'sapiente', 'ckuhlman', 'bettie.daugherty@nikolaus.com', '81878', 'ubednar#8210', 'Nulla delectus vel laudantium vitae.', '1995-10-05 03:48:21'),
	(50, 'Malika Wiegand', 'itaque', 'kertzmann.joanny', 'khauck@pfeffer.com', '32768', 'josefa.larkin#8873', 'Harum sint non nobis.', '2020-01-24 07:10:49'),
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
	(65, 'Prof. Rico Kovacek I', 'sint', 'hbednar', 'yemmerich@gmail.com', '82033', 'marcelina.hartmann#9065', 'Nihil autem et ipsa debitis.', '2023-01-15 21:20:26'),
	(66, 'Dr. Robert White', 'ut', 'collins.marcos', 'golda.thompson@yahoo.com', '13331', 'rmarquardt#8716', 'Iste atque praesentium officia nostrum repellendus non fugit.', '1982-07-29 21:37:06'),
	(67, 'Millie Greenfelder', 'recusandae', 'lionel.stoltenberg', 'jkessler@hotmail.com', '86625', 'pagac.ruthie#2807', 'Sint reprehenderit corrupti eaque adipisci corrupti dolorem quo eum.', '2002-12-29 15:57:59'),
	(68, 'Helga Windler', 'minus', 'katharina.thiel', 'wolff.laurine@frami.biz', '76256', 'melvina08#7375', 'Sunt hic minus ullam totam fuga qui.', '2013-05-11 15:55:28'),
	(69, 'Leonora Murray', 'harum', 'kosinski', 'zdonnelly@schmitt.org', '56112', 'alison.hamill#2771', 'Sunt quam labore voluptatibus qui aut.', '2003-12-14 01:52:27'),
	(70, 'Karl Dooley', 'nobis', 'gtorphy', 'blick.eddie@wintheiser.com', '97148', 'jacinto.block#3333', 'Consequatur amet ut quia eaque doloribus facere ex.', '2003-04-10 04:16:46'),
	(71, 'Mrs. Erica Hackett MD', 'ipsam', 'lance.sanford', 'einar.homenick@hotmail.com', '41985', 'gkonopelski#3635', 'Adipisci perspiciatis necessitatibus et ab aut et dolorem.', '1978-07-06 18:50:41'),
	(72, 'Prof. Ulices Rosenbaum V', 'natus', 'crist.manuel', 'bradly55@hotmail.com', '26016', 'nick46#2188', 'Temporibus aut magnam eveniet eveniet et vel.', '2016-05-01 12:07:32');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
