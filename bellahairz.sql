-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 06:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bellahairz`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'mm', '2022-11-22 09:17:27', '2022-11-30 13:41:57'),
(2, 'hairs', '2022-11-22 16:00:28', '2022-11-30 13:42:06'),
(3, 'lip stick', '2022-11-22 16:07:27', '2022-11-22 16:07:27'),
(4, 'gggg', '2022-11-30 12:39:26', '2022-11-30 12:39:26'),
(5, 'mm', '2022-11-30 13:32:13', '2022-11-30 13:32:13'),
(6, 'jjj', '2022-11-30 13:39:40', '2022-11-30 13:39:40'),
(7, 'mm', '2022-11-30 13:41:29', '2022-11-30 13:41:29'),
(8, 'kjnn', '2022-11-30 14:04:29', '2022-11-30 14:04:29'),
(9, 'phone', '2022-11-30 16:47:51', '2022-11-30 16:47:59');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_11_21_200451_create_sessions_table', 1),
(7, '2022_11_21_212220_create_products_table', 1),
(8, '2022_11_21_212334_create_categories_table', 1),
(9, '2022_11_25_123821_create_orders_table', 2),
(10, '2022_11_25_124018_create_carts_table', 2),
(11, '2022_11_25_124036_create_cart_items_table', 2),
(12, '2022_11_28_225159_create_order_items_table', 2),
(13, '2022_11_28_225943_create_payments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `phone`, `note`, `address`, `town`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:26:25', '2022-11-29 20:26:25'),
(2, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:27:08', '2022-11-29 20:27:08'),
(3, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:29:45', '2022-11-29 20:29:45'),
(4, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:31:12', '2022-11-29 20:31:12'),
(5, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:31:58', '2022-11-29 20:31:58'),
(6, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:32:40', '2022-11-29 20:32:40'),
(7, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:33:34', '2022-11-29 20:33:34'),
(8, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:36:38', '2022-11-29 20:36:38'),
(9, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:39:47', '2022-11-29 20:39:47'),
(10, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:40:20', '2022-11-29 20:40:20'),
(11, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:40:46', '2022-11-29 20:40:46'),
(12, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:51:54', '2022-11-29 20:51:54'),
(13, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:54:08', '2022-11-29 20:54:08'),
(14, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:55:40', '2022-11-29 20:55:40'),
(15, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 20:56:45', '2022-11-29 20:56:45'),
(16, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 21:02:51', '2022-11-29 21:02:51'),
(17, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-29 21:05:09', '2022-11-29 21:05:09'),
(18, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'completed', '2022-11-29 21:06:14', '2022-11-29 21:06:25'),
(19, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'completed', '2022-11-29 21:06:48', '2022-11-29 21:07:17'),
(20, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'completed', '2022-11-30 01:53:11', '2022-11-30 01:53:27'),
(21, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'pending', '2022-11-30 16:39:48', '2022-11-30 16:39:48'),
(22, 'Josiah', 'Ben', 'admin@demo.com', '08147791879', NULL, 'damico', 'ife', 'completed', '2022-11-30 16:54:43', '2022-11-30 16:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 3, '2022-11-29 20:29:45', '2022-11-29 20:29:45'),
(2, 3, 3, 5, '2022-11-29 20:29:45', '2022-11-29 20:29:45'),
(3, 4, 1, 3, '2022-11-29 20:31:12', '2022-11-29 20:31:12'),
(4, 4, 3, 5, '2022-11-29 20:31:12', '2022-11-29 20:31:12'),
(5, 5, 1, 3, '2022-11-29 20:31:58', '2022-11-29 20:31:58'),
(6, 5, 3, 5, '2022-11-29 20:31:58', '2022-11-29 20:31:58'),
(7, 6, 1, 3, '2022-11-29 20:32:40', '2022-11-29 20:32:40'),
(8, 6, 3, 5, '2022-11-29 20:32:40', '2022-11-29 20:32:40'),
(9, 7, 1, 3, '2022-11-29 20:33:34', '2022-11-29 20:33:34'),
(10, 7, 3, 5, '2022-11-29 20:33:34', '2022-11-29 20:33:34'),
(11, 8, 1, 3, '2022-11-29 20:36:38', '2022-11-29 20:36:38'),
(12, 8, 3, 5, '2022-11-29 20:36:38', '2022-11-29 20:36:38'),
(13, 9, 1, 3, '2022-11-29 20:39:47', '2022-11-29 20:39:47'),
(14, 9, 3, 5, '2022-11-29 20:39:47', '2022-11-29 20:39:47'),
(15, 10, 1, 3, '2022-11-29 20:40:20', '2022-11-29 20:40:20'),
(16, 10, 3, 5, '2022-11-29 20:40:20', '2022-11-29 20:40:20'),
(17, 11, 1, 3, '2022-11-29 20:40:46', '2022-11-29 20:40:46'),
(18, 11, 3, 5, '2022-11-29 20:40:46', '2022-11-29 20:40:46'),
(19, 12, 1, 3, '2022-11-29 20:51:54', '2022-11-29 20:51:54'),
(20, 12, 3, 5, '2022-11-29 20:51:54', '2022-11-29 20:51:54'),
(21, 13, 1, 3, '2022-11-29 20:54:08', '2022-11-29 20:54:08'),
(22, 13, 3, 5, '2022-11-29 20:54:08', '2022-11-29 20:54:08'),
(23, 14, 1, 3, '2022-11-29 20:55:40', '2022-11-29 20:55:40'),
(24, 14, 3, 5, '2022-11-29 20:55:40', '2022-11-29 20:55:40'),
(25, 15, 1, 3, '2022-11-29 20:56:45', '2022-11-29 20:56:45'),
(26, 15, 3, 5, '2022-11-29 20:56:45', '2022-11-29 20:56:45'),
(27, 16, 1, 3, '2022-11-29 21:02:51', '2022-11-29 21:02:51'),
(28, 16, 3, 5, '2022-11-29 21:02:51', '2022-11-29 21:02:51'),
(29, 17, 1, 3, '2022-11-29 21:05:09', '2022-11-29 21:05:09'),
(30, 17, 3, 5, '2022-11-29 21:05:09', '2022-11-29 21:05:09'),
(31, 18, 1, 3, '2022-11-29 21:06:14', '2022-11-29 21:06:14'),
(32, 18, 3, 5, '2022-11-29 21:06:14', '2022-11-29 21:06:14'),
(33, 19, 1, 3, '2022-11-29 21:06:48', '2022-11-29 21:06:48'),
(34, 19, 3, 5, '2022-11-29 21:06:48', '2022-11-29 21:06:48'),
(35, 20, 2, 3, '2022-11-30 01:53:11', '2022-11-30 01:53:11'),
(36, 21, 2, 2, '2022-11-30 16:39:48', '2022-11-30 16:39:48'),
(37, 21, 3, 3, '2022-11-30 16:39:48', '2022-11-30 16:39:48'),
(38, 21, 4, 1, '2022-11-30 16:39:48', '2022-11-30 16:39:48'),
(39, 21, 1, 1, '2022-11-30 16:39:48', '2022-11-30 16:39:48'),
(40, 22, 2, 1, '2022-11-30 16:54:43', '2022-11-30 16:54:43'),
(41, 22, 3, 4, '2022-11-30 16:54:43', '2022-11-30 16:54:43'),
(42, 22, 1, 1, '2022-11-30 16:54:43', '2022-11-30 16:54:43'),
(43, 22, 5, 1, '2022-11-30 16:54:43', '2022-11-30 16:54:43');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`details`)),
  `successful` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `reference`, `details`, `successful`, `created_at`, `updated_at`) VALUES
(1, 4, '63867a206b5d9', NULL, 0, '2022-11-29 20:31:12', '2022-11-29 20:31:12'),
(2, 11, '63867c5e938e4', NULL, 0, '2022-11-29 20:40:46', '2022-11-29 20:40:46'),
(3, 12, '63867efa7bd7e', NULL, 0, '2022-11-29 20:51:54', '2022-11-29 20:51:54'),
(4, 13, '63867f8097337', NULL, 0, '2022-11-29 20:54:08', '2022-11-29 20:54:08'),
(5, 14, '63867fdc33bc2', NULL, 0, '2022-11-29 20:55:40', '2022-11-29 20:55:40'),
(6, 15, '6386801db76a9', '{\"id\":2324692321,\"domain\":\"test\",\"status\":\"success\",\"reference\":\"6386801db76a9\",\"amount\":123200,\"message\":null,\"gateway_response\":\"Successful\",\"paid_at\":\"2022-11-29T21:56:55.000Z\",\"created_at\":\"2022-11-29T21:56:46.000Z\",\"channel\":\"card\",\"currency\":\"NGN\",\"ip_address\":\"102.89.47.152\",\"metadata\":\"\",\"log\":{\"start_time\":1669759010,\"time_spent\":6,\"attempts\":1,\"errors\":0,\"success\":true,\"mobile\":false,\"input\":[],\"history\":[{\"type\":\"action\",\"message\":\"Attempted to pay with card\",\"time\":5},{\"type\":\"success\",\"message\":\"Successfully paid with card\",\"time\":6}]},\"fees\":1848,\"fees_split\":null,\"authorization\":{\"authorization_code\":\"AUTH_zc3c6sn8ml\",\"bin\":\"408408\",\"last4\":\"4081\",\"exp_month\":\"12\",\"exp_year\":\"2030\",\"channel\":\"card\",\"card_type\":\"visa \",\"bank\":\"TEST BANK\",\"country_code\":\"NG\",\"brand\":\"visa\",\"reusable\":true,\"signature\":\"SIG_Ugprnrzy7Sqwh5yeTPar\",\"account_name\":null},\"customer\":{\"id\":104114989,\"first_name\":null,\"last_name\":null,\"email\":\"admin@demo.com\",\"customer_code\":\"CUS_idcm88hclnhxb6r\",\"phone\":null,\"metadata\":null,\"risk_action\":\"default\",\"international_format_phone\":null},\"plan\":null,\"split\":[],\"order_id\":null,\"paidAt\":\"2022-11-29T21:56:55.000Z\",\"createdAt\":\"2022-11-29T21:56:46.000Z\",\"requested_amount\":123200,\"pos_transaction_data\":null,\"source\":null,\"fees_breakdown\":null,\"transaction_date\":\"2022-11-29T21:56:46.000Z\",\"plan_object\":[],\"subaccount\":[]}', 0, '2022-11-29 20:56:45', '2022-11-29 20:56:57'),
(7, 16, '6386818b75f6f', '{\"id\":2324705459,\"domain\":\"test\",\"status\":\"success\",\"reference\":\"6386818b75f6f\",\"amount\":123200,\"message\":null,\"gateway_response\":\"Successful\",\"paid_at\":\"2022-11-29T22:03:01.000Z\",\"created_at\":\"2022-11-29T22:02:52.000Z\",\"channel\":\"card\",\"currency\":\"NGN\",\"ip_address\":\"102.89.47.152\",\"metadata\":\"\",\"log\":{\"start_time\":1669759377,\"time_spent\":4,\"attempts\":1,\"errors\":0,\"success\":true,\"mobile\":false,\"input\":[],\"history\":[{\"type\":\"action\",\"message\":\"Attempted to pay with card\",\"time\":3},{\"type\":\"success\",\"message\":\"Successfully paid with card\",\"time\":4}]},\"fees\":1848,\"fees_split\":null,\"authorization\":{\"authorization_code\":\"AUTH_8anz268fhh\",\"bin\":\"408408\",\"last4\":\"4081\",\"exp_month\":\"12\",\"exp_year\":\"2030\",\"channel\":\"card\",\"card_type\":\"visa \",\"bank\":\"TEST BANK\",\"country_code\":\"NG\",\"brand\":\"visa\",\"reusable\":true,\"signature\":\"SIG_Ugprnrzy7Sqwh5yeTPar\",\"account_name\":null},\"customer\":{\"id\":104114989,\"first_name\":null,\"last_name\":null,\"email\":\"admin@demo.com\",\"customer_code\":\"CUS_idcm88hclnhxb6r\",\"phone\":null,\"metadata\":null,\"risk_action\":\"default\",\"international_format_phone\":null},\"plan\":null,\"split\":[],\"order_id\":null,\"paidAt\":\"2022-11-29T22:03:01.000Z\",\"createdAt\":\"2022-11-29T22:02:52.000Z\",\"requested_amount\":123200,\"pos_transaction_data\":null,\"source\":null,\"fees_breakdown\":null,\"transaction_date\":\"2022-11-29T22:02:52.000Z\",\"plan_object\":[],\"subaccount\":[]}', 1, '2022-11-29 21:02:51', '2022-11-29 21:03:03'),
(8, 17, '63868215dd6a4', '{\"id\":2324710196,\"domain\":\"test\",\"status\":\"success\",\"reference\":\"63868215dd6a4\",\"amount\":123200,\"message\":null,\"gateway_response\":\"Successful\",\"paid_at\":\"2022-11-29T22:05:24.000Z\",\"created_at\":\"2022-11-29T22:05:10.000Z\",\"channel\":\"card\",\"currency\":\"NGN\",\"ip_address\":\"102.89.47.152\",\"metadata\":\"\",\"log\":{\"start_time\":1669759514,\"time_spent\":10,\"attempts\":1,\"errors\":0,\"success\":true,\"mobile\":false,\"input\":[],\"history\":[{\"type\":\"action\",\"message\":\"Attempted to pay with card\",\"time\":9},{\"type\":\"success\",\"message\":\"Successfully paid with card\",\"time\":10}]},\"fees\":1848,\"fees_split\":null,\"authorization\":{\"authorization_code\":\"AUTH_xvuas4u7u5\",\"bin\":\"408408\",\"last4\":\"4081\",\"exp_month\":\"12\",\"exp_year\":\"2030\",\"channel\":\"card\",\"card_type\":\"visa \",\"bank\":\"TEST BANK\",\"country_code\":\"NG\",\"brand\":\"visa\",\"reusable\":true,\"signature\":\"SIG_Ugprnrzy7Sqwh5yeTPar\",\"account_name\":null},\"customer\":{\"id\":104114989,\"first_name\":null,\"last_name\":null,\"email\":\"admin@demo.com\",\"customer_code\":\"CUS_idcm88hclnhxb6r\",\"phone\":null,\"metadata\":null,\"risk_action\":\"default\",\"international_format_phone\":null},\"plan\":null,\"split\":[],\"order_id\":null,\"paidAt\":\"2022-11-29T22:05:24.000Z\",\"createdAt\":\"2022-11-29T22:05:10.000Z\",\"requested_amount\":123200,\"pos_transaction_data\":null,\"source\":null,\"fees_breakdown\":null,\"transaction_date\":\"2022-11-29T22:05:10.000Z\",\"plan_object\":[],\"subaccount\":[]}', 1, '2022-11-29 21:05:09', '2022-11-29 21:05:26'),
(9, 18, '63868256ae998', '{\"id\":2324712486,\"domain\":\"test\",\"status\":\"success\",\"reference\":\"63868256ae998\",\"amount\":123200,\"message\":null,\"gateway_response\":\"Successful\",\"paid_at\":\"2022-11-29T22:06:23.000Z\",\"created_at\":\"2022-11-29T22:06:15.000Z\",\"channel\":\"card\",\"currency\":\"NGN\",\"ip_address\":\"102.89.47.152\",\"metadata\":\"\",\"log\":{\"start_time\":1669759578,\"time_spent\":5,\"attempts\":1,\"errors\":0,\"success\":true,\"mobile\":false,\"input\":[],\"history\":[{\"type\":\"action\",\"message\":\"Attempted to pay with card\",\"time\":4},{\"type\":\"success\",\"message\":\"Successfully paid with card\",\"time\":5}]},\"fees\":1848,\"fees_split\":null,\"authorization\":{\"authorization_code\":\"AUTH_fjbjvqt27m\",\"bin\":\"408408\",\"last4\":\"4081\",\"exp_month\":\"12\",\"exp_year\":\"2030\",\"channel\":\"card\",\"card_type\":\"visa \",\"bank\":\"TEST BANK\",\"country_code\":\"NG\",\"brand\":\"visa\",\"reusable\":true,\"signature\":\"SIG_Ugprnrzy7Sqwh5yeTPar\",\"account_name\":null},\"customer\":{\"id\":104114989,\"first_name\":null,\"last_name\":null,\"email\":\"admin@demo.com\",\"customer_code\":\"CUS_idcm88hclnhxb6r\",\"phone\":null,\"metadata\":null,\"risk_action\":\"default\",\"international_format_phone\":null},\"plan\":null,\"split\":[],\"order_id\":null,\"paidAt\":\"2022-11-29T22:06:23.000Z\",\"createdAt\":\"2022-11-29T22:06:15.000Z\",\"requested_amount\":123200,\"pos_transaction_data\":null,\"source\":null,\"fees_breakdown\":null,\"transaction_date\":\"2022-11-29T22:06:15.000Z\",\"plan_object\":[],\"subaccount\":[]}', 1, '2022-11-29 21:06:14', '2022-11-29 21:06:25'),
(10, 19, '63868278a0a00', '{\"id\":2324713654,\"domain\":\"test\",\"status\":\"success\",\"reference\":\"63868278a0a00\",\"amount\":123200,\"message\":\"test-3ds\",\"gateway_response\":\"[Test] Approved\",\"paid_at\":\"2022-11-29T22:07:15.000Z\",\"created_at\":\"2022-11-29T22:06:50.000Z\",\"channel\":\"card\",\"currency\":\"NGN\",\"ip_address\":\"102.89.47.152\",\"metadata\":\"\",\"log\":{\"start_time\":1669759614,\"time_spent\":21,\"attempts\":2,\"authentication\":\"3DS\",\"errors\":1,\"success\":true,\"mobile\":false,\"input\":[],\"history\":[{\"type\":\"action\",\"message\":\"Attempted to pay with card\",\"time\":4},{\"type\":\"error\",\"message\":\"Error: Declined\",\"time\":5},{\"type\":\"action\",\"message\":\"Attempted to pay with card\",\"time\":16},{\"type\":\"auth\",\"message\":\"Authentication Required: 3DS\",\"time\":17},{\"type\":\"action\",\"message\":\"Third-party authentication window opened\",\"time\":20},{\"type\":\"success\",\"message\":\"Successfully paid with card\",\"time\":21}]},\"fees\":1848,\"fees_split\":null,\"authorization\":{\"authorization_code\":\"AUTH_npcfdxcip4\",\"bin\":\"408408\",\"last4\":\"0409\",\"exp_month\":\"01\",\"exp_year\":\"2030\",\"channel\":\"card\",\"card_type\":\"visa \",\"bank\":\"TEST BANK\",\"country_code\":\"NG\",\"brand\":\"visa\",\"reusable\":true,\"signature\":\"SIG_Yik64LEL7xV3CyfBbYLl\",\"account_name\":null},\"customer\":{\"id\":104114989,\"first_name\":null,\"last_name\":null,\"email\":\"admin@demo.com\",\"customer_code\":\"CUS_idcm88hclnhxb6r\",\"phone\":null,\"metadata\":null,\"risk_action\":\"default\",\"international_format_phone\":null},\"plan\":null,\"split\":[],\"order_id\":null,\"paidAt\":\"2022-11-29T22:07:15.000Z\",\"createdAt\":\"2022-11-29T22:06:50.000Z\",\"requested_amount\":123200,\"pos_transaction_data\":null,\"source\":null,\"fees_breakdown\":null,\"transaction_date\":\"2022-11-29T22:06:50.000Z\",\"plan_object\":[],\"subaccount\":[]}', 1, '2022-11-29 21:06:48', '2022-11-30 01:40:04'),
(11, 20, '6386c597d92a3', '{\"id\":2325135496,\"domain\":\"test\",\"status\":\"success\",\"reference\":\"6386c597d92a3\",\"amount\":30000000,\"message\":null,\"gateway_response\":\"Successful\",\"paid_at\":\"2022-11-30T02:53:25.000Z\",\"created_at\":\"2022-11-30T02:53:13.000Z\",\"channel\":\"card\",\"currency\":\"NGN\",\"ip_address\":\"102.89.47.230\",\"metadata\":\"\",\"log\":{\"start_time\":1669776800,\"time_spent\":5,\"attempts\":1,\"errors\":0,\"success\":true,\"mobile\":false,\"input\":[],\"history\":[{\"type\":\"action\",\"message\":\"Attempted to pay with card\",\"time\":4},{\"type\":\"success\",\"message\":\"Successfully paid with card\",\"time\":5}]},\"fees\":200000,\"fees_split\":null,\"authorization\":{\"authorization_code\":\"AUTH_u18kdjh29f\",\"bin\":\"408408\",\"last4\":\"4081\",\"exp_month\":\"12\",\"exp_year\":\"2030\",\"channel\":\"card\",\"card_type\":\"visa \",\"bank\":\"TEST BANK\",\"country_code\":\"NG\",\"brand\":\"visa\",\"reusable\":true,\"signature\":\"SIG_Ugprnrzy7Sqwh5yeTPar\",\"account_name\":null},\"customer\":{\"id\":104114989,\"first_name\":null,\"last_name\":null,\"email\":\"admin@demo.com\",\"customer_code\":\"CUS_idcm88hclnhxb6r\",\"phone\":null,\"metadata\":null,\"risk_action\":\"default\",\"international_format_phone\":null},\"plan\":null,\"split\":[],\"order_id\":null,\"paidAt\":\"2022-11-30T02:53:25.000Z\",\"createdAt\":\"2022-11-30T02:53:13.000Z\",\"requested_amount\":30000000,\"pos_transaction_data\":null,\"source\":null,\"fees_breakdown\":null,\"transaction_date\":\"2022-11-30T02:53:13.000Z\",\"plan_object\":[],\"subaccount\":[]}', 1, '2022-11-30 01:53:11', '2022-11-30 01:53:27'),
(12, 21, '6387956428fc5', NULL, 0, '2022-11-30 16:39:48', '2022-11-30 16:39:48'),
(13, 22, '638798e3567de', '{\"id\":2327243613,\"domain\":\"test\",\"status\":\"success\",\"reference\":\"638798e3567de\",\"amount\":40284000,\"message\":null,\"gateway_response\":\"Successful\",\"paid_at\":\"2022-11-30T17:54:58.000Z\",\"created_at\":\"2022-11-30T17:54:46.000Z\",\"channel\":\"card\",\"currency\":\"NGN\",\"ip_address\":\"102.89.47.230\",\"metadata\":\"\",\"log\":{\"start_time\":1669830891,\"time_spent\":7,\"attempts\":1,\"errors\":0,\"success\":true,\"mobile\":false,\"input\":[],\"history\":[{\"type\":\"action\",\"message\":\"Attempted to pay with card\",\"time\":5},{\"type\":\"success\",\"message\":\"Successfully paid with card\",\"time\":7}]},\"fees\":200000,\"fees_split\":null,\"authorization\":{\"authorization_code\":\"AUTH_jw0n0bu3qk\",\"bin\":\"408408\",\"last4\":\"4081\",\"exp_month\":\"12\",\"exp_year\":\"2030\",\"channel\":\"card\",\"card_type\":\"visa \",\"bank\":\"TEST BANK\",\"country_code\":\"NG\",\"brand\":\"visa\",\"reusable\":true,\"signature\":\"SIG_Ugprnrzy7Sqwh5yeTPar\",\"account_name\":null},\"customer\":{\"id\":104114989,\"first_name\":null,\"last_name\":null,\"email\":\"admin@demo.com\",\"customer_code\":\"CUS_idcm88hclnhxb6r\",\"phone\":null,\"metadata\":null,\"risk_action\":\"default\",\"international_format_phone\":null},\"plan\":null,\"split\":[],\"order_id\":null,\"paidAt\":\"2022-11-30T17:54:58.000Z\",\"createdAt\":\"2022-11-30T17:54:46.000Z\",\"requested_amount\":40284000,\"pos_transaction_data\":null,\"source\":null,\"fees_breakdown\":null,\"transaction_date\":\"2022-11-30T17:54:46.000Z\",\"plan_object\":[],\"subaccount\":[]}', 1, '2022-11-30 16:54:43', '2022-11-30 16:55:00');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ihihi', 'nnnj', '2440.00', 23, 2, '1669112817.png', '2022-11-22 09:26:57', '2022-11-30 16:19:53'),
(2, 'human hair', 'syntetic human hair', '100000.00', 10, 2, '1669136557.png', '2022-11-22 16:02:37', '2022-11-22 16:02:37'),
(3, 'stawberry lipstick', 'a strewberry flavoure lipstick', '100.00', 100, 3, '1669136908.png', '2022-11-22 16:08:28', '2022-11-22 16:08:28'),
(4, 'huuiuibi', 'hbhvgvgv', '145363.00', 60, 3, '1669820777.png', '2022-11-30 14:06:17', '2022-11-30 16:50:41'),
(5, 'iphone 13', 'iphone 13, 128GB', '300000.00', 10, 9, '1669830613.png', '2022-11-30 16:50:13', '2022-11-30 16:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VhHUsBXwFfkoALD3GzfxXW9fZStGhfKVQjV5ucdG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibDdwU1FSQjkzNVJTQTRmZGlCMVBjV0x5TU5GWUR3WWNLVmpSUEJoRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9vZHVjdC1wYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1669913482),
('wayQsW917yawCCFjvvk2X2C4tI01piSO9gIrAhja', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiemx4a3NQVVFXV3NnOTNPMHB0d3gyVE5TVUIzVU9jTmxxS0diRFlJWiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvb3JkZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ0NWVYamxOQzExTGtnQnBkZkRldEJ1NDFVSnRMZHVPcHBQNlNnVHNNeTJPNWtiYTBmSEJoLiI7czo0OiJjYXJ0IjthOjA6e319', 1669830934);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'wertyuio', 'benjosiah90@gmail.com', NULL, '$2y$10$45eXjlNC11LkgBpdfDetBu41UJtLduOppP6SgTsMy2O5kba0fHBh.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-22 06:28:33', '2022-11-22 06:28:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
