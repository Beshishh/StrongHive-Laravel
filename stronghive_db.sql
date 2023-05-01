-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 01 2023 г., 16:47
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
-- База данных: `stronghive_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `name` varchar(59) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'aboba', 'about.png', '2023-05-01 14:10:40', '2023-05-01 14:10:40'),
(4, 'abiba', 'about2.png', '2023-05-01 14:10:40', '2023-05-01 14:10:40'),
(5, 'Bebraaa', 'nSyRv46isizhQZmnovERH-hKK9V2QORJrVu9vvptum9OWKI7Da0yNxIA4Sr4ootP1hOqYDOP0jNWhF5qyB_7BjqY.jpg', '2023-05-01 11:26:04', '2023-05-01 11:26:04'),
(6, 'b', 'Oa598aasCJVXUDNVBGX1uUka7h2NY8wohkG--0gNqtkF4-2blpKhvibT38JB7130iFtUlh1TwcMJEOoNs6YqCUkU.jpg', '2023-05-01 11:26:34', '2023-05-01 11:26:34'),
(7, 'bbb', 'PfE7OWr7JAFrDFyTNopSnYUT-oG9coTLqbv9AKDY0Rsd4gddl4RdknClMD_OJSLo8xW4o3xs1mG0thkLA5xJMd18.jpg', '2023-05-01 11:26:59', '2023-05-01 11:26:59'),
(8, 'ddd', '1zJvl5HyeAsFZoYAPoOZiRmrHGyPiOiBNvJfje7NYWdumw5PzxQXWp6tkQcA-RQy1W7bmulEW0CMIuV0-cmNgMZb.jpg', '2023-05-01 11:39:36', '2023-05-01 11:39:36');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(32, 'test1', 'test2', 'learn_about_bg.png', '2023-04-30 07:51:30', '2023-04-30 07:51:30'),
(36, 'test2', 'teststs', 'fzuH1zl1Y3eaAVKmAiyy5s05FAiL8fT9na0Vm47BsmGQ4aXKHRkJEHHrhFT6YsascRYIfkn2R9GVJQ3izMLnHYce.jpg', '2023-04-30 10:06:18', '2023-04-30 10:06:18'),
(37, 'test3', 'testtt', 'изображение_2023-04-30_160901690.png', '2023-04-30 10:09:02', '2023-04-30 10:09:02'),
(38, 'test22', 'tetssss', '1zJvl5HyeAsFZoYAPoOZiRmrHGyPiOiBNvJfje7NYWdumw5PzxQXWp6tkQcA-RQy1W7bmulEW0CMIuV0-cmNgMZb.jpg', '2023-04-30 10:23:22', '2023-04-30 10:23:22');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderedSub` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `totalPrice` int(11) NOT NULL,
  `clientName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subEnd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sub_table`
--

CREATE TABLE `sub_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('admin','client','moderator') DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@nowui.com', '$2y$10$EnkFyckRxS0iVvEIPeQ4b.yi2IgEYQnX3WMUtLGVnLU6OAa7mDM8C', '2023-04-28 13:57:50', '2023-04-28 13:57:50');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_table`
--
ALTER TABLE `sub_table`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sub_table`
--
ALTER TABLE `sub_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
