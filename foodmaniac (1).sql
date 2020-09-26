-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 06:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodmaniac`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_published` tinyint(1) DEFAULT NULL,
  `blog_created_at` date DEFAULT NULL,
  `blog_updated_at` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `bc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_desc`, `blog_image`, `blog_published`, `blog_created_at`, `blog_updated_at`, `user_id`, `bc_id`) VALUES
(16, 'Beef', 'adsfasdf', '../uploads/3246409335934lily-banse--YHSwy6uqvk-unsplash.jpg', NULL, '2020-09-07', NULL, 1, 1),
(21, 'Pizza', 'adsfasfda', '../uploads/3545953150049thomas-tucker-MNtag_eXMKw-unsplash.jpg', NULL, '2020-09-07', NULL, 1, 11),
(22, 'Sandwich', 'asdfasdf', '../uploads/6801743498175youjeen-cho-sBKLiRiunK0-unsplash.jpg', NULL, '2020-09-07', NULL, 1, 3),
(23, 'Sushi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '../uploads/6002767274073photo-1476224203421-9ac39bcb3327.jpg', NULL, '2020-09-08', NULL, 1, 12),
(24, 'Fish with Onions', 'In massa tempor nec feugiat. Velit egestas dui id ornare arcu. Nibh sit amet commodo nulla facilisi nullam. Amet est placerat in egestas erat imperdiet sed. Id velit ut tortor pretium viverra suspendisse potenti nullam. Vulputate ut pharetra sit amet aliquam id diam maecenas ultricies. Diam maecenas sed enim ut sem viverra aliquet eget. Consequat mauris nunc congue nisi vitae suscipit. In nisl nisi scelerisque eu. Et tortor consequat id porta. Enim facilisis gravida neque convallis a cras. Quam id leo in vitae turpis massa. Mattis molestie a iaculis at. ', '../uploads/7770713216061photo-1560717845-968823efbee1.jpg', NULL, '2020-09-08', NULL, 1, 6),
(25, 'Aloo dam', 'Imperdiet dui accumsan sit amet nulla facilisi morbi. Ullamcorper malesuada proin libero nunc consequat interdum varius. Accumsan lacus vel facilisis volutpat est velit. Sed arcu non odio euismod. Elit eget gravida cum sociis. Faucibus a pellentesque sit amet porttitor eget dolor morbi non. Vel facilisis volutpat est velit. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Nunc scelerisque viverra mauris in aliquam. Urna porttitor rhoncus dolor purus non enim.', '../uploads/8592849513805viktor-forgacs-WmKXu-bzygo-unsplash.jpg', NULL, '2020-09-08', NULL, 1, 2),
(26, 'Grilled Steak', 'Urna porttitor rhoncus dolor purus non enim praesent. Congue mauris rhoncus aenean vel. Nunc mi ipsum faucibus vitae aliquet. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus. Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Ipsum dolor sit amet consectetur adipiscing elit duis tristique. Dictum sit amet justo donec enim diam vulputate. Amet massa vitae tortor condimentum lacinia quis vel eros.', '../uploads/6636692137538alex-munsell-Yr4n8O_3UPc-unsplash.jpg', NULL, '2020-09-09', NULL, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `bc_id` int(11) NOT NULL,
  `bc_title` varchar(255) NOT NULL,
  `bc_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`bc_id`, `bc_title`, `bc_desc`) VALUES
(1, 'Arabian', NULL),
(2, 'Indian', NULL),
(3, 'American', NULL),
(6, 'Keto', NULL),
(8, 'Fish', NULL),
(9, 'Soup', NULL),
(10, 'Chinese', NULL),
(11, 'Italian', NULL),
(12, 'Japanese', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `com_id` int(11) NOT NULL,
  `com_title` varchar(45) NOT NULL,
  `com_desc` text NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_type`
--

CREATE TABLE `blog_type` (
  `bt_id` int(11) NOT NULL,
  `bt_name` varchar(45) NOT NULL,
  `bt_desc` text DEFAULT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `res_id` int(11) NOT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_desc` text NOT NULL,
  `res_image` varchar(255) NOT NULL,
  `res_created_at` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`, `res_desc`, `res_image`, `res_created_at`, `user_id`) VALUES
(1, 'Sultans Dine', 'Sultans Dine is a restaurant dedicated to satisfy the opulent cravings with our delicious take on the traditional feast of the Sultans.\r\nWell, the first look gave a good impression, taste gave better. Quantity is abundant, quality and size of meat pieces are good, taste great (someone who doesnot like spicy food, might find little hot). Take some time to get your seat, especially in dhanmondi branch, there is no reservation system, so you have to be physically present to book your table.\r\nGreen Akshay Plaza, 146/G (old), 59 (new), Satmasjid Road Dhaka, Bangladesh', '../uploads/8427034623133sultan2.jpg', '2020-09-11', 4),
(2, 'Burger King', 'Cras maximus vulputate odio a laoreet. Quisque tristique purus sapien, ut vestibulum risus tristique vel. Vivamus porta facilisis finibus. Morbi quis ornare justo, ut auctor erat. Aliquam ultricies odio ac diam iaculis, non condimentum erat auctor. Sed bibendum feugiat velit, ut eleifend enim venenatis non. Proin quam neque, semper quis rhoncus sed, molestie eu sem. Cras convallis nibh enim, ac maximus arcu lobortis nec. Duis quis nibh varius, elementum dolor ut, vestibulum tortor. Donec diam turpis, vestibulum bibendum rhoncus nec, tristique eget ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut urna orci, lobortis sed magna non, gravida tincidunt tellus.', '../uploads/6153740448816burger-king.jpg', '2020-09-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` text NOT NULL,
  `role_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_desc`) VALUES
(1, 'admin', NULL),
(2, 'user', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_password` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_mobile`, `user_email`, `user_created_at`, `user_password`, `user_first_name`, `user_last_name`, `role_id`) VALUES
(1, 'saadlais', 1672777008, 'saadibnelukmanali@gmail.com', '2020-08-27 14:40:16', '202cb962ac59075b964b07152d234b70', '', '', 2),
(2, 'user', 2147483647, 'user@foodmaniac.cf', '2020-08-27 14:42:05', '68053af2923e00204c3ca7c6a3150cf7', '', '', 2),
(3, 'Brimstone', 1795737254, 'brim@foodmaniac.cf', '2020-08-27 14:44:30', '250cf8b51c773f3f8dc8b4be867a9a02', '', '', 2),
(4, 'admin', 1611211211, 'saadlaisd@gmail.com', '2020-09-08 16:54:43', '123', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `fkIdx_27` (`user_id`),
  ADD KEY `fkIdx_81` (`bc_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`bc_id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `fkIdx_54` (`blog_id`);

--
-- Indexes for table `blog_type`
--
ALTER TABLE `blog_type`
  ADD PRIMARY KEY (`bt_id`),
  ADD KEY `fkIdx_60` (`blog_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `fkIdx_70` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fkIdx_75` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `bc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_type`
--
ALTER TABLE `blog_type`
  MODIFY `bt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_27` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `FK_81` FOREIGN KEY (`bc_id`) REFERENCES `blog_category` (`bc_id`);

--
-- Constraints for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD CONSTRAINT `FK_54` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`);

--
-- Constraints for table `blog_type`
--
ALTER TABLE `blog_type`
  ADD CONSTRAINT `FK_60` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `FK_70` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_75` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
