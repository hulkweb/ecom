-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 11:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftwala`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `phone2` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `date_of_delivery` date DEFAULT NULL,
  `time_of_delivery` time DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `name`, `phone`, `phone2`, `email`, `address`, `city`, `pincode`, `date_of_delivery`, `time_of_delivery`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Rahul Katre', 23456781234, NULL, NULL, 'pakhara seoni', 'Seoni', 480990, '2023-01-27', '04:33:00', 2, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(4, 'Rahul Katre', 1212121212, NULL, NULL, 'pakhara seoni', 'Seoni', 480990, '2023-06-15', '16:29:00', 10, NULL, NULL),
(5, 'Rahul Katre', 5656565656, NULL, NULL, 'pakhara seoni', 'Seoni', 480990, '2023-07-06', '17:08:00', 10, NULL, NULL),
(6, 'Rahul Katre', 5656565656, NULL, NULL, 'pakhara seoni', 'Seoni', 480990, '2023-07-06', '17:08:00', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'For Him', 'all products to gift you brother,husband,father', 'category63c7f05ec6935.png', '2023-01-18 07:43:02', '2023-01-18 07:43:02'),
(2, 'For Her', 'all products that can be gifted to your girlfriend ,sister , mother', 'category63c7f092ebd24.png', '2023-01-18 07:43:54', '2023-01-18 07:43:54'),
(3, 'For girl child', 'for girl child', 'category_63ce9bf7be902.jpeg', '2023-01-23 09:08:47', '2023-01-23 09:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_24_140750_create_billings_table', 1),
(6, '2022_11_25_133934_create_vendors_table', 1),
(7, '2022_11_25_134957_create_categories_table', 1),
(8, '2022_11_25_135041_create_products_table', 1),
(9, '2022_11_25_135522_create_product_images_table', 1),
(10, '2022_11_25_135602_create_wrappers_table', 1),
(11, '2022_11_25_135648_create_orders_table', 1),
(12, '2022_11_25_135727_create_order_items_table', 1),
(13, '2022_11_25_135753_create_transactions_table', 1),
(14, '2022_11_25_140713_create_gifts_table', 1),
(15, '2022_12_23_155820_create_settings_table', 1),
(16, '2022_12_23_173247_create_blog_categories_table', 1),
(17, '2022_12_23_174749_create_blogs_table', 1),
(19, '2023_01_01_103648_create_product_features_table', 1),
(20, '2023_01_29_113505_create_queries_table', 2),
(21, '2023_06_05_091133_create_sub_categories_table', 3),
(22, '2023_01_01_033145_create_reviews_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `amount` double(8,2) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `billing_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `status`, `amount`, `user_id`, `billing_id`, `created_at`, `updated_at`, `payment_id`) VALUES
(2, 'ORD63D241A8477AA', 'delivered', 8520.00, 2, 2, '2023-01-26 03:32:32', '2023-01-27 10:01:12', 'pay_L8kWRNLp1uCn9d'),
(3, 'ORD647C6DFB68992', 'completed', 15090.00, 10, 4, '2023-06-04 05:26:59', '2023-06-04 11:02:35', 'pay_LxpO3F9CPlfCLB'),
(4, 'ORD647C77281978A', 'pending', 15090.00, 10, 5, '2023-06-04 06:06:08', NULL, NULL),
(5, 'ORD647C89BBC20C8', 'completed', 15090.00, 10, 6, '2023-06-04 07:25:23', '2023-06-04 12:56:07', 'pay_LxrOyEmaczlU36');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` bigint(20) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `qty`, `product_id`, `order_id`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 3, NULL, NULL),
(4, 1, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('smart1boy2rahul3@gmail.com', '13e5c9536c6b7abb62ba767417bea02c-63cd6c345a15d', '2023-01-22 11:32:44'),
('smart1boy2rahul3@gmail.com', '13e5c9536c6b7abb62ba767417bea02c-63cd6cb9f268a', '2023-01-22 11:34:57'),
('smart1boy2rahul3@gmail.com', '13e5c9536c6b7abb62ba767417bea02c-63cd6cf634918', '2023-01-22 11:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 4, 'auth-token', '082857c20193b672908e5dbe1be09d04941af572f2c63734854e0be3153a966c', '[\"*\"]', '2023-01-31 05:33:10', '2023-01-31 05:23:29', '2023-01-31 05:33:10'),
(3, 'App\\Models\\User', 2, 'auth-token', '4987b625f2cd7d2f8170fc0e94a6bf9edd6703dd625cc74194d4a62e8da4939e', '[\"*\"]', '2023-02-05 07:02:32', '2023-01-31 05:32:42', '2023-02-05 07:02:32'),
(6, 'App\\Models\\User', 7, 'auth-token', 'ff454ebedbbf8aba0e1c9030a5139dddce8012378387ccb966c8c2b68bbca65b', '[\"*\"]', NULL, '2023-02-05 08:14:14', '2023-02-05 08:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL DEFAULT 0.00,
  `qty` double(8,2) NOT NULL DEFAULT 0.00,
  `weight` double(8,2) NOT NULL DEFAULT 0.00,
  `status` double(8,2) NOT NULL DEFAULT 1.00,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `qty`, `weight`, `status`, `featured`, `details`, `tags`, `image`, `category_id`, `sub_category_id`, `vendor_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Gucci belt for awesome young men', 1000.00, 9.00, 1.00, 1.00, 1, 'Gucci belt for awesome young men Gucci belt for awesome young men Gucci belt for awesome young men', NULL, '63c7f11c880c8.jpg', 1, NULL, NULL, NULL, '2023-01-18 07:46:12', '2023-01-22 15:02:17'),
