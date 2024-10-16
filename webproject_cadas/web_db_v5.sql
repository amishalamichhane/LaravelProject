-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2024 at 12:56 PM
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

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1729057309),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1729057309;', 1729057309);

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
(13, '2024_10_01_091936_add_slug_to_studies_table', 6),
(14, '2024_10_16_104739_add_doi_to_publications_table', 7);

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
  `url` varchar(255) DEFAULT NULL,
  `doi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `authors`, `journal`, `year`, `citation`, `created_at`, `updated_at`, `url`, `doi`) VALUES
(1, 'A cross-cultural examination of adverse childhood experiences in low-and middle-income countries and their relation with adolescent educational aspirations.', 'Melissa Alcaraz, Hayley Pierce, Natalie D. Eggum, Bertha Lidia Nuño-Gutiérrez, Dirgha Ghimire', 'Child Abuse & Neglect', 2024, 'Alcaraz, M., Pierce, H., Eggum, N. D., Nuño-Gutiérrez, B. L., & Ghimire, D. (2024). A cross-cultural examination...', NULL, '2024-10-16 05:03:48', 'https://www.sciencedirect.com/science/article/abs/pii/S014521342400139X?via%3Dihub', 'https://www.sciencedirect.com/science/article/abs/pii/S014521342400139X?via%3Dihub'),
(2, 'Youth’s Family and Non-Family Roles as Predictors of Subjective Adulthood in Three Low-Income Agricultural Settings', 'Erick Axxe, Sarah R. Hayford, Natalie D. Eggum', 'Journal of Research on Adolescence', 2022, 'Axxe, E., Hayford, S. R., & Eggum, N. D. (2022). Youth’s family and non-family roles as predictors of subjective adulthood in three low-income agricultural settings. Journal of Research on Adolescence.', NULL, '2024-10-16 05:06:10', 'https://onlinelibrary.wiley.com/doi/10.1111/jora.12731', 'https://onlinelibrary.wiley.com/doi/10.1111/jora.12731'),
(3, 'Desired Fertility and Educational Aspirations: Adolescent Goals in Rapidly Changing Social Contexts', 'Melissa Alcaraz, Sarah R. Hayford, Jennifer E. Glick', 'Journal of Marriage and Family\r\n\r\n\r\n\r\n\r\n\r\n', 2022, ' Alcaraz, M., Hayford, S. R., & Glick, J. E. (2022). Desired fertility and educational aspirations: Adolescent goals in rapidly changing social contexts. Journal of Marriage and Family.', NULL, '2024-10-16 05:07:02', 'https://onlinelibrary.wiley.com/doi/epdf/10.1111/jomf.12815', 'https://onlinelibrary.wiley.com/doi/abs/10.1111/jomf.12815'),
(4, 'Exploring the Association Between Educational Aspirations and Intentions to Migrate Among Youth in Central Mexico by Gender', 'Flavio F. Marsiglia, Ana Paola Campos, Shiyou Wu, Bertha L. Nuño-Gutiérrez, Hilda García-Pérez, Jennifer E. Glick', ' International Journal of Social Welfare', 2023, 'Marsiglia, F. F., Campos, A. P., Wu, S., Nuño-Gutiérrez, B. L., García-Pérez, H., & Glick, J. E. (2023). Exploring the association between educational aspirations and intentions to migrate among youth in Central Mexico by gender. International Journal of Social Welfare.', NULL, '2024-10-16 05:07:30', 'https://onlinelibrary.wiley.com/doi/10.1111/ijsw.12625', 'https://onlinelibrary.wiley.com/doi/10.1111/ijsw.12625'),
(5, 'Migration Aspirations and Adolescents’ Ideal Age at Union Formation in Western Mexico', 'Melissa Alcaraz', 'International Migration Review', 2023, 'Alcaraz, M. (2023). Migration Aspirations and Adolescents’ Ideal Age at Union Formation in Western Mexico. International Migration Review.', NULL, '2024-10-16 05:08:06', 'https://journals.sagepub.com/doi/10.1177/01979183221118908', 'https://journals.sagepub.com/doi/10.1177/01979183221118908'),
(6, ' Exploring the Association Between Educational Aspirations and Intentions to Migrate Among Youth in Central Mexico by Gender', ' Flavio F. Marsiglia, Ana Paola Campos, Shiyou Wu, Bertha L. Nuño-Gutiérrez, Hilda García-Pérez, Jennifer E. Glick', 'International Journal of Social Welfare', 2023, 'Marsiglia, F. F., Campos, A. P., Wu, S., Nuño-Gutiérrez, B. L., García-Pérez, H., & Glick, J. E. (2023). Exploring the association between educational aspirations and intentions to migrate among youth in Central Mexico by gender. International Journal of Social Welfare.', '2024-09-16 00:06:49', '2024-10-16 05:08:33', 'https://onlinelibrary.wiley.com/doi/10.1111/ijsw.12625', 'https://onlinelibrary.wiley.com/doi/10.1111/ijsw.12625');

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
('WXv66riltppjybpPLIFal8ATv6ksWWzPoQp2P5BE', 3, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiWXpITW9NWm9jejA1QWpOcUhsWjQ4b29hYVl1ZFozN2w4Q3A3dEI3SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wdWJsaWNhdGlvbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEZjUlNnTXo0RDNSVEtTeHhhbE0wZnVKM3hZWHp5WE9KeG1BUi5lbS9PcGhsV1BSSVJPbW5tIjtzOjg6ImZpbGFtZW50IjthOjA6e31zOjY6InRhYmxlcyI7YToxOntzOjI1OiJMaXN0UHVibGljYXRpb25zX3Blcl9wYWdlIjtzOjI6IjI1Ijt9fQ==', 1729076072);

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
(22, 'Mr. Govinda Lamichhane', 'ASST. RESEARCH OFFICER', 'img/Gobinda-Lamichhane.jpg', '2024-09-24 03:28:35', '2024-09-30 00:51:15'),
(24, 'Miss Kamana Ghimire', 'ASST. RESEARCH OFFICER', '/img/Kamana-Ghimiredv.jpg', '2024-10-01 23:30:46', '2024-10-01 23:31:17'),
(25, 'Manita Paudel', 'Interviewer', '/img/Manitapaudel.jpg', '2024-10-01 23:31:58', '2024-10-01 23:31:58'),
(26, 'Ashish Gurung', 'Interviewer', '/img/Ashish-Gurung.jpg', '2024-10-01 23:32:39', '2024-10-01 23:32:39'),
(27, 'Bina Mahato', 'Interviewer', '/img/Bina_Mahato.jpeg', '2024-10-01 23:33:05', '2024-10-01 23:33:05'),
(28, 'Bishal Adhikari', 'Interviewer', '/img/bishal_adhikari.jpg', '2024-10-01 23:33:35', '2024-10-01 23:33:35'),
(29, 'Bishal Pandit', 'Interviewer', '/img/Bishal-Pandit 1.17.14 PM.jpg', '2024-10-01 23:34:03', '2024-10-01 23:34:03'),
(30, 'Bishnu Maya Chaudhary', 'Interviewer', '/img/Bishnu_Maya_chaudhary.jpg', '2024-10-01 23:34:50', '2024-10-01 23:34:50'),
(31, 'Deepa Dawadi', 'Interviewer', '/img/Deepadawadi.jpg', '2024-10-01 23:35:13', '2024-10-01 23:35:13'),
(32, 'Ganga BK', 'Interviewer', '/img/GangabK.jpg', '2024-10-01 23:35:33', '2024-10-01 23:35:33'),
(33, 'Hina Chaudhary', 'Interviewer', '/img/hinachaudhary.jpg', '2024-10-01 23:36:07', '2024-10-01 23:36:07'),
(34, 'Mina Gurung', 'Interviewer', '/img/minagurung.jpg', '2024-10-01 23:36:47', '2024-10-01 23:36:47'),
(35, 'Muna CK', 'Interviewer', '/img/Munack.jpg', '2024-10-01 23:37:14', '2024-10-01 23:37:14'),
(36, 'Nisha Kafle', 'Interviewer', '/img/Nishakafle.jpeg', '2024-10-01 23:37:32', '2024-10-01 23:37:32'),
(37, 'Reena Tamang', 'Interviewer', '/img/reena_tamang.jpg', '2024-10-01 23:37:55', '2024-10-01 23:37:55'),
(38, 'Sanjit Ghatri', 'Interviewer', '/img/sanjit_gharti.jpg', '2024-10-01 23:38:12', '2024-10-01 23:38:12'),
(39, 'Subhadra Gyawali', 'Interviewer', '/img/Subhadra-Gyawali.jpg', '2024-10-01 23:38:38', '2024-10-01 23:38:38'),
(40, 'Tilak Nath Ghimire', 'Interviewer', '/img/tilaknathghimire.jpeg', '2024-10-01 23:38:54', '2024-10-01 23:38:54'),
(41, 'Anuradha Sharma', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-01 23:51:43', '2024-10-01 23:51:43'),
(42, 'Gita Adhikari', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-01 23:53:00', '2024-10-01 23:53:00'),
(43, 'Ranjan Adhikari', 'Interviewer', '/img/dummyimg-man.jpeg', '2024-10-01 23:53:40', '2024-10-01 23:53:40'),
(44, ' Bivek Chhetri', 'Interviewer', '/img/dummyimg-man.jpeg', '2024-10-01 23:54:31', '2024-10-01 23:54:31'),
(45, 'Om Bahadur Ranabhat', 'Interviewer', '/img/dummyimg-man.jpeg', '2024-10-01 23:55:30', '2024-10-01 23:55:30'),
(46, 'Kaviraj Paudel', 'Interviewer', '/img/dummyimg-man.jpeg', '2024-10-01 23:56:23', '2024-10-01 23:56:23'),
(47, 'Junika Kumari Chaudhary', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-01 23:57:04', '2024-10-01 23:57:04'),
(48, 'Tara Gautam', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-01 23:57:48', '2024-10-01 23:57:48'),
(49, 'Puja Nepali', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-01 23:58:23', '2024-10-01 23:58:23'),
(50, 'Ranju Bastola', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-01 23:58:56', '2024-10-01 23:58:56'),
(51, 'Renu Gurung', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-01 23:59:18', '2024-10-01 23:59:18'),
(52, 'Lakshmi Gayre', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-01 23:59:38', '2024-10-01 23:59:38'),
(53, 'Bibesh Dhakal', 'Interviewer', '/img/dummyimg-man.jpeg', '2024-10-02 00:01:02', '2024-10-02 00:01:02'),
(54, 'Shishir Pathak', 'Interviewer', '/img/dummyimg-man.jpeg', '2024-10-02 00:01:24', '2024-10-02 00:01:24'),
(55, 'Subhecha Pandit', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-02 00:02:23', '2024-10-02 00:02:23'),
(56, 'Satyan Krita Rai Tharu', 'Interviewer', '/img/dummyimg-man.jpeg', '2024-10-02 00:02:54', '2024-10-02 00:02:54'),
(57, 'Sudip Dhungana', 'Interviewer', '/img/dummyimg-man.jpeg', '2024-10-02 00:03:20', '2024-10-02 00:03:20'),
(58, 'Sunita Gurung', 'Interviewer', '/img/dummyimg-woman.jpg', '2024-10-02 00:03:45', '2024-10-02 00:03:45');

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
(1, 'Family Migration Context & Socio-emotional Competence. Study-2017', '', 'img/data1.jpg', '<p><span style=\"font-size: 14pt;\">The data is currently being processed and will be published in due course.</span></p>', '<h2>&nbsp; &nbsp; <span style=\"color: #000000;\">CodeBook</span></h2>\n<ul>\n<li><a href=\"../../../codebook/Child1_CodeBook.pdf\" target=\"_blank\" rel=\"noopener\">Child1 CodeBook</a></li>\n<li><a href=\"codebook/Child_2_Codebook.pdf\" target=\"_blank\" rel=\"noopener\">Child2 Codebook</a></li>\n<li><a href=\"../../../codebook/FameloHHCodebook.pdf\">FameloHHCodebook</a></li>\n</ul>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">&nbsp;</li>\n</ol>\n</li>\n</ol>', '/report/wave1.pdf', '2024-09-30 04:51:29', '2024-10-15 23:56:22'),
(2, 'Family Migration Context and Socio-emotional Competence. Study-2021', '', 'img/data2.jpg', '<p><span style=\"font-size: 18.6667px;\">The data is currently being processed and will be published in due course.</span></p>', '<h3>&nbsp; &nbsp;Codebook</h3>\n<ul>\n<li><a href=\"../../../codebook/MergeFamelo.Nepal.Child2Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo Nepal Child2Codebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2_Nepal_AdultCodebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal AdultCodebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2.Nepal.Child1Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal Child1Codebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2.Nepal.Screener.Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal Screener Codebook</a></li>\n</ul>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">&nbsp;</li>\n</ol>\n</li>\n</ol>', '/report/wave2.pdf', '2024-09-30 04:52:44', '2024-10-15 23:58:51'),
(3, 'Family Migration Context and Socialization & Children\'s Socio-emotional Development. Study-2024', '', 'img/data3.jpg', '<p><span style=\"font-size: 18.6667px;\">The data is currently being processed and will be published in due course...</span></p>', '<p><span style=\"font-size: 18.6667px;\">The codebook is currently being processed and will be published in due course...</span></p>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">&nbsp;</li>\n</ol>\n</li>\n</ol>', '/report/wave3.pdf', '2024-09-30 05:02:28', '2024-10-15 23:59:07');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
