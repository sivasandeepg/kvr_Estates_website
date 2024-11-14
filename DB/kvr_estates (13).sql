-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2022 at 09:31 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.29-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kvr_estates`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `name` varchar(99) DEFAULT NULL,
  `heading` varchar(99) NOT NULL,
  `sub_heading` varchar(99) NOT NULL,
  `description` text NOT NULL,
  `about_image_one` varchar(250) NOT NULL COMMENT 'Image size should be : width : 425px; height : 654px;',
  `about_image_two` varchar(250) NOT NULL COMMENT 'Image size should be : width : 696px; height : 354px;',
  `about_image_three` varchar(250) NOT NULL COMMENT 'Image size should be : width :696px; height : 597px;',
  `about_image_four` varchar(250) NOT NULL COMMENT 'Image size should be : width :696px; height : 881px;',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `name`, `heading`, `sub_heading`, `description`, `about_image_one`, `about_image_two`, `about_image_three`, `about_image_four`, `status`, `created_at`, `updated_at`) VALUES
(2, '', 'WANT TO KNOW ABOUT COMPANY', 'Chairman\'s Message', '<p>K. Venkata Reddy the Managing Partner of KVR Estates is well known among public as a man of perfection &amp; loyal in Real Estate Sector. His group has successfully completed numerous ventures at prime locations with a good reputation among clients . They are among the leading land sellers in &amp; around Vizianagaram. KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination. KVR ESTATES is unique of its kind. The main striking aspect of KVR estates is abundant greenery, Landscaping, Avenue plantation &amp; elegant decorative street lighting strategically located in vizianagaram.DDD</p>\r\n\r\n<p>KVR Estates is the best place if you are looking to live with all comforts. KVR Estates is the place where you can make ur home dream comes true.</p>\r\n\r\n<h5 style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:22px\"><strong>Kayala Venkata Reddy, M.A</strong></span></span></h5>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:14px\"><em><strong>Managing Partner</strong></em></span></span></p>\r\n', '9743f01d85f02420128fda70a36fc030.png', '2536440b709d92aa3a319cd31e45b2cc.jpg', 'd891647531e06e0a1d15d546cdabcc55.jpg', 'ce5d441d78b96b386f798307e2e8aba6.jpg', 1, '1651949427', '1653289501');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_logos`
--

CREATE TABLE `about_us_logos` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL COMMENT 'Image size should be : width :172px; height : 101px;',
  `status` tinyint(11) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us_logos`
--

INSERT INTO `about_us_logos` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '6804135b767ec18fe3f1307f33ac17df.jpg', 1, '1651951422', ''),
(2, '7759e128810baae486240da14dff4b3f.jpg', 1, '1651951427', ''),
(3, '369963653eea06a14eef10c2c4c14125.jpg', 1, '1651951431', ''),
(4, 'ead4d8b5b2bd0303da8c210dc0595a69.jpg', 1, '1651951436', ''),
(5, '4e9e8d4b02205344137a2a162ae1bd90.jpg', 1, '1651951463', ''),
(6, '0143941f6ccf027fbb6249282f30a4d6.jpg', 1, '1651951468', ''),
(7, '9bf73f6cf4e9dcafc0155fbfb09bc63d.jpg', 1, '1651951472', ''),
(8, '638f20879c5eb3c26b6d415844e1a995.jpg', 1, '1651951477', ''),
(9, 'a51930c8f61f40c54b9cb47763795cba.jpg', 0, '1652936634', '1653289510');

-- --------------------------------------------------------

--
-- Table structure for table `access_rights`
--

CREATE TABLE `access_rights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `privileges_code` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` varchar(25) DEFAULT NULL,
  `updated_at` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_dashboard_main_menu`
--

CREATE TABLE `admin_dashboard_main_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_icon` varchar(100) DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `created_at` varchar(25) NOT NULL,
  `updated_at` varchar(25) NOT NULL,
  `menu_url` varchar(100) NOT NULL DEFAULT '#',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_dashboard_main_menu`
--

INSERT INTO `admin_dashboard_main_menu` (`id`, `menu_name`, `menu_icon`, `display_order`, `created_at`, `updated_at`, `menu_url`, `status`) VALUES
(1, 'Admin Control Panel', 'fa fa-th-large', 0, '1623047703', '', '#', 1),
(13, 'Enquiries', 'fa fa-comments-o', 101, '1623119550', '', 'enquiries', 1),
(14, 'CMS Pages', 'fa fa-book', 11, '1623125694', '1653073707', 'Cms_pages', 0),
(15, 'Admin Login Logs', 'fa fa-user', 104, '1623218389', '', 'login_logs', 1),
(17, 'About', 'fa-solid fa-info', 2, '1651814819', '1651947830', 'about_us/edit/2', 1),
(24, 'Projects', 'fa fa home', 3, '1651828680', '', 'projects', 1),
(19, 'Blog', 'fa-solid fa-info', 6, '1651815815', '1651818390', 'blog', 1),
(25, 'Address', 'fa fa home', 5, '1651833366', '', 'address', 1),
(22, 'Home', 'fa fa-home', 1, '1651821632', '1651822366', 'home', 1),
(23, 'Gallery', 'fa fa-home\r\n', 4, '1651827219', '', 'gallery', 1),
(26, 'Meta content', 'fa fa-home\r\n', 7, '1652364306', '1652364328', 'meta_content', 1),
(28, 'Terms of use', 'fa fa-home\r\n', 8, '1652364306', '1652364306', 'terms_of_use', 1),
(29, 'Privacy policy', 'fa fa-home\r\n', 9, '1652364306', '1652364306', 'privacy_policy', 1),
(30, 'Resale Corner', 'fa fa-home\r\n', 10, '1652364306', '1652364328', 'resale_corner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_dashboard_sub_menu`
--

CREATE TABLE `admin_dashboard_sub_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `main_menu_id` int(10) UNSIGNED NOT NULL,
  `display_order` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `created_at` varchar(25) NOT NULL,
  `updated_at` varchar(25) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_dashboard_sub_menu`
--

