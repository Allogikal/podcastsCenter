-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 28 2023 г., 16:52
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `podcasts_center`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `interviewers`
--

CREATE TABLE `interviewers` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(535) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `interviewers`
--

INSERT INTO `interviewers` (`id`, `name`, `surname`, `country`, `email`, `image`) VALUES
(1, 'Франк', 'Кабрэл', 'Камерун', 'frankkab@mail.ru', '/assets/images/imageForInterviewer2.jpg'),
(2, 'Тания', 'Семеду', 'Ангола', 'angola_semeda@bk.ru', '/assets/images/imageForInterviewer1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `podcasts`
--

CREATE TABLE `podcasts` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_file` varchar(535) DEFAULT NULL,
  `audio_file` varchar(535) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `podcasts`
--

INSERT INTO `podcasts` (`id`, `title`, `image_file`, `audio_file`, `description`, `created_at`) VALUES
(3, 'проснулся и выучил русский язык', '/uploads/images/1701174934image_1.jpg', '/uploads/audio/1701174934podcast_1.mp3', 'Гость нашего подкаста — Франк Кабрэл, студент Тюменского ГМУ из Камеруна. В этом выпуске он рассказал о стереотипах о России и Африке, поговорили о силе характера человека и немного о теории адаптации. Франк рассказал про свой путь в медицину, про русскую дружбу и пошутил на французском.', 1701174934),
(4, 'скоро! подкаст с танией семеду', '/uploads/images/1701176120image_2.jpg', '/uploads/audio/1701176120podcast_2_new.mp3', 'Следующей гостьей подкаста стала чудесная девушка из Анголы — Тания Семеду. В этом выпуске мы обсудили жизнь и медицину в разных точках Земли, а также то, как наша гостья изменилась во время учёбы в России. Тания рассказала, как правильно объяснить ребёнку, что все люди разные, а ещё, развеяла мифы и стереотипы о жизни в Африке.', 1701176120);

-- --------------------------------------------------------

--
-- Структура таблицы `podcasts_interviewers`
--

CREATE TABLE `podcasts_interviewers` (
  `id` int UNSIGNED NOT NULL,
  `interviewer_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `podcasts_interviewers`
--

INSERT INTO `podcasts_interviewers` (`id`, `interviewer_id`) VALUES
(3, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `podcasts_tags`
--

CREATE TABLE `podcasts_tags` (
  `id` int UNSIGNED NOT NULL,
  `tag_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `podcasts_tags`
--

INSERT INTO `podcasts_tags` (`id`, `tag_id`) VALUES
(3, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`) VALUES
(1, 'Стереотипы'),
(2, 'Медицина');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `interviewers`
--
ALTER TABLE `interviewers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `podcasts`
--
ALTER TABLE `podcasts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `podcasts_interviewers`
--
ALTER TABLE `podcasts_interviewers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `podcasts_interviewers_ibfk_1` (`interviewer_id`);

--
-- Индексы таблицы `podcasts_tags`
--
ALTER TABLE `podcasts_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `podcasts_tags_ibfk_1` (`tag_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `interviewers`
--
ALTER TABLE `interviewers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `podcasts`
--
ALTER TABLE `podcasts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `podcasts_tags`
--
ALTER TABLE `podcasts_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `podcasts_interviewers`
--
ALTER TABLE `podcasts_interviewers`
  ADD CONSTRAINT `podcasts_interviewers_ibfk_1` FOREIGN KEY (`interviewer_id`) REFERENCES `interviewers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `podcasts_interviewers_ibfk_2` FOREIGN KEY (`id`) REFERENCES `podcasts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `podcasts_tags`
--
ALTER TABLE `podcasts_tags`
  ADD CONSTRAINT `podcasts_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `podcasts_tags_ibfk_2` FOREIGN KEY (`id`) REFERENCES `podcasts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
