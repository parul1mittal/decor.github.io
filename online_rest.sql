-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 09:54 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9525661_online_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '', '2018-04-09 07:36:18'),
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', 'QX5ZMN', '2018-04-13 18:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `phone_number` int(11) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  `message` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `phone_number`, `email_address`, `message`) VALUES
(21, 'Parul Mittal', 2147483647, 'parulmital1997@gmail.com', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(18, 54, 'Bedsheet', 'comfortable', '981.00', '5cc64fb6e6093.jpg'),
(19, 61, 'Curtains', 'Light Weight', '50.00', '5cc7a9f89bcdc.jpg'),
(20, 60, 'Contemporary Dress', 'Shiny and Comfortable', '90.00', '5cc7aa4ea34f7.jpg'),
(22, 57, 'Bracelet', 'looking shiny and Glamorous', '30.00', '5ccd03f5d3018.jpg'),
(23, 57, 'Ear Rings', 'American Diamond earrings', '30.00', '5ccd0460c130d.jpg'),
(24, 54, 'BedCovers', 'Cotton king Fancy BedCover', '50.00', '5ccd055bccdbd.jpg'),
(25, 60, 'Contemporary Outfit', 'Contemporary fashion dress', '60.00', '5ccd0659ae123.jpg'),
(26, 61, 'Curatains', 'Polyester Jute Curtains Modern Design Contemporary', '50.00', '5ccd0714bc92f.jpg'),
(27, 62, 'Cushion cover', 'comfortable and light weight', '30.00', '5ccd0793526cb.jpg'),
(28, 62, 'Cushion cover', 'Shiny and Comfortable', '40.00', '5ccd07f704b44.jpg'),
(29, 63, 'Ethenic wear', 'looking shiny and Glamorous', '60.00', '5ccd087cdaf1b.jpg'),
(30, 63, 'Ethenic wear', 'Shiny and Comfortable', '50.00', '5ccd089a068e7.jpg'),
(31, 64, 'Western dress', 'comfortable', '60.00', '5ccd08f6a65be.jpg'),
(32, 64, 'Western dress', 'Shiny and Comfortable', '50.00', '5ccd0910d6b77.jpg'),
(33, 65, 'Suits', 'comfortable', '50.00', '5ccd096fecc08.jpg'),
(35, 65, 'Suits', 'Shiny and Comfortable', '50.00', '5ccd0ab187007.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(54, 12, 'Dillima', 'dilima12@gmail.com', '9414393593', 'dilima.com', '8am', '7pm', 'mon-sat', ' 3-C-12 Jawahar Nagar Jodhpur ', '5cc64c4519318.jpg', '2019-04-29 00:58:45'),
(57, 18, 'The Bracelet', 'bracelet97@gmail.com', '9414393592', 'bracelet.com', '10am', '7pm', 'mon-thu', '3-C-12 Jawahar Nagar near gbbs school', '5cc79bca6d0a6.jpg', '2019-04-30 00:50:18'),
(60, 17, 'Contemporary Wear', 'cwear2402@gmail.com', '9414393593', 'cwear.com', '11am', '7pm', 'mon-fri', '3-C-12 Jawahar Nagar', '5cc7a4795a596.jpg', '2019-04-30 01:27:21'),
(61, 13, 'US Store', 'curatains1997@gmail.com', '8562857222', 'curatains.com', '10am', '7pm', 'mon-sat', '3-C-12 Jawahar Nagar near police line area', '5cc7a4d2abe87.jpg', '2019-04-30 01:28:50'),
(62, 19, 'The Cushion Store', 'Cushionl1997@gmail.com', '9414393593', 'cushion.com', '10am', '7pm', 'mon-fri', '3-C-12 Jawahar Nagar', '5cc7a623e6bcf.jpg', '2019-04-30 01:34:27'),
(63, 21, 'Ethenica', 'ethenic1997@gmail.com', '9414393593', 'ethnica.com', '9am', '6pm', 'mon-fri', '3-C-12 Jawahar Nagar', '5cc7a8b3a59de.jpeg', '2019-04-30 01:45:23'),
(64, 20, 'The Sparkle', 'sparkle12@gmail.com', '9414393593', 'sparkle.com', '10am', '8pm', 'mon-thu', '3-C-12 Jawahar Nagar', '5cc7a8f374615.jpg', '2019-04-30 01:46:27'),
(65, 21, 'Red Dress', 'parulmital1997@gmail.com', '9414393593', 'ethnica.com', '8am', '5pm', 'mon-wed', '3-C-12 Jawahar Nagar', '5cca3f3ee28e6.jpg', '2019-05-02 00:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(12, 'Bedsheets', '2019-04-29 00:53:02'),
(13, 'Curtains', '2019-04-29 00:53:42'),
(17, 'Contemporary', '2019-04-30 00:32:51'),
(18, 'Acessories', '2019-04-30 00:33:09'),
(19, 'CushionCover', '2019-04-30 01:31:46'),
(20, 'WesternWear', '2019-04-30 01:44:03'),
(21, 'EthnicWear', '2019-04-30 01:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(33, 'parulmital1997@gmail.com', 'Parul', 'Mittal', 'parulmital1997@gmail.com', '+919414393593', '224cf2b695a5e8ecaecfb9015161fa4b', '3-C-12 Jawahar Nagar', 1, '2019-04-29 05:09:01'),
(34, 'w@gmail.com', 'pp', 'mm', 'w@gmail.com', '09414393593', 'fcea920f7412b5da7be0cf42b8c93759', '3-C-12 Jawahar Nagar', 1, '2019-04-26 00:54:11'),
(35, 'hh', 'Parul', 'll', 'parulmital19897@gmail.com', '+919414393593', '224cf2b695a5e8ecaecfb9015161fa4b', '3-C-12 Jawahar Nagar', 1, '2019-05-06 07:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(37, 31, 'jklmno', 5, '17.99', 'closed', '2018-04-18 19:51:50'),
(38, 31, 'Red Robins Chick on a Stick', 2, '34.99', NULL, '2018-04-18 19:52:34'),
(60, 34, 'Curtains', 1, '50.00', NULL, '2019-05-04 05:27:42'),
(61, 34, 'BedCovers', 3, '50.00', NULL, '2019-05-04 07:10:45'),
(62, 34, 'Curtains', 1, '50.00', NULL, '2019-05-04 07:10:45'),
(63, 34, 'BedCovers', 3, '50.00', NULL, '2019-05-04 07:28:50'),
(64, 34, 'Curtains', 1, '50.00', NULL, '2019-05-04 07:28:50'),
(65, 34, 'Bedsheet', 1, '981.00', NULL, '2019-05-05 16:21:52'),
(66, 34, 'Ethenic wear', 1, '50.00', NULL, '2019-05-06 01:17:23'),
(67, 34, 'Ethenic wear', 1, '50.00', NULL, '2019-05-06 01:36:58'),
(68, 34, 'Western dress', 1, '60.00', NULL, '2019-05-06 19:46:36'),
(69, 34, 'Contemporary Dress', 2, '90.00', NULL, '2019-05-06 19:46:36'),
(70, 34, 'Contemporary Outfit', 3, '60.00', NULL, '2019-05-06 19:46:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
