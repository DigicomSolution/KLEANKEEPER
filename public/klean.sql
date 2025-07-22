-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 06:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klean`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image_id` bigint(20) DEFAULT NULL,
  `banner_image_id` bigint(20) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_js` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_study_services`
--

CREATE TABLE `case_study_services` (
  `case_study_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_study_services`
--

INSERT INTO `case_study_services` (`case_study_id`, `service_id`, `priority`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(1, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `types_id` bigint(20) DEFAULT NULL,
  `banner_image_id` bigint(20) DEFAULT NULL,
  `primary_image_id` bigint(20) DEFAULT NULL,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo_id_1` bigint(20) DEFAULT NULL,
  `logo_id_2` bigint(20) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_js` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `slug`, `name`, `short_description`, `content`, `logo_id_1`, `logo_id_2`, `is_featured`, `browser_title`, `meta_description`, `meta_keywords`, `top_description`, `bottom_description`, `extra_js`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'pittappillil', 'Pittappillil', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada vel mauris vitae suscipit. Nunc id tristique sem, et mollis arcu. Vivamus consectetur erat sed ex vehicula. edit', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque \r\nmalesuada vel mauris vitae suscipit. Nunc id tristique sem, et mollis \r\narcu. Vivamus consectetur erat sed ex vehicula, efficitur ultricies eros\r\n vestibulum. Suspendisse mattis rhoncus cursus. Fusce ut orci justo. Nam\r\n dolor justo, iaculis a tellus sit amet, rhoncus consectetur quam. Ut eu\r\n risus pretium, aliquet purus euismod, sollicitudin ligula. Suspendisse \r\ndictum pretium diam, vitae tempus magna pulvinar id. Nunc lacus dui, \r\naccumsan non lacus a, semper sagittis purus. Nullam interdum, dolor vel \r\negestas condimentum, dui quam ultrices tellus, a vehicula ligula nisi \r\nvel urna. Integer sodales ut ante sed condimentum. Orci varius natoque \r\npenatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit.\r\n</p>\r\n<p>\r\nPraesent mollis est id velit convallis eleifend. Morbi in rutrum nisi. \r\nPraesent porttitor molestie egestas. Nulla eget erat quis erat lacinia \r\ncommodo. Nunc a tempus elit. Proin molestie odio ac odio tincidunt, vel \r\nplacerat eros hendrerit. Proin viverra scelerisque lectus et luctus. Nam\r\n vel metus a mi elementum egestas. Nulla tincidunt massa non lacus \r\nconvallis, sed posuere dui pulvinar.\r\n</p>\r\n<p>\r\nSuspendisse eleifend, erat eget auctor pulvinar, dui nisl lacinia lacus,\r\n vitae pharetra justo augue ac felis. Quisque ante lacus, pharetra vel \r\naccumsan quis, mollis semper nisl. Donec mi ipsum, iaculis sodales \r\nligula a, ultrices dignissim erat. Mauris sit amet viverra lectus. \r\nSuspendisse volutpat sapien ac libero aliquet molestie. Morbi gravida \r\ndiam nunc, at cursus quam placerat at. Interdum et malesuada fames ac \r\nante ipsum primis in faucibus. Sed venenatis massa urna, quis lobortis \r\ntortor porttitor nec. Quisque a bibendum odio. Aenean vel pretium \r\nmauris. In ac vestibulum est, id imperdiet sapien.\r\n</p>', 1, 1, 0, 'Pittappillil', 'Pittappillil', 'Pittappillil', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque \r\nmalesuada vel mauris vitae suscipit. Nunc id tristique sem, et mollis \r\narcu. Vivamus consectetur erat sed ex vehicula, efficitur ultricies eros\r\n vestibulum. Suspendisse mattis rhoncus cursus. Fusce ut orci justo. Nam\r\n dolor justo, iaculis a tellus sit amet, rhoncus consectetur quam. Ut eu\r\n risus pretium, aliquet purus euismod, sollicitudin ligula. Suspendisse \r\ndictum pretium diam, vitae tempus magna pulvinar id. Nunc lacus dui, \r\naccumsan non lacus a, semper sagittis purus. Nullam interdum, dolor vel \r\negestas condimentum, dui quam ultrices tellus, a vehicula ligula nisi \r\nvel urna. Integer sodales ut ante sed condimentum. Orci varius natoque \r\npenatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit.\r\n</p>\r\n<p>\r\nPraesent mollis est id velit convallis eleifend. Morbi in rutrum nisi. \r\nPraesent porttitor molestie egestas. Nulla eget erat quis e', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque \r\nmalesuada vel mauris vitae suscipit. Nunc id tristique sem, et mollis \r\narcu. Vivamus consectetur erat sed ex vehicula, efficitur ultricies eros\r\n vestibulum. Suspendisse mattis rhoncus cursus. Fusce ut orci justo. Nam\r\n dolor justo, iaculis a tellus sit amet, rhoncus consectetur quam. Ut eu\r\n risus pretium, aliquet purus euismod, sollicitudin ligula. Suspendisse \r\ndictum pretium diam, vitae tempus magna pulvinar id. Nunc lacus dui, \r\naccumsan non lacus a, semper sagittis purus. Nullam interdum, dolor vel \r\negestas condimentum, dui quam ultrices tellus, a vehicula ligula nisi \r\nvel urna. Integer sodales ut ante sed condimentum. Orci varius natoque \r\npenatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit.\r\n</p>\r\n<p>\r\nPraesent mollis est id velit convallis eleifend. Morbi in rutrum nisi. \r\nPraesent porttitor molestie egestas. Nulla eget erat quis e', NULL, 1, 1, 1, '2020-12-28 11:46:58', '2020-12-28 11:52:34', NULL),
(5, 'fone4', 'Fone4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada vel mauris vitae suscipit. Nunc id tristique sem, et mollis arcu. Vivamus consectetur erat sed ex vehicula. edit', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque \r\nmalesuada vel mauris vitae suscipit. Nunc id tristique sem, et mollis \r\narcu. Vivamus consectetur erat sed ex vehicula, efficitur ultricies eros\r\n vestibulum. Suspendisse mattis rhoncus cursus. Fusce ut orci justo. Nam\r\n dolor justo, iaculis a tellus sit amet, rhoncus consectetur quam. Ut eu\r\n risus pretium, aliquet purus euismod, sollicitudin ligula. Suspendisse \r\ndictum pretium diam, vitae tempus magna pulvinar id. Nunc lacus dui, \r\naccumsan non lacus a, semper sagittis purus. Nullam interdum, dolor vel \r\negestas condimentum, dui quam ultrices tellus, a vehicula ligula nisi \r\nvel urna. Integer sodales ut ante sed condimentum. Orci varius natoque \r\npenatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit.\r\n</p>\r\n<p>\r\nPraesent mollis est id velit convallis eleifend. Morbi in rutrum nisi. \r\nPraesent porttitor molestie egestas. Nulla eget erat quis erat lacinia \r\ncommodo. Nunc a tempus elit. Proin molestie odio ac odio tincidunt, vel \r\nplacerat eros hendrerit. Proin viverra scelerisque lectus et luctus. Nam\r\n vel metus a mi elementum egestas. Nulla tincidunt massa non lacus \r\nconvallis, sed posuere dui pulvinar.\r\n</p>\r\n<p>\r\nSuspendisse eleifend, erat eget auctor pulvinar, dui nisl lacinia lacus,\r\n vitae pharetra justo augue ac felis. Quisque ante lacus, pharetra vel \r\naccumsan quis, mollis semper nisl. Donec mi ipsum, iaculis sodales \r\nligula a, ultrices dignissim erat. Mauris sit amet viverra lectus. \r\nSuspendisse volutpat sapien ac libero aliquet molestie. Morbi gravida \r\ndiam nunc, at cursus quam placerat at. Interdum et malesuada fames ac \r\nante ipsum primis in faucibus. Sed venenatis massa urna, quis lobortis \r\ntortor porttitor nec. Quisque a bibendum odio. Aenean vel pretium \r\nmauris. In ac vestibulum est, id imperdiet sapien.\r\n</p>', 5, 5, 0, 'Fone4', 'Fone4', 'Fone4', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque \r\nmalesuada vel mauris vitae suscipit. Nunc id tristique sem, et mollis \r\narcu. Vivamus consectetur erat sed ex vehicula, efficitur ultricies eros\r\n vestibulum. Suspendisse mattis rhoncus cursus. Fusce ut orci justo. Nam\r\n dolor justo, iaculis a tellus sit amet, rhoncus consectetur quam. Ut eu\r\n risus pretium, aliquet purus euismod, sollicitudin ligula. Suspendisse \r\ndictum pretium diam, vitae tempus magna pulvinar id. Nunc lacus dui, \r\naccumsan non lacus a, semper sagittis purus. Nullam interdum, dolor vel \r\negestas condimentum, dui quam ultrices tellus, a vehicula ligula nisi \r\nvel urna. Integer sodales ut ante sed condimentum. Orci varius natoque \r\npenatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit.\r\n</p>\r\n<p>\r\nPraesent mollis est id velit convallis eleifend. Morbi in rutrum nisi. \r\nPraesent porttitor molestie egestas. Nulla eget erat quis e', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque \r\nmalesuada vel mauris vitae suscipit. Nunc id tristique sem, et mollis \r\narcu. Vivamus consectetur erat sed ex vehicula, efficitur ultricies eros\r\n vestibulum. Suspendisse mattis rhoncus cursus. Fusce ut orci justo. Nam\r\n dolor justo, iaculis a tellus sit amet, rhoncus consectetur quam. Ut eu\r\n risus pretium, aliquet purus euismod, sollicitudin ligula. Suspendisse \r\ndictum pretium diam, vitae tempus magna pulvinar id. Nunc lacus dui, \r\naccumsan non lacus a, semper sagittis purus. Nullam interdum, dolor vel \r\negestas condimentum, dui quam ultrices tellus, a vehicula ligula nisi \r\nvel urna. Integer sodales ut ante sed condimentum. Orci varius natoque \r\npenatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit.\r\n</p>\r\n<p>\r\nPraesent mollis est id velit convallis eleifend. Morbi in rutrum nisi. \r\nPraesent porttitor molestie egestas. Nulla eget erat quis e', NULL, 1, 1, 1, '2020-12-29 13:24:54', '2020-12-29 13:24:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_services`
--

CREATE TABLE `client_services` (
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_services`
--

INSERT INTO `client_services` (`client_id`, `service_id`, `priority`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(5, 1, 1, NULL, NULL),
(5, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image_id` bigint(20) DEFAULT NULL,
  `banner_image_id` bigint(20) DEFAULT NULL,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_js` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `slug`, `name`, `short_description`, `content`, `featured_image_id`, `banner_image_id`, `browser_title`, `meta_description`, `meta_keywords`, `top_description`, `bottom_description`, `extra_js`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'web-development', 'Web Development', 'Nullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse cursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim vitae.', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque mattis tincidunt nisl. Integer venenatis molestie augue, \r\nsed porta nisl consectetur eget. Nam vulputate feugiat lacinia. Quisque \r\nmalesuada in purus vitae imperdiet. Curabitur eu rhoncus quam. Quisque \r\nfeugiat, nulla ac tristique molestie, libero nibh maximus urna, ut \r\nefficitur leo orci sollicitudin nibh. Vestibulum ut commodo nulla, at \r\nporta magna.\r\n</p>\r\n<p>\r\nNam quis mauris semper, laoreet sapien non, gravida massa. Vestibulum \r\nsed dui in magna accumsan luctus. Mauris neque orci, imperdiet a \r\nvenenatis eu, pretium at mauris. Morbi ut venenatis mi. Aliquam erat \r\nvolutpat. Suspendisse eleifend lacus ut tristique efficitur. Nam dictum a\r\n lorem sed interdum. Nullam ac vehicula nisl. Nullam ut orci vel velit \r\nlobortis pulvinar.\r\n</p>', 3, 3, 'Web Development', 'Web Development', 'Web Development', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque m', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque m', NULL, 1, 1, 1, '2020-12-28 12:58:48', '2020-12-28 12:58:48', NULL),
(2, 'social-media', 'Social Media', 'Nullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse cursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim vitae.', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque mattis tincidunt nisl. Integer venenatis molestie augue, \r\nsed porta nisl consectetur eget. Nam vulputate feugiat lacinia. Quisque \r\nmalesuada in purus vitae imperdiet. Curabitur eu rhoncus quam. Quisque \r\nfeugiat, nulla ac tristique molestie, libero nibh maximus urna, ut \r\nefficitur leo orci sollicitudin nibh. Vestibulum ut commodo nulla, at \r\nporta magna.\r\n</p>\r\n<p>\r\nNam quis mauris semper, laoreet sapien non, gravida massa. Vestibulum \r\nsed dui in magna accumsan luctus. Mauris neque orci, imperdiet a \r\nvenenatis eu, pretium at mauris. Morbi ut venenatis mi. Aliquam erat \r\nvolutpat. Suspendisse eleifend lacus ut tristique efficitur. Nam dictum a\r\n lorem sed interdum. Nullam ac vehicula nisl. Nullam ut orci vel velit \r\nlobortis pulvinar.\r\n</p>', 3, 3, 'Social Media', 'Social Media', 'Social Media', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque m', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque m', NULL, 1, 1, 1, '2020-12-28 12:58:48', '2020-12-28 12:58:48', NULL),
(3, 'app-development', 'App Development', 'Nullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse cursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim vitae.', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque mattis tincidunt nisl. Integer venenatis molestie augue, \r\nsed porta nisl consectetur eget. Nam vulputate feugiat lacinia. Quisque \r\nmalesuada in purus vitae imperdiet. Curabitur eu rhoncus quam. Quisque \r\nfeugiat, nulla ac tristique molestie, libero nibh maximus urna, ut \r\nefficitur leo orci sollicitudin nibh. Vestibulum ut commodo nulla, at \r\nporta magna.\r\n</p>\r\n<p>\r\nNam quis mauris semper, laoreet sapien non, gravida massa. Vestibulum \r\nsed dui in magna accumsan luctus. Mauris neque orci, imperdiet a \r\nvenenatis eu, pretium at mauris. Morbi ut venenatis mi. Aliquam erat \r\nvolutpat. Suspendisse eleifend lacus ut tristique efficitur. Nam dictum a\r\n lorem sed interdum. Nullam ac vehicula nisl. Nullam ut orci vel velit \r\nlobortis pulvinar.\r\n</p>', 3, 3, 'App Development', 'App Development', 'App Development', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque m', '<p>\r\nNullam pellentesque nulla sit amet pulvinar imperdiet. Suspendisse \r\ncursus convallis arcu ac vehicula. Nam neque neque, vehicula et enim \r\nvitae, vehicula mollis massa. Phasellus dapibus eros ac lectus gravida, \r\nin consectetur massa facilisis. Ut ultricies semper enim congue \r\nsagittis. Proin interdum venenatis elit vitae dictum. Suspendisse sed \r\ntempus turpis. Nam viverra nulla ante.\r\n</p>\r\n<p>\r\nDuis faucibus ipsum sed metus rhoncus, eu tincidunt leo laoreet. Aliquam\r\n quam massa, tempus sed rutrum sed, ultricies ut dolor. Quisque at neque\r\n ac diam ultricies tincidunt. Mauris pharetra laoreet bibendum. Orci \r\nvarius natoque penatibus et magnis dis parturient montes, nascetur \r\nridiculus mus. In nunc quam, consectetur ac gravida sit amet, mattis non\r\n lorem. Quisque quam augue, pellentesque sit amet commodo in, commodo \r\nvitae velit. Morbi sem mi, rutrum vitae turpis tincidunt, porta maximus \r\nnisi. Integer quis lacus vehicula, dapibus metus id, ultricies est. \r\nPellentesque m', NULL, 1, 1, 1, '2020-12-28 12:58:48', '2020-12-28 12:58:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(50) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `status` int(50) DEFAULT NULL,
  `created_by` int(50) DEFAULT NULL,
  `updated_by` int(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Home', 1, 1, 1, '2021-01-04 00:56:22', '2021-01-25 07:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `faq_question_answers`
--

CREATE TABLE `faq_question_answers` (
  `id` int(50) NOT NULL,
  `faq_id` int(50) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_by` int(50) DEFAULT NULL,
  `updated_by` int(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_question_answers`
--

INSERT INTO `faq_question_answers` (`id`, `faq_id`, `question`, `answer`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 1, 'How to contact Klean keepers?', 'You can contact us by email address, admin@kleankeepers.co.uk', 1, 1, '2021-01-25 07:31:31', '2021-01-25 07:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_pages`
--

CREATE TABLE `frontend_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `media_id` bigint(20) DEFAULT NULL,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_css` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_js` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frontend_pages`
--

INSERT INTO `frontend_pages` (`id`, `slug`, `name`, `media_id`, `browser_title`, `meta_description`, `meta_keywords`, `top_description`, `bottom_description`, `extra_css`, `extra_js`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'home', 'Home', NULL, 'Home', 'Home', 'Home', '{\"section1\":{\"media_id\":\"12\",\"heading1\":\"Experienced\",\"heading2\":\"Growth.\",\"description\":\"Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"related_page\":null},\"section2\":{\"media_id\":\"13\",\"heading\":\"SERVICES\",\"description\":\"Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"related_page\":null},\"section3\":{\"widget_id\":\"1\"},\"section4\":{\"widget_id\":\"2\"},\"section5\":{\"widget_id\":\"3\"},\"section6\":{\"widget_id\":\"4\"},\"section7\":{\"widget_id\":\"5\"},\"section8\":{\"widget_id\":\"6\"},\"section9\":{\"widget_id\":\"7\"},\"files\":null}', NULL, NULL, NULL, 1, 1, 1, '2020-12-31 18:15:04', '2021-01-11 12:39:20', NULL),
(2, 'services', 'Services', NULL, 'Services', 'Services', 'Services', '{\"section1\":{\"media_id\":\"12\",\"heading1\":\"DIGITAL\",\"heading2\":\"SERVICES\",\"description\":\"Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"related_page\":null},\"section9\":{\"media_id\":\"16\",\"heading\":\"MORE IN THE HOUSE\",\"description\":\"Enabling businessesto get competitive edge in the market by building scalable and extensible software and mobile applications. Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"listing_id\":\"2\"},\"section3\":{\"widget_id\":\"5\"},\"section4\":{\"widget_id\":\"7\"},\"files\":null}', NULL, NULL, NULL, 1, 1, 1, '2020-12-31 18:15:04', '2021-01-11 12:56:53', NULL),
(3, 'about', 'About Us', NULL, 'About Us', 'About Us', 'About Us', '{\"section1\":{\"media_id\":\"20\",\"heading1\":\"Who Knows the\",\"heading2\":\"Web Better.\",\"description\":\"Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"related_page\":null},\"section2\":{\"media_id\":\"21\",\"heading1\":\"Years Of\",\"heading2\":\"Digital Growth\",\"description\":\"We pursue relationships based on transparency, persistence, mutual trust, and integrity with our employees, customers and other business partners.\",\"related_page\":null},\"section3\":{\"video_id\":\"6\",\"media_id\":\"22\",\"heading1\":\"Watch the\",\"heading2\":\"STORY\",\"description\":\"<b>15 years in the Industry,<\\/b> we taught ourselves a lot. Watch out journey.\"},\"section4\":{\"media_id\":\"23\",\"heading1\":\"Our\",\"heading2\":\"Vision\",\"description\":\"To perceive, plan, prepare, and perform wide-ranging Digital Marketing solutions to meet customer\\u2019s business needs. We develop professional and tactful solutions to cement the identity of the brand to garner optimum results.\"},\"section5\":{\"media_id\":\"24\",\"heading1\":\"Our\",\"heading2\":\"Mission\",\"description\":\"To perceive, plan, prepare, and perform wide-ranging Digital Marketing solutions to meet customer\\u2019s business needs. We develop professional and tactful solutions to cement the identity of the brand to garner optimum results.\"},\"section6\":{\"media_id\":null,\"heading1\":\"OUR\",\"heading2\":\"Proposition\",\"description\":\"To perceive, plan, prepare, and perform wide-ranging Digital Marketing solutions to meet customer\\u2019s business needs. We develop professional and tactful solutions to cement the identity of the brand to garner optimum results.\",\"listing_id\":\"3\"},\"section7\":{\"heading1\":\"Meet our homies\",\"heading2\":\"Homies\"},\"section8\":{\"heading1\":\"Behind\",\"heading2\":\"The Wall\",\"member_id\":\"2\"},\"section9\":{\"widget_id\":\"4\"},\"files\":null}', NULL, NULL, NULL, 1, 1, 1, '2020-12-31 18:15:04', '2021-01-11 12:51:06', NULL),
(4, 'team', 'Team', NULL, 'Team', 'Team', 'Team', '{\"section1\":{\"media_id\":\"12\",\"heading1\":\"Experienced\",\"heading2\":\"Growth.\",\"description\":\"Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"related_page\":null},\"section2\":{\"media_id\":\"13\",\"heading\":\"SERVICES\",\"description\":\"Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"related_page\":null},\"section3\":{\"heading\":\"Business Transformed\",\"description\":\"Enabling businessesto get competitive edge in the market by building scalable and extensible software and mobile applications. Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\"},\"section4\":{\"years1\":\"15\",\"text1\":\"Digital marketing\",\"years2\":\"20\",\"text2\":\"Digital marketing\",\"years3\":\"50\",\"text3\":\"Digital marketing\"},\"section5\":{\"heading\":\"Testimonials\",\"description\":\"Some awesome words from some awesome people\"},\"section6\":{\"media_id\":\"15\",\"heading1\":\"Engage\",\"heading2\":\"With Us.\"},\"section7\":{\"media_id\":\"14\",\"heading1\":\"Trusted by\",\"heading2\":\"Brands\",\"description\":\"See more of works and see the wonder . Let\'s Check\",\"related_page\":null},\"section8\":{\"heading\":\"Case Studies\",\"description\":\"Some awesome words from awesome people\"},\"section9\":{\"media_id\":\"16\",\"heading\":\"Our commitments\",\"description\":\"Enabling businessesto get competitive edge in the market by building scalable and extensible software and mobile applications. Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"listing_id\":\"1\"},\"files\":null}', NULL, NULL, NULL, 1, 1, 1, '2020-12-31 18:15:04', '2021-01-04 11:04:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `notes` text DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `company` varchar(150) DEFAULT NULL,
  `ip` text DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `country_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `notes`, `name`, `phone`, `country`, `email`, `message`, `location`, `company`, `ip`, `type`, `created_at`, `updated_at`, `country_code`) VALUES
(1, NULL, 'Akhil JOY', '9496607954', 'in', 'b2akhilmj@gmail.com', 'Hello, i am akhil', NULL, NULL, NULL, 'Enquiry now - popup', '2021-01-28 08:48:40', '2021-01-28 08:48:40', '91'),
(2, NULL, 'Akhil JOY', '9496607954', 'in', 'b2akhilmj@gmail.com', 'Test message', NULL, NULL, NULL, 'Enquiry now - popup', '2021-01-28 08:54:03', '2021-01-28 08:54:03', '91'),
(3, NULL, 'Akhil JOY', '9496607954', 'in', 'b2akhilmj@gmail.com', 'Test message', NULL, NULL, NULL, 'Enquiry now - popup', '2021-01-28 08:58:33', '2021-01-28 08:58:33', '91'),
(4, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:18:21', '2021-01-28 09:18:21', NULL),
(5, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:20:33', '2021-01-28 09:20:33', NULL),
(6, NULL, 'Kanimangalam', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test messaghjkhjkhke', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:21:46', '2021-01-28 09:21:46', NULL),
(7, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', 'hjmkh', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:22:46', '2021-01-28 09:22:46', NULL),
(8, NULL, 'Akhil JOY', '94496607954', NULL, 'b2akhilmj@gmail.com', '123456', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:23:22', '2021-01-28 09:23:22', NULL),
(9, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:23:52', '2021-01-28 09:23:52', NULL),
(10, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:25:33', '2021-01-28 09:25:33', NULL),
(11, NULL, 'Akhil JOY', '3496607954', NULL, 'b2akhilmj@gmail.com', 'Test messaghjkhjkhke', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:26:22', '2021-01-28 09:26:22', NULL),
(12, NULL, 'Akhil JOY', '1949660795', NULL, 'b2akhilmj@gmail.com', 'Test messaghjkhjkhke', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:26:44', '2021-01-28 09:26:44', NULL),
(13, NULL, 'Kanimangalam', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test messaghjkhjkhke', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:27:00', '2021-01-28 09:27:00', NULL),
(14, NULL, 'Jomon RJ', '06282215119', NULL, 'b2akhilmj@gmail.com', 'Test messaghjkhjkhke', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:27:08', '2021-01-28 09:27:08', NULL),
(15, NULL, 'Kanimangalam', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:28:41', '2021-01-28 09:28:41', NULL),
(16, NULL, 'Kanimangalam', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test hhh', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:29:19', '2021-01-28 09:29:19', NULL),
(17, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:31:19', '2021-01-28 09:31:19', NULL),
(18, NULL, 'Kanimangalam', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test messbhjkhjhjage', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:31:47', '2021-01-28 09:31:47', NULL),
(19, NULL, 'Akhil JOY', '06282215119', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:32:27', '2021-01-28 09:32:27', NULL),
(20, NULL, 'Kanimangalam', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test messagehjhjhj', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:32:46', '2021-01-28 09:32:46', NULL),
(21, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:34:18', '2021-01-28 09:34:18', NULL),
(22, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - mobile', '2021-01-28 09:36:55', '2021-01-28 09:36:55', NULL),
(23, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', '123456', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:39:01', '2021-01-28 09:39:01', NULL),
(24, NULL, 'Akhil JOY', '9496607954', 'in', 'b2akhilmj@gmail.com', 'Test message', NULL, NULL, NULL, 'Enquiry now - popup', '2021-01-28 09:47:13', '2021-01-28 09:47:13', '91'),
(25, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', '123456', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:57:53', '2021-01-28 09:57:53', NULL),
(26, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', '123456', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:58:35', '2021-01-28 09:58:35', NULL),
(27, NULL, 'Akhil JOY', '9496607954', NULL, 'b2akhilmj@gmail.com', '123456', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:58:47', '2021-01-28 09:58:47', NULL),
(28, NULL, 'Akhil JOY', '+919496607954', NULL, 'b2akhilmj@gmail.com', 'asdasda', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 09:59:11', '2021-01-28 09:59:11', NULL),
(29, NULL, 'Kanimangalam', '9496607954', 'us', 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - desktop', '2021-01-28 10:02:59', '2021-01-28 10:02:59', '1'),
(30, NULL, 'Akhil', '9496607954', 'us', 'b2akhilmj@gmail.com', 'Test message', NULL, 'Spiderworks', NULL, 'Request A Quote - mobile', '2021-01-28 10:03:48', '2021-01-28 10:03:48', '1'),
(31, 'Service Booking', 'Akhil JOY', '9496607954', 'in', 'b2akhilmj@gmail.com', 'hello', 'Thrissur', NULL, NULL, 'Request A Quote - mobile', '2021-01-28 10:14:29', '2021-01-28 10:14:29', '91');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(50) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_by` int(50) DEFAULT NULL,
  `updated_by` int(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listing_items`
--

CREATE TABLE `listing_items` (
  `id` int(50) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `heading` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_items`
--

INSERT INTO `listing_items` (`id`, `listing_id`, `media_id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(4, 1, 9, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', '2021-01-04 01:02:06', '2021-01-04 01:02:06'),
(3, 1, 10, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', '2021-01-04 01:02:06', '2021-01-04 01:02:06'),
(5, 1, 11, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', '2021-01-04 01:02:07', '2021-01-04 01:02:07'),
(6, 2, 11, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', '2021-01-05 04:36:54', '2021-01-05 04:36:54'),
(7, 2, 10, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', '2021-01-05 04:36:54', '2021-01-05 04:36:54'),
(8, 2, 9, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', '2021-01-05 04:36:54', '2021-01-05 04:36:54'),
(9, 3, NULL, NULL, '<b>We</b> ascertain the market and institute real-time measures to ensure your business reaches the target.', '2021-01-06 05:20:39', '2021-01-06 05:20:39'),
(10, 3, NULL, NULL, '<b>Consistent</b> efforts are executed to enrich customer experience that will obtain tangible results.', '2021-01-06 05:20:39', '2021-01-06 05:20:39'),
(11, 3, NULL, NULL, '<b>We</b> create your brand identity and publicises it towards ensuring accelerated growth and increased business potential.', '2021-01-06 05:20:39', '2021-01-06 05:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `media_library`
--

CREATE TABLE `media_library` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb_file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `dimensions` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Image',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 1,
  `related_type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `related_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media_library`
--

INSERT INTO `media_library` (`id`, `file_name`, `file_path`, `thumb_file_path`, `file_type`, `file_size`, `dimensions`, `media_type`, `title`, `description`, `alt_text`, `is_public`, `related_type`, `related_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'pittappillil-logo-mal15eafcb2d979375fe9c5532dbae.png', 'uploads/media/pittappillil-logo-mal15eafcb2d979375fe9c5532dbae.png', 'uploads/thumbnails/pittappillil-logo-mal15eafcb2d979375fe9c5532dbae.png', 'image/png', 79498, '1511 X 248', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2020-12-28 11:45:24', '2020-12-28 11:45:24', NULL),
(2, 'company liquidation main5fe9cb9ea9c84.png', 'uploads/media/company liquidation main5fe9cb9ea9c84.png', 'uploads/thumbnails/company liquidation main5fe9cb9ea9c84.png', 'image/png', 330610, '500 X 288', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2020-12-28 12:12:14', '2020-12-28 12:12:14', NULL),
(3, 'Flexi desks5fe9d61ea58a6.png', 'uploads/media/Flexi desks5fe9d61ea58a6.png', 'uploads/thumbnails/Flexi desks5fe9d61ea58a6.png', 'image/png', 341495, '500 X 375', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2020-12-28 12:57:02', '2020-12-28 12:57:02', NULL),
(4, 'visa5feaf7771138c.png', 'uploads/media/visa5feaf7771138c.png', 'uploads/thumbnails/visa5feaf7771138c.png', 'image/png', 176488, '500 X 333', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2020-12-29 09:31:35', '2020-12-29 09:31:35', NULL),
(5, 'logo5edce35a613225feb2e1547cc5.png', 'uploads/media/logo5edce35a613225feb2e1547cc5.png', 'uploads/thumbnails/logo5edce35a613225feb2e1547cc5.png', 'image/png', 14152, '232 X 218', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2020-12-29 13:24:38', '2020-12-29 13:24:38', NULL),
(6, 'file_example_MP4_480_1_5MG5fec03c355c36.mp4', 'uploads/media/file_example_MP4_480_1_5MG5fec03c355c36.mp4', 'miniweb/img/docs/video.jpg', 'video/mp4', 1570024, NULL, 'Video', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2020-12-30 04:36:19', '2020-12-30 04:36:19', NULL),
(7, 'face15fec0bed8727b.jpg', 'uploads/media/face15fec0bed8727b.jpg', 'uploads/thumbnails/face15fec0bed8727b.jpg', 'image/jpeg', 40507, '345 X 613', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2020-12-30 05:11:09', '2020-12-30 05:11:09', NULL),
(8, 'face25fec487a14cc7.png', 'uploads/media/face25fec487a14cc7.png', 'uploads/thumbnails/face25fec487a14cc7.png', 'image/png', 1314312, '1024 X 1024', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2020-12-30 09:29:31', '2020-12-30 09:29:31', NULL),
(9, 'l15ff2b4bac412c.png', 'uploads/media/l15ff2b4bac412c.png', 'uploads/thumbnails/l15ff2b4bac412c.png', 'image/png', 1304, '61 X 81', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-04 06:24:59', '2021-01-04 06:24:59', NULL),
(10, 'l25ff2b4e819c24.png', 'uploads/media/l25ff2b4e819c24.png', 'uploads/thumbnails/l25ff2b4e819c24.png', 'image/png', 841, '62 X 53', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-04 06:25:44', '2021-01-04 06:25:44', NULL),
(11, 'l35ff2b6414e77b.png', 'uploads/media/l35ff2b6414e77b.png', 'uploads/thumbnails/l35ff2b6414e77b.png', 'image/png', 1412, '63 X 69', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-04 06:31:29', '2021-01-04 06:31:29', NULL),
(12, 'banner-image5ff2ddc6a382b.png', 'uploads/media/banner-image5ff2ddc6a382b.png', 'uploads/thumbnails/banner-image5ff2ddc6a382b.png', 'image/png', 430747, '633 X 515', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-04 09:20:07', '2021-01-04 09:20:07', NULL),
(13, 'spider-new-bg5ff2ddfa18a04.png', 'uploads/media/spider-new-bg5ff2ddfa18a04.png', 'uploads/thumbnails/spider-new-bg5ff2ddfa18a04.png', 'image/png', 17613, '509 X 266', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-04 09:20:58', '2021-01-04 09:20:58', NULL),
(14, 'brand-bnr5ff2deec813dc.png', 'uploads/media/brand-bnr5ff2deec813dc.png', 'uploads/thumbnails/brand-bnr5ff2deec813dc.png', 'image/png', 649287, '1169 X 724', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-04 09:25:01', '2021-01-04 09:25:01', NULL),
(15, 'lapwithptn5ff2df51f188e.png', 'uploads/media/lapwithptn5ff2df51f188e.png', 'uploads/thumbnails/lapwithptn5ff2df51f188e.png', 'image/png', 304038, '723 X 633', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-04 09:26:42', '2021-01-04 09:26:42', NULL),
(16, 'sw-bl5ff2dfabe2f0f.png', 'uploads/media/sw-bl5ff2dfabe2f0f.png', 'uploads/thumbnails/sw-bl5ff2dfabe2f0f.png', 'image/png', 5473, '261 X 284', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-04 09:28:12', '2021-01-04 09:28:12', NULL),
(17, 'brand-aware5ff55d3c69b9d.png', 'uploads/media/brand-aware5ff55d3c69b9d.png', 'uploads/thumbnails/brand-aware5ff55d3c69b9d.png', 'image/png', 6828, '410 X 57', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-06 06:48:29', '2021-01-06 06:48:29', NULL),
(18, 'abt-cl25ff55d3c69b8b.png', 'uploads/media/abt-cl25ff55d3c69b8b.png', 'uploads/thumbnails/abt-cl25ff55d3c69b8b.png', 'image/png', 15027, '493 X 74', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-06 06:48:29', '2021-01-06 06:48:29', NULL),
(19, 'tony-john5ff5947ab589d.png', 'uploads/media/tony-john5ff5947ab589d.png', 'uploads/thumbnails/tony-john5ff5947ab589d.png', 'image/png', 763097, '553 X 814', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-06 10:44:12', '2021-01-06 10:44:12', NULL),
(20, 'about-banner5ff596b85817c.png', 'uploads/media/about-banner5ff596b85817c.png', 'uploads/thumbnails/about-banner5ff596b85817c.png', 'image/png', 261727, '407 X 275', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-06 10:53:44', '2021-01-06 10:53:44', NULL),
(21, 'about-exp5ff596e1be5b2.png', 'uploads/media/about-exp5ff596e1be5b2.png', 'uploads/thumbnails/about-exp5ff596e1be5b2.png', 'image/png', 18420, '535 X 685', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-06 10:54:26', '2021-01-06 10:54:26', NULL),
(22, 'abt-story5ff596fc7d506.png', 'uploads/media/abt-story5ff596fc7d506.png', 'uploads/thumbnails/abt-story5ff596fc7d506.png', 'image/png', 73561, '831 X 475', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-06 10:54:52', '2021-01-06 10:54:52', NULL),
(23, 'our-vision5ff5974cecf7b.png', 'uploads/media/our-vision5ff5974cecf7b.png', 'uploads/thumbnails/our-vision5ff5974cecf7b.png', 'image/png', 68139, '758 X 483', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-06 10:56:13', '2021-01-06 10:56:13', NULL),
(24, 'mission5ff597704dcdc.png', 'uploads/media/mission5ff597704dcdc.png', 'uploads/thumbnails/mission5ff597704dcdc.png', 'image/png', 47016, '612 X 545', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-06 10:56:48', '2021-01-06 10:56:48', NULL),
(25, 'cm25ff691dbcf952.png', 'uploads/media/cm25ff691dbcf952.png', 'uploads/thumbnails/cm25ff691dbcf952.png', 'image/png', 43411, '259 X 256', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-07 04:45:16', '2021-01-07 04:45:16', NULL),
(26, 'cd45ff691dbcf96d.png', 'uploads/media/cd45ff691dbcf96d.png', 'uploads/thumbnails/cd45ff691dbcf96d.png', 'image/png', 60988, '259 X 256', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-07 04:45:16', '2021-01-07 04:45:16', NULL),
(27, 'cd35ff691dbcfc60.png', 'uploads/media/cd35ff691dbcfc60.png', 'uploads/thumbnails/cd35ff691dbcfc60.png', 'image/png', 61769, '259 X 256', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-07 04:45:16', '2021-01-07 04:45:16', NULL),
(28, 'cm45ff691dbcf978.png', 'uploads/media/cm45ff691dbcf978.png', 'uploads/thumbnails/cm45ff691dbcf978.png', 'image/png', 54727, '259 X 256', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-07 04:45:16', '2021-01-07 04:45:16', NULL),
(29, 'cd15ff691dbcfb9b.png', 'uploads/media/cd15ff691dbcfb9b.png', 'uploads/thumbnails/cd15ff691dbcfb9b.png', 'image/png', 38057, '259 X 256', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-07 04:45:16', '2021-01-07 04:45:16', NULL),
(30, 'logo (1)600a74899aac4.png', 'uploads/media/logo (1)600a74899aac4.png', 'uploads/thumbnails/logo (1)600a74899aac4.png', 'image/png', 18902, '140 X 69', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-22 06:45:30', '2021-01-22 06:45:30', NULL),
(31, 'banner600a86b902027.jpg', 'uploads/media/banner600a86b902027.jpg', 'uploads/thumbnails/banner600a86b902027.jpg', 'image/jpeg', 96831, '1920 X 699', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-22 08:03:05', '2021-01-22 08:03:05', NULL),
(32, 'banner600a8e4491739.jpg', 'uploads/media/banner600a8e4491739.jpg', 'uploads/thumbnails/banner600a8e4491739.jpg', 'image/jpeg', 96831, '1920 X 699', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-22 08:35:17', '2021-01-22 08:35:17', NULL),
(33, 'Solar water heater mobile600e4fbfd5380.jpg', 'uploads/media/Solar water heater mobile600e4fbfd5380.jpg', 'uploads/thumbnails/Solar water heater mobile600e4fbfd5380.jpg', 'image/jpeg', 84708, '600 X 500', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 04:57:36', '2021-01-25 04:57:36', NULL),
(34, 'rr31600e55e6992d6.jpg', 'uploads/media/rr31600e55e6992d6.jpg', 'uploads/thumbnails/rr31600e55e6992d6.jpg', 'image/jpeg', 240124, '2048 X 2048', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 05:23:51', '2021-01-25 05:23:51', NULL),
(35, 'rr41600e5da60567c.jpg', 'uploads/media/rr41600e5da60567c.jpg', 'uploads/thumbnails/rr41600e5da60567c.jpg', 'image/jpeg', 59548, '750 X 750', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 05:56:54', '2021-01-25 05:56:54', NULL),
(36, 'rr32600e5e801a9fe.jpg', 'uploads/media/rr32600e5e801a9fe.jpg', 'uploads/thumbnails/rr32600e5e801a9fe.jpg', 'image/jpeg', 92106, '800 X 800', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 06:00:32', '2021-01-25 06:00:32', NULL),
(37, 'rr41600e5feee0300.jpg', 'uploads/media/rr41600e5feee0300.jpg', 'uploads/thumbnails/rr41600e5feee0300.jpg', 'image/jpeg', 59548, '750 X 750', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 06:06:39', '2021-01-25 06:06:39', NULL),
(38, 'slider-3600e70dd54a75.jpg', 'uploads/media/slider-3600e70dd54a75.jpg', 'uploads/thumbnails/slider-3600e70dd54a75.jpg', 'image/jpeg', 104140, '1920 X 699', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 07:18:53', '2021-01-25 07:18:53', NULL),
(39, 'slider-2600e70dd56bfa.jpg', 'uploads/media/slider-2600e70dd56bfa.jpg', 'uploads/thumbnails/slider-2600e70dd56bfa.jpg', 'image/jpeg', 109521, '1920 X 699', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 07:18:53', '2021-01-25 07:18:53', NULL),
(40, 'deep-cleaning-covid-19-getty-images600e7b28d0047.jpg', 'uploads/media/deep-cleaning-covid-19-getty-images600e7b28d0047.jpg', 'uploads/thumbnails/deep-cleaning-covid-19-getty-images600e7b28d0047.jpg', 'image/jpeg', 136792, '1500 X 1006', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 08:02:49', '2021-01-25 08:02:49', NULL),
(41, 'cleaning600ea9cbb5a82.jpg', 'uploads/media/cleaning600ea9cbb5a82.jpg', 'uploads/thumbnails/cleaning600ea9cbb5a82.jpg', 'image/jpeg', 79138, '292 X 195', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 11:21:47', '2021-01-25 11:21:47', NULL),
(42, '20-off-image-2600eaee02f04b.jpg', 'uploads/media/20-off-image-2600eaee02f04b.jpg', 'uploads/thumbnails/20-off-image-2600eaee02f04b.jpg', 'image/jpeg', 43106, '695 X 220', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 11:43:28', '2021-01-25 11:43:28', NULL),
(43, '20-off-image600eaee03077f.jpg', 'uploads/media/20-off-image600eaee03077f.jpg', 'uploads/thumbnails/20-off-image600eaee03077f.jpg', 'image/jpeg', 78331, '695 X 220', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 11:43:28', '2021-01-25 11:43:28', NULL),
(44, 'home-mobile-app-bg600eb397ad020.jpg', 'uploads/media/home-mobile-app-bg600eb397ad020.jpg', 'uploads/thumbnails/home-mobile-app-bg600eb397ad020.jpg', 'image/jpeg', 36064, '1920 X 515', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:03:35', '2021-01-25 12:03:35', NULL),
(45, 'mobile600eb3a123b60.png', 'uploads/media/mobile600eb3a123b60.png', 'uploads/thumbnails/mobile600eb3a123b60.png', 'image/png', 93837, '349 X 457', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:03:45', '2021-01-25 12:03:45', NULL),
(46, 'mobile-btn-2600eb5408e1d9.png', 'uploads/media/mobile-btn-2600eb5408e1d9.png', 'uploads/thumbnails/mobile-btn-2600eb5408e1d9.png', 'image/png', 5055, '225 X 69', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:10:40', '2021-01-25 12:10:40', NULL),
(47, 'mobile-btn-1600eb54887426.png', 'uploads/media/mobile-btn-1600eb54887426.png', 'uploads/thumbnails/mobile-btn-1600eb54887426.png', 'image/png', 4569, '213 X 69', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:10:48', '2021-01-25 12:10:48', NULL),
(48, 'about-img600eb80d178d4.png', 'uploads/media/about-img600eb80d178d4.png', 'uploads/thumbnails/about-img600eb80d178d4.png', 'image/png', 318665, '465 X 538', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:22:37', '2021-01-25 12:22:37', NULL),
(49, 'work-1600ebc6e23bc0.png', 'uploads/media/work-1600ebc6e23bc0.png', 'uploads/thumbnails/work-1600ebc6e23bc0.png', 'image/png', 13747, '165 X 165', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:41:18', '2021-01-25 12:41:18', NULL),
(50, 'work-2 (1)600ebd66a93cb.png', 'uploads/media/work-2 (1)600ebd66a93cb.png', 'uploads/thumbnails/work-2 (1)600ebd66a93cb.png', 'image/png', 14617, '165 X 165', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:45:26', '2021-01-25 12:45:26', NULL),
(51, 'work-3600ebd66aa74e.png', 'uploads/media/work-3600ebd66aa74e.png', 'uploads/thumbnails/work-3600ebd66aa74e.png', 'image/png', 14826, '165 X 165', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:45:26', '2021-01-25 12:45:26', NULL),
(52, 'work-2600ebd66b5f57.png', 'uploads/media/work-2600ebd66b5f57.png', 'uploads/thumbnails/work-2600ebd66b5f57.png', 'image/png', 14617, '165 X 165', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 12:45:26', '2021-01-25 12:45:26', NULL),
(53, 'il_570xN.2041541351_6ms3600ec2ef15d96.jpg', 'uploads/media/il_570xN.2041541351_6ms3600ec2ef15d96.jpg', 'uploads/thumbnails/il_570xN.2041541351_6ms3600ec2ef15d96.jpg', 'image/jpeg', 42467, '570 X 570', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-25 13:09:03', '2021-01-25 13:09:03', NULL),
(54, 'test-160111ce32ed9f.png', 'uploads/media/test-160111ce32ed9f.png', 'uploads/thumbnails/test-160111ce32ed9f.png', 'image/png', 16850, '308 X 347', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-27 07:57:23', '2021-01-27 07:57:23', NULL),
(55, 'work-26011389cd2675.png', 'uploads/summernote/work-26011389cd2675.png', 'uploads/thumbnails/work-26011389cd2675.png', 'image/png', 14617, '165 X 165', 'Image', NULL, NULL, NULL, 1, 'summernote', NULL, 1, 1, '2021-01-27 09:55:40', '2021-01-27 09:55:40', NULL),
(56, 'about-img60127841a5ab9.png', 'uploads/media/about-img60127841a5ab9.png', 'uploads/thumbnails/about-img60127841a5ab9.png', 'image/png', 318665, '465 X 538', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-28 08:39:30', '2021-01-28 08:39:30', NULL),
(57, 'banner60127a6fe2ced.jpg', 'uploads/media/banner60127a6fe2ced.jpg', 'uploads/thumbnails/banner60127a6fe2ced.jpg', 'image/jpeg', 96831, '1920 X 699', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-28 08:48:48', '2021-01-28 08:48:48', NULL),
(58, 'about-160127a9fb064e.jpg', 'uploads/media/about-160127a9fb064e.jpg', 'uploads/thumbnails/about-160127a9fb064e.jpg', 'image/jpeg', 248113, '700 X 466', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-28 08:49:35', '2021-01-28 08:49:35', NULL),
(59, 'iso6012a0bb62425.png', 'uploads/media/iso6012a0bb62425.png', 'uploads/thumbnails/iso6012a0bb62425.png', 'image/png', 6387, '123 X 123', 'Image', NULL, NULL, NULL, 1, NULL, NULL, 1, 1, '2021-01-28 11:32:11', '2021-01-28 11:32:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `position`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Main menu', 'Header', 1, 1, 1, '2021-01-18 10:34:02', '2021-01-18 10:34:02', NULL),
(2, 'USEFUL LINKS', 'Footer1', 1, 1, 1, '2021-01-18 10:34:54', '2021-01-18 10:34:54', NULL),
(3, 'NAVIGATION', 'Footer2', 1, 1, 1, '2021-01-18 10:35:36', '2021-01-18 10:35:36', NULL),
(4, 'NAVIGATION 2', 'Footer3', 1, 1, 1, '2021-01-18 10:36:21', '2021-01-18 10:36:21', NULL),
(5, 'NAVIGATION 3', 'Footer4', 1, 1, 1, '2021-01-18 10:36:56', '2021-01-18 10:36:56', NULL),
(8, 'Bottom', 'Bottom', 1, 1, 1, '2021-01-18 10:40:54', '2021-01-18 10:41:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_nextable_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkable_type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `target_blank` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `original_title`, `menu_type`, `url`, `menu_nextable_id`, `linkable_type`, `linkable_id`, `menu_order`, `parent_id`, `target_blank`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(100, 1, 'Blog', 'Blog', 'custom_link', 'blog', 'custom_link-Blog', NULL, NULL, 3, 0, 0, 1, 1, '2021-01-28 12:00:27', '2021-01-28 12:00:27', NULL),
(101, 1, 'Contact', 'Contact', 'custom_link', 'contact', 'custom_link-Contact', NULL, NULL, 4, 0, 0, 1, 1, '2021-01-28 12:00:27', '2021-01-28 12:00:27', NULL),
(98, 1, 'Services', 'Services', 'custom_link', 'services', 'custom_link-Services', NULL, NULL, 1, 0, 0, 1, 1, '2021-01-28 12:00:27', '2021-01-28 12:00:27', NULL),
(99, 1, 'Pricing', 'Pricing', 'custom_link', 'pricing', 'custom_link-Pricing', NULL, NULL, 2, 0, 0, 1, 1, '2021-01-28 12:00:27', '2021-01-28 12:00:27', NULL),
(106, 2, 'Link 5', 'Link 5', 'custom_link', '#', 'custom_link-Link 5', NULL, NULL, 4, 0, 0, 1, 1, '2021-01-28 12:00:43', '2021-01-28 12:00:43', NULL),
(105, 2, 'Link 4', 'Link 4', 'custom_link', '#', 'custom_link-Link 4', NULL, NULL, 3, 0, 0, 1, 1, '2021-01-28 12:00:43', '2021-01-28 12:00:43', NULL),
(104, 2, 'Link 3', 'Link 3', 'custom_link', '#', 'custom_link-Link 3', NULL, NULL, 2, 0, 0, 1, 1, '2021-01-28 12:00:43', '2021-01-28 12:00:43', NULL),
(103, 2, 'Link 2', 'Link 2', 'custom_link', '#', 'custom_link-Link 2', NULL, NULL, 1, 0, 0, 1, 1, '2021-01-28 12:00:43', '2021-01-28 12:00:43', NULL),
(102, 2, 'About us', 'Link 1', 'custom_link', 'about', 'custom_link-Link 1', NULL, NULL, 0, 0, 0, 1, 1, '2021-01-28 12:00:43', '2021-01-28 12:00:43', NULL),
(13, 3, 'Link 6', 'Link 6', 'custom_link', '#', 'custom_link-Link 6', NULL, NULL, 0, 0, 0, 1, 1, '2021-01-18 10:35:36', '2021-01-18 10:35:36', NULL),
(14, 3, 'Link 7', 'Link 7', 'custom_link', '#', 'custom_link-Link 7', NULL, NULL, 1, 0, 0, 1, 1, '2021-01-18 10:35:36', '2021-01-18 10:35:36', NULL),
(15, 3, 'Link 8', 'Link 8', 'custom_link', '#', 'custom_link-Link 8', NULL, NULL, 2, 0, 0, 1, 1, '2021-01-18 10:35:36', '2021-01-18 10:35:36', NULL),
(16, 3, 'Link 9', 'Link 9', 'custom_link', '#', 'custom_link-Link 9', NULL, NULL, 3, 0, 0, 1, 1, '2021-01-18 10:35:36', '2021-01-18 10:35:36', NULL),
(17, 3, 'Link 10', 'Link 10', 'custom_link', '#', 'custom_link-Link 10', NULL, NULL, 4, 0, 0, 1, 1, '2021-01-18 10:35:36', '2021-01-18 10:35:36', NULL),
(18, 4, 'Link 11', 'Link 11', 'custom_link', '#', 'custom_link-Link 11', NULL, NULL, 0, 0, 0, 1, 1, '2021-01-18 10:36:21', '2021-01-18 10:36:21', NULL),
(19, 4, 'Link 12', 'Link 12', 'custom_link', '#', 'custom_link-Link 12', NULL, NULL, 1, 0, 0, 1, 1, '2021-01-18 10:36:21', '2021-01-18 10:36:21', NULL),
(20, 4, 'Link 13', 'Link 13', 'custom_link', '#', 'custom_link-Link 13', NULL, NULL, 2, 0, 0, 1, 1, '2021-01-18 10:36:21', '2021-01-18 10:36:21', NULL),
(21, 4, 'Link 14', 'Link 14', 'custom_link', '#', 'custom_link-Link 14', NULL, NULL, 3, 0, 0, 1, 1, '2021-01-18 10:36:21', '2021-01-18 10:36:21', NULL),
(22, 4, 'Link 15', 'Link 15', 'custom_link', '#', 'custom_link-Link 15', NULL, NULL, 4, 0, 0, 1, 1, '2021-01-18 10:36:21', '2021-01-18 10:36:21', NULL),
(23, 5, 'Link 16', 'Link 16', 'custom_link', '#', 'custom_link-Link 16', NULL, NULL, 0, 0, 0, 1, 1, '2021-01-18 10:36:56', '2021-01-18 10:36:56', NULL),
(24, 5, 'Link 17', 'Link 17', 'custom_link', '#', 'custom_link-Link 17', NULL, NULL, 1, 0, 0, 1, 1, '2021-01-18 10:36:56', '2021-01-18 10:36:56', NULL),
(25, 5, 'Link 18', 'Link 18', 'custom_link', '#', 'custom_link-Link 18', NULL, NULL, 2, 0, 0, 1, 1, '2021-01-18 10:36:56', '2021-01-18 10:36:56', NULL),
(26, 5, 'Link 19', 'Link 19', 'custom_link', '#', 'custom_link-Link 19', NULL, NULL, 3, 0, 0, 1, 1, '2021-01-18 10:36:56', '2021-01-18 10:36:56', NULL),
(27, 5, 'Link 20', 'Link 20', 'custom_link', '#', 'custom_link-Link 20', NULL, NULL, 4, 0, 0, 1, 1, '2021-01-18 10:36:56', '2021-01-18 10:36:56', NULL),
(28, 6, 'Privacy Policy', 'Privacy Policy', 'custom_link', '#', 'custom_link-Privacy Policy', NULL, NULL, 0, 0, 0, 1, 1, '2021-01-18 10:37:38', '2021-01-18 10:37:38', NULL),
(29, 6, 'Terms and Conditions', 'Terms and Conditions', 'custom_link', '#', 'custom_link-Terms and Conditions', NULL, NULL, 1, 0, 0, 1, 1, '2021-01-18 10:37:38', '2021-01-18 10:37:38', NULL),
(30, 6, 'Cookies', 'Cookies', 'custom_link', '#', 'custom_link-Cookies', NULL, NULL, 2, 0, 0, 1, 1, '2021-01-18 10:37:38', '2021-01-18 10:37:38', NULL),
(31, 7, 'Cookies', 'Cookies', 'custom_link', '#', 'custom_link-Cookies', NULL, NULL, 0, 0, 0, 1, 1, '2021-01-18 10:40:04', '2021-01-18 10:40:04', NULL),
(32, 7, 'Cookies', 'Cookies', 'custom_link', '#', 'custom_link-Cookies', NULL, NULL, 1, 0, 0, 1, 1, '2021-01-18 10:40:04', '2021-01-18 10:40:04', NULL),
(33, 8, 'Cookies', 'Cookies', 'custom_link', '#', 'custom_link-Cookies', NULL, NULL, 0, 0, 0, 1, 1, '2021-01-18 10:40:54', '2021-01-18 10:40:54', NULL),
(97, 1, 'Home', 'Home', 'custom_link', '/', 'custom_link-Home', NULL, NULL, 0, 0, 0, 1, 1, '2021-01-28 12:00:27', '2021-01-28 12:00:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_24_053805_create_types_table', 1),
(5, '2019_09_24_054510_create_categories_table', 1),
(6, '2019_09_24_054546_create_pages_table', 1),
(7, '2019_09_24_054639_create_frontend_pages_table', 1),
(8, '2019_09_24_054728_create_menus_table', 1),
(9, '2019_09_24_073044_create_media_library_table', 1),
(10, '2020_12_22_112132_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_homies`
--

CREATE TABLE `our_homies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_heading` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_count` int(11) DEFAULT NULL,
  `project_display_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image_id` bigint(20) DEFAULT NULL,
  `banner_image_id` bigint(20) DEFAULT NULL,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_js` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `our_homies`
--

INSERT INTO `our_homies` (`id`, `slug`, `name`, `sub_heading`, `project_count`, `project_display_title`, `short_description`, `content`, `featured_image_id`, `banner_image_id`, `browser_title`, `meta_description`, `meta_keywords`, `top_description`, `bottom_description`, `extra_js`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brandaware', 'Brandaware', 'Need help with <b>Branding ?</b>', 15, 'BRANDING', 'We pursue relationships based on transparency, persistence, mutual trust, and integrity with our employees, customers and other business partners.', '<p>We pursue relationships based on transparency, persistence, mutual trust, and integrity with our employees, customers and other business partners.<br></p>', 17, 17, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-06 06:51:48', '2021-01-06 06:51:48', NULL),
(2, 'hatching-web', 'Hatching Web', 'Need help with <b>Web Development?</b>', 20, 'TOP', 'We pursue relationships based on transparency, persistence, mutual trust, and integrity with our employees, customers and other business partners.', '<p><span style=\"color: rgb(33, 37, 41); font-family: Poppins; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(246, 245, 245); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We pursue relationships based on transparency, persistence, mutual trust, and integrity with our employees, customers and other business partners.</span></p>', 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-06 06:54:12', '2021-01-06 06:54:12', NULL),
(3, 'fonics', 'FONICS', 'Need help with <b>App Development?</b>', 10, 'NEWEST', 'We pursue relationships based on transparency, persistence, mutual trust, and integrity with our employees, customers and other business partners.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-06 06:57:28', '2021-01-06 06:57:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('blog','page') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'page',
  `author` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_date` date DEFAULT NULL,
  `related_service_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `media_id` bigint(20) DEFAULT NULL,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_css` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_js` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `type`, `author`, `blog_date`, `related_service_id`, `name`, `short_description`, `content`, `parent_id`, `media_id`, `browser_title`, `meta_description`, `meta_keywords`, `top_description`, `bottom_description`, `extra_css`, `extra_js`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'services', 'page', NULL, NULL, NULL, 'Provide Worldwide Service For Good Customers', 'What We Do', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,<br></p>', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-27 08:36:47', '2021-01-27 08:36:47', NULL),
(2, 'blog-1', 'blog', 'Akhil', '2021-01-27', 8, 'Replenish sea they made his forth one may place air called had', 'Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gathering.', '<p><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gathering.</span><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span></p><p><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span></p><ul><li><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span></li><li><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin</span></li><li><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gatherin<br></span><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><br></span><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><br></span><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><br></span><br></li></ul>', 0, 40, 'Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third', 'Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gathering.', 'Fourth is all us together created fly sea creeping one brought god whose meat he trees first hath third for divide bon stars have may doesn\'t moving were rule life blessed female kind stars gathered cattle whales forth dry fifth you our whose. Great third to seasons may gathering.', NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-27 10:29:15', '2021-01-27 11:03:37', NULL),
(3, 'blogs', 'page', NULL, NULL, NULL, 'blogs', NULL, '<p>blogs<br></p>', 0, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-27 10:43:44', '2021-01-27 10:43:58', NULL),
(4, 'Lorem', 'blog', 'Akhil', '2021-01-27', 14, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut', '<h3 style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard Lorem Ipsum passage, used since the 1500s</h3><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3 style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 0, 41, 'sfsdfds', 'sdfsdfsd', 'sdf', NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-27 10:55:13', '2021-01-27 10:57:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-12-22 12:15:37', '2020-12-22 12:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-06-26 12:52:02', '2020-06-26 12:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image_id` bigint(20) DEFAULT NULL,
  `banner_image_id` bigint(20) DEFAULT NULL,
  `image_left_id` int(11) DEFAULT NULL,
  `image_right_id` int(11) DEFAULT NULL,
  `icon_image_id` int(11) DEFAULT NULL,
  `icon_alt_image_id` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `process_behind_heading` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `process_behind_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `commitment_heading1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commitment_heading2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commitment_media` bigint(20) DEFAULT NULL,
  `commitment_description` text COLLATE utf8_unicode_ci NOT NULL,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_js` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `slug`, `name`, `title1`, `title2`, `short_description`, `content`, `featured_image_id`, `banner_image_id`, `image_left_id`, `image_right_id`, `icon_image_id`, `icon_alt_image_id`, `is_featured`, `process_behind_heading`, `process_behind_description`, `commitment_heading1`, `commitment_heading2`, `commitment_media`, `commitment_description`, `browser_title`, `meta_description`, `meta_keywords`, `top_description`, `bottom_description`, `extra_js`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(38, 'commercial-cleaning', 'COMMERCIAL CLEANING', 'COMMERCIAL CLEANING', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Service Overview Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Service Overview Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Service Overview Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Service Overview Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', NULL, 57, 56, 56, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', 'Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<h2>Commercial Cleaning </h2><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', '<h2>Service Overview </h2><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', NULL, 1, 1, 1, '2021-01-28 10:32:34', '2021-01-28 10:32:34', NULL),
(6, 'cleaning-services', 'Cleaning Services', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,<br></p>', NULL, NULL, 48, 45, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '', 'title', NULL, NULL, '<h2>Lorem ipsum dolor sit amet,</h2><p> consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque', '<h2>Lorem ipsum dolor sit amet, </h2><p>consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque', NULL, 1, 1, 1, '2021-01-25 10:50:52', '2021-01-27 09:13:17', NULL),
(8, 'gardening', 'Gardening', NULL, NULL, 'ec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, ar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:52:54', '2021-01-27 08:43:27', NULL),
(9, 'pest-control', 'Pest Control', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:53:03', '2021-01-25 11:31:51', NULL),
(10, 'removals', 'Removals', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:53:18', '2021-01-25 10:53:18', NULL),
(11, 'waste-disposal', 'Waste Disposal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:53:27', '2021-01-25 10:53:27', NULL),
(12, 'drainage', 'Drainage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:53:46', '2021-01-25 11:26:20', NULL),
(13, 'tradesman-services', 'Tradesman Services', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:53:55', '2021-01-25 10:53:55', NULL),
(14, 'painters-and-decoraters', 'Painters and Decoraters', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:54:59', '2021-01-25 10:54:59', NULL),
(15, 'electrician', 'Electrician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:55:03', '2021-01-25 10:55:03', NULL),
(16, 'plumber', 'Plumber', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:55:05', '2021-01-25 10:55:05', NULL),
(17, 'handyman', 'Handyman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:55:08', '2021-01-25 10:55:08', NULL),
(18, 'external-drain-blockage', 'External Drain Blockage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:57:53', '2021-01-25 10:57:53', NULL),
(19, 'cctv-drainage-survey', 'CCTV Drainage Survey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:57:55', '2021-01-25 10:57:55', NULL),
(20, 'blocked-sink', 'Blocked Sink', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:57:57', '2021-01-25 10:57:57', NULL),
(21, 'blocked-tolets-and-soil-pipes', 'Blocked Tolets and Soil Pipes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:57:58', '2021-01-25 10:57:58', NULL),
(22, 'moving-homeoffice', 'Moving Home/office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:59:31', '2021-01-25 10:59:31', NULL),
(23, 'man-and-van', 'Man and Van', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 10:59:33', '2021-01-25 10:59:33', NULL),
(24, 'general-fumigation', 'General Fumigation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:00:36', '2021-01-25 11:00:36', NULL),
(25, 'insect-infestation', 'Insect Infestation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:00:38', '2021-01-25 11:00:38', NULL),
(26, 'bed-bugs', 'Bed Bugs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:00:39', '2021-01-25 11:00:39', NULL),
(27, 'rodent-infestation', 'Rodent Infestation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:00:41', '2021-01-25 11:00:41', NULL),
(28, 'hard-floor-cleaning', 'Hard Floor Cleaning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:02:30', '2021-01-25 11:02:30', NULL),
(29, 'holiday-rental-cleaning', 'Holiday Rental Cleaning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:02:32', '2021-01-25 11:02:32', NULL),
(30, 'after-builders-clean', 'After Builders Clean', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:02:34', '2021-01-25 11:02:34', NULL),
(31, 'end-of-tenancy', 'End of Tenancy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:02:35', '2021-01-25 11:02:35', NULL),
(32, 'deep-clean', 'Deep Clean', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:02:37', '2021-01-25 11:02:37', NULL),
(33, 'maid-services', 'Maid services', 'Maid services in londen', 'get 50% off on first booking', NULL, '<p>Quarter hearties case shot hands Blimey scuppers snow ye jolly boat Gold Road. Plunder Sink me black jack interloper haul wind chase guns gangplank walk the plank topgallant brig. Yawl scourge of the seven seas take a caulk Pirate Round gally lookout doubloon piracy Letter of Marque coffer. Flogging bilged on her anchor port cackle fruit fire ship Sink me jolly boat schooner hogshead reef sails. Tender piracy jury mast hempen halter grog blossom scurvy pink landlubber or just lubber aye schooner. Barbary Coast hulk gaff gibbet list bucko mizzen brigantine haul wind wench. Bilge rat schooner smartly sloop skysail lugsail yard starboard dead men tell no tales blow the man down. Ahoy nipper tack heave down scallywag grog blossom booty blow the man down pillage topmast. Bilged on her anchor prow maroon Sea Legs trysail mizzenmast bring a spring upon her cable scourge of the seven seas squiffy booty.\r\n\r\n\r\n\r\nprow maroon </p><ul><li>Sea Legs trysail mizzen\r\nprow marogs trysail </li><li>mizzenmast bring a sprin\r\ngs trysail </li><li>mizzenmast bring a springs trysail mizzen</li></ul><p><br></p><p><img src=\"http://localhost/klean/uploads/summernote/work-26011389cd2675.png\" style=\"width: 165px; float: left;\" class=\"note-float-left\">But despite all its benefits, seeing the same random Latin text in every design can get a little boring for you and your clients. So if you have a client who’s got a sense of humor or if you’re just tired of going the traditional route in your mockups, here are 15 creative and funny lorem ipsum text generators that are sure to lighten the mood at any client<br></p>', 41, 44, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:02:40', '2021-01-27 12:15:35', NULL),
(34, 'carpet-cleaning', 'Carpet Cleaning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:03:18', '2021-01-25 11:03:18', NULL),
(35, 'upholstery-cleaning', 'Upholstery Cleaning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:03:25', '2021-01-25 11:03:25', NULL),
(36, 'window-cleaning', 'Window Cleaning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:03:50', '2021-01-25 11:03:50', NULL),
(37, 'oven-cleaning', 'Oven Cleaning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-25 11:03:52', '2021-01-25 11:03:52', NULL),
(39, 'commercial-cleaning-1', 'COMMERCIAL CLEANING 1', 'COMMERCIAL CLEANING 1', 'COMMERCIAL CLEANING 2', NULL, '<h3 style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard Lorem Ipsum passage, used since the 1500s</h3><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3 style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-28 11:46:50', '2021-01-28 11:46:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services_commitments`
--

CREATE TABLE `services_commitments` (
  `id` bigint(20) NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `media_id` bigint(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_commitments`
--

INSERT INTO `services_commitments` (`id`, `service_id`, `title`, `description`, `media_id`, `created_at`, `updated_at`) VALUES
(13, 2, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', 11, '2021-01-25 02:10:33', '2021-01-25 02:10:33'),
(14, 2, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', 10, '2021-01-25 02:10:33', '2021-01-25 02:10:33'),
(15, 2, 'Digital Marketing', 'Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.', 9, '2021-01-25 02:10:33', '2021-01-25 02:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `services_process`
--

CREATE TABLE `services_process` (
  `id` bigint(20) NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_process`
--

INSERT INTO `services_process` (`id`, `service_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(26, 2, 'Digital Marketing', 'Our analysts will thoroughly review your project requirements and select the most experienced developers best suited for your project.', '2021-01-25 02:10:32', '2021-01-25 02:10:32'),
(27, 2, 'Digital Marketing', 'Our analysts will thoroughly review your project requirements and select the most experienced developers best suited for your project.', '2021-01-25 02:10:32', '2021-01-25 02:10:32'),
(28, 2, 'Digital Marketing', 'Our analysts will thoroughly review your project requirements and select the most experienced developers best suited for your project.', '2021-01-25 02:10:32', '2021-01-25 02:10:32'),
(29, 2, 'Digital Marketing', 'Our analysts will thoroughly review your project requirements and select the most experienced developers best suited for your project.', '2021-01-25 02:10:32', '2021-01-25 02:10:32'),
(30, 2, 'Digital Marketing', 'Our analysts will thoroughly review your project requirements and select the most experienced developers best suited for your project.', '2021-01-25 02:10:32', '2021-01-25 02:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `services_related`
--

CREATE TABLE `services_related` (
  `id` bigint(20) NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `related_service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_related`
--

INSERT INTO `services_related` (`id`, `service_id`, `related_service_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2021-01-08 07:02:27', '2021-01-08 07:02:27'),
(2, 1, 2, '2021-01-08 07:02:44', '2021-01-08 07:02:44'),
(3, 5, 2, '2021-01-25 02:21:27', '2021-01-25 02:21:27'),
(4, 5, 5, '2021-01-25 02:21:27', '2021-01-25 02:21:27'),
(5, 13, 15, '2021-01-25 05:25:32', '2021-01-25 05:25:32'),
(6, 13, 16, '2021-01-25 05:25:32', '2021-01-25 05:25:32'),
(7, 13, 17, '2021-01-25 05:25:32', '2021-01-25 05:25:32'),
(8, 13, 14, '2021-01-25 05:25:32', '2021-01-25 05:25:32'),
(9, 12, 21, '2021-01-25 05:29:05', '2021-01-25 05:29:05'),
(10, 12, 20, '2021-01-25 05:29:05', '2021-01-25 05:29:05'),
(11, 12, 19, '2021-01-25 05:29:05', '2021-01-25 05:29:05'),
(12, 12, 18, '2021-01-25 05:29:05', '2021-01-25 05:29:05'),
(13, 10, 22, '2021-01-25 05:29:54', '2021-01-25 05:29:54'),
(14, 10, 23, '2021-01-25 05:29:54', '2021-01-25 05:29:54'),
(15, 9, 27, '2021-01-25 05:31:10', '2021-01-25 05:31:10'),
(16, 9, 26, '2021-01-25 05:31:10', '2021-01-25 05:31:10'),
(17, 9, 25, '2021-01-25 05:31:10', '2021-01-25 05:31:10'),
(18, 9, 24, '2021-01-25 05:31:10', '2021-01-25 05:31:10'),
(19, 6, 33, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(20, 6, 32, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(21, 6, 31, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(22, 6, 30, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(23, 6, 29, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(24, 6, 28, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(25, 6, 34, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(26, 6, 35, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(27, 6, 36, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(28, 6, 37, '2021-01-25 05:35:25', '2021-01-25 05:35:25'),
(30, 38, 39, '2021-01-28 06:17:09', '2021-01-28 06:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `code` varchar(250) NOT NULL,
  `value` text DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `page` varchar(250) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `code`, `value`, `media_id`, `type`, `page`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'token', '6AGQlJlreM0qWPQXGe8TuE66MLGUzIiwLB2X2rhD', NULL, 'Text', NULL, 0, 0, '2021-01-22 06:01:59', '2021-01-28 08:08:28', NULL),
(3, 'facebook-url', 'https://www.facebook.com/kleankeepersuk/', NULL, 'Text', NULL, 0, 0, '2021-01-22 06:20:05', '2021-01-22 06:20:05', NULL),
(4, 'instagram-url', 'https://www.instagram.com/kleankeepers/', NULL, 'Text', NULL, 0, 0, '2021-01-22 06:20:05', '2021-01-22 06:20:05', NULL),
(5, 'twitter-url', 'https://twitter.com/kleankeepers_', NULL, 'Text', NULL, 0, 0, '2021-01-22 06:20:05', '2021-01-22 06:20:05', NULL),
(6, 'linkedin-url', 'https://www.linkedin.com/company/klean-keepers/', NULL, 'Text', NULL, 0, 0, '2021-01-22 06:21:32', '2021-01-22 06:21:32', NULL),
(8, 'site-logo-image-id', NULL, 30, 'Image', NULL, 0, 0, '2021-01-22 06:45:32', '2021-01-28 11:44:04', NULL),
(9, 'promo-bg-image-id', '44', 44, 'Image', NULL, 0, 0, '2021-01-25 12:03:39', '2021-01-25 12:16:26', NULL),
(10, 'promo-image-image-id', NULL, 45, 'Image', NULL, 0, 0, '2021-01-25 12:03:39', '2021-01-25 12:06:59', NULL),
(11, 'promo-title', 'NOW <span>WE ARE IN</span>', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:03:39', '2021-01-25 12:07:20', NULL),
(12, 'play-store-link', 'https://play.google.com/store/apps/details?id=com.kleankeepers.app&hl=en_IN&gl=US', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:03:39', '2021-01-25 12:07:33', NULL),
(13, 'app-store-link', 'https://apps.apple.com/gb/app/klean-keepers/id1509700722', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:03:39', '2021-01-25 12:07:33', NULL),
(15, 'app-store-button-image-id', NULL, 47, 'Image', NULL, 0, 0, '2021-01-25 12:10:51', '2021-01-25 12:12:00', NULL),
(16, 'play-store-button-image-id', NULL, 46, 'Image', NULL, 0, 0, '2021-01-25 12:12:00', '2021-01-25 12:16:18', NULL),
(17, 'site-about-image-id', NULL, 48, 'Image', NULL, 0, 0, '2021-01-25 12:21:53', '2021-01-25 12:23:46', NULL),
(18, 'site-about-content', 'Enter your postcode to check availability', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:21:53', '2021-01-25 12:41:34', NULL),
(19, 'hdiw-step-1-image-id', NULL, 49, 'Image', NULL, 0, 0, '2021-01-25 12:43:37', '2021-01-25 12:45:44', NULL),
(20, 'hdiw-step-1-title', 'FIND SERVICE REQUIRED', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:43:37', '2021-01-25 12:43:37', NULL),
(21, 'hdiw-step-1-description', 'Enter your postcode to check availability', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:43:37', '2021-01-25 12:43:37', NULL),
(22, 'hdiw-step-2-image-id', NULL, 52, 'Image', NULL, 0, 0, '2021-01-25 12:45:44', '2021-01-25 12:50:06', NULL),
(23, 'hdiw-step-2-title', 'CUSTOMISE YOUR SERVICE', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:45:44', '2021-01-25 12:45:44', NULL),
(24, 'hdiw-step-2-description', 'Get an estimated price by filling a few questions and selecting your desired slot.', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:45:44', '2021-01-25 12:45:44', NULL),
(25, 'hdiw-step-3-image-id', NULL, 51, 'Image', NULL, 0, 0, '2021-01-25 12:50:06', '2021-01-25 12:52:04', NULL),
(26, 'hdiw-step-3-title', 'BOOKING DEPOSIT', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:50:06', '2021-01-25 12:50:06', NULL),
(27, 'hdiw-step-3-description', 'Confirm your booking by covering the deposit which will be deducted from your final set price.', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:50:06', '2021-01-25 12:50:06', NULL),
(28, 'hdiw-step-4-image-id', NULL, 49, 'Image', NULL, 0, 0, '2021-01-25 12:52:04', '2021-01-25 12:52:53', NULL),
(29, 'hdiw-step-4-title', 'EXPERT ATTENDS YOUR PROPERTY', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:52:04', '2021-01-25 12:52:04', NULL),
(30, 'hdiw-step-4-description', 'The expert upon arrival access the job and will set the fixed rate. Any adjustments will be discussed with you before setting the fixed rate', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:52:04', '2021-01-25 12:52:04', NULL),
(31, 'hdiw-step-5-image-id', NULL, 50, 'Image', NULL, 0, 0, '2021-01-25 12:52:53', '2021-01-25 12:59:30', NULL),
(32, 'hdiw-step-5-title', 'PAY THE FIXED RATE', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:52:53', '2021-01-25 12:59:48', NULL),
(33, 'hdiw-step-5-description', 'Pay the fixed price so that the expert can start working while you sit back and relax.', NULL, 'Text', NULL, 0, 0, '2021-01-25 12:52:53', '2021-01-25 12:52:53', NULL),
(35, 'site-cta-bg-image-id', NULL, 54, 'Image', NULL, 0, 0, '2021-01-27 07:59:00', '2021-01-27 08:04:47', NULL),
(36, 'site-cta-btn-1-label', 'Book now', NULL, 'Text', NULL, 0, 0, '2021-01-27 08:04:47', '2021-01-27 08:04:47', NULL),
(37, 'site-cta-btn-1-action', '#book-now', NULL, 'Text', NULL, 0, 0, '2021-01-27 08:04:47', '2021-01-27 08:04:47', NULL),
(38, 'site-cta-btn-2-label', 'Commercial', NULL, 'Text', NULL, 0, 0, '2021-01-27 08:04:47', '2021-01-27 08:04:47', NULL),
(39, 'site-cta-btn-2-action', 'contact', NULL, 'Text', NULL, 0, 0, '2021-01-27 08:04:47', '2021-01-27 08:04:47', NULL),
(40, 'about-us-banner-image', '44', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:08:28', '2021-01-28 08:08:28', NULL),
(41, 'about-us-banner-image-id', NULL, 57, 'Image', NULL, 0, 0, '2021-01-28 08:10:35', '2021-01-28 08:50:13', NULL),
(42, 'about-us-banner-title', 'NOT JUST A FRANCHISE', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:46:52', NULL),
(43, 'about-us-banner-title-sub', 'but a proven, profitable and pain-free partnership with the most technologically-advanced franchise company in the home-services industry.', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:46:52', NULL),
(44, 'about-us-banner-cta-label', 'Book', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:46:52', NULL),
(45, 'about-us-banner-cta-action', 'contact', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:46:52', NULL),
(46, 'about-us-feature-image-id', NULL, 58, 'Image', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:56:23', NULL),
(47, 'about-us-feature-content', '<!-- <span class=\"mob-dis-none\" data-slideInLeft>ABOUT US</span>  -->\r\n        <h3 class=\"mt-5 mb-3\" data-slideinrght=\"\">About Company  </h3>\r\n        <p data-slideinleft=\"\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:50:13', NULL),
(48, 'about-us-feature-footer-title', 'Lorem Ipsum is simply dummy', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:59:45', NULL),
(49, 'about-us-feature-footer-sub-title', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:59:45', NULL),
(50, 'about-us-founder-image-id', NULL, 58, 'Image', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 09:01:03', NULL),
(51, 'about-us-founder-content', '<!-- <span class=\"mob-dis-none\" data-slideInLeft>ABOUT US</span>  -->\r\n        <h3 class=\"mt-2 mb-3\" data-slideinrght=\"\">Message from founder  </h3>\r\n        <p data-slideinleft=\"\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n        <h4>Musthafa Koori</h4>\r\n        <p>CEO</p>', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 09:01:03', NULL),
(52, 'about-us-stats-block-1-label', 'Cleaning Staff', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:58:32', NULL),
(53, 'about-us-stats-block-1-value', '5840', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:58:32', NULL),
(54, 'about-us-stats-block-2-label', 'Project Completed', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:58:32', NULL),
(55, 'about-us-stats-block-2-value', '3140', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:58:32', NULL),
(56, 'about-us-stats-block-3-label', 'Satisfied Client', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:58:32', NULL),
(57, 'about-us-stats-block-3-value', '3040', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:58:32', NULL),
(58, 'about-us-stats-block-4-label', 'Win Awarded', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:58:32', NULL),
(59, 'about-us-stats-block-4-value', '2365', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:58:32', NULL),
(60, 'about-us-highlighted-1-image-ic', NULL, NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:34:01', NULL),
(61, 'about-us-highlighted-1-label', 'expected sales a year', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:57:43', NULL),
(62, 'about-us-highlighted-1-value', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:57:43', NULL),
(63, 'about-us-highlighted-2-image-ic', '53', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:34:01', NULL),
(64, 'about-us-highlighted-2-label', 'customers monthly', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:57:43', NULL),
(65, 'about-us-highlighted-2-value', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:57:43', NULL),
(66, 'about-us-highlighted-3-image-ic', NULL, NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:34:01', NULL),
(67, 'about-us-highlighted-3-label', 'increase in customer retention', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:57:43', NULL),
(68, 'about-us-highlighted-3-value', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:34:01', '2021-01-28 08:57:43', NULL),
(69, 'about-us-highlighted-1-image-id', NULL, 45, 'Image', NULL, 0, 0, '2021-01-28 08:34:19', '2021-01-28 08:39:32', NULL),
(70, 'about-us-highlighted-2-image-id', NULL, 53, 'Image', NULL, 0, 0, '2021-01-28 08:34:19', '2021-01-28 08:34:27', NULL),
(71, 'about-us-highlighted-3-image-id', NULL, 50, 'Image', NULL, 0, 0, '2021-01-28 08:34:19', '2021-01-28 08:34:34', NULL),
(72, 'about-us-why-us-left-content', '<div class=\"feature-content\">\r\n                        <span>Why Choose Us</span>\r\n                        <h2 class=\"title\">Our Expertise Making Your Business Shine</h2>\r\n                        <p>Creeping a herb you every you you let sixth one so our two make lights isn\'t there fly\r\n                            bearing also midst said was dry\r\n                            in days good god and seed void, set good our so said place that divide there dominion cattle\r\n                            fourth water above fourth\r\n                            appear living.</p>\r\n                        <a href=\"#\" class=\"main-btn\">Read More</a>\r\n                    </div>', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:39:32', '2021-01-28 08:39:32', NULL),
(73, 'about-us-why-us-image-id', NULL, 56, 'Image', NULL, 0, 0, '2021-01-28 08:39:32', '2021-01-28 08:39:38', NULL),
(74, 'about-us-why-us-right-content', '<ul>\r\n                                <li>\r\n                                    <i class=\"flaticon-avatar\"></i>\r\n                                    <h4>Expert Employee</h4>\r\n                                    <p>Beginning midste the green fowler over in there have could forth doning</p>\r\n                                </li>\r\n                                <li>\r\n                                    <i class=\"flaticon-tag\"></i>\r\n                                    <h4>Comfortable Price</h4>\r\n                                    <p>Beginning midste the green fowler over in there have could forth doning</p>\r\n                                </li>\r\n                                <li>\r\n                                    <i class=\"flaticon-thumb-up\"></i>\r\n                                    <h4>Expert Employee</h4>\r\n                                    <p>Beginning midste the green fowler over in there have could forth doning</p>\r\n                                </li>\r\n                            </ul>', NULL, 'Text', NULL, 0, 0, '2021-01-28 08:39:32', '2021-01-28 08:56:40', NULL),
(75, 'contact-banner-image-id', NULL, 57, 'Image', NULL, 0, 0, '2021-01-28 10:15:23', '2021-01-28 10:16:45', NULL),
(76, 'contact-banner-title', 'Contact With Us', NULL, 'Text', NULL, 0, 0, '2021-01-28 10:15:23', '2021-01-28 10:16:45', NULL),
(77, 'contact-title', 'Have Any Question? Contact With Us', NULL, 'Text', NULL, 0, 0, '2021-01-28 10:15:23', '2021-01-28 10:16:45', NULL),
(78, 'contact-phone-number', '+44 20 7978 2004', NULL, 'Text', NULL, 0, 0, '2021-01-28 10:15:23', '2021-01-28 10:16:45', NULL),
(79, 'contact-address', 'Unit 54 Ingate Pl, Nine Elms, London SW8 3NS, United Kingdom', NULL, 'Text', NULL, 0, 0, '2021-01-28 10:15:23', '2021-01-28 10:16:45', NULL),
(80, 'contact-email', 'webtend24@gmail.com', NULL, 'Text', NULL, 0, 0, '2021-01-28 10:15:23', '2021-01-28 10:16:45', NULL),
(81, 'contact-form-title', 'Please fill this form', NULL, 'Text', NULL, 0, 0, '2021-01-28 10:19:36', '2021-01-28 10:19:36', NULL),
(82, 'contact-iframe', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9940.250081171662!2d-0.1448313!3d51.4753667!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760500e195d98b%3A0x5936ab9bff9b2967!2sKlean%20Keepers%20Ltd!5e0!3m2!1sen!2sin!4v1609913697073!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', NULL, 'Text', NULL, 0, 0, '2021-01-28 10:19:36', '2021-01-28 10:19:36', NULL),
(83, 'history-iso-image-id', NULL, 59, 'Image', NULL, 0, 0, '2021-01-28 11:32:18', '2021-01-28 11:33:14', NULL),
(84, 'history-experience-years', '26', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:33:14', '2021-01-28 11:36:13', NULL),
(85, 'history-experience-content', '<span>Trusted by</span>\r\n      <h3 class=\"mb-3\">Brands</h3>\r\n      <p>Beginning midste the green fowler over in there have could forth doning moving firmament fruitful fruitful thing  </p>', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:35:17', '2021-01-28 11:35:17', NULL),
(86, 'history-experience-years-text', 'history-experience-years-text', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:36:13', '2021-01-28 11:36:13', NULL),
(87, 'service-cta-title', 'Get To Know Free Estimate?', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:44:04', '2021-01-28 11:44:04', NULL),
(88, 'service-cta-description', 'Lights heaven above images blessed given tools', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:44:04', '2021-01-28 11:44:04', NULL),
(89, 'service-cta-btn-1-label', 'More Information', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:44:04', '2021-01-28 11:44:04', NULL),
(90, 'service-cta-btn-1-action', 'More Information', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:44:04', '2021-01-28 11:44:04', NULL),
(91, 'service-cta-btn-2-label', 'Get Free estimate', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:44:04', '2021-01-28 11:44:04', NULL),
(92, 'service-cta-btn-2-action', 'Get Free estimate', NULL, 'Text', NULL, 0, 0, '2021-01-28 11:44:04', '2021-01-28 11:44:04', NULL),
(93, 'tracking-in-head', NULL, NULL, 'Text', NULL, 0, 0, '2021-01-28 12:29:17', '2021-01-28 12:29:47', NULL),
(94, 'tracking-in-body', 'tracking-in-body', NULL, 'Text', NULL, 0, 0, '2021-01-28 12:29:17', '2021-01-28 12:29:17', NULL),
(95, 'tracking-in-bottom', 'tracking-in-bottom', NULL, 'Text', NULL, 0, 0, '2021-01-28 12:29:17', '2021-01-28 12:29:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slider_name` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `width` smallint(4) NOT NULL,
  `height` smallint(4) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_name`, `code`, `width`, `height`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 'home', 'home', 1920, 699, 0, 0, '2021-01-22 07:09:59', '2021-01-22 07:09:59'),
(10, 'Cleaning', 'digital-marketing', 1920, 699, 0, 0, '2021-01-25 07:40:32', '2021-01-25 07:40:32'),
(11, 'Flooring', 'flooring', 1920, 699, 0, 0, '2021-01-25 07:42:26', '2021-01-25 07:42:26'),
(13, 'TV Cleaning', 'tv-cleaning', 1920, 699, 0, 0, '2021-01-25 07:45:42', '2021-01-25 07:45:42'),
(14, 'Web Development', 'web-development', 1920, 699, 0, 0, '2021-01-25 08:03:24', '2021-01-25 08:03:24'),
(15, 'TV Cleaning offer', 'tv-cleaning-offer', 1920, 699, 0, 0, '2021-01-25 08:26:48', '2021-01-25 08:26:48'),
(16, 'Web Development offer', 'web-development-offer', 1920, 699, 0, 0, '2021-01-25 09:12:43', '2021-01-25 09:12:43'),
(17, 'Cleaning Services', 'cleaning-services', 1920, 699, 0, 0, '2021-01-25 10:50:52', '2021-01-25 10:50:52'),
(18, 'Cleaning Services offer', 'cleaning-services-offer', 1920, 699, 0, 0, '2021-01-25 10:50:52', '2021-01-25 10:50:52'),
(19, 'Gardening', 'gardening', 1920, 699, 0, 0, '2021-01-25 10:52:54', '2021-01-25 10:52:54'),
(20, 'Gardening offer', 'gardening-offer', 1920, 699, 0, 0, '2021-01-25 10:52:54', '2021-01-25 10:52:54'),
(21, 'Pest Control', 'pest-control', 1920, 699, 0, 0, '2021-01-25 10:53:03', '2021-01-25 10:53:03'),
(22, 'Pest Control offer', 'pest-control-offer', 1920, 699, 0, 0, '2021-01-25 10:53:04', '2021-01-25 10:53:04'),
(23, 'Removals', 'removals', 1920, 699, 0, 0, '2021-01-25 10:53:18', '2021-01-25 10:53:18'),
(24, 'Removals offer', 'removals-offer', 1920, 699, 0, 0, '2021-01-25 10:53:18', '2021-01-25 10:53:18'),
(25, 'Waste Disposal', 'waste-disposal', 1920, 699, 0, 0, '2021-01-25 10:53:27', '2021-01-25 10:53:27'),
(26, 'Waste Disposal offer', 'waste-disposal-offer', 1920, 699, 0, 0, '2021-01-25 10:53:27', '2021-01-25 10:53:27'),
(27, 'Drainage', 'drainage', 1920, 699, 0, 0, '2021-01-25 10:53:46', '2021-01-25 10:53:46'),
(28, 'Drainage offer', 'drainage-offer', 1920, 699, 0, 0, '2021-01-25 10:53:46', '2021-01-25 10:53:46'),
(29, 'Tradesman Services', 'tradesman-services', 1920, 699, 0, 0, '2021-01-25 10:53:55', '2021-01-25 10:53:55'),
(30, 'Tradesman Services offer', 'tradesman-services-offer', 1920, 699, 0, 0, '2021-01-25 10:53:55', '2021-01-25 10:53:55'),
(31, 'Painters and Decoraters', 'painters-and-decoraters', 1920, 699, 0, 0, '2021-01-25 10:54:59', '2021-01-25 10:54:59'),
(32, 'Painters and Decoraters offer', 'painters-and-decoraters-offer', 1920, 699, 0, 0, '2021-01-25 10:54:59', '2021-01-25 10:54:59'),
(33, 'Electrician', 'electrician', 1920, 699, 0, 0, '2021-01-25 10:55:03', '2021-01-25 10:55:03'),
(34, 'Electrician offer', 'electrician-offer', 1920, 699, 0, 0, '2021-01-25 10:55:03', '2021-01-25 10:55:03'),
(35, 'Plumber', 'plumber', 1920, 699, 0, 0, '2021-01-25 10:55:05', '2021-01-25 10:55:05'),
(36, 'Plumber offer', 'plumber-offer', 1920, 699, 0, 0, '2021-01-25 10:55:05', '2021-01-25 10:55:05'),
(37, 'Handyman', 'handyman', 1920, 699, 0, 0, '2021-01-25 10:55:08', '2021-01-25 10:55:08'),
(38, 'Handyman offer', 'handyman-offer', 1920, 699, 0, 0, '2021-01-25 10:55:08', '2021-01-25 10:55:08'),
(39, 'External Drain Blockage', 'external-drain-blockage', 1920, 699, 0, 0, '2021-01-25 10:57:53', '2021-01-25 10:57:53'),
(40, 'External Drain Blockage offer', 'external-drain-blockage-offer', 1920, 699, 0, 0, '2021-01-25 10:57:53', '2021-01-25 10:57:53'),
(41, 'CCTV Drainage Survey', 'cctv-drainage-survey', 1920, 699, 0, 0, '2021-01-25 10:57:55', '2021-01-25 10:57:55'),
(42, 'CCTV Drainage Survey offer', 'cctv-drainage-survey-offer', 1920, 699, 0, 0, '2021-01-25 10:57:55', '2021-01-25 10:57:55'),
(43, 'Blocked Sink', 'blocked-sink', 1920, 699, 0, 0, '2021-01-25 10:57:57', '2021-01-25 10:57:57'),
(44, 'Blocked Sink offer', 'blocked-sink-offer', 1920, 699, 0, 0, '2021-01-25 10:57:57', '2021-01-25 10:57:57'),
(45, 'Blocked Tolets and Soil Pipes', 'blocked-tolets-and-soil-pipes', 1920, 699, 0, 0, '2021-01-25 10:57:58', '2021-01-25 10:57:58'),
(46, 'Blocked Tolets and Soil Pipes offer', 'blocked-tolets-and-soil-pipes-offer', 1920, 699, 0, 0, '2021-01-25 10:57:58', '2021-01-25 10:57:58'),
(47, 'Moving Home/office', 'moving-homeoffice', 1920, 699, 0, 0, '2021-01-25 10:59:31', '2021-01-25 10:59:31'),
(48, 'Moving Home/office offer', 'moving-homeoffice-offer', 1920, 699, 0, 0, '2021-01-25 10:59:31', '2021-01-25 10:59:31'),
(49, 'Man and Van', 'man-and-van', 1920, 699, 0, 0, '2021-01-25 10:59:33', '2021-01-25 10:59:33'),
(50, 'Man and Van offer', 'man-and-van-offer', 1920, 699, 0, 0, '2021-01-25 10:59:33', '2021-01-25 10:59:33'),
(51, 'General Fumigation', 'general-fumigation', 1920, 699, 0, 0, '2021-01-25 11:00:36', '2021-01-25 11:00:36'),
(52, 'General Fumigation offer', 'general-fumigation-offer', 1920, 699, 0, 0, '2021-01-25 11:00:36', '2021-01-25 11:00:36'),
(53, 'Insect Infestation', 'insect-infestation', 1920, 699, 0, 0, '2021-01-25 11:00:38', '2021-01-25 11:00:38'),
(54, 'Insect Infestation offer', 'insect-infestation-offer', 1920, 699, 0, 0, '2021-01-25 11:00:38', '2021-01-25 11:00:38'),
(55, 'Bed Bugs', 'bed-bugs', 1920, 699, 0, 0, '2021-01-25 11:00:39', '2021-01-25 11:00:39'),
(56, 'Bed Bugs offer', 'bed-bugs-offer', 1920, 699, 0, 0, '2021-01-25 11:00:39', '2021-01-25 11:00:39'),
(57, 'Rodent Infestation', 'rodent-infestation', 1920, 699, 0, 0, '2021-01-25 11:00:41', '2021-01-25 11:00:41'),
(58, 'Rodent Infestation offer', 'rodent-infestation-offer', 1920, 699, 0, 0, '2021-01-25 11:00:41', '2021-01-25 11:00:41'),
(59, 'Hard Floor Cleaning', 'hard-floor-cleaning', 1920, 699, 0, 0, '2021-01-25 11:02:30', '2021-01-25 11:02:30'),
(60, 'Hard Floor Cleaning offer', 'hard-floor-cleaning-offer', 1920, 699, 0, 0, '2021-01-25 11:02:30', '2021-01-25 11:02:30'),
(61, 'Holiday Rental Cleaning', 'holiday-rental-cleaning', 1920, 699, 0, 0, '2021-01-25 11:02:32', '2021-01-25 11:02:32'),
(62, 'Holiday Rental Cleaning offer', 'holiday-rental-cleaning-offer', 1920, 699, 0, 0, '2021-01-25 11:02:32', '2021-01-25 11:02:32'),
(63, 'After Builders Clean', 'after-builders-clean', 1920, 699, 0, 0, '2021-01-25 11:02:34', '2021-01-25 11:02:34'),
(64, 'After Builders Clean offer', 'after-builders-clean-offer', 1920, 699, 0, 0, '2021-01-25 11:02:34', '2021-01-25 11:02:34'),
(65, 'End of Tenancy', 'end-of-tenancy', 1920, 699, 0, 0, '2021-01-25 11:02:35', '2021-01-25 11:02:35'),
(66, 'End of Tenancy offer', 'end-of-tenancy-offer', 1920, 699, 0, 0, '2021-01-25 11:02:35', '2021-01-25 11:02:35'),
(67, 'Deep Clean', 'deep-clean', 1920, 699, 0, 0, '2021-01-25 11:02:37', '2021-01-25 11:02:37'),
(68, 'Deep Clean offer', 'deep-clean-offer', 1920, 699, 0, 0, '2021-01-25 11:02:37', '2021-01-25 11:02:37'),
(69, 'Maid services', 'maid-services', 1920, 699, 0, 0, '2021-01-25 11:02:40', '2021-01-25 11:02:40'),
(70, 'Maid services offer', 'maid-services-offer', 1920, 699, 0, 0, '2021-01-25 11:02:40', '2021-01-25 11:02:40'),
(71, 'Carpet Cleaning', 'carpet-cleaning', 1920, 699, 0, 0, '2021-01-25 11:03:18', '2021-01-25 11:03:18'),
(72, 'Carpet Cleaning offer', 'carpet-cleaning-offer', 1920, 699, 0, 0, '2021-01-25 11:03:18', '2021-01-25 11:03:18'),
(73, 'Upholstery Cleaning', 'upholstery-cleaning', 1920, 699, 0, 0, '2021-01-25 11:03:25', '2021-01-25 11:03:25'),
(74, 'Upholstery Cleaning offer', 'upholstery-cleaning-offer', 1920, 699, 0, 0, '2021-01-25 11:03:25', '2021-01-25 11:03:25'),
(75, 'Window Cleaning', 'window-cleaning', 1920, 699, 0, 0, '2021-01-25 11:03:50', '2021-01-25 11:03:50'),
(76, 'Window Cleaning offer', 'window-cleaning-offer', 1920, 699, 0, 0, '2021-01-25 11:03:50', '2021-01-25 11:03:50'),
(77, 'Oven Cleaning', 'oven-cleaning', 1920, 699, 0, 0, '2021-01-25 11:03:52', '2021-01-25 11:03:52'),
(78, 'Oven Cleaning offer', 'oven-cleaning-offer', 1920, 699, 0, 0, '2021-01-25 11:03:52', '2021-01-25 11:03:52'),
(79, 'home offer', 'home-offer', 695, 220, 0, 0, '2021-01-25 11:35:24', '2021-01-25 11:35:24'),
(80, 'Services', 'services', 1920, 699, 0, 0, '2021-01-27 08:49:01', '2021-01-27 08:49:01'),
(81, 'COMMERCIAL CLEANING', 'commercial-cleaning', 1920, 699, 0, 0, '2021-01-28 10:32:34', '2021-01-28 10:32:34'),
(82, 'COMMERCIAL CLEANING offer', 'commercial-cleaning-offer', 1920, 699, 0, 0, '2021-01-28 10:32:34', '2021-01-28 10:32:34'),
(83, 'brands', 'brands', 90, 75, 0, 0, '2021-01-28 11:12:07', '2021-01-28 11:12:07'),
(84, 'COMMERCIAL CLEANING 1', 'commercial-cleaning-1', 1920, 699, 0, 0, '2021-01-28 11:46:50', '2021-01-28 11:46:50'),
(85, 'COMMERCIAL CLEANING 1 offer', 'commercial-cleaning-1-offer', 1920, 699, 0, 0, '2021-01-28 11:46:50', '2021-01-28 11:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `slider_photos`
--

CREATE TABLE `slider_photos` (
  `id` int(11) NOT NULL,
  `sliders_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `crop_data` text DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `alt_text` varchar(250) DEFAULT NULL,
  `button_text` varchar(250) DEFAULT NULL,
  `button_link` varchar(250) DEFAULT NULL,
  `button_link_target` varchar(10) DEFAULT NULL,
  `button2_text` varchar(250) DEFAULT NULL,
  `button2_link` varchar(250) DEFAULT NULL,
  `button2_link_target` varchar(20) DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_photos`
--

INSERT INTO `slider_photos` (`id`, `sliders_id`, `media_id`, `crop_data`, `title`, `description`, `alt_text`, `button_text`, `button_link`, `button_link_target`, `button2_text`, `button2_link`, `button2_link_target`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(127, 8, 31, '{\"x\":null,\"y\":null,\"width\":null,\"height\":null}', 'PERFECT HOME SERVICES', 'Your one stop shop for all home services.', 'ALT TEXT', 'Book', 'search', NULL, 'View services', 'services', NULL, 0, 0, '2021-01-22 08:33:46', '2021-01-25 07:25:22', NULL),
(131, 8, 39, '{\"x\":null,\"y\":null,\"width\":null,\"height\":null}', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Button 1', 'button1', '_blank', 'Button 2', 'button2', NULL, 0, 0, '2021-01-25 07:18:55', '2021-01-25 07:28:38', NULL),
(132, 8, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-25 07:18:55', '2021-01-25 07:18:55', NULL),
(133, 15, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-25 08:35:01', '2021-01-25 08:35:01', NULL),
(134, 15, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-25 08:35:01', '2021-01-25 08:35:01', NULL),
(135, 79, 43, '{\"x\":null,\"y\":null,\"width\":null,\"height\":null}', 'Offer - 1', 'Offer - 1', 'Offer - 1', 'Offer - 1', 'Offer - 1', '_blank', 'Offer - 1', 'Offer - 1', '_blank', 0, 0, '2021-01-25 11:43:29', '2021-01-25 11:44:02', NULL),
(136, 79, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-25 11:43:30', '2021-01-25 11:43:30', NULL),
(138, 80, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-27 08:49:42', '2021-01-27 08:49:42', NULL),
(140, 17, 44, '{\"x\":null,\"y\":null,\"width\":null,\"height\":null}', 'if you\'re using less version of Laravel 5.2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-27 09:05:33', '2021-01-27 09:06:17', NULL),
(141, 83, 53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:12:12', '2021-01-28 11:12:12', NULL),
(142, 83, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:12:18', '2021-01-28 11:12:18', NULL),
(144, 83, 56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:12:50', '2021-01-28 11:12:50', NULL),
(145, 83, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:12:50', '2021-01-28 11:12:50', NULL),
(146, 83, 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:13:10', '2021-01-28 11:13:10', NULL),
(147, 83, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:17:19', '2021-01-28 11:17:19', NULL),
(148, 83, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:17:19', '2021-01-28 11:17:19', NULL),
(149, 83, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:17:19', '2021-01-28 11:17:19', NULL),
(150, 83, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:17:31', '2021-01-28 11:17:31', NULL),
(151, 82, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-28 11:25:01', '2021-01-28 11:25:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image_id` bigint(20) DEFAULT NULL,
  `banner_image_id` bigint(20) DEFAULT NULL,
  `facebook_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 1,
  `browser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_js` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `department_id`, `slug`, `name`, `designation`, `short_description`, `content`, `featured_image_id`, `banner_image_id`, `facebook_link`, `twitter_link`, `linkedin_link`, `instagram_link`, `youtube_link`, `priority`, `browser_title`, `meta_description`, `meta_keywords`, `top_description`, `bottom_description`, `extra_js`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'sobha-sudheesh', 'Sobha Sudheesh', 'Senior Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget erat nec urna volutpat volutpat non id odio. Curabitur a ultrices turpis, vel porta est. Vestibulum nec orci in nisi commodo porttitor et non nisi.', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget \r\nerat nec urna volutpat volutpat non id odio. Curabitur a ultrices \r\nturpis, vel porta est. Vestibulum nec orci in nisi commodo porttitor et \r\nnon nisi. Praesent dolor augue, venenatis vitae lorem ut, venenatis \r\nblandit quam. Morbi quis nulla porta, efficitur diam auctor, convallis \r\ntellus. Mauris elit nibh, pharetra in nunc vehicula, dignissim varius \r\nturpis. Nam mattis ex lorem, nec finibus metus fringilla quis. Quisque \r\ndui sem, scelerisque at neque et, finibus volutpat dui. Etiam et velit \r\nvarius, imperdiet dolor commodo, accumsan ex. Nulla congue nec purus ac \r\neleifend. Morbi convallis, sem sed iaculis feugiat, nulla est rhoncus \r\nante, vel vehicula massa ex nec lectus. Proin sed efficitur ante. In ac \r\nmauris mi. Pellentesque tortor enim, semper at augue quis, pulvinar \r\nrutrum nisl. Sed ut sem nec risus laoreet ullamcorper a eu arcu. Nulla \r\nimperdiet, lectus in tristique fermentum, libero ipsum vestibulum nisl, a\r\n cursus diam nibh non augue.\r\n</p>\r\n<p>\r\nMorbi porta lectus et pellentesque dictum. Aenean feugiat nisl sit amet \r\nlectus tristique, vitae tempus odio luctus. Phasellus sapien leo, \r\nporttitor in fringilla sit amet, fermentum sit amet odio. Vivamus id \r\nenim purus. Fusce nec velit ac velit posuere bibendum ac et nisi. Sed \r\ncursus neque quis nisi lacinia pellentesque. Aliquam dolor leo, auctor \r\nut posuere non, condimentum id ante. Nunc at iaculis nisi. Duis commodo \r\nest velit, eget luctus sem volutpat nec. Aliquam placerat et magna sit \r\namet imperdiet. Nulla facilisi. Curabitur eu blandit ante. Nam non \r\nvestibulum ante. Suspendisse tincidunt, lacus in imperdiet porttitor, \r\njusto mi dignissim nibh, lobortis finibus ipsum est sed metus. Donec \r\nvenenatis fringilla ultricies.\r\n</p>', 28, 28, NULL, NULL, NULL, NULL, NULL, 1, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget \r\nerat nec urna volutpat volutpat non id odio. Curabitur a ultrices \r\nturpis, vel porta est. Vestibulum nec orci in nisi commodo porttitor et \r\nnon nisi. Praesent dolor augue, venenatis vitae lorem ut, venenatis \r\nblandit quam. Morbi quis nulla porta, efficitur diam auctor, convallis \r\ntellus. Mauris elit nibh, pharetra in nunc vehicula, dignissim varius \r\nturpis. Nam mattis ex lorem, nec finibus metus fringilla quis. Quisque \r\ndui sem, scelerisque at neque et, finibus volutpat dui. Etiam et velit \r\nvarius, imperdiet dolor commodo, accumsan ex. Nulla congue nec purus ac \r\neleifend. Morbi convallis, sem sed iaculis feugiat, nulla est rhoncus \r\nante, vel vehicula massa ex nec lectus. Proin sed efficitur ante. In ac \r\nmauris mi. Pellentesque tortor enim, semper at augue quis, pulvinar \r\nrutrum nisl. Sed ut sem nec risus laoreet ullamcorper a eu arcu. Nulla \r\nimperdiet, lectus in tristique fermentum, libero ipsum ves', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget \r\nerat nec urna volutpat volutpat non id odio. Curabitur a ultrices \r\nturpis, vel porta est. Vestibulum nec orci in nisi commodo porttitor et \r\nnon nisi. Praesent dolor augue, venenatis vitae lorem ut, venenatis \r\nblandit quam. Morbi quis nulla porta, efficitur diam auctor, convallis \r\ntellus. Mauris elit nibh, pharetra in nunc vehicula, dignissim varius \r\nturpis. Nam mattis ex lorem, nec finibus metus fringilla quis. Quisque \r\ndui sem, scelerisque at neque et, finibus volutpat dui. Etiam et velit \r\nvarius, imperdiet dolor commodo, accumsan ex. Nulla congue nec purus ac \r\neleifend. Morbi convallis, sem sed iaculis feugiat, nulla est rhoncus \r\nante, vel vehicula massa ex nec lectus. Proin sed efficitur ante. In ac \r\nmauris mi. Pellentesque tortor enim, semper at augue quis, pulvinar \r\nrutrum nisl. Sed ut sem nec risus laoreet ullamcorper a eu arcu. Nulla \r\nimperdiet, lectus in tristique fermentum, libero ipsum ves', NULL, 1, 1, 1, '2020-12-30 09:30:35', '2021-01-07 04:45:57', NULL),
(2, 0, 'tony-john', 'tony john', '', 'Our founder Tony John started his career in the IT World in 1996 and entered the world of E-commerce and Online Marketing in 1998, the same year Google was incorporated. After spending most part of his career in the USA and Japan with global giants including Bank of America, Home Depot, Hewlett Packard, BroadVision and Omnicell, he returned to India to further serve the clients from his home country. And that gave birth to SpiderWorks in 2005, in Kochi, Kerala.', '<p>Our founder Tony John started his career in the IT World in 1996 and \r\nentered the world of E-commerce and Online Marketing in 1998, the same \r\nyear Google was incorporated. After spending most part of his career in \r\nthe USA and Japan with global giants including Bank of America, Home \r\nDepot, Hewlett Packard, BroadVision and Omnicell, he returned to India \r\nto further serve the clients from his home country.   And that gave \r\nbirth to SpiderWorks in 2005, in Kochi, Kerala.\r\n</p>', 19, 19, '#', '#', '#', '#', '#', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-06 10:46:00', '2021-01-06 10:46:00', NULL),
(3, 1, 'akhil-joy', 'Akhil Joy', 'Senior Developer', NULL, NULL, 29, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-07 04:45:26', '2021-01-07 04:45:26', NULL),
(4, 1, 'anoop-k-e', 'Anoop K E', 'UI Developer', NULL, NULL, 27, 27, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-07 04:48:04', '2021-01-07 04:48:04', NULL),
(5, 2, 'incy-joseph', 'Incy Joseph', 'Manager', NULL, NULL, 25, 25, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-07 04:48:56', '2021-01-07 04:48:56', NULL),
(6, 3, 'niyas', 'Niyas', 'Senior Developer', NULL, NULL, 26, 26, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-07 04:49:37', '2021-01-07 04:49:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `video_id` bigint(20) DEFAULT NULL,
  `media_id` bigint(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_id`, `name`, `designation`, `type`, `youtube_link`, `video_id`, `media_id`, `description`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nehal', 'Master in Karnatic Vocals', 'Text', NULL, NULL, 7, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', 1, 1, '2020-12-29 23:41:13', '2020-12-29 23:41:13'),
(3, 5, 'Jessica Moris', 'MD, School of Arts, UK', 'Video from Computer', NULL, 6, 7, NULL, 0, 1, '2020-12-30 00:02:13', '2020-12-30 00:02:13'),
(4, 1, 'consectetur adipiscing', 'euismod nec pharetra vitae', 'Youtube Video', 'https://youtu.be/UQxjhXqQetE', NULL, 8, NULL, 1, 1, '2021-01-05 01:32:04', '2021-01-07 04:37:35'),
(5, 1, 'Akhil', 'Klean Keepers make it easy for you to order all kinds of home services that will be delivered to your doorstep through our apps. Some of the services we provide include all kinds of cleaning services, gardening services, pest control, removal services, waste disposal services, property renovation as well as tradesman services such as handyman, electrician, plumber and gas certification for your ho', 'Text', NULL, NULL, 53, 'Klean Keepers make it easy for you to order all kinds of home services that will be delivered to your doorstep through our apps. Some of the services we provide include all kinds of cleaning services, gardening services, pest control, removal services, waste disposal services, property renovation as well as tradesman services such as handyman, electrician, plumber and gas certification for your ho', 1, 1, '2021-01-25 07:39:05', '2021-01-25 08:05:28'),
(6, 5, 'Jomon', NULL, 'Text', NULL, NULL, 53, 'the good thing happen on a time everything related to its will pay you back a m in it', 0, 1, '2021-01-25 08:07:05', '2021-01-25 08:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_services`
--

CREATE TABLE `testimonial_services` (
  `testimonials_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial_services`
--

INSERT INTO `testimonial_services` (`testimonials_id`, `service_id`, `priority`, `created_at`, `updated_at`) VALUES
(3, 1, 2, NULL, NULL),
(3, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banned_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `banned_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Spider Admin', 'admin@spiderworks.in', NULL, '$2y$10$EVJUXlngq5wleMVt26iXmem/DrDWUOmhHvDJKXueJn339fej4PFQq', NULL, NULL, '2020-12-22 06:28:46', '2020-12-22 06:28:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `code`, `name`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'business-transformed', 'Business Transformed', '{\"heading\":\"Business Transformed\",\"description\":\"Enabling businessesto get competitive edge in the market by building scalable and extensible software and mobile applications. Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\"}', '2021-01-11 14:20:51', '2021-01-11 11:19:58', NULL),
(2, 'business-statistics', 'Statistics', '{\"years1\":\"15\",\"text1\":\"Digital marketing\",\"years2\":\"20\",\"text2\":\"Digital marketing\",\"years3\":\"12\",\"text3\":\"Digital marketing\"}', '2021-01-11 14:20:51', '2021-01-11 11:38:12', NULL),
(3, 'testimonials', 'Testimonials', '{\"heading\":\"Testimonials\",\"description\":\"Some awesome words from some awesome people\"}', '2021-01-11 14:20:51', '2021-01-11 11:39:16', NULL),
(4, 'brands', 'Brands', '{\"media_id\":\"14\",\"heading1\":\"Trusted by\",\"heading2\":\"Brands\",\"description\":\"See more of works and see the wonder . Let\'s Check\",\"related_page\":null}', '2021-01-11 14:20:51', '2021-01-11 11:47:25', NULL),
(5, 'contact-us', 'Contact Us', '{\"media_id\":\"15\",\"heading1\":\"Engage\",\"heading2\":\"With Us.\"}', '2021-01-11 14:20:51', '2021-01-11 12:02:06', NULL),
(6, 'commitments', 'Our commitments', '{\"media_id\":\"16\",\"heading\":\"Our commitments\",\"description\":\"Enabling businessesto get competitive edge in the market by building scalable and extensible software and mobile applications. Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.\",\"listing_id\":\"1\"}', '2021-01-11 14:20:51', '2021-01-11 12:08:25', NULL),
(7, 'case-studies', 'Case Studies', '{\"heading\":\"Case Studies\",\"description\":\"Some awesome words from awesome people\"}', '2021-01-11 14:20:51', '2021-01-11 12:04:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `case_study_services`
--
ALTER TABLE `case_study_services`
  ADD PRIMARY KEY (`case_study_id`,`service_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `client_services`
--
ALTER TABLE `client_services`
  ADD PRIMARY KEY (`client_id`,`service_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_question_answers`
--
ALTER TABLE `faq_question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_pages`
--
ALTER TABLE `frontend_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frontend_pages_slug_unique` (`slug`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_items`
--
ALTER TABLE `listing_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_library`
--
ALTER TABLE `media_library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_library_related_type_related_id_index` (`related_type`,`related_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_linkable_type_linkable_id_index` (`linkable_type`,`linkable_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `our_homies`
--
ALTER TABLE `our_homies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `services_commitments`
--
ALTER TABLE `services_commitments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_process`
--
ALTER TABLE `services_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_related`
--
ALTER TABLE `services_related`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_photos`
--
ALTER TABLE `slider_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_id` (`sliders_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_services`
--
ALTER TABLE `testimonial_services`
  ADD PRIMARY KEY (`testimonials_id`,`service_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frontend_pages_slug_unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq_question_answers`
--
ALTER TABLE `faq_question_answers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `frontend_pages`
--
ALTER TABLE `frontend_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `listing_items`
--
ALTER TABLE `listing_items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `media_library`
--
ALTER TABLE `media_library`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `our_homies`
--
ALTER TABLE `our_homies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `services_commitments`
--
ALTER TABLE `services_commitments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services_process`
--
ALTER TABLE `services_process`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `services_related`
--
ALTER TABLE `services_related`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `slider_photos`
--
ALTER TABLE `slider_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
