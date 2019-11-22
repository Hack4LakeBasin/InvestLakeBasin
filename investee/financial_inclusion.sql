-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 01:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financial_inclusion`
--
CREATE DATABASE IF NOT EXISTS `financial_inclusion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `financial_inclusion`;

-- --------------------------------------------------------

--
-- Table structure for table `chosen_investors`
--

CREATE TABLE `chosen_investors` (
  `fisrt_name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `chosen_investors_id` int(11) NOT NULL,
  `interested_investors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `fullname` varchar(200) NOT NULL,
  `id_number` int(20) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `kra_pin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`fullname`, `id_number`, `email_address`, `phone`, `business_name`, `kra_pin`) VALUES
('joseph', 83630, 'njogu@gmail.com', 0, '', '');

--
-- Triggers `details`
--
DELIMITER $$
CREATE TRIGGER `email_login` AFTER INSERT ON `details` FOR EACH ROW BEGIN
INSERT INTO Login (email_address) VALUES (new.email_address);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `funds_provided` bigint(10) NOT NULL,
  `gross_income` bigint(10) NOT NULL,
  `returns` bigint(10) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `funds_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interested_investors`
--

CREATE TABLE `interested_investors` (
  `first_name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `interested_investors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investor_details`
--

CREATE TABLE `investor_details` (
  `full_name` varchar(200) NOT NULL,
  `id_number` int(20) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `organization_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email_address` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL,
  `log_id` int(8) NOT NULL,
  `account_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email_address`, `password`, `log_id`, `account_type`) VALUES
('njogu@gmail.com', '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `records_id` int(11) NOT NULL,
  `intial_input` bigint(20) NOT NULL,
  `output` int(20) NOT NULL,
  `profit/loss` int(20) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `evidence_1` varchar(100) NOT NULL,
  `evidence_2` varchar(100) NOT NULL,
  `evidence_3` varchar(100) NOT NULL,
  `evidence_4` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chosen_investors`
--
ALTER TABLE `chosen_investors`
  ADD PRIMARY KEY (`chosen_investors_id`),
  ADD KEY `fk3` (`interested_investors_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`email_address`) USING BTREE;

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`funds_id`),
  ADD KEY `fk5` (`email_address`);

--
-- Indexes for table `interested_investors`
--
ALTER TABLE `interested_investors`
  ADD PRIMARY KEY (`interested_investors_id`),
  ADD KEY `Foreign_key` (`email_address`);

--
-- Indexes for table `investor_details`
--
ALTER TABLE `investor_details`
  ADD PRIMARY KEY (`email_address`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `fk2` (`email_address`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`records_id`),
  ADD KEY `fk4` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chosen_investors`
--
ALTER TABLE `chosen_investors`
  MODIFY `chosen_investors_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `funds_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interested_investors`
--
ALTER TABLE `interested_investors`
  MODIFY `interested_investors_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `records_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chosen_investors`
--
ALTER TABLE `chosen_investors`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`interested_investors_id`) REFERENCES `interested_investors` (`interested_investors_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `funds`
--
ALTER TABLE `funds`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`email_address`) REFERENCES `details` (`email_address`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `interested_investors`
--
ALTER TABLE `interested_investors`
  ADD CONSTRAINT `Foreign_key` FOREIGN KEY (`email_address`) REFERENCES `details` (`email_address`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`email_address`) REFERENCES `details` (`email_address`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`email_address`) REFERENCES `details` (`email_address`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
