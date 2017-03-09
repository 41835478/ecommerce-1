-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 01:47 PM
-- Server version: 5.6.34
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(138, 77, 'ic7GJn2fatftZzx9O73pzbOdBIc1uFNd', 1, '2017-01-19 11:41:02', '2017-01-19 11:41:02', '2017-01-19 11:41:02'),
(139, 78, 'ygDoJwjth3pvj0qVnzbXfBNQVlaqHh97', 1, '2017-01-19 11:53:48', '2017-01-19 11:53:48', '2017-01-19 11:53:48'),
(140, 0, 'WgoEUWaRTI5fwuvvd1xMwS49FEEM69Wo', 1, '2017-02-02 16:29:40', '2017-02-02 16:29:40', '2017-02-02 16:29:40'),
(141, 0, 'nSdm5QX2DazahJVMbFWoQ5TNylJxg0Im', 1, '2017-02-02 16:31:52', '2017-02-02 16:31:52', '2017-02-02 16:31:52'),
(142, 0, 'TUM99hrCCPCy3iaEu85FRbbYyQrojxub', 1, '2017-02-05 16:35:28', '2017-02-05 16:35:28', '2017-02-05 16:35:28'),
(143, 0, '69iZDbzsH2pFqJso3cNfgEKKqHqZovBn', 1, '2017-02-06 15:36:30', '2017-02-06 15:36:30', '2017-02-06 15:36:30'),
(144, 0, 'TLuL3EeVV3LF1V1qdtAM7VwxaQW4qmSL', 1, '2017-02-06 15:56:36', '2017-02-06 15:56:36', '2017-02-06 15:56:36'),
(145, 0, 'oB7FZUvkWIaiAWpvmLnZFuPiMNSKY146', 1, '2017-02-07 14:49:59', '2017-02-07 14:49:59', '2017-02-07 14:49:59'),
(146, 0, 'aX2gz8ycoI35eJAb4Af32oqUvddO0fEV', 1, '2017-02-07 15:39:38', '2017-02-07 15:39:38', '2017-02-07 15:39:38'),
(147, 0, '8T0tLLNUuMbPr456vs9gr9xqrclTxt1w', 1, '2017-02-07 15:41:41', '2017-02-07 15:41:41', '2017-02-07 15:41:41'),
(148, 0, 'CX9LZfBlAYrNZHpBg39TJqk18corHsFx', 1, '2017-02-09 08:34:59', '2017-02-09 08:34:59', '2017-02-09 08:34:59'),
(149, 0, '2pW20TO0XDJ5fEcQCDziituwxQciY54a', 1, '2017-02-09 11:24:24', '2017-02-09 11:24:24', '2017-02-09 11:24:24'),
(150, 0, '95SlFI6dIlDMNwwFXa6vl4biMBgcm2MO', 1, '2017-02-10 11:50:33', '2017-02-10 11:50:33', '2017-02-10 11:50:33'),
(151, 0, 'U3ZPTiBlKXIsV9dopoV5A1FrTWvASx9h', 1, '2017-02-12 08:03:27', '2017-02-12 08:03:27', '2017-02-12 08:03:27'),
(152, 0, 'm3eF7azbGKBQqBi76Ib8XEdlgMAFwkTv', 1, '2017-02-12 09:26:43', '2017-02-12 09:26:43', '2017-02-12 09:26:43'),
(153, 0, 'Ala9lddGsllueSpUezakQwMS9Xqib9wQ', 1, '2017-02-12 09:41:25', '2017-02-12 09:41:25', '2017-02-12 09:41:25'),
(154, 0, 'rOvmZlLDSGmQirR4JphGiyJ7LPKDFuWF', 1, '2017-02-12 12:57:19', '2017-02-12 12:57:19', '2017-02-12 12:57:19'),
(155, 0, 'IST0JncsgtHNp6E6dfb7eZ163ZCQhno1', 1, '2017-02-13 07:59:43', '2017-02-13 07:59:43', '2017-02-13 07:59:43'),
(156, 0, 'MRrGjDVyibCgHc9nBD1MZRAdogcQgqNa', 1, '2017-02-13 08:55:45', '2017-02-13 08:55:45', '2017-02-13 08:55:45'),
(157, 0, '6gtBdNsS48hptEExbdSPUPPgMka5bMsQ', 1, '2017-02-13 10:04:39', '2017-02-13 10:04:39', '2017-02-13 10:04:39'),
(158, 0, '5LY97it1dMGv6K9JSh6VbObJgnNUFdQX', 1, '2017-02-13 10:42:17', '2017-02-13 10:42:17', '2017-02-13 10:42:17'),
(159, 0, 'g6TcYI6UUFHFx0Kxea4cIqhZqwFF5E44', 1, '2017-02-14 08:44:31', '2017-02-14 08:44:31', '2017-02-14 08:44:31'),
(160, 0, '0rQpiN8e3D7R5i0Yla7UhdLMGKQUoptL', 1, '2017-02-14 08:52:48', '2017-02-14 08:52:48', '2017-02-14 08:52:48'),
(161, 0, 'Gbe5nNP9BPn86hIYUHupBKPG6NtMh6zH', 1, '2017-02-14 11:47:52', '2017-02-14 11:47:52', '2017-02-14 11:47:52'),
(162, 1, 'ZfOPJ0J7c7T9IaEW0x6C8tVA9Krf6y50', 1, '2017-02-14 11:53:38', '2017-02-14 11:53:38', '2017-02-14 11:53:38'),
(163, 3, '8U7l7HrwzZXVp7Cn22t5WyuPmdvo5IUn', 1, '2017-02-14 11:54:14', '2017-02-14 11:54:14', '2017-02-14 11:54:14'),
(164, 4, '5flljoqWVRy1Sv85iyLWwIOMstLclxPI', 1, '2017-02-14 12:26:39', '2017-02-14 12:26:39', '2017-02-14 12:26:39'),
(165, 5, '5lfu8BFAzxQmFGcURhSAZgmvOm4UGYSK', 1, '2017-02-14 12:41:19', '2017-02-14 12:41:19', '2017-02-14 12:41:19'),
(166, 6, 'vhAyXZuae9tyga9PPXGnJOGl80cQ5tj2', 1, '2017-02-14 12:46:01', '2017-02-14 12:46:01', '2017-02-14 12:46:01'),
(167, 7, 'hBbe1KXF8JDmR91jx8mpB4OmvPqxrmaF', 1, '2017-02-14 13:50:24', '2017-02-14 13:50:24', '2017-02-14 13:50:24'),
(168, 8, 'lpnfIQDd9xsq1FQp9vObiBRGQuwyxF8z', 1, '2017-02-14 14:02:24', '2017-02-14 14:02:24', '2017-02-14 14:02:24'),
(169, 9, 'obfZOxAWJjoMuwXNR7hWv9DDhpRHNxPb', 1, '2017-02-14 14:14:44', '2017-02-14 14:14:44', '2017-02-14 14:14:44'),
(170, 10, 'aDP0FPIzWiMJh3irKXNNJ2ttDIQKhihz', 1, '2017-02-27 09:56:45', '2017-02-27 09:56:45', '2017-02-27 09:56:45'),
(171, 11, 'pM6Zc663nrFLBaWsZSqCuMKoUUFKi4sW', 1, '2017-03-02 10:14:57', '2017-03-02 10:14:57', '2017-03-02 10:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `email`, `phone`, `website`, `address`, `country`, `city`, `zipcode`, `status`) VALUES
(1, 'mqplanet', 'admin@mqplanet.com', '0797777777', 'www.mqplanet.com', 'algeardinz', 'jordan', 'amman', '11821', '0'),
(2, 'MQ Planet', 'galya@mqplanet.com', '799959779', 'mqplanet.com', 'Amman', 'Jordan', 'Amman', '11953', '0'),
(3, 'A Company', 'galya@mqplanet.com', '799959779', 'acompany', 'Amman', 'Jordan', 'Amman', '11953', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `section` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `company_id`, `users_id`, `name`, `email`, `phone`, `section`, `description`, `status`) VALUES
(1, 1, 1, 'admin', 'admin@mqplanet.com', '0785181656', 'ffffff', 'fsdf', 1),
(2, 1, 10, 'taylor', 'taylor@gmail.com', '0790800242', '', 'fsdf', 0),
(3, 2, 11, 'Mohammad Galya', 'galya@mqplanet.com', '799959779', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `price` double NOT NULL,
  `purchasing_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `name`, `company_id`, `products_id`, `type`, `price`, `purchasing_date`, `status`, `description`) VALUES
(1, '', 1, 1, 0, 0, '2017-02-27', 0, '<p>Description</p>\r\n'),
(2, '', 1, 1, 4, 0, '2017-02-27', 0, '<p>hfdgh</p>\r\n'),
(3, '', 1, 1, 4, 0, '2017-02-27', 0, '<p>fffffffffffffffffffff</p>\r\n'),
(4, '', 1, 1, 3, 0, '2017-02-27', 0, '<p>sdf</p>\r\n'),
(5, '', 1, 1, 0, 0, '2017-02-27', 0, '<p>dfgdfg</p>\r\n'),
(6, '', 1, 1, 3, 0, '2017-03-02', 0, ''),
(7, '', 1, 1, 0, 0, '2017-03-02', 0, ''),
(8, '', 1, 1, 0, 0, '2017-03-02', 0, ''),
(9, '', 2, 2, 0, 0, '2017-03-06', 0, ''),
(10, '', 1, 1, 3, 0, '2017-03-06', 0, ''),
(11, '', 2, 1, 4, 0, '2017-03-06', 0, ''),
(12, 'ffffffffffff', 1, 1, 0, 5, '2017-03-06', 0, ''),
(13, 'ghjfgj', 1, 1, 0, 67567, '2017-03-08', 2, ''),
(14, 'aaaaaaaaaaa', 1, 1, 0, 0, '2017-03-08', 0, ''),
(15, 'C-123131', 3, 4, 3, 50, '2017-03-09', 0, ''),
(16, 'jjjjjjjj', 3, 7, 0, 456, '2017-03-09', 0, '<p>dgfgdfg</p>\r\n'),
(17, 'ffffffffffff', 3, 1, 1, 234, '2017-03-09', 0, '<p>dfgsdfg</p>\r\n'),
(18, 'ffffff', 3, 1, 4, 0, '2017-03-09', 0, '<p>fasdfad</p>\r\n'),
(19, 'hhhhhhhhhh', 3, 1, 1, 55, '2017-03-09', 0, '<p>adfasdf</p>\r\n'),
(20, 'bbbbbbbb', 3, 1, 2, 45, '2017-03-09', 0, '<p>sdfgsdfg</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contracts_documents`
--

CREATE TABLE IF NOT EXISTS `contracts_documents` (
  `id` int(11) NOT NULL,
  `contracts_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `links` text NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contracts_licenses`
--

CREATE TABLE IF NOT EXISTS `contracts_licenses` (
  `contracts_id` int(11) NOT NULL,
  `licenses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contracts_renewal`
--

CREATE TABLE IF NOT EXISTS `contracts_renewal` (
  `id` int(11) NOT NULL,
  `contracts_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contracts_renewal`
--

INSERT INTO `contracts_renewal` (`id`, `contracts_id`, `from_date`, `to_date`, `description`, `price`) VALUES
(1, 1, '2016-02-27', '2017-03-10', 'Description', 22),
(2, 4, '2016-02-27', '2017-03-09', 'rrrrrrrrrrr', 777),
(3, 9, '2017-03-06', '2018-03-06', '', 1000),
(4, 12, '2017-03-06', '2018-03-06', '5dfgsdfg', 55),
(5, 15, '2017-03-09', '2018-03-09', '', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `contracts_renewal_invoice`
--

CREATE TABLE IF NOT EXISTS `contracts_renewal_invoice` (
  `id` int(11) NOT NULL,
  `contracts_id` int(11) NOT NULL,
  `contracts_renewal_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracts_renewal_invoice`
--

INSERT INTO `contracts_renewal_invoice` (`id`, `contracts_id`, `contracts_renewal_id`, `invoice_id`, `description`) VALUES
(1, 1, 1, 1, 'sfdsdfsdf'),
(2, 5, 3, 3, 'gggggggggggggggggg'),
(3, 12, 2, 3, 'hfgh'),
(4, 12, 0, 2, 'gggggggggggg'),
(5, 12, 4, 3, 'werwewwwwwwwwwwww'),
(6, 12, 4, 3, '435'),
(7, 0, 3, 2, 'ddddddddddddd'),
(8, 12, 4, 4, 'fffffffffffff'),
(9, 1, 1, 2, 'fsdfsdf'),
(10, 12, 0, 2, 'sdfsdf'),
(11, 9, 3, 2, 'jfghjfhg'),
(12, 0, 0, 2, 'gggg'),
(13, 0, 4, 2, 'a'),
(14, 0, 4, 2, 'a'),
(15, 0, 1, 2, 'Aa'),
(16, 0, 0, 7, 'A'),
(17, 15, 1, 7, 'dfsdf'),
(18, 12, 0, 6, 'fsdf'),
(19, 0, 3, 7, 'fffffffff'),
(20, 15, 0, 7, 'dfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  `version` varchar(50) CHARACTER SET utf8 NOT NULL,
  `parent` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `body`, `version`, `parent`, `type`) VALUES
(2, 'gjghj', '<p>thtrg dfg</p>\r\n\r\n<p>gsfdgs</p>\r\n', 'fgh', 2, 2),
(3, 'bbb', 'bb', 'bbb', 2, 1),
(4, 'nn', 'nnnn', 'nnnnn', 2, 0),
(5, 'ffff', 'fff', 'fffff', 2, 0),
(6, 'tyu', 'ytujty', 'tyurtuy', 2, 0),
(7, 'ghnghngh', 'nnnhgngh', 'nghnhgn', 2, 0),
(8, 'gdfgfdg', 'fghdfgh', 'gsdfg', 6, 2),
(9, 'nnnnnnnnn', 'nnnnnnnn', 'nnnnnnnn', 2, 0),
(10, 'sdg', 'fasdf', 'sdfg', 3, 0),
(11, 'bbbbbbbbb', 'bcvvvvvvvvv', 'vvvvvvvvvvvvv', 3, 0),
(12, 'mmmmmmmmmmm', 'mmmmmmmm', 'mmmmmmmmm', 11, 0),
(13, 'sdf', 'fasdf', 'fasdf', 2, 0),
(14, 'gsdfg', 'dfg', 'gsdfg', 11, 0),
(15, 'gsdfg', '<p>dsfgsdf</p>\r\n', '345', 0, 1),
(16, 'gggggggdfgsdfg', '<p><a href="http://localhost:8000/files/5375_21196mycp_erDiagram.png"><img alt="" src="http://localhost:8000/files/5375_21196mycp_erDiagram.png" style="width: 968px; height: 1522px;" /></a></p>\r\n', 'sdfgsdfg', 0, 0),
(17, 'Agents Handler', '<p>Brief:</p>\r\n\r\n<p><br />\r\nThis server side plug-in allows the client to have different agent accounts for one Client account.</p>\r\n\r\n<p>Options:</p>\r\n\r\n<p><br />\r\nGroups/ Individual Accounts.<br />\r\nNumber Agents Assigned per group or Account.<br />\r\nAgent Commission back to each Agent..</p>\r\n\r\n<p>Important Notes:</p>\r\n\r\n<p><br />\r\n<br />\r\nPlug-in can be customized according to company requirements<br />\r\nGroups/Symbols, and Database that holds agent&rsquo;s information per account.</p>\r\n\r\n<p><img alt="" original="/images/mqplanetPhoto/plugins/multi-agents.png" src="https://www.mqplanet.com/images/mqplanetPhoto/plugins/multi-agents.png" /></p>\r\n\r\n<p><a href="https://www.mqplanet.com/order-plugin">TRY DEMO</a></p>\r\n', '1', 0, 0),
(18, 'Agents Handler', '<p>Brief:aaaaaaaaaaaaa</p>\r\n\r\n<p><br />\r\nThis server side plug-in allows the client to have different agent accounts for one Client account.</p>\r\n\r\n<p>Options:</p>\r\n\r\n<p><br />\r\nGroups/ Individual Accounts.<br />\r\nNumber Agents Assigned per group or Account.<br />\r\nAgent Commission back to each Agent..</p>\r\n\r\n<p>Important Notes:</p>\r\n\r\n<p><br />\r\n<br />\r\nPlug-in can be customized according to company requirements<br />\r\nGroups/Symbols, and Database that holds agent&rsquo;s information per account.</p>\r\n\r\n<p><img alt="" original="/images/mqplanetPhoto/plugins/multi-agents.png" src="https://www.mqplanet.com/images/mqplanetPhoto/plugins/multi-agents.png" /></p>\r\n\r\n<p><a href="https://www.mqplanet.com/order-plugin">TRY DEMO</a></p>\r\n', '1.1', 17, 0),
(19, 'sdfasdf', '<p>sdfgsdfg</p>\r\n', 'dsgsdfg', 0, 1),
(20, 'bbbb', '<p>ggggggggggggg</p>\r\n', 'sdfgdsfg', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE IF NOT EXISTS `domains` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `provider` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cost` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`id`, `name`, `provider`, `cost`) VALUES
(1, 'asdf', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL,
  `contacts_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `module` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `optout` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL,
  `version` varchar(50) CHARACTER SET utf8 NOT NULL,
  `parent` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `link`, `version`, `parent`, `type`) VALUES
(2, 'gggggggg', 'ggg', 'gggg', 2, 0),
(3, 'hdfhdf', 'ghdfghd', 'fghdfghdfgh', 2, 0),
(5, 'gjkg', 'gjk', 'gjk', 3, 0),
(6, 'sdfg', 'files/457_12494donains.png', 'sdfgsdfg', 3, 2),
(8, 'fasdf', 'files/29061_3034invoice_payment erd.png', 'fasdf', 6, 0),
(9, 'sdfsdf', 'files/10251_5864donains.png', 'sfgsdf', 6, 0),
(10, 'hjhk', 'files/14823_14740mycp_erDiagram.png', 'gsdg', 2, 0),
(11, 'hhhhhhhhhh', 'files/15410_3459donains.png', '456', 0, 2),
(12, 'ggg', 'files/23296_28473invoice_payment erd.png', 'gsdfgsdfgsdfg', 11, 0),
(13, 'Agents Handler', 'files/91361544_804089368Bonus Plugin.zip', '1', 0, 0),
(14, 'Agents Handler', 'files/549414501_912525232Bonus Plugin.zip', '12', 13, 0),
(15, 'faaaaaaaaaaa', 'files/27006_32479donains.png', 'fffffffffff', 11, 0),
(16, 'fffff', 'files/10028_17909donains.png', 'asdfas', 13, 1),
(17, 'fffffffffffff', 'files/8074_10747donains.png', 'fffffffffffffffffff', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_date` date NOT NULL,
  `due_date` date NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `company_id`, `name`, `create_date`, `due_date`, `description`) VALUES
(2, 2, 'bbbbbbbbbbbbb', '0000-00-00', '0000-00-00', 'asd'),
(3, 0, 'new invoice', '0000-00-00', '0000-00-00', 'fffffffffffffff'),
(4, 0, 'ggggggggg', '2017-03-06', '2023-03-02', 'asdfasdf'),
(5, 1, 'gsdfg', '2017-03-07', '2017-03-13', 'sdfgsdfg'),
(6, 1, 'fffffffffff', '2017-03-07', '2017-03-24', 'gsdfg'),
(7, 3, 'ABC-123123', '2017-03-09', '2017-03-09', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE IF NOT EXISTS `licenses` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `license` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `licenses`
--

INSERT INTO `licenses` (`id`, `company_id`, `license`, `type`, `status`) VALUES
(1, 1, 'mt4', 'mt4 type', 0),
(2, 2, 'MQPLanet License', 'MT4', 0),
(3, 2, 'hfghfgh', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logtime`
--

CREATE TABLE IF NOT EXISTS `logtime` (
  `id` int(11) NOT NULL,
  `support_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `hours` varchar(10) CHARACTER SET utf8 NOT NULL,
  `summary` text CHARACTER SET utf8 NOT NULL,
  `create_date` date NOT NULL,
  `expenses` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logtime`
--

INSERT INTO `logtime` (`id`, `support_id`, `ticket_id`, `hours`, `summary`, `create_date`, `expenses`) VALUES
(1, 0, 0, '14:10', 'fasdf', '2018-02-27', 'fsdfasdfas'),
(2, 0, 0, '13:05', 'fasdf', '2018-02-27', '34');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `status` int(11) NOT NULL,
  `payment_condition` text CHARACTER SET utf8 NOT NULL,
  `create_date` date NOT NULL,
  `due_date` date NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `invoice_id`, `amount`, `status`, `payment_condition`, `create_date`, `due_date`, `description`) VALUES
(1, 4, 44, 2, 'safd', '0000-00-00', '0000-00-00', 'dsgdsfgdsfg'),
(2, 2, 66, 1, 'fgdfg', '0000-00-00', '0000-00-00', 'hhhhhhhhh'),
(3, 3, 55, 2, 'بسيب', '0000-00-00', '0000-00-00', 'ففففف'),
(4, 2, 0, 0, 'rrrrrrrrrrr', '2017-03-16', '2017-03-29', 'uuuuuuuuuuu');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 0, 'NoSnJ6T9JBBROclYnisT3oio32HOidJo', '2017-02-13 10:42:17', '2017-02-13 10:42:17'),
(2, 0, 'u5WBeRXQoUnIBfEOVu0CtTtxBL61G0O0', '2017-02-14 08:44:31', '2017-02-14 08:44:31'),
(3, 0, 'Y5RLddTYKaUWwsumyV3AU6IiGkOOcSB6', '2017-02-14 08:52:48', '2017-02-14 08:52:48'),
(20, 9, 'pBqsKHUCkKAWVtQBpxUkhey4eYNZCm4S', '2017-02-14 14:15:12', '2017-02-14 14:15:12'),
(22, 9, 'pnpvL9X0gf8ZuVSnJBMmuJmqTapvviuN', '2017-02-15 08:14:47', '2017-02-15 08:14:47'),
(23, 9, 'EvIVHM4IiI6YEVL2lIPZ28GrJs5ivg24', '2017-02-15 11:01:32', '2017-02-15 11:01:32'),
(25, 9, 'kBsCxBLKfu4s2YAdXkzIDcD6aDaQva0h', '2017-02-16 10:17:20', '2017-02-16 10:17:20'),
(26, 9, 'f9f88afVzUnHDJ7Jadqnb8kPCcIGwkIE', '2017-02-16 13:40:16', '2017-02-16 13:40:16'),
(27, 9, '5cV2u2xLPzUn8jHZw67aYcRUaD2VlkQm', '2017-02-19 08:34:56', '2017-02-19 08:34:56'),
(28, 9, 'HEx7kJw5YPiE2IOV8Wvcvbt194zkGXxB', '2017-02-19 14:46:59', '2017-02-19 14:46:59'),
(29, 9, 'wFjaxAOIAm8AV7LhwYE6yi0anOMvcX4u', '2017-02-20 07:45:15', '2017-02-20 07:45:15'),
(30, 9, 'WfAz3MSE9vJdrlwwiAKwGaPkwf6SueG7', '2017-02-21 08:05:08', '2017-02-21 08:05:08'),
(31, 9, 'Q3ucQXpq9gTkKIIDFWow40Fp8W5iXDvH', '2017-02-21 11:16:20', '2017-02-21 11:16:20'),
(32, 9, 'Z7UPUpbUi6MYSWkkqq7XpUwQj32ke2hh', '2017-02-26 11:31:28', '2017-02-26 11:31:28'),
(34, 9, 'DUXD85wqtcfhBQaq19tjF9uXlhG5XzJi', '2017-02-27 09:50:25', '2017-02-27 09:50:25'),
(38, 1, 'IR5Gjlj7j9EQpOVRiwlZOkSlTiFH2O87', '2017-02-27 12:29:20', '2017-02-27 12:29:20'),
(39, 1, 'XxKSScCWiwQg4KGYg93zYdlUcKCCAyvk', '2017-02-28 08:14:46', '2017-02-28 08:14:46'),
(40, 1, '3eukKVk2kASxP8NrC14SLw6XQwvWMmVz', '2017-03-02 07:56:47', '2017-03-02 07:56:47'),
(41, 1, 'TnmM677EqHZ5PsQIkKH92YXRCxCp5J3M', '2017-03-02 10:01:36', '2017-03-02 10:01:36'),
(42, 1, 'WPyDEs2XvOBuldKTDZfWc7v8gfgZcIUi', '2017-03-02 11:05:19', '2017-03-02 11:05:19'),
(43, 1, 'pWM2NJPqNTfJO468lndhDsUHWHxaiM0p', '2017-03-03 12:21:31', '2017-03-03 12:21:31'),
(44, 1, 'VsYGOCUZlOSh3XZIuJb1tvsO3R9fcfGE', '2017-03-05 07:49:50', '2017-03-05 07:49:50'),
(45, 1, 'jzszbsXRyqZXSPEv2Z3sWNWBwdl7lqmt', '2017-03-05 09:21:12', '2017-03-05 09:21:12'),
(46, 1, 'TY1JCEmGdupkbj8hweKV0DvSEQQcPalI', '2017-03-05 14:35:40', '2017-03-05 14:35:40'),
(47, 1, 'tAmBidJPm5BUHZ65x1WU2ZWv092N5eUQ', '2017-03-05 15:26:35', '2017-03-05 15:26:35'),
(48, 1, 'mMfipA9kbxM1hO16PzPrKwtZqvxZHTWb', '2017-03-06 07:56:09', '2017-03-06 07:56:09'),
(49, 1, 'wQp5FAYZANrP9hjukWewH7IMmuJ6jLBG', '2017-03-06 08:15:43', '2017-03-06 08:15:43'),
(50, 1, 'r7OOStTaCm06qD0ZvzhRTRXKg2D8DNwP', '2017-03-06 13:46:56', '2017-03-06 13:46:56'),
(51, 1, 'sS3jqpb72RxRjsdWQnZyqXI86djXHrYy', '2017-03-07 08:00:27', '2017-03-07 08:00:27'),
(52, 1, 'li9apyfofcDG8tJSj57lbvjMP4OI4xaQ', '2017-03-07 08:33:19', '2017-03-07 08:33:19'),
(53, 1, 'u0myVBCvZkivnHihfVdCg2l5m5YeeBoc', '2017-03-07 10:36:44', '2017-03-07 10:36:44'),
(54, 1, 'RPRqQqoAAFpwGZjYZFYmgsfEh8PxlIUT', '2017-03-07 13:59:51', '2017-03-07 13:59:51'),
(55, 1, 'BZkSBIbRAhsPf9o8HxOOZa9wnuBA45uV', '2017-03-08 08:21:51', '2017-03-08 08:21:51'),
(56, 1, 'RpXRtN8A8A1u9LrvlMvhMHqTLjsTEpeG', '2017-03-08 08:31:48', '2017-03-08 08:31:48'),
(57, 1, 'rt54lMrjVDuOLmYIO7Idu1UuZnCTuXFw', '2017-03-08 10:52:18', '2017-03-08 10:52:18'),
(58, 1, 'GqB0rcK4lGBcKR0tbZIvqWVzgSeGxJqw', '2017-03-08 13:57:12', '2017-03-08 13:57:12'),
(59, 1, '2MmOiBeOlBQygBzG4cd4o2EQYQW410AS', '2017-03-09 08:43:25', '2017-03-09 08:43:25'),
(60, 1, 'KPTUbcKuongJ7DQNKUQUsXYp2SU3LP8j', '2017-03-09 09:21:53', '2017-03-09 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `products_list_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `article` int(11) NOT NULL,
  `manual` int(11) NOT NULL,
  `files_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `products_list_id`, `name`, `description`, `article`, `manual`, `files_id`) VALUES
(1, 1, 'fxwebkit', 'Description', 0, 3, 0),
(3, 1, 'tertwer', 'wertwert', 3, 0, 0),
(4, 1, 'gsdfg', 'dfgdfs', 0, 3, 0),
(5, 1, 'jghjfgjh', 'jh', 12, 0, 0),
(6, 1, 'files product', 'fsdfasd', 7, 15, 5),
(7, 2, 'Agents Handler', '', 17, 15, 11);

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

CREATE TABLE IF NOT EXISTS `products_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`id`, `name`, `type`, `description`) VALUES
(1, 'mt4 setup', '1', 'mt4 setup description'),
(2, 'Agents Handler', 'MT4 Plugin', ''),
(3, 'dsfgsdfg', '3', 'fsdf');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{"admin":true}', '2016-03-28 13:25:48', '2016-03-28 13:25:48'),
(2, 'client', 'Client', NULL, '2016-03-28 13:25:48', '2016-03-28 13:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-03-28 13:25:48', '2016-03-28 13:25:48'),
(2, 1, '2016-03-28 13:25:48', '2016-03-28 13:25:48'),
(3, 2, '2016-03-28 13:25:49', '2016-03-28 13:25:49'),
(4, 2, '2016-03-28 13:25:49', '2016-03-28 13:25:49'),
(5, 2, '2016-03-28 13:25:49', '2016-03-28 13:25:49'),
(6, 2, '2016-03-31 22:06:57', '2016-03-31 22:06:57'),
(7, 2, '2016-04-07 12:54:26', '2016-04-07 12:54:26'),
(8, 2, '2016-04-23 15:17:01', '2016-04-23 15:17:01'),
(9, 2, '2016-04-23 15:21:57', '2016-04-23 15:21:57'),
(10, 2, '2016-04-26 13:53:03', '2016-04-26 13:53:03'),
(11, 1, '2016-04-27 12:49:08', '2016-04-27 12:49:08'),
(12, 2, '2016-04-27 12:55:37', '2016-04-27 12:55:37'),
(13, 2, '2016-05-01 13:01:22', '2016-05-01 13:01:22'),
(15, 2, '2016-05-01 13:04:34', '2016-05-01 13:04:34'),
(16, 2, '2016-05-01 13:05:12', '2016-05-01 13:05:12'),
(17, 2, '2016-05-01 13:11:23', '2016-05-01 13:11:23'),
(18, 1, '2016-05-01 13:12:22', '2016-05-01 13:12:22'),
(19, 2, '2016-05-01 13:14:07', '2016-05-01 13:14:07'),
(20, 2, '2016-05-01 13:17:20', '2016-05-01 13:17:20'),
(21, 2, '2016-05-01 13:22:34', '2016-05-01 13:22:34'),
(22, 2, '2016-05-01 13:28:23', '2016-05-01 13:28:23'),
(23, 2, '2016-05-01 13:28:54', '2016-05-01 13:28:54'),
(24, 2, '2016-05-01 13:29:13', '2016-05-01 13:29:13'),
(25, 1, '2016-05-01 13:33:39', '2016-05-01 13:33:39'),
(26, 2, '2016-05-01 13:35:54', '2016-05-01 13:35:54'),
(27, 2, '2016-05-01 13:46:24', '2016-05-01 13:46:24'),
(28, 2, '2016-05-01 13:46:55', '2016-05-01 13:46:55'),
(29, 2, '2016-05-01 13:48:29', '2016-05-01 13:48:29'),
(30, 2, '2016-05-01 13:49:41', '2016-05-01 13:49:41'),
(31, 2, '2016-05-01 13:49:57', '2016-05-01 13:49:57'),
(33, 2, '2016-05-01 13:50:38', '2016-05-01 13:50:38'),
(34, 2, '2016-05-01 13:50:47', '2016-05-01 13:50:47'),
(35, 2, '2016-05-01 13:53:10', '2016-05-01 13:53:10'),
(36, 2, '2016-05-01 13:53:16', '2016-05-01 13:53:16'),
(37, 2, '2016-05-01 13:53:25', '2016-05-01 13:53:25'),
(38, 2, '2016-05-01 14:02:28', '2016-05-01 14:02:28'),
(39, 2, '2016-05-01 14:07:24', '2016-05-01 14:07:24'),
(40, 2, '2016-05-01 14:10:48', '2016-05-01 14:10:48'),
(43, 1, '2016-05-01 14:14:43', '2016-05-01 14:14:43'),
(44, 1, '2016-05-01 14:17:27', '2016-05-01 14:17:27'),
(45, 2, '2016-05-01 18:21:25', '2016-05-01 18:21:25'),
(46, 2, '2016-05-10 09:52:22', '2016-05-10 09:52:22'),
(47, 2, '2016-05-10 09:54:43', '2016-05-10 09:54:43'),
(48, 2, '2016-05-10 10:01:45', '2016-05-10 10:01:45'),
(49, 2, '2016-05-10 10:04:14', '2016-05-10 10:04:14'),
(50, 2, '2016-05-10 10:07:31', '2016-05-10 10:07:31'),
(51, 2, '2016-05-10 10:09:37', '2016-05-10 10:09:37'),
(52, 2, '2016-05-10 10:10:21', '2016-05-10 10:10:21'),
(53, 2, '2016-05-10 10:14:54', '2016-05-10 10:14:54'),
(54, 2, '2016-05-10 11:11:31', '2016-05-10 11:11:31'),
(55, 2, '2016-05-10 11:13:03', '2016-05-10 11:13:03'),
(56, 2, '2016-05-10 11:16:41', '2016-05-10 11:16:41'),
(57, 2, '2016-05-10 11:21:28', '2016-05-10 11:21:28'),
(58, 2, '2016-05-10 11:24:26', '2016-05-10 11:24:26'),
(59, 2, '2016-05-10 11:39:27', '2016-05-10 11:39:27'),
(60, 2, '2016-05-10 11:59:33', '2016-05-10 11:59:33'),
(61, 2, '2016-05-10 12:16:10', '2016-05-10 12:16:10'),
(62, 2, '2016-05-10 12:17:20', '2016-05-10 12:17:20'),
(63, 2, '2016-05-24 08:34:42', '2016-05-24 08:34:42'),
(64, 2, '2016-05-24 08:38:45', '2016-05-24 08:38:45'),
(65, 2, '2016-05-25 12:50:35', '2016-05-25 12:50:35'),
(66, 2, '2016-05-25 13:05:11', '2016-05-25 13:05:11'),
(67, 2, '2016-05-29 11:28:02', '2016-05-29 11:28:02'),
(68, 2, '2016-05-29 11:29:44', '2016-05-29 11:29:44'),
(69, 2, '2016-05-29 11:33:21', '2016-05-29 11:33:21'),
(70, 2, '2016-06-12 10:40:00', '2016-06-12 10:40:00'),
(71, 2, '2016-06-12 10:42:49', '2016-06-12 10:42:49'),
(72, 2, '2016-06-12 12:37:46', '2016-06-12 12:37:46'),
(73, 2, '2016-06-12 12:46:28', '2016-06-12 12:46:28'),
(74, 2, '2016-06-12 12:53:44', '2016-06-12 12:53:44'),
(75, 2, '2016-06-13 08:59:23', '2016-06-13 08:59:23'),
(76, 2, '2016-07-04 12:40:10', '2016-07-04 12:40:10'),
(78, 2, '2017-01-19 11:53:48', '2017-01-19 11:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `server_access`
--

CREATE TABLE IF NOT EXISTS `server_access` (
  `id` int(11) NOT NULL,
  `server_ip_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `server_access`
--

INSERT INTO `server_access` (`id`, `server_ip_id`, `type`, `user_name`, `password`) VALUES
(1, 1, 0, 'administrator', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `server_company`
--

CREATE TABLE IF NOT EXISTS `server_company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `server_company`
--

INSERT INTO `server_company` (`id`, `name`) VALUES
(1, 'godaddy');

-- --------------------------------------------------------

--
-- Table structure for table `server_company_server_spec`
--

CREATE TABLE IF NOT EXISTS `server_company_server_spec` (
  `id` int(11) NOT NULL,
  `server_company_id` int(11) NOT NULL,
  `server_spec_id` int(11) NOT NULL,
  `cost` double NOT NULL,
  `period` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_company_server_spec`
--

INSERT INTO `server_company_server_spec` (`id`, `server_company_id`, `server_spec_id`, `cost`, `period`) VALUES
(1, 1, 1, 44, 12),
(2, 1, 1, 34, 3),
(3, 1, 1, 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `server_detail`
--

CREATE TABLE IF NOT EXISTS `server_detail` (
  `id` int(11) NOT NULL,
  `server_spec_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `unique_name` varchar(255) NOT NULL,
  `operating_system` int(11) NOT NULL,
  `control_panel` int(11) NOT NULL,
  `period` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `server_detail`
--

INSERT INTO `server_detail` (`id`, `server_spec_id`, `name`, `company_id`, `location`, `cost`, `unique_name`, `operating_system`, `control_panel`, `period`) VALUES
(2, 1, 'wwwwwwwww', 0, 1, '66', 'rtrt', 2, 2, 0),
(3, 1, 'fasdfa', 0, 0, 'asdf', 'asdf', 0, 0, 0),
(4, 1, 'Aserver', 0, 0, '50', 'fd1-asddd', 0, 0, 0),
(5, 1, 'hdfg', 0, 0, 'dfghgfh', 'hdfgh', 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `server_ip`
--

CREATE TABLE IF NOT EXISTS `server_ip` (
  `id` int(11) NOT NULL,
  `server_detail_id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `default_getway` varchar(20) NOT NULL,
  `mask` varchar(20) NOT NULL,
  `name_server_1` varchar(20) NOT NULL,
  `name_server_2` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  `display` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `server_ip`
--

INSERT INTO `server_ip` (`id`, `server_detail_id`, `ip`, `default_getway`, `mask`, `name_server_1`, `name_server_2`, `type`, `display`) VALUES
(1, 4, '127.0.0.1', '0.0.0.0', '255.255.255.255', '2.2.2.2', '4.4.4.4', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `server_locations`
--

CREATE TABLE IF NOT EXISTS `server_locations` (
  `id` int(11) NOT NULL,
  `server_company_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_locations`
--

INSERT INTO `server_locations` (`id`, `server_company_id`, `location_id`) VALUES
(1, 1, 0),
(2, 1, 1),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `server_spec`
--

CREATE TABLE IF NOT EXISTS `server_spec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hard_disk` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cpu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `port` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ram` varchar(100) CHARACTER SET utf8 NOT NULL,
  `raid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_spec`
--

INSERT INTO `server_spec` (`id`, `name`, `hard_disk`, `cpu`, `port`, `ram`, `raid`) VALUES
(1, 'gold server', '2GB', '7core', '5', '8GB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `type`, `description`) VALUES
(1, 'supporttttt', 1, 'supporttttt asdfasdf'),
(2, 'fffffffff', 2, 'fasdfsadf');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(180, NULL, 'global', NULL, '2017-01-18 10:32:09', '2017-01-18 10:32:09'),
(181, NULL, 'ip', '::1', '2017-01-18 10:32:09', '2017-01-18 10:32:09'),
(182, 2, 'user', NULL, '2017-01-18 10:32:09', '2017-01-18 10:32:09'),
(183, NULL, 'global', NULL, '2017-01-19 11:54:39', '2017-01-19 11:54:39'),
(184, NULL, 'ip', '::1', '2017-01-19 11:54:39', '2017-01-19 11:54:39'),
(185, NULL, 'global', NULL, '2017-02-14 12:42:05', '2017-02-14 12:42:05'),
(186, NULL, 'ip', '::1', '2017-02-14 12:42:05', '2017-02-14 12:42:05'),
(187, 1, 'user', NULL, '2017-02-14 12:42:05', '2017-02-14 12:42:05'),
(188, NULL, 'global', NULL, '2017-02-14 12:47:07', '2017-02-14 12:47:07'),
(189, NULL, 'ip', '::1', '2017-02-14 12:47:07', '2017-02-14 12:47:07'),
(190, 6, 'user', NULL, '2017-02-14 12:47:07', '2017-02-14 12:47:07'),
(191, NULL, 'global', NULL, '2017-02-14 12:49:19', '2017-02-14 12:49:19'),
(192, NULL, 'ip', '::1', '2017-02-14 12:49:19', '2017-02-14 12:49:19'),
(193, 6, 'user', NULL, '2017-02-14 12:49:19', '2017-02-14 12:49:19'),
(194, NULL, 'global', NULL, '2017-02-14 12:49:23', '2017-02-14 12:49:23'),
(195, NULL, 'ip', '::1', '2017-02-14 12:49:23', '2017-02-14 12:49:23'),
(196, NULL, 'global', NULL, '2017-02-14 13:21:48', '2017-02-14 13:21:48'),
(197, NULL, 'ip', '::1', '2017-02-14 13:21:48', '2017-02-14 13:21:48'),
(198, 1, 'user', NULL, '2017-02-14 13:21:48', '2017-02-14 13:21:48'),
(199, NULL, 'global', NULL, '2017-02-14 13:21:58', '2017-02-14 13:21:58'),
(200, NULL, 'ip', '::1', '2017-02-14 13:21:58', '2017-02-14 13:21:58'),
(201, 1, 'user', NULL, '2017-02-14 13:21:58', '2017-02-14 13:21:58'),
(202, NULL, 'global', NULL, '2017-02-14 13:40:10', '2017-02-14 13:40:10'),
(203, NULL, 'ip', '::1', '2017-02-14 13:40:10', '2017-02-14 13:40:10'),
(204, NULL, 'global', NULL, '2017-02-14 13:40:18', '2017-02-14 13:40:18'),
(205, NULL, 'ip', '::1', '2017-02-14 13:40:18', '2017-02-14 13:40:18'),
(206, 6, 'user', NULL, '2017-02-14 13:40:18', '2017-02-14 13:40:18'),
(207, NULL, 'global', NULL, '2017-02-14 13:40:42', '2017-02-14 13:40:42'),
(208, NULL, 'ip', '::1', '2017-02-14 13:40:42', '2017-02-14 13:40:42'),
(209, NULL, 'global', NULL, '2017-02-14 13:41:54', '2017-02-14 13:41:54'),
(210, NULL, 'ip', '::1', '2017-02-14 13:41:54', '2017-02-14 13:41:54'),
(211, 6, 'user', NULL, '2017-02-14 13:41:54', '2017-02-14 13:41:54'),
(212, NULL, 'global', NULL, '2017-02-14 13:44:42', '2017-02-14 13:44:42'),
(213, NULL, 'ip', '::1', '2017-02-14 13:44:42', '2017-02-14 13:44:42'),
(214, 6, 'user', NULL, '2017-02-14 13:44:42', '2017-02-14 13:44:42'),
(215, NULL, 'global', NULL, '2017-02-14 15:14:03', '2017-02-14 15:14:03'),
(216, NULL, 'ip', '127.0.0.1', '2017-02-14 15:14:03', '2017-02-14 15:14:03'),
(217, 1, 'user', NULL, '2017-02-14 15:14:04', '2017-02-14 15:14:04'),
(218, NULL, 'global', NULL, '2017-02-26 12:26:43', '2017-02-26 12:26:43'),
(219, NULL, 'ip', '127.0.0.1', '2017-02-26 12:26:43', '2017-02-26 12:26:43'),
(220, 1, 'user', NULL, '2017-02-26 12:26:43', '2017-02-26 12:26:43'),
(221, NULL, 'global', NULL, '2017-02-26 12:26:52', '2017-02-26 12:26:52'),
(222, NULL, 'ip', '127.0.0.1', '2017-02-26 12:26:52', '2017-02-26 12:26:52'),
(223, 1, 'user', NULL, '2017-02-26 12:26:52', '2017-02-26 12:26:52'),
(224, NULL, 'global', NULL, '2017-02-26 12:27:05', '2017-02-26 12:27:05'),
(225, NULL, 'ip', '127.0.0.1', '2017-02-26 12:27:05', '2017-02-26 12:27:05'),
(226, 1, 'user', NULL, '2017-02-26 12:27:05', '2017-02-26 12:27:05'),
(227, NULL, 'global', NULL, '2017-02-27 09:53:11', '2017-02-27 09:53:11'),
(228, NULL, 'ip', '::1', '2017-02-27 09:53:11', '2017-02-27 09:53:11'),
(229, 1, 'user', NULL, '2017-02-27 09:53:11', '2017-02-27 09:53:11'),
(230, NULL, 'global', NULL, '2017-02-28 22:12:02', '2017-02-28 22:12:02'),
(231, NULL, 'ip', '127.0.0.1', '2017-02-28 22:12:02', '2017-02-28 22:12:02'),
(232, 1, 'user', NULL, '2017-02-28 22:12:03', '2017-02-28 22:12:03'),
(233, NULL, 'global', NULL, '2017-02-28 22:13:11', '2017-02-28 22:13:11'),
(234, NULL, 'ip', '127.0.0.1', '2017-02-28 22:13:12', '2017-02-28 22:13:12'),
(235, 1, 'user', NULL, '2017-02-28 22:13:12', '2017-02-28 22:13:12'),
(236, NULL, 'global', NULL, '2017-02-28 22:13:22', '2017-02-28 22:13:22'),
(237, NULL, 'ip', '127.0.0.1', '2017-02-28 22:13:22', '2017-02-28 22:13:22'),
(238, 1, 'user', NULL, '2017-02-28 22:13:23', '2017-02-28 22:13:23'),
(239, NULL, 'global', NULL, '2017-02-28 22:13:34', '2017-02-28 22:13:34'),
(240, NULL, 'ip', '127.0.0.1', '2017-02-28 22:13:35', '2017-02-28 22:13:35'),
(241, 1, 'user', NULL, '2017-02-28 22:13:35', '2017-02-28 22:13:35'),
(242, NULL, 'global', NULL, '2017-02-28 22:14:17', '2017-02-28 22:14:17'),
(243, NULL, 'ip', '127.0.0.1', '2017-02-28 22:14:17', '2017-02-28 22:14:17'),
(244, 1, 'user', NULL, '2017-02-28 22:14:18', '2017-02-28 22:14:18'),
(245, NULL, 'global', NULL, '2017-02-28 22:14:40', '2017-02-28 22:14:40'),
(246, NULL, 'ip', '127.0.0.1', '2017-02-28 22:14:40', '2017-02-28 22:14:40'),
(247, 1, 'user', NULL, '2017-02-28 22:14:41', '2017-02-28 22:14:41'),
(248, NULL, 'global', NULL, '2017-03-02 10:01:14', '2017-03-02 10:01:14'),
(249, NULL, 'ip', '127.0.0.1', '2017-03-02 10:01:14', '2017-03-02 10:01:14'),
(250, 1, 'user', NULL, '2017-03-02 10:01:14', '2017-03-02 10:01:14'),
(251, NULL, 'global', NULL, '2017-03-02 10:01:16', '2017-03-02 10:01:16'),
(252, NULL, 'ip', '127.0.0.1', '2017-03-02 10:01:16', '2017-03-02 10:01:16'),
(253, 1, 'user', NULL, '2017-03-02 10:01:16', '2017-03-02 10:01:16'),
(254, NULL, 'global', NULL, '2017-03-02 10:01:20', '2017-03-02 10:01:20'),
(255, NULL, 'ip', '127.0.0.1', '2017-03-02 10:01:20', '2017-03-02 10:01:20'),
(256, 1, 'user', NULL, '2017-03-02 10:01:20', '2017-03-02 10:01:20'),
(257, NULL, 'global', NULL, '2017-03-02 10:01:25', '2017-03-02 10:01:25'),
(258, NULL, 'ip', '127.0.0.1', '2017-03-02 10:01:25', '2017-03-02 10:01:25'),
(259, 1, 'user', NULL, '2017-03-02 10:01:25', '2017-03-02 10:01:25'),
(260, NULL, 'global', NULL, '2017-03-02 10:01:33', '2017-03-02 10:01:33'),
(261, NULL, 'ip', '127.0.0.1', '2017-03-02 10:01:33', '2017-03-02 10:01:33'),
(262, 1, 'user', NULL, '2017-03-02 10:01:33', '2017-03-02 10:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `open_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `close_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `contact_id`, `contract_id`, `name`, `type`, `status`, `description`, `create_time`, `open_time`, `close_time`) VALUES
(1, 1, 1, 'error', 1, 2, 'sdfgdsfg', '2017-03-07 14:23:49', '2012-01-01 00:00:00', '2012-01-10 00:00:00'),
(2, 1, 1, 'bug', 2, 2, '0', '2011-02-03 00:00:00', '2010-02-03 00:00:00', '2011-02-03 00:00:00'),
(3, 1, 0, 'sdfg', 1, 1, '0', '2017-02-27 14:57:28', '2017-02-15 00:00:00', '2017-02-06 00:00:00'),
(4, 1, 1, 'fasdf', 2, 2, '0', '2017-02-27 15:07:08', '2017-02-27 00:00:00', '2017-02-27 00:00:00'),
(5, 1, 0, 'fsdfsdf', 0, 0, 'sdfsdf', '2017-02-27 15:12:25', '2017-02-27 00:00:00', '2017-02-27 00:00:00'),
(6, 1, 0, 'sdfsdf', 0, 0, 'sdfgdsfg', '2017-03-08 09:26:02', '2017-03-08 00:00:00', '2017-03-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_reply`
--

CREATE TABLE IF NOT EXISTS `ticket_reply` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_reply`
--

INSERT INTO `ticket_reply` (`id`, `ticket_id`, `contact_id`, `description`, `create_time`) VALUES
(1, 1, 1, 'sdfasdf', '0000-00-00 00:00:00'),
(2, 1, 1, 'ggggggggggg44g', '2017-02-27 12:48:24'),
(6, 1, 0, 'tgtgtgtffsdfgtgt', '2017-02-27 12:49:37'),
(7, 1, 0, 'qqqqqqqqqqqqq', '2017-02-27 12:50:41'),
(8, 1, 1, 'hdfgh', '2017-02-27 12:52:47'),
(9, 1, 1, 'uuuuuuuuuuuuuu', '2017-02-27 12:52:53'),
(10, 1, 1, 'sssssssss', '2017-03-06 08:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'admin@mqplanet.com', '$2y$10$CZfuylk2ar63d/QHTH7uweb75ujoi7GfB9rSS9/xLaEwfVOZKOnHS', NULL, '2017-03-09 09:21:53', 'admin', NULL, NULL, '0000-00-00 00:00:00', '2017-03-09 09:21:53'),
(2, 'gfy@fgg.gff', '$2y$10$v22nTxiPI8o9hEfU9jiojO0lHR4uhr.R1bJK8TKnJGCUBVZY5L.Dy', NULL, NULL, 'kjoi', '', NULL, '2017-02-14 11:47:51', '2017-02-14 11:47:51'),
(6, 'taylor3@gmail.com', '$2y$10$HGhBQtcIoEn8A4FHmRcVYevDBhrQ1CwvOnz.B5jbPQT3EzflZ6HJS', NULL, '2017-02-14 13:44:47', '222222', '', NULL, '2017-02-14 12:46:01', '2017-02-14 13:44:47'),
(7, 'rr@rr.rr', '$2y$10$5jUYL2Iv.9OK7h14AlzJpOU/iLYPSOQKgdvM8IbbshnhAmg7I.UQ6', NULL, '2017-02-14 13:50:38', 'sdfg', '', NULL, '2017-02-14 13:50:24', '2017-02-14 13:50:38'),
(8, 'ff@ff.ff', '$2y$10$sV.GoXPb0Al3a0w74cpVcOtEsVdg23IlEDEqAmfCFgs41RWQGbflS', NULL, '2017-02-14 14:04:01', 'dd', '', NULL, '2017-02-14 14:02:24', '2017-02-14 14:04:01'),
(9, 'yy@yy.yy', '$2y$10$iqzLSFWdpW1FSbKi3KIlx.qHyvEBv3dq.bGZIt4i2neBLgc1V4vYO', NULL, '2017-02-27 09:50:25', 'yy', '', NULL, '2017-02-14 14:14:44', '2017-02-27 09:50:25'),
(10, 'taylor@gmail.com', '$2y$10$37nQpwz6JKLDhufCwiTqYeNMKqcjNXq2J5FaR9ebLWT1E2vCNMIYa', NULL, NULL, 'taylor', '', NULL, '2017-02-27 09:56:45', '2017-02-27 09:56:45'),
(11, 'galya@mqplanet.com', '$2y$10$WYlhQV0Qt4BkeUHNthTlFuPx.WnSZT6NyBkabv9x0L4PKlTrEKl0u', NULL, NULL, 'Mohammad Galya', '', NULL, '2017-03-02 10:14:57', '2017-03-02 10:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `versions`
--

CREATE TABLE IF NOT EXISTS `versions` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `version` varchar(100) NOT NULL,
  `manual` longtext NOT NULL,
  `article` text NOT NULL,
  `links` text NOT NULL,
  `release_notes` text NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `versions`
--

INSERT INTO `versions` (`id`, `products_id`, `version`, `manual`, `article`, `links`, `release_notes`, `publish_date`) VALUES
(1, 2, '1', '<p>A</p>\r\n', '<p>A</p>\r\n', 'A', '<p>A</p>\r\n', '2017-03-02'),
(2, 1, 'asdf', '3', '7', 'fsdf', '0', '2017-03-07'),
(3, 3, 'fffffffffffffffff', '19', '16', '11', '0', '2017-03-08'),
(4, 8, 'ggdfs', '19', '16', '14', '0', '2017-03-08'),
(5, 2, '2', '0', '0', '3', '0', '2017-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `web_hosting_plans`
--

CREATE TABLE IF NOT EXISTS `web_hosting_plans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `web_space` varchar(20) NOT NULL,
  `domains_number` int(11) NOT NULL,
  `emails` int(11) NOT NULL,
  `traffic` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_hosting_plans`
--

INSERT INTO `web_hosting_plans` (`id`, `name`, `web_space`, `domains_number`, `emails`, `traffic`) VALUES
(1, 'bbaba', 'asdf', 44, 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts_documents`
--
ALTER TABLE `contracts_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts_renewal`
--
ALTER TABLE `contracts_renewal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts_renewal_invoice`
--
ALTER TABLE `contracts_renewal_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logtime`
--
ALTER TABLE `logtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_list`
--
ALTER TABLE `products_list`
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
-- Indexes for table `server_access`
--
ALTER TABLE `server_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_company`
--
ALTER TABLE `server_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_company_server_spec`
--
ALTER TABLE `server_company_server_spec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_detail`
--
ALTER TABLE `server_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_ip`
--
ALTER TABLE `server_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_locations`
--
ALTER TABLE `server_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_spec`
--
ALTER TABLE `server_spec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `versions`
--
ALTER TABLE `versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_hosting_plans`
--
ALTER TABLE `web_hosting_plans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `contracts_documents`
--
ALTER TABLE `contracts_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contracts_renewal`
--
ALTER TABLE `contracts_renewal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contracts_renewal_invoice`
--
ALTER TABLE `contracts_renewal_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `logtime`
--
ALTER TABLE `logtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products_list`
--
ALTER TABLE `products_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `server_access`
--
ALTER TABLE `server_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `server_company`
--
ALTER TABLE `server_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `server_company_server_spec`
--
ALTER TABLE `server_company_server_spec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `server_detail`
--
ALTER TABLE `server_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `server_ip`
--
ALTER TABLE `server_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `server_locations`
--
ALTER TABLE `server_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `server_spec`
--
ALTER TABLE `server_spec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `versions`
--
ALTER TABLE `versions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `web_hosting_plans`
--
ALTER TABLE `web_hosting_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
