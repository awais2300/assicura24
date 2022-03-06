-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 04:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `fname`, `lname`, `email`, `password`, `profile_pic`, `created_date`) VALUES
(1, 'Awais', 'Ahmad', 'awaiscoolhero@gmail.com', 'abc123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_no` int(11) NOT NULL AUTO_INCREMENT,
  `Plate_no` varchar(255) DEFAULT NULL,
  `IP` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date_request` datetime DEFAULT NULL,
  `status` enum('To be managed','Qoute Managed','waiting for furthur information','Denied','Issued','Waiting Payment','Inactive','Contract closed','Contract replacement') NOT NULL,
  `reg_cert` varchar(255) DEFAULT 'NULL',
  `price` double NOT NULL,
  `commission` double NOT NULL,
  `total` double NOT NULL,
  `Insurance_company_choosed` varchar(255) DEFAULT NULL,
  `Upload_company_offer_PDF` varchar(255) DEFAULT NULL,
  `Upload_signed_contract_PDF` varchar(255) DEFAULT NULL,
  `Contract_Number_PDF` varchar(255) DEFAULT NULL,
  `landing_page_link` varchar(255) DEFAULT NULL,
  `operator` enum('mark') NOT NULL,
  `starting_date` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `payment_of_split` enum('annual','monthly','weekly') NOT NULL,
  `interim_payment` enum('yes','no') NOT NULL,
  `type_of_contract` enum('car insurance','bike insurance','bus insurance','truck insurance') NOT NULL,
  `car_brand` varchar(255) DEFAULT NULL,
  `car_model` varchar(255) DEFAULT NULL,
  `offer_no` int(11) NOT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `post_contract` enum('email','printed') NOT NULL,
  `Comments` varchar(255) DEFAULT NULL,
 PRIMARY KEY (request_no)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `martial_status` enum('married','unmarried','divorced','single','undeclared') NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `type_of_customer` enum('private customer','business customer') NOT NULL,
  `occupation` enum('business owner','employee') NOT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `d_o_b` varchar(255) DEFAULT NULL,
  `liscence_year` varchar(255) DEFAULT NULL,
  `fiscal_code` varchar(255) DEFAULT NULL,
  `identification` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `email`, `phone`, `martial_status`, `address`, `city`, `zipcode`, `type_of_customer`, `occupation`, `business_name`, `date_added`, `d_o_b`, `liscence_year`, `fiscal_code`, `identification`) VALUES
(25, 'Awais', 'Ahmad', 'tayyaba.awais122@gmail.com', '3315469022', 'married', 'House 122, block C1, Nespak society, Lahore', 'Lahore', '54600', 'private customer', 'employee', '', '2020-07-06 13:02:42', '1989-06-22', '2007', 'Backoffice1.xlsx', 'Backoffice2.xlsx'),
(26, 'Yahoo', 'Hotmail', 'awais442@hotmail.com', '0331546906', 'unmarried', 'Italy, TX, USA', 'Italy', '76651', 'private customer', 'employee', '', '2020-07-06 14:06:35', '1999-03-22', '2017', 'Backoffice4.xlsx', 'Backoffice5.xlsx'),
(27, 'ABC', 'Ahmad', 'awais_rafaqat2300@yahoo.com', '3315469065', 'married', 'NESPAK Society, Lahore, Pakistan', 'Lahore', '54600', 'private customer', 'employee', '', '2020-07-06 16:37:57', '1989-06-22', '2007', 'Backoffice7.xlsx', 'Backoffice8.xlsx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
