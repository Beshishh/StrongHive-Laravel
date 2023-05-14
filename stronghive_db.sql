-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 14 2023 г., 11:46
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
  `firstname` varchar(59) NOT NULL,
  `lastname` varchar(59) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `coach`
--

INSERT INTO `coach` (`id`, `firstname`, `lastname`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Samantha', 'Williams', 'As a professional athlete in the fitness industry, Samantha has achieved remarkable success in her own fitness journey and has empowered numerous clients to surpass their goals with her expertise and guidance.', 'team3.png', '2023-05-14 05:27:21', '2023-05-14 05:42:39'),
(6, 'Michael', 'Rodriguez', 'With a track record of exceptional achievements in the fitness realm, Michael\'s passion for fitness is evident in his ability to help clients reach their desired outcomes and unlock their full potential.', 'pexels-thisisengineering-3912944.jpg', '2023-05-14 05:31:47', '2023-05-14 05:31:47'),
(7, 'Daniel', 'Lee', 'With a focus on functional training and performance enhancement, Daniel utilizes his expertise as a professional athlete to design personalized programs that optimize clients\' strength, agility, and overall fitness, ultimately propelling them towards their desired goals.', 'pexels-ivan-remonte-4218662.jpg', '2023-05-14 05:35:26', '2023-05-14 05:35:26'),
(8, 'Benjamin', 'Turner', 'A disciplined and driven trainer, Benjamin draws upon his experience as a professional athlete to guide clients towards remarkable fitness achievements, instilling a sense of determination and accountability in every session.', 'pexels-mike-jones-8874379.jpg', '2023-05-14 05:39:32', '2023-05-14 05:39:32'),
(9, 'Nathan', 'Brooks', 'With a focus on functional strength and athletic performance, Nathan\'s training methodology combines his own success as a fitness industry professional with a personalized approach that helps clients surpass their goals and unlock their full potential.', 'team1.png', '2023-05-14 05:42:23', '2023-05-14 05:42:23');

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
(3, 'gallery1', 'about.png', '2023-05-01 14:10:40', '2023-05-14 05:56:51'),
(4, 'gallery2', 'about2.png', '2023-05-01 14:10:40', '2023-05-14 05:57:00'),
(9, 'gallery3', 'gallery4.png', '2023-05-14 05:57:17', '2023-05-14 05:57:17'),
(10, 'gallery4', 'gallery5.png', '2023-05-14 05:57:38', '2023-05-14 05:57:38'),
(11, 'gallery5', 'pexels-william-choquette-1954524.jpg', '2023-05-14 05:58:07', '2023-05-14 05:59:04'),
(12, 'gallery6', 'pexels-pixabay-416717.jpg', '2023-05-14 05:59:11', '2023-05-14 05:59:11');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(32, 'Introducing our Outdoor Bootcamp: Embrace the Fresh Air and Elevate Your Fitness', 'Step out of the traditional gym setting and into our exciting new Outdoor Bootcamp. Experience invigorating workouts in the open air, surrounded by nature. Led by our experienced trainers, this high-energy group fitness class combines cardiovascular exercises, strength training, and team challenges to boost your endurance, build muscle, and push your limits. Get ready to embrace the fresh air, soak up the sunshine, and take your fitness journey to new heights with our Outdoor Bootcamp. Whether you\'re running through trails, performing bodyweight exercises on the grass, or participating in team-based activities, this unique outdoor experience will invigorate your workouts and provide a refreshing change of scenery.', 'pexels-pnw-production-7625047.jpg', '2023-04-30 07:51:30', '2023-05-14 06:08:48'),
(36, '\"Fuel Your Body, Fuel Your Performance: Nutrition Workshop', 'Join us for our highly anticipated Nutrition Workshop, where our expert nutritionist will guide you on a journey to optimize your performance through proper fueling. Learn about the significance of macronutrients and micronutrients, the importance of hydration, and how to create a personalized nutrition plan tailored to your fitness goals. Gain valuable insights into pre and post-workout nutrition, as well as tips for maintaining a healthy diet and lifestyle. With the right nutrition knowledge, you can unlock your full potential and achieve the results you desire. This workshop will provide you with practical strategies and evidence-based information to enhance your overall health and fitness journey.', 'pexels-engin-akyurt-1435904.jpg', '2023-04-30 10:06:18', '2023-05-14 06:10:28'),
(39, 'Power Up with Boxing Fitness: Introducing our Boxing Conditioning Class', 'Get ready to unleash your inner fighter with our new Boxing Conditioning Class. Led by our experienced boxing trainers, this class combines boxing techniques, cardio drills, and strength exercises to enhance your agility, speed, coordination, and overall fitness. Whether you\'re a beginner or an experienced boxer, this class is designed to challenge and inspire you while providing a fun and empowering workout. Learn proper boxing form, improve your endurance through intense rounds of punching combinations, and strengthen your muscles with bodyweight exercises. Channel your inner champion and experience the benefits of boxing as you build strength, burn calories, and boost your confidence. This class offers a dynamic and engaging way to break a sweat and unleash your inner warrior.', 'pexels-julia-larson-6456264.jpg', '2023-05-14 06:16:08', '2023-05-14 06:16:08'),
(40, 'Strength and Conditioning: Performance Enhancement Workshop', 'Elevate your training and unleash your full potential with our Performance Enhancement Workshop. Led by our strength and conditioning experts, this workshop focuses on improving athletic performance, increasing strength, and enhancing power and agility. Learn advanced training techniques, proper form, and effective programming strategies to take your workouts to the next level. Whether you\'re an athlete looking to gain a competitive edge or simply seeking to optimize your fitness, this workshop will equip you with the tools and knowledge to reach peak performance. From resistance training and plyometrics to speed and agility drills, this workshop covers a wide range of exercises and methodologies tailored to your individual needs. Prepare to elevate your fitness game and achieve new levels of strength, power, and athleticism.', 'gallery1.png', '2023-05-14 06:43:11', '2023-05-14 06:43:11'),
(41, 'Revamped Gym Facilities: Unleashing a New Era of Fitness Excellence', 'We\'re thrilled to unveil our newly revamped gym facilities, setting the stage for a new era of fitness excellence. Our upgraded facilities feature state-of-the-art equipment, spacious workout areas, and cutting-edge technology to elevate your fitness experience. Discover a wide range of cardio machines, strength training equipment, functional training zones, and dedicated spaces for group classes and personal training sessions. Immerse yourself in an environment designed to inspire and motivate you towards achieving your fitness goals. With our enhanced facilities, you\'ll enjoy a comfortable and dynamic space that caters to all fitness levels, ensuring you have everything you need to succeed on your fitness journey. Step into our new era of fitness and experience the ultimate workout environment.', 'pexels-william-choquette-1954524.jpg', '2023-05-14 06:44:13', '2023-05-14 06:44:13');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderedSub` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `totalPrice` int(11) NOT NULL,
  `clientName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subEnd` date NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `sub_id` int(11) NOT NULL,
  `qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `open` time NOT NULL,
  `close` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `schedule`
--

INSERT INTO `schedule` (`id`, `name`, `open`, `close`, `created_at`, `updated_at`) VALUES
(2, 'Monday', '10:00:00', '21:00:00', '2023-05-11 19:57:31', '2023-05-11 17:04:39'),
(5, 'Tuesday', '10:00:00', '21:00:00', '2023-05-11 19:59:31', '2023-05-11 19:59:31'),
(6, 'Wednesday', '10:00:00', '21:00:00', '2023-05-11 20:00:15', '2023-05-11 20:00:15'),
(7, 'Thursday', '10:00:00', '21:00:00', '2023-05-11 20:00:34', '2023-05-11 20:00:34'),
(8, 'Friday', '10:00:00', '21:00:00', '2023-05-11 20:00:34', '2023-05-11 20:00:34'),
(9, 'Saturday', '10:00:00', '21:00:00', '2023-05-11 20:00:15', '2023-05-11 20:00:15'),
(10, 'Sunday', '10:00:00', '20:00:00', '2023-05-11 20:01:19', '2023-01-18 22:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `name`, `description`, `price`, `days`, `created_at`, `updated_at`) VALUES
(7, 'Starter Package', 'Duration: 1 month', 40, 30, '2023-05-14 05:46:56', '2023-05-14 05:46:56'),
(8, 'Premium Package', 'Duration: 3 months', 90, 90, '2023-05-14 05:47:42', '2023-05-14 05:47:42'),
(9, 'Platinum Package', 'Duration: 6 months', 180, 180, '2023-05-14 05:48:39', '2023-05-14 05:48:39'),
(10, 'HivePass', 'One-day pass', 3, 1, '2023-05-14 05:49:58', '2023-05-14 05:49:58');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('admin','client','manager') DEFAULT 'client',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'manager', 'manager', 'test2@test.ee', '$2y$10$orxi.q8tason/AaqCz08HOec/5GwQ4F/8yyuQNiI.p5B7xBrgPhJe', '2023-05-07 08:49:20', '2023-05-07 09:03:43'),
(4, 'admin', 'admin', 'admin@test.ee', '$2y$10$QCuSN5IRzuUuT7DTgSWx.exKyU2X0GnjNGeeUJi3BI9TcCcym0Sz2', '2023-05-07 09:04:03', '2023-05-10 12:04:24'),
(5, 'client', 'client', 'client@test.ee', '$2y$10$pdlgsdBwPLJ5WF2qlq6XZ.yqEV8WnhJvDsvCrYzOxYgyT6pGV5Dre', '2023-05-07 09:05:45', '2023-05-10 12:01:07');

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
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Индексы таблицы `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subscriptions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
