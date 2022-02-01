-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 27 2022 г., 11:33
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lara`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Incidunt eum error quidem.', 'Est omnis eum laudantium. Ipsa dolor praesentium eum tempore.', NULL, NULL),
(2, 'Labore tempora quidem facilis est et.', 'Sunt laudantium vel quam. Mollitia repudiandae quia praesentium iste placeat sed totam.', NULL, NULL),
(3, 'Ipsam earum quam omnis maiores rerum.', 'Ut sed est doloremque. Perferendis earum necessitatibus voluptatem. Voluptatem repellat cupiditate ea pariatur.', NULL, NULL),
(4, 'Tempore beatae dicta ut quisquam mollitia odit et ad pariatur.', 'Est laboriosam unde impedit cupiditate dolores. Quia fugiat et dolores sed laborum. Est sed aut et molestiae totam.', NULL, NULL),
(5, 'Ut possimus impedit aspernatur voluptatem sunt omnis nisi et deleniti et.', 'Expedita repudiandae aspernatur delectus eum. Occaecati nihil velit repellat atque eveniet quia ut. Dolor est tempora consequatur maiores id nisi.', NULL, NULL),
(6, 'In voluptas a rerum nostrum porro et.', 'Et dolorum perspiciatis consequatur. Totam sint nostrum non vel provident est. Quod amet impedit sed quia. Aut dolores qui expedita atque.', NULL, NULL),
(7, 'Eum dolor quisquam eos eligendi.', 'Atque sint ratione impedit nam molestiae ratione. Ea ut aut perspiciatis dicta vel atque tempore.', NULL, NULL),
(8, 'Inventore deleniti perferendis deleniti.', 'Ullam commodi sint perferendis quos. Aliquid cum libero mollitia id iusto et.', NULL, NULL),
(9, 'Mollitia assumenda molestias aut.', 'Cupiditate vero nihil natus sed quidem qui. Qui repellat soluta exercitationem iusto id.', NULL, NULL),
(10, 'Quia aperiam quam omnis ea magnam rem quod illo quo adipisci deleniti.', 'Natus nostrum molestiae pariatur similique. Qui dolores delectus et et voluptas similique. Rerum sed tempore eius totam et quae.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_23_134540_create_categories_table', 1),
(6, '2022_01_23_134613_create_news_table', 1),
(7, '2022_01_23_152010_add_category_id_in_news_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `status` enum('DRAFT','ACTIVE','BLOCKED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `display` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `slug`, `author`, `status`, `image`, `description`, `display`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quis quibusdam sint et et ut non omnis veritatis mollitia voluptatem.', 'quis-quibusdam-sint-et-et-ut-non-omnis-veritatis-mollitia-voluptatem', 'Admin', 'DRAFT', NULL, 'Alias libero et et labore sed alias ut. Voluptas reprehenderit dolorum sed dolores quaerat eligendi aut. Quam mollitia corrupti est magni ratione.', 1, NULL, NULL),
(2, 1, 'Ipsum veniam eum culpa aut eum totam molestiae.', 'ipsum-veniam-eum-culpa-aut-eum-totam-molestiae', 'Admin', 'DRAFT', NULL, 'Perspiciatis velit minus et quam esse quis. Sit assumenda vel occaecati qui alias vel consequatur. In et occaecati quod ut ratione perferendis deserunt quia.', 1, NULL, NULL),
(3, 1, 'Voluptatibus molestiae voluptate occaecati culpa illo rerum non minus voluptas maiores.', 'voluptatibus-molestiae-voluptate-occaecati-culpa-illo-rerum-non-minus-voluptas-maiores', 'Admin', 'DRAFT', NULL, 'Tempora ea doloremque rem. Explicabo asperiores labore nam. Rerum consectetur ducimus beatae aut ut.', 1, NULL, NULL),
(4, 1, 'Quia tenetur iste ut voluptas culpa eligendi quasi natus accusamus.', 'quia-tenetur-iste-ut-voluptas-culpa-eligendi-quasi-natus-accusamus', 'Admin', 'DRAFT', NULL, 'Sit sit id mollitia quis. Quisquam rem maiores quos aut molestiae ex quis. Alias et magnam officiis et itaque error reprehenderit.', 1, NULL, NULL),
(5, 1, 'Nulla id provident inventore.', 'nulla-id-provident-inventore', 'Admin', 'DRAFT', NULL, 'Sit ut qui incidunt ex iste minima et dolor. Reiciendis facilis non neque aut sed facere aliquam. Alias veritatis ut sit nobis aliquid.', 1, NULL, NULL),
(6, 1, 'Reprehenderit iure autem eum enim sint laudantium esse et dolorum rerum qui sunt.', 'reprehenderit-iure-autem-eum-enim-sint-laudantium-esse-et-dolorum-rerum-qui-sunt', 'Admin', 'DRAFT', NULL, 'Exercitationem et velit hic non. Quis et unde et aspernatur non velit.', 1, NULL, NULL),
(7, 1, 'Doloribus ut natus eaque occaecati incidunt occaecati nihil minus at.', 'doloribus-ut-natus-eaque-occaecati-incidunt-occaecati-nihil-minus-at', 'Admin', 'DRAFT', NULL, 'Quae rerum laboriosam repellat sit hic consectetur quia. Provident corporis perspiciatis non nam.', 1, NULL, NULL),
(8, 1, 'Inventore animi odit ad maxime cupiditate eum soluta est.', 'inventore-animi-odit-ad-maxime-cupiditate-eum-soluta-est', 'Admin', 'DRAFT', NULL, 'Quam magnam harum eos eos. Atque ut facilis magnam magnam. Iusto velit ut itaque.', 1, NULL, NULL),
(9, 1, 'Eaque occaecati eveniet soluta architecto qui.', 'eaque-occaecati-eveniet-soluta-architecto-qui', 'Admin', 'DRAFT', NULL, 'At est blanditiis eum et accusantium qui. Quis impedit in qui animi. Occaecati est dolores quia voluptatem id. Quia ea beatae dolore ea esse.', 1, NULL, NULL),
(10, 1, 'Non officia quia id ipsam illum fugit.', 'non-officia-quia-id-ipsam-illum-fugit', 'Admin', 'DRAFT', NULL, 'Dolore dolore nisi vitae ipsa et quia quas sunt. Quidem aliquam et repellendus suscipit est vel provident.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category_id_foreign` (`category_id`),
  ADD KEY `news_slug_status_display_index` (`slug`,`status`,`display`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
