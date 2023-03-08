-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2022 at 02:52 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedsand4_bedsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(11, 'diamond', '1.5', 'girl-with-red-hat-IKJ8k8cfHnY-unsplash.jpg', '2022-04-09 13:20:44', '2022-04-09 13:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `bedsizes`
--

CREATE TABLE `bedsizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bedsizes`
--

INSERT INTO `bedsizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(14, 'KING 6 FEETS', '2022-04-09 13:17:42', '2022-04-09 13:17:42'),
(15, 'king 5 feets', '2022-04-09 13:17:56', '2022-04-09 13:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `beedings`
--

CREATE TABLE `beedings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beedings`
--

INSERT INTO `beedings` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(9, 'blue color', '20', 'ezgif.com-gif-maker (3).png', '2022-04-09 13:19:30', '2022-04-09 13:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `p_orignal_price` varchar(200) DEFAULT NULL,
  `p_id` varchar(200) DEFAULT NULL,
  `options` varchar(255) NOT NULL,
  `qty` varchar(200) DEFAULT NULL,
  `p_price` varchar(200) DEFAULT NULL,
  `sale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(21, 'Beds', 'Beds', '1647336257.beed5feets.webp', '2022-03-15 04:24:17', '2022-03-15 04:24:17'),
(23, 'Sofa & Coffee Tables', 'Sofa', '1647697029.253180_grey_fabric_reversible_sofa_chaise_signature_01.webp', '2022-03-19 19:37:09', '2022-03-19 19:37:09'),
(25, 'Mattress', 'Mattress', '1647770594.415_2525.jpg', '2022-03-20 16:03:14', '2022-03-20 16:03:14'),
(26, 'Foots Stools', 'Foots Stools', '1647944963.pair-of-cream-storage-footstools-p63202-90185_zoom.jpg', '2022-03-22 16:29:23', '2022-03-22 16:29:23'),
(27, 'Kids Beds', 'Kids Beds', '1648880905.KKTB001_1-870x539-320x320.jpg', '2022-04-02 12:28:25', '2022-04-02 12:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(46, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (184) 374-1895', 'helo', '2022-04-09 00:49:48', '2022-04-09 00:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `fabrics`
--

CREATE TABLE `fabrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fabrics`
--

INSERT INTO `fabrics` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(42, 'Red', '10', 'ezgif.com-gif-maker (4).png', '2022-04-09 13:18:23', '2022-04-09 13:18:23');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matching_storages`
--

CREATE TABLE `matching_storages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matching_storages`
--

INSERT INTO `matching_storages` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(6, 'storagebox', '40', 'storagebox.jpg', '2022-04-09 13:21:10', '2022-04-09 13:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `mattresssizes`
--

CREATE TABLE `mattresssizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mattresssizes`
--

INSERT INTO `mattresssizes` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(11, '5feets length  height 15cm', '120', '15cm.jpg', '2022-04-09 13:19:04', '2022-04-09 13:19:04');

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
(6, '2022_02_03_073644_create_sessions_table', 1),
(7, '2022_02_03_120450_create_categories_table', 2),
(8, '2022_03_03_081211_create_options_table', 3),
(9, '2022_03_03_124104_create_addons_table', 4),
(10, '2022_03_03_124034_create_beedings_table', 5),
(11, '2022_03_03_124000_create_fabrics_table', 6),
(12, '2022_03_03_123921_create_bedsizes_table', 7),
(13, '2022_03_04_072734_create_matching_storages_table', 8),
(14, '2022_03_09_123626_create_orders_table', 9),
(15, '2022_03_14_065912_create_transations_table', 10),
(16, '2022_03_14_134522_create_mattresssizes_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_sale_product`
--

CREATE TABLE `monthly_sale_product` (
  `id` int(11) NOT NULL,
  `sale_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sale_month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sale_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monthly_sale_product`
--

INSERT INTO `monthly_sale_product` (`id`, `sale_name`, `product_id`, `sale_month`, `discount`, `sale_description`, `created_at`, `updated_at`) VALUES
(35, 'May Sale', '141', 'May 09, 2022 12:47:55', '40', '<p>boomber&nbsp; offer</p>', '2022-04-09 13:48:07', '2022-04-09 13:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `products` varchar(2000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `country`, `city`, `contact`, `address`, `zipcode`, `note`, `payment_method`, `amount`, `order_date`, `status`, `products`, `created_at`, `updated_at`) VALUES
(113, '39', 'Candice Norton', 'wapulediq@mailinator.com', 'UK', 'Anim enim dolorum la', '6', 'Vero aut ut incidunt', '37042', 'Nulla anim dolorem l', 'Payment with card', '84', '2022-04-09', '1', '[{\"id\":230,\"user_id\":\"1649489870\",\"p_orignal_price\":\"84\",\"p_id\":\"141\",\"options\":\"[\\\"bed size:40cm diameter x 30cm high\\\",\\\"fabric=Red:10\\\",null,null,null,null,null,\\\"pick up:20\\\"]\",\"qty\":\"1\",\"p_price\":\"84\",\"sale\":\"1\",\"created_at\":\"2022-04-09T07:50:32.000000Z\",\"updated_at\":\"2022-04-09T07:50:32.000000Z\"}]', '2022-04-09 13:51:29', '2022-04-09 13:51:29');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categories_id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `bedsize_id` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mattress_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fabric_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `beeding_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `addon_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sofa_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stool_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `buttondiamond_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matching_storage_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `liftup_storage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_sale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matching_storagebox_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `name`, `price`, `image`, `description`, `bedsize_id`, `mattress_id`, `fabric_id`, `beeding_id`, `addon_id`, `sofa_id`, `stool_id`, `buttondiamond_image`, `matching_storage_id`, `liftup_storage`, `is_featured`, `is_sale`, `matching_storagebox_image`, `created_at`, `updated_at`) VALUES
(138, 21, 'uk bed', '1200', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Worcester Bed in Crushed Velvet</p><p>One of the most important purchases you will make in your life is a bed. After all, you spend a third of your life sleeping. It’s a tired, old cliché, but it’s true.</p><p><br></p><p>Give your sanctuary a classic style and add the centerpiece you have always desired with this upholstered Worcester Bed. The beautiful scrolling headboard and footboard are upholstered in an eye-catching button tufted crushed velvet fabric. Classic style choices like the headboard and footboard perfectly compliment the premium finish seen on the rest of the piece while the turned feet add a sense of dignity and grace to this inviting bed. Relax in elegant luxury every night with The Worcester Bed.</p><p><br></p><p>The Worcester Bed in the photo is illustrated in the Plain Velvet material</p>', '[\"15\"]', '[\"11\"]', '[\"42\"]', '[\"9\"]', '[\"11\"]', 'null', 'null', NULL, '[\"6\"]', 'yes', 'yes', 'yes', NULL, '2022-04-09 13:27:15', '2022-04-09 13:27:15'),
(139, 23, 'uk sofa', '600', '[\"sofa(1).jpg\",\"sofa2 (1).jpg\",\"sofa3(1).jpg\"]', '<p>Worcester Bed in Crushed Velvet</p><p>One of the most important purchases you will make in your life is a bed. After all, you spend a third of your life sleeping. It’s a tired, old cliché, but it’s true.</p><p><br></p><p>Give your sanctuary a classic style and add the centerpiece you have always desired with this upholstered Worcester Bed. The beautiful scrolling headboard and footboard are upholstered in an eye-catching button tufted crushed velvet fabric. Classic style choices like the headboard and footboard perfectly compliment the premium finish seen on the rest of the piece while the turned feet add a sense of dignity and grace to this inviting bed. Relax in elegant luxury every night with The Worcester Bed.</p><p><br></p><p>The Worcester Bed in the photo is illustrated in the Plain Velvet material</p>', 'null', 'null', '[\"42\"]', '[\"9\"]', 'null', '[\"11\"]', 'null', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-04-09 13:28:16', '2022-04-09 13:28:16'),
(140, 25, 'uk mattreess', '120', '[\"15cm.jpg\",\"415_2525.jpg\",\"download (1).jpg\"]', '<p>Worcester Bed in Crushed Velvet</p><p>One of the most important purchases you will make in your life is a bed. After all, you spend a third of your life sleeping. It’s a tired, old cliché, but it’s true.</p><p><br></p><p>Give your sanctuary a classic style and add the centerpiece you have always desired with this upholstered Worcester Bed. The beautiful scrolling headboard and footboard are upholstered in an eye-catching button tufted crushed velvet fabric. Classic style choices like the headboard and footboard perfectly compliment the premium finish seen on the rest of the piece while the turned feet add a sense of dignity and grace to this inviting bed. Relax in elegant luxury every night with The Worcester Bed.</p><p><br></p><p>The Worcester Bed in the photo is illustrated in the Plain Velvet material</p>', '[\"15\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-04-09 13:29:33', '2022-04-09 13:29:33'),
(141, 26, 'uk stool', '90', '[\"download.jpg\",\"images (2).jpg\",\"images (3).jpg\"]', '<p>Worcester Bed in Crushed Velvet</p><p>One of the most important purchases you will make in your life is a bed. After all, you spend a third of your life sleeping. It’s a tired, old cliché, but it’s true.</p><p><br></p><p>Give your sanctuary a classic style and add the centerpiece you have always desired with this upholstered Worcester Bed. The beautiful scrolling headboard and footboard are upholstered in an eye-catching button tufted crushed velvet fabric. Classic style choices like the headboard and footboard perfectly compliment the premium finish seen on the rest of the piece while the turned feet add a sense of dignity and grace to this inviting bed. Relax in elegant luxury every night with The Worcester Bed.</p><p><br></p><p>The Worcester Bed in the photo is illustrated in the Plain Velvet material</p>', 'null', 'null', '[\"42\"]', '[\"9\"]', 'null', 'null', '[\"9\",\"10\",\"11\"]', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-04-09 13:30:40', '2022-04-09 13:30:40'),
(143, 27, 'uk bed', '1200', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>https://www.awe<br></p>', '[\"14\"]', '[\"11\"]', '[\"42\"]', '[\"9\"]', '[\"11\"]', 'null', 'null', NULL, '[\"6\"]', 'yes', 'yes', 'yes', NULL, '2022-04-09 14:17:22', '2022-04-09 14:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `review` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ua4wXgsErdUCX6L1HLmncYpwGCAesTtPIRqFkbQH', NULL, '115.186.169.61', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUWNVVUZNbXA1Y3hmQlFleE9QeU1jZVdQSVd1UldxTnI0c0ZkbnNYRyI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5NDg1OTcyO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI2OiJodHRwczovL2JlZHNhbmRib2x0cy5jby51ayI7fX0=', 1649494197),
('Aixtg7lpSUc2JlVctZH6KX4dQPA0PgiIKDq1vHgm', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVc3U0ZWWmdjWWNtQXg4cmMxa1R1dkQycE1zZmdJc2o5T21WaG5OVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649488342),
('LJf8gUgDMIDFLLItncPEeSOupyQsqLhiY9kNMkeG', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFNPdTFDQkdkTllZVEtuME5vTG5CZUw1b2xJc0dDTDUxdGozQmlDZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMzUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649488542),
('Eg8cJjrcY70VTFBYNEvb1IuNESpm6CiI0TBa48Rr', NULL, '34.147.95.190', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4241.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzBqRndFTDlZR2c4S0Y2MFZnWlpwNDljamt2c1RiZ2xwWHExdGVwOSI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5NDg5MjY1O3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649489265),
('5OXYtJ4o9CM2wFZ5i28j59PdKoeCX7ER7dpDZL69', NULL, '34.147.95.190', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4241.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT1FGVkFNZ0tWcngxZjQxR1dvdEN2d2Z3MVk5UU1MV1NqOFM0Wlk2QyI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5NDg5MjY1O3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649489265),
('8P0Z9EQQItSxUF9ClvCoxM1hATxnRzEDlcCVu5GE', NULL, '34.147.95.190', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4241.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWm9lUWNraUVpZGlXWTlrcXJTaEFWZDRjRE9sWUJJWTJvamt0bVFXVSI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5NDg5MjY2O3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649489266),
('yguMucJu14uOn0RebSugmQG1zFxlWlAkHUertutz', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFNpNTIxU3U4R3hoUUpiNUUyUWhBbTU5WWFVRmNhYXhFZ2M2U3hCZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMjIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649490866),
('QhNvWLAvVVJVQuCPS8CeFFTmoWF5ZveyqIQZJeeV', NULL, '207.46.13.31', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamNCV2NLR1k1SjB2ejFPQ2lmOU9XZ21DcHE4Q3NGS1dRWDdBdmxPNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNTkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649491226),
('ERB4Z0m53UWCyo7WYZ0Va7eqIoXBmWIXwxPnyMc3', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGE5STlQc0hoaENLeGVBQmFodW5jdmhEMEc0YmZHOHJweFRaV2JkUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMjUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649491526),
('AIkpkLCjVUZpXsdrXaxymWBe1ufMu8jQ0XDWtyll', NULL, '40.77.167.11', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnBXZGZac3l2b09GSVg4NzlRVEpLTVE5d3k5RGlOalI0R2FhUE1BQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMTE2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649491628),
('p1QijvJwNttK8lATbtNMjkBPPrdNJaiqDXDR27m3', 1, '115.186.169.61', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'YTo2OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MjoiaHR0cHM6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMTQzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6Ikk1SDVleGdjeWsxdHVmSXU4dzhMUXpHMkFsMG1CeEt0TEExUmpaUkkiO3M6MTY6ImR1bW15X3Nlc3Npb25faWQiO2k6MTY0OTQ5MTY0MjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkdk1BSElTUVVyWUdKaWFwNWJGMmI1ZXhnM2tNRW1zL2lHeHVVYk81VFVsRVpyNHNnR1ZRMzIiO30=', 1649493722),
('azM21Me1Vx2g47Gh2OknHF4UuKxh5JLHDQw41re4', NULL, '207.46.13.31', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSURJNmZzT3ZJdmFRb3Zld3AydVFGNnA0VWpwTm9NaTFzc241eDBQQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMTAxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649494111);

-- --------------------------------------------------------

--
-- Table structure for table `sofa_options`
--

CREATE TABLE `sofa_options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sofa_options`
--

INSERT INTO `sofa_options` (`id`, `name`, `created_at`, `updated_at`) VALUES
(10, '4 seater', '2022-04-09 13:21:27', '2022-04-09 13:24:06'),
(11, '5 seater', '2022-04-09 13:21:46', '2022-04-09 13:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `stool_options`
--

CREATE TABLE `stool_options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stool_options`
--

INSERT INTO `stool_options` (`id`, `name`, `created_at`, `updated_at`) VALUES
(9, '80cm diameter x 40cm high', '2022-04-09 13:22:01', '2022-04-09 13:22:01'),
(10, '60cm diameter x 40cm high', '2022-04-09 13:22:25', '2022-04-09 13:25:18'),
(11, '40cm diameter x 30cm high', '2022-04-09 13:22:46', '2022-04-09 13:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `StripeSettings`
--

CREATE TABLE `StripeSettings` (
  `id` bigint(20) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secrete_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `StripeSettings`
--

INSERT INTO `StripeSettings` (`id`, `token`, `secrete_key`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uyttiy', 'hjghjgh', '0', '2022-04-08 11:42:40', '2022-04-08 11:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(13, 'khuzaifamunir123@gmail.com', '2022-04-09 14:49:56', '2022-04-09 14:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `transations`
--

CREATE TABLE `transations` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transations`
--

INSERT INTO `transations` (`id`, `user_id`, `order_id`, `name`, `email`, `amount`, `account`, `card_type`, `created_at`, `updated_at`) VALUES
(19, '33', '102', 'Emery Lynn', 'm.nabeel082@gmail.com', '1312.8', '4242424242424242', 'Visa', '2022-04-08 23:38:16', '2022-04-08 23:38:16'),
(20, '34', '103', 'Micah Hobbs', 'byvi@mailinator.com', '0', '4242424242424242', 'Visa', '2022-04-08 23:43:36', '2022-04-08 23:43:36'),
(21, '35', '104', 'Sybill Lang', 'xiwum@mailinator.com', '0', '4242424242424242', 'Visa', '2022-04-08 23:47:06', '2022-04-08 23:47:06'),
(22, '36', '106', 'huzaifa munir', 'Khuzaifamunir123@gmail.com', '442', '4242424242424242', 'Visa', '2022-04-08 23:52:22', '2022-04-08 23:52:22'),
(23, '36', '107', 'huzaifa munir', 'Khuzaifamunir123@gmail.com', '442', '4242424242424242', 'Visa', '2022-04-08 23:53:42', '2022-04-08 23:53:42'),
(24, '33', '109', 'Velma Vargas', 'm.nabeel082@gmail.com', '2070.5', '4242424242424242', 'Visa', '2022-04-09 00:42:29', '2022-04-09 00:42:29'),
(25, '37', '110', 'Ralph Harrison', 'xycasohojy@mailinator.com', '1220', '4242424242424242', 'Visa', '2022-04-09 12:06:39', '2022-04-09 12:06:39'),
(26, '38', '111', 'Malcolm Ramos', 'qusym@mailinator.com', '830', '4242424242424242', 'Visa', '2022-04-09 12:47:51', '2022-04-09 12:47:51'),
(27, '39', '113', 'Candice Norton', 'wapulediq@mailinator.com', '84', '4242424242424242', 'Visa', '2022-04-09 13:51:29', '2022-04-09 13:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_factor_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_team_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, 'd1ywZHH1S3K6M7gLW6BkUAKDxnG8zEf10p0kR4sbUypzmfVZpKpB4WL86g8v', NULL, NULL, '2022-04-09 07:55:19', '0000-00-00 00:00:00'),
(32, 'Keiko Bartlett', 'gaqoz@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 22:54:41', '2022-04-08 22:54:41'),
(33, 'Rhoda Robbins', 'm.nabeel082@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 23:35:49', '2022-04-08 23:35:49'),
(34, 'Micah Hobbs', 'byvi@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 23:43:36', '2022-04-08 23:43:36'),
(35, 'Sybill Lang', 'xiwum@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 23:47:06', '2022-04-08 23:47:06'),
(36, 'huzaifa munir', 'Khuzaifamunir123@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 23:50:55', '2022-04-08 23:50:55'),
(37, 'Ralph Harrison', 'xycasohojy@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-09 12:06:39', '2022-04-09 12:06:39'),
(38, 'Malcolm Ramos', 'qusym@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-09 12:47:51', '2022-04-09 12:47:51'),
(39, 'Candice Norton', 'wapulediq@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-09 13:51:29', '2022-04-09 13:51:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bedsizes`
--
ALTER TABLE `bedsizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beedings`
--
ALTER TABLE `beedings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabrics`
--
ALTER TABLE `fabrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matching_storages`
--
ALTER TABLE `matching_storages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mattresssizes`
--
ALTER TABLE `mattresssizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_sale_product`
--
ALTER TABLE `monthly_sale_product`
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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sofa_options`
--
ALTER TABLE `sofa_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stool_options`
--
ALTER TABLE `stool_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `StripeSettings`
--
ALTER TABLE `StripeSettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transations`
--
ALTER TABLE `transations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bedsizes`
--
ALTER TABLE `bedsizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `beedings`
--
ALTER TABLE `beedings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `fabrics`
--
ALTER TABLE `fabrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `matching_storages`
--
ALTER TABLE `matching_storages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mattresssizes`
--
ALTER TABLE `mattresssizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `monthly_sale_product`
--
ALTER TABLE `monthly_sale_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sofa_options`
--
ALTER TABLE `sofa_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stool_options`
--
ALTER TABLE `stool_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `StripeSettings`
--
ALTER TABLE `StripeSettings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transations`
--
ALTER TABLE `transations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
