-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 07:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `id` int(30) NOT NULL,
  `ref_code` varchar(100) NOT NULL,
  `client_id` int(30) NOT NULL,
  `cab_id` int(30) NOT NULL,
  `pickup_zone` text NOT NULL,
  `drop_zone` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0 = Pending,\r\n1 = Driver has Confirmed,\r\n2 = Pickup,\r\n3 = drop-off,\r\n4 = cancelled',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`id`, `ref_code`, `client_id`, `cab_id`, `pickup_zone`, `drop_zone`, `status`, `date_created`, `date_updated`) VALUES
(2, '202202-00003', 1, 2, '74 Frosty Lane', '15 Franklee Lane', 4, '2022-02-16 13:53:27', '2022-03-26 22:07:49'),
(3, '202202-00003', 1, 2, '79 Shobe Lane', '48 Clinton Street', 3, '2022-02-16 15:33:10', '2022-03-26 22:08:01'),
(4, '202203-00001', 1, 2, '908 Edington Drive', '18 Victoria Street', 3, '2022-03-23 19:22:40', '2022-03-26 22:08:13'),
(5, '202203-00013', 3, 14, '372 Saint Marys Avenue', '244 Ersel Street', 3, '2022-03-23 09:14:08', '2022-03-23 09:14:08'),
(6, '202203-00013', 3, 4, '372 Saint Marys Avenue', '244 Ersel Street', 0, '2022-03-16 09:21:29', '2022-03-27 14:37:43'),
(7, '202203-00013', 4, 14, '870 School House Road', '99 Moore Avenue', 3, '2022-03-17 11:43:32', '2022-03-17 11:47:32'),
(8, '202203-00013', 5, 14, '12 Ray Court', '55 Peck Court', 3, '2022-03-17 16:44:23', '2022-03-17 16:44:23'),
(9, '202203-00013', 6, 14, '75 Brannon Avenue', '234 Hampton Meadows', 3, '2022-03-21 07:22:27', '2022-03-21 07:22:27'),
(10, '202203-00013', 7, 14, '35 Simpson Street', '90 Jadewood Farms', 3, '2022-03-21 06:38:44', '2022-03-21 06:38:44'),
(11, '202203-00013', 8, 14, '90 Jadewood Farms', '81 Rockford Mountain Lane', 4, '2022-03-24 11:00:27', '2022-03-24 11:00:27'),
(12, '202203-00013', 9, 14, '77 Driftwood Road', '43 Hickory Heights Drive', 3, '2022-03-24 14:00:15', '2022-03-24 14:00:15'),
(13, '202203-00013', 10, 14, '90 Glory Road', '38 Todds Lane', 3, '2022-03-25 17:17:16', '2022-03-25 17:17:16'),
(14, '202203-00013', 11, 14, '41 Coulter Lane', '27 Bicetown Road', 4, '2022-03-27 07:37:12', '2022-03-27 07:37:12'),
(15, '202203-00013', 12, 3, '70 Elk Avenue', '32 Joyce Street', 3, '2022-03-16 05:23:58', '2022-03-16 05:23:58'),
(16, '202203-00013', 12, 2, '85 Pearl Street', '403 Sunny Glen Lane', 4, '2022-03-17 06:39:50', '2022-03-17 06:39:50'),
(17, '202203-00013', 12, 7, '10 Yorkie Lane', '94 Austin Secret Lane', 3, '2022-03-24 17:00:44', '2022-03-24 17:00:44'),
(18, '202203-00013', 12, 8, '94 Braxton Street', '94 Burning Memory Lane', 3, '2022-03-24 05:57:25', '2022-03-24 05:57:25'),
(19, '202203-00013', 12, 11, '94 Burning Memory Lane', '20 Rosewood Lane', 4, '2022-03-26 19:07:56', '2022-03-26 19:07:56'),
(20, '202203-00013', 12, 9, '41 Public Works Drive', '200 Charack Road', 3, '2022-03-26 09:25:13', '2022-03-26 09:25:13'),
(21, '202203-00013', 4, 9, '31 Roosevelt Wilson Lane', '26 Aviation Way', 2, '2022-03-27 21:42:40', '2022-03-27 21:44:22'),
(22, '202203-00013', 9, 1, '98 Holt Street', '83 Monroe Avenue', 2, '2022-03-27 21:43:44', '2022-03-27 21:45:22'),
(23, '202203-00013', 12, 14, '487 Shadowmor Drive', '767 Walkers Ridge Way', 3, '2022-03-27 22:50:55', '2022-03-27 22:53:23'),
(24, '202203-00013', 12, 6, '144 Test Location', '522 Test Location', 4, '2022-03-27 22:54:41', '2022-03-27 22:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `cab_list`
--

CREATE TABLE `cab_list` (
  `id` int(30) NOT NULL,
  `reg_code` varchar(100) NOT NULL,
  `category_id` int(30) NOT NULL,
  `cab_reg_no` varchar(200) NOT NULL,
  `body_no` varchar(100) NOT NULL,
  `cab_model` text NOT NULL,
  `cab_driver` text NOT NULL,
  `driver_contact` text NOT NULL,
  `driver_address` text NOT NULL,
  `password` text NOT NULL,
  `image_path` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cab_list`
--

INSERT INTO `cab_list` (`id`, `reg_code`, `category_id`, `cab_reg_no`, `body_no`, `cab_model`, `cab_driver`, `driver_contact`, `driver_address`, `password`, `image_path`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, '202202-00002', 1, 'ASTR0306', 'Fusion-130', 'Ford Fusion', 'Mark Cooper', '09123456789', '94 Chestnut Street', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/dirvers/1.png?v=1644981064', 1, 0, '2022-03-02 10:59:12', '2022-03-27 22:04:44'),
(2, '202202-00001', 2, 'ASTR0715', 'Camry-440', 'Toyota Camry', 'George Williams', '09456987123', '69 Nixon Avenue', '7ad1aea197a92805ac70f71bdec579d3', 'uploads/dirvers/2.png?v=1644981833', 1, 0, '2022-03-02 11:13:30', '2022-03-27 22:04:51'),
(3, '202203-00001', 1, 'ASTR0123', 'Prius-1010', 'Toyota Prius', 'Henry', '7485658965', '12 Fincham Road', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/dirvers/3.png?v=1648051050', 1, 0, '2022-03-02 21:42:30', '2022-03-27 22:05:00'),
(4, '202203-00002', 1, 'ASTR0770', 'Soul-009', 'Kia Soul', 'Lexie Luthor', '7896478540', '70 Star Trek Drive', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-02 21:59:17', '2022-03-27 14:44:37'),
(5, '202203-00003', 1, 'ASTR0741', 'Civic-7781', 'Honda Civic', 'Allen S. Nichols', '7895410000', '74 Frosty Lane', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/dirvers/5.png?v=1648311707', 1, 0, '2022-03-02 22:06:47', '2022-03-27 14:44:40'),
(6, '202203-00004', 2, 'ASTR0850', 'ESV-7700', 'Cadillac Escalade ESV', 'Jose R. Kerner', '7850001010', '15 Chatham Way', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/dirvers/6.png?v=1648311872', 1, 0, '2022-03-02 22:09:32', '2022-03-27 14:44:43'),
(7, '202203-00005', 1, 'ASTR0555', 'iTen-1010', 'Hyundai i10', 'Tony W. Bryan', '4785478500', '59 Patterson Fork Road', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/dirvers/7.png?v=1648312063', 1, 0, '2022-03-02 22:12:43', '2022-03-02 22:12:43'),
(8, '202203-00006', 1, 'ASTR0020', 'Skoda-162TSI', 'Skoda Superb 162TSI', 'John J. Ackles', '2547854444', '49 Andell Road', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-02 22:16:57', '2022-03-27 14:44:48'),
(9, '202203-00007', 1, 'ASTRO0022', 'Picanto-7785', 'Kia Picanto', 'Amy K. Walker', '4558889850', '54 Dovetail Estates', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-02 22:18:41', '2022-03-27 14:44:51'),
(10, '202203-00008', 3, 'ASTR0089', 'Galaxy-7777', 'Ford Galaxy', 'Stanley J. Marty', '2589654570', '77 Park Street', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-02 13:00:24', '2022-03-27 14:44:53'),
(11, '202203-00009', 1, 'ASTR0047', 'Passat-7890', 'Volkswagen Passat', 'Gabriel M. Allen', '7896666666', '13 Boring Lane', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-02 13:02:37', '2022-03-27 14:44:57'),
(12, '202203-00010', 3, 'ASTR0258', 'Touran-8989', 'Volkswagen Touran', 'Wayne J. Broussard', '7412563250', '74 Goldleaf Lane', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-02 13:04:26', '2022-03-27 14:44:59'),
(13, '202203-00011', 1, 'ASTR0885', 'Toledo-5555', 'SEAT Toledo', 'Linda L. Reid', '7895555540', '29 Lake Floyd Circle', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-02 13:05:37', '2022-03-27 14:45:02'),
(14, '202203-00012', 1, 'ASTR0135', 'i30T-0135', 'Hyundai i30 Tourer', 'Will Williams', '7412580000', '259 Ridge Road', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/dirvers/14.png?v=1648366006', 1, 0, '2022-03-02 13:11:46', '2022-03-27 13:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list`(
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `description`, `delete_flag`, `status`, `date_created`, `date_updated`) VALUES
(1, '5 Seater', 'A 4-door passenger car with a trunk that is separate from the passengers with a three-box body: the engine, the area for passengers, and the trunk.', 0, 1, '2022-03-01 10:03:54', '2022-03-02 13:03:14'),
(2, '6 Seater', 'Quisque iaculis ipsum egestas nisi pharetra, ac laoreet felis tincidunt. Cras id gravida justo. Nulla non gravida risus, vel finibus leo. Phasellus vel eros ligula. Fusce a erat sed quam vehicula convallis.', 0, 1, '2022-03-01 10:08:10', '2022-03-27 14:45:51'),
(3, '7 Seater', 'Flexible, allowing you to switch between lots of seats or lots of boot space. The biggest manage to do both - comfortably taking six passengers and their stuff.', 0, 1, '2022-03-03 12:59:29', '2022-03-27 14:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `client_list`
--

CREATE TABLE `client_list` (
  `id` int(30) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `image_path` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_added` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_list`
--

INSERT INTO `client_list` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `contact`, `address`, `email`, `password`, `image_path`, `status`, `delete_flag`, `date_created`, `date_added`) VALUES
(1, 'Elizabeth', 'J.', 'Watson', 'Female', '1478555560', '85 Sycamore Lake Road', 'elizabeth@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/clients/1.png?v=1644995661', 1, 0, '2022-02-27 13:06:42', '2022-03-27 21:10:54'),
(2, 'Christine', 'M.', 'Moore', 'Female', '7412589666', '12 Bleck Street, PA', 'christine@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/clients/2.png?v=1648043485', 1, 0, '2022-03-01 19:36:24', '2022-03-27 21:10:40'),
(3, 'Luciano', 'B.', 'Fridley', 'Male', '7896585555', '372 Saint Marys Avenue', 'lsmith@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 13:13:38', '2022-03-27 21:11:06'),
(4, 'Matt', 'P.', 'Melton', 'Male', '4589658888', '870 School House Road', 'mattb@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 13:34:09', '2022-03-27 21:11:16'),
(5, 'James', 'P.', 'Luis', 'Male', '7850000010', '49 Poco Mas Drive', 'jamesp@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 13:39:25', '2022-03-27 21:11:28'),
(6, 'Timothy', 'E.', 'Maurer', 'Male', '1458965555', '75 Brannon Avenue', 'timothye@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 13:41:16', '2022-03-27 21:11:37'),
(7, 'Ebony', 'S.', 'Coulter', 'Female', '7850002145', '35 Simpson Street', 'ebonys@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 13:54:26', '2022-03-27 21:11:52'),
(8, 'Jason', 'F.', 'Billingsley', 'Male', '1458965555', '90 Jadewood Farms', 'jasonk@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 13:56:19', '2022-03-27 21:12:06'),
(9, 'Daniel', 'J.', 'Amos', 'Male', '4565550010', '77 Driftwood Road', 'daniel@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 13:59:54', '2022-03-27 21:12:17'),
(10, 'Edith', 'D.', 'Collins', 'Male', '1458965555', '90 Glory Road', 'edith@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 14:09:00', '2022-03-27 21:12:31'),
(11, 'Gina', 'J.', 'Bernard', 'Female', '1456854100', '41 Coulter Lane', 'ginac@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 14:14:37', '2022-03-27 21:12:47'),
(12, 'Thomas', 'J.', 'Greenwood', 'Male', '4569000010', '70 Elk Avenue', 'thomas@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/clients/12.png?v=1648370087', 1, 0, '2022-03-01 14:19:47', '2022-03-27 21:12:59'),
(13, 'Peter', 'J.', 'Fidley', 'Male', '1456985555', '42 Ridge Road', 'peter@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-27 21:10:14', NULL),
(14, 'John', 'H.', 'Hampton', 'Male', '4789652210', '50 Pooh Bear Lane', 'johnhm@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-27 22:20:32', NULL),
(15, 'Maria', 'J.', 'Connors', 'Female', '1478523655', '76 Richland Avenue', 'mariaj@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-27 22:21:08', NULL),
(16, 'Karen', 'M.', 'Brewer', 'Female', '1458888888', '591 Leisure Lane', 'karenb@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-27 22:21:53', NULL),
(17, 'Norma', 'K.', 'Gravelle', 'Female', '1458965555', '66 Blane Street', 'normak@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-27 22:24:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Cab Booking System'),
(6, 'short_name', 'CBS - PHP'),
(11, 'logo', 'uploads/1648050060_cbslg.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1648048980_cbss22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', 'Liam', 'admin', 'd00f5d5217896fb7fd601412cb890830', 'uploads/1624000_adminicn.png', NULL, 1, '2022-01-19 14:02:37', '2022-03-27 21:51:35'),
(8, 'Martha', 'Heath', 'martha', '3003051F6D158F6687B8A820C46BFA80', 'uploads/avatar-8.png?v=1648396920', NULL, 2, '2022-03-01 16:14:00', '2022-03-27 21:47:00'),
(9, 'Andrew', 'Stokes', 'andrew', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/avatar-9.png?v=1648396901', NULL, 2, '2022-03-27 21:46:41', '2022-03-27 21:46:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cab_id` (`cab_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `cab_list`
--
ALTER TABLE `cab_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_list`
--
ALTER TABLE `client_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_list`
--
ALTER TABLE `booking_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cab_list`
--
ALTER TABLE `cab_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `client_list`
--
ALTER TABLE `client_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD CONSTRAINT `booking_list_ibfk_1` FOREIGN KEY (`cab_id`) REFERENCES `cab_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_list_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cab_list`
--
ALTER TABLE `cab_list`
  ADD CONSTRAINT `cab_list_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
