-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2024 at 06:52 AM
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
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1731820326),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1731820326;', 1731820326);

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
-- Table structure for table `capacity_building`
--

CREATE TABLE `capacity_building` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_urls` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`image_urls`)),
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capacity_building`
--

INSERT INTO `capacity_building` (`id`, `section_title`, `section_content`, `created_at`, `updated_at`, `image_urls`, `slug`) VALUES
(1, 'Capacity Building', 'Capacity building in the FAMELO project was essential to enhance the skills and competencies of the research staff involved in data collection and analysis. This multifaceted approach aimed to ensure that local researchers were well-equipped to conduct the study effectively and efficiently while adhering to high standards of research quality.', '2024-10-17 23:19:57', '2024-11-10 02:22:38', NULL, 'capacity-building'),
(2, 'General Interviewing Technique(GIT) Training', 'The General Interviewing Technique (GIT) Training was a foundational component of the capacity-building efforts. This training focused on equipping research staff with essential interviewing skills. Participants learned strategies for conducting effective interviews, which included establishing rapport with respondents, asking open-ended questions, and employing active listening techniques. This training was crucial for enhancing the overall quality of data collection by ensuring that interviewers could navigate the complexities of engaging with diverse populations, especially in sensitive contexts.', '2024-10-17 23:24:29', '2024-10-30 02:11:59', NULL, 'general-interviewing-techniquegit-training'),
(3, 'Study Specific Training (SST)', 'The Study Specific Training (SST) was tailored to the unique requirements of the FAMELO project. This training provided research staff with detailed knowledge about the study’s objectives, protocols, and specific data collection instruments. It included comprehensive instruction on how to utilize various survey instruments effectively and the importance of each item in relation to the study’s aims. By familiarizing staff with the specific methodologies and ethical considerations of the research, SST aimed to enhance the reliability and validity of the data collected.', '2024-10-28 00:10:39', '2024-10-29 00:19:51', NULL, 'Study Specific Training (SST)'),
(4, 'Supervisors Training', 'Training for supervisors played a crucial role in the overall capacity-building framework. Supervisors were trained to oversee data collection activities, ensuring that research staff adhered to established protocols and maintained high standards throughout the study. This training included guidance on providing feedback to interviewers, troubleshooting challenges in the field, and conducting quality assurance checks on collected data. By empowering supervisors with the necessary skills, the project aimed to foster an environment of continuous improvement and accountability among research teams.', '2024-10-28 00:11:17', '2024-10-28 00:11:17', NULL, 'Supervisors Training');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `event_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image_url`, `created_at`, `updated_at`) VALUES
(3, 'Gallery', NULL, '2024-11-05 22:41:10', '2024-11-05 22:41:10'),
(4, 'General Interviewing Technique(GIT) Training', NULL, '2024-11-05 22:48:32', '2024-11-05 22:48:32'),
(5, 'PI VISIT Nepal', NULL, '2024-11-05 22:49:46', '2024-11-05 22:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `image_url`, `created_at`, `updated_at`) VALUES
(9, 3, '/img/cp.jpg', '2024-11-05 22:41:10', '2024-11-05 22:41:10'),
(10, 3, '/img/DSC00110.JPG', '2024-11-05 22:43:55', '2024-11-05 22:44:08'),
(11, 4, '/img/git.jpg', '2024-11-05 22:48:32', '2024-11-05 22:48:32'),
(12, 4, '/img/git1.jpg', '2024-11-05 22:48:32', '2024-11-05 22:48:32'),
(13, 5, '/img/DSC02223.JPG ', '2024-11-05 22:49:46', '2024-11-05 22:49:46'),
(14, 5, '/img/DSC00144.JPG ', '2024-11-05 22:49:46', '2024-11-05 22:49:46'),
(15, 5, '/img/DSC02224.JPG', '2024-11-05 22:49:46', '2024-11-05 22:49:46');

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
(14, '2024_10_16_104739_add_doi_to_publications_table', 7),
(16, '2024_10_18_044140_create_capacity_building_table', 8),
(17, '2024_10_18_051538_create_events_table', 9),
(19, '2024_10_27_102917_create_working_papers_table', 10),
(21, '2024_10_28_065758_add_image_url_to_capacity_building_table', 11),
(22, '2024_10_30_045610_add_slug_to_capacity_building_table', 12),
(28, '2024_10_30_100603_create_galleries_table', 13),
(29, '2024_11_05_044652_create_gallery_images_table', 13);

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
('cf79wqlugiTX6Uvw07khIP0GzemjNbVvYtwdJVUd', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3daQmJrVTZyOVR6RFZmaWMwSmNMQ0I5eDRoODRja3RtRldKNTdRNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcmVzZW50YXRpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733114335),
('L37Ph3fPkJqpOWsVRtCm32bVDFG9aybBvjK0G0X0', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGVkYkgyNXVYVVhTYXlLUU5KMnNyNGZNV2x0VzhmQm9pV3NQREFVQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXBhY2l0eV9idWlsZGluZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731991879),
('XAOkCuDJDgyLPyWaUj92onxjq7h7tEpLTwoXSgok', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWdOY0pWZVZJcUhUaHJMMW1UMVdiWmo4WWo3OEJpcXZ0V2x4MlVSTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733377774);

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
(38, 'Sanjit Gharti', 'Interviewer', '/img/sanjit_gharti.jpg', '2024-10-01 23:38:12', '2024-10-01 23:38:12'),
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
(1, 'Family Migration Context & Socio-emotional Competence. Study-2017', 'family-migration-context-socio-emotional-competence-study-2017', 'img/data1.jpg', '<p><span style=\"font-size: 14pt;\">The data is currently being processed and will be published in due course.</span></p>', '<h2>&nbsp; &nbsp; <span style=\"color: #000000;\">CodeBook</span></h2>\n<ul>\n<li><a href=\"../../../codebook/Child1_CodeBook.pdf\" target=\"_blank\" rel=\"noopener\">Child1 CodeBook</a></li>\n<li><a href=\"codebook/Child_2_Codebook.pdf\" target=\"_blank\" rel=\"noopener\">Child2 Codebook</a></li>\n<li><a href=\"../../../codebook/FameloHHCodebook.pdf\">FameloHHCodebook</a></li>\n</ul>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">&nbsp;</li>\n</ol>\n</li>\n</ol>', '/report/wave1.pdf', '2024-09-30 04:51:29', '2024-10-17 03:13:25'),
(2, 'Family Migration Context and Socio-emotional Competence. Study-2021', 'family-migration-context-and-socio-emotional-competence-study-2021', 'img/data2.jpg', '<p><span style=\"font-size: 18.6667px;\">The data is currently being processed and will be published in due course.</span></p>', '<h3>&nbsp; &nbsp;Codebook</h3>\n<ul>\n<li><a href=\"../../../codebook/MergeFamelo.Nepal.Child2Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo Nepal Child2Codebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2_Nepal_AdultCodebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal AdultCodebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2.Nepal.Child1Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal Child1Codebook</a></li>\n<li><a href=\"../../../codebook/MergeFamelo2.Nepal.Screener.Codebook.pdf\" target=\"_blank\" rel=\"noopener\">MergeFamelo2 Nepal Screener Codebook</a></li>\n</ul>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">&nbsp;</li>\n</ol>\n</li>\n</ol>', '/report/wave2.pdf', '2024-09-30 04:52:44', '2024-10-17 03:13:11'),
(3, 'Family Migration Context and Socialization & Children\'s Socio-emotional Development. Study-2024', 'family-migration-context-and-socialization-childrens-socio-emotional-development-study-2024', 'img/data3.jpg', '<p><span style=\"font-size: 18.6667px;\">The data is currently being processed and will be published in due course...</span></p>', '<p><span style=\"font-size: 18.6667px;\">The codebook is currently being processed and will be published in due course...</span></p>', '<h2 class=\"study-intro\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-size: 1.125rem; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">The study aims to answer three specific questions:</h2>\n<ol>\n<li style=\"list-style-type: none;\">\n<ol class=\"study-questions\" style=\"box-sizing: border-box; padding-left: 0.625rem; margin-top: 0px; margin-bottom: 1rem; margin-left: 1.25rem; font-size: 16px; line-height: 1.6; color: #212529; font-family: \'Open Sans\', sans-serif; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box; margin-bottom: 0.5rem;\">&nbsp;</li>\n</ol>\n</li>\n</ol>', '/report/wave3.pdf', '2024-09-30 05:02:28', '2024-10-17 04:38:18');

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
(3, 'admin', 'admin@gmail.com', NULL, '$2y$12$FcRSgMz4D3RTKSxxalM0fuJ3xYXzyXOJxmAR.em/OphlWPRIROmnm', 'o1oRS52huasW6d0kmT6t5rr39M3g77rLFLG0Scd0mevVqsaWWxrsplV4VnPY', '2024-09-12 22:58:40', '2024-09-12 22:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `working_papers`
--

CREATE TABLE `working_papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `authors` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `working_papers`
--

INSERT INTO `working_papers` (`id`, `title`, `authors`, `date`, `summary`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 'Family Migration Context and Socio-emotional Competence (R01) General Focus-Group Instructions', NULL, NULL, NULL, '/report/General Focus-Group Instructions.docx', '2024-10-27 05:10:03', '2024-10-27 05:24:41');

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
-- Indexes for table `capacity_building`
--
ALTER TABLE `capacity_building`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `capacity_building_slug_unique` (`slug`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_gallery_id_foreign` (`gallery_id`);

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
-- Indexes for table `working_papers`
--
ALTER TABLE `working_papers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacity_building`
--
ALTER TABLE `capacity_building`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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

--
-- AUTO_INCREMENT for table `working_papers`
--
ALTER TABLE `working_papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
