-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 19, 2018 lúc 02:42 AM
-- Phiên bản máy phục vụ: 5.7.23
-- Phiên bản PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET foreign_key_checks = 0;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cibanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_group`
--

DROP TABLE IF EXISTS `admin_groups`;
CREATE TABLE IF NOT EXISTS `admin_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  `permissions` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_group`
--

INSERT INTO `admin_groups` (`id`, `name`, `sort_order`, `permissions`) VALUES
(1, 'Admin', 1, 'a:14:{s:4:\"tran\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:13:\"product_order\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:3:\"cat\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"product\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:11:\"admin_group\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"admin\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"user\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"news\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"info\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"support\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"contact\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"comment\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"slide\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"video\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}}'),
(2, 'Mod', 2, 'a:9:{s:3:\"cat\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"product\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"news\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"info\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"support\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"contact\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"comment\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"slide\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"video\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}}');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_group_id` int(64) NOT NULL,
  FOREIGN KEY group_key(admin_group_id) REFERENCES admin_groups(id),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admins` (`id`, `username`, `password`, `name`, `admin_group_id`) VALUES
(1, 'nghiant', '$2y$10$/hOdOVdsqXMjOgF/vU2h0.wb4/tlxZlUVuBAERKjT50TTlrQsK5ya', 'Nguyễn Trung Nghĩa', 1);


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
  ) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `categories` (`id`, `name`, `alias`, `parent_id`, `sort_order`) VALUES
(1, 'Laptop', 'laptop', 0, 0),
(2, 'Điện thoại', 'dien-thoai', 0, 1),
(3, 'Tivi', 'tivi', 0, 2),
(4, ' Acer', 'acer', 1, 0),
(5, ' Apple', 'apple', 1, 1),
(6, 'Asus', 'asus', 1, 2),
(7, 'Dell', 'dell', 1, 3),
(8, 'HP', 'hp', 1, 5),
(9, 'Apple', 'apple', 2, 0),
(10, 'Asus', 'asus', 2, 1),
(11, 'BlackBerry', 'blackberry', 2, 3),
(12, 'HTC', 'htc', 2, 4),
(13, 'AKAI', 'akai', 3, 0),
(14, 'JVC', 'jvc', 3, 1),
(15, 'LG', 'lg', 3, 2),
(16, 'Panasonic', 'panasonic', 3, 3),
(17, 'Samsung', 'samsung', 3, 5),
(18, 'Toshiba', 'toshiba', 3, 6);


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `image_link` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `warranty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `buyed` int(255) NOT NULL,
  `rate_total` int(255) NOT NULL,
  `rate_count` int(255) NOT NULL,
  `gifts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feature` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  FOREIGN KEY category_key(category_id) REFERENCES categories(id),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `alias`, `price`, `content`, `discount`, `image_link`, `image_list`, `created`, `view`, `warranty`, `total`, `buyed`, `rate_total`, `rate_count`, `gifts`, `video`, `feature`) VALUES
(2, 15, 'Tivi LG 4000', 'tivi-lg-4000', '4000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 200000, 'product2.jpg', '', '2017-07-04 10:07:16', 7, '12 tháng', 0, 4, 4, 1, 'USB 4G', 'https://www.youtube.com/embed/IqUJIA55xs4', '0'),
(3, 13, 'Tivi Akai', 'tivi-akai', '5000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, 'product1.jpg', '', '2017-07-04 10:07:16', 9, '12 tháng', 0, 0, 4, 1, 'USB 4G', 'https://www.youtube.com/embed/IqUJIA55xs4', '0'),
(4, 16, 'Tivi Panasonic', 'tivi-panasonic', '6000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, 'product3.jpg', '', '2017-07-04 10:07:16', 5, '12 tháng', 0, 2, 12, 3, 'USB 4G', 'https://www.youtube.com/embed/IqUJIA55xs4', '0'),
(5, 17, 'Tivi Samsung', 'tivi-samsung', '5500000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, 'product4.jpg', '', '2017-07-04 10:07:16', 1, '12 tháng', 0, 0, 0, 0, 'USB 4G', 'https://www.youtube.com/embed/IqUJIA55xs4', '0'),
(6, 15, 'Tivi LG 5000', 'tivi-lg-5000', '5000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, 'product5.jpg', '', '2017-07-04 10:07:16', 1, '12 tháng', 0, 0, 0, 0, 'USB 4G', 'https://www.youtube.com/embed/IqUJIA55xs4', '0'),
(7, 18, 'Tivi Toshiba', 'tivi-toshiba', '6200000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 400000, 'product6.jpg', '', '2017-07-04 10:07:16', 74, '12 tháng', 0, 0, 7, 2, 'USB 4G', 'https://www.youtube.com/embed/IqUJIA55xs4', '0'),
(8, 14, 'Tivi JVC 500', 'tivi-jvc-500', '10000000.0000', 'Bài viết cho sản phẩm này đang được cập nhật ...', 500000, 'product7.jpg', '', '2017-07-04 10:07:16', 112, '12 tháng', 0, 0, 17, 5, 'USB 4G', 'https://www.youtube.com/embed/IqUJIA55xs4', '0'),
(9, 15, 'Tivi LG 520', 'tivi-lg-520', '5400000.0000', '<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật ...</p>\r\n', 0, 'product13.jpg', 'a:0:{}', '2017-07-04 10:07:16', 20, '12 tháng', 0, 0, 4, 1, '0', 'https://www.youtube.com/embed/IqUJIA55xs4', '0');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `payment` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_info` text COLLATE utf8_unicode_ci,
  `message` varchar(255) COLLATE utf8_unicode_ci,
  `security` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created` timestamp NULL DEFAULT NULL,
  FOREIGN KEY transaction_user_key(user_id) REFERENCES users(id),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `transaction_id` bigint(20) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `products` ADD FULLTEXT KEY `name` (`name`);

ALTER TABLE `orders` ADD CONSTRAINT `order_transaction_foreign` FOREIGN KEY
  (`transaction_id`) REFERENCES `transactions`(`id`);
ALTER TABLE `orders` ADD CONSTRAINT `order_product_foreign` FOREIGN KEY
  (`product_id`) REFERENCES `products`(`id`);


ALTER TABLE `categories` ADD CONSTRAINT `categories_parent_foreign` FOREIGN KEY
  (`parent_id`) REFERENCES `categories`(`id`);
SET foreign_key_checks = 1;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;