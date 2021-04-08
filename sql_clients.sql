-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 09 2021 г., 04:46
-- Версия сервера: 5.5.62-log
-- Версия PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sql_clients`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sql_clients`
--

CREATE TABLE `sql_clients` (
  `id` int(11) NOT NULL,
  `firstname` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `password` char(60) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sql_clients`
--

INSERT INTO `sql_clients` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES
(1, 'Jimbo', 'Jaky', 'jj@gmail.com', '$2y$10$0PJlzF5qVjI3NExYryWQj.JoEk58IA8U1/dC/7W8NVoR3CGjxKJXi', 'Мужчина'),
(2, 'Julia', 'Tynor', 'yt2000@gmail.com', '$2y$10$nmBu3nnsqiFHd0fIG05XVuIpX/Ha8FTmSPbT4ecXjB5zJlI9ekdpq', 'Женщина'),
(3, 'Frank', 'Gtuvy', 'frg@gmail.com', '$2y$10$titD1ReJ5eSAsIN1XpVA7u51nR5CGid2.WHcl/qAvMspVk84AJjQi', 'Мужчина'),
(4, 'Jony', 'Woker', 'jwok@example.com', '$2y$10$AWxlliXkcAtbTjjWVPGFle7cHkhf58VFj/BGvI3.DMv8U7YYOd0tW', 'Мужчина'),
(5, 'Maria', 'Angel', 'msad@gmail.com', '$2y$10$JduK02tZtnRr3bnGn1gLoOcL5jBYQgYOY12LdFSPmSsXkYZ/zbG1K', 'Женщина');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sql_clients`
--
ALTER TABLE `sql_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sql_clients`
--
ALTER TABLE `sql_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
