
CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--|||

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
(158, 0, '5LY97it1dMGv6K9JSh6VbObJgnNUFdQX', 1, '2017-02-13 10:42:17', '2017-02-13 10:42:17', '2017-02-13 10:42:17');

--|||
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--|||

INSERT INTO `company` (`id`, `name`, `email`, `phone`, `website`, `address`, `country`, `city`, `zipcode`, `status`) VALUES
(1, 'ggggg', 'sdfg@dfg.gf', '345345', 'gsdfg', 'sdfg', 'gsdfg', 'sdfg', 'sdfgsfdg', '3');

--|||

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `section` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--|||

INSERT INTO `contacts` (`id`, `company_id`, `users_id`, `phone`, `section`, `description`, `status`, `permissions`) VALUES
(1, 1, 0, 'sdfg', '', 'sdfg', 1, 'gdsfg'),
(2, 1, 0, 'gdsf', '', 'dsfg', 0, 'sdfg');

--|||

CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `purchasing_date` datetime NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--|||

INSERT INTO `contracts` (`id`, `company_id`, `products_id`, `purchasing_date`, `description`) VALUES
(1, 1, 1, '2017-02-13 13:16:38', 'safasdf');

--|||

CREATE TABLE IF NOT EXISTS `contracts_documents` (
  `id` int(11) NOT NULL,
  `contracts_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `links` text NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--|||

CREATE TABLE IF NOT EXISTS `contracts_renewal` (
  `id` int(11) NOT NULL,
  `contracts_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--|||

INSERT INTO `contracts_renewal` (`id`, `contracts_id`, `from_date`, `to_date`, `description`, `price`) VALUES
(1, 1, '2017-02-13 13:22:16', '2018-02-13 13:22:16', 'gsdf', 0);

--|||

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL,
  `contacts_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `module` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `optout` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--|||

CREATE TABLE IF NOT EXISTS `licenses` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `license` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--|||

INSERT INTO `licenses` (`id`, `company_id`, `license`, `type`, `status`) VALUES
(1, 1, 'fgdhdgh', 'fgh', 2);

--|||

CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--|||

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 0, 'NoSnJ6T9JBBROclYnisT3oio32HOidJo', '2017-02-13 10:42:17', '2017-02-13 10:42:17');

--|||

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `products_list_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--|||
INSERT INTO `products` (`id`, `products_list_id`, `name`, `description`) VALUES
(1, 1, 'ffffffff', 'sssssssss'),
(2, 1, 'fsdf', 'asfdasdf');

--|||

CREATE TABLE IF NOT EXISTS `products_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--|||

INSERT INTO `products_list` (`id`, `name`, `type`, `description`) VALUES
(1, 'gsdfg', 'gsdf', 'sdfg');

--|||

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--|||
INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{"admin":true}', '2016-03-28 13:25:48', '2016-03-28 13:25:48'),
(2, 'client', 'Client', NULL, '2016-03-28 13:25:48', '2016-03-28 13:25:48');

--|||

CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--|||

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

--|||

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--|||

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
(184, NULL, 'ip', '::1', '2017-01-19 11:54:39', '2017-01-19 11:54:39');

--|||

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `account_manager` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--|||

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `avatar`, `account_manager`, `created_at`, `updated_at`) VALUES
(0, 'admin@mqplanet.com', 'admin', NULL, '2017-02-13 10:42:17', NULL, NULL, NULL, 0, '0000-00-00 00:00:00', '2017-02-13 10:42:17');

--|||

CREATE TABLE IF NOT EXISTS `versions` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `version` varchar(100) NOT NULL,
  `manual` longtext NOT NULL,
  `articale` text NOT NULL,
  `links` text NOT NULL,
  `release_notes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--|||

INSERT INTO `versions` (`id`, `products_id`, `version`, `manual`, `articale`, `links`, `release_notes`) VALUES
(1, 1, 'sdfs', 'fsdf', 'gsdfg', 'sdfg', 'gfsd');

--|||
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--|||
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--|||
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);
--|||
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);
--|||
ALTER TABLE `contracts_documents`
  ADD PRIMARY KEY (`id`);

--|||
ALTER TABLE `contracts_renewal`
  ADD PRIMARY KEY (`id`);
--|||
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);
--|||
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`);

--|||
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--|||
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--|||
ALTER TABLE `products_list`
  ADD PRIMARY KEY (`id`);

--|||
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--|||
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--|||
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);
--|||
ALTER TABLE `versions`
  ADD PRIMARY KEY (`id`);

--|||
ALTER TABLE `activations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=159;
--|||
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--|||
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--|||
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--|||
ALTER TABLE `contracts_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--|||
ALTER TABLE `contracts_renewal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--|||
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--|||
ALTER TABLE `licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--|||
ALTER TABLE `persistences`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--|||
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--|||
ALTER TABLE `products_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--|||
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--|||
ALTER TABLE `throttle`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=185;
--|||
ALTER TABLE `versions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
