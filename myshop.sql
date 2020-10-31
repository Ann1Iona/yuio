-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 31 2020 г., 09:10
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `name` varchar(300) NOT NULL,
  `sf` varchar(300) NOT NULL,
  `text` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`name`, `sf`, `text`, `img`) VALUES
('Волейбольный мяч', '5000руб', 'Я занимаюсь волейболом около 5 лет (хотя игрок я чуть выше среднего) и моя позиция нападающий (ну в основном так вышло из за роста)', 'IMG_7414.jfif'),
('Волейбольный мяч', '5000руб', 'Я занимаюсь волейболом около 5 лет (хотя игрок я чуть выше среднего) и моя позиция нападающий (ну в основном так вышло из за роста)', 'IMG_7414.jfif'),
('Манга \"Бездомный бог\" 8 том', '369руб', 'Я читаю мангу уже очень давно и около года назад я стала ее коллекционировать, сейчас в моей коллекции 16 томов', 'cover.jpg'),
('Палетка Makeup revolution forever flawless', '1300руб', 'Делать макияж это мое хобби которое приносит мне удовольствие и думая такая палетка мне бы пригодилась)))', '12235064-1.jpg'),
('Ноутбук hp pavilion gaming', '70000руб', 'Мне его подарили на день рождение и изначально он был для учебы, но что то пошло не так', '4zu3_HP_Gaming_Pavilion_15_dk.jpg'),
('Шаурма с курицей и с сыром', '210руб', 'Не знаю видно по мне или нет, но я очень много кушаю и шаурма одно из моих любимых блюд', '4-domashnya.webp'),
('erug;ofdil.knck\r\na ', '1234567890-', 'wjgh;szlvlkWBHHF', 'UWERworld.jpg'),
('', '', '', ''),
('', '', '', ''),
('процыло', 'грмвыод', 'нушпримыло', 'UWERworld.jpg'),
('Маркеры', '3000руб', 'Ну маркеры как маркеры, правда стоят пол моей жизни', 'touch.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
