-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2021 at 06:44 PM
-- Server version: 5.7.34
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softech1_bmc_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_name`
--

CREATE TABLE `category_name` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `parent_name` text NOT NULL,
  `status` int(11) NOT NULL,
  `current_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_name`
--

INSERT INTO `category_name` (`id`, `category_name`, `parent_name`, `status`, `current_date_time`) VALUES
(36, 'Education', '', 0, '2020-12-22 16:58:19'),
(37, 'School', '36', 0, '2020-12-22 16:58:31'),
(38, 'college', '36', 0, '2020-12-22 17:46:37'),
(39, 'Graduation', '36', 0, '2021-01-24 16:29:21'),
(42, 'Hospital', '', 0, '2020-12-22 19:26:42'),
(43, 'public', '38', 0, '2020-12-22 19:26:51'),
(44, 'private', '37', 0, '2020-12-22 19:41:16'),
(45, 'Clinic', '42', 0, '2021-01-21 16:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `file_name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `title`, `file_name`) VALUES
(27, '1', 'Screenshot_from_2020-10-20_17-52-47.png,Screenshot_from_2020-11-17_18-06-16.png'),
(28, '1', 'Screenshot_from_2020-11-17_18-06-161.png'),
(29, '1', 'Screenshot_from_2020-10-20_17-52-471.png,Screenshot_from_2020-10-20_17-52-49.png,Screenshot_from_2020-10-20_17-52-50.png,Screenshot_from_2020-11-17_18-06-162.png,Screenshot_from_2020-11-17_18-06-23.png'),
(30, '1', 'Screenshot_from_2020-11-17_18-06-163.png'),
(31, '1', 'Screenshot_from_2020-11-17_18-06-164.png'),
(32, '1', 'Screenshot_from_2020-11-17_18-06-165.png'),
(33, '1', 'Screenshot_from_2020-11-17_18-06-166.png'),
(34, '1', 'Screenshot_from_2020-10-20_17-52-501.png');

-- --------------------------------------------------------

--
-- Table structure for table `roll_master`
--

