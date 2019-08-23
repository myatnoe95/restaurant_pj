-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 11:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_menu`
--

CREATE TABLE `add_menu` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` varchar(100) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_menu`
--

INSERT INTO `add_menu` (`item_id`, `item_name`, `item_price`, `item_image`, `r_id`) VALUES
(1, 'Zinger Burger', '3500.ks', '', 1),
(2, 'Hash Brown', '1500.ks', 'hashbrown.jpg', 1),
(3, 'Set 1', '2900.ks', 'set1.jpg', 1),
(4, 'Double Pop', '2500.ks', 'double pop.jpg', 1),
(5, 'Salted Eggtart', '1500.ks', 'saltedeggtart.jpg', 1),
(7, 'Lychee Rose', '2900.ks', 'lychee rose.jpg', 1),
(9, 'Cole Slaw', '3000.ks', 'coleslaw.jpg', 1),
(11, 'Set A', '12000.ks++', '01.jpg', 2),
(12, 'Set B', '12000.ks++', '02.jpg', 2),
(13, 'Set C', '12000.ks++', '03.jpg', 2),
(14, 'Set D', '12000.ks++', '04.jpg', 2),
(15, 'Set E', '12000.ks++', '05.jpg', 2),
(16, 'Set F', '12000.ks++', '06.jpg', 2),
(17, 'Set G', '12000.ks++', '07.jpg', 2),
(18, 'ice coffee', '1200', 'Chrysanthemum.jpg', 3),
(19, 'Spare Rib Noodle', '4000.ks', 'pork_rid.jpg', 6),
(20, 'Seafood Noodle', '4500.ks', 'seafood.jpg', 6),
(21, 'Octopus Noodle', '4500.ks', 'squid.jpg', 6),
(22, 'Assorted Noodle', '5000.ks', 'assorted.jpg', 6),
(23, 'Water Prawn Noodle', '6500.ks', 'prawn.jpg', 6),
(24, 'Fish Noodle', '4000.ks', 'fish.jpg', 6),
(25, 'Chicken Noodle', '4500.ks', 'chicken.jpg', 6),
(26, 'Beef Noodle ', '4500.ks', 'beef.jpg', 6),
(27, 'Takoyaki Cake', '2500.ks', 'tarkoyarki.jpg', 6),
(28, 'Tokbokki', '2500.ks', 'topokki.jpg', 6),
(29, 'Kimbap Cake ', '3500.ks', 'kimbap.jpg', 6),
(30, 'Harry Set', '26000.ks', 'harry1.jpg', 4),
(31, 'Harry Set 2', '20000.ks', 'harry2.jpg', 4),
(32, 'Choco Smooth', '3000.ks', 'chocolate.jpg', 4),
(33, 'Stawberry Smooth', '3000.ks', 'stawberry.jpg', 4),
(34, 'Nilar Biryani Set', '2700.ks', 'nilar1.jpg', 7),
(35, 'Special Nilar Biryani Set', '3100.ks', 'nilar2.jpg', 7),
(36, 'Single Fried Chicken', '1500.ks', 'marrychicken.jpg', 8),
(37, 'Bean Rice Set', '3100.ks', 'bean_rice.jpg', 8),
(38, 'Curly Twist Fries', '1500.ks', 'marrypotato.jpg', 8),
(39, 'Chicken Finger', '1500.ks', 'chicken_finger.jpg', 8),
(40, 'jkkl', '4500.ks', 'cheesegenki.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `add_restaurant`
--

CREATE TABLE `add_restaurant` (
  `r_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `u_id` int(11) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `r_branch` varchar(100) NOT NULL,
  `r_hotline` varchar(100) NOT NULL,
  `food_type` varchar(100) NOT NULL,
  `r_type` varchar(100) NOT NULL,
  `r_image` varchar(255) NOT NULL,
  `point` int(11) NOT NULL,
  `approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_restaurant`
--

