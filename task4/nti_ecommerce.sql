-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 04:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nti_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(100) NOT NULL,
  `building` varchar(10) NOT NULL,
  `floor` varchar(10) DEFAULT NULL,
  `flat` varchar(200) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `regoind_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barnds`
--

CREATE TABLE `barnds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name-ar` varchar(100) NOT NULL,
  `name-en` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=>not activ 1=>activ',
  `image` varchar(100) NOT NULL DEFAULT 'defauit.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barnds`
--

INSERT INTO `barnds` (`id`, `name-ar`, `name-en`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'سامسونج\r\n', 'samsung', 1, '4.png', '2022-02-22 02:08:40', '2022-02-22 02:14:57'),
(2, 'ابل', 'apple', 1, '6.png', '2022-02-22 02:08:40', '2022-02-22 02:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `user_id`, `quantity`) VALUES
(2, 1, 1),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name-ar` varchar(100) NOT NULL,
  `name-en` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=>not active, 1=>active',
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name-ar`, `name-en`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'موضه', 'fashion', 1, 'default.png', '2022-02-22 02:14:14', '2022-02-22 02:18:12'),
(2, 'الالكترونيات', 'electronics', 1, 'default.png', '2022-02-22 02:14:14', '2022-02-22 02:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name-ar` varchar(100) NOT NULL,
  `name-en` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=> not active, 1=>active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name-ar`, `name-en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'قاهره', 'Cairo', 1, '2022-02-22 14:45:28', '2022-02-22 14:45:28'),