CREATE TABLE `roll_master` (
  `roll_id` int(11) NOT NULL,
  `roll_name` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roll_master`
--

INSERT INTO `roll_master` (`roll_id`, `roll_name`, `created_by`, `created_at`) VALUES
(1, 'Admin', 1, '2020-06-22 14:56:39'),
(2, 'Authority', 1, '2020-06-22 14:55:19'),
(3, 'Executive', 1, '2020-06-22 14:56:49'),
(4, 'Sub-Admin', 1, '2020-06-22 14:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `service_registration`
--

CREATE TABLE `service_registration` (
  `id` int(11) NOT NULL,
  `service_head` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `amount_services` varchar(255) NOT NULL,
  `type` text NOT NULL,
  `ward_number` text NOT NULL,
  `manager_name` varchar(30) NOT NULL,
  `manager_email` varchar(25) NOT NULL,
  `manager_contact` bigint(12) NOT NULL,
  `place` text NOT NULL,
  `nearby_location` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `location_latitude` float NOT NULL,
  `location_longitude` float NOT NULL,
  `store_ref_address` text NOT NULL,
  `working_hour_from` time NOT NULL,
  `working_hour_to` time NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `profile` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_registration`
--

INSERT INTO `service_registration` (`id`, `service_head`, `pincode`, `amount_services`, `type`, `ward_number`, `manager_name`, `manager_email`, `manager_contact`, `place`, `nearby_location`, `city`, `state`, `location_latitude`, `location_longitude`, `store_ref_address`, `working_hour_from`, `working_hour_to`, `file_name`, `profile`, `created_at`, `status`) VALUES
(38, 'M.K.E.S. English School', 400064, 'paid', '44', '21', 'Mrs. Kalpana Dogra', 'surajghpta1199@gmail.com', 8692888585, '37', 'Malad west', 'Mumbai', 'Maharashtra', 19.193, 72.848, '\"\"\"\"B-1, Bhadran Nagar Rd, Kandivali, Bhadran Nagar, Kandivali West, Mumbai, Maharashtra 400064, India\"\"\"\"', '07:15:00', '12:45:00', 'Screenshot_from_2020-10-20_17-52-476.png', 'person_21.jpg', '2020-11-30 18:09:39', 1),
(39, 'Shree Nutan Vidya Mandir', 400064, 'paid', '44', '21', 'Mrs. Nuzhat R Khan', 'shreenutanvidyamandir@yah', 9702777957, '37', 'Malad', 'Mumbai', 'Maharashtra', 19.1917, 72.8667, '2a, Shivaji Nagar Rd, Siddharth Nagar 4, Hanuman Nagar, Kandivali East, Mumbai, Maharashtra 400097, India', '07:15:00', '12:45:00', '', '5.jpg', '2020-11-30 20:24:34', 0),
(40, 'St.Joseph\'s Primary School', 400064, 'unpaid', '42', '21', 'Mrs. Caroline D\'Souza', 'st_josephs_school@yahoo.c', 9819030930, '45', 'Malad west', 'Mumbai', 'Maharashtra', 19.1955, 72.8375, '\"\"SN 4 & 5, Gr Flr, Grotto Heritage CHS, opposite Our Lady of Lourdes Church, Malad, Orlem, Malad West, Mumbai, Maharashtra 400064, India\"\"', '07:15:00', '12:45:00', '', 'box-33.png', '2020-12-01 12:09:26', 0),
(41, 'St.Anne\'s High School', 400064, 'paid', '44', '46', 'Mrs. Clara Barnes ', 'sahsps@yahoo.com', 9833324228, '37', 'Malad west', 'Mumbai', 'Maharashtra', 19.1943, 72.8376, 'Sundar Lane, Marve Rd, Malad, Orlem, Malad West, Mumbai, Maharashtra 400064, India', '07:15:00', '12:45:00', 'box-3.png,person_3.jpg,NERD-box-front.png,5.jpg', 'box-3.png', '2020-12-01 12:15:42', 0),
(42, 'Carmel of St.Joseph School', 400064, 'unpaid', '43', '46', 'Sr. Ramya', 'contactus@carmelofstjosep', 9769203837, '38', 'Malad', 'Mumbai', 'Maharashtra', 19.1937, 72.842, '\"\"\"\"\"\"\"\"Adarsh Lane, Off, Marve Rd, Malad, Adarsh Dugdhalaya, Dominic Colony, Malad West, Mumbai, Maharashtra 400064, India\"\"\"\"\"\"\"\"', '12:15:00', '18:45:00', 'Screenshot_from_2020-10-20_17-52-4731.png,Screenshot_from_2020-11-17_18-06-1617.png,Screenshot_from_2020-11-17_18-06-2318.png', 'person_58.jpg', '2020-12-01 12:17:16', 0),
(54, 'M.K.E.S. English School', 400097, 'paid', '44', '21', 'Mrs. Kalpana Dogra', 'shreenutanvidyamandir@yah', 868568585, '38', 'malad east', 'mumbai', 'maharashtra', 19.187, 72.8489, 'Malad, Malad Footover Bridge, Malad, Vijaykar Wadi Industrial, Vijaykar Wadi, Malad West, Mumbai, Maharashtra 400064, India', '17:40:00', '22:40:00', '', 'person_31.jpg', '2020-12-23 16:40:56', 0),
(55, 'M.K.E.S. English School', 400097, '', '', '46', 'Mrs. Kalpana Dogra', 'shreenutanvidyamandir@yah', 2212121212, '38', 'malad east', 'mumbai', 'maharashtra', 19.187, 72.8489, 'Malad, Malad Footover Bridge, Malad, Vijaykar Wadi Industrial, Vijaykar Wadi, Malad West, Mumbai, Maharashtra 400064, India', '21:24:00', '23:24:00', '', 'person_1.jpg', '2020-12-23 17:24:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `password` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `user_type`, `username`, `email`, `phone`, `password`, `created_by`, `created_at`, `status`) VALUES
(1, 1, 'admin', 'admin@gmail.com', 0, 'admin', 1, '2020-06-22 15:02:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `ratedindex` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `review` text NOT NULL,
  `current_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rating`
--

INSERT INTO `user_rating` (`id`, `service_id`, `ratedindex`, `full_name`, `email`, `review`, `current_date_time`) VALUES
(38, 38, 5, 'sasa', 'sasa', 'asasa', '2020-12-09 17:00:34'),
(39, 38, 4, 'aaa', 'admin@gmail.com', 'fafa', '2020-12-09 17:17:19'),
(40, 38, 4, 'suraj', 'email1@gmail.com', 'asasas', '2020-12-09 17:28:14'),
(41, 38, 5, 'sanket', 'itsmeguptasuraj1999@gmail.com', 'asasas', '2020-12-09 17:28:56'),
(42, 38, 3, 'sunil', 'sunil786@gmail.com', 'sdda', '2020-12-09 17:36:28'),
(43, 38, 5, 'suraj', 'swatidubey786@gmail.com', 'wqwqwq', '2020-12-09 17:38:05'),
(44, 41, 4, 'suman', 'suman22@gmail.com', 'hiiii', '2020-12-09 17:40:55'),
(45, 41, 4, 'suman', 'suman22@gmail.com', 'hiiii', '2020-12-09 17:42:17'),
(46, 42, 5, 'simran', 'shalu2894@gmail.com', 'hiiii', '2020-12-09 17:43:28'),
(47, 42, 2, 'suraj', 'email1@gmail.com', 'sasasas', '2020-12-09 17:45:40'),
(48, 38, 5, 'sunil', 'sunil786@gmail.com', 'hiiii', '2020-12-09 18:25:17'),
(49, 42, 5, 'suraj', 'email3@gmail.com', 'sasas', '2020-12-09 18:26:52'),
(50, 38, 2, 'suraj', 'email3@gmail.com', 'sasasa', '2020-12-09 18:28:22'),
(51, 38, 5, 'suraj', 'admin@gmail.com', 'asasas', '2020-12-09 18:33:09'),
(52, 38, 5, 'suraj', 'admin@gmail.com', 'asasas', '2020-12-09 18:33:42'),
(53, 38, 5, 'suraj', 'admin@gmail.com', 'asasas', '2020-12-09 18:35:48'),
(54, 38, 5, 'suraj', 'admin@gmail.com', 'asasas', '2020-12-09 18:36:11'),
(55, 38, 5, 'suraj', 'admin@gmail.com', 'asasas', '2020-12-09 18:36:14'),
(56, 38, 4, 'suraj', 'swatidubey786@gmail.com', 'wqwqw', '2020-12-09 18:36:51'),
(57, 38, 5, 'suraj', 'admin@gmail.com', 'wqwqwq', '2020-12-09 18:39:08'),
(58, 38, 4, 'aaa', 'admin@gmail.com', 'saaasas', '2020-12-09 18:40:57'),
(59, 38, 5, 'suraj', 'email1@gmail.com', 'sdssds', '2020-12-09 18:41:26'),
(60, 38, 5, 'suraj', 'email1@gmail.com', 'sasas', '2020-12-09 18:42:07'),
(61, 41, 5, 'sasasa', 'admin@gmail.com', 'sasas', '2020-12-09 18:46:11'),
(62, 42, 5, 'suraj', 'email1@gmail.com', 'sasasa', '2020-12-09 18:48:35'),
(63, 42, 2, 'suraj', 'email1@gmail.com', 'sasa', '2020-12-09 18:48:51'),
(64, 38, 5, 'suraj', 'admin@gmail.com', 'hiii', '2020-12-09 18:49:55'),
(65, 38, 3, 'suraj', 'admin@gmail.com', 'hiiii', '2020-12-09 18:50:29'),
(66, 40, 5, 'suraj', 'email1@gmail.com', 'hiii', '2020-12-09 18:51:12'),
(67, 40, 5, 'suraj', 'admin@gmail.com', 'hello everyone', '2020-12-09 18:51:46'),
(68, 41, 5, 'suraj', 'itsmeguptasuraj1999@gmail.com', 'asasa', '2020-12-09 18:56:55'),
(69, 42, 5, 'suraj', 'admin@gmail.com', 'sasasa', '2020-12-09 18:58:53'),
(70, 40, 5, 'suraj', 'swatidubey786@gmail.com', 'sasasa', '2020-12-09 19:00:32'),
(71, 41, 5, 'suraj', 'admin@gmail.com', 'hiiii', '2020-12-09 19:03:39'),
(72, 38, 5, 'suraj gupta', 'itsmeguptasuraj1999@gmail.com', 'asasa', '2020-12-09 19:05:06'),
(73, 38, 1, 'suraj', 'admin@gmail.com', 'sasas', '2020-12-09 19:06:05'),
(74, 38, 5, 'suraj', 'admin@gmail.com', ' dfd', '2020-12-09 19:07:14'),
(75, 41, 4, 'suraj', 'surajghpta1199@gmail.com', 'sasa', '2020-12-09 19:13:36'),
(76, 41, 1, 'suraj', 'swatidubey786@gmail.com', 'sasas', '2020-12-09 19:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_registeration`
--

CREATE TABLE `user_registeration` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_contact` bigint(20) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `current_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registeration`
--

INSERT INTO `user_registeration` (`user_id`, `user_name`, `user_contact`, `user_age`, `user_email`, `user_password`, `current_date_time`) VALUES
(12, 'suraj gupta', 2121212121, 21, 'surajghpta11999@gmail.com', '62cc2d8b4bf2d8728120d052163a77df', '2021-01-27 18:57:00'),
(13, 'pappu', 212121, 21, 'pappu@gmail.com', '62cc2d8b4bf2d8728120d052163a77df', '2021-01-27 18:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `ward_detail`
--

CREATE TABLE `ward_detail` (
  `id` int(11) NOT NULL,
  `jo_name` varchar(255) NOT NULL,
  `ward_number` int(11) NOT NULL,
  `ward_title` varchar(255) NOT NULL,
  `ward_lat` text NOT NULL,
  `ward_lng` text NOT NULL,
  `ward_lat_lng` text NOT NULL,
  `jo_contact` bigint(20) NOT NULL,
  `councilor_name` varchar(255) NOT NULL,
  `councilor_contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward_detail`
--

INSERT INTO `ward_detail` (`id`, `jo_name`, `ward_number`, `ward_title`, `ward_lat`, `ward_lng`, `ward_lat_lng`, `jo_contact`, `councilor_name`, `councilor_contact`) VALUES
(8, 'Dheeraj', 21, 'sasasas', '[\"19.113645\",\"19.1889541\",\"19.10135027990412\"]', '[\"72.8697339\",\"72.835543\",\"72.93564770444335\"]', '[{\"lat\":\"19.113645\",\"lng\":\"72.8697339\"},{\"lat\":\"19.1889541\",\"lng\":\"72.835543\"},{\"lat\":\"19.10135027990412\",\"lng\":\"72.93564770444335\"}]', 1111111111, 'suman', 888888888),
(9, 'Pappu', 46, 'XYZW', '[\"19.82452\",\"19.42584\",\"18.16652\"]', '[\"72.89256\",\"74.65852\",\"73.12548\"]', '[{\"lat\":\"19.82452\",\"lng\":\"72.89256\"},{\"lat\":\"19.42584\",\"lng\":\"74.65852\"},{\"lat\":\"18.16652\",\"lng\":\"73.12548\"}]', 22222222, 'pankaj', 999999999),
(12, 'deepak', 44, 'WWW', '[\"0.316\",\"0.541\"]', '[\"72.841\",\"72.889\"]', '[{\"lat\":\"0.316\",\"lng\":\"72.841\"},{\"lat\":\"0.541\",\"lng\":\"72.889\"}]', 777777777, 'manoj', 666666666),
(13, 'sujal', 42, 'BMC', '[\"27.12\",\"23.12\",\"22.17\",\"29.16\"]', '[\"32.41\",\"72.84\",\"78.89\",\"82.154\"]', '[{\"lat\":\"27.12\",\"lng\":\"32.41\"},{\"lat\":\"23.12\",\"lng\":\"72.84\"},{\"lat\":\"22.17\",\"lng\":\"78.89\"},{\"lat\":\"29.16\",\"lng\":\"82.154\"}]', 8458458458, 'sanket', 8528528526);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_name`
--
ALTER TABLE `category_name`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `roll_master`
--
ALTER TABLE `roll_master`
  ADD PRIMARY KEY (`roll_id`),
  ADD UNIQUE KEY `roll_id` (`roll_id`);

--
-- Indexes for table `service_registration`
--
ALTER TABLE `service_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_registeration`
--
ALTER TABLE `user_registeration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ward_detail`
--
ALTER TABLE `ward_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_name`
--
ALTER TABLE `category_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `service_registration`
--
ALTER TABLE `service_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_registeration`
--
ALTER TABLE `user_registeration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ward_detail`
--
ALTER TABLE `ward_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
