-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 10:46 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'tPf97iNBjpypHyyhFSHE0TmgdzdcYEIw', 1, '2016-03-13 15:05:12', '2016-03-13 15:05:12', '2016-03-13 15:05:12'),
(2, 2, '4O7HxmHdDXLLhEL21DoxY8tVs9TLZ4hX', 1, '2016-03-13 15:05:12', '2016-03-13 15:05:12', '2016-03-13 15:05:12'),
(23, 3, 'chdb2kUrImQgiliEt5MX8tTyvMiGBLBe', 1, NULL, '2016-04-03 07:55:47', '2016-04-03 08:16:07'),
(25, 6, '57dzZka4R03hD9jDuHuNOVX5VylRkf74', 1, NULL, '2016-04-03 08:16:49', '2016-04-03 08:16:49'),
(26, 4, 'K89rkP0DWLxLRi3rJKS0XhRRNVX2JIwE', 1, NULL, '2016-04-03 12:41:10', '2016-04-03 12:41:10'),
(30, 10, 'ksg4G06PGLF3NnfEVW5JJpGfm0fUZLqn', 1, NULL, '2016-04-26 13:53:03', '2016-04-26 13:55:34'),
(31, 11, 'ZYHjAxNlKVz0e6G8KZTOXctzn9Xb6gSt', 1, NULL, '2016-04-27 12:49:08', '2016-04-27 12:49:08'),
(32, 12, 'djXW7VAbp6KE8pqLKYjqlmc6rJwmMUTC', 1, NULL, '2016-04-27 12:55:37', '2016-04-27 12:56:07'),
(33, 13, 'JL7avcoawOAvQ5Mr0V5lCPxSaMP17Mpl', 1, '2016-05-01 13:01:21', '2016-05-01 13:01:21', '2016-05-01 13:01:21'),
(35, 15, 'InxZVzKaU3ISzvLlpGJGHPMqcn4YCfr8', 1, '2016-05-01 13:04:34', '2016-05-01 13:04:34', '2016-05-01 13:04:34'),
(37, 16, 'Xo7d8vAk19k83eA2oUO76CTvQ7OtpqQh', 1, '2016-05-01 13:05:12', '2016-05-01 13:05:12', '2016-05-01 13:05:12'),
(39, 17, 'dBtdr8fpNtuGxJcEbPuNoiBXelOOD0cu', 1, '2016-05-01 13:11:23', '2016-05-01 13:11:23', '2016-05-01 13:11:23'),
(41, 18, 'gu5JQSd9ly0QPKu9MF2nCScxcO5uwGqw', 1, '2016-05-01 13:12:22', '2016-05-01 13:12:22', '2016-05-01 13:12:22'),
(43, 19, 'e8s2ZTZWQlJ7m3x86Dg3S8SWQlhmyFXs', 1, '2016-05-01 13:14:07', '2016-05-01 13:14:07', '2016-05-01 13:14:07'),
(45, 20, 'r4zLDah67AznM1zkVRhob3gNYb8XWwGj', 1, '2016-05-01 13:17:20', '2016-05-01 13:17:20', '2016-05-01 13:17:20'),
(47, 21, 'jZeoeqMEnecZbMhH0g9EcoMzZI2w12Nx', 1, '2016-05-01 13:22:34', '2016-05-01 13:22:34', '2016-05-01 13:22:34'),
(48, 22, 'Yd0eGosRjJYuJ9lHy4ctna7MAK39BSKP', 1, '2016-05-01 13:28:23', '2016-05-01 13:28:23', '2016-05-01 13:28:23'),
(49, 23, 'X7qlgmI7cob0pdXqr2f1o3qFj3zEFjOr', 1, '2016-05-01 13:28:54', '2016-05-01 13:28:54', '2016-05-01 13:28:54'),
(50, 24, 'U5FhTJHWeqZamLA4qIvinrRY0sL9mPHj', 1, '2016-05-01 13:29:13', '2016-05-01 13:29:13', '2016-05-01 13:29:13'),
(51, 25, 'uRUR8Q3XvmqnRqvmJm69qFbBhAPdEBCP', 1, '2016-05-01 13:33:39', '2016-05-01 13:33:39', '2016-05-01 13:33:39'),
(52, 26, 'cN1jWNfLjxDQWz9rLMkYwEtEFYp3LLeW', 1, '2016-05-01 13:35:54', '2016-05-01 13:35:54', '2016-05-01 13:35:54'),
(53, 27, 'xgwqIvjLxKELsidSPg0uM2sNa3zw4lvw', 1, '2016-05-01 13:46:24', '2016-05-01 13:46:24', '2016-05-01 13:46:24'),
(54, 28, 'fzq00Yn0KhGlDPWjiv7HMdm4hmVjANkV', 1, '2016-05-01 13:46:55', '2016-05-01 13:46:55', '2016-05-01 13:46:55'),
(55, 29, 'iYF6ubSG8fyz5NniBLInUg1lF7KHXf60', 1, '2016-05-01 13:48:29', '2016-05-01 13:48:29', '2016-05-01 13:48:29'),
(56, 30, 'l3PtmrpdwumRMeQRgaHBFF3S4YWRzJw2', 1, '2016-05-01 13:49:41', '2016-05-01 13:49:41', '2016-05-01 13:49:41'),
(57, 31, 'iXcg1CGDz0xpI79gVLBL7Wzox7a2JTqD', 1, '2016-05-01 13:49:57', '2016-05-01 13:49:57', '2016-05-01 13:49:57'),
(58, 33, 'DDTR4RWYbZbyofng0arphVdxtLiuCYAX', 1, '2016-05-01 13:50:38', '2016-05-01 13:50:38', '2016-05-01 13:50:38'),
(59, 34, 'CJyqUWfRqnw8m5IvjnkHH9X184x0f23m', 1, '2016-05-01 13:50:47', '2016-05-01 13:50:47', '2016-05-01 13:50:47'),
(60, 35, 'U3JoFYSltvlcPjSxoICUDq8539XvrDZr', 1, '2016-05-01 13:53:10', '2016-05-01 13:53:10', '2016-05-01 13:53:10'),
(61, 36, '8y3UDBBZ9XM1mKNfDqxYnM3yWzzfqToF', 1, '2016-05-01 13:53:16', '2016-05-01 13:53:16', '2016-05-01 13:53:16'),
(62, 37, '2uwyRggW8K149vkNmv85o4k48XpgiR7N', 1, '2016-05-01 13:53:24', '2016-05-01 13:53:24', '2016-05-01 13:53:25'),
(63, 38, '8OF6m4azklbXjFj3urnIuQQn6DOLbiBq', 1, '2016-05-01 14:02:28', '2016-05-01 14:02:28', '2016-05-01 14:02:28'),
(64, 39, 'EZEv82huie3moSmcqqMIax6iln5eJ8BH', 1, '2016-05-01 14:07:24', '2016-05-01 14:07:24', '2016-05-01 14:07:24'),
(65, 40, 'TvbzBY6gqenH5UEgbWrXEG1Axk2urAIy', 1, '2016-05-01 14:10:48', '2016-05-01 14:10:48', '2016-05-01 14:10:48'),
(66, 41, 'RtXiCeIVz09ytzStqY023by18zB6BOhb', 1, '2016-05-01 14:14:07', '2016-05-01 14:14:07', '2016-05-01 14:14:07'),
(67, 43, 'eTA27Hi37t5mWSl3Ka3e3a31NcPe5Rl3', 1, '2016-05-01 14:14:43', '2016-05-01 14:14:43', '2016-05-01 14:14:43'),
(68, 44, '77WN0Sh66exXZ4E54rPcRYPrr0KpG1OA', 1, '2016-05-01 14:17:26', '2016-05-01 14:17:26', '2016-05-01 14:17:26'),
(70, 45, 'uTRb0VX8JahSgMvxWUu7fzkWoBH7Lycs', 1, NULL, '2016-05-09 13:23:05', '2016-05-09 13:27:00'),
(71, 45, 'wrs1fyC19FkKjrpvbgCJtC0ctjiUsxO4', 1, NULL, '2016-05-09 13:23:43', '2016-05-09 13:27:00'),
(72, 45, 'JiUXEkVNrWDJtlpjNAwQz21gbdIEQwb6', 1, NULL, '2016-05-09 13:24:05', '2016-05-09 13:27:00'),
(73, 45, 'gWuhzk8QyEB0X8GEYf9NGbR6esvHHMjQ', 1, NULL, '2016-05-09 13:24:10', '2016-05-09 13:27:00'),
(74, 45, 'Xv1uHKiw6b6Y6X1WBTPf73OQGubT7PU1', 1, NULL, '2016-05-09 13:26:08', '2016-05-09 13:27:00'),
(75, 45, '0P46UgZnXMMjBfVGbfxuBxyUEEMaN5I2', 1, NULL, '2016-05-09 13:27:00', '2016-05-09 13:27:00'),
(76, 5, 'x3heK3iakXcXlZF4Xk989NazxUZlB7Qr', 1, NULL, '2016-05-09 13:30:32', '2016-05-10 08:02:59'),
(80, 5, 'jpnafXF4sQiWF3Yo8G8tG43WilQnoRSs', 1, NULL, '2016-05-10 07:40:20', '2016-05-10 08:02:59'),
(81, 5, 'PH8aZpg0qdOCl6zepqnCVYJQrSxRMKHH', 1, NULL, '2016-05-10 07:40:56', '2016-05-10 08:02:59'),
(82, 5, 'POcB9yg27dHcXxpcGRp7pGShvamZ0QC4', 1, NULL, '2016-05-10 07:42:06', '2016-05-10 08:02:59'),
(83, 5, 'EQQQWRy6cCMj1y5SyZnGq2nO8HqkRCkg', 1, NULL, '2016-05-10 07:42:13', '2016-05-10 08:02:59'),
(84, 5, 'sRlYuLe6tKqteVqizO1jgyXh7YePOXr3', 1, NULL, '2016-05-10 07:42:43', '2016-05-10 08:02:59'),
(85, 5, 'uguqiwaqkHArF11sjiNBfJwVYGPnHX0A', 1, NULL, '2016-05-10 07:42:50', '2016-05-10 08:02:59'),
(86, 5, '4dawz9kr7raOCRSGsF7YdFANR91OvJJS', 1, NULL, '2016-05-10 07:51:52', '2016-05-10 08:02:59'),
(87, 5, '5sxywo700I4oqTaAd3iKw0E2qEjFryiV', 1, NULL, '2016-05-10 08:02:59', '2016-05-10 08:02:59'),
(98, 56, 'XfYSBKjmBD7Ec4OFWYowrTsVrl1pfTcx', 1, '2016-05-10 11:17:02', '2016-05-10 11:16:41', '2016-05-10 11:17:02'),
(99, 57, 'uUm4a9wADTtMtNisGzMgVQZ0V6nLL70h', 1, '2016-05-10 11:21:37', '2016-05-10 11:21:28', '2016-05-10 11:21:37'),
(100, 58, '6ZjLlnSSJF73I4LLIQLMjYNNqSFyVMJD', 1, '2016-05-10 11:24:31', '2016-05-10 11:24:26', '2016-05-10 11:24:31'),
(101, 59, 'x9mugFlJyzVLjhBDMKfkGXw1w1a70ZoA', 1, '2016-05-10 11:40:07', '2016-05-10 11:39:27', '2016-05-10 11:40:07'),
(102, 60, 'ScFgUNVZynEA7BGbAd7WkwDpmjV86P1r', 1, '2016-05-10 12:00:58', '2016-05-10 11:59:33', '2016-05-10 12:00:58'),
(103, 60, 'bOhFo8rWZ0i15ZKZzC4dDl7J6q6JrTXh', 1, '2016-05-10 12:02:03', '2016-05-10 12:01:42', '2016-05-10 12:02:03'),
(104, 60, '1EM3JYVSW4vytTf6qKeCbRXUeXAvn6bl', 1, '2016-05-10 12:12:18', '2016-05-10 12:02:48', '2016-05-10 12:12:18'),
(116, 60, 'eOHrp2koznt9hn7ge6NNU2BgKcvTu4m3', 1, '2016-05-10 12:14:22', '2016-05-10 12:14:10', '2016-05-10 12:14:22'),
(118, 62, '34pbdVIYpKmxvRTMljIDwKVFwWqLM8mt', 1, '2016-05-10 12:17:35', '2016-05-10 12:17:20', '2016-05-10 12:17:35'),
(120, 64, 'fyw73k63hp6oYd0vABNFAn0lrvJ35w9M', 1, NULL, '2016-05-24 08:38:45', '2016-05-24 08:44:09'),
(125, 69, 'TUsfohei0PSGpv7MmPD4WES9BX120Kqq', 1, '2016-05-29 11:37:44', '2016-05-29 11:33:21', '2016-05-29 11:37:44'),
(128, 72, '6M6iQ2QfDwEMWhPtc0QR4w4Fz1yyf82d', 1, '2016-06-12 12:37:46', '2016-06-12 12:37:46', '2016-06-12 12:37:46'),
(129, 73, 'U5vlzNBZdYVeLw6gIiE8tkNkeqL8tU3w', 1, '2016-06-12 12:46:27', '2016-06-12 12:46:27', '2016-06-12 12:46:27'),
(130, 74, 'iHXJ6mn79U2onVb7dmWdle8m2Zgehbnh', 1, '2016-06-12 12:53:44', '2016-06-12 12:53:44', '2016-06-12 12:53:44'),
(131, 75, 'bc7fvcDm2DoDFfe22sp8VmOSNndjVA2F', 1, '2016-06-13 08:59:23', '2016-06-13 08:59:23', '2016-06-13 08:59:23'),
(132, 76, 'j71eRD7aCsLqC8WSDEzPZU7em7NQeUld', 1, '2016-07-04 12:40:10', '2016-07-04 12:40:10', '2016-07-04 12:40:10'),
(133, 77, 'dFq3fmww1UUSd2mpGsqlgb1Psv6VgrXg', 1, '2016-07-04 12:57:23', '2016-07-04 12:57:23', '2016-07-04 12:57:23'),
(134, 76, '5uYLkdC5YVEsVWlTfvLP2HgKEQm3g3fP', 1, '2016-12-27 12:38:50', '2016-12-27 12:38:50', '2016-12-27 12:38:50'),
(135, 71, 'dBQWDYKSVBRAQT0wo0VkDKFiud244Paz', 1, NULL, '2017-01-03 10:40:18', '2017-01-03 10:40:18'),
(136, 70, 'Q6rTcjEEk3q56MtdZVhiYG1FfTN0giBb', 1, NULL, '2017-01-03 10:45:30', '2017-01-03 10:45:30'),
(137, 68, 'wtcbpSv7h1zA36jrIkOuenJF5mRhxeL0', 1, NULL, '2017-01-03 11:12:01', '2017-01-03 11:12:01'),
(138, 77, 'WJsOOtOGwC8jDmrrhMkV8M7S1ih2hjEX', 1, '2017-03-22 03:59:04', '2017-03-22 03:59:04', '2017-03-22 03:59:04'),
(139, 78, '0Uz4S5jyRmRWYukKZsw3Yw5jblsp1cgn', 1, '2017-03-22 21:43:26', '2017-03-22 21:43:26', '2017-03-22 21:43:26'),
(140, 79, '5Xr87r2OzNQIoiQrMwUOM5MkAsQSk1yi', 1, '2017-03-22 21:54:59', '2017-03-22 21:54:59', '2017-03-22 21:54:59'),
(141, 80, 'RYxgasRve41DM8s6mhOS3PPCXnRgRTy2', 1, '2017-03-22 21:55:47', '2017-03-22 21:55:47', '2017-03-22 21:55:47'),
(142, 81, 'SjBZa3jgXtrysKb3gSQbdkxD9wbmxmtW', 1, '2017-03-22 21:58:12', '2017-03-22 21:58:12', '2017-03-22 21:58:12'),
(143, 82, 'C4RJDQVPqstdCtVjT5w0h4Sq6rjFRsW6', 1, '2017-03-26 16:33:16', '2017-03-26 16:33:16', '2017-03-26 16:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `column` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`, `status`, `sort_order`, `column`, `place`, `image`, `created_at`, `updated_at`) VALUES
(1, 'hgi', 0, 0, 0, 0, 0, 'yuig', '1970-01-01 00:00:01', '1970-01-01 00:00:01'),
(2, 'dfg', 0, 1, 0, 0, 1, 'sdf', '1970-01-01 00:00:01', '1970-01-01 00:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `cms_article`
--

CREATE TABLE `cms_article` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `body` text,
  `cms_page_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_article`
--

INSERT INTO `cms_article` (`id`, `name`, `body`, `cms_page_id`, `created_at`, `updated_at`) VALUES
(11, 'eeeeeeeeeee', 'eeeeeeeeeeeeeeyyyyyyyyyyyy', 2, '1970-01-01 08:00:01', '2017-03-25 02:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `cms_article_language`
--

CREATE TABLE `cms_article_language` (
  `id` int(11) NOT NULL,
  `cms_article_id` int(11) NOT NULL,
  `cms_language_id` char(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `body` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_article_language`
--

INSERT INTO `cms_article_language` (`id`, `cms_article_id`, `cms_language_id`, `name`, `body`, `created_at`, `updated_at`) VALUES
(17, 11, 'ar', 'ar en namexعربي', 'ar en bodyعربي', '2017-03-25 02:34:25', '2017-03-25 02:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `cms_cart`
--

CREATE TABLE `cms_cart` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `cms_product_id` int(11) NOT NULL,
  `option` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_category`
--

CREATE TABLE `cms_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `column` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cms_category`
--

INSERT INTO `cms_category` (`id`, `name`, `description`, `parent_id`, `status`, `sort_order`, `column`, `place`, `image`, `created_at`, `updated_at`) VALUES
(1, 'e4n name ', '<p>sssssssssssssss4&nbsp;</p>\r\n', 0, 2, 849221, 849221, 2, '849221', '2017-03-27 12:18:03', '2017-03-27 13:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `cms_category_description`
--

CREATE TABLE `cms_category_description` (
  `id` int(11) NOT NULL,
  `cms_category_id` int(11) NOT NULL,
  `cms_language_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_category_description`
--

INSERT INTO `cms_category_description` (`id`, `cms_category_id`, `cms_language_id`, `name`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'arararar e4n name enen', 'arararar<p>sssssssssssssss4 enenenen</p>\r\n', 'ar meta', 'ar ff descggg', 'ar keygggg', '2017-03-27 12:18:03', '2017-03-27 14:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `cms_compare_list`
--

CREATE TABLE `cms_compare_list` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `cms_product_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_content`
--

CREATE TABLE `cms_content` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `body` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_form`
--

CREATE TABLE `cms_form` (
  `id` int(11) NOT NULL,
  `cms_page_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_form_field`
--

CREATE TABLE `cms_form_field` (
  `id` int(11) NOT NULL,
  `cms_form_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_html`
--

CREATE TABLE `cms_html` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `body` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_html`
--

INSERT INTO `cms_html` (`id`, `name`, `body`, `created_at`, `updated_at`) VALUES
(1, 'rrrrrr', 'rrrrrrrrrrr', '2017-03-26 18:08:28', '2017-03-26 18:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `cms_html_language`
--

CREATE TABLE `cms_html_language` (
  `id` int(11) NOT NULL,
  `cms_html_id` int(11) NOT NULL,
  `cms_language_id` char(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `body` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_html_language`
--

INSERT INTO `cms_html_language` (`id`, `cms_html_id`, `cms_language_id`, `name`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', ' عربيen name html', ' عربيen body html', '2017-03-26 18:08:28', '2017-03-26 18:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `cms_language`
--

CREATE TABLE `cms_language` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `charset` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `dir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_language`
--

INSERT INTO `cms_language` (`id`, `name`, `charset`, `code`, `dir`) VALUES
(1, 'English', 'UTF8', 'en', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu`
--

CREATE TABLE `cms_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_menu`
--

INSERT INTO `cms_menu` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'fasdf', 0, '2017-03-26 20:13:21', '2017-03-26 20:13:21'),
(2, 'fffffffff', 0, '2017-03-26 20:13:30', '2017-03-26 20:13:30'),
(3, 'aaaaaaaaaaaa', 0, '2017-03-26 20:13:37', '2017-03-26 20:13:37'),
(4, 'bbb', 0, '2017-03-26 20:13:46', '2017-03-26 20:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu_item`
--

CREATE TABLE `cms_menu_item` (
  `id` int(11) NOT NULL,
  `parent_item_id` int(11) DEFAULT NULL,
  `cms_menu_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) NOT NULL,
  `disable` int(11) DEFAULT NULL,
  `hide` int(11) DEFAULT NULL,
  `module_type` int(11) DEFAULT NULL,
  `module_id` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_menu_item`
--

INSERT INTO `cms_menu_item` (`id`, `parent_item_id`, `cms_menu_id`, `name`, `alias`, `disable`, `hide`, `module_type`, `module_id`, `order`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'menu Item', 'menu-item', 0, 0, 0, '1', 2, '2017-03-26 20:56:07', '2017-03-26 20:56:07'),
(2, 1, 1, 'fasdf', 'fasdf', 1, 1, 0, '2', 4, '2017-03-28 18:02:51', '2017-03-28 18:02:51'),
(3, 0, 1, 'category item', 'category-item', 0, 0, 3, '1', 4, '2017-03-28 18:04:01', '2017-03-28 18:04:01'),
(4, 0, 1, 'product', 'product', 0, 0, 4, '2', 3, '2017-03-28 18:04:27', '2017-03-28 18:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu_item_language`
--

CREATE TABLE `cms_menu_item_language` (
  `id` int(11) NOT NULL,
  `cms_menu_item_id` int(11) NOT NULL,
  `cms_language_id` char(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_menu_item_language`
--

INSERT INTO `cms_menu_item_language` (`id`, `cms_menu_item_id`, `cms_language_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'عععع', '2017-03-26 20:57:24', '2017-03-26 21:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu_language`
--

CREATE TABLE `cms_menu_language` (
  `id` int(11) NOT NULL,
  `cms_menu_id` int(11) NOT NULL,
  `cms_language_id` char(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_page`
--

CREATE TABLE `cms_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_page`
--

INSERT INTO `cms_page` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'page name', '2017-03-24 02:57:49', '2017-03-24 02:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `cms_page_content`
--

CREATE TABLE `cms_page_content` (
  `id` int(11) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `cms_page_id` int(11) NOT NULL,
  `module_name` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `float` int(11) DEFAULT NULL,
  `display` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `all_pages` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_page_content_page`
--

CREATE TABLE `cms_page_content_page` (
  `id` int(11) NOT NULL,
  `cms_page_id` int(11) NOT NULL,
  `cms_page_content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cms_product`
--

CREATE TABLE `cms_product` (
  `id` int(11) NOT NULL,
  `cms_category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `shipping` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `date_available` varchar(20) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `subtract` varchar(255) DEFAULT NULL,
  `minimum` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `viewed` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `upc` varchar(255) DEFAULT NULL,
  `ean` varchar(255) DEFAULT NULL,
  `jan` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `mpn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_product`
--

INSERT INTO `cms_product` (`id`, `cms_category_id`, `name`, `description`, `location`, `quantity`, `image`, `shipping`, `price`, `points`, `date_available`, `weight`, `length`, `width`, `height`, `subtract`, `minimum`, `sort_order`, `status`, `viewed`, `created_at`, `updated_at`, `model`, `sku`, `upc`, `ean`, `jan`, `isbn`, `mpn`) VALUES
(2, 1, 'bbbbbbb', 'bbbbbbbbbbb', 'bbb', 0, 'bbbbb', 1, 0, 0, 'bbbbb', 'bbbbbbbb', 'bbbbbbb', 'bbbbbbbbb', 'ddddddddddd', 'ddddddddddd', 'dddddddddd', 0, 0, 0, '1970-01-01 00:00:01', '1970-01-01 00:00:01', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'fsd', 'sdf'),
(3, 1, 'gggggggg', 'gggggggggggggg', 'ggggggggg', 0, 'gggggggg', 0, 0, 0, 'ggggggggggggg', 'ggggggg', 'ggggggg', 'gggggggggg', 'ggggggg', 'gggggg', 'gg', 0, 0, 0, '2017-03-27 14:44:41', '2017-03-27 14:44:41', 'fd', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg'),
(4, 1, 'gggggggg', 'gggggggggggggg', 'ggggggggg', 0, 'gggggggg', 0, 0, 0, 'ggggggggggggg', 'ggggggg', 'ggggggg', 'gggggggggg', 'ggggggg', 'gggggg', 'gg', 0, 0, 0, '2017-03-27 14:47:18', '2017-03-27 14:47:18', 'fd', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `cms_product_description`
--

CREATE TABLE `cms_product_description` (
  `id` int(11) NOT NULL,
  `cms_product_id` int(11) NOT NULL,
  `cms_language_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_product_description`
--

INSERT INTO `cms_product_description` (`id`, `cms_product_id`, `cms_language_id`, `name`, `description`, `tag`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(3, 4, 0, 'gggggggg', 'gggggggggggggg', NULL, NULL, NULL, NULL, '2017-03-27 14:47:18', '2017-03-27 14:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `cms_wishlist`
--

CREATE TABLE `cms_wishlist` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `cms_product_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `columns_info`
--

CREATE TABLE `columns_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `columns_info` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `columns_info`
--

INSERT INTO `columns_info` (`id`, `users_id`, `columns_info`, `created_at`, `updated_at`) VALUES
(3, '1', '{\"/admin/reports/closed-orders\":{\"0\":{\"Order#\":1,\"Login\":1,\"Live/Demo\":1,\"Symbol\":1,\"Type\":1,\"Lots\":0,\"Open Time\":0,\"Open Price\":0,\"SL\":1,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1}},\"/admin/reports/open-orders\":{\"0\":{\"Order#\":1,\"Login\":1,\"Live/Demo\":1,\"Symbol\":0,\"Type\":0,\"Lots\":1,\"Open Time\":0,\"Open Price\":0,\"SL\":0,\"TP\":1,\"Commission\":0,\"Swaps\":0,\"Price\":1,\"Profit\":1}},\"/admin/reports/account-statement\":{\"0\":{\"Order#\":0,\"Login\":0,\"Live/Demo\":0,\"Symbol\":0,\"Type\":0,\"Lots\":0,\"Open Time\":1,\"Open Price\":0,\"SL\":0,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1},\"1\":{\"Order#\":0,\"Login\":1,\"Live/Demo\":0,\"Symbol\":0,\"Type\":1,\"Lots\":1,\"Open Time\":1,\"Open Price\":1,\"SL\":1,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1},\"2\":{\"Order#\":1,\"Login\":0,\"Live/Demo\":0,\"Symbol\":0,\"Type\":1,\"Lots\":1,\"Open Time\":1,\"Open Price\":1,\"SL\":1,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1},\"3\":{\"Order#\":1,\"Login\":1,\"Live/Demo\":1,\"Symbol\":1,\"Type\":1,\"Lots\":0,\"Open Time\":0,\"Open Price\":1,\"SL\":1,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1},\"4\":{\"Order#\":1,\"Login\":1,\"Live/Demo\":1,\"Symbol\":0,\"Type\":0,\"Lots\":0,\"Open Time\":1,\"Open Price\":0,\"SL\":0,\"TP\":0,\"Commission\":0,\"Swaps\":0,\"Price\":0,\"Profit\":1}},\"/admin/accounts/accounts-list\":{\"0\":{\"Id\":1,\"Last Name\":0,\"Email \":1,\"Last Login\":1,\"\":1}},\"/admin/mt4Configrations/groups-list\":{\"0\":{\"Name\":1,\"Company\":1,\"MC/SO\":1}},\"/admin/reports/daily-report\":{\"0\":{\"Login\":1,\"Live/Demo\":1,\"Time\":1,\"Group\":1,\"Bank\":0,\"Prev balance\":0,\"Balance\":0,\"Deposit\":0,\"Credit\":0,\"Profit Closed\":1,\"Profit\":1,\"Equity\":1,\"Margin\":1,\"Margin Free\":1}},\"/admin/settings/admins-list\":{\"0\":{\"Id\":1,\"First Name\":1,\"Last Name\":1,\"Email \":1,\"\":1}}}', '2017-01-18 10:43:53', '2017-02-06 09:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `delete`
--

CREATE TABLE `delete` (
  `texarea` text NOT NULL,
  `datae_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_group`
--

CREATE TABLE `email_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_group`
--

INSERT INTO `email_group` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'desdf', '2017-03-21 11:14:09', '2017-03-21 11:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `email_group_users`
--

CREATE TABLE `email_group_users` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_group_users`
--

INSERT INTO `email_group_users` (`id`, `group_id`, `users_id`, `type`) VALUES
(97, 1, 3, NULL),
(98, 1, 7, NULL),
(99, 1, 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_mass_queue`
--

CREATE TABLE `email_mass_queue` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `last_users_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `email_group_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_mass_template`
--

CREATE TABLE `email_mass_template` (
  `id` int(11) NOT NULL,
  `email_group_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_mass_template`
--

INSERT INTO `email_mass_template` (`id`, `email_group_id`, `name`, `subject`, `body`, `language`, `created_at`, `updated_at`) VALUES
(1, 1, 'hhhhhhhhhhh', 'hhhhhhhhh', '', 'en', '2017-03-21 12:18:42', '2017-03-21 12:22:46'),
(2, 1, 'sdfg', 'sdfg', '<p>gdgsdf</p>\r\n', 'en', '2017-03-23 08:32:02', '2017-03-23 08:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `to_field` varchar(255) DEFAULT NULL,
  `to_email` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `name`, `subject`, `body`, `type`, `to_field`, `to_email`, `language`, `status`, `created_at`, `updated_at`) VALUES
(2, 'signUp', 'sssssss', '<p><img alt=\"\" src=\"http://localhost:8000/files/15697_31158business-user-group-icon-44614.png\" style=\"height:256px; width:256px\" />sssssss</p>\r\n', 0, 'sssssssssss', 'ssssss', 'en', 0, '2017-03-21 11:50:22', '2017-03-23 08:42:43'),
(3, 'signUp', 'sdfg', 'sdfgggggggg', 2, 'gdf', 'gsdfg', 'en', 0, '2017-03-21 12:05:04', '2017-03-21 12:05:04'),
(4, 'signUp', 'gmmmmmmm', 'mmmmmmmmmmmmm', 0, 'mmmmmm', 'm', 'en', 1, '2017-03-21 12:05:34', '2017-03-21 12:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(13, 6, 'aGBPzjGUrSTzGrFWqIqfBUYvdBcu3IKz', '2016-03-14 11:11:24', '2016-03-14 11:11:24'),
(21, 2, '0bsTPqQffZJUYINtFELUiTwRbd6n99Mb', '2016-03-15 11:08:45', '2016-03-15 11:08:45'),
(198, 6, 'DhP1XiaQ6ravLOhlCDmOsXc2KodsqOug', '2016-03-31 22:08:21', '2016-03-31 22:08:21'),
(200, 2, 'G0CvO9N8A1dfs2aSRmwKs8EqPjKVLPx4', '2016-04-01 17:25:40', '2016-04-01 17:25:40'),
(201, 2, 'tfNy8ZvSi4ZNXlG9UKnTS9YERHqpnwVq', '2016-04-01 18:27:34', '2016-04-01 18:27:34'),
(202, 2, 'eD04LoOYTd8rd1oJORQVFG9vI8WUh1UX', '2016-04-01 22:17:05', '2016-04-01 22:17:05'),
(213, 2, 'vlHgdDzy8cECi0MAmTf7HittgKJ2qZO2', '2016-04-04 06:38:58', '2016-04-04 06:38:58'),
(216, 2, 'mqLb4PaaBxQSoGutmIc9nwDjB5mLSgxm', '2016-04-05 07:37:01', '2016-04-05 07:37:01'),
(239, 2, 'DcDlJRWbi4dQbWNjQuflfOCWKlkwHbB1', '2016-04-08 17:57:23', '2016-04-08 17:57:23'),
(240, 2, 'tJmo4912LPXUxYVNJRe9U9e4ntS79BHG', '2016-04-08 20:29:42', '2016-04-08 20:29:42'),
(241, 2, 'REr5LXnnuyyImKiw8cmf0uTQsJovugvP', '2016-04-09 07:19:41', '2016-04-09 07:19:41'),
(246, 2, '9FxqSqdsQeDVlAa3g9puhX8zAnasUfF8', '2016-04-10 19:52:57', '2016-04-10 19:52:57'),
(268, 2, 'vz2qSKpx6kkUvSB6P7XcOUdOMyXAJG8p', '2016-04-13 18:39:37', '2016-04-13 18:39:37'),
(296, 4, 'ZtQJVPkNkMUlFDI7V3XQlfFikhA9qOji', '2016-04-19 14:45:34', '2016-04-19 14:45:34'),
(322, 4, '84sqz4XOyQVlc5RycNBPoi0ZBds01mVR', '2016-04-26 14:46:33', '2016-04-26 14:46:33'),
(330, 4, 'GxcieRdtZ9W0ZuC9phigoiX1PClhBrLS', '2016-04-27 12:02:04', '2016-04-27 12:02:04'),
(336, 4, 'l3Ch8sMgucWsV4FOe42faoipM9OCGjPK', '2016-04-30 15:49:09', '2016-04-30 15:49:09'),
(339, 13, 'C5XrS339FfYcaTCgyQbusdvfvZYR1tGj', '2016-05-01 13:05:25', '2016-05-01 13:05:25'),
(340, 13, 'KH9MMIcm1LFJDs8SJyecCUatRAj1WFQu', '2016-05-01 13:05:46', '2016-05-01 13:05:46'),
(341, 16, 'KexTJgebprB8FpdU0FfPvcVWTCyzr5Q8', '2016-05-01 13:06:09', '2016-05-01 13:06:09'),
(342, 13, '6vivmvHue2NHmZq64mkunAQu0vDjlR6z', '2016-05-01 13:06:59', '2016-05-01 13:06:59'),
(343, 13, 'I9x2KiRNB5SdOaet3vHzkUjrpeRmKftQ', '2016-05-01 13:07:06', '2016-05-01 13:07:06'),
(349, 19, 'ehmEHxRZLbhZxkHxnt8mfIP67eA73hQV', '2016-05-01 13:16:31', '2016-05-01 13:16:31'),
(350, 20, 'WBGDzIYYWyneYLWEBgIRXcTp3JhQHMAT', '2016-05-01 13:18:01', '2016-05-01 13:18:01'),
(352, 18, 'HgMkihmdqosW8HXQUNLRbx0W5pbZa1cZ', '2016-05-01 13:22:35', '2016-05-01 13:22:35'),
(353, 21, 'e1Ijuw5yeXSfZApXWtSwkCOSpmEjByhe', '2016-05-01 13:23:05', '2016-05-01 13:23:05'),
(356, 26, 'FAeE7eqvmepKMEKbxM6YnI3rM3ITQ8RX', '2016-05-01 13:36:36', '2016-05-01 13:36:36'),
(357, 28, 'ODN81CXLx4QR1vczvFdhqzIz6Hku44Yy', '2016-05-01 13:47:29', '2016-05-01 13:47:29'),
(358, 12, 'kW11CamqTa3noWxxN02KRF8BW80PaiUK', '2016-05-01 13:59:26', '2016-05-01 13:59:26'),
(359, 39, '2fLMrqC2aDnVQCQ2oUv2ayglVuuQsyid', '2016-05-01 14:08:17', '2016-05-01 14:08:17'),
(360, 40, 'fhFjD5so2K3rxjRub2g3qmmZlWu0K44k', '2016-05-01 14:11:17', '2016-05-01 14:11:17'),
(362, 4, 'mPrmFHW16wggdaPFYcUMXBIHgiGEsvhI', '2016-05-01 14:34:04', '2016-05-01 14:34:04'),
(378, 12, 'YToBg3sS8R3Xxp6kufW0CqcHHf7Lpc9n', '2016-05-09 07:23:07', '2016-05-09 07:23:07'),
(385, 12, 'ksrIus9ZbV6i6URyGSgVZKCsrj3c29sq', '2016-05-10 06:53:35', '2016-05-10 06:53:35'),
(391, 11, '1g4msvKw3JfxJtMCV7nDejsdHfXPHoXS', '2016-05-10 11:14:05', '2016-05-10 11:14:05'),
(392, 56, 'dLPFAvR1FSGfo65vJQAyuRIVukn3VAiL', '2016-05-10 11:17:12', '2016-05-10 11:17:12'),
(393, 57, 'Be7kBATXAOzaTEdc1tJ2KSrBsEs9FWDJ', '2016-05-10 11:21:48', '2016-05-10 11:21:48'),
(395, 59, 'sFFhsIOII0r7zuDZEos0O2rhJO0MWkYo', '2016-05-10 11:40:16', '2016-05-10 11:40:16'),
(396, 59, 'Fv7ySwol0SnvdXqjYIb5bw324M5URpLz', '2016-05-10 11:46:05', '2016-05-10 11:46:05'),
(401, 59, 'FQC8mpXw0SCa1SX1xjPHYFFxvKE3uTVL', '2016-05-10 11:57:58', '2016-05-10 11:57:58'),
(402, 60, 'X2Z91KsVmdqRFvEkjhsZdM699mk4eR9h', '2016-05-10 12:11:07', '2016-05-10 12:11:07'),
(403, 60, 'meYifxiLMmMZ8OyCg9vXD4iMKMO66MQK', '2016-05-10 12:14:42', '2016-05-10 12:14:42'),
(405, 62, '3p1Z95LClarupWPkwjEJalIUAIb78Q4S', '2016-05-10 12:18:08', '2016-05-10 12:18:08'),
(462, 64, 'vttSfarMntiWYxNhMUqDzKXrx01glNA1', '2016-05-29 06:47:05', '2016-05-29 06:47:05'),
(470, 69, 'TagiBTWWF4NiiNvPoQtyZKG47YYyTyDb', '2016-05-29 11:38:10', '2016-05-29 11:38:10'),
(487, 4, 'AE7f2jTsLd8l4UJjAhzOu1TpAqjCHt9n', '2016-06-01 09:32:49', '2016-06-01 09:32:49'),
(507, 4, 'UdfuXc5X2TKbLDHtSuaX2ZNOUfLvnUPH', '2016-06-09 13:30:01', '2016-06-09 13:30:01'),
(759, 5, 'LsEf94NVFuMZ5w7hVh29tJFDbk0hEdtP', '2017-01-04 11:13:23', '2017-01-04 11:13:23'),
(760, 5, 'CMh19Tb6fzo0HR5aLGaz7JEyjN61zaoP', '2017-01-04 11:35:03', '2017-01-04 11:35:03'),
(762, 5, 'i6Vq9llTFN6ynkQGg5OswceRB9WbvjNU', '2017-01-04 11:46:51', '2017-01-04 11:46:51'),
(764, 5, 'zz8ARNLcEHDRFm6S6iMSTMePVLQrv0KN', '2017-01-04 12:36:58', '2017-01-04 12:36:58'),
(765, 5, '9MXAGm6vA1J4og4cndTAJqHXFgvlakvw', '2017-01-04 12:45:20', '2017-01-04 12:45:20'),
(768, 5, 'MXJJnSLUAEokkbTnyHWa0Wt3cpWJv3Xv', '2017-01-04 12:52:44', '2017-01-04 12:52:44'),
(770, 5, 'h65Fb2HIxmKm71g9uLU8ILuWxKhViu8u', '2017-01-04 13:16:34', '2017-01-04 13:16:34'),
(772, 5, 'orF9EdXntpOtHR3uI4enUrCFN8OO3efQ', '2017-02-08 21:25:08', '2017-02-08 21:25:08'),
(863, 82, 'A9tV4vxr8b67zHXKCJ2rL0XFY4m8dnKT', '2017-03-26 16:33:33', '2017-03-26 16:33:33'),
(865, 82, '4lEUljRJnIL7byRyCNOM4Jro0p38Bjgr', '2017-03-26 16:34:19', '2017-03-26 16:34:19'),
(866, 82, 'a26UaXE1ipGijRXxKWfnEBXqIvGy1Rgw', '2017-03-26 16:34:32', '2017-03-26 16:34:32'),
(868, 82, 'BB0lWIvaKr6yisD1LBPr28WsoJZhi1tJ', '2017-03-26 16:35:39', '2017-03-26 16:35:39'),
(873, 1, 'TfFGHChXFz19sS7a6S7lXolgF7d54DaP', '2017-03-28 19:36:36', '2017-03-28 19:36:36'),
(874, 1, 'C2whok1F9kSY9tmetsW0Sp1LB6rbuSMd', '2017-03-28 19:39:11', '2017-03-28 19:39:11'),
(875, 1, 'yOL13rp8lNv52pknHLKegflaiqurVUz5', '2017-03-29 04:09:21', '2017-03-29 04:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(11, 3, 'Tf82pzBVSKQCocIl4wLAJHOYnjQmCyqc', 1, '2016-04-24 07:07:13', '2016-04-24 07:06:19', '2016-04-24 07:07:13'),
(12, 3, 'bg8a6p52d0Y1fLdvaWjPXrTWBDIss6Tm', 1, '2016-12-27 13:31:16', '2016-12-27 12:22:15', '2016-12-27 13:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `deny_permissions` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `deny_permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '|*.*.*.*', '|', '2016-03-28 13:25:48', '2017-03-23 02:56:17'),
(3, 'client', 'Client', '|', '', '2017-03-22 21:52:50', '2017-03-22 21:52:50'),
(4, 'public', 'public', '|*.*.*.*', '', '2017-03-22 22:15:21', '2017-03-22 22:15:21'),
(7, 'role-name', 'role name', '|*.*.*.*|client.index.store.*|*.index.create.*|*.*.store.*|*.index.store.*', '|client.category.store.*|client.category.edit.*|client.email_mass_template.edit.*|*.*.*.*|dashboard.*.*.*', '2017-03-23 02:24:37', '2017-03-23 02:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-03-28 13:25:48', '2016-03-28 13:25:48'),
(1, 2, '2016-03-28 13:25:48', '2016-03-28 13:25:48'),
(4, 3, NULL, NULL),
(79, 1, NULL, NULL),
(80, 1, NULL, NULL),
(80, 3, NULL, NULL),
(81, 3, NULL, NULL),
(82, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2016-03-14 14:50:05', '2016-03-14 14:50:05'),
(2, NULL, 'ip', '127.0.0.1', '2016-03-14 14:50:05', '2016-03-14 14:50:05'),
(3, NULL, 'global', NULL, '2016-03-15 14:05:46', '2016-03-15 14:05:46'),
(4, NULL, 'ip', '::1', '2016-03-15 14:05:46', '2016-03-15 14:05:46'),
(5, 1, 'user', NULL, '2016-03-15 14:05:46', '2016-03-15 14:05:46'),
(6, NULL, 'global', NULL, '2016-03-16 09:57:23', '2016-03-16 09:57:23'),
(7, NULL, 'ip', '91.73.241.88', '2016-03-16 09:57:23', '2016-03-16 09:57:23'),
(8, NULL, 'global', NULL, '2016-03-19 12:56:21', '2016-03-19 12:56:21'),
(9, NULL, 'ip', '127.0.0.1', '2016-03-19 12:56:21', '2016-03-19 12:56:21'),
(10, 2, 'user', NULL, '2016-03-19 12:56:21', '2016-03-19 12:56:21'),
(11, NULL, 'global', NULL, '2016-03-20 06:22:05', '2016-03-20 06:22:05'),
(12, NULL, 'ip', '91.73.241.88', '2016-03-20 06:22:06', '2016-03-20 06:22:06'),
(13, NULL, 'global', NULL, '2016-03-22 10:02:39', '2016-03-22 10:02:39'),
(14, NULL, 'ip', '::1', '2016-03-22 10:02:39', '2016-03-22 10:02:39'),
(15, NULL, 'global', NULL, '2016-03-22 10:02:46', '2016-03-22 10:02:46'),
(16, NULL, 'ip', '::1', '2016-03-22 10:02:46', '2016-03-22 10:02:46'),
(17, NULL, 'global', NULL, '2016-03-23 12:02:27', '2016-03-23 12:02:27'),
(18, NULL, 'ip', '::1', '2016-03-23 12:02:27', '2016-03-23 12:02:27'),
(19, NULL, 'global', NULL, '2016-03-24 11:18:49', '2016-03-24 11:18:49'),
(20, NULL, 'ip', '91.73.241.88', '2016-03-24 11:18:49', '2016-03-24 11:18:49'),
(21, NULL, 'global', NULL, '2016-03-24 11:18:53', '2016-03-24 11:18:53'),
(22, NULL, 'ip', '91.73.241.88', '2016-03-24 11:18:53', '2016-03-24 11:18:53'),
(23, NULL, 'global', NULL, '2016-03-27 01:14:32', '2016-03-27 01:14:32'),
(24, NULL, 'ip', '91.73.241.88', '2016-03-27 01:14:32', '2016-03-27 01:14:32'),
(25, NULL, 'global', NULL, '2016-03-27 01:14:44', '2016-03-27 01:14:44'),
(26, NULL, 'ip', '91.73.241.88', '2016-03-27 01:14:44', '2016-03-27 01:14:44'),
(27, NULL, 'global', NULL, '2016-03-27 01:15:09', '2016-03-27 01:15:09'),
(28, NULL, 'ip', '91.73.241.88', '2016-03-27 01:15:09', '2016-03-27 01:15:09'),
(29, NULL, 'global', NULL, '2016-03-30 15:00:34', '2016-03-30 15:00:34'),
(30, NULL, 'ip', '::1', '2016-03-30 15:00:34', '2016-03-30 15:00:34'),
(31, NULL, 'global', NULL, '2016-04-02 15:00:03', '2016-04-02 15:00:03'),
(32, NULL, 'ip', '127.0.0.1', '2016-04-02 15:00:03', '2016-04-02 15:00:03'),
(33, 4, 'user', NULL, '2016-04-02 15:00:03', '2016-04-02 15:00:03'),
(34, NULL, 'global', NULL, '2016-04-02 15:00:13', '2016-04-02 15:00:13'),
(35, NULL, 'ip', '127.0.0.1', '2016-04-02 15:00:13', '2016-04-02 15:00:13'),
(36, 6, 'user', NULL, '2016-04-02 15:00:13', '2016-04-02 15:00:13'),
(37, NULL, 'global', NULL, '2016-04-03 07:45:41', '2016-04-03 07:45:41'),
(38, NULL, 'ip', '::1', '2016-04-03 07:45:41', '2016-04-03 07:45:41'),
(39, 2, 'user', NULL, '2016-04-03 07:45:41', '2016-04-03 07:45:41'),
(40, NULL, 'global', NULL, '2016-04-03 10:51:54', '2016-04-03 10:51:54'),
(41, NULL, 'ip', '127.0.0.1', '2016-04-03 10:51:54', '2016-04-03 10:51:54'),
(42, 1, 'user', NULL, '2016-04-03 10:51:54', '2016-04-03 10:51:54'),
(43, NULL, 'global', NULL, '2016-04-03 10:52:02', '2016-04-03 10:52:02'),
(44, NULL, 'ip', '127.0.0.1', '2016-04-03 10:52:02', '2016-04-03 10:52:02'),
(45, 1, 'user', NULL, '2016-04-03 10:52:02', '2016-04-03 10:52:02'),
(46, NULL, 'global', NULL, '2016-04-03 10:52:24', '2016-04-03 10:52:24'),
(47, NULL, 'ip', '127.0.0.1', '2016-04-03 10:52:24', '2016-04-03 10:52:24'),
(48, 1, 'user', NULL, '2016-04-03 10:52:24', '2016-04-03 10:52:24'),
(49, NULL, 'global', NULL, '2016-04-04 06:38:47', '2016-04-04 06:38:47'),
(50, NULL, 'ip', '::1', '2016-04-04 06:38:47', '2016-04-04 06:38:47'),
(51, 2, 'user', NULL, '2016-04-04 06:38:47', '2016-04-04 06:38:47'),
(52, NULL, 'global', NULL, '2016-04-05 07:36:53', '2016-04-05 07:36:53'),
(53, NULL, 'ip', '::1', '2016-04-05 07:36:53', '2016-04-05 07:36:53'),
(54, 2, 'user', NULL, '2016-04-05 07:36:53', '2016-04-05 07:36:53'),
(55, NULL, 'global', NULL, '2016-04-18 06:42:14', '2016-04-18 06:42:14'),
(56, NULL, 'ip', '::1', '2016-04-18 06:42:14', '2016-04-18 06:42:14'),
(57, 1, 'user', NULL, '2016-04-18 06:42:14', '2016-04-18 06:42:14'),
(58, NULL, 'global', NULL, '2016-04-19 13:35:18', '2016-04-19 13:35:18'),
(59, NULL, 'ip', '::1', '2016-04-19 13:35:18', '2016-04-19 13:35:18'),
(60, 2, 'user', NULL, '2016-04-19 13:35:18', '2016-04-19 13:35:18'),
(61, NULL, 'global', NULL, '2016-04-24 08:15:36', '2016-04-24 08:15:36'),
(62, NULL, 'ip', '::1', '2016-04-24 08:15:36', '2016-04-24 08:15:36'),
(63, 3, 'user', NULL, '2016-04-24 08:15:36', '2016-04-24 08:15:36'),
(64, NULL, 'global', NULL, '2016-04-24 08:15:44', '2016-04-24 08:15:44'),
(65, NULL, 'ip', '::1', '2016-04-24 08:15:44', '2016-04-24 08:15:44'),
(66, 3, 'user', NULL, '2016-04-24 08:15:44', '2016-04-24 08:15:44'),
(67, NULL, 'global', NULL, '2016-04-25 06:31:08', '2016-04-25 06:31:08'),
(68, NULL, 'ip', '::1', '2016-04-25 06:31:08', '2016-04-25 06:31:08'),
(69, 1, 'user', NULL, '2016-04-25 06:31:08', '2016-04-25 06:31:08'),
(70, NULL, 'global', NULL, '2016-05-01 16:07:42', '2016-05-01 16:07:42'),
(71, NULL, 'ip', '::1', '2016-05-01 16:07:42', '2016-05-01 16:07:42'),
(72, 3, 'user', NULL, '2016-05-01 16:07:42', '2016-05-01 16:07:42'),
(73, NULL, 'global', NULL, '2016-05-12 06:49:09', '2016-05-12 06:49:09'),
(74, NULL, 'ip', '::1', '2016-05-12 06:49:09', '2016-05-12 06:49:09'),
(75, 1, 'user', NULL, '2016-05-12 06:49:09', '2016-05-12 06:49:09'),
(76, NULL, 'global', NULL, '2016-05-16 08:23:35', '2016-05-16 08:23:35'),
(77, NULL, 'ip', '::1', '2016-05-16 08:23:35', '2016-05-16 08:23:35'),
(78, 1, 'user', NULL, '2016-05-16 08:23:35', '2016-05-16 08:23:35'),
(79, NULL, 'global', NULL, '2016-05-23 11:32:38', '2016-05-23 11:32:38'),
(80, NULL, 'ip', '::1', '2016-05-23 11:32:38', '2016-05-23 11:32:38'),
(81, NULL, 'global', NULL, '2016-05-24 08:29:30', '2016-05-24 08:29:30'),
(82, NULL, 'ip', '::1', '2016-05-24 08:29:30', '2016-05-24 08:29:30'),
(83, 1, 'user', NULL, '2016-05-24 08:29:30', '2016-05-24 08:29:30'),
(84, NULL, 'global', NULL, '2016-05-24 08:29:37', '2016-05-24 08:29:37'),
(85, NULL, 'ip', '::1', '2016-05-24 08:29:37', '2016-05-24 08:29:37'),
(86, 1, 'user', NULL, '2016-05-24 08:29:37', '2016-05-24 08:29:37'),
(87, NULL, 'global', NULL, '2016-05-24 12:25:37', '2016-05-24 12:25:37'),
(88, NULL, 'ip', '::1', '2016-05-24 12:25:37', '2016-05-24 12:25:37'),
(89, 3, 'user', NULL, '2016-05-24 12:25:37', '2016-05-24 12:25:37'),
(90, NULL, 'global', NULL, '2016-05-24 12:35:04', '2016-05-24 12:35:04'),
(91, NULL, 'ip', '::1', '2016-05-24 12:35:04', '2016-05-24 12:35:04'),
(92, 1, 'user', NULL, '2016-05-24 12:35:04', '2016-05-24 12:35:04'),
(93, NULL, 'global', NULL, '2016-05-29 06:23:10', '2016-05-29 06:23:10'),
(94, NULL, 'ip', '::1', '2016-05-29 06:23:10', '2016-05-29 06:23:10'),
(95, 1, 'user', NULL, '2016-05-29 06:23:10', '2016-05-29 06:23:10'),
(96, NULL, 'global', NULL, '2016-05-29 06:23:59', '2016-05-29 06:23:59'),
(97, NULL, 'ip', '::1', '2016-05-29 06:23:59', '2016-05-29 06:23:59'),
(98, 64, 'user', NULL, '2016-05-29 06:23:59', '2016-05-29 06:23:59'),
(99, NULL, 'global', NULL, '2016-05-29 07:46:22', '2016-05-29 07:46:22'),
(100, NULL, 'ip', '::1', '2016-05-29 07:46:22', '2016-05-29 07:46:22'),
(101, 3, 'user', NULL, '2016-05-29 07:46:22', '2016-05-29 07:46:22'),
(102, NULL, 'global', NULL, '2016-05-29 07:46:36', '2016-05-29 07:46:36'),
(103, NULL, 'ip', '::1', '2016-05-29 07:46:36', '2016-05-29 07:46:36'),
(104, 3, 'user', NULL, '2016-05-29 07:46:37', '2016-05-29 07:46:37'),
(105, NULL, 'global', NULL, '2016-05-29 10:41:00', '2016-05-29 10:41:00'),
(106, NULL, 'ip', '::1', '2016-05-29 10:41:00', '2016-05-29 10:41:00'),
(107, 1, 'user', NULL, '2016-05-29 10:41:00', '2016-05-29 10:41:00'),
(108, NULL, 'global', NULL, '2016-06-09 12:46:33', '2016-06-09 12:46:33'),
(109, NULL, 'ip', '::1', '2016-06-09 12:46:33', '2016-06-09 12:46:33'),
(110, 3, 'user', NULL, '2016-06-09 12:46:33', '2016-06-09 12:46:33'),
(111, NULL, 'global', NULL, '2016-06-09 12:46:49', '2016-06-09 12:46:49'),
(112, NULL, 'ip', '::1', '2016-06-09 12:46:49', '2016-06-09 12:46:49'),
(113, 3, 'user', NULL, '2016-06-09 12:46:49', '2016-06-09 12:46:49'),
(114, NULL, 'global', NULL, '2016-06-13 09:05:51', '2016-06-13 09:05:51'),
(115, NULL, 'ip', '::1', '2016-06-13 09:05:52', '2016-06-13 09:05:52'),
(116, NULL, 'global', NULL, '2016-06-27 09:44:05', '2016-06-27 09:44:05'),
(117, NULL, 'ip', '::1', '2016-06-27 09:44:05', '2016-06-27 09:44:05'),
(118, 1, 'user', NULL, '2016-06-27 09:44:05', '2016-06-27 09:44:05'),
(119, NULL, 'global', NULL, '2016-07-10 10:09:54', '2016-07-10 10:09:54'),
(120, NULL, 'ip', '127.0.0.1', '2016-07-10 10:09:54', '2016-07-10 10:09:54'),
(121, 1, 'user', NULL, '2016-07-10 10:09:54', '2016-07-10 10:09:54'),
(122, NULL, 'global', NULL, '2016-07-10 10:10:22', '2016-07-10 10:10:22'),
(123, NULL, 'ip', '127.0.0.1', '2016-07-10 10:10:22', '2016-07-10 10:10:22'),
(124, 1, 'user', NULL, '2016-07-10 10:10:22', '2016-07-10 10:10:22'),
(125, NULL, 'global', NULL, '2016-07-13 08:23:58', '2016-07-13 08:23:58'),
(126, NULL, 'ip', '127.0.0.1', '2016-07-13 08:23:58', '2016-07-13 08:23:58'),
(127, 1, 'user', NULL, '2016-07-13 08:23:58', '2016-07-13 08:23:58'),
(128, NULL, 'global', NULL, '2016-07-13 08:24:04', '2016-07-13 08:24:04'),
(129, NULL, 'ip', '127.0.0.1', '2016-07-13 08:24:04', '2016-07-13 08:24:04'),
(130, 1, 'user', NULL, '2016-07-13 08:24:04', '2016-07-13 08:24:04'),
(131, NULL, 'global', NULL, '2016-07-13 08:24:25', '2016-07-13 08:24:25'),
(132, NULL, 'ip', '127.0.0.1', '2016-07-13 08:24:25', '2016-07-13 08:24:25'),
(133, 1, 'user', NULL, '2016-07-13 08:24:25', '2016-07-13 08:24:25'),
(134, NULL, 'global', NULL, '2016-07-21 09:10:28', '2016-07-21 09:10:28'),
(135, NULL, 'ip', '::1', '2016-07-21 09:10:28', '2016-07-21 09:10:28'),
(136, 1, 'user', NULL, '2016-07-21 09:10:28', '2016-07-21 09:10:28'),
(137, NULL, 'global', NULL, '2016-08-15 10:09:34', '2016-08-15 10:09:34'),
(138, NULL, 'ip', '::1', '2016-08-15 10:09:34', '2016-08-15 10:09:34'),
(139, NULL, 'global', NULL, '2016-08-21 18:26:58', '2016-08-21 18:26:58'),
(140, NULL, 'ip', '127.0.0.1', '2016-08-21 18:26:59', '2016-08-21 18:26:59'),
(141, 3, 'user', NULL, '2016-08-21 18:27:00', '2016-08-21 18:27:00'),
(142, NULL, 'global', NULL, '2016-08-21 18:27:50', '2016-08-21 18:27:50'),
(143, NULL, 'ip', '127.0.0.1', '2016-08-21 18:27:51', '2016-08-21 18:27:51'),
(144, 3, 'user', NULL, '2016-08-21 18:27:51', '2016-08-21 18:27:51'),
(145, NULL, 'global', NULL, '2016-09-08 12:30:33', '2016-09-08 12:30:33'),
(146, NULL, 'ip', '::1', '2016-09-08 12:30:33', '2016-09-08 12:30:33'),
(147, 5, 'user', NULL, '2016-09-08 12:30:33', '2016-09-08 12:30:33'),
(148, NULL, 'global', NULL, '2016-09-20 07:25:24', '2016-09-20 07:25:24'),
(149, NULL, 'ip', '::1', '2016-09-20 07:25:25', '2016-09-20 07:25:25'),
(150, 5, 'user', NULL, '2016-09-20 07:25:25', '2016-09-20 07:25:25'),
(151, NULL, 'global', NULL, '2016-09-20 07:27:17', '2016-09-20 07:27:17'),
(152, NULL, 'ip', '::1', '2016-09-20 07:27:17', '2016-09-20 07:27:17'),
(153, NULL, 'global', NULL, '2016-09-20 07:27:40', '2016-09-20 07:27:40'),
(154, NULL, 'ip', '::1', '2016-09-20 07:27:40', '2016-09-20 07:27:40'),
(155, NULL, 'global', NULL, '2016-09-21 07:31:11', '2016-09-21 07:31:11'),
(156, NULL, 'ip', '::1', '2016-09-21 07:31:11', '2016-09-21 07:31:11'),
(157, NULL, 'global', NULL, '2016-09-26 12:43:40', '2016-09-26 12:43:40'),
(158, NULL, 'ip', '::1', '2016-09-26 12:43:40', '2016-09-26 12:43:40'),
(159, 1, 'user', NULL, '2016-09-26 12:43:40', '2016-09-26 12:43:40'),
(160, NULL, 'global', NULL, '2016-10-12 10:43:28', '2016-10-12 10:43:28'),
(161, NULL, 'ip', '127.0.0.1', '2016-10-12 10:43:28', '2016-10-12 10:43:28'),
(162, 1, 'user', NULL, '2016-10-12 10:43:28', '2016-10-12 10:43:28'),
(163, NULL, 'global', NULL, '2016-10-17 09:13:29', '2016-10-17 09:13:29'),
(164, NULL, 'ip', '127.0.0.1', '2016-10-17 09:13:29', '2016-10-17 09:13:29'),
(165, 5, 'user', NULL, '2016-10-17 09:13:29', '2016-10-17 09:13:29'),
(166, NULL, 'global', NULL, '2016-10-18 11:50:25', '2016-10-18 11:50:25'),
(167, NULL, 'ip', '127.0.0.1', '2016-10-18 11:50:25', '2016-10-18 11:50:25'),
(168, 1, 'user', NULL, '2016-10-18 11:50:25', '2016-10-18 11:50:25'),
(169, NULL, 'global', NULL, '2017-01-04 11:45:34', '2017-01-04 11:45:34'),
(170, NULL, 'ip', '::1', '2017-01-04 11:45:34', '2017-01-04 11:45:34'),
(171, 1, 'user', NULL, '2017-01-04 11:45:34', '2017-01-04 11:45:34'),
(172, NULL, 'global', NULL, '2017-01-04 11:46:25', '2017-01-04 11:46:25'),
(173, NULL, 'ip', '::1', '2017-01-04 11:46:25', '2017-01-04 11:46:25'),
(174, 5, 'user', NULL, '2017-01-04 11:46:25', '2017-01-04 11:46:25'),
(175, NULL, 'global', NULL, '2017-01-04 11:46:34', '2017-01-04 11:46:34'),
(176, NULL, 'ip', '::1', '2017-01-04 11:46:34', '2017-01-04 11:46:34'),
(177, 5, 'user', NULL, '2017-01-04 11:46:34', '2017-01-04 11:46:34'),
(178, NULL, 'global', NULL, '2017-01-04 12:52:38', '2017-01-04 12:52:38'),
(179, NULL, 'ip', '::1', '2017-01-04 12:52:38', '2017-01-04 12:52:38'),
(180, NULL, 'global', NULL, '2017-03-18 02:03:11', '2017-03-18 02:03:11'),
(181, NULL, 'ip', '::1', '2017-03-18 02:03:11', '2017-03-18 02:03:11'),
(182, NULL, 'global', NULL, '2017-03-26 16:21:42', '2017-03-26 16:21:42'),
(183, NULL, 'ip', '::1', '2017-03-26 16:21:42', '2017-03-26 16:21:42'),
(184, 1, 'user', NULL, '2017-03-26 16:21:42', '2017-03-26 16:21:42'),
(185, NULL, 'global', NULL, '2017-03-26 16:31:29', '2017-03-26 16:31:29'),
(186, NULL, 'ip', '::1', '2017-03-26 16:31:30', '2017-03-26 16:31:30'),
(187, NULL, 'global', NULL, '2017-03-26 16:32:00', '2017-03-26 16:32:00'),
(188, NULL, 'ip', '::1', '2017-03-26 16:32:00', '2017-03-26 16:32:00'),
(189, NULL, 'global', NULL, '2017-03-26 16:32:09', '2017-03-26 16:32:09'),
(190, NULL, 'ip', '::1', '2017-03-26 16:32:09', '2017-03-26 16:32:09'),
(191, 1, 'user', NULL, '2017-03-26 16:32:09', '2017-03-26 16:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'admin@mqplanet.com', '$2y$10$pfym4hUAJkQgvbAvKA3lEuibMEhmtqWABYRxHVQmbFULVEjVVBmM2', '{\"user.denyLiveAccount\":true}', '2017-03-29 04:09:21', NULL, 'Galya', NULL, '2016-03-28 13:25:48', '2017-03-29 04:09:21'),
(2, 'Galya@mqplanet.com', '$2y$10$wx8LoHNCgKtyR7/DSFBkMeYXy6ipzRKp9jZXYrtcn33GfEf4Ln0r6', NULL, '2016-04-13 18:39:38', 'Mohammad', 'Galya', NULL, '2016-03-28 13:25:48', '2016-04-13 18:39:38'),
(3, 'm.hashim@mqplanet.com', '$2y$10$25SqhJCHLEFgfkJifK3aOuO3APeMkZ47V7TMgDG.27VrgbY.T0Q5e', NULL, '2016-05-01 16:07:57', 'Mohammad', 'Hashim', NULL, '2016-03-28 13:25:49', '2016-12-27 13:31:16'),
(4, 'demo@mqplanet.com', '$2y$10$MKCIk1xMgta8ArmOqFDpEuPGCW1rhc0r26VNqWMlicvBL.TJSWH3S', NULL, '2016-06-09 13:30:01', NULL, 'demo', NULL, '2016-03-28 13:25:49', '2016-06-09 13:30:01'),
(5, 'mag@mqplanet.com', '$2y$10$DvrIyXD4.niyouAVgNcwt.3hM1.SKBtQ.a5MABxQ2uJBbc4iqLm8K', '', '2017-02-08 21:25:08', 'MoaydAAAAA', 'GalyaFFF', NULL, '2016-03-28 13:25:49', '2017-02-08 21:25:08'),
(6, 'sales@mqplanet.com', '$2y$10$.eJmJJyso7FbHITIQ73quuSuIcseFSoBC7xqcfyW/Abq4yPMbdVqy', NULL, '2016-03-31 22:08:21', 'Sales', 'MQPlanet', NULL, '2016-03-31 22:06:56', '2016-03-31 22:08:21'),
(7, 'hammad@mqplanet.com', '$2y$10$I4T.xnPjFPyjy8mDYbgiHu83DY/EBOohz2vNNgK3gF04w5XCpOTRy', NULL, NULL, 'Abed alfattah', 'hammad', NULL, '2016-04-07 12:54:26', '2016-04-07 12:54:26'),
(13, 'admin@admin.com', '$2y$10$yWVr9dZBQlAJ73aMKQ0Q3OL0okTWO7k4fWzq6zuK08TSFnAFf98Yu', NULL, '2016-05-01 13:07:06', ': admin firstName', ': admin last_name', NULL, '2016-05-01 13:01:21', '2016-05-01 13:07:06'),
(15, 'admin@admi4n.com', '$2y$10$796MNhlzvJwwb2qA9egs5ek9mcRLFOXKizDSX9lXbbTfKwc1XOyn6', NULL, NULL, ': admin firstName', ': admin last_name', NULL, '2016-05-01 13:04:34', '2016-05-01 13:04:34'),
(16, 'admin@admin5.com', '$2y$10$9e12W1hor43yve3OPJNyt.uS5C39n0rMRkyBO.4BRSo2FE8RKWn3W', NULL, '2016-05-01 13:06:09', ': admin firstName', ': admin last_name', NULL, '2016-05-01 13:05:12', '2016-05-01 13:06:09'),
(17, 'admin@admin7.com', '$2y$10$6YDAKpvtDaQy.QcH1wdV3uOZueFCAAFqn8JeiZowDVL8hqwHW/eGK', NULL, NULL, ': admin firstName', ': admin last_name', NULL, '2016-05-01 13:11:23', '2016-05-01 13:11:23'),
(18, 'admintest@admin.com', '$2y$10$F8E6o6rlUgxh9xd49aDI..DnnsGKZ..10uFxqSYJ109ck8H0.UyWS', NULL, '2016-05-01 13:22:35', 'adminTest', 'Test', NULL, '2016-05-01 13:12:22', '2016-05-01 13:22:35'),
(19, 'admin@admin8.com', '$2y$10$E9kdJ28a887C0gDVryRoJOWU9.wHlcMHTFILI/qvhTOXh/z5DPIcq', NULL, '2016-05-01 13:16:31', ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:14:07', '2016-05-01 13:16:31'),
(20, 'admin@admin9.com', '$2y$10$33PXn.qz2Ktm48z7xgziK.8scy0wu5IMZli0/QODg1k.ntaU0PzCi', NULL, '2016-05-01 13:18:01', ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:17:20', '2016-05-01 13:18:01'),
(21, 'admin@admina.com', '$2y$10$Y3Ht/J9B5VozrTqmerM8veTjIiF0GEcegPHuRyB5c7l3RGnmyi1KG', NULL, '2016-05-01 13:23:05', ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:22:34', '2016-05-01 13:23:05'),
(22, 'admin@adminb.com', '$2y$10$WNjXQg8y8abXr4lZItJxCueIR3qHJquO3MVExTM98zz9QTqXOsFKy', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:28:23', '2016-05-01 13:28:23'),
(23, 'admin@adminc.com', '$2y$10$KD4oByWVRd4VkcJhTHhBGOeBmDaRAE/DiyqF/XydG/BvOtQ.NlmM6', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:28:54', '2016-05-01 13:28:54'),
(24, 'admin@admind.com', '$2y$10$fCblwhGnZfN54Vukn4hPS.g5LpCzzg8hA.c8XNHokf7id2bqTyGlu', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:29:13', '2016-05-01 13:29:13'),
(25, 'ddd@ddd.ddd', '$2y$10$orGG6KvMrH4TO1agzzSmvupHecZgciUHbO2r6.gzrQeLZQaBEpdGK', NULL, '2016-05-01 13:33:53', 'asdf', 'sf', NULL, '2016-05-01 13:33:39', '2016-05-01 13:33:53'),
(26, 'admin@admine.com', '$2y$10$M.KIZXmo.0Ox/BwwkXnjteR8ck0uWIf0dewsRj01njcvnThiWx9s2', NULL, '2016-05-01 13:36:36', ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:35:54', '2016-05-01 13:36:36'),
(27, 'admin@adminv.com', '$2y$10$/tp9OFQq2vbsf.63/JFY5eKKDSKkmlfIiFks7TNPaTD6eL52mvs.y', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:46:24', '2016-05-01 13:46:24'),
(28, 'admin@adminz.com', '$2y$10$z6RFdmsA.kdgpMujELpBouYMLl2/XiciDrdX1O4DkzylfMT/Zybje', NULL, '2016-05-01 13:47:29', ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:46:55', '2016-05-01 13:47:29'),
(29, 'admin@adminx.com', '$2y$10$ozdl9T7dMl.W/G64tU1cNuFJk30xj7VfZtri26QQl/s1q.W16Gsy2', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:48:29', '2016-05-01 13:48:29'),
(30, 'admin@admink.com', '$2y$10$fPBKMa4PpH7cyb9Keby.EOU8B8Oe0hmXpwmGQLFR5EOvo1MUda57C', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:49:41', '2016-05-01 13:49:41'),
(31, 'admin@admint.com', '$2y$10$MUZSx0j9aOmMMVplFosSE.8lVQjIdGL2m6WEt.zuuy8HFq844TV.K', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:49:57', '2016-05-01 13:49:57'),
(33, 'admin@admintt.com', '$2y$10$TgyW12bN1zRrTLCVhOEN5.1pVKdCuMP2INgwGZ0wAF2uuiAGf4/DW', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:50:38', '2016-05-01 13:50:38'),
(34, 'admin@admintx.com', '$2y$10$SqwIYTitU.eUORVnneZnAO/uLXnveMMUvSKQvXH2PmLuoUNkWEu1S', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:50:47', '2016-05-01 13:50:47'),
(35, 'admin@adminthx.com', '$2y$10$KbTUhocfRRpr.TkQaBPEwu/NX0j/VLBltUyW.2QrhTCoCQ/SVkCjm', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:53:10', '2016-05-01 13:53:10'),
(36, 'admin@admjinthx.com', '$2y$10$EpscExd4AFgDqFo44FitLu7Qen.ViLsopDvs93CFqC./ccAAk4rTS', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:53:16', '2016-05-01 13:53:16'),
(37, 'admin@ajdmjinthx.com', '$2y$10$Hi.7Wj0bgELIKRrtUR8afeVRDvpXsKOJHSIYu3oir3YS9TE6SQwGW', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 13:53:24', '2016-05-01 13:53:24'),
(38, 'admin@ajdmjintfhx.com', '$2y$10$tpU.G8mawQvrLAEvPsEm/u3uXKfpsu0h3tVXvsv2UWLT9Vri7wC1.', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 14:02:28', '2016-05-01 14:02:28'),
(39, 'admin1@admin.com', '$2y$10$LWCNmqpRdS6PQA6Kq3VuOu7WIqKsSmQk6rgIGz.ICeTb8qvElTbmy', NULL, '2016-05-01 14:08:17', ' admin firstName', ' admin last_name', NULL, '2016-05-01 14:07:24', '2016-05-01 14:08:17'),
(40, 'admin3@admin.com', '$2y$10$Jrnm/CmeA9oT6MGbEvRk4OIwjsZ8XnIo2/aBYyJaVLamo.3.RY/42', NULL, '2016-05-01 14:11:17', ' admin firstName', ' admin last_name', NULL, '2016-05-01 14:10:48', '2016-05-01 14:11:17'),
(41, 'admin4@admin.com', '$2y$10$2HeUvzgoooi9tvSeEn3aRegPVXC4EnX4KYf0Ic8IDe/8WXSCjVZGu', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '2016-05-01 14:14:07', '2016-05-01 14:14:07'),
(43, 'admin5@admin.com', '$2y$10$dTp2sKdyofdp4N.eS3scx.HRnSt6.cCkIdWysOAuDhKp5kI6SF2Ae', NULL, '2016-05-01 14:15:54', ' admin firstName', ' admin last_name', NULL, '2016-05-01 14:14:43', '2016-05-01 14:15:54'),
(44, 'admin6@admin.com', '$2y$10$zdBqpmXqpujNPalq6.W5meP0zIRuf/XYT1BkmuICJQHho1UO4BGPW', NULL, NULL, 'first', 'last', NULL, '2016-05-01 14:17:26', '2016-12-26 10:00:02'),
(64, 'abdalfattah.hammad@yahoo.com', '$2y$10$R6gGLALtsBIs7BWSkVzche5XURZ9k671XFbQ22g1Mrsmp.NW1YyGi', '', '2016-05-29 06:47:05', 'abdalfattah', 'hammad', NULL, '2016-05-24 08:38:45', '2016-05-29 06:47:05'),
(66, 'taylorsuccessor1@gmail.com', '$2y$10$FGuj819KqAmJNMIxi5qWne/qyvT8SpUhlrgGDJXkKjkYf597RgMby', '{\"user.denyLiveAccount\":true}', NULL, 'taylor', 'successor', NULL, '2016-05-25 13:05:11', '2016-05-25 13:05:16'),
(67, 'dfsa@ragf.com', '$2y$10$gMS96cK40k52LuVk7BDj2.lCjmrR.htpHH2jvZSw8Vsj/SEieeIoi', '{\"user.denyLiveAccount\":true}', NULL, 'weq', 'ewqrew', NULL, '2016-05-29 11:28:02', '2016-05-29 11:28:06'),
(68, 'sdaflh@dfs.com', '$2y$10$cE9o/HVrD0xKwQ435xf.o.FruuEBvkhtK9zzzO4wY.zAkiRRjeARG', '{\"user.denyLiveAccount\":true}', NULL, 'dfs', 'asfd', NULL, '2016-05-29 11:29:44', '2016-05-29 11:29:49'),
(69, 'maggalya09@gmail.com', '$2y$10$3.9nPn5a0l8nAEEdUFRvmuUBjfN/wGBtQ.WDw9V4N.9lnt88IAzC.', '{\"user.denyLiveAccount\":true}', '2016-05-29 11:38:10', 'test', 'test', NULL, '2016-05-29 11:33:21', '2016-05-29 11:38:10'),
(70, 'taylorsuccessor2@gmail.com', '$2y$10$WOOk/daK6a37/0Z0vQStX.HmvuSJRF7jDQm3LBRPuLzKEECApIwTi', '{\"user.denyLiveAccount\":true}', NULL, 'sdf', 'sdfsdf', NULL, '2016-06-12 10:40:00', '2016-06-12 10:40:05'),
(71, 'taylorsuccessor3@gmail.com', '$2y$10$vEuPJ4u3ZzRIDaNwVTg.MObXT64Wjk840AF96e.EPbnY4nGR9H7Wq', '{\"user.denyLiveAccount\":true}', NULL, 'sdfs', 'dfgdfg', NULL, '2016-06-12 10:42:49', '2016-06-12 10:42:54'),
(72, 'taylorsuccessor4@gmail.com', '$2y$10$vyw6J2fgdFtchWsjQdV2EuhnEDmyfpX9p0Fb0SqH1LqgP6S0Uxxqu', '{\"user.denyLiveAccount\":true}', '2016-06-12 12:37:46', 'Test', '', NULL, '2016-06-12 12:37:46', '2016-06-12 12:37:52'),
(73, 'taylorsuccessor5@gmail.com', '$2y$10$aQ69hOigVigdEDLPIaJXO.KaXSkjVorqJv4hRNe1n.0cRhpF8hkT6', '{\"user.denyLiveAccount\":true}', '2016-06-12 12:46:28', 'Test', '', NULL, '2016-06-12 12:46:27', '2016-06-12 12:46:33'),
(74, 'taylorsuccessor6@gmail.com', '$2y$10$DOKqv/T4Hn6p6VCB496W8usXxtsdARnjMe/B6HsLCxcNWFmGvz9aq', '{\"user.denyLiveAccount\":true}', '2016-06-12 12:53:44', 'Test', '', NULL, '2016-06-12 12:53:44', '2016-06-12 12:53:49'),
(75, 'amira@mqplanet.com', '$2y$10$UvxJw/BBtooasAPhDvEPv.f8mCkq6vcVxmSzNZcW77wXcPYd5ZkMO', '{\"user.block\":true}', '2016-06-13 08:59:23', 'Amira', '', NULL, '2016-06-13 08:59:23', '2016-10-09 14:02:47'),
(76, 'amiraiak@yahoo.com', '$2y$10$Ce2p3zwAc4Pwm3SoZ9UDc.Ou9KB3dUmRxsJ32kbGU4wMMHdVZ6Obu', NULL, NULL, 'Test', '', NULL, '2016-12-27 12:38:50', '2016-12-27 12:38:50'),
(77, 'hbhuy', '$2y$10$SgJ2cJm/NXnCU0B.4/Ya3emRjKeBI77eHP7osCXYQfHdWNxvx7/kO', NULL, NULL, 'gfy', 'tyf', NULL, '2017-03-22 03:59:03', '2017-03-22 03:59:03'),
(78, 'vv', '$2y$10$g.bIACByPTjl.3GNq5TEm.XEdealK44IeAR8JSjcX4DZbXIshD7sm', NULL, NULL, 'vvvv', 'vvv', NULL, '2017-03-22 21:43:26', '2017-03-22 21:43:26'),
(79, 'test admin', '$2y$10$W4wwHxfeWRTX0N35zqpiru0tBjHGI6zLBsfaSmhGK3VWKoc3ieQ82', NULL, NULL, 'ffff', 'fffffff', NULL, '2017-03-22 21:54:59', '2017-03-22 21:54:59'),
(80, 'dfgsdfg', '$2y$10$vLQ5jLvll4mU0CA.6PNZM.qZzchaZ7BXdS03coY/SFEI2KlmqbUY.', NULL, NULL, 'dfgsdfg', 'gsdfg', NULL, '2017-03-22 21:55:47', '2017-03-22 21:55:47'),
(81, 'bbbbbbbbbb', '$2y$10$bBU./jpORO7jyZYlsNjeKubcu38Pv9PyDlYmQaHWaiL67Qvb5p7Fi', NULL, NULL, NULL, 'cvbcvb', NULL, '2017-03-22 21:58:12', '2017-03-22 21:58:12'),
(82, 'taylor@gmail.com', '$2y$10$XVxtO1cTEZqP8nF.z.hghOYctleDH4AUeE63k1UvbP3JnWNk/hYt6', NULL, '2017-03-26 16:35:39', NULL, 'successor', NULL, '2017-03-26 16:33:16', '2017-03-26 16:35:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_article`
--
ALTER TABLE `cms_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_page_id` (`cms_page_id`);

--
-- Indexes for table `cms_article_language`
--
ALTER TABLE `cms_article_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_language_id` (`cms_language_id`),
  ADD KEY `cms_article_id_ibfk_1` (`cms_article_id`);

--
-- Indexes for table `cms_cart`
--
ALTER TABLE `cms_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_product_id` (`cms_product_id`);

--
-- Indexes for table `cms_category`
--
ALTER TABLE `cms_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_category_description`
--
ALTER TABLE `cms_category_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_category_id` (`cms_category_id`);

--
-- Indexes for table `cms_compare_list`
--
ALTER TABLE `cms_compare_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_product_id` (`cms_product_id`);

--
-- Indexes for table `cms_content`
--
ALTER TABLE `cms_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_form`
--
ALTER TABLE `cms_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_page_id` (`cms_page_id`);

--
-- Indexes for table `cms_form_field`
--
ALTER TABLE `cms_form_field`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_form_id` (`cms_form_id`);

--
-- Indexes for table `cms_html`
--
ALTER TABLE `cms_html`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_html_language`
--
ALTER TABLE `cms_html_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_html_id` (`cms_html_id`),
  ADD KEY `cms_language_id` (`cms_language_id`);

--
-- Indexes for table `cms_language`
--
ALTER TABLE `cms_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_menu`
--
ALTER TABLE `cms_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_menu_item`
--
ALTER TABLE `cms_menu_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_menu_id` (`cms_menu_id`);

--
-- Indexes for table `cms_menu_item_language`
--
ALTER TABLE `cms_menu_item_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_menu_item_id` (`cms_menu_item_id`),
  ADD KEY `cms_language_id` (`cms_language_id`);

--
-- Indexes for table `cms_menu_language`
--
ALTER TABLE `cms_menu_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_menu_id` (`cms_menu_id`),
  ADD KEY `cms_language_id` (`cms_language_id`);

--
-- Indexes for table `cms_page`
--
ALTER TABLE `cms_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_page_content`
--
ALTER TABLE `cms_page_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_page_id` (`cms_page_id`);

--
-- Indexes for table `cms_page_content_page`
--
ALTER TABLE `cms_page_content_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_page_id` (`cms_page_id`),
  ADD KEY `cms_page_content_id` (`cms_page_content_id`);

--
-- Indexes for table `cms_product`
--
ALTER TABLE `cms_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_category_id` (`cms_category_id`);

--
-- Indexes for table `cms_product_description`
--
ALTER TABLE `cms_product_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_product_id` (`cms_product_id`),
  ADD KEY `cms_language_id` (`cms_language_id`);

--
-- Indexes for table `cms_wishlist`
--
ALTER TABLE `cms_wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_product_id` (`cms_product_id`);

--
-- Indexes for table `columns_info`
--
ALTER TABLE `columns_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_group`
--
ALTER TABLE `email_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_group_users`
--
ALTER TABLE `email_group_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_group_id` (`email_group_id`);

--
-- Indexes for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_group_id` (`email_group_id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cms_article`
--
ALTER TABLE `cms_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cms_article_language`
--
ALTER TABLE `cms_article_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cms_cart`
--
ALTER TABLE `cms_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_category`
--
ALTER TABLE `cms_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_category_description`
--
ALTER TABLE `cms_category_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_compare_list`
--
ALTER TABLE `cms_compare_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_content`
--
ALTER TABLE `cms_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_form`
--
ALTER TABLE `cms_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_form_field`
--
ALTER TABLE `cms_form_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_html`
--
ALTER TABLE `cms_html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_html_language`
--
ALTER TABLE `cms_html_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_language`
--
ALTER TABLE `cms_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_menu`
--
ALTER TABLE `cms_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cms_menu_item`
--
ALTER TABLE `cms_menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cms_menu_item_language`
--
ALTER TABLE `cms_menu_item_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_menu_language`
--
ALTER TABLE `cms_menu_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cms_page_content`
--
ALTER TABLE `cms_page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_page_content_page`
--
ALTER TABLE `cms_page_content_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_product`
--
ALTER TABLE `cms_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cms_product_description`
--
ALTER TABLE `cms_product_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cms_wishlist`
--
ALTER TABLE `cms_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `columns_info`
--
ALTER TABLE `columns_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `email_group`
--
ALTER TABLE `email_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `email_group_users`
--
ALTER TABLE `email_group_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=876;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cms_article`
--
ALTER TABLE `cms_article`
  ADD CONSTRAINT `cms_article_ibfk_1` FOREIGN KEY (`cms_page_id`) REFERENCES `cms_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_article_language`
--
ALTER TABLE `cms_article_language`
  ADD CONSTRAINT `cms_article_id_ibfk_1` FOREIGN KEY (`cms_article_id`) REFERENCES `cms_article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_cart`
--
ALTER TABLE `cms_cart`
  ADD CONSTRAINT `cms_cart_ibfk_1` FOREIGN KEY (`cms_product_id`) REFERENCES `cms_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_category_description`
--
ALTER TABLE `cms_category_description`
  ADD CONSTRAINT `cms_category_description_ibfk_1` FOREIGN KEY (`cms_category_id`) REFERENCES `cms_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_compare_list`
--
ALTER TABLE `cms_compare_list`
  ADD CONSTRAINT `cms_compare_list_ibfk_1` FOREIGN KEY (`cms_product_id`) REFERENCES `cms_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_form`
--
ALTER TABLE `cms_form`
  ADD CONSTRAINT `cms_form_ibfk_1` FOREIGN KEY (`cms_page_id`) REFERENCES `cms_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_form_field`
--
ALTER TABLE `cms_form_field`
  ADD CONSTRAINT `cms_form_field_ibfk_1` FOREIGN KEY (`cms_form_id`) REFERENCES `cms_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_html_language`
--
ALTER TABLE `cms_html_language`
  ADD CONSTRAINT `cms_html_language_ibfk_1` FOREIGN KEY (`cms_html_id`) REFERENCES `cms_html` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_menu_item`
--
ALTER TABLE `cms_menu_item`
  ADD CONSTRAINT `cms_menu_item_ibfk_1` FOREIGN KEY (`cms_menu_id`) REFERENCES `cms_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_menu_item_language`
--
ALTER TABLE `cms_menu_item_language`
  ADD CONSTRAINT `cms_menu_item_language_ibfk_1` FOREIGN KEY (`cms_menu_item_id`) REFERENCES `cms_menu_item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_menu_language`
--
ALTER TABLE `cms_menu_language`
  ADD CONSTRAINT `cms_menu_language_ibfk_1` FOREIGN KEY (`cms_menu_id`) REFERENCES `cms_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_page_content`
--
ALTER TABLE `cms_page_content`
  ADD CONSTRAINT `cms_page_content_ibfk_1` FOREIGN KEY (`cms_page_id`) REFERENCES `cms_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_page_content_page`
--
ALTER TABLE `cms_page_content_page`
  ADD CONSTRAINT `cms_page_content_page_ibfk_1` FOREIGN KEY (`cms_page_id`) REFERENCES `cms_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cms_page_content_page_ibfk_2` FOREIGN KEY (`cms_page_content_id`) REFERENCES `cms_page_content` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_product`
--
ALTER TABLE `cms_product`
  ADD CONSTRAINT `cms_product_ibfk_1` FOREIGN KEY (`cms_category_id`) REFERENCES `cms_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_product_description`
--
ALTER TABLE `cms_product_description`
  ADD CONSTRAINT `cms_product_description_ibfk_1` FOREIGN KEY (`cms_product_id`) REFERENCES `cms_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cms_wishlist`
--
ALTER TABLE `cms_wishlist`
  ADD CONSTRAINT `cms_wishlist_ibfk_1` FOREIGN KEY (`cms_product_id`) REFERENCES `cms_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_group_users`
--
ALTER TABLE `email_group_users`
  ADD CONSTRAINT `email_group_users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
  ADD CONSTRAINT `email_mass_queue_ibfk_1` FOREIGN KEY (`email_group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
  ADD CONSTRAINT `email_mass_template_ibfk_1` FOREIGN KEY (`email_group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
