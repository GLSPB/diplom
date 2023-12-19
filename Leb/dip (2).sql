-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 19 2023 г., 14:14
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dip`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answer_t`
--

CREATE TABLE `answer_t` (
  `id_answer` int(11) NOT NULL,
  `id_question_answer` int(11) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `v_answer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `question_t`
--

CREATE TABLE `question_t` (
  `id_question` int(11) NOT NULL,
  `id_test_question` int(11) NOT NULL,
  `name_question` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `statistic`
--

CREATE TABLE `statistic` (
  `id_stat_student` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_stat_test` int(11) NOT NULL,
  `Result_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `test_t`
--

CREATE TABLE `test_t` (
  `id_TEST` int(11) NOT NULL,
  `Name_test` varchar(50) NOT NULL,
  `Aytor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

--
-- Дамп данных таблицы `test_t`
--

INSERT INTO `test_t` (`id_TEST`, `Name_test`, `Aytor`) VALUES
(30, 'апаа', 27),
(31, 'gdfgdfg', 27),
(32, 'gdfgdfg', 27),
(33, 'd', 27),
(34, 'd', 27),
(35, 'd', 27),
(36, 'd', 27),
(37, 'd', 27),
(38, 't', 27),
(39, 't', 27),
(40, 't', 27),
(41, 'ddd', 27);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Role` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Otchestvo` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Role`, `Name`, `Surname`, `Otchestvo`, `Login`, `Password`, `Email`) VALUES
(20, 3, 'Григорий12', 'Лебедев', 'Александрович', 'lol', 'lol', 'lol@gmail.com'),
(25, 2, 'Привет', 'Преdfgdfgdfg', 'Привет', 'pre', 'pre', 'pre@gmail.com'),
(27, 2, 'Егор2', 'Малышенко3', 'Романович2', 'lil', 'lil', 'lil@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answer_t`
--
ALTER TABLE `answer_t`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `id_question_answer` (`id_question_answer`);

--
-- Индексы таблицы `question_t`
--
ALTER TABLE `question_t`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `Question_t_fk0` (`id_test_question`);

--
-- Индексы таблицы `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id_stat_student`),
  ADD KEY `Statistic_fk0` (`id_user`),
  ADD KEY `Statistic_fk1` (`id_stat_test`);

--
-- Индексы таблицы `test_t`
--
ALTER TABLE `test_t`
  ADD PRIMARY KEY (`id_TEST`),
  ADD KEY `Test_t_fk1` (`Aytor`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answer_t`
--
ALTER TABLE `answer_t`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `question_t`
--
ALTER TABLE `question_t`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id_stat_student` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `test_t`
--
ALTER TABLE `test_t`
  MODIFY `id_TEST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answer_t`
--
ALTER TABLE `answer_t`
  ADD CONSTRAINT `answer_t_ibfk_1` FOREIGN KEY (`id_question_answer`) REFERENCES `question_t` (`id_question`);

--
-- Ограничения внешнего ключа таблицы `question_t`
--
ALTER TABLE `question_t`
  ADD CONSTRAINT `question_t_ibfk_2` FOREIGN KEY (`id_test_question`) REFERENCES `test_t` (`id_TEST`);

--
-- Ограничения внешнего ключа таблицы `statistic`
--
ALTER TABLE `statistic`
  ADD CONSTRAINT `Statistic_fk0` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `Statistic_fk1` FOREIGN KEY (`id_stat_test`) REFERENCES `test_t` (`id_TEST`);

--
-- Ограничения внешнего ключа таблицы `test_t`
--
ALTER TABLE `test_t`
  ADD CONSTRAINT `Test_t_fk1` FOREIGN KEY (`Aytor`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
