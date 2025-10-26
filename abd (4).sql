-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 مايو 2023 الساعة 18:43
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abd`
--

-- --------------------------------------------------------

--
-- بنية الجدول `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year_made` int(11) NOT NULL,
  `desc` text NOT NULL,
  `price` double NOT NULL,
  `motion_vector` varchar(255) NOT NULL,
  `engine_capacity` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fuel_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `outer_shapes_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `stutas` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `module_cars_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `engine_capacity` int(11) NOT NULL,
  `generation` varchar(255) NOT NULL,
  `motion_vector` varchar(255) NOT NULL,
  `torque` double NOT NULL,
  `average_consumption` double NOT NULL,
  `origin` varchar(255) NOT NULL,
  `horse_power` double NOT NULL,
  `acceleration` double NOT NULL,
  `number_seats` int(11) NOT NULL,
  `gather` varchar(255) NOT NULL,
  `agent` varchar(255) NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `outer_shapes_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categotie` varchar(255) NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companey` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `stutas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `fuels`
--

CREATE TABLE `fuels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `fuels`
--

INSERT INTO `fuels` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'غاز طبيعي', '2023-05-26 13:41:34', '2023-05-26 13:41:34'),
(2, 'ديزل', '2023-05-26 13:41:34', '2023-05-26 13:41:34'),
(3, 'بنزين', '2023-05-26 13:41:34', '2023-05-26 13:41:34'),
(4, 'كهرباء', '2023-05-26 13:41:34', '2023-05-26 13:41:34'),
(5, 'هجين', '2023-05-26 13:41:34', '2023-05-26 13:41:34');

-- --------------------------------------------------------

--
-- بنية الجدول `header_images`
--

CREATE TABLE `header_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `header_images`
--

INSERT INTO `header_images` (`id`, `header_image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'header_images/header_img.jpg', '#', '2023-05-26 13:41:38', '2023-05-26 13:41:38'),
(2, 'header_images/header_img.jpg', '#', '2023-05-26 13:41:38', '2023-05-26 13:41:38'),
(3, 'header_images/header_img.jpg', '#', '2023-05-26 13:41:38', '2023-05-26 13:41:38');

-- --------------------------------------------------------

--
-- بنية الجدول `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `image_cars`
--

CREATE TABLE `image_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `advertisement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_12_111111_create_outer__shapes_table', 1),
(6, '2023_05_12_124111_create_states_table', 1),
(7, '2023_05_12_124112_create_fuels_table', 1),
(8, '2023_05_12_124330_create_companies_table', 1),
(9, '2023_05_12_124331_create_categories_table', 1),
(10, '2023_05_12_124332_create_module__cars_table', 1),
(11, '2023_05_12_124341_create_advertisements_table', 1),
(12, '2023_05_12_124515_create_image_cars_table', 1),
(13, '2023_05_12_124928_create_cars_table', 1),
(14, '2023_05_12_125010_create_images_table', 1),
(15, '2023_05_12_125045_create_news_table', 1),
(16, '2023_05_12_133540_create_settings_table', 1),
(17, '2023_05_15_103926_create_header_images_table', 1),
(18, '2023_05_16_164933_create_messages_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `module__cars`
--

CREATE TABLE `module__cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_car` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `outer__shapes`
--

CREATE TABLE `outer__shapes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `outer_shape` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `outer__shapes`
--

