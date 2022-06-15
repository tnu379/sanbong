-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 02:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `content`, `title`, `img`, `created_at`, `updated_at`) VALUES
(1, 'mlem', 'mlem', 'Mlem.jpg', '2022-06-13 16:56:37', '2022-06-14 08:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` int(11) NOT NULL,
  `yard_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_04_16_191103_creat_sessions_table', 3),
(9, '2022_04_10_105459_create_users_table', 4),
(11, '2022_04_18_143648_create_yard_table', 5),
(13, '2022_04_23_083622_create_orders_table', 6),
(15, '2022_04_23_104006_create_times_table', 7),
(16, '2022_04_23_111204_create_yard_times_table', 7),
(17, '2022_04_23_111347_create_month_table', 7),
(18, '2022_04_23_112038_create_day_table', 8),
(20, '2022_04_25_143526_create_events_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `number`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL),
(6, 6, NULL, NULL),
(7, 7, NULL, NULL),
(8, 8, NULL, NULL),
(9, 9, NULL, NULL),
(10, 10, NULL, NULL),
(11, 11, NULL, NULL),
(12, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `yard_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `yard_id`, `user_id`, `customer_id`, `amount`, `status`, `start`, `end`, `created_at`, `updated_at`, `title`) VALUES
(9, 1, 2, 5, 90000, 0, '2022-05-06 06:00:00', '2022-05-06 07:00:00', '2022-05-05 06:09:50', '2022-05-05 06:09:50', '123123'),
(10, 1, 2, 5, 90000, 0, '2022-05-06 07:00:00', '2022-05-06 08:00:00', '2022-05-05 06:19:45', '2022-05-05 06:19:45', 'Úy'),
(11, 1, 2, 5, 90000, 0, '2022-05-06 08:00:00', '2022-05-06 09:00:00', '2022-05-05 06:22:35', '2022-05-05 06:22:35', 'Long'),
(12, 1, 2, 5, 90000, 0, '2022-05-06 09:00:00', '2022-05-06 10:00:00', '2022-05-05 06:24:31', '2022-05-05 06:24:31', 'Hiếu'),
(13, 3, 2, 5, 90000, 0, '2022-05-06 06:00:00', '2022-05-06 07:00:00', '2022-05-05 06:25:18', '2022-05-05 06:25:18', 'THành'),
(14, 3, 2, 5, 90000, 0, '2022-05-06 07:00:00', '2022-05-06 08:00:00', '2022-05-05 06:26:23', '2022-05-05 06:26:23', 'Kim Anh'),
(15, 3, 2, 5, 90000, 0, '2022-05-06 08:00:00', '2022-05-06 09:00:00', '2022-05-05 06:30:11', '2022-05-05 06:30:11', 'Khoa'),
(16, 8, 2, 5, 90000, 0, '2022-05-06 06:00:00', '2022-05-06 07:00:00', '2022-05-05 06:31:52', '2022-05-05 06:31:52', 'THạch sanh'),
(17, 1, 2, 2, 90000, 0, '2022-05-09 06:00:00', '2022-05-09 07:00:00', '2022-05-07 23:42:06', '2022-05-07 23:42:06', 'Luan'),
(18, 1, 2, 5, 90000, 0, '2022-05-29 06:00:00', '2022-05-29 07:00:00', '2022-05-27 21:51:46', '2022-05-27 21:51:46', 'Long'),
(19, 1, 2, 5, 90000, 0, '2022-05-29 07:00:00', '2022-05-29 08:00:00', '2022-05-27 23:16:44', '2022-05-27 23:16:44', 'Phương'),
(20, 1, 2, 5, 90000, 0, '2022-05-29 08:00:00', '2022-05-29 09:00:00', '2022-05-28 01:19:24', '2022-05-28 01:19:24', 'THọ'),
(21, 1, 2, 5, 90000, 0, '2022-05-30 06:00:00', '2022-05-30 07:00:00', '2022-05-28 01:42:20', '2022-05-28 01:42:20', 'Úy'),
(22, 3, 2, 5, 90000, 0, '2022-05-29 06:00:00', '2022-05-29 07:00:00', '2022-05-28 01:43:50', '2022-05-28 01:43:50', 'Công'),
(24, 1, 2, 5, 90000, 0, '2022-06-12 06:00:00', '2022-06-12 07:00:00', '2022-06-11 08:48:46', '2022-06-11 08:48:46', '1sasd'),
(25, 1, 2, 5, 90000, 0, '2022-06-13 06:00:00', '2022-06-13 07:00:00', '2022-06-11 09:00:27', '2022-06-11 09:00:27', 'MInh'),
(26, 1, 2, 5, 90000, 0, '2022-06-14 06:00:00', '2022-06-14 07:00:00', '2022-06-11 09:45:35', '2022-06-11 09:45:35', 'uy');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `order_id`, `customer_id`, `amount`, `status`, `title`, `created_at`, `updated_at`, `type`) VALUES
(1, 2, 12, 5, 90000, 1, 'Hiếu', '2022-05-28 08:48:21', '2022-05-28 15:48:21', 2),
(2, 2, 12, 5, 90000, 1, 'Hiếu', '2022-05-08 06:36:55', '2022-05-08 06:36:55', 0),
(3, 2, 13, 5, 90000, 1, 'THành', '2022-05-08 06:35:58', '2022-05-08 06:35:58', 0),
(4, 2, 13, 5, 90000, 1, 'THành', '2022-05-08 06:36:00', '2022-05-08 06:36:00', 0),
(5, 2, 13, 5, 90000, 1, 'THành', '2022-05-08 06:37:12', '2022-05-08 06:37:12', 0),
(6, 2, 14, 5, 90000, 1, 'Kim Anh', '2022-05-08 06:37:16', '2022-05-08 06:37:16', 0),
(7, 2, 14, 5, 90000, 1, 'Kim Anh', '2022-05-08 06:37:14', '2022-05-08 06:37:14', 0),
(8, 2, 14, 5, 90000, 0, 'Kim Anh', '2022-05-05 06:29:58', '2022-05-05 13:29:58', 0),
(9, 2, 14, 5, 90000, 0, 'Kim Anh', '2022-05-05 06:29:59', '2022-05-05 13:29:59', 0),
(10, 2, 14, 5, 90000, 0, 'Kim Anh', '2022-05-05 06:30:00', '2022-05-05 13:30:00', 0),
(11, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:11', '2022-05-05 13:30:11', 0),
(12, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:35', '2022-05-05 13:30:35', 0),
(13, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:35', '2022-05-05 13:30:35', 0),
(14, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:52', '2022-05-05 13:30:52', 0),
(15, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:30:54', '2022-05-05 13:30:54', 0),
(16, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:15', '2022-05-05 13:31:15', 0),
(17, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:16', '2022-05-05 13:31:16', 0),
(18, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:19', '2022-05-05 13:31:19', 0),
(19, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:20', '2022-05-05 13:31:20', 0),
(20, 2, 15, 5, 90000, 0, 'Khoa', '2022-05-05 06:31:20', '2022-05-05 13:31:20', 0),
(21, 2, 16, 5, 90000, 0, 'THạch sanh', '2022-05-05 06:31:52', '2022-05-05 13:31:52', 0),
(22, 2, 16, 5, 90000, 0, 'THạch sanh', '2022-05-05 07:21:57', '2022-05-05 14:21:57', 0),
(23, 2, 17, 2, 90000, 0, 'Luan', '2022-05-07 23:42:26', '2022-05-08 06:42:26', 0),
(24, 2, 20, 5, 90000, 1, 'THọ', '2022-05-28 01:37:50', '2022-05-28 08:37:50', 0),
(25, 2, 20, 5, 90000, 1, 'THọ', '2022-05-28 01:37:59', '2022-05-28 08:37:59', 0),
(26, 2, 20, 5, 90000, 1, 'THọ', '2022-05-28 01:40:03', '2022-05-28 08:40:03', 0),
(27, 2, 21, 5, 90000, 1, 'Úy', '2022-05-28 01:42:23', '2022-05-28 08:42:23', 0),
(28, 2, 22, 5, 90000, 1, 'Công', '2022-05-28 01:43:52', '2022-05-28 08:43:52', 0),
(29, 2, 25, 5, 90000, 1, 'MInh', '2022-06-11 09:09:37', '2022-06-11 16:09:37', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `number`, `created_at`, `updated_at`) VALUES
(5, 5, NULL, NULL),
(6, 6, NULL, NULL),
(7, 7, NULL, NULL),
(8, 8, NULL, NULL),
(9, 9, NULL, NULL),
(10, 10, NULL, NULL),
(14, 14, NULL, NULL),
(15, 15, NULL, NULL),
(16, 16, NULL, NULL),
(17, 17, NULL, NULL),
(18, 18, NULL, NULL),
(19, 19, NULL, NULL),
(20, 20, NULL, NULL),
(21, 21, NULL, NULL),
(22, 22, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `coin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `img`, `email`, `email_verified_at`, `password`, `address`, `phone`, `district`, `ward`, `street`, `role`, `status`, `coin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'uytran99', 'mlem', '/storage/uploads/avatar//1650205057.jpg', 'uytran99@gmail.com', NULL, '$2y$10$Ava.Z/RfSjqZezhUq1LqTO3DGlst9Xi5MYLkub31rzrvJIjUIBJEu', NULL, NULL, 3, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL),
(2, 'ngocuy919nt', 'tran ngoc', '/storage/uploads/avatar//1650205057.jpg', 'ngocuy919nt@gmail.com', NULL, '$2y$10$Ava.Z/RfSjqZezhUq1LqTO3DGlst9Xi5MYLkub31rzrvJIjUIBJEu', '1127', '0393717381', 1, '10', 'Đoàn Văn Bơ', 2, 1, 360000, NULL, '2022-04-17 07:17:37', '2022-05-07 23:37:16'),
(5, 'tnu02', ' uy tran', '/storage/uploads/avatar//1650205057.jpg', 'tnu02@yopmail.com', NULL, '$2y$10$Ava.Z/RfSjqZezhUq1LqTO3DGlst9Xi5MYLkub31rzrvJIjUIBJEu', NULL, '0393717380', 1, NULL, NULL, 3, 1, NULL, NULL, '2022-04-24 09:03:59', '2022-04-24 09:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `yard`
--

CREATE TABLE `yard` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yard`
--

INSERT INTO `yard` (`id`, `users_id`, `name`, `price`, `is_active`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dragon', '100000', 1, 1, 0, '2022-04-20 08:59:24', '2022-04-22 07:45:11'),
(3, 2, 'DragonFly', '100000', 0, 1, 0, '2022-04-20 09:00:44', '2022-04-20 09:00:44'),
(8, 2, 'Lion', '100000', 1, 1, 0, '2022-04-20 09:00:44', '2022-04-24 08:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `yard_times`
--

CREATE TABLE `yard_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `yard_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `day_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yard_times`
--

INSERT INTO `yard_times` (`id`, `yard_id`, `time_id`, `month_id`, `created_at`, `updated_at`, `day_id`, `status`) VALUES
(1, 1, 7, 4, NULL, NULL, 24, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `yard`
--
ALTER TABLE `yard`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `yard_name_unique` (`name`);

--
-- Indexes for table `yard_times`
--
ALTER TABLE `yard_times`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `yard`
--
ALTER TABLE `yard`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `yard_times`
--
ALTER TABLE `yard_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
