-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2019 at 05:36 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elnabwey_motors`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_recorder`
--

CREATE TABLE `action_recorder` (
  `id` int(11) NOT NULL,
  `module` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `success` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address_book`
--

CREATE TABLE `address_book` (
  `address_book_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `entry_gender` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_suburb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_country_id` int(11) NOT NULL DEFAULT '0',
  `entry_zone_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address_book`
--

INSERT INTO `address_book` (`address_book_id`, `customers_id`, `entry_gender`, `entry_company`, `entry_firstname`, `entry_lastname`, `entry_street_address`, `entry_suburb`, `entry_postcode`, `entry_city`, `entry_state`, `entry_country_id`, `entry_zone_id`) VALUES
(2, 3, NULL, 'Company Name', 'Test', 'Ionicecommerce', 'Suit# 876, North Street, Medsion eve', '', '10075', 'New York', 'NY', 223, 43);

-- --------------------------------------------------------

--
-- Table structure for table `address_format`
--

CREATE TABLE `address_format` (
  `address_format_id` int(11) NOT NULL,
  `address_format` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `address_summary` varchar(48) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `myid` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `adminType` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`myid`, `user_name`, `first_name`, `last_name`, `email`, `password`, `isActive`, `address`, `city`, `state`, `zip`, `country`, `phone`, `image`, `adminType`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'Nabawy', 'Motors', 'nabawy-motors@nabawy.com', '$2y$10$Jgg6KOtAwg2uvUIaj8b64OkerR9RFC7LSwCt0JEl5zQ94hTBsxTVa', 1, 'address', 'Nivada', '', '31271', '63', '+92 314 6681998', 'resources/views/admin/images/admin_profile/1542105434.businessman_863430.png', 1, 'cM3HhjC0euV4Zkv1CajI6GeCCxUXqjZXYKGNjgJT3Bacv9AXQsP3NxrepHt5', '0000-00-00 00:00:00', '2018-11-13 08:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banners_id` int(11) NOT NULL,
  `banners_title` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `banners_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banners_image` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `banners_group` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `banners_html_text` mediumtext COLLATE utf8_unicode_ci,
  `expires_impressions` int(7) DEFAULT '0',
  `expires_date` datetime DEFAULT NULL,
  `date_scheduled` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_status_change` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banners_id`, `banners_title`, `banners_url`, `banners_image`, `banners_group`, `banners_html_text`, `expires_impressions`, `expires_date`, `date_scheduled`, `date_added`, `date_status_change`, `status`, `type`) VALUES
(2, 'road 1', '', 'resources/assets/images/banner_images/1543249992.slide1.jpg', '', NULL, 0, '2020-01-01 00:00:00', NULL, '2018-11-26 16:33:12', '2018-11-26 16:33:12', 1, 'deals'),
(3, 'road 2', '', 'resources/assets/images/banner_images/1543250607.slide2.jpg', '', NULL, 0, '2030-01-01 00:00:00', NULL, '2018-11-26 16:43:54', '2018-11-26 16:43:54', 1, 'top seller'),
(4, 'car 1', '', 'resources/assets/images/banner_images/1543250620.car2.png', '', NULL, 0, '2030-01-01 00:00:00', NULL, '2018-11-26 16:44:04', '2018-11-26 16:44:04', 1, 'top seller'),
(5, 'car 2', '82', 'resources/assets/images/banner_images/1543250187.car3.png', '', NULL, 0, '2030-01-01 00:00:00', NULL, '2018-11-26 16:36:27', '2018-11-26 16:36:27', 1, 'product'),
(6, 'الاسعار قابلة للتغيير لعدم استقرار السوق و لذلك فهى غير ملزمة للشركة الا فى حالة التعاقد', '91', 'resources/assets/images/banner_images/nabwy-banner-option1.jpg', '', NULL, 0, '2019-03-07 00:00:00', NULL, '2019-01-22 16:57:42', '2019-01-22 16:57:42', 1, 'product');

-- --------------------------------------------------------

--
-- Table structure for table `banners_history`
--

CREATE TABLE `banners_history` (
  `banners_history_id` int(11) NOT NULL,
  `banners_id` int(11) NOT NULL,
  `banners_shown` int(5) NOT NULL DEFAULT '0',
  `banners_clicked` int(5) NOT NULL DEFAULT '0',
  `banners_history_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_image` mediumtext COLLATE utf8_unicode_ci,
  `categories_icon` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(3) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_image`, `categories_icon`, `parent_id`, `sort_order`, `date_added`, `last_modified`) VALUES
(33, 'resources/assets/images/category_images/1542031430.ecco sport_591943.png', 'resources/assets/images/category_icons/1543746177.ford.png', 32, NULL, '2018-11-12 02:03:50', '2018-12-02 10:22:57'),
(34, 'resources/assets/images/category_images/1542031656.Foucs Sedan.png', 'resources/assets/images/category_icons/1543746190.ford.png', 32, NULL, '2018-11-12 02:07:36', '2018-12-02 10:23:10'),
(35, 'resources/assets/images/category_images/1543252019.toyota.png', 'resources/assets/images/category_icons/1543252019.toyota.png', 0, NULL, '2018-11-26 05:06:59', NULL),
(36, 'resources/assets/images/category_images/1543252068.glory.jpg', 'resources/assets/images/category_icons/1543252068.glory.jpg', 0, NULL, '2018-11-26 05:07:48', '2018-11-26 05:36:26'),
(37, 'resources/assets/images/category_images/1543252100.MG.png', 'resources/assets/images/category_icons/1543252100.MG.png', 0, NULL, '2018-11-26 05:08:20', NULL),
(38, 'resources/assets/images/category_images/1543252125.baic.png', 'resources/assets/images/category_icons/1543252125.baic.png', 0, NULL, '2018-11-26 05:08:45', NULL),
(39, 'resources/assets/images/category_images/1543252153.proton.png', 'resources/assets/images/category_icons/1543252153.proton.png', 0, NULL, '2018-11-26 05:09:13', NULL),
(40, 'resources/assets/images/category_images/1543252182.brilliance.png', 'resources/assets/images/category_icons/1543252182.brilliance.png', 0, NULL, '2018-11-26 05:09:42', NULL),
(41, 'resources/assets/images/category_images/1543252225.bmw.png', 'resources/assets/images/category_icons/1543252225.bmw.png', 0, NULL, '2018-11-26 05:10:25', NULL),
(42, 'resources/assets/images/category_images/1543252248.byd.png', 'resources/assets/images/category_icons/1543252248.byd.png', 0, NULL, '2018-11-26 05:10:48', NULL),
(43, 'resources/assets/images/category_images/1543252270.peugeot.png', 'resources/assets/images/category_icons/1543252270.peugeot.png', 0, NULL, '2018-11-26 05:11:10', NULL),
(44, 'resources/assets/images/category_images/1543252295.jac.png', 'resources/assets/images/category_icons/1543252295.jac.png', 0, NULL, '2018-11-26 05:11:35', NULL),
(45, 'resources/assets/images/category_images/1543252317.jeep.png', 'resources/assets/images/category_icons/1543252317.jeep.png', 0, NULL, '2018-11-26 05:11:57', NULL),
(46, 'resources/assets/images/category_images/1543252341.geely.png', 'resources/assets/images/category_icons/1543252341.geely.png', 0, NULL, '2018-11-26 05:12:21', NULL),
(47, 'resources/assets/images/category_images/1543252361.renault.png', 'resources/assets/images/category_icons/1543252361.renault.png', 0, NULL, '2018-11-26 05:12:41', NULL),
(48, 'resources/assets/images/category_images/1543252394.ZOTYE.jpg', 'resources/assets/images/category_icons/1543252394.ZOTYE.jpg', 0, NULL, '2018-11-26 05:13:14', NULL),
(49, 'resources/assets/images/category_images/1543252653.ssang-yong.png', 'resources/assets/images/category_icons/1543252653.ssang-yong.png', 0, NULL, '2018-11-26 05:17:33', NULL),
(50, 'resources/assets/images/category_images/1543252681.skoda.jpg', 'resources/assets/images/category_icons/1543252681.skoda.jpg', 0, NULL, '2018-11-26 05:18:01', NULL),
(51, 'resources/assets/images/category_images/1543252704.suzuki.png', 'resources/assets/images/category_icons/1543252704.suzuki.png', 0, NULL, '2018-11-26 05:18:24', NULL),
(52, 'resources/assets/images/category_images/1543252749.seat.png', 'resources/assets/images/category_icons/1543252749.seat.png', 0, NULL, '2018-11-26 05:19:09', NULL),
(53, 'resources/assets/images/category_images/1543252781.changhe Q35.png', 'resources/assets/images/category_icons/1543252781.changhe Q35.png', 0, NULL, '2018-11-26 05:19:41', NULL),
(54, 'resources/assets/images/category_images/1543252808.Changan.jpg', 'resources/assets/images/category_icons/1543252808.Changan.jpg', 0, NULL, '2018-11-26 05:20:08', NULL),
(55, 'resources/assets/images/category_images/1543252924.chery.png', 'resources/assets/images/category_icons/1543252924.chery.png', 0, NULL, '2018-11-26 05:22:04', NULL),
(56, 'resources/assets/images/category_images/1543252958.chevrolet.png', 'resources/assets/images/category_icons/1543252958.chevrolet.png', 0, NULL, '2018-11-26 05:22:38', NULL),
(57, 'resources/assets/images/category_images/1543253011.volkswagen.png', 'resources/assets/images/category_icons/1543253011.volkswagen.png', 0, NULL, '2018-11-26 05:23:31', NULL),
(58, 'resources/assets/images/category_images/1543253039.fiat.png', 'resources/assets/images/category_icons/1543253039.fiat.png', 0, NULL, '2018-11-26 05:23:59', NULL),
(59, 'resources/assets/images/category_images/1543253103.kia.png', 'resources/assets/images/category_icons/1543253103.kia.png', 0, NULL, '2018-11-26 05:25:03', NULL),
(60, 'resources/assets/images/category_images/1543253139.LADA.png', 'resources/assets/images/category_icons/1543253139.LADA.png', 0, NULL, '2018-11-26 05:25:39', NULL),
(61, 'resources/assets/images/category_images/1543253166.mazda.png', 'resources/assets/images/category_icons/1543253166.mazda.png', 0, NULL, '2018-11-26 05:26:06', NULL),
(62, 'resources/assets/images/category_images/1543253192.mitsubishi.png', 'resources/assets/images/category_icons/1543253192.mitsubishi.png', 0, NULL, '2018-11-26 05:26:32', NULL),
(63, 'resources/assets/images/category_images/1543253220.nissan.png', 'resources/assets/images/category_icons/1543253353.nissan.png', 0, NULL, '2018-11-26 05:27:00', '2018-11-26 05:29:13'),
(64, 'resources/assets/images/category_images/1543253248.Honda.jpg', 'resources/assets/images/category_icons/1543253248.Honda.jpg', 0, NULL, '2018-11-26 05:27:28', NULL),
(65, 'resources/assets/images/category_images/1543253275.hyundai.png', 'resources/assets/images/category_icons/1543253275.hyundai.png', 0, NULL, '2018-11-26 05:27:55', NULL),
(66, 'resources/assets/images/category_images/1543746394.kisspng-2016-toyota-prius-2017-toyota-prius-prime-2018-toy-toyota-5ab5515a6a4b90.2234119915218322824354.jpg', 'resources/assets/images/category_icons/1543746158.toyota.png', 35, NULL, '2018-12-02 10:21:32', '2018-12-02 10:26:43'),
(67, 'resources/assets/images/category_images/1543746349.kisspng-toyota-tacoma-2018-toyota-tundra-pickup-truck-car-5b0b30eb1ff0d6.8253287815274600751308.jpg', 'resources/assets/images/category_icons/1543746349.toyota.png', 35, NULL, '2018-12-02 10:25:49', NULL),
(68, 'resources/assets/images/category_images/1543746482.kisspng-2018-toyota-yaris-le-subcompact-car-hatchback-5ae8030d3fc038.6851886015251545732611.jpg', 'resources/assets/images/category_icons/1543746482.toyota.png', 35, NULL, '2018-12-02 10:28:02', NULL),
(69, 'resources/assets/images/category_images/1543746542.kisspng-2018-toyota-camry-le-mid-size-car-toyota-crown-2018-5ac43433215926.1176424315228078591366.jpg', 'resources/assets/images/category_icons/1543746542.toyota.png', 35, NULL, '2018-12-02 10:29:02', '2019-01-09 06:54:00'),
(70, 'resources/assets/images/category_images/1543754904.2015_bmw_x1-pic-8461595823983970307-1600x1200.jpeg', 'resources/assets/images/category_icons/1543754904.bmw.png', 41, NULL, '2018-12-02 12:48:24', '2019-01-09 06:53:42'),
(71, 'resources/assets/images/category_images/1546003147.BMW-3-F30LCI-Sedan-2015-1-(10).jpg', 'resources/assets/images/category_icons/1546003147.1543252225.bmw.png', 41, NULL, '2018-12-28 01:19:07', NULL),
(72, 'resources/assets/images/category_images/1546003347.f95ef294b2bd4836a860eb4bf18dae9b.jpg', 'resources/assets/images/category_icons/1546003347.1543252225.bmw.png', 41, NULL, '2018-12-28 01:22:27', '2018-12-28 01:32:09'),
(73, 'resources/assets/images/category_images/1546004386.1164a5688f451dfb7dab66737d362d62x.png', 'resources/assets/images/category_icons/1546004386.1543252225.bmw.png', 41, NULL, '2018-12-28 01:39:46', NULL),
(74, 'resources/assets/images/category_images/1546004471.2018-bmw-5-series-540i-sport-line-sedan-side-view.png', 'resources/assets/images/category_icons/1546004471.1543252225.bmw.png', 41, NULL, '2018-12-28 01:41:11', NULL),
(75, 'resources/assets/images/category_images/1546004646.BMW-740Li-4.jpg', 'resources/assets/images/category_icons/1546004646.1543252225.bmw.png', 41, NULL, '2018-12-28 01:44:06', NULL),
(76, 'resources/assets/images/category_images/1546004766.BMW_ALPINA_XD3_BITURBO_04_CarConfigurator.png', 'resources/assets/images/category_icons/1546004766.1543252225.bmw.png', 41, NULL, '2018-12-28 01:46:06', NULL),
(77, 'resources/assets/images/category_images/1546004859.45eda3a79b85ef04e713f612a0a4640dx.png', 'resources/assets/images/category_icons/1546004859.1543252225.bmw.png', 41, NULL, '2018-12-28 01:47:39', NULL),
(78, 'resources/assets/images/category_images/1546007909.cc_2018BMS260002_1280_300.png', 'resources/assets/images/category_icons/1546007828.1543252225.bmw.png', 41, NULL, '2018-12-28 02:37:08', '2018-12-28 02:38:29'),
(79, 'resources/assets/images/category_images/1546008032.bmw-x5-xdrive45e-i-performance-2018-phev-01.png', 'resources/assets/images/category_icons/1546008032.1543252225.bmw.png', 41, NULL, '2018-12-28 02:40:32', NULL),
(80, 'resources/assets/images/category_images/1546350940.mercedes_logos_PNG18.png', 'resources/assets/images/category_icons/1546350940.mercedes_logos_PNG18.png', 0, NULL, '2019-01-01 01:55:40', NULL),
(81, 'resources/assets/images/category_images/1546350973.mercedes_logos_PNG18.png', 'resources/assets/images/category_icons/1546350973.mercedes_logos_PNG18.png', 80, NULL, '2019-01-01 01:56:13', NULL),
(82, 'resources/assets/images/category_images/1546351009.mercedes_logos_PNG18.png', 'resources/assets/images/category_icons/1546351009.mercedes_logos_PNG18.png', 80, NULL, '2019-01-01 01:56:49', NULL),
(83, 'resources/assets/images/category_images/1546351041.mercedes_logos_PNG18.png', 'resources/assets/images/category_icons/1546351041.mercedes_logos_PNG18.png', 80, NULL, '2019-01-01 01:57:21', NULL),
(84, 'resources/assets/images/category_images/1546351082.mercedes_logos_PNG18.png', 'resources/assets/images/category_icons/1546351082.mercedes_logos_PNG18.png', 80, NULL, '2019-01-01 01:58:02', '2019-01-01 01:58:13'),
(85, 'resources/assets/images/category_images/1546351117.mercedes_logos_PNG18.png', 'resources/assets/images/category_icons/1546351117.mercedes_logos_PNG18.png', 80, NULL, '2019-01-01 01:58:37', NULL),
(86, 'resources/assets/images/category_images/1546351145.mercedes_logos_PNG18.png', 'resources/assets/images/category_icons/1546351145.mercedes_logos_PNG18.png', 80, NULL, '2019-01-01 01:59:05', NULL),
(87, 'resources/assets/images/category_images/1546351177.mercedes_logos_PNG18.png', 'resources/assets/images/category_icons/1546351177.mercedes_logos_PNG18.png', 80, NULL, '2019-01-01 01:59:37', NULL),
(88, 'resources/assets/images/category_images/1554584001.87962_1511704119 (1).png', '', 42, NULL, '2019-04-06 08:53:21', NULL),
(89, 'resources/assets/images/category_images/1554825486.2018_9_26_15_13_22_688.jpg', 'resources/assets/images/category_icons/1554825486.2018_9_26_15_13_22_688.jpg', 35, NULL, '2019-04-09 03:58:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories_description`
--

CREATE TABLE `categories_description` (
  `categories_description_id` int(100) NOT NULL,
  `categories_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `categories_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories_description`
--

INSERT INTO `categories_description` (`categories_description_id`, `categories_id`, `language_id`, `categories_name`) VALUES
(89, 33, 1, 'ايكو سبورت'),
(90, 34, 1, 'فوكاس سيدان'),
(91, 35, 1, 'تويوتا'),
(92, 36, 1, 'دى اف اس كاى'),
(93, 37, 1, 'ام جى'),
(94, 38, 1, 'بايك'),
(95, 39, 1, 'بروتون'),
(96, 40, 1, 'بريليانس'),
(97, 41, 1, 'بى ام دابليو'),
(98, 42, 1, 'بى واى دى'),
(99, 43, 1, 'بيجو'),
(100, 44, 1, 'جاك'),
(101, 45, 1, 'جيب'),
(102, 46, 1, 'جيلى'),
(103, 47, 1, 'رينو'),
(104, 48, 1, 'زوتى'),
(105, 49, 1, 'سانج يونج'),
(106, 50, 1, 'سكودا'),
(107, 51, 1, 'سوزوكى'),
(108, 52, 1, 'سيات'),
(109, 53, 1, 'شانجى'),
(110, 54, 1, 'شنجان'),
(111, 55, 1, 'شيرى'),
(112, 56, 1, 'شيفروليه'),
(113, 57, 1, 'فولكس فاجن'),
(114, 58, 1, 'فيات'),
(115, 59, 1, 'كيا'),
(116, 60, 1, 'لادا'),
(117, 61, 1, 'ماذدا'),
(118, 62, 1, 'ميتسوبيشى'),
(119, 63, 1, 'نيسان'),
(120, 64, 1, 'هوندا'),
(121, 65, 1, 'هيونداى'),
(122, 66, 1, 'بريوس'),
(123, 67, 1, 'تاكوما'),
(124, 68, 1, 'ياريس'),
(125, 69, 1, 'Camry'),
(126, 70, 1, 'X1'),
(127, 71, 1, '318i'),
(128, 72, 1, '320i'),
(129, 73, 1, '340i'),
(130, 74, 1, '520i'),
(131, 75, 1, '740Li'),
(132, 76, 1, 'X2'),
(133, 77, 1, 'X3'),
(134, 78, 1, 'X4      '),
(135, 79, 1, 'X5'),
(136, 80, 1, 'مرسيديس'),
(137, 81, 1, 'C180'),
(138, 82, 1, 'E 180'),
(139, 83, 1, 'CLA 180'),
(140, 84, 1, 'E300'),
(141, 85, 1, '  GLA 200  '),
(142, 86, 1, 'GLC 250'),
(143, 87, 1, 'GLC 300'),
(144, 88, 1, 'f3'),
(145, 89, 1, 'راش');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countries_id` int(11) NOT NULL,
  `countries_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `countries_iso_code_2` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `countries_iso_code_3` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `address_format_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `countries_name`, `countries_iso_code_2`, `countries_iso_code_3`, `address_format_id`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 1),
(2, 'Albania', 'AL', 'ALB', 1),
(3, 'Algeria', 'DZ', 'DZA', 1),
(4, 'American Samoa', 'AS', 'ASM', 1),
(5, 'Andorra', 'AD', 'AND', 1),
(6, 'Angola', 'AO', 'AGO', 1),
(7, 'Anguilla', 'AI', 'AIA', 1),
(8, 'Antarctica', 'AQ', 'ATA', 1),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 1),
(10, 'Argentina', 'AR', 'ARG', 1),
(11, 'Armenia', 'AM', 'ARM', 1),
(12, 'Aruba', 'AW', 'ABW', 1),
(13, 'Australia', 'AU', 'AUS', 1),
(14, 'Austria', 'AT', 'AUT', 5),
(15, 'Azerbaijan', 'AZ', 'AZE', 1),
(16, 'Bahamas', 'BS', 'BHS', 1),
(17, 'Bahrain', 'BH', 'BHR', 1),
(18, 'Bangladesh', 'BD', 'BGD', 1),
(19, 'Barbados', 'BB', 'BRB', 1),
(20, 'Belarus', 'BY', 'BLR', 1),
(21, 'Belgium', 'BE', 'BEL', 1),
(22, 'Belize', 'BZ', 'BLZ', 1),
(23, 'Benin', 'BJ', 'BEN', 1),
(24, 'Bermuda', 'BM', 'BMU', 1),
(25, 'Bhutan', 'BT', 'BTN', 1),
(26, 'Bolivia', 'BO', 'BOL', 1),
(27, 'Bosnia and Herzegowina', 'BA', 'BIH', 1),
(28, 'Botswana', 'BW', 'BWA', 1),
(29, 'Bouvet Island', 'BV', 'BVT', 1),
(30, 'Brazil', 'BR', 'BRA', 1),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 1),
(32, 'Brunei Darussalam', 'BN', 'BRN', 1),
(33, 'Bulgaria', 'BG', 'BGR', 1),
(34, 'Burkina Faso', 'BF', 'BFA', 1),
(35, 'Burundi', 'BI', 'BDI', 1),
(36, 'Cambodia', 'KH', 'KHM', 1),
(37, 'Cameroon', 'CM', 'CMR', 1),
(38, 'Canada', 'CA', 'CAN', 1),
(39, 'Cape Verde', 'CV', 'CPV', 1),
(40, 'Cayman Islands', 'KY', 'CYM', 1),
(41, 'Central African Republic', 'CF', 'CAF', 1),
(42, 'Chad', 'TD', 'TCD', 1),
(43, 'Chile', 'CL', 'CHL', 1),
(44, 'China', 'CN', 'CHN', 1),
(45, 'Christmas Island', 'CX', 'CXR', 1),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', 1),
(47, 'Colombia', 'CO', 'COL', 1),
(48, 'Comoros', 'KM', 'COM', 1),
(49, 'Congo', 'CG', 'COG', 1),
(50, 'Cook Islands', 'CK', 'COK', 1),
(51, 'Costa Rica', 'CR', 'CRI', 1),
(52, 'Cote D\'Ivoire', 'CI', 'CIV', 1),
(53, 'Croatia', 'HR', 'HRV', 1),
(54, 'Cuba', 'CU', 'CUB', 1),
(55, 'Cyprus', 'CY', 'CYP', 1),
(56, 'Czech Republic', 'CZ', 'CZE', 1),
(57, 'Denmark', 'DK', 'DNK', 1),
(58, 'Djibouti', 'DJ', 'DJI', 1),
(59, 'Dominica', 'DM', 'DMA', 1),
(60, 'Dominican Republic', 'DO', 'DOM', 1),
(61, 'East Timor', 'TP', 'TMP', 1),
(62, 'Ecuador', 'EC', 'ECU', 1),
(63, 'Egypt', 'EG', 'EGY', 1),
(64, 'El Salvador', 'SV', 'SLV', 1),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 1),
(66, 'Eritrea', 'ER', 'ERI', 1),
(67, 'Estonia', 'EE', 'EST', 1),
(68, 'Ethiopia', 'ET', 'ETH', 1),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 1),
(70, 'Faroe Islands', 'FO', 'FRO', 1),
(71, 'Fiji', 'FJ', 'FJI', 1),
(72, 'Finland', 'FI', 'FIN', 1),
(73, 'France', 'FR', 'FRA', 1),
(74, 'France, Metropolitan', 'FX', 'FXX', 1),
(75, 'French Guiana', 'GF', 'GUF', 1),
(76, 'French Polynesia', 'PF', 'PYF', 1),
(77, 'French Southern Territories', 'TF', 'ATF', 1),
(78, 'Gabon', 'GA', 'GAB', 1),
(79, 'Gambia', 'GM', 'GMB', 1),
(80, 'Georgia', 'GE', 'GEO', 1),
(81, 'Germany', 'DE', 'DEU', 5),
(82, 'Ghana', 'GH', 'GHA', 1),
(83, 'Gibraltar', 'GI', 'GIB', 1),
(84, 'Greece', 'GR', 'GRC', 1),
(85, 'Greenland', 'GL', 'GRL', 1),
(86, 'Grenada', 'GD', 'GRD', 1),
(87, 'Guadeloupe', 'GP', 'GLP', 1),
(88, 'Guam', 'GU', 'GUM', 1),
(89, 'Guatemala', 'GT', 'GTM', 1),
(90, 'Guinea', 'GN', 'GIN', 1),
(91, 'Guinea-bissau', 'GW', 'GNB', 1),
(92, 'Guyana', 'GY', 'GUY', 1),
(93, 'Haiti', 'HT', 'HTI', 1),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD', 1),
(95, 'Honduras', 'HN', 'HND', 1),
(96, 'Hong Kong', 'HK', 'HKG', 1),
(97, 'Hungary', 'HU', 'HUN', 1),
(98, 'Iceland', 'IS', 'ISL', 1),
(99, 'India', 'IN', 'IND', 1),
(100, 'Indonesia', 'ID', 'IDN', 1),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', 1),
(102, 'Iraq', 'IQ', 'IRQ', 1),
(103, 'Ireland', 'IE', 'IRL', 1),
(104, 'Israel', 'IL', 'ISR', 1),
(105, 'Italy', 'IT', 'ITA', 1),
(106, 'Jamaica', 'JM', 'JAM', 1),
(107, 'Japan', 'JP', 'JPN', 1),
(108, 'Jordan', 'JO', 'JOR', 1),
(109, 'Kazakhstan', 'KZ', 'KAZ', 1),
(110, 'Kenya', 'KE', 'KEN', 1),
(111, 'Kiribati', 'KI', 'KIR', 1),
(112, 'Korea, Democratic People\'s Republic of', 'KP', 'PRK', 1),
(113, 'Korea, Republic of', 'KR', 'KOR', 1),
(114, 'Kuwait', 'KW', 'KWT', 1),
(115, 'Kyrgyzstan', 'KG', 'KGZ', 1),
(116, 'Lao People\'s Democratic Republic', 'LA', 'LAO', 1),
(117, 'Latvia', 'LV', 'LVA', 1),
(118, 'Lebanon', 'LB', 'LBN', 1),
(119, 'Lesotho', 'LS', 'LSO', 1),
(120, 'Liberia', 'LR', 'LBR', 1),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 1),
(122, 'Liechtenstein', 'LI', 'LIE', 1),
(123, 'Lithuania', 'LT', 'LTU', 1),
(124, 'Luxembourg', 'LU', 'LUX', 1),
(125, 'Macau', 'MO', 'MAC', 1),
(126, 'Macedonia, The Former Yugoslav Republic of', 'MK', 'MKD', 1),
(127, 'Madagascar', 'MG', 'MDG', 1),
(128, 'Malawi', 'MW', 'MWI', 1),
(129, 'Malaysia', 'MY', 'MYS', 1),
(130, 'Maldives', 'MV', 'MDV', 1),
(131, 'Mali', 'ML', 'MLI', 1),
(132, 'Malta', 'MT', 'MLT', 1),
(133, 'Marshall Islands', 'MH', 'MHL', 1),
(134, 'Martinique', 'MQ', 'MTQ', 1),
(135, 'Mauritania', 'MR', 'MRT', 1),
(136, 'Mauritius', 'MU', 'MUS', 1),
(137, 'Mayotte', 'YT', 'MYT', 1),
(138, 'Mexico', 'MX', 'MEX', 1),
(139, 'Micronesia, Federated States of', 'FM', 'FSM', 1),
(140, 'Moldova, Republic of', 'MD', 'MDA', 1),
(141, 'Monaco', 'MC', 'MCO', 1),
(142, 'Mongolia', 'MN', 'MNG', 1),
(143, 'Montserrat', 'MS', 'MSR', 1),
(144, 'Morocco', 'MA', 'MAR', 1),
(145, 'Mozambique', 'MZ', 'MOZ', 1),
(146, 'Myanmar', 'MM', 'MMR', 1),
(147, 'Namibia', 'NA', 'NAM', 1),
(148, 'Nauru', 'NR', 'NRU', 1),
(149, 'Nepal', 'NP', 'NPL', 1),
(150, 'Netherlands', 'NL', 'NLD', 1),
(151, 'Netherlands Antilles', 'AN', 'ANT', 1),
(152, 'New Caledonia', 'NC', 'NCL', 1),
(153, 'New Zealand', 'NZ', 'NZL', 1),
(154, 'Nicaragua', 'NI', 'NIC', 1),
(155, 'Niger', 'NE', 'NER', 1),
(156, 'Nigeria', 'NG', 'NGA', 1),
(157, 'Niue', 'NU', 'NIU', 1),
(158, 'Norfolk Island', 'NF', 'NFK', 1),
(159, 'Northern Mariana Islands', 'MP', 'MNP', 1),
(160, 'Norway', 'NO', 'NOR', 1),
(161, 'Oman', 'OM', 'OMN', 1),
(162, 'Pakistan', 'PK', 'PAK', 1),
(163, 'Palau', 'PW', 'PLW', 1),
(164, 'Panama', 'PA', 'PAN', 1),
(165, 'Papua New Guinea', 'PG', 'PNG', 1),
(166, 'Paraguay', 'PY', 'PRY', 1),
(167, 'Peru', 'PE', 'PER', 1),
(168, 'Philippines', 'PH', 'PHL', 1),
(169, 'Pitcairn', 'PN', 'PCN', 1),
(170, 'Poland', 'PL', 'POL', 1),
(171, 'Portugal', 'PT', 'PRT', 1),
(172, 'Puerto Rico', 'PR', 'PRI', 1),
(173, 'Qatar', 'QA', 'QAT', 1),
(174, 'Reunion', 'RE', 'REU', 1),
(175, 'Romania', 'RO', 'ROM', 1),
(176, 'Russian Federation', 'RU', 'RUS', 1),
(177, 'Rwanda', 'RW', 'RWA', 1),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA', 1),
(179, 'Saint Lucia', 'LC', 'LCA', 1),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1),
(181, 'Samoa', 'WS', 'WSM', 1),
(182, 'San Marino', 'SM', 'SMR', 1),
(183, 'Sao Tome and Principe', 'ST', 'STP', 1),
(184, 'Saudi Arabia', 'SA', 'SAU', 1),
(185, 'Senegal', 'SN', 'SEN', 1),
(186, 'Seychelles', 'SC', 'SYC', 1),
(187, 'Sierra Leone', 'SL', 'SLE', 1),
(188, 'Singapore', 'SG', 'SGP', 4),
(189, 'Slovakia (Slovak Republic)', 'SK', 'SVK', 1),
(190, 'Slovenia', 'SI', 'SVN', 1),
(191, 'Solomon Islands', 'SB', 'SLB', 1),
(192, 'Somalia', 'SO', 'SOM', 1),
(193, 'South Africa', 'ZA', 'ZAF', 1),
(194, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 1),
(195, 'Spain', 'ES', 'ESP', 3),
(196, 'Sri Lanka', 'LK', 'LKA', 1),
(197, 'St. Helena', 'SH', 'SHN', 1),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM', 1),
(199, 'Sudan', 'SD', 'SDN', 1),
(200, 'Suriname', 'SR', 'SUR', 1),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', 1),
(202, 'Swaziland', 'SZ', 'SWZ', 1),
(203, 'Sweden', 'SE', 'SWE', 1),
(204, 'Switzerland', 'CH', 'CHE', 1),
(205, 'Syrian Arab Republic', 'SY', 'SYR', 1),
(206, 'Taiwan', 'TW', 'TWN', 1),
(207, 'Tajikistan', 'TJ', 'TJK', 1),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA', 1),
(209, 'Thailand', 'TH', 'THA', 1),
(210, 'Togo', 'TG', 'TGO', 1),
(211, 'Tokelau', 'TK', 'TKL', 1),
(212, 'Tonga', 'TO', 'TON', 1),
(213, 'Trinidad and Tobago', 'TT', 'TTO', 1),
(214, 'Tunisia', 'TN', 'TUN', 1),
(215, 'Turkey', 'TR', 'TUR', 1),
(216, 'Turkmenistan', 'TM', 'TKM', 1),
(217, 'Turks and Caicos Islands', 'TC', 'TCA', 1),
(218, 'Tuvalu', 'TV', 'TUV', 1),
(219, 'Uganda', 'UG', 'UGA', 1),
(220, 'Ukraine', 'UA', 'UKR', 1),
(221, 'United Arab Emirates', 'AE', 'ARE', 1),
(222, 'United Kingdom', 'GB', 'GBR', 1),
(223, 'United States', 'US', 'USA', 2),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI', 1),
(225, 'Uruguay', 'UY', 'URY', 1),
(226, 'Uzbekistan', 'UZ', 'UZB', 1),
(227, 'Vanuatu', 'VU', 'VUT', 1),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT', 1),
(229, 'Venezuela', 'VE', 'VEN', 1),
(230, 'Viet Nam', 'VN', 'VNM', 1),
(231, 'Virgin Islands (British)', 'VG', 'VGB', 1),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', 1),
(234, 'Western Sahara', 'EH', 'ESH', 1),
(235, 'Yemen', 'YE', 'YEM', 1),
(236, 'Yugoslavia', 'YU', 'YUG', 1),
(237, 'Zaire', 'ZR', 'ZAR', 1),
(238, 'Zambia', 'ZM', 'ZMB', 1),
(239, 'Zimbabwe', 'ZW', 'ZWE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupans_id` int(100) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `discount_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Options: fixed_cart, percent, fixed_product and percent_product. Default: fixed_cart.',
  `amount` int(11) NOT NULL,
  `expiry_date` datetime NOT NULL,
  `usage_count` int(100) DEFAULT '0',
  `individual_use` tinyint(1) NOT NULL DEFAULT '0',
  `product_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exclude_product_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usage_limit` int(100) DEFAULT NULL,
  `usage_limit_per_user` int(100) DEFAULT NULL,
  `limit_usage_to_x_items` int(100) DEFAULT NULL,
  `free_shipping` tinyint(1) NOT NULL DEFAULT '0',
  `product_categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excluded_product_categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exclude_sale_items` tinyint(1) NOT NULL DEFAULT '0',
  `minimum_amount` decimal(10,2) DEFAULT NULL,
  `maximum_amount` decimal(10,2) DEFAULT NULL,
  `email_restrictions` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `used_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupans_id`, `code`, `date_created`, `date_modified`, `description`, `discount_type`, `amount`, `expiry_date`, `usage_count`, `individual_use`, `product_ids`, `exclude_product_ids`, `usage_limit`, `usage_limit_per_user`, `limit_usage_to_x_items`, `free_shipping`, `product_categories`, `excluded_product_categories`, `exclude_sale_items`, `minimum_amount`, `maximum_amount`, `email_restrictions`, `used_by`) VALUES
