-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 06:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `policedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `character_certificate`
--

CREATE TABLE `character_certificate` (
  `application_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT 0,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `birth_date` date NOT NULL,
  `select_doc` text NOT NULL,
  `idnoof_doc` varchar(12) NOT NULL,
  `present_building` text NOT NULL,
  `present_street` text NOT NULL,
  `present_landmark` text NOT NULL,
  `present_locality` text NOT NULL,
  `present_state` text NOT NULL,
  `present_district` text NOT NULL,
  `present_taluka` text NOT NULL,
  `present_village` text NOT NULL,
  `present_pincode` int(6) NOT NULL,
  `permanent_building` text NOT NULL,
  `permanent_street` text NOT NULL,
  `permanent_landmark` text NOT NULL,
  `permanent_locality` text NOT NULL,
  `permanent_state` text NOT NULL,
  `permanent_disrtict` text NOT NULL,
  `permanent_taluka` text NOT NULL,
  `permanent_village` text NOT NULL,
  `permanent_pincode` int(6) NOT NULL,
  `company_user_designation` text NOT NULL,
  `company_name` text NOT NULL,
  `company_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `character_certificate`
--

INSERT INTO `character_certificate` (`application_id`, `user_id`, `is_approved`, `first_name`, `middle_name`, `last_name`, `birth_date`, `select_doc`, `idnoof_doc`, `present_building`, `present_street`, `present_landmark`, `present_locality`, `present_state`, `present_district`, `present_taluka`, `present_village`, `present_pincode`, `permanent_building`, `permanent_street`, `permanent_landmark`, `permanent_locality`, `permanent_state`, `permanent_disrtict`, `permanent_taluka`, `permanent_village`, `permanent_pincode`, `company_user_designation`, `company_name`, `company_address`) VALUES
(1, 17, 0, 'kartik', 'gorakasha', 'channe', '1995-12-30', 'adharcard', '643175857896', 'samrajya', 'paud road', 'dhumal mill', 'kothrud', 'maharashtra', 'nagar', 'pathardi', 'pune', 414102, 'samrajya', 'paud road', 'dhumal', 'kothrud', 'maharashtra', 'pune', 'pathardi', 'pune', 456789, 'manager', 'ibm', 'vanaj corner'),
(3, 18, 1, 'Mark Benson', 'sssss', 'Benson', '2000-01-01', 'electioncard', '1234567890', 'B', 'Datta DIgambar Colony', 'Warje Naka', 'Pune', 'Maharashtra', 'Pune', 'Haveli', 'Warje', 411052, 'B', 'Datta Digambar Colony', 'Warje', 'Warje Naka', 'Maharahstra ', 'Pune', 'Haveli', 'Warje', 411052, 'Developer', 'Test', 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `files1`
--

CREATE TABLE `files1` (
  `id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `filename` varchar(256) DEFAULT NULL,
  `filepath` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files1`
--

INSERT INTO `files1` (`id`, `application_id`, `filename`, `filepath`) VALUES
(13, 3, '65eb3ab527685_test123.jpg', 'uploads/65eb3ab527685_test123.jpg'),
(14, 3, '65eb3ab528107_nl_no-photo.png', 'uploads/65eb3ab528107_nl_no-photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `name`, `email`, `password`, `code`, `status`) VALUES
(17, 'Channe Kartik', 'kartikchanne741@gmail.com', '$2y$10$6glGdJgK/pb9GBBfQs6EjutW5Dq7gOvs.GXJd7gBzptjJd4tOQ6rm', 0, 'verified'),
(18, 'Mark Benson', 'markbensontest@gmail.com', '$2y$10$ENOXtBSOJGcVRDS5V2AdiOtTV1q/AXLzLBy2HKjS9962EB2o4R/56', 0, 'verified'),
(19, 'Admin', 'admin@pcs.com', '$2y$10$ENOXtBSOJGcVRDS5V2AdiOtTV1q/AXLzLBy2HKjS9962EB2o4R/56', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `character_certificate`
--
ALTER TABLE `character_certificate`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `files1`
--
ALTER TABLE `files1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `character_certificate`
--
ALTER TABLE `character_certificate`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files1`
--
ALTER TABLE `files1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
