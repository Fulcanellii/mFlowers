-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 28 2020 г., 10:59
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `october`
--

-- --------------------------------------------------------

--
-- Структура таблицы `backend_access_log`
--

CREATE TABLE `backend_access_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `backend_access_log`
--

INSERT INTO `backend_access_log` (`id`, `user_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, '127.0.0.1', '2020-02-27 04:22:28', '2020-02-27 04:22:28');

-- --------------------------------------------------------

--
-- Структура таблицы `backend_users`
--

CREATE TABLE `backend_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persist_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `backend_users`
--

INSERT INTO `backend_users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `is_activated`, `role_id`, `activated_at`, `last_login`, `created_at`, `updated_at`, `deleted_at`, `is_superuser`) VALUES
(1, 'Admin', 'Person', 'admin', 'admin@domain.tld', '$2y$10$Ui.qi0gVhDiOCjPVWerx/.QI3aTIuHnVL1hHd3QldguZnA2X2R4nm', NULL, '$2y$10$RrHFoDvgZHg8v6yj2JNUAOJ9hQxjOYc5vBmYlxRB6z5SLtSnjvi2u', NULL, '', 1, 2, NULL, '2020-02-27 04:22:28', '2020-02-27 04:22:10', '2020-02-27 04:22:28', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `backend_users_groups`
--

CREATE TABLE `backend_users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `backend_users_groups`
--

INSERT INTO `backend_users_groups` (`user_id`, `user_group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `backend_user_groups`
--

CREATE TABLE `backend_user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_new_user_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `backend_user_groups`
--

INSERT INTO `backend_user_groups` (`id`, `name`, `created_at`, `updated_at`, `code`, `description`, `is_new_user_default`) VALUES
(1, 'Owners', '2020-02-27 04:22:09', '2020-02-27 04:22:09', 'owners', 'Default group for website owners.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `backend_user_preferences`
--

CREATE TABLE `backend_user_preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `backend_user_roles`
--

CREATE TABLE `backend_user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_system` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `backend_user_roles`
--

INSERT INTO `backend_user_roles` (`id`, `name`, `code`, `description`, `permissions`, `is_system`, `created_at`, `updated_at`) VALUES
(1, 'Publisher', 'publisher', 'Site editor with access to publishing tools.', '', 1, '2020-02-27 04:22:09', '2020-02-27 04:22:09'),
(2, 'Developer', 'developer', 'Site administrator with access to developer tools.', '', 1, '2020-02-27 04:22:09', '2020-02-27 04:22:09');

-- --------------------------------------------------------

--
-- Структура таблицы `backend_user_throttle`
--

CREATE TABLE `backend_user_throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT 0,
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT 0,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT 0,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `backend_user_throttle`
--

INSERT INTO `backend_user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `last_attempt_at`, `is_suspended`, `suspended_at`, `is_banned`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, NULL, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cms_theme_data`
--

CREATE TABLE `cms_theme_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cms_theme_data`
--

INSERT INTO `cms_theme_data` (`id`, `theme`, `data`, `created_at`, `updated_at`) VALUES
(1, 'lovata-bootstrap-shopaholic', '{\"site_name\":\"\",\"company_name\":\"\",\"company_description\":\"\",\"contact_phone\":\"+996 700 55 44 33\",\"contact_address\":\"\\u0433.\\u0411\\u0438\\u0448\\u043a\\u0435\\u043a, \\u0443\\u043b \\u041c\\u043e\\u0441\\u043a\\u043e\\u0432\\u0441\\u043a\\u0430\\u044f 122\",\"contact_email\":\"mflawers@gmail.com\",\"copyright\":\"\\u00a9 2020 \\u0418\\u041f \\u201c\\u041c-\\u0424\\u043b\\u0430\\u0432\\u0435\\u0440\\u0441\\u201d.\\u0412\\u0441\\u0435 \\u043f\\u0440\\u0430\\u0432\\u0430 \\u0437\\u0430\\u0449\\u0438\\u0449\\u0435\\u043d\\u044b\",\"facebook_link\":\"asd\",\"instagram_link\":\"123\",\"twitter_link\":\"asd123\",\"promo_block_left\":\"\",\"promo_block_middle\":\"\",\"promo_block_right\":\"\",\"index_banner\":\"\",\"index_banner_link\":\"\",\"category_left\":\"\",\"category_middle\":\"\",\"category_right\":\"\",\"main_slider\":\"[]\"}', '2020-02-27 04:24:40', '2020-02-27 05:34:00');

-- --------------------------------------------------------

--
-- Структура таблицы `cms_theme_logs`
--

CREATE TABLE `cms_theme_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cms_theme_templates`
--

CREATE TABLE `cms_theme_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `deferred_bindings`
--

CREATE TABLE `deferred_bindings` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slave_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slave_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_bind` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `failed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_ordersshopaholic_payment_restrictions`
--

CREATE TABLE `lovata_ordersshopaholic_payment_restrictions` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restriction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_ordersshopaholic_payment_restrictions_link`
--

CREATE TABLE `lovata_ordersshopaholic_payment_restrictions_link` (
  `payment_method_id` int(10) UNSIGNED NOT NULL,
  `payment_restriction_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_ordersshopaholic_shipping_restrictions`
--

CREATE TABLE `lovata_ordersshopaholic_shipping_restrictions` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restriction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_ordersshopaholic_shipping_restrictions_link`
--

CREATE TABLE `lovata_ordersshopaholic_shipping_restrictions_link` (
  `shipping_type_id` int(10) UNSIGNED NOT NULL,
  `shipping_restriction_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_addition_properties`
--

CREATE TABLE `lovata_orders_shopaholic_addition_properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'input',
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_orders_shopaholic_addition_properties`
--

INSERT INTO `lovata_orders_shopaholic_addition_properties` (`id`, `active`, `name`, `slug`, `code`, `description`, `type`, `settings`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 1, 'lovata.toolbox::lang.field.email', 'email', 'email', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.field.user\"}', 1, '2020-02-27 04:26:12', '2020-02-27 04:26:12'),
(2, 1, 'lovata.ordersshopaholic::lang.field.name', 'name', 'name', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.field.user\"}', 2, '2020-02-27 04:26:12', '2020-02-27 04:26:12'),
(3, 1, 'lovata.ordersshopaholic::lang.field.last_name', 'last_name', 'last_name', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.field.user\"}', 3, '2020-02-27 04:26:12', '2020-02-27 04:26:12'),
(4, 1, 'lovata.toolbox::lang.field.phone', 'phone', 'phone', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.field.user\"}', 4, '2020-02-27 04:26:12', '2020-02-27 04:26:12'),
(5, 1, 'lovata.toolbox::lang.field.country', 'billing_country', 'billing_country', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 5, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(6, 1, 'lovata.toolbox::lang.field.state', 'billing_state', 'billing_state', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 6, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(7, 1, 'lovata.toolbox::lang.field.city', 'billing_city', 'billing_city', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 7, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(8, 1, 'lovata.toolbox::lang.field.street', 'billing_street', 'billing_street', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 8, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(9, 1, 'lovata.toolbox::lang.field.house', 'billing_house', 'billing_house', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 9, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(10, 1, 'lovata.toolbox::lang.field.flat', 'billing_flat', 'billing_flat', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 10, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(11, 1, 'lovata.toolbox::lang.field.address1', 'billing_address1', 'billing_address1', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 11, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(12, 1, 'lovata.toolbox::lang.field.address2', 'billing_address2', 'billing_address2', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 12, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(13, 1, 'lovata.toolbox::lang.field.postcode', 'billing_postcode', 'billing_postcode', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.billing_address\"}', 13, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(14, 1, 'lovata.toolbox::lang.field.country', 'shipping_country', 'shipping_country', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 14, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(15, 1, 'lovata.toolbox::lang.field.state', 'shipping_state', 'shipping_state', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 15, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(16, 1, 'lovata.toolbox::lang.field.city', 'shipping_city', 'shipping_city', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 16, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(17, 1, 'lovata.toolbox::lang.field.street', 'shipping_street', 'shipping_street', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 17, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(18, 1, 'lovata.toolbox::lang.field.house', 'shipping_house', 'shipping_house', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 18, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(19, 1, 'lovata.toolbox::lang.field.flat', 'shipping_flat', 'shipping_flat', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 19, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(20, 1, 'lovata.toolbox::lang.field.address1', 'shipping_address1', 'shipping_address1', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 20, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(21, 1, 'lovata.toolbox::lang.field.address2', 'shipping_address2', 'shipping_address2', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 21, '2020-02-27 04:26:13', '2020-02-27 04:26:13'),
(22, 1, 'lovata.toolbox::lang.field.postcode', 'shipping_postcode', 'shipping_postcode', NULL, 'input', '{\"tab\":\"lovata.ordersshopaholic::lang.tab.shipping_address\"}', 22, '2020-02-27 04:26:13', '2020-02-27 04:26:13');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_carts`
--

CREATE TABLE `lovata_orders_shopaholic_carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_type_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_orders_shopaholic_carts`
--

INSERT INTO `lovata_orders_shopaholic_carts` (`id`, `user_id`, `created_at`, `updated_at`, `shipping_type_id`, `payment_method_id`, `email`, `user_data`, `property`, `shipping_address`, `billing_address`) VALUES
(1, NULL, '2020-02-27 04:27:16', '2020-02-27 04:27:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_cart_positions`
--

CREATE TABLE `lovata_orders_shopaholic_cart_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `item_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `item_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'LovataShopaholicModelsOffer',
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_orders_shopaholic_cart_positions`
--

INSERT INTO `lovata_orders_shopaholic_cart_positions` (`id`, `cart_id`, `item_id`, `item_type`, `quantity`, `property`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 1, 'Lovata\\Shopaholic\\Models\\Offer', 1, NULL, '2020-02-27 04:33:03', '2020-02-27 05:53:20', '2020-02-27 05:53:20'),
(4, 1, 2, 'Lovata\\Shopaholic\\Models\\Offer', 1, NULL, '2020-02-27 06:01:50', '2020-02-27 06:23:25', '2020-02-27 06:23:25');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_orders`
--

CREATE TABLE `lovata_orders_shopaholic_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_price` decimal(15,2) DEFAULT NULL,
  `shipping_type_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `property` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_response` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `shipping_tax_percent` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_orders_shopaholic_orders`
--

INSERT INTO `lovata_orders_shopaholic_orders` (`id`, `user_id`, `status_id`, `order_number`, `secret_key`, `shipping_price`, `shipping_type_id`, `payment_method_id`, `property`, `created_at`, `updated_at`, `transaction_id`, `payment_data`, `payment_response`, `payment_token`, `manager_id`, `currency_id`, `shipping_tax_percent`) VALUES
(1, NULL, 1, '200227-0001', '4db2d6568966b16187462f1a80561d6e', NULL, NULL, NULL, '{\"email\":\"owner@owner.com\",\"name\":\"\\u0410\\u0442\\u0430\\u0439\",\"last_name\":\"atay\",\"shipping_address1\":\"1234\",\"shipping_address2\":\"1234\"}', '2020-02-27 04:29:35', '2020-02-27 04:29:35', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(2, NULL, 1, '200227-0002', 'da3a0422d2e5cb21020a253ea4dd7426', NULL, NULL, NULL, '{\"email\":\"123\",\"name\":\"123\",\"last_name\":\"123\",\"shipping_address1\":\"233\",\"shipping_address2\":\"333\"}', '2020-02-27 05:58:33', '2020-02-27 05:58:33', NULL, NULL, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_order_positions`
--

CREATE TABLE `lovata_orders_shopaholic_order_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `old_price` decimal(15,2) DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tax_percent` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_orders_shopaholic_order_positions`
--

INSERT INTO `lovata_orders_shopaholic_order_positions` (`id`, `order_id`, `item_id`, `item_type`, `price`, `old_price`, `quantity`, `weight`, `height`, `length`, `width`, `code`, `property`, `created_at`, `updated_at`, `tax_percent`) VALUES
(1, 1, 1, 'Lovata\\Shopaholic\\Models\\Offer', '100.00', '250.00', 3, NULL, NULL, NULL, NULL, '', NULL, '2020-02-27 04:29:35', '2020-02-27 04:29:35', '0.00'),
(2, 2, 2, 'Lovata\\Shopaholic\\Models\\Offer', '150.00', '0.00', 1, NULL, NULL, NULL, NULL, '', NULL, '2020-02-27 05:58:33', '2020-02-27 05:58:33', '0.00');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_order_promo_mechanism`
--

CREATE TABLE `lovata_orders_shopaholic_order_promo_mechanism` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `mechanism_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(10) UNSIGNED NOT NULL,
  `discount_value` double(8,2) UNSIGNED NOT NULL,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_discount` tinyint(1) NOT NULL DEFAULT 0,
  `property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `element_id` int(10) UNSIGNED DEFAULT NULL,
  `element_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `element_data` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_payment_methods`
--

CREATE TABLE `lovata_orders_shopaholic_payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `preview_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancel_status_id` int(11) DEFAULT 0,
  `fail_status_id` int(11) DEFAULT 0,
  `send_purchase_request` tinyint(1) NOT NULL DEFAULT 0,
  `gateway_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gateway_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gateway_property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `before_status_id` int(11) DEFAULT 0,
  `after_status_id` int(11) DEFAULT 0,
  `restore_cart` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_position_properties`
--

CREATE TABLE `lovata_orders_shopaholic_position_properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'input',
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_promo_mechanism`
--

CREATE TABLE `lovata_orders_shopaholic_promo_mechanism` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(10) UNSIGNED NOT NULL,
  `discount_value` double(8,2) UNSIGNED NOT NULL,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_discount` tinyint(1) NOT NULL DEFAULT 0,
  `property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_shipping_types`
--

CREATE TABLE `lovata_orders_shopaholic_shipping_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `preview_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `property` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_statuses`
--

CREATE TABLE `lovata_orders_shopaholic_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_user_show` tinyint(1) NOT NULL DEFAULT 0,
  `user_status_id` int(11) DEFAULT NULL,
  `preview_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_orders_shopaholic_statuses`
--

INSERT INTO `lovata_orders_shopaholic_statuses` (`id`, `name`, `code`, `sort_order`, `created_at`, `updated_at`, `is_user_show`, `user_status_id`, `preview_text`, `color`) VALUES
(1, 'New', 'new', 1, '2020-02-27 04:26:12', '2020-02-27 04:26:13', 0, NULL, NULL, '#f1c40f'),
(2, 'In progress', 'in_progress', 2, '2020-02-27 04:26:12', '2020-02-27 04:26:13', 0, NULL, NULL, '#2980b9'),
(3, 'Complete', 'complete', 3, '2020-02-27 04:26:12', '2020-02-27 04:26:13', 0, NULL, NULL, '#27ae60'),
(4, 'Canceled', 'canceled', 4, '2020-02-27 04:26:12', '2020-02-27 04:26:13', 0, NULL, NULL, '#c0392b');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_tasks`
--

CREATE TABLE `lovata_orders_shopaholic_tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `sent` tinyint(1) NOT NULL DEFAULT 0,
  `date` datetime DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `manager_id` int(10) UNSIGNED DEFAULT NULL,
  `author_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_orders_shopaholic_user_addresses`
--

CREATE TABLE `lovata_orders_shopaholic_user_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_additional_categories`
--

CREATE TABLE `lovata_shopaholic_additional_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_shopaholic_additional_categories`
--

INSERT INTO `lovata_shopaholic_additional_categories` (`category_id`, `product_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_brands`
--

CREATE TABLE `lovata_shopaholic_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_categories`
--

CREATE TABLE `lovata_shopaholic_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `nest_left` int(10) UNSIGNED DEFAULT NULL,
  `nest_right` int(10) UNSIGNED DEFAULT NULL,
  `nest_depth` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_shopaholic_categories`
--

INSERT INTO `lovata_shopaholic_categories` (`id`, `active`, `name`, `slug`, `code`, `external_id`, `preview_text`, `description`, `parent_id`, `nest_left`, `nest_right`, `nest_depth`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test cat', 'test-cat', '', '', '', '', NULL, 1, 4, 0, '2020-02-27 04:28:04', '2020-02-27 05:54:27'),
(2, 1, 'cat2', 'cat2', '', '', '', '', 1, 2, 3, 1, '2020-02-27 05:54:20', '2020-02-27 05:54:27');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_currency`
--

CREATE TABLE `lovata_shopaholic_currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `external_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_shopaholic_currency`
--

INSERT INTO `lovata_shopaholic_currency` (`id`, `active`, `is_default`, `name`, `code`, `symbol`, `rate`, `external_id`, `sort_order`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'USD', 'USD', '$', '1.00', NULL, 1, NULL, '2020-02-27 04:23:53', '2020-02-27 04:23:53');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_measure`
--

CREATE TABLE `lovata_shopaholic_measure` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_offers`
--

CREATE TABLE `lovata_shopaholic_offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `weight` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `measure_of_unit_id` int(11) DEFAULT NULL,
  `quantity_in_unit` double DEFAULT NULL,
  `preview_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_shopaholic_offers`
--

INSERT INTO `lovata_shopaholic_offers` (`id`, `active`, `product_id`, `name`, `code`, `external_id`, `quantity`, `weight`, `height`, `length`, `width`, `measure_of_unit_id`, `quantity_in_unit`, `preview_text`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'test', '', '', 110, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2020-02-27 04:27:45', '2020-02-27 04:27:45'),
(2, 1, 2, 'Test', '', '', 10, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2020-02-27 04:34:47', '2020-02-27 04:34:47');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_prices`
--

CREATE TABLE `lovata_shopaholic_prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `old_price` decimal(15,2) DEFAULT NULL,
  `price_type_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_shopaholic_prices`
--

INSERT INTO `lovata_shopaholic_prices` (`id`, `item_id`, `item_type`, `price`, `old_price`, `price_type_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lovata\\Shopaholic\\Models\\Offer', '100.00', '250.00', NULL, '2020-02-27 04:27:45', '2020-02-27 04:27:45'),
(2, 2, 'Lovata\\Shopaholic\\Models\\Offer', '150.00', '0.00', NULL, '2020-02-27 04:34:47', '2020-02-27 04:34:47');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_price_types`
--

CREATE TABLE `lovata_shopaholic_price_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_products`
--

CREATE TABLE `lovata_shopaholic_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `external_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lovata_shopaholic_products`
--

INSERT INTO `lovata_shopaholic_products` (`id`, `active`, `name`, `slug`, `brand_id`, `category_id`, `external_id`, `code`, `preview_text`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test123', 'test123', NULL, 1, '', '', '', '', NULL, '2020-02-27 04:27:34', '2020-02-27 04:28:10'),
(2, 1, 'Product', 'product', NULL, 1, '', '', '', '', NULL, '2020-02-27 04:34:30', '2020-02-27 04:34:49');

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_promo_block`
--

CREATE TABLE `lovata_shopaholic_promo_block` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `hidden` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_begin` datetime NOT NULL,
  `date_end` datetime DEFAULT NULL,
  `preview_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_promo_block_relation`
--

CREATE TABLE `lovata_shopaholic_promo_block_relation` (
  `promo_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_taxes`
--

CREATE TABLE `lovata_shopaholic_taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `is_global` tinyint(1) NOT NULL DEFAULT 0,
  `percent` decimal(8,2) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `applied_to_shipping_price` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_tax_category_link`
--

CREATE TABLE `lovata_shopaholic_tax_category_link` (
  `tax_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_tax_country_link`
--

CREATE TABLE `lovata_shopaholic_tax_country_link` (
  `tax_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_tax_product_link`
--

CREATE TABLE `lovata_shopaholic_tax_product_link` (
  `tax_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lovata_shopaholic_tax_state_link`
--

CREATE TABLE `lovata_shopaholic_tax_state_link` (
  `tax_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_10_01_000001_Db_Deferred_Bindings', 1),
(2, '2013_10_01_000002_Db_System_Files', 1),
(3, '2013_10_01_000003_Db_System_Plugin_Versions', 1),
(4, '2013_10_01_000004_Db_System_Plugin_History', 1),
(5, '2013_10_01_000005_Db_System_Settings', 1),
(6, '2013_10_01_000006_Db_System_Parameters', 1),
(7, '2013_10_01_000007_Db_System_Add_Disabled_Flag', 1),
(8, '2013_10_01_000008_Db_System_Mail_Templates', 1),
(9, '2013_10_01_000009_Db_System_Mail_Layouts', 1),
(10, '2014_10_01_000010_Db_Jobs', 1),
(11, '2014_10_01_000011_Db_System_Event_Logs', 1),
(12, '2014_10_01_000012_Db_System_Request_Logs', 1),
(13, '2014_10_01_000013_Db_System_Sessions', 1),
(14, '2015_10_01_000014_Db_System_Mail_Layout_Rename', 1),
(15, '2015_10_01_000015_Db_System_Add_Frozen_Flag', 1),
(16, '2015_10_01_000016_Db_Cache', 1),
(17, '2015_10_01_000017_Db_System_Revisions', 1),
(18, '2015_10_01_000018_Db_FailedJobs', 1),
(19, '2016_10_01_000019_Db_System_Plugin_History_Detail_Text', 1),
(20, '2016_10_01_000020_Db_System_Timestamp_Fix', 1),
(21, '2017_08_04_121309_Db_Deferred_Bindings_Add_Index_Session', 1),
(22, '2017_10_01_000021_Db_System_Sessions_Update', 1),
(23, '2017_10_01_000022_Db_Jobs_FailedJobs_Update', 1),
(24, '2017_10_01_000023_Db_System_Mail_Partials', 1),
(25, '2017_10_23_000024_Db_System_Mail_Layouts_Add_Options_Field', 1),
(26, '2013_10_01_000001_Db_Backend_Users', 2),
(27, '2013_10_01_000002_Db_Backend_User_Groups', 2),
(28, '2013_10_01_000003_Db_Backend_Users_Groups', 2),
(29, '2013_10_01_000004_Db_Backend_User_Throttle', 2),
(30, '2014_01_04_000005_Db_Backend_User_Preferences', 2),
(31, '2014_10_01_000006_Db_Backend_Access_Log', 2),
(32, '2014_10_01_000007_Db_Backend_Add_Description_Field', 2),
(33, '2015_10_01_000008_Db_Backend_Add_Superuser_Flag', 2),
(34, '2016_10_01_000009_Db_Backend_Timestamp_Fix', 2),
(35, '2017_10_01_000010_Db_Backend_User_Roles', 2),
(36, '2018_12_16_000011_Db_Backend_Add_Deleted_At', 2),
(37, '2014_10_01_000001_Db_Cms_Theme_Data', 3),
(38, '2016_10_01_000002_Db_Cms_Timestamp_Fix', 3),
(39, '2017_10_01_000003_Db_Cms_Theme_Logs', 3),
(40, '2018_11_01_000001_Db_Cms_Theme_Templates', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `rainlab_blog_categories`
--

CREATE TABLE `rainlab_blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `nest_left` int(11) DEFAULT NULL,
  `nest_right` int(11) DEFAULT NULL,
  `nest_depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rainlab_blog_categories`
--

INSERT INTO `rainlab_blog_categories` (`id`, `name`, `slug`, `code`, `description`, `parent_id`, `nest_left`, `nest_right`, `nest_depth`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', 'uncategorized', NULL, NULL, NULL, 1, 2, 0, '2020-02-27 04:47:56', '2020-02-27 04:47:56'),
(2, 'Домашние', 'domashnie', NULL, '', NULL, 3, 4, 0, '2020-02-27 06:09:01', '2020-02-27 06:09:01');

-- --------------------------------------------------------

--
-- Структура таблицы `rainlab_blog_posts`
--

CREATE TABLE `rainlab_blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `metadata` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rainlab_blog_posts`
--

INSERT INTO `rainlab_blog_posts` (`id`, `user_id`, `title`, `slug`, `excerpt`, `content`, `content_html`, `published_at`, `published`, `created_at`, `updated_at`, `metadata`) VALUES
(1, 1, 'First blog post', 'first-blog-post', 'The first ever blog post is here. It might be a good idea to update this post with some more relevant content.', 'This is your first ever **blog post**! It might be a good idea to update this post with some more relevant content.\r\n\r\nYou can edit this content by selecting **Blog** from the administration back-end menu.\r\n\r\n*Enjoy the good times!*', '<p>This is your first ever <strong>blog post</strong>! It might be a good idea to update this post with some more relevant content.</p>\n<p>You can edit this content by selecting <strong>Blog</strong> from the administration back-end menu.</p>\n<p><em>Enjoy the good times!</em></p>', '2020-02-27 04:47:56', 1, '2020-02-27 04:47:56', '2020-02-27 06:09:10', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `rainlab_blog_posts_categories`
--

CREATE TABLE `rainlab_blog_posts_categories` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rainlab_blog_posts_categories`
--

INSERT INTO `rainlab_blog_posts_categories` (`post_id`, `category_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `rainlab_sitemap_definitions`
--

CREATE TABLE `rainlab_sitemap_definitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_activity` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `system_event_logs`
--

CREATE TABLE `system_event_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `system_event_logs`
--

INSERT INTO `system_event_logs` (`id`, `level`, `message`, `details`, `created_at`, `updated_at`) VALUES
(1, 'error', 'Cms\\Classes\\CmsException: The partial \'head-info\' is not found. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php:1027\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'head-info\', Array, true)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\39\\39fde547f812b6c300e61cc803ec9bec6612af5011b1e19be85f0a3f9e0d5430.php(42): Cms\\Twig\\Extension->partialFunction(\'head-info\', Array, true)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_59e1fc73e3b145a58a0fef820936bb42de0f6f25bdf61966b8357f1d0ed12651->doDisplay(Array, Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#11 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#14 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#48 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#49 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#50 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#51 {main}\n\nNext Twig\\Error\\RuntimeError: An exception has been thrown during the rendering of a template (\"The partial \'head-info\' is not found.\") in \"D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm\" at line 3. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php:421\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#11 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#14 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#48 {main}', NULL, '2020-02-27 05:10:40', '2020-02-27 05:10:40'),
(2, 'error', 'Cms\\Classes\\CmsException: The partial \'head-info\' is not found. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php:1027\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'head-info\', Array, true)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\39\\39fde547f812b6c300e61cc803ec9bec6612af5011b1e19be85f0a3f9e0d5430.php(42): Cms\\Twig\\Extension->partialFunction(\'head-info\', Array, true)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_59e1fc73e3b145a58a0fef820936bb42de0f6f25bdf61966b8357f1d0ed12651->doDisplay(Array, Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#11 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#14 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#48 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#49 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#50 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#51 {main}\n\nNext Twig\\Error\\RuntimeError: An exception has been thrown during the rendering of a template (\"The partial \'head-info\' is not found.\") in \"D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm\" at line 3. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php:421\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#11 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#14 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#48 {main}', NULL, '2020-02-27 05:14:29', '2020-02-27 05:14:29');
INSERT INTO `system_event_logs` (`id`, `level`, `message`, `details`, `created_at`, `updated_at`) VALUES
(3, 'error', 'Cms\\Classes\\CmsException: The partial \'head-info\' is not found. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php:1027\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'head-info\', Array, true)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\39\\39fde547f812b6c300e61cc803ec9bec6612af5011b1e19be85f0a3f9e0d5430.php(42): Cms\\Twig\\Extension->partialFunction(\'head-info\', Array, true)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_59e1fc73e3b145a58a0fef820936bb42de0f6f25bdf61966b8357f1d0ed12651->doDisplay(Array, Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#11 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#14 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#48 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#49 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#50 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#51 {main}\n\nNext Twig\\Error\\RuntimeError: An exception has been thrown during the rendering of a template (\"The partial \'head-info\' is not found.\") in \"D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm\" at line 3. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php:421\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#11 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#14 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#48 {main}', NULL, '2020-02-27 05:14:29', '2020-02-27 05:14:29'),
(4, 'error', 'Cms\\Classes\\CmsException: The partial \'head-info\' is not found. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php:1027\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'head-info\', Array, true)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\39\\39fde547f812b6c300e61cc803ec9bec6612af5011b1e19be85f0a3f9e0d5430.php(42): Cms\\Twig\\Extension->partialFunction(\'head-info\', Array, true)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_59e1fc73e3b145a58a0fef820936bb42de0f6f25bdf61966b8357f1d0ed12651->doDisplay(Array, Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#11 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#14 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#48 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#49 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#50 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#51 {main}\n\nNext Twig\\Error\\RuntimeError: An exception has been thrown during the rendering of a template (\"The partial \'head-info\' is not found.\") in \"D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm\" at line 3. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php:421\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#11 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#14 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#48 {main}', NULL, '2020-02-27 05:15:06', '2020-02-27 05:15:06');
INSERT INTO `system_event_logs` (`id`, `level`, `message`, `details`, `created_at`, `updated_at`) VALUES
(5, 'error', 'Cms\\Classes\\CmsException: The partial \'head-info\' is not found. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php:1027\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'head-info\', Array, true)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\39\\39fde547f812b6c300e61cc803ec9bec6612af5011b1e19be85f0a3f9e0d5430.php(42): Cms\\Twig\\Extension->partialFunction(\'head-info\', Array, true)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_59e1fc73e3b145a58a0fef820936bb42de0f6f25bdf61966b8357f1d0ed12651->doDisplay(Array, Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#11 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#14 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#48 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#49 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#50 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#51 {main}\n\nNext Twig\\Error\\RuntimeError: An exception has been thrown during the rendering of a template (\"The partial \'head-info\' is not found.\") in \"D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm\" at line 3. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php:421\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'header/header\', Array, true)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#11 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#14 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#48 {main}', NULL, '2020-02-27 05:15:07', '2020-02-27 05:15:07'),
(6, 'error', 'Cms\\Classes\\CmsException: The content file \'header\' is not found. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php:1151\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(113): Cms\\Classes\\Controller->renderContent(\'header\', Array)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\39\\39fde547f812b6c300e61cc803ec9bec6612af5011b1e19be85f0a3f9e0d5430.php(46): Cms\\Twig\\Extension->contentFunction(\'header\', Array)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_59e1fc73e3b145a58a0fef820936bb42de0f6f25bdf61966b8357f1d0ed12651->doDisplay(Array, Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'staticMenu\', Array, true)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#11 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#14 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#48 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#49 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#50 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#51 {main}\n\nNext Twig\\Error\\RuntimeError: An exception has been thrown during the rendering of a template (\"The content file \'header\' is not found.\") in \"D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm\" at line 7. in D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php:421\nStack trace:\n#0 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#1 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#2 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(1085): Twig\\Template->render(Array)\n#3 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\twig\\Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'staticMenu\', Array, true)\n#4 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\storage\\cms\\twig\\71\\711c55925f70829ea510878841b6379514edcf6d7e6dfd7a3905dcc9d7f1376a.php(88): Cms\\Twig\\Extension->partialFunction(\'header/header\', Array, true)\n#5 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(407): __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2->doDisplay(Array, Array)\n#6 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#7 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\twig\\twig\\src\\Template.php(392): Twig\\Template->display(Array)\n#8 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(433): Twig\\Template->render(Array)\n#9 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\Controller.php(223): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#10 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#11 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#12 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#13 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#14 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#15 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#16 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#17 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#18 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#35 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#36 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#37 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#38 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#39 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#40 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#43 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#44 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#46 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#47 D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#48 {main}', NULL, '2020-02-27 05:16:09', '2020-02-27 05:16:09');

-- --------------------------------------------------------

--
-- Структура таблицы `system_files`
--

CREATE TABLE `system_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `disk_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `system_files`
--

INSERT INTO `system_files` (`id`, `disk_name`, `file_name`, `file_size`, `content_type`, `title`, `description`, `field`, `attachment_id`, `attachment_type`, `is_public`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, '5e579993b3028416436833.jpg', 'bd.jpg', 32881, 'image/jpeg', NULL, NULL, 'preview_image', '1', 'Lovata\\Shopaholic\\Models\\Product', 1, 1, '2020-02-27 04:27:31', '2020-02-27 04:27:34'),
(2, '5e579b3395269146844461.jpg', 'bd.jpg', 32881, 'image/jpeg', NULL, NULL, 'preview_image', '2', 'Lovata\\Shopaholic\\Models\\Product', 1, 2, '2020-02-27 04:34:27', '2020-02-27 04:34:30'),
(3, '5e579b359baf5672683194.jpg', 'forHer.jpg', 31075, 'image/jpeg', NULL, NULL, 'images', '2', 'Lovata\\Shopaholic\\Models\\Product', 1, 3, '2020-02-27 04:34:29', '2020-02-27 04:34:30');

-- --------------------------------------------------------

--
-- Структура таблицы `system_mail_layouts`
--

CREATE TABLE `system_mail_layouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_css` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_locked` tinyint(1) NOT NULL DEFAULT 0,
  `options` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `system_mail_layouts`
--

INSERT INTO `system_mail_layouts` (`id`, `name`, `code`, `content_html`, `content_text`, `content_css`, `is_locked`, `options`, `created_at`, `updated_at`) VALUES
(1, 'Default layout', 'default', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n</head>\n<body>\n    <style type=\"text/css\" media=\"screen\">\n        {{ brandCss|raw }}\n        {{ css|raw }}\n    </style>\n\n    <table class=\"wrapper layout-default\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n\n        <!-- Header -->\n        {% partial \'header\' body %}\n            {{ subject|raw }}\n        {% endpartial %}\n\n        <tr>\n            <td align=\"center\">\n                <table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                    <!-- Email Body -->\n                    <tr>\n                        <td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                            <table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n                                <!-- Body content -->\n                                <tr>\n                                    <td class=\"content-cell\">\n                                        {{ content|raw }}\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                </table>\n            </td>\n        </tr>\n\n        <!-- Footer -->\n        {% partial \'footer\' body %}\n            &copy; {{ \"now\"|date(\"Y\") }} {{ appName }}. All rights reserved.\n        {% endpartial %}\n\n    </table>\n\n</body>\n</html>', '{{ content|raw }}', '@media only screen and (max-width: 600px) {\n    .inner-body {\n        width: 100% !important;\n    }\n\n    .footer {\n        width: 100% !important;\n    }\n}\n\n@media only screen and (max-width: 500px) {\n    .button {\n        width: 100% !important;\n    }\n}', 1, NULL, '2020-02-27 04:22:09', '2020-02-27 04:22:09'),
(2, 'System layout', 'system', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n</head>\n<body>\n    <style type=\"text/css\" media=\"screen\">\n        {{ brandCss|raw }}\n        {{ css|raw }}\n    </style>\n\n    <table class=\"wrapper layout-system\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n        <tr>\n            <td align=\"center\">\n                <table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                    <!-- Email Body -->\n                    <tr>\n                        <td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                            <table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n                                <!-- Body content -->\n                                <tr>\n                                    <td class=\"content-cell\">\n                                        {{ content|raw }}\n\n                                        <!-- Subcopy -->\n                                        {% partial \'subcopy\' body %}\n                                            **This is an automatic message. Please do not reply to it.**\n                                        {% endpartial %}\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                </table>\n            </td>\n        </tr>\n    </table>\n\n</body>\n</html>', '{{ content|raw }}\n\n\n---\nThis is an automatic message. Please do not reply to it.', '@media only screen and (max-width: 600px) {\n    .inner-body {\n        width: 100% !important;\n    }\n\n    .footer {\n        width: 100% !important;\n    }\n}\n\n@media only screen and (max-width: 500px) {\n    .button {\n        width: 100% !important;\n    }\n}', 1, NULL, '2020-02-27 04:22:09', '2020-02-27 04:22:09');

-- --------------------------------------------------------

--
-- Структура таблицы `system_mail_partials`
--

CREATE TABLE `system_mail_partials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `system_mail_templates`
--

CREATE TABLE `system_mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout_id` int(11) DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `system_parameters`
--

CREATE TABLE `system_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `system_parameters`
--

INSERT INTO `system_parameters` (`id`, `namespace`, `group`, `item`, `value`) VALUES
(1, 'system', 'update', 'count', '0'),
(2, 'system', 'core', 'hash', '\"cb72e3f2acd69eeabea8c44223ebb2b5\"'),
(3, 'system', 'core', 'build', '\"464\"'),
(4, 'system', 'update', 'retry', '1582885350'),
(5, 'system', 'theme', 'history', '{\"Lovata.bootstrap-shopaholic\":\"lovata-bootstrap-shopaholic\"}'),
(6, 'cms', 'theme', 'active', '\"lovata-bootstrap-shopaholic\"');

-- --------------------------------------------------------

--
-- Структура таблицы `system_plugin_history`
--

CREATE TABLE `system_plugin_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `system_plugin_history`
--

INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`) VALUES
(1, 'October.Demo', 'comment', '1.0.1', 'First version of Demo', '2020-02-27 04:22:09'),
(2, 'Lovata.Toolbox', 'comment', '1.0.0', 'Initialize plugin.', '2020-02-27 04:23:52'),
(3, 'Lovata.Toolbox', 'comment', '1.1.0', 'Add diff, unshift, push, getNearestNext, getNearestPrev methods to ElementCollection class, add ComponentSubmitForm class', '2020-02-27 04:23:52'),
(4, 'Lovata.Toolbox', 'comment', '1.2.0', 'Add integration with Translate plugin', '2020-02-27 04:23:52'),
(5, 'Lovata.Toolbox', 'comment', '1.3.0', 'Adding afterCreate model event handling for additional cache cleaning', '2020-02-27 04:23:52'),
(6, 'Lovata.Toolbox', 'comment', '1.3.1', 'Restore getOldFormData() method in ComponentSubmitForm class', '2020-02-27 04:23:52'),
(7, 'Lovata.Toolbox', 'comment', '1.3.2', 'Fix lang path for the default properties tab in CommonProperty class', '2020-02-27 04:23:52'),
(8, 'Lovata.Toolbox', 'comment', '1.3.3', 'Fix path to field name with error in getErrorMessage() method', '2020-02-27 04:23:52'),
(9, 'Lovata.Toolbox', 'comment', '1.4.0', 'Add PageHelper class', '2020-02-27 04:23:52'),
(10, 'Lovata.Toolbox', 'comment', '1.4.1', 'Fix processing of positive results in ComponentSubmitForm::getResponseModeAjax() method, if flash_on enabled', '2020-02-27 04:23:52'),
(11, 'Lovata.Toolbox', 'comment', '1.5.0', 'Add TraitInitActiveLang trait', '2020-02-27 04:23:52'),
(12, 'Lovata.Toolbox', 'comment', '1.6.0', 'Add SendMailHelper class, Add CommonSettings model', '2020-02-27 04:23:52'),
(13, 'Lovata.Toolbox', 'comment', '1.7.0', 'Add UserStorage classes. Add classes for integration with Lovata.Buddies and RainLab.User plugins', '2020-02-27 04:23:52'),
(14, 'Lovata.Toolbox', 'comment', '1.8.0', 'Added translation into French. Thanks for contribution philmarc.', '2020-02-27 04:23:52'),
(15, 'Lovata.Toolbox', 'comment', '1.9.0', 'Add TraitCached. Update vendor packages.', '2020-02-27 04:23:52'),
(16, 'Lovata.Toolbox', 'comment', '1.9.1', 'Remove force boot and register plugins in CommonTest class', '2020-02-27 04:23:52'),
(17, 'Lovata.Toolbox', 'comment', '1.10.0', 'Add PriceHelperTrait. Move PriceHelper class from Shopaholic plugin. Add set(), applySorting() methods to ElementCollection class. Add abstract store classes.', '2020-02-27 04:23:52'),
(18, 'Lovata.Toolbox', 'comment', '1.10.1', 'Fix ItemStorage class. Clone item objects form storage.', '2020-02-27 04:23:52'),
(19, 'Lovata.Toolbox', 'comment', '1.10.2', 'Fix ItemStorage class. Added cloning of *Item object before saving it to storage.', '2020-02-27 04:23:52'),
(20, 'Lovata.Toolbox', 'comment', '1.11.0', 'Added saving of arrays to class properties of *Store class objects after receiving array from cache.', '2020-02-27 04:23:52'),
(21, 'Lovata.Toolbox', 'comment', '1.12.0', 'Add PageHelper::getPageNameList() method.', '2020-02-27 04:23:52'),
(22, 'Lovata.Toolbox', 'comment', '1.12.1', 'Update of vendor packages', '2020-02-27 04:23:52'),
(23, 'Lovata.Toolbox', 'comment', '1.12.2', 'Update of php-pagination vendor packages', '2020-02-27 04:23:52'),
(24, 'Lovata.Toolbox', 'comment', '1.13.0', 'Added type returned by methods in AbstractStore * classes', '2020-02-27 04:23:52'),
(25, 'Lovata.Toolbox', 'comment', '1.14.0', 'Add Countable interface in ElementCollection class', '2020-02-27 04:23:52'),
(26, 'Lovata.Toolbox', 'comment', '1.14.1', 'Added natsort() for property value variants.', '2020-02-27 04:23:52'),
(27, 'Lovata.Toolbox', 'comment', '1.15.0', 'Added AbstractBackendColumnHandler, AbstractBackendFieldHandler, AbstractBackendMenuHandler, AbstractExtendRelationConfigHandler, AbstractModelRelationHandler classes.', '2020-02-27 04:23:52'),
(28, 'Lovata.Toolbox', 'comment', '1.16.0', 'Add package information to composer.json. Thanks for contribution pikanji.', '2020-02-27 04:23:52'),
(29, 'Lovata.Toolbox', 'comment', '1.17.0', 'Added processing of \"limit\" parameter for the pagination component.', '2020-02-27 04:23:52'),
(30, 'Lovata.Toolbox', 'comment', '1.18.0', 'Added AbstractImportModel class.', '2020-02-27 04:23:52'),
(31, 'Lovata.Toolbox', 'comment', '1.19.0', 'Added supported property types: number, rich editor, single checkbox, switch, balloon selector, tag list, radio.', '2020-02-27 04:23:52'),
(32, 'Lovata.Toolbox', 'comment', '1.20.0', 'Added Japanese language. Thanks for contribution pikanji.', '2020-02-27 04:23:52'),
(33, 'Lovata.Toolbox', 'comment', '1.20.1', 'Fixed deletion of old images for improt from CSV file.', '2020-02-27 04:23:52'),
(34, 'Lovata.Toolbox', 'comment', '1.21.0', 'Added support translatable slug in ElementPage class. Added German language. Thanks for contribution Gerald.', '2020-02-27 04:23:52'),
(35, 'Lovata.Toolbox', 'comment', '1.21.1', 'Removed Iterator interface from ElementCollection class. Added IteratorAggregate interface to ElementCollection class.', '2020-02-27 04:23:52'),
(36, 'Lovata.Toolbox', 'comment', '1.22.0', 'Replace array_intersect function with array_intersect_key in ElementCollection class.', '2020-02-27 04:23:52'),
(37, 'Lovata.Toolbox', 'comment', '1.23.0', 'Added copy() method to ElementCollection class. Added choice twig function.', '2020-02-27 04:23:52'),
(38, 'Lovata.Toolbox', 'comment', '1.24.0', 'Added caching of uploaded file objects as an array.', '2020-02-27 04:23:52'),
(39, 'Lovata.Toolbox', 'comment', '1.24.1', 'Fixed copy() method in ElementCollection class.', '2020-02-27 04:23:52'),
(40, 'Lovata.Toolbox', 'comment', '1.25.0', 'Added classes for import elements from xml file.', '2020-02-27 04:23:52'),
(41, 'Lovata.Toolbox', 'comment', '1.25.1', 'Fixed openMainFile method in AbstractImportModelFromXML class.', '2020-02-27 04:23:52'),
(42, 'Lovata.Toolbox', 'comment', '1.25.2', 'Added try->catch section for removing images in AbstractImportModel class.', '2020-02-27 04:23:52'),
(43, 'Lovata.Toolbox', 'comment', '1.25.3', 'Fixed bug with import through queues.', '2020-02-27 04:23:52'),
(44, 'Lovata.Toolbox', 'comment', '1.26.0', 'Added support of wildcard params to ElementPage class.', '2020-02-27 04:23:52'),
(45, 'Lovata.Toolbox', 'comment', '1.26.1', 'Fixed support of wildcard params in ElementPage class.', '2020-02-27 04:23:52'),
(46, 'Lovata.Toolbox', 'comment', '1.26.2', 'Added validation widget context field in AbstractBackendFieldHandler class.', '2020-02-27 04:23:52'),
(47, 'Lovata.Toolbox', 'comment', '1.27.0', 'Added redirect to error page, if result status is false and redirect URL is not empty.', '2020-02-27 04:23:52'),
(48, 'Lovata.Toolbox', 'comment', '1.28.0', 'Added dimension fields to lang files', '2020-02-27 04:23:52'),
(49, 'RainLab.Pages', 'comment', '1.0.1', 'Implemented the static pages management and the Static Page component.', '2020-02-27 04:23:52'),
(50, 'RainLab.Pages', 'comment', '1.0.2', 'Fixed the page preview URL.', '2020-02-27 04:23:52'),
(51, 'RainLab.Pages', 'comment', '1.0.3', 'Implemented menus.', '2020-02-27 04:23:52'),
(52, 'RainLab.Pages', 'comment', '1.0.4', 'Implemented the content block management and placeholder support.', '2020-02-27 04:23:52'),
(53, 'RainLab.Pages', 'comment', '1.0.5', 'Added support for the Sitemap plugin.', '2020-02-27 04:23:52'),
(54, 'RainLab.Pages', 'comment', '1.0.6', 'Minor updates to the internal API.', '2020-02-27 04:23:52'),
(55, 'RainLab.Pages', 'comment', '1.0.7', 'Added the Snippets feature.', '2020-02-27 04:23:52'),
(56, 'RainLab.Pages', 'comment', '1.0.8', 'Minor improvements to the code.', '2020-02-27 04:23:52'),
(57, 'RainLab.Pages', 'comment', '1.0.9', 'Fixes issue where Snippet tab is missing from the Partials form.', '2020-02-27 04:23:52'),
(58, 'RainLab.Pages', 'comment', '1.0.10', 'Add translations for various locales.', '2020-02-27 04:23:52'),
(59, 'RainLab.Pages', 'comment', '1.0.11', 'Fixes issue where placeholders tabs were missing from Page form.', '2020-02-27 04:23:52'),
(60, 'RainLab.Pages', 'comment', '1.0.12', 'Implement Media Manager support.', '2020-02-27 04:23:52'),
(61, 'RainLab.Pages', 'script', '1.1.0', 'snippets_rename_viewbag_properties.php', '2020-02-27 04:23:52'),
(62, 'RainLab.Pages', 'comment', '1.1.0', 'Adds meta title and description to pages. Adds |staticPage filter.', '2020-02-27 04:23:52'),
(63, 'RainLab.Pages', 'comment', '1.1.1', 'Add support for Syntax Fields.', '2020-02-27 04:23:52'),
(64, 'RainLab.Pages', 'comment', '1.1.2', 'Static Breadcrumbs component now respects the hide from navigation setting.', '2020-02-27 04:23:52'),
(65, 'RainLab.Pages', 'comment', '1.1.3', 'Minor back-end styling fix.', '2020-02-27 04:23:52'),
(66, 'RainLab.Pages', 'comment', '1.1.4', 'Minor fix to the StaticPage component API.', '2020-02-27 04:23:52'),
(67, 'RainLab.Pages', 'comment', '1.1.5', 'Fixes bug when using syntax fields.', '2020-02-27 04:23:52'),
(68, 'RainLab.Pages', 'comment', '1.1.6', 'Minor styling fix to the back-end UI.', '2020-02-27 04:23:52'),
(69, 'RainLab.Pages', 'comment', '1.1.7', 'Improved menu item form to include CSS class, open in a new window and hidden flag.', '2020-02-27 04:23:52'),
(70, 'RainLab.Pages', 'comment', '1.1.8', 'Improved the output of snippet partials when saved.', '2020-02-27 04:23:52'),
(71, 'RainLab.Pages', 'comment', '1.1.9', 'Minor update to snippet inspector internal API.', '2020-02-27 04:23:52'),
(72, 'RainLab.Pages', 'comment', '1.1.10', 'Fixes a bug where selecting a layout causes permanent unsaved changes.', '2020-02-27 04:23:52'),
(73, 'RainLab.Pages', 'comment', '1.1.11', 'Add support for repeater syntax field.', '2020-02-27 04:23:52'),
(74, 'RainLab.Pages', 'comment', '1.2.0', 'Added support for translations, UI updates.', '2020-02-27 04:23:52'),
(75, 'RainLab.Pages', 'comment', '1.2.1', 'Use nice titles when listing the content files.', '2020-02-27 04:23:52'),
(76, 'RainLab.Pages', 'comment', '1.2.2', 'Minor styling update.', '2020-02-27 04:23:52'),
(77, 'RainLab.Pages', 'comment', '1.2.3', 'Snippets can now be moved by dragging them.', '2020-02-27 04:23:52'),
(78, 'RainLab.Pages', 'comment', '1.2.4', 'Fixes a bug where the cursor is misplaced when editing text files.', '2020-02-27 04:23:52'),
(79, 'RainLab.Pages', 'comment', '1.2.5', 'Fixes a bug where the parent page is lost upon changing a page layout.', '2020-02-27 04:23:52'),
(80, 'RainLab.Pages', 'comment', '1.2.6', 'Shared view variables are now passed to static pages.', '2020-02-27 04:23:52'),
(81, 'RainLab.Pages', 'comment', '1.2.7', 'Fixes issue with duplicating properties when adding multiple snippets on the same page.', '2020-02-27 04:23:52'),
(82, 'RainLab.Pages', 'comment', '1.2.8', 'Fixes a bug where creating a content block without extension doesn\'t save the contents to file.', '2020-02-27 04:23:52'),
(83, 'RainLab.Pages', 'comment', '1.2.9', 'Add conditional support for translating page URLs.', '2020-02-27 04:23:52'),
(84, 'RainLab.Pages', 'comment', '1.2.10', 'Streamline generation of URLs to use the new Cms::url helper.', '2020-02-27 04:23:52'),
(85, 'RainLab.Pages', 'comment', '1.2.11', 'Implements repeater usage with translate plugin.', '2020-02-27 04:23:52'),
(86, 'RainLab.Pages', 'comment', '1.2.12', 'Fixes minor issue when using snippets and switching the application locale.', '2020-02-27 04:23:52'),
(87, 'RainLab.Pages', 'comment', '1.2.13', 'Fixes bug when AJAX is used on a page that does not yet exist.', '2020-02-27 04:23:52'),
(88, 'RainLab.Pages', 'comment', '1.2.14', 'Add theme logging support for changes made to menus.', '2020-02-27 04:23:52'),
(89, 'RainLab.Pages', 'comment', '1.2.15', 'Back-end navigation sort order updated.', '2020-02-27 04:23:52'),
(90, 'RainLab.Pages', 'comment', '1.2.16', 'Fixes a bug when saving a template that has been modified outside of the CMS (mtime mismatch).', '2020-02-27 04:23:52'),
(91, 'RainLab.Pages', 'comment', '1.2.17', 'Changes locations of custom fields to secondary tabs instead of the primary Settings area. New menu search ability on adding menu items', '2020-02-27 04:23:52'),
(92, 'RainLab.Pages', 'comment', '1.2.18', 'Fixes cache-invalidation issues when RainLab.Translate is not installed. Added Greek & Simplified Chinese translations. Removed deprecated calls. Allowed saving HTML in snippet properties. Added support for the MediaFinder in menu items.', '2020-02-27 04:23:52'),
(93, 'RainLab.Pages', 'comment', '1.2.19', 'Catch exception with corrupted menu file.', '2020-02-27 04:23:52'),
(94, 'RainLab.Pages', 'comment', '1.2.20', 'StaticMenu component now exposes menuName property; added pages.menu.referencesGenerated event.', '2020-02-27 04:23:52'),
(95, 'RainLab.Pages', 'comment', '1.2.21', 'Fixes a bug where last Static Menu item cannot be deleted. Improved Persian, Slovak and Turkish translations.', '2020-02-27 04:23:52'),
(96, 'RainLab.Pages', 'comment', '1.3.0', 'Added support for using Database-driven Themes when enabled in the CMS configuration.', '2020-02-27 04:23:52'),
(97, 'RainLab.Pages', 'comment', '1.3.1', 'Added ChildPages Component, prevent hidden pages from being returned via menu item resolver.', '2020-02-27 04:23:52'),
(98, 'RainLab.Pages', 'comment', '1.3.2', 'Fixes error when creating a subpage whose parent has no layout set.', '2020-02-27 04:23:52'),
(99, 'Lovata.Shopaholic', 'script', '1.0.0', 'create_table_categories.php', '2020-02-27 04:23:52'),
(100, 'Lovata.Shopaholic', 'script', '1.0.0', 'create_table_products.php', '2020-02-27 04:23:52'),
(101, 'Lovata.Shopaholic', 'script', '1.0.0', 'create_table_offers.php', '2020-02-27 04:23:52'),
(102, 'Lovata.Shopaholic', 'script', '1.0.0', 'create_table_brands.php', '2020-02-27 04:23:53'),
(103, 'Lovata.Shopaholic', 'comment', '1.0.0', 'Initialize plugin.', '2020-02-27 04:23:53'),
(104, 'Lovata.Shopaholic', 'comment', '1.1.0', 'Add integration with \"Popularity for Shopaholic\" and \"Tags for Shopaholic\" plugins', '2020-02-27 04:23:53'),
(105, 'Lovata.Shopaholic', 'comment', '1.2.0', 'preview_image, images fields in item classes returns \\System\\Models\\File class objects. Add integration with \"Reviews for Shopaholic\" plugin', '2020-02-27 04:23:53'),
(106, 'Lovata.Shopaholic', 'comment', '1.2.1', 'Remove php short tags from offers/update.htm', '2020-02-27 04:23:53'),
(107, 'Lovata.Shopaholic', 'comment', '1.2.2', 'Add additional cache cleaning after category reordering', '2020-02-27 04:23:53'),
(108, 'Lovata.Shopaholic', 'comment', '1.2.3', 'Adding additional cache cleaning for the sorted list of brands, after the creation of a new brand. Requires Toolbox plugin version 1.3.0 and later.', '2020-02-27 04:23:53'),
(109, 'Lovata.Shopaholic', 'comment', '1.3.0', 'Add menu types for integration with the StaticPage plugin. Add getPageUrl() method to the CategoryItem class. Requires Toolbox plugin version 1.4.0 and later. Thanks for contribution Alvaro Cánepa.', '2020-02-27 04:23:53'),
(110, 'Lovata.Shopaholic', 'comment', '1.3.1', 'Fix: processing of the \"nesting\" flag for the menu type \"catalog\"', '2020-02-27 04:23:53'),
(111, 'Lovata.Shopaholic', 'comment', '1.4.0', 'Replace code of product sorting by popularity and rating from Shopaholic to extension plugins. Add event \"shopaholic.sorting.get.list\" for custom sorting of products. Add integration with \"Related products for Shopaholic\" and \"Accessories for Shopaholic\" plugins', '2020-02-27 04:23:53'),
(112, 'Lovata.Shopaholic', 'comment', '1.4.1', 'Update annotations for \"Reviews for Shopaholic\" plugin. Fix $dates array in Product model. Thanks for contribution Alexander Shapoval.', '2020-02-27 04:23:53'),
(113, 'Lovata.Shopaholic', 'comment', '1.5.0', 'Add integration with \"Search for Shopaholic\",\"Sphinx for Shopaholic\" plugins', '2020-02-27 04:23:53'),
(114, 'Lovata.Shopaholic', 'comment', '1.6.0', 'Add integration with \"Compare for Shopaholic\"', '2020-02-27 04:23:53'),
(115, 'Lovata.Shopaholic', 'comment', '1.7.0', 'Added translation into French. Thanks for contribution philmarc.', '2020-02-27 04:23:53'),
(116, 'Lovata.Shopaholic', 'comment', '1.8.0', 'Add integration with \"Viewed products for Shopaholic\" plugin', '2020-02-27 04:23:53'),
(117, 'Lovata.Shopaholic', 'script', '1.9.0', 'seeder_price_format.php', '2020-02-27 04:23:53'),
(118, 'Lovata.Shopaholic', 'comment', '1.9.0', 'Add PriceHelperTrait, TraitCached in models. Add active() method to CategoryCollection class. Move PriceHelper class from Shopaholic plugin to Toolbox plugin. Add new store classes. Refactoring *Store, *Item, *Collection classes. Requires Toolbox plugin version 1.10.0 and later.', '2020-02-27 04:23:53'),
(119, 'Lovata.Shopaholic', 'script', '1.10.0', 'create_table_additional_categories.php', '2020-02-27 04:23:53'),
(120, 'Lovata.Shopaholic', 'comment', '1.10.0', 'Adding relation between Product model and additional categories. Adding ability to get list of products by category ID list, by the parent category ID.', '2020-02-27 04:23:53'),
(121, 'Lovata.Shopaholic', 'comment', '1.11.0', 'Adding getPageUrl() method to ProductItem, BrandItem classes.', '2020-02-27 04:23:53'),
(122, 'Lovata.Shopaholic', 'comment', '1.11.1', 'Adding \"field.additional_category\" value to lang files. Fixed displaying \"additional categories\" field only for update/preview forms.', '2020-02-27 04:23:53'),
(123, 'Lovata.Shopaholic', 'comment', '1.11.2', 'Fix work with *Store classes in *Handler classes.', '2020-02-27 04:23:53'),
(124, 'Lovata.Shopaholic', 'comment', '1.11.3', 'Fix error in ProductCollection class, if product list by category is empty.', '2020-02-27 04:23:53'),
(125, 'Lovata.Shopaholic', 'comment', '1.12.0', 'Added type returned by methods in AbstractStore * classes', '2020-02-27 04:23:53'),
(126, 'Lovata.Shopaholic', 'script', '1.13.0', 'create_table_promo_block.php', '2020-02-27 04:23:53'),
(127, 'Lovata.Shopaholic', 'script', '1.13.0', 'create_table_promo_block_relation.php', '2020-02-27 04:23:53'),
(128, 'Lovata.Shopaholic', 'comment', '1.13.0', 'Added PromoBlock model. Promo blocks are sections of content that you can place throughout your eCommerce website and advertise products, offers, discounts, campaigns, and other activity. Added PromoBlockData, PromoBlockPage, PromoBlockList components. Added PromoBlockItem, PromoBlockCollection classes.', '2020-02-27 04:23:53'),
(129, 'Lovata.Shopaholic', 'comment', '1.13.1', 'Added annotations for integration with Coupons for Shopaholic, Discounts for Shopaholic, Campaigns for Shopaholic plugins.', '2020-02-27 04:23:53'),
(130, 'Lovata.Shopaholic', 'comment', '1.14.0', 'Added \"additional_category\" field to ProductItem class.', '2020-02-27 04:23:53'),
(131, 'Lovata.Shopaholic', 'comment', '1.14.1', 'Remove vendor folder from plugin.', '2020-02-27 04:23:53'),
(132, 'Lovata.Shopaholic', 'comment', '1.15.0', 'Added import product, offers, categories, brands from CSV file in backend. Requires Toolbox plugin version 1.18.0 and later', '2020-02-27 04:23:53'),
(133, 'Lovata.Shopaholic', 'comment', '1.16.0', 'Added block with description about import of product/offer properties from CSV file.', '2020-02-27 04:23:53'),
(134, 'Lovata.Shopaholic', 'comment', '1.16.1', 'Added annotations of filterByDiscount(), filterByQuantity() methods to OfferCollection class.', '2020-02-27 04:23:53'),
(135, 'Lovata.Shopaholic', 'comment', '1.17.0', 'Added Japanese language. Thanks for contribution pikanji.', '2020-02-27 04:23:53'),
(136, 'Lovata.Shopaholic', 'comment', '1.18.0', 'Added German language. Thanks for contribution Gerald.', '2020-02-27 04:23:53'),
(137, 'Lovata.Shopaholic', 'comment', '1.19.0', 'Added translatable slug in Product, Brand, Category, PromoBlock models.', '2020-02-27 04:23:53'),
(138, 'Lovata.Shopaholic', 'comment', '1.19.1', 'Fixed permissions for promo block menu item. Thanks for contribution Andreas Kosmowicz.', '2020-02-27 04:23:53'),
(139, 'Lovata.Shopaholic', 'comment', '1.20.0', 'Added Slovak language. Thanks for contribution vosco88.', '2020-02-27 04:23:53'),
(140, 'Lovata.Shopaholic', 'script', '1.21.0', 'create_table_taxes.php', '2020-02-27 04:23:53'),
(141, 'Lovata.Shopaholic', 'script', '1.21.0', 'create_table_tax_category_relation.php', '2020-02-27 04:23:53'),
(142, 'Lovata.Shopaholic', 'script', '1.21.0', 'create_table_tax_product_relation.php', '2020-02-27 04:23:53'),
(143, 'Lovata.Shopaholic', 'script', '1.21.0', 'create_table_tax_country_relation.php', '2020-02-27 04:23:53'),
(144, 'Lovata.Shopaholic', 'script', '1.21.0', 'create_table_tax_state_relation.php', '2020-02-27 04:23:53'),
(145, 'Lovata.Shopaholic', 'script', '1.21.0', 'create_table_currency.php', '2020-02-27 04:23:53'),
(146, 'Lovata.Shopaholic', 'script', '1.21.0', 'seeder_create_default_currency.php', '2020-02-27 04:23:53'),
(147, 'Lovata.Shopaholic', 'script', '1.21.0', 'create_table_price_types.php', '2020-02-27 04:23:53'),
(148, 'Lovata.Shopaholic', 'script', '1.21.0', 'create_table_prices.php', '2020-02-27 04:23:53'),
(149, 'Lovata.Shopaholic', 'script', '1.21.0', 'update_table_users_add_currency_field.php', '2020-02-27 04:23:53'),
(150, 'Lovata.Shopaholic', 'script', '1.21.0', 'seeder_transfer_offer_prices.php', '2020-02-27 04:23:53'),
(151, 'Lovata.Shopaholic', 'script', '1.21.0', 'update_table_offers_remove_price_field.php', '2020-02-27 04:23:53'),
(152, 'Lovata.Shopaholic', 'comment', '1.21.0', 'Added multicurrency. Added taxes. Added price types. Added shopaholic:check.table.integrity artisan command.', '2020-02-27 04:23:53'),
(153, 'Lovata.Shopaholic', 'comment', '1.21.1', 'Fixed labels for tax settings.', '2020-02-27 04:23:53'),
(154, 'Lovata.Shopaholic', 'comment', '1.21.2', 'Fix error with saving offer without prices.', '2020-02-27 04:23:53'),
(155, 'Lovata.Shopaholic', 'comment', '1.22.0', 'Added customizable import from xml file. Thanks to Rolands Zeltins. His donation made this feature available for everyone.', '2020-02-27 04:23:53'),
(156, 'Lovata.Shopaholic', 'comment', '1.22.1', 'Fixed command shopaholic:import_from_xml.', '2020-02-27 04:23:53'),
(157, 'Lovata.Shopaholic', 'comment', '1.22.2', 'Added \"deactivate\" fields to config of XmlImportSettings model.', '2020-02-27 04:23:53'),
(158, 'Lovata.Shopaholic', 'comment', '1.22.3', 'Fixed attaching of children categories to parent category in script of import from XML.', '2020-02-27 04:23:53'),
(159, 'Lovata.Shopaholic', 'comment', '1.22.4', 'Removed deleted offers from sorting by price.', '2020-02-27 04:23:53'),
(160, 'Lovata.Shopaholic', 'comment', '1.22.5', 'Fixed bug with deactivating items in import from XML files.', '2020-02-27 04:23:53'),
(161, 'Lovata.Shopaholic', 'comment', '1.23.0', 'Added ability to show catalog with active price type. Added annotations for integration with Subscriptions for Shopaholic plugin.', '2020-02-27 04:23:53'),
(162, 'Lovata.Shopaholic', 'comment', '1.23.1', 'Added step attribute to offer price field in backend view', '2020-02-27 04:23:53'),
(163, 'Lovata.Shopaholic', 'comment', '1.24.0', 'Added support of wildcard params to CategoryPage component. Requires Toolbox plugin version 1.26.0 and later', '2020-02-27 04:23:53'),
(164, 'Lovata.Shopaholic', 'comment', '1.24.1', 'Fixed support of wildcard params in CategoryPage component. Requires Toolbox plugin version 1.26.1 and later', '2020-02-27 04:23:53'),
(165, 'Lovata.Shopaholic', 'comment', '1.24.2', 'Added annotations for Subscriptions for Shopaholic plugin.', '2020-02-27 04:23:53'),
(166, 'Lovata.Shopaholic', 'comment', '1.24.3', 'Added validation of import fields that contains relation IDs.', '2020-02-27 04:23:53'),
(167, 'Lovata.Shopaholic', 'script', '1.25.0', 'create_table_measure.php', '2020-02-27 04:23:54'),
(168, 'Lovata.Shopaholic', 'script', '1.25.0', 'update_table_offers_add_dimensions_field.php', '2020-02-27 04:23:54'),
(169, 'Lovata.Shopaholic', 'comment', '1.25.0', 'Moved \"Measure\" model from \"Properties for Shopaholic\" plugin. Added weight, height, length, width, measure_of_unit, quantity_in_unit fields to Offer model. Added new global settings: size unit measure, weight unit measure, piece unit measure.', '2020-02-27 04:23:54'),
(170, 'Lovata.OrdersShopaholic', 'script', '1.0.0', 'table_create_cart.php', '2020-02-27 04:26:12'),
(171, 'Lovata.OrdersShopaholic', 'script', '1.0.0', 'table_create_cart_element.php', '2020-02-27 04:26:12'),
(172, 'Lovata.OrdersShopaholic', 'script', '1.0.0', 'table_create_offer_order.php', '2020-02-27 04:26:12'),
(173, 'Lovata.OrdersShopaholic', 'script', '1.0.0', 'table_create_order.php', '2020-02-27 04:26:12'),
(174, 'Lovata.OrdersShopaholic', 'script', '1.0.0', 'table_create_payment_method.php', '2020-02-27 04:26:12'),
(175, 'Lovata.OrdersShopaholic', 'script', '1.0.0', 'table_create_shipping_type.php', '2020-02-27 04:26:12'),
(176, 'Lovata.OrdersShopaholic', 'script', '1.0.0', 'table_create_status.php', '2020-02-27 04:26:12'),
(177, 'Lovata.OrdersShopaholic', 'script', '1.0.0', 'seeder_default_status.php', '2020-02-27 04:26:12'),
(178, 'Lovata.OrdersShopaholic', 'comment', '1.0.0', 'Initialize plugin.', '2020-02-27 04:26:12'),
(179, 'Lovata.OrdersShopaholic', 'comment', '1.0.1', 'Fix permission tab label in config', '2020-02-27 04:26:12'),
(180, 'Lovata.OrdersShopaholic', 'comment', '1.0.2', 'Remove php short tags from orders/_price_block.htm', '2020-02-27 04:26:12'),
(181, 'Lovata.OrdersShopaholic', 'script', '1.0.3', 'seeder_update_order_secret_key.php', '2020-02-27 04:26:12'),
(182, 'Lovata.OrdersShopaholic', 'comment', '1.0.3', 'Change method for generation secret_key field in Order model', '2020-02-27 04:26:12'),
(183, 'Lovata.OrdersShopaholic', 'comment', '1.0.4', 'Adding additional cache cleaning for the sorted list of payment methods and shipping types, after the creation of a new element. Requires Toolbox plugin version 1.3.0 and later.', '2020-02-27 04:26:12'),
(184, 'Lovata.OrdersShopaholic', 'comment', '1.0.5', '$casts property is replaced with $jsonable property in the Order model', '2020-02-27 04:26:12'),
(185, 'Lovata.OrdersShopaholic', 'comment', '1.1.0', 'The \"rewrite\" and \"increase\" flags are removed from the method of updating the quantity of items in the cart', '2020-02-27 04:26:12'),
(186, 'Lovata.OrdersShopaholic', 'script', '1.2.0', 'table_create_addition_properties.php', '2020-02-27 04:26:12'),
(187, 'Lovata.OrdersShopaholic', 'script', '1.2.0', 'seeder_default_order_properties.php', '2020-02-27 04:26:12'),
(188, 'Lovata.OrdersShopaholic', 'comment', '1.2.0', 'Add additional properties for Order model. Add settings for validation the email field as required.', '2020-02-27 04:26:12'),
(189, 'Lovata.OrdersShopaholic', 'comment', '1.2.1', 'Remove php short tags from orders/_price_block.htm', '2020-02-27 04:26:12'),
(190, 'Lovata.OrdersShopaholic', 'script', '1.3.0', 'table_update_shipping_type_add_price_field.php', '2020-02-27 04:26:12'),
(191, 'Lovata.OrdersShopaholic', 'comment', '1.3.0', 'Add \"price\" field in ShippingType model', '2020-02-27 04:26:12'),
(192, 'Lovata.OrdersShopaholic', 'comment', '1.3.1', 'Added check for isNested flag when expanding forms', '2020-02-27 04:26:12'),
(193, 'Lovata.OrdersShopaholic', 'comment', '1.4.0', 'Add integration with RainLab.User plugin. Added sending emails to the user and managers after the order was created. Add events \"shopaholic.order.created\", \"shopaholic.order.created.user.template.data\", \"shopaholic.order.created.manager.template.data\". Requires Toolbox plugin version 1.7.0 and later.', '2020-02-27 04:26:12'),
(194, 'Lovata.OrdersShopaholic', 'comment', '1.5.0', 'Update logic for new version of CResult class. Requires Toolbox plugin version 1.9.1 and later.', '2020-02-27 04:26:12'),
(195, 'Lovata.OrdersShopaholic', 'script', '1.6.0', 'table_update_status_add_is_user_show_field.php', '2020-02-27 04:26:12'),
(196, 'Lovata.OrdersShopaholic', 'script', '1.6.0', 'table_create_order_positions.php', '2020-02-27 04:26:12'),
(197, 'Lovata.OrdersShopaholic', 'script', '1.6.0', 'table_create_cart_positions.php', '2020-02-27 04:26:12'),
(198, 'Lovata.OrdersShopaholic', 'script', '1.6.0', 'table_create_order_position_addition_properties.php', '2020-02-27 04:26:12'),
(199, 'Lovata.OrdersShopaholic', 'script', '1.6.0', 'table_update_orders_remove_total_price_field.php', '2020-02-27 04:26:12'),
(200, 'Lovata.OrdersShopaholic', 'comment', '1.6.0', 'Add classes: OrderCollection, OrderPositionCollection, StatusCollection,  OrderItem, OrderPositionItem, StatusItem. Add StatusList component. Adding the ability to create custom properties for order positions. Adding the ability to attach users with orders. Adding the ability to create/update order positions in backend. Add filter order list (backend) by payment method, shipping type, created_at/update_at fields. Add \"hasMany\" relation in User model with Order model. Add \"user_list\" property in User model. Add \"order\" in UserItem class. Refactoring CartProcessor, OrderProcessor classes. Rename classes: CartElementCollection => CartPositionCollection, CartElementItem => CartPositionItem. Requires Toolbox plugin version 1.10.0 and later.', '2020-02-27 04:26:12'),
(201, 'Lovata.OrdersShopaholic', 'comment', '1.6.1', 'Fix error in OrderPage::get() method.', '2020-02-27 04:26:12'),
(202, 'Lovata.OrdersShopaholic', 'comment', '1.6.2', 'Fix error in OfferOrderPositionProcessor class.', '2020-02-27 04:26:12'),
(203, 'Lovata.OrdersShopaholic', 'comment', '1.6.3', 'Fix work with *Store classes in *Handler classes', '2020-02-27 04:26:12'),
(204, 'Lovata.OrdersShopaholic', 'script', '1.6.4', 'seeder_fix_position_type_value.php', '2020-02-27 04:26:12'),
(205, 'Lovata.OrdersShopaholic', 'comment', '1.6.4', 'Fix position type default value', '2020-02-27 04:26:12'),
(206, 'Lovata.OrdersShopaholic', 'script', '1.7.0', 'table_update_payment_method_add_gateway_field.php', '2020-02-27 04:26:12'),
(207, 'Lovata.OrdersShopaholic', 'script', '1.7.0', 'table_update_orders_add_payment_data_fields.php', '2020-02-27 04:26:13'),
(208, 'Lovata.OrdersShopaholic', 'comment', '1.7.0', 'Improved integration with payment systems. Adds of shipping price filling from shipping type object, if shipping_price field value from request is empty.', '2020-02-27 04:26:13'),
(209, 'Lovata.OrdersShopaholic', 'script', '1.8.0', 'table_update_orders_add_payment_token_field.php', '2020-02-27 04:26:13'),
(210, 'Lovata.OrdersShopaholic', 'comment', '1.8.0', 'Add payment_token field to Order model', '2020-02-27 04:26:13'),
(211, 'Lovata.OrdersShopaholic', 'comment', '1.9.0', 'Added type returned by methods in AbstractStore * classes.', '2020-02-27 04:26:13'),
(212, 'Lovata.OrdersShopaholic', 'comment', '1.9.1', 'Adds secret_key field to OrderItem object.', '2020-02-27 04:26:13'),
(213, 'Lovata.OrdersShopaholic', 'comment', '1.10.0', 'Add Validation trait to Order model.', '2020-02-27 04:26:13'),
(214, 'Lovata.OrdersShopaholic', 'comment', '1.10.1', 'Remove links on lang file of Buddies plugin.', '2020-02-27 04:26:13'),
(215, 'Lovata.OrdersShopaholic', 'comment', '1.10.2', 'Fixed labels in ShippingType controller breadcrumbs.', '2020-02-27 04:26:13'),
(216, 'Lovata.OrdersShopaholic', 'script', '1.11.0', 'table_create_promo_mechanism.php', '2020-02-27 04:26:13'),
(217, 'Lovata.OrdersShopaholic', 'script', '1.11.0', 'table_create_order_promo_mechanism.php', '2020-02-27 04:26:13'),
(218, 'Lovata.OrdersShopaholic', 'script', '1.11.0', 'table_create_user_addresses.php', '2020-02-27 04:26:13'),
(219, 'Lovata.OrdersShopaholic', 'script', '1.11.0', 'seeder_address_order_properties.php', '2020-02-27 04:26:13'),
(220, 'Lovata.OrdersShopaholic', 'script', '1.11.0', 'table_update_orders_add_currency_field.php', '2020-02-27 04:26:13'),
(221, 'Lovata.OrdersShopaholic', 'script', '1.11.0', 'table_update_orders_add_manager_id_field.php', '2020-02-27 04:26:13'),
(222, 'Lovata.OrdersShopaholic', 'script', '1.11.0', 'table_create_tasks.php', '2020-02-27 04:26:13'),
(223, 'Lovata.OrdersShopaholic', 'comment', '1.11.0', 'Added PromoMechanism model. Added of opportunity to change price of order positions, shipping price, order total price, using promo mechanisms. Added user addresses. Added tasks with relation with orders, users.', '2020-02-27 04:26:13'),
(224, 'Lovata.OrdersShopaholic', 'comment', '1.11.1', 'Added annotations for integration with Coupons for Shopaholic, Discounts for Shopaholic, Campaigns for Shopaholic plugins.', '2020-02-27 04:26:13'),
(225, 'Lovata.OrdersShopaholic', 'comment', '1.11.2', 'Fixed the logic of getting custom field values of the saved user address when creating an order.', '2020-02-27 04:26:13'),
(226, 'Lovata.OrdersShopaholic', 'comment', '1.11.3', 'Fixed update of price data before sending an order to the payment gateway', '2020-02-27 04:26:13'),
(227, 'Lovata.OrdersShopaholic', 'comment', '1.11.4', 'Fixed creation of an order position via add() method.', '2020-02-27 04:26:13'),
(228, 'Lovata.OrdersShopaholic', 'comment', '1.12.0', 'Added supported types of order properties: number, rich editor, single checkbox, switch, balloon selector, tag list, radio.', '2020-02-27 04:26:13'),
(229, 'Lovata.OrdersShopaholic', 'comment', '1.12.1', 'Fixed logic for calculating old total price of order position without discounts.', '2020-02-27 04:26:13'),
(230, 'Lovata.OrdersShopaholic', 'comment', '1.13.0', 'Added Japanese language. Thanks for contribution pikanji.', '2020-02-27 04:26:13'),
(231, 'Lovata.OrdersShopaholic', 'comment', '1.14.0', 'Added getCurrency() method in Cart component. Improved parameter generation for redirecting to order page in MakeOrder component. Added shipping_type_id parameter processing in onAdd, onUpdate, onRemove methods (Cart component)', '2020-02-27 04:26:13'),
(232, 'Lovata.OrdersShopaholic', 'script', '1.14.1', 'table_update_tasks_change_description_type.php', '2020-02-27 04:26:13'),
(233, 'Lovata.OrdersShopaholic', 'comment', '1.14.1', 'Changed type of \"description\" field in task table.', '2020-02-27 04:26:13'),
(234, 'Lovata.OrdersShopaholic', 'comment', '1.14.2', 'Fixed link to cancel button in backend (OrderPosition controller)', '2020-02-27 04:26:13'),
(235, 'Lovata.OrdersShopaholic', 'comment', '1.14.3', 'Fixed OrderProcessor::EVENT_GET_SHIPPING_PRICE event. Thanks for contribution GitLog.', '2020-02-27 04:26:13'),
(236, 'Lovata.OrdersShopaholic', 'comment', '1.15.0', 'Added German language. Thanks for contribution Gerald.', '2020-02-27 04:26:13'),
(237, 'Lovata.OrdersShopaholic', 'comment', '1.16.0', 'Added checking addresses for uniqueness before creating a new user address or order.', '2020-02-27 04:26:13'),
(238, 'Lovata.OrdersShopaholic', 'comment', '1.17.0', 'Added shopaholic.shipping_type.get_price event. The event allows you to dynamically change the shipping price.', '2020-02-27 04:26:13'),
(239, 'Lovata.OrdersShopaholic', 'comment', '1.18.0', 'Added calculate_per_unit setting parameter in PromoMechanism model.', '2020-02-27 04:26:13'),
(240, 'Lovata.OrdersShopaholic', 'script', '1.19.0', 'table_update_taxes_add_applied_to_shipping_price.php', '2020-02-27 04:26:13'),
(241, 'Lovata.OrdersShopaholic', 'script', '1.19.0', 'table_update_order_positions_add_tax_percent_field.php', '2020-02-27 04:26:13'),
(242, 'Lovata.OrdersShopaholic', 'script', '1.19.0', 'table_update_orders_add_currency_id_field.php', '2020-02-27 04:26:13'),
(243, 'Lovata.OrdersShopaholic', 'script', '1.19.0', 'table_update_orders_add_shipping_tax_percent_field.php', '2020-02-27 04:26:13'),
(244, 'Lovata.OrdersShopaholic', 'comment', '1.19.0', '!!! Added Taxes. Added multicyrrency. Requires Shopaholic plugin version 1.21.0 and later.', '2020-02-27 04:26:13'),
(245, 'Lovata.OrdersShopaholic', 'script', '1.20.0', 'table_update_shipping_types_add_method_and_property_fields.php', '2020-02-27 04:26:13'),
(246, 'Lovata.OrdersShopaholic', 'script', '1.20.0', 'table_update_carts_add_fields.php', '2020-02-27 04:26:13'),
(247, 'Lovata.OrdersShopaholic', 'script', '1.20.0', 'table_create_shipping_restrictions_table.php', '2020-02-27 04:26:13'),
(248, 'Lovata.OrdersShopaholic', 'script', '1.20.0', 'table_create_shipping_restrictions_link_table.php', '2020-02-27 04:26:13'),
(249, 'Lovata.OrdersShopaholic', 'comment', '1.20.0', 'Added ability to add multiple identical offers, but with different set of properties. Added ability to delete cart positions by ID. Added ability to create integration with API of delivery services. Added property fields in ShippingType model. Added ability to create restrictions for shipping types.  Added restrictions of shipping types by position total price. Added email, user_data, shipping_address, billing_address, shipping_type_id, payment_method_id, property fields in Cart model. Thanks for contribution Tsagan Noniev and Rubium Web.', '2020-02-27 04:26:13'),
(250, 'Lovata.OrdersShopaholic', 'script', '1.21.0', 'table_update_cart_positions_add_deleted_field.php', '2020-02-27 04:26:13'),
(251, 'Lovata.OrdersShopaholic', 'comment', '1.21.0', 'Added onRestore method to Cart component.', '2020-02-27 04:26:13'),
(252, 'Lovata.OrdersShopaholic', 'script', '1.22.0', 'table_create_payment_restrictions_table.php', '2020-02-27 04:26:13'),
(253, 'Lovata.OrdersShopaholic', 'script', '1.22.0', 'table_create_payment_restrictions_link_table.php', '2020-02-27 04:26:13'),
(254, 'Lovata.OrdersShopaholic', 'comment', '1.22.0', 'Added ability to create restrictions for payment methods. Added restrictions of payment methods by shipping type. Thanks for contribution Tsagan Noniev and Rubium Web.', '2020-02-27 04:26:13'),
(255, 'Lovata.OrdersShopaholic', 'script', '1.22.1', 'table_update_user_addresses_change_postcode.php', '2020-02-27 04:26:13'),
(256, 'Lovata.OrdersShopaholic', 'comment', '1.22.1', 'Changed type of postcode field from int to string.', '2020-02-27 04:26:13'),
(257, 'Lovata.OrdersShopaholic', 'script', '1.23.0', 'table_update_status_add_color_field.php', '2020-02-27 04:26:13'),
(258, 'Lovata.OrdersShopaholic', 'script', '1.23.0', 'seeder_default_status_colors.php', '2020-02-27 04:26:13'),
(259, 'Lovata.OrdersShopaholic', 'comment', '1.23.0', 'Added color to status. Added onSync(), onGetCartData() methods to Cart component. Added ability to create an order with an active price type. Thanks for contribution definer and pikanji.', '2020-02-27 04:26:13'),
(260, 'Lovata.OrdersShopaholic', 'comment', '1.23.1', 'Added annotations for Subscriptions for Shopaholic plugin.', '2020-02-27 04:26:13'),
(261, 'Lovata.OrdersShopaholic', 'script', '1.24.0', 'table_update_payment_method_add_restore_cart_field.php', '2020-02-27 04:26:13'),
(262, 'Lovata.OrdersShopaholic', 'script', '1.24.0', 'table_update_order_positions_add_dimensions_field.php', '2020-02-27 04:26:13'),
(263, 'Lovata.OrdersShopaholic', 'comment', '1.24.0', 'Added \"restore cart\" field to PaymentMethod model. Added restoreFromOrder() method to CartProcessor class. Added dimensions and weight fields to OrderPosition model.', '2020-02-27 04:26:13'),
(264, 'RainLab.Builder', 'comment', '1.0.1', 'Initialize plugin.', '2020-02-27 04:47:15'),
(265, 'RainLab.Builder', 'comment', '1.0.2', 'Fixes the problem with selecting a plugin. Minor localization corrections. Configuration files in the list and form behaviors are now autocomplete.', '2020-02-27 04:47:15'),
(266, 'RainLab.Builder', 'comment', '1.0.3', 'Improved handling of the enum data type.', '2020-02-27 04:47:15'),
(267, 'RainLab.Builder', 'comment', '1.0.4', 'Added user permissions to work with the Builder.', '2020-02-27 04:47:15'),
(268, 'RainLab.Builder', 'comment', '1.0.5', 'Fixed permissions registration.', '2020-02-27 04:47:15'),
(269, 'RainLab.Builder', 'comment', '1.0.6', 'Fixed front-end record ordering in the Record List component.', '2020-02-27 04:47:15'),
(270, 'RainLab.Builder', 'comment', '1.0.7', 'Builder settings are now protected with user permissions. The database table column list is scrollable now. Minor code cleanup.', '2020-02-27 04:47:15'),
(271, 'RainLab.Builder', 'comment', '1.0.8', 'Added the Reorder Controller behavior.', '2020-02-27 04:47:15'),
(272, 'RainLab.Builder', 'comment', '1.0.9', 'Minor API and UI updates.', '2020-02-27 04:47:15'),
(273, 'RainLab.Builder', 'comment', '1.0.10', 'Minor styling update.', '2020-02-27 04:47:15'),
(274, 'RainLab.Builder', 'comment', '1.0.11', 'Fixed a bug where clicking placeholder in a repeater would open Inspector. Fixed a problem with saving forms with repeaters in tabs. Minor style fix.', '2020-02-27 04:47:15'),
(275, 'RainLab.Builder', 'comment', '1.0.12', 'Added support for the Trigger property to the Media Finder widget configuration. Names of form fields and list columns definition files can now contain underscores.', '2020-02-27 04:47:15'),
(276, 'RainLab.Builder', 'comment', '1.0.13', 'Minor styling fix on the database editor.', '2020-02-27 04:47:15'),
(277, 'RainLab.Builder', 'comment', '1.0.14', 'Added support for published_at timestamp field', '2020-02-27 04:47:15'),
(278, 'RainLab.Builder', 'comment', '1.0.15', 'Fixed a bug where saving a localization string in Inspector could cause a JavaScript error. Added support for Timestamps and Soft Deleting for new models.', '2020-02-27 04:47:15'),
(279, 'RainLab.Builder', 'comment', '1.0.16', 'Fixed a bug when saving a form with the Repeater widget in a tab could create invalid fields in the form\'s outside area. Added a check that prevents creating localization strings inside other existing strings.', '2020-02-27 04:47:15'),
(280, 'RainLab.Builder', 'comment', '1.0.17', 'Added support Trigger attribute support for RecordFinder and Repeater form widgets.', '2020-02-27 04:47:15'),
(281, 'RainLab.Builder', 'comment', '1.0.18', 'Fixes a bug where \'::class\' notations in a model class definition could prevent the model from appearing in the Builder model list. Added emptyOption property support to the dropdown form control.', '2020-02-27 04:47:15'),
(282, 'RainLab.Builder', 'comment', '1.0.19', 'Added a feature allowing to add all database columns to a list definition. Added max length validation for database table and column names.', '2020-02-27 04:47:15'),
(283, 'RainLab.Builder', 'comment', '1.0.20', 'Fixes a bug where form the builder could trigger the \"current.hasAttribute is not a function\" error.', '2020-02-27 04:47:15'),
(284, 'RainLab.Builder', 'comment', '1.0.21', 'Back-end navigation sort order updated.', '2020-02-27 04:47:15'),
(285, 'RainLab.Builder', 'comment', '1.0.22', 'Added scopeValue property to the RecordList component.', '2020-02-27 04:47:15'),
(286, 'RainLab.Builder', 'comment', '1.0.23', 'Added support for balloon-selector field type, added Brazilian Portuguese translation, fixed some bugs', '2020-02-27 04:47:15'),
(287, 'RainLab.Builder', 'comment', '1.0.24', 'Added support for tag list field type, added read only toggle for fields. Prevent plugins from using reserved PHP keywords for class names and namespaces', '2020-02-27 04:47:15'),
(288, 'RainLab.Builder', 'comment', '1.0.25', 'Allow editing of migration code in the \"Migration\" popup when saving changes in the database editor.', '2020-02-27 04:47:15'),
(289, 'RainLab.Builder', 'comment', '1.0.26', 'Allow special default values for columns and added new \"Add ID column\" button to database editor.', '2020-02-27 04:47:15'),
(290, 'RainLab.Sitemap', 'comment', '1.0.1', 'First version of Sitemap', '2020-02-27 04:47:37'),
(291, 'RainLab.Sitemap', 'script', '1.0.2', 'create_definitions_table.php', '2020-02-27 04:47:37'),
(292, 'RainLab.Sitemap', 'comment', '1.0.2', 'Create definitions table', '2020-02-27 04:47:37'),
(293, 'RainLab.Sitemap', 'comment', '1.0.3', 'Minor improvements to the code.', '2020-02-27 04:47:37'),
(294, 'RainLab.Sitemap', 'comment', '1.0.4', 'Fixes issue where correct headers not being sent.', '2020-02-27 04:47:37'),
(295, 'RainLab.Sitemap', 'comment', '1.0.5', 'Minor back-end styling fix.', '2020-02-27 04:47:37'),
(296, 'RainLab.Sitemap', 'comment', '1.0.6', 'Minor fix to internal API.', '2020-02-27 04:47:37'),
(297, 'RainLab.Sitemap', 'comment', '1.0.7', 'Added access premissions.', '2020-02-27 04:47:37'),
(298, 'RainLab.Sitemap', 'comment', '1.0.8', 'Minor styling updates.', '2020-02-27 04:47:37'),
(299, 'RainLab.Sitemap', 'comment', '1.0.9', 'Replaced the 500 error with 404 when no definition is found. Added Czech translation. Improved Turkish, Hungarian and Portuguese (Brazil) translations.', '2020-02-27 04:47:37'),
(300, 'RainLab.Blog', 'script', '1.0.1', 'create_posts_table.php', '2020-02-27 04:47:56'),
(301, 'RainLab.Blog', 'script', '1.0.1', 'create_categories_table.php', '2020-02-27 04:47:56'),
(302, 'RainLab.Blog', 'script', '1.0.1', 'seed_all_tables.php', '2020-02-27 04:47:56'),
(303, 'RainLab.Blog', 'comment', '1.0.1', 'Initialize plugin.', '2020-02-27 04:47:56'),
(304, 'RainLab.Blog', 'comment', '1.0.2', 'Added the processed HTML content column to the posts table.', '2020-02-27 04:47:56'),
(305, 'RainLab.Blog', 'comment', '1.0.3', 'Category component has been merged with Posts component.', '2020-02-27 04:47:56'),
(306, 'RainLab.Blog', 'comment', '1.0.4', 'Improvements to the Posts list management UI.', '2020-02-27 04:47:56'),
(307, 'RainLab.Blog', 'comment', '1.0.5', 'Removes the Author column from blog post list.', '2020-02-27 04:47:56'),
(308, 'RainLab.Blog', 'comment', '1.0.6', 'Featured images now appear in the Post component.', '2020-02-27 04:47:56'),
(309, 'RainLab.Blog', 'comment', '1.0.7', 'Added support for the Static Pages menus.', '2020-02-27 04:47:56'),
(310, 'RainLab.Blog', 'comment', '1.0.8', 'Added total posts to category list.', '2020-02-27 04:47:56'),
(311, 'RainLab.Blog', 'comment', '1.0.9', 'Added support for the Sitemap plugin.', '2020-02-27 04:47:56'),
(312, 'RainLab.Blog', 'comment', '1.0.10', 'Added permission to prevent users from seeing posts they did not create.', '2020-02-27 04:47:56'),
(313, 'RainLab.Blog', 'comment', '1.0.11', 'Deprecate \"idParam\" component property in favour of \"slug\" property.', '2020-02-27 04:47:56'),
(314, 'RainLab.Blog', 'comment', '1.0.12', 'Fixes issue where images cannot be uploaded caused by latest Markdown library.', '2020-02-27 04:47:56'),
(315, 'RainLab.Blog', 'comment', '1.0.13', 'Fixes problem with providing pages to Sitemap and Pages plugins.', '2020-02-27 04:47:56'),
(316, 'RainLab.Blog', 'comment', '1.0.14', 'Add support for CSRF protection feature added to core.', '2020-02-27 04:47:56'),
(317, 'RainLab.Blog', 'comment', '1.1.0', 'Replaced the Post editor with the new core Markdown editor.', '2020-02-27 04:47:56'),
(318, 'RainLab.Blog', 'comment', '1.1.1', 'Posts can now be imported and exported.', '2020-02-27 04:47:56'),
(319, 'RainLab.Blog', 'comment', '1.1.2', 'Posts are no longer visible if the published date has not passed.', '2020-02-27 04:47:56'),
(320, 'RainLab.Blog', 'comment', '1.1.3', 'Added a New Post shortcut button to the blog menu.', '2020-02-27 04:47:56'),
(321, 'RainLab.Blog', 'script', '1.2.0', 'categories_add_nested_fields.php', '2020-02-27 04:47:56'),
(322, 'RainLab.Blog', 'comment', '1.2.0', 'Categories now support nesting.', '2020-02-27 04:47:56'),
(323, 'RainLab.Blog', 'comment', '1.2.1', 'Post slugs now must be unique.', '2020-02-27 04:47:56'),
(324, 'RainLab.Blog', 'comment', '1.2.2', 'Fixes issue on new installs.', '2020-02-27 04:47:56'),
(325, 'RainLab.Blog', 'comment', '1.2.3', 'Minor user interface update.', '2020-02-27 04:47:56'),
(326, 'RainLab.Blog', 'script', '1.2.4', 'update_timestamp_nullable.php', '2020-02-27 04:47:56'),
(327, 'RainLab.Blog', 'comment', '1.2.4', 'Database maintenance. Updated all timestamp columns to be nullable.', '2020-02-27 04:47:56'),
(328, 'RainLab.Blog', 'comment', '1.2.5', 'Added translation support for blog posts.', '2020-02-27 04:47:56'),
(329, 'RainLab.Blog', 'comment', '1.2.6', 'The published field can now supply a time with the date.', '2020-02-27 04:47:56'),
(330, 'RainLab.Blog', 'comment', '1.2.7', 'Introduced a new RSS feed component.', '2020-02-27 04:47:56'),
(331, 'RainLab.Blog', 'comment', '1.2.8', 'Fixes issue with translated `content_html` attribute on blog posts.', '2020-02-27 04:47:56'),
(332, 'RainLab.Blog', 'comment', '1.2.9', 'Added translation support for blog categories.', '2020-02-27 04:47:56'),
(333, 'RainLab.Blog', 'comment', '1.2.10', 'Added translation support for post slugs.', '2020-02-27 04:47:56'),
(334, 'RainLab.Blog', 'comment', '1.2.11', 'Fixes bug where excerpt is not translated.', '2020-02-27 04:47:56'),
(335, 'RainLab.Blog', 'comment', '1.2.12', 'Description field added to category form.', '2020-02-27 04:47:56'),
(336, 'RainLab.Blog', 'comment', '1.2.13', 'Improved support for Static Pages menus, added a blog post and all blog posts.', '2020-02-27 04:47:56'),
(337, 'RainLab.Blog', 'comment', '1.2.14', 'Added post exception property to the post list component, useful for showing related posts.', '2020-02-27 04:47:56'),
(338, 'RainLab.Blog', 'comment', '1.2.15', 'Back-end navigation sort order updated.', '2020-02-27 04:47:56'),
(339, 'RainLab.Blog', 'comment', '1.2.16', 'Added `nextPost` and `previousPost` to the blog post component.', '2020-02-27 04:47:56'),
(340, 'RainLab.Blog', 'comment', '1.2.17', 'Improved the next and previous logic to sort by the published date.', '2020-02-27 04:47:56'),
(341, 'RainLab.Blog', 'comment', '1.2.18', 'Minor change to internals.', '2020-02-27 04:47:56'),
(342, 'RainLab.Blog', 'comment', '1.2.19', 'Improved support for Build 420+', '2020-02-27 04:47:56'),
(343, 'RainLab.Blog', 'script', '1.3.0', 'posts_add_metadata.php', '2020-02-27 04:47:56'),
(344, 'RainLab.Blog', 'comment', '1.3.0', 'Added metadata column for plugins to store data in', '2020-02-27 04:47:56'),
(345, 'RainLab.Blog', 'comment', '1.3.1', 'Fixed metadata column not being jsonable', '2020-02-27 04:47:56'),
(346, 'RainLab.Blog', 'comment', '1.3.2', 'Allow custom slug name for components, add 404 handling for missing blog posts, allow exporting of blog images.', '2020-02-27 04:47:56'),
(347, 'RainLab.Blog', 'comment', '1.3.3', 'Fixed \'excluded categories\' filter from being run when value is empty.', '2020-02-27 04:47:56'),
(348, 'RainLab.Blog', 'comment', '1.3.4', 'Allow post author to be specified. Improved translations.', '2020-02-27 04:47:56'),
(349, 'RainLab.Blog', 'comment', '1.3.5', 'Fixed missing user info from breaking initial seeder in migrations. Fixed a PostgreSQL issue with blog exports.', '2020-02-27 04:47:56'),
(350, 'RainLab.Blog', 'comment', '1.3.6', 'Improved French translations.', '2020-02-27 04:47:56'),
(351, 'RainLab.Blog', 'comment', '1.4.0', 'Stability improvements. Rollback custom slug names for components', '2020-02-27 04:47:56'),
(352, 'AnandPatel.WysiwygEditors', 'comment', '1.0.1', 'First version of Wysiwyg Editors.', '2020-02-27 04:48:45'),
(353, 'AnandPatel.WysiwygEditors', 'comment', '1.0.2', 'Automatic Injection to CMS & other code editors and October CMS`s Rich Editor added.', '2020-02-27 04:48:45');
INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`) VALUES
(354, 'AnandPatel.WysiwygEditors', 'comment', '1.0.3', 'Automatic Injection to RainLab Static Pages & other plugin`s option is appear only if installed.', '2020-02-27 04:48:45'),
(355, 'AnandPatel.WysiwygEditors', 'comment', '1.0.4', 'New Froala editor added (on request from emzero439), Height & width property added for editor, setting moved to My Setting tab and minor changes in settings.', '2020-02-27 04:48:45'),
(356, 'AnandPatel.WysiwygEditors', 'comment', '1.0.5', 'Automatic Injection to Radiantweb`s Problog and ProEvents (option available in settings-content).', '2020-02-27 04:48:45'),
(357, 'AnandPatel.WysiwygEditors', 'comment', '1.0.6', 'CKEditor updated and bug fixes.', '2020-02-27 04:48:45'),
(358, 'AnandPatel.WysiwygEditors', 'comment', '1.0.7', 'Integrated elFinder (file browser) with TinyMCE & CKEditor, Image upload/delete for Froala Editor.', '2020-02-27 04:48:45'),
(359, 'AnandPatel.WysiwygEditors', 'comment', '1.0.8', 'Added security to File Browser`s route (Authenticate users can only access File Browser).', '2020-02-27 04:48:45'),
(360, 'AnandPatel.WysiwygEditors', 'comment', '1.0.9', 'Updated CKEditor, Froala and TinyMCE.', '2020-02-27 04:48:45'),
(361, 'AnandPatel.WysiwygEditors', 'comment', '1.1.0', 'Support multilanguage, update elFinder and cleanup code.', '2020-02-27 04:48:45'),
(362, 'AnandPatel.WysiwygEditors', 'comment', '1.1.1', 'Added Turkish language.', '2020-02-27 04:48:45'),
(363, 'AnandPatel.WysiwygEditors', 'comment', '1.1.2', 'Added Hungarian language.', '2020-02-27 04:48:45'),
(364, 'AnandPatel.WysiwygEditors', 'comment', '1.1.3', 'Fixed issue related to RC (Elfinder fix remaining).', '2020-02-27 04:48:45'),
(365, 'AnandPatel.WysiwygEditors', 'comment', '1.1.4', 'Fixed Elfinder issue.', '2020-02-27 04:48:45'),
(366, 'AnandPatel.WysiwygEditors', 'comment', '1.1.5', 'Updated CKEditor, Froala and TinyMCE.', '2020-02-27 04:48:45'),
(367, 'AnandPatel.WysiwygEditors', 'comment', '1.1.6', 'Changed destination folder.', '2020-02-27 04:48:45'),
(368, 'AnandPatel.WysiwygEditors', 'comment', '1.1.7', 'Added Czech language.', '2020-02-27 04:48:45'),
(369, 'AnandPatel.WysiwygEditors', 'comment', '1.1.8', 'Added Russian language.', '2020-02-27 04:48:45'),
(370, 'AnandPatel.WysiwygEditors', 'comment', '1.1.9', 'Fix hook and other issues (thanks to Vojta Svoboda).', '2020-02-27 04:48:45'),
(371, 'AnandPatel.WysiwygEditors', 'comment', '1.2.0', 'Put settings inside CMS sidemenu (thanks to Amanda Tresbach).', '2020-02-27 04:48:45'),
(372, 'AnandPatel.WysiwygEditors', 'comment', '1.2.1', 'Remove el-finder (Which fix issue of composer), added OC media manager support for image in TinyMCE & CkEditor, TinyMCE version updated, Fix Image upload for froala editor', '2020-02-27 04:48:45'),
(373, 'AnandPatel.WysiwygEditors', 'comment', '1.2.2', 'Add multilingual support, Add new languages, Update the Hungarian language, Add the missing English language files (Special thanks to Szabó Gergő)', '2020-02-27 04:48:45'),
(374, 'AnandPatel.WysiwygEditors', 'comment', '1.2.3', 'Added toolbar customization option (Special thanks to Szabó Gergő).', '2020-02-27 04:48:45'),
(375, 'AnandPatel.WysiwygEditors', 'comment', '1.2.4', 'Added support for Content Plus Plugin & News and Newsletter plugin (thanks to Szabó Gergő)', '2020-02-27 04:48:45'),
(376, 'AnandPatel.WysiwygEditors', 'comment', '1.2.5', 'Minor improvements and bugfixes.', '2020-02-27 04:48:45'),
(377, 'AnandPatel.WysiwygEditors', 'comment', '1.2.6', 'Updated the CKEditor and TinyMCE editors.', '2020-02-27 04:48:45'),
(378, 'AnandPatel.WysiwygEditors', 'comment', '1.2.7', 'Show locale switcher when using multilocale editor.', '2020-02-27 04:48:45'),
(379, 'AnandPatel.WysiwygEditors', 'comment', '1.2.8', 'Added French language', '2020-02-27 04:48:45'),
(380, 'AnandPatel.WysiwygEditors', 'comment', '1.2.9', 'Added permission for preferences', '2020-02-27 04:48:45'),
(381, 'ToughDeveloper.ImageResizer', 'comment', '1.0.1', 'First version of ImageResizer', '2020-02-27 04:49:15'),
(382, 'ToughDeveloper.ImageResizer', 'comment', '1.0.2', 'Fixes bug where url set in config/app.php affecting rendering of image.', '2020-02-27 04:49:15'),
(383, 'ToughDeveloper.ImageResizer', 'comment', '1.0.3', 'Adds Hungarian translation - thanks to Szabó Gergő', '2020-02-27 04:49:15'),
(384, 'ToughDeveloper.ImageResizer', 'comment', '1.1.0', 'Adds default settings to admin - thanks to Szabó Gergő', '2020-02-27 04:49:15'),
(385, 'ToughDeveloper.ImageResizer', 'comment', '1.2.0', 'Adds optional PNG compression support via Tiny PNG', '2020-02-27 04:49:15'),
(386, 'ToughDeveloper.ImageResizer', 'comment', '1.2.1', 'Updates translations and allows jpg files to be compressed with Tiny PNG', '2020-02-27 04:49:15'),
(387, 'ToughDeveloper.ImageResizer', 'comment', '1.2.2', 'Ensures false can be passed to auto width/height. Also improves URL parsing so different formats of app.url work as expected. Thanks to Emerge.', '2020-02-27 04:49:15'),
(388, 'ToughDeveloper.ImageResizer', 'comment', '1.3.0', 'Adds TinyPNG API key validation, TinyPNG usage statistics and provides thumb backend list column type', '2020-02-27 04:49:15'),
(389, 'ToughDeveloper.ImageResizer', 'comment', '1.3.1', 'Ensures plugin works as expected when October is installed to a sub-directory.', '2020-02-27 04:49:15'),
(390, 'ToughDeveloper.ImageResizer', 'comment', '1.3.2', 'Adds option to skip compression of certain images, helpful to save credits.', '2020-02-27 04:49:15'),
(391, 'ToughDeveloper.ImageResizer', 'comment', '1.3.3', 'Updates Hungarian translations - thanks to Szabó Gergő', '2020-02-27 04:49:15'),
(392, 'ToughDeveloper.ImageResizer', 'comment', '1.3.4', 'Adds German translation - thanks to Christoph (emptynick)', '2020-02-27 04:49:15'),
(393, 'ToughDeveloper.ImageResizer', 'comment', '1.3.5', '!!! Changes path to cached image for builds of October 420+. Thanks to that0n3guy', '2020-02-27 04:49:15'),
(394, 'ToughDeveloper.ImageResizer', 'comment', '1.3.6', 'Prevent infinite loop when custom not found image does not exist. Thanks to yapsr', '2020-02-27 04:49:15'),
(395, 'ToughDeveloper.ImageResizer', 'comment', '1.4.0', 'Add imageWidth() and imageHeight() filters - @matteotrubini', '2020-02-27 04:49:15'),
(396, 'ToughDeveloper.ImageResizer', 'comment', '1.4.0', 'Adds fr translations - @FelixINX', '2020-02-27 04:49:15'),
(397, 'ToughDeveloper.ImageResizer', 'comment', '1.4.0', 'composer.json fixes - @DieterHolvoet and @LukeTowers', '2020-02-27 04:49:15'),
(398, 'ToughDeveloper.ImageResizer', 'comment', '1.4.0', 'Regenerate cached image if original has a different mtime - @kevinkoenen', '2020-02-27 04:49:15'),
(399, 'ToughDeveloper.ImageResizer', 'comment', '1.4.0', 'Delete temporary image copy - @multiwebinc', '2020-02-27 04:49:15'),
(400, 'ToughDeveloper.ImageResizer', 'comment', '1.4.0', 'Adds zh-cn translations - @everyx', '2020-02-27 04:49:15'),
(401, 'ToughDeveloper.ImageResizer', 'comment', '1.4.0', 'Spaces in filename are now handled properly - @mauserrifle', '2020-02-27 04:49:15');

-- --------------------------------------------------------

--
-- Структура таблицы `system_plugin_versions`
--

CREATE TABLE `system_plugin_versions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_disabled` tinyint(1) NOT NULL DEFAULT 0,
  `is_frozen` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `system_plugin_versions`
--

INSERT INTO `system_plugin_versions` (`id`, `code`, `version`, `created_at`, `is_disabled`, `is_frozen`) VALUES
(1, 'October.Demo', '1.0.1', '2020-02-27 04:22:09', 0, 0),
(2, 'Lovata.Toolbox', '1.28.0', '2020-02-27 04:23:52', 0, 0),
(3, 'RainLab.Pages', '1.3.2', '2020-02-27 04:23:52', 0, 0),
(4, 'Lovata.Shopaholic', '1.25.0', '2020-02-27 04:23:54', 0, 0),
(5, 'Lovata.OrdersShopaholic', '1.24.0', '2020-02-27 04:26:13', 0, 0),
(6, 'RainLab.Builder', '1.0.26', '2020-02-27 04:47:15', 0, 0),
(7, 'RainLab.Sitemap', '1.0.9', '2020-02-27 04:47:37', 0, 0),
(8, 'RainLab.Blog', '1.4.0', '2020-02-27 04:47:56', 0, 0),
(9, 'AnandPatel.WysiwygEditors', '1.2.9', '2020-02-27 04:48:45', 0, 0),
(10, 'ToughDeveloper.ImageResizer', '1.4.0', '2020-02-27 04:49:15', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `system_request_logs`
--

CREATE TABLE `system_request_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_code` int(11) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `system_revisions`
--

CREATE TABLE `system_revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revisionable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `system_settings`
--

INSERT INTO `system_settings` (`id`, `item`, `value`) VALUES
(1, 'lovata_toolbox_settings', '{\"decimals\":null,\"dec_point\":null,\"thousands_sep\":null}'),
(2, 'backend_brand_settings', '{\"app_name\":\"OctoberCMS\",\"app_tagline\":\"Getting back to basics\",\"primary_color\":\"#34495e\",\"secondary_color\":\"#e67e22\",\"accent_color\":\"#3498db\",\"menu_mode\":\"inline\",\"custom_css\":\"\"}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `backend_access_log`
--
ALTER TABLE `backend_access_log`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `backend_users`
--
ALTER TABLE `backend_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_unique` (`login`),
  ADD UNIQUE KEY `email_unique` (`email`),
  ADD KEY `act_code_index` (`activation_code`),
  ADD KEY `reset_code_index` (`reset_password_code`),
  ADD KEY `admin_role_index` (`role_id`);

--
-- Индексы таблицы `backend_users_groups`
--
ALTER TABLE `backend_users_groups`
  ADD PRIMARY KEY (`user_id`,`user_group_id`);

--
-- Индексы таблицы `backend_user_groups`
--
ALTER TABLE `backend_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_unique` (`name`),
  ADD KEY `code_index` (`code`);

--
-- Индексы таблицы `backend_user_preferences`
--
ALTER TABLE `backend_user_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_item_index` (`user_id`,`namespace`,`group`,`item`);

--
-- Индексы таблицы `backend_user_roles`
--
ALTER TABLE `backend_user_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_unique` (`name`),
  ADD KEY `role_code_index` (`code`);

--
-- Индексы таблицы `backend_user_throttle`
--
ALTER TABLE `backend_user_throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `backend_user_throttle_user_id_index` (`user_id`),
  ADD KEY `backend_user_throttle_ip_address_index` (`ip_address`);

--
-- Индексы таблицы `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Индексы таблицы `cms_theme_data`
--
ALTER TABLE `cms_theme_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_data_theme_index` (`theme`);

--
-- Индексы таблицы `cms_theme_logs`
--
ALTER TABLE `cms_theme_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_logs_type_index` (`type`),
  ADD KEY `cms_theme_logs_theme_index` (`theme`),
  ADD KEY `cms_theme_logs_user_id_index` (`user_id`);

--
-- Индексы таблицы `cms_theme_templates`
--
ALTER TABLE `cms_theme_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_templates_source_index` (`source`),
  ADD KEY `cms_theme_templates_path_index` (`path`);

--
-- Индексы таблицы `deferred_bindings`
--
ALTER TABLE `deferred_bindings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deferred_bindings_master_type_index` (`master_type`),
  ADD KEY `deferred_bindings_master_field_index` (`master_field`),
  ADD KEY `deferred_bindings_slave_type_index` (`slave_type`),
  ADD KEY `deferred_bindings_slave_id_index` (`slave_id`),
  ADD KEY `deferred_bindings_session_key_index` (`session_key`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

--
-- Индексы таблицы `lovata_ordersshopaholic_payment_restrictions`
--
ALTER TABLE `lovata_ordersshopaholic_payment_restrictions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_ordersshopaholic_payment_restrictions_code_index` (`code`),
  ADD KEY `lovata_ordersshopaholic_payment_restrictions_restriction_index` (`restriction`);

--
-- Индексы таблицы `lovata_ordersshopaholic_payment_restrictions_link`
--
ALTER TABLE `lovata_ordersshopaholic_payment_restrictions_link`
  ADD PRIMARY KEY (`payment_method_id`,`payment_restriction_id`);

--
-- Индексы таблицы `lovata_ordersshopaholic_shipping_restrictions`
--
ALTER TABLE `lovata_ordersshopaholic_shipping_restrictions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_ordersshopaholic_shipping_restrictions_code_index` (`code`),
  ADD KEY `lovata_ordersshopaholic_shipping_restrictions_restriction_index` (`restriction`);

--
-- Индексы таблицы `lovata_ordersshopaholic_shipping_restrictions_link`
--
ALTER TABLE `lovata_ordersshopaholic_shipping_restrictions_link`
  ADD PRIMARY KEY (`shipping_type_id`,`shipping_restriction_id`);

--
-- Индексы таблицы `lovata_orders_shopaholic_addition_properties`
--
ALTER TABLE `lovata_orders_shopaholic_addition_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_addition_properties_name_index` (`name`),
  ADD KEY `lovata_orders_shopaholic_addition_properties_slug_index` (`slug`),
  ADD KEY `lovata_orders_shopaholic_addition_properties_code_index` (`code`),
  ADD KEY `lovata_orders_shopaholic_addition_properties_sort_order_index` (`sort_order`);

--
-- Индексы таблицы `lovata_orders_shopaholic_carts`
--
ALTER TABLE `lovata_orders_shopaholic_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_carts_user_id_index` (`user_id`);

--
-- Индексы таблицы `lovata_orders_shopaholic_cart_positions`
--
ALTER TABLE `lovata_orders_shopaholic_cart_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_cart_positions_cart_id_index` (`cart_id`);

--
-- Индексы таблицы `lovata_orders_shopaholic_orders`
--
ALTER TABLE `lovata_orders_shopaholic_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_orders_user_id_index` (`user_id`),
  ADD KEY `lovata_orders_shopaholic_orders_status_id_index` (`status_id`),
  ADD KEY `lovata_orders_shopaholic_orders_order_number_index` (`order_number`),
  ADD KEY `lovata_orders_shopaholic_orders_shipping_type_id_index` (`shipping_type_id`),
  ADD KEY `lovata_orders_shopaholic_orders_payment_method_id_index` (`payment_method_id`),
  ADD KEY `lovata_orders_shopaholic_orders_currency_id_index` (`currency_id`);

--
-- Индексы таблицы `lovata_orders_shopaholic_order_positions`
--
ALTER TABLE `lovata_orders_shopaholic_order_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_order_positions_item_id_index` (`item_id`),
  ADD KEY `lovata_orders_shopaholic_order_positions_item_type_index` (`item_type`);

--
-- Индексы таблицы `lovata_orders_shopaholic_order_promo_mechanism`
--
ALTER TABLE `lovata_orders_shopaholic_order_promo_mechanism`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lovata_orders_shopaholic_payment_methods`
--
ALTER TABLE `lovata_orders_shopaholic_payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_payment_methods_code_index` (`code`);

--
-- Индексы таблицы `lovata_orders_shopaholic_position_properties`
--
ALTER TABLE `lovata_orders_shopaholic_position_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_position_properties_name_index` (`name`),
  ADD KEY `lovata_orders_shopaholic_position_properties_slug_index` (`slug`),
  ADD KEY `lovata_orders_shopaholic_position_properties_code_index` (`code`),
  ADD KEY `lovata_orders_shopaholic_position_properties_sort_order_index` (`sort_order`);

--
-- Индексы таблицы `lovata_orders_shopaholic_promo_mechanism`
--
ALTER TABLE `lovata_orders_shopaholic_promo_mechanism`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lovata_orders_shopaholic_shipping_types`
--
ALTER TABLE `lovata_orders_shopaholic_shipping_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_shipping_types_code_index` (`code`),
  ADD KEY `lovata_orders_shopaholic_shipping_types_sort_order_index` (`sort_order`);

--
-- Индексы таблицы `lovata_orders_shopaholic_statuses`
--
ALTER TABLE `lovata_orders_shopaholic_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_statuses_code_index` (`code`),
  ADD KEY `lovata_orders_shopaholic_statuses_sort_order_index` (`sort_order`);

--
-- Индексы таблицы `lovata_orders_shopaholic_tasks`
--
ALTER TABLE `lovata_orders_shopaholic_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_tasks_status_index` (`status`),
  ADD KEY `lovata_orders_shopaholic_tasks_order_id_index` (`order_id`),
  ADD KEY `lovata_orders_shopaholic_tasks_user_id_index` (`user_id`),
  ADD KEY `lovata_orders_shopaholic_tasks_manager_id_index` (`manager_id`),
  ADD KEY `lovata_orders_shopaholic_tasks_author_id_index` (`author_id`);

--
-- Индексы таблицы `lovata_orders_shopaholic_user_addresses`
--
ALTER TABLE `lovata_orders_shopaholic_user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_orders_shopaholic_user_addresses_user_id_index` (`user_id`),
  ADD KEY `lovata_orders_shopaholic_user_addresses_type_index` (`type`);

--
-- Индексы таблицы `lovata_shopaholic_additional_categories`
--
ALTER TABLE `lovata_shopaholic_additional_categories`
  ADD PRIMARY KEY (`category_id`,`product_id`);

--
-- Индексы таблицы `lovata_shopaholic_brands`
--
ALTER TABLE `lovata_shopaholic_brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lovata_shopaholic_brands_slug_unique` (`slug`),
  ADD KEY `lovata_shopaholic_brands_name_index` (`name`),
  ADD KEY `lovata_shopaholic_brands_code_index` (`code`),
  ADD KEY `lovata_shopaholic_brands_external_id_index` (`external_id`);

--
-- Индексы таблицы `lovata_shopaholic_categories`
--
ALTER TABLE `lovata_shopaholic_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lovata_shopaholic_categories_slug_unique` (`slug`),
  ADD KEY `lovata_shopaholic_categories_name_index` (`name`),
  ADD KEY `lovata_shopaholic_categories_code_index` (`code`),
  ADD KEY `lovata_shopaholic_categories_external_id_index` (`external_id`);

--
-- Индексы таблицы `lovata_shopaholic_currency`
--
ALTER TABLE `lovata_shopaholic_currency`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lovata_shopaholic_currency_code_unique` (`code`),
  ADD KEY `lovata_shopaholic_currency_external_id_index` (`external_id`);

--
-- Индексы таблицы `lovata_shopaholic_measure`
--
ALTER TABLE `lovata_shopaholic_measure`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lovata_shopaholic_offers`
--
ALTER TABLE `lovata_shopaholic_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_shopaholic_offers_name_index` (`name`),
  ADD KEY `lovata_shopaholic_offers_code_index` (`code`),
  ADD KEY `lovata_shopaholic_offers_external_id_index` (`external_id`),
  ADD KEY `lovata_shopaholic_offers_product_id_index` (`product_id`),
  ADD KEY `lovata_shopaholic_offers_quantity_index` (`quantity`);

--
-- Индексы таблицы `lovata_shopaholic_prices`
--
ALTER TABLE `lovata_shopaholic_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_shopaholic_prices_item_id_index` (`item_id`),
  ADD KEY `lovata_shopaholic_prices_item_type_index` (`item_type`),
  ADD KEY `lovata_shopaholic_prices_price_index` (`price`),
  ADD KEY `lovata_shopaholic_prices_old_price_index` (`old_price`),
  ADD KEY `lovata_shopaholic_prices_price_type_id_index` (`price_type_id`);

--
-- Индексы таблицы `lovata_shopaholic_price_types`
--
ALTER TABLE `lovata_shopaholic_price_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lovata_shopaholic_price_types_code_index` (`code`),
  ADD KEY `lovata_shopaholic_price_types_external_id_index` (`external_id`);

--
-- Индексы таблицы `lovata_shopaholic_products`
--
ALTER TABLE `lovata_shopaholic_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lovata_shopaholic_products_slug_unique` (`slug`),
  ADD KEY `lovata_shopaholic_products_name_index` (`name`),
  ADD KEY `lovata_shopaholic_products_code_index` (`code`),
  ADD KEY `lovata_shopaholic_products_external_id_index` (`external_id`),
  ADD KEY `lovata_shopaholic_products_brand_id_index` (`brand_id`),
  ADD KEY `lovata_shopaholic_products_category_id_index` (`category_id`);

--
-- Индексы таблицы `lovata_shopaholic_promo_block`
--
ALTER TABLE `lovata_shopaholic_promo_block`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lovata_shopaholic_promo_block_slug_unique` (`slug`),
  ADD KEY `lovata_shopaholic_promo_block_name_index` (`name`),
  ADD KEY `lovata_shopaholic_promo_block_code_index` (`code`);

--
-- Индексы таблицы `lovata_shopaholic_promo_block_relation`
--
ALTER TABLE `lovata_shopaholic_promo_block_relation`
  ADD PRIMARY KEY (`promo_id`,`product_id`);

--
-- Индексы таблицы `lovata_shopaholic_taxes`
--
ALTER TABLE `lovata_shopaholic_taxes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lovata_shopaholic_tax_category_link`
--
ALTER TABLE `lovata_shopaholic_tax_category_link`
  ADD PRIMARY KEY (`category_id`,`tax_id`);

--
-- Индексы таблицы `lovata_shopaholic_tax_country_link`
--
ALTER TABLE `lovata_shopaholic_tax_country_link`
  ADD PRIMARY KEY (`country_id`,`tax_id`);

--
-- Индексы таблицы `lovata_shopaholic_tax_product_link`
--
ALTER TABLE `lovata_shopaholic_tax_product_link`
  ADD PRIMARY KEY (`product_id`,`tax_id`);

--
-- Индексы таблицы `lovata_shopaholic_tax_state_link`
--
ALTER TABLE `lovata_shopaholic_tax_state_link`
  ADD PRIMARY KEY (`state_id`,`tax_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rainlab_blog_categories`
--
ALTER TABLE `rainlab_blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_blog_categories_slug_index` (`slug`),
  ADD KEY `rainlab_blog_categories_parent_id_index` (`parent_id`);

--
-- Индексы таблицы `rainlab_blog_posts`
--
ALTER TABLE `rainlab_blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_blog_posts_user_id_index` (`user_id`),
  ADD KEY `rainlab_blog_posts_slug_index` (`slug`);

--
-- Индексы таблицы `rainlab_blog_posts_categories`
--
ALTER TABLE `rainlab_blog_posts_categories`
  ADD PRIMARY KEY (`post_id`,`category_id`);

--
-- Индексы таблицы `rainlab_sitemap_definitions`
--
ALTER TABLE `rainlab_sitemap_definitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_sitemap_definitions_theme_index` (`theme`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Индексы таблицы `system_event_logs`
--
ALTER TABLE `system_event_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_event_logs_level_index` (`level`);

--
-- Индексы таблицы `system_files`
--
ALTER TABLE `system_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_files_field_index` (`field`),
  ADD KEY `system_files_attachment_id_index` (`attachment_id`),
  ADD KEY `system_files_attachment_type_index` (`attachment_type`);

--
-- Индексы таблицы `system_mail_layouts`
--
ALTER TABLE `system_mail_layouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `system_mail_partials`
--
ALTER TABLE `system_mail_partials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `system_mail_templates`
--
ALTER TABLE `system_mail_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_mail_templates_layout_id_index` (`layout_id`);

--
-- Индексы таблицы `system_parameters`
--
ALTER TABLE `system_parameters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_index` (`namespace`,`group`,`item`);

--
-- Индексы таблицы `system_plugin_history`
--
ALTER TABLE `system_plugin_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_history_code_index` (`code`),
  ADD KEY `system_plugin_history_type_index` (`type`);

--
-- Индексы таблицы `system_plugin_versions`
--
ALTER TABLE `system_plugin_versions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_versions_code_index` (`code`);

--
-- Индексы таблицы `system_request_logs`
--
ALTER TABLE `system_request_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `system_revisions`
--
ALTER TABLE `system_revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`),
  ADD KEY `system_revisions_user_id_index` (`user_id`),
  ADD KEY `system_revisions_field_index` (`field`);

--
-- Индексы таблицы `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_settings_item_index` (`item`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `backend_access_log`
--
ALTER TABLE `backend_access_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `backend_users`
--
ALTER TABLE `backend_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `backend_user_groups`
--
ALTER TABLE `backend_user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `backend_user_preferences`
--
ALTER TABLE `backend_user_preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `backend_user_roles`
--
ALTER TABLE `backend_user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `backend_user_throttle`
--
ALTER TABLE `backend_user_throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `cms_theme_data`
--
ALTER TABLE `cms_theme_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `cms_theme_logs`
--
ALTER TABLE `cms_theme_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cms_theme_templates`
--
ALTER TABLE `cms_theme_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `deferred_bindings`
--
ALTER TABLE `deferred_bindings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_ordersshopaholic_payment_restrictions`
--
ALTER TABLE `lovata_ordersshopaholic_payment_restrictions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_ordersshopaholic_shipping_restrictions`
--
ALTER TABLE `lovata_ordersshopaholic_shipping_restrictions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_addition_properties`
--
ALTER TABLE `lovata_orders_shopaholic_addition_properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_carts`
--
ALTER TABLE `lovata_orders_shopaholic_carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_cart_positions`
--
ALTER TABLE `lovata_orders_shopaholic_cart_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_orders`
--
ALTER TABLE `lovata_orders_shopaholic_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_order_positions`
--
ALTER TABLE `lovata_orders_shopaholic_order_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_order_promo_mechanism`
--
ALTER TABLE `lovata_orders_shopaholic_order_promo_mechanism`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_payment_methods`
--
ALTER TABLE `lovata_orders_shopaholic_payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_position_properties`
--
ALTER TABLE `lovata_orders_shopaholic_position_properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_promo_mechanism`
--
ALTER TABLE `lovata_orders_shopaholic_promo_mechanism`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_shipping_types`
--
ALTER TABLE `lovata_orders_shopaholic_shipping_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_statuses`
--
ALTER TABLE `lovata_orders_shopaholic_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_tasks`
--
ALTER TABLE `lovata_orders_shopaholic_tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_orders_shopaholic_user_addresses`
--
ALTER TABLE `lovata_orders_shopaholic_user_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_brands`
--
ALTER TABLE `lovata_shopaholic_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_categories`
--
ALTER TABLE `lovata_shopaholic_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_currency`
--
ALTER TABLE `lovata_shopaholic_currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_measure`
--
ALTER TABLE `lovata_shopaholic_measure`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_offers`
--
ALTER TABLE `lovata_shopaholic_offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_prices`
--
ALTER TABLE `lovata_shopaholic_prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_price_types`
--
ALTER TABLE `lovata_shopaholic_price_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_products`
--
ALTER TABLE `lovata_shopaholic_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_promo_block`
--
ALTER TABLE `lovata_shopaholic_promo_block`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lovata_shopaholic_taxes`
--
ALTER TABLE `lovata_shopaholic_taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `rainlab_blog_categories`
--
ALTER TABLE `rainlab_blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `rainlab_blog_posts`
--
ALTER TABLE `rainlab_blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `rainlab_sitemap_definitions`
--
ALTER TABLE `rainlab_sitemap_definitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `system_event_logs`
--
ALTER TABLE `system_event_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `system_files`
--
ALTER TABLE `system_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `system_mail_layouts`
--
ALTER TABLE `system_mail_layouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `system_mail_partials`
--
ALTER TABLE `system_mail_partials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `system_mail_templates`
--
ALTER TABLE `system_mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `system_parameters`
--
ALTER TABLE `system_parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `system_plugin_history`
--
ALTER TABLE `system_plugin_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT для таблицы `system_plugin_versions`
--
ALTER TABLE `system_plugin_versions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `system_request_logs`
--
ALTER TABLE `system_request_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `system_revisions`
--
ALTER TABLE `system_revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
