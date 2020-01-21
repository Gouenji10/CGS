-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2020 at 05:19 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cgs_categories`
--

CREATE TABLE `cgs_categories` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_categories`
--

INSERT INTO `cgs_categories` (`id`, `name`) VALUES
(1, 'Plastic Items'),
(2, 'Gas Items'),
(3, 'Home Decor '),
(4, 'Kitchen utensil'),
(5, 'Electronics  Items');

-- --------------------------------------------------------

--
-- Table structure for table `cgs_customer`
--

CREATE TABLE `cgs_customer` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `balance` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_customer`
--

INSERT INTO `cgs_customer` (`id`, `name`, `address`, `phone`, `status`, `balance`) VALUES
(1, 'Keshav Rana', 'Rana path', '9862265766', '2', '1800'),
(2, '2 Brother Restaurant ', 'Rangashala Road', '9825425195', '2', '15190'),
(3, 'Amash Restaurant ', 'Rangashala Road', '9812931168', '1', '0'),
(4, 'Sita Rana ', 'Rangashala Road', 'N|A', '2', '1550'),
(5, 'Hari Tharu', 'Ranigunj', 'N|A', '2', '2110'),
(6, 'Ram Chandara Yadav', 'Pargatinagar', 'N|A', '2', '4985'),
(7, 'Buddhi Ram Chaudhary', 'N|A', '9807477477', '2', '5900'),
(8, 'Deepak (Paurak Nirman Sewa)', 'Pangeni path', 'N|A', '2', '17745'),
(9, 'Deepak & Kumod', 'N|A', 'N|A', '2', '4420'),
(10, 'Newari Kahaja Ghar', 'Rangashala Road', 'N|A', '2', '3260'),
(11, 'Ajay Poudel', 'Shivpur', '9867036299', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cgs_customer_transactions`
--