(2, 'الجيزه', 'Giza', 1, '2022-02-22 14:47:03', '2022-02-22 14:47:03'),
(3, 'الدقهلية', 'Dakahlia', 1, '2022-02-22 14:54:07', '2022-02-22 14:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `discount_type` int(11) NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `max_discount_value` int(11) NOT NULL,
  `min_order_value` int(11) NOT NULL,
  `max_usage_per_user` int(11) NOT NULL,
  `max_usage_in_general` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `discount_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers_products`
--

CREATE TABLE `offers_products` (
  `product-id` bigint(20) UNSIGNED NOT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `price_after_discount` decimal(8,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=>not activ 1=>activ',
  `total_price` decimal(5,0) NOT NULL,
  `delliverd_date` timestamp NULL DEFAULT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(9,0) NOT NULL,
  `quantity` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `price` decimal(9,0) NOT NULL,
  `quantity` smallint(3) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT ' 0=>not active\r\n1=>cative',
  `image` varchar(100) NOT NULL,
  `decs-ar` longtext NOT NULL,
  `decs-en` longtext NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `sub category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated-at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_ar`, `name_en`, `price`, `quantity`, `status`, `image`, `decs-ar`, `decs-en`, `brand_id`, `sub category_id`, `created_at`, `updated-at`) VALUES
(2, '22Sسامسونج جلاكسي', 'Samsung GalaxyS22', '9999', 1, 1, 's22.png', 'وريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 2, '2022-02-22 14:36:47', '2022-02-22 14:36:47'),
(3, 'ابل ايفون 12 برو ماكس', 'Apple iPhone 12 Pro Max', '8787', 1, 1, '', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, 2, '2022-02-22 14:42:19', '2022-02-22 14:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `regoins`
--

CREATE TABLE `regoins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name-ar` varchar(100) NOT NULL,
  `name-en` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=>not active 1=>active',
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regoins`
--

INSERT INTO `regoins` (`id`, `name-ar`, `name-en`, `status`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'عين شمس', 'Ain Shams', 1, 1, '2022-02-22 14:48:09', '2022-02-22 14:48:09'),
(2, 'المنصورة', 'Mansoura', 1, 3, '2022-02-22 14:55:02', '2022-02-22 14:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `reviws`
--

CREATE TABLE `reviws` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `value` enum('0','1','2','3','4','5') NOT NULL DEFAULT '0',
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub categories`
--

CREATE TABLE `sub categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name-ar` varchar(100) NOT NULL,
  `name-en` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=> not active, 1=>active',
  `image` varchar(100) NOT NULL DEFAULT 'defauit.png',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub categories`
--

INSERT INTO `sub categories` (`id`, `name-ar`, `name-en`, `status`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'موبيلات', 'Mobiles', 1, 'defauit.png', 2, '2022-02-22 12:27:17', '2022-02-22 12:27:17'),
(3, 'لابتوب', 'laptop', 1, '6.png', 2, '2022-02-22 12:27:17', '2022-02-22 12:27:17'),
(4, 'الملابس', 'Clothing', 1, 'defauit.png', 1, '2022-02-22 14:57:44', '2022-02-22 14:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `image` varchar(100) DEFAULT 'default.png',
  `code` int(5) DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `gender`, `image`, `code`, `expired_at`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'fatma', 'salah', 'fatma@gmail.com', '12345', '0123333', 'f', 'default.png', 3333, NULL, NULL, '2022-02-22 02:05:35', '2022-02-22 02:05:35'),
(2, 'howayda', 'alaa', 'howayda', '12334', '0123344', 'f', '1.png', 8888, NULL, NULL, '2022-02-22 02:06:46', '2022-02-22 02:06:46'),
(3, 'aya', 'salah', '*****@gamil.com', '66678', '0123777', 'f', 'default.png', 9090, NULL, NULL, '2022-02-22 15:00:44', '2022-02-22 15:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY ` addresses_regoind_fk` (`regoind_id`),
  ADD KEY ` addresses_user_fk` (`user_id`);

--
-- Indexes for table `barnds`
--
ALTER TABLE `barnds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`,`user_id`),
  ADD KEY `cart_user_fk` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers_products`
--
ALTER TABLE `offers_products`
  ADD PRIMARY KEY (`product-id`,`offer_id`),
  ADD KEY `offers_product_fk` (`offer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresse_order_fk` (`address_id`),
  ADD KEY `coupon_orders_fk` (`coupon_id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_orders_fk` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_product_fk` (`brand_id`),
  ADD KEY `sub categroy_product_fk` (`sub category_id`);

--
-- Indexes for table `regoins`
--
ALTER TABLE `regoins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_regoin_fk` (`city_id`);

--
-- Indexes for table `reviws`
--
ALTER TABLE `reviws`
  ADD PRIMARY KEY (`product_id`,`user_id`),
  ADD KEY `user_reviws_fk` (`user_id`);

--
-- Indexes for table `sub categories`
--
ALTER TABLE `sub categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_subcategories_fk` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`product_id`,`user_id`),
  ADD KEY `user_wishlists_fk` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barnds`
--
ALTER TABLE `barnds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regoins`
--
ALTER TABLE `regoins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub categories`
--
ALTER TABLE `sub categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT ` addresses_regoind_fk` FOREIGN KEY (`regoind_id`) REFERENCES `regoins` (`id`),
  ADD CONSTRAINT ` addresses_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `offers_products`
--
ALTER TABLE `offers_products`
  ADD CONSTRAINT `offers_product_fk` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`),
  ADD CONSTRAINT `product_offers_fk` FOREIGN KEY (`product-id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `addresse_order_fk` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `coupon_orders_fk` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`);

--
-- Constraints for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `orders_product_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `product_orders_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `brand_product_fk` FOREIGN KEY (`brand_id`) REFERENCES `barnds` (`id`),
  ADD CONSTRAINT `sub categroy_product_fk` FOREIGN KEY (`sub category_id`) REFERENCES `sub categories` (`id`);

--
-- Constraints for table `regoins`
--
ALTER TABLE `regoins`
  ADD CONSTRAINT `city_regoin_fk` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `reviws`
--
ALTER TABLE `reviws`
  ADD CONSTRAINT ` product_ reviws_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_reviws_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub categories`
--
ALTER TABLE `sub categories`
  ADD CONSTRAINT `categories_subcategories_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `product_wishlists_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_wishlists_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
