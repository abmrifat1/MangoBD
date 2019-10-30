-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 07:22 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangobd`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `isActive` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isTrashed` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `unique_id`, `name`, `image`, `description`, `isActive`, `isTrashed`, `created_at`, `updated_at`) VALUES
(1, '1553672397fc4c54b9865b5af7cc4a081a25912946', 'Himsagor', 'images/category-images/9fb7d2e78e5189141553672397.jpg', 'Himsagor mango is one of the best mango.', 'Active', NULL, '2019-03-27 07:39:57', NULL),
(2, '1553672424035b852de2d36a105e9096d9bbccc604', 'Lengra', 'images/category-images/480a9dd1d55457171553672424.jpg', 'The best mango', 'Active', NULL, '2019-03-27 07:40:24', NULL),
(3, '15536725371d91f07b45ce5e0acc0abb9ac9bb4f90', 'Fazli', 'images/category-images/c32e957e228389961553672537.jpg', 'Best mango', 'Active', NULL, '2019-03-27 07:42:17', NULL),
(4, '1553672668548b8ebf7c92cfa3e1bf9c2ffbd40df1', 'Amropali', 'images/category-images/964e96d10a3902751553672668.jpg', 'The best mango and very sweet.', 'Active', NULL, '2019-03-27 07:44:28', NULL),
(5, '1553672752beb26015a8ff2d8ebf7a5b2403e0a3b0', 'Asina', 'images/category-images/ac37438ca09357451553672752.jpg', 'Mango is little bit sour.', 'Active', NULL, '2019-03-27 07:45:52', NULL),
(6, '1553672818f833ff3e959db06a8cba45721a3fc823', 'Lokhna', 'images/category-images/b4bb880d726295691553672818.jpg', 'Less sweet', 'Active', NULL, '2019-03-27 07:46:58', NULL),
(7, '15537517383db471208b4fa1e6d3015ac1a0726688', 'Gopalvog', 'images/category-images/a80a2744f2652311553751738.jpg', 'Very sweet mango', 'Active', NULL, '2019-03-28 05:42:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `name`, `subject`, `email`, `message`, `view`, `created_at`, `updated_at`) VALUES
(1, 'sfgsb', 'shsh', 'mahbubul@gmail.com', 'shdjyfukg;hoj\'hgifudytg', NULL, '2019-03-27 14:24:29', '2019-03-27 14:24:29'),
(2, 'Lengra', 'shsh', 'murshalin@gmail.com', 'fdafdafaf', NULL, '2019-03-27 15:37:50', '2019-03-27 15:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verification_code` int(8) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'images/customer-profile-images/profile.jpg',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `verification_code`, `phone`, `address`, `image`, `password`, `created_at`, `updated_at`) VALUES
(10, 'Emamul', 'Murshalin', 'emamul727@gmail.com', '2019-04-01 03:48:48', 334282, '01774210721', 'grsfgsfg', '', '$2y$10$zOFmRJBgpiIHwqq2m6RVQO0mVuIHzQ1sv5ev/EeB8any2j7uh2Jpi', '2019-04-01 03:48:31', '2019-04-01 03:48:48');

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
(3, '2019_02_18_150625_create_categories_table', 2),
(4, '2019_02_18_150817_create_products_table', 2),
(5, '2019_03_19_095007_create_orders_table', 3),
(6, '2019_03_21_050515_create_orders_total_table', 4),
(7, '2019_03_21_050611_create_admin_watch_list_table', 4),
(8, '2019_03_21_050928_create_orders_status_table', 4),
(9, '2019_03_21_051522_create_orders_products_table', 4),
(10, '2019_03_21_165820_create_customers_table', 5),
(11, '2019_03_22_084516_create_shippings_table', 6),
(12, '2019_03_22_130209_create_orders_table', 7),
(13, '2019_03_22_130233_create_payments_table', 7),
(14, '2019_03_22_130304_create_order_details_table', 7),
(15, '2019_03_27_195203_create_contact_infos_table', 8),
(16, '2019_03_29_150008_create_blogs_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 10, 10, 120.00, 'pending', '2019-04-01 03:50:26', '2019-04-01 03:50:26'),
(2, 10, 11, 122.40, 'pending', '2019-04-02 03:08:10', '2019-04-02 03:08:10'),
(3, 10, 13, 122.40, 'pending', '2019-04-02 03:38:14', '2019-04-02 03:38:14'),
(4, 10, 14, 367.20, 'pending', '2019-04-02 03:41:52', '2019-04-02 03:41:52'),
(5, 10, 15, 367.20, 'pending', '2019-04-02 03:52:25', '2019-04-02 03:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(20,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 43, 'Amropali', 120.00, 1, '2019-04-01 03:50:27', '2019-04-01 03:50:27'),
(2, 2, 32, 'Fazli', 120.00, 1, '2019-04-02 03:08:10', '2019-04-02 03:08:10'),
(3, 3, 32, 'Fazli', 120.00, 1, '2019-04-02 03:38:14', '2019-04-02 03:38:14'),
(4, 4, 32, 'Fazli', 120.00, 3, '2019-04-02 03:41:52', '2019-04-02 03:41:52'),
(5, 5, 32, 'Fazli', 120.00, 3, '2019-04-02 03:52:25', '2019-04-02 03:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkash_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transactionId` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `bkash_number`, `transactionId`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'BKash', '01777721122', '124565465jf', 'pending', '2019-04-01 03:50:26', '2019-04-01 03:50:26'),
(2, 2, 'BKash', '01777822162', '124565465jf', 'pending', '2019-04-02 03:08:10', '2019-04-02 03:08:10'),
(3, 3, 'BKash', '011253', '125458555455655jhgfdg', 'pending', '2019-04-02 03:38:14', '2019-04-02 03:38:14'),
(4, 4, 'BKash', '01777822162', '124565465jf', 'pending', '2019-04-02 03:41:52', '2019-04-02 03:41:52'),
(5, 5, 'BKash', '01777822162', '124565465jf', 'pending', '2019-04-02 03:52:25', '2019-04-02 03:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryId` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regPrice` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellPrice` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isStock` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT '0',
  `picture_1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `isApprove` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `view` int(7) DEFAULT '0',
  `sell` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `unique_id`, `name`, `sku`, `user_id`, `categoryId`, `regPrice`, `sellPrice`, `quantity`, `isStock`, `discount`, `picture_1`, `picture_2`, `picture_3`, `description`, `isApprove`, `created_at`, `updated_at`, `view`, `sell`, `type`) VALUES
(1, '1553673429fac1840ba98dfc199ac4c4fe29acd6cb', 'Lengra', 'M1', '20', '2', '70', '80', '5', 'Stock', 2, 'images/product-images/fc613bca245162291553673429.jpg', 'images/product-images/fc613bca241562701553673429.jpg', 'images/product-images/fc613bca248385691553673429.jpg', 'Lengra mango is the best mango. This mango is very sweet.', 'Approve', '2019-03-27 07:57:09', NULL, 0, '0', 'ripe'),
(2, '1553673637f0ddb15f9358b87e8781e73e15fb52b8', 'Lengra', 'M2', '20', '2', '80', '50', '4', 'Stock', 2, 'images/product-images/3a9c739897942791553673637.jpg', 'images/product-images/3a9c7398971452721553673637.jpg', 'images/product-images/3a9c7398975595081553673637.jpg', 'Langra is the best mango. Langra test very sweet.', 'Approve', '2019-03-27 08:00:37', '2019-03-27 02:10:12', 2, '0', 'ripe'),
(3, '1553673691e69ced08c748ce4f6f6969f718acdeb3', 'Lengra', 'M3', '20', '2', '80', '55', '8', 'Stock', 2, 'images/product-images/ce584b845c6120281553673691.jpg', 'images/product-images/ce584b845c1698751553673691.jpg', 'images/product-images/ce584b845c8059591553673691.jpg', 'Langra is the best mango. Langra test very sweet.', 'Approve', '2019-03-27 08:01:31', '2019-03-27 02:33:11', 1, '0', 'ripe'),
(4, '15536737441b98d1b38bb2dcd7cb7a77c3bd285f0b', 'Lengra', 'M4', '20', '2', '100', '80', '3', 'Stock', 5, 'images/product-images/472fb2207f6052051553673744.jpg', 'images/product-images/472fb2207f6176371553673744.jpg', 'images/product-images/472fb2207f1940241553673744.jpg', 'Langra is the best mango. Langra test very sweet.', 'Approve', '2019-03-27 08:02:24', '2019-04-01 00:13:40', 17, '1', 'ripe'),
(5, '1553673802d39693e42ec23a855b20c92aff7fc8fd', 'Lengra', 'M5', '20', '2', '120', '80', '10', 'Stock', 4, 'images/product-images/5c0110ac709834951553673802.jpg', 'images/product-images/5c0110ac708657301553673802.jpg', 'images/product-images/5c0110ac702495831553673802.jpg', 'Langra is the best mango. Langra test very sweet.', 'Approve', '2019-03-27 08:03:22', NULL, 0, '0', 'ripe'),
(6, '1553674056a1595dd9daf8409da2ef587f3d14ed26', 'Lengra', 'M6', '20', '2', '80', '55', '6', 'Stock', 3, 'images/product-images/0a192d96685492481553674056.jpg', 'images/product-images/0a192d96684296261553674056.jpg', 'images/product-images/0a192d96682351641553674056.jpg', 'Langra is the best mango. Langra test very sweet. But in raw it likes sour.', 'Approve', '2019-03-27 08:07:36', NULL, 0, '0', 'raw'),
(7, '155367411388e543e6afb3bf111ee1746b635a2c33', 'Lengra', 'M7', '20', '2', '70', '50', '7', 'Stock', 2, 'images/product-images/e92149055f7983191553674113.jpg', 'images/product-images/e92149055f5389051553674113.jpg', 'images/product-images/e92149055f4564971553674113.jpg', 'Langra is the best mango. Langra test very sweet. But in raw it likes sour.', 'Approve', '2019-03-27 08:08:33', '2019-03-31 03:15:04', 2, '0', 'raw'),
(8, '15536743171afeccc4410fe361e1c848342c0a4b17', 'Lengra', 'M8', '20', '2', '85', '60', '7', 'Stock', 3, 'images/product-images/c6e3c85f882492181553674317.jpg', 'images/product-images/c6e3c85f881004691553674317.jpg', 'images/product-images/c6e3c85f886800441553674317.jpg', 'Langra is the best mango. Langra test very sweet. But in raw it likes sour.', 'Approve', '2019-03-27 08:11:57', NULL, 0, '0', 'raw'),
(9, '15536744559a42e10f487f2bfe97be320c6da69509', 'Lengra', 'M9', '20', '2', '60', '40', '7', 'Stock', 3, 'images/product-images/5a1b123ad96187301553674455.jpg', 'images/product-images/5a1b123ad92456411553674455.jpg', 'images/product-images/5a1b123ad96637191553674455.jpg', 'Langra is the best mango. Langra test very sweet. But in raw it likes sour.', 'Approve', '2019-03-27 08:14:15', NULL, 0, '0', 'raw'),
(10, '155367451718400d8410143832ba5cbea35a1e5a3b', 'Lengra', 'M10', '20', '2', '50', '40', '5', 'Stock', 2, 'images/product-images/5f81ac45b35330271553674517.jpg', 'images/product-images/5f81ac45b31614191553674517.jpg', 'images/product-images/5f81ac45b33346521553674517.jpg', 'Langra is the best mango. Langra test very sweet. But in raw it likes sour.', 'Approve', '2019-03-27 08:15:17', NULL, 0, '0', 'raw'),
(11, '1553674816efe57324142277c36918b28774666abb', 'Lokhna', 'M11', '20', '6', '50', '40', '5', 'Stock', 3, 'images/product-images/f9d047be636930331553674816.jpg', 'images/product-images/f9d047be634035181553674816.jpg', 'images/product-images/f9d047be632042691553674816.jpg', 'Lakhna mango is less sweet.', 'Approve', '2019-03-27 08:20:16', NULL, 0, '0', 'raw'),
(12, '1553674927597ee9587ad35931c5f5f3ddf0eaf621', 'Lokhna', 'M12', '20', '6', '40', '30', '4', 'Stock', 1, 'images/product-images/45ae8b6ca87199891553674927.jpg', 'images/product-images/45ae8b6ca89667441553674927.jpg', 'images/product-images/45ae8b6ca84546811553674927.jpg', 'Lakhna mango is less sweet.', 'Approve', '2019-03-27 08:22:07', NULL, 0, '0', 'raw'),
(13, '15536750077006c2881bb60e38a9fa08ecd1128600', 'Lokhna', 'M13', '20', '6', '60', '40', '5', 'Stock', 3, 'images/product-images/07f03e0193801631553675007.jpg', 'images/product-images/07f03e01932216061553675007.jpg', 'images/product-images/07f03e01936491651553675007.jpg', 'Lakhna mango is less sweet.', 'Approve', '2019-03-27 08:23:27', NULL, 0, '0', 'raw'),
(14, '1553675154d3e591f0263a1344eceef8186addedda', 'Lokhna', 'M14', '20', '6', '70', '55', '10', 'Stock', 2, 'images/product-images/6dd3240d227132481553675154.jpg', 'images/product-images/6dd3240d226991291553675154.jpg', 'images/product-images/6dd3240d226510811553675154.jpg', 'Lakhna mango is less sweet.', 'Approve', '2019-03-27 08:25:54', NULL, 0, '0', 'raw'),
(15, '1553675384b29f984dddb4412633311b850b9a2fe5', 'Lokhna', 'M15', '20', '6', '80', '60', '5', 'Stock', 3, 'images/product-images/c92c7800432426351553675384.jpg', 'images/product-images/c92c7800433616461553675384.jpg', 'images/product-images/c92c7800434871151553675384.jpg', 'Lakhna mango is less sweet.', 'Approve', '2019-03-27 08:29:44', NULL, 0, '0', 'raw'),
(16, '155367544728508687297ff2884f255560c6390cf6', 'Lokhna', 'M16', '20', '6', '100', '100', '10', 'Stock', 4, 'images/product-images/59c5020d792785381553675447.jpg', 'images/product-images/59c5020d792938371553675447.jpg', 'images/product-images/59c5020d792551451553675447.jpg', 'Lakhna mango is less sweet. But ripe mango sweet.', 'Approve', '2019-03-27 08:30:47', NULL, 0, '0', 'ripe'),
(17, '15536757912f690c71a07d139c90ea1d1016068a8a', 'Lokhna', 'M17', '20', '6', '90', '55', '5', 'Stock', 2, 'images/product-images/27e6b024732777221553675791.jpg', 'images/product-images/27e6b024733930521553675791.jpg', 'images/product-images/27e6b02473401481553675791.jpg', 'Langra is the best mango. Langra test very sweet.', 'Approve', '2019-03-27 08:36:31', NULL, 0, '0', 'ripe'),
(18, '1553675899860c95cdbf4091d618dba31282752c6f', 'Lokhna', 'M18', '20', '6', '30', '25', '5', 'Stock', 1, 'images/product-images/289b2679f95388201553675899.jpg', 'images/product-images/289b2679f95393371553675899.jpg', 'images/product-images/289b2679f93362091553675899.jpg', 'Langra is the best mango. Langra test very sweet.', 'Approve', '2019-03-27 08:38:19', NULL, 0, '0', 'ripe'),
(19, '155367595793df03970ee3cdab9f32ce843253fc20', 'Lokhna', 'M19', '20', '6', '60', '55', '6', 'Stock', 2, 'images/product-images/b8ad27e2915572731553675957.jpg', 'images/product-images/b8ad27e2914723131553675957.jpg', 'images/product-images/b8ad27e2913832441553675957.jpg', 'Langra is the best mango. Langra test very sweet.', 'Approve', '2019-03-27 08:39:17', NULL, 0, '0', 'ripe'),
(20, '1553676013014e82c6359ee0566655ce13155c349d', 'Lokhna', 'M20', '20', '6', '80', '55', '10', 'Stock', 4, 'images/product-images/9d238584594379621553676013.jpg', 'images/product-images/9d238584599190191553676013.jpg', 'images/product-images/9d238584597387801553676013.jpg', 'Langra is the best mango. Langra test very sweet.', 'Approve', '2019-03-27 08:40:13', NULL, 0, '0', 'ripe'),
(21, '1553676441825f11452270685a6d7d73803a0e0145', 'Himsagor', 'M21', '20', '1', '200', '150', '10', 'Stock', 5, 'images/product-images/24ecb0816b726471553676441.jpg', 'images/product-images/24ecb0816b5717431553676441.jpg', 'images/product-images/24ecb0816b1965191553676441.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 08:47:21', '2019-04-02 03:22:56', 2, '0', 'raw'),
(22, '1553676542bebfa35053ed29d3b137bccb95fc8a40', 'Himsagor', 'M22', '20', '1', '120', '100', '10', 'Stock', 3, 'images/product-images/21241cee332217221553676542.jpg', 'images/product-images/21241cee334441571553676542.jpg', 'images/product-images/21241cee338372241553676542.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 08:49:02', NULL, 0, '0', 'raw'),
(23, '155367664043c996c5b31fbd056b44dc9ea788f730', 'Himsagor', 'M23', '20', '1', '100', '80', '5', 'Stock', 3, 'images/product-images/13d25a0fc04130711553676640.jpg', 'images/product-images/13d25a0fc06550171553676640.jpg', 'images/product-images/13d25a0fc06732321553676640.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 08:50:40', NULL, 0, '0', 'raw'),
(24, '1553676791326dbbcfcbbe3f38a500e84f07c451d3', 'Himsagor', 'M24', '20', '1', '150', '120', '15', 'Stock', 4, 'images/product-images/b5058253ab8064511553676791.jpg', 'images/product-images/b5058253ab5862991553676791.jpg', 'images/product-images/b5058253ab343051553676791.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 08:53:11', '2019-04-03 13:48:35', 18, '0', 'raw'),
(25, '1553676858baf892d6eb829b5b0383e718fa27c890', 'Himsagor', 'M25', '20', '1', '80', '78', '7', 'Stock', 3, 'images/product-images/95fe43aa5c2735461553676858.jpg', 'images/product-images/95fe43aa5c4689671553676858.jpg', 'images/product-images/95fe43aa5c1125911553676858.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 08:54:18', NULL, 0, '0', 'raw'),
(26, '155367717404bcce7a60b2083425132263eee0a3f2', 'Himsagor', 'M26', '20', '1', '80', '50', '50', 'Stock', 2, 'images/product-images/5478f581345736381553677174.jpg', 'images/product-images/5478f581349711491553677174.jpg', 'images/product-images/5478f58134455721553677174.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 08:59:34', NULL, 0, '0', 'ripe'),
(27, '1553677231cab854abc7885ef5bba71674d5f6f305', 'Himsagor', 'M27', '20', '1', '130', '95', '10', 'Stock', 5, 'images/product-images/92c4cc52dc8810931553677231.jpg', 'images/product-images/92c4cc52dc7546391553677231.jpg', 'images/product-images/92c4cc52dc7294291553677231.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 09:00:31', NULL, 0, '0', 'ripe'),
(28, '1553677947f75cbe57d74ce545f29a9f112c44301e', 'Himsagor', 'M28', '20', '1', '250', '200', '50', 'Stock', 10, 'images/product-images/bb1bc34a474508061553677947.jpg', 'images/product-images/bb1bc34a471262941553677947.jpg', 'images/product-images/bb1bc34a471071841553677947.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 09:12:27', NULL, 0, '0', 'ripe'),
(29, '1553678018331a23492a48e13b909ce0205bd161b1', 'Himsagor', 'M29', '20', '1', '100', '80', '10', 'Stock', 1, 'images/product-images/196fa81c7e1018241553678018.jpg', 'images/product-images/196fa81c7e3349851553678018.jpg', 'images/product-images/196fa81c7e1143331553678018.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 09:13:38', NULL, 0, '0', 'ripe'),
(30, '155367811547c7ff9f3f9f2cd1e35b153774374ec9', 'Himsagor', 'M30', '20', '1', '60', '55', '25', 'Stock', 2, 'images/product-images/f10b187aa15562091553678115.jpg', 'images/product-images/f10b187aa15037281553678115.jpg', 'images/product-images/f10b187aa11940761553678115.jpg', 'Himsagor is one of the best mango. Himsagor is very sweet.', 'Approve', '2019-03-27 09:15:15', NULL, 0, '0', 'ripe'),
(31, '1553678217a2f702abacb8432516d8a47b81554ddf', 'Fajli', 'M31', '20', '3', '100', '80', '10', 'Stock', 1, 'images/product-images/4ccac063b16397051553678217.jpg', 'images/product-images/4ccac063b12437091553678217.jpg', 'images/product-images/4ccac063b19169701553678217.jpg', 'Fajli mango is very sweet.', 'Approve', '2019-03-27 09:16:57', NULL, 0, '0', 'ripe'),
(32, '1553678731f211062defb600c002d02372e4965334', 'Fazli', 'M31', '20', '3', '150', '120', '10', 'Stock', 3, 'images/product-images/81795edff46674821553678731.jpg', 'images/product-images/81795edff4778121553678731.jpg', 'images/product-images/81795edff42402501553678731.jpg', 'Fazli mango is very sweet.', 'Approve', '2019-03-27 09:25:31', '2019-04-02 03:51:44', 26, '0', 'ripe'),
(33, '1553678817ae1f496f44d31b776aa49c4b4aaf7113', 'Fazli', 'M32', '20', '3', '120', '100', '10', 'Stock', 1, 'images/product-images/f11ddaaf1b911671553678817.jpg', 'images/product-images/f11ddaaf1b6733061553678817.jpg', 'images/product-images/f11ddaaf1b1677071553678817.jpg', 'Fazli mango very sweet.', 'Approve', '2019-03-27 09:26:57', NULL, 0, '0', 'ripe'),
(34, '1553678887c729703a61894ee93159be1794c0f5d3', 'Fazli', 'M33', '20', '3', '200', '180', '10', 'Stock', 5, 'images/product-images/fae5e8c4445604221553678887.jpg', 'images/product-images/fae5e8c4445887451553678887.jpg', 'images/product-images/fae5e8c4441471511553678887.jpg', 'Fazli mango very sweet.', 'Approve', '2019-03-27 09:28:07', NULL, 0, '0', 'ripe'),
(35, '1553678946251c7fce7e6437e63b1eb5a24f4cee23', 'Fazli', 'M34', '20', '3', '300', '200', '10', 'Stock', 10, 'images/product-images/bc9aa9a827788781553678946.jpg', 'images/product-images/bc9aa9a827836561553678946.jpg', 'images/product-images/bc9aa9a8277875361553678946.jpg', 'Fazli mango very sweet.', 'Approve', '2019-03-27 09:29:06', NULL, 0, '0', 'ripe'),
(36, '155367903095233d540b3d365d516d8a4093513a4f', 'Fazli', 'M35', '20', '3', '100', '80', '10', 'Stock', 1, 'images/product-images/eabb731a6d8033961553679030.jpg', 'images/product-images/eabb731a6d9435401553679030.jpg', 'images/product-images/eabb731a6d1976091553679030.jpg', 'Fazli mango very sweet.', 'Approve', '2019-03-27 09:30:30', NULL, 0, '0', 'ripe'),
(37, '1553679609d032eb52daddd5476b75621eae466b5a', 'Fazli', 'M37', '20', '3', '70', '60', '10', 'Stock', 1, 'images/product-images/cc64cb0e963287101553679609.jpg', 'images/product-images/cc64cb0e963940421553679609.jpg', 'images/product-images/cc64cb0e969095631553679609.jpg', 'Fazli mango is very sweet.', 'Approve', '2019-03-27 09:40:09', NULL, 0, '0', 'raw'),
(38, '1553679690fcf6729ad6ed5fedc238ce683ad1bac1', 'Fazli', 'M38', '20', '3', '180', '150', '50', 'Stock', 10, 'images/product-images/f1e88554ed4854261553679690.jpg', 'images/product-images/f1e88554ed9226071553679690.jpg', 'images/product-images/f1e88554ed6688731553679690.jpg', 'Fazli mango very good.', 'Approve', '2019-03-27 09:41:30', NULL, 0, '0', 'raw'),
(39, '1553679771f67ea851b65f5d56b842b39f96ef0579', 'Fazli', 'M39', '20', '3', '500', '400', '2', 'Stock', 20, 'images/product-images/ea67117e083592301553679771.jpg', 'images/product-images/ea67117e084721821553679771.jpg', 'images/product-images/ea67117e086854021553679771.jpg', 'Fazli mango very sweet.', 'Approve', '2019-03-27 09:42:51', NULL, 0, '0', 'raw'),
(40, '155367980736bf9618ac9e6612d744993d32c96e28', 'Fazli', 'M40', '20', '3', '120', '100', '10', 'Stock', 10, 'images/product-images/ae45c7410a4165321553679807.jpg', 'images/product-images/ae45c7410a6237371553679807.jpg', 'images/product-images/ae45c7410a7515981553679807.jpg', 'Fazli mango very sweet.', 'Approve', '2019-03-27 09:43:27', '2019-03-31 14:03:53', 1, '0', 'raw'),
(42, '1553679995324f9ad72668a5f7c8d4382371c531c0', 'Amropali', 'M42', '20', '4', '200', '185', '10', 'Stock', 10, 'images/product-images/e2897685063112661553679995.jpg', 'images/product-images/e2897685066669061553679995.jpg', 'images/product-images/e2897685062394801553679995.jpg', 'The most testy mango', 'Approve', '2019-03-27 09:46:35', '2019-03-31 13:41:35', 3, '0', 'ripe'),
(43, '15536800688af6b5f9e4eb33fb6e3e92fc6cb03784', 'Amropali', 'M43', '20', '4', '180', '120', '5', 'Stock', 5, 'images/product-images/ed672ad65d170711553680068.jpg', 'images/product-images/ed672ad65d5753201553680068.jpg', 'images/product-images/ed672ad65d3359431553680068.jpg', 'The most sweet mango.', 'Approve', '2019-03-27 09:47:48', '2019-04-01 03:49:56', 10, '0', 'ripe'),
(45, '1553680187ca12cbac0fc2eb9907513c569c33c05d', 'Amropali', 'M45', '20', '4', '100', '80', '20', 'Stock', 2, 'images/product-images/30ae56ab5b6786691553680187.jpg', 'images/product-images/30ae56ab5b8596441553680187.jpg', 'images/product-images/30ae56ab5b1219281553680187.jpg', 'The most sweet mango.', 'Approve', '2019-03-27 09:49:47', '2019-03-28 02:52:05', 1, '0', 'ripe'),
(46, '15538061833a2cd28d956cc9d81a9d13dd147c25e4', 'Lengra', 'AB', '20', '2', '50', '40', '20', 'Stock', 70, 'images/product-images/a0fe922d515721611553806183.jpg', 'images/product-images/a0fe922d519949641553806183.jpg', 'images/product-images/a0fe922d51302431553806183.jpg', 'hjdjhdj', 'Approve', '2019-03-28 20:49:43', '2019-03-31 12:28:28', 1, '0', 'raw'),
(47, '15538063393cdf5d243aa7f558ab515c9fe7340fbe', 'Lengra', 'AB', '20', '2', '2000', '1500', '22', 'Stock', 80, 'images/product-images/4e81b60fcd7946131553806339.jpg', 'images/product-images/4e81b60fcd6578141553806339.jpg', 'images/product-images/4e81b60fcd964161553806339.jpg', 'hgdhgdhg', 'Approve', '2019-03-28 20:52:19', '2019-04-02 03:02:19', 3, '0', 'raw'),
(49, '155394545335e6ba7f975b015e2070e96179b1f877', 'Lengra Amm', 'EM', '29', '2', '50', '40', '2', 'Stock', 4, 'images/product-images/bae482f8c91242761553945453.jpg', 'images/product-images/bae482f8c98839561553945453.jpg', 'images/product-images/bae482f8c94539581553945453.jpg', 'valo amm', 'Approve', '2019-03-30 11:30:53', NULL, 0, '0', 'raw');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Md Nahid Hasan', 'nahid@gmail.com', '01722145628', 'Dhaka', '2019-03-27 04:01:25', '2019-03-27 04:01:25'),
(2, 'Md Nahid Hasan', 'nahid@gmail.com', '01722145628', 'Dhaka', '2019-03-27 10:46:08', '2019-03-27 10:46:08'),
(3, 'Md Nahid Hasan', 'nahid@gmail.com', '01722145628', 'Dhaka', '2019-03-27 10:47:19', '2019-03-27 10:47:19'),
(4, 'Emamul Murshalin', 'emamul727@gmail.com', '01774210721', 'kansat', '2019-03-27 12:37:16', '2019-03-27 12:37:16'),
(5, 'Md Nahid', 'nahid@gmail.com', '01774210721', 'Chittagong', '2019-03-28 01:04:20', '2019-03-28 01:04:20'),
(6, 'mohaimin rafi', 'rafi@gmail.com', '01774210721', 'Dhaka', '2019-03-28 02:52:19', '2019-03-28 02:52:19'),
(7, 'Tanvir Siddiquee', 'tanvir.cse@diu.edu.bd', '01712560297', 'jamail', '2019-03-31 03:16:10', '2019-03-31 03:16:10'),
(8, 'Emamul Murshalin', 'emamul727@gmail.com', '01774210721', 'kansat', '2019-03-31 11:26:03', '2019-03-31 11:26:03'),
(9, 'Mahbubul Alam', 'mahbubrahman5676@gmail.com', '01774210721', 'dgfchvhxgf', '2019-03-31 13:41:42', '2019-03-31 13:41:42'),
(10, 'Emamul Murshalin', 'emamul727@gmail.com', '01774210721', 'grsfgsfg', '2019-04-01 03:50:08', '2019-04-01 03:50:08'),
(11, 'Emamul Murshalin', 'emamul727@gmail.com', '01774210721', 'grsfgsfg', '2019-04-02 03:07:50', '2019-04-02 03:07:50'),
(12, 'Emamul Murshalin', 'emamul727@gmail.com', '01774210721', 'grsfgsfg', '2019-04-02 03:23:10', '2019-04-02 03:23:10'),
(13, 'Emamul Murshalin', 'emamul727@gmail.com', '01774210721', 'grsfgsfg', '2019-04-02 03:37:43', '2019-04-02 03:37:43'),
(14, 'Emamul Murshalin Haque', 'emamul727@gmail.com', '01774210721', 'Dhaka', '2019-04-02 03:41:32', '2019-04-02 03:41:32'),
(15, 'Emamul Murshalin', 'emamul727@gmail.com', '01774210721', 'Dhaka', '2019-04-02 03:52:05', '2019-04-02 03:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'images/user-images/7ec406eb8a7513141553718507.jpeg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verification_code` int(8) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `name`, `email`, `phone`, `address`, `image`, `email_verified_at`, `verification_code`, `password`, `remember_token`, `created_at`, `type`, `updated_at`) VALUES
(20, '155380137279bdcd889547229de18d618ba2d9c1f1', 'Md Emamul Murshalin', 'emurshalin999@gmail.com', '01777822162', 'Kansat', 'images/user-images/1e3da530514774941553801372.jpeg', '2019-03-30 11:30:43', NULL, '$2y$10$r.jHpBu3A24sIJUHS4V0Puekbdd/jAvVfHCfP.4JDo.MfcqwLXt0.', 'KD91vXUSvyBmRrSEhIdIWRwIHL4wuMLjOOfVbBNTwhCPInm3oZuweHOvnlhN', '2019-03-28 19:29:32', 'Author', '2019-03-30 11:30:43'),
(46, '1554107990ed5e31507eeb9a4ff4753b0e2b0ae414', 'Emamul Murshalin', 'mdemamulmurshalin92@gmail.com', '01774210721', 'dfghvj,jhg', '', '2019-04-01 02:40:40', 711287, '$2y$10$uSjs4IfRsOiNc8ctI3X1c.emGESzd5snZudwQjZFczAmNqtsazU/u', NULL, '2019-04-01 02:39:50', '0', '2019-04-01 02:40:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
