-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 02:13 PM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokeninlah_backbone`
--


--
-- Table structure for table `mstr_client`
--

CREATE TABLE `mstr_client` (
  `id_pk_client` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_mobile` varchar(20) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_sector` varchar(100) NOT NULL,
  `company_address` varchar(400) NOT NULL,
  `client_notes` varchar(1000) NOT NULL,
  `client_status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `mstr_client`
--

INSERT INTO `mstr_client` (`id_pk_client`, `client_name`, `client_email`, `client_mobile`, `company_name`, `company_sector`, `company_address`, `client_notes`, `client_status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'testetest234', 'testetest234', 'testetest234', 'testetest234', 'testetest234', 'testetest234', 'testetest234', 'AKTIF', '2023-06-24 06:28:24', '2023-06-30 14:41:37', '0000-00-00 00:00:00', NULL, NULL, NULL),
(2, 'testetest5', 'testetest5', 'testetest5', 'testetest5', 'testetest5', 'testetest55', 'testetest5', 'AKTIF', '2023-06-27 12:52:09', '2023-06-30 16:18:13', '0000-00-00 00:00:00', NULL, 12, NULL),
(3, 'testetest5', 'testetest5', 'testetest5', 'testetest5', 'testetest5', 'testetest55', 'testetest5', 'AKTIF', '2023-06-27 12:54:15', '2023-06-27 14:11:10', '2023-06-27 14:11:10', NULL, NULL, NULL),
(4, 'testetest///', 'testetest///', 'testetest////', 'testetest////', 'testetest.///', 'testetest/////', 'testetest////\r\n', 'AKTIF', '2023-06-27 12:54:48', '2023-06-27 14:13:44', '2023-06-27 14:13:44', NULL, NULL, NULL),
(5, 'testetest///', 'testetest///', 'testetest////', 'testetest////', 'testetest.///', 'testetest/////', 'testetest////\r\n', 'AKTIF', '2023-06-27 12:55:55', '2023-06-27 14:11:18', '2023-06-27 14:11:18', NULL, NULL, NULL),
(6, 'testetest', 'testetest', 'testetest', 'testetest', 'testetest', 'testetest', 'testetest', 'AKTIF', '2023-06-27 12:56:29', '2023-06-30 16:18:18', '0000-00-00 00:00:00', NULL, 12, NULL),
(7, 'testetest', 'testetest', 'testetest', 'testetest', 'testetest', 'testetest', 'testetest', 'AKTIF', '2023-06-27 13:27:46', '2023-06-30 16:18:22', '0000-00-00 00:00:00', NULL, 12, NULL),
(8, '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;lt;script&a', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;amp;lt;h1&amp;amp;amp;gt;hello&amp;amp;amp;lt;/h1&amp;amp;amp;gt;', 'AKTIF', '2023-06-30 14:51:19', '2023-06-30 16:19:47', '2023-06-30 16:19:47', NULL, 12, 12),
(9, 'htmlspecialchars', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;lt;script&a', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', '&amp;amp;lt;script&amp;amp;gt;alert()&amp;amp;lt;/script&amp;amp;gt;', 'AKTIF', '2023-06-30 14:51:57', '2023-06-30 16:19:54', '2023-06-30 16:19:54', NULL, 12, 12),
(10, '&amp;lt;script&amp;gt;alert()&amp;lt;/script&amp;gt;', '&amp;lt;script&amp;gt;alert()&amp;lt;/script&amp;gt;', '&amp;lt;script&amp;g', '&amp;lt;script&amp;gt;alert()&amp;lt;/script&amp;gt;', '&amp;lt;script&amp;gt;alert()&amp;lt;/script&amp;gt;', '&amp;lt;script&amp;gt;alert()&amp;lt;/script&amp;gt;', '&amp;lt;script&amp;gt;alert()&amp;lt;/script&amp;gt;', 'AKTIF', '2023-06-30 14:52:29', '2023-06-30 16:18:37', '0000-00-00 00:00:00', NULL, 12, NULL),
(11, 'asdfadfasdf', 'asdfasdfasd', 'fasdfasdfasd', 'fasdfasdf', 'asdfasdfa', 'sdfadfasdfasdfasdf', 'asdfasdfasdf', 'AKTIF', '2023-06-30 16:18:59', '2023-06-30 16:18:59', '0000-00-00 00:00:00', 12, NULL, NULL),
(12, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:05:55', '2023-07-22 18:05:55', '0000-00-00 00:00:00', 12, NULL, NULL),
(13, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:06:20', '2023-07-22 18:06:20', '0000-00-00 00:00:00', 12, NULL, NULL),
(14, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:10:57', '2023-07-22 18:10:57', '0000-00-00 00:00:00', 12, NULL, NULL),
(15, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:11:04', '2023-07-22 18:11:04', '0000-00-00 00:00:00', 12, NULL, NULL),
(16, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:11:13', '2023-07-22 18:11:13', '0000-00-00 00:00:00', 12, NULL, NULL),
(17, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:11:42', '2023-07-22 18:11:42', '0000-00-00 00:00:00', 12, NULL, NULL),
(18, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:11:48', '2023-07-22 18:11:48', '0000-00-00 00:00:00', 12, NULL, NULL),
(19, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:11:54', '2023-07-22 18:11:54', '0000-00-00 00:00:00', 12, NULL, NULL),
(20, 'awefioijaoiefjaojief', 'aweofijaweojfi', 'aewoifjawoeifj', 'aoweifjoawiejfoij', 'waeoifjoawejfoji', 'oiewajfoiwjefawefawef', 'fapoewoifawjeofiawef\r\n', 'AKTIF', '2023-07-22 18:11:56', '2023-07-22 18:11:56', '0000-00-00 00:00:00', 12, NULL, NULL),
(21, 'estset', 'setsetset', 'setseset', 'testset', 'Personal Care Product Manufacturers', 'setset', '', '', '2023-10-14 22:20:15', '2023-10-14 22:20:15', '0000-00-00 00:00:00', 0, NULL, NULL),
(22, 'aewfawef', 'waefawefawef', 'awfeawfe', 'awefawef', 'Event Planning and Wedding Industry', 'awefawef', '', '', '2023-10-14 22:20:51', '2023-10-14 22:20:51', '0000-00-00 00:00:00', 0, NULL, NULL),
(23, 'aewfawef', 'waefawefawef', 'awfeawfe', 'awefawef', 'Event Planning and Wedding Industry', 'awefawef', '', '', '2023-10-14 22:21:46', '2023-10-14 22:21:46', '0000-00-00 00:00:00', 0, NULL, NULL),
(24, 'aewfawef', 'waefawefawef', 'awfeawfe', 'awefawef', 'Event Planning and Wedding Industry', 'awefawef', '', '', '2023-10-14 22:22:06', '2023-10-14 22:22:06', '0000-00-00 00:00:00', 0, NULL, NULL),
(25, 'aewfawef', 'waefawefawef', 'awfeawfe', 'awefawef', 'Event Planning and Wedding Industry', 'awefawef', '', '', '2023-10-14 22:29:14', '2023-10-14 22:29:14', '0000-00-00 00:00:00', 0, NULL, NULL),
(26, 'awfeawefawfawef', 'awfeawefawfawef', 'awfeawefawfawef', 'awefawf', 'Global Export', 'awefwef', '', '', '2023-10-14 22:32:22', '2023-10-14 22:32:22', '0000-00-00 00:00:00', 0, NULL, NULL),
(27, 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', 'aewfwaefawef', 'Hospitality and Resorts', 'awefawefawfe', '', '', '2023-10-14 22:37:18', '2023-10-14 22:37:18', '0000-00-00 00:00:00', 0, NULL, NULL),
(28, 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', 'Global Export', 'awefawefawfe', '', '', '2023-10-14 22:37:46', '2023-10-14 22:37:46', '0000-00-00 00:00:00', 0, NULL, NULL),
(29, 'setsetset', 'tessetset', 'setsets', 'test', 'Entertainment and Film Industry', 'esttsetse', '', '', '2023-10-14 22:43:16', '2023-10-14 22:43:16', '0000-00-00 00:00:00', 0, NULL, NULL),
(30, 'efawfeawfe', 'afeafeawef', 'awfeawfeawefa', 'aewfafe', 'Cleaning and Detergents', 'aewfaefaefa', '', '', '2023-10-14 22:44:29', '2023-10-14 22:44:29', '0000-00-00 00:00:00', 0, NULL, NULL),
(31, 'testset', 'estsets', 'etsetstes', 'etstes', 'testesetste', 'etste', 'etsetset', 'AKTIF', '2023-10-16 23:40:56', '2023-10-16 23:40:56', '0000-00-00 00:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_product`
--

CREATE TABLE `mstr_product` (
  `id_pk_product` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_desc` varchar(300) NOT NULL,
  `product_base_price` int(11) NOT NULL,
  `product_sell_price` int(11) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `product_notes` varchar(300) NOT NULL,
  `product_status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `mstr_product`
--

INSERT INTO `mstr_product` (`id_pk_product`, `product_id`, `product_name`, `product_desc`, `product_base_price`, `product_sell_price`, `product_image`, `product_notes`, `product_status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'aewfaefawedittttt', 'efawefaewfedittttt', 'aewfaewfefedittttt', 1111111111, 22222, 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231006/1696529928_52d593a8ddce4581555c.png', 'awefawfeaefeedittttt', 'AKTIF', '2023-10-05 23:59:28', '2023-10-06 01:38:56', '0000-00-00 00:00:00', 1, 1, 1),
(2, 'aewfaefaw', 'efawefaewf', 'aewfaewfef', 3213123, 123123123, 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231005/1696525170_04abb7f3f3d18e7ab23f.jpg', 'awefawfeaefe', 'AKTIF', '2023-10-05 23:59:30', '2023-10-06 01:39:06', '0000-00-00 00:00:00', 1, 0, 1),
(3, 'aewfaefaw', 'efawefaewf', 'aewfaewfef', 3213123, 123123123, 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231006/1696531157_34208d1b3709077424c6.png', 'awefawfeaefe', 'AKTIF', '2023-10-05 23:59:38', '2023-10-06 01:39:17', '0000-00-00 00:00:00', 1, 1, 0),
(4, 'test', 'setsetse', 'stsetsetset', 12341234, 12412341, 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/default.png', '32qqqffefawe', 'AKTIF', '2023-10-16 23:37:09', '2023-10-16 23:37:09', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_user`
--

CREATE TABLE `mstr_user` (
  `id_pk_user` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `user_notes` varchar(500) NOT NULL,
  `user_status` varchar(100) NOT NULL,
  `user_valid_until` datetime NOT NULL,
  `user_last_login` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `user_need_change_pass` smallint(6) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `mstr_user`
--

INSERT INTO `mstr_user` (`id_pk_user`, `user_id`, `user_name`, `user_password`, `user_email`, `user_mobile`, `user_role`, `user_notes`, `user_status`, `user_valid_until`, `user_last_login`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `user_need_change_pass`) VALUES
(1, 'UI0001', 'joshuanatan', '9db39b4861a9e3c7d367d71064a6b6eefde898f15a4f98168477a33f5388c63d', 'joshuanatan.jn@gmail.com', '089616961915', 'ADMINISTRATOR', '-', 'AKTIF', '0000-00-00 00:00:00', '2023-10-21 18:30:33', '2023-06-28 16:10:23', '2023-10-21 18:30:33', '0000-00-00 00:00:00', 0, 1, 0, 0),
(13, 'UI0001', 'joshuanatan', '', 'joshuanatan.jn@gmail.com', '089616961915', 'ADMINISTRATOR', '-', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-10-09 23:16:57', '2023-10-09 23:16:57', '0000-00-00 00:00:00', 0, 1, 0, 1),
(14, 'UI0001', 'joshuanatan', '', 'joshuanatan.jn@gmail.com', '089616961915', 'ADMINISTRATOR', '-', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-10-09 23:17:17', '2023-10-09 23:17:17', '0000-00-00 00:00:00', 0, 1, 0, 1),
(15, 'UI0001', 'joshuanatan', '', 'joshuanatan.jn@gmail.com', '089616961915', 'ADMINISTRATOR', '-', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-10-09 23:33:18', '2023-10-09 23:33:18', '0000-00-00 00:00:00', 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `id_pk_document` int(10) UNSIGNED NOT NULL,
  `document_id` varchar(10) NOT NULL,
  `document_name` varchar(50) NOT NULL,
  `document_type` varchar(15) NOT NULL,
  `document_file` varchar(300) NOT NULL,
  `document_notes` varchar(200) NOT NULL,
  `id_fk_order` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_document`
--

INSERT INTO `tbl_document` (`id_pk_document`, `document_id`, `document_name`, `document_type`, `document_file`, `document_notes`, `id_fk_order`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Doc122222', 'Invoice 1123312322222', 'PKS', 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231005/1696496734_97d129b090c2dce93a57.jpg', 'testset22222', 3, '2023-10-05 14:48:37', '2023-10-05 17:45:03', '2023-10-05 17:45:03', 1, 1, 1),
(2, 'afeae', 'fawefafeawef', 'INVOICE', 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231005/1696502736_69aabff92535012bf9aa.pdf', 'aefawefaef', 3, '2023-10-05 17:45:36', '2023-10-05 17:45:41', '2023-10-05 17:45:41', 1, 0, 1),
(3, 'aewfawfe', 'awefawfeawfewf', 'PKS', 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231005/1696502780_21b55c02f9da11096d18.pdf', 'wefawfawfe', 3, '2023-10-05 17:46:20', '2023-10-05 17:46:45', '2023-10-05 17:46:26', 1, 0, 1),
(4, 'dszvaew', 'fafafeaewfa', 'PKS', 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231005/1696502817_6a6820a7d26c4f18d64c.pdf', 'awefawfeawfe', 3, '2023-10-05 17:46:57', '2023-10-05 17:47:01', '2023-10-05 17:47:01', 1, 0, 1),
(5, 'awefaefawe', 'awefawfeawfe', 'INVOICE', 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231005/1696502846_753965b125850fabf629.pdf', 'aewfwefawefafew', 3, '2023-10-05 17:47:26', '2023-10-05 17:47:55', '2023-10-05 17:47:31', 1, 0, 1),
(6, 'awefaefa', 'ewfaewfaef', 'INVOICE', 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/default.png', 'aewfaewfafeaewf', 3, '2023-10-05 17:48:08', '2023-10-05 17:48:58', '2023-10-05 17:48:15', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE `tbl_inquiry` (
  `id_pk_inquiry` int(10) UNSIGNED NOT NULL,
  `inquiry_id` varchar(10) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_mobile` varchar(20) NOT NULL,
  `inquiry_subject` varchar(200) NOT NULL,
  `inquiry_detail` varchar(500) NOT NULL,
  `inquiry_status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_inquiry`
--

INSERT INTO `tbl_inquiry` (`id_pk_inquiry`, `inquiry_id`, `contact_name`, `contact_email`, `contact_mobile`, `inquiry_subject`, `inquiry_detail`, `inquiry_status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'testsetedi', 'etstsetsetedit', 'setsetsetedit', 'set23eedit', 'aewfaewfawfeaewfedit', 'aewfawefawefafeafewaveditedit', 'Cancelled', '2023-10-21 15:59:16', '2023-10-17 00:19:46', '0000-00-00 00:00:00', 1, 1, 1),
(2, 'teststeset', 'ttsetsetsetset', 'stesetsetsetset', 'setsetsetsetsetset', 'setsetsetsetset', 'setsetsetsetsetset', 'Open', '2023-10-21 15:59:16', '2023-10-07 23:58:44', '2023-10-07 23:58:44', 1, 1, 1),
(3, 'teststeset', 'ttsetsetsetset', 'stesetsetsetset', 'setsetsetsetsetset', 'setsetsetsetset', 'setsetsetsetsetset', 'Open', '2023-10-21 15:59:16', '2023-10-07 23:58:39', '2023-10-07 23:58:39', 1, 1, 1),
(4, 'INQUIRY-20', 'aewfawef', 'waefawefawef', 'awfeawfe', 'awef', 'awefafewawefaefw', '', '2023-10-20 15:59:16', '2023-10-14 22:21:46', '0000-00-00 00:00:00', 0, 0, 0),
(5, 'INQUIRY-20', 'aewfawef', 'waefawefawef', 'awfeawfe', 'awef', 'awefafewawefaefw', '', '2023-10-20 15:59:16', '2023-10-14 22:22:06', '0000-00-00 00:00:00', 0, 0, 0),
(6, 'INQUIRY-20', 'aewfawef', 'waefawefawef', 'awfeawfe', 'awef', 'awefafewawefaefw', '', '2023-10-16 15:59:16', '2023-10-14 22:29:14', '0000-00-00 00:00:00', 0, 0, 0),
(7, '1350defd49', 'awfeawefawfawef', 'awfeawefawfawef', 'awfeawefawfawef', 'awefawefawefafe', 'awefawefawef', '', '2023-10-15 15:59:16', '2023-10-14 22:32:22', '0000-00-00 00:00:00', 0, 0, 0),
(8, '46dc6552e0', 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', '', '2023-10-15 15:59:16', '2023-10-14 22:37:18', '0000-00-00 00:00:00', 0, 0, 0),
(9, '717db8eb70', 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', 'awefawefawfe', '', '2023-10-15 15:59:16', '2023-10-14 22:37:46', '0000-00-00 00:00:00', 0, 0, 0),
(10, '09eace0836', 'setsetset', 'tessetset', 'setsets', 'tsetsetset', 'setsetest', '', '2023-10-15 15:59:16', '2023-10-14 22:43:16', '0000-00-00 00:00:00', 0, 0, 0),
(11, '4faf6632e2', 'efawfeawfe', 'afeafeawef', 'awfeawfeawefa', 'wefafeawe', 'fafeawefawef', '', '2023-10-14 22:44:29', '2023-10-14 22:44:29', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry_item`
--

CREATE TABLE `tbl_inquiry_item` (
  `id_pk_inquiry_item` int(10) UNSIGNED NOT NULL,
  `id_fk_product` int(10) UNSIGNED NOT NULL,
  `id_fk_inquiry` int(10) UNSIGNED NOT NULL,
  `inquiry_item_qty` varchar(100) NOT NULL,
  `inquiry_item_notes` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_inquiry_item`
--

INSERT INTO `tbl_inquiry_item` (`id_pk_inquiry_item`, `id_fk_product`, `id_fk_inquiry`, `inquiry_item_qty`, `inquiry_item_notes`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 0, 1, '123 testetset', 'awefawefawef', '2023-10-07 16:44:05', '2023-10-07 22:20:19', '0000-00-00 00:00:00', 1, 1, 0),
(2, 0, 1, '1111 heheh', 'aefawefawefawefawef', '2023-10-07 16:44:05', '2023-10-07 22:20:19', '0000-00-00 00:00:00', 1, 1, 0),
(3, 1, 1, '111 aaaaq', 'af', '2023-10-07 22:22:59', '2023-10-07 23:40:37', '2023-10-07 23:40:37', 1, 1, 0),
(4, 1, 1, '111 itemm', 'af', '2023-10-07 22:22:59', '2023-10-07 23:40:21', '2023-10-07 23:40:21', 1, 1, 0),
(5, 2, 1, '100 ab', '-', '2023-10-07 22:41:55', '2023-10-07 23:38:12', '2023-10-07 23:38:12', 1, 1, 0),
(6, 3, 1, '111 item', '-', '2023-10-07 23:40:50', '2023-10-07 23:41:31', '2023-10-07 23:41:31', 1, 1, 0),
(7, 1, 1, '100 dozen', '-', '2023-10-07 23:41:21', '2023-10-17 00:19:46', '0000-00-00 00:00:00', 1, 1, 0),
(8, 1, 5, '1', '-', '2023-10-14 22:22:06', '2023-10-14 22:22:06', '0000-00-00 00:00:00', 0, 0, 0),
(9, 2, 5, '2', '-', '2023-10-14 22:22:06', '2023-10-14 22:22:06', '0000-00-00 00:00:00', 0, 0, 0),
(10, 1, 6, '1', '-', '2023-10-14 22:29:14', '2023-10-14 22:29:14', '0000-00-00 00:00:00', 0, 0, 0),
(11, 2, 6, '2', '-', '2023-10-14 22:29:14', '2023-10-14 22:29:14', '0000-00-00 00:00:00', 0, 0, 0),
(12, 1, 7, '1', '-', '2023-10-14 22:32:22', '2023-10-14 22:32:22', '0000-00-00 00:00:00', 0, 0, 0),
(13, 3, 7, '2', '-', '2023-10-14 22:32:22', '2023-10-14 22:32:22', '0000-00-00 00:00:00', 0, 0, 0),
(14, 2, 7, '3', '-', '2023-10-14 22:32:22', '2023-10-14 22:32:22', '0000-00-00 00:00:00', 0, 0, 0),
(15, 1, 8, '1', '-', '2023-10-14 22:37:18', '2023-10-14 22:37:18', '0000-00-00 00:00:00', 0, 0, 0),
(16, 3, 8, '2', '-', '2023-10-14 22:37:18', '2023-10-14 22:37:18', '0000-00-00 00:00:00', 0, 0, 0),
(17, 1, 9, '1', '-', '2023-10-14 22:37:46', '2023-10-14 22:37:46', '0000-00-00 00:00:00', 0, 0, 0),
(18, 3, 9, '2', '-', '2023-10-14 22:37:46', '2023-10-14 22:37:46', '0000-00-00 00:00:00', 0, 0, 0),
(19, 1, 10, '12', '-', '2023-10-14 22:43:16', '2023-10-14 22:43:16', '0000-00-00 00:00:00', 0, 0, 0),
(20, 3, 10, '16', '-', '2023-10-14 22:43:16', '2023-10-14 22:43:16', '0000-00-00 00:00:00', 0, 0, 0),
(21, 1, 11, '111', '-', '2023-10-14 22:44:29', '2023-10-14 22:44:29', '0000-00-00 00:00:00', 0, 0, 0),
(22, 3, 11, '222', '-', '2023-10-14 22:44:29', '2023-10-14 22:44:29', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_pk_order` int(10) UNSIGNED NOT NULL,
  `id_fk_client` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `order_notes` varchar(1000) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_detail` varchar(1000) NOT NULL,
  `order_start_date` date NOT NULL,
  `order_end_date` date NOT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_pk_order`, `id_fk_client`, `order_id`, `order_notes`, `order_price`, `order_detail`, `order_start_date`, `order_end_date`, `order_status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 2, 'OD00011', 'Order notes ini1\r\nOrder notes ini1Order notes ini1Order notes ini1Order notes ini1\r\nOrder notes ini1\r\nOrder notes ini1\r\nOrder notes ini1Order notes ini1Order notes ini1Order notes ini1\r\nOrder notes ini1\r\nOrder notes ini1\r\nOrder notes ini1Order notes ini1Order notes ini1Order notes ini1\r\nOrder notes ini1\r\nOrder notes ini1\r\nOrder notes ini1Order notes ini1Order notes ini1Order notes ini1\r\nOrder notes ini1\r\nOrder notes ini1\r\nOrder notes ini1Order notes ini1Order notes ini1Order notes ini1\r\nOrder notes ini1\r\n', 1000000001, 'Order detail content1', '2023-07-27', '2023-08-02', 'Completed', '2023-10-21 17:01:46', '2023-07-15 10:45:36', '2023-07-15 10:45:36', 12, 12, 12),
(2, 1, 'OD0001', 'Order notes ini', 100000000, 'Order detail content', '2023-07-13', '2023-07-19', 'Proposal Submission', '2023-10-20 17:01:46', '2023-07-09 18:11:34', '2023-07-09 18:11:34', 12, 12, 12),
(3, 11, 'OD0001', 'Order notes ini', 100000000, 'Order detail content', '2023-07-26', '2023-08-03', 'Proposal Submission', '2023-10-18 17:01:46', '2023-10-08 22:56:41', '0000-00-00 00:00:00', 12, 1, 0),
(4, 15, 'OD0002', 'Order notes ini', 100000000, 'Order detail content', '2023-10-19', '2023-10-31', 'Completed', '2023-10-18 17:01:46', '2023-10-08 22:58:39', '0000-00-00 00:00:00', 1, 1, 0),
(5, 14, 'OD0001', 'Order notes ini', 100000000, 'Order detail content', '2023-10-04', '2023-10-26', 'Proposal Submission', '2023-10-17 17:01:46', '2023-10-08 23:02:48', '0000-00-00 00:00:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `id_pk_order_item` int(10) UNSIGNED NOT NULL,
  `id_fk_product` int(10) UNSIGNED NOT NULL,
  `id_fk_order` int(10) UNSIGNED NOT NULL,
  `order_item_qty` varchar(100) NOT NULL,
  `order_item_notes` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`id_pk_order_item`, `id_fk_product`, `id_fk_order`, `order_item_qty`, `order_item_notes`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 1, '100 pcs', '-', '2023-10-08 22:52:44', '2023-10-08 22:52:44', '0000-00-00 00:00:00', 1, 1, 0),
(2, 1, 3, '99 Pcs', 'hehe', '2023-10-08 22:56:22', '2023-10-08 23:06:25', '2023-10-08 23:06:25', 1, 1, 0),
(3, 1, 1, '100 item', '-', '2023-10-08 22:58:39', '2023-10-08 22:58:39', '0000-00-00 00:00:00', 1, 1, 0),
(4, 1, 1, '99 item', 'hehe', '2023-10-08 22:58:39', '2023-10-08 22:58:39', '0000-00-00 00:00:00', 1, 1, 0),
(5, 2, 1, '98 item', 'ini yg ga edit', '2023-10-08 22:58:39', '2023-10-08 22:58:39', '0000-00-00 00:00:00', 1, 1, 0),
(6, 1, 5, '100 items', '-', '2023-10-08 23:02:49', '2023-10-08 23:02:49', '0000-00-00 00:00:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id_pk_payment` int(10) UNSIGNED NOT NULL,
  `id_fk_order` int(11) NOT NULL,
  `payment_id` varchar(20) NOT NULL,
  `payment_notes` varchar(1000) NOT NULL,
  `payment_value` int(11) NOT NULL,
  `payment_term` int(11) NOT NULL,
  `payment_detail` varchar(1000) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `payment_file` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id_pk_payment`, `id_fk_order`, `payment_id`, `payment_notes`, `payment_value`, `payment_term`, `payment_detail`, `payment_date`, `payment_status`, `payment_file`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 3, 'tsetest', 'testnotes', 123, 123, 'aewfwefawefaefaefw', '2023-10-18', 'Confirmed', 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231010/1696883141_e8f7ebf7e0ee49ebb800.pdf', '2023-10-09 01:15:54', '2023-10-10 03:36:11', '0000-00-00 00:00:00', 1, 1, 0),
(2, 3, 'payment1', 'testtsetset', 100000, 10, 'eaeawefawef', '2023-10-25', 'Confirmed', 'C:\\xampp\\htdocs\\tokeninlah\\administrator\\writable\\uploads/20231009/1696869616_b07626b7d5995c74e266.pdf', '2023-10-09 23:40:16', '2023-10-10 03:36:24', '0000-00-00 00:00:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_inquiry_detail`
-- (See below for the actual view)
--
CREATE TABLE `v_inquiry_detail` (
`id_pk_inquiry` int(10) unsigned
,`inquiry_id` varchar(10)
,`contact_name` varchar(100)
,`contact_email` varchar(100)
,`contact_mobile` varchar(20)
,`inquiry_subject` varchar(200)
,`inquiry_detail` varchar(500)
,`inquiry_status` varchar(20)
,`created_at` datetime
,`updated_at` datetime
,`deleted_at` datetime
,`created_by` int(11)
,`updated_by` int(11)
,`deleted_by` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_inquiry_per_month`
-- (See below for the actual view)
--
CREATE TABLE `v_inquiry_per_month` (
`amt` bigint(21)
,`bulan` int(2)
,`nama_bulan` varchar(9)
,`tahun` int(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_inquiry_per_status`
-- (See below for the actual view)
--
CREATE TABLE `v_inquiry_per_status` (
`amt` bigint(21)
,`inquiry_status` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_inquiry_per_year`
-- (See below for the actual view)
--
CREATE TABLE `v_inquiry_per_year` (
`amt` bigint(21)
,`bulan` int(2)
,`nama_bulan` varchar(9)
,`tahun` int(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_inquiry_weekly`
-- (See below for the actual view)
--
CREATE TABLE `v_inquiry_weekly` (
`date` date
,`amount` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_master_order`
-- (See below for the actual view)
--
CREATE TABLE `v_master_order` (
`id_pk_order` int(10) unsigned
,`id_fk_client` int(11)
,`order_id` varchar(20)
,`order_notes` varchar(1000)
,`order_price` int(11)
,`order_detail` varchar(1000)
,`order_start_date` date
,`order_end_date` date
,`order_status` varchar(50)
,`created_at` datetime
,`updated_at` datetime
,`deleted_at` datetime
,`created_by` int(11)
,`updated_by` int(11)
,`deleted_by` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_order_detail`
-- (See below for the actual view)
--
CREATE TABLE `v_order_detail` (
`id_pk_order` int(10) unsigned
,`id_fk_client` int(11)
,`order_id` varchar(20)
,`order_notes` varchar(1000)
,`order_price` int(11)
,`order_detail` varchar(1000)
,`order_start_date` date
,`order_end_date` date
,`order_status` varchar(50)
,`created_at` datetime
,`updated_at` datetime
,`deleted_at` datetime
,`created_by` int(11)
,`updated_by` int(11)
,`deleted_by` int(11)
,`id_pk_order_item` int(10) unsigned
,`id_fk_product` int(10) unsigned
,`order_item_qty` varchar(100)
,`order_item_notes` varchar(300)
,`id_pk_payment` int(10) unsigned
,`payment_id` varchar(20)
,`payment_notes` varchar(1000)
,`payment_value` int(11)
,`payment_term` int(11)
,`payment_detail` varchar(1000)
,`payment_date` date
,`payment_status` varchar(30)
,`payment_file` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_order_per_month`
-- (See below for the actual view)
--
CREATE TABLE `v_order_per_month` (
`amt` bigint(21)
,`bulan` int(2)
,`nama_bulan` varchar(9)
,`tahun` int(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_order_per_order_item`
-- (See below for the actual view)
--
CREATE TABLE `v_order_per_order_item` (
`id_pk_order` int(10) unsigned
,`order_id` varchar(20)
,`order_price` int(11)
,`order_notes` varchar(1000)
,`order_detail` varchar(1000)
,`order_start_date` date
,`order_end_date` date
,`order_status` varchar(50)
,`item_type` bigint(21)
,`item_amount` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_order_per_payment`
-- (See below for the actual view)
--
CREATE TABLE `v_order_per_payment` (
`id_pk_order` int(10) unsigned
,`order_id` varchar(20)
,`order_price` int(11)
,`order_notes` varchar(1000)
,`order_detail` varchar(1000)
,`order_start_date` date
,`order_end_date` date
,`order_status` varchar(50)
,`payment_term` decimal(32,0)
,`payment_value` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_order_per_year`
-- (See below for the actual view)
--
CREATE TABLE `v_order_per_year` (
`amt` bigint(21)
,`bulan` int(2)
,`nama_bulan` varchar(9)
,`tahun` int(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_order_weekly`
-- (See below for the actual view)
--
CREATE TABLE `v_order_weekly` (
`date` date
,`amount` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure for view `v_inquiry_detail`
--
DROP TABLE IF EXISTS `v_inquiry_detail`;

CREATE VIEW `v_inquiry_detail`  AS SELECT `tbl_inquiry`.`id_pk_inquiry` AS `id_pk_inquiry`, `tbl_inquiry`.`inquiry_id` AS `inquiry_id`, `tbl_inquiry`.`contact_name` AS `contact_name`, `tbl_inquiry`.`contact_email` AS `contact_email`, `tbl_inquiry`.`contact_mobile` AS `contact_mobile`, `tbl_inquiry`.`inquiry_subject` AS `inquiry_subject`, `tbl_inquiry`.`inquiry_detail` AS `inquiry_detail`, `tbl_inquiry`.`inquiry_status` AS `inquiry_status`, `tbl_inquiry`.`created_at` AS `created_at`, `tbl_inquiry`.`updated_at` AS `updated_at`, `tbl_inquiry`.`deleted_at` AS `deleted_at`, `tbl_inquiry`.`created_by` AS `created_by`, `tbl_inquiry`.`updated_by` AS `updated_by`, `tbl_inquiry`.`deleted_by` AS `deleted_by` FROM `tbl_inquiry` WHERE `tbl_inquiry`.`deleted_at` = '0000-00-00 00:00:00''0000-00-00 00:00:00'  ;

-- --------------------------------------------------------

--
-- Structure for view `v_inquiry_per_month`
--
DROP TABLE IF EXISTS `v_inquiry_per_month`;

CREATE VIEW `v_inquiry_per_month`  AS SELECT count(`tbl_inquiry`.`id_pk_inquiry`) AS `amt`, month(`tbl_inquiry`.`created_at`) AS `bulan`, monthname(`tbl_inquiry`.`created_at`) AS `nama_bulan`, year(`tbl_inquiry`.`created_at`) AS `tahun` FROM `tbl_inquiry` WHERE `tbl_inquiry`.`deleted_at` = '0000-00-00 00:00:00' GROUP BY month(`tbl_inquiry`.`created_at`), year(`tbl_inquiry`.`created_at`)  ;

-- --------------------------------------------------------

--
-- Structure for view `v_inquiry_per_status`
--
DROP TABLE IF EXISTS `v_inquiry_per_status`;

CREATE VIEW `v_inquiry_per_status`  AS SELECT count(`tbl_inquiry`.`id_pk_inquiry`) AS `amt`, `tbl_inquiry`.`inquiry_status` AS `inquiry_status` FROM `tbl_inquiry` WHERE `tbl_inquiry`.`deleted_at` = '0000-00-00 00:00:00' GROUP BY `tbl_inquiry`.`inquiry_status`  ;

-- --------------------------------------------------------

--
-- Structure for view `v_inquiry_per_year`
--
DROP TABLE IF EXISTS `v_inquiry_per_year`;

CREATE VIEW `v_inquiry_per_year`  AS SELECT count(`tbl_inquiry`.`id_pk_inquiry`) AS `amt`, month(`tbl_inquiry`.`created_at`) AS `bulan`, monthname(`tbl_inquiry`.`created_at`) AS `nama_bulan`, year(`tbl_inquiry`.`created_at`) AS `tahun` FROM `tbl_inquiry` WHERE `tbl_inquiry`.`deleted_at` = '0000-00-00 00:00:00' GROUP BY year(`tbl_inquiry`.`created_at`)  ;

-- --------------------------------------------------------

--
-- Structure for view `v_inquiry_weekly`
--
DROP TABLE IF EXISTS `v_inquiry_weekly`;

CREATE VIEW `v_inquiry_weekly`  AS   (select `date_range`.`date` AS `date`,coalesce(count(`v_inquiry_detail`.`id_pk_inquiry`),0) AS `amount` from ((select curdate() - interval `t`.`n` day AS `date` from (select 0 AS `n` union all select 1 AS `1` union all select 2 AS `2` union all select 3 AS `3` union all select 4 AS `4` union all select 5 AS `5` union all select 6 AS `6`) `t`) `date_range` left join `v_inquiry_detail` on(cast(`date_range`.`date` as date) = cast(`v_inquiry_detail`.`created_at` as date))) group by `date_range`.`date` order by `date_range`.`date`)  ;

-- --------------------------------------------------------

--
-- Structure for view `v_master_order`
--
DROP TABLE IF EXISTS `v_master_order`;

CREATE VIEW `v_master_order`  AS SELECT `tbl_order`.`id_pk_order` AS `id_pk_order`, `tbl_order`.`id_fk_client` AS `id_fk_client`, `tbl_order`.`order_id` AS `order_id`, `tbl_order`.`order_notes` AS `order_notes`, `tbl_order`.`order_price` AS `order_price`, `tbl_order`.`order_detail` AS `order_detail`, `tbl_order`.`order_start_date` AS `order_start_date`, `tbl_order`.`order_end_date` AS `order_end_date`, `tbl_order`.`order_status` AS `order_status`, `tbl_order`.`created_at` AS `created_at`, `tbl_order`.`updated_at` AS `updated_at`, `tbl_order`.`deleted_at` AS `deleted_at`, `tbl_order`.`created_by` AS `created_by`, `tbl_order`.`updated_by` AS `updated_by`, `tbl_order`.`deleted_by` AS `deleted_by` FROM `tbl_order` WHERE `tbl_order`.`deleted_at` = '0000-00-00 00:00:00''0000-00-00 00:00:00'  ;

-- --------------------------------------------------------

--
-- Structure for view `v_order_detail`
--
DROP TABLE IF EXISTS `v_order_detail`;

CREATE VIEW `v_order_detail`  AS   (select `tbl_order`.`id_pk_order` AS `id_pk_order`,`tbl_order`.`id_fk_client` AS `id_fk_client`,`tbl_order`.`order_id` AS `order_id`,`tbl_order`.`order_notes` AS `order_notes`,`tbl_order`.`order_price` AS `order_price`,`tbl_order`.`order_detail` AS `order_detail`,`tbl_order`.`order_start_date` AS `order_start_date`,`tbl_order`.`order_end_date` AS `order_end_date`,`tbl_order`.`order_status` AS `order_status`,`tbl_order`.`created_at` AS `created_at`,`tbl_order`.`updated_at` AS `updated_at`,`tbl_order`.`deleted_at` AS `deleted_at`,`tbl_order`.`created_by` AS `created_by`,`tbl_order`.`updated_by` AS `updated_by`,`tbl_order`.`deleted_by` AS `deleted_by`,`tbl_order_item`.`id_pk_order_item` AS `id_pk_order_item`,`tbl_order_item`.`id_fk_product` AS `id_fk_product`,`tbl_order_item`.`order_item_qty` AS `order_item_qty`,`tbl_order_item`.`order_item_notes` AS `order_item_notes`,`tbl_payment`.`id_pk_payment` AS `id_pk_payment`,`tbl_payment`.`payment_id` AS `payment_id`,`tbl_payment`.`payment_notes` AS `payment_notes`,`tbl_payment`.`payment_value` AS `payment_value`,`tbl_payment`.`payment_term` AS `payment_term`,`tbl_payment`.`payment_detail` AS `payment_detail`,`tbl_payment`.`payment_date` AS `payment_date`,`tbl_payment`.`payment_status` AS `payment_status`,`tbl_payment`.`payment_file` AS `payment_file` from ((`tbl_order` left join `tbl_order_item` on(`tbl_order_item`.`id_fk_order` = `tbl_order`.`id_pk_order` and `tbl_order_item`.`deleted_at` = '0000-00-00 00:00:00')) left join `tbl_payment` on(`tbl_payment`.`id_fk_order` = `tbl_order`.`id_pk_order` and `tbl_payment`.`deleted_at` = '0000-00-00 00:00:00')) where `tbl_order`.`deleted_at` = '0000-00-00 00:00:00')  ;

-- --------------------------------------------------------

--
-- Structure for view `v_order_per_month`
--
DROP TABLE IF EXISTS `v_order_per_month`;

CREATE VIEW `v_order_per_month`  AS SELECT count(`v_order_detail`.`id_pk_order`) AS `amt`, month(`v_order_detail`.`created_at`) AS `bulan`, monthname(`v_order_detail`.`created_at`) AS `nama_bulan`, year(`v_order_detail`.`created_at`) AS `tahun` FROM `v_order_detail` GROUP BY month(`v_order_detail`.`created_at`), year(`v_order_detail`.`created_at`)  ;

-- --------------------------------------------------------

--
-- Structure for view `v_order_per_order_item`
--
DROP TABLE IF EXISTS `v_order_per_order_item`;

CREATE VIEW `v_order_per_order_item`  AS SELECT `v_order_detail`.`id_pk_order` AS `id_pk_order`, `v_order_detail`.`order_id` AS `order_id`, `v_order_detail`.`order_price` AS `order_price`, `v_order_detail`.`order_notes` AS `order_notes`, `v_order_detail`.`order_detail` AS `order_detail`, `v_order_detail`.`order_start_date` AS `order_start_date`, `v_order_detail`.`order_end_date` AS `order_end_date`, `v_order_detail`.`order_status` AS `order_status`, ifnull(count(`v_order_detail`.`id_pk_order_item`),0) AS `item_type`, ifnull(sum(`v_order_detail`.`order_item_qty`),0) AS `item_amount` FROM `v_order_detail` WHERE `v_order_detail`.`deleted_at` = '0000-00-00 00:00:00' GROUP BY `v_order_detail`.`id_pk_order`  ;

-- --------------------------------------------------------

--
-- Structure for view `v_order_per_payment`
--
DROP TABLE IF EXISTS `v_order_per_payment`;

CREATE VIEW `v_order_per_payment`  AS SELECT `v_order_detail`.`id_pk_order` AS `id_pk_order`, `v_order_detail`.`order_id` AS `order_id`, `v_order_detail`.`order_price` AS `order_price`, `v_order_detail`.`order_notes` AS `order_notes`, `v_order_detail`.`order_detail` AS `order_detail`, `v_order_detail`.`order_start_date` AS `order_start_date`, `v_order_detail`.`order_end_date` AS `order_end_date`, `v_order_detail`.`order_status` AS `order_status`, ifnull(sum(`v_order_detail`.`payment_term`),0) AS `payment_term`, ifnull(sum(`v_order_detail`.`payment_value`),0) AS `payment_value` FROM `v_order_detail` WHERE `v_order_detail`.`deleted_at` = '0000-00-00 00:00:00' GROUP BY `v_order_detail`.`id_pk_order`  ;

-- --------------------------------------------------------

--
-- Structure for view `v_order_per_year`
--
DROP TABLE IF EXISTS `v_order_per_year`;

CREATE VIEW `v_order_per_year`  AS SELECT count(`v_order_detail`.`id_pk_order`) AS `amt`, month(`v_order_detail`.`created_at`) AS `bulan`, monthname(`v_order_detail`.`created_at`) AS `nama_bulan`, year(`v_order_detail`.`created_at`) AS `tahun` FROM `v_order_detail` GROUP BY year(`v_order_detail`.`created_at`)  ;

-- --------------------------------------------------------

--
-- Structure for view `v_order_weekly`
--
DROP TABLE IF EXISTS `v_order_weekly`;

CREATE VIEW `v_order_weekly`  AS   (select `date_range`.`date` AS `date`,coalesce(count(`v_master_order`.`id_pk_order`),0) AS `amount` from ((select curdate() - interval `t`.`n` day AS `date` from (select 0 AS `n` union all select 1 AS `1` union all select 2 AS `2` union all select 3 AS `3` union all select 4 AS `4` union all select 5 AS `5` union all select 6 AS `6`) `t`) `date_range` left join `v_master_order` on(cast(`date_range`.`date` as date) = cast(`v_master_order`.`created_at` as date))) group by `date_range`.`date` order by `date_range`.`date`)  ;

--
-- Indexes for dumped tables
--


--
-- Indexes for table `mstr_client`
--
ALTER TABLE `mstr_client`
  ADD PRIMARY KEY (`id_pk_client`);

--
-- Indexes for table `mstr_product`
--
ALTER TABLE `mstr_product`
  ADD PRIMARY KEY (`id_pk_product`);

--
-- Indexes for table `mstr_user`
--
ALTER TABLE `mstr_user`
  ADD PRIMARY KEY (`id_pk_user`);

--
-- Indexes for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`id_pk_document`);

--
-- Indexes for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD PRIMARY KEY (`id_pk_inquiry`);

--
-- Indexes for table `tbl_inquiry_item`
--
ALTER TABLE `tbl_inquiry_item`
  ADD PRIMARY KEY (`id_pk_inquiry_item`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_pk_order`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`id_pk_order_item`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id_pk_payment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mstr_client`
--
ALTER TABLE `mstr_client`
  MODIFY `id_pk_client` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `mstr_product`
--
ALTER TABLE `mstr_product`
  MODIFY `id_pk_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mstr_user`
--
ALTER TABLE `mstr_user`
  MODIFY `id_pk_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `id_pk_document` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  MODIFY `id_pk_inquiry` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_inquiry_item`
--
ALTER TABLE `tbl_inquiry_item`
  MODIFY `id_pk_inquiry_item` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_pk_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `id_pk_order_item` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id_pk_payment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
