-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 03:56 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buynsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `ad_title` varchar(500) DEFAULT NULL,
  `item_condition` varchar(250) NOT NULL,
  `ad_description` varchar(1000) DEFAULT NULL,
  `nego` int(11) DEFAULT NULL,
  `posted_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `active_status` int(11) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `ad_catagory` int(11) NOT NULL,
  `locations_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `price`, `ad_title`, `item_condition`, `ad_description`, `nego`, `posted_date`, `active_status`, `contact`, `user_id`, `ad_catagory`, `locations_id`) VALUES
(13, 20000, 'Huawei GR3 for sale', 'Good', '3 months used', 1, '2018-09-13 20:38:02', NULL, 712141384, 14, 2, 5),
(14, 2500000, 'Mini Cooper 2017', 'Brand new', 'Plates not yet registered. Brand new', 0, '2018-09-13 21:06:39', NULL, 112485625, 14, 1, 9),
(15, 24000, 'Nokia 5', 'Brand new', 'Seal box. Call before coming', 1, '2018-09-13 21:19:20', NULL, 813565952, 14, 2, 13),
(16, 1500, 'Women hand bag', 'Brand new', 'Original leather bag', 0, '2018-09-14 07:22:08', NULL, 815749653, 17, 8, 12);

-- --------------------------------------------------------

--
-- Table structure for table `advert_images`
--

