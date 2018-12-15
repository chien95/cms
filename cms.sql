-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2018 lúc 05:29 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cms`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arr_img` longtext COLLATE utf8_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `percent` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `title` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customer_info` text COLLATE utf8_unicode_ci,
  `orders_info` text COLLATE utf8_unicode_ci,
  `payment_info` text COLLATE utf8_unicode_ci,
  `status` int(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arr_img` longtext COLLATE utf8_unicode_ci,
  `info` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `info_text1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info_text2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info_text3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info_text4` longtext COLLATE utf8_unicode_ci,
  `info_text5` longtext COLLATE utf8_unicode_ci,
  `info_number1` int(11) DEFAULT NULL,
  `info_number2` int(11) DEFAULT NULL,
  `info_number3` int(11) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts_categories`
--

CREATE TABLE `posts_categories` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `categories_fk0` (`parent_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_fk0` (`user_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Chỉ mục cho bảng `posts_categories`
--
ALTER TABLE `posts_categories`
  ADD PRIMARY KEY (`post_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `users_fk0` (`group_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_fk0` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `posts_categories`
--
ALTER TABLE `posts_categories`
  ADD CONSTRAINT `posts_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_categories_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
