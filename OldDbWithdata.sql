-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2022 at 12:14 AM
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
(3, 'diamond', '0.5', 'girl-with-red-hat-IKJ8k8cfHnY-unsplash.jpg', '2022-03-30 19:02:38', '2022-03-30 19:02:38'),
(4, 'bedbutton', '0.3', 'ekaterina-grosheva-2zbBqwe5TZA-unsplash.jpg', '2022-03-30 19:32:31', '2022-03-30 19:36:55');

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
(8, 'king 5 feets', '2022-03-30 16:27:54', '2022-04-01 17:52:57'),
(9, 'king 6 feet', '2022-04-02 13:46:35', '2022-04-02 13:46:35');

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
(3, 'blue col', '20', 'ezgif.com-gif-maker (3).png', '2022-03-30 15:33:22', '2022-04-01 17:51:19'),
(5, 'Red', '22', 'red-color-solid-background-1920x1080.png', '2022-04-02 15:34:16', '2022-04-02 15:34:16');

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

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `p_orignal_price`, `p_id`, `options`, `qty`, `p_price`, `sale`, `created_at`, `updated_at`) VALUES
(210, '1649047226', '74.4', '24', '[\"bed size:6 seater\",\"type:sale\",\"Blue fabric:10\",\"blue col:20\",null,null,null,null,null]', '2', '108.8', '1', '2022-04-04 13:02:01', '2022-04-04 13:05:37'),
(211, '1649055575', '2233', '83', '[\"bed size:king 5 feets\",null,null,null,null,null,null,\"free:0\"]', '1', '2233', NULL, '2022-04-04 13:09:24', '2022-04-04 13:09:24'),
(212, '1649051018', '702.5', '13', '[\"bed size:king 5 feets\",\"fabric=Blue fabric:10\",\"beeding=blue col:20\",\"matching storage=sidebox:2\",\"mattress=5feets length  height11cm:50\",\"addon=diamond:0.5\",\"liftupstorage:yes\",\"pick up:20\"]', '1', '702.5', NULL, '2022-04-04 13:11:45', '2022-04-04 13:11:45'),
(213, '1649048347', '195.3', '113', '[\"bed size:king 6 feet\",\"fabric=Red11:.8\",\"beeding=blue col:20\",\"matching storage=sidebox:2\",\"mattress=5feets length  height11cm:50\",\"addon=diamond:0.5\",\"liftupstorage:yes\",\"pick up:20\"]', '1', '195.3', NULL, '2022-04-04 15:14:31', '2022-04-04 15:14:31'),
(214, '1649229811', '4010', '23', '[\"bed size:6 seater\",\"fabric=Blue fabric:10\",null,null,null,null,null,null]', '1', '4010', NULL, '2022-04-06 14:07:53', '2022-04-06 14:07:53'),
(217, '1649315274', '750', '14', '[\"bed size:6 seater\",\"fabric=Blue fabric:10\",\"beeding=blue col:20\",null,null,null,null,\"pick up:20\"]', '1', '750', NULL, '2022-04-07 13:57:47', '2022-04-07 13:57:47'),
(218, '1649315274', '54.4', '24', '[\"bed size:6 seater\",\"type:sale\",\"Blue fabric:10\",null,null,null,null,null,\"delivery:20\"]', '1', '54.4', '1', '2022-04-07 15:02:39', '2022-04-07 15:02:39');

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
(6, 'Jael Weaver', 'vifyl@mailinator.com', '+1 (184) 705-4288', 'Tempor officiis et e', '2022-04-01 16:00:19', '2022-04-01 16:00:19'),
(17, 'Noel Gallagher', 'tyqip@mailinator.com', '+1 (963) 532-8057', 'Ipsam adipisci qui c', '2022-04-01 17:01:59', '2022-04-01 17:01:59'),
(18, 'Luke Mitchell', 'zivan@mailinator.com', '+1 (986) 647-7866', 'Non sint nulla lauda', '2022-04-01 17:17:40', '2022-04-01 17:17:40'),
(19, 'Ferris Dodson', 'qorafuk@mailinator.com', '+1 (774) 727-4034', 'Tempor consequatur', '2022-04-01 17:18:52', '2022-04-01 17:18:52'),
(20, 'Lane Burgess', 'myfo@mailinator.com', '+1 (647) 112-5874', 'Ad voluptatibus nece', '2022-04-01 17:23:39', '2022-04-01 17:23:39'),
(21, 'test', 'khuzaifamunir123@gmail.com', '13333', 'asdadad', '2022-04-02 12:42:30', '2022-04-02 12:42:30'),
(22, 'Lila Diaz', 'xykisa@mailinator.com', '+1 (684) 226-8971', 'Culpa libero cupidit', '2022-04-05 15:51:34', '2022-04-05 15:51:34'),
(23, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '45346346', 'gfdfgdfghdfghsdfgsdf', '2022-04-05 16:25:49', '2022-04-05 16:25:49'),
(24, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (175) 796-4926', 'HGHJGJKH', '2022-04-05 17:07:31', '2022-04-05 17:07:31'),
(25, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (175) 796-4926', 'HGHJGJKH', '2022-04-05 17:10:23', '2022-04-05 17:10:23'),
(26, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (175) 796-4926', 'HGHJGJKH', '2022-04-05 17:11:21', '2022-04-05 17:11:21'),
(27, 'majid', 'shahmajid508@gmail.com', '467656757634', 'fjsdflkgjdfslkgjdslkafjslkdfj', '2022-04-05 17:27:48', '2022-04-05 17:27:48'),
(28, 'majid', 'shahmajid508@gmail.com', '467656757634', 'fjsdflkgjdfslkgjdslkafjslkdfj', '2022-04-05 17:34:19', '2022-04-05 17:34:19'),
(29, 'majid', 'shahmajid508@gmail.com', '467656757634', 'fjsdflkgjdfslkgjdslkafjslkdfj', '2022-04-05 17:34:43', '2022-04-05 17:34:43'),
(30, 'majid', 'shahmajid508@gmail.com', '6786786', 'hghbgmnbnm', '2022-04-05 17:35:55', '2022-04-05 17:35:55'),
(31, 'majid', 'shahmajid508@gmail.com', '6786786', 'hghbgmnbnm', '2022-04-05 17:36:29', '2022-04-05 17:36:29'),
(32, 'majid', 'shahmajid508@gmail.com', '6786786', 'hghbgmnbnm', '2022-04-05 17:39:54', '2022-04-05 17:39:54'),
(33, 'majid', 'shahmajid508@gmail.com', '6786786', 'hghbgmnbnm', '2022-04-05 17:41:23', '2022-04-05 17:41:23'),
(34, 'majid', 'shahmajid508@gmail.com', '6786786', 'hghbgmnbnm', '2022-04-05 17:49:37', '2022-04-05 17:49:37'),
(35, 'majid', 'shahmajid508@gmail.com', '6786786', 'hghbgmnbnm', '2022-04-05 17:57:08', '2022-04-05 17:57:08'),
(36, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (837) 698-4437', 'gfhjghjghj', '2022-04-05 17:57:32', '2022-04-05 17:57:32'),
(37, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (184) 374-1895', 'ghjghkhh', '2022-04-06 15:23:10', '2022-04-06 15:23:10'),
(38, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (184) 374-1895', 'tgfhgfhgfh', '2022-04-06 15:25:25', '2022-04-06 15:25:25'),
(39, 'Lunch', 'admin@gmail.com', '+1 (837) 698-4437', 'SDFSD', '2022-04-06 15:27:06', '2022-04-06 15:27:06'),
(40, 'Dinner', 'm.nabeel082@gmail.com', '+1 (184) 374-1895', 'ETER', '2022-04-06 15:27:49', '2022-04-06 15:27:49'),
(41, 'FAST  FOODS', 'm.nabeel082@gmail.com', '+1 (184) 705-4288', 'dfgdfgsdf', '2022-04-06 15:30:08', '2022-04-06 15:30:08'),
(42, 'swat furniture', 'admin@gmail.com', '+1 (837) 698-4437', 'rt', '2022-04-06 15:32:19', '2022-04-06 15:32:19'),
(43, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (175) 796-4926', 'ukuikk', '2022-04-06 15:32:54', '2022-04-06 15:32:54'),
(44, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '03469320082', 'wererwertwert', '2022-04-06 15:35:39', '2022-04-06 15:35:39'),
(45, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (837) 698-4437', 'fdgdfghdfg', '2022-04-06 15:40:34', '2022-04-06 15:40:34');

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
(36, 'Blue fabric', '10', 'ezgif.com-gif-maker (3).png', '2022-03-30 15:32:19', '2022-04-01 17:46:47'),
(38, 'Red11', '.8', 'ezgif.com-gif-maker (4).png', '2022-03-30 19:15:07', '2022-03-30 19:15:31');

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
(1, 'sidebox', '2', 'ezgif.com-gif-maker.jpg', '2022-03-21 19:15:53', '2022-03-21 19:15:53'),
(3, 'storagebox', '80', '1647944963.pair-of-cream-storage-footstools-p63202-90185_zoom.jpg', '2022-03-30 19:47:55', '2022-03-30 19:48:09');

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
(5, '5feets length  height11cm', '50', 'mattress11cm.webp', '2022-03-21 18:33:10', '2022-03-21 18:33:10');

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
(28, 'May Sale', '24', 'May 19, 2022 07:06:25', '60', '<p>Get 60% off</p>', '2022-04-01 20:06:34', '2022-04-01 20:06:34');

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
(95, '29', 'Hunter Santos', 'bysadacone@mailinator.com', 'UK', 'Culpa voluptate est', '80', 'Sit in maxime qui no', '11139', 'Odio quod eum id do', 'Cash on delivery', '161', '2022-04-03', '0', '[{\"id\":206,\"user_id\":\"1648986996\",\"p_orignal_price\":\"161\",\"p_id\":\"29\",\"options\":\"[\\\"bed size:6 seater\\\",\\\"fabric=Blue fabric:10\\\",\\\"beeding=blue col:20\\\",null,null,null,null,\\\"pick up:20\\\"]\",\"qty\":\"1\",\"p_price\":\"161\",\"sale\":null,\"created_at\":\"2022-04-03T14:30:55.000000Z\",\"updated_at\":\"2022-04-03T14:30:55.000000Z\"}]', '2022-04-03 20:31:56', '2022-04-03 20:31:56'),
(96, '30', 'Daniyal Rehman', 'Daniyalrehman29@gmail.com', 'UK', 'Batley', '07305733244', '54 Warwick road', '46000', 'N/a', 'Payment with card', '343', '2022-04-03', '1', '[{\"id\":207,\"user_id\":\"1648996137\",\"p_orignal_price\":\"343\",\"p_id\":\"108\",\"options\":\"[\\\"bed size:king 5 feets\\\",\\\"fabric=Blue fabric:10\\\",null,null,null,null,null,\\\"free:0\\\"]\",\"qty\":\"1\",\"p_price\":\"343\",\"sale\":null,\"created_at\":\"2022-04-03T14:31:00.000000Z\",\"updated_at\":\"2022-04-03T14:31:00.000000Z\"}]', '2022-04-03 20:35:31', '2022-04-03 20:35:31'),
(97, '30', 'Daniyal Rehman', 'Daniyalrehman29@gmail.com', 'UK', 'Batley', '07305733244', '54 Warwick road', '46000', 'N/a', 'Cash on delivery', '343', '2022-04-03', '1', '[{\"id\":207,\"user_id\":\"1648996137\",\"p_orignal_price\":\"343\",\"p_id\":\"108\",\"options\":\"[\\\"bed size:king 5 feets\\\",\\\"fabric=Blue fabric:10\\\",null,null,null,null,null,\\\"free:0\\\"]\",\"qty\":\"1\",\"p_price\":\"343\",\"sale\":null,\"created_at\":\"2022-04-03T14:31:00.000000Z\",\"updated_at\":\"2022-04-03T14:31:00.000000Z\"}]', '2022-04-03 20:36:09', '2022-04-03 20:37:45'),
(98, '31', 'Imogene Turner', 'duci@mailinator.com', 'UK', 'Adipisicing expedita', '42', 'Ea laudantium dolor', '61435', 'Elit mollitia excep', 'Cash on delivery', '420', '2022-04-03', '0', '[{\"id\":208,\"user_id\":\"1648986996\",\"p_orignal_price\":\"420\",\"p_id\":\"15\",\"options\":\"[\\\"bed size:king 5 feets\\\",null,null,null,null,null,null,\\\"pick up:20\\\"]\",\"qty\":\"1\",\"p_price\":\"420\",\"sale\":null,\"created_at\":\"2022-04-03T14:36:14.000000Z\",\"updated_at\":\"2022-04-03T14:36:14.000000Z\"}]', '2022-04-03 20:36:45', '2022-04-03 20:36:45'),
(99, '4', 'Ghu', 'Khuzaifamunir123@gmail.com', 'UK', 'Vvgg', '0444', 'Ghv', '44', 'Bxcjcb', 'Cash on delivery', '2253', '2022-04-06', '0', '[{\"id\":215,\"user_id\":\"1649244924\",\"p_orignal_price\":\"2253\",\"p_id\":\"83\",\"options\":\"[\\\"bed size:king 5 feets\\\",null,null,null,null,null,null,\\\"pick up:20\\\"]\",\"qty\":\"1\",\"p_price\":\"2253\",\"sale\":null,\"created_at\":\"2022-04-06T11:37:07.000000Z\",\"updated_at\":\"2022-04-06T11:37:07.000000Z\"}]', '2022-04-06 17:41:26', '2022-04-06 17:41:26');

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
(13, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(14, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(15, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(16, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(19, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(21, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(22, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(23, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(24, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(25, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(26, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(27, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(28, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(29, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(30, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(31, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(32, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(33, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(34, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(35, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(36, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(37, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(38, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(39, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(40, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(41, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(42, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(43, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(44, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(45, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(46, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(47, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(48, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(49, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(50, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(51, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(52, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(53, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(54, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(55, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(56, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(57, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(58, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(59, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(60, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(61, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(63, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(64, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(65, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(66, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(67, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(68, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(69, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(70, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(71, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58'),
(72, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', 'yes', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(73, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(74, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(75, 21, 'The Worcester Bed – Crushed Velvet Bed', '600', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>Specifications:</p><p><br></p><p>Hand deep pleated button detailing across entire bed frame</p><p>Only available with fabric buttons to match the main fabric colour of the bed</p><p>Chesterfield detailing across entire frame</p><p>Available in a variety of different colours and fabrics, please see our fabric samples page for full selection Fabric Samples – The Luxury Bed</p><p>This model is not available with our split headboard option</p><p>Available ottoman storage add on, please select ‘add lift up storage’ from above variations for this feature, please note feature is not available on emperor sized beds(charges may apply)</p><p>1 year manufacturing warranty</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', '', NULL, '2022-03-21 19:45:40', '2022-03-21 19:45:40'),
(76, 23, 'irani sofa', '700', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-22 13:06:58', '2022-03-22 13:06:58');
INSERT INTO `products` (`id`, `categories_id`, `name`, `price`, `image`, `description`, `bedsize_id`, `mattress_id`, `fabric_id`, `beeding_id`, `addon_id`, `sofa_id`, `stool_id`, `buttondiamond_image`, `matching_storage_id`, `liftup_storage`, `is_featured`, `is_sale`, `matching_storagebox_image`, `created_at`, `updated_at`) VALUES
(77, 25, 'china modern mattress', '400', '[\"15cm.jpg\",\"chinamattress (1).jpg\",\"20cm(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Shakespeare All Foam (No Springs) with Cool Gel –&nbsp;<em>25.4cm – Medium</em></p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">A combination of different layers of Latex Foams with different Densities comprising of:</p><ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.41575em; margin-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\"><li style=\"margin-bottom: 3px;\">Orthopaedic Hard Foam Base Layer</li><li style=\"margin-bottom: 3px;\">Reflex Foam Layer for Consistent Support</li><li style=\"margin-bottom: 3px;\">Cool Gel Foam Layer for added comfort which contours to the body shape</li><li style=\"margin-bottom: 3px;\">Covered in Pre-Stitched Zip Cover made with quilted fabric</li></ul>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', NULL, NULL, 'null', '0', '0', 'yes', NULL, '2022-03-22 13:17:40', '2022-03-22 13:17:40'),
(78, 23, 'china tv sofa', '4000', '[\"sofa3(1).jpg\",\"sofa2 (1).jpg\",\"sofa(1).jpg\"]', '<p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">The number of&nbsp; seats and cushions your sofa comes with will depend on the size you select.<br>If you have any bespoke or specific requests, please get in touch.</p><p style=\"margin-right: 0px; margin-bottom: 0.8em; margin-left: 0px; color: rgb(67, 69, 75); font-family: &quot;IBM Plex Sans&quot;; font-size: medium;\">Cinema sofa comes with one cup holder on each side as standard</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', '0', '', NULL, '2022-03-22 13:23:47', '2022-03-22 13:23:47'),
(79, 26, 'Iraq Stool', '111', '[\"pair-of-cream-storage-footstools-p63202-90185_zoom.jpg\"]', '<p>kdnlas</p>', 'null', 'null', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, 'null', '0', 'yes', '', NULL, '2022-03-22 17:16:21', '2022-03-22 17:16:21'),
(80, 25, 'test', '111', '[\"415_2525 - Copy.jpg\"]', '<p>sasas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-03-26 12:31:56', '2022-03-26 12:31:56'),
(81, 21, 'pakistan', '2233', '[\"415_2525 - Copy.jpg\"]', '<p>asdasd</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', '0', NULL, '2022-03-28 15:51:08', '2022-03-29 14:02:22'),
(83, 25, 'adsdas', '2233', '[\"415_2525 - Copy.jpg\"]', '<p>asdasd</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', '0', NULL, '2022-03-28 15:52:10', '2022-03-29 13:54:14'),
(84, 25, 'adsdas', '2233', '[\"415_2525 - Copy.jpg\"]', '<p>asdasd</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', '0', NULL, '2022-03-28 15:53:21', '2022-03-31 15:37:50'),
(85, 25, 'dsv', '333', '[\"415_2525 - Copy.jpg\"]', '<p>vsd</p>', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', '0', NULL, '2022-03-28 19:19:33', '2022-03-29 14:03:58'),
(86, 25, 'sa', '211', '[\"415_2525 - Copy.jpg\"]', '<p>as</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', '0', NULL, '2022-03-28 19:45:24', '2022-03-29 14:05:14'),
(87, 25, 'zX', '12', '[\"415_2525 - Copy.jpg\"]', '<p>xZ</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'no', 'no', NULL, '2022-03-29 17:33:25', '2022-03-29 17:33:25'),
(88, 25, 'dasds', '22', '[\"415_2525 - Copy.jpg\"]', '<p>dasas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', 'no', NULL, '2022-03-30 13:17:18', '2022-03-30 13:17:18'),
(89, 21, 'Kyla Terrell', '550', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>gfdghfghfggdfsgsdfgfsdgsdfgas</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-03-30 16:08:54', '2022-03-30 16:08:54'),
(90, 21, 'nnnnnnn', '2000', '[\"bed11 (2).png\",\"bed11(1).png\"]', '<p>tgdgdfgsdfgsdfg</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"3\"]', '[\"1\"]', '[\"2\"]', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-03-30 16:11:40', '2022-03-30 16:11:40'),
(91, 25, 'test', '217', '[\"415_2525 - Copy.jpg\"]', '<p>ds</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-03-31 13:59:50', '2022-03-31 13:59:50'),
(92, 25, 'test', '111', '[\"415_2525 - Copy.jpg\"]', '<p>fasdfas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-03-31 14:41:42', '2022-03-31 14:41:42'),
(93, 25, 'ddsf', '432', '[\"pille-r-priske-xmuIgjuQG0M-unsplash.jpg\"]', '<p>vxzvc</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 15:20:04', '2022-03-31 15:20:04'),
(94, 25, 'dasdasdasfsvc', '1111', '[\"415_2525 - Copy.jpg\"]', '<p>adasd</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-03-31 15:36:11', '2022-03-31 15:36:11'),
(95, 26, 'dfdsfs', '4324', '[\"brooke-lark-wMzx2nBdeng-unsplash.jpg\"]', '<p>sadsad</p>', 'null', 'null', '[\"38\"]', '[\"3\"]', 'null', 'null', '[\"2\"]', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 16:13:43', '2022-03-31 16:13:43'),
(98, 26, 'dsfsd', 'sad', '[\"580b57fcd9996e24bc43c53e-removebg-preview.png\"]', '<p>dvdsf</p>', 'null', 'null', '[\"38\"]', '[\"4\"]', 'null', 'null', '[\"2\"]', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 16:40:28', '2022-03-31 16:40:28'),
(99, 23, 'dfsd', 'dsfdsf', '[\"YouTube_full-color_icon__2017_.svg-removebg-preview.png\"]', '<p>dsfdsf</p>', 'null', 'null', '[\"38\"]', '[\"4\"]', 'null', '[\"1\"]', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 16:43:02', '2022-03-31 16:43:02'),
(100, 25, 'sas', '2121', '[\"415_2525 - Copy.jpg\"]', '<p>sas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 18:06:11', '2022-03-31 18:06:11'),
(101, 25, 'sas', '2121', '[\"415_2525 - Copy.jpg\"]', '<p>sas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 18:11:27', '2022-03-31 18:11:27'),
(102, 25, 'sas', '2121', '[\"415_2525 - Copy.jpg\"]', '<p>sas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 18:12:08', '2022-03-31 18:12:08'),
(103, 25, 'sas', '2121', '[\"415_2525 - Copy.jpg\"]', '<p>sas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 18:12:28', '2022-03-31 18:12:28'),
(104, 25, 'sas', '2121', '[\"415_2525 - Copy.jpg\"]', '<p>sas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 18:12:45', '2022-03-31 18:12:45'),
(105, 25, 'jhgjhgj', '6565', '[\"415_2525 - Copy.jpg\"]', '<p>kghmhg</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 18:15:51', '2022-03-31 18:15:51'),
(106, 25, 'Mattress abc', '121`', '[\"1648731224.jpg\"]', '<p>dasdas</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 18:53:44', '2022-03-31 18:53:44'),
(107, 25, 'test mattress', '2222', '[\"1648731325.jpg\"]', '<p>vdvdfv</p>', '[\"8\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', '0', 'yes', NULL, '2022-03-31 18:55:24', '2022-03-31 18:55:24'),
(108, 27, 'kids', '333', '[\"KKTB001_1-870x539-320x320.jpg\"]', '<p>wefew</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"3\"]', '[\"4\"]', 'null', 'null', NULL, '[\"3\"]', 'no', 'yes', 'yes', NULL, '2022-04-02 12:30:09', '2022-04-02 12:30:09'),
(109, 21, 'Reese Gallegos', '415', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>fdsafjsdaklfjslkadasdj</p>', '[\"9\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"4\"]', 'null', 'null', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-04-02 13:53:38', '2022-04-02 13:53:38'),
(110, 21, 'Felicia Roach', '879', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>jhkjlhlkjhlkhlgjlkhlkhlk</p>', '[\"9\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"4\"]', 'null', 'null', NULL, '[\"3\"]', 'yes', 'yes', 'yes', NULL, '2022-04-02 14:04:47', '2022-04-02 14:04:47'),
(111, 21, 'Keith Figueroa', '564', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>hghkhjghjg</p>', '[\"8\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"3\"]', '[\"4\"]', 'null', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-04-02 14:27:09', '2022-04-02 14:27:09'),
(112, 21, 'Tallulah Anthony', '946', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>hjjklhjlkhjklhjlk</p>', '[\"9\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"4\"]', 'null', 'null', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-04-02 14:32:10', '2022-04-02 14:32:10'),
(113, 21, 'Camden Davis', '102', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>gdfhfdhjgfhsfdh</p>', '[\"9\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"3\"]', 'null', 'null', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-04-02 14:36:29', '2022-04-02 14:36:29'),
(114, 21, 'Caldwell Tillman', '277', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>hjghjghj</p>', '[\"9\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"4\"]', 'null', 'null', NULL, '[\"3\"]', 'yes', 'yes', 'yes', NULL, '2022-04-02 15:04:55', '2022-04-02 15:04:55'),
(115, 21, 'Gemma Hewitt', '195', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>dgffdsghggdfsgsdfg</p>', '[\"9\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"3\"]', 'null', 'null', NULL, '[\"3\"]', 'yes', 'yes', 'yes', NULL, '2022-04-02 15:14:40', '2022-04-02 15:14:40'),
(116, 21, 'Colleen Rowe', '312', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>gdfghgjghjkghsdfghsdfghsdfg</p>', '[\"9\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"4\"]', 'null', 'null', NULL, '[\"3\"]', 'yes', 'yes', 'yes', NULL, '2022-04-02 15:19:20', '2022-04-02 15:19:20'),
(121, 21, 'mardan furniture', '1200', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>fggg</p>', '[\"8\"]', '[\"5\"]', '[\"38\"]', '[\"3\"]', '[\"4\"]', 'null', 'null', NULL, '[\"3\"]', 'yes', 'yes', 'yes', NULL, '2022-04-04 14:17:54', '2022-04-04 14:17:54'),
(122, 21, 'swat   furniture1', '2000', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>dgfdsgdfgdfgdfsgdsfag</p>', '[\"9\"]', '[\"5\"]', '[\"36\"]', '[\"5\"]', 'null', 'null', 'null', NULL, 'null', 'yes', 'yes', 'yes', NULL, '2022-04-04 14:22:36', '2022-04-04 14:22:36'),
(123, 21, 'dool type bed', '400', '[\"bed11 (2).png\",\"bed11(1).png\",\"bed11.png\"]', '<p>hfsdjkfhdsajkfhasdkj</p>', '[\"8\"]', '[\"5\"]', '[\"36\"]', '[\"5\"]', '[\"4\"]', 'null', 'null', NULL, '[\"1\"]', 'yes', 'yes', 'yes', NULL, '2022-04-06 13:25:16', '2022-04-06 13:25:16');

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

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `product_id`, `name`, `email`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(2, '24', 'test', 'khuzaifamunir123@gmail.com', 'sdfadfs', '3', '2022-04-05 16:04:29', '2022-04-05 16:04:29'),
(3, '24', 'test', 'khuzaifamunir123@gmail.com', 'exrdtfyvgbuhnijmkol,;nbytvrewWzerdfgh jkrdsa3s4wertvybuinjmok', '3', '2022-04-05 16:11:45', '2022-04-05 16:11:45'),
(4, '24', 'test', 'khuzaifamunir123@gmail.com', 'rwtghyuiopo;likuyjthrgefwdefrg', '4', '2022-04-05 16:12:14', '2022-04-05 16:12:14'),
(5, '24', 'test', 'khuzaifamunir123@gmail.com', 'exrdtfyvgbuhnijmkol,;nbytvrewWzerdfgh jkrdsa3s4wertvybuinjmokexrdtfyvgbuhnijmkol,;nbytvrewWzerdfgh jkrdsa3s4wertvybuinjmok', '4', '2022-04-05 16:20:04', '2022-04-05 16:20:04'),
(6, '84', 'huzaifa', 'khuzaifamunir123@gmail.com', 'Good product', '4', '2022-04-06 14:17:37', '2022-04-06 14:17:37'),
(7, '123', 'Muhammad Nabeel', 'm.nabeel082@gmail.com', 'hgjghj', '5', '2022-04-06 15:46:17', '2022-04-06 15:46:17'),
(8, '123', 'Dinner', 'm.nabeel082@gmail.com', 'ytuytuyti', '2', '2022-04-06 15:49:38', '2022-04-06 15:49:38'),
(9, '123', 'Muhammad Nabeel', 'm.nabeel082@gmail.com', 'tuyhghjg', '2', '2022-04-06 15:56:57', '2022-04-06 15:56:57'),
(10, '123', 'Muhammad Nabeel', 'm.nabeel082@gmail.com', 'jhjjkh', '3', '2022-04-06 15:59:27', '2022-04-06 15:59:27'),
(11, '35', 'test', 'khuzaifamunir123@gmail.com', 'sdasdas', '2', '2022-04-07 17:33:59', '2022-04-07 17:33:59'),
(12, '35', 'index.phpdsadasd', 'khuzaifamunir123@gmail.com', 'sadasd', '3', '2022-04-07 17:35:12', '2022-04-07 17:35:12'),
(13, '84', 'test', 'khuzaifamunir123@gmail.com', 'adssad', '1', '2022-04-07 17:47:10', '2022-04-07 17:47:10'),
(14, '72', 'nice', 'rfaizan763@gmail.com', 'nice', '4', '2022-04-07 17:49:24', '2022-04-07 17:49:24'),
(15, '16', 'xzc', 'rfaizan763@gmail.com', 'adsa', '5', '2022-04-07 17:50:35', '2022-04-07 17:50:35'),
(16, '23', 'dsa', 'rfaizan763@gmail.com', 'sadsa', '4', '2022-04-07 17:51:04', '2022-04-07 17:51:04');

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
('NdHgZf1NGMEtJ9dS2rermwkpKO5tObI65ndMJO5a', NULL, '207.46.13.31', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZUs1TUlpU1owd1BXUGk1ZG55d21EQ2EyRUJDRVoyY1JpdVFXdXRtQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvOTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649381732),
('VOXvAIcl6x7VsGLmdheb3EKFFWNhFm9WhZ6N3zmw', NULL, '178.128.0.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYkVSQ3lVWXZPYVJnbnJ5QktOb2RIMFpNUFdCY2txbDA2dzFqMWJESiI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5MzgyMDMyO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649382032),
('36ONr13uUKCyWfbVPpi9obxJxICUqEmGEVky9iFq', NULL, '34.141.253.63', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36/Ydz1QUJc-4', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOWxsdEhTZVdkRGhSeTJWdVB1MWpQNzh2Z3piNWRWd0YzN2hyTG52RSI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5Mzg2MDM0O3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649386034),
('fzG6keoVgyZJ2nKg2qZiNKHD7Pb0tO5WcVA2Szri', NULL, '34.141.253.63', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36/Ydz1QUJc-4', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZlJmaFEzQ3hGSHBnMWhONXJCdnpDYThyZ0FSQTljeFhvbmYzRlpWQSI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5Mzg2MDM1O3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649386035),
('G8p3a37jsBuqzUs3502muSc76lDhQ0ZDPBonQrpt', NULL, '34.141.253.63', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36/Ydz1QUJc-4', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicEhqMlI1YTVYNTlhU3l3TUhRcVJUMVdYczhkcUZpQU1DbGduTDlhbCI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5Mzg2MDM1O3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649386035),
('QR68QgAkMqcMD83u7oyP6AC9ecT1mt4NSWbm115I', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUpvZlFqYjV0WG9tRUgwODIxOXNHWVVQWG5tUEo5UDdnek5UMXBlViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNzAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649391687),
('cRRTH8gFPSiKxhz78gisQ3o8vXowFlGhny6SGzME', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWNuWHpGYWJZY25HSDNEUU5tWjR6aXRDd3BqSnhkOGlqdVd6Y242bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMzUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393099),
('FsVEuJhul6brJLs11nz0AAslNXuBc0USV9J3HmKS', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidk9UNXptdWVSWHp3c09wSzY4VWJPUXdwV0ZFYkFUUlE3UkNSd29YeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMjUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393730),
('zyRdbkaSzQkMmKcG0vj0z5MM2GerBtnqpTZDEsJP', NULL, '207.46.13.31', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOElUSHRwT0hoVW1WamJrZFY1RXZDWVNjRkZ5VTBMQkZGWFZvTDg2RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdC8yMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649393742),
('TKJASTYav1cjczOOmPB40PIyKZn7jf48qSpZcxcR', NULL, '207.46.13.31', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0U0MWFSN05sam9Pa2QxTlh0S2xoVUFZMFhlSFgzTnhiQ3lHbDcyYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393861),
('9PjdwcNW4O3dG3ITYjfIGefMHhFdiGWYWM5rmWq6', NULL, '207.46.13.31', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDI3T1N4TEtHVWNseVFvVGxQQnhmVEdmREtRdmNOcnlrclViWGRFUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMjgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393863),
('nCqINu9qCU6O6Vn6eo4OW7IvWWk5BVLiY6XWcxv0', NULL, '157.55.39.4', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT2tkN2VjQkNBWUZ3SmIya1ZpQmdqaEhESzkzWEtRTThteUgwVjkxeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393864),
('hi7ybCnXIjJe4zjG3HZcHtJ7mmclKgjT1Dz2e4R5', NULL, '157.55.39.4', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRkowRWZVMnd1TDdCN09JY1Nub1RUbm5HbXRjTmVvaVlyd0NVV2c1aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMjYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393866),
('2ua9twd78HPhVL90LvLVvvGYRyAYgeiUVwqjZV8w', NULL, '207.46.13.31', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTm1Lc0d6NjBpZHlCeU9VcXR4MVkzcktYZDRHUHl3blQ0cmRRM1ZRaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNDgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393866),
('sfnwVqZUaefCmX9aWGJCE1NhPxzZu7JCgQvFli51', NULL, '40.77.167.12', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDE4Z0plUTlSUng1MFRndGNvN1hWOFVHQThFb2V1OTM3VE1zcjlZRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNjEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393866),
('H1xWFmTEvWY1iIvcYeHdcOy38b9OAQVPFF6Wzeo4', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVdkT0s2eWN5RUVtc3UydlVuNUVFU2ZzME11b3RnR3c0Wk02WWc1aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNTMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393869),
('DkyIuPjTS8P4wvAniHoR8gw211FRetoHAq7a8htm', NULL, '207.46.13.107', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieWdNaXhmSzRqVnd5WHNWTVUxcmU5aFNvZzhnbWJFSVFSVU91V2dxUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393870),
('VFa6Ng89XNAdBtmj57GaQkiY264unVpUO9k0JZlu', NULL, '40.77.167.54', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3NSSDF4MUJsMUl2ekpvTmhoRklpVTRrb3B3MVNvbzRxeUFaOEpmWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMjMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393872),
('K7Luw194uw93af8VC9MZSySlJnPZAgZw7II7tgsq', NULL, '207.46.13.107', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibTh5ZmlJV3J0anVUR1ZJanFmS05pSFo4UHE4MzlTQjgwdFY4OFlxRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNTYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393873),
('Io36wFkauPBZ8ga7OKoG7z3SJjFD1O01L0bfKxLK', NULL, '207.46.13.107', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3VodjBTa1QxZ1M5RVgyYU1mUGNaemJoQWxMdjhHOHdha1JKQlJNOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvNDEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393880),
('RZxtY6hv9RpaVi97jafqpPzKTd65vAs8rg9l8HEg', NULL, '207.46.13.31', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWFEaFJhZlRzekQ1dXQyOEtDTHRYZnVETFVpOGtjU1RpWEFFS1MzTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdHBhZ2UvMzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649393880),
('KmieOd9JSYIBbIHG7HJngOLENv0b6IWxuNy7Qobu', NULL, '34.91.105.70', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieUtoeVBNRVZTUUp1OGtTVGQxVVhtZ0VaWVY3TzU2NUlaTU1HeFJNTSI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5MzkzOTYxO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649393961),
('vrstAeuVC5qybh0ZidtGnuke47YoEypJ149jKk8R', NULL, '34.91.105.70', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU2VtS1N6MzB2WWhydFJ3THgzM0pKa0lCc2VoUlBUOTFhYXVGaElwayI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5MzkzOTYyO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649393962),
('L8OuwzdForJaXptAnoOSMVaOmB2IvfhTKIQzFkc7', NULL, '34.91.105.70', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ20zSkhwdXMzSFI2emI4UDduNXZGc0xtbnYzME82YkNDZE1pZ2prMyI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5MzkzOTYyO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649393962),
('twdiboEwh9z2mQretvQHU4cqVjvbmheI87XkpcTa', NULL, '129.132.175.82', 'Mozilla/5.0 (X11; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieGdNelVCdENoUlN4TFlDV3pNUGlNZlJDNXJHNlljS2pZeDhkbjBuVCI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjQ5Mzk1MDQwO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwczovL3d3dy5iZWRzYW5kYm9sdHMuY28udWsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649395040),
('oweYtOW62T0XXNiiOfbwERQ1UjtLlffuThc56TRI', 1, '115.186.169.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWFVrRWF4Rm55VXZSUVNWZWFoY1NIYm5HZ0xyajJKWkpYTmF0T25nNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmVkc2FuZGJvbHRzLmNvLnVrL3N0cmlwZXNldHRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHZNQUhJU1FVcllHSmlhcDViRjJiNWV4ZzNrTUVtcy9pR3h1VWJPNVRVbEVacjRzZ0dWUTMyIjt9', 1649398411);

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
(1, '6 seater', '2022-03-21 16:16:18', '2022-03-31 13:41:42'),
(4, 'irani', '2022-03-31 13:49:16', '2022-03-31 13:51:12'),
(5, '5 seater', '2022-04-04 13:46:19', '2022-04-04 13:46:19');

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
(2, '80cm diameter x 40cm high', '2022-03-22 16:59:58', '2022-03-31 13:52:33');

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
(1, 'khuzaifamunir123@gmail.com', '2022-03-28 14:11:15', '2022-03-28 14:11:15'),
(2, 'khuzaifamunir1235@gmail.com', '2022-03-29 12:26:57', '2022-03-29 12:26:57'),
(3, 'rfaizan763@gmail.com', '2022-03-31 16:21:25', '2022-03-31 16:21:25'),
(4, 'm.nabeel082@gmail.com', '2022-04-02 12:34:43', '2022-04-02 12:34:43'),
(5, 'asdasd@gmail.com', '2022-04-02 15:31:50', '2022-04-02 15:31:50'),
(6, 'zeeshan@gmail.com', '2022-04-02 15:56:39', '2022-04-02 15:56:39'),
(7, 'admin@gmail.com', '2022-04-02 16:01:56', '2022-04-02 16:01:56'),
(8, 'amin@gmail.com', '2022-04-02 16:04:00', '2022-04-02 16:04:00'),
(9, 'majid123@gmail.com', '2022-04-02 16:12:56', '2022-04-02 16:12:56'),
(10, 'amin123@gmasil.com', '2022-04-02 16:17:53', '2022-04-02 16:17:53'),
(11, 'yousafzai@gmail.com', '2022-04-02 16:21:07', '2022-04-02 16:21:07'),
(12, 'amin6565@gmail.com', '2022-04-02 16:56:23', '2022-04-02 16:56:23');

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
(1, '4', '58', 'Huzaifa', 'khuzaifamunir123@gmail.com', '743', '4242 4242 4242 4242', NULL, '2022-03-27 14:32:47', '2022-03-27 14:32:47'),
(2, '4', '59', 'Huzaifa', 'khuzaifamunir123@gmail.com', '743', '4242 4242 4242 4242', NULL, '2022-03-27 14:36:38', '2022-03-27 14:36:38'),
(3, '4', '60', 'Huzaifa', 'khuzaifamunir123@gmail.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 14:44:25', '2022-03-27 14:44:25'),
(4, '4', '61', 'ewq', 'khuzaifamunir123@gmail.com', '420', '4762150043022550', NULL, '2022-03-27 14:47:37', '2022-03-27 14:47:37'),
(5, '4', '62', 'ewq', 'khuzaifamunir123@gmail.com', '420', '4762150043022550', NULL, '2022-03-27 14:47:37', '2022-03-27 14:47:37'),
(6, '4', '63', 'qw``', 'khuzaifamunir123@gmail.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 14:59:58', '2022-03-27 14:59:58'),
(7, '4', '64', 'qw``', 'khuzaifamunir123@gmail.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 15:01:14', '2022-03-27 15:01:14'),
(8, '4', '65', 'Huzaifa', 'khuzaifamunir123@gmail.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 15:06:53', '2022-03-27 15:06:53'),
(9, '10', '66', 'Kevin Santana', 'gahizima@mailinator.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 15:08:51', '2022-03-27 15:08:51'),
(10, '11', '67', 'Acton Patterson', 'sasity@mailinator.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 15:11:28', '2022-03-27 15:11:28'),
(11, '12', '68', 'Palmer Galloway', 'toqenu@mailinator.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 15:22:04', '2022-03-27 15:22:04'),
(12, '13', '69', 'Blythe Carr', 'cuci@mailinator.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 15:50:27', '2022-03-27 15:50:27'),
(13, '14', '70', 'Zelda Langley', 'fykyzar@mailinator.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 15:56:20', '2022-03-27 15:56:20'),
(14, '15', '71', 'Leonard Macias', 'pinideha@mailinator.com', '420', '4242 4242 4242 4242', NULL, '2022-03-27 17:28:41', '2022-03-27 17:28:41'),
(15, '17', '74', 'Finn Mcgee', 'demefe@mailinator.com', '420', '4242 4242 4242 4242', 'Visa', '2022-03-27 17:57:21', '2022-03-27 17:57:21'),
(16, '5', '77', 'Aspen Haynes', 'm.nabeel082@gmail.com', '2233', '4242424242424242', 'Visa', '2022-03-29 16:05:20', '2022-03-29 16:05:20'),
(17, '4', '78', 'Yhh', 'Khuzaifamunir123@gmail.com', '2253', '4242424242424242', 'Visa', '2022-03-30 06:50:56', '2022-03-30 06:50:56'),
(18, '30', '96', 'Daniyal Rehman', 'Daniyalrehman29@gmail.com', '343', '42424242424242', 'Visa', '2022-04-03 20:35:31', '2022-04-03 20:35:31');

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
(1, 'admin', 'admin@gmail.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, '4l95vcbmmE2JC5RBUaTyMUj8jJ22Cs4Y44o4J4Mcgaxlr0NlHIG5naPkB5nx', NULL, NULL, '2022-04-05 09:42:32', '0000-00-00 00:00:00'),
(2, 'Huzaifa', 'info@codify.pk', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-20 18:26:59', '2022-03-20 18:26:59'),
(3, 'Huzaifa', '1@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-20 18:46:25', '2022-03-20 18:46:25'),
(4, 'dasdas', 'khuzaifamunir123@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-20 19:20:40', '2022-03-20 19:20:40'),
(5, 'asdas', 'm.nabeel082@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-21 12:45:46', '2022-03-21 12:45:46'),
(6, 'faizan', 'rfaizan763@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-26 17:16:38', '2022-03-26 17:16:38'),
(7, 'Umer', 'Jekeifksnd', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-26 17:21:13', '2022-03-26 17:21:13'),
(8, 'Umer', 'Uzafar430@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-26 17:22:03', '2022-03-26 17:22:03'),
(9, 'faizan', 'ah759886@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-26 19:32:22', '2022-03-26 19:32:22'),
(10, 'Kevin Santana', 'gahizima@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 15:08:51', '2022-03-27 15:08:51'),
(11, 'Acton Patterson', 'sasity@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 15:11:28', '2022-03-27 15:11:28'),
(12, 'Palmer Galloway', 'toqenu@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 15:22:04', '2022-03-27 15:22:04'),
(13, 'Blythe Carr', 'cuci@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 15:50:27', '2022-03-27 15:50:27'),
(14, 'Zelda Langley', 'fykyzar@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 15:56:20', '2022-03-27 15:56:20'),
(15, 'Leonard Macias', 'pinideha@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 17:28:41', '2022-03-27 17:28:41'),
(16, 'Yoko Larsen', 'jafimu@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 17:56:18', '2022-03-27 17:56:18'),
(17, 'Finn Mcgee', 'demefe@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 17:57:00', '2022-03-27 17:57:00'),
(18, 'Nero Deleon', 'kabici@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-27 20:14:29', '2022-03-27 20:14:29'),
(19, 'Leilani Gilmore', 'xojekevud@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-31 16:35:46', '2022-03-31 16:35:46'),
(20, 'Leroy Douglas', 'rine@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-03-31 17:14:21', '2022-03-31 17:14:21'),
(21, 'Merritt Cabrera', 'rofi@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-01 13:00:52', '2022-04-01 13:00:52'),
(22, 'Hollee Wallace', 'ruqydati@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-01 13:12:43', '2022-04-01 13:12:43'),
(23, 'Beck Preston', 'dujexe@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-01 13:14:27', '2022-04-01 13:14:27'),
(24, 'Carolyn Cunningham', 'hagid@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-01 13:17:40', '2022-04-01 13:17:40'),
(25, 'Brenna Avila', 'taxumaj@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-01 16:19:11', '2022-04-01 16:19:11'),
(26, 'Miranda Oneil', 'jageju@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-01 16:52:04', '2022-04-01 16:52:04'),
(27, 'Brody Barr', 'kava@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-01 17:06:39', '2022-04-01 17:06:39'),
(28, 'Timothy Vargas', 'nagopevij@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-02 12:33:39', '2022-04-02 12:33:39'),
(29, 'Hunter Santos', 'bysadacone@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-03 20:31:56', '2022-04-03 20:31:56'),
(30, 'Daniyal Rehman', 'Daniyalrehman29@gmail.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-03 20:35:31', '2022-04-03 20:35:31'),
(31, 'Imogene Turner', 'duci@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-03 20:36:45', '2022-04-03 20:36:45');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bedsizes`
--
ALTER TABLE `bedsizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `beedings`
--
ALTER TABLE `beedings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `fabrics`
--
ALTER TABLE `fabrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `matching_storages`
--
ALTER TABLE `matching_storages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mattresssizes`
--
ALTER TABLE `mattresssizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `monthly_sale_product`
--
ALTER TABLE `monthly_sale_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sofa_options`
--
ALTER TABLE `sofa_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stool_options`
--
ALTER TABLE `stool_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `StripeSettings`
--
ALTER TABLE `StripeSettings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transations`
--
ALTER TABLE `transations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