CREATE TABLE `cgs_customer_transactions` (
  `id` int(10) NOT NULL,
  `date` varchar(256) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `sales_type` text NOT NULL,
  `transaction_type` text NOT NULL,
  `cash_amount` varchar(256) NOT NULL,
  `credit_amount` varchar(256) NOT NULL,
  `balance` varchar(256) NOT NULL,
  `incoming_cylinder` varchar(256) NOT NULL,
  `outgoing_cylinder` varchar(256) NOT NULL,
  `product_id` varchar(256) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_customer_transactions`
--

INSERT INTO `cgs_customer_transactions` (`id`, `date`, `customer_id`, `sales_type`, `transaction_type`, `cash_amount`, `credit_amount`, `balance`, `incoming_cylinder`, `outgoing_cylinder`, `product_id`, `product_name`, `comments`) VALUES
(1, '2076/10/4', 2, 'gas_sales', 'credit', '', '1375', '1375', '1', '1', '', '', ''),
(2, '2076/10/4', 2, 'product_sales', 'credit', '', '60', '1435', '', '', '0', 'Phynal', ''),
(3, '2076/10/4', 2, 'product_sales', 'credit', '', '3200', '4635', '', '', '', 'Large Chair', ''),
(4, '2076/06/28', 2, 'gas_sales', 'credit', '', '2750', '7385', '1', '1', '', '', ''),
(5, '2076/07/26', 2, 'gas_sales', 'credit', '', '1375', '8760', '1', '1', '', '', ''),
(6, '2076/08/23', 2, 'gas_sales', 'credit', '', '1375', '10135', '1', '1', '', '', ''),
(7, '2076/10/4', 2, 'gas_sales', 'credit', '', '1375', '11510', '1', '1', '', '', ''),
(8, '2076/10/4', 2, 'product_sales', 'credit', '', '2200', '13710', '', '', '', 'Round Table', ''),
(9, '2076/10/4', 2, 'product_sales', 'credit', '', '330', '14040', '', '', '', 'Medium Container', ''),
(10, '2076/10/4', 2, 'product_sales', 'credit', '', '75', '14115', '', '', '', 'Odonil', ''),
(11, '2076/10/4', 2, 'product_sales', 'credit', '', '200', '14315', '', '', '', 'Plastic Spoon', ''),
(12, '2076/10/4', 2, 'gas_sales', 'credit', '', '1375', '15690', '1', '1', '', '', ''),
(13, '2076/10/4', 2, 'gas_sales', 'credit', '', '1375', '17065', '1', '1', '', '', ''),
(14, '2076/10/4', 2, 'gas_sales', 'credit', '', '1375', '18440', '0', '1', '', '', ''),
(15, '2076/10/4', 2, 'cash_received', '', '3250', '', '15190', '', '', '', '', 'Wifi payment'),
(16, '2076/10/4', 1, 'gas_sales', 'credit', '', '1400', '1400', '0', '1', '', '', ''),
(17, '2076/10/4', 1, 'gas_sales', 'cash', '1400', '', '1400', '1', '1', '', '', ''),
(18, '2076/10/4', 1, 'gas_sales', 'cash', '1400', '', '1400', '0', '1', '', '', ''),
(19, '2076/10/4', 1, 'product_sales', 'credit', '', '1350', '2750', '', '', '', 'Bhatti Chulo No:2', ''),
(20, '2076/10/4', 1, 'product_sales', 'credit', '', '150', '2900', '', '', '', 'Bhatti Rod', ''),
(21, '2076/10/4', 1, 'product_sales', 'credit', '', '200', '3100', '', '', '', 'Bhatii On/Off', ''),
(22, '2076/10/4', 1, 'product_sales', 'credit', '', '400', '3500', '', '', '', 'Bhatti Pipe', ''),
(23, '2076/10/4', 1, 'product_sales', 'credit', '', '300', '3800', '', '', '', 'Bhatti Regulator', ''),
(24, '2076/10/4', 1, 'cash_received', '', '2000', '', '1800', '', '', '', '', 'Cash Received'),
(25, '2076/10/4', 4, 'product_sales', 'credit', '', '1700', '1700', '', '', '', '1pcs - 18X15 Paal ', ''),
(26, '2076/10/4', 4, 'product_sales', 'credit', '', '2400', '4100', '', '', '', '2pcs 12X15 paal', ''),
(27, '2076/10/4', 4, 'product_sales', 'credit', '', '200', '4300', '', '', '', '1 Roll - Sutli Rasi', ''),
(28, '2076/10/4', 4, 'gas_sales', 'credit', '', '1375', '5675', '3', '1', '', '', ''),
(29, '2076/10/4', 4, 'product_sales', 'credit', '', '1500', '7175', '', '', '', '2pcs - 9X12 Paal', ''),
(30, '2076/10/4', 4, 'gas_sales', 'credit', '', '1375', '8550', '1', '1', '', '', ''),
(31, '2076/10/4', 4, 'cash_received', '', '7000', '', '1550', '', '', '', '', 'Cash Received'),
(32, '2076/10/4', 5, 'product_sales', 'credit', '', '600', '600', '', '', '', '6pcs - Parati thal', ''),
(33, '2076/10/4', 5, 'product_sales', 'credit', '', '720', '1320', '', '', '', '4meter - Pform', ''),
(34, '2076/10/4', 5, 'product_sales', 'credit', '', '1800', '3120', '', '', '', 'Laxmi Chulo', ''),
(35, '2076/10/4', 5, 'product_sales', 'credit', '', '400', '3520', '', '', '', 'Hari Regulator', ''),
(36, '2076/10/4', 5, 'product_sales', 'credit', '', '160', '3680', '', '', '', '2meter - Gas Pipe', ''),
(37, '2076/10/4', 5, 'product_sales', 'credit', '', '80', '3760', '', '', '', 'Gas Lighter', ''),
(38, '2076/10/4', 5, 'cash_received', '', '1650', '', '2110', '', '', '', '', 'Trishul Cylinder Received'),
(39, '2076/06/17', 6, 'product_sales', 'credit', '', '710', '710', '', '', '', 'Old Balance', ''),
(40, '2076/08/16', 6, 'gas_sales', 'credit', '', '1375', '2085', '3', '3', '', '', ''),
(41, '2076/09/14', 6, 'gas_sales', 'credit', '', '1375', '3460', '1', '1', '', '', ''),
(42, '2076/09/24', 6, 'gas_sales', 'credit', '', '1375', '4835', '3', '3', '', '', ''),
(43, '2076/10/4', 6, 'product_sales', 'credit', '', '150', '4985', '', '', '', '40mm Padlock', ''),
(44, '2076/05/27', 7, 'gas_sales', 'credit', '', '2750', '2750', '1', '1', '', '', ''),
(45, '2076/05/27', 7, 'product_sales', 'credit', '', '400', '3150', '', '', '', 'Gas maintenance ', ''),
(46, '2076/06/08', 7, 'gas_sales', 'credit', '', '1375', '4525', '2', '2', '', '', ''),
(47, '2076/06/17', 7, 'gas_sales', 'credit', '', '1375', '5900', '3', '3', '', '', ''),
(48, '2076/08/19', 8, 'product_sales', 'credit', '', '8845', '8845', '', '', '', 'Old Balance', ''),
(49, '2076/08/22', 8, 'product_sales', 'credit', '', '3500', '12345', '', '', '', 'New Cylinder ', ''),
(50, '2076/10/4', 8, 'gas_sales', 'credit', '', '1350', '13695', '2', '2', '', '', ''),
(51, '2076/09/03', 8, 'gas_sales', 'credit', '', '1350', '15045', '4', '4', '', '', ''),
(52, '2076/10/4', 8, 'gas_sales', 'credit', '', '1350', '16395', '2', '4', '', '', ''),
(53, '2076/10/4', 8, 'gas_sales', 'credit', '', '1350', '17745', '2', '2', '', '', ''),
(54, '2076/10/4', 9, 'product_sales', 'credit', '', '4020', '4020', '', '', '', 'Details in Bill ', ''),
(55, '2076/10/4', 9, 'product_sales', 'credit', '', '400', '4420', '', '', '', '1pcs - 6X9 paal', ''),
(56, '2076/10/4', 10, 'product_sales', 'credit', '', '430', '430', '', '', '', 'Old Balance', ''),
(57, '2076/10/4', 10, 'product_sales', 'credit', '', '550', '980', '', '', '', 'Gem Box Set', ''),
(58, '2076/10/4', 10, 'product_sales', 'credit', '', '430', '1410', '', '', '', 'Bottle Set', ''),
(59, '2076/10/4', 10, 'gas_sales', 'credit', '', '1400', '2810', '3', '3', '', '', ''),
(60, '2076/10/4', 10, 'product_sales', 'credit', '', '550', '3360', '', '', '', 'Butcher Knife ', ''),
(61, '2076/10/4', 10, 'product_sales', 'credit', '', '175', '3535', '', '', '', '(Ask Suman)', ''),
(62, '2076/10/4', 10, 'product_sales', 'credit', '', '225', '3760', '', '', '', '(Ask Suman)', ''),
(63, '2076/10/4', 10, 'cash_received', '', '500', '', '3260', '', '', '', '', 'Cash Received');

-- --------------------------------------------------------

--
-- Table structure for table `cgs_cylinder_list`
--

CREATE TABLE `cgs_cylinder_list` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_cylinder_list`
--

INSERT INTO `cgs_cylinder_list` (`id`, `name`) VALUES
(1, 'Siddhartha'),
(2, 'Butwal'),
(3, 'Lumbini'),
(4, 'Baba'),
(5, 'Janaki'),
(6, 'Saibaba'),
(12, 'Aarati'),
(13, 'HP'),
(14, 'Namaste');

-- --------------------------------------------------------

--
-- Table structure for table `cgs_parties`
--

CREATE TABLE `cgs_parties` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_parties`
--

INSERT INTO `cgs_parties` (`id`, `name`, `address`, `phone`) VALUES
(1, 'J.K. Stores', 'Nepalgunj road', 'N|A'),
(2, 'New Rishi Keshav Interprizes', 'Kalikanagar', '071-415890'),
(3, 'Sahan Interprizes', 'Amarpath', 'N|A'),
(4, 'Azida Aarfiya Traders', 'Nepalgunj road', 'N|A');

-- --------------------------------------------------------

--
-- Table structure for table `cgs_parties_transaction`
--

CREATE TABLE `cgs_parties_transaction` (
  `id` int(10) NOT NULL,
  `store_id` int(10) NOT NULL,
  `date` varchar(256) NOT NULL,
  `details` text NOT NULL,
  `debit` varchar(256) NOT NULL,
  `credit` varchar(256) NOT NULL,
  `balance` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_parties_transaction`
--

INSERT INTO `cgs_parties_transaction` (`id`, `store_id`, `date`, `details`, `debit`, `credit`, `balance`) VALUES
(1, 1, '2076/07/07', 'Goods Received', '58936', '0', '58936'),
(2, 1, '2076/08/05', 'Cash Payment', '0', '15000', '43936'),
(3, 1, '2076/09/05', 'Cash Payment ', '0', '15000', '28936'),
(4, 2, '2076/07/01', 'Balance Amount Till Today', '103040', '0', '103040'),
(39, 2, '2076/07/05', 'Payment Through Cheque', '0', '50000', '53040'),
(40, 2, '2076/07/07', 'Gas Refill Bill No: 38', '45605', '0', '98645'),
(41, 2, '2076/07/17', 'Cash Payment', '0', '45605', '53040'),
(42, 2, '2076/07/18', 'Gas Refill Bill No: 32', '32700', '0', '85740'),
(43, 2, '2076/07/22', 'Gas Refill Bill No: 102', '45605', '0', '131345'),
(44, 2, '2076/07/25', 'Gas Refill Bill No: 155', '39240', '0', '170585'),
(45, 2, '2076/07/26', 'Payment Through Cheque', '0', '80000', '90585'),
(46, 2, '2076/07/27', 'Goods Received  Bill No: 189', '13000', '0', '103585'),
(47, 2, '2076/07/28', 'Gas Refill Bill No: 009', '20848', '0', '124433'),
(48, 2, '2076/08/02', 'Payment Through Cheque', '0', '80000', '44433'),
(49, 2, '2076/08/02', 'Gas Refill Bill No: 72', '10424', '0', '54857'),
(50, 2, '2076/08/02', 'Gas Refill Bill No: 78', '9156', '0', '64013'),
(51, 2, '2076/08/03', 'Gas Refill Bill No: 87', '13080', '0', '77093'),
(52, 2, '2076/08/05', 'Gas Refill Bill No: 133', '39090', '0', '116183'),
(53, 2, '2076/08/10', 'Payment Through Cheque (check  this one once in bank )', '0', '50000', '66183'),
(54, 2, '2076/08/10', 'Bhur Bhure Thulo Bill No: 154', '1600', '0', '67783'),
(55, 2, '2076/08/11', 'Gas Refill Bill No: 167 (Search this bill )', '26160', '0', '93943'),
(56, 2, '2076/08/13', 'Gas Refill and Gas Stove Bill No: 182', '36780', '0', '130723'),
(57, 2, '2076/08/16', 'Gas Refill Bill No: 009', '39090', '0', '169813'),
(58, 2, '2076/08/18', 'Cash Payment', '0', '80000', '89813'),
(59, 2, '2076/08/19', 'Gas Refill Bill No: 012', '32625', '0', '122438'),
(60, 2, '2076/08/22', 'Gas Refill Bill No: 087', '30030', '0', '152468'),
(61, 2, '2076/08/24', 'Payment Through Cheque ', '0', '80000', '72468'),
(62, 2, '2076/08/25', 'Gas Refill Bill No: 046', '71130', '0', '143598'),
(63, 2, '2076/08/27', 'Gas Geyser', '20800', '0', '164398'),
(64, 2, '2076/09/02', 'Payment Through Cheque ', '0', '80000', '84398'),
(65, 2, '2076/09/02', 'Gas Refill Bill No: 103', '43440', '0', '127838'),
(66, 2, '2076/09/06', 'Gas Refill (Bill Not Found)', '13030', '0', '140868'),
(67, 2, '2076/09/07', 'Gas Refill Bill No: 193', '26060', '0', '166928'),
(68, 2, '2076/09/09', 'Gas Refill Bill No: 180', '70140', '0', '237068'),
(69, 2, '2076/09/13', 'Gas Refill (Bill Not Found)', '52120', '0', '289188'),
(70, 2, '2076/09/13', 'Payment Through Cheque', '0', '100000', '189188'),
(71, 2, '2076/09/18', 'Gas Refill Bill No: 070', '39090', '0', '228278'),
(72, 2, '2076/09/20', 'Payment Through Cheque', '0', '100000', '128278'),
(73, 2, '2076/09/20', 'Gas Refill Bill No: --', '39090', '0', '167368'),
(74, 2, '01/07/2020', 'Payment Through Cheque Aarati ', '0', '50000', '117368'),
(75, 2, '01/10/2020', 'Returned  Gas Gyser', '0', '26000', '91368'),
(76, 2, '01/10/2020', 'Gas Refill Bill No: 166', '39090', '0', '130458');

-- --------------------------------------------------------

--
-- Table structure for table `cgs_products`
--

CREATE TABLE `cgs_products` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `code` varchar(256) NOT NULL,
  `category` int(10) NOT NULL,
  `cost` varchar(256) NOT NULL,
  `selling` varchar(256) NOT NULL,
  `stock` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_products`
--

INSERT INTO `cgs_products` (`id`, `name`, `code`, `category`, `cost`, `selling`, `stock`) VALUES
(1, 'Floor Carpet', 'floor-carpet', 3, '185/meter', '250/meter', '60 meter');

-- --------------------------------------------------------

--
-- Table structure for table `cgs_sales_gas`
--

CREATE TABLE `cgs_sales_gas` (
  `id` int(10) NOT NULL,
  `transaction_id` int(10) NOT NULL,
  `incoming_cylinder` int(10) NOT NULL,
  `outgoing_cylinder` int(10) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_sales_gas`
--

INSERT INTO `cgs_sales_gas` (`id`, `transaction_id`, `incoming_cylinder`, `outgoing_cylinder`, `comments`) VALUES
(1, 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cgs_sales_products`
--

CREATE TABLE `cgs_sales_products` (
  `id` int(10) NOT NULL,
  `transaction_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgs_sales_products`
--

INSERT INTO `cgs_sales_products` (`id`, `transaction_id`, `product_id`, `product_name`) VALUES
(1, 2, 0, 'Phynal');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$XcpPF9YeWG4TDBxzbRFE1ON4gozplYw3f2ItCWF4jel1RJ.RXI6Bm', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1579401286, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cgs_categories`
--
ALTER TABLE `cgs_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgs_customer`
--
ALTER TABLE `cgs_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgs_customer_transactions`
--
ALTER TABLE `cgs_customer_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgs_cylinder_list`
--
ALTER TABLE `cgs_cylinder_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgs_parties`
--
ALTER TABLE `cgs_parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgs_parties_transaction`
--
ALTER TABLE `cgs_parties_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgs_products`
--
ALTER TABLE `cgs_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgs_sales_gas`
--
ALTER TABLE `cgs_sales_gas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgs_sales_products`
--
ALTER TABLE `cgs_sales_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cgs_categories`
--
ALTER TABLE `cgs_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cgs_customer`
--
ALTER TABLE `cgs_customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cgs_customer_transactions`
--
ALTER TABLE `cgs_customer_transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `cgs_cylinder_list`
--
ALTER TABLE `cgs_cylinder_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cgs_parties`
--
ALTER TABLE `cgs_parties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cgs_parties_transaction`
--
ALTER TABLE `cgs_parties_transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `cgs_products`
--
ALTER TABLE `cgs_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cgs_sales_gas`
--
ALTER TABLE `cgs_sales_gas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cgs_sales_products`
--
ALTER TABLE `cgs_sales_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
