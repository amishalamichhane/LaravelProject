-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2024 at 01:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_09_06_161753_create_sessions_table', 1),
(2, '2024_09_11_024656_create_publications_table', 1),
(3, '2024_09_12_055721_add_url_to_publications_table', 1),
(4, '2024_09_12_061739_create_users_table', 1),
(5, '2024_09_12_073245_create_cache_table', 1),
(6, '2024_09_23_082844_create_staff_table', 2),
(7, '2024_09_30_100009_create_studies_table', 3),
(8, '2024_10_01_064044_change_questions_link_type_in_studies_table', 4),
(9, '2024_10_01_070103_change_codebook_link_type_in_studies_table', 5),
(10, '2024_10_01_070123_change_data_link_type_in_studies_table', 5),
(11, '2024_10_01_091936_add_slug_to_studies_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `journal` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `citation` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `authors`, `journal`, `year`, `citation`, `created_at`, `updated_at`, `url`) VALUES
(1, 'A cross-cultural examination of adverse childhood experiences in low-and middle-income countries and their relation with adolescent educational aspirations.', 'Melissa Alcaraz, Hayley Pierce, Natalie D. Eggum, Bertha Lidia Nuño-Gutiérrez, Dirgha Ghimire', 'Child Abuse & Neglect', 2024, 'Alcaraz, M., Pierce, H., Eggum, N. D., Nuño-Gutiérrez, B. L., & Ghimire, D. (2024). A cross-cultural examination...', NULL, NULL, NULL),
(2, 'Youth’s Family and Non-Family Roles as Predictors of Subjective Adulthood in Three Low-Income Agricultural Settings', 'Erick Axxe, Sarah R. Hayford, Natalie D. Eggum', 'Journal of Research on Adolescence', 2022, 'Axxe, E., Hayford, S. R., & Eggum, N. D. (2022). Youth’s family and non-family roles as predictors of subjective adulthood in three low-income agricultural settings. Journal of Research on Adolescence.', NULL, NULL, NULL),
(3, 'Desired Fertility and Educational Aspirations: Adolescent Goals in Rapidly Changing Social Contexts', 'Melissa Alcaraz, Sarah R. Hayford, Jennifer E. Glick', 'Journal of Marriage and Family\r\n\r\n\r\n\r\n\r\n\r\n', 2022, ' Alcaraz, M., Hayford, S. R., & Glick, J. E. (2022). Desired fertility and educational aspirations: Adolescent goals in rapidly changing social contexts. Journal of Marriage and Family.', NULL, NULL, NULL),
(4, 'Exploring the Association Between Educational Aspirations and Intentions to Migrate Among Youth in Central Mexico by Gender', 'Flavio F. Marsiglia, Ana Paola Campos, Shiyou Wu, Bertha L. Nuño-Gutiérrez, Hilda García-Pérez, Jennifer E. Glick', ' International Journal of Social Welfare', 2023, 'Marsiglia, F. F., Campos, A. P., Wu, S., Nuño-Gutiérrez, B. L., García-Pérez, H., & Glick, J. E. (2023). Exploring the association between educational aspirations and intentions to migrate among youth in Central Mexico by gender. International Journal of Social Welfare.', NULL, NULL, NULL),
(5, 'Migration Aspirations and Adolescents’ Ideal Age at Union Formation in Western Mexico', 'Melissa Alcaraz', 'International Migration Review', 2023, 'Alcaraz, M. (2023). Migration Aspirations and Adolescents’ Ideal Age at Union Formation in Western Mexico. International Migration Review.', NULL, NULL, NULL),
(6, ' Exploring the Association Between Educational Aspirations and Intentions to Migrate Among Youth in Central Mexico by Gender', ' Flavio F. Marsiglia, Ana Paola Campos, Shiyou Wu, Bertha L. Nuño-Gutiérrez, Hilda García-Pérez, Jennifer E. Glick', 'International Journal of Social Welfare', 2023, 'Marsiglia, F. F., Campos, A. P., Wu, S., Nuño-Gutiérrez, B. L., García-Pérez, H., & Glick, J. E. (2023). Exploring the association between educational aspirations and intentions to migrate among youth in Central Mexico by gender. International Journal of Social Welfare.', '2024-09-16 00:06:49', '2024-09-16 00:06:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('pGEkclu5ncoNcJHk3H4cZ6gMxysmZCUc2lLkhQuq', 3, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiRkNDSFZ0bUR1SVR6UkRDRmhDZW1yd0xWNmxjU3BYdjY5WGM0MzhzSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkRmNSU2dNejREM1JUS1N4eGFsTTBmdUozeFlYenlYT0p4bUFSLmVtL09waGxXUFJJUk9tbm0iO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1727780292);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `role`, `image`, `created_at`, `updated_at`) VALUES
(16, 'Prof. Dr. Dirgha J. Ghimire', 'EXECUTIVE DIRECTOR', 'img/dhirgha.jpg', '2024-09-24 03:20:58', '2024-09-30 00:50:04'),
(17, 'Mrs. Indra Kumari Chaudhary', 'PROGRAM COORDINATOR', 'img/Indra-Kumari-Chaudhary.jpg', '2024-09-24 03:23:19', '2024-09-30 00:52:39'),
(18, 'Mrs. Adina Gurung', 'DATA MANAGER', 'img/mrs adina gurung.jpg', '2024-09-24 03:24:19', '2024-09-30 00:53:35'),
(19, 'Mr. Rajendra Ghimire', 'RESEARCH OFFICER', 'img/Rajendra-Ghimire.jpg', '2024-09-24 03:25:26', '2024-09-30 00:54:02'),
(20, 'Mr. Krishna Shrestha', 'RESEARCH OFFICER', 'img/Krishna-Shrestha.jpg', '2024-09-24 03:26:11', '2024-09-30 00:54:11'),
(21, 'Mrs. Sita Chaudhary', 'ASST. RESEARCH OFFICER', 'img/Sita-Chaudhary.jpg', '2024-09-24 03:28:04', '2024-09-30 00:54:20'),
(22, 'Mr. Govinda Lamichhane', 'ASST. RESEARCH OFFICER', 'img/Gobinda-Lamichhane.jpg', '2024-09-24 03:28:35', '2024-09-30 00:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE `studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `data_link` text NOT NULL,
  `codebook_link` text NOT NULL,
  `questions_link` text NOT NULL,
  `report_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studies`
--

INSERT INTO `studies` (`id`, `title`, `slug`, `image`, `data_link`, `codebook_link`, `questions_link`, `report_link`, `created_at`, `updated_at`) VALUES
(1, 'Family Migration Context & Socio-emotional Competence. Study-2017', 'family-migration-context-socio-emotional-competence-study-2017', 'img/data1.jpg', '<p><span style=\"font-size: 14pt;\">The data is currently being processed and will be published in due course.</span></p>', '<h2>&nbsp; &nbsp; <span style=\"color: #000000;\">CodeBook</span></h2>\n<ul>\n<li><a href=\"../../../codebook/Child1_CodeBook.pdf\">Chil</a><a href=\"../../../codebook/Child1_CodeBook.pdf\">d1 CodeBook</a></li>\n<li><a href=\"codebook/Child_2_Codebook.pdf\" target=\"_blank\" rel=\"noopener\">Child2 Codebook</a></li>\n<li><a href=\"../../../codebook/FameloHHCodebook.pdf\">FameloHHCodebook</a></li>\n</ul>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">Are there any reciprocal effects between dimensions of parenting and children&rsquo;s social competence and adjustment problems?</li>\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">What are the child-effect pathways to migration?</li>\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">How does the father&rsquo;s influence, beyond that of the primary caregivers, affect children&rsquo;s outcomes?</li>\n</ol>\n</li>\n</ol>', '/report/wave2.pdf', '2024-09-30 04:51:29', '2024-10-01 04:14:21'),
(2, 'Family Migration Context and Socio-emotional Competence. Study-2021', 'Family Migration Context and Socio-emotional Competence. Study-2021', 'img/data2.jpg', '<p><span style=\"font-size: 18.6667px;\">The data is currently being processed and will be published in due course.</span></p>', '<h3>&nbsp; &nbsp;Codebook</h3>\n<ul>\n<li><a href=\"../../../codebook/MergeFamelo.Nepal.Child2Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo Nepal Child2Codebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2_Nepal_AdultCodebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal AdultCodebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2.Nepal.Child1Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal Child1Codebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2.Nepal.Screener.Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal Screener Codebook</a></li>\n</ul>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">Are there any reciprocal effects between dimensions of parenting and children&rsquo;s social competence and adjustment problems?</li>\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">What are the child-effect pathways to migration?</li>\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">How does the father&rsquo;s influence, beyond that of the primary caregivers, affect children&rsquo;s outcomes?</li>\n</ol>\n</li>\n</ol>', '/report/wave2.pdf', '2024-09-30 04:52:44', '2024-10-01 01:29:42'),
(3, 'Family Migration Context and Socialization & Children\'s Socio-emotional Development. Study-2024', 'Family Migration Context and Socialization & Children\'s Socio-emotional Development. Study-2024', 'img/data3.jpg', '<p><span style=\"font-size: 18.6667px;\">The data is currently being processed and will be published in due course...</span></p>', '<ul>\n<li><a href=\"../../../codebook/Child_2_Codebook.pdf\">Child2 Codebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo.Nepal.Child2Codebook.pdf\">MergeFamelo Nepal Child2Codebook</a></li>\n</ul>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">Are there any reciprocal effects between dimensions of parenting and children&rsquo;s social competence and adjustment problems?</li>\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">What are the child-effect pathways to migration?</li>\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">How does the father&rsquo;s influence, beyond that of the primary caregivers, affect children&rsquo;s outcomes?</li>\n</ol>\n</li>\n</ol>', '/report/wave2.pdf', '2024-09-30 05:02:28', '2024-10-01 01:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@gmail.com', NULL, '$2y$12$FcRSgMz4D3RTKSxxalM0fuJ3xYXzyXOJxmAR.em/OphlWPRIROmnm', NULL, '2024-09-12 22:58:40', '2024-09-12 22:58:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studies`
--
ALTER TABLE `studies`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
