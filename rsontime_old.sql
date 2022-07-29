-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 03:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsontime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contact_number` int(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `user_name`, `email`, `gender`, `contact_number`, `address`, `date_of_birth`, `password`, `profile_image`, `favicon`) VALUES
(1, 'nazmul hossain ', 'nazmul96', 'nazmul@gmail.com', 'male', 34535353, 'rampura,bonosri', '01/01/1997', '81dc9bdb52d04dc20036dbd8313ed055', '1639028796_74968024773098184a31.jpg', '1639028796_a1d422eaab221d473979.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `settings_name` varchar(255) DEFAULT NULL,
  `settings_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `group_name`, `settings_name`, `settings_value`) VALUES
(1, 'About_us_details', 'page_title', 'alhamdulilallah for everything'),
(2, 'About_us_details', 'page_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'Contact_us_details', 'page_title', 'alhamdulilallah for everything'),
(4, 'Contact_us_details', 'email_address1', 'rafi@gmail.com'),
(5, 'Contact_us_details', 'email_address2', 'afikur@gmail.com'),
(6, 'Contact_us_details', 'phone_number1', '464646456'),
(7, 'Contact_us_details', 'phone_number2', '6345345534'),
(8, 'Contact_us_details', 'address1', 'rampura'),
(9, 'Contact_us_details', 'address1', 'rampura'),
(10, 'Contact_us_details', 'website_url', 'http://rsontime.com'),
(11, 'Contact_us_details', 'google_map_iFrame', '34332'),
(12, 'Contact_us_details', 'page_description', '<p>hello frnd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `settings_name` varchar(255) NOT NULL,
  `settings_title` varchar(255) NOT NULL,
  `settings_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `group_name`, `settings_name`, `settings_title`, `settings_value`) VALUES
(1, 'General_setting', 'show_title', 'Show Title', 'yes'),
(2, 'General_setting', 'show_subtitle', 'Show Subtitle', 'yes'),
(3, 'General_setting', 'show_description', 'Show Description', 'yes'),
(4, 'General_setting', 'show_social', 'Show Social', 'yes'),
(5, 'General_setting', 'show_menu', 'Show Menu', 'yes'),
(12, 'Social_setting', 'facebook', 'Facebook', 'https://www.facebook.com'),
(13, 'Social_setting', 'twitter', 'Twitter', 'https://www.twitter.com'),
(14, 'Social_setting', 'instagram', 'Instagram', 'https://www.linkedin.com'),
(15, 'Social_setting', 'youtube', 'Youtube', 'https://www.youtube.com'),
(16, 'Social_setting', 'whatsapp', 'Whatsapp', '+123456789'),
(17, 'Social_setting', 'skype', 'Skype', 'nazmul96'),
(18, 'Seo_setting', 'page_name', 'Page name', 'rsontime themee'),
(19, 'Seo_setting', 'meta_keyword', 'Meta keywords', 'rsontimee'),
(20, 'Seo_setting', 'meta_author', 'Meta author', 'rsontimee'),
(21, 'Seo_setting', 'timezone', 'Timezone', 'Asia/Dacca'),
(22, 'Seo_setting', 'meta_description', 'Meta description', 'alhamdulilallahh'),
(33, 'Counter_settings', 'release_date', 'Release date', '2022-03-20'),
(34, 'Counter_settings', 'release_time', 'Release time', '23:00'),
(35, 'Counter_settings', 'title', 'Title', 'Nice to Meet you'),
(36, 'Counter_settings', 'sub_title', 'Sub Title', 'Almighty allah is enough for everything'),
(37, 'Counter_settings', 'shot_description', 'Shot Description', 'We are preparing something amazing and exciting for you. Special surprise for our subscribers\r\n\r\n'),
(38, 'Counter_settings', 'new_theme', 'New Theme', 'theme4'),
(39, 'Custom_theme_settings', 'background_color', 'Background Color', '#1ba75c'),
(40, 'Custom_theme_settings', 'background_image', 'Background Image', '1639316283_1f0710fb3f249aa8623d.jpg'),
(41, 'Custom_theme_settings', 'default_theme', 'Default theme', 'no'),
(42, 'Custom_theme_settings', 'color_show', 'color show', 'no'),
(43, 'Custom_theme_settings', 'heading_font', 'Heading Font', 'Raleway'),
(44, 'Custom_theme_settings', 'heading_font_weight', 'Heading Font weight', '500'),
(45, 'Custom_theme_settings', 'heading_font_color', 'Heading Font Color', '#c91313'),
(46, 'Custom_theme_settings', 'heading_font_style', 'Heading Font Style', 'italic'),
(47, 'Custom_theme_settings', 'paragraph_font', 'Paragraph Font', 'Open Sans'),
(48, 'Custom_theme_settings', 'paragraph_font_weight', 'Paragraph Font Weight', '400'),
(49, 'Custom_theme_settings', 'paragraph_font_color', 'Paragraph Font Color', '#0b69ed'),
(50, 'Custom_theme_settings', 'paragraph_font_style', 'Paragraph Font Style', 'italic'),
(51, 'Custom_theme_settings', 'social_text_color', 'social text color', '#939e8a'),
(52, 'Custom_theme_settings', 'social_background_color', 'social background color', '#d71144'),
(53, 'Custom_theme_settings', 'social_boder_color', 'social boder color', '#6fa8dc'),
(54, 'Custom_theme_settings', 'social_hover_text_color', 'social hover text color', '#e06666'),
(55, 'Custom_theme_settings', 'social_hover_background_color', 'social hover background color', '#67b709'),
(56, 'Custom_theme_settings', 'social_hover_border_color', 'social hover border color', '#17ef21'),
(57, 'Email_setup', 'sent_from_name', 'sent from name', 'Nazmul hossain'),
(58, 'Email_setup', 'sent_from_email', 'sent from email', 'newest@therssoftware.com'),
(59, 'Email_setup', 'supported_mail_services', 'supported mail services', 'mail'),
(60, 'Email_setup', 'smtp_host', 'Smtp host', 'mail.therssoftware.com'),
(61, 'Email_setup', 'port', 'Port', '465'),
(62, 'Email_setup', 'password_access', 'Password access', 'fgffg'),
(63, 'Email_setup', 'encryption_type', 'Encryption type', 'ssl'),
(64, 'Email_setup', 'mailpath', 'Mailpath', '/mail/sendmail/clients');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email_address`, `date`, `time`) VALUES
(7, 'mofiz@gmail.com', '2021-12-05', '07:51'),
(10, 'naz@g.com', '2021-12-09', '03:32'),
(11, 'abid12@gmail.com', '2021-12-12', '11:51'),
(12, 'nazmul@gmail.com', '2021-12-12', '03:12'),
(13, 'admin@gmail.com', '2021-12-15', '03:38'),
(14, 'abid@gmail.com', '2021-12-15', '03:55'),
(15, 'naz967@gmail.com', '2021-12-15', '04:01'),
(16, 'alhamdulilallah@gmail.com', '2021-12-15', '04:02'),
(17, 'Nazu@gmail.com', '2021-12-15', '04:47'),
(18, 'admin123@gmail.com', '2021-12-15', '04:49'),
(19, 'nazmul121@gmail.com', '2021-12-15', '04:50'),
(20, 'abid1231@gmail.com', '2021-12-15', '04:50'),
(21, 'abid98@gmail.com', '2021-12-15', '04:51'),
(22, 'allahkhomakoro@gmail.com', '2021-12-15', '05:53'),
(23, 'allahkhomakoro1@gmail.com', '2021-12-15', '05:56'),
(24, 'nazmulkhan@gmail.com', '2021-12-15', '06:18'),
(25, 'Naz21@gmail.com', '2021-12-15', '06:20'),
(26, 'Nazft5@gmail.com', '2021-12-15', '06:40'),
(27, 'admin341@gmail.com', '2021-12-15', '06:43'),
(28, 'rafi32121@gmail.com', '2021-12-15', '08:09'),
(29, 'nazmul54654@gmail.com', '2021-12-15', '08:09'),
(30, 'nazmul5241@gmail.com', '2021-12-15', '08:10'),
(31, 'rafi@gmail.com', '2021-12-15', '08:11'),
(32, 'rafi2342341@gmail.com', '2021-12-15', '08:13'),
(33, 'admin23322@gmail.com', '2021-12-15', '08:20'),
(34, 'rafi67567@gmail.com', '2021-12-15', '08:28');

-- --------------------------------------------------------

--
-- Table structure for table `timezones`
--

CREATE TABLE `timezones` (
  `id` int(11) NOT NULL,
  `group` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timezones`
--

INSERT INTO `timezones` (`id`, `group`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'US', 'Puerto Rico (Atlantic)', 'America/Puerto_Rico', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(2, 'US', 'New York (Eastern)', 'America/New_York', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(3, 'US', 'Chicago (Central)', 'America/Chicago', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(4, 'US', 'Denver (Mountain)', 'America/Denver', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(5, 'US', 'Phoenix (MST)', 'America/Phoenix', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(6, 'US', 'Los Angeles (Pacific)', 'America/Los_Angeles', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(7, 'US', 'Anchorage (Alaska)', 'America/Anchorage', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(8, 'US', 'Honolulu (Hawaii)', 'Pacific/Honolulu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(9, 'America', 'Adak', 'America/Adak', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(10, 'America', 'Anchorage', 'America/Anchorage', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(11, 'America', 'Anguilla', 'America/Anguilla', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(12, 'America', 'Antigua', 'America/Antigua', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(13, 'America', 'Araguaina', 'America/Araguaina', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(14, 'America', 'Argentina - Buenos Aires', 'America/Argentina/Buenos_Aires', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(15, 'America', 'Argentina - Catamarca', 'America/Argentina/Catamarca', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(16, 'America', 'Argentina - ComodRivadavia', 'America/Argentina/ComodRivadavia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(17, 'America', 'Argentina - Cordoba', 'America/Argentina/Cordoba', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(18, 'America', 'Argentina - Jujuy', 'America/Argentina/Jujuy', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(19, 'America', 'Argentina - La Rioja', 'America/Argentina/La_Rioja', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(20, 'America', 'Argentina - Mendoza', 'America/Argentina/Mendoza', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(21, 'America', 'Argentina - Rio Gallegos', 'America/Argentina/Rio_Gallegos', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(22, 'America', 'Argentina - Salta', 'America/Argentina/Salta', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(23, 'America', 'Argentina - San Juan', 'America/Argentina/San_Juan', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(24, 'America', 'Argentina - San Luis', 'America/Argentina/San_Luis', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(25, 'America', 'Argentina - Tucuman', 'America/Argentina/Tucuman', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(26, 'America', 'Argentina - Ushuaia', 'America/Argentina/Ushuaia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(27, 'America', 'Aruba', 'America/Aruba', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(28, 'America', 'Asuncion', 'America/Asuncion', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(29, 'America', 'Atikokan', 'America/Atikokan', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(30, 'America', 'Atka', 'America/Atka', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(31, 'America', 'Bahia', 'America/Bahia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(32, 'America', 'Barbados', 'America/Barbados', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(33, 'America', 'Belem', 'America/Belem', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(34, 'America', 'Belize', 'America/Belize', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(35, 'America', 'Blanc-Sablon', 'America/Blanc-Sablon', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(36, 'America', 'Boa Vista', 'America/Boa_Vista', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(37, 'America', 'Bogota', 'America/Bogota', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(38, 'America', 'Boise', 'America/Boise', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(39, 'America', 'Buenos Aires', 'America/Buenos_Aires', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(40, 'America', 'Cambridge Bay', 'America/Cambridge_Bay', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(41, 'America', 'Campo Grande', 'America/Campo_Grande', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(42, 'America', 'Cancun', 'America/Cancun', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(43, 'America', 'Caracas', 'America/Caracas', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(44, 'America', 'Catamarca', 'America/Catamarca', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(45, 'America', 'Cayenne', 'America/Cayenne', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(46, 'America', 'Cayman', 'America/Cayman', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(47, 'America', 'Chicago', 'America/Chicago', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(48, 'America', 'Chihuahua', 'America/Chihuahua', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(49, 'America', 'Coral Harbour', 'America/Coral_Harbour', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(50, 'America', 'Cordoba', 'America/Cordoba', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(51, 'America', 'Costa Rica', 'America/Costa_Rica', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(52, 'America', 'Cuiaba', 'America/Cuiaba', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(53, 'America', 'Curacao', 'America/Curacao', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(54, 'America', 'Danmarkshavn', 'America/Danmarkshavn', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(55, 'America', 'Dawson', 'America/Dawson', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(56, 'America', 'Dawson Creek', 'America/Dawson_Creek', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(57, 'America', 'Denver', 'America/Denver', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(58, 'America', 'Detroit', 'America/Detroit', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(59, 'America', 'Dominica', 'America/Dominica', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(60, 'America', 'Edmonton', 'America/Edmonton', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(61, 'America', 'Eirunepe', 'America/Eirunepe', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(62, 'America', 'El Salvador', 'America/El_Salvador', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(63, 'America', 'Ensenada', 'America/Ensenada', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(64, 'America', 'Fortaleza', 'America/Fortaleza', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(65, 'America', 'Fort Wayne', 'America/Fort_Wayne', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(66, 'America', 'Glace Bay', 'America/Glace_Bay', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(67, 'America', 'Godthab', 'America/Godthab', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(68, 'America', 'Goose Bay', 'America/Goose_Bay', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(69, 'America', 'Grand Turk', 'America/Grand_Turk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(70, 'America', 'Grenada', 'America/Grenada', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(71, 'America', 'Guadeloupe', 'America/Guadeloupe', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(72, 'America', 'Guatemala', 'America/Guatemala', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(73, 'America', 'Guayaquil', 'America/Guayaquil', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(74, 'America', 'Guyana', 'America/Guyana', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(75, 'America', 'Halifax', 'America/Halifax', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(76, 'America', 'Havana', 'America/Havana', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(77, 'America', 'Hermosillo', 'America/Hermosillo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(78, 'America', 'Indiana - Indianapolis', 'America/Indiana/Indianapolis', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(79, 'America', 'Indiana - Knox', 'America/Indiana/Knox', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(80, 'America', 'Indiana - Marengo', 'America/Indiana/Marengo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(81, 'America', 'Indiana - Petersburg', 'America/Indiana/Petersburg', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(82, 'America', 'Indiana - Tell City', 'America/Indiana/Tell_City', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(83, 'America', 'Indiana - Vevay', 'America/Indiana/Vevay', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(84, 'America', 'Indiana - Vincennes', 'America/Indiana/Vincennes', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(85, 'America', 'Indiana - Winamac', 'America/Indiana/Winamac', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(86, 'America', 'Indianapolis', 'America/Indianapolis', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(87, 'America', 'Inuvik', 'America/Inuvik', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(88, 'America', 'Iqaluit', 'America/Iqaluit', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(89, 'America', 'Jamaica', 'America/Jamaica', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(90, 'America', 'Jujuy', 'America/Jujuy', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(91, 'America', 'Juneau', 'America/Juneau', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(92, 'America', 'Kentucky - Louisville', 'America/Kentucky/Louisville', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(93, 'America', 'Kentucky - Monticello', 'America/Kentucky/Monticello', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(94, 'America', 'Knox IN', 'America/Knox_IN', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(95, 'America', 'La Paz', 'America/La_Paz', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(96, 'America', 'Lima', 'America/Lima', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(97, 'America', 'Los Angeles', 'America/Los_Angeles', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(98, 'America', 'Louisville', 'America/Louisville', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(99, 'America', 'Maceio', 'America/Maceio', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(100, 'America', 'Managua', 'America/Managua', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(101, 'America', 'Manaus', 'America/Manaus', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(102, 'America', 'Marigot', 'America/Marigot', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(103, 'America', 'Martinique', 'America/Martinique', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(104, 'America', 'Matamoros', 'America/Matamoros', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(105, 'America', 'Mazatlan', 'America/Mazatlan', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(106, 'America', 'Mendoza', 'America/Mendoza', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(107, 'America', 'Menominee', 'America/Menominee', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(108, 'America', 'Merida', 'America/Merida', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(109, 'America', 'Mexico City', 'America/Mexico_City', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(110, 'America', 'Miquelon', 'America/Miquelon', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(111, 'America', 'Moncton', 'America/Moncton', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(112, 'America', 'Monterrey', 'America/Monterrey', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(113, 'America', 'Montevideo', 'America/Montevideo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(114, 'America', 'Montreal', 'America/Montreal', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(115, 'America', 'Montserrat', 'America/Montserrat', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(116, 'America', 'Nassau', 'America/Nassau', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(117, 'America', 'New York', 'America/New_York', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(118, 'America', 'Nipigon', 'America/Nipigon', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(119, 'America', 'Nome', 'America/Nome', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(120, 'America', 'Noronha', 'America/Noronha', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(121, 'America', 'North Dakota - Center', 'America/North_Dakota/Center', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(122, 'America', 'North Dakota - New Salem', 'America/North_Dakota/New_Salem', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(123, 'America', 'Ojinaga', 'America/Ojinaga', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(124, 'America', 'Panama', 'America/Panama', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(125, 'America', 'Pangnirtung', 'America/Pangnirtung', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(126, 'America', 'Paramaribo', 'America/Paramaribo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(127, 'America', 'Phoenix', 'America/Phoenix', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(128, 'America', 'Port-au-Prince', 'America/Port-au-Prince', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(129, 'America', 'Porto Acre', 'America/Porto_Acre', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(130, 'America', 'Port of Spain', 'America/Port_of_Spain', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(131, 'America', 'Porto Velho', 'America/Porto_Velho', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(132, 'America', 'Puerto Rico', 'America/Puerto_Rico', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(133, 'America', 'Rainy River', 'America/Rainy_River', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(134, 'America', 'Rankin Inlet', 'America/Rankin_Inlet', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(135, 'America', 'Recife', 'America/Recife', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(136, 'America', 'Regina', 'America/Regina', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(137, 'America', 'Resolute', 'America/Resolute', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(138, 'America', 'Rio Branco', 'America/Rio_Branco', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(139, 'America', 'Rosario', 'America/Rosario', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(140, 'America', 'Santa Isabel', 'America/Santa_Isabel', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(141, 'America', 'Santarem', 'America/Santarem', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(142, 'America', 'Santiago', 'America/Santiago', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(143, 'America', 'Santo Domingo', 'America/Santo_Domingo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(144, 'America', 'Sao Paulo', 'America/Sao_Paulo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(145, 'America', 'Scoresbysund', 'America/Scoresbysund', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(146, 'America', 'Shiprock', 'America/Shiprock', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(147, 'America', 'St Barthelemy', 'America/St_Barthelemy', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(148, 'America', 'St Johns', 'America/St_Johns', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(149, 'America', 'St Kitts', 'America/St_Kitts', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(150, 'America', 'St Lucia', 'America/St_Lucia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(151, 'America', 'St Thomas', 'America/St_Thomas', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(152, 'America', 'St Vincent', 'America/St_Vincent', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(153, 'America', 'Swift Current', 'America/Swift_Current', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(154, 'America', 'Tegucigalpa', 'America/Tegucigalpa', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(155, 'America', 'Thule', 'America/Thule', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(156, 'America', 'Thunder Bay', 'America/Thunder_Bay', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(157, 'America', 'Tijuana', 'America/Tijuana', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(158, 'America', 'Toronto', 'America/Toronto', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(159, 'America', 'Tortola', 'America/Tortola', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(160, 'America', 'Vancouver', 'America/Vancouver', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(161, 'America', 'Virgin', 'America/Virgin', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(162, 'America', 'Whitehorse', 'America/Whitehorse', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(163, 'America', 'Winnipeg', 'America/Winnipeg', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(164, 'America', 'Yakutat', 'America/Yakutat', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(165, 'America', 'Yellowknife', 'America/Yellowknife', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(166, 'Europe', 'Amsterdam', 'Europe/Amsterdam', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(167, 'Europe', 'Andorra', 'Europe/Andorra', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(168, 'Europe', 'Athens', 'Europe/Athens', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(169, 'Europe', 'Belfast', 'Europe/Belfast', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(170, 'Europe', 'Belgrade', 'Europe/Belgrade', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(171, 'Europe', 'Berlin', 'Europe/Berlin', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(172, 'Europe', 'Bratislava', 'Europe/Bratislava', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(173, 'Europe', 'Brussels', 'Europe/Brussels', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(174, 'Europe', 'Bucharest', 'Europe/Bucharest', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(175, 'Europe', 'Budapest', 'Europe/Budapest', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(176, 'Europe', 'Chisinau', 'Europe/Chisinau', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(177, 'Europe', 'Copenhagen', 'Europe/Copenhagen', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(178, 'Europe', 'Dublin', 'Europe/Dublin', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(179, 'Europe', 'Gibraltar', 'Europe/Gibraltar', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(180, 'Europe', 'Guernsey', 'Europe/Guernsey', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(181, 'Europe', 'Helsinki', 'Europe/Helsinki', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(182, 'Europe', 'Isle of Man', 'Europe/Isle_of_Man', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(183, 'Europe', 'Istanbul', 'Europe/Istanbul', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(184, 'Europe', 'Jersey', 'Europe/Jersey', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(185, 'Europe', 'Kaliningrad', 'Europe/Kaliningrad', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(186, 'Europe', 'Kiev', 'Europe/Kiev', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(187, 'Europe', 'Lisbon', 'Europe/Lisbon', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(188, 'Europe', 'Ljubljana', 'Europe/Ljubljana', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(189, 'Europe', 'London', 'Europe/London', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(190, 'Europe', 'Luxembourg', 'Europe/Luxembourg', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(191, 'Europe', 'Madrid', 'Europe/Madrid', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(192, 'Europe', 'Malta', 'Europe/Malta', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(193, 'Europe', 'Mariehamn', 'Europe/Mariehamn', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(194, 'Europe', 'Minsk', 'Europe/Minsk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(195, 'Europe', 'Monaco', 'Europe/Monaco', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(196, 'Europe', 'Moscow', 'Europe/Moscow', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(197, 'Europe', 'Nicosia', 'Europe/Nicosia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(198, 'Europe', 'Oslo', 'Europe/Oslo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(199, 'Europe', 'Paris', 'Europe/Paris', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(200, 'Europe', 'Podgorica', 'Europe/Podgorica', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(201, 'Europe', 'Prague', 'Europe/Prague', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(202, 'Europe', 'Riga', 'Europe/Riga', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(203, 'Europe', 'Rome', 'Europe/Rome', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(204, 'Europe', 'Samara', 'Europe/Samara', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(205, 'Europe', 'San Marino', 'Europe/San_Marino', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(206, 'Europe', 'Sarajevo', 'Europe/Sarajevo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(207, 'Europe', 'Simferopol', 'Europe/Simferopol', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(208, 'Europe', 'Skopje', 'Europe/Skopje', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(209, 'Europe', 'Sofia', 'Europe/Sofia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(210, 'Europe', 'Stockholm', 'Europe/Stockholm', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(211, 'Europe', 'Tallinn', 'Europe/Tallinn', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(212, 'Europe', 'Tirane', 'Europe/Tirane', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(213, 'Europe', 'Tiraspol', 'Europe/Tiraspol', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(214, 'Europe', 'Uzhgorod', 'Europe/Uzhgorod', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(215, 'Europe', 'Vaduz', 'Europe/Vaduz', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(216, 'Europe', 'Vatican', 'Europe/Vatican', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(217, 'Europe', 'Vienna', 'Europe/Vienna', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(218, 'Europe', 'Vilnius', 'Europe/Vilnius', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(219, 'Europe', 'Volgograd', 'Europe/Volgograd', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(220, 'Europe', 'Warsaw', 'Europe/Warsaw', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(221, 'Europe', 'Zagreb', 'Europe/Zagreb', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(222, 'Europe', 'Zaporozhye', 'Europe/Zaporozhye', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(223, 'Europe', 'Zurich', 'Europe/Zurich', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(224, 'Asia', 'Aden', 'Asia/Aden', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(225, 'Asia', 'Almaty', 'Asia/Almaty', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(226, 'Asia', 'Amman', 'Asia/Amman', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(227, 'Asia', 'Anadyr', 'Asia/Anadyr', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(228, 'Asia', 'Aqtau', 'Asia/Aqtau', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(229, 'Asia', 'Aqtobe', 'Asia/Aqtobe', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(230, 'Asia', 'Ashgabat', 'Asia/Ashgabat', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(231, 'Asia', 'Ashkhabad', 'Asia/Ashkhabad', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(232, 'Asia', 'Baghdad', 'Asia/Baghdad', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(233, 'Asia', 'Bahrain', 'Asia/Bahrain', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(234, 'Asia', 'Baku', 'Asia/Baku', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(235, 'Asia', 'Bangkok', 'Asia/Bangkok', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(236, 'Asia', 'Beirut', 'Asia/Beirut', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(237, 'Asia', 'Bishkek', 'Asia/Bishkek', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(238, 'Asia', 'Brunei', 'Asia/Brunei', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(239, 'Asia', 'Calcutta', 'Asia/Calcutta', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(240, 'Asia', 'Choibalsan', 'Asia/Choibalsan', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(241, 'Asia', 'Chongqing', 'Asia/Chongqing', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(242, 'Asia', 'Chungking', 'Asia/Chungking', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(243, 'Asia', 'Colombo', 'Asia/Colombo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(244, 'Asia', 'Dacca', 'Asia/Dacca', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(245, 'Asia', 'Damascus', 'Asia/Damascus', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(246, 'Asia', 'Dhaka', 'Asia/Dhaka', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(247, 'Asia', 'Dili', 'Asia/Dili', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(248, 'Asia', 'Dubai', 'Asia/Dubai', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(249, 'Asia', 'Dushanbe', 'Asia/Dushanbe', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(250, 'Asia', 'Gaza', 'Asia/Gaza', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(251, 'Asia', 'Harbin', 'Asia/Harbin', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(252, 'Asia', 'Ho Chi Minh', 'Asia/Ho_Chi_Minh', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(253, 'Asia', 'Hong Kong', 'Asia/Hong_Kong', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(254, 'Asia', 'Hovd', 'Asia/Hovd', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(255, 'Asia', 'Irkutsk', 'Asia/Irkutsk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(256, 'Asia', 'Istanbul', 'Asia/Istanbul', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(257, 'Asia', 'Jakarta', 'Asia/Jakarta', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(258, 'Asia', 'Jayapura', 'Asia/Jayapura', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(259, 'Asia', 'Jerusalem', 'Asia/Jerusalem', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(260, 'Asia', 'Kabul', 'Asia/Kabul', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(261, 'Asia', 'Kamchatka', 'Asia/Kamchatka', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(262, 'Asia', 'Karachi', 'Asia/Karachi', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(263, 'Asia', 'Kashgar', 'Asia/Kashgar', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(264, 'Asia', 'Kathmandu', 'Asia/Kathmandu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(265, 'Asia', 'Katmandu', 'Asia/Katmandu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(266, 'Asia', 'Kolkata', 'Asia/Kolkata', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(267, 'Asia', 'Krasnoyarsk', 'Asia/Krasnoyarsk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(268, 'Asia', 'Kuala Lumpur', 'Asia/Kuala_Lumpur', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(269, 'Asia', 'Kuching', 'Asia/Kuching', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(270, 'Asia', 'Kuwait', 'Asia/Kuwait', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(271, 'Asia', 'Macao', 'Asia/Macao', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(272, 'Asia', 'Macau', 'Asia/Macau', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(273, 'Asia', 'Magadan', 'Asia/Magadan', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(274, 'Asia', 'Makassar', 'Asia/Makassar', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(275, 'Asia', 'Manila', 'Asia/Manila', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(276, 'Asia', 'Muscat', 'Asia/Muscat', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(277, 'Asia', 'Nicosia', 'Asia/Nicosia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(278, 'Asia', 'Novokuznetsk', 'Asia/Novokuznetsk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(279, 'Asia', 'Novosibirsk', 'Asia/Novosibirsk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(280, 'Asia', 'Omsk', 'Asia/Omsk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(281, 'Asia', 'Oral', 'Asia/Oral', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(282, 'Asia', 'Phnom Penh', 'Asia/Phnom_Penh', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(283, 'Asia', 'Pontianak', 'Asia/Pontianak', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(284, 'Asia', 'Pyongyang', 'Asia/Pyongyang', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(285, 'Asia', 'Qatar', 'Asia/Qatar', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(286, 'Asia', 'Qyzylorda', 'Asia/Qyzylorda', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(287, 'Asia', 'Rangoon', 'Asia/Rangoon', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(288, 'Asia', 'Riyadh', 'Asia/Riyadh', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(289, 'Asia', 'Saigon', 'Asia/Saigon', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(290, 'Asia', 'Sakhalin', 'Asia/Sakhalin', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(291, 'Asia', 'Samarkand', 'Asia/Samarkand', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(292, 'Asia', 'Seoul', 'Asia/Seoul', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(293, 'Asia', 'Shanghai', 'Asia/Shanghai', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(294, 'Asia', 'Singapore', 'Asia/Singapore', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(295, 'Asia', 'Taipei', 'Asia/Taipei', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(296, 'Asia', 'Tashkent', 'Asia/Tashkent', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(297, 'Asia', 'Tbilisi', 'Asia/Tbilisi', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(298, 'Asia', 'Tehran', 'Asia/Tehran', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(299, 'Asia', 'Tel Aviv', 'Asia/Tel_Aviv', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(300, 'Asia', 'Thimbu', 'Asia/Thimbu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(301, 'Asia', 'Thimphu', 'Asia/Thimphu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(302, 'Asia', 'Tokyo', 'Asia/Tokyo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(303, 'Asia', 'Ujung Pandang', 'Asia/Ujung_Pandang', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(304, 'Asia', 'Ulaanbaatar', 'Asia/Ulaanbaatar', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(305, 'Asia', 'Ulan Bator', 'Asia/Ulan_Bator', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(306, 'Asia', 'Urumqi', 'Asia/Urumqi', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(307, 'Asia', 'Vientiane', 'Asia/Vientiane', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(308, 'Asia', 'Vladivostok', 'Asia/Vladivostok', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(309, 'Asia', 'Yakutsk', 'Asia/Yakutsk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(310, 'Asia', 'Yekaterinburg', 'Asia/Yekaterinburg', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(311, 'Asia', 'Yerevan', 'Asia/Yerevan', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(312, 'Africa', 'Abidjan', 'Africa/Abidjan', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(313, 'Africa', 'Accra', 'Africa/Accra', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(314, 'Africa', 'Addis Ababa', 'Africa/Addis_Ababa', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(315, 'Africa', 'Algiers', 'Africa/Algiers', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(316, 'Africa', 'Asmara', 'Africa/Asmara', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(317, 'Africa', 'Asmera', 'Africa/Asmera', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(318, 'Africa', 'Bamako', 'Africa/Bamako', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(319, 'Africa', 'Bangui', 'Africa/Bangui', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(320, 'Africa', 'Banjul', 'Africa/Banjul', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(321, 'Africa', 'Bissau', 'Africa/Bissau', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(322, 'Africa', 'Blantyre', 'Africa/Blantyre', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(323, 'Africa', 'Brazzaville', 'Africa/Brazzaville', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(324, 'Africa', 'Bujumbura', 'Africa/Bujumbura', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(325, 'Africa', 'Cairo', 'Africa/Cairo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(326, 'Africa', 'Casablanca', 'Africa/Casablanca', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(327, 'Africa', 'Ceuta', 'Africa/Ceuta', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(328, 'Africa', 'Conakry', 'Africa/Conakry', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(329, 'Africa', 'Dakar', 'Africa/Dakar', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(330, 'Africa', 'Dar es Salaam', 'Africa/Dar_es_Salaam', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(331, 'Africa', 'Djibouti', 'Africa/Djibouti', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(332, 'Africa', 'Douala', 'Africa/Douala', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(333, 'Africa', 'El Aaiun', 'Africa/El_Aaiun', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(334, 'Africa', 'Freetown', 'Africa/Freetown', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(335, 'Africa', 'Gaborone', 'Africa/Gaborone', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(336, 'Africa', 'Harare', 'Africa/Harare', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(337, 'Africa', 'Johannesburg', 'Africa/Johannesburg', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(338, 'Africa', 'Kampala', 'Africa/Kampala', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(339, 'Africa', 'Khartoum', 'Africa/Khartoum', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(340, 'Africa', 'Kigali', 'Africa/Kigali', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(341, 'Africa', 'Kinshasa', 'Africa/Kinshasa', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(342, 'Africa', 'Lagos', 'Africa/Lagos', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(343, 'Africa', 'Libreville', 'Africa/Libreville', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(344, 'Africa', 'Lome', 'Africa/Lome', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(345, 'Africa', 'Luanda', 'Africa/Luanda', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(346, 'Africa', 'Lubumbashi', 'Africa/Lubumbashi', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(347, 'Africa', 'Lusaka', 'Africa/Lusaka', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(348, 'Africa', 'Malabo', 'Africa/Malabo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(349, 'Africa', 'Maputo', 'Africa/Maputo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(350, 'Africa', 'Maseru', 'Africa/Maseru', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(351, 'Africa', 'Mbabane', 'Africa/Mbabane', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(352, 'Africa', 'Mogadishu', 'Africa/Mogadishu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(353, 'Africa', 'Monrovia', 'Africa/Monrovia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(354, 'Africa', 'Nairobi', 'Africa/Nairobi', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(355, 'Africa', 'Ndjamena', 'Africa/Ndjamena', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(356, 'Africa', 'Niamey', 'Africa/Niamey', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(357, 'Africa', 'Nouakchott', 'Africa/Nouakchott', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(358, 'Africa', 'Ouagadougou', 'Africa/Ouagadougou', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(359, 'Africa', 'Porto-Novo', 'Africa/Porto-Novo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(360, 'Africa', 'Sao Tome', 'Africa/Sao_Tome', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(361, 'Africa', 'Timbuktu', 'Africa/Timbuktu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(362, 'Africa', 'Tripoli', 'Africa/Tripoli', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(363, 'Africa', 'Tunis', 'Africa/Tunis', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(364, 'Africa', 'Windhoek', 'Africa/Windhoek', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(365, 'Australia', 'ACT', 'Australia/ACT', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(366, 'Australia', 'Adelaide', 'Australia/Adelaide', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(367, 'Australia', 'Brisbane', 'Australia/Brisbane', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(368, 'Australia', 'Broken Hill', 'Australia/Broken_Hill', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(369, 'Australia', 'Canberra', 'Australia/Canberra', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(370, 'Australia', 'Currie', 'Australia/Currie', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(371, 'Australia', 'Darwin', 'Australia/Darwin', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(372, 'Australia', 'Eucla', 'Australia/Eucla', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(373, 'Australia', 'Hobart', 'Australia/Hobart', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(374, 'Australia', 'LHI', 'Australia/LHI', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(375, 'Australia', 'Lindeman', 'Australia/Lindeman', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(376, 'Australia', 'Lord Howe', 'Australia/Lord_Howe', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(377, 'Australia', 'Melbourne', 'Australia/Melbourne', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(378, 'Australia', 'North', 'Australia/North', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(379, 'Australia', 'NSW', 'Australia/NSW', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(380, 'Australia', 'Perth', 'Australia/Perth', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(381, 'Australia', 'Queensland', 'Australia/Queensland', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(382, 'Australia', 'South', 'Australia/South', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(383, 'Australia', 'Sydney', 'Australia/Sydney', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(384, 'Australia', 'Tasmania', 'Australia/Tasmania', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(385, 'Australia', 'Victoria', 'Australia/Victoria', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(386, 'Australia', 'West', 'Australia/West', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(387, 'Australia', 'Yancowinna', 'Australia/Yancowinna', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(388, 'Indian', 'Antananarivo', 'Indian/Antananarivo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(389, 'Indian', 'Chagos', 'Indian/Chagos', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(390, 'Indian', 'Christmas', 'Indian/Christmas', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(391, 'Indian', 'Cocos', 'Indian/Cocos', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(392, 'Indian', 'Comoro', 'Indian/Comoro', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(393, 'Indian', 'Kerguelen', 'Indian/Kerguelen', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(394, 'Indian', 'Mahe', 'Indian/Mahe', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(395, 'Indian', 'Maldives', 'Indian/Maldives', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(396, 'Indian', 'Mauritius', 'Indian/Mauritius', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(397, 'Indian', 'Mayotte', 'Indian/Mayotte', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(398, 'Indian', 'Reunion', 'Indian/Reunion', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(399, 'Atlantic', 'Azores', 'Atlantic/Azores', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(400, 'Atlantic', 'Bermuda', 'Atlantic/Bermuda', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(401, 'Atlantic', 'Canary', 'Atlantic/Canary', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(402, 'Atlantic', 'Cape Verde', 'Atlantic/Cape_Verde', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(403, 'Atlantic', 'Faeroe', 'Atlantic/Faeroe', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(404, 'Atlantic', 'Faroe', 'Atlantic/Faroe', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(405, 'Atlantic', 'Jan Mayen', 'Atlantic/Jan_Mayen', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(406, 'Atlantic', 'Madeira', 'Atlantic/Madeira', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(407, 'Atlantic', 'Reykjavik', 'Atlantic/Reykjavik', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(408, 'Atlantic', 'South Georgia', 'Atlantic/South_Georgia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(409, 'Atlantic', 'Stanley', 'Atlantic/Stanley', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(410, 'Atlantic', 'St Helena', 'Atlantic/St_Helena', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(411, 'Pacific', 'Apia', 'Pacific/Apia', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(412, 'Pacific', 'Auckland', 'Pacific/Auckland', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(413, 'Pacific', 'Chatham', 'Pacific/Chatham', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(414, 'Pacific', 'Easter', 'Pacific/Easter', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(415, 'Pacific', 'Efate', 'Pacific/Efate', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(416, 'Pacific', 'Enderbury', 'Pacific/Enderbury', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(417, 'Pacific', 'Fakaofo', 'Pacific/Fakaofo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(418, 'Pacific', 'Fiji', 'Pacific/Fiji', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(419, 'Pacific', 'Funafuti', 'Pacific/Funafuti', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(420, 'Pacific', 'Galapagos', 'Pacific/Galapagos', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(421, 'Pacific', 'Gambier', 'Pacific/Gambier', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(422, 'Pacific', 'Guadalcanal', 'Pacific/Guadalcanal', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(423, 'Pacific', 'Guam', 'Pacific/Guam', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(424, 'Pacific', 'Honolulu', 'Pacific/Honolulu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(425, 'Pacific', 'Johnston', 'Pacific/Johnston', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(426, 'Pacific', 'Kiritimati', 'Pacific/Kiritimati', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(427, 'Pacific', 'Kosrae', 'Pacific/Kosrae', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(428, 'Pacific', 'Kwajalein', 'Pacific/Kwajalein', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(429, 'Pacific', 'Majuro', 'Pacific/Majuro', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(430, 'Pacific', 'Marquesas', 'Pacific/Marquesas', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(431, 'Pacific', 'Midway', 'Pacific/Midway', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(432, 'Pacific', 'Nauru', 'Pacific/Nauru', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(433, 'Pacific', 'Niue', 'Pacific/Niue', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(434, 'Pacific', 'Norfolk', 'Pacific/Norfolk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(435, 'Pacific', 'Noumea', 'Pacific/Noumea', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(436, 'Pacific', 'Pago Pago', 'Pacific/Pago_Pago', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(437, 'Pacific', 'Palau', 'Pacific/Palau', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(438, 'Pacific', 'Pitcairn', 'Pacific/Pitcairn', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(439, 'Pacific', 'Ponape', 'Pacific/Ponape', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(440, 'Pacific', 'Port Moresby', 'Pacific/Port_Moresby', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(441, 'Pacific', 'Rarotonga', 'Pacific/Rarotonga', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(442, 'Pacific', 'Saipan', 'Pacific/Saipan', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(443, 'Pacific', 'Samoa', 'Pacific/Samoa', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(444, 'Pacific', 'Tahiti', 'Pacific/Tahiti', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(445, 'Pacific', 'Tarawa', 'Pacific/Tarawa', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(446, 'Pacific', 'Tongatapu', 'Pacific/Tongatapu', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(447, 'Pacific', 'Truk', 'Pacific/Truk', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(448, 'Pacific', 'Wake', 'Pacific/Wake', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(449, 'Pacific', 'Wallis', 'Pacific/Wallis', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(450, 'Pacific', 'Yap', 'Pacific/Yap', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(451, 'Antarctica', 'Casey', 'Antarctica/Casey', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(452, 'Antarctica', 'Davis', 'Antarctica/Davis', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(453, 'Antarctica', 'DumontDUrville', 'Antarctica/DumontDUrville', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(454, 'Antarctica', 'Macquarie', 'Antarctica/Macquarie', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(455, 'Antarctica', 'Mawson', 'Antarctica/Mawson', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(456, 'Antarctica', 'McMurdo', 'Antarctica/McMurdo', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(457, 'Antarctica', 'Palmer', 'Antarctica/Palmer', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(458, 'Antarctica', 'Rothera', 'Antarctica/Rothera', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(459, 'Antarctica', 'South Pole', 'Antarctica/South_Pole', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(460, 'Antarctica', 'Syowa', 'Antarctica/Syowa', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(461, 'Antarctica', 'Vostok', 'Antarctica/Vostok', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(462, 'Arctic', 'Longyearbyen', 'Arctic/Longyearbyen', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(463, 'UTC', 'UTC', 'UTC', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(464, 'Manual Offsets', 'UTC-12', 'UTC-12', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(465, 'Manual Offsets', 'UTC-11', 'UTC-11', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(466, 'Manual Offsets', 'UTC-10', 'UTC-10', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(467, 'Manual Offsets', 'UTC-9', 'UTC-9', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(468, 'Manual Offsets', 'UTC-8', 'UTC-8', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(469, 'Manual Offsets', 'UTC-7', 'UTC-7', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(470, 'Manual Offsets', 'UTC-6', 'UTC-6', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(471, 'Manual Offsets', 'UTC-5', 'UTC-5', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(472, 'Manual Offsets', 'UTC-4', 'UTC-4', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(473, 'Manual Offsets', 'UTC-3', 'UTC-3', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(474, 'Manual Offsets', 'UTC-2', 'UTC-2', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(475, 'Manual Offsets', 'UTC-1', 'UTC-1', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(476, 'Manual Offsets', 'UTC+0', 'UTC+0', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(477, 'Manual Offsets', 'UTC+1', 'UTC+1', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(478, 'Manual Offsets', 'UTC+2', 'UTC+2', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(479, 'Manual Offsets', 'UTC+3', 'UTC+3', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(480, 'Manual Offsets', 'UTC+4', 'UTC+4', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(481, 'Manual Offsets', 'UTC+5', 'UTC+5', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(482, 'Manual Offsets', 'UTC+6', 'UTC+6', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(483, 'Manual Offsets', 'UTC+7', 'UTC+7', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(484, 'Manual Offsets', 'UTC+8', 'UTC+8', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(485, 'Manual Offsets', 'UTC+9', 'UTC+9', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(486, 'Manual Offsets', 'UTC+10', 'UTC+10', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(487, 'Manual Offsets', 'UTC+11', 'UTC+11', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(488, 'Manual Offsets', 'UTC+12', 'UTC+12', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(489, 'Manual Offsets', 'UTC+13', 'UTC+13', '2021-10-26 10:35:11', '2021-10-26 10:35:11'),
(490, 'Manual Offsets', 'UTC+14', 'UTC+14', '2021-10-26 10:35:11', '2021-10-26 10:35:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timezones`
--
ALTER TABLE `timezones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `timezones`
--
ALTER TABLE `timezones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=491;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
