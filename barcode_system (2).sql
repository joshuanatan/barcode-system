-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 05:01 PM
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
-- Database: `barcode_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-06-27-223920', 'App\\Database\\Migrations\\User', 'default', 'App', 1701010160, 1),
(2, '2023-08-31-184303', 'App\\Database\\Migrations\\ProductMigration', 'default', 'App', 1701010160, 1),
(3, '2023-11-26-141123', 'App\\Database\\Migrations\\ProductLogMigration', 'default', 'App', 1701010160, 1);

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
  `product_image` varchar(1000) NOT NULL,
  `product_notes` varchar(300) NOT NULL,
  `product_status` varchar(20) NOT NULL,
  `product_qty` int(11) NOT NULL,
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

INSERT INTO `mstr_product` (`id_pk_product`, `product_id`, `product_name`, `product_desc`, `product_base_price`, `product_sell_price`, `product_image`, `product_notes`, `product_status`, `product_qty`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, '8999908427502', 'Mitu', '-', 10000, 20000, 'C:\\xampp\\htdocs\\projects\\barcode-system\\writable\\uploads/20231126/1701016347_078c16c2ca46b61771ae.jpeg', '-', 'AKTIF', 6, '2023-11-26 23:01:54', '2023-11-26 23:32:27', '0000-00-00 00:00:00', 1, 1, 0),
(2, '8999999707859', 'Close Up', '-', 10000, 20000, 'C:\\xampp\\htdocs\\projects\\barcode-system\\writable\\uploads/20231126/1701016326_0afa5875aefb78bc924a.jpeg', '-', 'AKTIF', 0, '2023-11-26 23:32:06', '2023-11-26 23:32:06', '0000-00-00 00:00:00', 1, 0, 0),
(3, '8992695100207', 'Panadol', '-', 10000, 10000, 'C:\\xampp\\htdocs\\projects\\barcode\\barcode-system\\writable\\uploads/default.png', '-', 'AKTIF', 2, '2023-11-28 22:16:31', '2023-11-28 22:16:31', '0000-00-00 00:00:00', 4, 0, 0);

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
  `user_role` varchar(100) NOT NULL,
  `user_notes` varchar(500) NOT NULL,
  `user_need_change_pass` smallint(6) NOT NULL DEFAULT 1,
  `user_last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `mstr_user`
--