INSERT INTO `add_restaurant` (`r_id`, `email`, `u_id`, `r_name`, `r_address`, `r_branch`, `r_hotline`, `food_type`, `r_type`, `r_image`, `point`, `approve`) VALUES
(1, 'owner@gmail.com', 2, 'KFC Myanmar', 'No.375, Bogyoke Aung San Road, Pabedan Township, Yangon', 'KFC Hlaedan, KFC Junction Square, KFC SanPya, KFC KanTarYar, KFC AungMingalar', '09-966600600', 'Fast Food', 'Family', 'kfc.jpg', 10, 1),
(2, 'shwekaung@gmail.com', 4, 'Shwe Kaung Hotpot & BBQ Buffet', 'People\'s Park, Yangon', 'Moe Kaung, Yankin', '09-420805895', 'HotPot and BBQ Buffet', 'Family', 'sk_pp.jpg', 34, 1),
(3, 'iceberry@gmail.com', 5, 'Ice Berry', 'Hlaedan Township', 'Myanmar Plaza, Tarmwae, Myaynikone ', '01516506', 'Fast Food', 'Friend', 'iceberry.jpg.jpg', 30, 1),
(4, 'harry@gmail.com', 6, 'Harry Bar ', 'Myanmar Plaza', 'Junction Square', '09-777708395', 'Bar', 'Friend', 'harry.jpg.jpg', 42, 1),
(5, 'ykko@gmail.com', 7, 'YKKO', 'Hlaedan Township', 'No.488, Khay Mar Ti Road, North Oaklar', '09-440133330', 'HotPot and BBQ Buffet', 'Family', 'ykko.jpg', 9, 1),
(6, 'seoul@gmail.com', 9, 'Seoul Myanmar', 'No.20-22 Gyophyu Road, Minglar Taung Nyunt Township, Yangon', 'Thingankyun Township , Kamarywot Township', '09-967829999', 'Korean food', 'Couple', 'seoul.jpg', 39, 1),
(7, 'nilar@gmail.com', 10, 'Nilar Biryani', 'No.216, Anawyahtar Road, Papedan', 'Tarmwae, Insein, North Oaklapa', '09-977223191', 'Indian Food', 'Family', 'nilar.jpg', 1, 1),
(8, 'marrybrown@gmail.com', 11, 'Marrybrown Myanmar', 'No.7, Lay Daunt Kan Road, Shwe Kainary Shophouse, Yangon', 'Junction Square, Super One Kyaik Ka San Shopping Center, Dagon Center, Spring Line Shopping Mall', '09-263885500', 'Fast Food', 'Couple', 'marrybrown.jpg', 0, 1),
(9, 'breadtalk@gmail.com', 12, 'qqqq', 'qq', 'qq', '09-8888888', 'Chinese Food', 'Family', 'breadtalk.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bad`
--

CREATE TABLE `bad` (
  `id` int(11) NOT NULL,
  `r_id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bad`
--

INSERT INTO `bad` (`id`, `r_id`, `title`, `date`) VALUES
(1, 3, 'bad', '0000-00-00'),
(2, 3, 'bad service', '0000-00-00'),
(3, 3, '', '0000-00-00'),
(4, 4, 'bad atmosphere', '0000-00-00'),
(5, 3, 'slow service', '0000-00-00'),
(6, 2, 'bad', '0000-00-00'),
(7, 2, 'badly', '0000-00-00'),
(8, 6, 'bad\r\n', '2019-08-08'),
(9, 1, 'poor service', '2019-08-08'),
(10, 1, 'bad', '2019-08-08'),
(11, 1, 'bad', '2019-08-08'),
(12, 1, 'bad', '2019-08-08'),
(13, 1, 'badly noise', '2019-08-08'),
(14, 1, 'poor', '2019-08-08'),
(15, 1, 'messy', '2019-08-08'),
(16, 1, 'bad', '2019-08-08'),
(18, 6, 'not so good', '2019-08-08'),
(19, 6, 'poor customer service', '2019-08-09'),
(20, 5, 'bad service', '2019-08-09'),
(21, 5, 'bad', '2019-08-09'),
(22, 5, 'bad', '2019-08-09'),
(23, 1, 'poor', '2019-08-09'),
(24, 5, 'poor', '2019-08-09'),
(25, 5, 'badly', '2019-08-09'),
(26, 5, '									\r\n		bad						', '2019-08-09'),
(27, 5, 'poor system', '2019-08-09'),
(28, 3, 'not so bad', '2019-08-09'),
(29, 3, 'not so good', '2019-08-09'),
(30, 3, 'not so good', '2019-08-09'),
(31, 3, 'not good', '2019-08-09'),
(32, 3, 'not so good', '2019-08-09'),
(33, 3, 'not so good', '2019-08-09'),
(34, 3, 'badly', '2019-08-09'),
(35, 3, 'badly', '2019-08-09'),
(36, 3, 'badly', '2019-08-09'),
(37, 3, 'badly', '2019-08-09'),
(38, 3, 'bad', '2019-08-09'),
(39, 3, 'bad', '2019-08-09'),
(40, 3, 'bad', '2019-08-09'),
(41, 3, 'bad', '2019-08-09'),
(42, 3, 'bad', '2019-08-09'),
(43, 5, 'not good', '2019-08-09'),
(44, 5, 'not good', '2019-08-09'),
(45, 5, 'not good', '2019-08-09'),
(46, 5, 'not good', '2019-08-09'),
(47, 5, 'not good', '2019-08-09'),
(48, 5, 'bad', '2019-08-09'),
(49, 5, 'not good', '2019-08-09'),
(50, 5, 'bad', '2019-08-09'),
(51, 5, 'not so good', '2019-08-09'),
(52, 5, 'not good', '2019-08-09'),
(53, 3, 'good', '2019-08-09'),
(54, 3, 'good', '2019-08-09'),
(55, 3, 'not good', '2019-08-09'),
(56, 3, 'not good\r\n', '2019-08-09'),
(57, 3, 'very bad', '2019-08-09'),
(60, 4, '								very bad\r\n			', '2019-08-09'),
(63, 1, 'not so good', '2019-08-09'),
(64, 7, 'not good', '2019-08-18'),
(65, 8, 'bad', '2019-08-18'),
(66, 5, 'bad', '2019-08-18'),
(67, 8, 'bad', '2019-08-18'),
(68, 5, 'bad', '2019-08-18'),
(69, 2, 'no good', '2019-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE `food_type` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`id`, `name`) VALUES
(1, 'Korean food'),
(2, 'Chinese Food'),
(3, 'Bar'),
(4, 'Traditional Food'),
(5, 'Japanese Food'),
(6, 'Fast Food'),
(7, 'Hotpot'),
(8, 'Indian Food'),
(9, 'HotPot and BBQ Buffet');

-- --------------------------------------------------------

--
-- Table structure for table `good`
--

CREATE TABLE `good` (
  `id` int(11) NOT NULL,
  `r_id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `good`
--

INSERT INTO `good` (`id`, `r_id`, `title`, `date`) VALUES
(1, 0, 'good', '0000-00-00'),
(2, 1, 'good', '0000-00-00'),
(3, 3, 'nice', '0000-00-00'),
(4, 3, 'nice', '0000-00-00'),
(5, 4, 'good vibes', '0000-00-00'),
(6, 3, 'nice foods', '0000-00-00'),
(7, 3, 'good food and service', '0000-00-00'),
(8, 4, 'good vibe', '2019-08-08'),
(9, 6, 'not bad', '2019-08-08'),
(17, 5, 'good', '2019-08-09'),
(19, 5, 'good', '2019-08-09'),
(22, 3, 'good', '2019-08-09'),
(23, 3, 'good', '2019-08-09'),
(24, 3, 'not good', '2019-08-09'),
(25, 3, 'not good\r\n', '2019-08-09'),
(26, 3, 'very good', '2019-08-09'),
(27, 3, 'not bad', '2019-08-09'),
(28, 3, 'no taste', '2019-08-09'),
(29, 3, 'no bad', '2019-08-09'),
(30, 4, 'very good', '2019-08-09'),
(31, 3, 'not bad', '2019-08-09'),
(32, 3, 'not bad', '2019-08-09'),
(33, 4, 'not bad', '2019-08-09'),
(34, 1, 'not so bad', '2019-08-09'),
(35, 1, 'not bad', '2019-08-09'),
(36, 7, 'good food', '2019-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_pass`, `role`) VALUES
(1, 'Phoo', 'phoo@gmail.com', '$2y$10$Ul0SFKgK95sQoUYpNe.kxOszEsNNFAMa0hBiS1vNrpUExAx/CkVuy', 'admin'),
(2, 'owner', 'owner@gmail.com', '$2y$10$aG87dprCG5p/i.dKiZQNVudQVUeUKzk5J18vKoXH2XL/4Rj3GJwXC', 'owner'),
(3, 'admin', 'myatnoe211@gmail.com', '$2y$10$r1knsz7vTwH7oNjn3T6i5.cKAgqby1C9a6tJ.Li8BjRqXs4RAlBvq', 'owner'),
(4, 'ShweKaung', 'shwekaung@gmail.com', '$2y$10$L2iEdaVoaTv0YvjU/OmjcO1hmFTM18Cn3iEC97CJ.8yiOZ2Y3/2f.', 'owner'),
(5, 'IceBerry', 'iceberry@gmail.com', '$2y$10$Gqg72GCxfTMOLLoDg1LDPeRB8/pEaSnbMppMVQzaPSy6Tch.7RMGi', 'owner'),
(6, 'harry', 'harry@gmail.com', '$2y$10$q7hGkMF5aSIXcPSsh5RcQ.HQLdxTfHorxPmaITOpNRQT68AOIeAfC', 'owner'),
(7, 'YKKO', 'ykko@gmail.com', '$2y$10$ANnX3iQbXKLYh6dYzpY9NuWr7vyiS4PLeSsixo3Tc0StIJbDqTVPy', 'owner'),
(8, 'Zayy', 'zayy@gmail.com', '$2y$10$gJdP4TnV5fXWAfYPCghWWOJWLvGn5ytP7YkloHIwT8aYWuYKAFTuW', 'owner'),
(9, 'Seoul Myanmar', 'seoul@gmail.com', '$2y$10$sKpDSixvM.a4fTK5VmbUceDN3nWnEE7w3uUeTpqZgRUJrZUMnqeO6', 'owner'),
(10, 'Nilar', 'nilar@gmail.com', '$2y$10$SsEURaa/H47sLRs9yqfe0ucSqxxhhWsGydBcY8EAND6.JIkdIIqga', 'owner'),
(11, 'Marrybrown ', 'marrybrown@gmail.com', '$2y$10$gQTqnLaGwTa6/S1AAu3hc.gN9jH7rZyJkEwp/RmxGj8S0mQyuwKIu', 'owner'),
(12, 'breadtalk', 'breadtalk@gmail.com', '$2y$10$.Mh4.Kf4tKKSwUQrXH1vNOLX/KE.wHqZ6O1q84ecjBxYDrG1/Trve', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_menu`
--
ALTER TABLE `add_menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `add_restaurant`
--
ALTER TABLE `add_restaurant`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `bad`
--
ALTER TABLE `bad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `good`
--
ALTER TABLE `good`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_menu`
--
ALTER TABLE `add_menu`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `add_restaurant`
--
ALTER TABLE `add_restaurant`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bad`
--
ALTER TABLE `bad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `good`
--
ALTER TABLE `good`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
