-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 fév. 2024 à 07:57
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agency`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id_admin`, `name`, `username`, `email`, `phone`, `address`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slim zraier', 'admin', 'slim.zraier@gmail', '51493554', 'Sidi Thabet', 'slim zraier20240225.jpg', 'active', NULL, '2024-02-25 10:37:01');

-- --------------------------------------------------------

--
-- Structure de la table `agencies`
--

CREATE TABLE `agencies` (
  `id_agence` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agencies`
--

INSERT INTO `agencies` (`id_agence`, `name`, `username`, `email`, `phone`, `address`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'traveltodo', 'traveltodo', 'traveltodo@gg.com', '5553', 'ariena', 'traveltodo20240204.jpg', 'active', '2024-02-05 15:00:53', '2024-02-25 10:37:23'),
(2, 'corolla', 'corina', 'corina@g.vv', '96969696', 'tunis', 'corina20240206.jpg', 'active', '2024-02-06 10:21:49', '2024-02-07 14:16:33'),
(3, 'booking', 'booking', 'booking@gg.gg', '55555', 'tunis', NULL, 'inactive', '2024-02-06 16:50:07', '2024-02-06 18:16:47'),
(4, 'travel', 'travel', 'travel@g.g', '555', 'ariena', 'travel20240209.jpg', 'active', '2024-02-09 14:14:24', '2024-02-09 14:16:33'),
(5, 'molka', 'molka', 'molka@g.g', '555555', 'lafayet', 'molka20240213.jpg', 'active', '2024-02-13 16:36:59', '2024-02-13 16:37:23'),
(6, 'tripi agance', 'tripi', 'trip@gg.gg', '+21651493554', '14 afh sidi thabet', 'tripi agance20240221.jpg', 'inactive', '2024-02-21 17:31:09', '2024-02-21 17:31:30');

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan', NULL, NULL),
(2, 'AX', 'Aland Islands', NULL, NULL),
(3, 'AL', 'Albania', NULL, NULL),
(4, 'DZ', 'Algeria', NULL, NULL),
(5, 'AS', 'American Samoa', NULL, NULL),
(6, 'AD', 'Andorra', NULL, NULL),
(7, 'AO', 'Angola', NULL, NULL),
(8, 'AI', 'Anguilla', NULL, NULL),
(9, 'AQ', 'Antarctica', NULL, NULL),
(10, 'AG', 'Antigua and Barbuda', NULL, NULL),
(11, 'AR', 'Argentina', NULL, NULL),
(12, 'AM', 'Armenia', NULL, NULL),
(13, 'AW', 'Aruba', NULL, NULL),
(14, 'AU', 'Australia', NULL, NULL),
(15, 'AT', 'Austria', NULL, NULL),
(16, 'AZ', 'Azerbaijan', NULL, NULL),
(17, 'BS', 'Bahamas', NULL, NULL),
(18, 'BH', 'Bahrain', NULL, NULL),
(19, 'BD', 'Bangladesh', NULL, NULL),
(20, 'BB', 'Barbados', NULL, NULL),
(21, 'BY', 'Belarus', NULL, NULL),
(22, 'BE', 'Belgium', NULL, NULL),
(23, 'BZ', 'Belize', NULL, NULL),
(24, 'BJ', 'Benin', NULL, NULL),
(25, 'BM', 'Bermuda', NULL, NULL),
(26, 'BT', 'Bhutan', NULL, NULL),
(27, 'BO', 'Bolivia', NULL, NULL),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba', NULL, NULL),
(29, 'BA', 'Bosnia and Herzegovina', NULL, NULL),
(30, 'BW', 'Botswana', NULL, NULL),
(31, 'BV', 'Bouvet Island', NULL, NULL),
(32, 'BR', 'Brazil', NULL, NULL),
(33, 'IO', 'British Indian Ocean Territory', NULL, NULL),
(34, 'BN', 'Brunei Darussalam', NULL, NULL),
(35, 'BG', 'Bulgaria', NULL, NULL),
(36, 'BF', 'Burkina Faso', NULL, NULL),
(37, 'BI', 'Burundi', NULL, NULL),
(38, 'KH', 'Cambodia', NULL, NULL),
(39, 'CM', 'Cameroon', NULL, NULL),
(40, 'CA', 'Canada', NULL, NULL),
(41, 'CV', 'Cape Verde', NULL, NULL),
(42, 'KY', 'Cayman Islands', NULL, NULL),
(43, 'CF', 'Central African Republic', NULL, NULL),
(44, 'TD', 'Chad', NULL, NULL),
(45, 'CL', 'Chile', NULL, NULL),
(46, 'CN', 'China', NULL, NULL),
(47, 'CX', 'Christmas Island', NULL, NULL),
(48, 'CC', 'Cocos (Keeling) Islands', NULL, NULL),
(49, 'CO', 'Colombia', NULL, NULL),
(50, 'KM', 'Comoros', NULL, NULL),
(51, 'CG', 'Congo', NULL, NULL),
(52, 'CD', 'Congo, Democratic Republic of the Congo', NULL, NULL),
(53, 'CK', 'Cook Islands', NULL, NULL),
(54, 'CR', 'Costa Rica', NULL, NULL),
(55, 'CI', 'Cote D\'Ivoire', NULL, NULL),
(56, 'HR', 'Croatia', NULL, NULL),
(57, 'CU', 'Cuba', NULL, NULL),
(58, 'CW', 'Curacao', NULL, NULL),
(59, 'CY', 'Cyprus', NULL, NULL),
(60, 'CZ', 'Czech Republic', NULL, NULL),
(61, 'DK', 'Denmark', NULL, NULL),
(62, 'DJ', 'Djibouti', NULL, NULL),
(63, 'DM', 'Dominica', NULL, NULL),
(64, 'DO', 'Dominican Republic', NULL, NULL),
(65, 'EC', 'Ecuador', NULL, NULL),
(66, 'EG', 'Egypt', NULL, NULL),
(67, 'SV', 'El Salvador', NULL, NULL),
(68, 'GQ', 'Equatorial Guinea', NULL, NULL),
(69, 'ER', 'Eritrea', NULL, NULL),
(70, 'EE', 'Estonia', NULL, NULL),
(71, 'ET', 'Ethiopia', NULL, NULL),
(72, 'FK', 'Falkland Islands (Malvinas)', NULL, NULL),
(73, 'FO', 'Faroe Islands', NULL, NULL),
(74, 'FJ', 'Fiji', NULL, NULL),
(75, 'FI', 'Finland', NULL, NULL),
(76, 'FR', 'France', NULL, NULL),
(77, 'GF', 'French Guiana', NULL, NULL),
(78, 'PF', 'French Polynesia', NULL, NULL),
(79, 'TF', 'French Southern Territories', NULL, NULL),
(80, 'GA', 'Gabon', NULL, NULL),
(81, 'GM', 'Gambia', NULL, NULL),
(82, 'GE', 'Georgia', NULL, NULL),
(83, 'DE', 'Germany', NULL, NULL),
(84, 'GH', 'Ghana', NULL, NULL),
(85, 'GI', 'Gibraltar', NULL, NULL),
(86, 'GR', 'Greece', NULL, NULL),
(87, 'GL', 'Greenland', NULL, NULL),
(88, 'GD', 'Grenada', NULL, NULL),
(89, 'GP', 'Guadeloupe', NULL, NULL),
(90, 'GU', 'Guam', NULL, NULL),
(91, 'GT', 'Guatemala', NULL, NULL),
(92, 'GG', 'Guernsey', NULL, NULL),
(93, 'GN', 'Guinea', NULL, NULL),
(94, 'GW', 'Guinea-Bissau', NULL, NULL),
(95, 'GY', 'Guyana', NULL, NULL),
(96, 'HT', 'Haiti', NULL, NULL),
(97, 'HM', 'Heard Island and Mcdonald Islands', NULL, NULL),
(98, 'VA', 'Holy See (Vatican City State)', NULL, NULL),
(99, 'HN', 'Honduras', NULL, NULL),
(100, 'HK', 'Hong Kong', NULL, NULL),
(101, 'HU', 'Hungary', NULL, NULL),
(102, 'IS', 'Iceland', NULL, NULL),
(103, 'IN', 'India', NULL, NULL),
(104, 'ID', 'Indonesia', NULL, NULL),
(105, 'IR', 'Iran, Islamic Republic of', NULL, NULL),
(106, 'IQ', 'Iraq', NULL, NULL),
(107, 'IE', 'Ireland', NULL, NULL),
(108, 'IM', 'Isle of Man', NULL, NULL),
(109, 'IL', 'Israel', NULL, NULL),
(110, 'IT', 'Italy', NULL, NULL),
(111, 'JM', 'Jamaica', NULL, NULL),
(112, 'JP', 'Japan', NULL, NULL),
(113, 'JE', 'Jersey', NULL, NULL),
(114, 'JO', 'Jordan', NULL, NULL),
(115, 'KZ', 'Kazakhstan', NULL, NULL),
(116, 'KE', 'Kenya', NULL, NULL),
(117, 'KI', 'Kiribati', NULL, NULL),
(118, 'KP', 'Korea, Democratic People\'s Republic of', NULL, NULL),
(119, 'KR', 'Korea, Republic of', NULL, NULL),
(120, 'XK', 'Kosovo', NULL, NULL),
(121, 'KW', 'Kuwait', NULL, NULL),
(122, 'KG', 'Kyrgyzstan', NULL, NULL),
(123, 'LA', 'Lao People\'s Democratic Republic', NULL, NULL),
(124, 'LV', 'Latvia', NULL, NULL),
(125, 'LB', 'Lebanon', NULL, NULL),
(126, 'LS', 'Lesotho', NULL, NULL),
(127, 'LR', 'Liberia', NULL, NULL),
(128, 'LY', 'Libyan Arab Jamahiriya', NULL, NULL),
(129, 'LI', 'Liechtenstein', NULL, NULL),
(130, 'LT', 'Lithuania', NULL, NULL),
(131, 'LU', 'Luxembourg', NULL, NULL),
(132, 'MO', 'Macao', NULL, NULL),
(133, 'MK', 'Macedonia, the Former Yugoslav Republic of', NULL, NULL),
(134, 'MG', 'Madagascar', NULL, NULL),
(135, 'MW', 'Malawi', NULL, NULL),
(136, 'MY', 'Malaysia', NULL, NULL),
(137, 'MV', 'Maldives', NULL, NULL),
(138, 'ML', 'Mali', NULL, NULL),
(139, 'MT', 'Malta', NULL, NULL),
(140, 'MH', 'Marshall Islands', NULL, NULL),
(141, 'MQ', 'Martinique', NULL, NULL),
(142, 'MR', 'Mauritania', NULL, NULL),
(143, 'MU', 'Mauritius', NULL, NULL),
(144, 'YT', 'Mayotte', NULL, NULL),
(145, 'MX', 'Mexico', NULL, NULL),
(146, 'FM', 'Micronesia, Federated States of', NULL, NULL),
(147, 'MD', 'Moldova, Republic of', NULL, NULL),
(148, 'MC', 'Monaco', NULL, NULL),
(149, 'MN', 'Mongolia', NULL, NULL),
(150, 'ME', 'Montenegro', NULL, NULL),
(151, 'MS', 'Montserrat', NULL, NULL),
(152, 'MA', 'Morocco', NULL, NULL),
(153, 'MZ', 'Mozambique', NULL, NULL),
(154, 'MM', 'Myanmar', NULL, NULL),
(155, 'NA', 'Namibia', NULL, NULL),
(156, 'NR', 'Nauru', NULL, NULL),
(157, 'NP', 'Nepal', NULL, NULL),
(158, 'NL', 'Netherlands', NULL, NULL),
(159, 'AN', 'Netherlands Antilles', NULL, NULL),
(160, 'NC', 'New Caledonia', NULL, NULL),
(161, 'NZ', 'New Zealand', NULL, NULL),
(162, 'NI', 'Nicaragua', NULL, NULL),
(163, 'NE', 'Niger', NULL, NULL),
(164, 'NG', 'Nigeria', NULL, NULL),
(165, 'NU', 'Niue', NULL, NULL),
(166, 'NF', 'Norfolk Island', NULL, NULL),
(167, 'MP', 'Northern Mariana Islands', NULL, NULL),
(168, 'NO', 'Norway', NULL, NULL),
(169, 'OM', 'Oman', NULL, NULL),
(170, 'PK', 'Pakistan', NULL, NULL),
(171, 'PW', 'Palau', NULL, NULL),
(172, 'PS', 'Palestinian Territory, Occupied', NULL, NULL),
(173, 'PA', 'Panama', NULL, NULL),
(174, 'PG', 'Papua New Guinea', NULL, NULL),
(175, 'PY', 'Paraguay', NULL, NULL),
(176, 'PE', 'Peru', NULL, NULL),
(177, 'PH', 'Philippines', NULL, NULL),
(178, 'PN', 'Pitcairn', NULL, NULL),
(179, 'PL', 'Poland', NULL, NULL),
(180, 'PT', 'Portugal', NULL, NULL),
(181, 'PR', 'Puerto Rico', NULL, NULL),
(182, 'QA', 'Qatar', NULL, NULL),
(183, 'RE', 'Reunion', NULL, NULL),
(184, 'RO', 'Romania', NULL, NULL),
(185, 'RU', 'Russian Federation', NULL, NULL),
(186, 'RW', 'Rwanda', NULL, NULL),
(187, 'BL', 'Saint Barthelemy', NULL, NULL),
(188, 'SH', 'Saint Helena', NULL, NULL),
(189, 'KN', 'Saint Kitts and Nevis', NULL, NULL),
(190, 'LC', 'Saint Lucia', NULL, NULL),
(191, 'MF', 'Saint Martin', NULL, NULL),
(192, 'PM', 'Saint Pierre and Miquelon', NULL, NULL),
(193, 'VC', 'Saint Vincent and the Grenadines', NULL, NULL),
(194, 'WS', 'Samoa', NULL, NULL),
(195, 'SM', 'San Marino', NULL, NULL),
(196, 'ST', 'Sao Tome and Principe', NULL, NULL),
(197, 'SA', 'Saudi Arabia', NULL, NULL),
(198, 'SN', 'Senegal', NULL, NULL),
(199, 'RS', 'Serbia', NULL, NULL),
(200, 'CS', 'Serbia and Montenegro', NULL, NULL),
(201, 'SC', 'Seychelles', NULL, NULL),
(202, 'SL', 'Sierra Leone', NULL, NULL),
(203, 'SG', 'Singapore', NULL, NULL),
(204, 'SX', 'Sint Maarten', NULL, NULL),
(205, 'SK', 'Slovakia', NULL, NULL),
(206, 'SI', 'Slovenia', NULL, NULL),
(207, 'SB', 'Solomon Islands', NULL, NULL),
(208, 'SO', 'Somalia', NULL, NULL),
(209, 'ZA', 'South Africa', NULL, NULL),
(210, 'GS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
(211, 'SS', 'South Sudan', NULL, NULL),
(212, 'ES', 'Spain', NULL, NULL),
(213, 'LK', 'Sri Lanka', NULL, NULL),
(214, 'SD', 'Sudan', NULL, NULL),
(215, 'SR', 'Suriname', NULL, NULL),
(216, 'SJ', 'Svalbard and Jan Mayen', NULL, NULL),
(217, 'SZ', 'Swaziland', NULL, NULL),
(218, 'SE', 'Sweden', NULL, NULL),
(219, 'CH', 'Switzerland', NULL, NULL),
(220, 'SY', 'Syrian Arab Republic', NULL, NULL),
(221, 'TW', 'Taiwan, Province of China', NULL, NULL),
(222, 'TJ', 'Tajikistan', NULL, NULL),
(223, 'TZ', 'Tanzania, United Republic of', NULL, NULL),
(224, 'TH', 'Thailand', NULL, NULL),
(225, 'TL', 'Timor-Leste', NULL, NULL),
(226, 'TG', 'Togo', NULL, NULL),
(227, 'TK', 'Tokelau', NULL, NULL),
(228, 'TO', 'Tonga', NULL, NULL),
(229, 'TT', 'Trinidad and Tobago', NULL, NULL),
(230, 'TN', 'Tunisia', NULL, NULL),
(231, 'TR', 'Turkey', NULL, NULL),
(232, 'TM', 'Turkmenistan', NULL, NULL),
(233, 'TC', 'Turks and Caicos Islands', NULL, NULL),
(234, 'TV', 'Tuvalu', NULL, NULL),
(235, 'UG', 'Uganda', NULL, NULL),
(236, 'UA', 'Ukraine', NULL, NULL),
(237, 'AE', 'United Arab Emirates', NULL, NULL),
(238, 'GB', 'United Kingdom', NULL, NULL),
(239, 'US', 'United States', NULL, NULL),
(240, 'UM', 'United States Minor Outlying Islands', NULL, NULL),
(241, 'UY', 'Uruguay', NULL, NULL),
(242, 'UZ', 'Uzbekistan', NULL, NULL),
(243, 'VU', 'Vanuatu', NULL, NULL),
(244, 'VE', 'Venezuela', NULL, NULL),
(245, 'VN', 'Viet Nam', NULL, NULL),
(246, 'VG', 'Virgin Islands, British', NULL, NULL),
(247, 'VI', 'Virgin Islands, U.s.', NULL, NULL),
(248, 'WF', 'Wallis and Futuna', NULL, NULL),
(249, 'EH', 'Western Sahara', NULL, NULL),
(250, 'YE', 'Yemen', NULL, NULL),
(251, 'ZM', 'Zambia', NULL, NULL),
(252, 'ZW', 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `domaines`
--

CREATE TABLE `domaines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domaine_activity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domaines`
--

INSERT INTO `domaines` (`id`, `domaine_activity`, `created_at`, `updated_at`) VALUES
(1, 'optio', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(2, 'dolor', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(3, 'sint', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(4, 'repudiandae', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(5, 'enim', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(6, 'marketing', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `id_emp` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_ent` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`id_emp`, `name`, `username`, `email`, `phone`, `address`, `photo`, `id_ent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'farid', 'farid', 'farid@gg.vm', '9955696', 'lac 2', 'farid20240207.jpg', 1, 'active', '2024-02-07 15:04:53', '2024-02-07 15:12:41'),
(2, 'hello', 'arena', 'jnknk@bj', '45563156', NULL, 'hello20240207.jpg', 2, 'inactive', '2024-02-07 19:03:00', '2024-02-07 19:03:32'),
(3, 'zied', 'zied', 'zied1@d.d', '5555', 'rades', NULL, 3, 'active', '2024-02-09 14:18:35', '2024-02-09 14:18:35');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id_ent` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_dom` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id_ent`, `name`, `username`, `email`, `phone`, `address`, `photo`, `id_dom`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sofrecom', 'doni', 'sofrecom@gmail.com', '+21622659863', 'lac 1', 'sofrecom20240207.jpg', 3, 'active', '2024-02-05 14:57:15', '2024-02-07 14:44:26'),
(2, 'QJIS', 'QJIS', 'qjis@hh.hh', '696365', 'aouina', 'QJIS20240207.jpg', 2, 'active', '2024-02-06 09:18:24', '2024-02-07 14:45:54'),
(3, 'tunisie maps', 'maps', 'tunismaps@gg.gg', '55555', 'tunis', NULL, 4, 'active', '2024-02-09 14:17:50', '2024-02-09 14:17:50'),
(4, 'everience', 'everience', 'everience.kkk@f.f', '5555', 'kkkkkkk', 'everience20240213.jpg', 6, 'active', '2024-02-13 16:42:39', '2024-02-13 16:42:39');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_voy` varchar(255) NOT NULL,
  `avis` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_emp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matchmakings`
--

CREATE TABLE `matchmakings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_emp` varchar(255) NOT NULL,
  `id_agence` varchar(255) NOT NULL,
  `ref_voy_user` varchar(255) NOT NULL,
  `ref_voy_agence` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_26_084240_create_domaines_table', 1),
(6, '2024_01_26_084241_create_entreprises_table', 1),
(7, '2024_01_26_084251_create_employees_table', 1),
(8, '2024_01_26_084302_create_agencies_table', 1),
(9, '2024_01_26_084330_create_voy_users_table', 1),
(10, '2024_01_26_084337_create_voy_agencies_table', 1),
(11, '2024_01_29_150857_create_feedback_table', 1),
(12, '2024_01_29_151616_create_matchmakings_table', 1),
(13, '2024_01_31_114703_create_admins_table', 1),
(15, '2024_02_27_213956_create_countries_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('entreprise','employee','agence','admin') NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$MYFro9iGHBmv/ITjFlARM.TISn9d55cDFC/UIKP5LzPLQCBsGti0O', 'admin', 'active', NULL, NULL, '2024-02-09 14:19:33'),
(2, 'doni', '$2y$12$EINCq0BazYSFGyOh9bbpUOQmNl/1rYuAxg55usgrmxFwlFAk/4wre', 'entreprise', 'active', NULL, '2024-02-05 14:57:16', '2024-02-05 14:57:16'),
(3, 'traveltodo', '$2y$12$CGxu9J8eiHPQr593o3WjNeBRuP2gJPcbIC3Q4Mw6Bfu0nK9jdu5zu', 'agence', 'active', NULL, '2024-02-05 15:00:53', '2024-02-05 15:00:53'),
(4, 'QJIS', '$2y$12$itD0EcVVIdYMk37m3H2FU.EIUJzqF9jCIw3ayWOXGr2q0W9J0ilKi', 'entreprise', 'active', NULL, '2024-02-06 09:18:24', '2024-02-06 09:18:24'),
(5, 'corina', '$2y$12$asdmQ6D7ahfZwig0.eMKyeVqDgzcVrU5.tjh85M2qNi2q8MtMV67a', 'agence', 'active', NULL, '2024-02-06 10:21:50', '2024-02-06 10:21:50'),
(6, 'booking', '111', 'agence', 'active', NULL, NULL, NULL),
(7, 'farid', '$2y$12$70CSatEDzjDbV7Lr7g5pt.M4WydLWWdDw6zeOgPCtW5/jx69yohhS', 'employee', 'active', NULL, '2024-02-07 15:04:53', '2024-02-07 15:04:53'),
(8, 'arena', '$2y$12$zfwy8LIxbZfGj2/ZQkNTuOY4xuBqLZJ58n2/TFVAxSZF8a0sF/1em', 'employee', 'active', NULL, '2024-02-07 19:03:01', '2024-02-07 19:03:01'),
(9, 'travel', '$2y$12$8k8/1IZTFNXH1eUqs/NVxut6kTqf0j4iAxhgk08NXDmwZGK4gTuRm', 'agence', 'active', NULL, '2024-02-09 14:14:25', '2024-02-09 14:14:25'),
(10, 'maps', '$2y$12$D.Kv9EssjeDd0TAk/mVJz.bb8htOx8ZKxMC5U0kAOHJ8Fxt1sP9O2', 'entreprise', 'active', NULL, '2024-02-09 14:17:51', '2024-02-09 14:17:51'),
(11, 'zied', '$2y$12$fvlDicqvQYpdIaSVAb3L0.QjHoa8NgyE1cl.HbIxrYSIaa79y1pt.', 'employee', 'active', NULL, '2024-02-09 14:18:36', '2024-02-09 14:18:36'),
(12, 'molka', '$2y$12$q7PqzOhk42mYSMCwGFUCD.aWS.vclJo0GDAWDOgwJU4LNRYBZIQnq', 'agence', 'active', NULL, '2024-02-13 16:37:00', '2024-02-13 16:37:00'),
(13, 'everience', '$2y$12$Uua/wYjNBgS65UDQoDbUTusVdCvAiFyRSiASHcRXMmwsObdCnM2JK', 'entreprise', 'active', NULL, '2024-02-13 16:42:40', '2024-02-13 16:42:40'),
(14, 'tripi', '$2y$12$FHINPfpdRiTovYKK1ftmSef/W89a9kEOqmXmXtEcMNvL1ZvSura3O', 'agence', 'active', NULL, '2024-02-21 17:31:09', '2024-02-21 17:31:09');

-- --------------------------------------------------------

--
-- Structure de la table `voy_agencies`
--

CREATE TABLE `voy_agencies` (
  `ref_voy_agnce` bigint(20) UNSIGNED NOT NULL,
  `pays` varchar(2) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `duree` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_agence` bigint(20) UNSIGNED NOT NULL,
  `status` enum('done','arrive') NOT NULL DEFAULT 'arrive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `voy_agencies`
--

INSERT INTO `voy_agencies` (`ref_voy_agnce`, `pays`, `programme`, `date`, `duree`, `image`, `id_agence`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IT', 'salut italy', '2024-02-27', '10', NULL, 1, 'arrive', '2024-02-27 12:46:31', '2024-02-27 12:46:31'),
(2, 'AR', 'qsdfghjkl', '2024-02-29', '28', NULL, 1, 'arrive', '2024-02-27 12:53:56', '2024-02-27 12:53:56'),
(3, 'AF', ';lkj', '2024-02-21', '15', NULL, 1, 'arrive', '2024-02-27 12:55:44', '2024-02-27 12:55:44');

-- --------------------------------------------------------

--
-- Structure de la table `voy_users`
--

CREATE TABLE `voy_users` (
  `ref_voy_user` bigint(20) UNSIGNED NOT NULL,
  `pays` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `duree` varchar(255) NOT NULL,
  `id_emp` bigint(20) UNSIGNED NOT NULL,
  `status` enum('done','arrive') NOT NULL DEFAULT 'arrive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `voy_users`
--

INSERT INTO `voy_users` (`ref_voy_user`, `pays`, `programme`, `date`, `duree`, `id_emp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'gh', '2024-02-27', '9', 1, 'arrive', '2024-02-27 13:38:26', '2024-02-27 13:38:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_username_index` (`username`);

--
-- Index pour la table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id_agence`),
  ADD UNIQUE KEY `agencies_username_unique` (`username`),
  ADD UNIQUE KEY `agencies_email_unique` (`email`),
  ADD KEY `agencies_username_index` (`username`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Index pour la table `domaines`
--
ALTER TABLE `domaines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_emp`),
  ADD UNIQUE KEY `employees_username_unique` (`username`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_username_index` (`username`),
  ADD KEY `employees_id_ent_foreign` (`id_ent`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id_ent`),
  ADD UNIQUE KEY `entreprises_username_unique` (`username`),
  ADD UNIQUE KEY `entreprises_email_unique` (`email`),
  ADD KEY `entreprises_username_index` (`username`),
  ADD KEY `entreprises_id_dom_foreign` (`id_dom`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matchmakings`
--
ALTER TABLE `matchmakings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Index pour la table `voy_agencies`
--
ALTER TABLE `voy_agencies`
  ADD PRIMARY KEY (`ref_voy_agnce`),
  ADD KEY `voy_agencies_id_agence_foreign` (`id_agence`),
  ADD KEY `pays` (`pays`);

--
-- Index pour la table `voy_users`
--
ALTER TABLE `voy_users`
  ADD PRIMARY KEY (`ref_voy_user`),
  ADD KEY `voy_users_id_emp_foreign` (`id_emp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id_agence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT pour la table `domaines`
--
ALTER TABLE `domaines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_emp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id_ent` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matchmakings`
--
ALTER TABLE `matchmakings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `voy_agencies`
--
ALTER TABLE `voy_agencies`
  MODIFY `ref_voy_agnce` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `voy_users`
--
ALTER TABLE `voy_users`
  MODIFY `ref_voy_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_id_ent_foreign` FOREIGN KEY (`id_ent`) REFERENCES `entreprises` (`id_ent`) ON DELETE CASCADE;

--
-- Contraintes pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD CONSTRAINT `entreprises_id_dom_foreign` FOREIGN KEY (`id_dom`) REFERENCES `domaines` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `voy_agencies`
--
ALTER TABLE `voy_agencies`
  ADD CONSTRAINT `voy_agencies_id_agence_foreign` FOREIGN KEY (`id_agence`) REFERENCES `agencies` (`id_agence`) ON DELETE CASCADE;

--
-- Contraintes pour la table `voy_users`
--
ALTER TABLE `voy_users`
  ADD CONSTRAINT `voy_users_id_emp_foreign` FOREIGN KEY (`id_emp`) REFERENCES `employees` (`id_emp`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
