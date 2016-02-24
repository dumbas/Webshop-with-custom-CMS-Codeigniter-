-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Структура на таблица `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Схема на данните от таблица `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `date`, `content`) VALUES
(2, 'dada', '2015-01-25 19:57:05', 'sdasdasda'),
(3, 'qweweqad', '2015-01-25 20:15:25', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(4, 'Nov magazin', '2015-02-03 11:44:43', 'Otkrivane na nov magazin v grad plovdiv');

-- --------------------------------------------------------

--
-- Структура на таблица `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Схема на данните от таблица `address`
--

INSERT INTO `address` (`id`, `address`, `phone`, `email`) VALUES
(7, 'plovdiv,ivan vazov 34', '0878/62-53-78', 'abv@abv.bg'),
(18, 'Христо Ботев 43', '0878625378', 'ivo@gmail.com'),
(33, '000000', '12', 'awe@abv.bg');

-- --------------------------------------------------------

--
-- Структура на таблица `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Схема на данните от таблица `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(1, 'Обувки'),
(2, 'Часовници'),
(3, 'Електроника');

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `date` datetime DEFAULT NULL,
  `news_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=180 ;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`id`, `name`, `content`, `date`, `news_id`) VALUES
(69, 'sadads', 'dsdasdasdsa', '2015-02-19 11:50:28', 17),
(70, 'aaaaaaa', 'aaaaaaaaaaaaaaaa', '2015-02-19 11:50:37', 17),
(140, 'afsdasd', 'dasdadsad', NULL, 14),
(141, 'afsdasd', 'dasdadsad', NULL, 14),
(142, 'afsdasd', 'dasdadsad', NULL, 14),
(143, 'afsdasd', 'dasdadsad', NULL, 14),
(144, 'afsdasd', 'dasdadsad', NULL, 14),
(145, 'afsdasd', 'dasdadsad', NULL, 14),
(146, 'asdasd', 'adasdasdasd', NULL, 104),
(147, 'asdasd', 'adasdasdasd', NULL, 104),
(169, 'Boris', 'Kasdkjaklsndlasndlajsjdkasd', '2016-01-02 18:27:21', 108),
(170, 'asasasasa', 'sasasasasa', '2016-01-02 18:29:44', 108),
(171, 'sasasas', 'ssasasas', '2016-01-02 18:35:14', 108),
(172, 'asdas', 'asdas', '2016-01-02 19:00:24', 108),
(173, 'hsdgs', 'saggassg', '2016-01-02 19:02:05', 97),
(174, 'asasa', 'asasasas', '2016-01-02 19:38:34', 108),
(175, 'sassaas', 'sasasasa', '2016-01-02 19:45:25', 108),
(176, '555555', '5555555', '2016-01-03 17:00:28', 108),
(177, 'adsdsadsadsdasds', 'adsdsadasdasdasdas', '2016-01-04 21:52:12', 106),
(178, 'fdfddffdas', 'dgsdsafdafd', '2016-01-06 19:29:17', 91),
(179, 'asdasdasdsad', '\r\nfunction myFunction() {\r\n    alert("I am an alert box!");\r\n}\r\n', '2016-01-14 09:36:51', 96);

-- --------------------------------------------------------

--
-- Структура на таблица `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Схема на данните от таблица `contacts`
--

INSERT INTO `contacts` (`name`, `phone`, `email`, `id`, `date`, `content`) VALUES
('asasas', '0878/62-53-78', 'asd@yahoo.com', 23, '2015-03-20 14:00:19', ''),
('ivan', '0898989898', 'abv@abv.bg', 24, NULL, 'asdasdadasdasdasds'),
('maria', '0898989898', 'asd@yahoo.com', 25, '0000-00-00 00:00:00', 'asasasassas'),
('azis', '0898989898', 'abv@abv.bg', 26, '2016-01-03 16:58:42', 'assasasasasasa'),
('ivan', '0898989898', 'abv@abv.bg', 27, '2016-01-03 19:23:01', 'asassaassas');

-- --------------------------------------------------------

--
-- Структура на таблица `costumers`
--

CREATE TABLE IF NOT EXISTS `costumers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `passconf` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Схема на данните от таблица `costumers`
--

