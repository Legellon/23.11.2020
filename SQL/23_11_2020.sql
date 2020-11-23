-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 23 2020 г., 13:14
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `23.11.2020`
--

-- --------------------------------------------------------

--
-- Структура таблицы `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `code` tinytext CHARACTER SET utf8 NOT NULL,
  `termText` text CHARACTER SET utf8 NOT NULL,
  `lang` varchar(2) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `terms`
--

INSERT INTO `terms` (`id`, `code`, `termText`, `lang`) VALUES
(1, 'menuHome', 'Home', 'en'),
(2, 'menuHome', 'Kodu', 'et'),
(3, 'menuAbout', 'About', 'en'),
(4, 'menuAbout', 'Umbes', 'et'),
(5, 'menuServices', 'Services', 'en'),
(6, 'menuServices', 'Teenused', 'et'),
(7, 'menuPortfolio', 'Portfolio', 'en'),
(8, 'menuPortfolio', 'Portfell', 'et'),
(9, 'menuTeam', 'Team', 'en'),
(10, 'menuTeam', 'Meeskond', 'et'),
(11, 'menuBlog', 'Blog', 'en'),
(12, 'menuBlog', 'Ajaveeb', 'et'),
(13, 'menuContact', 'Contact', 'en'),
(14, 'menuContact', 'Kontakt', 'et');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
