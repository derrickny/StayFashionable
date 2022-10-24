-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 09:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stayfashionable`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_users`
--

CREATE TABLE `api_users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` enum('male','female','','') NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_users`
--

INSERT INTO `api_users` (`user_id`, `username`, `password`, `email`, `gender`, `created_on`) VALUES
(2, 'nyaga', '$2y$10$YRkGslv3i1XDKttNxBrBLuBHkjMRLzRpj6G1nv0/M52DLKFHIQpTC', 'melvin120@icloud.com', 'male', '2022-01-23 17:25:17'),
(3, 'wambui', '$2y$10$XjzO2SyuXRag6xiPTYje3O5LVlZnM5ekGwzVELn8O4RqvS/2QIfL6', 'wakesho@icloud.com', 'male', '2022-01-27 07:40:00'),
(4, 'wendo', '$2y$10$FARigJ1PZJ2gvoKYGMuIW.uaINU2NUb98BJOL8t/1L490VghWCRWS', 'wendo100@gmail.com', 'male', '2022-01-27 08:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `access_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`access_token`, `client_id`, `user_id`, `expires`, `scope`) VALUES
('031efb7864fcd0ac2a37cbea2fd576b29695fc36', 'testclient', '4', '2022-01-27 00:04:41', NULL),
('0495bd1c11631fa8ef02856c40d6d405e7695544', 'testclient', 'derricknyaga', '2022-01-07 05:27:59', 'app'),
('1e90946424a37b59bd4337e09ea0ff4bc1ef5d6b', 'testclient', 'derricknyaga', '2022-01-07 07:06:00', 'app'),
('3bc4099cdd4a941bf869d920b17c3cd61fc326d3', 'testclient', '30', '2022-01-09 06:33:09', NULL),
('4840e209e04b2ecbe49802c7dd98d41fc2a28f54', 'testclient', '30', '2022-01-08 03:29:45', NULL),
('52029bb5e2fe053e388465c4f9ee323859b0d278', 'testclient', '3', '2022-01-26 23:41:42', NULL),
('67985450e0f0ea5bb8947883c48381cfe87a35d4', 'testclient', '30', '2022-01-09 05:28:56', NULL),
('70472393b70c0caae4290d567dd66a453c423666', 'testclient', '30', '2022-01-07 10:54:52', NULL),
('882de081d7aaf8bfa6e104da4787d52238b905b1', 'testclient', '30', '2022-01-08 03:25:28', NULL),
('89b046570c4ab7fd903e9a02d2a610094fb6f6ef', 'testclient', '30', '2022-01-07 09:29:53', NULL),
('8b1a97265c1cb8b19063f5739a64b0642c21b260', 'testclient', '36', '2022-01-09 08:02:45', NULL),
('910439f1e74638262101775b25b87a745072ef4b', 'testclient', 'derricknyaga', '2022-01-07 05:23:55', 'app'),
('9a45c89c13f95cf755a60f1e9ee5757be34ac188', 'testclient', 'derricknyaga', '2022-01-07 06:52:15', 'app'),
('a93d27c5c09360f3a85f0914f6645a92aded58f2', 'testclient', '36', '2022-01-11 02:16:13', NULL),
('b2543e86e5489fce4188c4d8c8acc71d4571a642', 'testclient', '30', '2022-01-08 12:28:17', NULL),
('babe362bb0bdc2bc40b893ef6d36caff16f8db78', 'testclient', '30', '2022-01-08 03:25:19', NULL),
('be60c86dec8fd0757b7805426adfe68fc1682b49', 'testclient', '30', '2022-01-09 05:46:43', NULL),
('e4f5aa1c1da57b3831eebc766d236e6b865309f5', 'testclient', '2', '2022-01-23 09:25:57', NULL),
('ea3a1bdebe40975a9e7f1b7fcaefc0009c4a3fc3', 'testclient', 'derricknyaga', '2022-01-07 06:38:06', 'app'),
('f99bd8dde6d6840504db6ad00dafdbc0cbbddc53', 'testclient', '36', '2022-01-11 02:14:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_authorization_codes`
--

CREATE TABLE `oauth_authorization_codes` (
  `authorization_code` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `redirect_uri` varchar(2000) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(4000) DEFAULT NULL,
  `id_token` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `client_id` varchar(80) NOT NULL,
  `client_secret` varchar(80) DEFAULT NULL,
  `redirect_uri` varchar(2000) DEFAULT NULL,
  `grant_type` varchar(80) DEFAULT NULL,
  `scope` varchar(4000) DEFAULT NULL,
  `user_id` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`client_id`, `client_secret`, `redirect_uri`, `grant_type`, `scope`, `user_id`) VALUES
('testclient', 'testsecret', NULL, 'password', 'app', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_jwt`
--

CREATE TABLE `oauth_jwt` (
  `client_id` varchar(80) NOT NULL,
  `subject` varchar(80) DEFAULT NULL,
  `public_key` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `refresh_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`refresh_token`, `client_id`, `user_id`, `expires`, `scope`) VALUES
('0d87b3bf3265abb2546595b93da89f3c7d7a8a80', 'testclient', '3', '2022-02-09 22:41:42', NULL),
('26f6d8b7335b499496c12d9441d84e0c07329acd', 'testclient', '30', '2022-01-22 02:29:45', NULL),
('2f0ab1128d9701098c1c954c375a4fe00fc8b54d', 'testclient', '30', '2022-01-23 04:46:43', NULL),
('332e17f1abb96159d804f956f784952a34c5025c', 'testclient', '36', '2022-01-23 07:02:45', NULL),
('38af528c01e90d377e64b6d1e8dda0244bac5171', 'testclient', '30', '2022-01-23 04:28:56', NULL),
('4002dbd871059b7170054bab1b355f05472e3a69', 'testclient', '30', '2022-01-23 05:33:09', NULL),
('473433f73b5e06fa2a046b4122be04a1c7683aba', 'testclient', 'derricknyaga', '2022-01-21 05:38:06', 'app'),
('4a008f304b361f9342d74607027425907432892c', 'testclient', '30', '2022-01-21 09:54:52', NULL),
('4c3d06330cc030977ebb663dd058b1693402f50e', 'testclient', 'derricknyaga', '2022-01-21 04:27:59', 'app'),
('61030a863d0133dbbd3158834b4df3b9532db3fa', 'testclient', '4', '2022-02-09 23:04:41', NULL),
('8aaef48a158a2585f9451588a21d3e90a2b78761', 'testclient', '36', '2022-01-25 01:14:41', NULL),
('9d84a0fb1b6a7f809aa9f0a5f60c24e24a00b470', 'testclient', '30', '2022-01-22 02:25:19', NULL),
('af913cc8a77591f877af65239af11fd9ac2435f2', 'testclient', 'derricknyaga', '2022-01-21 06:06:01', 'app'),
('c7f50667c86b19e063d41160d257c0fda06b7b58', 'testclient', '36', '2022-01-25 01:16:13', NULL),
('cfa2a665864bcb7ca5083c45ac7094f6562f61a6', 'testclient', '2', '2022-02-06 08:25:57', NULL),
('d6ec1d397796a271003c1374b9336416a018975b', 'testclient', '30', '2022-01-21 08:29:53', NULL),
('e11d1793abecfdc3976a5f2fd93b8889fff6bc51', 'testclient', 'derricknyaga', '2022-01-21 04:23:55', 'app'),
('fc220c5bf8b0d0038d739aad1af76e659e54d039', 'testclient', '30', '2022-01-22 02:25:28', NULL),
('fd994fd0680091a4b454943e7b7393b1188adb14', 'testclient', '30', '2022-01-22 11:28:17', NULL),
('feb4e73b4ad850970478e943f01efd009e179aee', 'testclient', 'derricknyaga', '2022-01-21 05:52:15', 'app');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_scopes`
--

CREATE TABLE `oauth_scopes` (
  `scope` varchar(80) NOT NULL,
  `is_default` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_users`
--

CREATE TABLE `oauth_users` (
  `username` varchar(80) NOT NULL,
  `password` varchar(80) DEFAULT NULL,
  `first_name` varchar(80) DEFAULT NULL,
  `last_name` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_users`
--

INSERT INTO `oauth_users` (`username`, `password`, `first_name`, `last_name`, `email`, `email_verified`, `scope`) VALUES
('derricknyaga', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'derrick', 'nyaga', 'derricknyaga@gmail.com', 1, 'app');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiproductpaths`
--

CREATE TABLE `tbl_apiproductpaths` (
  `apiproductpath_id` int(11) NOT NULL,
  `path` enum('userdetails','products','transactions','') NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiproducts`
--

CREATE TABLE `tbl_apiproducts` (
  `apiproduct_id` int(11) NOT NULL,
  `productname` enum('userdetails','products','transaction','') NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apitokens`
--

CREATE TABLE `tbl_apitokens` (
  `apitoken_id` int(11) NOT NULL,
  `api_userid` int(11) NOT NULL,
  `api_productid` int(11) NOT NULL,
  `api_token` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  `expires_on` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiuser`
--

CREATE TABLE `tbl_apiuser` (
  `apiuser_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `key` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apiuser`
--

INSERT INTO `tbl_apiuser` (`apiuser_id`, `username`, `key`, `created_at`, `updated_on`, `added_by`, `is_deleted`) VALUES
(1, 'drake', '61d86c57b6132', '2022-01-07 10:37:43', '0000-00-00 00:00:00', 0, 0),
(2, 'joy', '61d86c5fa4dcd', '2022-01-07 10:37:51', '0000-00-00 00:00:00', 0, 0),
(3, 'joy', '61d86c6005f7b', '2022-01-07 10:37:52', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category_name`, `is_deleted`) VALUES
(1, 'Men', 0),
(2, 'Women', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_amount` varchar(25) NOT NULL,
  `order_status` enum('pending','pending payment','paid','') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `order_amount`, `order_status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 27, '$1530', 'paid', '2022-01-09 14:53:40', '2022-01-09 14:53:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE `tbl_orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` varchar(25) NOT NULL,
  `order_quantity` int(11) NOT NULL DEFAULT 1,
  `size` varchar(25) NOT NULL,
  `orderdetails_total` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderdetails`
--

INSERT INTO `tbl_orderdetails` (`orderdetails_id`, `product_id`, `product_price`, `order_quantity`, `size`, `orderdetails_total`, `created_at`, `updated_at`, `is_deleted`) VALUES
(2, 8, '$1530', 1, 'medium', '$1530', '2022-01-09 14:56:11', '2022-01-09 14:56:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paymenttypes`
--

CREATE TABLE `tbl_paymenttypes` (
  `paymanttype_id` int(11) NOT NULL,
  `paymenttype_name` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_price` varchar(25) NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `subcategory` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_description`, `product_image`, `product_price`, `available_quantity`, `subcategory`, `created_at`, `updated_at`, `added_by`, `is_deleted`) VALUES
(1, '   louis vuitton', 'expensive taste', 'lv bag.jpg', '$1400', 20, 'Womenscasual', '2022-01-08 18:26:00', '0000-00-00 00:00:00', 0, 0),
(3, 'Gucci Sling Bag', 'designed for luxury', 'pi2.jpg', '$2000', 8, 'WomenFormal', '2022-01-08 18:47:00', '0000-00-00 00:00:00', 0, 0),
(4, 'Yeezy v350 v2', 'Comfort and luxury', 'pi1.jpg', '$250', 25, 'MenCasual', '2022-01-08 18:51:00', '0000-00-00 00:00:00', 0, 0),
(5, 'Levis Jeans', 'skinny fit', 'pi4.jpg', '$70', 30, 'MenCasual', '2022-01-08 18:53:00', '0000-00-00 00:00:00', 0, 0),
(7, 'Denim', 'for that warmth', 'pi3.jpg', '$200', 15, 'MenCasual', '2022-01-08 18:57:00', '0000-00-00 00:00:00', 0, 0),
(10, 'Evening_wear', 'for warmth', 'pro.jpg', '$1500', 20, 'Men-universal_clothes', '2022-01-27 10:59:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productimages`
--

CREATE TABLE `tbl_productimages` (
  `productimages_id` int(11) NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`, `is_deleted`) VALUES
(1, 'User', 0),
(2, 'Admin', 0),
(3, 'API User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE `tbl_subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(25) NOT NULL,
  `category_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategories`
--

INSERT INTO `tbl_subcategories` (`subcategory_id`, `subcategory_name`, `category_id`, `is_deleted`) VALUES
(6, 'Men-universal_clothes', 1, 0),
(7, 'Womensports', 2, 0),
(8, 'MenCasual', 1, 0),
(9, 'MenSports', 1, 0),
(10, 'WomenFormal', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlogins`
--

CREATE TABLE `tbl_userlogins` (
  `userlogin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(25) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `gender` enum('male','female','','') NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `firstname`, `lastname`, `email`, `gender`, `username`, `password`, `role`, `is_deleted`) VALUES
(26, 'drake', 'voke', 'cokedreezy@icloud.com', 'male', 'drake', '$2y$10$7tErvqRrp07aIojNpzbgA.LgwIznXcgPPKqnngXN7ecj/9i9G.Sv.', 2, 0),
(27, 'joho', 'mwizi', 'joho@gmail.comm', 'male', 'joho', '$2y$10$QXpMWHI4i0qhFx2RJvbRhuW2ZDPX1jS0N3nxBh2RexXSNL1o2JA3a', 1, 0),
(29, 'sam', 'smith', 'samsmith@icloud.com', 'male', 'samsmith', '123456', 3, 0),
(30, 'Kate', 'Sidede', 'kattie123@icloud.com', 'female', 'kattie', '$2y$10$08UkVTnUEiGKiZNudq/Riezbwm5ej5GMAV8xjXL7qUegxQHn6Rhui', 2, 0),
(31, 'Neymer', 'Santos', 'neymer23@icloud.com', 'male', 'NeymerJr', '$2y$10$AvhvkS7puGCLyQYzTL00c.A5oUINEzCdEZnBNxlc2SfkhZThv9tyy', 3, 0),
(34, 'wafula', 'simon', 'simon@gmail.com', 'male', 'simon', '$2y$10$poTsTM8fN.kDn0aRxx3cW.f10h.cEsx4ax4wTVM3xqonneX2SazC2', 1, 0),
(36, 'wes', 'maina', 'maina11@icloud.com', 'male', 'maina11', '$2y$10$pm2OMmECfeYhkLxDnM7ld.RaL5LE.PAuA4rI6Pa6jfgstztPyGDHa', 3, 0),
(38, 'bruce', 'wayene', 'brucewayen@gmail.com', 'male', 'Buyer1', '$2y$10$/E7/H/..iCc36fSwm7AAmOMGXQpLx28nWMeAZn6DLswRLKoDIRlV.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet`
--

CREATE TABLE `tbl_wallet` (
  `wallet_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount_available` double NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_users`
--
ALTER TABLE `api_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`access_token`);

--
-- Indexes for table `oauth_authorization_codes`
--
ALTER TABLE `oauth_authorization_codes`
  ADD PRIMARY KEY (`authorization_code`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`refresh_token`);

--
-- Indexes for table `oauth_scopes`
--
ALTER TABLE `oauth_scopes`
  ADD PRIMARY KEY (`scope`);

--
-- Indexes for table `oauth_users`
--
ALTER TABLE `oauth_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_apiproductpaths`
--
ALTER TABLE `tbl_apiproductpaths`
  ADD PRIMARY KEY (`apiproductpath_id`);

--
-- Indexes for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  ADD PRIMARY KEY (`apiproduct_id`);

--
-- Indexes for table `tbl_apitokens`
--
ALTER TABLE `tbl_apitokens`
  ADD PRIMARY KEY (`apitoken_id`);

--
-- Indexes for table `tbl_apiuser`
--
ALTER TABLE `tbl_apiuser`
  ADD PRIMARY KEY (`apiuser_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`);

--
-- Indexes for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  ADD PRIMARY KEY (`paymanttype_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  ADD PRIMARY KEY (`productimages_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  ADD PRIMARY KEY (`userlogin_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_users`
--
ALTER TABLE `api_users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_apiproductpaths`
--
ALTER TABLE `tbl_apiproductpaths`
  MODIFY `apiproductpath_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  MODIFY `apiproduct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_apitokens`
--
ALTER TABLE `tbl_apitokens`
  MODIFY `apitoken_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_apiuser`
--
ALTER TABLE `tbl_apiuser`
  MODIFY `apiuser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  MODIFY `paymanttype_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  MODIFY `productimages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  MODIFY `userlogin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD CONSTRAINT `tbl_subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`category_id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tbl_roles` (`role_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