INSERT INTO `costumers` (`id`, `username`, `password`, `name`, `city`, `address`, `phone`, `email`, `passconf`) VALUES
(1, 'ivo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '', '0', '', ''),
(2, 'ivo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '', '0', '', ''),
(3, 'ivo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '', '0', '', ''),
(4, 'ivo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '', '0', '', ''),
(5, 'gonzo', '618dcdfb0cd9ae4481164961c4796dd8e3930c8d', 'ivan', 'aaaaa', 'plovdiv,ivan vazov 34', '898989898', 'abv@abv.bg', '618dcdfb0cd9ae4481164961c4796dd8e3930c8d'),
(6, 'ivo', '1161e6ffd3637b302a5cd74076283a7bd1fc20d3', 'maria', 'aaaaa', 'plovdiv,ivan vazov 34', '0878990099', 'asd@yahoo.com', '1161e6ffd3637b302a5cd74076283a7bd1fc20d3');

-- --------------------------------------------------------

--
-- Структура на таблица `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `date_added` datetime NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recepient_id` int(11) NOT NULL,
  `is_read` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Схема на данните от таблица `messages`
--

INSERT INTO `messages` (`id`, `username`, `msg`, `date_added`, `sender_id`, `recepient_id`, `is_read`) VALUES
(40, '', 'asdasda', '2015-03-22 14:46:22', 2, 2, 1),
(41, '', 'asdasda', '2015-03-22 14:46:22', 2, 3, 1),
(42, '', 'asdasda', '2015-03-22 14:46:24', 2, 2, 1),
(43, '', 'asdasda', '2015-03-22 14:46:24', 2, 3, 1),
(44, '', 'asasasa', '2015-03-22 14:49:16', 2, 2, 1),
(45, '', 'asasasa', '2015-03-22 14:49:16', 2, 3, 1),
(46, '', '', '2015-03-22 14:49:24', 2, 2, 1),
(47, '', '', '2015-03-22 14:49:24', 2, 3, 1),
(48, '', 'ajshdkjashbdalksjnas', '2015-03-22 14:49:39', 2, 2, 1),
(49, '', 'ajshdkjashbdalksjnas', '2015-03-22 14:49:39', 2, 3, 1),
(50, '', 'asdasdasda', '2015-03-22 14:50:54', 3, 2, 1),
(51, '', 'asdasdasda', '2015-03-22 14:50:54', 3, 3, 1),
(52, '', 'asdasdasdasdas', '2015-03-22 14:51:34', 2, 2, 1),
(53, '', 'asdasdasdasdas', '2015-03-22 14:51:34', 2, 3, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `content` longtext,
  `image` varchar(255) DEFAULT NULL,
  `userfile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=112 ;

--
-- Схема на данните от таблица `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `date`, `content`, `image`, `userfile`) VALUES
(14, 'daaaa', 'antim 1', '2016-01-18 21:06:00', 'qwe', '77711-10-11-81556_1.jpg', '8a790d351e4835de149aa0dc72f87c0c.jpg'),
(91, 'Борисов: Незабавно да се спрат бежанците', 'Десислава Димитрова', '2016-01-18 21:04:27', 'Незабавно границите на ЕС трябва да се затворят, да се спре притокът на бежанци и докато не се реши въпросът с тях, други да не се приемат, заяви Бойко Борисов\r\nТака премиерът отговори по време на блиц-контрола в парламента на въпрос на лидера на БСП Михаил Миков. Той попита каква е позицията на България за справедливото разпределяне на бежанците, предадоха „Фокус“ и Дарик радио.\r\n\r\nБорисов заяви:\r\n\r\n„Дъблин“* не работи. Позицията ни винаги е била категорична, че не само квоти трябва да се направят. Публичната и на самия съвет моя позиция е била незабавно да се затворят границите".\r\n\r\nСпоред него тези мигранти, които са влезли в Европа, част от тях трябва да бъдат разселвани, други - интегрирани, за които ще може да се подсигурят образование, работа, социални грижи. Трябва да бъдат приемани и тези, които действително бягат от смъртта, но другите трябва да бъдат връщани по родните им места.\r\n\r\nТой посочи, че България е подкрепила квотите, но по думите му и те няма как да сработят.', NULL, '57d66342ca045ed60247302358594b72.jpg'),
(96, 'Здравейтеhgi uhoihjpijpj pjpojpojopjpojoj', 'Ивайло Иванов', '2016-01-18 21:04:57', 'авдавсдйпвидйадапдйсодй апдйспакдйакдпйсдиап дисйдпайдспадйписайдса псдйапсийдпаидйспидйспа дйспидйапидйипасдад', NULL, '9c118d2fbfdc9f62cde9c4803919a00e.jpg'),
(104, 'HEllo', 'Archibald Stanew', '2016-01-18 21:05:13', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes\r\n\r\n©2016', NULL, '5a8856b51e3c9da6a14c4986ced76d8b.gif'),
(106, 'DADADAD', 'asasa', '2016-01-18 21:05:47', 'sassasas', NULL, '61e8dc1284f30156e5055e5bd8d3b45a.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `is_complete` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Схема на данните от таблица `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `date`, `product_id`, `phone`, `is_complete`) VALUES
(42, 'ivan', 'aaa', '2015-03-08 14:05:17', 13, 'asas/as-as-as', '1'),
(43, 'ivan', 'abv@abv.bg', '2015-03-16 16:11:31', 13, '1212/12-12-12', '1'),
(44, '', 'aaaaa', '2015-03-20 13:57:06', 2, 'aaaaa', ''),
(45, 'aaaaaa', 'aaaaa', '2015-03-20 13:57:46', 2, 'aaaaa', '0'),
(46, 'asasa', 'asasa', '2015-03-20 13:59:51', 11, 'asasas', '0'),
(47, 'ivan', 'abv@abv.bg', '2015-03-21 13:53:11', 2, '0898989898', ''),
(48, ',./,?>', 'abv@abv.bg', '2015-03-21 13:54:01', 2, '1212/12-12-12', ''),
(49, '123?>/>>/?', 'abv@abv.bg', '2015-03-21 13:55:06', 2, '0898989898', ''),
(50, 'ivan', 'aaaa', '2015-03-21 13:56:00', 2, '0898989898', ''),
(51, 'ivan', 'abv@abv.bg', '2015-03-21 13:57:48', 2, '1212/12-12-12', ''),
(52, 'ivan', 'abv@abv.bg', '2015-03-21 14:12:58', 2, '1212/12-12-12', ''),
(53, 'ivan', 'abv@abv.bg', '2015-03-21 14:13:11', 2, '1212/12-12-12', '0');

-- --------------------------------------------------------

--
-- Структура на таблица `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Схема на данните от таблица `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`) VALUES
(3, 'Nov magazin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'Istoriq na firmata', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Структура на таблица `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `userfile` varchar(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Схема на данните от таблица `products`
--

INSERT INTO `products` (`id`, `title`, `content`, `image`, `price`, `userfile`, `cat_id`) VALUES
(37, '2222222', '22222222', NULL, '22222222', '3b3c78e7734322a1d56aa823f6d966b7.jpg', 0),
(39, 'asdadsdadasds', 'adsdassdadsadsadsadsa', NULL, '1212121', 'ccad4450e85ea5a987d9cafc883c2755.jpg', 2),
(40, 'dsadsasdsdasd', 'dsadsasdsdaasd', NULL, '2300', '8e73f9ca5d7d956fbec343cea11b4661.jpg', 2),
(41, 'ggfgfgfgf', 'jkjkjkhhkhk', NULL, '3200', '389cd7141dea0cca4ba9bc83188fc0b0.jpg', 2),
(43, '1111111', '11111111', NULL, '111111', 'c9caaa4af8faaa653f79fc8076ba1b11.jpg', 1),
(44, 'Хижа', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model', NULL, '25000', '4525f72b5b5000bd171ce46de55776da.jpg', 3);

-- --------------------------------------------------------

--
-- Структура на таблица `products_images`
--

CREATE TABLE IF NOT EXISTS `products_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userfile` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Схема на данните от таблица `products_images`
--

INSERT INTO `products_images` (`id`, `userfile`, `product_id`, `date`) VALUES
(62, '839558techno.gif', 10, '0000-00-00 00:00:00'),
(64, '18612798355210155376_10152071764167499_7314760493687299942_n.jpg', 3, '0000-00-00 00:00:00'),
(66, '928493737702designe-home-house-paradise-sea-Favim.com-326720.jpg', 1, '0000-00-00 00:00:00'),
(72, '7401915e_kv69ef.jpg', 11, '0000-00-00 00:00:00'),
(73, '29416558techno.gif', 11, '0000-00-00 00:00:00'),
(74, '91779530495_125249680819687_100000039669208_312669_4861222_n.jpg', 11, '0000-00-00 00:00:00'),
(75, '5165287737702designe-home-house-paradise-sea-Favim.com-326720.jpg', 11, '0000-00-00 00:00:00'),
(76, '39091779530495_125249680819687_100000039669208_312669_4861222_n.jpg', 11, '0000-00-00 00:00:00'),
(85, '9b1e86d3529f52bf3ac96e4edeba9ab8.jpg', 2, '0000-00-00 00:00:00'),
(87, '7067b96f0afc803fd7ef7a28650963a8.gif', 34, '0000-00-00 00:00:00'),
(88, '9ac1a52d8cc91d3571a228794dfc2b3b.gif', 35, '0000-00-00 00:00:00'),
(89, '87e21406f831d3a345532fb52d375695.jpg', 24, '0000-00-00 00:00:00'),
(90, '863a55cd9482e356601da9ba0765d82f.jpg', 23, '0000-00-00 00:00:00'),
(91, 'a4155492e6f859fa683349eb414a52f4.gif', 23, '0000-00-00 00:00:00'),
(92, 'd98496bbe2c4d2b437b9fb24af726876.jpg', 23, '0000-00-00 00:00:00'),
(93, '8e6be85357e59db8c3137cb16b2ce5a0.jpg', 24, '0000-00-00 00:00:00'),
(94, 'a05f2b6d25ab36cbe7dcc895618c7453.gif', 24, '0000-00-00 00:00:00'),
(95, 'fb98e6b09a961ac90e195490922e95cc.jpg', 27, '0000-00-00 00:00:00'),
(97, '7e5372f7f94fb5b40796c6500451c8b2.jpg', 42, '0000-00-00 00:00:00'),
(98, '6059dedb8f7cf87816b56abd53ee2892.jpg', 43, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'ivo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'joro', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(18, 'gonzo', '1161e6ffd3637b302a5cd74076283a7bd1fc20d3'),
(22, '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(23, '1111', '011c945f30ce2cbafc452f39840f025693339c42');

-- --------------------------------------------------------

--
-- Структура на таблица `user_seissions`
--

CREATE TABLE IF NOT EXISTS `user_seissions` (
  `session_id` varchar(40) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `ip_address` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `user_agent` varchar(120) CHARACTER SET latin1 NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
