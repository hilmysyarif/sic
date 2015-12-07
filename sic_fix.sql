-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2015 at 12:08 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sic_fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(10) unsigned NOT NULL,
  `cust_name` text COLLATE utf8_unicode_ci NOT NULL,
  `tour_name` text COLLATE utf8_unicode_ci NOT NULL,
  `tour_date` datetime NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `cust_name`, `tour_name`, `tour_date`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hilmy Syarif', 'AZIMUT 60', '0000-00-00 00:00:00', 'CALL FOR PRICE', 0, '2015-12-07 02:11:14', '2015-12-07 02:11:14'),
(2, 'Hilmy syarif', 'All Indonesia', '0000-00-00 00:00:00', '', 0, '2015-12-07 07:58:20', '2015-12-07 07:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Luxury Yacth', '2015-11-30 18:14:24', '2015-11-30 18:14:24'),
(4, 'Motor Wood/Sail', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Motor Yacht', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Wooden Schooner', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Phinisi Schooner', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Commercial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Charters List', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `charters`
--

CREATE TABLE IF NOT EXISTS `charters` (
  `id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `descr` text COLLATE utf8_unicode_ci NOT NULL,
  `beds` text COLLATE utf8_unicode_ci NOT NULL,
  `berths` text COLLATE utf8_unicode_ci NOT NULL,
  `bath` text COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` text COLLATE utf8_unicode_ci NOT NULL,
  `sqft` text COLLATE utf8_unicode_ci,
  `categories` int(10) unsigned NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `headline` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `charters`
--

INSERT INTO `charters` (`id`, `name`, `slug`, `descr`, `beds`, `berths`, `bath`, `lokasi`, `sqft`, `categories`, `price`, `image`, `headline`, `created_at`, `updated_at`) VALUES
(1, 'Aneecha Catamaran', 'aneecha-catamaran', 'The essence of all things is the result of constant movement. Where better to experience that than on the sea. Its constant movement and changing face is a wonderful reminder of that fact. AneeCha Catamaran was built in that vein, to experience that change with the least resistance, along with the joy of movement. Caressing the ocean, and harnessing the ever changing wind, floating through the universe of change.\r\nAnee’Cha sailing catamaran is built to accommodate a variety of special cruise events tailored to your specific needs. Contact us with our Quick Contact form below and we’ll help you to plan your dream cruise.\r\nFacilities and Service :\r\nYacht charter for day cruise\r\nAccommodate 45 guest\r\nTotal cabins  is 7\r\nBreakfast and lunch BBQ on board\r\nUnlimited mineral water and soft drink\r\nAfternoon tea and coffee\r\nSpa on board additional cost\r\nWine and beer additional cost', '45', '', '0', '2', '24,4', 3, 'Call For Price', 'img/1448933077.jpg', '0', '2015-11-30 18:24:38', '2015-11-30 18:24:38'),
(6, 'Azimut 50', 'azimut-50', '', '', '10 (8+2)', '', '7', '7', 5, '40.000.000', 'img/1449050218.jpg', '0', '2015-12-02 02:56:58', '2015-12-02 02:56:58'),
(7, 'AZIMUT 60', 'azimut-60', '', '', '10 (8+2)', '', '7', '7', 5, 'CALL FOR PRICE', 'img/1449050360.jpg', '0', '2015-12-02 02:59:20', '2015-12-02 02:59:20'),
(8, 'RIVIERA 400 OFFSHORE', 'riviera-400-offshore', '', '', '10 (8+2)', '', '7', '7', 5, '10.000.000', 'img/1449050696.jpg', '0', '2015-12-02 03:04:57', '2015-12-02 03:04:57'),
(11, 'Silolona', 'silolona', '', '10', '', '', '10', '50 ', 6, '', 'img/1449051983.jpg', '', '2015-12-02 03:26:23', '2015-12-02 03:26:23'),
(12, 'Lamima', 'lamima', '', '14', '', '20', '8', '65,2 ', 7, '', 'img/1449052178.jpg', '', '2015-12-02 03:29:38', '2015-12-02 03:29:38'),
(13, 'Perjuangan Liveaboard', 'perjuangan-liveaboard', '', '6 - 7 ', '', '6', '5', '21 ', 4, '', 'img/1449052324.jpg', '', '2015-12-02 03:32:04', '2015-12-02 03:32:04'),
(14, 'Lalunia', 'lalunia', '', '12 ', '', '', '6', '26 ', 4, '', 'img/1449052394.jpg', '', '2015-12-02 03:33:14', '2015-12-02 03:33:14'),
(15, 'Sea Dancer Yacht', 'sea-dancer-yacht', '', '6 - 12 ', '', '', '4', '14,63 ', 3, '', 'img/1449052702.jpg', '', '2015-12-02 03:38:22', '2015-12-02 03:38:22'),
(16, 'Dragoon 130', 'dragoon-130', '', '125 max ', '', '7 ', '11', '40 ', 8, '', 'img/1449053067.jpg', '', '2015-12-02 03:44:28', '2015-12-02 03:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `commentable_id` int(10) unsigned NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL,
  `cust_name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_name`, `email`, `phone`, `country`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hilmy syarif', 'hilmysyarif@gmail.com', '08891503579', 'Indonesia', '', '2015-12-07 02:11:14', '2015-12-07 02:11:14'),
(2, '', '', '', '', '', '2015-12-07 03:01:21', '2015-12-07 03:01:21'),
(3, '', '', '', '', '', '2015-12-07 03:02:15', '2015-12-07 03:02:15'),
(4, '', '', '', '', '', '2015-12-07 03:02:38', '2015-12-07 03:02:38'),
(5, '', '', '', '', '', '2015-12-07 03:03:07', '2015-12-07 03:03:07'),
(6, 'Hilmy syarif', 'hilmysyarif@gmail.com', '8891503579', 'Indonesia', '', '2015-12-07 03:16:52', '2015-12-07 03:16:52'),
(7, 'Hilmy syarif', 'hilmysyarif@gmail.com', '8891503579', 'Indonesia', '', '2015-12-07 03:17:43', '2015-12-07 03:17:43'),
(8, 'Hilmy syarif', 'hilmysyarif@gmail.com', '8891503579', 'Indonesia', '', '2015-12-07 03:18:49', '2015-12-07 03:18:49'),
(9, 'Sea Dancer Yacht', 'hilmysyarif@gmail.com', '8891503579', 'Indonesia', '', '2015-12-07 03:19:50', '2015-12-07 03:19:50'),
(10, 'Sea Dancer Yacht', 'CS@SPICEISLANDCHARTERS.COM', '08891503579', 'Indonesia', '', '2015-12-07 06:15:15', '2015-12-07 06:15:15'),
(11, 'Hilmy syarif', 'hilmysyarif@gmail.com', '08891503579', 'Indonesia', '', '2015-12-07 07:58:20', '2015-12-07 07:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(10) unsigned NOT NULL,
  `tujuan` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `s_content` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `floors` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `state` text COLLATE utf8_unicode_ci NOT NULL,
  `mls` text COLLATE utf8_unicode_ci NOT NULL,
  `quare_feet` text COLLATE utf8_unicode_ci NOT NULL,
  `square_feet` text COLLATE utf8_unicode_ci NOT NULL,
  `bed` text COLLATE utf8_unicode_ci NOT NULL,
  `bath` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` text COLLATE utf8_unicode_ci NOT NULL,
  `sc_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `tujuan`, `slug`, `s_content`, `description`, `price`, `floors`, `address`, `city`, `state`, `mls`, `quare_feet`, `square_feet`, `bed`, `bath`, `image`, `feature`, `sc_id`, `created_at`, `updated_at`) VALUES
(1, 'Raja Ampat Explore', 'raja-ampat-explore', '<p><span style="color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12.9996px; letter-spacing: normal; line-height: 21.6651px;">MV Raja Ampat Explorer is a traditional Indonesian Bugis wooden boat, 33.5 meters in length with 3 decks, and takes 14 passengers. With over 2 decades of experience in the travel industry, the knowledgeable crew is skilled in selecting sites and ascertaining the conditions suitable for the needs and experience of their passengers.</span><br></p>', '<p><br></p>', '$315/PERSON/NIGHT', '7 CABINS', 'RAJA AMPAT', 'SORONG', '', '', '33,50M ', '7,50M ', '14', '9', 'img/1449117073.jpg', '<p>Tagged Feature</p>', 0, '2015-12-02 21:18:25', '2015-12-02 21:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL,
  `original_name` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laradrop_files`
--

CREATE TABLE IF NOT EXISTS `laradrop_files` (
  `id` int(10) unsigned NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `laradrop_files`
--

INSERT INTO `laradrop_files` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(20, '1448886611-20151207075029.jpg', '2015-12-07 12:50:29', '2015-12-07 12:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `lokasis`
--

CREATE TABLE IF NOT EXISTS `lokasis` (
  `id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'LEMBONGAN ISLAND :\r\nBALI, ST', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'KOMODO ISLAND : LABUHAN BAJO, ST', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'LEMBONGAN ISLAND/LOMBOK :\r\nBALI, ST', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'KOMODO ISLAND/FLORES : LABUHAN BAJO, ST', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'BALI/KOMODO ISLAND/ RAJA AMPAT : BALI, ST', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'MUTIARA BEACH', '', '2015-12-02 02:53:46', '2015-12-02 02:53:46'),
(8, 'KOMODO ISLAND/ RAJA AMPAT : BALI, ST', '', '2015-12-02 03:13:05', '2015-12-02 03:13:05'),
(9, 'KOMODO ISLAND/RAJA AMPAT :LABUHAN BAJO, ST', '', '2015-12-02 03:13:32', '2015-12-02 03:13:32'),
(10, 'KOMODO ISLAND/ FLORES/RAJA AMPAT :BALI, S', '', '2015-12-02 03:19:29', '2015-12-02 03:19:29'),
(11, 'Lombok / Raja Ampat Bali, ST', '', '2015-12-02 03:40:19', '2015-12-02 03:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_04_13_020453_create_settings_table', 1),
('2015_06_25_001834_create_destinations_table', 1),
('2015_06_25_002812_create_bookings_table', 1),
('2015_06_25_002812_create_charters_table', 1),
('2014_10_12_000000_create_news_table', 2),
('2015_04_13_020453_create_lara_settings_table', 3),
('2015_08_05_192153_create_surpass_table', 3),
('2015_04_13_020453_create_albums_table', 4),
('2015_12_03_213946_create_comments_table', 4),
('2015_12_03_213946_create_images_table', 5),
('2014_08_26_005557_image_manager_files_table', 6),
('2015_09_16_083228_UpdateImageManagerFilesTable', 6),
('2015_12_03_213946_create_image_table', 7),
('2015_08_09_000000_create_laradrop_files_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_content` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `category`, `s_content`, `content`, `publisher`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Diving License: Experiencing The Splendid Underwater Paradise Of Indonesia', 'diving-license-experiencing-the-splendid-underwater-paradise-of-indonesia', '2', '<p><span style="color: rgb(68, 68, 68); font-family: Lato; font-size: 15px; letter-spacing: normal; line-height: 24px; text-align: justify;">The beauty of Indonesia’s underwater is a paradise for so many people. Even many foreign tourists visit Indonesia to experience the riches of Indonesia’s underwater by diving in various seas all over Indonesia [...]</span><br></p>', '<p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">The beauty of Indonesia’s underwater is a paradise for so many people. Even many foreign tourists visit Indonesia to experience the riches of Indonesia’s underwater by diving in various seas all over Indonesia. Unfortunately, certain areas require divers to have diving licenses before exploring the thrilling underwater riches.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">In order to attain a diving license, you need to take a diving course and choose one from many kinds of courses. However, the most common one is the&nbsp;<em>open water diving course</em>. Through this course, you will learn about the basic principles of scuba diving, confined water dives to learn basic scuba skills, and have an open water dive in a sea.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">During the course, you will learn to use the basic gear for diving as well, including: the mask, snorkel, fin, regulator, buoyancy control device, and a tank. The equipments are varied, depending on the water weather, in which you will learn as well during the course.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">In Indonesia, you can take your diving courses to obtain a diving license in certain cities, for example in Jakarta and Bali. Here are the list to have a diving course in Jakarta and Bali:</p><ol style="margin: 30px 0px 30px -20px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="margin-bottom: 3px;"><strong style="font-weight: bold;">Jakarta</strong></li></ol><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">PADI Course at Divemasters</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jl. Bangka Raya No. 39A</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Phone No. 021 7199 045</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">divemasters.co.id</p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">PADI Open Water by Sea Pearl</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jl. Susilo III No. 3</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jakarta 11450</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Phone No. 021 563 8265, 5696 5834, 560 6074</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><a href="mailto:seapearlsc@yahoo.com" style="color: rgb(22, 159, 218); transition-timing-function: linear; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgba(115, 174, 8, 0.4); word-wrap: break-word; padding-bottom: 2px;">seapearlsc@yahoo.com</a>;&nbsp;<a href="mailto:info@seapearldc.com" style="color: rgb(22, 159, 218); transition-timing-function: linear; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgba(115, 174, 8, 0.4); word-wrap: break-word; padding-bottom: 2px;">info@seapearldc.com</a></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">seapearldc.com</p><ol start="2" style="margin: 30px 0px 30px -20px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="margin-bottom: 3px;"><strong style="font-weight: bold;">Bali</strong></li></ol><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Bali Diving</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jl. By Pass Ngurah Rai No. 46E, Sanur, Bali</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">0361 2707 91</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">balidiving.com</p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Atlantis Bali</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jl. By Pass Ngurah Rai No. 96E, Sanur, Bali</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">0361 284 131, 0361 286 367</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><a href="mailto:info@atlantis-bali.com" style="color: rgb(22, 159, 218); transition-timing-function: linear; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgba(115, 174, 8, 0.4); word-wrap: break-word; padding-bottom: 2px;">info@atlantis-bali.com</a></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">atlantis-bali-diving.com</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">If you take a course at PADI or SSI, one of the requirements in taking the course is the ability to swim for around 200m. Yet, you can learn the basic swimming lesson first if you are not able to swim for 200m.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Other than these courses, there are still many other courses you can take in Jakarta or Bali or even in other cities such as Manado. So, do not hesitate to enroll yourself for a diving course and feel the experience of discoverin</p>', '2', 'img/1449130708.jpg', '2015-12-03 13:18:28', '2015-12-03 13:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE IF NOT EXISTS `news_categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'News', '2015-12-02 07:21:07', '2015-12-02 07:21:07'),
(2, 'Artikel', '2015-12-02 07:21:57', '2015-12-02 07:21:57'),
(4, 'Uncategorized', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(10) unsigned NOT NULL,
  `tour_date` datetime NOT NULL,
  `trip_length` text COLLATE utf8_unicode_ci NOT NULL,
  `route` text COLLATE utf8_unicode_ci NOT NULL,
  `dept_from` text COLLATE utf8_unicode_ci NOT NULL,
  `arrive_at` text COLLATE utf8_unicode_ci NOT NULL,
  `space` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `value`, `created_at`, `updated_at`) VALUES
('about', 's:4417:"<div class="messagebox_text"><p style="text-align: justify;"><span style="color: rgb(68, 68, 68); letter-spacing: 0.1px; line-height: 1.846;">​At Spice Island charters, we love Indonesia – and we want you to love it as well! From Labuhan Bajo to Raja Ampat, from Bali to Lombok, we have the largest selection of luxury yachts, dive boats and helicopter tours ​available online. Packages vary from tiny overnight dive boats to the largest luxury yachts sailing the Spice Island seas, so there is definitely something here for you!Can’t find the package you want? Simply drop us an email and we’ll find – or create – that perfect Indonesian holiday.</span><br></p></div><div class="messagebox_text"><p style="text-align: justify;"><span style="color: #444444;">Our aim is to make the charter booking process easier for you, simpler for the ship captains, and more respectful for the environment in this beautiful country.</span></p></div><div class="cap-section"><div class="wpb_row vc_row-fluid" style="padding-bottom: 30px;padding-top: 30px;margin-bottom: 4em;"><div class="container">	<div class="vc_span3 profile wpb_column column_container">		<div class="wpb_wrapper">					</div> 	</div> 	<div class="vc_span3 profile wpb_column column_container">		<div class="wpb_wrapper">				<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom wpb_start_animation">		<div class="wpb_wrapper">			<p><a href="http://spiceislandcharters.com/wp-content/uploads/2014/04/k0fC4Hft.jpeg"><img class="alignnone wp-image-67502 size-full pull-left" src="http://spiceislandcharters.com/wp-content/uploads/2014/04/k0fC4Hft.jpeg" alt="k0fC4Hft" width="550" height="550" style="width: 271px; float: left; height: 508.125px;"></a></p><h4>   Phil Rickard</h4><h5><span style="color: #c0c0c0;">    </span><span style="color: rgb(156, 156, 148);">Founder</span></h5>		</div> 	</div> 	<div class="wpb_text_column wpb_content_element  vc_custom_1416903554108">		<div class="wpb_wrapper">			<p style="text-align: left; line-height: 1.8;">    Phil Rickard is a global entrepreneur leveraging over 25 years experience in Indonesia to found and<span style="line-height: 1.2; letter-spacing: 0.1px;">develop successful ventures in       Resources, Energy, and I.T. He is the CEO of the BlackGold Group which is a coal mining company targeting the rapidly growing </span>    <span style="line-height: 1.2; letter-spacing: 0.1px;">power    plant business in Indonesia with specific focus on supplying power plants in the Riau Region of Sumatra.</span></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><br></p><p style="text-align: justify;"><a href="http://spiceislandcharters.com/wp-content/uploads/2014/04/228227_10151361784087502_572714633_n.jpg" style="letter-spacing: 0.1px; line-height: 1.846; background-color: rgb(238, 238, 238);"><img class="alignnone size-medium wp-image-66263 img-rounded pull-right" src="http://spiceislandcharters.com/wp-content/uploads/2014/04/228227_10151361784087502_572714633_n-300x300.jpg" alt="228227_10151361784087502_572714633_n" style="float: right;"></a><span style="font-size: 14px;">      </span><span style="font-size: 14px;">   </span></p><p style="text-align: justify;">    <span style="color: inherit; font-family: inherit; letter-spacing: 0.1px; font-size: 18px; line-height: 1.1;">Andy Roberts</span><br></p><p style="text-align: justify;"><span style="color: rgb(128, 128, 128); font-family: inherit; line-height: 1.1; letter-spacing: 0.1px;">    General Manager</span></p></div></div></div></div><div class="vc_span3 profile wpb_column column_container"><div class="wpb_wrapper"> 	<div class="wpb_text_column wpb_content_element  vc_custom_1416903570287">		<div class="wpb_wrapper">			<p style="text-align: justify;">    Mr Andy Roberts is a global Internet professional with over 15 years experience in telecommunications, technology and startups</p>		</div> 	</div> 		</div> 	</div> 	<div class="vc_span3 profile wpb_column column_container">		<div class="wpb_wrapper">					</div> 	</div> </div></div></div>";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('address', 's:2219:"<p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;"><span style="margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-weight: 700;">PT. ASTAGA DOTCOM</span></p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;"><span style="margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-weight: 700;">SPICE ISLAND CHARTERS</span></p><p><br style="margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; line-height: 18px;"></p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;">MENARA KADIN 7TH FLOOR</p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;">JL. HR. RASUNA SAID KAV 2-3 BLOK X5</p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;">EAST KUNINGAN, SETIABUDI</p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;">SOUTH JAKARTA 12590</p>";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('company_profile', 's:1012:"<p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Spice Island Charters is a premiere Indonesian yacht rental agency located in Jakarta. We provide specialized quality tours and travel services in Indonesia, the largest archipelago with over 17,000 tropical islands, rich in exotic diversity and culture.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Our focus is handling and booking yachts for Indonesian destinations including: Bali, Lombok, Labuhan Bajo, Manado, Wakatobi Island, Raja Ampat Island, and many more exquisite destinations. We provide FULL FIRST CLASS SERVICE! – Including – transportation for travelers from the airport to the yacht. You chose the venues and we take care of the rest.  <strong style="font-weight: bold;"><em>First class all the way!</em></strong></p>";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('copyright', 's:28:"© 2015 Spice Island Charter";', '0000-00-00 00:00:00', '2015-12-02 07:33:45'),
('desc_about', 's:368:"<p><span style="font-family: Lato; font-size: 13px; letter-spacing: normal; line-height: 20.15px;">Spice Island Charters is a premiere Indonesian yacht rental agency located in Jakarta. We provide specialized quality tours and travel services in Indonesia, the largest archipelago with over 17,000 tropical islands, rich in exotic diversity and culture.</span><br></p>";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('description', 's:0:"";', '0000-00-00 00:00:00', '2015-12-02 07:33:45'),
('email', 's:26:"CS@SPICEISLANDCHARTERS.COM";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('facebook', 's:44:"https://www.facebook.com/Spiceislandcharters";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('keywords', 's:20:"Spice Island Charter";', '0000-00-00 00:00:00', '2015-12-02 07:33:45'),
('phone', 's:17:"(+62) 21 57903975";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('privacy', 's:6496:"<p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">At <strong style="font-weight: bold;">Spice Island Charters</strong> we are committed to ensuring and protecting your privacy at any time you are on our website or communicate electronically with our staff.<br>Our <strong style="font-weight: bold;">Privacy Policy</strong> is contained below and provides a detailed explanation as to how we may use your personal information which we collect through two principal means: through technology (for example IP addresses and cookies) and through your voluntary submission of information. This statement also provides you with information on how to prevent your personal information from being collected or shared when you visit the <strong style="font-weight: bold;">Spice Island Charters website,</strong> respond to our web-based promotions or send us an e-mail.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><strong style="font-weight: bold;">1. Information Collection</strong><br>Data can be collected and processed when our website is in operation by you. The following are approved methods of collection:<br>a. If you register for information by filling out a form we can collect the information provided.<br>b. Traffic data, weblogs, location data, and any other communication can be collected.  These details come from your visit to our site and any resource tools you use while on the site.<br>c. Any communication on our website or to personnel allows us to collect information.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><strong style="font-weight: bold;">2. Use of Cookies</strong><br>Circumstances may arise when we may need to gather information about your computer to help provide appropriate services or products to you.  The data gathered is solely statistical data, which may be shared with advertisers.<br>The facts collected about you are statistical only. No identifying information will be shared about our visitors and how they made use of our site.  No personal details will ever be shared.<br>Cookies are used to collect general online usage by using a cookie file.  If used this cookie file is downloaded without prompting.  It will be placed on your hard drive with information transferred to the hard drive allowing the cookies to be used for data collection.  A cookie is used to improve any services/ products, or overall website characteristic we offer you.<br>We may use such IP addresses to help diagnose problems with our servers & track movement within our website</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Most industry-standard web browsers have an option that allows you to turn off all cookies or have your computer inform you each time that a request to place a cookie is being made. If you decline to accept cookies you may not have access to or be limiting access to, some features on the Worldwide Dive and Sail website</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"> </p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><strong style="font-weight: bold;">3. Use of Your Information</strong><br>Information stored and collected about you may be used for the following purposes:<br>a.  To provide the products and services you request<br>b. To improve the content of our website and enhance your live aboard diving planning experience.<br>Notification re-changes or improvements may be sent to you in regards to product or service changes that could affect our service to you.<br>Existing customers can be contacted on the topic of goods or services related to a previous sale, if we feel you might be interested in these additional topics.<br>Added use of your data may include permission for third parties to use your data. This permission would be granted by you in regards to unrelated products or services that may be in your interests. We or third parties can only contact you in regards to this information if consent has been provided for information collection.<br>Third party contact or communications from our website, as a new customer, is only made if you have granted us permission. These communications are only offered for information you consented to and no other unrelated information.<br>Data that you do not want us to use or third parties to use can be withheld, once consent has been given regarding our collection of your data. We will always provide you with an opportunity to decline communications and our or third party data usage.<br>Identifiable data, which could be used to disclose who you are, is never shared.  We only provide statistical related data about our visitors to third parties like advertisers to ensure your privacy.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><strong style="font-weight: bold;">4. Storing & Protecting Your Personal Data</strong><br>We take all reasonable processes to ensure your data is secure and in agreement with our <strong style="font-weight: bold;">Privacy Policy</strong> as outlined here.<br>Transmission of data on the internet can never be ultimately secure. We do not and cannot guarantee security of information collected electronically or transmitted; however, we take all necessary steps to provide the best security available.  As a result of our inability to guarantee safety, you are submitting information to us at your own risk.  Where needed a password may be necessary to access areas of our site. You are responsible for the safety and confidentiality of the password you generate.<br><strong style="font-weight: bold;">Spice Island Charters</strong> provide you the opportunity to opt-in to receive communications from us in the form of a “newsletter”.</p>";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('site_url', 's:28:"http://sic-s100.rhcloud.com/";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('terms', 's:26077:"<p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">Please take your time to carefully read the following terms and conditions. With your confirmed booking, you automatically agree with these conditions</strong>.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold; font-size: 13px;">1.Inclusions and exclusions</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">1.1 Inclusions:</strong></p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;"> Transfer from airport to the yacht or boat and back to the nearest airport only (according to cruise destination) by boat not by Spice Island Charters.</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;"> Full board including all soft drinks on board (excluding beer, spirits, wine)</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;"> Daily three dives during the day plus one night-dive, subject to weather conditions and cruise (no diving on day of departure and arrival)</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Multilingual guides on board (Europeans and Indonesians)</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;"> Land excursions, according to safari programmed</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">2.1 Exclusions:</strong></p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Fuel surcharge and port fees per pax 200 US$ for Raja Ampat, Cenderawasih Bay, Banda Sea & Maluku. For Komodo cruises, no fuel surcharge applies if the port of arrival/departure is Bima/Labuan Bajo/Maumere. The fuel surcharge applies if harbors like Benoa (Bali), Alor or similar are scheduled</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">National Park Fees and Contributions to villages: 130 US$ Raja Ampat, 200 US$ for Cenderawasih Bay, 75 US$ for all other cruises. <em>Note: These fees are subject to change</em> <em>without prior notice and new fees could be introduced at any time</em>.</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">o NITROX supplement (see price list in every boat)</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">o Scuba diving courses (see price list in every boat)</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">o Diving and snorkeling gear, beer, wine and spirits</p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Tips for crew: Clients will pay on board a service charge of minimum US$ 10 per night per person, this is an obligatory fee. Clients who wish to give additional gratuities, can do so in a separate envelope.</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Locally domestic airport-taxes and departure tax (max. 40.000 IDR for national flights and 150.000 IDR for international flights) per person</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Insurance for cancellation fee</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">2.Reservations and deposits</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">2.1 Deposit for individual bookings:</strong></p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;"> All reservations must be made by electronic mail or facsimile transmission, and state the cruise date to which the reservation refers, the number of berths required, all passenger names and any special requirements. All prices published on the website are meant as cash prices, respectively when money is wired via bank transfer.</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;"> A booking fee of 30% of the total price per person is to be sent upon booking to Spice Island Charters account no later than 10 days after the date the reservation is made. If this booking fee is not received within the stated period of time, then your reservation is nullified and we cannot guarantee you that your required berths will be available for your desired cruise.</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">3.Payment of the balance Individual Bookings</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Payment of the balance must be made directly to Spice Island Charters as following:</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Upon booking: 30% of the cruise price 60 days prior to departure date: remaining 70% of the cruise price.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">If full payment of the balance is not received by this date then Spice Island Charters can cancel the booking and enforce cancellation policy as set out.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">4.Short notice bookings</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Full payment must be made to Spice Island Charters at the time of booking if the reservation is made less than 60 days prior to departure.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">5.Changes of reservations</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">5.1 General:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">If an  individual guest wishes to cancel or change a reservation, in any way, it must be done by facsimile transmission or electronic mail to Spice Island Charters at the address below.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Spice Island Charter</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">PT Astaga Dotcom</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Jalan HR Rasuna Sahid Kav 2-3 , Menara Kadin 7st Floor Kuningan, South Jakarta. Indonesia.12590.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Email: cs@spiceislandcharters.com</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Phone: +62 89611 728 713</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">5.2 Amendment fees:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">An administrative charge of 40 US$ will be charged if any changes are made to your booking 121 days or less prior to departure date. Changing of a cruise date will be treated as cancellation and new booking of a cruise. The date that Spice Island Cahrters receives the alterations to your booking by electronic mail, facsimile transmission or registered post will be the date used to determine whether a fee will be charged. On Saturdays, Sundays and public holidays, the next working day will count.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">5.3 Cancellation fees:</strong></p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;"> If the reservation is cancelled more than 120 days prior to the departure date then a cancellation fee of 135 US$ per person per booking will be deducted from the deposit and the remaining amount returned or credited against any future bookings.</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;"> The date that Spice Island Charters receives the alterations to the reservation by electronic mail, or facsimile transmission will be the date used to determine whether a fee will be charged. On Saturdays, Sundays and public holidays, the next working day will count.</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">5.4 Cancellation policy for individual bookings:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">The following cancellation fees are charged for cancellations within 120 days or less prior to departure:</p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">  102 – 132 days prior to departure 10% of the cruise price o</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">91 – 101 days prior to departure 25% of the cruise price</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">61- 90 days prior to departure 50% of the cruise price</li><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">60 – 0 days prior to departure 100% of the cruise price</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">5.5 Travel cancellation insurance:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">It is highly recommended that all customers purchase a travel cancellation insurance.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">5.6 Substitute Passengers:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">If for any reason a passenger cannot make a trip that has already been booked, then the reservation can be transferred to another person. The new passenger will be subject to the contract conditions of Spice Island Charters. Passenger substitution will be allowed up to 3 days, or less depending on the cruise, prior to the day of departure. Spice Island Charters takes no responsibility for changes to any bookings not made by Spice Island Charters on behalf of the passenger (i.e. air tickets, hotel reservation etc.). A fee will be charged pursuant to Clause 5.2.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">5.7 Scuba diving insurance:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">We highly recommend that every diver has a diving insurance</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">6. Schedules and Itineraries:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">All scheduled cruises can be booked as full-boat charters. There are certain changes to the scheduled itineraries allowed by the chartering customer subject to prior arrangement and approval by Spice Island Charters.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">6.1 Unscheduled Full Boat Charter Destinations and Itineraries:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">If the charter is booked to sail outside the scheduled cruise itinerary or to another area, then the following terms are applicable:</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">o    A charter deposit to be paid as set out .</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">o    A mobilization / demobilization fee will be added to the total cost of the cruise depending on locations. The price of this fee will be dependent on the location of the charter and will be given to the client prior to the due date of the deposit. All domestic airfares and transportation costs will be paid by the customers at the published rate.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">7. Changes to brochure description and/or website, changes to rates and transportation costs</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">7.1 Changes before conclusion of the contract:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Spice Island Charters reserves the right to make alterations and changes to brochure information, service descriptions and prices in the brochures and pricelists at any time before the time of booking. Should the necessity arise, Spice Island Charters will inform the agent or individual client prior to entering the contract. The date the contract is entered is the date that a booking fee is received by Spice Island Charters.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">7.2 Changes to price after the contract has been entered:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">In rare circumstances, it is possible that prices must be increased. The circumstances under which this may occur are as follows:</p><ol style="margin: 30px 0px 30px -20px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><li style="margin-bottom: 3px;">Increases in transportation costs (including fuel costs)</li><li style="margin-bottom: 3px;">Increases in state taxes and duties (i.e. embarkation/disembarkation fees, sales taxes etc.)</li><li style="margin-bottom: 3px;">Currency fluctuations.</li><li style="margin-bottom: 3px;">Spice Island Charters reserves the right to raise the agreed price up to 45 days prior to departure.</li></ol><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">7.3 Itinerary and service changes after booking and before departure:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Spice Island Charters reserves the right to change the itinerary and particular services if required due to unforeseen or unavoidable circumstances. Spice Island Charters will make every effort to offer equivalent alternatives of a comparable standard. Spice Island Charters will inform the agent or individual client of such changes at the earliest possible date and the effect they will have on price.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold; font-size: 13px;">8.Trip cancellation by Spice Island Charters</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">8.1 Cancellation for reasons caused by the customer:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Spice Island Charters reserves the right to cancel a booking if actions on the customer’s part give justifiable cause to do so. In such instance Spice Island Charters will refund any payments already made. Further claims against Spice Island Charters will not be entertained.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">8.2 Force Majeure and unpredictable acts of man:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Reserves the right to cancel a trip for reasons of Force Majeure (i.e. natural disasters, epidemics etc.) or unavoidable acts of man (i.e. war, riots, strikes etc.). In the event of this happening, Spice Island Charter will advise you at the earliest possible date.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">8.3 Trip cancellation by Spice Island Charters for other reasons:</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Spice Island Charters reserves the right to cancel a trip for other reasons that are unavoidable and will inform the customer at the earliest possible date.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">9</strong>.<strong style="font-weight: bold; font-size: 13px;">Changes to the itinerary and services</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">If Spice Island Charters deems it necessary to change an itinerary during a trip (i.e. due to weather conditions etc.) and the trip is adversely affected, then Spice Island Charters will refund the difference between the agreed tour price and the services actually provided.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><b style="font-weight: bold;">10.</b> <strong style="font-weight: bold; font-size: 13px;">Damages resulting from personal injury, illness or death</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Damages resulting from illness, personal injuries or death which may be sustained by reason of, or while engaged on, any trip whether due to the ownership, maintenance, use, operation or control of any aircraft, helicopter, automobile, bicycle, boat, vehicle, hotel, common carrier or any other conveyance used in carrying out these trips. Spice Island Charters assumes no liability due to any cause whatsoever whether caused by failure or delay or other irregularity, acts or omissions occurring during a trip under which the means of transportation or other service provided thereby is offered or supplied by owners, operators or public carriers for and on behalf of Spice Island Charters. Spice Island Charters shall not be responsible for any injury to person (whether or not resulting in death) or damage to property arising out of any act of war, insurrection, revolt or other civil uprising or military action occurring in the countries of origin, destination or passage. In case of a medical problem arising during the voyage, either on board or on shore, which results in costs for evacuation, use of aircraft or repatriation, the responsibility for payment of these costs belongs solely to the passenger</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold; font-size: 13px;">11. Loss or damage to personal belongings</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Spice Island Charters does not take any responsibility for loss or damage to guests’ personal belongings that are due to Force Majeure causes (refer to Clause 8.2).</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold;">12. </strong><strong style="font-weight: bold; font-size: 13px;">Disabilities</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">By forwarding of deposit, the agent or individual guest certifies that the passenger does not have any mental, physical or other condition or disability that would create a hazard for him/herself or other passengers. Spice Island Charters reserve the right to cancel or withdraw any person as a member of the tour at any time.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;"><strong style="font-weight: bold; font-size: 13px;">13. Payment</strong></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Payment by bank transfer as detailed below: (transfer fees are to be paid by the client or guest)</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Bank Name                       : The Standard Chartered Bank</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Bank Address                    : Priority Banking Center, 6 Battery Road 2 end Floor. Singapore 049909</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Account name                    : Pacific Century Limited</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Account number (<strong style="font-weight: bold;">US$)    </strong>: 01-7-015657-5</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Swift code                            : SCBLSGSG</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal;">Please insert full names plus the requested cruise number in the transfer details.</p>";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('title', 's:20:"Spice Island Charter";', '0000-00-00 00:00:00', '2015-12-02 07:33:45'),
('twitter', 's:30:"https://twitter.com/Sicharters";', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL,
  `cust_name` text NOT NULL,
  `testimonial` text NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `cust_name`, `testimonial`, `image`, `created_at`, `updated_at`) VALUES
(0, 'Hilmy syarif', '<p>Sangat bagus pelayanannya</p>', 'img/1449132421.png', '2015-12-03 08:47:01', '2015-12-03 08:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@admin.com', '$2y$10$VLmYgkP1xoyE1u1AynMO8eZSieZCgdUsYz4CjF4OwGE8CehG2h5JG', 'YRTuMD2Q1GCck0k7abwgEpOmF2P2dERfCHxguzpO0A0q55dqDJsJQMlQQEmC', 'img/1449132022.png', '2015-12-02 01:10:36', '2015-12-03 14:05:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charters`
--
ALTER TABLE `charters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_id_commentable_type_index` (`commentable_id`,`commentable_type`),
  ADD KEY `comments_user_id_index` (`user_id`),
  ADD KEY `comments_commentable_id_index` (`commentable_id`),
  ADD KEY `comments_commentable_type_index` (`commentable_type`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laradrop_files`
--
ALTER TABLE `laradrop_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD UNIQUE KEY `key` (`key`);

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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `charters`
--
ALTER TABLE `charters`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laradrop_files`
--
ALTER TABLE `laradrop_files`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
