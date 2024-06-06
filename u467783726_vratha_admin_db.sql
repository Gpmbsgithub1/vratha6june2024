-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2024 at 05:18 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u467783726_vratha_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `Ordering` int(11) NOT NULL DEFAULT 0,
  `Manufacturing` int(11) NOT NULL DEFAULT 0,
  `Sales` int(11) NOT NULL DEFAULT 0,
  `Expense` int(11) NOT NULL DEFAULT 0,
  `AvailableStock` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `user_type`, `Ordering`, `Manufacturing`, `Sales`, `Expense`, `AvailableStock`) VALUES
(1, 'admin', 'admin@2024', 'Admin', 0, 0, 0, 0, 0),
(35, 'sejal', 'sejal@123', 'Ordering,Expense,Sales', 0, 0, 1, 1, 0),
(36, 'Shruthi', 'shruthi@123', 'Ordering,Expense,Available Stock,Sales', 0, 0, 1, 1, 0),
(83, 'vinay', 'vinay@123', 'Ordering,Expense', 1, 1, 1, 1, 0),
(86, 'Janvi', 'janvi@123', 'Ordering,Manufacturing,Expense,Available Stock', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`) VALUES
(10, 'IDOLS'),
(11, 'TOYS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense`
--

CREATE TABLE `tbl_expense` (
  `id` int(20) NOT NULL,
  `expense_date` date DEFAULT NULL,
  `user` varchar(255) NOT NULL,
  `year` int(70) NOT NULL,
  `month` varchar(255) DEFAULT NULL,
  `date_of_expense` date NOT NULL DEFAULT current_timestamp(),
  `amount` int(80) NOT NULL DEFAULT 0,
  `payment_type` varchar(255) NOT NULL,
  `investment` int(60) NOT NULL,
  `other_investment` int(60) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `spend_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_expense`
--

INSERT INTO `tbl_expense` (`id`, `expense_date`, `user`, `year`, `month`, `date_of_expense`, `amount`, `payment_type`, `investment`, `other_investment`, `purpose`, `status`, `spend_by`) VALUES
(20, '2023-12-15', 'Shruthi', 2023, 'Dec', '2024-03-19', 10000, 'Operations - One time ', 0, 0, 'CA Fee - Registration Purpose\r\n', 'Paid', 'Vinay'),
(23, '2023-12-26', 'Shruthi', 2023, 'Dec', '2024-03-20', 25000, 'Operations', 0, 0, 'Purchase - Advance for Krishna Idol \r\n\r\n', 'Paid', 'Varun'),
(25, '2023-12-29', 'Shruthi', 2023, 'Dec', '2024-03-20', 1498, 'Operations - One time', 0, 0, 'Domain Purchase \r\n\r\n\r\n', 'Paid', 'vinay'),
(26, '2024-01-03', 'Shruthi', 2024, 'Jan', '2024-03-20', 630, 'Operations', 0, 0, 'Transport - Petrol charge\r\n', 'Paid', 'Varun'),
(27, '2024-01-03', 'Shruthi', 2024, 'Jan', '2024-03-20', 140, 'Operations ', 0, 0, 'Transport - Bus charge\r\n', 'Paid', 'Varun'),
(28, '2024-01-03', 'Shruthi', 2024, 'Jan', '2024-03-20', 200, 'Operations - One time', 0, 0, 'Purchase- Agreement Paper for LLP registration\r\n', 'Paid', 'Varun'),
(30, '2024-01-04', 'Shruthi', 2024, 'Jan', '2024-03-20', 50000, 'Operations', 0, 0, 'Purchase- Advance for Krishna Idol \r\n', 'Paid', 'Varun'),
(32, '2024-01-06', 'Shruthi', 2024, 'Jan', '2024-03-20', 1000, 'Operations', 0, 0, 'Transport - Petrol charge\r\n', 'Paid', 'Varun'),
(33, '2024-01-11', 'Shruthi', 2024, 'Jan', '2024-03-20', 160, 'Operations ', 0, 0, 'Communication - Recharge \r\n', 'Paid', 'Varun'),
(34, '2024-01-16', 'Shruthi', 2024, 'Jan', '2024-03-20', 150, 'Operations', 0, 0, 'Transport - Petrol charge\r\n', 'Paid', 'Varun'),
(35, '2024-01-16', 'Shruthi', 2024, 'Jan', '2024-03-20', 70, 'Operations', 0, 0, 'stationery - Bill book', 'Paid', 'Varun'),
(36, '2024-01-18', 'Shruthi', 2024, 'Jan', '2024-03-20', 1000, 'Operations - One time', 0, 0, 'Purchase-- Stamp paper for Bank account opening \r\n', 'Paid', 'Varun'),
(37, '2024-01-18', 'Shruthi', 2024, 'Jan', '2024-03-20', 300, 'Operations - One time', 0, 0, '  Printouts charges \r\n', 'Paid', 'Varun'),
(38, '2024-01-18', 'Shruthi', 2024, 'Jan', '2024-03-20', 100, 'Operations', 0, 0, 'Transport - Petrol charge\r\n', 'Paid', 'Varun'),
(39, '2024-01-24', 'Shruthi', 2024, 'Jan', '2024-03-20', 2960, 'Export', 0, 0, 'UK - Purchase - Vishu kit\r\n', 'Paid', 'Varun'),
(40, '2024-01-24', 'Shruthi', 2024, 'Jan', '2024-03-20', 250, 'Operations', 0, 0, 'Transport - Petrol charge', 'Paid', 'Varun'),
(41, '2024-01-29', 'Shruthi', 2024, 'Jan', '2024-03-20', 5000, 'Operations - One time', 0, 0, 'Account opening \r\n', 'Paid', 'Varun'),
(42, '2024-01-29', 'Shruthi', 2024, 'Jan', '2024-03-20', 545, 'Export', 0, 0, 'UK - Purchase  Vishu kit\r\n', 'Paid', 'Varun'),
(43, '2024-01-30', 'Shruthi', 2024, 'Jan', '2024-03-20', 5250, 'Export ', 0, 0, 'UK courier charge  - Vishu Kit 1\r\n', 'Paid', 'Varun'),
(44, '2024-02-06', 'Shruthi', 2024, 'Feb', '2024-03-20', 1250, 'Export', 0, 0, 'UK - Purchase - Vishu kit\r\n', 'Paid', 'Varun'),
(45, '2024-02-06', 'Shruthi', 2024, 'Feb', '2024-03-20', 500, 'Operations', 0, 0, 'Transport - Petrol charge', 'Paid', 'Varun'),
(46, '2024-02-16', 'Shruthi', 2024, 'Feb', '2024-03-20', 300, 'Operations', 0, 0, 'Transport - Petrol charge', 'Paid', 'Varun'),
(47, '2024-02-16', 'Shruthi', 2024, 'Feb', '2024-03-20', 22290, 'Operations - One time', 0, 0, 'Purchase  laptop\r\n\r\n', 'Paid', 'Vinay'),
(48, '2024-02-20', 'Shruthi', 2024, 'Feb', '2024-03-20', 2490, 'Operations - One time', 0, 0, 'GEM Registration', 'Paid', 'vinay'),
(49, '2024-02-23', 'Shruthi', 2024, 'Feb', '2024-03-20', 300, 'Operations', 0, 0, 'Transport - Petrol charge\r\n', 'Paid', 'Varun'),
(50, '2024-02-23', 'Shruthi', 2024, 'Feb', '2024-03-20', 200, 'Operations - One time ', 0, 0, 'Purchase- Stamp  paper for account opening\r\n', 'Paid', 'Varun'),
(51, '2024-02-27', 'Shruthi', 2024, 'Feb', '2024-03-20', 500, 'Operations', 0, 0, 'Transport - Petrol charge\r\n', 'Paid', 'Varun'),
(52, '2024-03-12', 'Shruthi', 2024, 'Mar', '2024-03-20', 300, 'Operations', 0, 0, 'Transport - Petrol charge\r\n', 'Paid', 'Varun'),
(53, '2024-03-13', 'Shruthi', 2024, 'Mar', '2024-03-20', 2500, 'Marketing', 0, 0, 'Social media bill - Feb\r\n', 'Paid', 'Vinay'),
(54, '2024-03-13', 'Shruthi', 2024, 'Mar', '2024-03-20', 1126, 'Marketing', 0, 0, 'Social media - add &promotion\r\n', 'Paid', 'Vinay'),
(55, '2024-03-14', 'Shruthi', 2024, 'Mar', '2024-03-20', 3500, 'Operations', 0, 0, 'Packaging box purchase\r\n', 'Paid', 'vinay'),
(56, '2024-03-14', 'Shruthi', 2024, 'Mar', '2024-03-20', 1518, 'Operations', 0, 0, 'Packaging box purchase\r\n', 'Paid', 'Varun'),
(57, '2024-03-14', 'Shruthi', 2024, 'Mar', '2024-03-20', 150, 'Operations', 0, 0, 'Stationery - paper sheet Purchase\r\n', 'Paid', 'Varun'),
(58, '2024-03-14', 'Shruthi', 2024, 'Mar', '2024-03-20', 600, 'Operations', 0, 0, 'Transport - Petrol charge\r\n', 'Paid', 'Varun'),
(59, '2024-03-14', 'Shruthi', 2024, 'Mar', '2024-03-20', 480, 'Export', 0, 0, 'Bubble wrap Purchase \r\n', 'Paid', 'Varun'),
(60, '2024-03-14', 'Shruthi', 2024, 'Mar', '2024-03-20', 870, 'Operations', 0, 0, 'GST - Consultant fee March \r\n\r\n', 'Paid', 'Varun'),
(64, '2024-03-22', 'Shruthi', 2024, 'Mar', '2024-03-22', 5250, 'Export', 0, 0, 'UK - Vishu kit courier charge -2', 'Paid', 'Varun'),
(67, '2024-03-22', 'Shruthi', 2024, 'Mar', '2024-03-24', 4750, 'Export', 0, 0, 'Bahrain  - Vishu kit courier charge -1', 'Paid', 'Varun'),
(68, '2024-03-22', 'Shruthi', 2024, 'Mar', '2024-03-24', 40000, 'Operations', 0, 0, 'Purchase - Krishna Idol Plaster of Paris ', 'Paid', 'Varun'),
(70, '2024-03-28', 'Shruthi', 2024, 'Mar', '2024-03-28', 535, 'Operations', 0, 0, 'Purchase - Bubble Rap', 'Paid', 'vinay'),
(72, '2024-03-28', 'Shruthi', 2024, 'Mar', '2024-03-28', 3625, 'Marketing', 0, 0, 'GPMBS - Social media bill for March', 'Paid', 'Vinay'),
(73, '2024-03-31', 'Shruthi', 2024, 'Mar', '2024-03-31', 900, 'Export', 0, 0, 'UK- Krishna idol Manufacture  ', 'paid', 'Varun'),
(74, '2024-03-31', 'Shruthi', 2024, 'Mar', '2024-03-31', 1300, 'Export', 0, 0, 'UK- Krishna idol Manufacture  ', 'Paid', 'Varun'),
(75, '2024-03-31', 'Shruthi', 2024, 'Mar', '2024-03-31', 1800, 'Export', 0, 0, 'Bahrain- Krishna idol Manufacture  ', 'Paid', 'Varun'),
(78, '2024-04-02', 'Shruthi', 2024, 'Apr', '2024-04-02', 1000, 'Operations', 0, 0, 'Transport - Petrol charge', 'Paid', 'Varun'),
(79, '2024-04-02', 'Shruthi', 2024, 'Apr', '2024-04-03', 500, 'Operations', 0, 0, 'Transport - Petrol charge', 'Paid', 'Varun'),
(80, '2024-04-09', 'Shruthi', 2024, 'Apr', '2024-04-09', 1000, 'Operations', 0, 0, 'Transport - Petrol charge', 'Paid', 'Varun'),
(83, '2024-03-06', 'admin', 2023, 'Jan', '2024-04-11', 3625, 'Operations', 0, 0, 'test delete ', 'Paid', 'vinay'),
(85, '2024-04-12', 'Shruthi', 2024, 'Apr', '2024-04-12', 2876, 'Operations', 0, 0, 'FK17 packaging box charge(100)', 'Paid', 'Varun'),
(86, '2024-04-12', 'Shruthi', 2024, 'Apr', '2024-04-12', 150, 'Operations', 0, 0, 'Courier charge ', 'Paid', 'Varun'),
(87, '2024-04-15', 'Shruthi', 2024, 'Apr', '2024-04-15', 535, 'Operations', 0, 0, 'Purchase - Bubble Rap', 'Paid', 'Vinay'),
(88, '2024-04-16', 'Shruthi', 2024, 'Apr', '2024-04-16', 535, 'Operations', 0, 0, '\r\nPurchase - Bubble Rap', 'Paid', 'Vinay'),
(89, '2024-04-25', 'Shruthi', 2024, 'Apr', '2024-04-26', 750, 'Operations', 0, 0, 'GST - Consultant fee April', 'Paid', 'Varun'),
(90, '2024-04-29', 'Shruthi', 2024, 'Apr', '2024-04-30', 150, 'Operations', 0, 0, 'vishukani fest winner courier charge', 'Paid', 'Varun'),
(91, '2024-05-03', 'Shruthi', 2024, 'May', '2024-05-03', 1000, 'Operations', 0, 0, 'Transport Petrol ', 'Paid', 'Varun'),
(92, '2024-05-03', 'Shruthi', 2024, 'May', '2024-05-03', 4129, 'Operations', 0, 0, 'Social media bill for April ', 'Paid', 'Vinay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `id` int(11) NOT NULL,
  `material` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id`, `material`) VALUES
(5, 'PULP'),
(6, 'POP'),
(8, 'Fiber ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material_size`
--

CREATE TABLE `tbl_material_size` (
  `id` int(11) NOT NULL,
  `material_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_material_size`
--

INSERT INTO `tbl_material_size` (`id`, `material_size`) VALUES
(6, '9'),
(7, '12'),
(8, '14'),
(9, '16'),
(10, '17'),
(11, '18'),
(12, '22'),
(13, '23'),
(14, '27'),
(15, '30'),
(16, '33'),
(17, '40'),
(18, '56'),
(19, '11'),
(20, '13'),
(21, '56'),
(23, '24'),
(24, '20'),
(25, '35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_months`
--

CREATE TABLE `tbl_months` (
  `id` int(70) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_months`
--

INSERT INTO `tbl_months` (`id`, `month`) VALUES
(19, 'Jan'),
(20, 'Feb'),
(21, 'Mar'),
(22, 'Apr'),
(23, 'May'),
(24, 'Jun'),
(25, 'Jul'),
(26, 'Aug'),
(27, 'Sep'),
(28, 'Oct'),
(29, 'Nov'),
(30, 'Dec');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `bill_for` varchar(255) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `need_date` date NOT NULL DEFAULT current_timestamp(),
  `product_code` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `domex` varchar(255) NOT NULL,
  `order_quantity` int(70) NOT NULL,
  `completed_quantity` varchar(255) NOT NULL DEFAULT '0',
  `remaining_quantity` varchar(255) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `order_id`, `user`, `bill_for`, `order_date`, `need_date`, `product_code`, `product_description`, `domex`, `order_quantity`, `completed_quantity`, `remaining_quantity`, `status`) VALUES
(55, 'ORD54', 'admin', 'vinay111', '2024-05-07', '2024-05-08', 'PK14W', 'PULP GANAPATHI 9\'\'', 'Export', 60, '0', '0', 2),
(56, 'ORD55', 'admin', 'vinay111', '2024-05-07', '2024-05-08', 'PK14W', 'PULP GANAPATHI 9\'\'', 'Domestic', 45, '0', '0', 2),
(57, 'ORD56', 'admin', 'vinay111', '2024-05-07', '2024-05-08', 'POP12BK', 'PULP KRISHNA 4.5 FEET GRAY', 'Domestic', 123, '20', '103', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_type`
--

CREATE TABLE `tbl_payment_type` (
  `id` int(20) NOT NULL,
  `payment_type_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment_type`
--

INSERT INTO `tbl_payment_type` (`id`, `payment_type_add`) VALUES
(3, 'Export'),
(4, 'Operations'),
(5, 'Marketing'),
(7, 'Operations - One time');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `category_id` int(70) NOT NULL,
  `subcategory_id` int(70) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `material_size` varchar(255) NOT NULL,
  `product_price` int(70) NOT NULL,
  `sale_amount` int(60) NOT NULL,
  `selling_price` int(60) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `available_stock` int(70) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `category_id`, `subcategory_id`, `category`, `subcategory`, `product_code`, `product_description`, `material`, `material_size`, `product_price`, `sale_amount`, `selling_price`, `product_image`, `product_type`, `available_stock`) VALUES
(77, 10, 13, 'IDOLS', 'KRISHNA', 'PK9BL', 'PULP KRISHNA 9\'\' BLUE', 'PULP', '9', 100, 10, 110, '', '', 120),
(78, 10, 13, 'IDOLS', 'KRISHNA', 'PK9W', 'PULP KRISHNA 9\'\' WHITE', 'PULP', '9', 100, 10, 110, '', '', 0),
(79, 10, 13, 'IDOLS', 'KRISHNA', 'PK9G', 'PULP KRISHNA 9\'\' GRAY', 'PULP', '9', 100, 10, 110, '', '', 0),
(84, 10, 13, 'IDOLS', 'KRISHNA', 'PK9BK', 'PULP KRISHNA 9\'\' BLACK', 'PULP', '9', 100, 10, 110, '', '', 0),
(85, 10, 13, 'IDOLS', 'KRISHNA', 'POP9BL', 'PLASTER OF PARIS 9\'\' BLUE', 'POP', '9', 100, 10, 110, '', '', 0),
(86, 10, 13, 'IDOLS', 'KRISHNA', 'POP9W', 'PLASTER OF PARIS 9\'\' WHITE', 'PULP', '9', 100, 10, 110, '', '', 0),
(87, 10, 13, 'IDOLS', 'KRISHNA', 'POP9G', 'PLASTER OF PARIS 9\'\'GREY', 'PULP', '9', 100, 10, 110, '', '', 0),
(88, 10, 13, 'IDOLS', 'KRISHNA', 'POP9BK', 'PLASTER OF PARIS 9\'\' BLACK', 'PULP', '9', 100, 10, 110, '', '', 0),
(89, 10, 13, 'IDOLS', 'KRISHNA', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 'PULP', '12', 100, 10, 110, '', '', 280),
(90, 10, 13, 'IDOLS', 'KRISHNA', 'PK12W', 'PULP KRISHNA 9\'\' WHITE', 'PULP', '12', 100, 10, 110, '', '', 0),
(91, 10, 13, 'IDOLS', 'KRISHNA', 'PK12G', 'PULP KRISHNA 9\'\' GRAY', 'PULP', '12', 100, 10, 110, '', '', 0),
(92, 10, 13, 'IDOLS', 'KRISHNA', 'PK12BK', 'PULP KRISHNA 9\'\' BLACK', 'PULP', '12', 100, 10, 110, '', '', 0),
(93, 10, 13, 'IDOLS', 'KRISHNA', 'POP12BL', 'PLASTER OF PARIS 12\'\' BLUE', 'POP', '12', 100, 10, 110, '', '', 0),
(94, 10, 13, 'IDOLS', 'KRISHNA', 'POP12W', 'PLASTER OF PARIS 12\'\' WHITE', 'POP', '12', 100, 10, 110, '', '', 0),
(95, 10, 13, 'IDOLS', 'KRISHNA', 'POP12G', 'PLASTER OF PARIS 12\'\' GRAY', 'POP', '12', 100, 10, 110, '', '', 0),
(96, 10, 13, 'IDOLS', 'KRISHNA', 'POP12BK', 'PLASTER OF PARIS 12\'\' BLACK', 'POP', '12', 100, 10, 110, '', '', 0),
(97, 10, 13, 'IDOLS', 'KRISHNA', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 'PULP', '14', 100, 10, 110, '', '', 120),
(98, 10, 13, 'IDOLS', 'KRISHNA', 'PK14W', 'PULP KRISHNA 14\'\' WHITE', 'PULP', '14', 100, 10, 110, '', '', 0),
(99, 10, 13, 'IDOLS', 'KRISHNA', 'PK14G', 'PULP KRISHNA 14\'\' GRAY', 'PULP', '14', 100, 10, 110, '', '', 0),
(100, 10, 13, 'IDOLS', 'KRISHNA', 'PK14BK', 'PULP KRISHNA 14\'\' BLACK', 'PULP', '14', 100, 10, 110, '', '', 0),
(101, 10, 13, 'IDOLS', 'KRISHNA', 'PKV16SPBL', 'PULP VITTOPA KRISHNA BLUE', 'PULP', '16', 100, 10, 110, '', '', 0),
(102, 10, 13, 'IDOLS', 'KRISHNA', 'PKV16SPW', 'PULP VITTOPA KRISHNA WHITE', 'PULP', '16', 100, 10, 110, '', '', 0),
(103, 10, 13, 'IDOLS', 'KRISHNA', 'PKV16SPG', 'PULP VITTOPA KRISHNA GRAY', 'PULP', '16', 100, 10, 110, '', '', 0),
(104, 10, 13, 'IDOLS', 'KRISHNA', 'PKV16SPBK', 'PULP VITTOPA KRISHNA BLACK', 'PULP', '16', 100, 10, 110, '', '', 0),
(105, 10, 13, 'IDOLS', 'KRISHNA', 'PK17BL', 'PULP KRISHNA 17\'\' BLUE', 'PULP', '17', 100, 10, 110, '', '', 0),
(106, 10, 13, 'IDOLS', 'KRISHNA', 'PK17W', 'PULP KRISHNA 17\'\' WHITE', 'PULP', '17', 100, 10, 110, '', '', 0),
(107, 10, 13, 'IDOLS', 'KRISHNA', 'PK17G', 'PULP KRISHNA 17\'\' GRAY', 'PULP', '17', 100, 10, 110, '', '', 0),
(108, 10, 13, 'IDOLS', 'KRISHNA', 'PK17BK', 'PULP KRISHNA 17\'\' BLACK', 'PULP', '17', 100, 10, 110, '', '', 0),
(109, 10, 13, 'IDOLS', 'KRISHNA', 'PK17SPBL', 'PULP KRISHNA 17\'\' SPECIAL BLUE', 'PULP', '18', 100, 10, 110, '', '', 0),
(110, 10, 13, 'IDOLS', 'KRISHNA', 'PK17SPW', 'PULP KRISHNA 17\'\' SPECIAL WHITE', 'PULP', '18', 100, 10, 110, '', '', 0),
(114, 10, 13, 'IDOLS', 'KRISHNA', 'PK17SPG', 'PULP KRISHNA 17\'\' SPECIAL GRAY', 'PULP', '18', 100, 10, 110, '', '', 0),
(115, 10, 13, 'IDOLS', 'KRISHNA', 'PK17SPBK', 'PULP KRISHNA 17\'\' SPECIAL BLACK', 'PULP', '18', 100, 10, 110, '', '', 0),
(116, 10, 13, 'IDOLS', 'KRISHNA', 'PK22BL', 'PULP KRISHNA 22\'\' BLUE', 'PULP', '22', 100, 10, 110, '', '', 0),
(117, 10, 13, 'IDOLS', 'KRISHNA', 'PK22W', 'PULP KRISHNA 22\'\' WHITE ', 'PULP', '22', 100, 10, 110, '', '', 0),
(118, 10, 13, 'IDOLS', 'KRISHNA', 'PK22G', 'PULP KRISHNA 22\'\' GRAY', 'PULP', '22', 100, 10, 110, '', '', 0),
(119, 10, 13, 'IDOLS', 'KRISHNA', 'PK22BK', 'PULP KRISHNA 22\'\' BLACK', 'PULP', '22', 100, 10, 110, '', '', 0),
(120, 10, 11, 'IDOLS', 'RUKMINI', 'PR22BL', 'PULP RUKMINI 1.5 FEET BLUE', 'PULP', '22', 100, 10, 110, '', '', 0),
(121, 10, 11, 'IDOLS', 'RUKMINI', 'PR22R', 'PULP RUKMINI 1.5 FEET RED', 'PULP', '22', 100, 10, 110, '', '', 0),
(122, 10, 11, 'IDOLS', 'RUKMINI', 'PR22GN', 'PULP RUKMINI 1.5 FEET GREEN', 'PULP', '22', 100, 10, 110, '', '', 0),
(123, 10, 13, 'IDOLS', 'KRISHNA', 'PK23SPBK', 'PULP KRISHNA 23\'\' SPECIAL BLACK', 'PULP', '23', 100, 10, 110, '', '', 0),
(124, 10, 13, 'IDOLS', 'KRISHNA', 'PK23SPBL', 'PULP KRISHNA 23\'\' SPECIAL BLUE', 'PULP', '23', 100, 10, 110, '', '', 0),
(125, 10, 13, 'IDOLS', 'KRISHNA', 'PK23SPW', 'PULP KRISHNA 23\'\' SPECIAL WHITE', 'PULP', '23', 100, 10, 110, '', '', 0),
(126, 10, 13, 'IDOLS', 'KRISHNA', 'PK23SPG', 'PULP KRISHNA 23\'\' SPECIAL GRAY', 'PULP', '23', 100, 10, 110, '', '', 0),
(127, 10, 13, 'IDOLS', 'KRISHNA', 'PKV23BL', 'PULP KRISHNA VITTOPA BLUE', 'PULP', '23', 100, 10, 110, '', '', 0),
(128, 10, 13, 'IDOLS', 'KRISHNA', 'PKV23W', 'PULP KRISHNA VITTOPA WHITE', 'PULP', '23', 100, 10, 110, '', '', 0),
(129, 10, 13, 'IDOLS', 'KRISHNA', 'PKV23G', 'PULP KRISHNA VITTOPA GRAY', 'PULP', '23', 100, 10, 110, '', '', 0),
(130, 10, 13, 'IDOLS', 'KRISHNA', 'PKV23BK', 'PULP KRISHNA VITTOPA BLACK', 'PULP', '23', 100, 10, 110, '', '', 0),
(131, 10, 13, 'IDOLS', 'KRISHNA', 'PKT23BL', 'PULP KRISHNA THALAPPAV BLUE', 'PULP', '23', 100, 10, 110, '', '', 0),
(132, 10, 13, 'IDOLS', 'KRISHNA', 'PKT23W', 'PULP KRISHNA THALAPPAV WHITE', 'PULP', '23', 100, 10, 110, '', '', 0),
(133, 10, 13, 'IDOLS', 'KRISHNA', 'PKT23G', 'PULP KRISHNA THALAPPAV GRAY', 'PULP', '23', 100, 10, 110, '', '', 0),
(134, 10, 13, 'IDOLS', 'KRISHNA', 'PKT23BK', 'PULP KRISHNA THALAPPAV BLACK', 'PULP', '23', 100, 10, 110, '', '', 0),
(135, 10, 13, 'IDOLS', 'KRISHNA', 'PKAK23BL', 'PULP AISWARYA KRISHNA  BLUE', 'PULP', '23', 100, 10, 110, '', '', 0),
(136, 10, 13, 'IDOLS', 'KRISHNA', 'PKAK23W', 'PULP AISWARYA KRISHNA WHITE', 'PULP', '23', 100, 10, 110, '', '', 0),
(137, 10, 13, 'IDOLS', 'KRISHNA', 'PKAK23G', 'PULP AISWARYA KRISHNA GRAY', 'PULP', '23', 100, 10, 110, '', '', 0),
(138, 10, 13, 'IDOLS', 'KRISHNA', 'PKAK23BK', 'PULP AISWARYA KRISHNA BLACK', 'PULP', '23', 100, 10, 110, '', '', 0),
(139, 10, 13, 'IDOLS', 'KRISHNA', 'PK27BL', 'PULP KRISHNA 2 FEET BLUE', 'PULP', '27', 100, 10, 110, '', '', 0),
(140, 10, 13, 'IDOLS', 'KRISHNA', 'PK27W', 'PULP KRISHNA 2 FEET WHITE', 'PULP', '27', 100, 10, 110, '', '', 0),
(141, 10, 13, 'IDOLS', 'KRISHNA', 'PK27G', 'PULP KRISHNA 2 FEET GRAY', 'PULP', '27', 100, 10, 110, '', '', 0),
(142, 10, 13, 'IDOLS', 'KRISHNA', 'PK27BK', 'PULP KRISHNA 2 FEET BLACK', 'PULP', '27', 100, 10, 110, '', '', 0),
(143, 10, 13, 'IDOLS', 'KRISHNA', 'PK27BL', 'PULP KRISHNA 2 FEET BLUE', 'PULP', '27', 100, 10, 110, '', '', 0),
(144, 10, 13, 'IDOLS', 'KRISHNA', 'PK27W', 'PULP KRISHNA 2 FEET WHITE', 'PULP', '27', 100, 10, 110, '', '', 0),
(145, 10, 13, 'IDOLS', 'KRISHNA', 'PK27G', 'PULP KRISHNA 2 FEET GRAY', 'PULP', '27', 100, 10, 110, '', '', 0),
(146, 10, 13, 'IDOLS', 'KRISHNA', 'PK27BK', 'PULP KRISHNA 2 FEET BLACK', 'PULP', '27', 100, 10, 110, '', '', 0),
(147, 10, 13, 'IDOLS', 'KRISHNA', 'PKV27BL', 'PULP VITTOPA KRISHNA 2 FEET BLUE', 'PULP', '27', 100, 10, 110, '', '', 0),
(148, 10, 13, 'IDOLS', 'KRISHNA', 'PKV27W', 'PULP VITTOPA KRISHNA 2 FEET WHITE', 'PULP', '27', 100, 10, 110, '', '', 0),
(149, 10, 13, 'IDOLS', 'KRISHNA', 'PKV27G', 'PULP VITTOPA KRISHNA 2 FEET GRAY', 'PULP', '27', 100, 10, 110, '', '', 0),
(150, 10, 13, 'IDOLS', 'KRISHNA', 'PKV27BK', 'PULP VITTOPA KRISHNA 2 FEET BLACK', 'PULP', '27', 100, 10, 110, '', '', 0),
(151, 10, 11, 'IDOLS', 'RUKMINI', 'PR30BL', 'PULP RUKMINI 2 FEET BLUE', 'PULP', '30', 100, 10, 110, '', '', 0),
(152, 10, 11, 'IDOLS', 'RUKMINI', 'PR30GN', 'PULP RUKMINI 2 FEET GREEN', 'PULP', '30', 100, 10, 110, '', '', 0),
(153, 10, 11, 'IDOLS', 'RUKMINI', 'PR30R', 'PULP RUKMINI 2 FEET RED', 'PULP', '30', 100, 10, 110, '', '', 0),
(154, 10, 13, 'IDOLS', 'KRISHNA', 'PK33BL', 'PULP KRISHNA 2.5 FEET BLUE', 'PULP', '33', 100, 10, 110, '', '', 0),
(155, 10, 13, 'IDOLS', 'KRISHNA', 'PK33W', 'PULP KRISHNA 2.5 FEET WHITE ', 'PULP', '33', 100, 10, 110, '', '', 0),
(156, 10, 13, 'IDOLS', 'KRISHNA', 'PK33G', 'PULP KRISHNA 2.5 FEET GRAY', 'PULP', '33', 100, 10, 110, '', '', 0),
(157, 10, 13, 'IDOLS', 'KRISHNA', 'PK33BK', 'PULP KRISHNA 2.5 FEET BLACK', 'PULP', '33', 100, 10, 110, '', '', 0),
(158, 10, 13, 'IDOLS', 'KRISHNA', 'PK40BL', 'PULP KRISHNA 3.5 FEET BLUE', 'PULP', '40', 100, 10, 110, '', '', 0),
(159, 10, 13, 'IDOLS', 'KRISHNA', 'PK40W', 'PULP KRISHNA 3.5 FEET WHITE ', 'PULP', '40', 100, 10, 110, '', '', 0),
(160, 10, 13, 'IDOLS', 'KRISHNA', 'PK40G', 'PULP KRISHNA 3.5 FEET GRAY', 'PULP', '40', 100, 10, 110, '', '', 0),
(161, 10, 13, 'IDOLS', 'KRISHNA', 'PK40BK', 'PULP KRISHNA 3.5 FEET BLACK', 'PULP', '40', 100, 10, 110, '', '', 0),
(162, 10, 13, 'IDOLS', 'KRISHNA', 'PK56BL', 'PULP KRISHNA 4.5 FEET BLUE', 'PULP', '56', 100, 10, 110, '', '', 0),
(163, 10, 13, 'IDOLS', 'KRISHNA', 'PK56W', 'PULP KRISHNA 4.5 FEET WHITE ', 'PULP', '56', 100, 10, 110, '', '', 0),
(164, 10, 13, 'IDOLS', 'KRISHNA', 'PK56G', 'PULP KRISHNA 4.5 FEET GRAY', 'PULP', '56', 100, 10, 110, '', '', 0),
(165, 10, 13, 'IDOLS', 'KRISHNA', 'PK56BK', 'PULP KRISHNA 4.5 FEET BLACK', 'PULP', '56', 100, 10, 110, '', '', 0),
(166, 10, 12, 'IDOLS', 'GANAPATHI', 'PG9', 'PULP GANAPATHI 9\'\'', 'PULP', '9', 100, 10, 110, '', '', 130),
(167, 10, 12, 'IDOLS', 'GANAPATHI', 'PG11', 'PULP GANAPATHI 11\'\'', 'PULP', '11', 100, 10, 110, '', '', 0),
(168, 10, 12, 'IDOLS', 'GANAPATHI', 'PG13', 'PULP GANAPATHI 13\'\'', 'PULP', '13', 100, 10, 110, '', '', 0),
(169, 10, 13, 'IDOLS', 'KRISHNA', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 'PULP', '24', 100, 10, 110, '', '', 1),
(170, 10, 13, 'IDOLS', 'KRISHNA', 'PK24G', 'PULP KRISHNA 24\'\' GRAY', 'PULP', '24', 100, 10, 110, '', '', 0),
(171, 10, 13, 'IDOLS', 'KRISHNA', 'PK24W', 'PULP KRISHNA 24\'\' WHITE', 'PULP', '24', 100, 10, 110, '', '', 0),
(172, 10, 13, 'IDOLS', 'KRISHNA', 'PK24BK', 'PULP KRISHNA 24\'\' BLACK', 'PULP', '24', 100, 10, 110, '', '', 0),
(173, 10, 13, 'IDOLS', 'KRISHNA', 'PK16BL', 'PULP KRISHNA 16\'\' BLUE', 'PULP', '16', 100, 10, 110, '', '', 0),
(174, 10, 13, 'IDOLS', 'KRISHNA', 'PK16G', 'PULP KRISHNA 16\'\' GRAY', 'PULP', '16', 100, 10, 110, '', '', 0),
(175, 10, 13, 'IDOLS', 'KRISHNA', 'PK16BK', 'PULP KRISHNA 16\'\' BLACK', 'PULP', '16', 100, 10, 110, '', '', 0),
(176, 10, 13, 'IDOLS', 'KRISHNA', 'PK16W', 'PULP KRISHNA 16\'\' WHITE', 'PULP', '16', 100, 10, 110, '', '', 0),
(177, 10, 13, 'IDOLS', 'KRISHNA', 'PK16BL', 'PULP KRISHNA 16\'\' BLUE', 'PULP', '16', 100, 10, 110, '', '', 0),
(178, 10, 13, 'IDOLS', 'KRISHNA', 'PK16G', 'PULP KRISHNA 16\'\' GRAY', 'PULP', '16', 100, 10, 110, '', '', 0),
(179, 10, 13, 'IDOLS', 'KRISHNA', 'PK16BK', 'PULP KRISHNA 16\'\' BLACK', 'PULP', '16', 100, 10, 110, '', '', 0),
(180, 10, 13, 'IDOLS', 'KRISHNA', 'PK16W', 'PULP KRISHNA 16\'\' WHITE', 'PULP', '16', 100, 10, 110, '', '', 0),
(181, 10, 13, 'IDOLS', 'KRISHNA', 'PK18BL', 'PULP KRISHNA 18\'\' BLUE', 'PULP', '18', 100, 10, 110, '', '', 5),
(182, 10, 13, 'IDOLS', 'KRISHNA', 'PK18G', 'PULP KRISHNA 18\'\' GRAY', 'PULP', '18', 100, 10, 110, '', '', 0),
(183, 10, 13, 'IDOLS', 'KRISHNA', 'PK18W', 'PULP KRISHNA 18\'\' WHITE', 'PULP', '18', 100, 10, 110, '', '', 0),
(184, 0, 0, 'IDOLS', 'KRISHNA', 'PK18BK', 'PULP KRISHNA 18\'\' BLACK', 'PULP', '18', 100, 10, 110, '', '', 0),
(185, 0, 0, 'IDOLS', 'KRISHNA', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 'Fiber ', '12', 100, 10, 100, '', '', 0),
(186, 0, 0, 'IDOLS', 'KRISHNA', 'FK12W', 'FIBER KRISHNA 12\'\' WHITE', 'Fiber ', '12', 100, 10, 110, '', '', 0),
(187, 0, 0, 'IDOLS', 'KRISHNA', 'FK12G', 'FIBER KRISHNA 12\'\' GRAY', 'Fiber ', '12', 100, 10, 110, '', '', 0),
(188, 0, 0, 'IDOLS', 'KRISHNA', 'FK12BK', 'FIBER KRISHNA 12\'\' BLACK', 'Fiber ', '12', 100, 10, 110, '', '', 0),
(189, 0, 0, 'IDOLS', 'KRISHNA', 'FK12CR', 'FIBER KRISHNA 12\'\' CREAM', 'Fiber ', '12', 100, 10, 110, '', '', 0),
(190, 0, 0, 'IDOLS', 'KRISHNA', 'FK17BL', 'FIBER KRISHNA 17\'\' BLUE', 'Fiber ', '17', 100, 10, 110, '', '', 0),
(191, 0, 0, 'IDOLS', 'KRISHNA', 'FK17W', 'FIBER KRISHNA 17\'\' WHITE', 'Fiber ', '17', 100, 10, 110, '', '', 0),
(192, 0, 0, 'IDOLS', 'KRISHNA', 'FK17G', 'FIBER KRISHNA 17\'\' GRAY', 'Fiber ', '17', 100, 10, 110, '', '', 0),
(193, 0, 0, 'IDOLS', 'KRISHNA', 'FK17BK', 'FIBER KRISHNA 17\'\' BLACK', 'Fiber ', '17', 100, 10, 110, '', '', 0),
(194, 0, 0, 'IDOLS', 'KRISHNA', 'FK17CR', 'FIBER KRISHNA 17\'\' CREAM', 'Fiber ', '17', 100, 10, 110, '', '', 0),
(195, 0, 0, 'IDOLS', 'KRISHNA', 'FK17BL', 'FIBER KRISHNA 17\'\' VITTOPA BLUE', 'Fiber ', '17', 100, 10, 10, '', '', 0),
(196, 0, 0, 'IDOLS', 'RUKMINI', 'FR20', 'FIBER RUKMINI  20\'\' ', 'Fiber ', '20', 100, 10, 110, '', '', 0),
(197, 0, 0, 'IDOLS', 'KRISHNA', 'FK20VBL', 'FIBER KRISHNA 20\'\' VITTOPA BLUE', 'Fiber ', '20', 100, 10, 110, '', '', 0),
(198, 0, 0, 'IDOLS', 'KRISHNA', 'FK22BL', 'FIBER KRISHNA 22\'\' BLUE', 'Fiber ', '22', 100, 10, 110, '', '', 0),
(199, 0, 0, 'IDOLS', 'KRISHNA', 'FK22W', 'FIBER KRISHNA 22\'\' WHITE ', 'Fiber ', '22', 100, 10, 110, '', '', 0),
(200, 0, 0, 'IDOLS', 'KRISHNA', 'FK22G', 'FIBER KRISHNA 22\'\' GRAY', 'Fiber ', '22', 100, 10, 110, '', '', 0),
(201, 0, 0, 'IDOLS', 'KRISHNA', 'FK22BK', 'FIBER KRISHNA 22\'\' BLACK', 'Fiber ', '22', 100, 10, 110, '', '', 0),
(202, 0, 0, 'IDOLS', 'KRISHNA', 'FK22CR', 'FIBER KRISHNA 22\'\' CREAM', 'Fiber ', '22', 100, 10, 110, '', '', 0),
(203, 0, 0, 'IDOLS', 'KRISHNA', 'FK23BL', 'FIBER KRISHNA 23\'\' BLUE', 'Fiber ', '23', 100, 10, 110, '', '', 0),
(204, 0, 0, 'IDOLS', 'KRISHNA', 'FK23W', 'FIBER KRISHNA 23\'\' WHITE ', 'Fiber ', '23', 100, 10, 110, '', '', 0),
(205, 0, 0, 'IDOLS', 'KRISHNA', 'FK23G', 'FIBER KRISHNA 23\'\' GRAY', 'Fiber ', '23', 100, 10, 110, '', '', 0),
(206, 0, 0, 'IDOLS', 'KRISHNA', 'FK23BK', 'FIBER KRISHNA 23\'\' BLACK', 'Fiber ', '23', 100, 10, 110, '', '', 0),
(207, 0, 0, 'IDOLS', 'RUKMINI', 'FK23CR', 'FIBER KRISHNA 23\'\' CREAM', 'Fiber ', '23', 100, 10, 110, '', '', 0),
(208, 0, 0, 'IDOLS', 'KRISHNA', 'FK23VBL', 'FIBER KRISHNA 23\'\' VITTOPA BLUE', 'Fiber ', '23', 100, 10, 110, '', '', 0),
(209, 0, 0, 'IDOLS', 'KRISHNA', 'FK23VBK', 'FIBER KRISHNA 23\'\' VITTOPA BLACK', 'Fiber ', '23', 100, 10, 110, '', '', 0),
(210, 0, 0, 'IDOLS', 'KRISHNA', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 'Fiber ', '27', 100, 10, 110, '', '', 1),
(211, 0, 0, 'IDOLS', 'KRISHNA', 'FK27W', 'FIBER KRISHNA 2  FEET WHITE', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(212, 0, 0, 'IDOLS', 'KRISHNA', 'FK27G', 'FIBER KRISHNA 2 FEET GRAY', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(213, 0, 0, 'IDOLS', 'KRISHNA', 'FK27BK', 'FIBER KRISHNA 2 FEET BLACK', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(214, 0, 0, 'IDOLS', 'KRISHNA', 'FKV27CR', 'FIBER KRISHNA  2 FEET CREAM', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(215, 0, 0, 'IDOLS', 'KRISHNA', 'FKV27BL', 'FIBER VITTOPA KRISHNA 2 FEET BLUE', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(216, 0, 0, 'IDOLS', 'KRISHNA', 'FK27W', 'FIBER VITTOPA KRISHNA 2 FEET WHITE', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(217, 0, 0, 'IDOLS', 'KRISHNA', 'FKV27G', 'FIBER VITTOPA KRISHNA 2 FEET GRAY', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(218, 0, 0, 'IDOLS', 'KRISHNA', 'FKV27BK', 'FIBER VITTOPA KRISHNA 2 FEET BLACK', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(219, 0, 0, 'IDOLS', 'KRISHNA', 'FKV27CR', 'FIBER VITTOPA KRISHNA 2 FEET CREAM', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(220, 0, 0, 'IDOLS', 'KRISHNA', 'FKA27 ', 'FIBER ASHIRVADHAM  KRISHNA 2 FEET ', 'Fiber ', '27', 100, 10, 110, '', '', 0),
(221, 0, 0, 'IDOLS', 'KRISHNA', 'FR30', 'FIBER RUKMINI  30\'\' ', 'Fiber ', '30', 100, 10, 110, '', '', 0),
(222, 0, 0, 'IDOLS', 'KRISHNA', 'FK33BL', 'FIBER KRISHNA 2.5 FEET BLUE', 'Fiber ', '33', 100, 10, 110, '', '', 1),
(223, 0, 0, 'IDOLS', 'KRISHNA', 'FK33W', 'FIBER KRISHNA 2.5 FEET WHITE ', 'Fiber ', '33', 100, 10, 110, '', '', 0),
(224, 0, 0, 'IDOLS', 'KRISHNA', 'FK33G', 'FIBER KRISHNA 2.5 FEET GRAY', 'Fiber ', '33', 100, 10, 110, '', '', 0),
(225, 0, 0, 'IDOLS', 'KRISHNA', 'FK33BK', 'FIBER KRISHNA 2.5 FEET BLACK', 'Fiber ', '33', 100, 10, 110, '', '', 0),
(226, 0, 0, 'IDOLS', 'KRISHNA', 'FK33CR', 'FIBER KRISHNA 2.5 FEET CREAM', 'Fiber ', '33', 100, 10, 110, '', '', 0),
(227, 0, 0, 'IDOLS', 'KRISHNA', 'FK35BL', 'FIBER KRISHNA 35\" BLUE', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(228, 0, 0, 'IDOLS', 'KRISHNA', 'FK35W', 'FIBER KRISHNA 35\" WHITE', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(229, 0, 0, 'IDOLS', 'KRISHNA', 'FK35G', 'FIBER KRISHNA 35\" FEET GRAY', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(230, 0, 0, 'IDOLS', 'KRISHNA', 'FK35BK', 'FIBER KRISHNA 35\"  FEET BLACK', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(231, 0, 0, 'IDOLS', 'KRISHNA', 'FK35CR', 'FIBER KRISHNA 35\"  FEET CREAM', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(232, 0, 0, 'IDOLS', 'KRISHNA', 'FKV35BL', 'FIBER VITTOPA KRISHNA  35\" BLUE', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(233, 0, 0, 'IDOLS', 'KRISHNA', 'FKV35G', 'FIBER VITTOPA KRISHNA  35\" GRAY', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(234, 0, 0, 'IDOLS', 'KRISHNA', 'FKV35BK', 'FIBER VITTOPA KRISHNA 35\" BLACK', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(235, 0, 0, 'IDOLS', 'KRISHNA', 'FKV35CR', 'FIBER VITTOPA KRISHNA  35', 'Fiber ', '35', 100, 10, 110, '', '', 0),
(236, 0, 0, 'IDOLS', 'KRISHNA', 'FK40BL', 'FIBER KRISHNA 3.5 FEET BLUE', 'Fiber ', '40', 100, 10, 110, '', '', 0),
(237, 0, 0, 'IDOLS', 'KRISHNA', 'FK40W', 'FIBER KRISHNA 3.5 FEET WHITE ', 'Fiber ', '40', 100, 10, 110, '', '', 0),
(238, 0, 0, 'IDOLS', 'KRISHNA', 'FK40G', 'FIBER KRISHNA 3.5 FEET GRAY', 'Fiber ', '40', 100, 10, 110, '', '', 0),
(239, 0, 0, 'IDOLS', 'KRISHNA', 'FK40BK', 'FIBER KRISHNA 3.5 FEET BLACK', 'Fiber ', '40', 100, 10, 110, '', '', 0),
(240, 0, 0, 'IDOLS', 'KRISHNA', 'FK40CR', 'FIBER KRISHNA 3.5 FEET CREAM', 'Fiber ', '40', 100, 10, 110, '', '', 0),
(241, 0, 0, 'IDOLS', 'KRISHNA', 'FKA40', 'FIBER ASHIRVADHAM  KRISHNA 40', 'Fiber ', '40', 100, 10, 110, '', '', 2),
(242, 0, 0, 'IDOLS', 'KRISHNA', 'FK56BL', 'FIBER KRISHNA 4.5 FEET BLUE', 'Fiber ', '56', 100, 10, 110, '', '', 0),
(243, 0, 0, 'IDOLS', 'KRISHNA', 'FK56W', 'FIBER KRISHNA 4.5 FEET WHITE ', 'Fiber ', '56', 100, 10, 110, '', '', 0),
(244, 0, 0, 'IDOLS', 'KRISHNA', 'FK56G', 'FIBER KRISHNA 4.5 FEET GRAY', 'Fiber ', '56', 100, 10, 110, '', '', 0),
(245, 0, 0, 'IDOLS', 'KRISHNA', 'FK56BK', 'FIBER KRISHNA 4.5 FEET BLACK', 'Fiber ', '56', 100, 10, 110, '', '', 0),
(246, 0, 0, 'IDOLS', 'KRISHNA', 'FK56CR', 'FIBER KRISHNA 4.5 FEET CREAM', 'Fiber ', '56', 100, 10, 110, '', '', 0),
(248, 11, 13, 'IDOLS', 'GANAPATHI', 'PK14W', 'PULP KRISHNA 14\'\' WHITE', 'POP', '20', 100, 10, 110, '', '', 0),
(252, 11, 13, 'IDOLS', 'KRISHNA', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 'Fiber ', '18', 100, 10, 110, '', '', 0),
(253, 11, 13, 'IDOLS', 'KRISHNA', 'FK24G', 'FIBER KRISHNA 24\'\' GRAY', 'Fiber ', '24', 100, 10, 110, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_codes`
--

CREATE TABLE `tbl_product_codes` (
  `id` int(70) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product_codes`
--

INSERT INTO `tbl_product_codes` (`id`, `product_code`, `product_description`) VALUES
(21, 'PK9BL', 'PULP KRISHNA 9\'\' BLUE'),
(22, 'PK9W', 'PULP KRISHNA 9\'\' WHITE'),
(23, 'PK9G', 'PULP KRISHNA 9\'\' GRAY'),
(24, 'PK9BK', 'PULP KRISHNA 9\'\' BLACK'),
(25, 'POP9BL', 'PLASTER OF PARIS 9\'\' BLUE'),
(26, 'POP9W', 'PLASTER OF PARIS 9\'\' WHITE'),
(27, 'POP9G', 'PLASTER OF PARIS 9\'\'GREY'),
(28, 'POP9BK', 'PLASTER OF PARIS 9\'\' BLACK'),
(29, 'PK12BL', 'PULP KRISHNA 9\'\' BLUE'),
(30, 'PK12W', 'PULP KRISHNA 9\'\' WHITE'),
(31, 'PK12G', 'PULP KRISHNA 9\'\' GRAY'),
(32, 'PK12BK', 'PULP KRISHNA 9\'\' BLACK'),
(33, 'POP12BL', 'PLASTER OF PARIS 12\'\' BLUE'),
(34, 'POP12W', 'PLASTER OF PARIS 12\'\' WHITE'),
(35, 'POP12G', 'PLASTER OF PARIS 12\'\' GRAY'),
(36, 'POP12BK', 'PLASTER OF PARIS 12\'\' BLACK'),
(37, 'PK14BL', 'PULP KRISHNA 14\'\' BLUE'),
(38, 'PK14W', 'PULP KRISHNA 14\'\' WHITE'),
(39, 'PK14BK', 'PULP KRISHNA 14\'\' BLACK'),
(40, 'PKV16SPBL', 'PULP VITTOPA KRISHNA BLUE'),
(41, 'PKV16SPW', 'PULP VITTOPA KRISHNA WHITE'),
(42, 'PKV16SPG', 'PULP VITTOPA KRISHNA GRAY'),
(43, 'PKV16SPBK', 'PULP VITTOPA KRISHNA BLACK'),
(44, 'PK17BL', 'PULP KRISHNA 17\'\' BLUE'),
(45, 'PK17W', 'PULP KRISHNA 17\'\' WHITE'),
(46, 'PK17G', 'PULP KRISHNA 17\'\' GRAY'),
(47, 'PK17BK', 'PULP KRISHNA 17\'\' BLACK'),
(48, 'PK17SPBL', 'PULP KRISHNA 17\'\' SPECIAL BLUE'),
(49, 'PK17SPW', 'PULP KRISHNA 17\'\' SPECIAL WHITE'),
(50, 'PK17SPG', 'PULP KRISHNA 17\'\' SPECIAL GRAY'),
(51, 'PK17SPBK', 'PULP KRISHNA 17\'\' SPECIAL BLACK'),
(52, 'PK22BL', 'PULP KRISHNA 22\'\' BLUE'),
(53, 'PK22W', 'PULP KRISHNA 22\'\' WHITE '),
(54, 'PK22G', 'PULP KRISHNA 22\'\' GRAY'),
(55, 'PK22BK', 'PULP KRISHNA 22\'\' BLACK'),
(56, 'PR22BL', 'PULP RUKMINI 1.5 FEET BLUE'),
(57, 'PR22R', 'PULP RUKMINI 1.5 FEET RED'),
(58, 'PR22GN', 'PULP RUKMINI 1.5 FEET GREEN'),
(59, 'PK23SPBK', 'PULP KRISHNA 23\'\' SPECIAL BLACK'),
(60, 'PK23SPBL', 'PULP KRISHNA 23\'\' SPECIAL BLUE'),
(61, 'PK23SPW', 'PULP KRISHNA 23\'\' SPECIAL WHITE'),
(62, 'PK23SPG', 'PULP KRISHNA 23\'\' SPECIAL GRAY'),
(63, 'PKV23BL', 'PULP KRISHNA VITTOPA BLUE'),
(64, 'PKV23W', 'PULP KRISHNA VITTOPA WHITE'),
(65, 'PKV23G', 'PULP KRISHNA VITTOPA GRAY'),
(66, 'PKV23BK', 'PULP KRISHNA VITTOPA BLACK'),
(67, 'PKT23BL', 'PULP KRISHNA THALAPPAV BLUE'),
(68, 'PKT23W', 'PULP KRISHNA THALAPPAV WHITE'),
(69, 'PKT23G', 'PULP KRISHNA THALAPPAV GRAY'),
(70, 'PKT23BK', 'PULP KRISHNA THALAPPAV BLACK'),
(71, 'PKAK23BL', 'PULP AISWARYA KRISHNA  BLUE'),
(72, 'PKAK23W', 'PULP AISWARYA KRISHNA WHITE'),
(73, 'PKAK23G', 'PULP AISWARYA KRISHNA GRAY'),
(74, 'PKAK23BK', 'PULP AISWARYA KRISHNA BLACK'),
(75, 'PK27BL', 'PULP KRISHNA 2 FEET BLUE'),
(76, 'PK27W', 'PULP KRISHNA 2 FEET WHITE'),
(77, 'PK27G', 'PULP KRISHNA 2 FEET GRAY'),
(78, 'PK27BK', 'PULP KRISHNA 2 FEET BLACK'),
(79, 'PKV27BL', 'PULP VITTOPA KRISHNA 2 FEET BLUE'),
(80, 'PKV27W', 'PULP VITTOPA KRISHNA 2 FEET WHITE'),
(81, 'PKV27G', 'PULP VITTOPA KRISHNA 2 FEET GRAY'),
(82, 'PKV27BK', 'PULP VITTOPA KRISHNA 2 FEET BLACK'),
(83, 'PR30BL', 'PULP RUKMINI 2 FEET BLUE'),
(84, 'PR30GN', 'PULP RUKMINI 2 FEET GREEN'),
(85, 'PR30R', 'PULP RUKMINI 2 FEET RED'),
(86, 'PK33BL', 'PULP KRISHNA 2.5 FEET BLUE'),
(87, 'PK33W', 'PULP KRISHNA 2.5 FEET WHITE '),
(88, 'PK33G', 'PULP KRISHNA 2.5 FEET GRAY'),
(89, 'PK33BK', 'PULP KRISHNA 2.5 FEET BLACK'),
(90, 'PK40BL', 'PULP KRISHNA 3.5 FEET BLUE'),
(91, 'PK40W', 'PULP KRISHNA 3.5 FEET WHITE '),
(92, 'PK40G', 'PULP KRISHNA 3.5 FEET GRAY'),
(93, 'PK40BK', 'PULP KRISHNA 3.5 FEET BLACK'),
(94, 'PK56BL', 'PULP KRISHNA 4.5 FEET BLUE'),
(95, 'PK56W', 'PULP KRISHNA 4.5 FEET WHITE '),
(96, 'PK56G', 'PULP KRISHNA 4.5 FEET GRAY'),
(97, 'PK56BK', 'PULP KRISHNA 4.5 FEET BLACK'),
(98, 'PG9', 'PULP GANAPATHI 9\'\''),
(99, 'PG11', 'PULP GANAPATHI 11\'\''),
(100, 'PG13', 'PULP GANAPATHI 13\'\''),
(101, 'PK14G', 'PULP KRISHNA 14\'\' GRAY'),
(102, 'TESTP123', 'TEST PRODUCT 123'),
(103, 'TESTP124', 'TEST PRODUCT 124'),
(104, 'TESTP125', 'TEST PRODUCT 125'),
(105, 'PK24BL', 'PULP KRISHNA 24\'\' BLUE'),
(106, 'PK24G', 'PULP KRISHNA 24\'\' GRAY'),
(107, 'PK24W', 'PULP KRISHNA 24\'\' WHITE'),
(108, 'PK24BK', 'PULP KRISHNA 24\'\' BLACK'),
(109, 'PK16BL', 'PULP KRISHNA 16\'\' BLUE'),
(110, 'PK16G', 'PULP KRISHNA 16\'\' GRAY'),
(111, 'PK16BK', 'PULP KRISHNA 16\'\' BLACK'),
(112, 'PK16W', 'PULP KRISHNA 16\'\' WHITE'),
(113, 'PK18BL', 'PULP KRISHNA 18\'\' BLUE'),
(114, 'PK18G', 'PULP KRISHNA 18\'\' GRAY'),
(115, 'PK18W', 'PULP KRISHNA 18\'\' WHITE'),
(116, 'PK18BK', 'PULP KRISHNA 18\'\' BLACK'),
(117, 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE'),
(118, 'FK12W', 'FIBER KRISHNA 12\'\' WHITE'),
(119, 'FK12G', 'FIBER KRISHNA 12\'\' GRAY'),
(120, 'FK12BK', 'FIBER KRISHNA 12\'\' BLACK'),
(121, 'FK12CR', 'FIBER KRISHNA 12\'\' CREAM'),
(122, 'FK17BL', 'FIBER KRISHNA 17\'\' BLUE'),
(123, 'FK17W', 'FIBER KRISHNA 17\'\' WHITE'),
(124, 'FK17G', 'FIBER KRISHNA 17\'\' GRAY'),
(125, 'FK17BK', 'FIBER KRISHNA 17\'\' BLACK'),
(126, 'FK17CR', 'FIBER KRISHNA 17\'\' CREAM'),
(127, 'FK17VBL', 'FIBER KRISHNA 17\'\' VITTOPA BLUE'),
(128, 'FR20', 'FIBER RUKMINI  20\'\' '),
(129, 'FK20VBL', 'FIBER KRISHNA 20\'\' VITTOPA BLUE'),
(130, 'FK22BL', 'FIBER KRISHNA 22\'\' BLUE'),
(131, 'FK22W', 'FIBER KRISHNA 22\'\' WHITE '),
(132, 'FK22G', 'FIBER KRISHNA 22\'\' GRAY'),
(133, 'FK22BK', 'FIBER KRISHNA 22\'\' BLACK'),
(134, 'FK22CR', 'FIBER KRISHNA 22\'\' CREAM'),
(135, 'FK23BL', 'FIBER KRISHNA 23\'\' BLUE'),
(136, 'FK23W', 'FIBER KRISHNA 23\'\' WHITE '),
(137, 'FK23G', 'FIBER KRISHNA 23\'\' GRAY'),
(138, 'FK23BK', 'FIBER KRISHNA 23\'\' BLACK'),
(139, 'FK23CR', 'FIBER KRISHNA 23\'\' CREAM'),
(140, 'FK23VBL', 'FIBER KRISHNA 23\'\' VITTOPA BLUE'),
(141, 'FK23VBK', 'FIBER KRISHNA 23\'\' VITTOPA BLACK'),
(142, 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE'),
(143, 'FK27W', 'FIBER KRISHNA 2  FEET WHITE'),
(144, 'FK27G', 'FIBER KRISHNA 2 FEET GRAY'),
(145, 'FK27BK', 'FIBER KRISHNA 2 FEET BLACK'),
(146, 'FK27CR', 'FIBER KRISHNA  2 FEET CREAM'),
(147, 'FKV27BL', 'FIBER VITTOPA KRISHNA 2 FEET BLUE'),
(148, 'FKV27W', 'FIBER VITTOPA KRISHNA 2 FEET WHITE'),
(149, 'FKV27G', 'FIBER VITTOPA KRISHNA 2 FEET GRAY'),
(150, 'FKV27BK', 'FIBER VITTOPA KRISHNA 2 FEET BLACK'),
(151, 'FKV27CR', 'FIBER VITTOPA KRISHNA 2 FEET CREAM'),
(152, 'FKA27 ', 'FIBER ASHIRVADHAM  KRISHNA 2 FEET '),
(153, 'FR30', 'FIBER RUKMINI  30\'\' '),
(154, 'FK33BL', 'FIBER KRISHNA 2.5 FEET BLUE'),
(155, 'FK33W', 'FIBER KRISHNA 2.5 FEET WHITE '),
(156, 'FK33G', 'FIBER KRISHNA 2.5 FEET GRAY'),
(157, 'FK33BK', 'FIBER KRISHNA 2.5 FEET BLACK'),
(158, 'FK33CR', 'FIBER KRISHNA 2.5 FEET CREAM'),
(159, 'FK35BL', 'FIBER KRISHNA 35\" BLUE'),
(160, 'FK35W', 'FIBER KRISHNA 35\" WHITE'),
(161, 'FK35G', 'FIBER KRISHNA 35\" FEET GRAY'),
(162, 'FK35BK', 'FIBER KRISHNA 35\"  FEET BLACK'),
(163, 'FK35CR', 'FIBER KRISHNA 35\"  FEET CREAM'),
(164, 'FKV35BL', 'FIBER VITTOPA KRISHNA  35\" BLUE'),
(165, 'FKV35G', 'FIBER VITTOPA KRISHNA  35\" GRAY'),
(166, 'FKV35BK', 'FIBER VITTOPA KRISHNA 35\" BLACK'),
(167, 'FKV35CR', 'FIBER VITTOPA KRISHNA  35\"CREAM'),
(168, 'FK40BL', 'FIBER KRISHNA 3.5 FEET BLUE'),
(169, 'FK40W', 'FIBER KRISHNA 3.5 FEET WHITE '),
(170, 'FK40G', 'FIBER KRISHNA 3.5 FEET GRAY'),
(171, 'FK40BK', 'FIBER KRISHNA 3.5 FEET BLACK'),
(172, 'FK40CR', 'FIBER KRISHNA 3.5 FEET CREAM'),
(173, 'FKA40', 'FIBER ASHIRVADHAM  KRISHNA 40\"'),
(174, 'FK56BL', 'FIBER KRISHNA 4.5 FEET BLUE'),
(175, 'FK56W', 'FIBER KRISHNA 4.5 FEET WHITE '),
(176, 'FK56G', 'FIBER KRISHNA 4.5 FEET GRAY'),
(177, 'FK56BK', 'FIBER KRISHNA 4.5 FEET BLACK'),
(178, 'FK56CR', 'FIBER KRISHNA 4.5 FEET CREAM'),
(179, 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE'),
(180, 'FK18W', 'FIBER KRISHNA 18\'\'  WHITE '),
(181, 'FK18G', 'FIBER KRISHNA 18\'\' GREY'),
(182, 'FK18BK', 'FIBER KRISHNA 18\'\' BLACK'),
(183, 'FK24BL', 'FIBER KRISHNA 24\'\' BLUE'),
(184, 'FK24W', 'FIBER KRISHNA 24\'\' WHITE'),
(185, 'FK24G', 'FIBER KRISHNA 24\'\' GRAY'),
(186, 'FK24BK', 'FIBER KRISHNA 24\'\' BLACK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_types`
--

CREATE TABLE `tbl_product_types` (
  `id` int(70) NOT NULL,
  `product_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `id` int(70) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `bill_to` varchar(255) NOT NULL,
  `gstno` int(70) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `factory_out_price` int(100) NOT NULL,
  `sale_amount` int(70) NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `taxable_amount` int(100) NOT NULL,
  `transportation_expense` int(70) NOT NULL,
  `packaging_expense` int(70) NOT NULL,
  `total_amount` int(100) NOT NULL,
  `discount` int(70) NOT NULL,
  `total_taxable_amount` int(100) NOT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `received` int(70) DEFAULT 0,
  `balance` int(70) DEFAULT 0,
  `Amount` int(70) NOT NULL DEFAULT 0,
  `status` int(70) NOT NULL DEFAULT 0,
  `mycheck` int(70) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`id`, `date`, `month`, `year`, `user`, `bill_to`, `gstno`, `invoice_no`, `product_code`, `product_description`, `factory_out_price`, `sale_amount`, `product_quantity`, `taxable_amount`, `transportation_expense`, `packaging_expense`, `total_amount`, `discount`, `total_taxable_amount`, `CGST`, `SGST`, `received`, `balance`, `Amount`, `status`, `mycheck`) VALUES
(1, '2024-05-10', 'May', '2024', 'admin', 'Vinay', 0, 'VA00', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 140, 20, 0, 10, 0, 0, 30, 0, 0, 0, 2780, 0, 0, 1, 0),
(8, '2024-05-10', 'May', '2024', 'Shruthi', 'Customer 1', 0, 'VA001', 'PK16BL', 'PULP KRISHNA 16\'\' BLUE', 110, 180, 20, 3600, 0, 0, 3600, 0, 3600, 216, 216, 3600, 0, 4032, 1, 0),
(9, '2024-05-10', 'May', '2024', 'Shruthi', 'Customer 2', 0, 'VA008', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 460, 1, 460, 0, 0, 460, 0, 460, 27.6, 27.6, 460, 0, 514, 1, 0),
(10, '2024-05-10', 'May', '2024', 'Shruthi', 'Customer 3', 0, 'VA009', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 50, 6750, 0, 0, 6750, 0, 6750, 405, 405, 6750, 0, 7560, 1, 0),
(11, '2024-05-10', 'May', '2024', 'Shruthi', 'Customer 4', 0, 'VA0010', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 145, 50, 7250, 0, 0, 7250, 0, 7250, 435, 435, 7250, 0, 8120, 1, 0),
(12, '2024-05-10', 'May', '2024', 'Shruthi', 'Customer 5', 0, 'VA0011', 'POP12BL', 'PLASTER OF PARIS 12\'\' BLUE', 110, 115, 100, 11500, 0, 0, 11500, 0, 11500, 690, 690, 11500, 0, 12880, 1, 0),
(13, '2024-05-10', 'May', '2024', 'Shruthi', 'Customer 6', 0, 'VA0012', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 1, 1500, 0, 0, 1500, 0, 1500, 90, 90, 1500, 0, 1680, 1, 0),
(14, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 7', 0, 'VA0013', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 125, 50, 6250, 0, 0, 6250, 0, 6250, 375, 375, 6250, 0, 7000, 1, 0),
(15, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 8', 0, 'VA0014', 'PK18BL', 'PULP KRISHNA 18\'\' BLUE', 110, 180, 50, 9000, 0, 0, 9000, 0, 9000, 540, 540, 9000, 0, 10080, 1, 0),
(16, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer  9', 0, 'VA0015', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 325, 30, 9750, 0, 0, 9750, 0, 9750, 585, 585, 9750, 0, 10920, 1, 0),
(17, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 10', 0, 'VA0016', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 135, 10, 1350, 0, 0, 1350, 0, 1350, 81, 81, 1350, 0, 1512, 1, 0),
(18, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 11', 0, 'VA0017', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 1, 1500, 0, 0, 1500, 0, 1500, 90, 90, 1500, 0, 1680, 1, 0),
(19, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 12', 0, 'VA0018', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 3, 1350, 0, 0, 1350, 0, 1350, 81, 81, 1350, 0, 1512, 1, 0),
(20, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 13', 0, 'VA0019', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 5, 2250, 0, 0, 2250, 0, 2250, 135, 135, 2250, 0, 2520, 1, 0),
(21, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 14', 0, 'VA0020', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 1500, 135, 2, 270, 0, 0, 270, 0, 270, 16.2, 16.2, 270, 0, 302, 1, 0),
(22, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 15', 0, 'VA0021', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 8, 3600, 0, 0, 3600, 0, 3600, 216, 216, 3600, 0, 4032, 1, 0),
(23, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 16', 0, 'VA0022', 'PK18BL', 'PULP KRISHNA 18\'\' BLUE', 110, 180, 2, 360, 0, 0, 360, 0, 360, 21.6, 21.6, 360, 0, 402, 1, 0),
(24, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 17', 0, 'VA0023', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 145, 2, 290, 0, 0, 290, 0, 290, 17.4, 17.4, 290, 0, 324, 1, 0),
(25, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 18', 0, 'VA0024', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 10, 1350, 0, 0, 1350, 0, 1350, 81, 81, 1350, 0, 1512, 1, 0),
(26, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 19', 0, 'VA0025', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 4, 1800, 0, 0, 1800, 0, 1800, 108, 108, 1800, 0, 2016, 1, 0),
(27, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 20', 0, 'VA0026', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 145, 10, 1450, 0, 0, 1450, 0, 1450, 87, 87, 1450, 0, 1624, 1, 0),
(28, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 21', 0, 'VA0027', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 15, 2025, 0, 0, 2025, 0, 2025, 121.5, 121.5, 2025, 0, 2267, 1, 0),
(29, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 22', 0, 'VA0028', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 1, 1500, 0, 0, 1500, 0, 1500, 90, 90, 1500, 0, 1680, 1, 0),
(30, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 23', 0, 'VA0029', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 20, 2700, 0, 0, 2700, 0, 2700, 162, 162, 2700, 0, 3024, 1, 0),
(31, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 24', 0, 'VA0030', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 5, 7500, 0, 0, 7500, 0, 7500, 450, 450, 7500, 0, 8400, 1, 0),
(32, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 25', 0, 'VA0031', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 25, 3375, 0, 0, 3375, 0, 3375, 202.5, 202.5, 3375, 0, 3779, 1, 0),
(33, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 26', 0, 'VA0032', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 145, 5, 725, 0, 0, 725, 0, 725, 43.5, 43.5, 725, 0, 811, 1, 0),
(34, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 27', 0, 'VA0033', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 1, 450, 0, 0, 450, 0, 450, 27, 27, 450, 0, 504, 1, 0),
(35, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 28', 0, 'VA0034', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 50, 6750, 0, 0, 6750, 0, 6750, 405, 405, 6750, 0, 7560, 1, 0),
(36, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 29', 0, 'VA0035', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 10, 4500, 0, 0, 4500, 0, 4500, 270, 270, 4500, 0, 5040, 1, 0),
(37, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 30', 0, 'VA0036', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 7, 10500, 0, 0, 10500, 0, 10500, 630, 630, 10500, 0, 11760, 1, 0),
(38, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 31', 0, 'VA0037', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 50, 6750, 0, 0, 6750, 0, 6750, 405, 405, 6750, 0, 7560, 1, 0),
(39, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 32', 0, 'VA0038', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 10, 4500, 0, 0, 4500, 0, 4500, 270, 270, 4500, 0, 5040, 1, 0),
(40, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 33', 0, 'VA0039', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 7, 10500, 0, 0, 10500, 0, 10500, 630, 630, 10500, 0, 11760, 1, 0),
(41, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 34', 0, 'VA0040', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 22, 2970, 0, 0, 2970, 0, 2970, 178.2, 178.2, 2970, 0, 3326, 1, 0),
(42, '2024-05-11', 'May', '2024', 'Shruthi', 'Customer 35', 0, 'VA0041', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 145, 15, 2175, 0, 0, 2175, 0, 2175, 130.5, 130.5, 2175, 0, 2435, 1, 0),
(63, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 36', 0, 'VA0056', 'PK18BL', 'PULP KRISHNA 18\'\' BLUE', 110, 180, 10, 1800, 0, 0, 1800, 0, 1800, 108, 108, 1800, 0, 2016, 1, 0),
(64, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 37', 0, 'VA0063', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 3, 1350, 0, 0, 1350, 0, 1350, 81, 81, 1350, 0, 1512, 1, 0),
(65, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 38', 0, 'VA0064', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 14, 1890, 0, 0, 1890, 0, 1890, 113.4, 113.4, 1890, 0, 2116, 1, 0),
(66, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 39', 0, 'VA0065', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 14, 1890, 0, 0, 1890, 0, 1890, 113.4, 113.4, 1890, 0, 2116, 1, 0),
(67, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 40', 0, 'VA0066', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 145, 6, 870, 0, 0, 870, 0, 870, 52.2, 52.2, 870, 0, 974, 1, 0),
(68, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 41', 0, 'VA0067', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 4, 1800, 0, 0, 1800, 0, 1800, 108, 108, 1800, 0, 2016, 1, 0),
(69, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 42', 0, 'VA0068', 'PK18BL', 'PULP KRISHNA 18\'\' BLUE', 110, 600, 5, 3000, 0, 0, 3000, 0, 3000, 180, 180, 3000, 0, 3360, 1, 0),
(70, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 43', 0, 'VA0069', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 2, 3000, 0, 0, 3000, 0, 3000, 0, 0, 3000, 0, 3000, 1, 0),
(71, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 44', 0, 'VA0070', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 10, 4500, 0, 0, 4500, 0, 4500, 0, 0, 4500, 0, 4500, 1, 0),
(72, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 45', 0, 'VA0071', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 5, 7500, 0, 0, 7500, 0, 7500, 0, 0, 7500, 0, 7500, 1, 0),
(73, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 46', 0, 'VA0072', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 3, 4500, 0, 0, 4500, 0, 4500, 0, 0, 4500, 0, 4500, 1, 0),
(74, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 47', 0, 'VA0073', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 6, 2700, 0, 0, 2700, 0, 2700, 0, 0, 2700, 0, 2700, 1, 0),
(75, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 48', 0, 'VA0074', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 1100, 10, 11000, 0, 0, 11000, 0, 11000, 0, 0, 11000, 0, 11000, 1, 0),
(76, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 49', 0, 'VA0075', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 450, 1, 450, 0, 0, 450, 0, 450, 0, 0, 450, 0, 450, 1, 0),
(77, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 50', 0, 'VA0076', 'PK12BL', 'PULP KRISHNA 9\'\' BLUE', 110, 135, 35, 4725, 0, 0, 4725, 0, 4725, 0, 0, 4725, 0, 4725, 1, 0),
(78, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 51', 0, 'VA0077', 'PK14BL', 'PULP KRISHNA 14\'\' BLUE', 110, 145, 15, 2175, 0, 0, 2175, 0, 2175, 0, 0, 2175, 0, 2175, 1, 0),
(79, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 52', 0, 'VA0078', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 10, 4500, 0, 0, 4500, 0, 4500, 0, 0, 4500, 0, 4500, 1, 0),
(80, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 53', 0, 'VA0079', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 13, 19500, 0, 0, 19500, 0, 19500, 0, 0, 19500, 0, 19500, 1, 0),
(81, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 54', 0, 'VA0080', 'FK12BL', 'FIBER KRISHNA 12\'\' BLUE', 100, 450, 10, 4500, 0, 0, 4500, 0, 4500, 0, 0, 4500, 0, 4500, 1, 0),
(82, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 55', 0, 'VA0081', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 1, 1500, 0, 0, 1500, 0, 1500, 0, 0, 1500, 0, 1500, 1, 0),
(83, '2024-05-22', 'May', '2024', 'Shruthi', 'Customer 56', 0, 'VA0082', 'FK27BL', 'FIBER KRISHNA 2  FEET BLUE', 110, 1500, 1, 1500, 0, 0, 1500, 0, 1500, 0, 0, 1500, 0, 1500, 1, 0),
(103, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 57', 0, 'VA0083', 'PK18BL', 'PULP KRISHNA 18\'\' BLUE', 110, 610, 1, 610, 0, 0, 610, 0, 610, 0, 0, 0, 0, 610, 1, 0),
(104, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 58', 0, 'VA00103', 'FK24G', 'FIBER KRISHNA 24\'\' GRAY', 110, 1100, 1, 1100, 0, 0, 1100, 0, 1100, 0, 0, 0, 0, 1100, 1, 0),
(105, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 59', 0, 'VA00104', 'PK18BL', 'PULP KRISHNA 18\'\' BLUE', 110, 180, 50, 9000, 0, 0, 9000, 0, 9000, 0, 0, 0, 0, 9000, 1, 0),
(106, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 60', 0, 'VA00105', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 3, 1800, 0, 0, 1800, 0, 1800, 0, 0, 0, 0, 1800, 1, 0),
(107, '2024-05-30', 'May', '2024', 'Shruthi', ' Customer 61', 0, 'VA00106', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 5, 3000, 0, 0, 3000, 0, 3000, 0, 0, 0, 0, 3000, 1, 0),
(108, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 62', 0, 'VA00107', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 6, 3600, 0, 0, 3600, 0, 3600, 0, 0, 3600, 0, 3600, 1, 0),
(109, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 63', 0, 'VA00108', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 4, 2400, 0, 0, 2400, 0, 2400, 0, 0, 0, 0, 2400, 1, 0),
(110, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 64', 0, 'VA00109', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 1, 600, 0, 0, 600, 0, 600, 0, 0, 0, 0, 600, 1, 0),
(111, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 65', 0, 'VA00110', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 6, 3600, 0, 0, 3600, 0, 3600, 0, 0, 0, 0, 3600, 1, 0),
(112, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 66', 0, 'VA00111', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 1, 600, 0, 0, 600, 0, 600, 0, 0, 0, 0, 600, 1, 0),
(113, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 37', 0, 'VA00112', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 15, 9000, 0, 0, 9000, 0, 9000, 0, 0, 0, 0, 9000, 1, 0),
(114, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 38', 0, 'VA00113', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 15, 9000, 0, 0, 9000, 0, 9000, 0, 0, 0, 0, 9000, 1, 0),
(115, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 63', 0, 'VA00114', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 5, 3000, 0, 0, 3000, 0, 3000, 0, 0, 0, 0, 3000, 1, 0),
(116, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 65', 0, 'VA00115', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 10, 6000, 0, 0, 6000, 0, 6000, 0, 0, 0, 0, 6000, 1, 0),
(117, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 66', 0, 'VA00116', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 5, 3000, 0, 0, 3000, 0, 3000, 0, 0, 0, 0, 3000, 1, 0),
(118, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 67', 0, 'VA00117', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 5, 3000, 0, 0, 3000, 0, 3000, 0, 0, 0, 0, 3000, 1, 0),
(119, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 68', 0, 'VA00118', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 11, 6600, 0, 0, 6600, 0, 6600, 0, 0, 0, 0, 6600, 1, 0),
(120, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 68', 0, 'VA00119', 'FK18BL', 'FIBER KRISHNA 18\'\' BLUE', 110, 600, 10, 6000, 0, 0, 6000, 0, 6000, 0, 0, 0, 0, 6000, 1, 0),
(121, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 69', 0, 'VA00120', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 330, 20, 6600, 0, 0, 6600, 0, 6600, 0, 0, 0, 0, 6600, 1, 0),
(122, '2024-05-30', 'May', '2024', 'Shruthi', 'CUSTOMER 69', 0, 'VA00121', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 325, 5, 1625, 0, 0, 1625, 0, 1625, 0, 0, 0, 0, 1625, 1, 0),
(123, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 70', 0, 'VA00122', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 1100, 1, 1100, 0, 0, 1100, 0, 1100, 0, 0, 0, 0, 1100, 1, 0),
(124, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 71', 0, 'VA00123', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 330, 6, 1980, 0, 0, 1980, 0, 1980, 0, 0, 0, 0, 1980, 1, 0),
(125, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 72', 0, 'VA00124', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 330, 6, 1980, 0, 0, 1980, 0, 1980, 0, 0, 0, 0, 1980, 1, 0),
(126, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 73', 0, 'VA00125', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 330, 6, 1980, 0, 0, 1980, 0, 1980, 0, 0, 0, 0, 1980, 1, 0),
(127, '2024-05-30', 'May', '2024', 'Shruthi', 'Customer 75', 0, 'VA00126', 'PK24BL', 'PULP KRISHNA 24\'\' BLUE', 110, 330, 2, 660, 0, 0, 660, 0, 660, 0, 0, 0, 0, 660, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`id`, `category_id`, `subcategory`) VALUES
(11, 10, 'RUKMINI'),
(12, 10, 'GANAPATHI'),
(13, 10, 'KRISHNA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_years`
--

CREATE TABLE `tbl_years` (
  `id` int(70) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_years`
--

INSERT INTO `tbl_years` (`id`, `year`) VALUES
(20, '2023'),
(21, '2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_material_size`
--
ALTER TABLE `tbl_material_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_months`
--
ALTER TABLE `tbl_months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment_type`
--
ALTER TABLE `tbl_payment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_codes`
--
ALTER TABLE `tbl_product_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_types`
--
ALTER TABLE `tbl_product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_years`
--
ALTER TABLE `tbl_years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_material_size`
--
ALTER TABLE `tbl_material_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_months`
--
ALTER TABLE `tbl_months`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_payment_type`
--
ALTER TABLE `tbl_payment_type`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `tbl_product_codes`
--
ALTER TABLE `tbl_product_codes`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `tbl_product_types`
--
ALTER TABLE `tbl_product_types`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_years`
--
ALTER TABLE `tbl_years`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
