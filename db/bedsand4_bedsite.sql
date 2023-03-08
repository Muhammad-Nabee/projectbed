-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2022 at 06:51 AM
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
(19, 'diamond', '0.8', '1650276787.jpg', '2022-04-18 16:13:07', '2022-04-18 16:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `bedsizes`
--

CREATE TABLE `bedsizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bedsizes`
--

INSERT INTO `bedsizes` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(26, 'double store small bed', '300', '2022-05-12 18:21:49', '2022-05-12 18:21:49'),
(27, 'KING 6 FEETS', '600', '2022-05-13 18:05:54', '2022-05-13 18:05:54');

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
(20, 'blue color', '30', '1650276710.png', '2022-04-18 16:11:50', '2022-04-18 16:26:36'),
(22, 'abc', '200', '1652351287.jpg', '2022-05-12 16:28:07', '2022-05-12 16:28:07');

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
(231, '1649491642', '1630', '145', '[\"bed size:KING 6 FEETS\",\"fabric=Red:10\",\"beeding=blue color:20\",null,\"mattress=9 feet:400\",null,null,null]', '1', '1630', NULL, '2022-04-09 16:11:10', '2022-04-09 16:11:10');

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
(21, 'Beds', 'Beds', '1647770594.415_2525.jpg', '2022-03-15 04:24:17', '2022-03-15 04:24:17'),
(23, 'Sofas', 'Sofa', 'categorysofa.jpg', '2022-03-19 19:37:09', '2022-03-19 19:37:09'),
(25, 'Mattress', 'Mattress', 'categorymattress.jpg', '2022-03-20 16:03:14', '2022-03-20 16:03:14'),
(26, 'Foots Stools & Coffee Tables', 'Foots Stools', 'categorystool.jpg', '2022-03-22 16:29:23', '2022-03-22 16:29:23'),
(27, 'Kids Beds', 'Kids Beds', 'kid.jpg', '2022-04-02 12:28:25', '2022-04-02 12:28:25'),
(28, 'Storageboxs', 'storagematchingbox', '1652871133.1646034758.footstools.jpg', '2022-05-18 16:52:13', '2022-05-18 16:52:13');

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
(46, 'Muhammad Nabeel', 'm.nabeel082@gmail.com', '+1 (184) 374-1895', 'helo', '2022-04-09 00:49:48', '2022-04-09 00:49:48'),
(48, 'Nelle Flynn', 'xomi@mailinator.com', '+1 (598) 426-5538', 'Exercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga UExercitation fuga U', '2022-04-12 16:54:02', '2022-04-12 16:54:02'),
(49, 'Henrymar', 'drotissr@yahoo.com', '89037277237', 'Most successful people already use Robot. Do you? \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-20 16:58:23', '2022-04-20 16:58:23'),
(50, 'Anthonyunono', 'sportt@gmail.com', '81945927158', 'Bеst оnlinе cаsino and sports betting \r\ndeposit bоnus up to 500 \r\nSlоts, Frееspins, Роker, and many gаmes. \r\nget your bоnus right now \r\nhttps://tinyurl.com/mu54beam', '2022-05-12 03:18:34', '2022-05-12 03:18:34');

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
(118, 'Blue', '15', '1650276550.png', '2022-04-18 16:09:10', '2022-04-18 16:26:01');

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
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matching_storages`
--

INSERT INTO `matching_storages` (`id`, `name`, `size`, `price`, `image`, `created_at`, `updated_at`) VALUES
(15, '', '70cm height and 40 cm width', '400', '1652878630.jpg', '2022-05-18 18:57:10', '2022-05-18 18:57:10'),
(16, '', '80 cm', '300', '1653032498.jpg', '2022-05-20 13:41:38', '2022-05-20 13:41:38'),
(17, 'side  box storage', '80 cm h 40 cm w', '200', '1653044225.jpg', '2022-05-20 16:57:05', '2022-05-20 16:57:05');

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
(40, '6 feets length  height 20cm', '100', '1650276581.jpg', '2022-04-18 16:09:41', '2022-04-18 16:31:37'),
(42, '6  feets length  height11cm', '70', '1650276686.jpg', '2022-04-18 16:11:26', '2022-04-18 16:31:17');

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
(36, 'May Sale', '174', 'May 03, 2022 03:40:18', '30', '<p>boomber option</p>', '2022-04-18 16:40:32', '2022-04-18 16:40:32');

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
(113, '39', 'Candice Norton', 'wapulediq@mailinator.com', 'UK', 'Anim enim dolorum la', '6', 'Vero aut ut incidunt', '37042', 'Nulla anim dolorem l', 'Payment with card', '84', '2022-04-09', '1', '[{\"id\":230,\"user_id\":\"1649489870\",\"p_orignal_price\":\"84\",\"p_id\":\"141\",\"options\":\"[\\\"bed size:40cm diameter x 30cm high\\\",\\\"fabric=Red:10\\\",null,null,null,null,null,\\\"pick up:20\\\"]\",\"qty\":\"1\",\"p_price\":\"84\",\"sale\":\"1\",\"created_at\":\"2022-04-09T07:50:32.000000Z\",\"updated_at\":\"2022-04-09T07:50:32.000000Z\"}]', '2022-04-09 13:51:29', '2022-04-09 13:51:29'),
(114, '40', 'Chester Walton', 'xero@mailinator.com', 'UK', 'Id aliquid placeat', '22', 'Culpa sit beatae ut', '31388', 'Iste voluptas sint q', 'Payment with card', '2343', '2022-04-12', '0', '[{\"id\":232,\"user_id\":\"1649752281\",\"p_orignal_price\":\"2343\",\"p_id\":\"147\",\"options\":\"[\\\"bed size:king 5 feets\\\",null,null,null,null,null,null,\\\"pick up:20\\\"]\",\"qty\":\"1\",\"p_price\":\"2343\",\"sale\":null,\"created_at\":\"2022-04-12T08:31:40.000000Z\",\"updated_at\":\"2022-04-12T08:31:40.000000Z\"}]', '2022-04-12 15:30:57', '2022-04-18 17:15:20'),
(115, '33', 'Kamal Crane', 'm.nabeel082@gmail.com', 'UK', 'Voluptatum sapiente', '8', 'Rerum duis esse comm', '73794', 'Nam est ducimus asp', 'Cash on delivery', '1445.8', '2022-04-18', '1', '[{\"id\":233,\"user_id\":\"1650260529\",\"p_orignal_price\":\"1445.8\",\"p_id\":\"172\",\"options\":\"[\\\"bed size:Double 6 feets\\\",\\\"fabric=Blue:15\\\",\\\"beeding=blue color:30\\\",\\\"matching storage=storagebox:200\\\",\\\"mattress=6 feets length  height 20cm:100\\\",\\\"addon=diamond:0.8\\\",\\\"liftupstorage:yes\\\",\\\"free:0\\\"]\",\"qty\":\"1\",\"p_price\":\"1445.8\",\"sale\":null,\"created_at\":\"2022-04-18T10:45:33.000000Z\",\"updated_at\":\"2022-04-18T10:45:33.000000Z\"}]', '2022-04-18 16:46:36', '2022-04-18 17:15:29'),
(116, '41', 'Timon Hendricks', 'zana@mailinator.com', 'UK', 'Neque nisi voluptas', '58', 'Esse eligendi et fac', '37042', 'Quia reprehenderit', 'Payment with card', '460', '2022-04-18', '1', '[{\"id\":234,\"user_id\":\"1650260529\",\"p_orignal_price\":\"210\",\"p_id\":\"174\",\"options\":\"[\\\"bed size:Double 6 feets\\\",null,null,null,null,null,null,\\\"free:0\\\"]\",\"qty\":\"2\",\"p_price\":\"460\",\"sale\":\"1\",\"created_at\":\"2022-04-18T10:54:17.000000Z\",\"updated_at\":\"2022-04-18T11:09:00.000000Z\"}]', '2022-04-18 17:13:26', '2022-04-18 17:13:26'),
(117, '36', 'Reuben Estes', 'khuzaifamunir123@gmail.com', 'UK', 'Ducimus nisi dolore', '63', 'Minima cum saepe et', '47515', 'Impedit eum neque e', 'Cash on delivery', '1785.8', '2022-05-14', '1', '[{\"id\":244,\"user_id\":\"1652527519\",\"p_orignal_price\":\"1785.8\",\"p_id\":\"172\",\"options\":\"[null,\\\"fabric=Blue:15\\\",\\\"beeding=blue color:30\\\",\\\"matching storage=storagebox:200\\\",\\\"mattress=6 feets length  height 20cm:100\\\",\\\"addon=diamond:0.8\\\",\\\"Yes:20\\\",\\\"pick up:20\\\"]\",\"qty\":\"1\",\"p_price\":\"1785.8\",\"sale\":null,\"created_at\":\"2022-05-14T13:07:17.000000Z\",\"updated_at\":\"2022-05-14T13:07:17.000000Z\"}]', '2022-05-14 19:09:16', '2022-05-14 19:09:31');

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
  `is_sale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matching_storagebox_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `name`, `price`, `image`, `description`, `bedsize_id`, `mattress_id`, `fabric_id`, `beeding_id`, `addon_id`, `sofa_id`, `stool_id`, `buttondiamond_image`, `matching_storage_id`, `liftup_storage`, `is_featured`, `is_sale`, `matching_storagebox_image`, `created_at`, `updated_at`) VALUES