INSERT INTO `outer__shapes` (`id`, `outer_shape`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'كوبيه', 'asset/img/coupe_unselected.png', '2023-05-26 13:41:27', '2023-05-26 13:41:27'),
(2, 'SUV', 'asset/img/suv_unselected.png', '2023-05-26 13:41:27', '2023-05-26 13:41:27'),
(3, 'هاتشباك', 'asset/img/hatchback_unselected.png', '2023-05-26 13:41:27', '2023-05-26 13:41:27'),
(4, 'سيدان', 'asset/img/sedan_unselected.png', '2023-05-26 13:41:28', '2023-05-26 13:41:28'),
(5, 'بيك أب ', 'asset/img/pickup_unselected.png', '2023-05-26 13:41:28', '2023-05-26 13:41:28'),
(6, 'كابورليه', 'asset/img/cabriolet_unselected.png', '2023-05-26 13:41:28', '2023-05-26 13:41:28'),
(7, 'ستيشن', 'asset/img/station_unselected.png', '2023-05-26 13:41:28', '2023-05-26 13:41:28'),
(8, 'فان', 'asset/img/pickup_unselected.png', '2023-05-26 13:41:28', '2023-05-26 13:41:28');

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `settings`
--

INSERT INTO `settings` (`id`, `facebook`, `youtube`, `google`, `twiter`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/AbdelbaathMechraouiCompteOfficiel', 'https://www.facebook.com/AbdelbaathMechraouiCompteOfficiel', 'https://www.facebook.com/AbdelbaathMechraouiCompteOfficiel', 'https://www.facebook.com/AbdelbaathMechraouiCompteOfficiel', '2023-05-26 13:41:22', '2023-05-26 13:41:22');

-- --------------------------------------------------------

--
-- بنية الجدول `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `states` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `stutas` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `stutas`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdelbaath', 'admin_abdelbaath@gmail.com', NULL, 663268691, 1, '$2y$10$P46qCbByrjezsMqNyBr04e8ZwKBhG1SZlGUmLj9fuaUkBl2uOgwvm', NULL, '2023-05-26 13:43:03', '2023-05-26 13:43:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertisements_user_id_foreign` (`user_id`),
  ADD KEY `advertisements_fuel_id_foreign` (`fuel_id`),
  ADD KEY `advertisements_state_id_foreign` (`state_id`),
  ADD KEY `advertisements_outer_shapes_id_foreign` (`outer_shapes_id`),
  ADD KEY `advertisements_company_id_foreign` (`company_id`),
  ADD KEY `advertisements_category_id_foreign` (`category_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_categorie_id_foreign` (`categorie_id`),
  ADD KEY `cars_module_cars_id_foreign` (`module_cars_id`),
  ADD KEY `cars_company_id_foreign` (`company_id`),
  ADD KEY `cars_outer_shapes_id_foreign` (`outer_shapes_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_company_id_foreign` (`company_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_images`
--
ALTER TABLE `header_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_car_id_foreign` (`car_id`);

--
-- Indexes for table `image_cars`
--
ALTER TABLE `image_cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_cars_advertisement_id_foreign` (`advertisement_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module__cars`
--
ALTER TABLE `module__cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module__cars_category_id_foreign` (`category_id`),
  ADD KEY `module__cars_company_id_foreign` (`company_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outer__shapes`
--
ALTER TABLE `outer__shapes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `header_images`
--
ALTER TABLE `header_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_cars`
--
ALTER TABLE `image_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `module__cars`
--
ALTER TABLE `module__cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outer__shapes`
--
ALTER TABLE `outer__shapes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `advertisements`
--
ALTER TABLE `advertisements`
  ADD CONSTRAINT `advertisements_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `advertisements_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `advertisements_fuel_id_foreign` FOREIGN KEY (`fuel_id`) REFERENCES `fuels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `advertisements_outer_shapes_id_foreign` FOREIGN KEY (`outer_shapes_id`) REFERENCES `outer__shapes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `advertisements_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `advertisements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_module_cars_id_foreign` FOREIGN KEY (`module_cars_id`) REFERENCES `module__cars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_outer_shapes_id_foreign` FOREIGN KEY (`outer_shapes_id`) REFERENCES `outer__shapes` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `image_cars`
--
ALTER TABLE `image_cars`
  ADD CONSTRAINT `image_cars_advertisement_id_foreign` FOREIGN KEY (`advertisement_id`) REFERENCES `advertisements` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `module__cars`
--
ALTER TABLE `module__cars`
  ADD CONSTRAINT `module__cars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `module__cars_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
