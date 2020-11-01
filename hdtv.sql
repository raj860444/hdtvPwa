-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2020 at 02:52 PM
-- Server version: 5.7.31-0ubuntu0.16.04.1
-- PHP Version: 7.1.33-21+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hdtv`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categories_tbl`
--

CREATE TABLE `Categories_tbl` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `display_order` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `edited_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_19_204523_edit_sql', 1),
('2016_04_23_073830_create_categories_table', 1),
('2016_04_29_212008_create_videos_table', 1),
('2016_05_03_120049_create_post_category_table', 1),
('2016_05_04_060442_create_posts_table', 1),
('2016_05_13_194000_create_subscription_table', 1),
('2016_08_22_022511_create_user_video_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts_tbl`
--

CREATE TABLE `posts_tbl` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_image_location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_content` text COLLATE utf8_unicode_ci,
  `post_category` int(10) UNSIGNED NOT NULL,
  `active` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `edited_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_category_tbl`
--

CREATE TABLE `post_category_tbl` (
  `pc_id` int(10) UNSIGNED NOT NULL,
  `pc_category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pc_category_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pc_parent_id` int(10) UNSIGNED NOT NULL,
  `pc_display_order` int(10) UNSIGNED NOT NULL,
  `pc_created_by` int(10) UNSIGNED NOT NULL,
  `pc_edited_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_tbl`
--

CREATE TABLE `subscription_tbl` (
  `subscription_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `payment_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'stripe',
  `amount` decimal(8,2) UNSIGNED NOT NULL,
  `discount` decimal(8,2) UNSIGNED NOT NULL,
  `total_amt` decimal(8,2) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `purchase_time` timestamp NULL DEFAULT NULL,
  `started_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `doneby` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'system',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_customer_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `active` smallint(6) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_video_tbl`
--

CREATE TABLE `user_video_tbl` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `video_id` int(10) UNSIGNED NOT NULL,
  `operation_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos_tbl`
--

CREATE TABLE `videos_tbl` (
  `video_id` int(10) UNSIGNED NOT NULL,
  `video_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_cover_location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_details` text COLLATE utf8_unicode_ci,
  `video_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_category` int(10) UNSIGNED NOT NULL,
  `video_tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_duration` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_access` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_source` text COLLATE utf8_unicode_ci,
  `featured` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_favorites` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `video_views` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories_tbl`
--
ALTER TABLE `Categories_tbl`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `categories_tbl_created_by_foreign` (`created_by`),
  ADD KEY `categories_tbl_edited_by_foreign` (`edited_by`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posts_tbl_created_by_foreign` (`created_by`),
  ADD KEY `posts_tbl_edited_by_foreign` (`edited_by`);

--
-- Indexes for table `post_category_tbl`
--
ALTER TABLE `post_category_tbl`
  ADD PRIMARY KEY (`pc_id`),
  ADD KEY `post_category_tbl_pc_created_by_foreign` (`pc_created_by`),
  ADD KEY `post_category_tbl_pc_edited_by_foreign` (`pc_edited_by`);

--
-- Indexes for table `subscription_tbl`
--
ALTER TABLE `subscription_tbl`
  ADD PRIMARY KEY (`subscription_id`),
  ADD KEY `subscription_tbl_user_id_foreign` (`user_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_tbl_email_unique` (`email`);

--
-- Indexes for table `user_video_tbl`
--
ALTER TABLE `user_video_tbl`
  ADD KEY `user_video_tbl_user_id_index` (`user_id`),
  ADD KEY `user_video_tbl_video_id_index` (`video_id`);

--
-- Indexes for table `videos_tbl`
--
ALTER TABLE `videos_tbl`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `videos_tbl_video_category_foreign` (`video_category`),
  ADD KEY `videos_tbl_created_by_foreign` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categories_tbl`
--
ALTER TABLE `Categories_tbl`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_category_tbl`
--
ALTER TABLE `post_category_tbl`
  MODIFY `pc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscription_tbl`
--
ALTER TABLE `subscription_tbl`
  MODIFY `subscription_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `videos_tbl`
--
ALTER TABLE `videos_tbl`
  MODIFY `video_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Categories_tbl`
--
ALTER TABLE `Categories_tbl`
  ADD CONSTRAINT `categories_tbl_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_tbl_edited_by_foreign` FOREIGN KEY (`edited_by`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
  ADD CONSTRAINT `posts_tbl_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_tbl_edited_by_foreign` FOREIGN KEY (`edited_by`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_category_tbl`
--
ALTER TABLE `post_category_tbl`
  ADD CONSTRAINT `post_category_tbl_pc_created_by_foreign` FOREIGN KEY (`pc_created_by`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_category_tbl_pc_edited_by_foreign` FOREIGN KEY (`pc_edited_by`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscription_tbl`
--
ALTER TABLE `subscription_tbl`
  ADD CONSTRAINT `subscription_tbl_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_video_tbl`
--
ALTER TABLE `user_video_tbl`
  ADD CONSTRAINT `user_video_tbl_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_video_tbl_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos_tbl` (`video_id`) ON DELETE CASCADE;

--
-- Constraints for table `videos_tbl`
--
ALTER TABLE `videos_tbl`
  ADD CONSTRAINT `videos_tbl_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_tbl_video_category_foreign` FOREIGN KEY (`video_category`) REFERENCES `Categories_tbl` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
