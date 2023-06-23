-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 06:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `isactive`) VALUES
(1, 'demo', 'demo67@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `addresss` varchar(50) NOT NULL,
  `phnm` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `addresss`, `phnm`, `email`) VALUES
(3, 'ghar', ' 0321546987', 'bk24@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` bigint(50) NOT NULL,
  `product_quantity` tinyint(50) NOT NULL,
  `product_catogary` int(11) NOT NULL,
  `product_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`product_id`, `product_name`, `product_price`, `product_quantity`, `product_catogary`, `product_image`) VALUES
(14, 'honda 125 2017', 2000000, 4, 14, '../../productimages/125.jfif'),
(16, 'twin laser', 720001400, 1, 10, '../../productimages/download (3).jfif'),
(17, 'clutch plate', 650, 1, 16, '../../productimages/clutch.jpg'),
(18, 'racing shoes', 340, 1, 15, '../../productimages/racing.jpg'),
(19, 'chain sprocket', 1200, 1, 16, '../../productimages/chain sprocket.jpg'),
(20, 'watch', 1200, 1, 15, '../../productimages/th.jpg'),
(21, 'air ground missiles', 11000, 3, 10, '../../productimages/Screenshot (5).png'),
(22, 'mehran', 2100000, 1, 12, '../../productimages/th (1).jpg'),
(23, 'cup set', 1200, 1, 11, '../../productimages/cupset.jpg'),
(24, 'piston kit', 450, 1, 16, '../../productimages/piston.jpg'),
(25, 'baseball bat', 550, 1, 15, '../../productimages/bbt.jpg'),
(26, 'audionic speaker', 2000, 1, 10, '../../productimages/audionic.jpg'),
(27, 'heaDPHONE', 1600, 1, 10, '../../productimages/hd.jpg'),
(28, 'VIVO Y21', 25000, 1, 10, '../../productimages/VIVO.jpg'),
(29, 'L.C.D', 2800, 1, 10, '../../productimages/LCD.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `name`, `description`) VALUES
(2, ' free DELEIVERY  ', 'XZSCASCA'),
(3, 'free service', 'asd'),
(4, 'good quality', 'jk'),
(5, 'sugar free', 'redrthrhthth'),
(6, 'super star', 'sdsdvgsdv'),
(7, 'waiz', 'faargih');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catogary`
--

CREATE TABLE `tbl_catogary` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_catogary`
--

INSERT INTO `tbl_catogary` (`id`, `name`, `description`) VALUES
(8, 'HEALTH AND BEAUTY', 'health abn beauty'),
(10, 'ELECTRONICS  ARTS', ''),
(11, 'Crockeries', 'y'),
(12, 'car', 'cultus'),
(14, 'cg 125', 'honda'),
(15, 'MENS COLLECTION', 'gh'),
(16, 'sphere parts', ''),
(17, 'weapons', 'zz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_commerce`
--

CREATE TABLE `tbl_commerce` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `mssg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_commerce`
--

INSERT INTO `tbl_commerce` (`id`, `name`, `email`, `subject`, `mssg`) VALUES
(5, ' ali ', ' ali321@gmail.com', '  sindhi', 'acaha nh hai'),
(6, '  bilal', ' bilalrao321@gmail.com', '  maths', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_add` varchar(50) NOT NULL,
  `emp_num` varchar(50) NOT NULL,
  `emp_gender` varchar(50) NOT NULL,
  `emp_salary` bigint(20) NOT NULL,
  `emp_dep` varchar(50) NOT NULL,
  `emp_password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'approve',
  `emp_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `emp_name`, `emp_email`, `emp_add`, `emp_num`, `emp_gender`, `emp_salary`, `emp_dep`, `emp_password`, `status`, `emp_img`) VALUES
(4, 'waiz', 'waiz56@com', 'ghar', '02332214555', 'MALE', 45000, 'manufa', '', 'unapprove', '../../employeeimages/th.jpg'),
(5, ' mano', 'mano897@gmail.com', ' liyari80', ' 02332214554', ' OTHERS', 32000, 'offmanager', '', 'unapprove', ' ../../employeeimages/Screenshot (75) (1).png'),
(6, '  M.BILAL KHAN Rao', 'sbilal487@gmail.com', '  scheme33 gulzar- e- hijri', '  03308610403', 'MALE', 35000, 'php developer', '123', 'approve', '../../employeeimages/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phnum` text NOT NULL,
  `addresss` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `phnum`, `addresss`, `pass`) VALUES
(1, ' Demo', 'demo@gmail.com', '1234', ' karachi', ' 123');

-- --------------------------------------------------------

--
-- Table structure for table `user detail`
--

CREATE TABLE `user detail` (
  `id` int(11) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user detail`
--

INSERT INTO `user detail` (`id`, `First Name`, `Last Name`, `Email`, `Password`) VALUES
(1, 'fahad', 'khan', 'tahakhan9270@gmail.com', '1244566'),
(2, 'fahad', 'khan', 'tahakhan9270@gmail.com', '1244566');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_catogary` (`product_catogary`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catogary`
--
ALTER TABLE `tbl_catogary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_commerce`
--
ALTER TABLE `tbl_commerce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user detail`
--
ALTER TABLE `user detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_catogary`
--
ALTER TABLE `tbl_catogary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_commerce`
--
ALTER TABLE `tbl_commerce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user detail`
--
ALTER TABLE `user detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_products`
--
ALTER TABLE `table_products`
  ADD CONSTRAINT `table_products_ibfk_1` FOREIGN KEY (`product_catogary`) REFERENCES `tbl_catogary` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