CREATE TABLE `advert_images` (
  `id` int(15) NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `advert_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advert_images`
--

INSERT INTO `advert_images` (`id`, `file_name`, `advert_id`) VALUES
(1, 'Huawei GR3 for sale Huawei_GR3_2017_L_1.jpg', 13),
(2, 'Huawei GR3 for sale Huawei-GR3-2017-Review.jpg', 13),
(3, 'Huawei GR3 for sale bc0291b7f448ce04912c5cbacfcd48250b1a7eee.jpg', 13),
(4, 'Mini Cooper 2017 523822-wIthHN8f5E2l9c1Se4xB1w.jpg', 14),
(5, 'Mini Cooper 2017 114636719.jpg', 14),
(6, 'Mini Cooper 2017 115680669.jpg', 14),
(7, 'Nokia 5 download.jpg', 15),
(8, 'Nokia 5 Nokia-5-Blue-Feature-Image_ml.png', 15),
(9, 'Nokia 5 Nokia-5-straga.jpg', 15),
(10, 'Women hand bag Luxury-Handbags-Women-Bags-Designer-Crossbody-Bag-Women-Small-Messenger-Bag-Women-s-Shoulder-bags-for (1).jpg', 16),
(11, 'Women hand bag Luxury-Handbags-Women-Bags-Designer-Crossbody-Bag-Women-Small-Messenger-Bag-Women-s-Shoulder-bags-for.jpg', 16),
(12, 'Women hand bag Luxury-Handbags-Women-Bags-Designer-Crossbody-Bag-Women-Small-Messenger-Bag-Women-s-Shoulder-bags-for.jpg_640x640.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `ad_catagories`
--

CREATE TABLE `ad_catagories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `fa_icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_catagories`
--

INSERT INTO `ad_catagories` (`id`, `name`, `description`, `fa_icon`) VALUES
(1, 'Vehicles', NULL, 'fa-car'),
(2, 'Mobile Phones & Tabs', NULL, 'fa-mobile'),
(3, 'Computers & Laptops', NULL, 'fa-laptop'),
(4, 'Electronic accessories', NULL, 'fa-headphones'),
(5, 'Camera', NULL, 'fa-camera'),
(6, 'TV & other Electronics', NULL, 'fa-tv'),
(7, 'Property', NULL, 'fa-home'),
(8, 'Fashion', NULL, 'fa-tshirt'),
(9, 'Sports', NULL, 'fa-volleyball-ball'),
(10, 'Animals', NULL, 'fa-crow'),
(11, 'Jobs', NULL, 'fa-user-md'),
(12, 'Education', NULL, 'fa-graduation-cap'),
(13, 'Food & Agriculture', NULL, 'fa-utensils');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `district` varchar(150) DEFAULT NULL,
  `area` varchar(150) DEFAULT NULL,
  `gmaps` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `district`, `area`, `gmaps`) VALUES
(3, 'Kandy', 'Kandy', NULL),
(4, 'Kandy', 'Katugasthota', NULL),
(5, 'Kandy', 'Peradeniya', NULL),
(6, 'Kandy', 'Gampola', NULL),
(7, 'Kandy', 'Kundasale', NULL),
(8, 'Kandy', 'Akurana', NULL),
(9, 'Kandy', 'Ampitiya', NULL),
(10, 'Kandy', 'Digana', NULL),
(11, 'Kandy', 'Galagedara', NULL),
(12, 'Kandy', 'Gelioya', NULL),
(13, 'Kandy', 'Kadugannawa', NULL),
(14, 'Kandy', 'Madawala', NULL),
(15, 'Kandy', 'Nawalapitiya', NULL),
(16, 'Kandy', 'Pilimathalawa', NULL),
(17, 'Kandy', 'Wattegama', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `payment` int(11) DEFAULT NULL,
  `delivered` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price_min` float DEFAULT NULL,
  `price_max` float DEFAULT NULL,
  `posted_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `ad_catagory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `responds_to_requests`
--

CREATE TABLE `responds_to_requests` (
  `id` int(11) NOT NULL,
  `message` varchar(500) DEFAULT NULL,
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `adverts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `email_verification_code` varchar(45) DEFAULT NULL,
  `locations_id` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birthday`, `email`, `pwd`, `email_verification_code`, `locations_id`, `active`) VALUES
(14, 'Heshani', 'Prabodha', NULL, 'heshanibandaranayake@gmail.com', '123456789', 'SLxXo', 5, 1),
(16, 'Vimukthi', 'Sineth', NULL, 'vimukthisineth@gmail.com', '987654321', 'NsWtA', 7, 0),
(17, 'John', 'Doe', NULL, 'john@doe.com', '456123789', '3uWVO', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `advert_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_adverts_users_idx` (`user_id`),
  ADD KEY `fk_adverts_ad_catagories1_idx` (`ad_catagory`),
  ADD KEY `fk_adverts_locations1_idx` (`locations_id`);

--
-- Indexes for table `advert_images`
--
ALTER TABLE `advert_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_catagories`
--
ALTER TABLE `ad_catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_purchases_users1_idx` (`seller_id`),
  ADD KEY `fk_purchases_users2_idx` (`buyer_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_requests_users1_idx` (`user_id`),
  ADD KEY `fk_requests_ad_catagories1_idx` (`ad_catagory`);

--
-- Indexes for table `responds_to_requests`
--
ALTER TABLE `responds_to_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_responds_to_requests_requests1_idx` (`request_id`),
  ADD KEY `fk_responds_to_requests_users1_idx` (`user_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_shopping_cart_users1_idx` (`user_id`),
  ADD KEY `fk_shopping_cart_adverts1_idx` (`adverts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_locations1_idx` (`locations_id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wish_list_users1_idx` (`user_id`),
  ADD KEY `fk_wish_list_adverts1_idx` (`advert_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `advert_images`
--
ALTER TABLE `advert_images`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ad_catagories`
--
ALTER TABLE `ad_catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responds_to_requests`
--
ALTER TABLE `responds_to_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adverts`
--
ALTER TABLE `adverts`
  ADD CONSTRAINT `fk_adverts_ad_catagories1` FOREIGN KEY (`ad_catagory`) REFERENCES `ad_catagories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_adverts_locations1` FOREIGN KEY (`locations_id`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_adverts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `fk_purchases_users1` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_purchases_users2` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `fk_requests_ad_catagories1` FOREIGN KEY (`ad_catagory`) REFERENCES `ad_catagories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requests_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `responds_to_requests`
--
ALTER TABLE `responds_to_requests`
  ADD CONSTRAINT `fk_responds_to_requests_requests1` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_responds_to_requests_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `fk_shopping_cart_adverts1` FOREIGN KEY (`adverts_id`) REFERENCES `adverts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shopping_cart_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_locations1` FOREIGN KEY (`locations_id`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `fk_wish_list_adverts1` FOREIGN KEY (`advert_id`) REFERENCES `adverts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wish_list_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