(2, 'Gucci beg for girls', 15000.00, 3.00, 1.00, 1.00, 0, 'Gucci beg for girls Gucci beg for girls Gucci beg for girls', NULL, '63c7f1768ed42.jpg', 2, NULL, NULL, NULL, '2023-01-18 07:47:42', '2023-06-04 12:56:07'),
(43, 'u.s. polo assn. men polo', 569.00, 10.00, 9.00, 1.00, 0, 'Care Instructions: Machine Wash\r\nFit Type: Slim Fit\r\nHALF SLEEVE POLO', NULL, 'product_647d9f68deaeb.jpg', 1, NULL, NULL, NULL, '2023-06-05 03:10:08', '2023-06-05 03:10:08'),
(44, 'u.s. polo assn. men polo', 569.00, 10.00, 1.00, 1.00, 0, 'Care Instructions: Machine Wash\r\nFit Type: Slim Fit\r\nHALF SLEEVE POLO', NULL, 'product_647d9fb23d7bf.jpg', 1, NULL, 16, NULL, '2023-06-05 03:11:22', '2023-06-05 03:11:22'),
(45, 'new t shirt', 1000.00, 1.00, 1.00, 1.00, 0, 'desc', NULL, 'product_647db17d81c6e.jpg', 1, NULL, 15, NULL, '2023-06-05 04:27:17', '2023-06-05 04:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '63c7f11c8e69e.jpg', 1, '2023-01-18 07:46:12', '2023-01-18 07:46:12'),
(2, '63c7f17695044.jpg', 2, '2023-01-18 07:47:42', '2023-01-18 07:47:42'),
(3, '647d9f68f40ca.jpg', 43, '2023-06-05 03:10:09', '2023-06-05 03:10:09'),
(4, '647d9f6901a7b.jpg', 43, '2023-06-05 03:10:09', '2023-06-05 03:10:09'),
(5, '647d9f6903556.jpg', 43, '2023-06-05 03:10:09', '2023-06-05 03:10:09'),
(6, '647d9fb2517a7.jpg', 44, '2023-06-05 03:11:22', '2023-06-05 03:11:22'),
(7, '647d9fb25abc1.jpg', 44, '2023-06-05 03:11:22', '2023-06-05 03:11:22'),
(8, '647d9fb264378.jpg', 44, '2023-06-05 03:11:22', '2023-06-05 03:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `message`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Katre', 'smart1boy2rahul3@gmail.com', 'message', 919755908334, '2023-01-29 06:59:03', '2023-01-29 06:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` double(8,2) DEFAULT 0.00,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `helpful` int(11) DEFAULT 0,
  `no_helpful` int(11) DEFAULT 0,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'website_title', 'Hamilton services india', '2023-01-18 07:55:10', '2023-06-04 23:22:12'),
(2, 'website_logo', 'website_logo.png', '2023-01-18 08:28:26', '2023-01-18 08:34:45'),
(3, 'shipping_charge', '90', '2023-01-22 05:00:17', '2023-01-22 05:00:17'),
(4, 'website_name', 'Hamilton Ecom', '2023-01-22 11:22:20', '2023-06-04 22:54:11'),
(5, 'website_url', 'http://localhost:8000', '2023-01-22 11:22:50', '2023-01-22 11:26:24'),
(6, 'homepage_banner', 'homepage_banner.jpg', '2023-01-27 11:31:57', '2023-01-27 11:31:57'),
(7, 'address_of_footer', 'Indore - pincode', '2023-01-27 11:34:27', '2023-01-27 11:34:27'),
(8, 'mobile_of_footer', '+91-909090112', '2023-01-27 11:36:48', '2023-01-27 11:36:48'),
(9, 'email_of_footer', 'contact@email.com', '2023-01-27 11:38:04', '2023-01-27 11:38:04'),
(10, 'hours_of_footer', '7 Days a week from 10:00 am', '2023-01-27 11:40:50', '2023-01-27 11:40:50'),
(11, 'website_favicon', 'website_favicon.png', '2023-01-29 07:17:09', '2023-01-29 07:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `details`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'mens shirt', 'this', NULL, 1, '2023-06-05 04:20:03', '2023-06-05 04:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `method` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `vendor` tinyint(1) NOT NULL DEFAULT 0,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `vendor`, `admin`, `created_at`, `updated_at`, `profile`) VALUES
(2, 'kgc', '12121212122', 'k@g.c', NULL, '$2y$10$vrEBCAeMjP.uU5ClX6Jl1OB1025qwu45p45Pf7CJ6/UOrSGECqP7.', NULL, 0, 0, '2023-01-26 03:29:48', '2023-01-26 03:29:48', NULL),
(3, 'Admin', '9755908334', 'admin@gmail.com', NULL, '123456', NULL, 0, 1, '2023-01-26 10:19:18', '2023-01-26 10:19:18', NULL),
(4, 'rahul', '909090909', 'rahul@gmail.com', NULL, '$2y$10$tFC86q1H5BXNZY64DZezYus6EngujcUeCOM8WDYhU4FJgXD/esUzm', NULL, 0, 0, '2023-01-31 05:17:12', '2023-01-31 05:17:12', NULL),
(6, 'Name', '9755908339', 'email@gmail.com', NULL, '$2y$10$OPazYVHlhvRHhDq3tde/p.z/7W551w2z5mdNlZdhQTgWL/Zi6tmCK', NULL, 0, 0, '2023-02-05 05:40:22', '2023-02-05 05:40:22', NULL),
(7, 'Name', '9755908331', '9755908331@gmail.com', NULL, '$2y$10$2IrwDieWmICc1fyD.vp28eJJU0a95u3zuv.YrAKakF0uJuW1C1Aqa', NULL, 0, 0, '2023-02-05 06:16:48', '2023-02-05 06:16:48', NULL),
(10, 'Rahul', '1975590833', 'hulkweb21@gmail.com', NULL, '$2y$10$RO.lATBCiceUPSAz75ahwe0JjkKwQahCBtGw8Km3aS38A5dmrskmi', NULL, 0, 0, '2023-06-04 05:26:33', '2023-06-04 05:57:56', '647c753cb4dee.png'),
(13, 'Admin', '9795908334', 'admin1@gmail.com', NULL, '123456', NULL, 0, 1, '2023-06-04 22:48:01', '2023-06-04 22:48:01', NULL),
(15, 'Admin', '1212121212', 'admin2@gmail.com', NULL, '$2y$10$y8oLulp/RCq8GHxbUjZqwuqzdnBLqylwTH.p7PGu.n.44rWKkrxNO', NULL, 0, 1, '2023-06-04 22:51:31', '2023-06-04 23:11:28', '647d6778c2a64.png'),
(16, 'web design', NULL, 'design@gmail.com', '2023-06-04 23:25:18', '$2y$10$qykSaPnaSqT6WHgYyUvAyuCgcDzVVHxZKSDNO6LqHqipmjJTPmkq2', NULL, 1, 0, '2023-06-04 23:18:30', '2023-06-05 03:39:27', '647da6476fd6e.png');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billings_user_id_index` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_index` (`category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_index` (`user_id`),
  ADD KEY `orders_billing_id_index` (`billing_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_index` (`product_id`),
  ADD KEY `order_items_order_id_index` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`category_id`),
  ADD KEY `products_vendor_id_index` (`vendor_id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_features_product_id_index` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_index` (`product_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_index` (`product_id`),
  ADD KEY `reviews_order_id_index` (`order_id`),
  ADD KEY `reviews_user_id_index` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_index` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_index` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billings`
--
ALTER TABLE `billings`
  ADD CONSTRAINT `billings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_billing_id_foreign` FOREIGN KEY (`billing_id`) REFERENCES `billings` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `product_features`
--
ALTER TABLE `product_features`
  ADD CONSTRAINT `product_features_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