INSERT INTO `mstr_user` (`id_pk_user`, `user_id`, `user_name`, `user_password`, `user_email`, `user_role`, `user_notes`, `user_need_change_pass`, `user_last_login`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'joshuanatan', 'Joshua Natan', '9db39b4861a9e3c7d367d71064a6b6eefde898f15a4f98168477a33f5388c63d', 'joshuanatan.jn@gmail.com', 'ADMINISTRATOR', '-', 0, '2023-11-28 22:09:13', '0000-00-00 00:00:00', '2023-11-28 22:09:13', '0000-00-00 00:00:00', NULL, NULL, NULL),
(2, 'kenneth', 'Kenneth', '626a372917b73f92d3ea24e813bc4fc1e9783ed3a1c100247f6f83097e1ce6bf', 'kenneth@dsa.com', 'NON ADMINISTRATOR', '-', 0, '2023-11-26 23:12:16', '2023-11-26 23:11:38', '2023-11-27 01:16:44', '2023-11-27 01:16:44', 1, NULL, NULL),
(3, 'kenneth', 'Kenneth', 'bc351c00bdb84fcc07f376278772405b45b140b6d84e48a586898e3ab249a5b8', 'kenneth@dsa.com', 'ADMINISTRATOR', '-', 1, NULL, '2023-11-27 01:20:50', '2023-11-27 01:20:50', '0000-00-00 00:00:00', 1, NULL, NULL),
(4, '-', 'Michael', '9db39b4861a9e3c7d367d71064a6b6eefde898f15a4f98168477a33f5388c63d', 'mike@dsa.com', 'NON ADMINISTRATOR', '-', 0, '2023-11-28 22:14:42', '2023-11-28 22:12:04', '2023-11-28 22:12:04', '0000-00-00 00:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_log`
--

CREATE TABLE `tbl_product_log` (
  `id_pk_product_log` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `product_log_type` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_product_log`
--

INSERT INTO `tbl_product_log` (`id_pk_product_log`, `product_id`, `product_log_type`, `created_at`, `created_by`) VALUES
(1, '8999908427502', 1, '0000-00-00 00:00:00', 1),
(2, '8999908427502', 1, '0000-00-00 00:00:00', 1),
(3, '8999908427502', 1, '2023-11-27 00:07:56', 1),
(4, '8999908427502', 1, '2023-11-27 00:11:13', 1),
(5, '8999908427502', 1, '2023-11-27 00:13:33', 1),
(6, '8999908427502', 1, '2023-11-27 00:13:42', 1),
(7, '8999908427502', 1, '2023-11-27 00:14:02', 1),
(8, '89999084275028999908', 1, '2023-11-27 00:14:09', 1),
(9, '8999908427502', 1, '2023-11-27 00:14:37', 1),
(10, '8999908427502', 1, '2023-11-27 00:15:38', 1),
(11, '8999908427502', 1, '2023-11-27 00:16:59', 1),
(12, '8999908427502', 1, '2023-11-27 00:17:47', 1),
(13, '8999908427502', 1, '2023-11-27 00:18:28', 1),
(14, '8999908427502', 1, '2023-11-27 00:18:54', 1),
(15, '8999908427502', 1, '2023-11-27 00:19:11', 1),
(16, '8999908427502', 1, '2023-11-27 00:20:24', 1),
(17, '89999084275028999999', 1, '2023-11-27 00:20:28', 1),
(18, '8999908427502', 1, '2023-11-27 00:21:13', 1),
(19, '8999999707859', 1, '2023-11-27 00:21:18', 1),
(20, '8999908427502', 1, '2023-11-27 00:49:06', 1),
(21, '8999908427502', 1, '2023-11-27 00:49:25', 1),
(22, '8999908427502', 1, '2023-11-27 00:50:36', 1),
(23, '8999908427502', 1, '2023-11-27 00:50:45', 1),
(24, '8999999707859', 1, '2023-11-27 00:50:49', 1),
(25, '8999999707859', 1, '2023-11-27 00:50:51', 1),
(26, '8999999707859', 1, '2023-11-27 00:50:51', 1),
(27, '8999908427502', 1, '2023-11-27 00:50:53', 1),
(28, '8999908427502', 1, '2023-11-27 00:51:14', 1),
(29, '8999908427502', 1, '2023-11-27 00:51:15', 1),
(30, '8999908427502', 1, '2023-11-27 00:51:16', 1),
(31, '8999908427502', 1, '2023-11-27 00:51:16', 1),
(32, '8999908427502', 1, '2023-11-27 00:51:17', 1),
(33, '8999908427502', 1, '2023-11-27 00:51:18', 1),
(34, '8999908427502', 1, '2023-11-27 00:51:19', 1),
(35, '8999908427502', 1, '2023-11-27 00:51:19', 1),
(36, '8999999707859', 1, '2023-11-27 00:51:22', 1),
(37, '8999999707859', 1, '2023-11-27 00:51:22', 1),
(38, '8999999707859', 1, '2023-11-27 00:51:23', 1),
(39, '8999999707859', 1, '2023-11-27 00:51:24', 1),
(40, '8999999707859', 1, '2023-11-27 00:51:24', 1),
(41, '8999999707859', 1, '2023-11-27 00:51:25', 1),
(42, '8999999707859', 1, '2023-11-27 00:51:25', 1),
(43, '8999999707859', -1, '2023-11-27 01:02:12', 1),
(44, '8999999707859', -1, '2023-11-27 01:02:13', 1),
(45, '8999999707859', -1, '2023-11-27 01:02:14', 1),
(46, '8999908427502', -1, '2023-11-27 01:02:22', 1),
(47, '8999908427502', -1, '2023-11-27 01:02:22', 1),
(48, '8999908427502', -1, '2023-11-27 01:02:23', 1),
(49, '8999908427502', -1, '2023-11-27 01:02:24', 1),
(50, '8999908427502', -1, '2023-11-27 01:02:24', 1),
(51, '8999908427502', -1, '2023-04-04 00:00:00', 1),
(52, '8999908427502', -1, '2023-04-04 00:00:00', 1),
(53, '8999908427502', -1, '2023-04-04 00:00:00', 1),
(54, '8999999707859', -1, '2023-04-04 00:00:00', 1),
(55, '8999999707859', -1, '2023-04-04 00:00:00', 1),
(56, '8999999707859', -1, '2023-04-04 00:00:00', 1),
(57, '8999999707859', -1, '2023-04-04 00:00:00', 1),
(58, '8999999707859', 1, '2023-04-04 00:00:00', 1),
(59, '8999999707859', 1, '2023-04-04 00:00:00', 1),
(60, '8999999707859', 1, '2023-04-04 00:00:00', 1),
(61, '8999999707859', 1, '2023-04-04 00:00:00', 1),
(62, '8999999707859', 1, '2023-04-04 00:00:00', 1),
(63, '8999999707859', -1, '2023-04-04 00:00:00', 1),
(64, '8999999707859', -1, '2023-04-04 00:00:00', 1),
(65, '8999999707859', -1, '2023-11-28 00:18:03', 1),
(66, '8999999707859', -1, '2023-11-28 00:18:04', 1),
(67, '8999999707859', 1, '2023-11-28 00:18:09', 1),
(68, '8999999707859', 1, '2023-11-28 00:18:10', 1),
(69, '8992936115014', 1, '2023-11-28 22:02:41', 1),
(70, '8999999707859', -1, '2023-11-28 22:05:46', 1),
(71, '8992936115014', -1, '2023-11-28 22:05:49', 1),
(72, '8999999707859', -1, '2023-11-28 22:05:51', 1),
(73, '8999908427502', 1, '2023-11-28 22:18:55', 4),
(74, '8999908427502', 1, '2023-11-28 22:19:19', 4),
(75, '8999908427502', 1, '2023-11-28 22:19:20', 4),
(76, '8999908427502', 1, '2023-11-28 22:19:21', 4),
(77, '8999908427502', 1, '2023-11-28 22:19:22', 4),
(78, '8999908427502', 1, '2023-11-28 22:19:22', 4),
(79, '8999908427502', 1, '2023-11-28 22:19:24', 4),
(80, '8999908427502', 1, '2023-11-28 22:19:24', 4),
(81, '8999908427502', 1, '2023-11-28 22:19:26', 4),
(82, '8999908427502', 1, '2023-11-28 22:19:27', 4),
(83, '8999908427502', 1, '2023-11-28 22:19:28', 4),
(84, '8992936115014', 1, '2023-11-28 22:19:41', 4),
(85, '8999999707859', 1, '2023-11-28 22:19:53', 4),
(86, '8999999707859', 1, '2023-11-28 22:19:55', 4),
(87, '8999999707859', 1, '2023-11-28 22:19:56', 4),
(88, '8999999707859', 1, '2023-11-28 22:19:56', 4),
(89, '8999999707859', 1, '2023-11-28 22:20:01', 4),
(90, '8999999707859', -1, '2023-11-28 22:20:14', 4),
(91, '8999999707859', -1, '2023-11-28 22:20:17', 4),
(92, '8999999707859', -1, '2023-11-28 22:20:19', 4),
(93, '8992695100207', 1, '2023-11-28 22:53:34', 4),
(94, '8992695100207', 1, '2023-11-28 22:54:01', 4),
(95, '8992695100207', 1, '2023-11-28 22:54:27', 4),
(96, '8992695100207', 1, '2023-11-28 22:54:28', 4),
(97, '8992695100207', 1, '2023-11-28 22:54:29', 4),
(98, '8992695100207', 1, '2023-11-28 22:54:33', 4),
(99, '8992695100207', 1, '2023-11-28 22:54:34', 4),
(100, '8992695100207', -1, '2023-11-28 22:55:20', 4),
(101, '8992695100207', -1, '2023-11-28 22:55:21', 4),
(102, '8992695100207', -1, '2023-11-28 22:55:22', 4),
(103, '8992695100207', -1, '2023-11-28 22:55:23', 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_monthly_count_in`
-- (See below for the actual view)
--
CREATE TABLE `v_monthly_count_in` (
`month_name` varchar(3)
,`count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_monthly_count_out`
-- (See below for the actual view)
--
CREATE TABLE `v_monthly_count_out` (
`month_name` varchar(3)
,`count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_product_log_std`
-- (See below for the actual view)
--
CREATE TABLE `v_product_log_std` (
`id_pk_product_log` int(10) unsigned
,`product_id` varchar(20)
,`product_name` varchar(100)
,`product_log_type` varchar(9)
,`created_at` datetime
,`user_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_monthly_count_in`
--
DROP TABLE IF EXISTS `v_monthly_count_in`;

CREATE VIEW `v_monthly_count_in`  AS   (select `t_month`.`month_name` AS `month_name`,ifnull(`t_prod_log`.`count`,0) AS `count` from ((select 'Jan' AS `month_name`,1 AS `month` union select 'Feb' AS `Feb`,2 AS `2` union select 'Mar' AS `Mar`,3 AS `3` union select 'Apr' AS `Apr`,4 AS `4` union select 'May' AS `May`,5 AS `5` union select 'Jun' AS `Jun`,6 AS `6` union select 'Jul' AS `Jul`,7 AS `7` union select 'Aug' AS `Aug`,8 AS `8` union select 'Sep' AS `Sep`,9 AS `9` union select 'Oct' AS `Oct`,10 AS `10` union select 'Nov' AS `Nov`,11 AS `11` union select 'Dec' AS `Dec`,12 AS `12`) `t_month` left join (select count(`tbl_product_log`.`id_pk_product_log`) AS `count`,`tbl_product_log`.`product_log_type` AS `product_log_type`,month(`tbl_product_log`.`created_at`) AS `log_month` from `tbl_product_log` where `tbl_product_log`.`product_log_type` = 1 group by month(`tbl_product_log`.`created_at`)) `t_prod_log` on(`t_prod_log`.`log_month` = `t_month`.`month`)))  ;

-- --------------------------------------------------------

--
-- Structure for view `v_monthly_count_out`
--
DROP TABLE IF EXISTS `v_monthly_count_out`;

CREATE VIEW `v_monthly_count_out`  AS   (select `t_month`.`month_name` AS `month_name`,ifnull(`t_prod_log`.`count`,0) AS `count` from ((select 'Jan' AS `month_name`,1 AS `month` union select 'Feb' AS `Feb`,2 AS `2` union select 'Mar' AS `Mar`,3 AS `3` union select 'Apr' AS `Apr`,4 AS `4` union select 'May' AS `May`,5 AS `5` union select 'Jun' AS `Jun`,6 AS `6` union select 'Jul' AS `Jul`,7 AS `7` union select 'Aug' AS `Aug`,8 AS `8` union select 'Sep' AS `Sep`,9 AS `9` union select 'Oct' AS `Oct`,10 AS `10` union select 'Nov' AS `Nov`,11 AS `11` union select 'Dec' AS `Dec`,12 AS `12`) `t_month` left join (select count(`tbl_product_log`.`id_pk_product_log`) AS `count`,`tbl_product_log`.`product_log_type` AS `product_log_type`,month(`tbl_product_log`.`created_at`) AS `log_month` from `tbl_product_log` where `tbl_product_log`.`product_log_type` = -1 group by month(`tbl_product_log`.`created_at`)) `t_prod_log` on(`t_prod_log`.`log_month` = `t_month`.`month`)))  ;

-- --------------------------------------------------------

--
-- Structure for view `v_product_log_std`
--
DROP TABLE IF EXISTS `v_product_log_std`;

CREATE VIEW `v_product_log_std`  AS   (select `tbl_product_log`.`id_pk_product_log` AS `id_pk_product_log`,`tbl_product_log`.`product_id` AS `product_id`,`mstr_product`.`product_name` AS `product_name`,if(`tbl_product_log`.`product_log_type` = 1,'Stock In','Stock Out') AS `product_log_type`,`tbl_product_log`.`created_at` AS `created_at`,`mstr_user`.`user_name` AS `user_name` from ((`tbl_product_log` join `mstr_product` on(`mstr_product`.`product_id` = `tbl_product_log`.`product_id`)) join `mstr_user` on(`mstr_user`.`id_pk_user` = `tbl_product_log`.`created_by`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_product_log`
--
ALTER TABLE `tbl_product_log`
  ADD PRIMARY KEY (`id_pk_product_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mstr_product`
--
ALTER TABLE `mstr_product`
  MODIFY `id_pk_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mstr_user`
--
ALTER TABLE `mstr_user`
  MODIFY `id_pk_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product_log`
--
ALTER TABLE `tbl_product_log`
  MODIFY `id_pk_product_log` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