(3, 'PercentProduct_10', '2017-12-11 12:19:37', NULL, 'For All Products', 'percent_product', 10, '2030-01-01 00:00:00', 0, 0, '', '', 0, 0, NULL, 0, '', '', 0, '0.00', '0.00', '', ''),
(4, 'FixedProduct_10', '2017-12-11 12:20:18', NULL, 'For All Products', 'fixed_product', 10, '2030-01-01 00:00:00', 0, 0, '', '', 0, 0, NULL, 0, '', '', 0, '0.00', '0.00', '', ''),
(5, 'PercentCart_10', '2017-12-11 12:20:57', NULL, 'For All Products', 'percent', 10, '2030-01-01 00:00:00', 0, 0, '', '', 0, 0, NULL, 0, '', '', 0, '0.00', '0.00', '', ''),
(6, 'FixedCart_10', '2017-12-11 12:21:20', NULL, 'For All Products', 'fixed_cart', 10, '2030-01-01 00:00:00', 0, 0, '', '', 0, 0, NULL, 0, '', '', 0, '0.00', '0.00', '', ''),
(7, 'SingleCoupon_50', '2017-12-11 12:22:08', NULL, 'Individual Use', 'fixed_cart', 50, '2030-01-01 00:00:00', 0, 1, '', '', 0, 0, NULL, 0, '', '', 0, '0.00', '0.00', '', ''),
(8, 'FreeShipping_20', '2017-12-11 12:22:46', NULL, 'Free Shipping', 'fixed_cart', 20, '2030-01-01 00:00:00', 0, 0, '', '', 0, 0, NULL, 1, '', '', 0, '0.00', '0.00', '', ''),
(9, 'ExcludeSale_15', '2017-12-11 12:23:28', NULL, 'Not for Sale Items', 'fixed_cart', 15, '2030-01-01 00:00:00', 0, 0, '', '', 0, 0, NULL, 0, '', '', 1, '0.00', '0.00', '', ''),
(10, 'Exclude_Shoes_25', '2017-12-11 12:25:16', NULL, 'Not For Men Shoes', 'fixed_cart', 25, '2030-01-01 00:00:00', 0, 0, '', '', 0, 0, NULL, 0, '', '10,10,10', 0, '0.00', '0.00', '', ''),
(11, 'Polo_Shirts_10', '2017-12-11 12:26:14', NULL, 'For Men Polo Shirts', 'percent_product', 10, '2030-01-01 00:00:00', 0, 0, '', '', 0, 0, NULL, 0, '7,7,7', '', 0, '0.00', '0.00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `currencies_id` int(11) NOT NULL,
  `title` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `code` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `symbol_left` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `symbol_right` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `decimal_point` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thousands_point` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `decimal_places` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` float(13,8) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`currencies_id`, `title`, `code`, `symbol_left`, `symbol_right`, `decimal_point`, `thousands_point`, `decimal_places`, `value`, `last_updated`) VALUES
