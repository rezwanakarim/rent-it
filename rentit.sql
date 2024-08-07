-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 07:53 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Flat', 'Mollit cillum quaera', 0, '2023-03-15 10:01:25', '2023-03-15 10:01:25'),
(2, 'Apartment', 'Des', 0, '2023-03-15 10:02:35', '2023-03-15 10:02:35'),
(3, 'Studio', 'description Studio', 0, '2023-03-15 10:04:01', '2023-03-15 10:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `username`, `gender`, `address`, `number`, `email`, `password`, `created_at`, `updated_at`) VALUES
(11, 'Vincent', 'Robbins', 'bumepive', 'male', 'Quibusdam dolore aut', 220, 'nibi@mailinator.com', 'Pa$$w0rd!', '2023-03-29 05:27:48', '2023-03-29 05:27:48'),
(12, 'Fredericka', 'David', 'qolehej', 'male', 'Ex mollit itaque off', 622, 'fibi@mailinator.com', 'Pa$$w0rd!', '2023-03-29 11:04:18', '2023-03-30 11:44:08'),
(14, 'Byron update', 'Tucker update', 'xylaro', 'male', 'Gazipura 27 Road', 1725369874, 'qeje@mailinator.com', 'Pa$$w0rd!', '2023-03-30 05:54:41', '2023-03-30 11:43:39'),
(15, 'Susan', 'Goodwin', 'qaxejavaf', 'male', 'Porro nihil sit ut', 445, 'tovijupeba@mailinator.com', 'Pa$$w0rd!', '2023-03-30 14:31:45', '2023-03-30 14:31:45'),
(16, 'Amelia', 'Willis', 'dajanotez', 'others', 'Id qui et a ex beata', 847, 'puqono@mailinator.com', 'Pa$$w0rd!', '2023-03-30 14:40:40', '2023-03-30 14:40:40'),
(17, 'Kellie', 'Morris', 'pisobikary', 'female', 'Laborum aspernatur e', 926, 'zezy@mailinator.com', 'Pa$$w0rd!', '2023-03-30 14:46:37', '2023-03-30 14:46:37'),
(18, 'Noelani', 'Fry', 'xoqyganamo', 'others', 'Natus omnis iure nos', 460, 'boqe@mailinator.com', 'Pa$$w0rd!', '2023-03-30 14:47:49', '2023-03-30 14:47:49'),
(19, 'Murphy', 'Daugherty', 'mygamos', 'male', 'Numquam ratione non', 546, 'fesope@mailinator.com', 'Pa$$w0rd!', '2023-03-30 14:48:09', '2023-03-30 14:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_12_195050_create_categories_table', 1),
(6, '2023_03_13_192501_create_properties_table', 1),
(7, '2023_03_18_084107_create_phones_table', 2),
(9, '2023_03_18_103617_add_customer_id_to_phones_table', 2),
(10, '2023_03_25_070520_create_sliders_table', 3),
(14, '2023_03_18_084602_create_customers_table', 5),
(18, '2023_03_26_060328_create_reservations_table', 6),
(26, '2023_03_30_190702_create_roles_table', 7),
(27, '2014_10_12_000000_create_users_table', 8),
(28, '2023_03_31_102603_rename_title_to_name_in_roles_table', 9),
(29, '2023_03_31_114135_drop_column_role_from_users_table', 10),
(30, '2023_03_31_135517_drop_column_role_id_in_users_table', 11),
(32, '2023_03_31_135753_add_column_role_id_in_users_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('topukhan735@gmail.com', '$2y$10$nIE53vNoWCtAEVazFuL8m.rl0CXNWzg9xOTxzkYGI.DMbm3Z6kFdG', '2023-03-29 09:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` bigint UNSIGNED NOT NULL,
  `number` int NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `number`, `customer_id`, `created_at`, `updated_at`) VALUES
(4, 1111111, 1, '2023-03-18 10:53:14', '2023-03-18 10:53:14'),
(5, 222222222, 2, '2023-03-18 10:53:21', '2023-03-18 10:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `property_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_category` bigint UNSIGNED NOT NULL,
  `property_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` double NOT NULL,
  `price` double NOT NULL,
  `contact_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_id`, `property_category`, `property_title`, `property_description`, `location`, `area`, `price`, `contact_info`, `property_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'Voluptas aut enim li', 1, 'Omnis ut fugit sint', 'vfrrrrgehgerstj', 'Sequi quod dolor tem', 30, 328, 'dyny@mailinator.com', '1679808278.jpg', '2023-03-21 11:48:55', '2023-03-25 23:24:50', '2023-03-25 23:24:50'),
(10, 'Aut veniam autem el', 1, 'Asperiores proident', 'trrtrtrtr', 'Impedit rerum quae', 81, 540, 'rudehyq@mailinator.com', '1680021026.jpg', '2023-03-21 11:49:08', '2023-03-28 10:30:31', NULL),
(11, 'Sit aut cumque cons', 1, 'Et id quia esse expe', 'Non id similique nes', 'Cumque et nihil moll', 47, 828, 'nunubuteni@mailinator.com', '1680010655.jpg', '2023-03-21 11:49:44', '2023-03-28 07:37:40', NULL),
(12, 'Veritatis tempore d', 1, 'Sit est in quia vero', 'Labore amet fugiat', 'Dignissimos iure Nam', 78, 863, 'topisyfyg@mailinator.com', '1680021009.jpg', '2023-03-21 12:25:32', '2023-03-28 10:30:12', NULL),
(13, 'testt', 1, 'Ullam necessitatibus', 'Cupidatat quisquam d', 'Dolore neque amet m', 100, 527, 'coselihi@mailinator.com', '1680021852.jpg', '2023-03-23 11:24:59', '2023-03-28 10:44:14', NULL),
(14, 'Tempore laborum Pr', 3, 'Esse quasi cupidatat', 'Quibusdam itaque rer', 'Eu est magni quasi', 43, 327, 'jypi@mailinator.com', '1680021876.jpg', '2023-03-23 11:25:23', '2023-03-28 10:44:37', NULL),
(15, 'Magna rerum et commo', 1, 'Sint iure neque in a', 'Dolorem qui cupidita', 'Magnam odit est quia', 24, 903, 'vezazami@mailinator.com', '1680021890.jpg', '2023-03-23 11:25:42', '2023-03-28 10:44:52', NULL),
(16, 'Voluptatem Veniam', 1, 'Doloribus omnis anim', 'Nulla quam eius eius', 'Magnam vel veniam m', 53, 448, 'xemire@mailinator.com', '1680021905.jpg', '2023-03-23 11:26:08', '2023-03-28 10:45:09', NULL),
(17, 'Ad quia quasi conseq', 1, 'Consectetur exercita', 'Quibusdam autem opti', 'Sit laborum Incidid', 89, 29, 'hocijox@mailinator.com', '1680021923.jpg', '2023-03-26 13:29:50', '2023-03-28 10:45:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL,
  `property_id` int NOT NULL,
  `status_id` int NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `customer_id`, `name`, `email`, `message`, `number`, `property_id`, `status_id`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Bertha Beck', 'seqypew@mailinator.com', 'Quis fugiat porro ad', 395, 11, 1, 'Accepted', '2023-03-29 13:55:08', '2023-03-29 13:59:15'),
(3, NULL, 'Robert Poole', 'vitebuqa@mailinator.com', 'Consequuntur sed pro', 273, 16, 1, 'Accepted', '2023-03-30 05:11:18', '2023-03-30 08:09:40'),
(5, NULL, 'Cain Harrington', 'luhaxar@mailinator.com', 'Officia anim minima', 559, 10, 0, 'pending', '2023-03-30 09:18:58', '2023-03-30 09:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '2023-03-31 05:04:28', '2023-03-31 05:05:57'),
(5, 'Moderator', '2023-03-31 06:02:29', '2023-03-31 06:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Test slide', 'slider 1 description', '1680020941.jpg', '2023-03-25 07:36:56', '2023-03-28 10:29:07'),
(2, 'Est modi qui exercit', 'Tempora veniam mini', '1680019375.jpg', '2023-03-25 07:40:32', '2023-03-28 10:02:59'),
(3, 'test', 'test description', '1680020705.jpg', '2023-03-25 11:05:49', '2023-03-28 10:25:05'),
(4, 'Rerum sunt commodo e', 'Vitae et dicta odio', '1680088041.jpg', '2023-03-25 12:06:06', '2023-03-29 05:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `role_id`, `address`, `number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Colt', 'Bolton', 'xucunydad', 0, 'Rerum similique nece', 895, 'luqocevul@mailinator.com', NULL, 'Pa$$w0rd!', NULL, '2023-03-30 14:51:40', '2023-03-30 14:51:40'),
(2, 'Maxine Maxine', 'Sweet sweet 2', 'duwokug', 5, 'gazipur', 123456789, 'lucicuke@mailinator.com', NULL, 'Pa$$w0rd!', NULL, '2023-03-31 04:17:03', '2023-03-31 10:27:49'),
(3, 'Mannix', 'Dawson', 'zagebiba', 0, 'Voluptas vel sapient', 787, 'kepygevoto@mailinator.com', NULL, 'Pa$$w0rd!', NULL, '2023-03-31 04:17:49', '2023-03-31 04:17:49'),
(4, 'Amelia', 'Pollard', 'dilutaqino', 3, 'Iusto voluptatibus d', 679, 'ricujizi@mailinator.com', NULL, 'Pa$$w0rd!', NULL, '2023-03-31 07:22:27', '2023-03-31 10:27:34'),
(5, 'Blaine', 'Lynn', 'juxucobam', 3, 'Quia quos praesentiu', 387, 'test@gmail.com', NULL, '1234', NULL, '2023-03-31 12:25:11', '2023-03-31 13:50:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
