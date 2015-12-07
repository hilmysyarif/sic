-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Inang: 127.7.19.2:3306
-- Waktu pembuatan: 04 Des 2015 pada 04.30
-- Versi Server: 5.5.45
-- Versi PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `sic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cust_name` text COLLATE utf8_unicode_ci NOT NULL,
  `tour_name` text COLLATE utf8_unicode_ci NOT NULL,
  `tour_date` datetime NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `categories`
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
-- Struktur dari tabel `charters`
--

CREATE TABLE IF NOT EXISTS `charters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `charters`
--

INSERT INTO `charters` (`id`, `name`, `slug`, `beds`, `berths`, `bath`, `lokasi`, `sqft`, `categories`, `price`, `image`, `headline`, `created_at`, `updated_at`) VALUES
(1, 'Aneecha Catamaran', 'aneecha-catamaran', '45', '', '0', '2', '24,4', 3, 'Call For Price', 'img/1448933077.jpg', '0', '2015-11-30 18:24:38', '2015-11-30 18:24:38'),
(6, 'Azimut 50', 'azimut-50', '', '10 (8+2)', '', '7', '7', 5, '40.000.000', 'img/1449050218.jpg', '0', '2015-12-02 02:56:58', '2015-12-02 02:56:58'),
(7, 'AZIMUT 60', 'azimut-60', '', '10 (8+2)', '', '7', '7', 5, 'CALL FOR PRICE', 'img/1449050360.jpg', '0', '2015-12-02 02:59:20', '2015-12-02 02:59:20'),
(8, 'RIVIERA 400 OFFSHORE', 'riviera-400-offshore', '', '10 (8+2)', '', '7', '7', 5, '10.000.000', 'img/1449050696.jpg', '0', '2015-12-02 03:04:57', '2015-12-02 03:04:57'),
(11, 'Silolona', 'silolona', '10', '', '', '10', '50 ', 6, '', 'img/1449051983.jpg', '', '2015-12-02 03:26:23', '2015-12-02 03:26:23'),
(12, 'Lamima', 'lamima', '14', '', '20', '8', '65,2 ', 7, '', 'img/1449052178.jpg', '', '2015-12-02 03:29:38', '2015-12-02 03:29:38'),
(13, 'Perjuangan Liveaboard', 'perjuangan-liveaboard', '6 - 7 ', '', '6', '5', '21 ', 4, '', 'img/1449052324.jpg', '', '2015-12-02 03:32:04', '2015-12-02 03:32:04'),
(14, 'Lalunia', 'lalunia', '12 ', '', '', '6', '26 ', 4, '', 'img/1449052394.jpg', '', '2015-12-02 03:33:14', '2015-12-02 03:33:14'),
(15, 'Sea Dancer Yacht', 'sea-dancer-yacht', '6 - 12 ', '', '', '4', '14,63 ', 3, '', 'img/1449052702.jpg', '', '2015-12-02 03:38:22', '2015-12-02 03:38:22'),
(16, 'Dragoon 130', 'dragoon-130', '125 max ', '', '7 ', '11', '40 ', 8, '', 'img/1449053067.jpg', '', '2015-12-02 03:44:28', '2015-12-02 03:44:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cust_name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `destinations`
--

INSERT INTO `destinations` (`id`, `tujuan`, `slug`, `s_content`, `description`, `price`, `floors`, `address`, `city`, `state`, `mls`, `quare_feet`, `square_feet`, `bed`, `bath`, `image`, `feature`, `created_at`, `updated_at`) VALUES
(1, 'Raja Ampat Explore', 'raja-ampat-explore', '<p><span style="color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12.9996px; letter-spacing: normal; line-height: 21.6651px;">MV Raja Ampat Explorer is a traditional Indonesian Bugis wooden boat, 33.5 meters in length with 3 decks, and takes 14 passengers. With over 2 decades of experience in the travel industry, the knowledgeable crew is skilled in selecting sites and ascertaining the conditions suitable for the needs and experience of their passengers.</span><br></p>', '<p><br></p>', '$315/PERSON/NIGHT', '7 CABINS', 'RAJA AMPAT', 'SORONG', '', '', '33,50M ', '7,50M ', '14', '9', 'img/1449117073.jpg', '<p>Tagged Feature</p>', '2015-12-02 21:18:25', '2015-12-02 21:31:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `image_files`
--

CREATE TABLE IF NOT EXISTS `image_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `attributes` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasis`
--

CREATE TABLE IF NOT EXISTS `lokasis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `lokasis`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
('2015_08_05_192153_create_surpass_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_content` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `category`, `s_content`, `content`, `publisher`, `image`, `created_at`, `updated_at`) VALUES
(3, 'A Heaven At The East-Most End Of Flores (1)', 'a-heaven-at-the-east-most-end-of-flores-1', '2', '<p><span style="color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12.9996px; letter-spacing: normal; line-height: 23.8322px; text-align: justify;">Alor Islands, despite its short name, this archipelago harbors a long list of splendors. For underwater enthusiast or cultural enthusiasts, Alor must be the perfect holiday destination. Alor is administratively part of Flores, in the province of East Nusa Tenggara. [...]</span><br></p>', '<p style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 1.0833em; line-height: 1.8333em; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal; text-align: justify;"><span style="font-size: 12px;">Alor Islands, despite its short name, this archipelago harbors a long list of splendors. For underwater enthusiast or cultural enthusiasts, Alor must be the perfect holiday destination. Alor is administratively part of Flores, in the province of East Nusa Tenggara. Alor is a name pinned to the regency, the archipelago, as well as the main island of the archipelago. This archipelago comprises of 20 islands and 17 sub-districts; only 9 islands are inhabited.</span></p><p style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 1.0833em; line-height: 1.8333em; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal; text-align: justify;"><span style="font-size: 12px;">Although this island is not as popular as Komodo Island, its neighbor, Alor’s waters offer as fantastic as Komodo’s waters. As a matter of fact, Alor offers at least 50 dive spots alongside Alor Islands and Pantar Island as well as the islets around them. Twenty of them consider in prime condition and the world’s best, such as: Pantar Strait.</span></p><p style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 1.0833em; line-height: 1.8333em; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal; text-align: justify;"><span style="font-size: 12px;">Those who are experienced diving in Alor said that the underwater beauties outclass those in the Caribean in America. Aside the waters, its marine spectacles are also spectacular. Take a look at the pristine coral reefs and creatures of deep; you will be amazed in awe during your diving time. Whales, sharks, mola- mola or sunfish, manta rays are just a few of many enchanting creatures under the waters of Alor. Numerous must-dive spots in Alor are really worth to explore, such as: Baruna’s Point, Never- Never Wall, Cave Point, Barrel Sponge Wall, Mola-Mola Point, Night Snacks, Rocky Point, Eagle Ray Point, Crocodile Rock, Shark Close, and many more.</span></p><p style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 1.0833em; line-height: 1.8333em; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal; text-align: justify;"><span style="font-size: 12px;">On land, visit the exciting culture of this archipelago. From Moko kettledrum to the 800 Al Qur’an are all available and worth to visit in Alor. Other than that, experiencing the indigenous way of lives is also worth to try during visiting Alor.</span></p><p style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 1.0833em; line-height: 1.8333em; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal; text-align: justify;"><span style="font-size: 12px;">Pay a visit to Alor, explore the dive spots, and learn the historical story of Alor!</span></p>', '1', 'img/1449062388.jpg', '2015-12-02 06:19:48', '2015-12-02 06:19:48'),
(4, 'Diving License: Experiencing The Splendid Underwater Paradise Of Indonesia', 'diving-license-experiencing-the-splendid-underwater-paradise-of-indonesia', '2', '<p><span style="color: rgb(68, 68, 68); font-family: Lato; font-size: 15px; letter-spacing: normal; line-height: 24px; text-align: justify;">The beauty of Indonesia’s underwater is a paradise for so many people. Even many foreign tourists visit Indonesia to experience the riches of Indonesia’s underwater by diving in various seas all over Indonesia [...]</span><br></p>', '<p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">The beauty of Indonesia’s underwater is a paradise for so many people. Even many foreign tourists visit Indonesia to experience the riches of Indonesia’s underwater by diving in various seas all over Indonesia. Unfortunately, certain areas require divers to have diving licenses before exploring the thrilling underwater riches.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">In order to attain a diving license, you need to take a diving course and choose one from many kinds of courses. However, the most common one is the&nbsp;<em>open water diving course</em>. Through this course, you will learn about the basic principles of scuba diving, confined water dives to learn basic scuba skills, and have an open water dive in a sea.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">During the course, you will learn to use the basic gear for diving as well, including: the mask, snorkel, fin, regulator, buoyancy control device, and a tank. The equipments are varied, depending on the water weather, in which you will learn as well during the course.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">In Indonesia, you can take your diving courses to obtain a diving license in certain cities, for example in Jakarta and Bali. Here are the list to have a diving course in Jakarta and Bali:</p><ol style="margin: 30px 0px 30px -20px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="margin-bottom: 3px;"><strong style="font-weight: bold;">Jakarta</strong></li></ol><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">PADI Course at Divemasters</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jl. Bangka Raya No. 39A</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Phone No. 021 7199 045</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">divemasters.co.id</p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">PADI Open Water by Sea Pearl</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jl. Susilo III No. 3</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jakarta 11450</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Phone No. 021 563 8265, 5696 5834, 560 6074</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><a href="mailto:seapearlsc@yahoo.com" style="color: rgb(22, 159, 218); transition-timing-function: linear; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgba(115, 174, 8, 0.4); word-wrap: break-word; padding-bottom: 2px;">seapearlsc@yahoo.com</a>;&nbsp;<a href="mailto:info@seapearldc.com" style="color: rgb(22, 159, 218); transition-timing-function: linear; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgba(115, 174, 8, 0.4); word-wrap: break-word; padding-bottom: 2px;">info@seapearldc.com</a></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">seapearldc.com</p><ol start="2" style="margin: 30px 0px 30px -20px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="margin-bottom: 3px;"><strong style="font-weight: bold;">Bali</strong></li></ol><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Bali Diving</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jl. By Pass Ngurah Rai No. 46E, Sanur, Bali</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">0361 2707 91</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">balidiving.com</p><ul style="margin: 18px 0px 30px 6px; padding: 0px; font-size: 15px; line-height: 1.5em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><li style="list-style: none; margin-left: 15px; margin-bottom: 3px; position: relative;">Atlantis Bali</li></ul><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Jl. By Pass Ngurah Rai No. 96E, Sanur, Bali</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">0361 284 131, 0361 286 367</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;"><a href="mailto:info@atlantis-bali.com" style="color: rgb(22, 159, 218); transition-timing-function: linear; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgba(115, 174, 8, 0.4); word-wrap: break-word; padding-bottom: 2px;">info@atlantis-bali.com</a></p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">atlantis-bali-diving.com</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">If you take a course at PADI or SSI, one of the requirements in taking the course is the ability to swim for around 200m. Yet, you can learn the basic swimming lesson first if you are not able to swim for 200m.</p><p style="margin-bottom: 15px; font-size: 15px; line-height: 1.6em; color: rgb(68, 68, 68); font-family: Lato; letter-spacing: normal; text-align: justify;">Other than these courses, there are still many other courses you can take in Jakarta or Bali or even in other cities such as Manado. So, do not hesitate to enroll yourself for a diving course and feel the experience of discoverin</p>', '2', 'img/1449130708.jpg', '2015-12-03 13:18:28', '2015-12-03 13:18:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_categories`
--

CREATE TABLE IF NOT EXISTS `news_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'News', '2015-12-02 07:21:07', '2015-12-02 07:21:07'),
(2, 'Artikel', '2015-12-02 07:21:57', '2015-12-02 07:21:57'),
(4, 'Uncategorized', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tour_date` datetime NOT NULL,
  `trip_length` text COLLATE utf8_unicode_ci NOT NULL,
  `route` text COLLATE utf8_unicode_ci NOT NULL,
  `dept_from` text COLLATE utf8_unicode_ci NOT NULL,
  `arrive_at` text COLLATE utf8_unicode_ci NOT NULL,
  `space` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`key`, `value`, `created_at`, `updated_at`) VALUES
('about', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('address', 's:2219:"<p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;"><span style="margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-weight: 700;">PT. ASTAGA DOTCOM</span></p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;"><span style="margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-weight: 700;">SPICE ISLAND CHARTERS</span></p><p><br style="margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; line-height: 18px;"></p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;">MENARA KADIN 7TH FLOOR</p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;">JL. HR. RASUNA SAID KAV 2-3 BLOK X5</p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;">EAST KUNINGAN, SETIABUDI</p><p style="margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1; font-size: 0.8333em; line-height: 1.6666; text-transform: uppercase; color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; letter-spacing: normal;">SOUTH JAKARTA 12590</p>";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('company_profile', 's:0:"";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('copyright', 's:28:"© 2015 Spice Island Charter";', '0000-00-00 00:00:00', '2015-12-02 07:33:45'),
('desc_about', 's:368:"<p><span style="font-family: Lato; font-size: 13px; letter-spacing: normal; line-height: 20.15px;">Spice Island Charters is a premiere Indonesian yacht rental agency located in Jakarta. We provide specialized quality tours and travel services in Indonesia, the largest archipelago with over 17,000 tropical islands, rich in exotic diversity and culture.</span><br></p>";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('description', 's:0:"";', '0000-00-00 00:00:00', '2015-12-02 07:33:45'),
('email', 's:26:"CS@SPICEISLANDCHARTERS.COM";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('keywords', 's:20:"Spice Island Charter";', '0000-00-00 00:00:00', '2015-12-02 07:33:45'),
('phone', 's:21:"PHONE: +6221 57903975";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('privacy', 's:0:"";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('site_url', 's:28:"http://sic-s100.rhcloud.com/";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('terms', 's:0:"";', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('title', 's:20:"Spice Island Charter";', '0000-00-00 00:00:00', '2015-12-02 07:33:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
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
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `cust_name`, `testimonial`, `image`, `created_at`, `updated_at`) VALUES
(0, 'Hilmy syarif', '<p>Sangat bagus pelayanannya</p>', 'img/1449132421.png', '2015-12-03 08:47:01', '2015-12-03 08:47:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hilmy Syarif', 'hilmysyarif@gmail.com', '$2y$10$8Inc/eQ6Yb3gELm0OmRGg.pENuFbqfNKWkMTYPyIk85pCatxkEdpy', 'Zrr46CW5IlFcZvuGiz26yO51QJQXiNcIgDrJ8y8jtXQ0c5GBSB6U1YMCMUeu', 'img/1449132037.png', '2015-11-30 03:30:47', '2015-12-03 13:40:37'),
(2, 'Administrator', 'admin@admin.com', '$2y$10$VLmYgkP1xoyE1u1AynMO8eZSieZCgdUsYz4CjF4OwGE8CehG2h5JG', 'YRTuMD2Q1GCck0k7abwgEpOmF2P2dERfCHxguzpO0A0q55dqDJsJQMlQQEmC', 'img/1449132022.png', '2015-12-02 01:10:36', '2015-12-03 14:05:05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
