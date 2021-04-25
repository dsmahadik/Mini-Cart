-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2021 at 09:33 PM
-- Server version: 8.0.22
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'Ishan', 'ishan1414', 'ishansarode95@gmail.com', '2021-04-20 05:44:09'),
(2, 'Ishn', 'ishu1414', 'ishansarode95@gmail.com', '2021-04-20 05:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(15, 1, 49);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int NOT NULL,
  `item_category` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_category`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Mobile', 'Samsung', 'Samsung Galaxy Note10 Ultra', 105499.00, './assets/products/1.png', '2020-03-28 11:08:57'),
(2, 'Mobile', 'Redmi', 'Redmi Note 7', 11999.00, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 'Mobile', 'Redmi', 'Redmi Note 6', 7999.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'Mobile', 'Redmi', 'Redmi Note 5', 4999.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'Mobile', 'Redmi', 'Redmi Note 4', 3999.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'Mobile', 'Redmi', 'Redmi Note 8', 13999.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'Mobile', 'Redmi', 'Redmi Note 9', 15999.00, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 'Mobile', 'Redmi', 'Redmi Note', 3449.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 'Mobile', 'Samsung', 'Samsung Galaxy S6', 35899.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 'Mobile', 'Samsung', 'Samsung Galaxy S7', 41999.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 'Mobile', 'Apple', 'Apple iPhone 5', 30000.00, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 'Mobile', 'Apple', 'Apple iPhone 6', 35999.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 'Mobile', 'Apple', 'Apple iPhone 7', 41000.00, './assets/products/15.png', '2020-03-28 11:08:57'),
(14, 'Electronic & Accessories ', 'Samsung', ' The Frame QLED 4K Smart TV', 81999.00, './assets/products/16.png', '2021-04-14 16:41:56'),
(15, 'Electronic & Accessories ', 'Samsung', 'Ultra HD LED Smart TV', 99999.00, './assets/products/17.png', '2021-04-14 16:41:56'),
(16, 'Electronic & Accessories ', 'Samsung', 'Full HD LED Smart TV', 31999.00, './assets/products/18.png', '2021-04-14 16:41:56'),
(17, 'Electronic & Accessories ', 'LG', 'All-in-One Ultra HD 4K Led Smart TV', 43999.00, './assets/products/19.png', '2021-04-14 16:41:56'),
(18, 'Electronic & Accessories ', 'LG', 'Nanocell Ultra HD 4K Led Smart TV', 79499.00, './assets/products/20.png', '2021-04-14 16:41:56'),
(19, 'Electronic & Accessories ', 'LG', 'HD Ready LED TV', 16599.00, './assets/products/21.png', '2021-04-14 16:41:56'),
(20, 'Electronic & Accessories ', 'Sony', 'X8500G Series Ultra HD 4K LED Smart TV', 94990.00, './assets/products/22.png', '2021-04-14 16:41:56'),
(21, 'Electronic & Accessories ', 'Sony', 'Bravia W672G Full HD LED Smart TV', 55790.00, './assets/products/23.png', '2021-04-14 16:41:56'),
(22, 'Electronic & Accessories ', 'Sony', 'Bravia Full HD LED Smart TV', 28606.00, './assets/products/24.png', '2021-04-14 16:41:56'),
(23, 'Electronic & Accessories ', 'Philips', '6800 HD Ready LED Smart TV', 17990.00, './assets/products/25.png', '2021-04-14 16:41:56'),
(24, 'Electronic & Accessories ', 'Philips', '6600 Ultra HD LED Smart TV ', 37999.00, './assets/products/26.png', '2021-04-14 16:41:56'),
(25, 'Electronic & Accessories ', 'Philips', 'Ultra HD 4K LED Smart TV', 70000.00, './assets/products/27.png', '2021-04-14 16:41:56'),
(26, 'Electronic & Accessories ', 'HP', 'Pavilion Gaming Ryzen 5 Quad Core 3550H - (8 GB/1 TB HDD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650) 15-ec0101AX Gaming Laptop', 49990.00, './assets/products/28.png', '2021-04-14 16:41:56'),
(27, 'Electronic & Accessories ', 'HP', 'Pavilion Gaming Ryzen 5 Hexa Core 4600H - (8 GB/1 TB HDD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650) 15-ec1052AX Gaming Laptop', 64990.00, './assets/products/29.png', '2021-04-14 16:41:56'),
(28, 'Electronic & Accessories ', 'HP', 'Pavilion Core i7 10th Gen - (16 GB + 32 GB Optane/512 GB SSD/Windows 10 Home/4GB Graphics/NVIDIA GeForce GTX 1650) 15-DK1151TX Gaming Laptop', 79990.00, './assets/products/30.png', '2021-04-14 16:41:56'),
(29, 'Electronic & Accessories ', 'Dell', 'G3 Core i7 10th Gen - (16 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4GB Graphics/NVIDIA GeForce GTX 1650) G3 3500 Gaming Laptop', 88990.00, './assets/products/31.png', '2021-04-14 16:41:56'),
(30, 'Electronic & Accessories ', 'Dell', 'XPS Core i7 10th Gen  - (16 GB/1 TB SSD/Windows 10 Home/4GB Graphics) XPS 9700 Laptop', 204114.00, './assets/products/32.png', '2021-04-14 16:41:56'),
(31, 'Electronic & Accessories ', 'Dell', 'Inspiron i5 9th Gen - (8 GB/512 GB SSD/Windows 10 Home/4GB Graphics/NVIDIA GeForce GTX 1650) G3 3590 Gaming Laptop', 74490.00, './assets/products/33.png', '2021-04-14 16:41:56'),
(32, 'Electronic & Accessories ', 'Lenovo', 'Ideapad S145 Core i3 10th Gen - (4 GB/256 GB SSD/Windows 10 Home) S145-15IIL Thin and Light Laptop', 36490.00, './assets/products/34.png', '2021-04-14 16:41:56'),
(33, 'Electronic & Accessories ', 'Lenovo', 'Ideapad 3 Core i5 10th Gen - (8 GB/1 TB HDD/Windows 10 Home) 15IIL05 Laptop ', 43990.00, './assets/products/35.png', '2021-04-14 16:41:56'),
(34, 'Electronic & Accessories ', 'Lenovo', 'Ideapad S 540 Core i5 10th Gen - (8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/2 GB Graphics) 540-15IML Thin and Light Laptop', 60885.00, './assets/products/36.png', '2021-04-14 16:41:56'),
(35, 'Electronic & Accessories ', 'Lenovo', 'IdeaPad Gaming 3i Core i5 10th Gen - (8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650 Ti/60 Hz) 15IMH05 Gaming Laptop', 64990.00, './assets/products/37.png', '2021-04-14 16:41:56'),
(36, 'Men\'s Fashion', 'Allen Solly', 'Solid Men Polo Neck White T-Shirt', 584.00, './assets/products/38.png', '2021-04-14 16:41:56'),
(37, 'Men\'s Fashion', 'Allen Solly', 'Textured Men Polo Neck Green T-Shirt', 584.00, './assets/products/39.png', '2021-04-14 16:41:56'),
(38, 'Men\'s Fashion', 'Allen Solly', 'Men Slim Fit Printed Cut Away Collar Casual Shirt', 844.00, './assets/products/40.png', '2021-04-14 16:41:56'),
(39, 'Men\'s Fashion', 'Raymond', 'Men Slim Fit Checkered Casual Shirt', 1034.00, './assets/products/41.png', '2021-04-14 16:41:56'),
(40, 'Men\'s Fashion', 'Raymond', 'Men Slim Fit Self Design Spread Collar Formal Shirt', 893.00, './assets/products/42.png', '2021-04-14 16:41:56'),
(41, 'Men\'s Fashion', 'ADIDAS', 'Solid Men Round Neck Blue T-Shirt', 881.00, './assets/products/43.png', '2021-04-14 16:41:56'),
(42, 'Men\'s Fashion', 'ADIDAS', 'Solid Men Round Neck White T-Shirt', 1007.00, './assets/products/44.png', '2021-04-14 16:41:56'),
(43, 'Men\'s Fashion', 'ADIDAS', 'Solid Men Polo Neck Black T-Shirt', 1199.00, './assets/products/45.png', '2021-04-14 16:41:56'),
(44, 'Women\'s Fashion', 'BIBA', 'Women Printed Pure Cotton A-line Kurta  (Multicolor)', 885.00, './assets/products/46.png', '2021-04-14 16:41:56'),
(45, 'Women\'s Fashion', 'BIBA', 'Women Printed Cotton Blend High Low Kurta  (Multicolor)', 1273.00, './assets/products/47.png', '2021-04-14 16:41:56'),
(46, 'Women\'s Fashion', 'BIBA', 'Women Printed Pure Cotton Straight Kurta  (Pink)', 891.00, './assets/products/48.png', '2021-04-14 16:41:56'),
(47, 'Women\'s Fashion', 'BIBA', 'Women Printed Cotton Viscose Blend Straight Kurta  (Red)', 824.00, './assets/products/49.png', '2021-04-14 16:41:56'),
(48, 'Women\'s Fashion', 'GAP', 'Casual Butterfly Sleeve Solid Women Black Top', 1049.00, './assets/products/50.png', '2021-04-14 16:41:56'),
(49, 'Women\'s Fashion', 'GAP', 'Casual Roll-up Sleeve Solid Women Grey Top', 1068.00, './assets/products/51.png', '2021-04-14 16:41:56'),
(50, 'Women\'s Fashion', 'GAP', 'Striped Women Boat Neck Dark Blue, White T-Shirt', 916.00, './assets/products/52.png', '2021-04-14 16:41:56'),
(51, 'Mobile', 'Samsung', 'Galaxy S20', 200000.00, '../assets/products/54.jpg', '2021-04-21 00:54:49'),
(52, 'Mobile', 'Samsung', 'Samsung S21 Ultra', 100000.00, '../assets/products/55.png', '2021-04-21 00:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'ishan', '$2y$10$KuUbWslNdRhfnBqn0u/g4.8VdehD1RUG3/I4eInla8Jilf3oBRIsu', 'ishansarode95@gmail.com', '2021-04-19 07:09:05'),
(2, 'd_s_mahadik', '$2y$10$V7uKRDKptFSjjiT21cN1pe0HVVHHYMYm6lDIUwZK0slwrZWMRcMXO', 'dsmahadik414@gmail.com', '2021-04-20 13:31:00'),
(3, 'abc', '$2y$10$VKWMaiEo7KgJh5YHKaaSae4AYeekQFhc74CzX80TsbDUEbIhKUM.S', 'abc@gmail.com', '2021-04-20 14:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`cart_id`, `user_id`, `item_id`) VALUES
(12, 1, 10),
(14, 1, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