(1, 'U.S. Dollar', 'USD', '$', NULL, '.', '.', '2', NULL, '2017-02-09 00:00:00'),
(2, 'Euro', 'EUR', NULL, '€', '.', '.', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` int(11) NOT NULL,
  `customers_gender` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `customers_firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_default_address_id` int(11) DEFAULT NULL,
  `customers_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `customers_newsletter` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `fb_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_picture` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(100) NOT NULL,
  `updated_at` int(100) NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_basket`
--

CREATE TABLE `customers_basket` (
  `customers_basket_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `products_id` text COLLATE utf8_unicode_ci NOT NULL,
  `customers_basket_quantity` int(2) NOT NULL,
  `final_price` decimal(15,4) DEFAULT NULL,
  `customers_basket_date_added` char(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_order` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_basket_attributes`
--

CREATE TABLE `customers_basket_attributes` (
  `customers_basket_attributes_id` int(11) NOT NULL,
  `customers_basket_id` int(100) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `products_id` text COLLATE utf8_unicode_ci NOT NULL,
  `products_options_id` int(11) NOT NULL,
  `products_options_values_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_info`
--

CREATE TABLE `customers_info` (
  `customers_info_id` int(11) NOT NULL,
  `customers_info_date_of_last_logon` datetime DEFAULT NULL,
  `customers_info_number_of_logons` int(5) DEFAULT NULL,
  `customers_info_date_account_created` datetime DEFAULT NULL,
  `customers_info_date_account_last_modified` datetime DEFAULT NULL,
  `global_product_notifications` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(100) NOT NULL,
  `device_id` text COLLATE utf8_unicode_ci NOT NULL,
  `customers_id` int(100) NOT NULL DEFAULT '0',
  `device_type` text COLLATE utf8_unicode_ci NOT NULL,
  `register_date` int(100) NOT NULL DEFAULT '0',
  `update_date` int(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `isDesktop` tinyint(1) NOT NULL DEFAULT '0',
  `oneSignalId` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isEnableMobile` tinyint(1) NOT NULL DEFAULT '1',
  `isEnableDesktop` tinyint(1) NOT NULL DEFAULT '1',
  `ram` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `processor` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `device_os` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `device_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_notify` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fedex_shipping`
--

CREATE TABLE `fedex_shipping` (
  `fedex_id` int(100) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parcel_height` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parcel_width` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_line_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_line_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_of_package` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fedex_shipping`
--

INSERT INTO `fedex_shipping` (`fedex_id`, `title`, `user_name`, `password`, `parcel_height`, `parcel_width`, `person_name`, `company_name`, `phone_number`, `address_line_1`, `address_line_2`, `country`, `state`, `post_code`, `city`, `no_of_package`) VALUES
(1, 'FedEx', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `flate_rate`
--

CREATE TABLE `flate_rate` (
  `id` int(100) NOT NULL,
  `flate_rate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flate_rate`
--

INSERT INTO `flate_rate` (`id`, `flate_rate`, `currency`) VALUES
(1, '10', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `geo_zones`
--

CREATE TABLE `geo_zones` (
  `geo_zone_id` int(11) NOT NULL,
  `geo_zone_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `geo_zone_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `geo_zones`
--

INSERT INTO `geo_zones` (`geo_zone_id`, `geo_zone_name`, `geo_zone_description`, `last_modified`, `date_added`) VALUES
(1, 'Florida', 'Florida local sales tax zone', '2017-01-10 00:00:00', '2017-01-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hula_our_infos`
--

CREATE TABLE `hula_our_infos` (
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kest` text CHARACTER SET utf8 NOT NULL,
  `taghtya` text CHARACTER SET utf8 NOT NULL,
  `nesbat_ameel` text CHARACTER SET utf8 NOT NULL,
  `madanya` text CHARACTER SET utf8 NOT NULL,
  `destruction` text CHARACTER SET utf8 NOT NULL,
  `ehlak` text CHARACTER SET utf8 NOT NULL,
  `syana` text CHARACTER SET utf8 NOT NULL,
  `aksa` text CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sarf` text CHARACTER SET utf8,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `name`, `kest`, `taghtya`, `nesbat_ameel`, `madanya`, `destruction`, `ehlak`, `syana`, `aksa`, `address`, `image`, `sarf`, `created_at`) VALUES
(6, 'بيت التأمين المصرى السعودى', 'نسبة  3.75% من قيمة السيارة غير شامل الدمغات و بدون تحمل', 'حريق + سطو + حادث', 'يتحمل 3% ب 4 جنيه لكل 1000 جنيه', 'بحد اقصى 10.000 جنيه', 'تتراوح ما بين 5% الى 7% سنويا', '50%', 'نسبة 10% من قيمة الفاتورة', '5000 جنيه', 'القاهرة 38 شارع عباس العقاد  26717081', 'resources/assets/images/news_images/1546880950.8-3.png', 'بدفع العميل قيمة الفاتورة ثم تدفع الشركة للعميل قيمة الفاتورة', '2019-01-07 03:09:10'),
(7, 'قناة السويس للتأمين', 'نسبة  3.75% من قيمة السيارة غير شامل الدمغات و بدون تحمل', 'حريق + سطو + حادث', 'يتحمل 3% ب 4 جنيه لكل 1000 جنيه', 'بحد اقصى 10.000 جنيه', 'تتراوح ما بين 5% الى 7% سنويا', '50%', 'نسبة 10% من قيمة الفاتورة', '5000 جنيه', 'الجيزة 31  شارع محمد كامل مرسى  37601055', 'resources/assets/images/news_images/1546881292.736905_0.jpg', 'بدفع العميل قيمة الفاتورة ثم تدفع الشركة للعميل قيمة الفاتورة', '2019-01-07 03:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `label_id` int(100) NOT NULL,
  `label_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`label_id`, `label_name`) VALUES
(2, 'Creating an account means you’re okay with shopify\'s Terms of Service, Privacy Policy'),
(1031, 'Home'),
(1, 'I\'ve forgotten my password?'),
(1030, 'Menu'),
(1029, 'Clear'),
(1028, 'Apply'),
(1027, 'Close'),
(1026, 'Price Range'),
(1025, 'Filters'),
(1024, 'My Wish List'),
(1023, 'Log Out'),
(1022, 'Please login or create an account for free'),
(1021, 'Login & Register'),
(1020, 'Save Address'),
(1018, 'State'),
(1019, 'Update Address'),
(1017, 'Post code'),
(1016, 'City'),
(1015, 'Zone'),
(1014, 'other'),
(1013, 'Country'),
(1012, 'Shipping Address'),
(1011, 'Proceed'),
(1010, 'Remove'),
(1008, 'by'),
(1009, 'View'),
(1007, 'Quantity'),
(1006, 'Price'),
(1005, 'continue shopping'),
(1004, 'Your cart is empty'),
(1003, 'My Cart'),
(1002, 'Continue'),
(1001, 'Error: invalid cvc number!'),
(1000, 'Error: invalid expiry date!'),
(999, 'Error: invalid card number!'),
(998, 'Expiration'),
(997, 'Expiration Date'),
(996, 'Card Number'),
(995, 'Payment'),
(994, 'Order Notes'),
(993, 'Shipping Cost'),
(992, 'Tax'),
(991, 'Products Price'),
(990, 'SubTotal'),
(989, 'Products'),
(988, 'Shipping Method'),
(987, 'Billing Address'),
(986, 'Order'),
(985, 'Next'),
(984, 'Same as Shipping Address'),
(981, 'Billing Info'),
(982, 'Address'),
(983, 'Phone'),
(980, 'Already Memeber?'),
(979, 'Last Name'),
(978, 'First Name'),
(977, 'Create an Account'),
(976, 'Add new Address'),
(975, 'Please add your new shipping address for the futher processing of the your order'),
(969, 'Order Status'),
(970, 'Orders ID'),
(971, 'Product Price'),
(972, 'No. of Products'),
(973, 'Date'),
(974, 'Customer Address'),
(968, 'Customer Orders'),
(967, 'Change Password'),
(966, 'New Password'),
(965, 'Current Password'),
(964, 'Update'),
(963, 'Date of Birth'),
(962, 'Mobile'),
(961, 'My Account'),
(960, 'Likes'),
(959, 'newest'),
(958, 'top seller'),
(957, 'special'),
(956, 'most liked'),
(955, 'Cancel'),
(954, 'Sort Products'),
(953, 'Special Products'),
(952, 'Price : low - high'),
(951, 'Price : high - low'),
(950, 'Z - A'),
(949, 'A - Z'),
(948, 'All'),
(947, 'Explore More'),
(946, 'Note to the buyer'),
(945, 'Coupon'),
(944, 'coupon code'),
(943, 'Coupon Amount'),
(942, 'Coupon Code'),
(941, 'Food Categories'),
(940, 'Recipe of Day'),
(939, 'Top Dishes'),
(938, 'Skip'),
(937, 'Term and Services'),
(936, 'Privacy Policy'),
(935, 'Refund Policy'),
(934, 'Newest'),
(933, 'OUT OF STOCK'),
(932, 'Select Language'),
(931, 'Reset'),
(930, 'Shop'),
(929, 'Settings'),
(928, 'Enter keyword'),
(927, 'News'),
(926, 'Top Sellers'),
(925, 'Go Back'),
(924, 'Word Press Post Detail'),
(923, 'Explore'),
(922, 'Continue Adding'),
(921, 'Your wish List is empty'),
(920, 'Favourite'),
(919, 'Continue Shopping'),
(918, 'My Orders'),
(917, 'Thank you for shopping with us.'),
(916, 'Thank You'),
(915, 'Shipping method'),
(914, 'Sub Categories'),
(913, 'Main Categories'),
(912, 'Search'),
(911, 'Reset Filters'),
(910, 'No Products Found'),
(909, 'OFF'),
(908, 'Techincal details'),
(907, 'Product Description'),
(906, 'ADD TO CART'),
(905, 'Add to Cart'),
(904, 'In Stock'),
(903, 'Out of Stock'),
(902, 'New'),
(901, 'Product Details'),
(900, 'Shipping'),
(899, 'Sub Total'),
(898, 'Total'),
(897, 'Price Detail'),
(896, 'Order Detail'),
(895, 'Got It!'),
(894, 'Skip Intro'),
(893, 'Intro'),
(892, 'REMOVE'),
(891, 'Deals'),
(890, 'All Categories'),
(889, 'Most Liked'),
(888, 'Special Deals'),
(887, 'Top Seller'),
(886, 'Products are available.'),
(885, 'Recently Viewed'),
(884, 'Please connect to the internet'),
(881, 'Contact Us'),
(882, 'Name'),
(883, 'Your Messsage'),
(880, 'Categories'),
(879, 'About Us'),
(878, 'Send'),
(877, 'Forgot Password'),
(876, 'Register'),
(875, 'Password'),
(874, 'Email'),
(873, 'or'),
(872, 'Login with'),
(1033, 'Creating an account means you’re okay with our'),
(1034, 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `label_value`
--

CREATE TABLE `label_value` (
  `label_value_id` int(100) NOT NULL,
  `label_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language_id` int(100) NOT NULL,
  `label_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `label_value`
--

INSERT INTO `label_value` (`label_value_id`, `label_value`, `language_id`, `label_id`) VALUES
(1372, 'Most Liked', 1, 956),
(1371, 'Special', 1, 957),
(1370, 'Top Seller', 1, 958),
(1369, 'Newest ', 1, 959),
(1368, 'Likes', 1, 960),
(1366, 'Mobile', 1, 962),
(1367, 'My Account', 1, 961),
(1365, 'Date of Birth', 1, 963),
(1364, 'Update', 1, 964),
(1355, 'Orders ID', 1, 970),
(1356, 'Product Price', 1, 971),
(1357, 'No. of Products', 1, 972),
(1358, 'Date', 1, 973),
(1359, 'Customer Address', 1, 974),
(1360, 'Customer Orders', 1, 968),
(1361, 'Change Password', 1, 967),
(1362, 'New Password', 1, 966),
(1363, 'Current Password', 1, 965),
(1354, 'Order Status', 1, 969),
(1353, 'Please add your new shipping address for the futher processing of the your order', 1, 975),
(1352, 'Add new Address', 1, 976),
(1351, 'Create an Account', 1, 977),
(1350, 'First Name', 1, 978),
(1349, 'Last Name', 1, 979),
(1348, 'Already Memeber?', 1, 980),
(1341, 'Billing Address', 1, 987),
(1342, 'Order', 1, 986),
(1343, 'Next', 1, 985),
(1344, 'Same as Shipping Address', 1, 984),
(1345, 'Billing Info', 1, 981),
(1346, 'Address', 1, 982),
(1347, 'Phone', 1, 983),
(1339, 'Products', 1, 989),
(1340, 'Shipping Method', 1, 988),
(1334, 'Order Notes', 1, 994),
(1335, 'Shipping Cost', 1, 993),
(1336, 'Tax', 1, 992),
(1337, 'Products Price', 1, 991),
(1338, 'SubTotal', 1, 990),
(1333, 'Payment', 1, 995),
(1332, 'Card Number', 1, 996),
(1331, 'Expiration Date', 1, 997),
(1330, 'Expiration', 1, 998),
(1329, 'Error: invalid card number!', 1, 999),
(1328, 'Error: invalid expiry date!', 1, 1000),
(1327, 'Error: invalid cvc number!', 1, 1001),
(1326, 'Continue', 1, 1002),
(1325, 'My Cart', 1, 1003),
(1324, 'Your cart is empty', 1, 1004),
(1323, 'continue shopping', 1, 1005),
(1322, 'Price', 1, 1006),
(1318, 'Remove', 1, 1010),
(1319, 'by', 1, 1008),
(1320, 'View', 1, 1009),
(1321, 'Quantity', 1, 1007),
(1317, 'Proceed', 1, 1011),
(1315, 'Country', 1, 1013),
(1316, 'Shipping Address', 1, 1012),
(1313, 'Zone', 1, 1015),
(1314, 'other', 1, 1014),
(1311, 'Post code', 1, 1017),
(1312, 'City', 1, 1016),
(1309, 'State', 1, 1018),
(1310, 'Update Address', 1, 1019),
(1307, 'login & Register', 1, 1021),
(1308, 'Save Address', 1, 1020),
(1306, 'Please login or create an account for free', 1, 1022),
(1305, 'Log Out', 1, 1023),
(1304, 'My Wish List', 1, 1024),
(1303, 'Filters', 1, 1025),
(1302, 'Price Range', 1, 1026),
(1301, 'Close', 1, 1027),
(1299, 'Clear', 1, 1029),
(1300, 'Apply', 1, 1028),
(1298, 'Menu', 1, 1030),
(1297, 'Home', 1, 1031),
(1296, 'Einloggen mit', 2, 872),
(1295, 'oder', 2, 873),
(1294, 'Email', 2, 874),
(1293, 'Passwort', 2, 875),
(1292, 'Neu registrieren', 2, 876),
(1291, 'Passwort vergessen', 2, 877),
(1290, 'Senden', 2, 878),
(1289, 'Über uns', 2, 879),
(1288, 'Kategorien', 2, 880),
(1287, 'Deine Nachricht', 2, 883),
(1286, 'Name', 2, 882),
(1285, 'Kontaktiere uns', 2, 881),
(1284, 'Bitte wenden Sie sich an das Internet', 2, 884),
(1280, 'Besondere Angebote', 2, 888),
(1281, 'Oben Verkäufer', 2, 887),
(1282, 'Produkte sind verfügbar.', 2, 886),
(1283, 'zuletzt angesehen', 2, 885),
(1279, 'Am meisten gemocht', 2, 889),
(1273, 'Ich habs!', 2, 895),
(1274, 'Intro überspringen', 2, 894),
(1275, 'Intro', 2, 893),
(1276, 'ENTFERNEN', 2, 892),
(1277, 'Angebote', 2, 891),
(1278, 'Alle Kategorien', 2, 890),
(1271, 'Preis Detail', 2, 897),
(1272, 'Bestelldetails', 2, 896),
(1267, 'Produktdetails', 2, 901),
(1268, 'Versand', 2, 900),
(1269, 'Sub gesamt', 2, 899),
(1270, 'Gesamt', 2, 898),
(1264, 'Auf Lager', 2, 904),
(1265, 'Ausverkauft', 2, 903),
(1266, 'Neu', 2, 902),
(1260, 'Technische Details', 2, 908),
(1261, 'Produktbeschreibung', 2, 907),
(1262, 'in den Warenkorb legen', 2, 906),
(1263, 'in den Warenkorb legen', 2, 905),
(1259, 'AUS', 2, 909),
(1256, 'Suche', 2, 912),
(1257, 'Filter zurücksetzen', 2, 911),
(1258, 'Keine Produkte gefunden', 2, 910),
(1255, 'Hauptkategorien', 2, 913),
(1254, 'Unterkategorien', 2, 914),
(1253, 'Versandart', 2, 915),
(1252, 'Danke', 2, 916),
(1251, 'Danke für ihren Einkauf.', 2, 917),
(1250, 'Meine Befehle', 2, 918),
(1248, 'Favorit', 2, 920),
(1249, 'Mit dem Einkaufen fortfahren', 2, 919),
(1247, 'Deine Wunschliste ist leer', 2, 921),
(1245, 'Erforschen', 2, 923),
(1246, 'Weiter hinzufügen', 2, 922),
(1244, 'Word Press Post Detail', 2, 924),
(1242, 'Meist gekauft', 2, 926),
(1243, 'Geh zurück', 2, 925),
(1240, 'Schlüsselwort eingeben', 2, 928),
(1241, 'Nachrichten', 2, 927),
(1239, 'instellingen', 2, 929),
(1235, 'NIET OP VOORRAAD', 2, 933),
(1237, 'Reset', 2, 931),
(1238, 'Winkel', 2, 930),
(1236, 'Selecteer Taal', 2, 932),
(1234, 'Nieuwste', 2, 934),
(1233, 'Rückgaberecht', 2, 935),
(1232, 'Datenschutz-Bestimmungen', 2, 936),
(1230, 'Overspringen', 2, 938),
(1231, 'Term und Dienstleistungen', 2, 937),
(1228, 'Recept van de dag', 2, 940),
(1229, 'Topgerechten', 2, 939),
(1227, 'Voedselcategorieën', 2, 941),
(1225, 'Coupon Bedrag', 2, 943),
(1226, 'Coupon Code', 2, 942),
(1223, 'Coupon', 2, 945),
(1224, 'coupon code', 2, 944),
(1221, 'Ontdek meer', 2, 947),
(1222, 'Opmerking aan de koper', 2, 946),
(1220, 'Alle', 2, 948),
(1218, 'Z - A', 2, 950),
(1219, 'A - Z', 2, 949),
(1217, 'Prijs : hoog - laag', 2, 951),
(1216, 'Prijs : laag - hoog', 2, 952),
(1215, 'Speciale producten', 2, 953),
(1213, 'Annuleer', 2, 955),
(1214, 'Sorteer producten', 2, 954),
(1211, 'speciaal', 2, 957),
(1212, 'meest leuk gevonden', 2, 956),
(1210, 'Top verkoper', 2, 958),
(1206, 'mobiel', 2, 962),
(1207, 'Mein Konto', 2, 961),
(1208, 'sympathieën', 2, 960),
(1209, 'nieuwste', 2, 959),
(1203, 'Aktuelles Passwort', 2, 965),
(1204, 'Aktualisieren', 2, 964),
(1205, 'Geburtsdatum', 2, 963),
(1202, 'Neues Kennwort', 2, 966),
(1200, 'Kundenbestellungen', 2, 968),
(1201, 'Passwort ändern', 2, 967),
(1197, 'Anzahl der Produkte', 2, 972),
(1198, 'Datum', 2, 973),
(1199, 'Kundenadresse', 2, 974),
(1195, 'Bestellungen ID', 2, 970),
(1196, 'Produktpreis', 2, 971),
(1194, 'Bestellstatus', 2, 969),
(1193, 'Bitte fügen Sie Ihre neue Versandadresse für die weitere Bearbeitung Ihrer Bestellung hinzu', 2, 975),
(1191, 'Ein Konto erstellen', 2, 977),
(1192, 'Neue Adresse hinzufügen', 2, 976),
(1190, 'Vorname', 2, 978),
(1187, 'Telefon', 2, 983),
(1188, 'Schon Memeber?', 2, 980),
(1189, 'Familienname', 2, 979),
(1185, 'Rechnungsinfo', 2, 981),
(1186, 'Adresse', 2, 982),
(1183, 'Nächster', 2, 985),
(1184, 'Hetzelfde als verzendadres', 2, 984),
(1181, 'Rechnungsadresse', 2, 987),
(1182, 'Auftrag', 2, 986),
(1179, 'Produkte', 2, 989),
(1180, 'Versandart', 2, 988),
(1178, 'Zwischensumme', 2, 990),
(1176, 'Steuer', 2, 992),
(1177, 'Produkte Preis', 2, 991),
(1173, 'Zahlung', 2, 995),
(1174, 'Bestellhinweise', 2, 994),
(1175, 'Versandkosten', 2, 993),
(1172, 'Kartennummer', 2, 996),
(1168, 'Fehler: ungültiges Verfalldatum!', 2, 1000),
(1169, 'Fehler: ungültige Kartennummer!', 2, 999),
(1170, 'Ablauf', 2, 998),
(1171, 'Haltbarkeitsdatum', 2, 997),
(1166, 'Fortsetzen', 2, 1002),
(1167, 'Fehler: ungültige cvc-Nummer!', 2, 1001),
(1165, 'Mein Warenkorb', 2, 1003),
(1163, 'mit dem Einkaufen fortfahren', 2, 1005),
(1164, 'dein Wagen ist leer', 2, 1004),
(1160, 'Aussicht', 2, 1009),
(1161, 'Anzahl', 2, 1007),
(1162, 'Preis', 2, 1006),
(1157, 'Vorgehen', 2, 1011),
(1158, 'Entfernen', 2, 1010),
(1159, 'durch', 2, 1008),
(1155, 'Land', 2, 1013),
(1156, 'Lieferanschrift', 2, 1012),
(1154, 'andere', 2, 1014),
(1152, 'Stadt', 2, 1016),
(1153, 'Zone', 2, 1015),
(1150, 'Adresse aktualisieren', 2, 1019),
(1151, 'Postleitzahl', 2, 1017),
(1148, 'Adresse speichern', 2, 1020),
(1149, 'Bundesland', 2, 1018),
(1147, 'Anmeldung & registrieren', 2, 1021),
(1145, 'Ausloggen', 2, 1023),
(1146, 'Bitte loggen Sie sich ein oder erstellen Sie einen kostenlosen Account', 2, 1022),
(1144, 'Meine Wunschliste', 2, 1024),
(1141, 'Schließen', 2, 1027),
(1142, 'Preisklasse', 2, 1026),
(1143, 'Filter', 2, 1025),
(1139, 'Klar', 2, 1029),
(1140, 'Sich bewerben', 2, 1028),
(1138, 'Menü', 2, 1030),
(1137, 'Ich habe mein Passwort vergessen?', 2, 1),
(1136, 'Zuhause', 2, 1031),
(1135, 'Erstellen eines Kontos bedeutet, dass Sie mit den Nutzungsbedingungen von shopify, Datenschutzbestimmungen in Ordnung sind', 2, 2),
(1133, 'أو', 4, 873),
(1134, 'تسجيل الدخول مع', 4, 872),
(1131, 'كلمه السر', 4, 875),
(1132, 'البريد الإلكتروني', 4, 874),
(1130, 'تسجيل', 4, 876),
(1128, 'إرسال', 4, 878),
(1129, 'هل نسيت كلمة المرور', 4, 877),
(1127, 'معلومات عنا', 4, 879),
(1126, 'الاقسام', 4, 880),
(1125, 'رسالتك', 4, 883),
(1124, 'اسم', 4, 882),
(1123, 'اتصل بنا', 4, 881),
(1121, 'شوهدت مؤخرا', 4, 885),
(1122, 'يرجى الاتصال بالإنترنت', 4, 884),
(1120, 'المنتجات المتاحة.', 4, 886),
(1119, 'أعلى بائع', 4, 887),
(1118, 'أعلى بائع', 4, 888),
(1116, 'جميع الفئات', 4, 890),
(1117, 'الأكثر إعجابا', 4, 889),
(1114, 'إزالة', 4, 892),
(1115, 'صفقات', 4, 891),
(1112, 'تخطي مقدمة', 4, 894),
(1113, 'مقدمة', 4, 893),
(1111, 'فهمتك!', 4, 895),
(1110, 'تفاصيل الأمر', 4, 896),
(1108, 'مجموع', 4, 898),
(1109, 'السعر التفاصيل', 4, 897),
(1106, 'الشحن', 4, 900),
(1107, 'المجموع الفرعي', 4, 899),
(1105, 'تفاصيل المنتج', 4, 901),
(1104, 'الجديد', 4, 902),
(1099, 'وصف المنتج', 4, 907),
(1100, 'أضف إلى السلة', 4, 906),
(1101, 'أضف إلى السلة', 4, 905),
(1102, 'في المخزن', 4, 904),
(1103, 'إنتهى من المخزن', 4, 903),
(1097, 'إيقاف', 4, 909),
(1098, 'تفاصيل فنية', 4, 908),
(1096, 'لم يتم العثور على منتجات', 4, 910),
(1095, 'إعادة تعيين الفلاتر', 4, 911),
(1094, 'بحث', 4, 912),
(1092, 'الفئات الفرعية', 4, 914),
(1093, 'الفئات الرئيسية', 4, 913),
(1091, 'طريقة الشحن', 4, 915),
(1089, 'شكرا للتسوق معنا.', 4, 917),
(1090, 'شكرا', 4, 916),
(1088, 'طلباتي', 4, 918),
(1086, 'مفضل', 4, 920),
(1087, 'مواصلة التسوق', 4, 919),
(1085, 'قائمة رغباتك فارغة', 4, 921),
(1083, 'إستكشاف', 4, 923),
(1084, 'متابعة إضافة', 4, 922),
(1081, 'عُد', 4, 925),
(1082, 'Word Press Post التفاصيل', 4, 924),
(1078, 'أدخل الكلمة المفتاحية', 4, 928),
(1079, 'أخبار', 4, 927),
(1080, 'أفضل البائعين', 4, 926),
(1076, 'متجر', 4, 930),
(1077, 'إعدادات', 4, 929),
(1075, 'إعادة تعيين', 4, 931),
(1074, 'اختار اللغة', 4, 932),
(1073, 'إنتهى من المخزن', 4, 933),
(1071, 'سياسة الاسترجاع', 4, 935),
(1072, 'الأحدث', 4, 934),
(1069, 'المدة والخدمات', 4, 937),
(1070, 'سياسة الخصوصية', 4, 936),
(1067, 'أفضل الأطباق', 4, 939),
(1068, 'تخطى', 4, 938),
(1064, 'رمز القسيمة', 4, 942),
(1065, 'فئات الغذاء', 4, 941),
(1066, 'وصفة من اليوم', 4, 940),
(1063, 'قيمة القسيمة', 4, 943),
(1061, 'كوبون', 4, 945),
(1062, 'رمز القسيمة', 4, 944),
(1060, 'ملاحظة للمشتري', 4, 946),
(1057, 'ا - ي', 4, 949),
(1058, 'الكل', 4, 948),
(1059, 'استكشاف المزيد', 4, 947),
(1055, 'السعر : متوسط - منخفض', 4, 951),
(1056, 'ي - ا', 4, 950),
(1054, 'السعر : منخفض - متوسط', 4, 952),
(1053, 'المنتجات الخاصة', 4, 953),
(1052, 'فرز المنتجات', 4, 954),
(1051, 'إلغاء', 4, 955),
(1050, 'الأكثر إعجابا', 4, 956),
(1049, 'خاص', 4, 957),
(1047, 'أحدث', 4, 959),
(1048, 'أعلى بائع', 4, 958),
(1046, 'الإعجابات', 4, 960),
(1045, 'حسابي', 4, 961),
(1043, 'تاريخ الولادة', 4, 963),
(1044, 'التليفون المحمول', 4, 962),
(1042, 'تحديث', 4, 964),
(1041, 'كلمة السر الحالية', 4, 965),
(1040, 'كلمة السر الجديدة', 4, 966),
(1039, 'تغيير كلمة السر', 4, 967),
(1035, 'عدد المنتجات', 4, 972),
(1036, 'تاريخ', 4, 973),
(1037, 'عنوان العميل', 4, 974),
(1038, 'طلبات العملاء', 4, 968),
(1034, 'سعر المنتج', 4, 971),
(1033, 'معرف الطلبات', 4, 970),
(1032, 'حالة الطلب', 4, 969),
(1031, 'الرجاء إضافة عنوان الشحن الجديد لمعالجة فوثر من طلبك', 4, 975),
(1030, 'إضافة عنوان جديد', 4, 976),
(1027, 'الكنية', 4, 979),
(1028, 'الاسم الاول', 4, 978),
(1029, 'انشئ حساب', 4, 977),
(1024, 'عنوان', 4, 982),
(1025, 'هاتف', 4, 983),
(1026, 'بالفعل ميميبر؟', 4, 980),
(1023, 'معلومات الفواتير', 4, 981),
(1022, 'نفس عنوان الشحن', 4, 984),
(1021, 'التالى', 4, 985),
(1020, 'طلب', 4, 986),
(1019, 'عنوان وصول الفواتير', 4, 987),
(1018, 'طريقة الشحن', 4, 988),
(1017, 'منتجات', 4, 989),
(1016, 'المجموع الفرعي', 4, 990),
(1015, 'أسعار المنتجات', 4, 991),
(1014, 'ضريبة', 4, 992),
(1013, 'تكلفة الشحن', 4, 993),
(1012, 'ترتيب ملاحظات', 4, 994),
(1011, 'دفع', 4, 995),
(1010, 'رقم البطاقة', 4, 996),
(1009, 'تاريخ إنتهاء الصلاحية', 4, 997),
(1008, 'انتهاء الصلاحية', 4, 998),
(1007, 'خطأ: رقم بطاقة غير صالح!', 4, 999),
(1006, 'خطأ: تاريخ انتهاء الصلاحية غير صالح!', 4, 1000),
(1005, 'خطأ: رقم كفك غير صالح!', 4, 1001),
(1004, 'استمر', 4, 1002),
(1003, 'سلة التسوق', 4, 1003),
(1002, 'عربة التسوق فارغة', 4, 1004),
(1001, 'مواصلة التسوق', 4, 1005),
(1000, 'السعر', 4, 1006),
(999, 'كمية', 4, 1007),
(998, 'رأي', 4, 1009),
(997, 'بواسطة', 4, 1008),
(996, 'إزالة', 4, 1010),
(995, 'تقدم', 4, 1011),
(994, 'عنوان الشحن', 4, 1012),
(993, 'بلد', 4, 1013),
(992, 'آخر', 4, 1014),
(991, 'منطقة', 4, 1015),
(990, 'مدينة', 4, 1016),
(989, 'الرمز البريدي', 4, 1017),
(988, 'تحديث العنوان', 4, 1019),
(987, 'حالة', 4, 1018),
(986, 'حفظ العنوان', 4, 1020),
(985, 'تسجيل الدخول والتسجيل', 4, 1021),
(984, 'الرجاء تسجيل الدخول أو إنشاء حساب مجانا', 4, 1022),
(983, 'الخروج', 4, 1023),
(982, 'قائمة امنياتي', 4, 1024),
(981, 'الفلاتر', 4, 1025),
(980, 'نطاق السعر', 4, 1026),
(979, 'قريب', 4, 1027),
(978, 'تطبيق', 4, 1028),
(977, 'واضح', 4, 1029),
(976, 'قائمة طعام', 4, 1030),
(975, ' بي؟ نسيت كلمة المرور الخاصة', 4, 1),
(974, 'الصفحة الرئيسية', 4, 1031),
(973, 'إنشاء حساب يعني أنك على ما يرام مع شروط خدمة شوبيفي، سياسة الخصوصية', 4, 2),
(1373, 'Cancel', 1, 955),
(1374, 'Sort Products', 1, 954),
(1375, 'Special Products', 1, 953),
(1376, 'Price : low - high', 1, 952),
(1377, 'Price : high - low', 1, 951),
(1378, 'Z - A', 1, 950),
(1379, 'A - Z', 1, 949),
(1380, 'All', 1, 948),
(1381, 'Explore More', 1, 947),
(1382, 'Note to the buyer', 1, 946),
(1383, 'Coupon', 1, 945),
(1384, 'coupon code', 1, 944),
(1385, 'Coupon Amount', 1, 943),
(1386, 'Coupon Code', 1, 942),
(1387, 'Food Categories', 1, 941),
(1388, 'Recipe of Day', 1, 940),
(1389, 'Top Dishes', 1, 939),
(1390, 'Skip', 1, 938),
(1391, 'Term and Services', 1, 937),
(1392, 'Privacy Policy', 1, 936),
(1393, 'Refund Policy', 1, 935),
(1394, 'Newest', 1, 934),
(1395, 'OUT OF STOCK', 1, 933),
(1396, 'Select Language', 1, 932),
(1397, 'Reset', 1, 931),
(1398, 'Shop', 1, 930),
(1399, 'Settings', 1, 929),
(1400, 'Enter keyword', 1, 928),
(1401, 'News', 1, 927),
(1402, 'Top Sellers', 1, 926),
(1403, 'Go Back', 1, 925),
(1404, 'Word Press Post Detail', 1, 924),
(1405, 'Explore', 1, 923),
(1406, 'Continue Adding', 1, 922),
(1407, 'Your wish List is empty', 1, 921),
(1408, 'Favourite', 1, 920),
(1409, 'Continue Shopping', 1, 919),
(1410, 'My Orders', 1, 918),
(1411, 'Thank you for shopping with us.', 1, 917),
(1412, 'Thank You', 1, 916),
(1413, 'Shipping method', 1, 915),
(1414, 'Sub Categories', 1, 914),
(1415, 'Main Categories', 1, 913),
(1416, 'Search', 1, 912),
(1417, 'Reset Filters', 1, 911),
(1418, 'No Products Found', 1, 910),
(1419, 'OFF', 1, 909),
(1420, 'Techincal details', 1, 908),
(1421, 'Product Description', 1, 907),
(1422, 'ADD TO CART', 1, 906),
(1423, 'Add to Cart', 1, 905),
(1424, 'In Stock', 1, 904),
(1425, 'Out of Stock', 1, 903),
(1426, 'New', 1, 902),
(1427, 'Product Details', 1, 901),
(1428, 'Shipping', 1, 900),
(1429, 'Sub Total', 1, 899),
(1430, 'Total', 1, 898),
(1431, 'Price Detail', 1, 897),
(1432, 'Order Detail', 1, 896),
(1433, 'Got It!', 1, 895),
(1434, 'Skip Intro', 1, 894),
(1435, 'Intro', 1, 893),
(1436, 'REMOVE', 1, 892),
(1437, 'Deals', 1, 891),
(1438, 'All Categories', 1, 890),
(1439, 'Most Liked', 1, 889),
(1440, 'Special Deals', 1, 888),
(1441, 'Top Seller', 1, 887),
(1442, 'Products are available.', 1, 886),
(1443, 'Recently Viewed', 1, 885),
(1444, 'Please connect to the internet', 1, 884),
(1445, 'Contact Us', 1, 881),
(1446, 'Name', 1, 882),
(1447, 'Your Message', 1, 883),
(1448, 'Categories', 1, 880),
(1449, 'About Us', 1, 879),
(1450, 'Send', 1, 878),
(1451, 'Forgot Password', 1, 877),
(1452, 'Register', 1, 876),
(1453, 'Password', 1, 875),
(1454, 'Email', 1, 874),
(1455, 'or', 1, 873),
(1456, 'Login with', 1, 872),
(1457, 'Creating an account means you\'re okay with shopify\'s Terms of Service, Privacy Policy', 1, 2),
(1458, 'I\'ve forgotten my password?', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `languages_id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci,
  `directory` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(3) DEFAULT NULL,
  `direction` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_default` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`languages_id`, `name`, `code`, `image`, `directory`, `sort_order`, `direction`, `is_default`) VALUES
(1, 'Arabic', 'ar', 'resources/assets/images/language_flags/1542031354.Flag_of_Egypt_(variant).png', 'arabic', NULL, 'rtl', 0);

-- --------------------------------------------------------

--
-- Table structure for table `liked_products`
--

CREATE TABLE `liked_products` (
  `like_id` int(11) NOT NULL,
  `liked_products_id` int(100) NOT NULL,
  `liked_customers_id` int(100) NOT NULL,
  `date_liked` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `liked_products`
--

INSERT INTO `liked_products` (`like_id`, `liked_products_id`, `liked_customers_id`, `date_liked`) VALUES
(10, 79, 1, '2017-08-22 07:51:10'),
(11, 78, 1, '2017-08-22 07:51:13'),
(12, 1, 3, '2017-09-07 12:25:48'),
(13, 2, 3, '2017-09-07 12:25:52'),
(14, 4, 3, '2017-09-07 12:25:55'),
(15, 80, 3, '2017-09-08 10:09:40'),
(16, 79, 3, '2017-09-08 10:09:43'),
(17, 78, 3, '2017-09-08 10:09:44'),
(18, 81, 3, '2017-09-08 10:09:46'),
(19, 2, 79, '2017-12-11 20:35:46'),
(20, 8, 79, '2017-12-11 20:35:51'),
(21, 11, 79, '2017-12-11 20:35:54'),
(22, 81, 79, '2017-12-11 20:35:57'),
(23, 2, 5, '2017-12-12 09:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturers_id` int(11) NOT NULL,
  `manufacturers_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturers_image` mediumtext COLLATE utf8_unicode_ci,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturers_id`, `manufacturers_name`, `manufacturers_image`, `date_added`, `last_modified`) VALUES
(4, 'Nasir ALi', '', '2017-12-06 10:45:54', NULL),
(5, 'Nasir ALi', '', '2017-12-06 10:46:03', NULL),
(6, 'جديد', '', '2018-12-02 10:17:14', NULL),
(7, 'مستعمل', '', '2018-12-02 10:17:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers_info`
--

CREATE TABLE `manufacturers_info` (
  `manufacturers_id` int(11) NOT NULL,
  `languages_id` int(11) NOT NULL,
  `manufacturers_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_clicked` int(5) NOT NULL DEFAULT '0',
  `date_last_click` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufacturers_info`
--

INSERT INTO `manufacturers_info` (`manufacturers_id`, `languages_id`, `manufacturers_url`, `url_clicked`, `date_last_click`) VALUES
(6, 1, '', 0, NULL),
(7, 1, '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_image` mediumtext COLLATE utf8_unicode_ci,
  `news_date_added` datetime NOT NULL,
  `news_last_modified` datetime DEFAULT NULL,
  `news_status` tinyint(1) NOT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_image`, `news_date_added`, `news_last_modified`, `news_status`, `is_feature`) VALUES
(5, 'resources/assets/images/news_images/1502109905.h.png', '2017-08-07 12:45:05', NULL, 1, 0),
(6, 'resources/assets/images/news_images/1543756819.Jnc9ODAwJmhhc2g9YmZlZGYzNjczZWZlNmZlOThmOTYwZGZlNmFlMTg4ZjQ=.thumb.jpg', '2017-08-22 06:36:32', '2018-12-02 02:08:33', 1, 1),
(7, 'resources/assets/images/news_images/1543756911.4-3_Automobile_CP_P.jpg', '2017-08-22 07:00:29', '2018-12-02 02:52:33', 1, 1),
(8, 'resources/assets/images/news_images/1543757011.Lamborghini-Urus-ST-X-1.jpg', '2017-08-22 07:03:16', '2019-01-01 02:28:40', 1, 1),
(9, 'resources/assets/images/news_images/1504092640.laravel2.png', '2017-08-22 07:57:33', '2017-08-30 11:30:40', 1, 0),
(10, 'resources/assets/images/news_images/1504092240.ionic.png', '2017-08-22 07:59:33', '2017-08-30 11:24:00', 1, 0),
(11, 'resources/assets/images/news_images/1504091780.restaurant.png', '2017-08-22 08:04:29', '2017-08-30 11:16:20', 1, 0),
(12, 'resources/assets/images/news_images/1504091963.fashion.png', '2017-08-22 08:06:23', '2017-08-30 11:19:23', 1, 0),
(13, 'resources/assets/images/news_images/1504092054.electronics.png', '2017-08-22 08:07:23', '2017-08-30 11:20:54', 1, 0),
(54, 'resources/assets/images/news_images/1543761867.nissan_logo_by_aaa03.jpg', '2018-12-02 02:44:27', '2018-12-02 02:51:11', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `newsletters_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL,
  `date_sent` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `locked` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `categories_id` int(11) NOT NULL,
  `categories_image` mediumtext COLLATE utf8_unicode_ci,
  `categories_icon` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(3) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`categories_id`, `categories_image`, `categories_icon`, `parent_id`, `sort_order`, `date_added`, `last_modified`) VALUES
(6, 'resources/assets/images/news_categories_images/1512997556.1504092793.app_features.png', '', 0, NULL, '2017-08-22 06:20:50', '2018-12-02 01:14:46'),
(7, 'resources/assets/images/news_categories_images/1512997573.1504092906.introduction.png', '', 0, NULL, '2017-08-22 06:22:50', '2018-12-02 01:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories_description`
--

CREATE TABLE `news_categories_description` (
  `categories_description_id` int(100) NOT NULL,
  `categories_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `categories_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_categories_description`
--

INSERT INTO `news_categories_description` (`categories_description_id`, `categories_id`, `language_id`, `categories_name`) VALUES
(16, 6, 1, 'اخبار السيارات'),
(17, 6, 2, 'App Functies'),
(18, 6, 4, 'ميزات التطبيق'),
(19, 7, 1, 'اخبار جديدة'),
(20, 7, 2, 'Invoering'),
(21, 7, 4, 'المقدمة');

-- --------------------------------------------------------

--
-- Table structure for table `news_description`
--

CREATE TABLE `news_description` (
  `news_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `news_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `news_description` text COLLATE utf8_unicode_ci,
  `news_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_viewed` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_description`
--

INSERT INTO `news_description` (`news_id`, `language_id`, `news_name`, `news_description`, `news_url`, `news_viewed`) VALUES
(6, 1, 'فولكس فاجن', ' <p>تقوم شركة فولكس فاجن باستثمارفى سياراتها الكهربائية بطريقة تسارع بها الدول المتقدمة</p>\r\n\r\n                            <p>قامت شركة فولكس فاجن الاسبوع الماضى بالاعلان عن انتاج مجموعة من سياراتها الجديدة واستثمارها حوالى 910 مليار جنية مصرى خلال الخمس سنوات الماضية فى السيارات الكهربائية والتكنولوجيا الحديثة&nbsp;<br />\r\n                                وقالت شركة فولكس فاجن فى اجتماع لها فى مدينة فولسبورج ان استثماراتها تمثل حوالى ثلث النفقات التى للمجموعة الالمانية من الفترة 2019 الى الفترة 2023&nbsp;<br />\r\n                                قال الرئيس التنفيذى للمجموعة هربرت ديس انة قرر اعادة توجيهة الشركة نحو الصديق للبيئة وانهم يعملون على زيادة الابتكار فى الشركة</p>\r\n\r\n                            <blockquote>خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. </blockquote>\r\n                            <p>خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. </p>\r\n                            <h5>عنوان تجريبى</h5>\r\n               \r\n                            <p>خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. </p>\r\n', NULL, 0),
(6, 4, 'لماذا هذا التطبيق؟', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for ionic\\\" src=\\\"https://ionicframework.com/img/ionic-meta.jpg\\\" /></p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for angularjs\\\" src=\\\"http://paislee.io/content/images/2014/Aug/angular_js.svg\\\" /></p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for ngcordova\\\" src=\\\"http://ngcordova.com/img/cta-image.png\\\" /></p>', NULL, 0),
(7, 1, 'شائعات انخفاض الأسعار', '<p>قد صرح رامي جاد المسئول عن العلاقات الحكومية بمجلس معلومات سوق السيارات المعروفة باسم اميك ان الشائعات المرتبطة بتراجع اسعار السيارات في العام المقبل</p>', NULL, 0),
(7, 4, 'الأدوات والتكنولوجيا', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for ionic\\\" src=\\\"https://ionicframework.com/img/ionic-meta.jpg\\\" /></p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for angularjs\\\" src=\\\"http://paislee.io/content/images/2014/Aug/angular_js.svg\\\" /></p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for ngcordova\\\" src=\\\"http://ngcordova.com/img/cta-image.png\\\" /></p>\r\n', NULL, 0),
(8, 1, 'لامبورجيني أوروس ST-X', '<p>لم تتوقف شركة السيارات العالمية لامبورجيني عن التطور يومًا ما، وهو ما دفع الشركة للعمل خلال الوقت الراهن لتطوير سيارتها الرياضية كي تكون جاهزة للمشاركة بالسباقات العالمية التي تقام في المناطق الوعرة مستقبلًا.</p>\r\n\r\n<p>ومن المقرر وفقًا للتطور المستهدف أن تشارك السيارة لامبورجيني أوروس ST-X في السباقات التي تقام بعد 2020، بحيث تتناسب التطورات الجديدة مع السباقات القوية التي تشارك بها السيارات الخارقة مثل لامبورجيني أوروس ST-X.</p>\r\n\r\n<p>ووفقًا للإمكانيات المستهدف تزويد السيارة بها فمن المقرر أن تتضمن السيارة؛ قفص حماية داخلي وخزان وقود مقاوم للحريق، وحافظ محرك V8 على عزم 850 نيوتن متر وقوة حصانية 650 حصان.</p>', NULL, 0),
(8, 4, 'معلومات عنا', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for ionic\\\" src=\\\"https://ionicframework.com/img/ionic-meta.jpg\\\" /></p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for angularjs\\\" src=\\\"http://paislee.io/content/images/2014/Aug/angular_js.svg\\\" /></p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for ngcordova\\\" src=\\\"http://ngcordova.com/img/cta-image.png\\\" /></p>\r\n', NULL, 0),
(13, 2, 'Elektronica', '<p>Lorem ipsum dolor sit amet, persecuti neglegentur ei sit, assum accusata atomorum duo ne, timeam philosophia ex sea. Pri malorum blandit splendide id, est ea autem docendi interesset. Et vivendo lobortis has, te ius summo epicurei atomorum, an usu novum officiis intellegebat. Ne ridens dicunt eos, vel ad atqui mazim oratio. At vix nisl dolore similique, vidit dicat elitr eum te. Id eum mentitum nominavi, velit oporteat referrentur mei ei, et sea legimus suscipit. Quis augue altera mei et.</p>\r\n\r\n<p><img alt=\\\"Image result for ionic\\\" src=\\\"https://ionicframework.com/img/ionic-meta.jpg\\\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, persecuti neglegentur ei sit, assum accusata atomorum duo ne, timeam philosophia ex sea. Pri malorum blandit splendide id, est ea autem docendi interesset. Et vivendo lobortis has, te ius summo epicurei atomorum, an usu novum officiis intellegebat. Ne ridens dicunt eos, vel ad atqui mazim oratio. At vix nisl dolore similique, vidit dicat elitr eum te. Id eum mentitum nominavi, velit oporteat referrentur mei ei, et sea legimus suscipit. Quis augue altera mei et.<br />\r\n<img alt=\\\"Image result for angularjs\\\" src=\\\"http://paislee.io/content/images/2014/Aug/angular_js.svg\\\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, persecuti neglegentur ei sit, assum accusata atomorum duo ne, timeam philosophia ex sea. Pri malorum blandit splendide id, est ea autem docendi interesset. Et vivendo lobortis has, te ius summo epicurei atomorum, an usu novum officiis intellegebat. Ne ridens dicunt eos, vel ad atqui mazim oratio. At vix nisl dolore similique, vidit dicat elitr eum te. Id eum mentitum nominavi, velit oporteat referrentur mei ei, et sea legimus suscipit. Quis augue altera mei et.</p>\r\n\r\n<p><img alt=\\\"Image result for ngcordova\\\" src=\\\"http://ngcordova.com/img/cta-image.png\\\" /></p>\r\n', NULL, 0),
(13, 4, 'إلكترونيات', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for ionic\\\" src=\\\"https://ionicframework.com/img/ionic-meta.jpg\\\" /></p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for angularjs\\\" src=\\\"http://paislee.io/content/images/2014/Aug/angular_js.svg\\\" /></p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p><img alt=\\\"Image result for ngcordova\\\" src=\\\"http://ngcordova.com/img/cta-image.png\\\" /></p>\r\n', NULL, 0),
(54, 1, 'نيسان روج 2019', '<p>واحدة من السيارات التي حظت باهتمام كبير خلال الفترة الماضية من مختلف العملاء هي السيارة نيسان روج 2019، والتي تم تزويدها بعدد من التقنيات الحديثة والمميزة.</p>\r\n\r\n<p>ومن بين المزايا الخاصة بالسيارة نيسان روج 2019 ما يلي:.</p>\r\n\r\n<p>&ndash; تتميز بنظام إنذار للأبواب الخلفية بصورة قياسية في كل مستويات السيارة، بالإضافة إلى نظام صوتي مطور ومشغل آبل كار بلاي وأندرويد أوتو قياسي.</p>\r\n\r\n<p>&ndash; تستمر روج سبورت في التوفر في إصدارات S وSV وSL بنظام الدفع الرباعي بصورة اختيارية، كما تم إضافة لون جديد للسيارة.</p>\r\n\r\n<p>&ndash; توفير مزيد من التكنولوجيا في روج سبورت 2019 خاصة مساعد ProPilot، ونظام نيسان Safety Shield 360، ويتوفر المساعد ProPilot بصورة قياسية في روج سبورت SL.</p>\r\n\r\n<p>&ndash; كما يتوفر في SV مع قيادة شبه ذاتية تقلل من تدخلات السائق الخاطئة في بعض الظروف، ويمكن استخدامها في القيادة في حارة مرورية ثابتة على طريق سريع.</p>\r\n\r\n<p>&ndash; يتوفر نظام Safety Shield 360 بصورة قياسية في نسخ SV وSL، ويشمل باقة من وسائل مساعدة السائق التي تشمل مكابح طوارئ أوتوماتيكية ورصد للمشاة ومكابح أوتوماتيكية خلفية، وتحذير مغادرة المسار، ورصد للبقع العمياء يعتمد على رادار، وتحذير من حركة المرور خلف السيارة ومساعد للاضاءة العالية.</p>\r\n\r\n<p>&ndash; تشمل التجهيزات الاختيارية الأخرى في روج 2019 شاشة رصد محيطية ذكية، ومثبت سرعة ذكي وتحذير مغادرة الحارة المرورية، وتأتي السيارة بمحرك رباعي الاسطوانات سعة 2 لتر بقوة 141 حصانا، وناقل حركة اكس ترونيك CVT.</p>', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_to_news_categories`
--

CREATE TABLE `news_to_news_categories` (
  `news_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_to_news_categories`
--

INSERT INTO `news_to_news_categories` (`news_id`, `categories_id`) VALUES
(5, 5),
(6, 6),
(7, 7),
(8, 7),
(9, 8),
(10, 8),
(11, 9),
(12, 9),
(13, 9),
(54, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `total_tax` decimal(7,0) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `customers_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_suburb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customers_address_format_id` int(5) DEFAULT NULL,
  `delivery_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery_street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_suburb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address_format_id` int(5) DEFAULT NULL,
  `billing_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_suburb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_address_format_id` int(5) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc_owner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc_number` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc_expires` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_date_finished` datetime DEFAULT NULL,
  `currency` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_value` decimal(14,6) DEFAULT NULL,
  `order_price` decimal(10,2) NOT NULL,
  `shipping_cost` decimal(10,2) NOT NULL,
  `shipping_method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_duration` int(100) DEFAULT NULL,
  `order_information` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT '0',
  `coupon_code` text COLLATE utf8_unicode_ci NOT NULL,
  `coupon_amount` int(100) NOT NULL,
  `exclude_product_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excluded_product_categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `free_shipping` tinyint(1) NOT NULL DEFAULT '0',
  `product_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `orders_products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `products_model` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `products_price` decimal(15,2) NOT NULL,
  `final_price` decimal(15,2) NOT NULL,
  `products_tax` decimal(7,0) NOT NULL,
  `products_quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products_attributes`
--

CREATE TABLE `orders_products_attributes` (
  `orders_products_attributes_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `orders_products_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `products_options` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `products_options_values` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `options_values_price` decimal(15,2) NOT NULL,
  `price_prefix` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products_download`
--

CREATE TABLE `orders_products_download` (
  `orders_products_download_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL DEFAULT '0',
  `orders_products_id` int(11) NOT NULL DEFAULT '0',
  `orders_products_filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `download_maxdays` int(2) NOT NULL DEFAULT '0',
  `download_count` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_status`
--

CREATE TABLE `orders_status` (
  `orders_status_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `orders_status_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `public_flag` int(11) DEFAULT '1',
  `downloads_flag` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_status_history`
--

CREATE TABLE `orders_status_history` (
  `orders_status_history_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `orders_status_id` int(5) NOT NULL,
  `date_added` datetime NOT NULL,
  `customer_notified` int(1) DEFAULT '0',
  `comments` mediumtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_total`
--

CREATE TABLE `orders_total` (
  `orders_total_id` int(10) UNSIGNED NOT NULL,
  `orders_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` decimal(15,4) NOT NULL,
  `class` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(100) NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `slug`, `status`) VALUES
(1, 'privacy-policy', 1),
(2, 'term-services', 1),
(3, 'refund-policy', 1),
(4, 'about-us', 1),
(9, 'faq', 1),
(10, 'about-us-section', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages_description`
--

CREATE TABLE `pages_description` (
  `page_description_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `language_id` int(100) NOT NULL,
  `page_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages_description`
--

INSERT INTO `pages_description` (`page_description_id`, `name`, `description`, `language_id`, `page_id`) VALUES
(1, 'Privacy Policy', '<h3>سياسه الخصوصيه</h3>\r\n\r\n<p>نقدر مخاوفكم واهتمامكم بشأن خصوصية بياناتكم على شبكة الإنترنت. لقد تم إعداد هذه السياسة لمساعدتكم في تفهم طبيعة البيانات التي نقوم بتجميعها منكم عند زيارتكم لموقعنا على شبكة الانترنت وكيفية تعاملنا مع هذه البيانات الشخصية.</p>\r\n\r\n<h3>التصفح</h3>\r\n\r\n<p>لم نقم بتصميم هذا الموقع من أجل تجميع بياناتك الشخصية من جهاز الكمبيوتر الخاص بك أثناء تصفحك لهذا الموقع, وإنما سيتم فقط استخدام البيانات المقدمة من قبلك بمعرفتك ومحض إرادتك</p>\r\n\r\n<h3>عنوان بروتوكول شبكة الإنترنت (IP)</h3>\r\n\r\n<p>في أي وقت تزور فيه اي موقع انترنت بما فيها هذا الموقع , سيقوم السيرفر المضيف بتسجيل عنوان بروتوكول شبكة الإنترنت (IP) الخاص بك , تاريخ ووقت الزيارة ونوع متصفح الإنترنت الذي تستخدمه والعنوان URL الخاص بأي موقع من مواقع الإنترنت التي تقوم بإحالتك إلى الى هذا الموقع على الشبكة.</p>\r\n\r\n<h3>عمليات المسح على الشبكة</h3>\r\n\r\n<p>إن عمليات المسح التي نقوم بها مباشرة على الشبكة تمكننا من تجميع بيانات محددة مثل البيانات المطلوبة منك بخصوص نظرتك وشعورك تجاه موقعنا.تعتبر ردودك ذات أهمية قصوى , ومحل تقديرنا حيث أنها تمكننا من تحسين مستوى موقعنا, ولك كامل الحرية والإختيار في تقديم البيانات المتعلقة بإسمك والبيانات الأخرى.</p>\r\n\r\n<h3>الروابط بالمواقع الأخرى على شبكة الإنترنت</h3>\r\n\r\n<p>قد يشتمل موقعنا على روابط بالمواقع الأخرى على شبكة الإنترنت. او علانات من مواقع اخرى مثل Google AdSense ولا نعتبر مسئولين عن أساليب تجميع البيانات من قبل تلك المواقع, يمكنك الاطلاع على سياسات السرية والمحتويات الخاصة بتلك المواقع التي يتم الدخول إليها من خلال أي رابط ضمن هذا الموقع. نحن قد نستعين بشركات إعلان لأطراف ثالثة لعرض الإعلانات عندما تزور موقعنا على الويب. يحق لهذه الشركات أن تستخدم معلومات حول زياراتك لهذا الموقع ولمواقع الويب الأخرى (باستثناء الاسم أو العنوان أو عنوان البريد الإلكتروني أو رقم الهاتف)، وذلك من أجل تقديم إعلانات حول البضائع والخدمات التي تهمك. إذا كنت ترغب في مزيد من المعلومات حول هذا الأمر وكذلك إذا كنت تريد معرفة الاختيارات المتاحة لك لمنع استخدام هذه المعلومات من قِبل هذه الشركات</p>\r\n\r\n<h3>إفشاء المعلومات</h3>\r\n\r\n<p>سنحافظ في كافة الأوقات على خصوصية وسرية كافة البيانات الشخصية التي نتحصل عليها. ولن يتم إفشاء هذه المعلومات إلا إذا كان ذلك مطلوباً بموجب أي قانون أو عندما نعتقد بحسن نية أن مثل هذا الإجراء سيكون مطلوباً أو مرغوباً فيه للتمشي مع القانون , أو للدفاع عن أو حماية حقوق الملكية الخاصة بهذا الموقع أو الجهات المستفيدة منه البيانات اللازمة لتنفيذ المعاملات المطلوبة من قبلك عندما نحتاج إلى أية بيانات خاصة بك , فإننا سنطلب منك تقديمها بمحض إرادتك. حيث ستساعدنا هذه المعلومات في الاتصال بك وتنفيذ طلباتك حيثما كان ذلك ممكنناً. لن يتم اطلاقاً بيع البيانات المقدمة من قبلك إلى أي طرف ثالث بغرض تسويقها لمصلحته الخاصة دون الحصول على موافقتك المسبقة والمكتوبة ما لم يتم ذلك على أساس أنها ضمن بيانات جماعية تستخدم للأغراض الإحصائية والأبحاث دون اشتمالها على أية بيانات من الممكن استخدامها للتعريف بك.</p>\r\n\r\n<h3>عند الاتصال بنا</h3>\r\n\r\n<p>سيتم التعامل مع كافة البيانات المقدمة من قبلك على أساس أنها سرية . تتطلب النماذج التي يتم تقديمها مباشرة على الشبكة تقديم البيانات التي ستساعدنا في تحسين موقعنا.سيتم استخدام البيانات التي يتم تقديمها من قبلك في الرد على كافة استفساراتك , ملاحظاتك , أو طلباتك من قبل هذا الموقع أو أيا من المواقع التابعة له</p>\r\n\r\n<h3>إفشاء المعلومات لأي طرف ثالث</h3>\r\n\r\n<p>لن نقوم ببيع , المتاجرة , تأجير , أو إفشاء أية معلومات لمصلحة أي طرف ثالث خارج هذا الموقع, أو المواقع التابعة له.وسيتم الكشف عن المعلومات فقط في حالة صدور أمر بذلك من قبل أي سلطة قضائية أو تنظيمية.</p>\r\n\r\n<h3>التعديلات على سياسة سرية وخصوصية المعلومات</h3>\r\n\r\n<p>نحتفظ بالحق في تعديل بنود وشروط سياسة سرية وخصوصية المعلومات إن لزم الأمر ومتى كان ذلك ملائماً. سيتم تنفيذ التعديلات هنا او على صفحة سياسة الخصوصية الرئيسية وسيتم بصفة مستمرة إخطارك بالبيانات التي حصلنا عليها , وكيف سنستخدمها والجهة التي سنقوم بتزويدها بهذه البيانات.</p>\r\n\r\n<h3>اخيرا</h3>\r\n\r\n<p>إن مخاوفك واهتمامك بشأن سرية وخصوصية البيانات تعتبر مسألة في غاية الأهمية بالنسبة لنا. نحن نأمل أن يتم تحقيق ذلك من خلال هذه السياسة.</p>', 1, 1),
(2, 'Datenschutz-Bestimmungen', '<p>Lorem ipsum dolor sit amet, putant expetenda ex nec. Ea luptatum verterem vis, sadipscing conclusionemque id ius. Perpetua molestiae mei at, iudicabit interesset vel ad. Efficiendi concludaturque sed in, mazim exerci indoctum at est, nibh nostro ea ius.</p>\r\n\r\n<p>Eros libris theophrastus pri ei. Alii imperdiet an vim. Elitr euripidis vituperatoribus nam at, id qui quod ipsum contentiones, eu paulo ignota verterem pri. In quem posse efficiendi duo, eu per everti iuvaret saperet. Id vel constituam neglegentur, utinam atomorum ei ius.</p>\r\n\r\n<p>Amet mollis antiopam ei sea, iusto aperiri in eam, sed euismod splendide ne. Iuvaret molestie efficiendi in vim, eum cu choro alienum menandri, at choro recteque tincidunt duo. Novum diceret expetendis his id, nominavi facilisi ne est. Movet labore intellegebat has ne, cu veritus mentitum aliquando pri, utamur nominati forensibus duo ut. Quo graece oporteat concludaturque at, qui docendi salutatus assentior cu, latine vocibus dissentias ius ea.</p>\r\n\r\n<p>Ne delenit graecis pri, nec in perpetua mnesarchum. Ex per civibus luptatum. Choro civibus quo no, duo ne omnis salutatus pertinacia, ipsum rationibus eu est. Eos te soleat eripuit indoctum, nobis alienum contentiones vim ad. Mei ut expetenda qualisque constituto. Ex vel case recteque, ea quot debet mucius sed.</p>\r\n\r\n<p>Sea verear labores luptatum ut. Eu pri dico errem ubique, solet saepe mediocritatem nec ad. Cibo urbanitas comprehensam cu qui, ex summo gloriatur quo, quo eu etiam dolor urbanitas. Sed ancillae efficiantur cu, errem omnes salutatus id qui. Tation eloquentiam an per, dolorem perfecto eam at.</p>\r\n', 2, 1),
(3, 'سياسة الخصوصية', '<h3>سياسه الخصوصيه</h3>\r\n\r\n<p>نقدر مخاوفكم واهتمامكم بشأن خصوصية بياناتكم على شبكة الإنترنت. لقد تم إعداد هذه السياسة لمساعدتكم في تفهم طبيعة البيانات التي نقوم بتجميعها منكم عند زيارتكم لموقعنا على شبكة الانترنت وكيفية تعاملنا مع هذه البيانات الشخصية.</p>\r\n\r\n<h3>التصفح</h3>\r\n\r\n<p>لم نقم بتصميم هذا الموقع من أجل تجميع بياناتك الشخصية من جهاز الكمبيوتر الخاص بك أثناء تصفحك لهذا الموقع, وإنما سيتم فقط استخدام البيانات المقدمة من قبلك بمعرفتك ومحض إرادتك</p>\r\n\r\n<h3>عنوان بروتوكول شبكة الإنترنت (IP)</h3>\r\n\r\n<p>في أي وقت تزور فيه اي موقع انترنت بما فيها هذا الموقع , سيقوم السيرفر المضيف بتسجيل عنوان بروتوكول شبكة الإنترنت (IP) الخاص بك , تاريخ ووقت الزيارة ونوع متصفح الإنترنت الذي تستخدمه والعنوان URL الخاص بأي موقع من مواقع الإنترنت التي تقوم بإحالتك إلى الى هذا الموقع على الشبكة.</p>\r\n\r\n<h3>عمليات المسح على الشبكة</h3>\r\n\r\n<p>إن عمليات المسح التي نقوم بها مباشرة على الشبكة تمكننا من تجميع بيانات محددة مثل البيانات المطلوبة منك بخصوص نظرتك وشعورك تجاه موقعنا.تعتبر ردودك ذات أهمية قصوى , ومحل تقديرنا حيث أنها تمكننا من تحسين مستوى موقعنا, ولك كامل الحرية والإختيار في تقديم البيانات المتعلقة بإسمك والبيانات الأخرى.</p>\r\n\r\n<h3>الروابط بالمواقع الأخرى على شبكة الإنترنت</h3>\r\n\r\n<p>قد يشتمل موقعنا على روابط بالمواقع الأخرى على شبكة الإنترنت. او علانات من مواقع اخرى مثل Google AdSense ولا نعتبر مسئولين عن أساليب تجميع البيانات من قبل تلك المواقع, يمكنك الاطلاع على سياسات السرية والمحتويات الخاصة بتلك المواقع التي يتم الدخول إليها من خلال أي رابط ضمن هذا الموقع. نحن قد نستعين بشركات إعلان لأطراف ثالثة لعرض الإعلانات عندما تزور موقعنا على الويب. يحق لهذه الشركات أن تستخدم معلومات حول زياراتك لهذا الموقع ولمواقع الويب الأخرى (باستثناء الاسم أو العنوان أو عنوان البريد الإلكتروني أو رقم الهاتف)، وذلك من أجل تقديم إعلانات حول البضائع والخدمات التي تهمك. إذا كنت ترغب في مزيد من المعلومات حول هذا الأمر وكذلك إذا كنت تريد معرفة الاختيارات المتاحة لك لمنع استخدام هذه المعلومات من قِبل هذه الشركات</p>\r\n\r\n<h3>إفشاء المعلومات</h3>\r\n\r\n<p>سنحافظ في كافة الأوقات على خصوصية وسرية كافة البيانات الشخصية التي نتحصل عليها. ولن يتم إفشاء هذه المعلومات إلا إذا كان ذلك مطلوباً بموجب أي قانون أو عندما نعتقد بحسن نية أن مثل هذا الإجراء سيكون مطلوباً أو مرغوباً فيه للتمشي مع القانون , أو للدفاع عن أو حماية حقوق الملكية الخاصة بهذا الموقع أو الجهات المستفيدة منه البيانات اللازمة لتنفيذ المعاملات المطلوبة من قبلك عندما نحتاج إلى أية بيانات خاصة بك , فإننا سنطلب منك تقديمها بمحض إرادتك. حيث ستساعدنا هذه المعلومات في الاتصال بك وتنفيذ طلباتك حيثما كان ذلك ممكنناً. لن يتم اطلاقاً بيع البيانات المقدمة من قبلك إلى أي طرف ثالث بغرض تسويقها لمصلحته الخاصة دون الحصول على موافقتك المسبقة والمكتوبة ما لم يتم ذلك على أساس أنها ضمن بيانات جماعية تستخدم للأغراض الإحصائية والأبحاث دون اشتمالها على أية بيانات من الممكن استخدامها للتعريف بك.</p>\r\n\r\n<h3>عند الاتصال بنا</h3>\r\n\r\n<p>سيتم التعامل مع كافة البيانات المقدمة من قبلك على أساس أنها سرية . تتطلب النماذج التي يتم تقديمها مباشرة على الشبكة تقديم البيانات التي ستساعدنا في تحسين موقعنا.سيتم استخدام البيانات التي يتم تقديمها من قبلك في الرد على كافة استفساراتك , ملاحظاتك , أو طلباتك من قبل هذا الموقع أو أيا من المواقع التابعة له</p>\r\n\r\n<h3>إفشاء المعلومات لأي طرف ثالث</h3>\r\n\r\n<p>لن نقوم ببيع , المتاجرة , تأجير , أو إفشاء أية معلومات لمصلحة أي طرف ثالث خارج هذا الموقع, أو المواقع التابعة له.وسيتم الكشف عن المعلومات فقط في حالة صدور أمر بذلك من قبل أي سلطة قضائية أو تنظيمية.</p>\r\n\r\n<h3>التعديلات على سياسة سرية وخصوصية المعلومات</h3>\r\n\r\n<p>نحتفظ بالحق في تعديل بنود وشروط سياسة سرية وخصوصية المعلومات إن لزم الأمر ومتى كان ذلك ملائماً. سيتم تنفيذ التعديلات هنا او على صفحة سياسة الخصوصية الرئيسية وسيتم بصفة مستمرة إخطارك بالبيانات التي حصلنا عليها , وكيف سنستخدمها والجهة التي سنقوم بتزويدها بهذه البيانات.</p>\r\n\r\n<h3>اخيرا</h3>\r\n\r\n<p>إن مخاوفك واهتمامك بشأن سرية وخصوصية البيانات تعتبر مسألة في غاية الأهمية بالنسبة لنا. نحن نأمل أن يتم تحقيق ذلك من خلال هذه السياسة.</p>', 4, 1),
(4, 'Term & Services', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>\r\n\r\n<p>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>\r\n\r\n<p>book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>\r\n\r\n<p>unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>\r\n\r\n<p>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem</p>\r\n\r\n<p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard</p>\r\n\r\n<p>dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>\r\n\r\n<p>specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining</p>\r\n\r\n<p>essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum</p>\r\n\r\n<p>passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem</p>\r\n\r\n<p>Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>\r\n\r\n<p>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>\r\n\r\n<p>a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\r\n\r\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\r\n\r\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\r\n\r\n<p>of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>\r\n\r\n<p>the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>\r\n\r\n<p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\r\n\r\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\r\n\r\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\r\n\r\n<p>of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>\r\n\r\n<p>the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>\r\n\r\n<p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\r\n\r\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\r\n\r\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\r\n\r\n<p>of Lorem Ipsum.</p>\r\n', 1, 2),
(5, 'langfristige Dienstleistungen', '<p>Lorem ipsum dolor sit amet, putant expetenda ex nec. Ea luptatum verterem vis, sadipscing conclusionemque id ius. Perpetua molestiae mei at, iudicabit interesset vel ad. Efficiendi concludaturque sed in, mazim exerci indoctum at est, nibh nostro ea ius.</p>\r\n\r\n<p>Eros libris theophrastus pri ei. Alii imperdiet an vim. Elitr euripidis vituperatoribus nam at, id qui quod ipsum contentiones, eu paulo ignota verterem pri. In quem posse efficiendi duo, eu per everti iuvaret saperet. Id vel constituam neglegentur, utinam atomorum ei ius.</p>\r\n\r\n<p>Amet mollis antiopam ei sea, iusto aperiri in eam, sed euismod splendide ne. Iuvaret molestie efficiendi in vim, eum cu choro alienum menandri, at choro recteque tincidunt duo. Novum diceret expetendis his id, nominavi facilisi ne est. Movet labore intellegebat has ne, cu veritus mentitum aliquando pri, utamur nominati forensibus duo ut. Quo graece oporteat concludaturque at, qui docendi salutatus assentior cu, latine vocibus dissentias ius ea.</p>\r\n\r\n<p>Ne delenit graecis pri, nec in perpetua mnesarchum. Ex per civibus luptatum. Choro civibus quo no, duo ne omnis salutatus pertinacia, ipsum rationibus eu est. Eos te soleat eripuit indoctum, nobis alienum contentiones vim ad. Mei ut expetenda qualisque constituto. Ex vel case recteque, ea quot debet mucius sed.</p>\r\n\r\n<p>Sea verear labores luptatum ut. Eu pri dico errem ubique, solet saepe mediocritatem nec ad. Cibo urbanitas comprehensam cu qui, ex summo gloriatur quo, quo eu etiam dolor urbanitas. Sed ancillae efficiantur cu, errem omnes salutatus id qui. Tation eloquentiam an per, dolorem perfecto eam at.</p>\r\n', 2, 2),
(6, 'الخدمات المدى', '<p>الجو تحرير السفن مع بين. تعد مع خيار المتّبعة, كلّ غينيا لعملة أن. الشطر الإثنان لم فقد, به، ٣٠ دارت الدول استراليا،. دنو تصفح موالية أي, عن تحرّك باستخدام لبلجيكا، دنو, و عرض هامش الشطر العدّ. حتى في لإعادة العاصمة.</p>\r\n\r\n<p>شعار وبدأت وتتحمّل من بين. ما أوزار أوروبا ويكيبيديا، لها, يكن تم الحكم ضمنها. دون أم الجنود ديسمبر. أحكم الإنذار، هو بعد, ضرب مدينة اعلان للمجهود عل, مدن بقصف العصبة التقليدية كل. لم حول عقبت بلديهما, وبعض أسيا الأعمال بـ بال. كلا الخطّة الشرقية كل, تم كما قبضتهم الحدود المنتصر, كرسي تصرّف ٣٠ دون.</p>\r\n\r\n<p>ولكسمبورغ واندونيسيا، كل لمّ, والتي لبولندا، بـ الى. أضف تم مسارح الثانية اليابان،, تم يكن دارت تصفح المارق, مع حين واحدة الأعمال المتّبعة. بـ على مشارف نهاية, فكان تحرّك الأمريكية في عدم. ٣٠ أملاً والنفيس التغييرات بها. غريمه الحيلولة أخذ ٣٠, قام عل موالية الهادي التكاليف. في مليارات والديون والإتحاد عدم, بـ ونتج استدعى أفريقيا به،.</p>\r\n\r\n<p>المشترك الشرقية تعد أي, وفي و وأكثرها الرئيسية المعاهدات. أي وبدأت المعاهدات نفس, من بلا عجّل الأمور بولندا،. الأمم إنطلاق عل ولم, عشوائية الأثناء، في مما. مقاطعة الوراء وتم تم, وتنصيب مواقعها بل يكن. تم كنقطة الشتاء، ومن, والإتحاد الرئيسية أي كلّ.</p>\r\n\r\n<p>أي انه الأثنان الجديدة،, لان كل مسرح تزامناً. ذات قد بزمام المضي الإحتفاظ, ٣٠ فسقط أعمال التغييرات لان. ليركز السيء مكثّفة هذه مع, بتطويق والديون تم فعل. بل ولم المبرمة واندونيسيا،, بقصف جيما أحكم هو دار. لم فقامت الشهير العسكري تحت, تصفح الستار والعتاد كما ٣٠.</p>\r\n\r\n<p>في بعض تطوير اوروبا أفريقيا. هو أسر وبعض انذار, أحدث إحكام قتيل، أن قام. مع فصل ونتج بخطوط المزيفة. مع النفط والمانيا لان. بـ تطوير بالرّد فقد.</p>\r\n\r\n<p>بالرّد بالرغم الأرواح أم نفس. من أخذ أخرى فاتّبع وانهاء. قد بشرية مساعدة الإقتصادية وتم, ومن ان جديدة المزيفة. أمّا سبتمبر أم بعض, الصفحة العالمية من أما. حيث بقسوة ابتدعها وقدّموا بل, كل الباهضة الخاسرة كما, تحت بشرية المشترك الاندونيسية و.</p>\r\n\r\n<p>العناد مقاطعة العالمي لم تلك. المزيفة الإقتصادية أن ذلك, إذ حاول اتفاق بالرغم كلّ. ثم أخرى المضي الدنمارك دنو, هو قامت قائمة للأراضي بلا. بلا من كنقطة عسكرياً, نتيجة لعملة المبرمة ان قبل.</p>\r\n\r\n<p>٣٠ دار الأخذ بريطانيا, ومن أم أوسع أواخر إستعمل. الى إستيلاء الواقعة لم, بل أدوات المارق وصل. تسمّى فرنسا وتزويده ٣٠ دنو, لغزو التي انتصارهم بـ حيث. ٣٠ قام فهرست الغالي قُدُماً. من بال أحدث وانتهاءً, حالية عسكرياً الموسوعة أن قبل. أدوات الحكومة ذات مع, الجوي بالتوقيع في على, بـ يبق الأعمال الأسيوي.</p>\r\n\r\n<p>إذ العالم، مسؤولية كلا, نفس إذ أراض بينما عسكرياً. أصقاع بقيادة عرض أم, ودول أسيا أراض ما لان. لمّ ان أجزاء وقامت المتّبعة, ونتج شاسعة المدن ان تحت. وقبل إحتار لمّ أي. شمال بالرّغم ٣٠ حين, عدد يطول اتّجة بتحدّي عل, أم وأزيز بأيدي الا. هذه قد بداية العناد.</p>\r\n', 4, 2),
(7, 'سياسة الأسترجاع', '   <div class=\"content-area\">\r\n            <!-- Career -->\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <!-- Left part start -->\r\n                    <div class=\"col-sm-8 col-md-8 col-lg-9 m-b30\">\r\n                        <h1 class=\"m-b20 m-t0\">Car Dealer</h1>\r\n                        <div class=\"dlab-separator bg-primary\"></div>\r\n                        <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s \r\n                            standard dummy text ever since the  when an unknown printer took a galley of type and scrambled it to make a \r\n                            type specimen book. </strong></p>\r\n                        <h2 class=\"m-t30 m-b10 \">Car Buy and Sale Services</h2>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy \r\n                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is \r\n                            simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the \r\n                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col-md-6 col-sm-6\">\r\n                                <div class=\"icon-bx-wraper bx-style-1 p-a20 left m-b30\">\r\n                                    <div class=\"bg-primary icon-bx-xs m-b20 \"> <span class=\"icon-cell\"> <i class=\"fa fa-shopping-basket\"></i> </span> </div>\r\n                                    <div class=\"icon-content\">\r\n                                        <h5 class=\"dlab-tilte \">Import Export Goods</h5>\r\n                                        <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end [...]</p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"col-md-6 col-sm-6\">\r\n                                <div class=\"icon-bx-wraper bx-style-1 p-a20 left m-b30\">\r\n                                    <div class=\"bg-primary icon-bx-xs m-b20\"> <span class=\"icon-cell\"> <i class=\"fa fa-truck\"></i> </span> </div>\r\n                                    <div class=\"icon-content\">\r\n                                        <h5 class=\"dlab-tilte \">Fast Delivery Network</h5>\r\n                                        <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end [...]</p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"col-md-6 col-sm-6\">\r\n                                <div class=\"icon-bx-wraper bx-style-1 p-a20 left m-b30\">\r\n                                    <div class=\"bg-primary icon-bx-xs m-b20\"> <span class=\"icon-cell\"><i class=\"fa fa-map-marker\"></i> </span> </div>\r\n                                    <div class=\"icon-content\">\r\n                                        <h5 class=\"dlab-tilte \">Well Qualified Staff</h5>\r\n                                        <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end [...]</p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"col-md-6 col-sm-6\">\r\n                                <div class=\"icon-bx-wraper bx-style-1 p-a20 left m-b30\">\r\n                                    <div class=\"bg-primary icon-bx-xs m-b20 \"> <span class=\"icon-cell\"> <i class=\"fa fa-user\"></i> </span> </div>\r\n                                    <div class=\"icon-content\">\r\n                                        <h5 class=\"dlab-tilte \">User Friendly </h5>\r\n                                        <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end [...]</p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy \r\n                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n                        <h3>Tips </h3>\r\n                        <ul class=\"list-check-circle primary\">\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>\r\n                            <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy</li>\r\n                            <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard.</li>\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book. </li>\r\n                            <li>Eorem ipsum dolor sit amete printing and typesetting industry. </li>\r\n                        </ul>\r\n                        <h2 class=\"m-t30 m-b10 \">Transport Manager</h2>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy \r\n                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply \r\n                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the  when an \r\n                            unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been \r\n                            the industry\'s standard dummy text ever since the  when an unknown printer took a galley of type and \r\n                            scrambled it to make a type specimen book. </p>\r\n                        <h3>Our Help </h3>\r\n                        <ul class=\"list-check-circle primary\">\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>\r\n                            <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy</li>\r\n                            <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard.</li>\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book. </li>\r\n                            <li>Eorem ipsum dolor sit amete printing and typesetting industry. </li>\r\n                        </ul>\r\n                    </div>\r\n                    <!-- Left part start END -->\r\n                    <!-- Right part start -->\r\n                    <div class=\"col-sm-4 col-md-4 col-lg-3 blog-sticky-right\">\r\n                        <div class=\"icon-bx-wraper bx-style-1 p-a30 center m-b30\">\r\n                            <div class=\"icon-bx-sm text-primary bg-white radius border-2 m-b20\"> <a href=\"#\" class=\"icon-cell\"><i class=\"fa fa-user\"></i></a> </div>\r\n                            <div class=\"icon-content\">\r\n                                <h5 class=\"dlab-tilte text-uppercase\">Recent Highlights</h5>\r\n                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"icon-bx-wraper bx-style-1 p-a30 center m-b30\">\r\n                            <div class=\"icon-bx-sm text-primary bg-white radius border-2 m-b20\"> <a href=\"#\" class=\"icon-cell\"><i class=\"fa fa-building-o\"></i></a> </div>\r\n                            <div class=\"icon-content\">\r\n                                <h5 class=\"dlab-tilte text-uppercase\">Recent Highlights</h5>\r\n                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"icon-bx-wraper bx-style-1 p-a20 left\">\r\n                            <div class=\"icon-bx-xs text-primary bg-white radius border-2 \"> <a href=\"#\" class=\"icon-cell\"><i class=\"fa fa-code\"></i></a> </div>\r\n                            <div class=\"icon-content\">\r\n                                <h5 class=\"dlab-tilte text-uppercase\">Content title</h5>\r\n                                <p>Lorem ipsum dolor sit elit nonummy dolor is euismod end [...]</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <!-- Right part start END -->\r\n                </div>\r\n            </div>\r\n            <!-- Career END -->\r\n        </div>', 1, 3),
(10, 'من نحن', '<h1>Welcome to Car Zone&#39;s Privacy Policy</h1>\r\n\r\n<blockquote>\r\n<p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. </strong></p>\r\n</blockquote>\r\n\r\n<h2>Car Dealer</h2>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<h3>Our Privacy Policy</h3>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>\r\n	<li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</li>\r\n	<li>Printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book.</li>\r\n	<li>Eorem ipsum dolor sit amete printing and typesetting industry.</li>\r\n</ul>\r\n\r\n<h2>Car Dealer</h2>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<h3>Our Privacy Policy</h3>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>\r\n	<li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</li>\r\n	<li>Printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book.</li>\r\n	<li>Eorem ipsum dolor sit amete printing and typesetting industry.</li>\r\n</ul>', 1, 4),
(11, 'Über uns', '<p>Lorem ipsum dolor sit amet, putant expetenda ex nec. Ea luptatum verterem vis, sadipscing conclusionemque id ius. Perpetua molestiae mei at, iudicabit interesset vel ad. Efficiendi concludaturque sed in, mazim exerci indoctum at est, nibh nostro ea ius.</p>\r\n\r\n<p>Eros libris theophrastus pri ei. Alii imperdiet an vim. Elitr euripidis vituperatoribus nam at, id qui quod ipsum contentiones, eu paulo ignota verterem pri. In quem posse efficiendi duo, eu per everti iuvaret saperet. Id vel constituam neglegentur, utinam atomorum ei ius.</p>\r\n\r\n<p>Amet mollis antiopam ei sea, iusto aperiri in eam, sed euismod splendide ne. Iuvaret molestie efficiendi in vim, eum cu choro alienum menandri, at choro recteque tincidunt duo. Novum diceret expetendis his id, nominavi facilisi ne est. Movet labore intellegebat has ne, cu veritus mentitum aliquando pri, utamur nominati forensibus duo ut. Quo graece oporteat concludaturque at, qui docendi salutatus assentior cu, latine vocibus dissentias ius ea.</p>\r\n\r\n<p>Ne delenit graecis pri, nec in perpetua mnesarchum. Ex per civibus luptatum. Choro civibus quo no, duo ne omnis salutatus pertinacia, ipsum rationibus eu est. Eos te soleat eripuit indoctum, nobis alienum contentiones vim ad. Mei ut expetenda qualisque constituto. Ex vel case recteque, ea quot debet mucius sed.</p>\r\n\r\n<p>Sea verear labores luptatum ut. Eu pri dico errem ubique, solet saepe mediocritatem nec ad. Cibo urbanitas comprehensam cu qui, ex summo gloriatur quo, quo eu etiam dolor urbanitas. Sed ancillae efficiantur cu, errem omnes salutatus id qui. Tation eloquentiam an per, dolorem perfecto eam at.</p>\r\n', 2, 4),
(12, 'معلومات عنا', '<div class=\"col-sm-8 col-md-8 col-lg-9 m-b30\">\r\n                        <h1 class=\"m-b20 m-t0\">Welcome to Car Zone\'s Privacy Policy </h1>\r\n                        <div class=\"dlab-separator bg-primary\"></div>\r\n                        <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s \r\n                            standard dummy text ever since the  when an unknown printer took a galley of type and scrambled it to make a \r\n                            type specimen book. </strong></p>\r\n                        <h2 class=\"m-t30 m-b10 \">Car Dealer</h2>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy \r\n                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is \r\n                            simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the \r\n                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy \r\n                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n                        <h3>Our Privacy Policy </h3>\r\n                        <ul class=\"list-check-circle primary\">\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>\r\n                            <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy</li>\r\n                            <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard.</li>\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book. </li>\r\n                            <li>Eorem ipsum dolor sit amete printing and typesetting industry. </li>\r\n                        </ul>\r\n                        <h2 class=\"m-t30 m-b10 \">Car Dealer</h2>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy \r\n                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply \r\n                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the  when an \r\n                            unknown printer took a galley of type and scrambled it to make a type specimen book. </p>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been \r\n                            the industry\'s standard dummy text ever since the  when an unknown printer took a galley of type and \r\n                            scrambled it to make a type specimen book. </p>\r\n                        <h3>Our Privacy Policy </h3>\r\n                        <ul class=\"list-check-circle primary\">\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>\r\n                            <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy</li>\r\n                            <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard.</li>\r\n                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book. </li>\r\n                            <li>Eorem ipsum dolor sit amete printing and typesetting industry. </li>\r\n                        </ul>\r\n                    </div>', 4, 4),
(17, 'الاسئلة الشائعة', '		<div class=\"section-full p-t50 bg-white content-inner-1\">\r\n            <div class=\"container\">\r\n				<div class=\"section-head text-center head-1\">\r\n					<span class=\"text-primary\">Faq\'s</span>\r\n					<h3 class=\"h3 text-uppercase\">اسئلة شائعة</h3>\r\n					<div class=\"dlab-separator bg-gray-dark\"></div>\r\n					<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.</p>\r\n				</div>\r\n				<div class=\"row text-right\">\r\n					<div class=\"col-md-6\">\r\n						<h2 class=\"m-b10\">اسئلة متكررة</h2>\r\n						<p>خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد،</p>\r\n						<div class=\"dlab-accordion space\" id=\"accordion1\">\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseOne1\" data-parent=\"#accordion1\">\r\n											<i class=\"fa fa-question-circle\"></i> ما أصله ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseOne1\" class=\"acod-body collapse in\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseTwo1\" class=\"collapsed\" data-parent=\"#accordion1\">\r\n											<i class=\"fa fa-question-circle\"></i> ما هو \"لوريم إيبسوم\" ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseTwo1\" class=\"acod-body collapse\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseThree1\" class=\"collapsed\" data-parent=\"#accordion1\">\r\n											<i class=\"fa fa-question-circle\"></i> ما أصله ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseThree1\" class=\"acod-body collapse\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseFor1\" class=\"collapsed\" data-parent=\"#accordion1\">\r\n											<i class=\"fa fa-question-circle\"></i> Showcase Items with a Referral Widget\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseFor1\" class=\"acod-body collapse\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseFive1\" class=\"collapsed\" data-parent=\"#accordion1\">\r\n											<i class=\"fa fa-question-circle\"></i> ما هو \"لوريم إيبسوم\" ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseFive1\" class=\"acod-body collapse\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n						</div>\r\n					</div>\r\n					<div class=\"col-md-6\">\r\n						<h2 class=\"m-b10\">اسئلة تهمك</h2>\r\n						<p>خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد،</p>\r\n						<div class=\"dlab-accordion space\" id=\"accordion2\">\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseOne2\" data-parent=\"#accordion2\">\r\n											<i class=\"fa fa-question-circle\"></i> أين أجده ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseOne2\" class=\"acod-body collapse in\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseTwo2\" class=\"collapsed\" data-parent=\"#accordion2\">\r\n											<i class=\"fa fa-question-circle\"></i> ما أصله ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseTwo2\" class=\"acod-body collapse\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseThree2\" class=\"collapsed\" data-parent=\"#accordion2\">\r\n											<i class=\"fa fa-question-circle\"></i> ما هو \"لوريم إيبسوم\" ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseThree2\" class=\"acod-body collapse\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseFor2\" class=\"collapsed\" data-parent=\"#accordion2\">\r\n											<i class=\"fa fa-question-circle\"></i> ما فائدته ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseFor2\" class=\"acod-body collapse\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n							<div class=\"panel\">\r\n								<div class=\"acod-head\">\r\n									<h6 class=\"acod-title\"> \r\n										<a data-toggle=\"collapse\" href=\"#collapseFive2\" class=\"collapsed\" data-parent=\"#accordion2\">\r\n											<i class=\"fa fa-question-circle\"></i> أين أجده ؟\r\n										</a> \r\n									</h6>\r\n								</div>\r\n								<div id=\"collapseFive2\" class=\"acod-body collapse\">\r\n									<div class=\"acod-content\">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات</div>\r\n								</div>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n\r\n		   </div>\r\n        </div>\r\n', 1, 9),
(18, 'قسم من نحن', '<p><span dir=\\\"rtl\\\">تأسست شركة النبوى للإستيراد والتصدير سنة 1989م بعد قرار فتح الإستيراد&nbsp; مباشرةً. وقبلها كانت الشركة تعمل تحت مسمي شركة زيتون للسيارات ولمدة 18عام حتى عام 2007 تم تأسيس شركة النبوى زيتون شركة مساهمة مصرية</span></p>\r\n\r\n<p><span dir=\\\"rtl\\\">&nbsp;تعمل فى مجال السيارات و التقسيط على السيارات المتوفرة بالأسواق وبسعر تجاري وبكميات بسيطة سواءً كانت مُستوردة من دول الخليج او متوفرة لدي الموزعين التابعين للتوكيلات التي كانت تعمل فى هذا الوقت فى جمهورية مصرالعربية إلي أن بدأ نشاط الشركه بإستيراد سيَارات من دول الخليج وبشكل عام ولكل الأنواع المطلوبه فى ذلك الوقت مثل( ميتسوبيشني - تويوتا - مازدا - ديهاتسو - هيونداي - كيا ) وبعض الأنواع الاخري, وكذلك التعاقد علي حصص من الموزعين فيما يخص التوكيلات الموجودة من ذلك الحين وحتي الأن.</span></p>', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payments_setting`
--

CREATE TABLE `payments_setting` (
  `payments_id` int(100) NOT NULL,
  `braintree_enviroment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `braintree_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `braintree_merchant_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `braintree_public_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `braintree_private_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brantree_active` tinyint(1) NOT NULL DEFAULT '0',
  `stripe_enviroment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `secret_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publishable_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_active` tinyint(1) NOT NULL DEFAULT '0',
  `cash_on_delivery` tinyint(1) NOT NULL DEFAULT '0',
  `cod_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paypal_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paypal_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paypal_status` tinyint(1) NOT NULL DEFAULT '0',
  `paypal_enviroment` tinyint(1) DEFAULT '0',
  `payment_currency` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments_setting`
--

INSERT INTO `payments_setting` (`payments_id`, `braintree_enviroment`, `braintree_name`, `braintree_merchant_id`, `braintree_public_key`, `braintree_private_key`, `brantree_active`, `stripe_enviroment`, `stripe_name`, `secret_key`, `publishable_key`, `stripe_active`, `cash_on_delivery`, `cod_name`, `paypal_name`, `paypal_id`, `paypal_status`, `paypal_enviroment`, `payment_currency`) VALUES
(1, '0', 'Braintree', '', '', '', 0, '0', 'Stripe', '', '', 0, 1, 'Cash On Delivery', 'Paypal', '', 0, 0, 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_quantity` int(4) NOT NULL,
  `products_model` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_image` mediumtext COLLATE utf8_unicode_ci,
  `products_price` decimal(15,2) NOT NULL,
  `products_date_added` datetime NOT NULL,
  `products_last_modified` datetime DEFAULT NULL,
  `products_date_available` datetime DEFAULT NULL,
  `products_weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `products_weight_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `products_status` tinyint(1) NOT NULL,
  `products_tax_class_id` int(11) NOT NULL,
  `manufacturers_id` int(11) DEFAULT NULL,
  `products_ordered` int(11) NOT NULL DEFAULT '0',
  `products_liked` int(100) NOT NULL,
  `low_limit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_quantity`, `products_model`, `products_image`, `products_price`, `products_date_added`, `products_last_modified`, `products_date_available`, `products_weight`, `products_weight_unit`, `products_status`, `products_tax_class_id`, `manufacturers_id`, `products_ordered`, `products_liked`, `low_limit`) VALUES
(82, 4, '2018', 'resources/assets/images/product_images/1542031968.ecco sport_591943.png', '349999.00', '2018-11-12 02:12:48', '2018-12-03 04:33:42', NULL, '1000', 'kg', 1, 0, 6, 0, 6, 0),
(83, 3, '2018', 'resources/assets/images/product_images/1543746968.1.jpg', '414000.00', '2018-12-02 10:36:08', '2018-12-03 04:34:37', NULL, '1000', 'g', 1, 0, 6, 0, 0, 0),
(84, 5, '2019', 'resources/assets/images/product_images/1543747552.t1 (1).jpg', '600000.00', '2018-12-02 10:45:52', '2018-12-11 03:47:37', NULL, '1100', 'kg', 1, 0, 6, 0, 0, 0),
(85, 11, '2018', 'resources/assets/images/product_images/1543755100.2015_bmw_x1-pic-8461595823983970307-1600x1200.jpeg', '760000.00', '2018-12-02 12:51:40', '2018-12-11 03:46:57', NULL, '1100', 'kg', 1, 0, 7, 0, 0, 0),
(86, 5, '2018', 'resources/assets/images/product_images/1546012183.cq5dam.resized.img.890.medium.time1543458369001.jpeg', '600000.00', '2018-12-28 03:49:43', '2018-12-28 03:55:29', NULL, '700', 'kg', 1, 0, 6, 0, 0, 0),
(87, 5, '2018', 'resources/assets/images/product_images/1546348333.BMW-6-Series-Gran-Coupe_ModelCard.png', '800000.00', '2019-01-01 01:12:13', NULL, NULL, '700', 'g', 1, 0, 6, 0, 0, 0),
(88, 5, '2018', 'resources/assets/images/product_images/1546348866.0_1680.jpg', '830000.00', '2019-01-01 01:21:06', NULL, NULL, '700', 'g', 1, 0, 6, 0, 0, 0),
(89, 5, '2018', 'resources/assets/images/product_images/1546349688.Steptronic3.jpg', '1025000.00', '2019-01-01 01:34:48', NULL, NULL, '800', 'kg', 1, 0, 6, 0, 0, 0),
(90, 12, '2018', 'resources/assets/images/product_images/1546352331.72546_1521986991.png', '795000.00', '2019-01-01 02:05:01', '2019-01-01 02:18:51', NULL, '800', 'kg', 1, 0, 7, 0, 0, 0),
(91, 15, '2018', 'resources/assets/images/product_images/1546351809.OW_US_Homepage_CarouselHero_2.jpg', '630000.00', '2019-01-01 02:10:09', NULL, NULL, '700', 'kg', 1, 0, 7, 0, 0, 0),
(93, 1, '', 'resources/assets/images/product_images/1554826021.2018_9_26_15_13_22_688.jpg', '1250157.00', '2019-04-09 04:07:01', NULL, NULL, '1000', 'kg', 1, 0, 6, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `products_attributes_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  `options_values_id` int(11) NOT NULL,
  `options_values_price` decimal(15,2) NOT NULL,
  `price_prefix` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`products_attributes_id`, `products_id`, `options_id`, `options_values_id`, `options_values_price`, `price_prefix`, `is_default`) VALUES
(429, 85, 16, 148, '0.00', '+', 1),
(430, 85, 17, 157, '0.00', '+', 1),
(431, 85, 18, 162, '0.00', '+', 1),
(432, 86, 16, 147, '0.00', '+', 1),
(433, 86, 17, 153, '0.00', '+', 1),
(434, 86, 18, 161, '0.00', '+', 1),
(435, 87, 16, 148, '0.00', '+', 1),
(436, 87, 17, 154, '0.00', '+', 1),
(437, 87, 18, 162, '0.00', '+', 1),
(438, 88, 16, 148, '0.00', '+', 1),
(439, 88, 17, 154, '0.00', '+', 1),
(440, 88, 18, 162, '0.00', '+', 1),
(441, 88, 24, 175, '0.00', '+', 1),
(442, 89, 16, 149, '0.00', '+', 1),
(443, 89, 17, 156, '0.00', '+', 1),
(444, 89, 18, 164, '0.00', '+', 1),
(445, 89, 24, 175, '0.00', '+', 1),
(446, 90, 16, 177, '0.00', '+', 1),
(447, 90, 17, 179, '0.00', '+', 1),
(448, 90, 18, 183, '0.00', '+', 1),
(449, 91, 16, 177, '0.00', '+', 1),
(450, 91, 17, 180, '0.00', '+', 1),
(451, 91, 18, 186, '0.00', '+', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes_download`
--

CREATE TABLE `products_attributes_download` (
  `products_attributes_id` int(11) NOT NULL,
  `products_attributes_filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `products_attributes_maxdays` int(2) DEFAULT '0',
  `products_attributes_maxcount` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_description`
--

CREATE TABLE `products_description` (
  `products_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `products_description` text COLLATE utf8_unicode_ci,
  `products_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_viewed` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_description`
--

INSERT INTO `products_description` (`products_id`, `language_id`, `products_name`, `products_description`, `products_url`, `products_viewed`) VALUES
(82, 1, 'Titanium 4WD', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال &quot;lorem ipsum&quot; في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>', NULL, 162),
(83, 1, 'PRIUS Surprisingly versatile', '<p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.&nbsp;</p>', NULL, 4315),
(84, 1, 'Tacoma TRD Pro', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', NULL, 1829),
(85, 1, 'M Sport sDrive', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', NULL, 8037),
(86, 1, '318i Automatic - 1.5 A/T Exclusive', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال &quot;lorem ipsum&quot; في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>', NULL, 7790),
(87, 1, 'Steptronic -  2.0 A/T Luxury', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', NULL, 7636),
(88, 1, 'Steptronic -  2.0 A/T Sport', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', NULL, 36868),
(89, 1, '340i Steptronic -  3.0 A/T M-Sport', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', NULL, 69526),
(90, 1, 'C180  Automatic - 1.6 A/T    ', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', NULL, 65332),
(91, 1, 'CLA 180  Automatic - 1.6 coupe', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', NULL, 71771),
(93, 1, 'تويوتا راش 2019', '<p>تويوتا راش 2019</p>', NULL, 37739);

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci,
  `htmlcontent` mediumtext COLLATE utf8_unicode_ci,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `products_id`, `image`, `htmlcontent`, `sort_order`) VALUES
(101, 82, 'resources/assets/images/product_images/1543753576.kisspng-ford-motor-company-car-2018-ford-ecosport-titanium-ford-ecosport-5b46e7b6612647.8097496515313734943979.jpg', '', 1),
(102, 83, 'resources/assets/images/product_images/1543747024.2.jpg', '', 1),
(103, 83, 'resources/assets/images/product_images/1543747031.3.jpg', '', 1),
(104, 83, 'resources/assets/images/product_images/1543747036.4.jpg', '', 1),
(105, 84, 'resources/assets/images/product_images/1543747644.t2.jpg', '', 1),
(106, 84, 'resources/assets/images/product_images/1543747650.t3.jpg', '', 1),
(107, 84, 'resources/assets/images/product_images/1543747657.t4.jpg', '', 3),
(108, 82, 'resources/assets/images/product_images/1543753600.9f098cce68c9face892689ddf7b4dc63.png', '', 2),
(109, 85, 'resources/assets/images/product_images/1543755129.bmw-x-1.png', '', 1),
(110, 85, 'resources/assets/images/product_images/1543755147.2018-bmw-x1-mediterranean-blue-metallic-color.png', '', 1),
(111, 86, 'resources/assets/images/product_images/1546012421.BMW-3series-sedan-stage-XXL-desktop.jpg', '', 1),
(115, 86, 'resources/assets/images/product_images/1546012466.3seriessaloon-models-hero.jpeg', '', 1),
(117, 86, 'resources/assets/images/product_images/1546012554.BMW-3series-sedan-exterior-01-L.jpg', '', 5),
(118, 87, 'resources/assets/images/product_images/1546348394.2018-bmw-3-series-320i-sedan-angular-rear.png', '', 1),
(119, 87, 'resources/assets/images/product_images/1546348400.2018-bmw-3-series-320i-sedan-engine.png', '', 1),
(120, 87, 'resources/assets/images/product_images/1546348406.2018-bmw-3-series-320i-sedan-side-view.png', '', 1),
(121, 88, 'resources/assets/images/product_images/1546348949.3fc04349796e0bc620bcb42ced3e2972.png', '', 1),
(122, 88, 'resources/assets/images/product_images/1546348955.BMW_MY18_3Series_Overview_Hero_01.png', '', 1),
(125, 89, 'resources/assets/images/product_images/1546349766.5.jpg', '', 1),
(126, 89, 'resources/assets/images/product_images/1546349772.7.jpg', '', 1),
(127, 89, 'resources/assets/images/product_images/1546349793.used-2018-bmw-3_series-340i-8507-16918957-34-1024.jpg', '', 1),
(128, 90, 'resources/assets/images/product_images/1546351557.72546_1521986991.png', '', 1),
(129, 91, 'resources/assets/images/product_images/1546352154.MercedesCLAClass0316(5).jpg', '', 1),
(130, 91, 'resources/assets/images/product_images/1546352161.CLA-Coupe-colour^640x480^.png', '', 1),
(131, 91, 'resources/assets/images/product_images/1546352170.Screen-Shot-2018-08-02-at-11.02.39-AM.png', '', 1),
(135, 92, 'resources/assets/images/product_images/1554374032.1543755147.2018-bmw-x1-mediterranean-blue-metallic-color.png', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products_notifications`
--

CREATE TABLE `products_notifications` (
  `products_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_options`
--

CREATE TABLE `products_options` (
  `products_options_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_options_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `categories_id` int(100) NOT NULL,
  `session_regenerate_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_options`
--

INSERT INTO `products_options` (`products_options_id`, `language_id`, `products_options_name`, `categories_id`, `session_regenerate_id`) VALUES
(16, 1, 'المحرك', 0, '1542038905'),
(17, 1, 'حصان', 0, '1542038914'),
(18, 1, 'أ.الوقود', 0, '1542038924'),
(24, 1, 'التحكم', 0, '1543770062'),
(25, 1, 'شكل السيارة', 0, '1547989653');

-- --------------------------------------------------------

--
-- Table structure for table `products_options_values`
--

CREATE TABLE `products_options_values` (
  `products_options_values_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_options_values_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_options_values`
--

INSERT INTO `products_options_values` (`products_options_values_id`, `language_id`, `products_options_values_name`) VALUES
(147, 1, '1499'),
(148, 1, '1998'),
(149, 1, '2998'),
(150, 1, '1997'),
(151, 1, '2979'),
(152, 1, '4400'),
(153, 1, '136'),
(154, 1, '184'),
(155, 1, '252'),
(156, 1, '326'),
(157, 1, '192'),
(158, 1, '140'),
(159, 1, '360'),
(160, 1, '450'),
(161, 1, '5.4'),
(162, 1, '5.8'),
(163, 1, '5.5'),
(164, 1, '6.8'),
(165, 1, '6.4'),
(166, 1, '5.9'),
(167, 1, '4.5'),
(168, 1, '7.6'),
(169, 1, '8.9'),
(170, 1, '8.3'),
(171, 1, '9.6'),
(172, 1, '9.7'),
(173, 1, 'automatic'),
(175, 1, 'Steptronic'),
(176, 1, 'Manual'),
(177, 1, '1595'),
(178, 1, '1991'),
(179, 1, '156'),
(180, 1, '122'),
(181, 1, '245'),
(182, 1, '211'),
(183, 1, '6.1'),
(184, 1, '6.2'),
(185, 1, '6.3'),
(186, 1, '5.6'),
(187, 1, '6.5'),
(188, 1, 'سيدان'),
(189, 1, 'هاتش باك');

-- --------------------------------------------------------

--
-- Table structure for table `products_options_values_to_products_options`
--

CREATE TABLE `products_options_values_to_products_options` (
  `products_options_values_to_products_options_id` int(11) NOT NULL,
  `products_options_id` int(11) NOT NULL,
  `products_options_values_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_options_values_to_products_options`
--

INSERT INTO `products_options_values_to_products_options` (`products_options_values_to_products_options_id`, `products_options_id`, `products_options_values_id`) VALUES
(147, 16, 147),
(148, 16, 148),
(149, 16, 149),
(150, 16, 150),
(151, 16, 151),
(152, 16, 152),
(153, 17, 153),
(154, 17, 154),
(155, 17, 155),
(156, 17, 156),
(157, 17, 157),
(158, 17, 158),
(159, 17, 159),
(160, 17, 160),
(161, 18, 161),
(162, 18, 162),
(163, 18, 163),
(164, 18, 164),
(165, 18, 165),
(166, 18, 166),
(167, 18, 167),
(168, 18, 168),
(169, 18, 169),
(170, 18, 170),
(171, 18, 171),
(172, 18, 172),
(173, 24, 173),
(175, 24, 175),
(176, 24, 176),
(177, 16, 177),
(178, 16, 178),
(179, 17, 179),
(180, 17, 180),
(181, 17, 181),
(182, 17, 182),
(183, 18, 183),
(184, 18, 184),
(185, 18, 185),
(186, 18, 186),
(187, 18, 187),
(188, 25, 188),
(189, 25, 189);

-- --------------------------------------------------------

--
-- Table structure for table `products_to_categories`
--

CREATE TABLE `products_to_categories` (
  `products_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_to_categories`
--

INSERT INTO `products_to_categories` (`products_id`, `categories_id`) VALUES
(82, 37),
(83, 66),
(84, 33),
(85, 70),
(86, 71),
(87, 72),
(88, 72),
(89, 73),
(90, 81),
(91, 83),
(93, 89);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `customers_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviews_rating` int(1) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `reviews_status` tinyint(1) NOT NULL DEFAULT '0',
  `reviews_read` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_description`
--

CREATE TABLE `reviews_description` (
  `reviews_id` int(11) NOT NULL,
  `languages_id` int(11) NOT NULL,
  `reviews_text` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sec_directory_whitelist`
--

CREATE TABLE `sec_directory_whitelist` (
  `id` int(11) NOT NULL,
  `directory` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `sesskey` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `expiry` int(11) UNSIGNED NOT NULL,
  `value` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(100) NOT NULL,
  `facebook_app_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_secret_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_login` tinyint(1) NOT NULL DEFAULT '1',
  `google_login` tinyint(1) NOT NULL DEFAULT '1',
  `contact_us_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(100) NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fcm_android` text COLLATE utf8_unicode_ci NOT NULL,
  `fcm_ios` text COLLATE utf8_unicode_ci NOT NULL,
  `fcm_desktop` text COLLATE utf8_unicode_ci NOT NULL,
  `app_logo` text COLLATE utf8_unicode_ci NOT NULL,
  `fcm_android_sender_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fcm_ios_sender_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency_symbol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `new_product_duration` float NOT NULL,
  `notification_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notification_text` text COLLATE utf8_unicode_ci NOT NULL,
  `lazzy_loading_effect` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `footer_button` tinyint(1) NOT NULL DEFAULT '1',
  `cart_button` tinyint(1) NOT NULL DEFAULT '1',
  `featured_category` int(100) NOT NULL,
  `notification_duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_style` int(100) NOT NULL,
  `wish_list_page` tinyint(1) NOT NULL DEFAULT '1',
  `edit_profile_page` tinyint(1) NOT NULL DEFAULT '1',
  `shipping_address_page` tinyint(1) NOT NULL DEFAULT '1',
  `my_orders_page` tinyint(1) NOT NULL DEFAULT '1',
  `contact_us_page` tinyint(1) NOT NULL DEFAULT '1',
  `about_us_page` tinyint(1) NOT NULL DEFAULT '1',
  `news_page` tinyint(1) NOT NULL DEFAULT '1',
  `intro_page` tinyint(1) NOT NULL DEFAULT '1',
  `setting_page` tinyint(1) NOT NULL DEFAULT '1',
  `share_app` tinyint(1) NOT NULL DEFAULT '1',
  `rate_app` tinyint(1) NOT NULL DEFAULT '1',
  `site_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admob` tinyint(1) NOT NULL DEFAULT '1',
  `admob_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_unit_id_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_unit_id_interstitial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_style` int(10) NOT NULL,
  `package_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_analytic_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `facebook_app_id`, `facebook_secret_id`, `facebook_login`, `google_login`, `contact_us_email`, `address`, `city`, `state`, `zip`, `country`, `latitude`, `longitude`, `phone_no`, `fcm_android`, `fcm_ios`, `fcm_desktop`, `app_logo`, `fcm_android_sender_id`, `fcm_ios_sender_id`, `app_name`, `currency_symbol`, `new_product_duration`, `notification_title`, `notification_text`, `lazzy_loading_effect`, `footer_button`, `cart_button`, `featured_category`, `notification_duration`, `home_style`, `wish_list_page`, `edit_profile_page`, `shipping_address_page`, `my_orders_page`, `contact_us_page`, `about_us_page`, `news_page`, `intro_page`, `setting_page`, `share_app`, `rate_app`, `site_url`, `admob`, `admob_id`, `ad_unit_id_banner`, `ad_unit_id_interstitial`, `category_style`, `package_name`, `google_analytic_id`) VALUES
(1, '', '', 0, 0, 'info@Elnabweyziton-cars.com', '228 Park Ave S', 'New York', 'NY', 10003, 'Egypt', '30.0442906', '31.2138483', '+92 1234567890', '', '', '', '', '', '', 'Elnabweyziton Cars', 'جنيه', 30, '', '', '', 0, 0, 0, '', 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 0, 'Elnabweyziton-cars.com', 0, '', '', '', 0, 'package name', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `shipping_methods_id` int(100) NOT NULL,
  `methods_type_link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `isDefault` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`shipping_methods_id`, `methods_type_link`, `isDefault`, `status`, `table_name`) VALUES
(1, 'upsShipping', 0, 0, 'ups_shipping'),
(2, 'freeShipping', 0, 0, 'free_shipping'),
(3, 'localPickup', 0, 0, 'local_pickup'),
(4, 'flateRate', 1, 0, 'flate_rate');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `specials_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `specials_new_products_price` decimal(15,2) NOT NULL,
  `specials_date_added` int(100) NOT NULL,
  `specials_last_modified` int(100) NOT NULL,
  `expires_date` int(100) NOT NULL,
  `date_status_change` int(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`specials_id`, `products_id`, `specials_new_products_price`, `specials_date_added`, `specials_last_modified`, `expires_date`, `date_status_change`, `status`) VALUES
(1, 25, '150.00', 1502195102, 0, 1667174400, 0, 1),
(2, 39, '27.85', 1502264917, 0, 1640995200, 0, 1),
(3, 43, '21.99', 1502268005, 0, 1640995200, 0, 1),
(4, 44, '23.55', 1502268706, 0, 1640995200, 0, 1),
(5, 48, '450.00', 1502274870, 0, 1640995200, 0, 1),
(6, 87, '700000.00', 1546348333, 0, 1548892800, 0, 1),
(7, 88, '800000.00', 1546348866, 0, 1548892800, 0, 1),
(8, 89, '1000000.00', 1546349688, 0, 1551312000, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tax_class`
--

CREATE TABLE `tax_class` (
  `tax_class_id` int(11) NOT NULL,
  `tax_class_title` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `tax_class_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tax_class`
--

INSERT INTO `tax_class` (`tax_class_id`, `tax_class_title`, `tax_class_description`, `last_modified`, `date_added`) VALUES
(1, 'Sale Tax', 'This tax apply on products related to USA item.', NULL, '2017-08-07 07:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `tax_rates_id` int(11) NOT NULL,
  `tax_zone_id` int(11) NOT NULL,
  `tax_class_id` int(11) NOT NULL,
  `tax_priority` int(5) DEFAULT '1',
  `tax_rate` decimal(7,2) NOT NULL,
  `tax_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tax_rates`
--

INSERT INTO `tax_rates` (`tax_rates_id`, `tax_zone_id`, `tax_class_id`, `tax_priority`, `tax_rate`, `tax_description`, `last_modified`, `date_added`) VALUES
(1, 43, 1, 1, '7.00', '', NULL, '2017-08-07 07:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `ups_shipping`
--

CREATE TABLE `ups_shipping` (
  `ups_id` int(100) NOT NULL,
  `pickup_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isDisplayCal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serviceType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shippingEnvironment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_line_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_line_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_of_package` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parcel_height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parcel_width` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ups_shipping`
--

INSERT INTO `ups_shipping` (`ups_id`, `pickup_method`, `isDisplayCal`, `serviceType`, `shippingEnvironment`, `user_name`, `access_key`, `password`, `person_name`, `company_name`, `phone_number`, `address_line_1`, `address_line_2`, `country`, `state`, `post_code`, `city`, `no_of_package`, `parcel_height`, `parcel_width`, `title`) VALUES
(1, '07', '', 'US_01,US_02,US_03,US_12,US_13,US_14,US_59', '0', '', '', '', '', '', '', 'D Ground', '', 'US', 'NY', '10312', 'New York City', '', '', '', 'UPS Shipping');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `rememberToken` int(100) NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whos_online`
--

CREATE TABLE `whos_online` (
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `time_entry` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `time_last_click` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `last_page_url` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `zone_id` int(11) NOT NULL,
  `zone_country_id` int(11) NOT NULL,
  `zone_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `zone_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`zone_id`, `zone_country_id`, `zone_code`, `zone_name`) VALUES
(1, 223, 'AL', 'Alabama'),
(2, 223, 'AK', 'Alaska'),
(3, 223, 'AS', 'American Samoa'),
(4, 223, 'AZ', 'Arizona'),
(5, 223, 'AR', 'Arkansas'),
(6, 223, 'AF', 'Armed Forces Africa'),
(7, 223, 'AA', 'Armed Forces Americas'),
(8, 223, 'AC', 'Armed Forces Canada'),
(9, 223, 'AE', 'Armed Forces Europe'),
(10, 223, 'AM', 'Armed Forces Middle East'),
(11, 223, 'AP', 'Armed Forces Pacific'),
(12, 223, 'CA', 'California'),
(13, 223, 'CO', 'Colorado'),
(14, 223, 'CT', 'Connecticut'),
(15, 223, 'DE', 'Delaware'),
(16, 223, 'DC', 'District of Columbia'),
(17, 223, 'FM', 'Federated States Of Micronesia'),
(18, 223, 'FL', 'Florida'),
(19, 223, 'GA', 'Georgia'),
(20, 223, 'GU', 'Guam'),
(21, 223, 'HI', 'Hawaii'),
(22, 223, 'ID', 'Idaho'),
(23, 223, 'IL', 'Illinois'),
(24, 223, 'IN', 'Indiana'),
(25, 223, 'IA', 'Iowa'),
(26, 223, 'KS', 'Kansas'),
(27, 223, 'KY', 'Kentucky'),
(28, 223, 'LA', 'Louisiana'),
(29, 223, 'ME', 'Maine'),
(30, 223, 'MH', 'Marshall Islands'),
(31, 223, 'MD', 'Maryland'),
(32, 223, 'MA', 'Massachusetts'),
(33, 223, 'MI', 'Michigan'),
(34, 223, 'MN', 'Minnesota'),
(35, 223, 'MS', 'Mississippi'),
(36, 223, 'MO', 'Missouri'),
(37, 223, 'MT', 'Montana'),
(38, 223, 'NE', 'Nebraska'),
(39, 223, 'NV', 'Nevada'),
(40, 223, 'NH', 'New Hampshire'),
(41, 223, 'NJ', 'New Jersey'),
(42, 223, 'NM', 'New Mexico'),
(43, 223, 'NY', 'New York'),
(44, 223, 'NC', 'North Carolina'),
(45, 223, 'ND', 'North Dakota'),
(46, 223, 'MP', 'Northern Mariana Islands'),
(47, 223, 'OH', 'Ohio'),
(48, 223, 'OK', 'Oklahoma'),
(49, 223, 'OR', 'Oregon'),
(50, 223, 'PW', 'Palau'),
(51, 223, 'PA', 'Pennsylvania'),
(52, 223, 'PR', 'Puerto Rico'),
(53, 223, 'RI', 'Rhode Island'),
(54, 223, 'SC', 'South Carolina'),
(55, 223, 'SD', 'South Dakota'),
(56, 223, 'TN', 'Tennessee'),
(57, 223, 'TX', 'Texas'),
(58, 223, 'UT', 'Utah'),
(59, 223, 'VT', 'Vermont'),
(60, 223, 'VI', 'Virgin Islands'),
(61, 223, 'VA', 'Virginia'),
(62, 223, 'WA', 'Washington'),
(63, 223, 'WV', 'West Virginia'),
(64, 223, 'WI', 'Wisconsin'),
(65, 223, 'WY', 'Wyoming'),
(66, 38, 'AB', 'Alberta'),
(67, 38, 'BC', 'British Columbia'),
(68, 38, 'MB', 'Manitoba'),
(69, 38, 'NF', 'Newfoundland'),
(70, 38, 'NB', 'New Brunswick'),
(71, 38, 'NS', 'Nova Scotia'),
(72, 38, 'NT', 'Northwest Territories'),
(73, 38, 'NU', 'Nunavut'),
(74, 38, 'ON', 'Ontario'),
(75, 38, 'PE', 'Prince Edward Island'),
(76, 38, 'QC', 'Quebec'),
(77, 38, 'SK', 'Saskatchewan'),
(78, 38, 'YT', 'Yukon Territory'),
(79, 81, 'NDS', 'Niedersachsen'),
(80, 81, 'BAW', 'Baden-Württemberg'),
(81, 81, 'BAY', 'Bayern'),
(82, 81, 'BER', 'Berlin'),
(83, 81, 'BRG', 'Brandenburg'),
(84, 81, 'BRE', 'Bremen'),
(85, 81, 'HAM', 'Hamburg'),
(86, 81, 'HES', 'Hessen'),
(87, 81, 'MEC', 'Mecklenburg-Vorpommern'),
(88, 81, 'NRW', 'Nordrhein-Westfalen'),
(89, 81, 'RHE', 'Rheinland-Pfalz'),
(90, 81, 'SAR', 'Saarland'),
(91, 81, 'SAS', 'Sachsen'),
(92, 81, 'SAC', 'Sachsen-Anhalt'),
(93, 81, 'SCN', 'Schleswig-Holstein'),
(94, 81, 'THE', 'Thüringen'),
(95, 14, 'WI', 'Wien'),
(96, 14, 'NO', 'Niederösterreich'),
(97, 14, 'OO', 'Oberösterreich'),
(98, 14, 'SB', 'Salzburg'),
(99, 14, 'KN', 'Kärnten'),
(100, 14, 'ST', 'Steiermark'),
(101, 14, 'TI', 'Tirol'),
(102, 14, 'BL', 'Burgenland'),
(103, 14, 'VB', 'Voralberg'),
(104, 204, 'AG', 'Aargau'),
(105, 204, 'AI', 'Appenzell Innerrhoden'),
(106, 204, 'AR', 'Appenzell Ausserrhoden'),
(107, 204, 'BE', 'Bern'),
(108, 204, 'BL', 'Basel-Landschaft'),
(109, 204, 'BS', 'Basel-Stadt'),
(110, 204, 'FR', 'Freiburg'),
(111, 204, 'GE', 'Genf'),
(112, 204, 'GL', 'Glarus'),
(113, 204, 'JU', 'Graubünden'),
(114, 204, 'JU', 'Jura'),
(115, 204, 'LU', 'Luzern'),
(116, 204, 'NE', 'Neuenburg'),
(117, 204, 'NW', 'Nidwalden'),
(118, 204, 'OW', 'Obwalden'),
(119, 204, 'SG', 'St. Gallen'),
(120, 204, 'SH', 'Schaffhausen'),
(121, 204, 'SO', 'Solothurn'),
(122, 204, 'SZ', 'Schwyz'),
(123, 204, 'TG', 'Thurgau'),
(124, 204, 'TI', 'Tessin'),
(125, 204, 'UR', 'Uri'),
(126, 204, 'VD', 'Waadt'),
(127, 204, 'VS', 'Wallis'),
(128, 204, 'ZG', 'Zug'),
(129, 204, 'ZH', 'Zürich'),
(130, 195, 'A Coruña', 'A Coruña'),
(131, 195, 'Alava', 'Alava'),
(132, 195, 'Albacete', 'Albacete'),
(133, 195, 'Alicante', 'Alicante'),
(134, 195, 'Almeria', 'Almeria'),
(135, 195, 'Asturias', 'Asturias'),
(136, 195, 'Avila', 'Avila'),
(137, 195, 'Badajoz', 'Badajoz'),
(138, 195, 'Baleares', 'Baleares'),
(139, 195, 'Barcelona', 'Barcelona'),
(140, 195, 'Burgos', 'Burgos'),
(141, 195, 'Caceres', 'Caceres'),
(142, 195, 'Cadiz', 'Cadiz'),
(143, 195, 'Cantabria', 'Cantabria'),
(144, 195, 'Castellon', 'Castellon'),
(145, 195, 'Ceuta', 'Ceuta'),
(146, 195, 'Ciudad Real', 'Ciudad Real'),
(147, 195, 'Cordoba', 'Cordoba'),
(148, 195, 'Cuenca', 'Cuenca'),
(149, 195, 'Girona', 'Girona'),
(150, 195, 'Granada', 'Granada'),
(151, 195, 'Guadalajara', 'Guadalajara'),
(152, 195, 'Guipuzcoa', 'Guipuzcoa'),
(153, 195, 'Huelva', 'Huelva'),
(154, 195, 'Huesca', 'Huesca'),
(155, 195, 'Jaen', 'Jaen'),
(156, 195, 'La Rioja', 'La Rioja'),
(157, 195, 'Las Palmas', 'Las Palmas'),
(158, 195, 'Leon', 'Leon'),
(159, 195, 'Lleida', 'Lleida'),
(160, 195, 'Lugo', 'Lugo'),
(161, 195, 'Madrid', 'Madrid'),
(162, 195, 'Malaga', 'Malaga'),
(163, 195, 'Melilla', 'Melilla'),
(164, 195, 'Murcia', 'Murcia'),
(165, 195, 'Navarra', 'Navarra'),
(166, 195, 'Ourense', 'Ourense'),
(167, 195, 'Palencia', 'Palencia'),
(168, 195, 'Pontevedra', 'Pontevedra'),
(169, 195, 'Salamanca', 'Salamanca'),
(170, 195, 'Santa Cruz de Tenerife', 'Santa Cruz de Tenerife'),
(171, 195, 'Segovia', 'Segovia'),
(172, 195, 'Sevilla', 'Sevilla'),
(173, 195, 'Soria', 'Soria'),
(174, 195, 'Tarragona', 'Tarragona'),
(175, 195, 'Teruel', 'Teruel'),
(176, 195, 'Toledo', 'Toledo'),
(177, 195, 'Valencia', 'Valencia'),
(178, 195, 'Valladolid', 'Valladolid'),
(179, 195, 'Vizcaya', 'Vizcaya'),
(180, 195, 'Zamora', 'Zamora'),
(181, 195, 'Zaragoza', 'Zaragoza');

-- --------------------------------------------------------

--
-- Table structure for table `zones_to_geo_zones`
--

CREATE TABLE `zones_to_geo_zones` (
  `association_id` int(11) NOT NULL,
  `zone_country_id` int(11) NOT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `geo_zone_id` int(11) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_recorder`
--
ALTER TABLE `action_recorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_action_recorder_module` (`module`),
  ADD KEY `idx_action_recorder_user_id` (`user_id`),
  ADD KEY `idx_action_recorder_identifier` (`identifier`),
  ADD KEY `idx_action_recorder_date_added` (`date_added`);

--
-- Indexes for table `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`address_book_id`),
  ADD KEY `idx_address_book_customers_id` (`customers_id`);

--
-- Indexes for table `address_format`
--
ALTER TABLE `address_format`
  ADD PRIMARY KEY (`address_format_id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`myid`),
  ADD UNIQUE KEY `administrators_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `administrators_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banners_id`),
  ADD KEY `idx_banners_group` (`banners_group`);

--
-- Indexes for table `banners_history`
--
ALTER TABLE `banners_history`
  ADD PRIMARY KEY (`banners_history_id`),
  ADD KEY `idx_banners_history_banners_id` (`banners_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`),
  ADD KEY `idx_categories_parent_id` (`parent_id`);

--
-- Indexes for table `categories_description`
--
ALTER TABLE `categories_description`
  ADD PRIMARY KEY (`categories_description_id`),
  ADD KEY `idx_categories_name` (`categories_name`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countries_id`),
  ADD KEY `IDX_COUNTRIES_NAME` (`countries_name`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupans_id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`currencies_id`),
  ADD KEY `idx_currencies_code` (`code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`),
  ADD KEY `idx_customers_email_address` (`customers_email_address`);

--
-- Indexes for table `customers_basket`
--
ALTER TABLE `customers_basket`
  ADD PRIMARY KEY (`customers_basket_id`),
  ADD KEY `idx_customers_basket_customers_id` (`customers_id`);

--
-- Indexes for table `customers_basket_attributes`
--
ALTER TABLE `customers_basket_attributes`
  ADD PRIMARY KEY (`customers_basket_attributes_id`),
  ADD KEY `idx_customers_basket_att_customers_id` (`customers_id`);

--
-- Indexes for table `customers_info`
--
ALTER TABLE `customers_info`
  ADD PRIMARY KEY (`customers_info_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fedex_shipping`
--
ALTER TABLE `fedex_shipping`
  ADD PRIMARY KEY (`fedex_id`);

--
-- Indexes for table `flate_rate`
--
ALTER TABLE `flate_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geo_zones`
--
ALTER TABLE `geo_zones`
  ADD PRIMARY KEY (`geo_zone_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`label_id`);

--
-- Indexes for table `label_value`
--
ALTER TABLE `label_value`
  ADD PRIMARY KEY (`label_value_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`languages_id`),
  ADD KEY `IDX_LANGUAGES_NAME` (`name`);

--
-- Indexes for table `liked_products`
--
ALTER TABLE `liked_products`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturers_id`),
  ADD KEY `IDX_MANUFACTURERS_NAME` (`manufacturers_name`);

--
-- Indexes for table `manufacturers_info`
--
ALTER TABLE `manufacturers_info`
  ADD PRIMARY KEY (`manufacturers_id`,`languages_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `idx_products_date_added` (`news_date_added`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`newsletters_id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`categories_id`),
  ADD KEY `idx_categories_parent_id` (`parent_id`);

--
-- Indexes for table `news_categories_description`
--
ALTER TABLE `news_categories_description`
  ADD PRIMARY KEY (`categories_description_id`),
  ADD KEY `idx_categories_name` (`categories_name`);

--
-- Indexes for table `news_description`
--
ALTER TABLE `news_description`
  ADD PRIMARY KEY (`news_id`,`language_id`),
  ADD KEY `products_name` (`news_name`);

--
-- Indexes for table `news_to_news_categories`
--
ALTER TABLE `news_to_news_categories`
  ADD PRIMARY KEY (`news_id`,`categories_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `idx_orders_customers_id` (`customers_id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`orders_products_id`),
  ADD KEY `idx_orders_products_orders_id` (`orders_id`),
  ADD KEY `idx_orders_products_products_id` (`products_id`);

--
-- Indexes for table `orders_products_attributes`
--
ALTER TABLE `orders_products_attributes`
  ADD PRIMARY KEY (`orders_products_attributes_id`),
  ADD KEY `idx_orders_products_att_orders_id` (`orders_id`);

--
-- Indexes for table `orders_products_download`
--
ALTER TABLE `orders_products_download`
  ADD PRIMARY KEY (`orders_products_download_id`),
  ADD KEY `idx_orders_products_download_orders_id` (`orders_id`);

--
-- Indexes for table `orders_status`
--
ALTER TABLE `orders_status`
  ADD PRIMARY KEY (`orders_status_id`,`language_id`),
  ADD KEY `idx_orders_status_name` (`orders_status_name`);

--
-- Indexes for table `orders_status_history`
--
ALTER TABLE `orders_status_history`
  ADD PRIMARY KEY (`orders_status_history_id`),
  ADD KEY `idx_orders_status_history_orders_id` (`orders_id`);

--
-- Indexes for table `orders_total`
--
ALTER TABLE `orders_total`
  ADD PRIMARY KEY (`orders_total_id`),
  ADD KEY `idx_orders_total_orders_id` (`orders_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `pages_description`
--
ALTER TABLE `pages_description`
  ADD PRIMARY KEY (`page_description_id`);

--
-- Indexes for table `payments_setting`
--
ALTER TABLE `payments_setting`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `idx_products_model` (`products_model`),
  ADD KEY `idx_products_date_added` (`products_date_added`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`products_attributes_id`),
  ADD KEY `idx_products_attributes_products_id` (`products_id`);

--
-- Indexes for table `products_attributes_download`
--
ALTER TABLE `products_attributes_download`
  ADD PRIMARY KEY (`products_attributes_id`);

--
-- Indexes for table `products_description`
--
ALTER TABLE `products_description`
  ADD PRIMARY KEY (`products_id`,`language_id`),
  ADD KEY `products_name` (`products_name`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_images_prodid` (`products_id`);

--
-- Indexes for table `products_notifications`
--
ALTER TABLE `products_notifications`
  ADD PRIMARY KEY (`products_id`,`customers_id`);

--
-- Indexes for table `products_options`
--
ALTER TABLE `products_options`
  ADD PRIMARY KEY (`products_options_id`,`language_id`);

--
-- Indexes for table `products_options_values`
--
ALTER TABLE `products_options_values`
  ADD PRIMARY KEY (`products_options_values_id`,`language_id`);

--
-- Indexes for table `products_options_values_to_products_options`
--
ALTER TABLE `products_options_values_to_products_options`
  ADD PRIMARY KEY (`products_options_values_to_products_options_id`);

--
-- Indexes for table `products_to_categories`
--
ALTER TABLE `products_to_categories`
  ADD PRIMARY KEY (`products_id`,`categories_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`),
  ADD KEY `idx_reviews_products_id` (`products_id`),
  ADD KEY `idx_reviews_customers_id` (`customers_id`);

--
-- Indexes for table `reviews_description`
--
ALTER TABLE `reviews_description`
  ADD PRIMARY KEY (`reviews_id`,`languages_id`);

--
-- Indexes for table `sec_directory_whitelist`
--
ALTER TABLE `sec_directory_whitelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`sesskey`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`shipping_methods_id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`specials_id`),
  ADD KEY `idx_specials_products_id` (`products_id`);

--
-- Indexes for table `tax_class`
--
ALTER TABLE `tax_class`
  ADD PRIMARY KEY (`tax_class_id`);

--
-- Indexes for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD PRIMARY KEY (`tax_rates_id`);

--
-- Indexes for table `ups_shipping`
--
ALTER TABLE `ups_shipping`
  ADD PRIMARY KEY (`ups_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whos_online`
--
ALTER TABLE `whos_online`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`zone_id`),
  ADD KEY `idx_zones_country_id` (`zone_country_id`);

--
-- Indexes for table `zones_to_geo_zones`
--
ALTER TABLE `zones_to_geo_zones`
  ADD PRIMARY KEY (`association_id`),
  ADD KEY `idx_zones_to_geo_zones_country_id` (`zone_country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_recorder`
--
ALTER TABLE `action_recorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address_book`
--
ALTER TABLE `address_book`
  MODIFY `address_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `address_format`
--
ALTER TABLE `address_format`
  MODIFY `address_format_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `myid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banners_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners_history`
--
ALTER TABLE `banners_history`
  MODIFY `banners_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `categories_description`
--
ALTER TABLE `categories_description`
  MODIFY `categories_description_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `countries_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupans_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `currencies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customers_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers_basket`
--
ALTER TABLE `customers_basket`
  MODIFY `customers_basket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers_basket_attributes`
--
ALTER TABLE `customers_basket_attributes`
  MODIFY `customers_basket_attributes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fedex_shipping`
--
ALTER TABLE `fedex_shipping`
  MODIFY `fedex_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flate_rate`
--
ALTER TABLE `flate_rate`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geo_zones`
--
ALTER TABLE `geo_zones`
  MODIFY `geo_zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `labels`
--
ALTER TABLE `labels`
  MODIFY `label_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1035;

--
-- AUTO_INCREMENT for table `label_value`
--
ALTER TABLE `label_value`
  MODIFY `label_value_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1459;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `languages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `liked_products`
--
ALTER TABLE `liked_products`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `newsletters_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news_categories_description`
--
ALTER TABLE `news_categories_description`
  MODIFY `categories_description_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news_description`
--
ALTER TABLE `news_description`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `orders_products_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_products_attributes`
--
ALTER TABLE `orders_products_attributes`
  MODIFY `orders_products_attributes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_products_download`
--
ALTER TABLE `orders_products_download`
  MODIFY `orders_products_download_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_status_history`
--
ALTER TABLE `orders_status_history`
  MODIFY `orders_status_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_total`
--
ALTER TABLE `orders_total`
  MODIFY `orders_total_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages_description`
--
ALTER TABLE `pages_description`
  MODIFY `page_description_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payments_setting`
--
ALTER TABLE `payments_setting`
  MODIFY `payments_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `products_attributes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT for table `products_description`
--
ALTER TABLE `products_description`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `products_options`
--
ALTER TABLE `products_options`
  MODIFY `products_options_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products_options_values`
--
ALTER TABLE `products_options_values`
  MODIFY `products_options_values_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `products_options_values_to_products_options`
--
ALTER TABLE `products_options_values_to_products_options`
  MODIFY `products_options_values_to_products_options_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sec_directory_whitelist`
--
ALTER TABLE `sec_directory_whitelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  MODIFY `shipping_methods_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `specials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tax_class`
--
ALTER TABLE `tax_class`
  MODIFY `tax_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax_rates`
--
ALTER TABLE `tax_rates`
  MODIFY `tax_rates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ups_shipping`
--
ALTER TABLE `ups_shipping`
  MODIFY `ups_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `zones_to_geo_zones`
--
ALTER TABLE `zones_to_geo_zones`
  MODIFY `association_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