(172, 21, 'Uk beds', '1100', '[\"1650277994.jpg\",\"1650277994.jpg\",\"1650277996.jpg\"]', '<p>Worcester Bed in Crushed Velvet</p><p>One of the most important purchases you will make in your life is a bed. After all, you spend a third of your life sleeping. It’s a tired, old cliché, but it’s true.</p><p><br></p><p>Give your sanctuary a classic style and add the centerpiece you have always desired with this upholstered Worcester Bed. The beautiful scrolling headboard and footboard are upholstered in an eye-catching button tufted crushed velvet fabric. Classic style choices like the headboard and footboard perfectly compliment the premium finish seen on the rest of the piece while the turned feet add a sense of dignity and grace to this inviting bed. Relax in elegant luxury every night with The Worcester Bed.</p><p><br></p><p>The Worcester Bed in the photo is illustrated in the Plain Velvet material</p>', '[\"26\"]', '[\"40\"]', '[\"118\"]', '[\"20\"]', '[\"19\"]', 'null', 'null', NULL, '[]', 'yes', 'yes', 'yes', NULL, '2022-04-18 16:33:16', '2022-05-20 16:57:39'),
(173, 23, 'uk sofa', '600', '[\"1650278070.jpg\",\"1650278070.jpg\",\"1650278070.jpg\"]', '<p>Worcester Sofa&nbsp; in Crushed Velvet</p><p>One of the most important purchases you will make in your life is a bed. After all, you spend a third of your life sleeping. It’s a tired, old cliché, but it’s true.</p><p><br></p><p>Give your sanctuary a classic style and add the centerpiece you have always desired with this upholstered Worcester Bed. The beautiful scrolling headboard and footboard are upholstered in an eye-catching button tufted crushed velvet fabric. Classic style choices like the headboard and footboard perfectly compliment the premium finish seen on the rest of the piece while the turned feet add a sense of dignity and grace to this inviting bed. Relax in elegant luxury every night with The Worcester Bed.</p><p><br></p><p>The Worcester Bed in the photo is illustrated in the Plain Velvet material</p>', 'null', 'null', 'null', 'null', 'null', '[\"17\"]', 'null', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-04-18 16:34:30', '2022-05-12 18:56:38'),
(174, 25, 'uk mattreess', '300', '[\"1650278165.jpg\",\"1650278165.jpg\",\"1650278165.jpg\"]', '<p>Worcester Mattress in Crushed Velvet</p><p>One of the most important purchases you will make in your life is a bed. After all, you spend a third of your life sleeping. It’s a tired, old cliché, but it’s true.</p><p><br></p><p>Give your sanctuary a classic style and add the centerpiece you have always desired with this upholstered Worcester Bed. The beautiful scrolling headboard and footboard are upholstered in an eye-catching button tufted crushed velvet fabric. Classic style choices like the headboard and footboard perfectly compliment the premium finish seen on the rest of the piece while the turned feet add a sense of dignity and grace to this inviting bed. Relax in elegant luxury every night with The Worcester Bed.</p><p><br></p><p>The Worcester Bed in the photo is illustrated in the Plain Velvet material</p>', '[\"26\"]', 'null', 'null', 'null', 'null', 'null', 'null', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-04-18 16:36:05', '2022-05-12 18:56:26'),
(175, 26, 'uk stool', '300', '[\"1650278244.jpg\",\"1650278244.jpg\",\"1650278244.jpg\"]', '<p>Worcester Stool in Crushed Velvet</p><p>One of the most important purchases you will make in your life is a bed. After all, you spend a third of your life sleeping. It’s a tired, old cliché, but it’s true.</p><p><br></p><p>Give your sanctuary a classic style and add the centerpiece you have always desired with this upholstered Worcester Bed. The beautiful scrolling headboard and footboard are upholstered in an eye-catching button tufted crushed velvet fabric. Classic style choices like the headboard and footboard perfectly compliment the premium finish seen on the rest of the piece while the turned feet add a sense of dignity and grace to this inviting bed. Relax in elegant luxury every night with The Worcester Bed.</p><p><br></p><p>The Worcester Bed in the photo is illustrated in the Plain Velvet material</p>', 'null', 'null', '[\"118\"]', '[\"20\"]', 'null', 'null', '[\"17\"]', NULL, 'null', '0', 'yes', 'yes', NULL, '2022-04-18 16:37:24', '2022-05-12 18:33:50'),
(177, 21, 'uk bed3', '80000', '[\"1652440745.png\",\"1652440745.png\",\"1652440745.png\"]', '<p>hgjghjgk</p>', '[\"26\"]', '[\"42\"]', '[\"118\"]', '[\"20\"]', '[\"19\"]', 'null', 'null', NULL, '[]', NULL, 'yes', NULL, NULL, '2022-05-13 17:19:05', '2022-05-20 16:57:39'),
(178, 21, 'uk bed4', '8000', '[\"1652443681.png\",\"1652443681.jpg\",\"1652443681.png\"]', '<p>hgjghjgk</p>', '[\"26\",\"27\"]', '[\"40\"]', '[\"118\"]', '[\"20\",\"22\"]', '[\"19\"]', 'null', 'null', NULL, '[]', NULL, 'yes', NULL, NULL, '2022-05-13 18:08:01', '2022-05-20 16:57:39'),
(179, 21, 'dsfsdf', '123', '[\"1652515470.jpg\"]', '<p>fsdfsdf</p>', '[\"26\",\"27\"]', '[\"40\",\"42\"]', '[\"118\"]', '[\"20\",\"22\"]', '[\"19\"]', 'null', 'null', NULL, '[]', '0', 'yes', NULL, NULL, '2022-05-14 14:04:30', '2022-05-20 16:57:39'),
(180, 28, 'sidebox', '200', '[\"1652879069.jpg\"]', '<p>fdsafasdfasdf</p>', 'null', 'null', '[\"118\"]', 'null', 'null', 'null', '[\"17\"]', NULL, '[\"15\"]', NULL, 'yes', NULL, NULL, '2022-05-18 19:04:29', '2022-05-18 19:04:29'),
(181, 28, 'sidebox1', '200', '[\"1652885663.jpg\"]', '<p>jkhjkh</p>', 'null', 'null', '[\"118\"]', 'null', 'null', 'null', 'null', NULL, '[\"15\"]', NULL, 'no', NULL, NULL, '2022-05-18 20:54:23', '2022-05-18 20:54:23'),
(182, 28, 'new storagebox', '400', '[\"1653032619.jpg\"]', '<p>dsfdsfsd</p>', 'null', 'null', '[\"118\"]', 'null', 'null', 'null', 'null', NULL, '[\"15\",\"16\"]', NULL, '0', NULL, NULL, '2022-05-20 13:43:39', '2022-05-20 13:43:39'),
(183, 28, 'new sidebox storagebox', '200', '[\"1653045145.jpg\"]', '<p>fghfghfghf</p>', 'null', 'null', '[\"118\"]', 'null', 'null', 'null', 'null', NULL, '[\"16\",\"17\"]', NULL, '0', NULL, NULL, '2022-05-20 17:12:25', '2022-05-20 17:12:25');

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
(21, '174', 'Muhammad Nabeel', 'm.nabeel082@gmail.com', 'good product and   more suitable for kids', '3', '2022-04-19 14:29:17', '2022-04-19 14:29:17'),
(22, '172', 'Muhammad Nabeel', 'm.nabeel082@gmail.com', 'good lool furniture', '4', '2022-05-12 19:19:12', '2022-05-12 19:19:12'),
(23, '178', 'Muhammad Nabeel', 'm.nabeel082@gmail.com', 'ggg', '2', '2022-05-13 18:53:22', '2022-05-13 18:53:22'),
(24, '183', 'Muhammad Nabeel', 'm.nabeel082@gmail.com', 'gffdgs', '2', '2022-05-21 17:46:22', '2022-05-21 17:46:22'),
(25, '182', 'Dinner', 'm.nabeel082@gmail.com', 'yt5y56y56y', '4', '2022-05-21 17:49:25', '2022-05-21 17:49:25'),
(26, '183', 'Muhammad Nabeel', 'm.nabeel082@gmail.com', 'ghghdg', '3', '2022-05-21 18:48:50', '2022-05-21 18:48:50');

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
('vgGly4cDZwrnlZ8kt4ktFSi4L8pR2Z96V8perqMf', 1, '101.50.109.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNUlSQTg3b3RlNmJsdXhqMVlhZHZLZ2Y3ZWxJN21LbWZpZHkzTlB2UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vYmVkc2FuZGJvbHRzLmNvLnVrL3Byb2R1Y3RwYWdlLzE4MyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR2TUFISVNRVXJZR0ppYXA1YkYyYjVleGcza01FbXMvaUd4dVViTzVUVWxFWnI0c2dHVlEzMiI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjUzMTM0MjI1O30=', 1653137330),
('T8yvgxA7cAhN5S38aTogLWUXvZtYpyUqZxYs2OQR', NULL, '54.203.242.6', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/600.3.18 (KHTML, like Gecko) Version/8.0.3 Safari/600.3.18', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFFTZFcya3p4Q3Bva3Q0UWZ2eTdvQkNkaWVjSGt5SGZRNWM1VGdBViI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjUzMTMwNDY1O3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653130465),
('spYq5Fo4CsKWGJOSCSm9smPzKYb9h2Pm7UGkDVWY', NULL, '5.188.62.21', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVG1vcEtQaFRwb1pLeWVxUTdHSlNEQmowcjdpSHBqSVdzU01CV2xPeSI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjUzMTMxNzIwO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653131721),
('6nkUkiRRLaweexk3FWqhdDqnzsMtKEzMqWWVnk6g', NULL, '157.55.39.40', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXpZNEdwOFFkeXViakNGQ3JoVjJBcTBPOU5wQVRJMVUyZEZFSGNQRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvY29udGFjdHVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653132704),
('lHJHB0DwqirvqrVkb7qN9qnbW4kKA0uauDtF8q74', NULL, '157.55.39.40', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXFTNVcwd3NBd09HSHViREhpR2NveWdqVnNDRFlNNlZ4TXY4QmVKdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9iZWRzYW5kYm9sdHMuY28udWsvcHJvZHVjdC8yMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653132704),
('LKAlSFfe1dnmbdhbEkhgvJ7rPACxI9eEtZ01JgnA', NULL, '34.91.9.87', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36/4erS7ObW-66', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNVg3cUJrZWl1OVJqb0xUeGlyajlxVVZ2QXQ0dGQ1QlNSM1pmNVRyTyI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjUzMTM2MzkyO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653136392),
('pV0HxhmUv9gjSnPx8ju6IDiI6BK1TaSQWFRd9hEA', NULL, '34.91.9.87', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36/4erS7ObW-66', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOFg2YVJPd0RHRnRYb3VWMnNvdTFDRmt1dktjaTR0MFZHZkFuMGVqeSI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjUzMTM2MzkzO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653136393),
('hvnZSLnrNoKByIPd6wuS8FBPJjf4xVK982PQZ2lk', NULL, '34.91.9.87', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36/4erS7ObW-66', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNjdhTzZWMGRwY21HTjNybFJDaFlUR1NIVldoRldqeWlxNkFDWmp3dSI7czoxNjoiZHVtbXlfc2Vzc2lvbl9pZCI7aToxNjUzMTM2MzkzO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vYmVkc2FuZGJvbHRzLmNvLnVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653136393);

-- --------------------------------------------------------

--
-- Table structure for table `sofa_options`
--

CREATE TABLE `sofa_options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sofa_options`
--

INSERT INTO `sofa_options` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(17, '5 seater', '90', '2022-05-12 18:56:07', '2022-05-12 18:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `stool_options`
--

CREATE TABLE `stool_options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stool_options`
--

INSERT INTO `stool_options` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(17, 'small stool', '80', '2022-05-12 18:33:33', '2022-05-12 18:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `StripeSettings`
--

CREATE TABLE `StripeSettings` (
  `id` bigint(20) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secrete_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `StripeSettings`
--

INSERT INTO `StripeSettings` (`id`, `token`, `secrete_key`, `status`, `created_at`, `updated_at`) VALUES
(9, 'pk_test_51Kc4RmHNx0c2gufFTQJoLk3tY7nk2oOqvbmO8L5evLqkh4u66aodwtk0VKLYtMAYnIVkPh0vhXBpHU9Fn1Uh50Kr00SGgZedIK', 'sk_test_51Kc4RmHNx0c2gufFurehmnYo6xTNbLHGVGhbcqcSCYUqaw6LqpWp52jWAsBzZCccvw5jTDaaUrBdkaznh27oKqej005nfcJ8nn', '1', '2022-04-18 17:08:04', '2022-04-22 14:44:45');

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
(13, 'khuzaifamunir123@gmail.com', '2022-04-09 14:49:56', '2022-04-09 14:49:56'),
(14, 'U.Trell.Kenoram9zmQ@sinotribe.com', '2022-05-19 23:47:39', '2022-05-19 23:47:39');

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
(27, '39', '113', 'Candice Norton', 'wapulediq@mailinator.com', '84', '4242424242424242', 'Visa', '2022-04-09 13:51:29', '2022-04-09 13:51:29'),
(28, '40', '114', 'Chester Walton', 'xero@mailinator.com', '2343', '4242424242424242', 'Visa', '2022-04-12 15:30:57', '2022-04-12 15:30:57'),
(29, '41', '116', 'Timon Hendricks', 'zana@mailinator.com', '460', '4242424242424242', 'Visa', '2022-04-18 17:13:26', '2022-04-18 17:13:26');

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
(1, 'admin', 'admin@gmail.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, '2jCcrFalafDxVbB6B3pVGIgZydHd2tNKeeoHbgxjoK3ncs6jUzW8vF9xQMul', NULL, NULL, '2022-04-19 08:57:59', '0000-00-00 00:00:00'),
(32, 'Keiko Bartlett', 'gaqoz@mailinator.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 22:54:41', '2022-04-08 22:54:41'),
(33, 'Rhoda Robbins', 'm.nabeel082@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 23:35:49', '2022-04-08 23:35:49'),
(34, 'Micah Hobbs', 'byvi@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 23:43:36', '2022-04-08 23:43:36'),
(35, 'Sybill Lang', 'xiwum@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 23:47:06', '2022-04-08 23:47:06'),
(36, 'huzaifa munir', 'Khuzaifamunir123@gmail.com', '0', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-08 23:50:55', '2022-04-08 23:50:55'),
(37, 'Ralph Harrison', 'xycasohojy@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-09 12:06:39', '2022-04-09 12:06:39'),
(38, 'Malcolm Ramos', 'qusym@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-09 12:47:51', '2022-04-09 12:47:51'),
(39, 'Candice Norton', 'wapulediq@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-09 13:51:29', '2022-04-09 13:51:29'),
(40, 'Chester Walton', 'xero@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-12 15:30:57', '2022-04-12 15:30:57'),
(41, 'Timon Hendricks', 'zana@mailinator.com', '1', NULL, '$2y$10$vMAHISQUrYGJiap5bF2b5exg3kMEms/iGxuUbO5TUlEZr4sgGVQ32', NULL, NULL, NULL, NULL, NULL, '2022-04-18 17:13:26', '2022-04-18 17:13:26');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bedsizes`
--
ALTER TABLE `bedsizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `beedings`
--
ALTER TABLE `beedings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `fabrics`
--
ALTER TABLE `fabrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `matching_storages`
--
ALTER TABLE `matching_storages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mattresssizes`
--
ALTER TABLE `mattresssizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `monthly_sale_product`
--
ALTER TABLE `monthly_sale_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sofa_options`
--
ALTER TABLE `sofa_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stool_options`
--
ALTER TABLE `stool_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `StripeSettings`
--
ALTER TABLE `StripeSettings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transations`
--
ALTER TABLE `transations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