INSERT INTO `admin_dashboard_sub_menu` (`id`, `menu_name`, `menu_url`, `main_menu_id`, `display_order`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Database Backup', 'dbbackup', 1, 1, '1623050682', '', 1),
(2, 'Social Media Links', 'Social_media_links', 1, 2, '1623050707', '', 1),
(3, 'Site Settings', 'site_settings', 1, 3, '1623050729', '', 1),
(4, 'Change Password	', 'change_password', 1, 4, '1623050771', '', 1),
(5, 'Sliders', 'sliders', 2, 1, '1623051600', '', 1),
(37, 'Testimonials', 'testimonials', 22, 10, '1651822156', '1651822301', 1),
(38, 'Home Slides', 'home_slides', 22, 10, '1651822587', '1651833864', 1),
(39, 'Photos', 'gallery_photos', 23, 10, '1651827318', '1651827403', 1),
(40, 'Videos', 'gallery_videos', 23, 10, '1651827372', '1651833850', 1),
(42, 'Projects', 'project_status', 24, 10, '1651828987', '1652196750', 1),
(43, 'Project Images', 'project_images', 24, 10, '1651832523', '', 0),
(44, 'Property type', 'property_type', 24, 10, '1651832796', '1651833796', 1),
(45, 'Features & Amenities', 'features_and_amenities', 24, 10, '1651832893', '1651833833', 1),
(46, 'Floor Plans', 'floor_plans', 24, 10, '1651832992', '1651833815', 0),
(47, 'City', 'city', 25, 12, '1651833398', '1652719052', 1),
(48, 'State', 'state', 25, 10, '1651833432', '', 1),
(49, 'Blog View', 'blog_view', 19, 10, '1651843289', '1652019273', 1),
(50, 'Blog images', 'blog_images', 19, 10, '1651843669', '1653073509', 0),
(55, 'Instagram_images', 'instagram_images', 1, 10, '1652108813', '', 1),
(53, 'Clients', 'About_us_logos', 22, 10, '1651947878', '', 1),
(56, 'Home_other', 'home_other', 22, 10, '1652110494', '', 1),
(57, 'Blog categories', 'blog_categories', 19, 10, '1652507684', '1652507684', 1),
(59, 'Project Phase', 'project_phase', 24, 10, '1652524781', '1652526540', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `property_type_id` int(11) DEFAULT NULL,
  `category_name` varchar(60) NOT NULL,
  `slug` varchar(99) NOT NULL,
  `status` tinyint(11) NOT NULL DEFAULT '1',
  `created_at` varchar(60) NOT NULL,
  `updated_at` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `property_type_id`, `category_name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Corporate Building', 'corporate-building', 1, '1652509733', '1653415108'),
(2, 2, 'Home Land', 'home-land', 1, '1652509772', '1652518740'),
(3, 3, 'Family House', 'family-house', 1, '1652511586', '1652518743'),
(4, 3, 'Apartments', 'apartments', 1, '1652511601', '1652518746');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_view`
--

CREATE TABLE `blog_view` (
  `id` int(11) NOT NULL,
  `title` varchar(99) NOT NULL,
  `date` varchar(60) DEFAULT NULL,
  `property_type` varchar(155) NOT NULL,
  `blog_categories_id` int(11) DEFAULT NULL,
  `blog_view_description_one` text NOT NULL,
  `blog_view_description_two` text NOT NULL,
  `quotation` text NOT NULL,
  `points` text NOT NULL,
  `image_one` varchar(250) NOT NULL COMMENT 'Image size should be : width :739px; height : 399px;',
  `image_two` varchar(250) NOT NULL COMMENT 'Image size should be : width :320px; height : 212px;',
  `image_three` varchar(250) NOT NULL COMMENT 'Image size should be : width :320px; height : 212px;',
  `image_four` varchar(250) NOT NULL COMMENT 'Image size should be : width :650px; height : 325px;',
  `seo_title` varchar(99) DEFAULT NULL,
  `seo_meta_keywords` varchar(99) DEFAULT NULL,
  `seo_meta_description` varchar(400) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `slug` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_view`
--

INSERT INTO `blog_view` (`id`, `title`, `date`, `property_type`, `blog_categories_id`, `blog_view_description_one`, `blog_view_description_two`, `quotation`, `points`, `image_one`, `image_two`, `image_three`, `image_four`, `seo_title`, `seo_meta_keywords`, `seo_meta_description`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'How To Do Market Research For to Sell Faster', 'December 12, 2020', '4', 2, '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p><span style=\"font-size:14px\"><span style=\"font-family:comic sans ms,cursive\"><strong><em>&ldquo; It was popularised in the 1960s with the release circumstances occur in which toil and pain can procure him some great pleasur To take atrivial example, which of us Nam libero tempore &rdquo;</em></strong></span></span></p>\r\n', '<p><strong><a href=\"http://localhost/kvr_estates/blog_view#\">12 Walkable Cities Where You Can Live Affordably</a></strong></p>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>\r\n\r\n<ul>\r\n	<li>Affordable housing</li>\r\n	<li>List of housing statutes</li>\r\n	<li>List of human habitation forms</li>\r\n</ul>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>\r\n', 'fb8afb2a49adb795807ed38b1672cfb9.jpg', '271c7a1e18419a8fc5bd20efcfe36c9a.jpg', '1efb44e7c7ad50f66a57e75eb1425a7a.jpg', 'eb062bb3fe07f48a104ec622b4f5a136.jpg', 'How To Do Market Research For to Sell Faster', 'How To Do Market Research For to Sell Faster', 'JK KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination  ', 1, 'how-to-do-market-research-for-to-sell-faster', '1652019515', '1653060256'),
(2, 'Unique Real Estate Marketing: Have A Tent Business Card', 'February 28, 2020', '3', 1, '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p><em><strong>&ldquo; It was popularised in the 1960s with the release circumstances occur in which toil and pain can procure him some great pleasur To take atrivial example, which of us Nam libero tempore &rdquo;</strong></em></p>\r\n', '<p>12 Walkable Cities Where You Can Live Affordably</p>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>\r\n\r\n<ul>\r\n	<li>Affordable housing</li>\r\n	<li>List of housing statutes</li>\r\n	<li>List of human habitation forms</li>\r\n</ul>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>\r\n', 'f6adc254bfe8fa943672137b6b18fafc.jpg', '4bfc6c1ca07a4640671084bc636c5abd.jpg', '339e63b1b127c1d2d70788a9143a6c6c.jpg', '820f0b66b30a998e90acd4e6bb08e407.jpg', 'Unique Real Estate Marketing: Have A Tent Business Card', 'Unique Real Estate Marketing: Have A Tent Business Card', 'JK KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 1, 'unique-real-estate-marketing-have-a-tent-business-card', '1652042977', '1653060267'),
(6, 'Develop Relationships With Human Resource', '21/02/2021', '2', 4, '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p><em><strong>&ldquo; It was popularised in the 1960s with the release circumstances occur in which toil and pain can procure him some great pleasur To take atrivial example, which of us Nam libero tempore &rdquo;</strong></em></p>\r\n', '<p><strong>12 Walkable Cities Where You Can Live Affordably</strong></p>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>\r\n\r\n<ul>\r\n	<li>Affordable housing</li>\r\n	<li>List of housing statutes</li>\r\n	<li>List of human habitation forms</li>\r\n</ul>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>\r\n', '289006e6a13215afdaab530d8bc4cc31.jpg', '788a6278e2b00ad17005e32649f0374a.jpg', 'f059e6b474d16459c84fc92a531fc56c.jpg', 'ff4d74eeabf5ed4fdecf54d79588f352.jpg', 'Develop Relationships With Human Resource', 'Develop Relationships With Human Resource', 'JK KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 1, 'develop-relationships-with-human-resource', '1652292889', '1653060277'),
(18, 'Do Market Research For to Sell Faster', '', '2', 3, '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '7b7861db422a912fd2a1fda2b715a08c.jpg', '2a05e63a99985e759442267b2942f6af.jpg', '636df59d82bc4a9e62da46815f7736c4.jpg', 'eae65a8d92846381b4ed6854067d346e.jpg', 'Do Market Research For to Sell Faster', 'Do Market Research For to Sell Faster', 'JK KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 1, 'do-market-research-for-to-sell-faster', '1652554961', '1653060353'),
(19, 'Real Estate Marketing: Have A Tent Business Card', '', '4', 3, '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>\r\n', '<p>&ldquo; It was popularised in the 1960s with the release circumstances occur in which toil and pain can procure him some great pleasur To take atrivial example, which of us Nam libero tempore &rdquo;</p>\r\n', '<h3>12 Walkable Cities Where You Can Live Affordably</h3>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>\r\n\r\n<ul>\r\n	<li>Affordable housing</li>\r\n	<li>List of housing statutes</li>\r\n	<li>List of human habitation forms</li>\r\n</ul>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>\r\n', 'e055528c7da5407ed82c7f73c9a022b1.jpg', 'd3e3e5e938b12f2a9349b2db96c25a95.jpg', 'e573b47c80de12a657f9288f71d6d5f9.jpg', '29dc9e0434d29a902721380956821835.jpg', 'seo title Real Estate Marketing: Have A Tent Business Card', 'Real Estate Marketing: Have A Tent Business Card', 'JK KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 0, 'real-estate-marketing-have-a-tent-business-card', '1652555218', '1653420554');

-- --------------------------------------------------------

--
-- Table structure for table `blog_view_my`
--

CREATE TABLE `blog_view_my` (
  `id` int(11) NOT NULL,
  `title` varchar(99) NOT NULL,
  `date` varchar(200) NOT NULL,
  `property_type` int(11) NOT NULL,
  `blog_view_description_one` text NOT NULL,
  `blog_view_description_two` text NOT NULL,
  `quotation` text NOT NULL,
  `points` text NOT NULL,
  `image_one` varchar(250) NOT NULL,
  `image_two` varchar(250) NOT NULL,
  `image_three` varchar(250) NOT NULL,
  `image_four` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `slug` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_view_my`
--

INSERT INTO `blog_view_my` (`id`, `title`, `date`, `property_type`, `blog_view_description_one`, `blog_view_description_two`, `quotation`, `points`, `image_one`, `image_two`, `image_three`, `image_four`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'How To Do Market Research For to Sell Faster', 'December 12, 2020', 2, '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>', '<p><em><strong>&ldquo; It was popularised in the 1960s with the release circumstances occur in which toil and pain can procure him some great pleasur To take atrivial example, which of us Nam libero tempore &rdquo;</strong></em></p>', '<p><strong><a href=\"http://localhost/kvr_estates/blog_view#\">12 Walkable Cities Where You Can Live Affordably</a></strong></p><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p><ul><li>Affordable housing</li><li>List of housing statutes</li><li>List of human habitation forms</li></ul><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>', 'ca1322b824f4567ccccf73dc4d994a92.jpg', '271c7a1e18419a8fc5bd20efcfe36c9a.jpg', '1efb44e7c7ad50f66a57e75eb1425a7a.jpg', 'eb062bb3fe07f48a104ec622b4f5a136.jpg', 1, 'how-to-do-market-research-for-to-sell-faster', '1652019515', '1652077988'),
(2, 'Unique Real Estate Marketing: Have A Tent Business Card', 'February 28, 2020', 3, '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>', '<p>Duis facilisis nibh qua sitamet interdtellsaesollicitudin tempor. Curabitur aliquis nibhquamamet intey rdum. when an unknown printer took a galley of type and scrambled it to make a type specimen are book has survived not only five centuries.Lorem ipsum dosectetur adipisicing elit, sed do.follow thing ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel te.sectetur Nulla fringillaey.</p>', '<p><em><strong>&ldquo; It was popularised in the 1960s with the release circumstances occur in which toil and pain can procure him some great pleasur To take atrivial example, which of us Nam libero tempore &rdquo;</strong></em></p>', '<p><a href=\"https://cmdemo.in/html/2022/kvr_estates/v3/blog_view.php#\">12 Walkable Cities Where You Can Live Affordably</a></p><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p><ul><li>Affordable housing</li><li>List of housing statutes</li><li>List of human habitation forms</li></ul><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookItea has survived not only five centuries, but also the leap into electronic typesetting, remaining essen tially unchanged.printer took a galley of type and scrambled it to make a type specimen bookh as survived not only five.</p>', '5e1db7a259db44b294e221a06d6c4ac0.jpg', '4bfc6c1ca07a4640671084bc636c5abd.jpg', '339e63b1b127c1d2d70788a9143a6c6c.jpg', '820f0b66b30a998e90acd4e6bb08e407.jpg', 1, 'unique-real-estate-marketing-have-a-tent-business-card', '1652042977', '1652079345'),
(5, 'my titile 2', 'February 18, 2020', 2, '<p>ssssssssssss</p>', '<p>ssssssssssssssssss</p>', '<p>ssssssssssss</p>', '<p>sssssssssssssss</p>', '0f50db095794ca1d0e1cfefd5e942aa4.jpg', 'c66629da0698a59eebcaa768018c9c49.jpg', '3fec008ea13c987ebe195393c5455fb2.jpg', '8dfdeba8413c1ea7d08532dec205afec.jpg', 1, 'my-titile-2', '1652082505', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `image` varchar(99) NOT NULL COMMENT 'Image size should be : width :690px; height : 280px; and  Small Image  width 520 px and height 440',
  `properties` int(11) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `name`, `image`, `properties`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 6, 'Hyderabad', '6be5de710ccf4856bcf30d4eebebdea5.jpg', 2, 'hyderabad', 1, '1651838064', '1653418901'),
(4, 5, 'Vizianagaram', 'bfbcc2cf1e6f4ef215c50221240de9bf.jpg', 2, 'vizianagaram', 1, '1652126371', '1652763255'),
(5, 5, 'Bobbili', 'ec64eff80f48680666ecacc958a43358.jpg', 3, 'bobbili', 1, '1652126400', '1652763262'),
(6, 5, 'Srikakulam', '88f9cb93fb4c790a5f1bd12d7ae95f74.jpg', 3, 'srikakulam', 1, '1652126427', '1652763264'),
(8, 7, 'Bangalore', 'd60fbcb204b891ae304575a8aea56630.jpg', 2, 'bangalore', 1, '1652422702', '1652766882'),
(9, 9, 'Chennai', '826b468fd0d208c4c791783e312e1b34.jpg', 2, 'chennai', 1, '1653294709', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(50, 'sai satish', '123@gmail.com', '1111111111', 'fkldsjfkjfklsd', '1653281134'),
(70, 'fdsfdsfdsf', '123@gmail.com', '1111111111', 'fkldsjfkjfklsd', '1653448672'),
(71, 'fdsfdsfdsfq', '12w3@gmail.com', '1111111111', 'fkldsjfkjfklsd', '1653448739'),
(72, 'sivasandeep', 'sivsa@gmail.com', '9999999999', 'ssssssss', '1653453693'),
(73, 'sivasandeep', 'siva1@gmail.com', '9999999999', '3333333333333', '1653453901');

-- --------------------------------------------------------

--
-- Table structure for table `features_and_amenities`
--

CREATE TABLE `features_and_amenities` (
  `id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features_and_amenities`
--

INSERT INTO `features_and_amenities` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TV Cable', 0, '1652121644', ''),
(2, 'Swimming Pool', 0, '1652121652', '1653423871'),
(3, 'Sauna', 1, '1652121662', ''),
(4, 'Air Conditioning', 1, '1652121670', ''),
(5, 'Laundry', 1, '1652121678', ''),
(6, 'Window Coverings', 1, '1652121685', ''),
(7, 'Barbeque', 1, '1652121694', ''),
(8, 'gym', 1, '1653300387', ''),
(9, 'yoga center', 1, '1653300413', '');

-- --------------------------------------------------------

--
-- Table structure for table `floor_plans`
--

CREATE TABLE `floor_plans` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `title` varchar(99) NOT NULL,
  `image` varchar(250) NOT NULL COMMENT 'Image size should be : width :472px; height : 322px;',
  `total_bed_rooms` varchar(99) NOT NULL,
  `total_bath_room` varchar(99) NOT NULL,
  `area` varchar(99) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `floor_plans`
--

INSERT INTO `floor_plans` (`id`, `project_id`, `title`, `image`, `total_bed_rooms`, `total_bath_room`, `area`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 'First Floor Plan', 'ba1f9392ee90b0a84c518adcd8cd74b2.jpg', '03', '04', '931', 1, '1652182938', '1653129147'),
(2, 10, 'Second Floor Plan', 'ba34024c99dba53ba41eef978da08109.jpg', '03', '01', '223', 1, '1652182969', '1652322550'),
(3, 10, 'Third Floor Plan', '2e741028cff583221ccfbc49d20848f2.jpg', '04', '04', '333', 1, '1652182995', '1652322574'),
(4, 10, 'fourth Floor Plan', '2aeb1eaf528e96297a0aa8c5914e9509.jpg', '05', '06', '556', 1, '1652183021', '1652322593'),
(5, 7, 'First Floor Plan', 'cc01e548665463bf1b36322cf232d89a.jpg', '03', '01', '931', 1, '1652184565', '1652322688'),
(6, 7, ' second floor plan', '3f475fbd2fea9d458f820eff1d9593b1.jpg', '03', '06', '556', 1, '1652322758', ''),
(7, 5, 'First Floor Plan', '8cb8b144184dd011eeffa74caf113c4c.jpg', '04', '01', '223', 1, '1652322817', ''),
(8, 5, ' second floor plan', 'd430a14a47d2a8a4e1da79a5408fa014.jpg', '4', '01', '931', 1, '1652322843', ''),
(9, 9, 'First Floor Plans', 'a0aacfca330b928e0f905b375b4670df.jpg', '04', '01', '333', 1, '1652322908', ''),
(10, 8, 'First Foor plan ', '196951734e2ca39deb418840f0e9e54e.jpg', '03', '04', '333', 1, '1652322986', ''),
(11, 8, 'First Foor plan ', '7d251cfedda1ca02a7190465e6a5b4f5.jpg', '03', '04', '333', 1, '1652322990', ''),
(12, 4, '1st Floor Plan', '9490bb394c2fde2b9401f7eb4f218251.jpg', '03', '04', '333', 1, '1652323035', ''),
(13, 4, '2nd Floor Plans', 'bf2aaea37c89b7303b622180cd9c55a5.jpg', '03', '01', '931', 1, '1652323081', ''),
(14, 12, 'First Floor Plans', 'afc4e3769595239f643c689f7f1c35ff.jpg', '4', '3', '343', 1, '1652323348', ''),
(15, 12, 'First Floor Plans', 'fbe26664e464d101610c8cbd4dbae797.jpg', '4', '3', '343', 1, '1652323350', ''),
(16, 12, ' second floor plans', '5a01c04c3b37d6ae40728c0715bd2aad.jpg', '02', '04', '432', 1, '1652323389', ''),
(17, 11, 'First Floor Plans for Office ', 'ae00da48fa6e3b4cf239877efa20ae8e.jpg', '0', '6', '1098', 1, '1652323449', ''),
(18, 11, ' second floor Plans for Office ', 'db17bc96fef4d2d3a236174cc420d8ef.jpg', '0', '12', '1010', 1, '1652323500', ''),
(19, 5, '1st Floor Plans', 'df6eab3baa14cb107b7ebbbc9195fe63.jpg', '00', '05', '540', 1, '1652323560', '1653116619'),
(20, 7, '2nd Floor Plans for Office', '17da56b8e2ca52a603d7b8009ce5a227.jpg', '0', '4', '345', 1, '1652323597', '1653116627'),
(21, 5, 'Moust Luxarous Fitted sale folre paln title ', '5577c9cd82f830a196253973023af253.jpg', '04', '04', '333', 1, '1653133122', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photos`
--

CREATE TABLE `gallery_photos` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL COMMENT 'Image size should be : width :520px; height : 350px;',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_photos`
--

INSERT INTO `gallery_photos` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'b5b5c127fd02e7082a248d91c586a3ac.jpg', 0, '1652322025', '1653322626'),
(5, 'a704171dd330381014b5b59210cfd2c1.jpg', 0, '1652322033', '1653322629'),
(6, '19823f3a51db56689488c0b3d92fab80.jpg', 0, '1652322040', '1653323211'),
(7, 'c767ea1bf02b51552d7ad885a83f2ad0.jpg', 1, '1652322064', '1652322109'),
(8, '370085a92939976c9799566469808d47.jpg', 1, '1652322126', '1652322240'),
(9, 'a08a229ae5e06a29b0363cae6a043522.jpg', 1, '1652322139', ''),
(10, '73ae916926549ce7042070580db0319b.jpg', 1, '1652322147', ''),
(11, 'c6891e22f77757935e9190413dfc6da3.jpg', 1, '1652322157', ''),
(12, '207550e889d3124229e1149e41a0fc44.jpg', 1, '1652766357', ''),
(13, 'd831efc02ed1d4a296c086243d5cf54b.jpg', 1, '1652766370', ''),
(14, 'd6fb527630872741178f36c9ed42cdaf.jpg', 1, '1652766381', ''),
(15, 'cf255a2fe2dc3a063e63aa9cfdea84d4.jpg', 1, '1652766388', ''),
(16, '7c55e06387d5f1480abb1b84ce972c83.jpg', 1, '1652766388', ''),
(17, '3dd403897f7e67075608b58a59333668.jpg', 1, '1652766404', ''),
(18, '17688c1042775c3ac18aeb1138385770.jpg', 1, '1652766404', ''),
(19, '92e6cdc5bba0124f5038d03d752a7e9c.jpg', 1, '1652781297', ''),
(20, 'f31f6b85fc379e7a7feb47f5fa37abec.jpg', 1, '1652781298', ''),
(21, '3aa4ed17f64452de9f2cea101af71faf.jpg', 1, '1652781317', ''),
(22, '16d9c76820e857303f40ad2ff9335ea2.jpg', 1, '1652781317', ''),
(25, 'd831efc02ed1d4a296c086243d5cf54b.jpg', 1, '1652322025', '1652322025'),
(26, 'c767ea1bf02b51552d7ad885a83f2ad0.jpg', 1, '1652322025', '1652322025'),
(27, 'd831efc02ed1d4a296c086243d5cf54b.jpg', 1, '1652322025', '1652322025'),
(28, 'c767ea1bf02b51552d7ad885a83f2ad0.jpg', 1, '1652322025', '1652322025'),
(29, 'd831efc02ed1d4a296c086243d5cf54b.jpg', 1, '1652322025', '1652322025'),
(30, 'c767ea1bf02b51552d7ad885a83f2ad0.jpg', 1, '1652322025', '1652322025'),
(31, 'd831efc02ed1d4a296c086243d5cf54b.jpg', 1, '1652322025', '1652322025'),
(32, 'c767ea1bf02b51552d7ad885a83f2ad0.jpg', 1, '1652322025', '1652322025');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_videos`
--

CREATE TABLE `gallery_videos` (
  `id` int(11) NOT NULL,
  `videos` varchar(99) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_videos`
--

INSERT INTO `gallery_videos` (`id`, `videos`, `status`, `created_at`, `updated_at`) VALUES
(6, '5fewGnpo4vA', 1, '1652321699', '1652321981'),
(7, 'UKIKVdHufWU', 1, '1652321734', ''),
(8, 'DY5uWf_G9vw', 1, '1652321781', ''),
(9, 'Bimac-pXY1M', 1, '1652321813', ''),
(10, '8b3XMVWqUT4', 1, '1652321834', ''),
(11, '5fewGnpo4vA	', 1, '1652321862', '1653133393'),
(13, '5fewGnpo4vA	', 1, '1652942873', '1653133380'),
(14, '5fewGnpo4vA	', 1, '1652942913', '1653133385'),
(15, '4GEXsubFCnw', 1, '1653290290', '1653303221');

-- --------------------------------------------------------

--
-- Table structure for table `home_client_logos`
--

CREATE TABLE `home_client_logos` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL COMMENT 'Image size should be : width :250px; height : 200px;',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_client_logos`
--

INSERT INTO `home_client_logos` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '2e5fc88862cff065a8ae0b7184154d23.jpg', 1, '1651950556', ''),
(2, '817a4f68eada5f59a8bbb271f6badde3.jpg', 1, '1651950560', ''),
(3, '45fbcfe04bc0933a98c27efd15e49fae.jpg', 1, '1651950565', ''),
(4, 'a3df2effa4e8ae6560971d1befea597c.jpg', 1, '1651950570', ''),
(5, '074428f8970baad5d008a6c1fb1fefc2.jpg', 1, '1651950576', ''),
(6, 'b0976eeda63f89967b66a6321cd3b30f.jpg', 1, '1651950601', ''),
(7, '228af3ffa714064fa17c6a70a0fcd30f.jpg', 1, '1651950606', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_other`
--

CREATE TABLE `home_other` (
  `id` int(11) NOT NULL,
  `property_title_big` varchar(100) NOT NULL,
  `property_image` varchar(99) NOT NULL COMMENT 'Image size should be : width :1917px; height : 950px;',
  `property_head` varchar(100) NOT NULL,
  `property_description` varchar(100) NOT NULL,
  `property_youtube_url` varchar(100) NOT NULL,
  `image_testimonials` varchar(99) NOT NULL COMMENT ' Image size should be : width :690px; height : 730px;',
  `status` varchar(11) NOT NULL DEFAULT '1',
  `created_at` varchar(99) NOT NULL,
  `updated_at` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_other`
--

INSERT INTO `home_other` (`id`, `property_title_big`, `property_image`, `property_head`, `property_description`, `property_youtube_url`, `image_testimonials`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Property For All', '684b92a62e127678a5fa99c08f4923c5.jpg', 'LET’S TAKE A TOUR', 'Search Property Smarter, Quicker & Anywhere', '1iIZeIy7TqM', 'abbe2099c7487d059c897694b575a2ac.jpg', '1', '1652110594', '1653289198');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE `home_slides` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL COMMENT ' Image size should be : width :1200px; height : 700px;',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, '93a883acd545d42697eff87c9f42637f.png', 1, '1653285942', ''),
(6, '72dbd0cd63efc8847ccdf4d2e3403839.png', 1, '1653285949', '');

-- --------------------------------------------------------

--
-- Table structure for table `instagram_images`
--

CREATE TABLE `instagram_images` (
  `id` int(11) NOT NULL,
  `image` varchar(99) NOT NULL COMMENT ' Image size should be : width :166px; height : 140px;',
  `instagram_url` varchar(99) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(99) NOT NULL,
  `updated_at` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instagram_images`
--

INSERT INTO `instagram_images` (`id`, `image`, `instagram_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'c224bac428fe6ccb33103c8bad949c63.jpg', 'https://www.instagram.com/', 1, '1652108840', '1652365473'),
(2, 'fe2004de6ea6e21ed92191cd02f729f4.jpg', 'https://www.instagram.com/', 1, '1652108847', '1652365429'),
(3, 'e034aba83f56ab1cffd6aecfd7b5fbda.jpg', 'https://www.instagram.com/', 1, '1652108854', '1652365454'),
(4, 'd8cb1152fa929be2918791ef8c6be0dd.jpg', 'https://www.instagram.com/', 1, '1652365341', ''),
(5, '7cbbb200445bd00c94df29ae358154c4.jpg', 'https://www.instagram.com/', 1, '1652365371', ''),
(6, 'bea3690845934f95711de3969f8068e5.jpg', 'https://www.instagram.com/', 1, '1652365398', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `name`, `ip_address`, `created_at`) VALUES
(1, 'admin@swarnaandhra.com', '::1', '1623317523'),
(2, 'admin@cmoon.com', '::1', '1651814188'),
(3, 'admin@cmoon.com', '::1', '1651945639'),
(4, 'admin@cmoon.com', '::1', '1651984404'),
(5, 'admin@cmoon.com', '::1', '1652002473'),
(6, 'admin@cmoon.com', '::1', '1652017867'),
(7, 'admin@cmoon.com', '::1', '1652039315'),
(8, 'admin@cmoon.com', '::1', '1652070951'),
(9, 'admin@cmoon.com', '::1', '1652120279'),
(10, 'admin@cmoon.com', '::1', '1652157951'),
(11, 'admin@cmoon.com', '::1', '1652249544'),
(12, 'admin@cmoon.com', '49.37.148.252', '1652261681'),
(13, 'admin@cmoon.com', '49.37.148.252', '1652271284'),
(14, 'admin@cmoon.com', '49.37.148.252', '1652293293'),
(15, 'admin@cmoon.com', '223.230.112.179', '1652320277'),
(16, 'admin@cmoon.com', '122.169.220.77', '1652350883'),
(17, 'admin@cmoon.com', '115.246.192.21', '1652355299'),
(18, 'admin@cmoon.com', '223.230.27.178', '1652407981'),
(19, 'admin@cmoon.com', '115.246.192.21', '1652419470'),
(20, 'admin@cmoon.com', '115.246.192.21', '1652499651'),
(21, 'admin@cmoon.com', '115.246.192.21', '1652499837'),
(22, 'admin@cmoon.com', '115.246.192.21', '1652508424'),
(23, 'admin@cmoon.com', '115.246.192.21', '1652508519'),
(24, 'admin@gmail.com', '122.175.29.245', '1652549219'),
(25, 'admin@gmail.com', '122.175.29.245', '1652576910'),
(26, 'admin@gmail.com', '115.246.192.21', '1652592953'),
(27, 'admin@gmail.com', '157.48.178.249', '1652631838'),
(28, 'admin@gmail.com', '115.246.192.21', '1652681477'),
(29, 'admin@gmail.com', '115.246.192.21', '1652717253'),
(30, 'admin@gmail.com', '223.230.101.31', '1652751173'),
(31, 'admin@gmail.com', '115.246.192.21', '1652762258'),
(32, 'admin@gmail.com', '115.246.192.21', '1652766200'),
(33, 'admin@gmail.com', '115.246.192.21', '1652777375'),
(34, 'admin@gmail.com', '115.246.192.21', '1652779535'),
(35, 'admin@gmail.com', '115.246.192.21', '1652783840'),
(36, 'admin@gmail.com', '115.246.192.21', '1652786057'),
(37, 'admin@gmail.com', '171.49.250.174', '1652841118'),
(38, 'admin@gmail.com', '115.246.192.21', '1652896005'),
(39, 'admin@gmail.com', '115.246.192.21', '1652935812'),
(40, 'admin@gmail.com', '115.246.192.21', '1652938063'),
(41, 'admin@gmail.com', '115.246.192.21', '1652952771'),
(42, 'admin@gmail.com', '115.246.192.21', '1652955481'),
(43, 'admin@gmail.com', '115.246.192.21', '1652957478'),
(44, 'admin@gmail.com', '115.246.192.21', '1652977449'),
(45, 'admin@gmail.com', '49.206.202.170', '1653022059'),
(46, 'admin@gmail.com', '49.204.231.37', '1653029880'),
(47, 'admin@gmail.com', '115.246.192.21', '1653037289'),
(48, 'admin@gmail.com', '115.246.192.21', '1653073179'),
(49, 'admin@gmail.com', '115.246.192.21', '1653111543'),
(50, 'admin@gmail.com', '115.246.192.21', '1653113299'),
(51, 'admin@gmail.com', '115.246.192.21', '1653115247'),
(52, 'admin@gmail.com', '115.246.192.21', '1653119821'),
(53, 'admin@gmail.com', '115.246.192.21', '1653121402'),
(54, 'admin@gmail.com', '115.246.192.21', '1653127638'),
(55, 'admin@gmail.com', '171.49.249.235', '1653199625'),
(56, 'admin@gmail.com', '122.175.124.130', '1653270734'),
(57, 'admin@gmail.com', '115.246.192.21', '1653284507'),
(58, 'admin@gmail.com', '115.246.192.21', '1653286618'),
(59, 'admin@gmail.com', '115.246.192.21', '1653298098'),
(60, 'admin@gmail.com', '115.246.192.21', '1653300068'),
(61, 'admin@gmail.com', '115.246.192.21', '1653306124'),
(62, 'admin@gmail.com', '115.246.192.21', '1653313387'),
(63, 'admin@gmail.com', '115.246.192.21', '1653314978'),
(64, 'admin@gmail.com', '115.246.192.21', '1653366840'),
(65, 'admin@gmail.com', '115.246.192.21', '1653454836');

-- --------------------------------------------------------

--
-- Table structure for table `meta_content`
--

CREATE TABLE `meta_content` (
  `id` int(11) NOT NULL,
  `page` varchar(60) DEFAULT NULL,
  `seo_title` varchar(99) NOT NULL,
  `seo_meta_keywords` varchar(250) NOT NULL,
  `seo_meta_description` varchar(200) NOT NULL,
  `seo_author` varchar(99) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(60) NOT NULL,
  `updated_at` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_content`
--

INSERT INTO `meta_content` (`id`, `page`, `seo_title`, `seo_meta_keywords`, `seo_meta_description`, `seo_author`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About_us', 'KVR ESTATES About page', 'KVR ESTATES, Real Estate in Visakhapatnam', 'JK KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'KVR ESTATES', 1, '1652577594', 1653041447),
(2, 'Home', 'KVR ESTATES Home page', 'KVR ESTATES, Real Estate in Visakhapatnam\r\n', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'KVR ESTATES', 1, '1653039896', 1653063438),
(3, 'photos', 'KVR ESTATES photos', 'KVR ESTATES photos page ', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'KVR ESTATES', 1, '1653063500', 1653064622),
(4, 'videos', 'KVR ESTATES videos', 'KVR ESTATES blog page ', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'KVR ESTATES', 1, '1653063534', 1653064741),
(5, 'blog', 'KVR ESTATES blog page ', 'KVR ESTATES blog page ', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'KVR ESTATES', 1, '1653063591', 1653064649),
(6, 'contact_us', 'KVR ESTATES contact us', 'KVR ESTATE contact_us page', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'KVR ESTATES', 1, '1653063630', 1653064761),
(7, 'resale_corner', 'KVR ESTATES resale corner ', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'KVR ESTATES', 1, '1653063664', 1653064775),
(8, 'terms_of_use', 'KVR ESTATES Tearms of use page ', 'K KVR ESTATES', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'K KVR ESTATES', 1, '1653064901', 0),
(9, 'Privacy_policy', 'KVR ESTATES Privacy_policy', 'KVR ESTATES', 'K KVR ESTATES with an asset of around 50 acres offers a new way of life, a new destination and a residential layout with a world class infrastructure as far as your imagination', 'KVR ESTATES', 1, '1653064949', 0);

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `sub_heading` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` varchar(60) NOT NULL DEFAULT '1',
  `updated_at` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `heading`, `sub_heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Effective 5 January 2022', 'Privacy Policy', '<p>We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.</p><p>All information provided to DESC is transmitted using SSL (Secure Socket Layer) encryption. SSL is a proven coding system that allows a browser to automatically encrypt, or scramble data before it is sent to us. Account information is protected by placing it on a secure portion of the DESC website that is only accessible by certain qualified employees of DESC. While we strive to protect your information, we cannot ensure or may not prevent all loss, misuse or alteration of information transmitted or stored on the website. DESC is not responsible for any damages or liabilities relating to any such security failures.</p><p>While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.</p><p>&nbsp;</p><p>A terms and conditions agreement outlines the website administrator&rsquo;s rules regarding user behavior and provides information about the actions the website administrator can and will perform.</p><p>Essentially, your terms and conditions text is a&nbsp;<strong>contract between your website and its users</strong>. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.</p><p>Creating the&nbsp;<strong>best terms and conditions page possible</strong>&nbsp;will protect your business from the following:</p><ul><li><strong>Abusive users:&nbsp;</strong>Terms and Conditions agreements allow you to establish what constitutes appropriate activity on your site or app, empowering you to remove abusive users and content that violates your guidelines.</li><li><strong>Intellectual property theft:&nbsp;</strong>Asserting your claim to the creative assets of your site in your terms and conditions will prevent ownership disputes and copyright infringement.</li><li><strong>Potential litigation:&nbsp;</strong>If a user lodges a legal complaint against your business, showing that they were presented with clear terms and conditions before they used your site will help you immensely in court.</li></ul><p>In short, terms and conditions give you&nbsp;<strong>control over your site</strong><strong>&nbsp;and legal enforcement</strong>&nbsp;if users try to take advantage of your operations.</p><p>Although DESC takes every precaution possible, understand that data and communications, including email and other electronic communications, may be accessed by unauthorized third parties when communicated over the Internet. Furthermore, our website contains links to other websites. Please note that when you click on one of these links, you are entering other websites for which DESC has no responsibility nor can we ensure the privacy practice of these websites. We encourage you to read the privacy statements on all such sites as their policies may be different than ours.</p><p>&nbsp;</p>', 0, '1652684272', '1653140739');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `property_id` varchar(99) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `property_status` enum('Ongoing_Projects','Upcoming_Projects','Completed_Projects') NOT NULL,
  `property_present_status` enum('For_Sale','Sold','Under_Construction') NOT NULL,
  `is_featured_property` enum('Yes','No') NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `title` varchar(99) NOT NULL,
  `description` text,
  `image` varchar(100) NOT NULL COMMENT ' Image size should be : width :510px; height : 340px;',
  `aminities` varchar(200) DEFAULT NULL,
  `address` varchar(99) NOT NULL,
  `latitude` varchar(99) DEFAULT NULL,
  `longitude` varchar(99) DEFAULT NULL,
  `map_location` varchar(400) NOT NULL COMMENT 'Google Map  location',
  `area` int(99) DEFAULT NULL,
  `area_land_size` varchar(99) DEFAULT NULL,
  `total_bed_rooms` varchar(99) DEFAULT NULL,
  `total_baths_rooms` varchar(99) DEFAULT NULL,
  `total_taps` varchar(20) DEFAULT NULL,
  `is_parking_available` enum('Yes','No') NOT NULL,
  `is_garage_available` enum('Yes','No') DEFAULT NULL,
  `view_count` varchar(99) DEFAULT NULL,
  `price` varchar(99) NOT NULL,
  `year_of_build` varchar(99) DEFAULT NULL,
  `slug` varchar(99) NOT NULL,
  `property_youtube_link` varchar(99) DEFAULT NULL,
  `project_youtube_thumb` varchar(99) DEFAULT NULL COMMENT ' Image size should be : width :731px; height : 349px;',
  `seo_title` varchar(60) DEFAULT NULL,
  `seo_meta_keywords` varchar(250) DEFAULT NULL,
  `seo_meta_description` varchar(250) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `property_id`, `property_type_id`, `property_status`, `property_present_status`, `is_featured_property`, `state_id`, `city_id`, `title`, `description`, `image`, `aminities`, `address`, `latitude`, `longitude`, `map_location`, `area`, `area_land_size`, `total_bed_rooms`, `total_baths_rooms`, `total_taps`, `is_parking_available`, `is_garage_available`, `view_count`, `price`, `year_of_build`, `slug`, `property_youtube_link`, `project_youtube_thumb`, `seo_title`, `seo_meta_keywords`, `seo_meta_description`, `status`, `created_at`, `updated_at`) VALUES
(4, '1', 1, 'Ongoing_Projects', 'For_Sale', 'Yes', 5, 4, 'Triple Story House For Sale', '<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', '80568c26ff0bcbc9b50e2fa8953760aa.jpg', '1,2,3,4,7', 'Near x roads , vijayanagaram', '17.7324687', '83.3040957', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin', 98, '104', '', '', '', 'Yes', 'No', '138', '10,00,000', '2001', 'triple-story-house-for-sale', 'GIadgArPvwQ', 'e0af7351b11c60403a18b24cc1bbc425.jpg', 'Test', 'Test keywords', 'Test description', 1, '1652274775', '1653321533'),
(5, '11', 3, 'Ongoing_Projects', 'For_Sale', 'Yes', 5, 5, 'The Most Luxarious Fitted Sele', '<p>&nbsp;Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n\r\n<p>&nbsp;Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', '26bc8135893a825cdbfcac3288c79e10.jpg', '4,5,7', 'Railway Station Road, bobbili', '17.7324687', '83.3040957', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin', 556, '104', '04', '05', '4', 'No', 'Yes', '54', '5,00,000', '2006', 'the-most-luxarious-fitted-sele', 'GIadgArPvwQ', '51fb9cdf0da5443a2df942cfcbedb0be.jpg', 'The Most Luxarious Fitted Sele', 'The Most Luxarious Fitted Sele', 'The Most Luxarious Fitted Sele', 1, '1652275248', '1653065879'),
(7, '1432', 4, 'Ongoing_Projects', 'For_Sale', 'No', 5, 4, 'Northwest Office Space', '<p>. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor</p>\r\n', 'f988a4164c59d310697eadc20aeb539a.jpg', '3,4,7', 'Main Raod, Vijayanagaram', '17.7324687', '83.3040957', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin\r\n', 556, '898', '04', '06', '4', 'Yes', 'Yes', '131', '1000000', '2004', 'northwest-office-space', 'GIadgArPvwQ', '18d4928938464475caac20329f7260bc.jpg', '', '', '', 1, '1652276584', '1653065927'),
(8, '2', 2, 'Ongoing_Projects', 'For_Sale', 'No', 5, 6, ' Luxarious villa Fitted Sell', '<p>Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor.</p>\r\n', 'ada3a4c992e85867dcf029ee9fd54686.jpg', '2,5', 'Srikakulam, near Railway Station', '17.7324687', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin\r\n', 223, '1042', '03', '05', '4', 'No', 'No', '37', '400000', '2010', 'luxarious-villa-fitted-sell', 'GIadgArPvwQ', '86fb97f34ed12229d69bcfabc363886a.jpg', 'KVR ESTATES', 'Seo meta keywords', 'Seo meta description', 1, '1652277464', '1653066472'),
(9, '3', 3, 'Ongoing_Projects', 'For_Sale', 'No', 5, 5, 'Group villa House For Sale', '<p>Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar&nbsp;</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', '6cadc7e1d08ee822fb11a1e67393a63e.jpg', '4,6', 'Main road,  Bobbili.', '17.7324687', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin\r\n', 121, '203', '04', '04', '3', 'Yes', 'Yes', '39', '1025410', '2018', 'group-villa-house-for-sale', 'GIadgArPvwQ', '77f4b45c90def27214027c0af4ff6e3d.jpg', '', '', '', 1, '1652277758', '1652782721'),
(10, '12', 4, 'Ongoing_Projects', 'For_Sale', 'No', 5, 5, 'Villa Luxembourg proijects ', '<p>Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.&nbsp;Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', 'ace4abc76020565e9f0c106a792c69b2.jpg', '2,4', 'Near Bustand Road, Bobbili ', '17.7324687', '83.3040957', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin\r\n', 232, '556', '03', '03', '5', 'Yes', 'Yes', '397', '600000', '2020', 'villa-luxembourg-proijects', 'GIadgArPvwQ', '6bd15ce044bd0d246d6d906c9a814eea.jpg', '', '', '', 1, '1652278451', '1652782736'),
(11, '22', 4, 'Ongoing_Projects', 'Sold', 'No', 6, 3, 'Commercial space for Offices ', '<p>Professional And Inspiring Work Environments To Suit Businesses Of All Sizes And Budget. Only Use &amp; Pay For The&nbsp;<em>Space</em>&nbsp;You Need. Work In The Most Effective Way With Easy Offices. Get An Office Quote Now. No Deposit. Compare Online. Free Advice.Professional And Inspiring Work Environments To Suit Businesses Of All Sizes And Budget. Only Use &amp; Pay For The&nbsp;<em>Space</em>&nbsp;You Need. Work In The Most Effective Way With Easy Offices. Get An Office Quote Now. No Deposit. Compare Online. Free Advice.</p>\r\n\r\n<p>Professional And Inspiring Work Environments To Suit Businesses Of All Sizes And Budget. Only Use &amp; Pay For The&nbsp;<em>Space</em>&nbsp;You Need. Work In The Most Effective Way With Easy Offices. Get An Office Quote Now. No Deposit. Compare Online. Free Advice.Professional And Inspiring Work Environments To Suit Businesses Of All Sizes And Budget. Only Use &amp; Pay For The&nbsp;<em>Space</em>&nbsp;You Need. Work In The Most Effective Way With Easy Offices. Get An Office Quote Now. No Deposit. Compare Online. Free Advice.</p>\r\n', 'a6f94f369614a2a5984563435fcc1472.jpg', '4,7', ' MadhaPur, Hyderabad', '17.7324687', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin\r\n', 902, '987', '6', '3', '6', 'Yes', 'Yes', '119', '1000000', '2021', 'commercial-space-for-offices', 'GIadgArPvwQ', 'a90475570781d708df76e5d7f46db514.jpg', '', '', '', 1, '1652320692', '1653066497'),
(12, 'KVR1', 3, 'Upcoming_Projects', 'For_Sale', 'Yes', 5, 6, ' High-RiseVillas and  Apartments', '<p>Premium 3 &amp; 4 BHK&nbsp;<em>Apartments</em>&nbsp;Starting 1.31 Cr Onwards. Pay Only 10% &amp; Book Your Dream Home.&nbsp;<em>Apartments</em>&nbsp;Designed to provide Sumptuous Amenities &amp; High-Class Living.Premium 3 &amp; 4 BHK&nbsp;<em>Apartments</em>&nbsp;Starting 1.31 Cr Onwards. Pay Only 10% &amp; Book Your Dream Home.&nbsp;<em>Apartments</em>&nbsp;Designed to provide Sumptuous Amenities &amp; High-Class Living.</p>\r\n\r\n<p>Premium 3 &amp; 4 BHK&nbsp;<em>Apartments</em>&nbsp;Starting 1.31 Cr Onwards. Pay Only 10% &amp; Book Your Dream Home.&nbsp;<em>Apartments</em>&nbsp;Designed to provide Sumptuous Amenities &amp; High-Class Living.Premium 3 &amp; 4 BHK&nbsp;<em>Apartments</em>&nbsp;Starting 1.31 Cr Onwards. Pay Only 10% &amp; Book Your Dream Home.&nbsp;<em>Apartments</em>&nbsp;Designed to provide Sumptuous Amenities &amp; High-Class Living.</p>\r\n', '0f08d96cbaa719f73b8a2a59df6b9c0b.jpg', '1,2,5,6', 'Near Bustand , Srikakulam', '83.2626° E', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin\r\n', 333, '104', '3', '3', '4', 'Yes', 'No', '45', '10,000,00', '2009', 'high-risevillas-and--apartments', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2', '77ae9cfa3bffb2c9676296f05e26c107.jpg', '', '', '', 1, '1652321181', '1652782755'),
(13, '0', 2, 'Completed_Projects', 'Sold', 'No', 6, 3, 'Plots for sale', '<p>&nbsp;Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor</p>\r\n', '6e76c0e2cfe5b8dcdfc2f4207b3f9b73.jpg', '1,3,4,6,7', 'Kondapur,Hyderabad', '83:00:78', '12:00:000:0', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15223.725539716463!2d78.34768027788819!3d17.462997908532024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93c92849a36b%3A0xde0dc034905512fa!2sKondapur%2C%20Telangana!5e0!3m2!1sen!2sin!4v1652376205879!5m2!1sen!2sin', 200, '2000', '', '3', '4', 'Yes', 'Yes', '175', '2,00,0000', '2014', 'plots-for-sale', 'GIadgArPvwQ', '22e07ccabb87d56a383721a8524df9d8.jpg', '', '', '', 1, '1652376413', '1652782773'),
(14, 'KVR2', 2, 'Upcoming_Projects', 'For_Sale', 'Yes', 7, 8, 'Brand New Shopping Mall for', '<h3>&nbsp;</h3>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', '42c7be4722fd32f26f11341ab3a97e27.jpg', '3,6', 'main road , banglore ', '17.7324687', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin', 133, '104', '4', '03', '2', 'No', 'Yes', '54', '10,00,000', '2001', 'brand-new-shopping-mall-for', 'GIadgArPvwQ', '51bca4e76cb720afb03705f421e55978.jpg', '', '', '', 1, '1652594264', '1652976430'),
(15, 'KVR3', 1, 'Upcoming_Projects', 'Under_Construction', 'No', 6, 3, 'Triple Story House For Sale', '<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', '816ed793c46036e1320185a18f040d8f.jpg', '2', 'sr nagar,  Hyderabad', '17.7324687', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin\r\n', 21, '214', '4', '2', '4', 'Yes', 'Yes', '34', '10,50,000', '20012', 'triple-story-house-for-salee', 'GIadgArPvwQ', '5389382d1e9855c88ab25bba1a85e461.jpg', '', '', '', 1, '1652594469', '1652692646'),
(16, 'KVR4', 3, 'Upcoming_Projects', 'For_Sale', 'No', 5, 6, 'Most Luxarious Fitted Sells', '<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', 'f5c0a4e2365a72565f30acc286359ea5.jpg', '2', 'Srikakulam, Railway Station', '17.7324687', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin', 432, '104', '04', '05', '2', 'Yes', 'Yes', '54', '20,50,000', '2018', 'most-luxarious-fitted-sells', 'GIadgArPvwQ', 'e1198a4575a8d48e256560ac54944857.jpg', 'Most Luxarious Fitted Sells', 'jk', 'colourmoon', 1, '1652594661', '1653066515'),
(17, 'KVR5', 4, 'Upcoming_Projects', 'Under_Construction', 'No', 5, 4, 'Triple Story House For Sale', '<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', '2bc7cc85a17a70563cfe63d5aecadef7.jpg', '2,5', 'Park road . Vijayanagaram', '83.2626° E', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin', 432, '556', '04', '05', '2', 'No', 'Yes', '27', '30,70,000', '2007', 'triple-story-house-for-saleet', 'GIadgArPvwQ', '42d2bcd9e212655819108a91462a6858.jpg', '', '', '', 1, '1652594881', '1652692622'),
(27, '654', 3, 'Ongoing_Projects', 'For_Sale', 'Yes', 6, 3, 'Luxarious Fitted Sell', '<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornareor bi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adip iscing eros quis orci fringilla, sed pretium lectus viverra.</p>\r\n', '63c26f800104f3e41ea00924036cd3e5.jpg', '2,5', 'Ameerpet,  Hyderabad', '17.7324687', '83.3040957', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin', 333, '104', '04', '05', '2', 'Yes', 'Yes', '67', '10,00,000', '2018', 'luxarious-fitted-sell', 'GIadgArPvwQ', 'e7c7a742361009aa6dbf0e86b6a79d19.jpg', 'KVR ESTATES', '', '', 1, '1652972453', '1652986261'),
(28, '458', 2, 'Ongoing_Projects', 'For_Sale', 'Yes', 7, 8, ' Luxurious club house - Premium Gated community Villas', '<p>&nbsp;</p>\r\n\r\n<p>Luxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community VillasLuxurious club house - Premium Gated community Villas</p>\r\n', '7f6df23bdb3d9f930fb56465f4d7d2b8.jpg', '3', 'Banglore ', '83.2626° E', '17.7472° N', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin', 0, '203', '', '', '', 'No', 'No', '85', '10,00,000', '', 'luxurious-club-house---premium-gated-community-villas', 'GIadgArPvwQ', 'e664e79edd3a8f94c70f6b2013501160.jpg', 'Premium Gated community Villas', ' Luxurious club house ,Premium Gated community Villas', ' Luxurious club house - Premium Gated community Villas Luxurious club house - Premium Gated community Villas Luxurious club house - Premium Gated community Villas Luxurious club house - Premium Gated community Villas', 1, '1652979400', '1653419070'),
(29, 'Gated Community', 1, 'Ongoing_Projects', 'Under_Construction', 'Yes', 9, 0, 'Kvr Estates chennai', '<p>tesing purpose</p>\r\n', '42d836582f68bc6fccc1a33d5a5e4c16.png', '1,3,8,9', 'Chennai, Tamil nadu', '13.134135', '80.236478', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486416.20757008134!2d83.262591!3d17.738672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652274445410!5m2!1sen!2sin', 2, '100acers', '3', '2', '15', 'Yes', 'No', '28', '5000000', '2023', 'kvr-estates-chennai', 'sO3ZJp0HGWA', NULL, NULL, '', '', 0, '1653300837', '1653421287');

-- --------------------------------------------------------

--
-- Table structure for table `projects_my`
--

CREATE TABLE `projects_my` (
  `id` int(11) NOT NULL,
  `property_id` int(99) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `property_status` enum('ongoing_projects','upcoming_projects','completed_projects') NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `title` varchar(99) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(99) NOT NULL,
  `image` varchar(99) NOT NULL,
  `latitude` varchar(99) NOT NULL,
  `longitude` varchar(99) NOT NULL,
  `map_location` varchar(99) NOT NULL,
  `area` int(99) NOT NULL,
  `area_land_size` varchar(99) NOT NULL,
  `total_bed_rooms` varchar(99) NOT NULL,
  `total_baths_rooms` varchar(99) NOT NULL,
  `is_parking_available` varchar(99) NOT NULL,
  `is_garage_available` varchar(99) NOT NULL,
  `view_count` varchar(99) NOT NULL,
  `price` varchar(99) NOT NULL,
  `year_of_build` varchar(99) NOT NULL,
  `slug` varchar(99) NOT NULL,
  `property_youtube_link` varchar(99) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects_my`
--

INSERT INTO `projects_my` (`id`, `property_id`, `property_type_id`, `property_status`, `state_id`, `city_id`, `title`, `description`, `address`, `image`, `latitude`, `longitude`, `map_location`, `area`, `area_land_size`, `total_bed_rooms`, `total_baths_rooms`, `is_parking_available`, `is_garage_available`, `view_count`, `price`, `year_of_build`, `slug`, `property_youtube_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 2, 'ongoing_projects', 5, 3, 'Triple Story House For Sale', '<p>ssssssssss</p>', 'Hyderabad', '91ca68ccc0ddafb2b02fbd2d3fa68f3d.jpg', 'sssss', 'sssssssss', 'sssssssss', 1, 'sss', '4', '3', 's', 's', 's', '$1000', '2001', 's', 's', 1, '1651838210', '1652159092'),
(2, 11, 1, 'upcoming_projects', 5, 3, 'Northwest Office Space', '<p>aaaaaaaaaaaaaaaaa</p>', 'Vizag', '5b0889b72a84515e9808a6a921915239.jpg', 'fdsfsdf', 'dfdsfsd', 'fsdfsd', 111, '104', '5', '6', 'No', 'Yes', '22', '$1200', '2001', 'best-house', 'fsdfsds', 1, '1651839424', '1652159102'),
(3, 3, 4, 'completed_projects', 5, 3, 'Family House For Sale', '<p><a href=\"https://cmdemo.in/html/2022/kvr_estates/v3/project_view.php\">Family House For SaleFamily House For SaleFamily House For SaleFamily House For SaleFamily House For SaleFamily House For SaleFamily House For SaleFamily House For SaleFamily House For Sale</a></p>', 'Vizag', 'f79c92f69d424ec108736ca7f6bad8f1.jpg', '83.2626° E', '17.7472° N', 'google.map.com', 1, '104', '3', '3', 'No', 'Yes', '22', '1000', '2008', 'family-house-for-sale', 'ssssssssssss', 1, '1652093039', '1652159136'),
(4, 4, 2, 'ongoing_projects', 5, 5, 'title', '<p>sssssssssssssssss</p>', 'Vizag', 'd057984e59cf0c1888a7b16c6213be3e.jpg', '83.2626° E', '17.7472° N', 'google.map.com', 1, '104', '4', '5', 'No', 'Yes', '22', '10,00,000', '2001', 'title', 'ssssssssssss', 1, '1652174154', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_enquiry`
--

CREATE TABLE `project_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `phone` varchar(99) NOT NULL,
  `project_name` varchar(99) NOT NULL,
  `phase` varchar(99) NOT NULL,
  `plot_no` varchar(99) NOT NULL,
  `location` varchar(99) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_enquiry`
--

INSERT INTO `project_enquiry` (`id`, `name`, `phone`, `project_name`, `phase`, `plot_no`, `location`, `status`, `created_at`) VALUES
(29, 'sivasandeep', '9999999999', 'Triple Story House For Sale', 'Phase two', '121', '322', 1, '1653199746'),
(30, 'dfdsfdsf', '9999999999', 'Triple Story House For Sale', 'Phose one', '404', 'Hyderabad', 1, '1653282943'),
(46, 'sivasandeep', '1111111111', 'input', 'Phose one', '404', 'Hyderabad', 1, '1653458533');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(20) NOT NULL,
  `image` varchar(250) NOT NULL COMMENT ' Image size should be : width :1170px; height : 638px;',
  `image_name` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `image`, `image_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, '233d9f1d04d1d8837d8da461a2c8cf8a.jpg', 'Triple story House For Sale', 1, '1652177714', '1652274872'),
(3, 4, '135debdc7a0ee872b690c69b4e1fc678.jpg', 'Project three', 1, '1652177756', '1652274885'),
(4, 4, '754503353a57cfb1d8a822b2a6482c4e.jpg', 'Project ffour', 1, '1652178446', '1652274890'),
(5, 4, '0f08334bcdd50efe7356aba0718fc9f0.jpg', 'imgone', 1, '1652179406', '1652274895'),
(7, 4, '68fb318d0518d3cac885dc722947cd1c.jpg', 'img3', 1, '1652179428', '1652274906'),
(8, 5, 'f818b4722e87df9f3b027603138e7411.jpg', 'image one', 1, '1652275855', ''),
(9, 5, 'a811e5eab32989ddbe7add43cec28c90.jpg', 'image one', 1, '1652275855', ''),
(10, 5, 'ee542c7591107eee6f4cba21259b1041.jpg', 'img two', 1, '1652275870', ''),
(11, 5, '165f401f0b42dd2f51bb5cd34b99ac0d.jpg', 'img four', 1, '1652275915', '1652276196'),
(12, 5, '361b9c9386df762d6d5adf31da5086ed.jpg', 'img five', 1, '1652275930', ''),
(13, 7, '098bad2f534906a4d15cf1600094ce7d.jpg', 'img oneimg on e', 1, '1652275971', '1653133026'),
(14, 10, '0bcae6fc37380c8e7176345e2c228993.jpg', 'img two', 1, '1652275989', '1653133033'),
(15, 10, '1e2cacf2ff6ffc90c5013927dc97bf90.jpg', 'img four', 1, '1652276007', '1653133040'),
(16, 11, '5ee30ace6ebe65c41ddc3de45e92e624.jpg', 'img four', 1, '1652276028', '1653133046'),
(17, 7, 'e6b3c12b0f525779117ddfd3f30aec67.jpg', 'img one', 1, '1652277022', ''),
(18, 7, '679052ca3326b9b1b1949151f30e9d1f.jpg', 'img two', 1, '1652277036', ''),
(19, 7, '4cae9130d97f172fa452cc6bd55b9e54.jpg', 'img three', 1, '1652277050', ''),
(20, 9, '57199de90ce1a0236c582ad08872ebc2.jpg', 'one img', 1, '1652278061', ''),
(21, 9, 'c1b297638748523edb93351b2d124a27.jpg', 'img two', 1, '1652278075', ''),
(22, 8, 'a1fa65203292c858741c09678584ae3c.jpg', 'img one', 1, '1652278112', ''),
(23, 8, '120d87cd80278b4d2ba861430510a629.jpg', 'image tow', 1, '1652278136', ''),
(24, 10, 'd4a0982b0ce550690e830068bc6c2402.jpg', 'img one', 1, '1652278488', ''),
(25, 10, '666fd10ecb5e54cf40ec9e47dd934a38.jpg', 'Image two', 1, '1652278518', ''),
(26, 11, '538b470c78c02ddb5d558f86b92b65b6.jpg', 'img one', 1, '1652320743', ''),
(27, 11, 'abfcdc1d0f08dd5b0c398e2dd0051e4e.jpg', 'img two', 1, '1652320763', ''),
(28, 11, '5d1a22bc7e32c5a0b2182991e1738fb4.jpg', 'img three', 1, '1652320777', ''),
(29, 12, '329d3fa2bfed6534ac2d89b823b71788.jpg', 'image one', 1, '1652321273', ''),
(30, 12, 'cb306ac29222606493fdf546fed54435.jpg', 'image two', 1, '1652321287', ''),
(31, 13, '2835c1f8b5933fbd21fcf146e152e25f.jpg', 'image one', 1, '1652443081', ''),
(32, 13, '793e3f34e2510b954cff537a54df4588.jpg', 'image two', 1, '1652443099', ''),
(33, 13, '2eed610f7fc09ea083cdd4c4374c3213.jpg', 'image three', 1, '1652443128', ''),
(34, 4, 'a5730afdf456e1efc079f7d927cee12f.jpg', 'triple', 1, '1652777471', ''),
(35, 15, 'b277d118a03ec484c8242e393454acac.jpg', 'dtuufgiu', 1, '1652777496', ''),
(39, 21, 'ebf28e197513a56c750cb422cde0ed46.jpg', 'kkk', 1, '1652942192', ''),
(40, 21, 'ae1144af396b6d82ef8fb2ee14b3c28e.jpg', 'ddd', 1, '1652942221', ''),
(41, 27, 'c5a6cdeffdbe6dbe676f55c90d22a7c6.jpg', 'img one ', 1, '1653133001', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_name`
--

CREATE TABLE `project_name` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(60) DEFAULT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_name`
--

INSERT INTO `project_name` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Project one', 1, '1652535512', 0),
(11, 'Project two', 1, '1652535522', 0),
(12, 'Project three', 1, '1652535529', 0),
(13, 'Project three', 1, '1652535536', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_phase`
--

CREATE TABLE `project_phase` (
  `id` int(11) NOT NULL,
  `phase` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(60) NOT NULL,
  `updated_at` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_phase`
--

INSERT INTO `project_phase` (`id`, `phase`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Phose one', 1, '1652527064', ''),
(2, 'Phase two', 1, '1652527068', ''),
(3, 'Phase three', 1, '1652527071', '');

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `id` int(11) NOT NULL,
  `id_no` int(200) DEFAULT NULL,
  `name` varchar(200) NOT NULL COMMENT 'type of property name',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`id`, `id_no`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Villas', 1, '1651841224', '1653418935'),
(2, 2, 'Plots', 1, '1651841245', '1653418938'),
(3, 3, 'Flats', 1, '1651841260', '1652942282'),
(4, 4, 'Commercial', 1, '1652075851', '1652439125'),
(5, NULL, 'Gated community', 1, '1653302521', '');

-- --------------------------------------------------------

--
-- Table structure for table `resale_corner`
--

CREATE TABLE `resale_corner` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` varchar(60) NOT NULL,
  `updated_at` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `logo` varchar(100) NOT NULL COMMENT '<font color="red">Note:</font> Upload Height: 160px; Width: 184px',
  `favicon` varchar(100) NOT NULL COMMENT '<font color="red">Note:</font> Upload Height: 160px; Width: 184px',
  `contact_number` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `contact_email` varchar(60) DEFAULT NULL,
  `address` text,
  `about_site` text NOT NULL,
  `footer_bg_image` varchar(100) NOT NULL,
  `google_maps` text,
  `seo_title` text,
  `seo_keywords` text,
  `seo_description` text,
  `created_at` varchar(25) NOT NULL,
  `updated_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `logo`, `favicon`, `contact_number`, `phone_number`, `contact_email`, `address`, `about_site`, `footer_bg_image`, `google_maps`, `seo_title`, `seo_keywords`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 'Kvr Estates', '4f3cc63441f170774f1d19d223f3c5f3.png', '144d3f769c3ce2342865eab50b9040f6.png', '(+91) 123 456 7890', '(+91) 123 456 7890', 'support@swarnandhra.com', '<p>Opp. Abhaya Anjaneya Swamy Temple,</p>\r\n\r\n<p>N.E Layout, Seethammadhara,</p>\r\n\r\n<p>Visakhapatnam</p>\r\n', '<p>We denounce with righteous indi gnation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail weakness.</p>\r\n', '6ff565529a6169fa3487f8a922b7c4b2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243207.72693901445!2d83.12250282511741!3d17.738949531289414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1650622650541!5m2!1sen!2sin\" width=\"100%\" height=\"420\" style=\"border:0;margin-bottom: -12px;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'kvrestates', 'kvrestates', 'kvrestates', '', '1653299030');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `youtube`, `instagram`, `twitter`) VALUES
(1, 'https://www.facebook.com', 'https://www.youtube.com/', 'https://www.instagram.com/ ', 'https://twitter.com/i/flow/login');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Andhra Pradesh', 1, '1651838084', '1653367844'),
(6, 'Telangana', 1, '1652266777', ''),
(7, 'Karnataka', 1, '1652266786', ''),
(9, 'Tamil Nadu', 1, '1653290979', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `created_at` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `created_at`) VALUES
(1, 'saisatishadiraju@gmail.com', '1652245089'),
(3, 'siva@gmail.com', '1652365512'),
(4, 'ujk222@gmail.com', '1652421143'),
(5, 'jithendra@thecolourmoon.com', '1652421156'),
(6, 'ASDFGHJK', '1652612994'),
(7, 'ASDFHJKL;', '1652613003'),
(8, 'SDFGHJKL;', '1652613018'),
(9, 'siva1@gmail.com', '1652685638'),
(10, 'admin@hr.com', '1652685656'),
(11, 'abcef@gmail.com', '1652692053'),
(12, 'siva11@gmail.com', '1652709095'),
(13, 'gnani00052@gmail.com', '1652772107'),
(14, 'ww@gmail.com', '1652772648'),
(15, 'frdffdddd@gmail.com', '1652772692'),
(16, 'sabd@gmail.com', '1652782195'),
(17, 'sdfdsfds@gmail.com', '1652906593'),
(18, 'sivafsfs@gmail.com', '1652906658'),
(19, 'divya@gmail.com', '1652939373'),
(20, 'abcdef@gmail.com', '1653286465');

-- --------------------------------------------------------

--
-- Table structure for table `terms_of_use`
--

CREATE TABLE `terms_of_use` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `sub_heading` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(60) NOT NULL,
  `updated_at` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms_of_use`
--

INSERT INTO `terms_of_use` (`id`, `heading`, `sub_heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Effective 5 January 2022', 'OUR TERMS OF SERVICE', '<p>A terms and conditions agreement outlines the website administrator&rsquo;s rules regarding user behavior and provides information about the actions the website administrator can and will perform.</p><p>Essentially, your terms and conditions text is a&nbsp;<strong>contract between your website and its users</strong>. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.</p><p>Creating the&nbsp;<strong>best terms and conditions page possible</strong>&nbsp;will protect your business from the following:</p><ul><li><strong>Abusive users:&nbsp;</strong>Terms and Conditions agreements allow you to establish what constitutes appropriate activity on your site or app, empowering you to remove abusive users and content that violates your guidelines.</li><li><strong>Intellectual property theft:&nbsp;</strong>Asserting your claim to the creative assets of your site in your terms and conditions will prevent ownership disputes and copyright infringement.</li><li><strong>Potential litigation:&nbsp;</strong>If a user lodges a legal complaint against your business, showing that they were presented with clear terms and conditions before they used your site will help you immensely in court.</li></ul><p>In short, terms and conditions give you&nbsp;<strong>control over your site</strong><strong>&nbsp;and legal enforcement</strong>&nbsp;if users try to take advantage of your operations.</p><p>&nbsp;</p><p>A terms and conditions agreement outlines the website administrator&rsquo;s rules regarding user behavior and provides information about the actions the website administrator can and will perform.</p><p>Essentially, your terms and conditions text is a&nbsp;<strong>contract between your website and its users</strong>. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.</p><p>Creating the&nbsp;<strong>best terms and conditions page possible</strong>&nbsp;will protect your business from the following:</p><ul><li><strong>Abusive users:&nbsp;</strong>Terms and Conditions agreements allow you to establish what constitutes appropriate activity on your site or app, empowering you to remove abusive users and content that violates your guidelines.</li><li><strong>Intellectual property theft:&nbsp;</strong>Asserting your claim to the creative assets of your site in your terms and conditions will prevent ownership disputes and copyright infringement.</li><li><strong>Potential litigation:&nbsp;</strong>If a user lodges a legal complaint against your business, showing that they were presented with clear terms and conditions before they used your site will help you immensely in court.</li></ul><p>In short, terms and conditions give you&nbsp;<strong>control over your site</strong><strong>&nbsp;and legal enforcement</strong>&nbsp;if users try to take advantage of your operations.</p><p>&nbsp;</p>', 1, '1652684057', '1653140723');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `star` enum('1','2','3','4','5') NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `location`, `description`, `star`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Siva Sandeep', 'Vijayawada', '<p><span style=\"font-family:times new roman,times,serif\">I typically do not write a review for anything or anyone, but the outstanding service I received from our Realtor Andrew Cases calls for an exception. Andrew put quality over quantity when it came to helping my family and I secure a home. What I mean by quality is we were not just a &ldquo;number&rdquo; to him, he genuinely cared to get to know us and familiarize himself with what we were comfortable with when purchasing a home.</span></p>\r\n', '1', 0, '1652008043', '1653288521'),
(2, 'Sai Sathish', 'Vizag', '<p><span style=\"font-family:comic sans ms,cursive\">An added bonus is that he was prior military, and with us moving overseas from Germany to Texas he was able to relate and make our home purchase that much easier! Andrew was 100% professional at all times, patient with our asks, and knew when to be aggressive in order to get us under contract! He is a valuable asset to your company and we greatly appreciate everything he did for us. Thanks again Andrew!</span></p>\r\n', '5', 1, '1652008441', '1653135831'),
(3, 'Jittu', 'Hyderbad', '<p>A&nbsp;<em>testimonial</em>&nbsp;is a statement from a past customer that describes how a product or service helped them.&nbsp;<em>Testimonials</em>&nbsp;are often written by the&nbsp;...A&nbsp;<em>testimonial</em>&nbsp;is a statement from a past customer that describes how a product or service helped them.&nbsp;<em>Testimonials</em>&nbsp;are often written by the&nbsp;...</p>', '1', 1, '1652008465', '1653135526'),
(4, 'Jayanty', 'Vizag', '<p><span style=\"font-family:comic sans ms,cursive\">&quot; Our agent was Will, he was very knowledgeable of the current market trends. He was very helpful and straight forward with us on the sale of our home. He even went as far as helping us find a short term rental in the area after we sold our home. He is a professional in every aspect of the real estate business. He would respond quickly if we sent him a text message or called him. Top notch customer service! Would definitely use the Lee Ann Wilkinson Group in the future and have Will as our agent. &quot;</span></p>\r\n', '3', 0, '1653135707', '1653288562'),
(6, 'Asha', 'Vizag', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2', 0, '1653288607', '1653288750');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL COMMENT 'This will be username, email is username',
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `salt` varchar(25) DEFAULT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `mobile`, `password`, `salt`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', '', '10b1689f9616445a0a1137ecd78b41de', 'VxoHw2hgfq294', '1479899025', '1652516850', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_logos`
--
ALTER TABLE `about_us_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `access_rights`
--
ALTER TABLE `access_rights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `admin_dashboard_main_menu`
--
ALTER TABLE `admin_dashboard_main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_dashboard_sub_menu`
--
ALTER TABLE `admin_dashboard_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_view`
--
ALTER TABLE `blog_view`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `blog_view_my`
--
ALTER TABLE `blog_view_my`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features_and_amenities`
--
ALTER TABLE `features_and_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor_plans`
--
ALTER TABLE `floor_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_photos`
--
ALTER TABLE `gallery_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_client_logos`
--
ALTER TABLE `home_client_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_other`
--
ALTER TABLE `home_other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slides`
--
ALTER TABLE `home_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagram_images`
--
ALTER TABLE `instagram_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_content`
--
ALTER TABLE `meta_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `property_id` (`property_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `property_id_2` (`property_id`);

--
-- Indexes for table `projects_my`
--
ALTER TABLE `projects_my`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_enquiry`
--
ALTER TABLE `project_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_name`
--
ALTER TABLE `project_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_phase`
--
ALTER TABLE `project_phase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resale_corner`
--
ALTER TABLE `resale_corner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_of_use`
--
ALTER TABLE `terms_of_use`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_us_logos`
--
ALTER TABLE `about_us_logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin_dashboard_main_menu`
--
ALTER TABLE `admin_dashboard_main_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `admin_dashboard_sub_menu`
--
ALTER TABLE `admin_dashboard_sub_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_view`
--
ALTER TABLE `blog_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_view_my`
--
ALTER TABLE `blog_view_my`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `features_and_amenities`
--
ALTER TABLE `features_and_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `floor_plans`
--
ALTER TABLE `floor_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery_photos`
--
ALTER TABLE `gallery_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `home_client_logos`
--
ALTER TABLE `home_client_logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_other`
--
ALTER TABLE `home_other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_slides`
--
ALTER TABLE `home_slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instagram_images`
--
ALTER TABLE `instagram_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `meta_content`
--
ALTER TABLE `meta_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `projects_my`
--
ALTER TABLE `projects_my`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_enquiry`
--
ALTER TABLE `project_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `project_name`
--
ALTER TABLE `project_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_phase`
--
ALTER TABLE `project_phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resale_corner`
--
ALTER TABLE `resale_corner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `terms_of_use`
--
ALTER TABLE `terms_of_use`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
